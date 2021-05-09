<?php
class Product
{
  private $category, $id, $code, $name, $price;
  const ADMIN_ROLE = 1;
  public function __construct($category, $code, $name, $price)
  {
    $this->category = $category;
    $this->code = $code;
    $this->name = $name;
    $this->price = $price;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    return $this->name = $name;
  }
  public function checkClassExist()
  {
    if(class_exists('product')) {
      return  'TRUE';
    } else {
      return  'FALSE';
    }
  }
}
$demo = new Product('TEch', '32984sdf', 'alo', 9999);

// echo $demo->getName();
// echo $demo->setName('TEST1') . '<br>';
// echo Product::ADMIN_ROLE;
echo '<pre>';
echo 'Check class product í exist';
var_dump($demo->checkClassExist());