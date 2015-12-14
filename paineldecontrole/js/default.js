$(function(){
    
    var boxImg = $("#imagem-noticia-carregar");
    var imgCar = $("#imagem-carregada");
    
    $(boxImg).click(function(){
        
        $(imgCar).click();
        
    });
    
    $(imgCar).change(function(){
        
        document.getElementById("imagem-noticia-carregar").value = document.getElementById("imagem-carregada").value;

    });

    
    // link para as secoes
    
    var linkPublicar = $("#publicar-noticia-menu");
    var linkTodasNot = $("#todas-noticias-menu");
    var linkRascunho = $("#rascunhos-menu");
    var linkLixeira = $("#lixeira-menu");
    
    //secoes das abas
    
    var publicarNoticia = $("#publicar-noticia");
    var todasasNoticias = $("#todas-as-noticias");
    
    $(todasasNoticias).hide();
    
    $(publicarNoticia).click(function(){
        
        alert("first");
        
        $(todasasNoticias).hide();
        $(publicarNoticia).slideDown(500);

    });
    
    $(todasasNoticias).click(function(){
        
        alert("asdfadsf");

        $(publicarNoticia).slideUp(300, function(){
            
            $(publicarNoticia).hide();
            
        });
        
        $(todasasNoticias).slideDown(500);
        
    });

});