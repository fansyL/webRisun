<?php  
	
	class nezha{

		private function getAuthInfoByClientParam($httpVerb, $contMd5, $contType, $resource, $headers, $date = null) {
        $ak = "AKLTrH0TBf1hQT23_BL3n1jvJ";
        $sk = "OAw42ekJXRANm+/GwA7eDaCZ5afwdNlceDk123452JYc3NCuFlsPSdMO7V2HgY1w4w==";
        if(empty($date)){
		    $gmtDate = gmdate('D, d M Y H:i:s \G\M\T');
        }else{
            $gmtDate = $date;
        }
        // Log::debug($gmtDate);
		$arrToSign = array(
			$httpVerb,
			$contMd5,
			$contType,
			$gmtDate,
		);
		if (!empty($headers)) {
			array_push($arrToSign, $headers);
		}
		array_push($arrToSign, $resource);
		$strToSign = join("\n", $arrToSign);
        // Log::debug($strToSign);
		$signature = base64_encode(hash_hmac('sha1', $strToSign, $sk, true));
		$strAuth = 'KSS ' . $ak . ':' . $signature;
		$arrRes = array(
			'Date'			=> $gmtDate,
			'Authorization' => $strAuth,
		);
		return $arrRes;
	}
    public function GetKs3Signature() {
        $verb = 0;
        $md5 = "";
        $type =  "";
        $res =  "";
        $headers =  "";
        $date =  "";
        $ret = $this->getAuthInfoByClientParam($verb, $md5, $type, $res, $headers, $date);
        return response()->json($ret);
    }

		public function  test(){
			echo "string";
			// each("hello!");
		}


		public function DB(){

				 $dsn = "mysql:dbname=nezha_test;host=localhost";
				 $db_user = 'root';
				 $db_pass = 'root';
				try {
				    $pdo = new PDO($dsn, $db_user, $db_pass);
				    $pdo->query("SET NAMES utf8");
					} catch (PDOException $e) {
				    echo '数据库连接失败' . $e->getMessage();
					}
 
 				return  $pdo;
		}


		public function add($name,$age){
			$DB = $this->DB();
			$sql = "insert into customer(name , age)  values('".$name."',".$age.") ";
			$res = $DB->exec($sql);
		}

		public function update(){
			$DB = $this->DB();
			// $sql = 
			return $DB;
		}

		public function delete(){
			$DB = $this->DB();
		}

		public function findall(){
			$DB = $this->DB();
			$sql = "select * from article";
			$res = $DB->query($sql);
			return $res;
		}

		public function findone($id){
			$DB = $this->DB();
			$sql = "select * from article where id =".$id;
			$res = $DB->query($sql);
			return $res::fetch();
		}

		public function findBookOne($id){
			$DB = $this->DB();
			$sql = "select content from book where art_id =".$id;
			$res = $DB->query($sql);
			return $res;
		}
	}


?>