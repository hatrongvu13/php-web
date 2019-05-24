<?php
include_once("database.php");
class M_chu_de extends database
{
	public function Doc_chu_de()
	{
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$req = $db->query("SELECT * FROM type_products");
		$totalrow = $req->rowCount();
		$list = array($totalrow);
		$i = 0;
		foreach ($req->fetchAll() as $item) {
			$list[$i] = new ChuDe($item['id'], $item['name'], $item['created_at'],$item['image']);
			$i++;
		}
		return $list;
	}
	public function Them_loai(){
		$loai ;
		$mota ;
		$image ;
		if (isset($_POST['loaisp'])) {
			$loai = $_POST['loaisp'];
		}
		if (isset($_POST['mota'])) {
			$mota = $_POST['mota'];
		}
		if (isset($_FILES['anh'])) {
			if ($_FILES['anh']['error'] > 0)
			{
				echo 'File Upload Bị Lỗi';
			}else {
				$image = $_FILES['anh']['name'];
			}
		}
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "insert into type_products (name, description, image, created_at) values (:loai, :mota, :anh , CURRENT_TIMESTAMP)";
		$pre = $db->prepare($sql);

		$pre->bindParam(":loai", $loai);
		$pre->bindParam(":mota", $mota);
		$pre->bindParam(":anh", $image);
		$pre->execute();
		// header('Location: http://localhost/admin_mvc/index.php?function=loai');
	}
	public function Xoa_loai($id){
		// echo $id;
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "delete from type_products where id = " .$id;
		// print($sql);
		$pre = $db->prepare($sql);
		// $pre->bindParam(":id", $id);
		$pre->execute();
	}
	public function Sua_loai($id){
		if (isset($_POST['loaisp'])) {
			$loai = $_POST['loaisp'];
		}
		if (isset($_POST['mota'])) {
			$mota = $_POST['mota'];
		}
		if (isset($_FILES['anhmoi'])) {
			if ($_FILES['anhmoi']['error'] > 0)
			{
				echo 'File Upload Bị Lỗi';
			}else {
				$image = $_FILES['anhmoi']['name'];
			}
		}
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "update type_products set name =:loai, description=:mota, image=:anh, updated_at=CURRENT_TIMESTAMP where id=:id";
		$pre = $db->prepare($sql);

		$pre->bindParam(":loai", $loai);
		$pre->bindParam(":mota", $mota);
		$pre->bindParam(":anh", $image);
		$pre->bindParam(":id", $id);
		$pre->execute();
	}
}
class ChuDe {
	public $ma;
	public $ten;
	public $time;
	public $anh;

	public function __construct($id, $name, $time, $anh) {
		$this->ma = $id;
		$this->ten = $name;
		$this->tg = $time;
		$this->anh = $anh;
	}
}
?>