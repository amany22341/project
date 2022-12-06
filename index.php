<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $number = mysqli_real_escape_string($connection, $_POST['num']);
 $password =  mysqli_real_escape_string($connection, $_POST['password']);

 $sql = "SELECT num,password FROM `students` WHERE num='$number' AND password='$password'";
 $result = mysqli_query($connection, $sql);
 $count = mysqli_num_rows($result);
 if($count == 1){

 $smsg = "<div class='smsg'> You are logged in successfully </div>";
 echo "<meta HTTP-EQUIV='REFRESH' content='0; url=atm.php'/>";

 }else{

  $fmsg = "<div class='fmsg fmg'>Data is not available </div>";

  
 }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>


    <link rel="stylesheet" href="css/log in.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css\bootstrap.css" >
        

</head>
<body  style="background-image: url(image/atm.jpeg) ;background-size: cover;" dir="ltr" >
    <div class="container">

    <?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>

      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

    <form class="form-box"  method="post">
        <div class="user">
            <i class="fa fa-users" style="font-size:80px;padding-left:460px;"></i></b>
           <marquee> <h1>   welcome</h1></marquee>
            </div>
        <h2>The National ID</h4>
        <div class="input-box" >
            <i class="fa fa-id-card-o"style="font-size:30px;" ></i>
            <input type="text" placeholder="Please Enter The National ID" name="num"  >
        </div>
        <h2> password </h4>
        <div class="input-box">
            <i class="fa fa-key"style="font-size:30px;" ></i>
            <input type="password" placeholder="Please Enter The password " id="myinput" name="password" >
            <span   class="eye" onclick="myfunction()">
                <i id="hidel"  class="fa fa-eye"style="font-size:20px;"  ></i>
                <i id="hide2" class="fa fa-eye-slash"style="font-size:20px;"  ></i>
            </span> 
        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg"style="margin-left:460px;margin-bottom:40px;font-size:25px;color:#fff;">
        ok <i class="fa fa-sign-in"></i></button>
        
    


    </form>
    </div>
    <script>
        function myfunction(){
            var x = document.getElementById("myinput");
            var y = document.getElementById("hidel");
            var z = document.getElementById("hide2");

            if(x.type==='password'){
                x.type="text";
                y.style.display="block";
                z.style.display="none";
            }
            else{
                x.type ="password";
                y.style.display="none";
                z.style.display="block";
            }
        }

        
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js\jquery-3.6.0.min.js"></script>
    <script src="js\bootstrap.js"></script>
   
</body>

</html>
