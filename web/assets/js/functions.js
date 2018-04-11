$(document).ready(function(){
  $("div.filemanager").on('click',function(e){
    e.preventDefault();

    var targetElement = e.target;

    var elementLi;

    if(targetElement.nodeName == 'SPAN') {
      elementLi = $(targetElement).parent();
      el_href = elementLi.attr('href');
      console.log(el_href);
    }
    else if (targetElement.nodeName == 'A') {
      elementLi = targetElement.parentNode;
      console.log(elementLi);
    }

    elementLi.style.backgroundColor = "#ddd";

  })

})
