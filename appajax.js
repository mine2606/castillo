
$( document ).ready(function(){ //Esto es obliglaotorio porque sino no va

    $("#plantilla").hide();
    
    $("#miboton").on("click", function() {

        var aux = $("#numpersonas").val();

        

        $.ajax({
            url: 'https://randomuser.me/api/?results= '+ aux,
            dataType: 'json',
            success: function(datos) {
                $("#personas").empty();
                $.each(datos.results, function(k, v){
                   
                    var plantilla = $("#plantilla").clone();
                    plantilla.find(".col-md-9 > p > b").text(v.name.first +" "+ v.name.last);
                    plantilla.find(".col-md-3 > img").attr('src', v.picture.large);
                    plantilla.find(".col-md-9 > p:nth-child(2)").html(v.email +"<br>"+v.phone +"<br>"+ v.location.city);                                        
                    $("#personas").append(plantilla);
                    plantilla.show();

                  
                });               
                
                
            }

           
          });
        
        //$("#personas").text("Hola");
       
       
    });
    
});

