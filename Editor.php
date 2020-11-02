<?php
$row = [""];
$option = "";
if (empty($_GET["id"])) {
   $option = "alta";
   $boton = "Grabar información";
} else {
   $option = "modificar";
   $boton = "Modificar información";
}
if (empty($_GET["alta"])) {
   $alta = 0;
} else {
   $alta = $_GET["alta"];
}
if (empty($_GET["modificar"])) {
   $modifies = 0;
} else {
   $modifies = $_GET["modificar"];
}

$db = mysqli_connect("localhost", "root", "", "plantillas");
if ($option == "modificar") {
   $sql = "SELECT * FROM trafficker_pack WHERE id=" . $_GET["id"];
   $resultado = mysqli_query($db, $sql);
   $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
   //die(var_dump($row));
}

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
      <style>
         html,body{
         overflow-x:hidden;
         font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
         }
         @import url(https://fonts.googleapis.com/css?family=Open+Sans);
         .textVideo textarea:first-child {
         color: rgb(25, 62, 146);
         font-size: 2em;
         line-height: 1;
         margin-top: 1vh;
         font-weight: bold;
         height: 3em;
         width: 14em;
         }
         .textVideo textarea {
         font-size: 1.5em;
         line-height: 1;
         height: 4em;
         width: 18em;
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
         .textImagen textarea {
         font-weight: 700;line-height: 102%;margin-left: 80px;top: 100px;
         color:white;position:absolute;font-size: 64px;text-align: justify;
         height: 3em;
         width: 15em;
         }
         .BotonImagen1 {
         margin-left: 750px;top: 10px;position:absolute;
         }
         .BotonImagen2 {
         margin-left: -215px;top: 10px;position:absolute;
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
         .textImagen textarea {
         font-weight: 700;line-height: 102%;margin-left: 80px;top: 100px;
         color:white;position:absolute;font-size: 64px;text-align: justify;
         height: 3em;
         width: 13em;
         }
         .BotonImagen1 {
         margin-left: 580px;top: 10px;position:absolute;
         }
         .BotonImagen2 {
         margin-left: -170px;top: 10px;position:absolute;
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
         .BotonImagen1 {
         margin-left: 320px;top: 10px;position:absolute;
         }
         .BotonImagen2 {
         margin-left: -80px;top: 10px;position:absolute;
         }
         .imgSatisfacion{
         margin-left: 0px;
         }
         .imgProducto2{
         margin-top: -200px;
         margin-left: -535px;
         }
         .textImagen textarea {
         font-weight: 700;line-height: 102%;margin-left: 6  0px;top: 80px;
         color:white;position:absolute;font-size: 50px;text-align: justify;
         height: 3em;
         width: 12em;
         }
         }
         @media only screen and (min-width: 601px) and (max-width: 767px) {
         .textImagen textarea {
         font-weight: 700;line-height: 102%;margin-left: 6  0px;top: 60px;
         color:white;position:absolute;font-size: 35px;text-align: justify;
         height: 3em;
         width: 12em;
         }
         .BotonImagen1 {
         margin-left: 150px;top: 10px;position:absolute;
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
         .BotonImagen1 {
         margin-left: 150px;top: 10px;position:absolute;
         }
         .imgProducto2 {
         margin-top: -870px;
         margin-left:30px;
         }
         .imgSatisfacion{
         margin-left: 0px;
         }
         .textImagen textarea {
         font-weight: 700;line-height: 102%;margin-left:25px;top: 45px;
         color:white;position:absolute;font-size: 40px;text-align: justify;
         height: 3em;
         width: 12em;
         }
         }
         @media only screen and (max-width: 500px) {
         .textImagen textarea {
         font-weight: 700;line-height: 102%;margin-left:25px;top: 45px;
         color:white;position:absolute;font-size: 35px;text-align: justify;
         height: 3em;
         width: 12em;
         }
         .BotonImagen1 {
         margin-left: 100px;top: 10px;position:absolute;
         }
         .imgProducto2 {
         margin-top: -100vh;
         margin-left: 3vh;
         }
         }
         @media screen and (min-width: 401px) and (max-width: 480px) {
         .textImagen textarea {
         font-weight: 700;line-height: 102%;margin-left:25px;top: 45px;
         color:white;position:absolute;font-size: 31px;text-align: justify;
         height: 3em;
         width: 12em;
         }
         .imgProducto2 {
         margin-top: -65vh;
         margin-left: -2vh;
         }
         .BotonImagen1 {
         margin-left: 30px;top: 10px;position:absolute;
         }
         .BotonImagen2 {
         margin-left: -130px;top: 10px;position:absolute;
         }
         }
         @media only screen and (max-width: 400px) {
         .position{
         order: -1;
         flex: 1 0 100%;
         flex-wrap:wrap;
         }
         .BotonImagen1 {
         margin-left: 5px;top: 10px;position:absolute;
         }
         .BotonImagen2      {
         margin-left: -145px;top: 10px;position:absolute;
         }
         .imgProducto2 {
         margin-top: -75vh;
         margin-left: -2vh;
         }
         .imgSatisfacion{
         margin-left: 0px;
         }
         .textImagen textarea {
         font-weight: 700;line-height: 102%;margin-left:25px;top: 45px;
         color:white;position:absolute;font-size: 25px;text-align: justify;
         height: 3em;
         width: 12em;
         }
         }
      </style>
      <?php if (empty($GET["id"])) {?>
      <form action="action_page.php?id=<?php echo $_GET["id"] ?>" method="post" id="formulario" name="formulario" enctype="multipart/form-data">
         <?php } else {?>
      <form action="action_page.php" method="post" id="formulario" name="formulario" enctype="multipart/form-data">
         <?php }?>
         <div class="container">
            <input type="hidden" id="option" name="option" value="<?php echo $option ?>"/>
            <input type="hidden" id="alta" name="alta" value="<?php echo $alta ?>"/>
            <input type="hidden" id="modifies" name="modifies" value="<?php echo $modifies ?>"/>
            <input type="hidden" name="checkPressed" id="checkPressed"  value="0"/>
            <div class="row textImagen">
               <div class="col-sm-12 d-flex justify-content-center text-center">
                  <?php if (empty($_GET["id"])) {?>
                  <img id="imagen1" name="imagen1" src="Imagen2.jpg" style="position: relative;object-fit:cover;height: 300px;"  class="img-fluid w-100">
                  <?php } else {?>
                  <img id="imagen1" name="imagen1" src="img/packs/<?php echo $_GET["id"] ?>/header.jpg" style="position: relative;object-fit:cover;height: 300px;"  class="img-fluid w-100">
                  <?php }?>
               </div>
               <input class="BotonImagen1" name="file-input" id="file-input" type="file" />
               <!--<p >No más puntas abiertas,<br>¡no más caída!</p>-->
               <?php if (empty($row["text_header"])) {?>
               <textarea id="textHeader" name="textHeader"style=" background-color: transparent;display:none; " required >Inserte texto</textarea>
               <?php } else {?>
               <textarea id="textHeader" name="textHeader"style=" background-color: transparent; " required ><?php echo htmlentities($row["text_header"]) ?></textarea>
               <?php }?>
            </div>
            <br>
            <div class="row d-flex" >
               <div class="  col-lg-7 " >
                  <div class="embed-responsive embed-responsive-21by9" >
                     <?php if (empty($row["video_url"])) {?>
                     <iframe id="iframe" name="iframe" class="embed-responsive-item" src="ImagenVideo2.jpg"   frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  ">
                     </iframe>
                     <?php } else {?>
                     <iframe id="iframe" name="iframe" class="embed-responsive-item" src="<?php echo htmlentities($row["video_url"]) ?>"   frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  ">
                     </iframe>
                     <?php }?>
                  </div>
                  </br>
                  <?php if (empty($row["video_url"])) {?>
                  <input  type="text" id="urlVideo" name="urlVideo" class="form-control" placeholder="Introduzca URL video" required>
                  <?php } else {?>
                  <input  type="text" id="urlVideo" name="urlVideo" class="form-control" value="<?php echo htmlentities($row["video_url"]) ?>"placeholder="Introduzca URL video" required>
                  <?php }?>
               </div>
               <br>
               <div class=" col-lg-5 justify-content-center text-center" >
                  <div class="textVideo">
                     <?php if (empty($row["first_description"])) {?>
                     <textarea id="firstDescription" name="firstDescription" style="background-color: transparent;border:none;overflow:hidden" required>Pulse aqui para insertar texto.
                     </textarea>
                     <?php } else {?>
                     <textarea id="firstDescription" name="firstDescription" style="background-color: transparent;border:none;overflow:hidden" required><?php echo htmlentities($row["first_description"]) ?>.</textarea>
                     <?php }?>
                     <?php if (empty($row["second_description"])) {?>
                     <textarea id="secondDescription" name="secondDescription" style=" background-color: transparent;border:none;overflow:hidden " required>Pulse aquí para insertar texto</textarea>
                     <?php } else {?>
                     <textarea id="secondDescription" name="secondDescription" style=" background-color: transparent;border:none;overflow:hidden " required><?php echo htmlentities($row["second_description"]) ?>.</textarea>
                     <?php }?>
                     <a class="btn btn-success" id="send" name="send" href="#" role="button" >¡Comprar!</a>
                  </div>
               </div>
            </div>
            <hr>
            <div class="row" >
               <div  class=" col-lg-7 justify-content-center  position2 " >
                  <!--<textarea name="editorPrueba"></textarea>-->
                  <input type="hidden" id="productDescription" name="productDescription" >
                  <div id="introduction" name="introduction">
                     <?php if (empty($row["product_description"])) {?>
                     <p>Describa las ventajas del pack.</p>
                     <ul>
                        <li>Nombre Producto 1 </li>
                        <li>Nombre Producto 2</li>
                        <li>Nombre Produco 3</li>
                     </ul>
                     <p><b>Producto1</b><br>Descripción de las ventajas de cada producto</p>
                  </div>
                  <?php } else {?>
                  <?php echo ($row["product_description"]) ?>
               </div>
               <?php }?>
               </br>
               <a class="btn btn-success"  href="#" role="button" >¡Lo quiero ya!</a>
            </div>
            <div class="  col-lg-5 justify-content-center  position    "  >
               <?php if (empty($_GET["id"])) {?>
               <img class="img-fluid imgProducto" id="imagen2" name="imagen2" src="Imagen2Vacia.jpg" alt="" height="auto" / >
               <img id="imagenPack" name="imagenPack" class="img-fluid imgProducto2" src="https://us-ms.gr-cdn.com/getresponse-wCxnR/photos/cdc77ef4-2424-4e3a-83f1-4b2fc9a0e270.png" alt="" width="170" height="144" style="visibility: hidden"/>
               <input id="checkPack" name="checkPack" type="checkbox"   style="visibility: hidden"> <label id="labelPack" name="labelPack" for="cbox2" style="visibility: hidden;">Activar pack</label></input>
               <input class="BotonImagen2" name="file-input2" id="file-input2" type="file" />
               <?php } else {?>
               <img class="img-fluid imgProducto" id="imagen2" name="imagen2" src="img/packs/<?php echo $_GET["id"] ?>/product.jpg" alt="" height="auto" / >
               <?php if ($row["packImagen"] == 1) {?>
               <img id="imagenPack" name="imagenPack" class="img-fluid imgProducto2" src="https://us-ms.gr-cdn.com/getresponse-wCxnR/photos/cdc77ef4-2424-4e3a-83f1-4b2fc9a0e270.png" alt="" width="170" height="144" style="visibility: visible" />
               <input id="checkPack" name="checkPack" type="checkbox"   checked=""> <label id="labelPack" name="labelPack"  >Activar pack</label></input>
               <?php } else {?>
               <img id="imagenPack" name="imagenPack" class="img-fluid imgProducto2" src="https://us-ms.gr-cdn.com/getresponse-wCxnR/photos/cdc77ef4-2424-4e3a-83f1-4b2fc9a0e270.png" alt="" width="170" height="144" style="visibility: hidden" />
               <input id="checkPack" name="checkPack" type="checkbox"> <label id="labelPack" name="labelPack"  >Activar pack</label></input>
               <?php }?>
               <input class="BotonImagen2" name="file-input2" id="file-input2" type="file" />
               <?php }?>
            </div>
         </div>
         <hr>
      </form>
      <div class="row">
         <input type="submit" id="enviar" name="enviar" class="btn btn-success" value="<?php echo $boton ?>">
      </div>
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
      <!--<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>-->
      <!--<script src="./ckeditor/ckeditor.js"></script>-->
      <script src="https://cdn.ckeditor.com/4.15.0/standard-all/ckeditor.js"></script>
   </body>
</html>
<script>
   $( document ).ready( function() {

      $('#checkPack').change(function() {
        if(this.checked) {
            $("#imagenPack").css("visibility", "visible");
            $("#checkPressed").val(1);
        }else{
         $("#imagenPack").css("visibility", "hidden");
         $("#checkPressed").val(0);
        }

    });
      if($("#alta").val()==1){
         alert("Alta realizada correctamente");
      }
      if($("#modifies").val()==1){
         alert("Modificación realizada correctamente");
      }
      $("#formulario").submit(function(event){
      var value = CKEDITOR.instances['introduction'].getData()
       $("#productDescription").val(value);
       var thisSrc1 = $("#imagen1").attr('src');
       var thisSrc2 = $("#imagen2").attr('src');
       if(thisSrc1=="Imagen2.jpg"){
         alert("Debes de cargar la imagen del header");
         event.preventDefault();
       }
       if(thisSrc2=="Imagen2Vacia.jpg"){
         alert("Debes de cargar la imagen del producto");
         event.preventDefault();
       }

      });

    var introduction = document.getElementById('introduction');
    introduction.setAttribute('contenteditable', true);

    CKEDITOR.inline('introduction', {
      // Allow some non-standard markup that we used in the introduction.
      extraAllowedContent: 'a(documentation);abbr[title];code',
      removePlugins: 'stylescombo',
      extraPlugins: 'sourcedialog',
      // Show toolbar on startup (optional).
      startupFocus: true
    });

       $("#urlVideo").blur(function(){
         var url_Video=$("#urlVideo").val();
         var cadena="https://vimeo.com/";
         var cadena1="http://vimeo.com/";

         if(url_Video.includes(cadena) || url_Video.includes(cadena1)){
            //alert(url_Video);
            var split_Video=url_Video.split("/");
            var codigo =split_Video[3];
            var cadeResul="https://player.vimeo.com/video/"+codigo+"?embedparameter=value";
            $('#iframe').attr("src",cadeResul);
            $('#urlVideo').val(cadeResul);
         }else{
            $('#iframe').attr("src",url_Video);
            $('#urlVideo').val(url_Video);
         }

   });


       $('#send').click(function() {
      var value = CKEDITOR.instances['editorPrueba'].getData()
       //alert(value);
      });

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
    $('#file-input').change(function(e) {
      addImage(e);
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;

      if (!file.type.match(imageType))
       return;

      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }

     function fileOnload(e) {
      var result=e.target.result;
      $('#imagen1').attr("src",result);
      $('#textHeader').show();

     }

     $('#file-input2').change(function(e) {
      addImage2(e);
     });

     function addImage2(e){
      var file = e.target.files[0],
      imageType = /image.*/;

      if (!file.type.match(imageType))
       return;

      var reader = new FileReader();
      reader.onload = fileOnload2;
      reader.readAsDataURL(file);
     }

     function fileOnload2(e) {
      var result=e.target.result;
      $('#imagen2').attr("src",result);
      $("#checkPack").css("visibility", "visible");
      $("#labelPack").css("visibility", "visible");

     }

   /*******************************************************/
   } )
</script>