<?php
namespace App\Database\Config;

use mysqli;
class Connection{
    private string $db_hostname="localhost";
    private string $db_username="root";
    private string $db_password="";
    private string $db_name="nti_ecommerce";
    public \mysqli $conn;
    public function __construct()
    {
        $this->conn = new mysqli($this->db_hostname,$this->db_username,$this->db_password,$this->db_name);
    }
    public function __destruct()
    {
        $this->conn->close();
    } 
}
?>