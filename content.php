<!DOCTYPE html>
<html>
<head>
	<title>书籍信息</title>
	<meta charset="utf-8">
</head>
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
 
	<div class="panel panel-info">
	    <div class="panel-heading">
	        <h3 class="panel-title">书籍信息如下:</h3>
	    </div>
	    <div class="panel-body">
	    <?php  
			include 'test.php'; 
			$test = new nezha();
			$id = $_GET["id"];
			$res = $test->findBookOne($id);
			while($result=$res->fetch(PDO::FETCH_ASSOC)){
				echo $result["content"];
	 		}
	    ?>
	    </div>
	</div>
	
</body>
</html>