<?php include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="col-sm-9">
    <br><br>
    <div class="card border-success ">
        <div class="card-body">
        <div class="row">
                <div class="col">
                    <div class="card border-success  ">
                        <div class="card-header">ชื่อ :</div>
                        <div class="card-body">
                            <p class="card-text"> <?php echo $FNAME ?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">นามสกุล :</div>
                        <div class="card-body">
                            <p class="card-text"> <?php echo $LNAME ?></p>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card border-success  ">
                        <div class="card-header">เลขบัตรประจำตัวประชาชน :</div>
                        <div class="card-body">
                            <p class="card-text"> <?php echo $ID_CARD ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">วันเกิด :</div>
                        <div class="card-body">
                            <p class="card-text"> <?php echo thaidate('j F Y ', strtotime($DMY_BIRTH))  ?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">เพศ : </div>
                        <div class="card-body">
                            <p class="card-text"> <?php if ($SEX === "1") {
                                                        echo "ชาย";
                                                    } else {
                                                        echo "หญิง";
                                                    } ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">ชื่อบิดา : </div>
                        <div class="card-body">
                            <p class="card-text"> <?php if ($FATHER == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">ชื่อมารดา : </div>
                        <div class="card-body">
                            <p class="card-text"> <?php if ($MOTHER == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">สถานะ : </div>
                        <div class="card-body">
                            <p class="card-text"> <?php if ($MARRIAGE_STATUS == null) {
                                                        echo "โสด";
                                                    } else {
                                                        echo $MARRIAGE_STATUS;
                                                    }
                                                    ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">กรุ๊ปเลือด : </div>
                        <div class="card-body">
                            <p class="card-text"> <?php if ($BLO_GROUP == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } else {
                                                        echo $BLO_GROUP;
                                                    } ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">เลขที่บ้าน : </div>
                        <div class="card-body">
                            <p class="card-text"> <?php echo $ADDRESS ?></p>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">หมู่ที่ :</div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $MOO_ADDR ?></p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">ตำบล :</div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $TUMBOL ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header"> LINE ID : </div>
                        <div class="card-body">
                            <p class="card-text"><?php if ($LINE_ID == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } else {
                                                        echo $LINE_ID;
                                                    } ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header"> EMAIL : </div>
                        <div class="card-body">
                            <p class="card-text"><?php if ($EMAIL == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } else {
                                                        echo $EMAIL;
                                                    } ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header"> โทรศัพท์ :</div>
                        <div class="card-body">
                            <p class="card-text"><?php if ($MOBILE_TEL == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } else {
                                                        echo $MOBILE_TEL;
                                                    }
                                                    ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <p align="center"><a href="<?php echo site_url('member/editdata_member') ?>" class="btn btn-success btn-sm">แก้ไขข้อมูล</a></p>
                </div>
            </div>
        </div>
    </div>
</div>