<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include './components/headLinks.php' 
    ?>
    <?php
    include './components/jqueryScripts.php' 
    ?>

    <title>Blog</title>
    <style>
        .blog-card{
            height:575px
        }
    </style>
</head>

<body data-spy="scroll" data-target="#fixedNavbar">

    <!--// Page Wrapper Start //-->
    <div class="page-wrapper">

        <!--// Header Start //-->
        <?php include './components/header.php'; ?>
        <!--// Header End  //-->

        <!--// Breadcrumb Section Start //-->
        <section class="breadcrumb-section section" style="background-image: url('img/bg/breadcrumb-img.jpg');"
            data-scroll-index="0" data-jarallax="" data-speed="0.6s">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-center">
                            <h1>Blogs</h1>
                            <ul class="breadcrumb-links">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">
                                    Blog
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Breadcrumb Section end //-->

        <!--// Blog Grid Start //-->
        <section class="section">
        <div class="container">
            <div class="row">
            <div class="section-heading">
                <h2 class="section-title">Latest<span>Blog</span></h2>
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content..
                </p>
            </div>

        <!--php title and desc integraitnio  -->
        <?php
$data = file_get_contents('http://localhost:3000/api/blogs');
$blogs = json_decode($data, true);
$latestBlogs = array_reverse($blogs); 

foreach ($latestBlogs as $blog) {
    $blogID = $blog['_id'];
    $title = $blog['title'];
    $description = $blog['description'];
    $image = $blog['image'];
    $status = $blog['status'];
    
    if ($status === 'Published') {
       // Slice title to 4 words
       $titleWords = explode(' ', $title);
       $slicedTitle = implode(' ', array_slice($titleWords, 0, 4));
   
       // Slice description to 18 words
       $descriptionWords = explode(' ', $description);
       $slicedDescription = implode(' ', array_slice($descriptionWords, 0, 18));
   


    $blogCard = '
    <div class="col-md-6 col-sm-6 col-lg-4">
    <div class="blog-card">
        <div class="img">
            <a href="blog-single.php?' . urlencode($blogID) . '">
                <img  class="img-fluid" src="http://localhost:3000/uploads/' . $image . '" alt="Blog image" style="width: 100%; height: 200px;object-fit: cover;">
            </a>
        </div>
        <div class="body">
            <h5><a href="blog-single.php?' . urlencode($blogID) . '">' . $slicedTitle . '</a></h5>
            <p>' . $slicedDescription . '</p>
            <a href="blog-single.php?' . urlencode($blogID) . '" class="blog-button">Read More<i class="fa fa-arrow-right ml-3"></i></a>
        </div>
    </div>
</div>';


    echo $blogCard;
}}
?>

          </div>
            <div class="pagination-wrap">
                <a href="#" class="pagination-link"><i class="fa fa-arrow-left"></i></a>
                <a href="#" class="pagination-link active">1</a>
                <a href="#" class="pagination-link">2</a>
                <a href="#" class="pagination-link">3</a>
                <a href="#" class="pagination-link"><i class="fa fa-arrow-right"></i></a>
            </div>
            <!--// .pagination-wrap //-->
        </div>
    </section>
        <!--php title and desc integraitnio  -->
        <!--// Blog Grid End //-->


        <!--// Footer Start //-->
        <?php include './components/footer.php'; ?>
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