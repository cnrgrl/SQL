
<?php


    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            

            case 'product':
                include('pages/product.php');
                break;

            case 'warehouse':
                include('pages/warehouse.php');
                break;

           case 'manufacturer':
                include('pages/manufacturer.php');
                break;

            case 'editproduct':
                include('pages/edit_product.php');
                break;

            case 'operation':
                include('operation.php');
                break;

        }
        }
    else
        {
            include("pages/home.php");
        }









