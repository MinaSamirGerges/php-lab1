<?php
//  phpinfo();


// echo $_SERVER['SERVER_NAME']."<br>";

// echo $_SERVER['SERVER_ADDR']."<br>";

// echo $_SERVER['SERVER_PORT']."<br>";

// const WEB_NAME ='iti.com';
// echo WEB_NAME."<br>";




echo "the filename and path:".__FILE__ ."<br>";

$age=10;
$grade = 12-$age;

switch ($age) {

    case $age<5:
      echo "stay at home";
      break;
    case $age==5:
      echo "go to kindergarden";
      break;
    case $age>6 && $age <12:
       
      echo "go to grade".$grade;
      break;
}

?>