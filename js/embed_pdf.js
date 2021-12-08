try{
  var ul = $('ul.pdf-embed');
  var count = 20;
  for(var i=1; i<=count; i++){
    ul.append('<embed src="resources/files/'+i+'.pdf#zoom=125,0,160&toolbar=0&scrollbar=0" type="application/pdf" width="18%" height="40%"<embed/>');  
  } 
}
catch(err){
  for(var i=1; i<=count; i++){
    throw new Error('Error loading pdf file: '+i+'.pdf');
    console.log(err);
  }
}

