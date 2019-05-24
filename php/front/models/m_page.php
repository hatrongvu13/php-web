<?php 
class page{
    public function about(){
        $sql = "SELECT * FROM about";
        $db = new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
        $req = $db->query($sql);
        $i = 0;
        $list = array();
        foreach($req->fetchAll() as $r){
            $list[$i] = $r;
            $i++;
        }
        return $list;
    }
    public function contact(){
        
    }
    public function Hien_thi_theo_loai($ma, $form, $long){
        $sql ="SELECT * FROM products Where id_type =$ma LIMIT $form,$long";
        $db = new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
        $req = $db->query($sql);
        // $total = $req->rowCount();
        $i = 0;
        $list = array();
        foreach($req->fetchAll() as $r){
            $list[$i] = $r;
            $i++;
        }
        return $list;
    }
    public function total($ma){
        $sql = "SELECT 
        a.id AS type_id,
        a.name AS type_name,
        a.description AS type_description,
        a.image AS type_img,
        b.id AS pr_id,
        b.product_name AS pr_name,
        b.id_type,
        b.description AS pr_des,
        b.total AS pr_total,
        b.unit_price AS unit,
        b.promotion_price AS promotion,
        b.image AS pr_img
        FROM type_products AS a INNER JOIN products As b On( a.id = b.id_type) Where b.id_type = $ma";
        $db = new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
        $req = $db->query($sql);
        $total= $req->rowCount();
        return $total;
    }
    public function Hien_thi_sp_khuyenmai($from){
        $long = 6;
        $sql = "SELECT * FROM products WHERE promotion_price > 0 LIMIT $from ,6";
        $db = new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
        $req = $db->query($sql);
        // $total = $req->rowCount();
        $i = 0;
        $list = array();
        foreach($req->fetchAll() as $r){
            $list[$i] = $r;
            $i++;
        }
        return $list;
        
    }
}