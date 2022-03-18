<!DOCTYPE html>
<html lang="en">
<?php include('links.php');?>
<head>
<title>Clip Your Image - Gallery</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/comparision.css">
    <link rel="stylesheet" href="assets/css/additonal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
</head>

<style>
    a[data-fancybox] img {
        cursor: zoom-in;
    }

    .fancybox__backdrop::after {
        content: "";
        position: absolute;
        width: 10%;
        height: 10%;
        filter: blur(2px);
        left: 50%;
        top: 50%;
        transform: scale(11);
        opacity: 0.3;
        background-image: var(--bg-image);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .fancybox__container {
        --fancybox-bg: #000;

        --fancybox-thumbs-width: 48px;
        --fancybox-thumbs-ratio: 1;

        --carousel-button-bg: rgb(91 78 76 / 74%);

        --carousel-button-svg-width: 24px;
        --carousel-button-svg-height: 24px;

        --carousel-button-svg-stroke-width: 2.5;
    }

    .fancybox__nav {
        --carousel-button-svg-width: 24px;
        --carousel-button-svg-height: 24px;
    }

    .fancybox__nav .carousel__button.is-prev {
        left: 20px;
    }

    .fancybox__nav .carousel__button.is-next {
        right: 20px;
    }

    .carousel__button.is-close {
        right: auto;
        top: 20px;
        left: 20px;
    }

    .fancybox__slide {
        padding: 8px 88px;
    }

    /* Thumbnails */
    .fancybox__thumbs .carousel__slide {
        padding: 8px 8px 16px 8px;
    }

    .is-nav-selected::after {
        display: none;
    }

    .fancybox__thumb {
        border-radius: 6px;
        opacity: 0.4;
    }

    .fancybox__thumb:hover,
    .is-nav-selected .fancybox__thumb {
        border-radius: 6px;
        opacity: 1;
    }

    .is-nav-selected .fancybox__thumb::after {
        display: none;
    }

    .rounded {
        margin-bottom: 10px;
    }
</style>

<body>


    <!-- ***** Header Area Start ***** -->
    <?php include('header.php');?>
    <!-- ***** Header Area End ***** -->

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <!-- <h4>More About Our Service</h4> -->
                        <h1>Our <em>Gallery</em></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa">
                    <a data-fancybox="gallery" href="assets/images/gallery/gallery-page/Change Sky01.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Change Sky01.webp" />
                    </a>
                </div>
                <div class="col-md-3 col-sm-6  col-xs-6"> <a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Change Sky05.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Change Sky05.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/recolor04.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/recolor04.webp " />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/clipping path02.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/clipping path02.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/clipping path08.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/clipping path08.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/clipping path10.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/clipping path10.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/clipping path11.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/clipping path11.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/clipping path13.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/clipping path13.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/clipping path14.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/clipping path14.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/ghost maniquen01.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/ghost maniquen01.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/ghost maniquen02.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/ghost maniquen02.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/ghost maniquen03.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/ghost maniquen03.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/ghost maniquen04.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/ghost maniquen04.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Glamour Retouch05.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Glamour Retouch05.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Glamour Retouch06.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Glamour Retouch06.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Glamour Retouch07.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Glamour Retouch07.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Glamour Retouch08.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Glamour Retouch08.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Jewellery Retouch02.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Jewellery Retouch02.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Masking06.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Masking06.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Masking07.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Masking07.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Phoro_Restoratation.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Phoro_Restoratation.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/Phto Restoratation.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/Phto Restoratation.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/slim body05.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/slim body05.webp" />
                    </a></div>
                <div class="col-md-3 col-sm-6 col-xs-6 gallery-pa"><a data-fancybox="gallery"
                        href="assets/images/gallery/gallery-page/WEDDING03.webp">
                        <img class="rounded" src="assets/images/gallery/gallery-page/WEDDING03.webp" />
                    </a></div>
            </div>
        </div>
    </section>


 <!-- footer start  -->
 <?php include('footer.php'); ?>
<!-- footer end  -->

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<?php include('scripts-links.php'); ?>
      <?php include('common-scripts.php'); ?>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
            dragToClose: false,

            Toolbar: false,
            closeButton: "top",

            Image: {
                zoom: false,
            },

            on: {
                initCarousel: (fancybox) => {
                    const slide = fancybox.Carousel.slides[fancybox.Carousel.page];

                    fancybox.$container.style.setProperty(
                        "--bg-image",
                        `url("${slide.$thumb.src}")`
                    );
                },
                "Carousel.change": (fancybox, carousel, to, from) => {
                    const slide = carousel.slides[to];

                    fancybox.$container.style.setProperty(
                        "--bg-image",
                        `url("${slide.$thumb.src}")`
                    );
                },
            },
        });
    </script>


</body>

</html>