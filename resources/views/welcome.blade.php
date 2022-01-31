<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Photo-Print</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/search.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand" aria-current="page" href="{{ url('/') }}" style="font-size:30px;">Photo-Print Studio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                </span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto  mb-2 mb-lg-0">

                    
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/contact') }}">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('#team') }}">O nama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" target="_blank" href="{{ url('https://docs.google.com/document/u/1/d/11TxFTST-YhpSzlmDL3xq1k-p625J4mtB/edit?rtpof=true&sd=true') }}">Vizija</a>
                    </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                   
                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ms-auto ">
                    <input id="searchbar" onkeyup="search_page()" type="text"
		              name="search" placeholder="Pretraži...">
                    
                                              <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('login') }}">{{ __('Prijavite se') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('register') }}">{{ __('Kreirajte novi račun') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" aria-label="Toggle navigation" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Odjavite se') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
      
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/logo.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Dobrodošli na Photo-Print</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Izradite vaše uspomene!</p>
            </div>
        </header>
        <!-- Shop Section-->
        <section class="page-section" id="shop">
            <div class="container">
                <!-- Shop Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Shop</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row justify-content-center">
                  <div class="col-xl-10">
                    <div class="row">

                <div class="col-md-6 col-lg-4 mb-5">

                <div class="product">
                  <img src="assets/9x13.jpg" alt="product" style="width:100%">
                  <h1>9 x 13 cm</h1>
                  <p class="price">19.99 KM</p>
                  </br>
                  <p>Dimenzije okvira i slike.</p>
                  
                </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5">

                <div class="product">
                  <img src="assets/10x15.jpg" alt="product" style="width:100%">
                  <h1>10 x 15 cm</h1>
                  <p class="price">19.99 KM</p>
                  </br>
                  <p>Dimenzije okvira i slike.</p>
                  
                </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5">

                <div class="product">
                  <img src="assets/13x18.jpg" alt="product" style="width:100%">
                  <h1>13 x 18 cm</h1>
                  <p class="price">19.99 KM</p>
                  <p>Dimenzije okvira i slike.</p>
                  
                </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5">

                <div class="product">
                  <img src="assets/15x20.jpg" alt="product" style="width:100%">
                  <h1>15 x 20 cm</h1>
                  <p class="price">19.99 KM</p>
                  </br>
                  <p>Dimenzije okvira i slike.</p>
                  
                </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-5">

                <div class="product">
                  <img src="assets/20x30.jpg" alt="product" style="width:100%">
                  <h1>20 x 30 cm</h1>
                  <p class="price">19.99 KM</p>
                  <p>Dimenzije okvira i slike.</p>
                  
                </div>
                </div>
                
              <div class="col-md-6 col-lg-4 mb-5">

                <div class="product">
                  <img src="assets/30x40.jpg" alt="product" style="width:100%">
                  <h1>30 x 40 cm</h1>
                  <p class="price">19.99 KM</p>
                  <p>Dimenzije okvira i slike.</p>
                  
                </div>
                
                
              </div>
              
            <section id="buy" class="buy">
            <div class="container-fluid">
      
              <div class="section-title">
                
              <div class="form-group">
                 <button onclick="window.location.href='/contact'" type="submit" class="btn btn-primary submit-btn btn-block">
                        {{ __('Naruči ovdje!') }}
                  </button>

               </div>
              </div>

              </div>
              
                   
        <!-- About Section-->
        <section id="team" class="team">
            <div class="container-fluid">
      
              <div class="section-title">
                <h2>O nama</h2>
                <h3>Naš <span>Tim</span></h3>
                <p>Upoznajte se s našim timom.</p>
              </div>
      
              <div class="row justify-content-center">
                <div class="col-xl-10">
                  <div class="row">
      
                    <div class="col-md-6 col-lg-4 mb-5">
                      <div class="member">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Perica Rajčević</h4>
                            <div class="myDIV">Životopis</div>
                            <div class="hide"> <br>
                              Student infromatike <br>
                              Iz Domaljevca<br>
                              Hobi Sim Racing <br>
                              Ljubitelj automobila i brzine<br>
                              
                            </div>
                          </div>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                          </div>
                        </div>
                      </div>
                    </div> <!-- End Member Item -->
      
                    <div class="col-md-6 col-lg-4 mb-5" data-wow-delay="0.1s">
                      <div class="member">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Matej Iljazović</h4>
                            <div class="myDIV">Životopis</div>
                            <div class="hide">Student informatike <br> Iz Domaljevca <br> Hobi: Fotografiranje <br> Ljubitelj sporta 
                            </div>
                          </div>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                          </div>
                        </div>
                      </div>
                    </div> <!-- End Member Item -->
      
                    <div class="col-md-6 col-lg-4 mb-5" data-wow-delay="0.2s">
                      <div class="member">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4>Pavo Vlahović</h4>
                            <div class="myDIV">Životopis</div>
                            <div class="hide">Student informatike <br> Iz Domaljevca <br> Hobi: Obrada drveta <br> Ljubitelj sporta i filmova</div>
                          </div>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                          </div>
                        </div>
                      </div>
                    </div> <!-- End Member Item -->
      
                    <div class="section-title">

                      <h2>Ukratko o projektu</h2>

                      <p>Ovaj sustav je zamišljen kao online trgovina fotografija raznih dimenzija koja  će ujedno donositi promociju usluga fotografiranja.
                         Biti će osmišljen tako da korisniku maksimalno pojednostavimo proces kupovine tako da bi on prešao barijeru i stvarno kupio proizvod. 
                         Bazirali bismo se na manjem broju ljudi koji bi bili produktivniji uz pomoć tehnologije i automatizacije.
                      </p>

                      <br>

                      <h2>Motivacija</h2>
                      
                      <p>Naša motivacija je korisnuku omogućiti usluge snimanja i prodaje proizvoda u online formi. 
                        Ideja je omogućiti korisnicima da sa što manje uložene energije i vremena dobiju gotov proizvod. .</p>

                        <br>

                        <h2>Tehnologije</h2>

                        <div class="w3-center">
                        <img id="html" src="assets/HTML5.png" alt="HTML" height="180px" width="180px">
                        <img id="css" src="assets/css.png" alt="CSS" height="180px" width="140px">
                       <img src="assets/jss.png" alt="JS" height="150px" width="180px">
                       <img src="assets/vuejs.png" alt="VUE" height="150px" width="180px">
                       <img src="assets/mysql.png" alt="SQL" height="150px" width="180px">
                       <img src="assets/php.png" alt="PHP" height="150px" width="180px">
                       <img src="assets/bootstrap.png" alt="BOOT" height="150px" width="180px">
                       </div>

                        <h2>Dijagam</h2>

                        <br>

                        <img src="assets/img/dijagram.PNG" class="img-fluid" alt="">
                    
                    </div>
      
                  </div>
                </div>
              </div>


      
            </div>
          </section><!-- End Team Section -->
        <!-- End Member Item -->

        <!-- Footer-->
       
      
        <!-- Copyright -->
        </footer>
          
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/search.js"></script>
       
        
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
