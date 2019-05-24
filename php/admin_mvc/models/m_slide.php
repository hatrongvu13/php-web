<?php 

class Slide
{
	public function Hien_thi_slide()
	{
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$req = $db->query("SELECT * FROM slide");
		$totalrow = $req->rowCount();

		$list = array($totalrow);
		$i = 0;
		foreach ($req->fetchAll() as $item) {
			$list[$i] = new anh($item['id'], $item['image']);
			$i++;
		}
		return $list;
	}
	public function Them_slide($image){
		if($image !== ""){
			$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
			$db->query('set names "utf8"');
			$sql = "INSERT INTO `slide` (`id`, `link`, `image`) VALUES (NULL, '', '".$image."')";
			$pre = $db->prepare($sql);
			$pre->execute();
		}
		// header("Location: http://localhost/admin_mvc/index.php?function=slide");
	}
	public function Xoa_slide($id){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "DELETE FROM `slide` WHERE id =" .$id;
		$pre = $db->prepare($sql);
		// var_dump($sql);
		$pre->execute();
	}
}
class anh {
	public $id;
	public $image;

	public function __construct($id, $image) {
		$this->ma = $id;
		$this->anh = $image;
	}
}
?>