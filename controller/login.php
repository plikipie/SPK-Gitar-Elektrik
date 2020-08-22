<?php 
class Login
{
    private $conn;
    private $table_name = "admin";
    
    public $username;
    public $password;

    public function __construct($db){
        $this->conn = $db;
    }

    public function login()
    {
        $username = $this->checkCredentials();
        if ($username) {
            $this->user = $username;
            session_start();
            $_SESSION['username'] = $username['username'];
            $_SESSION['password'] = $username['password'];
            return $username['username'];
        }
        return false;
    }

    protected function checkCredentials()
    {
        $stmt = $this->conn->prepare('SELECT * FROM '.$this->table_name.' WHERE username=? and password=? ');
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->password);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            $submitted_pass = $this->password;
            if ($submitted_pass == $data['password']) {
                return $data;
            }
        }
        return false;
    }

    public function getUser()
    {
        return $this->user;
    }
}
?>