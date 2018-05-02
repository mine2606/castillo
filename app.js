
$( document ).ready(function(){ //Esto es obliglaotorio porque sino no va

    $("#miboton1").on("click", function() {
        $("#miboton3").removeClass().addClass("btn btn-success");
        $("#miboton3").text("Activado");
        $("#miboton3").on("click", function() {
            $("img").hide();
        });

    });
    
    $("#miboton2").on("click", function() {
        $("#miboton3").removeClass().addClass("btn btn-danger");
        $("#miboton3").text("Desactivado");
        $("#miboton3").off("click");        
        

    });
    












    /*
    $("img").on("mousedown",function () {
        $(this).height(200);
        
    })

    $("img").on("mouseup mousemove",function () {
        $(this).height(300);
    })
*/
   /* 
    $( "button" ).click(function() {
        //$("#mitexto").text("Has pinchado en el botón");
       // $( "#mitexto" ).css("color", "red");
       //$("img").height("300px"); 
       //$("img").toggle();  
       
        //$("#mitexto").toggleClass("miestilo");

        $("#micapa").css(

                {
                    "font-size" : "25px",
                    "background-color" : "#ffc107",
                    "color" : "white"
                }
        );
        
        $(this).removeClass("btn-outline-warning").addClass("btn-warning");
    });
    
    
    $( "#miboton1" ).mouseover(function(){
        $("#micapa").append("<p>Nuevo texto</p>");
    });

    $( "#miboton2" ).mouseover(function(){
        $("#micapa > p:last-child").remove();
            
        
    });

    $( "#miboton3" ).click(function(){
        console.log ($ ("#micapa > p:first-child").text());
       if ( $("#micapa > p:first-child").text() == "Hoy") {
            $( "#micapa > p:first-child" ).remove();

       }
            
        
    });*/

    
    
});

