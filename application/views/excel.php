<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="Export.xls"');
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . filesize("myexcel.xls"));
@readfile($filename);
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <strong>ผลการค้นหา <?php echo $result; ?></strong><br>
    <div id="SiXhEaD_Excel" align=center x:publishsource="Excel">
        <table x:str border=1 cellpadding=0 cellspacing=1 width=100% style="border-collapse:collapse">
            <tr>
                <td width="94" align="center" valign="middle"><strong>สาขา</strong></td>
                <td width="200" align="center" valign="middle"><strong>ชื่อ</strong></td>
                <td width="200" align="center" valign="middle"><strong>สกุล</strong></td>
                <td width="181" align="center" valign="middle"><strong>จำนวนเงินหุ้น</strong></td>
                <td width="181" align="center" valign="middle"><strong>จำนวนเงินฝาก</strong></td>
                <td width="181" align="center" valign="middle"><strong>เบอร์โทร</strong></td>
            </tr>
            <?php if ($result == null) { ?>
                <td colspan="6" align="center">ไม่มีข้อมูล</td>
            <?php  } ?>
            <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                <tr>
                    <td align="center" valign="middle"><?php $row['BR_NAME'] ?></td>
                    <td align="center" valign="middle"><?php $row['FNAME'] ?></td>
                    <td align="center" valign="middle"><?php $row['LNAME'] ?></td>
                    <td align="center" valign="middle"><?php number_format($row['SHR_SUM_BTH'], 2) ?></td>
                    <td align="center" valign="middle"><?php number_format($row['BALANCE'], 2) ?></td>
                    <td align="center" valign="middle"><?php $row['MOBILE_TEL'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>