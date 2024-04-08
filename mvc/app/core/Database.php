<?php

<<<<<<< HEAD
class Database
{
    private function connect()
    {
        $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        $con = new PDO($string, DB_USER, DB_PASS);
        return $con;
    }

    public function query($query, $data = [])
=======
Class Database
{
    public function connect()
    {
        $string = "mysql:host=localhost;dbname=mvc_bsis3c";
        $con = new PDO($string, 'root','');
        return $con;
    }

    public function query($query, $data =[])
>>>>>>> 23f6356c2bd39da251b78c9df2463a13e2522941
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);

<<<<<<< HEAD
        if ($check)
        {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);

            if (is_array($result) && count($result) > 0)
=======
        if($check)
        {
            $result = $stm ->fetchAll(PDO::FETCH_OBJ);

            if(is_array($result)&& count($result) > 0)
>>>>>>> 23f6356c2bd39da251b78c9df2463a13e2522941
            {
                return $result;
            }
        }
        return false;
    }
}