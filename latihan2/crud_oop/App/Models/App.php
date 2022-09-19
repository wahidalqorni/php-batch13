<?php
class App
{
    public function __construct()
    {
        require_once 'App/config/Database.php';
    }

    protected function query($query) {
        $db = new Database();

        $mysqli = $db->koneksi();

        $sql = $query;

        $result = $mysqli->query($sql);

        return $result;
    }

}
