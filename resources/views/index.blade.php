<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title>Paulina Skukowska - CV</title>

    <!-- favicon -->
    <link id="favicon" rel="icon" type="image/png" href="{{asset('images/favicon.ico')}}">

    <!-- Google Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- splitlayout.css -->
    <link rel="stylesheet" href="{{asset('css/splitlayout.css')}}">


    <link rel="stylesheet" href="{{asset('css/animations.css')}}">

    <!-- responsiveslides.css -->
    <link rel="stylesheet" href="{{asset('css/responsiveslides.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">

    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <!-- font-awesome.min.css -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/pe-icon-7-stroke.min.css')}}">

    <!-- Main style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('css/custom/custom.css')}}">

    <!-- Yellow Color -->
<!-- <link rel="stylesheet" href="{{asset('css/color-yellow.css')}}"> -->

    <!-- Purple Color -->
<!-- <link rel="stylesheet" href="{{asset('css/color-purple.css')}}"> -->

    <!-- Green Color -->
<!-- <link rel="stylesheet" href="{{asset('css/color-green.css')}}"> -->

    <!-- Red Color -->
<!-- <link rel="stylesheet" href="{{asset('css/color-red.css')}}"> -->

    <!-- Blue Color -->
<!-- <link rel="stylesheet" href="{{asset('css/color-blue.css')}}"> -->


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!--Start Preloader-->
<div class="page-loader startLoad">
    <div class="loader startLoad"></div>
</div>
<!--End Preloader-->


