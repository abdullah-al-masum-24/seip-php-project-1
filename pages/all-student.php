<?php include "header.php"; ?>


<section class="py-5">
    <div class="container mx-auto">
        <div class="row">
            <?php
                 foreach ( $allStudentData as $allSData ) { ?>

                    <div class="col-md-3 col-sm-4">
                       <div class="card bg-quote-req shadow h-card">
                           <img src="<?php echo $allSData['profile-photo'];?>" alt="" class="card-img-top h-75 bg-white">
                           <div class="card-body">
                               <div class="card-text fw-bold text-uppercase mb-1"><?php echo $allSData['name'];?></div>
                               <div class="card-text text-muted text-capitalize fw-bold mb-2"><?php echo $allSData['title'];?></div>
                               <hr>
                               <div class="card-text text-muted"><?php echo substr($allSData['description'], 0, 50);?>.......</div>

                               <a href="action.php?page=Details&&id=<?php echo $allSData['id']; ?>" target="_blank" class="ps-0 pt-2 btn text-success">Read More &rightarrow;</a>
                           </div>
                       </div>
                   </div>

           <?php } ?>

        </div>
    </div>
</section>



<?php include "footer.php"; ?>
