<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<form action="/usuarios" method="POST" role="form">

  {{ csrf_field() }}
<head>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Abarrotes M">

  <meta name="author" content="Themefisher.com">

  <title>Abarrotes MX </title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

  <!-- Revolution Slider -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css">

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/navigation.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="Abarrotes MX" href="/inicio">
            <img src="images/logos.png" alt="">
          </a>
          <h2 class="text-center">Registrate</h2>
          <form class="text-left clearfix" action="index.htm" >
<div class="form-group">
   <input id="nombre" type="name" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('combre') }}" required placeholder="Nombre Completo">

             @if ($errors->has('nombre'))
                 <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('nombre') }}</strong>
                 </span>
             @endif
 </div>

            <div class="form-group row">
                 <label for="nombre" class="col-md-4 col-form-label text-md-left">{{ __('Dirección:') }}</label>
             </div>
            <div class="text-center">
              <div class="form-group">
                 <input id="calle" type="name" class="form-control{{ $errors->has('calle') ? ' is-invalid' : '' }}" name="calle" value="{{ old('calle') }}" required placeholder="Calle">

                           @if ($errors->has('calle'))
                               <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('calle') }}</strong>
                               </span>
                           @endif
               </div>
               <div class="form-group">
                  <input id="numero" type="number" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" value="{{ old('numero') }}" required placeholder="Numero">

                            @if ($errors->has('numero'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('numero') }}</strong>
                                </span>
                            @endif
                </div>
                <div class="form-group">
                   <input id="colonia" type="name" class="form-control{{ $errors->has('colonia') ? ' is-invalid' : '' }}" name="colonia" value="{{ old('colonia') }}" required placeholder="Colonia o Fraccionamiento">

                             @if ($errors->has('colonia'))
                                 <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('colonia') }}</strong>
                                 </span>
                             @endif
                 </div>
                 <div class="form-group">
                    <input id="ciudad" type="name" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" name="ciudad" value="{{ old('ciudad') }}" required placeholder="Ciudad o Municipio">

                              @if ($errors->has('ciudad'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ciudad') }}</strong>
                                  </span>
                              @endif
                  </div>
                  <div class="form-group">
                     <input id="estado" type="name" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" name="estado" value="{{ old('estado') }}" required placeholder="Estado">

                               @if ($errors->has('estado'))
                                   <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('estado') }}</strong>
                                   </span>
                               @endif
                   </div>
                   <div class="form-group">
                      <input id="codigo_postal" type="number" class="form-control{{ $errors->has('codigo_postal') ? ' is-invalid' : '' }}" name="codigo_postal" value="{{ old('codigo_postal') }}" required placeholder="Código Postal">

                                @if ($errors->has('codigo_postal'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('codigo_postal') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                       <input id="telefono" type="number" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required placeholder="Telefono">

                                 @if ($errors->has('telefono'))
                                     <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('telefono') }}</strong>
                                     </span>
                                 @endif
                     </div>
                          <div class="form-group row">
                              <label for="nombre" class="col-md-4 col-form-label text-md-left">{{ __('Usuario:') }}</label>
                          </div>

                          <div class="form-group">
                                           <input id="correo" type="correo" class="form-control{{ $errors->has('correo') ? ' is-invalid' : '' }}" name="correo" value="{{ old('correo') }}" required placeholder="E-mail">

                                           @if ($errors->has('correo'))
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $errors->first('correo') }}</strong>
                                               </span>
                                           @endif
                         </div>
                         <div class="form-group">
                                            <input id="contraseña" type="password" class="form-control{{ $errors->has('contraseña') ? ' is-invalid' : '' }}" name="contraseña" required placeholder="Contraseña">

                                            @if ($errors->has('contraseña'))
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('contraseña') }}</strong>
                                                </span>
                                           @endif
                            </div>
                            

              <button type="submit" class="btn btn-main text-center" >Inicia Sesión</button>

            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

</section>
</form>
    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed-js/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/SyoTimer/build/jquery.syotimer.min.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/assets/warning.js"></script>



    <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>



  </body>
  </html>
