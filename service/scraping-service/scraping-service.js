$(document).ready(function(){
    
    onInit();

    function onInit() {
        if (new Date().getDate() == 1) {
            getNewsFoundData();
        } 
    }

    //Method to carry out the web scraping of the news found
    function getNewsFoundData() {
        newspaper.forEach(newspaper =>{
            const paperForm = { newspaper: newspaper };
            postFormWithResponse("../../service/scraping-service/scraping-new-data-service.php",
            paperForm, function(response){
                try {
                    const newsFound = JSON.parse(response);
                    newsFound.map(newsFound =>{
                        newsFound.newspaper = newspaper;
                    });
                    dateFilter(newsFound);
                } catch (error) {
                    console.error(error);
                }
            });
        });
    }

    //Method to filter that the date is greater than 2018
    function dateFilter(newsFound){
        let dateNewsFilter = [];
        newsFound.forEach( newData =>{
            const isValidYear = arraysIntersection(newData.date, yearsInForce);
            
            if (isValidYear.length > 0) {
                dateNewsFilter.push(newData);
            }
        });

        keyWordFilter(dateNewsFilter);
    }

    function keyWordFilter(dateNewsFilter) {
         
    	let discriminationWordsFilter = [];
    	dateNewsFilter.forEach(newData =>{
            const isPositive = arraysIntersection(newData.title.toUpperCase(), mainNoDiscriminationWords);
    	    const isValidNew = arraysIntersection(newData.title.toUpperCase(), mainDiscriminationWords);

    	    if (isPositive.length == 0){
    	    	isValidNew.length > 0 ? newsFilter.push(newData) : discriminationWordsFilter.push(newData);
    	    }
    	});

        analysisByPhrases(discriminationWordsFilter);
    }

    function analysisByPhrases(discriminationWordsFilter){
  
        discriminationWordsFilter.forEach(newData =>{
            let phraseFound = searchPhrases(cleanTextByPhrases(newData.title));
            if (phraseFound.length > 0) {
                newsFilter.push(newData);
            }
        });

        finalAnalisisByPhrases(newsFilter);
    }

    function finalAnalisisByPhrases(newsFilterByPhrases){
        newsFilterByPhrases.forEach(newData => {
            const nonDiscriminationPhrasesFound = searchNonDiscriminationPhrases(cleanTextByPhrases(newData.title));
            
            if (nonDiscriminationPhrasesFound.length == 0) {
                newsFinalFilter.push(newData)
            }
        });

        getContentByNew(newsFinalFilter);
    }

    function getContentByNew(newsFilter) {
        newsFilter.forEach(news => {
            const newData = { 
                url: news.link,
                newspaper: news.newspaper
            };
            postFormWithResponse("../../service/scraping-service/scraping-url.php", newData, function(response){
                try {
                    console.log(response);
                } catch (error) {
                    console.log(error);
                }
            });
        });
    }
});