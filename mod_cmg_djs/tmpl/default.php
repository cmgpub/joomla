<?php
// No direct access
defined('_JEXEC') or die;
echo '[formdjs]' . $test;
?>
<!-- <?php echo $hello; ?> -->

<form name="formdjs">
<div class="hd-banner">
  <h6><?php echo htmlspecialchars($params->get('xtitle')); ?></h6>
  <h2><?php echo htmlspecialchars($params->get('title')); ?></h2>
  <h3><?php echo htmlspecialchars($params->get('kouhao')); ?></h3>
  <h5 class="countdown">距活动结束还剩：
    <input type="textarea" name="left" size="35" style="text-align: center">
	</h5>
  <a class="btn btn-orange" href="<?php echo htmlspecialchars($params->get('url')); ?>">进入活动
    <i class="fa"></i>
	</a>
</div>
</form>

<script LANGUAGE="javascript">
startclock()
var timerID = null;
var timerRunning = false;
function showtime() {
Today = new Date();
var NowHour = Today.getHours();
var NowMinute = Today.getMinutes();
var NowMonth = Today.getMonth();
var NowDate = Today.getDate();
var NowYear = Today.getYear();
var NowSecond = Today.getSeconds();
if (NowYear <2000)
NowYear=1900+NowYear;
Today = null;
Hourleft = 23 - NowHour
Minuteleft = 59 - NowMinute
Secondleft = 59 - NowSecond
Yearleft = <?php echo htmlspecialchars($params->get('Year')); ?> - NowYear
Monthleft = <?php echo htmlspecialchars($params->get('Month')); ?> - NowMonth - 1
Dateleft = <?php echo htmlspecialchars($params->get('Date')); ?> - NowDate
if (Secondleft<0)
{
Secondleft=60+Secondleft;
Minuteleft=Minuteleft-1;
}
if (Minuteleft<0)
{
Minuteleft=60+Minuteleft;
Hourleft=Hourleft-1;
}
if (Hourleft<0)
{
Hourleft=24+Hourleft;
Dateleft=Dateleft-1;
}
if (Dateleft<0)
{
Dateleft=31+Dateleft;
Monthleft=Monthleft-1;
}
if (Monthleft<0)
{
Monthleft=12+Monthleft;
Yearleft=Yearleft-1;
}
Temp=Yearleft+' 年 '+Monthleft+' 月 '+Dateleft+' 天 '+Hourleft+' 小时 '+Minuteleft+' 分 '+Secondleft+' 秒'
document.formdjs.left.value=Temp;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
var timerID = null;
var timerRunning = false;
function stopclock () {
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function startclock () {
stopclock();
showtime();
}
// -->
</script>
