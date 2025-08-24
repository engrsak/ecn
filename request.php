<?php
$adsuc="";
if (isset($_POST['submit'])) {
   $checkbox1 = $_POST['vehicle'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       } 


    $to='sakunrk4@gmail.com';
    $subject='Email Verification From INTERACTMEDS.COM';
    $headers = array("From: ECNAssist.COM"."<info@zdevelopers.co.uk>",
    "Reply-To: info@zdevelopers.co.uk",
    "X-Mailer: PHP/" . PHP_VERSION
    );
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message = '<html><body style="text-align:center;">';
    $message .= '<table style="border:none; margin-top:10px; margin-bottom:10px; width:100%;" rules="none">';
    $message .= '<tr><td><h3>Lessons '.$chk.'</h3></td></tr>';
    $message .= '</table>';
    $message .= '</body></html>';
   
  
  if(mail($to, $subject, $message, $headers)){

    $adsuc="Thanks for your request!";
    }else{
    $adsuc="Something went wrong!"; 
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title></title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="image/png" href="images/fav.jpg">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style-app.css">

</head>
<body>
         <section id="f-content-n" style="background: #151c2b; text-align: center; color: #fff; margin-bottom: 40px;">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                        <h1><img src="images/ECN-3.png" class="img-responsive"></h1><br><br>
                        <p><?php echo $adsuc; ?></p>
                        <p style="color: #fff;">Select the topics would you like to see here and hit the button.</p>
                        <form action="" method="post">
                            <input type="checkbox" name="lesson[]" class="form-control" value="L1">Comparatively analyses in an economic system<br>
                            <input type="checkbox" name="lesson[]" class="form-control" value="L3">Government intervention in the free market<br>
                            <input type="checkbox" name="lesson[]" class="form-control" value="L4">Rational bahaviours of production units<br>
                            <input type="checkbox" name="lesson[]" class="form-control" value="L5">Macroeconomic operations<br>
                            <input type="checkbox" name="lesson[]" class="form-control" value="L7">Bhaviour of money and price level<br>
                            <input type="checkbox" name="lesson[]" class="form-control" value="L9">International Trade<br>
                            <input type="checkbox" name="lesson[]" class="form-control" value="L10">Foreign finance affects the Sri Lanka economy<br>
                            <input type="checkbox" name="lesson[]" class="form-control" value="L11">Exhibits the interest of contribution to sustainable development<br><br>
                            <button type="submit" name="submit" style="background: #29ca8e;border: none; border-radius: 25px; padding: 10px 24px 10px 24px;">Request</button>
                        </form>
                    </div>

               </div>
          </div>
     </section>



  

 <?php include('foot.php');?>