<?php
include_once("application/libraries/thaidate-functions.php");
include_once("application/libraries/Thaidate.php");
?>

<div class="col-sm-9">
    <br><br><br><br>
    <div class="card border-success ">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="card border-success  ">
                        <div class="card-header">ชื่อ :</div>
                        <div class="card-body">
                            <p class="card-text"> <?php echo $result->FNAME ?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">นามสกุล :</div>
                        <div class="card-body">
                            <p class="card-text"> <?php echo $result->LNAME ?></p>
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
                            <p class="card-text"> <?php echo $result->ID_CARD ?></p>
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
                            <p class="card-text"> <?php echo thaidate('j F Y ', strtotime($result->DMY_BIRTH))  ?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">เพศ : </div>
                        <div class="card-body">
                            <p class="card-text"> <?php if ($result->SEX === "1") {
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
                            <p class="card-text"> <?php if ($result->FATHER == null) {
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
                            <p class="card-text"> <?php if ($result->MOTHER == null) {
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
                            <p class="card-text"> <?php if ($result->MARRIAGE_STATUS == null) {
                                                        echo "โสด";
                                                    } else {
                                                        echo $result->MARRIAGE_STATUS;
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
                            <p class="card-text"> <?php if ($result->BLO_GROUP == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } else {
                                                        echo $result->BLO_GROUP;
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
                            <p class="card-text"> <?php echo $result->ADDRESS ?></p>
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
                            <p class="card-text"><?php echo $result->MOO_ADDR ?></p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header">ตำบล :</div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $result->TUMBOL ?></p>
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
                            <p class="card-text"><?php if ($result->LINE_ID == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } else {
                                                        echo $result->LINE_ID;
                                                    } ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success ">
                        <div class="card-header"> EMAIL : </div>
                        <div class="card-body">
                            <p class="card-text"><?php if ($result->EMAIL == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } else {
                                                        echo $result->EMAIL;
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
                            <p class="card-text"><?php if ($result->MOBILE_TEL == null) {
                                                        echo "ไม่มีข้อมูล";
                                                    } else {
                                                        echo $result->MOBILE_TEL;
                                                    }
                                                    ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>