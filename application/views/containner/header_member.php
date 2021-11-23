<body>
    <nav class="navbar navbar-expand-md navbar-light bg-success">
        <img src="<?php echo base_url('picture/sakofag-logo.png'); ?>" style="width: 3.6%;">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <a href="<?php echo site_url('index/index') ?>" class="nav-link">Home</a>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <div class="dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                เกี่ยวกับเรา
                            </a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('index/history_member') ?>">ประวัติความเป็นมา</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/vision_member') ?>">วิสัยทัศน์ พันธกิจ วัตถุประสงค์</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/board_member') ?>">คณะกรรมการและผู้บริหาร</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/office_member') ?>">สำนักงาน</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                บริการของสหกรณ์
                            </a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('index/register_member') ?>">สมัครสมาชิก</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/deposit_member') ?>">บริการเงินฝาก</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/credit_member') ?>">บริการสินเชื่อ</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                สวัสดิการของสมาชิก
                            </a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('index/marry_member') ?>">สวัสดิการแต่งงาน</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/maternity_member') ?>">สวัสดิการคลอดบุตร</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/oldage_member') ?>">สวัสดิการเงินสมทบยามชรา</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/medical_member') ?>">สวัสดิการช่วยเหลือค่ารักษาพยาบาล</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/dead_member') ?>">สวัสดิการเสียชีวิต</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ข่าวสาร/อัพเดต
                            </a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('index/promotion_member') ?>">โปรโมชั่น</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/activity_member') ?>">กิจกรรม</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/calendar_member') ?>">ปฏิทินสหกรณ์</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                โครงการของสหกรณ์
                            </a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('index/stadium_member') ?>">โครงการสนามหญ้าเทียม SKF Stadium</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/village_member') ?>">โครงการหมู่บ้านษะกอฟะฮ์</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/gasstation_member') ?>">โครงการปั้มน้ำมันเซลล์</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/orphan_member') ?>">โครงการศูนย์อุปถัมภ์เลี้ยงดูเด็กกำพร้า</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/sakofahmarket_member') ?>">โครงการ Sakofah Market</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ดาวน์โหลด
                            </a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('index/document_member') ?>">เอกสารสำหรับสมาชิก</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/report_member') ?>">รายงานกิจการ</a>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown sm-menu">
                        <div class="dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ติดต่อเรา
                            </a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="https://docs.google.com/forms/d/1Ze7m2Q6Jr25YafvvBhpU9BiVXpwMNrWwvmWs6yJjTDY/viewform?edit_requested=true">แบบประเมินการให้บริการ</a>
                                <a class="dropdown-item" href="<?php echo site_url('index/withus_member') ?>">ร่วมงานกับเรา</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <li class="nav-item">
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">ออกจากระบบ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    คุณต้องการที่จะออกจากระบบหรือไม่
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <a href="<?php echo site_url('member/logout_member') ?>" class="btn btn-primary">ออกจากระบบ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $FNAME ?> <?php echo $LNAME ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo site_url('member/data_member') ?>">ดูข้อมูลของผู้ใช้</a>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#staticBackdrop">ออกจากระบบ</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</body>
