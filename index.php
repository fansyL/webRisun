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
	<script type="text/javascript" src="js/ZoomPic.js"></script>	
	<link rel="stylesheet" type="text/css" href="css/css.css">

	<style type="text/css">
		 .nav-box {
			position: relative;
			background: #234f78;
			}
		 .nav-pills {
			display: block;
			width: 500px;
			margin: 0 auto;
			position: relative;
			}
		 .nav-pills li{
		 	width: 71px;
		 	text-align: center;
		 }
		 .carsoul-box{
		 	width: 1263px;
		 	height: 457px;
		 	background-color:#aaaaaa; 
		 }
		 .img_box{
		 	width: 1100px;
		 	margin: 50px 80px;
		 	padding: 0px;
		 }
	</style>
<body>
	<div class="nav-box">
		<ul class="nav nav-pills" >
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="nav/1.php">1</a></li>
		  <li><a href="nav/2.php">2</a></li>
		  <li><a href="nav/3.php">3</a></li>
		  <li><a href="nav/4.php">4</a></li>
		  <li><a href="nav/5.php">5</a></li>
		</ul>
	</div>

	<div class="carsoul-box">
		<div id="jswbox">
		<pre class="prev">prev</pre>
		<pre class="next">next</pre>
		<ul>
			<li><img src="img/1.jpg"/></li>
			<li><img src="img/2.jpg"/></li>
			<li><img src="img/3.jpg"/></li>
			<li><img src="img/4.jpg"/></li>
			<li><img src="img/5.jpg"/></li>
			<li><img src="img/6.jpg"/></li>
			<li><img src="img/7.jpg"/></li>
		</ul>
	</div>
	</div>
	
	<div class="img_box">
		<div class="row">
	    <?php 
		 include 'test.php'; 
		$test = new nezha();
		 $res = $test->findall();
		 foreach ($res as $value) {
		 	 echo "<div class='col-sm-6 col-md-3'>";
		 	 echo "<div class='thumbnail'>";
		 	 echo "<img src='".$value['imgPath']."'  alt='通用的占位符缩略图'>";
		 	 echo "<div class='caption'>";
		 	 echo "<h3>".$value['title']."</h3>";
		 	 echo "<p>".$value['author']."</p>";
		 	 // echo "<p>".$value['id']."</p>";
		 	 echo "<p><a href='content.php?id=".$value['id']."' class='btn btn-primary' role='button'> 按钮 </a> </p>";
		 	 // echo "<a href='#' class='btn btn-default' role='button'> 按钮 </a> </p>";
		 	 echo "</div>";
		 	 echo "</div>";
		 	 echo "</div>";
		 }

	 ?>
    </div>
	</div>
	
</body>
<script type="text/javascript">
	$(function(){
		new ZoomPic("jswbox");	
	})

</script>
</html>