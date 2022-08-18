<?php
    require_once 'sqlConnect.php';
    function getAllOrders() {
        $query = 'select * from orders;';
        $result = runQuery($query);
        $data = array();
        if ($result) {
            while ($row = mysqli_fetch_assoc($result))
                $data[$row['id']] = $row;
            return $data ?? array();
        }
        return array();
    }

    function getOrder($id) {
        $allOrders = getAllOrders();
        if (count($allOrders) > 0) {
            foreach ($allOrders as $order => $data) {
                if ($data['id'] === $id)
                    return $data;
            }
        }
        return false;
    }

    function addOrder($order) {
        $query = "INSERT INTO orders VALUES('',
                    '{$order['product_id']}',
                    '{$order['user_id']}',
                    {$order['quantity']},
                    '{$order['status']}'
                );";
        $result = runQuery($query);
        if ($result)
                return true;
        return false;
    }

    function deleteOrder($id) {
        $query = "delete from orders where id={$id};";
        $result = runQuery($query);
        if ($result)
                return true;
        return false;
    }
?>
