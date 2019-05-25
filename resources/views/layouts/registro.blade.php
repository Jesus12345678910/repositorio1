<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
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
   <input id="Nombre" type="name" class="form-control{{ $errors->has('Nombre') ? ' is-invalid' : '' }}" name="Nombre" value="{{ old('Nombre') }}" required placeholder="Nombre de la Tienda">

             @if ($errors->has('Nombre'))
                 <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('Nombre') }}</strong>
                 </span>
             @endif
 </div>

            <div class="form-group row">
                 <label for="nombre" class="col-md-4 col-form-label text-md-left">{{ __('Dirección:') }}</label>
             </div>
            <div class="text-center">
              <div class="form-group">
                 <input id="Calle" type="name" class="form-control{{ $errors->has('Calle') ? ' is-invalid' : '' }}" name="Calle" value="{{ old('Calle') }}" required placeholder="Calle">

                           @if ($errors->has('Calle'))
                               <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('Calle') }}</strong>
                               </span>
                           @endif
               </div>
               <div class="form-group">
                  <input id="Numero" type="number" class="form-control{{ $errors->has('Numero') ? ' is-invalid' : '' }}" name="Numero" value="{{ old('Numero') }}" required placeholder="Numero">

                            @if ($errors->has('Numero'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('Numero') }}</strong>
                                </span>
                            @endif
                </div>
                <div class="form-group">
                   <input id="Colonia" type="name" class="form-control{{ $errors->has('Colonia') ? ' is-invalid' : '' }}" name="Colonia" value="{{ old('Colonia') }}" required placeholder="Colonia o Fraccionamiento">

                             @if ($errors->has('Colonia'))
                                 <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('Colonia') }}</strong>
                                 </span>
                             @endif
                 </div>
                 <div class="form-group">
                    <input id="Ciudad" type="name" class="form-control{{ $errors->has('Ciudad') ? ' is-invalid' : '' }}" name="Ciudad" value="{{ old('Ciudad') }}" required placeholder="Ciudad o Municipio">

                              @if ($errors->has('Ciudad'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('Ciudad') }}</strong>
                                  </span>
                              @endif
                  </div>
                  <div class="form-group">
                     <input id="Estado" type="name" class="form-control{{ $errors->has('Estado') ? ' is-invalid' : '' }}" name="Estado" value="{{ old('Estado') }}" required placeholder="Estado">

                               @if ($errors->has('Estado'))
                                   <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('Estado') }}</strong>
                                   </span>
                               @endif
                   </div>
                   <div class="form-group">
                      <input id="CP" type="number" class="form-control{{ $errors->has('CP') ? ' is-invalid' : '' }}" name="CP" value="{{ old('CP') }}" required placeholder="Código Postal">

                                @if ($errors->has('CP'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('CP') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                       <input id="Telefono" type="number" class="form-control{{ $errors->has('Telefono') ? ' is-invalid' : '' }}" name="Telefono" value="{{ old('Telefono') }}" required placeholder="Telefono">

                                 @if ($errors->has('Telefono'))
                                     <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('Telefono') }}</strong>
                                     </span>
                                 @endif
                     </div>
                          <div class="form-group row">
                              <label for="nombre" class="col-md-4 col-form-label text-md-left">{{ __('Usuario:') }}</label>
                          </div>

                          <div class="form-group">
                                           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-mail">

                                           @if ($errors->has('email'))
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $errors->first('email') }}</strong>
                                               </span>
                                           @endif
                         </div>
                         <div class="form-group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                           @endif
                            </div>
                            <div class="form-group">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
                      </div>

              <button type="submit" class="btn btn-main text-center" >Inicia Sesión</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>

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
