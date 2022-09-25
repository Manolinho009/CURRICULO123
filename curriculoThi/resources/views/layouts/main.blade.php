<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>@yield('title')</title>


        
            <!-- Add Material font (Roboto) and Material icon as needed -->
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link rel="preconnect" href="https://cdn.jsdelivr.net/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;700&family=Roboto+Slab:wght@300;400;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" crossorigin>

        {{-- FONT AWESOME --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/e9ce1f77cc.js" crossorigin="anonymous"></script>
        <!-- Material CSS -->
        <link href="https://cdn.jsdelivr.net/gh/djibe/material@4.6.2-1.0/css/material.min.css" rel="stylesheet" crossorigin>

        <!-- Optional Material CSS for Plugins
        <link href="https://cdn.jsdelivr.net/gh/djibe/material@4.6.2-1.0/css/material-plugins.min.css" rel="stylesheet" crossorigin>
        -->

        
        <link href="/css/styles.css" rel="stylesheet">
    
    </head>
    <body>


        <nav id="barra" class="navbar fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" style="opacity: 100%">Curriculo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">

                @auth
                <a class="nav-link active" aria-current="page" href="/curriculo/create">CADASTRAR</a>
                <a class="nav-link active" aria-current="page" href="/dashboard/1">MINHA AREA</a>
                @endauth
                @guest     
                <a class="nav-link active" aria-current="page" href="/login">Login</a>
                <a class="nav-link active" aria-current="page" href="/register">Resgister</a>
                @endguest

              
              </div>
            </div>
          </div>
        </nav>

        @yield('content')


        
<div class= "fab-actions mx-3 btn-float-dropdown dropup float fixed-bottom mb-4 ">
    <button aria-expanded="false" aria-haspopup="true" id="fab-redes" class="d-none d-lg-flex  btn btn-float btn-primary" data-toggle="dropdown" type="button"><i class="fa-solid fa-share-nodes  fa-beat"></i></button>
    <div class="dropdown-menu" style="border: none">
      <a class="d-none d-lg-flex  btn btn-float btn-light btn-sm" id="fab-btn-face" type="button"><i class="fa-brands fa-facebook fa-beat"></i></a>
      <a class="d-none d-lg-flex  btn btn-float btn-light btn-sm" id="fab-btn-git" type="button"><i class="fa-brands fa-github fa-beat"></i></a>
      <a class="d-none d-lg-flex  btn btn-float btn-light btn-sm" id="fab-btn-insta" type="button"><i class="fa-brands fa-instagram fa-beat"></i></a>
      <a class="d-none d-lg-flex  btn btn-float btn-light btn-sm" id="fab-btn-zap" type="button"><i class="fa-brands fa-whatsapp fa-beat"></i></a>
    </div>
  </div>


  <footer>
    <div class="row mx-4">
      <div class="col">
        <p>Thiago Henrique Araujo Rocha</p>
    
        <p>(48)98461-4267</p>
      </div>
      <div class="col-sm">
        <p>Rua Rio Paranapanema 310, Pinhais</p>
    
        <p>email: thiagohenrique166@gmail.com</p>
      </div>
    </div>
  </footer>

</body>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

      <!-- jQuery, Bootstrap Bundle (includes Popper) and Material -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha256-GRJrh0oydT1CwS36bBeJK/2TggpaUQC6GzTaTQdZm0k=" crossorigin></script>
      <script src="https://cdn.jsdelivr.net/gh/djibe/material@4.6.2-1.0/js/material.min.js" crossorigin></script>
      
</html>
