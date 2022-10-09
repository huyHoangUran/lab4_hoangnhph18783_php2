<?php
    namespace App\Controllers;
    use eftec\bladeone\BladeOne;

    class BaseController{
        // Hàm phục vụ hiển thị theo kiểu mới sử dụng bladeOne thay vì dùng include
        // render(ten file,du  lieu)
        //tên file là tiền tố của file view: post.blade.php->post
        // dữ liệu sẽ có dạng mảng 

        public function render($viewName,$data){
            // tạo 1 thư mục cache để lưu cache
            // tiến hành cấp quyển cho thư mục cache chmod -R 777 cache/
            $views = './App/Views';//new-mvc/App/Views
            $cache = './cache';//new-mvc/cache ->nơi thư viện lưu cache->cấp quyền ghi file
            $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
            echo $blade->run("$viewName",$data); // it calls new-mvc/App/views/$viewName.blade.php
        }
    }
?>