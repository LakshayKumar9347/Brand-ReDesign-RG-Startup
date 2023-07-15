<!DOCTYPE html>
<html lang="en">

<head>
    <!-- custom scripts -->
    <?php
    include './components/headLinks.php' 
    ?>
    <?php
    include './components/jqueryScripts.php' 
    ?>
    <!-- custom scripts -->
    <title>Blogs Single Page</title>
</head>

<body data-spy="scroll" data-target="#fixedNavbar">

    <!--// Page Wrapper Start //-->
    <div class="page-wrapper">

        <!--// Header Start //-->
        <?php
    include './components/header.php' 
    ?>

        <!--// Header End  //-->

        <!--// Breadcrumb Section Start //-->
        <section class="breadcrumb-section section" style="background-image: url('img/bg/breadcrumb-img.jpg');"
            data-scroll-index="0" data-jarallax="" data-speed="0.6s">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-center">
                            <h1>Blog Single</h1>
                            <ul class="breadcrumb-links">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">
                                    Blog Single
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Breadcrumb Section end //-->

        <!--// Blog Single Start //-->
        <section class="section sidebar-pb-resp">
            <div class="container">
                <div class="row">
                    <!--!  -->
                    <?php
                $blogID = $_SERVER['QUERY_STRING'];
                $apiEndpoint = "http://localhost:3000/api/blogs/{$blogID}";                
                $blogData = file_get_contents($apiEndpoint);
                if ($blogData !== false) {
                  $blog = json_decode($blogData, true);
                  // Process the fetched blog data
                  if ($blog !== null) {
                    // Blog found, access the data
                    $title = $blog['title'];
                    $description = $blog['description'];
                    $image = $blog['image'];
                    // ...
                    // Process the blog data as needed
                  } else {
                    // Invalid response or error occurred
                    echo "Failed to fetch blog with blogID: {$blogID}";
                  }
                } else {
                  // Error occurred while making the request
                  echo "Error occurred while fetching the blog";
                }
                ?>
             
                    <!--!  -->
                    <div class="col-lg-8">
                        <div class="blog-post-single">
                            <div class="blog-post-img">
                                <img src="http://localhost:3000/uploads/<?php  echo $image ?>" alt="Blog Post Image" class="img-fluid">
                            </div>
                            <div class="blog-text">
                                <h4><?php  echo $title ?></h4>
                                <div class="author-meta">
                                    <a href="#"><span class="far fa-calendar-alt"></span>April 10</a>
                                    <a href="#"><span class="far fa-user"></span>By Admin</a>
                                </div>
                                <p>
                                <?php  echo $description ?>
                                </p>
                                <blockquote>
                                    <q>
                                    <?php  echo $description ?>
                                    </q>
                                </blockquote>
                                <p>
                                <?php  echo $description ?>
                                </p>
                                <div class="comments-wrap">
                                    <h5 class="inner-header-title">Comments (4)</h5>
                                    <div class="comment-item media">
                                        <img src="img/blog/comment-img-1.jpg" alt="Comment image" class="img-fluid">
                                        <div class="comment-item-body">
                                            <h6 class="comment-item-title">Alexandro Corvin</h6>
                                            <div class="comment-meta">
                                                <span><i class="far fa-calendar-alt"></i>June 22 2019</span>
                                            </div>
                                            <p>
                                                It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                            </p>
                                            <a href="#0" class="reply-btn"><i class="fa fa-reply mr-2"></i> Reply </a>
                                        </div>
                                    </div>
                                    <div class="comment-item media">
                                        <img src="img/blog/comment-img-2.jpg" alt="Comment image" class="img-fluid">
                                        <div class="comment-item-body">
                                            <h6 class="comment-item-title">Eduardo Dutra</h6>
                                            <div class="comment-meta">
                                                <span><i class="far fa-calendar-alt"></i>Aqust 05 2019</span>
                                            </div>
                                            <p>
                                                It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                            </p>
                                            <a href="#0" class="reply-btn"><i class="fa fa-reply mr-2"></i> Reply </a>
                                        </div>
                                    </div>
                                    <div class="comment-item sub-comment-item media">
                                        <img src="img/blog/comment-img-3.jpg" alt="Comment image" class="img-fluid">
                                        <div class="comment-item-body">
                                            <h6 class="comment-item-title">George William</h6>
                                            <div class="comment-meta">
                                                <span><i class="far fa-calendar-alt"></i>Aqust 15 2019</span>
                                            </div>
                                            <p>
                                                It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                            </p>
                                            <a href="#0" class="reply-btn"><i class="fa fa-reply mr-2"></i> Reply </a>
                                        </div>
                                    </div>
                                    <div class="comment-item media">
                                        <img src="img/blog/comment-img-4.jpg" alt="Comment image"
                                            class="img-fluid mr-3">
                                        <div class="comment-item-body">
                                            <h6 class="comment-item-title">Adrian George</h6>
                                            <div class="comment-meta">
                                                <span><i class="far fa-calendar-alt"></i>July 05 2019</span>
                                            </div>
                                            <p>
                                                It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                            </p>
                                            <a href="#0" class="reply-btn"><i class="fa fa-reply mr-2"></i> Reply </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="leave-comment-wrapper">
                                    <h5 class="inner-header-title">Leave A Comment</h5>
                                    <p class="blog-title-subline">Your email address will not be published.Required
                                        fields are marked.</p>
                                    <form action="https://aipthemes.com/agencyou/blog-single.php" method="get">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="comment-form-group">
                                                    <input type="text" class="form-control" name="comment_name"
                                                        placeholder="Your Name *" required="">
                                                    <span class="far fa-user"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="comment-form-group">
                                                    <input type="email" class="form-control" name="comment_email"
                                                        placeholder="Your Email *" required="">
                                                    <span class="far fa-envelope"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="comment-form-group">
                                                    <input type="text" class="form-control" name="comment_website"
                                                        placeholder="Your Web Site *" required="">
                                                    <span class="fas fa-globe"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="comment-form-group">
                                                    <textarea class="form-control text-area" name="comment_message"
                                                        cols="30" rows="9" placeholder="Your Comment *"></textarea>
                                                    <span class="far fa-comments"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="primary-button">Send Message <i
                                                        class="fas fa-location-arrow ml-3"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="blog-widgets">
                                <h5 class="inner-header-title">Search</h5>
                                <form action="https://aipthemes.com/agencyou/blog-single.php" method="get">
                                    <div class="blog-search-bar position-relative">
                                        <input type="text" name="sidebar_searchbar" required=""
                                            placeholder="Type Here *" class="search-form-control">
                                        <button class="blog-search-btn"><span class="fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="blog-widgets">
                                <h5 class="inner-header-title">Category</h5>
                                <ul class="blog-category-list clearfix">
                                    <li>
                                        <a href="#">Business<span class="category-count">(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Design<span class="category-count">(18)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Agency<span class="category-count">(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Python<span class="category-count">(22)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Javascript<span class="category-count">(19)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">JQuery<span class="category-count">(19)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-widgets">
                                <h5 class="inner-header-title">Archives</h5>
                                <ul class="blog-archive-list clearfix">
                                    <li>
                                        <a href="#">April 2019</a>
                                    </li>
                                    <li>
                                        <a href="#">October 2019</a>
                                    </li>
                                    <li>
                                        <a href="#">November 2019</a>
                                    </li>
                                    <li>
                                        <a href="#">December 2019</a>
                                    </li>
                                    <li>
                                        <a href="#">January 2020</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-widgets">
                                <h5 class="inner-header-title">Recent Post</h5>
                                <div class="recent-post-item clearfix">
                                    <div class="recent-post-img mr-3">
                                        <a href="#">
                                            <img class="img-fluid" src="img/blog/recent-blog-img-1.jpg"
                                                alt="Recent Img">
                                        </a>
                                    </div>
                                    <div class="recent-post-body">
                                        <a href="blog-single.php">
                                            <h6 class="recent-post-title">2020 Free WordPress Themes</h6>
                                        </a>
                                        <p class="recent-post-date"><i class="far fa-calendar-alt"></i>05 May, 2020</p>
                                    </div>
                                </div>
                                <div class="recent-post-item clearfix">
                                    <div class="recent-post-img mr-3">
                                        <a href="#">
                                            <img class="img-fluid" src="img/blog/recent-blog-img-2.jpg"
                                                alt="Recent Img">
                                        </a>
                                    </div>
                                    <div class="recent-post-body">
                                        <a href="blog-single.php">
                                            <h6 class="recent-post-title">Best UI Element Wireframe Packages</h6>
                                        </a>
                                        <p class="recent-post-date"><i class="far fa-calendar-alt"></i>12 March, 2020
                                        </p>
                                    </div>
                                </div>
                                <div class="recent-post-item clearfix">
                                    <div class="recent-post-img mr-3">
                                        <a href="#">
                                            <img class="img-fluid" src="img/blog/recent-blog-img-3.jpg"
                                                alt="Recent Img">
                                        </a>
                                    </div>
                                    <div class="recent-post-body">
                                        <a href="blog-single.php">
                                            <h6 class="recent-post-title">New Business Ventures And Marketing</h6>
                                        </a>
                                        <span class="recent-post-date"><i class="far fa-calendar-alt"></i>March 10,
                                            2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-widgets tag-widgets">
                                <h5 class="inner-header-title">Tags</h5>
                                <ul class="blog-tags clearfix">
                                    <li>
                                        <a href="#" class="active">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">Php</a>
                                    </li>
                                    <li>
                                        <a href="#">Javascript</a>
                                    </li>
                                    <li>
                                        <a href="#">Python</a>
                                    </li>
                                    <li>
                                        <a href="#">JQuery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Blog Single End //-->

        <!--// Footer Start //-->
        <?php
    include './components/footer.php' 
    ?>
        <!--// Footer End //-->

    </div>
    <!--// Page Wrapper End //-->

    <a href="#" class="scroll-top-btn" data-scroll-goto="0"><i class="fa fa-arrow-up"></i></a>


    <div id="preloader-wrap">
        <div class="preloader-inner">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!--// #preloader-wrap //-->

</body>

</html>