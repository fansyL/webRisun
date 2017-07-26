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
		 .nav-div {
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
		 .imgBack{
		 	background-color: red;
		 }
	</style>
<body>
	<div class="nav-box nav-div">
		<ul class="nav nav-pills" >
		  <li><a href="/index.php">Home</a></li>
		  <li><a href="1.php">1</a></li>
		  <li><a href="2.php">2</a></li>
		  <li><a href="3.php">3</a></li>
		  <li class="active"><a href="#">4</a></li>
		  <li><a href="5.php">5</a></li>
		</ul>
	 <?php 
	 	// include './test.php'; 
	 	// $test = new nezha();
		 // $res = $test->GetKs3Signature();
		 // echo($res);

	  ?>
	</div>
	<div class="imgBack">
	    <span>
	    	<img src="/img/1.jpg">
	    	<span class = "imgtest">
	    		<img src="/img/2.jpg">
	    	</span>
	    </span>
	</div>
</body>
<script type="text/javascript">
	$("li").click(function(){
		$("li").removeClass("active");
		$(this).addClass("active");

	}) 
</script>
</html>