<?php
class user{
    public function login($user,$pass){
        $sql = "SELECT * FROM user";
        $db - new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
        $req = $db->query($sql);
        // $total = $req->rowCount();
        foreach($req->fetchAll() as $r){
            if($r['user'] == $user && $r['password'] == $pass){
                $_SESSION['user'] = $r['full_name'];
            }
        }
        return $_SESSION['user'];
    }
}