<!DOCTYPE html>
<html lang="en">
<head class="head">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css" media="screen" />
    <title>@yield("title")</title>
</head>
<body>

@yield("navegacion-plantilla")
    <div style="height: 75px; background: linear-gradient(to right, #27ae60, #1dd1a1);" >

    </div>
    <nav class="navbar navbar-expand-xl navbar-light bg-light lista">

      <div class="container">

        <a class="navbar-brand my-1" href="{{url('/home')}}"> 
          <img src="img/Logo.png" loading=lazy alt="" class="navbar-brand__img">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">

          <ul class="navbar-nav ms-auto h2">


            <li class="nav-item border-end border-succes px-3" >
              <a href="{{url('/acercade')}}" class="nav-link text-success" >
                Acerca de
              </a>
            </li>

            <li class="nav-item  border-end border-succes px-3" >
              <a href="{{url('/contacto')}}" class="nav-link text-success" >
                Preguntas 
              </a>
            </li>

            <li class="nav-item  border-end border-succes px-3" >
              <a href="{{url('/contacto')}}" class="nav-link text-success" >
                Contacto
              </a>
            </li>

          </ul>
        </div>

    </div>
</nav>    

    @yield("body")
    


        <footer class=" bg-success text-white text-center text-lg-start ">
          <!-- Grid container -->
          <div class="container p-4">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer Content</h5>

                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                  molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                  voluptatem veniam, est atque cumque eum delectus sint!
                </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-white">Link 1</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Link 2</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Link 3</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Link 4</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Links</h5>

                <ul class="list-unstyled">
                  <li>
                    <a href="#!" class="text-white">Link 1</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Link 2</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Link 3</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Link 4</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1)">
            ?? 2021 Copyright:
            <a class="text-white" href="https://ubicaellcal.com/">transporteyserviciodm.com.ar</a>
          </div>
          <!-- Copyright -->
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"    crossorigin="anonymous">
    </script>  
    @yield("pie")
    

</body>
</html>