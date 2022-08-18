<?php
    require_once 'sqlConnect.php';
    function getAllProducts() {
        $query = 'select * from product;';
        $result = runQuery($query);
        $data = array();
        if ($result) {
            while ($row = mysqli_fetch_assoc($result))
                $data[$row['id']] = $row;
            return $data ?? array();
        }
        return array();
    }

    function getProduct($id) {
        $allProducts = getAllProducts();
        if (count($allProducts) > 0) {
            foreach ($allProducts as $product => $data) {
                if ($data['id'] === $id)
                    return $data;
            }
        }
        return false;
    }

    function getUserProducts($user_id) {
        $allProducts = getAllProducts();
        $products = array();
        if (count($allProducts) > 0) {
            foreach ($allProducts as $product => $data) {
                if ($data['seller_id'] === $user_id)
                    $products[$data['id']] = $data;
            }
        }
        return $products;
    }

    function addProduct($product) {
        $query = "INSERT INTO product VALUES('',
                    '{$product['name']}',
                    '{$product['description']}',
                    {$product['price']},
                    '{$product['brand']}',
                    '{$product['catagory']}',
                    {$product['seller_id']}
                );";
        $result = runQuery($query);
        if ($result)
                return true;
        return false;
    }

    function updateProduct($product) {
        $query = "UPDATE product set 
                    name='{$product['name']}',
                    description='{$product['description']}',
                    price={$product['price']},
                    brand='{$product['brand']}',
                    catagory='{$product['catagory']}' 
                WHERE id='{$product['id']}';";
        $result = runQuery($query);
        if ($result)
                return true;
        return false;
    }

    function deleteProduct($id) {
        $query = "delete from product where id={$id};";
        $result = runQuery($query);
        if ($result)
                return true;
        return false;
    }
?>