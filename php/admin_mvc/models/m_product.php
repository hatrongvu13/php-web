<?php
include_once("database.php");
include('Product.php');

class M_product extends database
{
	public function Doc_san_pham($vt=-1,$limit=-1){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$req = $db->query("SELECT * FROM products ORDER BY created_at DESC limit $vt, $limit");
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

	public function Dem_so_san_pham_da_ban($id){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$req = $db->query("SELECT COUNT(*) FROM bill_detail WHERE id_product = ".$id);
		$totalrow = $req->rowCount();
		return $totalrow;
	}

	public function tongsosanpham(){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$req = $db->query("SELECT * FROM products");
		$totalrow = $req->rowCount();
		return $totalrow;
	}
	
	public function Doc_mot_san_pham($id){
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

	public function Them_san_pham($name,$type,$brand,$quantity,$price,$sale,$description,$image,$unit){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "INSERT INTO `products`(`id`, `product_name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `quantity`, `created_at`, `updated_at`) VALUES (NULL,'$name','$type','$description','$price','$sale','$image','$unit',$quantity,CURRENT_TIME(),CURRENT_TIME())";
		// echo $sql;
		$pre = $db->prepare($sql);
		$pre->execute();
	}
	public function Xoa_san_pham($id){
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "DELETE FROM products WHERE id=".$id;
		$pre = $db->prepare($sql);
		$pre->execute();
	}
	public function Tim_kiem($search){
		if($search !== "" ){
			$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
			$db->query('set names "utf8"');
			$req = $db->query("select * from products where product_name like '%$search%'");
			$totalrow = $req->rowCount();
			if($totalrow !== 0){
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
	}
	public function Sua_san_pham($id,$name,$type,$brand,$quantity,$price,$sale,$description,$image,$unit){
		
		$db = new PDO('mysql:host=localhost; dbname=webthuongmai','root','');
		$db->query('set names "utf8"');
		$sql = "UPDATE `products` SET `product_name`= '$name',`unit_price`='$price',`promotion_price`='$sale',`unit`='$unit',`quantity`='$quantity',`updated_at`=CURRENT_TIME() WHERE id = " .$id;
		$pre = $db->prepare($sql);
		$pre->execute();
	}
}
?>