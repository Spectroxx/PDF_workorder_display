var ul = $('ul.pdf');
var count = 20;
for(var i=1; i<=count; i++){
  ul.append('<iframe src="resources/files/'+i+'.pdf#zoom=125,0,160&toolbar=0&scrollbar=0" type="application/pdf" width="688.13px" height="864px"<iframe/>')  
} 