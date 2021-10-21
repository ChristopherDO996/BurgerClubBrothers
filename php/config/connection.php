<?php
class Connect
{
    private $serverDB = "localhost";
    private $userDB = "root";
    private $nameDB = "burgercb";
    private $passDB = "";

    public function doConnection()
    {
        $connection = mysqli_connect(
            $this->serverDB,
            $this->userDB,
            $this->passDB,
            $this->nameDB
        );
        $connection->set_charset("utf8");
        return $connection;
    }
}
