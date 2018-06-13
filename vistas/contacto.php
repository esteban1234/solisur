<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<script>
  var nav4 = window.Event ? true : false;
  function aceptNum(evt){
    var key = nav4 ? evt.which : evt.keyCode;
    return (key <= 13 || (key>= 48 && key <= 57));
}
</script>
<body>
  <div id="capa1"></div>
  <div class="openclose">
      <i class="fa fa-bars open" aria-hidden="true"></i>
  </div>  

  <div class="contenlogo pull-left">
    <figure class="logo">
       <img src="../img/solisur.png" alt="SOLISUR" class="img-responsive"> 
      </figure>
  </div>

  <div class="pull-right contenmenu">
    <div class="uno">
      <a class="navega" href=""><i class="fab fa-facebook-f"></i></a>
      <a class="navega" href=""><i class="fab fa-twitter"></i></a>
      <a class="navega" href=""><i class="fab fa-google-plus-g"></i></a>
      <a class="navega" href=""><i class="fas fa-at"></i></a>
      <a class="navega" href=""><i class="fab fa-linkedin-in"></i></a>
    </div>
    <div class="dos">
      <nav>
        <ul>
          <a class="selector" href="../index.php">INICIO</a>
          <a class="selector" href="nosotros.php">NOSOTROS</a>
          <a class="selector" href="servicios.php">SERVICIOS</a>
          <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
      </nav>
    </div>
  </div>

  <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.1401390225212!2d-89.60369457083503!3d21.01024095106897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676c62417390b%3A0x799c11a4abfb3ce7!2s10-a+204%2C+Residencial+Col+Mexico%2C+97125+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1528842053275" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <div class="container" style="padding: 5% 0%;">
  <div class="col-m-12 text-center">
    <h2 style="color: #4F0F10;">Formulario de Contacto</h2> <br><br>
  </div>
  <div class="col-sm-12 custom-box">
      <div class="col-md-6 col-md-offset-3">
       <div class="well form-well">
        <div class="well form-well">
          <legend class=" text-center" style="color: #4F0F10;">Contactanos</legend>
          <form>
            <div class="group">
              <input required="" type="text" id="txtNOMBRE">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Nombre</label>
            </div>

            <div class="group">
              <input required="" type="text" id="txtCORREO">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Correo</label>
            </div>

            <div class="group">
              <input type="text" id="txtTELEFONO" onkeypress="return aceptNum(event)" maxlength="10" required="">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Teléfono</label>
            </div>

            <div class="group">
              <textarea type="text" rows="5" required="" id="txtCOMENTARIO"></textarea>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Comentario</label>
            </div>

            <div id="_AJAX_PRE_"></div>
            <div class="group">
              <center> <button type="submit" class="btn btn-danger" onclick="sendCORREO()">Enviar <span class="glyphicon glyphicon-send"></span></button></center>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="container" style="padding: 0% 0% 5% 0%;">
<div class = "row">
    <div class = "col-sm-6 col-md-3">
        <div class="card-base">
        <div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><span class="fas fa-map-marker-alt"></span></a>
        <div class="card-data widgetCardData">
        <h2 class="box-title" style="color: #bb7824;">DIRECCION</h2>
        <p class="card-block text-center">C. 10A #203 POR 1H Y 0 COL. MEXICO NORTE, MERIDA, YUCATAN. C.P. 97128</p>
        </div>
        </div>
        <div class="space"></div>
        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class="card-base">
        <div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><span class="far fa-clock"></span></a>
        <div class="card-data widgetCardData">
        <h2 class="box-title" style="color: #bb7824;">HORARIO</h2>
        <p class="card-block text-center">Lunes a Viernes de 9 am a 6 pm</p>
        </div>
        </div>
        <div class="space"></div>
        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class="card-base">
        <div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><span class="fas fa-phone"></span></a>
        <div class="card-data widgetCardData">
        <h2 class="box-title" style="color: #bb7824;">TELEFONO</h2>
        <p class="card-block text-center">PENDIENTE</p>
        </div>
        </div>
        <div class="space"></div>
        </div>
    </div>

    <div class = "col-sm-6 col-md-3">
        <div class="card-base">
        <div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><span class="fas fa-envelope"></span></a>
        <div class="card-data widgetCardData">
        <h2 class="box-title" style="color: #bb7824;">CORREO</h2>
        <p class="card-block text-center">info@corporativosolisur.com</p>
        </div>
        </div>
        <div class="space"></div>
        </div>
    </div>
</div>
  
</div>

	
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<!-- <script src="../js/funciondthc.js"></script> -->
<script src="../js/menu.js"></script>
</body>
</html>
