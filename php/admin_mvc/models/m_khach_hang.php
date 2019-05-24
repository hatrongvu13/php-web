<?php
include_once("database.php");
class M_khach_hang extends database
{
	public function khach(){
		$db = new PDO('mysql:host=localhost; dbname=db_banhang','root','');
		$db->query('set names "utf8"');
		$sql = "SELECT * FROM customer";
		$req = $db->query($sql);
		$totalrow = $req->rowCount();
		$list = array($totalrow);
		$i = 0;
		foreach ($req->fetchAll() as $item) {
			$list[$i] = new Khach($item['id'], $item['c_name'], $item['email'] , $item['created_at']);
			$i++;
		}
		return $list;
	}

	public function So_tai_khoan(){
		$db = new PDO('mysql:host=localhost; dbname=db_banhang','root','');
		$db->query('set names "utf8"');
		$sql = "DELETE FROM `customer` WHERE id =" .$id;
		$pre = $db->prepare($sql);
		$pre->execute();
	}

	public function Xoa_tai_khoan($id){
		$db = new PDO('mysql:host=localhost; dbname=db_banhang','root','');
		$db->query('set names "utf8"');
		$sql = "DELETE FROM `customer` WHERE id =" .$id;
		$pre = $db->prepare($sql);
		$pre->execute();
	}
}

class Khach
{
	public $id; 
	public $name;
	public $email;
	public $time;
	public function __construct($id,$name,$email,$time)
	{
		$this->ma=$id;
		$this->ten=$name;
		$this->em=$email;
		$this->tg=$time;
	}
}
?>