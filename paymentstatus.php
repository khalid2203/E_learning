<?php
include('./header.php');
?>

<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/course_image/coursebanner.jpg" alt="courses" ” style="height:500px; width:100%; object-fit:cover; box-shadow:l0px;" />
    </div>
</div>
<!-- End Course Page Banner -->

<h1>Payment status</h1>

<!-- Start Main Content -->
<div class="container">
    <h2 class="text-center my-4">Payment Status </h2>
    <form method="post" action="">
        <div class="form-group row">
            <div class="offset-sm-3 col-form-label">Order ID:</div>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
</div>
<!-- End Main Content -->

<!-- start contact us -->

<?php
include('./contact.php');
?>

<!-- end contact us -->



<?php
include('./footer.php');
?>