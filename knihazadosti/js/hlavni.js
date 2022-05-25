$(document).on('click', '.prihlaseni button', function(){   

    var vstup = $('.prihlaseni input[name="vstup"]').val();

    $.post( "/skripty", {mode: "prihlaseni", vstup: vstup})
            .done(function( data ) {
             if(data != "chyba"){
                window.location.href="tym"; 
             }else{
                $('.prihlaseni input[name="vstup"]').css("border", "solid 2px red");
                $('.prihlaseni input[name="vstup"]').val("");
             }
            });
});

$(document).on('click', '.prihlaseni input', function(){   
    $('.prihlaseni input[name="vstup"]').css("border", "solid 2px white");   
    
});

function odhlasit(){
    $.post( "/skripty", {mode: "odhlasit"})
    window.location.href="/"; 
}




