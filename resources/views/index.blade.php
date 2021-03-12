<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
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
  <body style="background-image: url(https://images.pexels.com/photos/2872879/pexels-photo-2872879.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260)">

    <div class="container">
       <div class="row">

<div class="col-xs-1">
     <br>
     <br>

 <div class="container align-items-center"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/204/4622234204_5a662664-abd1-498a-8e72-c2062b63bcc4.png?cb=1613015806" width="600" height="250" class="center-block"></div>
</div>
    </div>
        <br>
        <br>
        <form class="form-horizontal" method="post" action="validar.php">
    <div class="form-group">
        <div class="container align-items-center" >
        <label for="inputEmail3" class="col-sm-4 control-label" style="color: #FFFFFF;" >Correo</label>
        <div class="col-sm-5">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Correo" name="correo">
        </div>
    </div>
         </div>
    <div class="form-group">
          <div class="container align-items-center" >
        <label for="inputPassword3" class="col-sm-4 control-label" style="color: #FFFFFF;">Contraseña</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña" name="pass">
        </div>
    </div>
        </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-10" style="color: #FFFFFF;">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Recordar
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-6 col-sm-10">
            <button type="submit" class="btn btn-default">Ingresar</button>
        </div>
    </div>
</form>

    </div>
       <footer style="background-color: black; margin-top:30% " class="bg-light text-center text-lg-start" > Derechos Reservados 2021 BDCAM </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>
