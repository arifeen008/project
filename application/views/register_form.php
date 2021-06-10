<style>
    .fr {
        color: red;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-success navbar-laravel">
    <img src="<?php echo base_url('picture/sakofag-logo.png'); ?>" style="width: 4%;">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                สมัครสมาชิกผู้ใช้ระบบ
            </ul>
        </div>
    </div>
</nav>
<div class="row">
    <div class="col">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="<?php echo site_url('member/register_form') ?>">
                        <legend class="text-center">สมัครใช้งาน</legend>

                        <div class="form-group">
                            <label for="id_card">เลขบัตรประชาชน</label>
                            <input type="text" class="form-control" name="id_card" id="id_card" placeholder="เลขบัตรประชาชน">
                            <span class="fr"><?php echo form_error('id_card'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="id_card">ชื่อผู้ใช้</label>
                            <input type="text" class="form-control" name="user_id" id="user_id" placeholder="ชื่อผู้ใช้">
                            <span class="fr"><?php echo form_error('user_id'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="password">รหัสผ่าน</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="รหัสผ่าน">
                            <span class="fr"><?php echo form_error('password'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="ยืนยันรหัสผ่าน">
                            <span class="fr"><?php echo form_error('confirm_password'); ?></span>
                        </div>

                        <!-- <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-describedby="emailHelp">
                            <span class="fr"><?php echo form_error('email'); ?></span>
                        </div> -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">สมัครสมาชิก</button>
                            <button type="reset" class="btn btn-danger">ยกเลิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#found_site').on('change', function() {
            $(this).val() == "other" ? $('#specify').closest('.form-group').show() : $('#specify').closest('.form-group').hide();
        })
    })
</script>