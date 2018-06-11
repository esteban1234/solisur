<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

  <div style="padding: 1% 0%; overflow: hidden;">
    <nav class="pull-left">
      <ul>
        <a class="selector" href="../index.php">INICIO</a>
        <a class="selector" href="nosotros.php">NOSOTROS</a>
        <a class="selector" href="servicios.php">SERVICIOS</a>
        <a class="selector" id="select" href="contacto.php"><i class="fas fa-phone-volume"></i> CONTACTO</a>
      </ul>
    </nav>

    <div class="logo pull-right">
      <img src="../img/diseno.png" class="img-responsive" alt="DISEÑO">
    </div>

    <div class="openclose">
          <i class="fa fa-bars open" aria-hidden="true"></i>
        </div> 
  </div>

<div class="banner4">
  <div class="fondo4">
    <h1 class="tit-cont">CONTACTO</h1>
  </div>
</div>
<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7717449439256!2d-89.63899298589182!3d21.04181278599131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5674324d07e755%3A0x81ce9c86252e886a!2sCalle+39%E1%B4%AE+225%2C+Zona+Industrial%2C+97180+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1528220494912" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="section" style="padding: 5% 0%;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center tit-dc">Datos de Contacto</h1>
            <p class="text-center">DISEÑO E INGENIERIA DEL CENTRO S.A.P.I. de C.V.</p>
          </div>
        </div> <br><br>
        <div class="row">
          <div class="col-sm-2 col-md-2 cont-ico" style="text-align: right;">
            <!-- <div class="iconos"> -->
              <span class="fa-stack fa-4x cont-i">
                <i class="fa fa-circle fa-stack-2x ii"></i>
                <i class="fas fa-map-marker-alt fa-stack-1x fa-inverse iii"></i>
              </span>
            <!-- </div> -->
          </div>
          <div class="col-sm-4 col-md-4">
            <h3 class="text-left tit-dthc">Dirección</h3>
            <p class="text-left txt-dthc">C. 39B #225 por 32A y 32 Col. La Castellana, Mérida, Yucatan. C.P 97203</p>
          </div>
          <div class="col-sm-2 col-md-2 cont-ico" style="text-align: right;">
            <!-- <div class="iconos"> -->
              <span class="fa-stack fa-4x cont-i">
                <i class="fa fa-circle fa-stack-2x ii"></i>
                <i class="fas fa-phone-volume fa-stack-1x fa-inverse iii"></i>
              </span>
            <!-- </div> -->
          </div>
          <div class="col-sm-4 col-md-4">
            <h3 class="text-left tit-dthc">Teléfono</h3>
            <p class="text-left txt-dthc">PENDIENTE</p>
          </div>
        </div> <br><br>
        <div class="row">
          <div class="col-sm-2 col-md-2 cont-ico" style="text-align: right;">
            <!-- <div class="iconos"> -->
              <span class="fa-stack fa-4x cont-i">
                <i class="fa fa-circle fa-stack-2x ii"></i>
                <i class="fas fa-clock fa-stack-1x fa-inverse iii"></i>
              </span>
            <!-- </div> -->
          </div>
          <div class="col-sm-4 col-md-4">
            <h3 class="text-left tit-dthc">Horario</h3>
            <p class="text-left txt-dthc">Lunes a Viernes de 9 am a 6 pm.</p>
          </div>
          <div class="col-sm-2 col-md-2 cont-ico" style="text-align: right;">
            <!-- <div class="iconos"> -->
              <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x ii"></i>
                <i class="fas fa-envelope fa-stack-1x fa-inverse iii"></i>
              </span>
            <!-- </div> -->
          </div>
          <div class="col-sm-4 col-md-4 text-center">
            <h3 class="text-left tit-dthc">Correo</h3>
            <p class="text-left txt-dthc">info@disenoeingenieriadelcentro.com</p>
          </div>
        </div>
      </div>
    </div>

<div class="inner contact">

                <div class="contact-form">
                  
                    <form id="contact-us" method="post" action="#" onSubmit="return false">

                        <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
                
                            <input type="text" name="name" id="txtNOMBRE" required="required" class="form" placeholder="Nombre" />

                            <input type="email" name="mail" id="txtCORREO" required="required" class="form" placeholder="Correo" />

                            <input type="tel" name="subject" id="txtTELEFONO" required="required" class="form" placeholder="Teléfono" />
                        </div>
                      
                        <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInRight" data-wow-delay=".5s">
                           
                            <textarea name="message" id="txtCOMENTARIO" class="form textarea"  placeholder="Comentario"></textarea>
                        </div>
                        
                        <div class="relative fullwidth col-xs-12">
                            <div id="_AJAX_PRE_"></div>
                            <button type="submit" id="submit" name="submit" class="form-btn semibold" onclick="sendCORREO()">Enviar</button> 
                        </div>
                     
                        <div class="clear"></div>
                    </form>

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
