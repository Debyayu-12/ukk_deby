<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container">
        <a style="font-size: 30px" class="page-scroll oleo-font navbar-brand" href="#home">Deby Laundry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link px-3 py-2 btn btn-primary rounded-pill text-white" href="<?= base_url('auth/login'); ?>"><i class="fas fa-fw fa-check"></i>Login</a>
                <a class="nav-item nav-link px-3 py-2 btn btn-primary rounded-pill text-white" href="<?= base_url('cek_status'); ?>"><i class="fas fa-fw fa-check"></i>CekLaundry</a>
            </div>
        </div>
    </div>
</nav>

<section class="pt-5">
    <div class="jumbotron jumbotron-fluid bg-info">
        <div class="container text-white text-center">
            <img style="box-shadow: 5px 5px 5px rgba(0,0,0,0.3)" src="<?= base_url(); ?>assets/img/icon2.JPg" alt="logo" class="img-fluid rounded mb-2" width="200">
            <h1 class="text-shadow display-4 oleo-font font-weight-bold">Deby Laundry</h1>

            <h4 class="text-shadow my-3">Mencuci dengan <span class="font-weight-bold">Cepat</span> dan menjaga pakaian tetap <span class="font-weight-bold">Berkualitas.</span></h4>
            <h5 class="text-shadow my-2">Namanya juga hidup pasti banyak <span class="font-weight-bold">Cobaan</span>, kalo banyak <span class="font-weight-bold">Cucian</span> bawa aja ke <span class="font-weight-bold oleo-font">DebyLaundry</span></h5>
        </div>
    </div>
</section>
<footer class="bg-dark text-white p-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 my-3">
                <h3 class="oleo-font">Deby Laundry</h3>
                <div class="row">
                    <div class="col-lg">
                        <span>Copyright &#169; <script type='text/javascript'>
                                var creditsyear = new Date();
                                document.write(creditsyear.getFullYear());
                            </script> <a expr:href='data:blog.homepageUrl'>
                                <data:blog.title />
                            </a>. All rights reserved.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-3">
                <h4>Kontak Kami</h4>
                <div class="row text-left my-2">
                    <div class="col-lg-4"><i class="fab fa-fw fa-whatsapp"></i> Hub. WhatsApp</div>
                    <div class="col-lg-5"><a class="text-white" target="_blank" href="https://api.whatsapp.com/send?phone=+6281222334545">+62 822 5739 0370</a></div>
                </div>
                <div class="row my-2 ml-0">
                    <div class="col-xs-1 mr-2"><a class="text-white" target="_blank" href="https://twitter.com"><i class="fab fa-fw fa-twitter"></i></a></div>
                    <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://facebook.com"><i class="fab fa-fw fa-facebook"></i></a></div>
                    <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://instagram.com"><i class="fab fa-fw fa-instagram"></i></a></div>
                    <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://linkedin.com"><i class="fab fa-fw fa-linkedin-in"></i></a></div>
                    <div class="col-xs-1 mx-2"><a class="text-white" target="_blank" href="https://pinterest.com"><i class="fab fa-fw fa-pinterest"></i></a></div>
                </div>

            </div>
        </div>
    </div>
</footer>