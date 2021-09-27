<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=export.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>
<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <strong>รายงานสมาชิก วันที่ <?php echo $numrows; ?></strong><br>
    <div id="SiXhEaD_Excel" align=center x:publishsource="Excel">
        <table x:str border=1 cellpadding=0 cellspacing=1 width=100% style="border-collapse:collapse">
            <tr>
                <td width="94" align="center" valign="middle"><strong>สาขา</strong></td>
                <td width="200" align="center" valign="middle"><strong>ชื่อ - สกุล</strong></td>
                <td width="181" align="center" valign="middle"><strong>จำนวนเงินหุ้น</strong></td>
                <td width="181" align="center" valign="middle"><strong>จำนวนเงินฝาก</strong></td>
                <td width="181" align="center" valign="middle"><strong>เบอร์โทร</strong></td>
            </tr>
            <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                <tr>
                    <td align="center" valign="middle"><?php echo $row['BR_NAME']; ?></td>
                    <td align="center" valign="middle"><?php echo $row['FNAME'] . ' ' . $row['LNAME']; ?></td>
                    <td align="center" valign="middle"><?php echo number_format($row['SHR_SUM_BTH'], 2); ?></td>
                    <td align="center" valign="middle"><?php echo number_format($row['BALANCE'], 2); ?></td>
                    <td align="center" valign="middle"><?php echo $row['MOBILE_TEL']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>