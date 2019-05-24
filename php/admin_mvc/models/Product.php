<?php
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