<?php
include_once('dbConnection.php');
include('./header.php')
?>

<!-- Start video background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source class="video" src="video/banvid.mp4" type="">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcom to elearning website</h1>
        <small class="my-content">Learn and Implement</small><br>

        <?php
        if(!isset($_SESSION['is_login'])){
            echo '<a class="btn btn-danger mt-3" href="#" data-toggle="modal" data-target="#stuRegModalCenter"> Get Started</a>';
        }else{
            echo '<a href="Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
        }
        ?>
    </div>
</div>

<!-- End video background -->
<!-- Start text banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
        </div>
    </div>
</div>
<!-- End text banner -->

<!-- Start Most Popular Course -->
<div class="container h-100 mt-5">
    <h1 class="text-center">Popular Course</h1>
    <!-- Start Most Popular Course 1st Card Deck -->
    <div class="card-deck h-100 mt-4">
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result= $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '
                <div class="card">
                    <a href="coursedetail.php?course_id='.$course_id.'" style="text-align:left; padding:0px; margin:0px;">
                        <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="Guitar" width="200" height="230"/>
                        <div class="card-body">
                            <h5 class="card-title">'.$row['course_name'].'</h5>
                            <p class="card-text">'.$row['course_desc'].'</p>
                        </div>
                        <div class="card-footer flex-column">
                            <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].' </del></small>
                                <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
                            </p>
                            <a class="btn btn-primary text-white font-weight-bolder float-right mt-auto" href="coursedetail.php?course_id='.$course_id.'">Enroll</a>
                        </div>
                    </a>
                </div>';
            }
        }
        ?>
    </div>
    <!-- End Most Popular Course 1st Card Deck -->
    <!-- Start Most Popular Course 2nd Card Deck -->
    <div class="card-deck h-100 mt-4">
    <?php
        $sql = "SELECT * FROM course LIMIT 3, 3";
        $result= $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '
                <div class="card">
                    <a href="coursedetail.php?course_id='.$course_id.'" style="text-align:left; padding:0px; margin:0px;">
                        <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="image" width="200" height="230"/>
                        <div class="card-body">
                            <h5 class="card-title">'.$row['course_name'].'</h5>
                            <p class="card-text text-wrap">'.$row['course_desc'].'</p>
                        </div>
                        <div class="card-footer flex-column">
                            <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].' </del></small>
                                <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
                            </p>
                            <a class="btn btn-primary text-white font-weight-bolder float-right mt-auto" href="coursedetail.php?course_id='.$course_id.'">Enroll</a>
                        </div>
                    </a>
                </div>';
            }
        }
        ?>
    </div>
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="courses.php">View All Course</a>
    </div>
</div>

<!-- End Most Popular Course 2nd Card Deck -->
<!-- End Most Popular Course -->

<!-- Start Contact Us -->
<?php
include('./contact.php');
?>
<!-- end Contact Us -->

<!-- Start About Section -->
<div class="container-fluid p-4" style="background-color: #E9ECEF">
    <div class="container" style="background-color: #E9ECEF">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>E-Learning provides universal access to the world's best
                    education, partnering with top universities and
                    organizations to offer courses online.</p>
            </div>
            <div class="col-sm">
                <h5>Category</h5>
                <a class="text-dark" href="#">Web Development</a><br />
                <a class="text-dark" href="#">Web Designing</a><br />
                <a class="text-dark" href="#">Android App Dev</a><br />
                <a class="text-dark" href="#">iOS Development</a><br />
                <a class="text-dark" href="#">Data Analysis</a><br />
            </div>
            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>E-Learning Pvt Ltd <br> MMU Mullana <br> Ambala,
                    Haryana <br> Ph. +919129090579 </p>
            </div>
        </div>
    </div>
</div> <!-- End About Section -->

<?php
include('./footer.php');
?>