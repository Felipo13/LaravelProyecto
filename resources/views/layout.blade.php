<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title> @yield('title', 'Rapidisimo') </title>
</head>
<body>
    <link rel="stylesheet" href="{{ asset('CSS/style-layout.css') }}">
    <header id="main-header">
        <a id="logo-header" href="/">
            <span class="rappi">Rappidisimo</span>
           
            
                </a> <!-- / #logo-header -->
    
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="about">Contacto</a></li>
            </ul>
        </nav><!-- / nav -->
    
    </header><!-- / #main-header -->
    
        @yield('opcabe')
        </header>
    
        @yield('conte')
            
        <footer>
        <footer id="main-footer">
    
        
            <h4><center>Copyright Rapiddisimo © 2021. All rights reserved.</center></h4>
    
        </footer>
    </body>
    </html>