<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .gallery-Button li {
            background-color: #3240c3;
            border-radius: 50px;
            padding: 12px 25px;
            color: white;
            margin: 0 10px;
            display: inline-block;
            margin: 0 10px;
            cursor: pointer;
        }
      
        .gallery-Button li:active{
            background-color: #13194f;
        }
        .container .gallery-Button {
            margin-bottom: 30px;
        }

        .thumb a {
            overflow: hidden;
            display: block;
            height: 195px;
        }
    </style>
    <?php
    include './components/headLinks.php';
    ?>
    <title>Portfolio</title>
    <style>
        body {
            font-family: "Fira Sans", sans-serif;
            background-color: #f1f1f1;
            /* background-color: red; */
            margin: 0 0;
        }

        .thumb {
            margin-bottom: 15px;
        }

        .thumb:last-child {
            margin-bottom: 0;
        }

        .thumb figure img {
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }

        .thumb figure:hover img {
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
        }
    </style>
</head>

<body data-spy="scroll" data-target="#fixedNavbar">
    <?php
    include './components/header.php';
    ?>
    <div class="page-wrapper">
        <section class="breadcrumb-section section"
            style="background-image: url('https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cG9ydGZvbGlvfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60');"
            data-scroll-index="0" data-jarallax="" data-speed="0.6s">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-center">
                            <h1>Portfolio</h1>
                            <p class="text-light">Explore Our Work</p>
                            <ul class="breadcrumb-links">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">
                                    About Us
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <a href="#" class="scroll-top-btn" data-scroll-goto="0"><i class="fa fa-arrow-up"></i></a>
    <div id="preloader-wrap">
        <div class="preloader-inner">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->

    <section class="container">
        <h1 class="my-4 text-center text-lg-center">View Our Work</h1>
        <p class=" my-4 text-center text-lg-center">We have been delivering web development and digital marketing
            projects
            for very long. Here is some <br>
            work that will help you understand us better.</p>

        <div class="container gallery-Button">
            <ul>
                <li class="cursorISpointer  list-unstyled font-weight-bold">
                    All
                </li>
                <li class="cursorISpointer list-unstyled font-weight-bold">
                    Web Designing
                </li>
                <li class="cursorISpointer list-unstyled font-weight-bold">
                    Logo Designing
                </li>
                <li class="cursorISpointer list-unstyled font-weight-bold">
                    Banner Designing
                </li>
                <li class="cursorISpointer list-unstyled font-weight-bold">
                    Visiting Card
                </li>
            </ul>

        </div>

        <div class="row gallery">
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img (1).png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (1).png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img (2).png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (2).png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img (3).png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (3).png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img (4).png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (4).png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img (5).png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (5).png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img (6).png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (6).png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img(7).png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img(7).png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img(8).jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img(8).jpg" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/img(9).jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img(9).jpg" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/multi-store.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/multi-store.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/prime-exodus.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/prime-exodus.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/mother-day.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/mother-day.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/lucky-tent-house.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/lucky-tent-house.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/washing-machine.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/washing-machine.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/eledant.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/eledant.jpg" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/aarav.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/aarav.jpg" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/summer.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/summer.jpg" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/summer2018.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/summer2018.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/summer2018Collection.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/summer2018Collection.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/organic.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/organic.png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/1ExpressSolution.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/1ExpressSolution.png"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/MG.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/MG.png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/pandit-fast-and.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/pandit-fast-and.png"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/unique-dry.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/unique-dry.png"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/aakash-hope.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/aakash-hope.png"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/prime-exodus-logo-white.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/prime-exodus-logo-white.png"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/a-class.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/a-class.png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/neo-cleaner.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/neo-cleaner.png"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/JG.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/JG.png" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/Ietoo.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/Ietoo.jpg" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/code-dreamz.png">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/code-dreamz.png"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/fit-axis.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/fit-axis.jpg" alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/aClass-Custromer.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/aClass-Custromer.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/gian-barsana.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/gian-barsana.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/unique-dry-all-type.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/unique-dry-all-type.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="./img/portfolio/unique-dry-rahul-kanoj.jpg">
                    <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/unique-dry-rahul-kanoj.jpg"
                            alt="Random Image">
                    </figure>
                </a>
            </div>
        </div>
    </section>
    <!-- Gallery Section -->


    <!-- footer -->
    <?php include './components/footer.php' ?>

    <!-- footer -->

    <!-- custom script -->
    <?php
include './components/jqueryScripts.php';
?>
    <!-- custom script magnify popup-->
    <script>
        $(document).ready(function () {
            $(".gallery").magnificPopup({
                delegate: "a",
                type: "image",
                tLoading: "Loading image #%curr%...",
                mainClass: "mfp-img-mobile",
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                }
            });
        });
    </script>
 

</body>


</html>