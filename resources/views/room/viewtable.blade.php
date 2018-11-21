<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<style type="text/css">
.wrap_schedule{
    margin:auto;
    width:800px;
}
.activity{
    background-color:#C6EEC3;
    font-size:12px;
}
.time_schedule{
    font-size:12px;
}
.day_schedule{
    font-size:12px;
}
.time_schedule_text{
    width:60px;
}
.day_schedule_text{
    width:80px;
}
</style>

<?php
// ส่วนของตัวแปรสำหรับกำหนด
$thai_day_arr=array("จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์","อาทิตย์");


////////////////////// ส่วนของการจัดการตารางเวลา /////////////////////
$num_dayShow=7;  // จำนวนวันที่โชว์ 1 - 7
$sc_timeStep=array("09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00","22:00","23:00");
$sc_numCol=15;
////////////////////// ส่วนของการจัดการตารางเวลา /////////////////////


?>


<br>
<div class="wrap_schedule">

<table  align="center" border="1" cellspacing="2" cellpadding="2"style="border-collapse:collapse;" >
  <tr class="time_schedule">
    <td align="center" valign="middle" height="50">
    &nbsp;</td>
<?php
for($i_time=0;$i_time<$sc_numCol-1;$i_time++){
?>
    <td align="center" valign="middle" height="50" background="blue">
    <div class="time_schedule_text" >
        <?=$sc_timeStep[$i_time]?> - <?=$sc_timeStep[$i_time+1]?>
    </div>
    </td>
<?php }?>
  </tr>
<?php
// วนลูปแสดงจำนวนวันตามที่กำหนด
for($i_day=0;$i_day<$num_dayShow;$i_day++){
?>
  <tr>
    <td align="center" valign="middle" height="50" class="day_schedule">
    <div class="day_schedule_text">
        <?=$thai_day_arr[$i_day]?>
        <br>

    </div>
    </td>
<?php

for($i_time=0;$i_time<$sc_numCol-1;$i_time++){
    $colspan="";
    $css_use="";
    $dataShowIN="";
?>
    <td <?=$css_use?> <?=$colspan?> align="center" valign="middle" height="50">

      <input type="checkbox" name="<?=$thai_day_arr[$i_day]?>" value="<?=$sc_timeStep[$i_time]?>">

    </td>
<?php  }?>
  </tr>
<?php }?>
</table>

</div>
</body>
</html>
