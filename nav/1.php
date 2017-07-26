<!DOCTYPE html>
<html>
<head>
	<title>nezha ___ test</title>
</head>
<!-- <link rel="stylesheet" type="text/css" href="boostrap/boostrap.min.css">
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="boostrap/boostrap.min.js"></script> -->


	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		 .nav-box {
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
		  <li class="active"><a href="#">1</a></li>
		  <li><a href="2.php">2</a></li>
		  <li><a href="3.php">3</a></li>
		  <li><a href="4.php">4</a></li>
		  <li><a href="5.php">5</a></li>
		</ul>
		 
	</div>


<button class="btn btn-primary btn-lg" data-toggle="modal" 
   data-target="#myModal">
  扫描图片
</button>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true" >
	   <div class="modal-dialog">
	      <div class="modal-content">
	         <div class="modal-header">
	            <button type="button" class="close" 
	               data-dismiss="modal" aria-hidden="true">
	                  &times;
	            </button>
	            <h4 class="modal-title" id="myModalLabel">
	               请输入密码
	            </h4>
	         </div>
	         <div class="modal-body">
	           <input type="" name="" id ="inputs">
	         </div>
	         <div class="modal-footer">
	            <button type="button" class="btn btn-default" 
	               data-dismiss="modal">关闭
	            </button>
	            <button type="button" class="btn btn-primary"  onclick="displays()">
	               提交
	            </button>
	         </div>
	      </div><!-- /.modal-content -->
      </div>
 
<!-- <script src="http://www.runoob.com/try/bootstrap/twitter-bootstrap-v2/js/bootstrap-modal.js"></script> -->
</body>
<script type="text/javascript">
	$("li").click(function(){
		$("li").removeClass("active");
		$(this).addClass("active");

	}) 

   function	displays(){
   		var a = $("#inputs").val();
   		if(a == 'a'){
           $('#myModal').modal('hide');      
   		}else{
   			$("#myModalLabel").text("请重新输入");
   		}
    }

</script>
</html>