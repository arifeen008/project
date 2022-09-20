<div class="container my-5">
    <section class="mb-10">
        <div class="row align-items-center">
            <div class="col-xl-7 mb-5 mb-xl-0">
                <div class="lightbox">
                    <div class="row">
                        <?php foreach ($picture as $row) { ?>
                            <div class="col-md-6 mb-4">
                                <img class="shadow-4 rounded-5 w-100" src="<?php echo base_url('uploads/') ?><?= $row->picture_name ?>" data-mdb-img="<?php echo base_url('uploads/') ?><?= $row->picture_name ?>" height="300" />
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 offset-xl-1 text-center text-dark">
                <img src="<?php echo base_url('picture/357-3.jpg') ?>" width="auto" height="150" class="mb-4">
                <h2 class="fw-bold mb-5 pb-2"><?php echo $data->title ?></h2>
                <p class="lead fw-normal text-dark mb-5">
                    <?php echo $data->description1 ?>
                </p>
                <p class="lead fw-normal text-dark mb-5">
                    <?php echo $data->description2 ?>
                </p>
                <p class="lead fw-normal text-dark mb-0 mb-xl-5">
                    <?php echo $data->contact ?>
                </p>
            </div>
        </div>
    </section>
</div>