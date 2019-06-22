function searchPhrases(text){
    let phraseFound = [];
    discriminationPhrases.forEach(phrase =>{
        const indexFound = text.search(phrase);
        
        if (indexFound != -1) {
            phraseFound.push(phrase);
        }
    });

    return phraseFound;
}

function searchNonDiscriminationPhrases(text){    
    let nonDiscriminationPhraseFound = [];
    nonDiscriminationPhrases.forEach(phrase =>{
        const indexFound = text.search(phrase);
     
        if (indexFound != -1) {
            nonDiscriminationPhraseFound.push(phrase);            
        }
    });

    return nonDiscriminationPhraseFound;
}

function arraysIntersection(text, compareArray){
    const textArray = text.split(" ", text.length);
    return _.intersection(cleanText(textArray), compareArray);
  }

  function cleanText(text){
      let cleanArray = [];
      text.map(word =>{
          f1 = word.replace(/,/g, "");
          f2 = f1.replace(/:/g, "");
          f3 = f2.replace(/;/g, "");
          f4 = f3.replace(/”/g, "");
          f5 = f4.replace(/"/g, "");
          f6 = f5.replace(/{/g, "");
          f7 = f6.replace(/}/g, "");
          f8 = f7.replace(/“/g, "");
          f9 = f8.replace(/’/g, "");
          f10 = f9.replace(/‘/g, "");

          cleanArray.push(f10);
      });
      
      return cleanArray;
  }

  function buildRegex(text){
      const keyword = text.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
      return new RegExp(keyword, 'ig');
  }

  function cleanTextByPhrases(phrase){

    f1 = phrase.replace(/,/g, "");
    f2 = f1.replace(/:/g, "");
    f3 = f2.replace(/;/g, "");
    f4 = f3.replace(/”/g, "");
    f5 = f4.replace(/"/g, "");
    f6 = f5.replace(/{/g, "");
    f7 = f6.replace(/}/g, "");
    f8 = f7.replace(/“/g, "");
    f9 = f8.replace(/’/g, "");
    f10 = f9.replace(/‘/g, "");

    return f10.toUpperCase();
  }
