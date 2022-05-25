$(window).scroll(function() {
    if ($(this).scrollTop() >= 100){  
       $(".nahoru").addClass('active'); 
       /*if(window.location.pathname == "/kosik" || window.location.pathname == "/dokonceni-objednavky"){
        $(".nahoru #kosik").hide(); 
       }*/
   }else if ($(this).scrollTop() <= 99){  
       $(".nahoru").removeClass('active'); 
    }
    
});


window.addEventListener('load', function(){
  document.getElementById("overlay").style.display = 'none';
})