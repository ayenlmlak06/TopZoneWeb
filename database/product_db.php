<?php

use function PHPSTORM_META\type;

require_once('db.php');
function get_products(){
    $sql = "select * from inf_product";
    $conn = get_connection();

    $result= $conn -> query($sql);
    if(!$result){
        return null;
    }

    $products = array();
    for ($i = 0; $i < $result->num_rows; $i++){
        $product = $result-> fetch_assoc();
        $products[$i] = $product;
    }
    return $products;
}

    function get_1product($nameprd){
        $sql = "select * from inf_product where name = '$nameprd'";
        $conn = get_connection();

        $result= $conn -> query($sql);
        if(!$result){
            return null;
        }

        $products = array();
        for ($i = 0; $i < $result->num_rows; $i++){
            $product = $result-> fetch_assoc();
            $products[$i] = $product;
        }
        return $products;
    }

    require_once('db.php');
    function get_products_ip(){
        $sql = "select * from inf_product where type = 'IP' ";
        $conn = get_connection();

        $result= $conn -> query($sql);
        if(!$result){
            return null;
        }

        $products = array();
        for ($i = 0; $i < $result->num_rows; $i++){
            $product = $result-> fetch_assoc();
            $products[$i] = $product;
        }
        return $products;
    }

    function get_products_mac(){
        $sql = "select * from inf_product where type = 'Mac' ";
        $conn = get_connection();

        $result= $conn -> query($sql);
        if(!$result){
            return null;
        }

        $products = array();
        for ($i = 0; $i < $result->num_rows; $i++){
            $product = $result-> fetch_assoc();
            $products[$i] = $product;
        }
        return $products;
    }

    function get_products_ipad(){
        $sql = "select * from inf_product where type = 'Ipad' ";
        $conn = get_connection();

        $result= $conn -> query($sql);
        if(!$result){
            return null;
        }

        $products = array();
        for ($i = 0; $i < $result->num_rows; $i++){
            $product = $result-> fetch_assoc();
            $products[$i] = $product;
        }
        return $products;
    }

    function get_products_watch(){
        $sql = "select * from inf_product where type = 'Watch' ";
        $conn = get_connection();

        $result= $conn -> query($sql);
        if(!$result){
            return null;
        }

        $products = array();
        for ($i = 0; $i < $result->num_rows; $i++){
            $product = $result-> fetch_assoc();
            $products[$i] = $product;
        }
        return $products;
    }

    function get_products_airpod(){
        $sql = "select * from inf_product where type = 'Airpod' ";
        $conn = get_connection();

        $result= $conn -> query($sql);
        if(!$result){
            return null;
        }

        $products = array();
        for ($i = 0; $i < $result->num_rows; $i++){
            $product = $result-> fetch_assoc();
            $products[$i] = $product;
        }
        return $products;
    }

    function get_products_accessory(){
        $sql = "select * from inf_product where type = 'Acry' ";
        $conn = get_connection();

        $result= $conn -> query($sql);
        if(!$result){
            return null;
        }

        $products = array();
        for ($i = 0; $i < $result->num_rows; $i++){
            $product = $result-> fetch_assoc();
            $products[$i] = $product;
        }
        return $products;
    }

    function get_Image($nameprd){
        $sql = "select * from img_big4detail where name = '$nameprd'";
        $conn = get_connection();
    
        $result= $conn -> query($sql);
        if(!$result){
            return null;
        }
    
        $products = array();
        for ($i = 0; $i < $result->num_rows; $i++){
            $product = $result-> fetch_assoc();
            $products[$i] = $product;
        }
        return $products;
    }
?>