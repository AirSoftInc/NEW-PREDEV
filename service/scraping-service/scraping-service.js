$(document).ready(function(){
    
    onInit();

    function onInit() {
        getNewsFoundData();
    }

    //Method to carry out the web scraping of the news found
    function getNewsFoundData() {
        newspaper.forEach(newspaper =>{
            const paperForm = { newspaper: newspaper };
            postFormWithResponse("../../service/scraping-service/scraping-new-data-service.php",
            paperForm, function(response){
                try {
                    const newsFound = JSON.parse(response);
                    dateFilter(newsFound)
                } catch (error) {
                    console.log(response);
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
        
        let newsFilterByPhrases = [];
        discriminationWordsFilter.forEach(newData =>{
            let phraseFound = searchPhrases(newData.title);

            phraseFound.length > 0 ? newsFilter.push(newData) : newsFilterByPhrases.push(newData);
        });

        finalAnalisisByPhrases(newsFilter);
    }

    function finalAnalisisByPhrases(newsFilterByPhrases){
        
        let finalNewsFilterByPhrases = [];
        newsFilterByPhrases.forEach(newData => {
            let nonDiscriminationPhrasesFound = searchNonDiscriminationPhrases(newData.title);

            nonDiscriminationPhrasesFound.length > 0 ? finalNewsFilterByPhrases.push(newData) : newsFilter.push(newData);
        });

        console.log(newsFilter);
        
    }
});