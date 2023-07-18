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
    <style>
        .bg-image.img-fluid {
            width: 100%;
            height: 430px;
            object-fit: cover;
        }

        .r-post.img-fluid {
            width: 370px;
            height: 94px;
            object-fit: cover;
        }

        .commentLogo {
            width: 30px;
        }
    </style>
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
                    <!-- Heading -->
                    <div class="section-heading">
                        <h2 class="section-title">Latest<span>Blog</span></h2>
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content..
                        </p>
                    </div>
                    <!-- Heading -->
                    <!-- Integrate php  -->
                    <!-- Integrate php  -->
                    <div class="col-lg-8">
                        <div class="blog-post-single">
                            <?php
                            $blogID = $_SERVER['QUERY_STRING'];
                            $apiEndpoint = "http://localhost:3000/api/blogs/{$blogID}";

                            // Function to check if a blog is in 'Published' status
                            function isPublishedBlog($blog)
                            {
                                return isset($blog['status']) && $blog['status'] === 'Published';
                            }

                            // Function to fetch the latest published blog
                            function getLatestPublishedBlog($blogs)
                            {
                                $latestPublishedBlog = null;
                                foreach ($blogs as $blog) {
                                    if (isPublishedBlog($blog)) {
                                        $latestPublishedBlog = $blog;
                                        break;
                                    }
                                }
                                return $latestPublishedBlog;
                            }

                            if (empty($blogID) || !blogExists($apiEndpoint)) {
                                // BlogID is not present or doesn't exist, fetch all blogs and render the latest published blog
                                $apiEndpointAll = "http://localhost:3000/api/blogs";
                                $allBlogData = file_get_contents($apiEndpointAll);
                                if ($allBlogData !== false) {
                                    $blogs = json_decode($allBlogData, true);
                                    if (!empty($blogs)) {
                                        // Get the latest published blog
                                        $latestPublishedBlog = getLatestPublishedBlog($blogs);
                                        if ($latestPublishedBlog !== null) {
                                            // Process the blog data as needed
                                            $title = $latestPublishedBlog['title'];
                                            $description = $latestPublishedBlog['description'];
                                            $image = $latestPublishedBlog['image'];
                                            // Slice title to 4 words
                                            $titleWords = explode(' ', $title);
                                            $slicedTitle = implode(' ', array_slice($titleWords, 0, 11));

                                            // Slice description to 18 words
                                            // $descriptionWords = explode(' ', $description);
                                            // $slicedDescription = implode(' ', array_slice($descriptionWords, 0, 18));
                            
                                            $blogSingleMainNoId = '
                                <div class="blog-post-img">
                                    <img  src="http://localhost:3000/uploads/' . $image . '" alt="Blog Post Image" class="bg-image img-fluid">
                                </div>
                                <div class="blog-text">
                                    <h5>' . $slicedTitle . '</h5>
                                    <div class="author-meta" style="margin: 15px 0 15px 0;">
                                        <a href="#"><span class="far fa-calendar-alt"></span>April 10</a>
                                        <a href="#"><span class="far fa-user"></span>By Admin</a>
                                    </div>
                                    <p>' . $description . '</p>
                                    <blockquote>
                                        <q style="font-size: 13px;">' . $description . '</q>
                                    </blockquote>
                                    <p>' . $description . '</p>';

                                            echo $blogSingleMainNoId;
                                        } else {
                                            // No published blogs found
                                            echo "No published blogs available.";
                                        }
                                    } else {
                                        // No blogs found
                                        echo "No blogs available.";
                                    }
                                } else {
                                    // Error occurred while making the request
                                    echo "Error occurred while fetching the blogs.";
                                }
                            } else {
                                // Blog with given ID exists
                                $blogData = file_get_contents($apiEndpoint);
                                if ($blogData !== false) {
                                    $blog = json_decode($blogData, true);
                                    if ($blog !== null) {
                                        // Check if the blog is in 'Published' status
                                        if (isPublishedBlog($blog)) {
                                            // Process the blog data as needed
                                            $title = $blog['title'];
                                            $description = $blog['description'];
                                            $image = $blog['image'];

                                            // Slice title to 4 words
                                            $titleWords = explode(' ', $title);
                                            $slicedTitle = implode(' ', array_slice($titleWords, 0, 17));

                                            // Slice description to 18 words
                                            // $descriptionWords = explode(' ', $description);
                                            // $slicedDescription = implode(' ', array_slice($descriptionWords, 0, 18));
                            
                                            $blogSingleMain =
                                                '
                                        <div class="blog-post-img">
                                            <img src="http://localhost:3000/uploads/' . $image . '" alt="Blog Post Image" class="bg-image img-fluid">
                                        </div>
                                        <div class="blog-text">
                                            <h5>' . $slicedTitle . '</h5>
                                            <div class="author-meta" style="margin: 15px 0 15px 0;">
                                                <a href="#"><span class="far fa-calendar-alt"></span>April 10</a>
                                                <a href="#"><span class="far fa-user"></span>By Admin</a>
                                            </div>
                                            <p>' . $description . '</p>
                                            <blockquote>
                                                <q style="font-size: 13px;">' . $description . '</q>
                                            </blockquote>
                                            <p>' . $description . '</p>';

                                            echo $blogSingleMain;
                                        } else {
                                            // Blog with given ID exists but is not in 'Published' status
                                            echo "Blog with ID {$blogID} exists but is not published.";
                                        }
                                    } else {
                                        // Invalid response or error occurred
                                        echo "Failed to fetch blog with blogID: {$blogID}";
                                    }
                                } else {
                                    // Error occurred while making the request
                                    echo "Error occurred while fetching the blog";
                                }
                            }

                            function blogExists($apiEndpoint)
                            {
                                $response = @file_get_contents($apiEndpoint);
                                return ($response !== false);
                            }
                            ?>
                            <!-- Comment Section -->
                            <div class="comments-wrap">
                                <h5 class="inner-header-title">Comments (4)</h5>
                                <div class="comment-item media">
                                    <img src="https://textpixie.netlify.app/static/media/profile.5bcd6f4fc431fffe39a5.png"
                                        alt="Comment image" class="img-fluid commentLogo">
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
                                    <img src="https://textpixie.netlify.app/static/media/profile.5bcd6f4fc431fffe39a5.png"
                                        alt="Comment image" class="img-fluid commentLogo">
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
                                <!-- <div class="comment-item sub-comment-item media"> -->
                                <div class="comment-item media">
                                    <img src="https://textpixie.netlify.app/static/media/profile.5bcd6f4fc431fffe39a5.png"
                                        alt="Comment image" class="img-fluid commentLogo">
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
                                    <img src="https://textpixie.netlify.app/static/media/profile.5bcd6f4fc431fffe39a5.png"
                                        alt="Comment image" class="img-fluid mr-3 commentLogo">
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
                <!-- right section bar -->


                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="blog-widgets">
                            <h5 class="inner-header-title">Search</h5>
                            <form action="https://aipthemes.com/agencyou/blog-single.php" method="get">
                                <div class="blog-search-bar position-relative">
                                    <input type="text" name="sidebar_searchbar" required="" placeholder="Type Here *"
                                        class="search-form-control">
                                    <button class="blog-search-btn"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="blog-widgets">
                            <h5 class="inner-header-title">Category</h5>
                            <ul class="blog-category-list clearfix">
                                <li>
                                    <a href="./blog-single.php?category=App Development">App Development<span class="category-count">(10)</span></a>
                                </li>
                                <li>
                                    <a href="./blog-single.php?category=Web Designing">Web Designing<span class="category-count">(18)</span></a>
                                </li>
                                <li>
                                    <a href="./blog-single.php?category=Web Development">Web Development<span class="category-count">(5)</span></a>
                                </li>
                                <li>
                                    <a href="./blog-single.php?category=Mobile App Development">Mobile App Development<span
                                            class="category-count">(22)</span></a>
                                </li>
                                <li>
                                    <a href="./blog-single.php?category=Digital Marketing">Digital Marketing<span class="category-count">(19)</span></a>
                                </li>
                                <li>
                                    <a href="./blog-single.php?category=SEO & SMO Services">SEO & SMO Services<span class="category-count">(19)</span></a>
                                </li>
                                <li>
                                    <a href="./blog-single.php?category=PPC">PPC<span class="category-count">(13)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-widgets" style="margin-top: 30px;">
                        <h5 class="inner-header-title">Recent Post</h5>


                        <!-- integrate php -->
                        <?php
                        // Fetch all blogs and display the recent published blogs
                        $data = file_get_contents('http://localhost:3000/api/blogs');
                        $blogs = json_decode($data, true);
                        $recentPublishedBlogs = array_filter($blogs, function ($blog) {
                            return isPublishedBlog($blog);
                        });
                        $recentPublishedBlogs = array_slice(array_reverse($recentPublishedBlogs), 0, 5);

                        foreach ($recentPublishedBlogs as $blog) {
                            $blogID = $blog['_id'];
                            $title = $blog['title'];
                            $image = $blog['image'];
                            $titleWords = explode(' ', $title);
                            $slicedTitle = implode(' ', array_slice($titleWords, 0, 9));


                            $recentPostCard =
                                '<div class="recent-post-item clearfix">
                                    <div class="recent-post-img mr-3">
                                        <a href="blog-single.php?' . $blogID . '">
                                            <img class="r-post img-fluid" src="http://localhost:3000/uploads/' . $image . '" alt="Recent Img" >
                                        </a>
                                    </div>
                                    <div class="recent-post-body">
                                        <a href="blog-single.php?' . $blogID . '">
                                            <h6 class="recent-post-title" style="font-size: 13px;font-weight: 400;color:black">' . $slicedTitle . '</h6>
                                        </a>
                                        <p class="recent-post-date"><i class="far fa-calendar-alt"></i>05 May, 2020</p>
                                    </div>
                                </div>';

                            echo $recentPostCard;
                        }
                        ?>

                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Blog Single Ended -->
    <!-- Footer -->
    <?php
    include './components/footer.php'
        ?>
    <!-- Footer End -->

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