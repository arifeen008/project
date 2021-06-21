<div class="col-lg-9">
    <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">รายละเอียดสมาชิกกองทุน</h1>
    </div>
    <form action="<?php echo site_url('officer/welfare_member') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="mem_id">รหัสบัตรประชาชน</label>
                    <input class="form-control" type="text" id="id_card" placeholder="รหัสบัตรประชาชน..." name="id_card" maxlength="13" required>

                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ดึงข้อมูล</button>
    </form>
</div>