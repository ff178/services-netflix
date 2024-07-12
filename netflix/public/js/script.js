$(function(){
    $(".choose").click(function(){
        if($('[name="serie"]').is(':checked')) { 
            $("#eleccion").css("display","none");
            $("#modificar").css("display","block");
        }else if($('[name="pelicula"]').is(':checked')){
            $("#eleccion").css("display","none");
            $("#modificarP").css("display","block");
        }
    });

    $(".panel").click(function(){
        if($('[name="nueva"]').is(':checked')) { 
            $("#modificar").css("display","none");
            $("#datosSerie").css("display","block");
        }else if($('[name="modificar"]').is(':checked')){
            $("#modificar").css("display","none");
            $("#eleccionSerie").css("display","block");
        }
    });

    $(".panel").click(function(){
        if($('[name="nuevaP"]').is(':checked')) { 
            $("#modificarP").css("display","none");
            $("#datosPeli").css("display","block");
        }else if($('[name="modificarP"]').is(':checked')){
            $("#modificarP").css("display","none");
            $("#eleccionPelicula").css("display","block");
        }
    });

    $("#datosSerie .mitad #addActor").click(function(){
        $("#datosSerie .mitad:first-child").append('<div class="items"><input type="text" placeholder="Actor"></div>');
    });

    $("#datosPeli .mitad .items #addActor2").click(function(){
        $("#datosPeli .mitad:first-child").append('<div class="items"><input type="text" placeholder="Actor"></div>');
    });

    $(".menuInfo .menuInfoTxt #infoGralA").click(function(){
        $("#episodios").css("display","none");
        $("#episodiosA").css("border-bottom","none");
        $("#infoGralA").css("border-bottom","2px solid #E10712");
        $("#infoGral").css("display","block");
        $("#similares").css("display","none");
        $("#similaresA").css("border-bottom","none");
        $("#detalles").css("display","none");
        $("#detallesA").css("border-bottom","none");
    });

    $(".menuInfo .menuInfoTxt #episodiosA").click(function(){
        $("#episodios").css("display","block");
        $("#episodiosA").css("border-bottom","2px solid #E10712");
        $("#infoGralA").css("border-bottom","none");
        $("#infoGral").css("display","none");
        $("#similares").css("display","none");
        $("#similaresA").css("border-bottom","none");
        $("#detalles").css("display","none");
        $("#detallesA").css("border-bottom","none");
    });

    $(".menuInfo .menuInfoTxt #similaresA").click(function(){
        $("#similares").css("display","block");
        $("#similaresA").css("border-bottom","2px solid #E10712");
        $("#infoGralA").css("border-bottom","none");
        $("#infoGral").css("display","none");
        $("#episodios").css("display","none");
        $("#episodiosA").css("border-bottom","none");
        $("#detalles").css("display","none");
        $("#detallesA").css("border-bottom","none");
    });

    $(".menuInfo .menuInfoTxt #detallesA").click(function(){
        $("#detalles").css("display","block");
        $("#detallesA").css("border-bottom","2px solid #E10712");
        $("#infoGralA").css("border-bottom","none");
        $("#infoGral").css("display","none");
        $("#episodios").css("display","none");
        $("#episodiosA").css("border-bottom","none");
        $("#similares").css("display","none");
        $("#similaresA").css("border-bottom","none");
    });



    $(".menuInfo .menuInfoTxt #infoGralP").click(function(){
        $("#infoGralP").css("border-bottom","2px solid #E10712");
        $("#infoGral").css("display","block");
        $("#similares").css("display","none");
        $("#similaresP").css("border-bottom","none");
        $("#detalles").css("display","none");
        $("#detallesP").css("border-bottom","none");
    });

    $(".menuInfo .menuInfoTxt #similaresP").click(function(){
        $("#similares").css("display","block");
        $("#similaresP").css("border-bottom","2px solid #E10712");
        $("#infoGralP").css("border-bottom","none");
        $("#infoGral").css("display","none");
        $("#detalles").css("display","none");
        $("#detallesP").css("border-bottom","none");
    });

    $(".menuInfo .menuInfoTxt #detallesP").click(function(){
        $("#detalles").css("display","block");
        $("#detallesP").css("border-bottom","2px solid #E10712");
        $("#infoGralP").css("border-bottom","none");
        $("#infoGral").css("display","none");
        $("#similares").css("display","none");
        $("#similaresP").css("border-bottom","none");
    });


    var height = $(window).height();
    $(".fondo").height(height-72);

    


});


function validate(field) {

    if (field == null || field == "") {        
        return false;
    }

}
