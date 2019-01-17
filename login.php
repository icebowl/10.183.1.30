<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('index.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}

	// these variables are used by am.php and pm.php
	$amurl = array('icebowl.ioe','zulu.ioe');
	$pmurl = array('icebowl.ioe','zulu.ioe');
	//				  red       green     blue       yellow     cyan     magenta   orange     green2   violet    magenta2   blue2     green3   dark gray  light gray   tan     tan2
	$ncolor = array('#B35050','#50B350' ,'#5050B3' ,'#B3B350','#50B3B3','#B350B3','#DC7F32','#32DC7F','#7F32DC' ,'#DC327F','#327FDC','#7FDC32','#505050','#B3B3B3','#FDF6E3' ,'#FFEDBF');
	$fcolor = array('#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#000',	'#000');
	
	?>
<html>
<head>
<title>io login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/icebowl.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
</head>
<body>
<?php include "nav.html" ; ?>
       <form  method="post" id="login-form">
   <!-- error -->
        <?php
			if(isset($error))
			{
					echo $error;
               
			}
		?>

        <input type="text"  name="txt_uname_email" placeholder="Username or E mail ID" required />
        <input type="password" name="txt_password" placeholder="Your Password" />

       
            <button type="submit" name="btn-login">
                &nbsp; Login
            </button>    
           
      </form>
      Please login using  io  and 424242.
          <?php $r = rand(0, 11); 	$link2  = "<span style='padding:1px 5px 1px 5px;background-color:".$ncolor[$r]."; color:".$fcolor[$r]."'>Register</b></span>";
				echo "<a href = 'register.php'>$link2</a>";
			?> 
</body>
</html>
