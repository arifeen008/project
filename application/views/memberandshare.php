<div class="col-lg-9">

<div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">ระบบทะเบียนสมาชิกและหุ้น</h1>
    </div>
    <h4>ข้อมูลสมาชิก</h4><br>
    <form action="<?php echo site_url('officer/seedata_member') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label>รหัสบัตรประชาชน :</label>
                    <input type="text" name="id_card" class="form-control" placeholder="กรุณากรอกเลขบัตรประชาชน 13 หลัก ....">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ดึงข้อมูล</button>
    </form>

    
    <h4>ข้อมูลการฝากถอนหุ้น</h4><br>
    <form action="<?php echo site_url('officer/datashare_member') ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label>รหัสบัตรประชาชน :</label>
                    <input type="text" name="id_card" class="form-control" placeholder="กรุณากรอกเลขบัตรประชาชน 13 หลัก ....">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-2">ดึงข้อมูล</button>
    </form>
</div>