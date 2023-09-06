<main id="content" style="margin-top: 10px">
    <div class="container pt-4 pt-lg-5">
        <div class="card my-3" style="font-family: 'Sarabun';">
            <div class="card-body text-dark">
                <div class="d-flex justify-content-between align-items-center border-bottom card-title ">
                    <h3>ข้อมูลสินเชื่อ <?php echo $result->fname . "    " . $result->lname ?></h3>
                </div>
                <div class="row">
                    <div class="col-6 my-2">
                        ชื่อ : <?php echo $result->fname ?>
                    </div>
                    <div class="col-6 my-2">
                        นามสกุล : <?php echo $result->lname ?>
                    </div>
                    <div class="col-6 my-2">
                        username : <?php echo $result->username ?>
                    </div>
                    <div class="col-6 my-2">
                        lnumber_id : <?php echo $result->lnumber_id ?>
                    </div>
                    <div class="col-6 my-2">
                        loan_year : <?php echo $result->loan_year ?>
                    </div>
                    <div class="col-6 my-2">
                        branch_id : <?php echo $result->branch_id ?>
                    </div>
                    <div class="col-6 my-2">
                        loan_id : <?php echo $result->loan_id ?>
                    </div>
                </div>
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <h3 class="align-self-center me-auto"> <a href="<?php echo base_url($result->path . '/' . $result->file_name) ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-download me-3"></i>ดูเอกสาร</a></h3>
                    <button type="button" class="btn btn-info h3 me-3" id="test" onclick="sweetalert()"><i class="fas fa-check me-2"></i>button</button>
                    <button class="btn btn-success h3 me-3" id="accept" onclick="acceptcredit()"><i class="fas fa-check me-2"></i>อนุมัติ</button>
                    <button type="button" class="btn btn-danger h3 ms-3"><i class="fas fa-skull-crossbones me-2"></i>ปฏิเสธ</button>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function sweetalert() {
        Swal.fire('ข้อมูลสินเชื่อ <?php echo $result->fname . "    " . $result->lname ?>')
    }

    function acceptcredit() {
        Swal.fire({
            title: 'ต้องการอนุมัติหรือไม่',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'อนุมัติ',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {               
                Swal.fire('อนุมัติ !', '', 'success');
                window.location.href = "<?= site_url('officer/credit_consider2') ?>";
            }
        })
    }
</script>