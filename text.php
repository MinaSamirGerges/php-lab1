<?php
phpinfo();


print_r( $_SERVER );

const WEB_NAME ='iti.com';
echo WEB_NAME."<br>";




echo "the filename and path:".__FILE__;

$age=10;
$grade = 12-$age;
switch ($age) {

    case "$age<5":
      echo "stay at home";
      break;
    case "$age=5":
      echo "Your favorite color is blue!";
      break;
    case "$age>6 && $age <12":
       
      echo "go to grade".$grade;
      break;
}

?>