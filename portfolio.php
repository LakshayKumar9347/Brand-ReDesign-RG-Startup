<!DOCTYPE html>
<html lang="en">

<head>
    <!--! sus  -->
    <!-- <style>
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

        .gallery-Button li:active {
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
    </style> -->
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

        .btn:hover {
            background-color: #ddd;
        }

        .btn.active {
            background-color: #666;
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
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')">ALL</button>
                <button class="btn" onclick="filterSelection('web-d')">WEB DESIGNING</button>
                <button class="btn" onclick="filterSelection('logo-d')">LOGO DESIGNING</button>
                <button class="btn" onclick="filterSelection('banner-d')">BANNER DESIGNING</button>
                <button class="btn" onclick="filterSelection('visiting-c')">VISITING CARD</button>
            </div>
            <!-- Portfolio Gallery Grid -->
            <div class="row">
                <div class="column web-d">
                    <div class="content">
                        <img src="./img/portfolio/1ExpressSolution.png" alt="Mountains" style="width:100%">
                        <h6>Mountains</h6>
                    </div>
                </div>
               
                <!-- END GRID -->
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
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
            }
        }

        function w3RemoveClass(element, name) {
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
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
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