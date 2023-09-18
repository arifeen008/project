<!-- <div class="container my-5 py-5">
    <section class="mb-10">
        <h1 class="text-dark text-center mb-3" style="font-family: 'Kanit';">เข้าสู่ระบบ</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="<?php echo site_url('officer/login_officer') ?>" method="post">
                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example1" name="user_id" class="form-control" />
                        <label class="form-label" for="form2Example1" style="font-family: 'Kanit';"><?php echo lang('username') ?></label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" name="password" class="form-control" />
                        <label class="form-label" for="form2Example2" style="font-family: 'Kanit';"><?php echo lang('password') ?></label>
                    </div>
                    <button type="submit" style="background-color: #25d321;" class="btn btn-block text-light">
                        <b style="font-family: 'Kanit';"><?php echo lang('login') ?></b>
                    </button>
                </form>
            </div>
        </div>
    </section>
</div> -->
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
</style>

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="<?php echo base_url('picture/resize-1588050307116.png') ?>" class="img-fluid" alt="Logo">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="<?php echo site_url('officer/login_officer') ?>" method="post">
                    <h1 class="text-dark text-center" style="font-family: 'Kanit';">เข้าสู่ระบบ</h1>
                    <div class="form-outline mb-4">
                        <input type="text" id="form1Example13" class="form-control form-control-lg" name="user_id" />
                        <label class="form-label" for="form1Example13" style="font-family: 'Kanit';"><?php echo lang('username') ?></label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
                        <label class="form-label" for="form1Example23" style="font-family: 'Kanit';"><?php echo lang('password') ?></label>
                    </div>
                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3" style="font-family: 'Kanit';"> จดจำฉัน </label>
                        </div>
                        <a href="<?php echo site_url('index') ?>" style="font-family: 'Kanit';">หน้าหลัก</a>
                        <a href="#!" style="font-family: 'Kanit';" data-mdb-toggle="tooltip" title="ลืมรหัสผ่าน">ลืมรหัสผ่าน</a>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block" style="font-family: 'Kanit';"><?php echo lang('login') ?></button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php echo $this->session->flashdata('error') ;?>
    