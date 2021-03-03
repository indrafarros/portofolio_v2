<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indra Mochamad Farros</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom JS -->
    <script src="script/custom.js"></script>

    <!-- Animated JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <!-- Box Icon -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .text-anim .letter {
            display: inline-block;
            line-height: 1em;
            text-shadow: 2px 2px black;
        }

        .border:hover {
            transform: translateY(-5px) scale(1.005) translateZ(0);

            /* box-shadow: 0 14px 26px rgba(0, 0, 0, 0.04); */
            transition: all 0.3s ease-out;
        }

        hr.hr-4 {
            border: 0;
            height: 1px;
            color: #fe4a49;
            background-image: linear-gradient(to right, #ccc, #333, #ccc);
        }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset='70'>
    <div id="loading" class="bg-dark"></div>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-white fixed-top">
            <h1>
                <a href="" class="navbar-brand ml-4 logo">Indra.</a>
            </h1>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseibleNavbar">
                <i class="bx bx-menu"></i>
                <i class="bx bx-x" style="display:none"></i>
            </button>

            <!-- nav -->
            <div class="collapse navbar-collapse justify-content-end" id="collapseibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item py-3 py-md-0 mx-sm-2"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item py-3 py-md-0 mx-sm-2 "><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item py-3 py-md-0 mx-sm-2 "><a href="#skills" class="nav-link">Skills</a></li>
                    <li class="nav-item py-3 py-md-0 mx-sm-2"><a href="#work" class="nav-link">Portofolio</a></li>
                    <li class="nav-item py-3 py-md-0 mx-sm-2"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Section -->
    <section id="home">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fed766" fill-opacity="1" d="M0,224L60,208C120,192,240,160,360,133.3C480,107,600,85,720,69.3C840,53,960,43,1080,74.7C1200,107,1320,181,1380,218.7L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
        <div class="container my-4 py-4 my-md-4 py-md-5" id="mobile-top">
            <div class="row my-4 py-4 my-md-4 py-md-5">

                <div class="social-media col-2 col-md-2 pt-4 mt-3 pt-md-0 mt-md-0">
                    <li class="py-2">
                        <i class='bx bxl-instagram'></i>
                    </li>
                    <li class="py-2">
                        <a href="https://github.com/indrafarros" class="text-dark" target="_blank" style="text-decoration:none"><i class='bx bxl-github'></i></a>
                    </li>
                    <li class="py-2">
                        <i class='bx bxl-dribbble'></i>
                    </li>
                </div>
                <div class="col-10 col-sm-12 col-md-8 pt-5">
                    <h5 class="mb-4">Hi, my name is.</h5>
                    <p style="font-size: 46px"><span class="theme-text text-anim font-weight-bold">Indra Mochamad Farros.</span></p>
                    <h5 class="mt-5 mb-5">Web Developer</h5>
                    <button class="mt-5 mb-5 btn btn-lg btn-outline-dark mt-2 px-4 shadow shadow-sm"><a href="#about" style="color: black; text-decoration:none">About me</a></button>
                </div>
                <!-- <div class="col-sm-12 col-md-5" id="person-img"></div> -->

            </div>
        </div>
    </section>

    <section id="about" class="my-md-4 py-md-3">
        <div class="container my-md-4 py-md-3">
            <div class="row" data-aos="zoom-in-up">
                <div class="title col-12 col-md-2">
                    <h1 class="pb-4 py-md-0">Ab<span class="theme-text">out.</span></h1>
                </div>
                <div class="col-12 col-md-5 col-lg-5">
                    <h4>Indra Mochamad Farros <small class="ml-2"> <button class="btn btn-dark"><i>Web Developer</i></button></small></h4>
                    <hr>
                    <p style="text-align: justify">I live in Bekasi, graduated from the Indonesian Computer University (UNIKOM). Junior Web Developer who has interests in front-end and back-end web developers, I have completed several projects and look forward to expanding my knowledge and creating more works.</p>
                </div>
                <div class="col-sm-12 col-md-5" id="person-img"></div>
            </div>
            <div class="row mt-5" data-aos="zoom-in-up">
                <div class="col-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge danger"><i class='bx bxs-graduation' style='color:#ffffff'></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Indonesian Computer University</h4>
                                    <p><small class="text-muted"><i class='bx bxs-time'></i> 2020</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge warning"><i class='bx bxs-graduation' style='color:#ffffff'></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">SMA Korpri Bekasi</h4>
                                    <p><small class="text-muted"><i class='bx bxs-time'></i> 2015</small></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge"><i class='bx bxs-graduation' style='color:#ffffff'></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">SMPN 6 Tambun Selatan</h4>
                                    <p><small class="text-muted"><i class='bx bxs-time'></i> 2012</small></p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" data-aos="zoom-in">
        <div class="container my-md-4 py-md-3">
            <div class="row">
                <div class="col-12 col-lg-7 col-md-8">
                    <h4>Skills <small class="ml-2"><button class="btn btn-dark"><i>My knowledge</i></button></small></h4>
                    <p style="text-align:justify">I have experience making web with the following technologies </p>
                    <p class="p-3 border text-center">
                        <img src="./images/html.png" width="8%"></img>
                        <img src="./images/css.png" width="8%"></img>
                        <img src="./images/js.png" width="8%"></img>
                        <img src="./images/btp.png" width="8%"></img>
                        <img src="./images/php.png" width="8%"></img>
                        <img src="./images/javase.png" width="17%"></img>
                        <img src="./images/codeigniter.png" width="8%"></img>
                        <img src="./images/mysql.png" width="8%"></img>

                    </p>
                </div>
                <div class="title col-12 col-sm-12 col-md-5">
                    <h1 class="py-4 py-md-0">Sk<span class="theme-text">ills.</span></h1>
                    <p style="text-align:justify">->Junior Web Developer BNSP (Badan Nasional Sertifikasi Profesi), 2019. (View)</p>
                    <p style="text-align:justify">->Sertifikat Toefl dari English Department, Universitas Komputer Indonesia. (Skor : 483) (View)</p>
                    <p style="text-align:justify">->Sertifikasi Magang PT. Telekomunikasi Indonesia, Tbk Witel Bandung. (View)</p>
                </div>
            </div>
            <!-- <div class="row my-5 py-3 border" data-aos="zoom-in">
                <div class="col-lg-12">
                    <div class="row text-center">
                        <div class="col-lg-6">
                            <h3 class="py-3">Web Development</h3>
                            <div class="text-left">
                                <div class="progress-con py-3 my-3 p-3">
                                    <h5>HTML</h5>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="progress-con py-3 my-3 p-3">
                                    <h5>HTML</h5>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="progress-con py-3 my-3 p-3">
                                    <h5>HTML</h5>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="py-3">UI/UX</h3>
                            <div class="text-left">
                                <div class="progress-con my-3 p-3">
                                    <h5>Adobe XD</h5>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                                <div class="progress-con my-3 p-3">
                                    <h5>Adobe XD</h5>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section id="work" class="my-md-3 py-md-3">
        <div class="container" class="my-md-3 py-md-3" data-aos="zoom-in-down" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="row">
                <div class="title col-12 col-md-4">
                    <h1 class="pb-5 pb-md-0">Wo<span class="theme-text">rks.</span></h1>
                </div>
                <div class="col-12 col-md-8 col-lg-8">
                    <h4>Work<small class="ml-2"><button class="btn btn-dark"><i>Some Things I've Built</i></button></small></h4>
                    <p style="text-align:justify">I have an internship experience at PT. Telekomunikasi Indonesia WITEL Bandung as Management Data Access for 1 month, and I have a personal project that I have created using the technology that I have learned. </p>

                </div>
            </div>
            <div class="container my-5 my-md-3 py-3 py-md-0 work-info">
                <nav class="navbar navbar-expand justify-content-center">
                    <ul class="navbar-nav" id="work-nav">
                        <li class="nav-item mx-sm-3 mx-md-5">
                            <p class="nav-link all" id="active" onclick="display('all')">All</p>
                        </li>
                        <li class="nav-item mx-sm-3 mx-md-5">
                            <p class="nav-link api" onclick="display('api')">Web Apps</p>
                        </li>
                        <li class="nav-item mx-sm-3 mx-md-5">
                            <p class="nav-link all" onclick="display('web')">Desktop</p>
                        </li>
                        <li class="nav-item mx-sm-3 mx-md-5">
                            <p class="nav-link all" onclick="display('game')">Landing Page</p>
                        </li>
                    </ul>
                </nav>
                <div class="row justify-content-center" id="work-container">
                    <div id="api" class="col-12 col-md-8 col-lg-5 p-5 m-4 border">
                        <h4 class="text-center">Online Store</h4>
                        <div class="text-center">
                            <!-- <i class="bx bx-fingerprint p-3"></i> -->
                            <img src="./images/online.png" width="50%"></img>
                        </div>
                        <p class="mt-4" style="text-align:justify">Menggunakan Codeigniter 3,dan Rajaongkir API untuk mengetahui ongkos kirim</p>
                        <p class="text-center">
                            <img src="./images/html.png" width="14%"></img>
                            <img src="./images/css.png" width="14%"></img>
                            <img src="./images/js.png" width="14%"></img>
                            <img src="./images/btp.png" width="14%"></img>
                            <img src="./images/codeigniter.png" width="14%"></img>
                            <img src="./images/mysql.png" width="14%"></img>
                        </p>
                        <div class="float-right mt-4">
                            <div class="btn btn-lg btn-dark mt-3 px-4 mr-2">View</div>
                            <div class="btn btn-lg btn-dark mt-3 px-4">View</div>
                        </div>
                    </div>
                    <div id="game" class="col-12 col-md-8 col-lg-5 p-5 m-4 border">
                        <h4 class="text-center">Pemesanan Cathering</h4>
                        <div class="text-center">
                            <img src="./images/mycath.png" width="50%"></img>
                        </div>
                        <p class="mt-4" style="text-align:justify">Landing Page menggunakan Bootstrap 4</p>
                        <p class="text-center">
                            <img src="./images/html.png" width="14%"></img>
                            <img src="./images/css.png" width="14%"></img>
                            <img src="./images/btp.png" width="16%"></img>
                        </p>
                        <div class="btn btn-lg btn-dark mt-3 px-4 float-right">View</div>
                    </div>
                    <div id="api" class="col-12 col-md-8 col-lg-5 p-5 m-4 border">
                        <h4 class="text-center">Sistem Informasi Geografis</h4>
                        <div class="text-center">
                            <!-- <i class="bx bx-fingerprint p-3"></i> -->
                            <img src="./images/webgis.png" width="50%"></img>
                        </div>
                        <p class="mt-4" style="text-align:justify">Sistem Informasi Pemetaan UMKM dan Pendaftaran Pelatihan di Kecamatan. Dibuat untuk memenuhi Skripsi.</p>
                        <p class="text-center">
                            <img src="./images/html.png" width="14%"></img>
                            <img src="./images/css.png" width="14%"></img>
                            <img src="./images/js.png" width="14%"></img>
                            <img src="./images/btp.png" width="14%"></img>
                            <img src="./images/php.png" width="14%"></img>
                            <img src="./images/mysql.png" width="14%"></img>
                        </p>
                        <div class="float-right mt-4">
                            <div class="btn btn-lg btn-dark mt-3 px-4 mr-2">View</div>
                            <div class="btn btn-lg btn-dark mt-3 px-4">View</div>
                        </div>
                    </div>
                    <div id="api" class="col-12 col-md-8 col-lg-5 p-5 m-4 border">
                        <h4 class="text-center">Inventori Toko Buku</h4>
                        <div class="text-center">
                            <img src="./images/inventori-produk.png" width="62%"></img>
                        </div>
                        <p class="mt-4" style="text-align:justify">Menggunakan Codeigniter 3 dan menggunakan ajax sebagai CRUD.</p>
                        <p class="text-center">
                            <img src="./images/codeigniter.png" width="14%"></img>
                            <img src="./images/mysql.png" width="14%"></img>
                        </p>
                        <div class="btn btn-lg btn-dark mt-3 px-4 float-right">View</div>
                    </div>

                    <div id="web" class="col-12 col-md-8 col-lg-5 p-5 m-4 border">
                        <h4 class="text-center">Sistem Informasi Apotek</h4>
                        <div class="text-center">
                            <img src="./images/kasir.png" width="70%"></img>
                        </div>
                        <p class="mt-4" style="text-align:justify">Membuat aplikasi apotek dengan Java SE dan memiliki 3 role user. Memili modul kasir, gudang dan admin.</p>
                        <p class="text-center">
                            <img src="./images/javase.png" width="40%"></img>
                            <img src="./images/css.png" class="mr-4" width="14%"></img>
                            <img src="./images/mysql.png" width="16%"></img>
                        </p>
                        <div class="btn btn-lg btn-dark mt-3 px-4 float-right">View</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="mt-4 pt-5 mt-md-2 pt-md-2">
        <div class="container-fluid jumbotron jumbotron-fluid mb-0 mt-4 pt-5" style="background-color:#a8b8d0!important">
            <div class="title col-12 col-md-12">
                <h1 class="pb-3">Con<span class="theme-text">tacts.</span></h1>
                <hr style="width:50%; border: 1.4px solid; margin:auto; margin-bottom: 12px;" class="hr-4">
                <div class="col-12 col-md-12 col-md-8 col-lg-8 mx-auto">
                    <form action="" class="col-12 col-sm-12 col-md-8 mx-auto">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea name="msg" class="form-control" id="msg"></textarea>
                        </div>
                        <div class="btn btn-dark">Submit</div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-fluid py-3" style="background-color: #fed766 !important;">
            <div class="row">
                <div class="foot-icon d-flex flex-row justify-content-center col-12 py-4">
                    <li class="mx-3"><i class='bx bxl-github' style='color:#fe4a49'></i></li>
                    <li class="mx-3"><i class='bx bxl-linkedin-square' style='color:#fe4a49'></i></li>
                    <li class="mx-3"><i class='bx bxl-whatsapp' style='color:#fe4a49'></i></li>
                </div>
                <div class="copyright col-12 d-flex justify-content-center">
                    <h4 style="color:#fe4a49">2021 @ Indra Mochamad Farros</h4>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

<script>
    AOS.init();


    var textWrapper = document.querySelector('.text-anim');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    anime.timeline({
            loop: false
        })
        .add({
            targets: '.text-anim .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 2250,
            delay: (el, i) => 150 * (i + 1)
        });
</script>

<script>
    $(window).load(function() {
        $('#loading').hide();
    });
</script>

</html>