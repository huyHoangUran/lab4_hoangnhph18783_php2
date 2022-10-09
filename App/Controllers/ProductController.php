<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    // use App\Models\Product;



    class ProductController extends BaseController{
        public function index(){
            // $product = new Product; 
        
        
            // return $product->table;
            //hiển thị danh sách sản phẩm bằng reder() của bladeOne
            $viewName='product.index';
            $data=[
                
            ];
            return $this->render($viewName,$data);

            
            
        }
        public function getProducts(){
            $viewName='product.list';
            $data = [
                'name' => 'Iphone 14',
                'price' => 12000000,
                'array' => [
                   ['id'=>1,'name'=>'Hoàng','address'=>'Ha Noi'], 
                ['id'=>2,'name'=>'Hoàng2','address'=>'Ha Noi 2'], 
                ['id'=>3,'name'=>'Hoàng3','address'=>'Ha Noi 3']
                ]
            ];
            // $data=[
                
            // ];
            return $this->render($viewName,$data);
        }
        public function addProduct(){
            $viewName = 'product.create';
            $data=[];
            return $this->render($viewName,$data);
        }
        public function detailProduct($id){
            $viewName='product.detail';
            
            $data = [
                'id'=>$id,
                'name' => 'Iphone 14',
                'price' => 12000000,
                'array' => [
                   ['id'=>1,'name'=>'Hoàng','address'=>'Ha Noi'], 
                ['id'=>2,'name'=>'Hoàng2','address'=>'Ha Noi 2'], 
                ['id'=>3,'name'=>'Hoàng3','address'=>'Ha Noi 3']
                ]
            ];
            // $data=[
                
            // ];
            return $this->render($viewName,$data);
        }
    }
?>