<?php 
   define('DB_NAME','markaz');
   define('DB_HOST','localhost');
   define('DB_USER','root');
   define('DB_PASS','');
   
   
  //  define('URL', "http://"); 
   
  
   
   class Model{
     public $table;
     public $db;
     

      function __construct(){
          $this->db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
      }
      function select(){

        $sql = "SELECT * FROM ".$this->table." ORDER BY id DESC";
        $link = mysqli_query($this->db,$sql);

        return mysqli_fetch_all($link,MYSQLI_ASSOC);
    }

    function delete($id){
      $sql = "DELETE FROM ".$this->table." WHERE id=".$id;
      if(mysqli_query($this->db,$sql)){
        return 200;
      }else{
        return 409;
      }
    }

    public function reg($arr){
      
      //exit;
		$user = $arr['user'];
		$email = $arr['email'];
		$password = $arr['password'];
		$confirm = $arr['confirm'];
		if($arr['password'] != $arr['confirm']){
			return 500;
		}else{
			$sql = "INSERT INTO `registratsiya` (`id`,`user`,`email`,`password`) VALUES (NULL,'$user','$email','$password')";
			$link = mysqli_query($this->db,$sql);
			if($link){

				return 200;

			}else{

				return 409;

			}
      }
    }

	public function selectOne($id){

		$sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
		$qaytish = mysqli_query($this->db,$sql);
	
		return mysqli_fetch_assoc($qaytish);
		
	}

}
?>