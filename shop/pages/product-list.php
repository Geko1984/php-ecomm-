<?php
echo 'Lista prodotti';
$productMrg=new ProductManager();
$products=$productMrg->getAll();
var_dump($products);