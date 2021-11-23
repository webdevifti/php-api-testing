<?php

function getColor(){
    global $con;
    $data = array();
    $sql = "SELECT * FROM `colors` ORDER BY `id` DESC";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
    }

    return $data;
}
function getTypes(){
    global $con;
    $data = array();
    $sql = "SELECT * FROM `ptypes` ORDER BY `id` DESC";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
    }

    return $data;
}
function getAvailability(){
    global $con;
    $data = array();
    $sql = "SELECT * FROM `availability` ORDER BY `id` DESC";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
    }

    return $data;
}
function insertProductData($request){
    global $con;
    $title = $request['title'];
    $image_url = $request['image_url'];
    $price = $request['price'];
    $availability = $request['availability'];
    $types = $request['types'];
    $color = $request['color'];
    $features = $request['features'];
    $interface = $request['interface'];

    $sql = "INSERT INTO `products` (`title`,`image`,`price`,`availability`,`types`,`interface`,`color`,`special_features`) VALUES('$title','$image_url', '$price', '$availability','$types','$interface', '$color', '$features')";

    $query = mysqli_query($con, $sql);

    if($query){
        header('products.php');
    }else{
        header('add-product.php');
    }

    // echo "<pre>";
    // print_r($request);
    // echo "</pre>";
}
function getProducts(){
    global $con;
    $data = array();
    $sql = "SELECT * FROM `products` ORDER BY `id` DESC";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
    }

    return $data;
}
function getInterfaces(){
    global $con;
    $data = array();
    $sql = "SELECT * FROM `interface` ORDER BY `id` DESC";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
    }

    return $data;
}

function getSpecialFeatures(){
    global $con;
    $data = array();
    $sql = "SELECT * FROM `features` ORDER BY `id` DESC";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
    }

    return $data;
}

