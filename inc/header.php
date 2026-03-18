<!DOCTYPE html>

<html>
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $title; ?></title>
	<!-- <title>Libkart - Best Clothing Online Shopping</title> -->

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/lib-ico.svg">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="js/isotope/isotope.css">
	<link rel="stylesheet" href="js/flexslider/flexslider.css">
	<!-- <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.transitions.css"> -->
	<!-- <link rel="stylesheet" href="js/superfish/css/megafish.css" media="screen"> -->
	<link rel="stylesheet" href="js/superfish/css/superfish.css" media="screen">
	<!-- <link rel="stylesheet" href="js/pikaday/pikaday.css">
	<link rel="stylesheet" href="css/settings-panel.css"> -->
	<link rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/light.css"> -->
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/navstyle.css">
	<link rel="stylesheet" href="css/cardstyle.css">
	<link rel="stylesheet" href="css/sestyle.css">
	<link rel="stylesheet" href="css/ei.css">

	<!-- JS Font Script -->
	<script src="js/bebas-neue.js"></script>


	<!-- Modernizer -->
	<script src="js/modernizr.custom.js"></script>
	<!-- <script src="js/navscript.js"></script> -->



	<script>
function lightbg_clr() {
	$('#qu').val("");
	$('#textbox-clr').text("");
 	$('#search-layer').css({"width":"auto","height":"auto"});
	$('#livesearch').css({"display":"none"});	
	$("#qu").focus();
 };
 
function fx(str)
{
var s1=document.getElementById("qu").value;
var xmlhttp;
if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
	document.getElementById("search-layer").style.width="auto";
	document.getElementById("search-layer").style.height="auto";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("");
    return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	document.getElementById("search-layer").style.width="100%";
	document.getElementById("search-layer").style.height="100%";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("X");
    }
  }
xmlhttp.open("GET","call_ajax.php?n="+s1,true);
xmlhttp.send();	
}
</script>   




</head>
<body class="multi-page">

<section class="topbar">
    <div class="top1" id="top"><!-- Top Begin -->
       
        <div class="container"><!-- container Begin -->
            
            <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
                <p>Need help?</p>
    <!--            <a href="#" class="btn btn-success btn-sm">Welcome</a> -->
                 <a href="#">orders@libaseZ.com.pk</a>
                
            </div><!-- col-md-6 offer Finish -->
            
            <div class="col-md-6"><!-- col-md-6 Begin -->
                
                <ul class="menu"><!-- cmenu Begin -->
                    
                    <li>
                        <a href="login.php">Register</a>
                    </li>
                    <li>
                        <a href="my-account.php">My Account</a>
					</li>
					<li>
                        <a href="wishlist.php">Wishlist</a>
                    </li>
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    
                </ul><!-- menu Finish -->
                
            </div><!-- col-md-6 Finish -->
            
        </div><!-- container Finish -->
        
    </div><!-- Top Finish -->

</section>



<div id="wrapper" class="wrapper">
	<!-- HEADER -->
	<header id="header2">
		<div class="container">
		