<?php
session_start();
require_once('connect.php');

if(isset($_POST) & !empty($_POST)){
 $password = mysqli_real_escape_string($connection, $_POST['password']);
  $number = mysqli_real_escape_string($connection, $_POST['num']);



 $sql = "SELECT*FROM `students` WHERE num='$number' AND password='$password'";
 $result = mysqli_query($connection, $sql);
 $count = mysqli_num_rows($result);
 if($count == 1){
 	while($row=mysqli_fetch_array($result)){
 		#echo $row['num']."<br>";
 		#echo $row['username']."<br>";
 		header('Content-Type: image/jpeg');
		$font=realpath('arial.ttf');
		$image=imagecreatefromjpeg('cer1.jpeg');
		$color=imagecolorallocate($image, 51, 51, 102);
		$name= $row['username'];
		imagettftext($image,25,0,250,440,$color,$font,$name);

		$brith=$row['brith'];
		imagettftext($image, 25, 0, 260, 495,$color , $font,$brith);
		$address=$row['address'];
		imagettftext($image, 25, 0, 720, 495,$color , $font,$address);

		$national=$row['national'];
		imagettftext($image, 25, 0, 675, 540,$color , $font,$national);

		$num=$row['num'];
		imagettftext($image, 25, 0, 233, 542,$color , $font,$num);

		$depre=$row['depre'];
		imagettftext($image, 25, 0, 220, 679,$color , $font,$depre);

		$speciaty=$row['speciaty'];
		imagettftext($image, 25, 0, 650, 679,$color , $font,$speciaty);

		$graduate=$row['graduate'];
		imagettftext($image, 25, 0, 210, 731,$color , $font,$graduate);

		$system=$row['system'];
		imagettftext($image, 20, 0, 779, 731,$color , $font,$system);

		$group=$row['group'];
		imagettftext($image, 25, 0, 350, 800,$color , $font,$group);

		$grade=$row['grade'];
		imagettftext($image, 25, 0, 490, 909,$color , $font,$grade);

		$rate=$row['rate'];
		imagettftext($image, 25, 0, 70, 920,$color , $font,$rate);

		$gradepro=$row['gradepro'];
		imagettftext($image, 25, 0, 320, 985,$color , $font,$gradepro);

		$date=$row['date'];
		imagettftext($image, 18, 0, 410, 1055,$color , $font,$date);

		$number=$row['number'];
		imagettftext($image, 19, 0, 40, 1055,$color , $font,$number);

		$datee=$row['datee'];
		imagettftext($image, 25, 0, 150, 1140,$color , $font,$datee);









		imagejpeg($image);
		imagejpeg($image,"student/".$name.".jpg");
    imagejpeg($image,"window.print()".$name.".jpg");

		imagedestroy($image);

 		

 	}
 	}

 else{
 	echo "failed";


  
 }
}

?>