<div id="splitlayout" class="splitlayout close-right">
    <div class="intro">


        <!--Start Home-->
        <div class="home_type full-height">
            <div class="side side-left container" style="background-image: url({{asset('images/home_personal.jpg')}});">
                <div class="overlayer">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h1 class="fit__text">CURRICULUM VITAE</h1>
                            <div id="typed-strings">
{{--                                                                <span>JOHN DOE</span>--}}
{{--                                                                <span>CURRICULUM VITAE</span>--}}
{{--                                                                <span>FROM UK</span>--}}
                            </div>

                                <div class="more_info">

                                    <div class="item">
                                        <span class="info-title">Data urodzenia : </span>
                                        <span class="info-body">18.06.1992 r</span>
                                    </div>

                                    <div class="item">
                                        <span class="info-title">Miejsce urodzenia : </span>
                                        <span class="info-body">Kętrzyn</span>
                                    </div>

                                    <div class="item">
                                        <span class="info-title">Adres : </span>
                                        <span class="info-body">Żabi Róg, 14-300 Morąg</span>
                                    </div>

                                    <div class="item">
                                        <span class="info-title">E-mail : </span>
                                        <span class="info-body">skukowska_paulina@wp.pl</span>
                                    </div>

                                    <div class="item">
                                        <span class="info-title">Tel : </span>
                                        <span class="info-body">537 032 318</span>
                                    </div>

                                    <a href="#">POBIERZ CV W PDF</a>
                                    <a href="#contact" class="goToSec">NAPISZ DO MNIE</a>

                                </div><!--.more_info-->
                            </div><!--.display-table-cell-->
                        </div><!--.display-table-->

                    </div><!--.overlayer-->
                </div><!--.side-->
            </div><!--.home_type-->
            <!--End Home-->


            <!--Start Menu-->
            <div class="mob-menu-overlay"></div>
            <div class="mob-menu">
                <div class="mob-menu-content">
                    <div class="float-left">
                        <p class="menu-title">Paulina Skukowska</p>
                    </div>
                    <div class="float-right">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="side side-right">
                <div class="intro-content">
                    <div class="profile">
                        <img src="{{asset('images/custom/profile.jpeg')}}" alt="profile')}}">
                    </div>
                    <h1>
                        <span>Paulina Skukowska</span>
                    </h1>
                    <b class="cv-link">POBIERZ CV W PDF</b>
                    <div class="menu">
                        <!--Social links-->
                        <div class="social-icons">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>

                        <!--Menu Items-->
                        <ul class="list-unstyled menu_list" id="menu">
                            <li>
                                <a href="#home" class="active_item">Start</a>
                            </li>
                            <li>
                                <a href="#about">O mnie</a>
                            </li>
                            <li>
                                <a href="#resume">Edukacja i doświadczenie</a>
                            </li>
                            <li>
                                <a href="#services">Kwalifikacje I Umiejętności</a>
                            </li>
                            <li>
                                <a href="#contact">Kontakt</a>
                            </li>
                        </ul>

                    </div><!--.menu-->
                </div><!--.intro-content-->
            </div><!--.side-->
            <!--End Menu-->


        </div><!-- /intro -->
        <div class="page page-right full-height">
            <div id="pt-main" class="pt-perspective page-inner">


                <!--Start About Section-->
                <section class="about padding-bottom-90 pt-page pt-page-current" id="about">
                    <div class="content">
{{--                        <img class="center-block" src="{{asset('images/me-1.jpg')}}" alt="">--}}
                        <div class="container">
                            <div class="more-about-me">
                                <div class="sec_title">
                                    <h2>O mnie</h2>
                                </div>
                                <p class="margin-top-30">I'm 24 years old creative web designer based in New York, specializing in User
                                    Interface Design and Development. I build clean, appealing, and functional interfaces which comply with
                                    the latest web standards.</p>
                                <p class="margin-bottom-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <!-- Skills -->
                            <div class="skills row margin-top-45">
                                <div class="col-sm-6 item">
                                    <h3 class="subtitle">Zainteresowania
                                        <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                                                <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                                    <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </h3>

                                    <div>
                                        <ul>
                                            <li>żywność</li>
                                            <li>sport</li>
                                            <li>literatura</li>
                                            <li>muzyka</li>
                                            <li>joga</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-sm-6 item mob-margin-top-45">
                                    <h3 class="subtitle">Dodatkowe umiejętności
                                        <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                                                <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                                    <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </h3>

                                    <!-- Lang 1 -->
                                    <div>
                                    <ul>
                                        <li><span class="year-list">J. angielski </span>- dobry</li>
                                        <li><span class="year-list">Prawo jazdy </span>- kat. B</li>
                                    </ul>
                                    </div>

                                </div>
                            </div><!--.skills-->

                        </div><!--.container-->
                    </div><!--.content-->
                </section>
                <!--End About Section-->

                <!--Start Resume Section-->
                <section class="resume padding-bottom-90 pt-page" id="resume">
                    <div class="content">
                        <div class="container">
                            <div class="sec_title">
                                <h2>Życiorys</h2>
                            </div>
                            <div class="row">

                                <!--Education-->
                                <div class="col-md-6">
                                    <h3 class="subtitle">Edukacja
                                        <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                                                <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                                    <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </h3>

                                    <div class="item">
                                        <div class="date">
                                            <span>02.2016 - 06.2017 </span>
                                        </div>
                                        <div class="content">
                                            <h4>Akademia Morska w Gdyni </h4>
                                            <b>Towaroznawstwo i Zarządzanie Jakością (magisterskie)</b>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="date">
                                            <span>09.2012 - 02.2016</span>
                                        </div>
                                        <div class="content">
                                            <h4>Akademia Morska w Gdyni</h4>
                                            <b>Towaroznawstwo i Zarządzanie Jakością (inżynierskie)</b>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="date">
                                            <span>2005 - 2007</span>
                                        </div>
                                        <div class="content">
                                            <h4>Technikum Hotelarskie w Mrągowie</h4>
                                            <b>Technik hotelarstwa</b>
                                        </div>
                                    </div>

                                </div><!--.col-md-6-->

                                <!--Experience-->
                                <div class="col-md-6 mobSmart-margin-top-40">
                                    <h3 class="subtitle">Doświadczenie
                                        <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                                                <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                                    <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </h3>

                                    <div class="item">
                                        <div class="date">
                                            <span>01.07.2019 - … </span>
                                        </div>
                                        <div class="content">
                                            <h4>Polskie Mięso i Wędliny ŁUKOSZ</h4>
                                            <b>Technolog</b>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="date">
                                            <span>01.12.2017-31.12.2018 </span>
                                        </div>
                                        <div class="content">
                                            <h4>Bałtycki Terminal Zbożowy Sp. z o. o. w Gdyni</h4>
                                            <b>Specjalista ds. Jakości, pełnomocnik Zespołu HACCP</b>
                                            <a class="responsibility-link">Pokaż zakres obowiązków</a>
                                            <div class="responsibility">
                                                <ul>
                                                    <li>
                                                        nadzór nad prawidłowym funkcjonowaniem systemów zarządzania ( ISO 22000 oraz
                                                        GMP+B3),</li>

                                                        <li>weryfikacja procedur, polityki bezpieczeństwa żywności oraz GMP + B3, księgi HACCP ,</li>
                                                        <li>pełnienie roli pełnomocnika ds. HACCP,</li>
                                                        <li>przeprowadzanie wewnętrznych audytów i inspekcji,</li>
                                                        <li>przeprowadzanie szkoleń wewnętrznych dotyczących systemu ISO 22000, GMP + B3,</li>
                                                        ogólnych zasad GHP/GMP obowiązujących w zakładzie, procedur,</li>
                                                        <li>przedstawiciel w trakcie audytów jednostek certyfikujących oraz podczas inspekcji
                                                        weterynaryjnych i sanitarno-epidemiologicznych,</li>
                                                        <li>nadzorowanie spełniania procedur oraz wymagań GHP/GMP przez pracowników firmy,</li>
                                                        <li>zlecanie badań laboratoryjnych zbóż oraz pełnienie kontroli nad ich prawidłowością,</li>
                                                        <li>przyjmowanie oraz rozpatrywanie reklamacji,</li>
                                                        <li>koordynowanie dezynsekcji,</li> dezynfekcji oraz deratyzacji a także w razie potrzeby
                                                        fumigacji,</li>
                                                        <li>nadzór nad czystością zakładu (zarówno części magazynowych jak i biur), utrzymywanie
                                                        kontaktu z firmą sprzątającą,</li>
                                                        <li>pozyskiwanie ofert na potrzebne sprzęty i usługi dotyczące GHP oraz systemów
                                                        zarządzania,</li>
                                                        <li>dokonywanie zmian w istniejących procedurach jak i tworzenie nowych,</li>
                                                        <li>realizowanie przeglądu zarządzania,</li>
                                                        <li>analiza zagrożeń,</li>
                                                        <li>przeprowadzanie auditów u dostawcy oraz ich oceny rocznej,
                                                        <li>koordynowanie i przydzielanie działań korygujących.
                                                    </li>
                                                </ul>
                                                <a class="responsibility-hide">Zwiń</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="date">
                                            <span>01.12.2016-30.11.2017 </span>
                                        </div>
                                        <div class="content">
                                            <h4>JS HAMILTON</h4>
                                            <b>Analityk</b>
                                            <a class="responsibility-link">Pokaż zakres obowiązków</a>
                                            <div class="responsibility">
                                                <ul>
                                                    <li>obsługa mineralizatorów mikrofalowych tj.:
                                                        <ol>
                                                            <li>MarsXpress</li>
                                                            <li>ETHOS UP</li>
                                                            <li>UltraWAVE</li>
                                                            <li>SpeedWave - Berghof</li>
                                                            <li>Magnum II</li>
                                                        </ol>
                                                    </li>
                                                    <li>przygotowywanie próbek żywności, kosmetyków, suplementów diety do mineralizacji,</li>
                                                    <li>rozcieńczanie roztworów,</li>
                                                    <li>uzupełnianie dokumentacji laboratoryjnej (wymaganej przez systemy zarządzania m.in.:
                                                        PN-EN ISO/IEC 17025)</li>
                                                </ul>
                                                <a class="responsibility-hide">Zwiń</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="date">
                                            <span>25.07.2016-31.08.2016</span>
                                        </div>
                                        <div class="content">
                                            <h4>Chemirol</h4>
                                            <b>Laborant przy ocenie zbóż</b>
                                            <a class="responsibility-link">Pokaż zakres obowiąków</a>
                                            <div class="responsibility">
                                                <ul>
                                                    <li>oznaczanie wilgotności i gęstości,</li>
                                                    <li>oznaczanie białka, glutenu, wody, sedymentacji,</li>
                                                    <li>wyznaczanie liczby opadania,</li>
                                                    <li>sprawdzanie czystości zboża,</li>
                                                    <li>ocena organoleptyczna zboża,</li>
                                                    <li>oznaczanie ilości oraz rodzaju zanieczyszczeń występujących w zbożu,</li>
                                                    <li>wykonywanie analiz zboża na rzecz zleceniodawców,</li>
                                                    <li>uzupełnianie dokumentacji laboratoryjnej,</li>
                                                    <li>dokonywanie zapisów z analiz,</li>
                                                    <li>korespondencja mailowa,</li>
                                                    <li>obsługa sprzętu laboratoryjnego tj.: gęstościomierz wilgotnościomierz (w tym ręczny),
                                                    granomat, urządzenie do oznaczania liczby opadania (falling number 1305), analizator
                                                    spektrofotometryczny, młynek nożowy, wialnia.</li>
                                                </ul>
                                                <a class="responsibility-hide">Zwiń</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="date">
                                            <span>03.08.2015-31.08.2015</span>
                                        </div>
                                        <div class="content">
                                            <h4>Powiatowa Stacja Sanitarno-Epidemiologiczna </h4>
                                            <p>Praktyki w sekcji
                                                bezpieczeństwa i higieny żywności i żywienia</p>
                                        </div>
                                    </div>

                                </div><!--.col-md-6-->
                            </div><!--.row-->
                        </div><!--.container-->
                    </div><!--.content-->
                </section>
                <!--End Resume Section-->


                <!--Start Services Section-->
                <section class="services padding-bottom-90 pt-page" id="services">
                    <div class="content">
                        <div class="container">
                            <div class="sec_title">
                                <h2>Kwalifikacje i umiejętności</h2>
                            </div>
                            <div class="row">

                                <!--Service 2-->
                                <div class="col-sm-6 item">
                                    <div class="content">
                                        <div class="font-icon">
                                            <i class="pe-7s-cup"></i>
                                        </div>
                                        <div class="service_content">
                                            <h3>Kwalifikacje</h3>
                                            <ul>
                                                <li><span class="year-list">2018 r.</span> - Certyfikat Audytora wewnętrznego systemów bezpieczeństwa żywności GMP/GHP
                                                oraz HACCP według ISO 22000:2005 – TÜV SÜD Polska Sp. z o. o.,</li>
                                                <li><span class="year-list">2018 r.</span> - Certyfikat Auditora bezpieczeństwa żywności wg ISO 22000, HACCP, GHP/GMP
                                                - European Standards Institute,</li>
                                                <li><span class="year-list">2018 r.</span> - Certyfikat Pełnomocnika zintegrowanych systemów bezpieczeństwa żywności ISO
                                                22000, IFS Food, BRC Food - European Standards Institute,</li>
                                                <li><span class="year-list">2018 r.</span> - Certyfikat Auditora wewnętrznego ISO 22000/HACCP - European Standards Institute,</li>
                                                <li><span class="year-list">2018 r.</span> - Certyfikat Auditora wewnętrznego standardów BRC Food i IFS Food - European
                                                Standards Institute,</li>
                                                <li><span class="year-list">2018 r.</span> - Certyfikat Managera systemu ISO 9001 (wymagania normy ISO 9001:2015, ISO
                                                19011) - European Standards Institute,</li>
                                                <li><span class="year-list">2017 r.</span> - Pozytywnie zdany egzamin na Pełnomocnika ds. Zarządzania Jakością - PCBC,</li>
                                                <li><span class="year-list">2016 r.</span> - Certyfikat Asystenta ds. Zarządzania Bezpieczeństwem i Higieną Pracy - PCBC,</li>
                                                <li><span class="year-list">2016 r.</span> - Zaświadczenie o zdanym egzaminie na Auditora wewnętrznego Systemu Zarządzania
                                                Bezpieczeństwem Żywności - PCBC,</li>
                                                <li><span class="year-list">2016 r.</span> - Współautorka artykułu naukowego pt. „Ocena funkcjonowania systemu HACCP
                                                według opinii pracowników restauracji – studium przypadku”,</li>
                                                <li><span class="year-list">2015 r.</span> - Certyfikat Asystenta ds. Zarządzania Jakością - PCBC,</li>
                                                <li><span class="year-list">2015 r.</span> - Certyfikat Asystenta ds. Zarządzania Środowiskowego - PCBC.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!--Service 3-->
                                <div class="col-sm-6 item">
                                    <div class="content">
                                        <div class="font-icon">
                                            <i class="pe-7s-graph1"></i>
                                        </div>
                                        <div class="service_content">
                                            <h3>Umiejętności</h3>
                                            <ul>
                                                <li>Przeprowadzanie analizy zagrożeń,</li>
                                                <li>Znajomość standardów ISO 22000, GMP + B3, ISO 19011, ISO 9001, ISO 14001, IFS, BRC,</li>
                                                <li>Przeprowadzanie auditów wewnętrznych,</li>
                                                <li>Przeprowadzanie auditów dostawcy,</li>
                                                <li>Tworzenie schematów blokowych,</li>
                                                <li>Przeprowadzanie szkoleń wewnętrznych,</li>
                                                <li>Tworzenie nowych oraz weryfikacja starych procedur i instrukcji,</li>
                                                <li>Nadzór nad dokumentacją,</li>
                                                <li>Przeprowadzanie inspekcji i kontroli wewnętrznych,</li>
                                                <li>Nadzór nad higienicznym stanem zakładu,</li>
                                                <li>Samodzielność i dokładność w realizowaniu powierzonych zadań,</li>
                                                <li>Dobra organizacja własnej pracy,</li>
                                                <li>Umiejętność obsługi urządzeń biurowych,</li>
                                                <li>Prawo jazdy kat. B,</li>
                                                <li>znajomość MS Office,</li>
                                                <li>znajomość rysunku technicznego,</li>
                                                <li>umiejętność posługiwania się suwmiarką,</li>
                                                <li>nadzór nad prawidłowością funkcjonowania systemu zarządzania bezpieczeństwem żywności wg ISO 22000,</li>
                                                HACCP/GHP oraz GMP + B3.
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div><!--.row-->
                        </div><!--.container-->
                    </div><!--.content-->
                </section>
                <!--End Services Section-->

                <!--Start Contact Section-->
                <section class="contact padding-bottom-90 pt-page" id="contact">
                    <div class="content">
                        <div class="container">
                            <div class="sec_title">
                                <h2>Kontakt</h2>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <h3 class="subtitle">Informacje kontaktowe
                                        <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                                                <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                                    <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </h3>
                                    <div class="info">

                                        <div class="item">
                                            <span class="pe-7s-map-marker pe-3x pe-va icon"></span>
                                            <div>
                                                <span>Adres</span>
                                                <p>Żabi Róg, 14-300 Morąg</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <span class="pe-7s-mail pe-3x pe-va icon"></span>
                                            <div>
                                                <span>E-mail</span>
                                                <p><a href="mailto:skukowska_paulina@wp.pl">skukowska_paulina@wp.pl</a></p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <span class="pe-7s-call pe-3x pe-va icon"></span>
                                            <div>
                                                <span>Tel.</span>
                                                <p>537 032 318</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <h3 class="subtitle">Formularz kontaktowy
                                        <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                                                <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                                    <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </h3>
                                    <div class="contact_form">
                                        <form action="send.php" method="post">
                                            <input placeholder="Imię i nazwiko / Firma" name="name" type="text" class="form-control">
                                            <input placeholder="E-mail" name="email" type="email" class="form-control">
                                            <textarea placeholder="Wiadomość" name="message" class="form-control"></textarea>
                                            <div class="submit btn btn-lg btn-success btn-block">Wyślij</div>
                                            <!--Contact form message-->
                                            <div class="msg_success"><p>Your message has been sent. Thank you!</p></div>
                                            <div class="msg_error"><p>Sorry your message can not be sent.</p></div>
                                            <!--End contact form message-->
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div><!--.container-->
                    </div><!--.content-->
                </section>
                <!--End Contact Section-->


            </div><!--.page-inner-->
        </div><!--.page-right-->
    </div><!--.splitlayout-->

    <!--jquery.min.js')}}-->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!--jquery.min.js-->
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>

    <!--jquery.matchHeight-min.js-->
    <script src="{{asset('js/jquery.matchHeight-min.js')}}"></script>

    <!--jquery.alterclass.js-->
    <script src="{{asset('js/jquery.alterclass.js')}}"></script>

    <!--bootstrap.min.js-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!--modernizr.custom.js-->
    <script src="{{asset('js/modernizr.custom.js')}}"></script>

    <!--typed.min.js-->
    <script src="{{asset('js/typed.min.js')}}"></script>

    <!--responsiveslides.min.js-->
    <script src="{{asset('js/responsiveslides.min.js')}}"></script>

    <!--jquery.fittext.js-->
    <script src="{{asset('js/jquery.fittext.js')}}"></script>

    <!--isotope.pkgd.min.js-->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>

    <!--slick.js-->
    <script src="{{asset('js/slick.js')}}"></script>

    <!--jquery.magnific-popup.min.js-->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

    <!-- Main script js -->
    <script src="{{asset('js/custom.js')}}"></script>

    <script src="{{asset('js/custom/custom.js')}}"></script>
</body>
</html>

