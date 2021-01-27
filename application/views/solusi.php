<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Skripsi Olan</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/landing_page/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/landing_page/') ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Skripsi Olan</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>#signup">Contact</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger active" href="<?= base_url('Periksa/'); ?>">Periksa Gitar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Projects-->
    <section class="projects-section bg-light" id="periksa">

        <div class="container">
            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                <li class="nav-item">
                    <h4>Pertanyaan</h4>
                </li>
            </ul>
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <!-- <div class="col-lg-6"><img class="img-fluid" src="<?= base_url('assets/landing_page/') ?>assets/img/login.jpg" alt="" /></div> -->
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h2 class="text-white"></h2>
                                <a class="btn btn-primary mb-0 text-white-50" role="button" href="<?= base_url('Periksa/pemeriksaan/'); ?><?= $pertanyaan['yes'] ?>">
                                    Ya
                                </a>
                                <a class="btn btn-primary mb-0 text-white-50" role="button" href="<?= base_url('Periksa/pemeriksaan/'); ?><?= $pertanyaan['no']; ?>">
                                    Tidak
                                </a>
                                <hr class="d-none d-lg-block mb-0 ml-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h2 class="text-white">Mulai Pemeriksaan Gitar</h2>
                                <a class="btn btn-primary mb-0 text-white-50" role="button" href="<?= base_url('Periksa/pemeriksaan/'); ?><?= $pertanyaan['yes'] ?>">
                                    Ya
                                </a>
                                <a class="btn btn-primary mb-0 text-white-50" role="button" href="<?= base_url('Periksa/pemeriksaan/'); ?><?= $pertanyaan['no']; ?>">
                                    Tidak
                                </a>
                                <hr class="d-none d-lg-block mb-0 ml-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © Skripsi Olan 2021</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/landing_page/') ?>js/scripts.js"></script>
</body>

</html>