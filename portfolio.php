<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include './components/headLinks.php';
    ?>
    <title>Portfolio</title>
    <!--! gallery  image zoom and path-->
    <style>
        body {
            font-family: "Fira Sans", sans-serif;
            background-color: #f1f1f1;
            /* background-color: red; */
            margin: 0 0;
        }

        .thumb {
            margin-bottom: 100px;
            width: 100%;
            height: 253px;
            padding: 40px;
        }

        .thumb:last-child {
            margin-bottom: 100px;
        }

        .thumb figure img {
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }

        .thumb figure:hover img {
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
        }

        .content img {
            width: 100%;
            height: 253px;
            object-fit: cover;
            ;
        }
    </style>
    <!-- ! styling for filtering image -->
    <style>
        .main {
            max-width: 1000px;
            margin: auto;
        }

        .row {
            margin: 10px -16px;
        }

        /* Add padding BETWEEN each column */
        .row,
        .row>.column {
            padding: 8px;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            display: none;
            /* Hide all elements by default */
        }

        /* Clear floats after rows */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Content */
        .content {
            background-color: white;
            padding: 10px;
        }

        /* The "show" class is added to the filtered elements */
        .show {
            display: block;
        }

        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: white;
            cursor: pointer;
        }
        .currentActive:active{
            background-color: #a2ca1d;
            color: white;
        }
        .btn:hover {
            background-color: #ddd;
        }

        .btn:active {
            background-color: #ac3636;
            color: white;
        }
    </style>
    <!-- ! styling for filtering image -->

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
            work that will help you understand us better.
        </p>
        <div class="main">
            <hr>
            <div id="myDIV">
                <!-- <button class="btn active">test</button> -->
                <button class="btn currentActive" onclick="filterSelection('all')">ALL</button>
                <button class="btn" onclick="filterSelection('web-d')">WEB DESIGNING</button>
                <button class="btn" onclick="filterSelection('logo-d')">LOGO DESIGNING</button>
                <button class="btn" onclick="filterSelection('banner-d')">BANNER DESIGNING</button>
                <button class="btn" onclick="filterSelection('visiting-c')">VISITING CARD</button>
            </div>
            <!-- Portfolio Gallery Grid -->
            <div class="row gallery">
                <div class="column web-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img (1).png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (1).png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Saira's Cooking</h6>
                    </div>
                </div>
                <div class="column web-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img (2).png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (2).png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>MG Int. Visa Consultancy</h6>
                    </div>
                </div>
                <div class="column web-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img (3).png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (3).png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Pandit Eshwar Ji</h6>
                    </div>
                </div>
                <div class="column web-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img (4).png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (4).png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Teespring</h6>
                    </div>
                </div>
                <div class="column web-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img (5).png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (5).png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Prime Exodus</h6>
                    </div>
                </div>
                <div class="column web-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img (6).png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img (6).png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>1 Express Solutions</h6>
                    </div>
                </div>
                <div class="column web-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img(7).png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img(7).png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Prime Exodus</h6>
                    </div>
                </div>
                <div class="column web-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img(8).jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img(8).jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>SSL Certificate</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/img(9).jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/img(9).jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Multi Store</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/multi-store.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/multi-store.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Multi Store (Mohali)</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/prime-exodus.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/prime-exodus.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Prime Exodus</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/mother-day.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/mother-day.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Cake N Creams</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/lucky-tent-house.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/lucky-tent-house.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Lucky Tent House</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/washing-machine.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/washing-machine.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Unique Dry Cleaners</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/eledant.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/eledant.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Eledent Aligners</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/aarav.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/aarav.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Aarav Group</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/summer.jpg">
                            <figure>
                                <img class="img-fluid img-thumbnail" src="./img/portfolio/summer.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Summer is Coming</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/summer2018.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/summer2018.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Summer 2018</h6>
                    </div>
                </div>
                <div class="column banner-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/summer2018Collection.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/summer2018Collection.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>2018 Summer Collections</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/organic.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/organic.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Organic Vegetables Farming</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/1ExpressSolution.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/1ExpressSolution.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>1 Express Solutions</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/MG.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/MG.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>MG Int. Visa Consultancy</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/pandit-fast-and.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/pandit-fast-and.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Pandit Eshwar Ji</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/unique-dry.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/unique-dry.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Unique Dry Cleaners</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/aakash-hope.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/aakash-hope.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>The Aakash Hope</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/prime-exodus-logo-white.png">
                            <figure><img class="img-fluid img-thumbnail"
                                    src="./img/portfolio/prime-exodus-logo-white.png" alt="Random Image">
                            </figure>
                        </a>
                        <h6>Prime Exodus</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/a-class.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/a-class.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>A Class Garments</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/neo-cleaner.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/neo-cleaner.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Neo Cleaners</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/JG.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/JG.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>JG Quartz and Optical</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/Ietoo.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/Ietoo.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>IETOO Pharmaceuticals</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/code-dreamz.png">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/code-dreamz.png"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Code Dreamz</h6>
                    </div>
                </div>
                <div class="column logo-d thumb">
                    <div class='content'>
                        <a href="./img/portfolio/fit-axis.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/fit-axis.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Fit Axis</h6>
                    </div>
                </div>
                <div class="column visiting-c thumb">
                    <div class='content'>
                        <a href="./img/portfolio/aClass-Custromer.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/aClass-Custromer.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>A Class Garments</h6>
                    </div>
                </div>
                <div class="column visiting-c thumb">
                    <div class='content'>
                        <a href="./img/portfolio/gian-barsana.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/gian-barsana.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>A Class Garments</h6>
                    </div>
                </div>
                <div class="column visiting-c thumb">
                    <div class='content'>
                        <a href="./img/portfolio/unique-dry-all-type.jpg">
                            <figure><img class="img-fluid img-thumbnail" src="./img/portfolio/unique-dry-all-type.jpg"
                                    alt="Random Image">
                            </figure>
                        </a>
                        <h6>Unique Dry Cleaners</h6>
                    </div>
                </div>
                <div class="column visiting-c thumb">
                    <div class='content'>
                        <a href="./img/portfolio/unique-dry-rahul-kanoj.jpg">
                            <figure><img class="img-fluid img-thumbnail"
                                    src="./img/portfolio/unique-dry-rahul-kanoj.jpg" alt="Random Image">
                            </figure>
                        </a>
                        <h6>Unique Dry Cleaners</h6>
                    </div>
                </div>
            </div>

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
    <!--! custom script magnify popup-->
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
    <!--todo Custome scripts for Image Filtering -->


    <script>
        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
            }
        }

        function AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
            }
        }

        function RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

    </script>
    <!--todo Custome scripts for Image Filtering -->


</body>


</html>