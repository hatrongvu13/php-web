<?php
include_once("database.php");
class M_don_hang extends database
{
	public function Hien_don_hang(){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$req = $db->query("SELECT * FROM bill_detail
			INNER JOIN bills ON bill_detail.id_bill = bills.id
			INNER JOIN customer ON bills.id_customer = customer.id
			INNER JOIN products ON bill_detail.id_product = products.id");
		$totalrow = $req->rowCount();
		$list = array($totalrow);
		$i = 0;
		foreach ($req->fetchAll() as $item) {
			$list[$i] = new Don(
				$item['id_bd'], 
				$item['c_name'], 
				$item['product_name'],
				$item['unit_price'], 
				$item['promotion_price'], 
				$item['image'], 
				$item['quantity'], 
				$item['status'], 
				$item['dh_created_at']
			);
			$i++;
		}
		return $list;
	}
	public function Xem_chi_tiet($id){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "SELECT * FROM bill_detail
			INNER JOIN bills ON bill_detail.id_bill = bills.id
			INNER JOIN customer ON bills.id_customer = customer.id
			INNER JOIN products ON bill_detail.id_product = products.id
			WHERE bill_detail.id_bd = " .$id;
		$req = $db->query($sql);
		$totalrow = $req->rowCount();
		$list = array($totalrow);
		$i = 0;
		foreach ($req->fetchAll() as $item) {
			$list[$i] = new Don(
				$item['id_bd'], 
				$item['c_name'], 
				$item['product_name'],
				$item['unit_price'], 
				$item['promotion_price'], 
				$item['image'], 
				$item['quantity'], 
				$item['status'], 
				$item['dh_created_at']
			);
			$i++;
		}
		return $list;
	}
	public function Cap_nhat($id){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "UPDATE `bill_detail` SET `status`= 1,`updated_at`= CURRENT_TIMESTAMP WHERE id_bd =" .$id;
		$pre = $db->prepare($sql);
		$pre->execute();
	}
	public function So_don_hang(){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$req = $db->query("SELECT * FROM bill_detail");
		$totalrow = $req->rowCount();
		return $totalrow;
	}
}
class Don
{
	public $id; 
	public $name;
	public $p_name;
	public $unit_price;
	public $promotion_price;
	public $anh_sp;
	public $quantity;
	public $status;
	public $time;
	public function __construct($id,$name,$p_name,$unit_price,$promotion_price,$anh_sp,$quantity,$status,$time)
	{
		$this->ma=$id;
		$this->ten=$name;
		$this->tensp=$p_name;
		$this->gia=$unit_price;
		$this->km=$promotion_price;
		$this->anh=$anh_sp;
		$this->soluong=$quantity;
		$this->tt=$status;
		$this->tg=$time;
	}
}
?>
<!-- $sql = "SELECT * FROM bill_detail
		INNER JOIN bills ON bills.id = bill_detail.id_bill
		INNER JOIN customer ON bills.id_customer = customer.id
		INNER JOIN products ON bill_detail.id_product = products.id";
	-->
 <!-- UPDATE `bill_detail` SET `status` = b'1' WHERE `bill_detail`.`id` = " .$id -->