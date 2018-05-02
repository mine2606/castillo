<!doctype html>

<html lang="en">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">



<head>
</head>

<body> 

        

    <!--
    <div class="row">
        <div class="col">
            <button id="miboton1" type="button" class="btn btn-outline-warning">Uno</button>
            <button id="miboton2" type="button" class="btn btn-outline-warning">Dos</button>
            <button id="miboton3" type="button" class="btn btn-outline-warning">Tres</button>
            <br>
            <br>
            <br>
            
            <div id="micapa">
                <p>Hoy</p>
                <p>Existe riesgo de incendio</P>
                <p>ya mismo estoy en la playa</p>
                <p>Vanesa ya tiene el carnet!!!Bien!!!</p>
            </div>
        </div>

        <div class="col">
            <p class="miestilo" id="mitexto">texto de prueba</p>
            <br>
            
            <img src="imagen/castillo.jpg" height="200px">
            <img src="imagen/castillo2.jpg" height="200px">
        </div>
    </div> -->
    <h1>Listado de personas</h1>
    <p>
        <input type="number" id="numpersonas">
        <button id="miboton" class="btn btn-success">Cargar personas...</button>
    </p>

    <div id="personas">       
    </div>

    
    <div id="plantilla">
        <div class="row usuario">
            <div class="col-md-3 text-center">
                <img src="https://randomuser.me/api/portraits/men/29.jpg">
            </div>
            <div class="col-md-9 text-left">
                <p><b> Julia García </b></p>
                <p>
                    juliagarcia@gmail.com <br>
                    555 254 6898 <br>
                    Valencia <br>
                </p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="appajax.js"></script>

    

</body>
</html>