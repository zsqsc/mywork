<?php
header("Content-type:text/html;charset=utf-8");
include './common/core.php';
include './common/date.php';

dump( getSystemMonthArr() );
dump( getSystemWeekArr() );
dump( date('Y-m-d H:i:s',getMonthLastDay(2017,7)) );
dump( getMonthWeekArr(2017,1) );
dump( getWeek_SdateAndEdate(time()) );