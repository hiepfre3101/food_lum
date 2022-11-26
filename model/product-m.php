<?php
function getAllProduct()
{
  $query = "select * from products";
  $products = getAll($query);
  return $products;
}

function getOneProduct()
{
  $productId = $_GET["id"];
  $query2 = "select * from products where productId=$productId";
  $product = getOnce($query2);
  return $product;
}

?>