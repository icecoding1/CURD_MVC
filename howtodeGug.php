<?php
// phpinfo();

$text = "xxx";
$arr = ["xx" => ["xx" => 1], 'xx2' => 3];
for ($i = 0; $i < 10; $i++) {
  echo 'number' . $i;
}

// สามารถ debug ผ่าน extention เเละ console 
// เเต่ต้องติดตั้ง debug ก่อนซึ่งใช้เป็น xdebug เเต่ต้องติดตั้งก่อน ซึ่งเข้าไปที่  xdebug.org/wizard เเละนำคำสั่ง หรือ copy ทั้งหน้าที่เราประกาศ phpinfo() ไว้
// เเละทำการดาวโหลด debug progarm เเละนำไปไว้ที่ php/ext/
// เเละ setup ค่าที่ php/php.ini
// จากนั้น restart apache ติดตั้ง extention ใน vs code php debug 
// จากนั้น run เพื่อ create launch.json เเละทำการ brackpoint จุดที่ต้องการ debug เเละรันหน้าที่เราต้องการ ผ่าน browser เเละกลับมาที่ vs code จะเห็นรายการที่เรา debug_backtrace
// ซึ่งง่ายต่อการจัดการ ด้วยที่เราไม่ต้องไปทำการ dump โปรเเกรมให้เสียเวลา 
// เเละสามารถเปลี่ยนค่า variable ผ่าน console ได้