<?php 
class get{
    public function getData($form,$long){
        // câu truy vấn
        $sql = "select * from products limit $form, $long";
        // kết nối db
        $db = new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
        // // thực hiện truy vấn
        $req = $db->query($sql);
        // khai báo mảng và biến điếm $i
        $i = 0;
        $list = array();
        // thực hiện ghi dữ liệu từ db vào mảng 
        foreach($req->fetchAll() as $r){
            $list[$i] = $r; // ghi xong thì mảng sẽ trở thành mảng đa chiều
            $i++;
        }
        // trả về giá trị mảng lấy được
        return $list;
    }
    public function tongsp($dk){
        $sql = "select * from products $dk ";
        $db = new PDO('mysql:host=localhost; dbname=webthuongmai;charset=utf8','root','');
        $req = $db->query($sql);
        $total = $req->rowCount();
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
    public function Lay_loai_sp(){
        $sql= "select * from type_products";
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
    public function Hien_thi_theo_loai($ma, $form, $long){
        $sql ="SELECT 
        a.id AS type_id,
        a.name AS type_name,
        a.description AS type_description,
        a.image AS type_img,
        b.id AS pr_id,
        b.name AS pr_name,
        b.id_type,
        b.description AS pr_des,
        b.total AS pr_total,
        b.unit_price AS unit,
        b.promotion_price AS promotion,
        b.image AS pr_img
        FROM type_products AS a INNER JOIN products As b On( a.id = b.id_type) Where b.id_type =$ma LIMIT $form,$long";
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
        b.name AS pr_name,
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
    public function one_product($id){
        $db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
        $db->query('set names "utf8"');
        $sql = "SELECT * from products WHERE id = " .$id;
        $req = $db->query($sql);
        $totalrow = $req->rowCount();
        $list = array($totalrow);
        $i = 0;
        foreach ($req->fetchAll() as $item) {
            $list[$i] = new Product(
                $item['id'], 
                $item['product_name'],
                $item['description'],
                $item['unit_price'],
                $item['promotion_price'],
                $item['image'],
                $item['unit'],
                $item['quantity'],
                $item['created_at'],
                $item['updated_at']
            );
            $i++;
        }
        return $list;
    }
}
class Product {
  public $id;
  public $name;
  public $description;
  public $unit_price;
  public $promotion_price;
  public $image;
  public $unit;
  public $quantity;
  public $created_at;
  public $updated_at;

  public function __construct($id, $name, $description, $unit_price,$promotion_price,$image,$unit,$quantity,$created_at,$updated_at) {
    $this->ma = $id;
    $this->ten = $name;
    $this->mota= $description;
    $this->gia = $unit_price;
    $this->giakm = $promotion_price;
    $this->anh = $image;
    $this->donvi = $unit;
    $this->soluong = $quantity;
    $this->tao = $created_at;
    $this->capnhat = $updated_at;
  }
}
?>