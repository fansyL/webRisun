<!DOCTYPE html>
<html>
<head>
	<title>nezha ___ test</title>
</head>
<!-- <link rel="stylesheet" type="text/css" href="boostrap/boostrap.min.css">
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="boostrap/boostrap.min.js"></script> -->

<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		 div {
			position: relative;
			background: #234f78;
			}
		 ul {
			display: block;
			width: 500px;
			margin: 0 auto;
			position: relative;
			}
		 li{
		 	width: 71px;
		 	text-align: center;
		 }
	</style>
<body>
	<div class="nav-box">
		<ul class="nav nav-pills" >
		  <li><a href="/index.php">Home</a></li>
		  <li><a href="1.php">1</a></li>
		  <li><a href="2.php">2</a></li>
		  <li class="active"><a href="#">3</a></li>
		  <li><a href="4.php">4</a></li>
		  <li><a href="5.php">5</a></li>
		</ul>
	 
	</div>
	<?php 
	    // $ak = "AKLTrH0TBf1hQT23_BL3n1jvJ";
		$data = "GET\n\n\nWed, 21 Jun 2017 09:16:24 GMT\n";
        $sk = "OAw42ekJXRANm+/GwA7eDaCZ5afwdNlceDk123452JYc3NCuFlsPSdMO7V2HgY1w4w=="; 
		$date = gmdate('D, d M Y H:i:s \G\M\T');
		echo($date);
		echo("<br>");
		$signature = base64_encode(hash_hmac('sha1',$data , $sk, true));
		echo($signature);

		$dates = time() + 60 * 60 * 24;
		echo($dates);
	 ?>
</body>
<script type="text/javascript">
	$("li").click(function(){
		$("li").removeClass("active");
		$(this).addClass("active");

	}) 
</script>
</html>