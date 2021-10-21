<?php

class loginForm extends Connect
{
    private $conn;
    public function __construct()
    {
        $this->conn = $this->doConnection();
    }

    public function login($user, $pass)
    {
        $sql = "SELECT id_user FROM users WHERE username = '$user' AND password = '$pass'";
        $result = $this->conn->query($sql);
        if ($result) {
            while ($row = $result->fetch_object()) {
                $user = $row['id_user'];
                return $user;
            }
        } else {
            return false;
        }
    }
}
