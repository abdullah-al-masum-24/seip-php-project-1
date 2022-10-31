<?php include "header.php"; ?>


<section class="py-5">
    <div class="container ">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="action.php" method="post">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            Serial Number
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="start_num" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="end_num" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"  rows="3" readonly ><?php foreach ($serialResult as $serialData) {echo $serialData.', ';} ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="serial_btn" class="btn btn-outline-success text-uppercase" value="Show Serial Number"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>