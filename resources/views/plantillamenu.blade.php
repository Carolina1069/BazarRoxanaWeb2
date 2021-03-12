<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="row">
            <div class="col-xs-12">

                <div id="carousel-1" class="carousel slide" data-ride="carousel" data-interval="6000">
           <!-- Indicators -->
           <ol class="carousel-indicators">
               <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-1" data-slide-to="1"></li>
               <li data-target="#carousel-1" data-slide-to="2"></li>
               <li data-target="#carousel-1" data-slide-to="3"></li>

           </ol>
           <!-- Wrapper for slides -->
           <div class="carousel-inner" role="listbox">
               <div class="item active">
                   <img src="https://i.ibb.co/zrwmxxt/2-1.jpg" width="1500" height="500"  alt="Carousel Image">
                   <div class="carousel-caption">
                       <h3>Caption Heading</h3>
                       <p>Caption Body goes here</p>
                   </div>
               </div>
               <div class="item">
                   <img src="https://i.ibb.co/7JG67KD/2-2.jpg" width="1500" height="500" alt="Carousel Image">
                   <div class="carousel-caption">
                       <h3>Caption Heading</h3>
                       <p>Caption Body goes here</p>
                   </div>
               </div>
               <div class="item">
                   <img src="https://i.ibb.co/B27Xc6w/2-3.jpg" width="1500" height="500" alt="Carousel Image">
                   <div class="carousel-caption">
                       <h3>Caption Heading</h3>
                       <p>Caption Body goes here</p>
                   </div>
               </div>
               <div class="item">
                   <img src="https://i.ibb.co/0sN7hbj/2-4.jpg" width="1500" height="500" alt="Carousel Image">
                   <div class="carousel-caption">
                       <h3>Caption Heading</h3>
                       <p>Caption Body goes here</p>
                   </div>
               </div>

               <br>
             <br>
             <br>

           <!-- Controls -->
           <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
           </a>
        </div>


        </div>
            <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
                <div class="container">
               <div class="row">
            <div class="col-xs-12">

                <div id="carousel-2" class="carousel slide" data-ride="carousel" data-interval="6000">
           <!-- Indicators -->
           <ol class="carousel-indicators">
               <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-2" data-slide-to="1"></li>
               <li data-target="#carousel-2" data-slide-to="2"></li>
               <li data-target="#carousel-2" data-slide-to="3"></li>
           </ol>
           <!-- Wrapper for slides -->
           <div class="carousel-inner" role="listbox">
               <div class="item active">
                   <img src="https://i.ibb.co/6F0FNVV/3-1.jpg" width="1500" height="500" alt="Carousel Image">
                   <div class="carousel-caption">
                       <h3>Caption Heading</h3>
                       <p>Caption Body goes here</p>
                   </div>
               </div>
               <div class="item">
                   <img src="https://i.ibb.co/64XZJLw/3-2.jpg" width="1500" height="500" alt="Carousel Image">
                   <div class="carousel-caption">
                       <h3>Caption Heading</h3>
                       <p>Caption Body goes here</p>
                   </div>
               </div>
               <div class="item">
                   <img src="https://i.ibb.co/QQhGN1p/3-3.jpg" width="1500" height="500" alt="Carousel Image">
                   <div class="carousel-caption">
                       <h3>Caption Heading</h3>
                       <p>Caption Body goes here</p>
                   </div>
               </div>
               <div class="item">
                   <img src="https://i.ibb.co/kD52Bd3/3-4.jpg" width="1500" height="500" alt="Carousel Image">
                   <div class="carousel-caption">
                       <h3>Caption Heading</h3>
                       <p>Caption Body goes here</p>
                   </div>
               </div>
           </div>
           </div>
           <!-- Controls -->
           <a class="left carousel-control" href="#carousel-2" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#carousel-2" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
           </a>
        </div>


        </div>

        </div>


           </div>

        </div>

            </div>
        </div>
        <footer style="background-color: black; margin-top:30% " class="bg-light text-center text-lg-start" > Derechos Reservados 2021 BDCAM </footer><footer style="background-color: black; margin-top:30% " class="bg-light text-center text-lg-start" > Derechos Reservados 2021 BDCAM </footer>

    @yield('carrusel')
</body>
</html>
