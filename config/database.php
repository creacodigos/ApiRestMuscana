<?php
class Database{
 
    // especificar credenciales de conexión
    // specify your own database credentials
    private $host     = "localhost";
    private $db_name  = "api_db";
    private $username = "root";
    private $password = "";
    public  $conn;
 
    // obtener la conexión a la base de datos
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Error de Conexión: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}