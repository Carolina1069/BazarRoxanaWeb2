<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Opiniones</title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Bootstrap Theme -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url(https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
    <div class="container">
        <div class="row">
    <div class="col-xs-12">

        @extends('plantilla')
        @section('menu')

        @endsection

    <div class="row">

<div class="col-xs-1">
     <br>
     <br>
     <br>
     <br>
 <div class="container align-items-center"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/204/4622234204_5a662664-abd1-498a-8e72-c2062b63bcc4.png?cb=1613015806" class="center-block"></div>
 <br>
 <br>

 <br>
     <br>
     <br>
 <form>

    <textarea name="contenido" rows="10" cols="150" placeholder="Mensaje" value='{{old('contenido')}}'></textarea><br>

    {!!$errors->first('contenido','<small>:message</small><br>')!!}

    <button style='width: 200%; height:100%' type="submit" class="btn btn-primary btn-block">Enviar</button>

</form>


</div>
    </div>

</div>

</div>

    </div>
      <footer style="background-color: black; margin-top:30% " class="bg-light text-center text-lg-start" > Derechos Reservados 2021 BDCAM </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
