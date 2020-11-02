<?php
$db = mysqli_connect("localhost", "root", "", "plantillas");

$sql = "SELECT * FROM trafficker_pack WHERE id=" . $_GET["id"];
$resultado = mysqli_query($db, $sql);
$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
//die(var_dump($row));
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>001_cabello</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   </head>
   <body>
      <?php if (empty($_GET["id"]) || $row["id"] == NULL) {?>
         <h1>¡Objeto no localizado!</h1>
   <p>
      No se ha localizado la URL solicitada en este servidor.
      Si usted ha introducido la URL manualmente, por favor revise su
      ortografía e inténtelo de nuevo.
   </p>
   <h2>Error 404</h2>


      <?php } else {?>
      <style>
         html,body{
         overflow-x:hidden;
         font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
         }
         @import url(https://fonts.googleapis.com/css?family=Open+Sans);
         .textVideo p:first-child {
         color: rgb(25, 62, 146);
         font-size: 2em;
         line-height: 1;
         margin-top: 1vh;
         font-weight: bold;
         }
         .textVideo p {
         font-size: 1.5em;
         line-height: 1
         }
         .textVideo a {
         font-weight: 700;font-size: 1.5em;display: flex ;align-items: center;justify-content: center;
         }
         .infoEmpresa p{
         color: rgb(89, 94, 97);font-size: 0.75em;line-height:1em;text-align: center;
         }

         .position2 p:first-child{
         font-size: 1.5em;line-height:1em;
         }
         .position2 p{
         font-size: 1em;line-height:1em;margin-right: 20px;
         }
         .position2 ul{
         color: rgb(25, 62, 146);font-size: 2.5em;line-height:1em;
         }
         .position2 a{
         font-weight: 700;font-size: 1.5em;display: flex ;align-items: center;justify-content: center;
         }
         .textImagen p {
         font-weight: 700;line-height: 102%;margin-left: 80px;top: 100px;
         color:white;position:absolute;font-size: 64px;text-align: justify;
         }
         .satisfacion1 p{
         color: rgb(25, 62, 146);font-size: 1.5em;line-height:1em;
         }
         .gris{
         background-color:rgb(229, 229, 229);
         }
         .oferta p{
         font-size: 1.5em;line-height:1em;
         }
         .cajaDia{
         background-color: black;
         display: flex;justify-content: center;
         align-items: center;color:white;
         width: 73px;
         height: 50px;
         overflow:hidden;
         padding:20px;
         -webkit-border-radius: 10px;
         border-radius: 10px;
         font-size: 2em;
         }
         .textoDia{
         display: flex;
         color:black;font-size: 0.75em;
         }
         .cajaHoras{
         background-color: black;
         display: flex;justify-content: center;
         align-items: center;color:white;
         width: 73px;
         height: 50px;
         overflow:hidden;
         padding:20px;
         -webkit-border-radius: 10px;
         border-radius: 10px;
         font-size: 2em;
         }
         .textoHoras{
         display: flex;
         color:black;font-size: 0.75em;
         }
         .cajaMinutos{
         background-color: black;
         display: flex;justify-content: center;
         align-items: center;color:white;
         width: 73px;
         height: 50px;
         overflow:hidden;
         padding:20px;
         -webkit-border-radius: 10px;
         border-radius: 10px;
         font-size: 2em;
         }
         .textoMinutos{
         display: flex;
         color:black;font-size: 0.75em;
         }
         .cajaSegundos{
         background-color: black;
         display: flex;justify-content: center;
         align-items: center;color:white;
         width: 73px;
         height: 50px;
         overflow:hidden;
         padding:20px;
         -webkit-border-radius: 10px;
         border-radius: 10px;
         font-size: 2em;
         }
         .textoSegundos{
         display: flex;
         color:black;font-size: 0.75em;
         }
         .imgProducto2{
         margin-top: -700px;
         }
         .imgCalidad{
         width: 155px;
         height: 73px;
         }
         .imgSatisfacion{
         margin-left: 25vh;
         }
         @media only screen and (min-width: 990px) and (max-width: 1200px) {
         .textImagen p {
         font-weight: 700;line-height: 102%;margin-left: 80px;top: 100px;
         color:white;position:absolute;font-size: 64px;text-align: justify;
         }
         .imgProducto2{
         margin-top: -600px;
         }
         }
         @media only screen and (min-width: 601px) and (max-width: 990px) {
         .position{
         order: -1;
         flex: 1 0 100%;
         flex-wrap:wrap;
         }
         .imgSatisfacion{
         margin-left: 0px;
         }
         .imgProducto2{
         margin-top: -200px;
         margin-left: -535px;
         }
         .textImagen p {
         font-weight: 700;line-height: 102%;margin-left: 6  0px;top: 100px;
         color:white;position:absolute;font-size: 50px;text-align: justify;
         }

         }
         @media only screen and (min-width: 601px) and (max-width: 767px) {
         .textImagen p {
         font-weight: 700;line-height: 102%;margin-left: 6  0px;top: 60px;
         color:white;position:absolute;font-size: 35px;text-align: justify;
         }
         .imgProducto2{
         margin-top: -870px;
         margin-left: 25px;
         }
         }
         @media only screen and (max-width: 600px) {
         .position{
         order: -1;
         flex: 1 0 100%;
         flex-wrap:wrap;
         }
         .imgProducto2 {
         margin-top: -870px;
         margin-left:30px;
         }
         .imgSatisfacion{
         margin-left: 0px;
         }
         .textImagen p {
         font-weight: 700;line-height: 102%;margin-left:25px;top: 45px;
         color:white;position:absolute;font-size: 40px;text-align: justify;
         }
         }
         @media only screen and (max-width: 500px) {
         .textImagen p {
         font-weight: 700;line-height: 102%;margin-left:25px;top: 45px;
         color:white;position:absolute;font-size: 35px;text-align: justify;
         }
         .imgProducto2 {
         margin-top: -100vh;
         margin-left: 3vh;
         }
         }
         @media screen and (min-width: 401px) and (max-width: 480px) {
         .textImagen p {
         font-weight: 700;line-height: 102%;margin-left:25px;top: 45px;
         color:white;position:absolute;font-size: 31px;text-align: justify;
         }
         .imgProducto2 {
         margin-top: -65vh;
         margin-left: -2vh;
         }
         }
         @media only screen and (max-width: 400px) {
         .position{
         order: -1;
         flex: 1 0 100%;
         flex-wrap:wrap;
         }
         .imgProducto2 {
         margin-top: -75vh;
         margin-left: -2vh;
         }
         .imgSatisfacion{
         margin-left: 0px;
         }
         .textImagen p {
         font-weight: 700;line-height: 102%;margin-left:25px;top: 45px;
         color:white;position:absolute;font-size: 25px;text-align: justify;
         }
         }
      </style>
      <div class="container">
         <div class="row textImagen">
            <div class="col-sm-12 d-flex justify-content-center text-center">
              <?php if (!empty($_GET["id"])) {?>
               <img src="img/packs/<?php echo $_GET["id"] ?>/header.jpg" style="position: relative;object-fit:cover;max-height: 350px;"  class="img-fluid w-100">
               <?php }?>
            </div>
            <?php if (!empty($row["text_header"])) {?>
            <p ><?php echo ($row["text_header"]) ?></p>
            <?php }?>
         </div>
         <br>
         <div class="row d-flex" >
            <div class="  col-lg-7 " >
               <div class="embed-responsive embed-responsive-21by9" >
                <?php if (!empty($row["first_description"])) {?>
                  <iframe  class="embed-responsive-item" src="<?php echo htmlentities($row["video_url"]) ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen    >
                  </iframe>
                  <?php }?>
               </div>
            </div>
            <br>
            <div class=" col-lg-5 justify-content-center text-center" >
               <div class="textVideo">
                <?php if (!empty($row["first_description"])) {?>
                  <p > <?php echo htmlentities($row["first_description"]) ?>
                  </p>
                  <?php }?>
                  <?php if (!empty($row["second_description"])) {?>
                  <p><?php echo htmlentities($row["second_description"]) ?></p>
                  <?php }?>
                  <a class="btn btn-success"  href="#" role="button" >¡Comprar!</a>
               </div>
            </div>
         </div>
         <hr>
         <div class="row" >
            <div  class=" col-lg-7 justify-content-center  position2 " >
                <?php if (!empty($row["product_description"])) {?>
                <?php echo ($row["product_description"]) ?>
                <?php }?>
               <a class="btn btn-success"  href="#" role="button" >¡Lo quiero ya!</a>
            </div>
            <div class="  col-lg-5 justify-content-center  position    "  >
                <?php if (!empty($row["id"])) {?>
               <img class="img-fluid imgProducto" src="img/packs/<?php echo $_GET["id"] ?>/product.jpg" alt="" height="auto" / >
               <?php }?>
               <?php if ($row["picture_pack"] == 1) {?>
               <img class="img-fluid imgProducto2" src="https://us-ms.gr-cdn.com/getresponse-wCxnR/photos/cdc77ef4-2424-4e3a-83f1-4b2fc9a0e270.png" alt="" width="170" height="144"/>
            <?php }?>
               <div>
               </div>
            </div>
         </div>
         <hr>
         <div class="row" >
            <div class=" d-flex col-lg-3 offset-lg-1 justify-content-center " >
               <img class="img-fluid imgSatisfacion" src="https://us-ms.gr-cdn.com/getresponse-wCxnR/photos/fda38676-563f-4ccd-af08-7d601fd2be94.png" alt=""  width="213" height="143">
            </div>
            <br>
            <div class=" d-flex col-lg-6 offset-lg-1 justify-content-center text-center pt-5" >
               <div class="satisfacion1">
                  <p><b>¡SATISFACCIÓN 100% GARANTIZADA<br>
                     DURANTE 90 DÍAS!</b>
                  </p>
               </div>
            </div>
         </div>
         <br>
         <div class="row d-flex gris" >
            <div class=" d-flex col-lg-6  justify-content-center oferta  pt-5" >
               <p><b>¡No pierdas tiempo! Esta oferta termina en:</b></p>
            </div>
            <div class="d-flex  col-lg-4  justify-content-center pt-3 ">
               <div class="flex-column  justify-content-center mr-3">
                  <p id="days" name="days" class="cajaDia ">00</p>
                  <p class="textoDia ml-4" >DÍAS</p>
               </div>
               <div class="flex-column justify-content-center mr-3">
                  <p id="hours" name="hours" class="cajaHoras">00</p>
                  <p class="textoHoras ml-3">HORAS</p>
               </div>
               <div class="flex-column justify-content-center mr-3">
                  <p id="minutes" name="minutes"class="cajaMinutos">00</p>
                  <p class="textoMinutos ml-3">MINUTOS</p>
               </div>
               <div class="flex-column justify-content-center">
                  <p id="seconds" name="seconds" class="cajaSegundos">00</p>
                  <p class="textoSegundos ml-2">SEGUNDOS</p>
               </div>
            </div>
            <br>
         </div>
      </div>
      </div>
      <div class="row" >
         <div class=" d-flex col-lg-3 offset-lg-3 justify-content-center " >
            <img class="img-fluid" src="https://us-ms.gr-cdn.com/getresponse-wCxnR/photos/1db81f16-7aa5-4020-b91d-31c77c409df1.png" alt="" width="155" height="73">
         </div>
         <div class=" d-flex col-lg-3  justify-content-center mt-3" >
            <div class="infoEmpresa">
               <p>ACOMDEPER S.A.  I  Teléfono: (+34) 652790629<br>
                  Barrio Las Veneras, 7A 39478 Arce-Piélagos<br>
                  Cantabria - España
               </p>
            </div>
         </div>
      </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php }?>
   </body>
</html>
<script>
   $( document ).ready( function() {
      var fecha = new Date();
       var dia = fecha.getDate() + 1;
       var mes = fecha.getMonth()+1;
       var anio = fecha.getFullYear();

       var fechaRestar = new Date(""+mes+"/"+dia+"/"+anio + " "+"00:00:00");

       /****************************************************************/

       const MILLISECONDS_OF_A_SECOND = 1000;
       const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
       const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
       const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24;

   /********************************************************/
   function updateCountdown() {
       // Calcs
       const NOW = new Date()

       const DURATION = fechaRestar - NOW;

       const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
       const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
       const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
       const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);


       // Render

        $('#days').text(REMAINING_DAYS);


        $('#hours').text(REMAINING_HOURS);


       if(REMAINING_SECONDS<10){
        $('#seconds').text("0"+REMAINING_SECONDS);
       }else{
        $('#seconds').text(REMAINING_SECONDS);
       }
       if(REMAINING_MINUTES<10){
        $('#minutes').text("0"+REMAINING_MINUTES);
       }else{
        $('#minutes').text(REMAINING_MINUTES);
       }
       if(REMAINING_SECONDS ==0 && REMAINING_MINUTES==0 && REMAINING_HOURS==0 &&  REMAINING_DAYS==0  ){
        //alert(fechaRestar);

       fechaRestar.setDate(fechaRestar.getDate() + 1);
       }

   }
   updateCountdown();
   // Refresh every second
   setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);

   /*******************************************************/
   } )
</script>