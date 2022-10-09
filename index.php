<?php
// thay bằng require nhiều thì require autoload.php';'
const BASE_URL = 'http://localhost/php/Newtest/new-mvc/';
    require_once './vendor/autoload.php';
    require_once './configs/router.php';
    // require_once 'App/Controllers/Controller.php';
    // require_once 'App/Controllers/ProductController.php';
    // require_once 'App/Models/BaseModel.php';
    // require_once 'App/Models//Product.php';

    // use App\Controllers\ProductController;
    // $pc = new ProductController;
    // $pc->getProducts();
// $data=[
//     ['id'=>1,'name'=>'Hoàng','address'=>'Ha Noi'], 
//     ['id'=>2,'name'=>'Hoàng2','address'=>'Ha Noi 2'], 
//     ['id'=>3,'name'=>'Hoàng3','address'=>'Ha Noi 3']
// ];
//  foreach($data as $a){
//     echo $a['name'];
//  }
?>