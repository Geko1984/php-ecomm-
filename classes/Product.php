<?php

class ProductManager extends DbManager {

  public function __construct(){
    parent::__construct();
    $this->columns = array('id', 'name', 'descrizione', 'price', 'category_id');
    $this->tableName = 'product';
  }
}