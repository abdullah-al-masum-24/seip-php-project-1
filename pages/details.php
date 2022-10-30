<?php include "header.php"; ?>


<section class="py-5">
    <div class="container">

        <div class="card h-card-detail  shadow">
            <div class="row g-0 h-100">
                <div class="col-md-4 h-100 ">
                    <img src="<?php echo $singleData['profile-photo']; ?>" alt="" class="h-100 w-100 img-fluid rounded-start ">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-text mb-3 text-uppercase fw-bold "><?php echo $singleData['name']; ?></h1>
                        <h6 class="card-text fw-bold text-capitalize text-muted mb-4"><?php echo $singleData['title']; ?></h6>
                        <div class="card-text text-muted mb-5"><?php echo $singleData['description']; ?></div>
                        <div class="card-text text-muted">
                           <span class="fw-bold">Contact</span><br><span>Email :</span> <?php echo $singleData['contact']['email']; ?> , <span>Phone :</span> <?php echo $singleData['contact']['phone']; ?>
                        </div>
                    </div>
                </div>
           </div>
        </div>

    </div>
</section>



<?php include "footer.php"; ?>
