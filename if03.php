<?php

//--if03.php
$name="Manager";
if($name=="Manager")
   {
    echo"ยินดีต้อนรับคุณ<Font color='red'>$name </font> คุณคือผู้จัดการ";
	echo"<a href='http://www.arnut.com'>Go To อิอิ.com</a>";
   }elseif($name=="admin")
   {
    echo"ยินดีต้อนรับ <Font color='Golden'>$name </font> คุณคือผู้ดูแลระบบ";
   }elseif($name=="webmaster")
   {
    echo"ยินดีต้อนรับ <Font color='Yellow'>$name </font> คุณคือผู้ดูแลเว็บไซต์";
   }else
   {
   echo"ยินดีต้อนรับ <Font color='Purple'>$name </font> คุณคือผู้ใช้งาน";
   }
   
?>
   