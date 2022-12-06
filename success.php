<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> بيان نجاح</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\bootstrap.css" >
    <style>
*{
    margin: 0;
    padding: 0;
 }
 body{
        font-familycenter: 'Courier New', Courier, monospace;
 }
.form-box {
    width: 600px;
    background:rgba(0, 0, 0, 0.8) ;
    margin: 1% auto;
    padding: 20px 0;
    color: #0d6efd;
    box-shadow: 0 0 2PX  rgba(0, 0, 0, 0.5) ;
}
 h5{
     text-align:center; ;
     margin-bottom: 40px;
}
.input-box{
    margin: 26px auto;
    width: 80%;
    border-bottom: 1px solid #fff;
    padding-top: 5px;
    padding-bottom:10px;
}
h4{
    margin: 10px;
    text-align: left;
}

.input-box input{
width: 90%;
border: none;
outline: none;
background: transparent;
color: white;
}
::placeholder{
    color: #fff;
    text-align: left;

}
.login-btn{
    margin: 160px auto 20px;
    width: 80%;
    display: block;
    outline: none;
    padding: 10px 0;
    border: 1px solid #c9a877;
    cursor: pointer;
    background: transparent;
    color: #0d6efd;
    font-size: 16px;
    padding-bottom:10px;
}
.eye{
    position: absolute;

}
#hide1{
    display:none;
}

 h2{
     text-align: left;
     margin-bottom: 30px;
         margin-left: 26px;

}
 
    </style>
    

</head>
<body  style="background-image: url(image/atm.jpeg) ;background-size: cover;" dir="ltr" >
      <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#2d65dd; ">
                 <div class="container-fluid">
                            <b> <a class="navbar-brand" href="#a"  style="color: black;" >Digital
                         <span style="color: white;"> University</span></a></b>
                </div>
                 </nav>
    <div class="container">


    <?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>

      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

    <form class="form-box" action="print.php"  method="post">
       
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
         <a href="http://localhost/project/print.php" alt="aaaa"> 
        <button type="submit" class="btn btn-outline-primary btn-lg"style="margin-left:460px;margin-bottom:40px;font-size:25px;color:#fff;">
        Done <i class="fa fa-sign-in"></i></button></a>
        
        </form>


</body>

</html>
