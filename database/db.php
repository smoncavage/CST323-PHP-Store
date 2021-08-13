<?php
class Database{
 
    // specify your own database credentials
    private $host = "cst323php.mysql.database.azure.com";
    private $db_name = "appdata";
    private $username = "adminuser";
    private $password = "NaVy.2005";
    public $conn;
	
	public $con = mysqli_init(); 
	mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "cst323php.mysql.database.azure.com", "adminuser@cst323php", $password, $database, 3306);
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>