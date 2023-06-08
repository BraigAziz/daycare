<body class="sticky">
      <header class="header">
         <div class="container">
            <div class="social_menu hidden-md">
               <p>
                  <span class="social-details"><i class="fa-map-marker"></i> <a href="https://goo.gl/maps/GbP3ou1DijUgmAh76">View Location</a></span> 
                  <span class="social-details"><i class="fa fa-envelope-o"></i> <a href="mailto:contact@royaumedespetitsamis.com">Email Us</a></span> 
                  <span class="social-details"><i class="fa fa-phone"></i> <a href="tel:+14388168899">438-816-8899</a></span> 
                  <a href="https://web.facebook.com/people/Garderie-%C3%89ducative-au-Royaume-des-Petits-Amis/100081902530766/" target="_blank" class="social-details"><i class="fa fa-facebook"></i></a>
                  <!-- <a href="#" target="_blank" class="social-details"><i class="fa fa-instagram"></i></a> 
                     <a href="#" target="_blank" class="social-details"><i class="fa fa-twitter"></i></a>
                     <a href="#" target="_blank" class="social-details"><i class="fa fa-youtube"></i></a>-->
               </p>
            </div>
            <div class="logo_header">
            <a href="/"><img src="images/logo_header.png"/></a>
            </div>
            <div class="menu_part">
               <div class="social_menu hidden-xs">
                  <p>
                     <span class="social-details"><i class="fa-map-marker"></i> <a href="https://www.google.com/maps/place/Garderie+Educative+Au+Royaume+Des+Petits+Amis/@45.5719318,-73.6601285,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91f4de5b40a85:0x874f5c04c6cf9b48!8m2!3d45.5719318!4d-73.6579398">View Location</a></span> 
                     <span class="social-details"><i class="fa fa-envelope-o"></i> <a href="mailto:contact@royaumedespetitsamis.com">Email Us</a></span> 
                     <span class="social-details"><i class="fa fa-phone"></i> <a href="tel:+14388168899">438-816-8899</a></span> 
                     <a href="https://web.facebook.com/people/Garderie-%C3%89ducative-au-Royaume-des-Petits-Amis/100081902530766/" target="_blank" class="social-details"><i class="fa fa-facebook"></i></a>
                     <!--  <a href="#" target="_blank" class="social-details"><i class="fa fa-instagram"></i></a>    
                        <a href="#" target="_blank" class="social-details"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank" class="social-details"><i class="fa fa-youtube"></i></a>-->
                  </p>
               </div>
               <div class="header_menu">
                  <nav id="nav-main">
                     <ul id="menu">
                        <li><a href="/">Accueil</a></li>
                        <li>
                           <a href="/about">Nos Services</a>
                           <ul>
                              <li><a href="/about">À propos de nous</a></li>
                              <!-- <li><a href="about-us.php">Garderie</a></li>
                              <li><a href="about-us.php">Service de garde d'enfants</a></li> -->
                              <li><a href="/service-fin-de-semain">Service garderie en fin de semaine</a></li>
                              <li><a href="/service-de-nuit">Service garderie de nuit</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="/about">Garderies</a>
                           <ul>
                              <li><a href="/urbain">Garderie Saint-Urbain</a></li>
                              <li><a href="/bourassa">Garderie Henri-Bourassa</a></li>
                           </ul>
                        </li>
                        <li><a href="/galerie"> Galerie</a></li>
                        <li><a href="/service-traiteur-frais-jour">Service de traiteur</a></li>
                        @if(Route::has('login'))
                           <li>
                              <a style="background-color: aqua; border-radius:50px; cursor:pointer;">Account</a>
                              <ul style="border-radius:50px; width:auto;">
                                 @auth
                                    @if(Route::has('dashboard'))
                                       <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    @endif
                                    @if(Route::has('logout'))
                                       <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">Logout</a></li>
                                    @endif
                                 @else
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    @if(Route::has('register'))
                                       <li><a href="{{route('register')}}">Register</a></li>
                                    @endif
                                 @endauth
                              </ul>
                           </li>
                        @endif
                     </ul>
                  </nav>
                  <nav id="nav-mobile"></nav>
               </div>
            </div>
         </div>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
         <!-- container end -->
      </header>