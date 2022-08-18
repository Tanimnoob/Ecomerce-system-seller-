<?php
    require_once 'sqlConnect.php';
    function getAllUser() {
        $query = 'select * from user;';
        $result = runQuery($query);
        $data = array();
        if ($result) {
            while ($row = mysqli_fetch_assoc($result))
                $data[$row['id']] = $row;
            return $data ?? array();
        }
        return array();
    }

    function getUser($name) {
        $allUser = getAllUser();
        if (count($allUser) > 0) {
            foreach ($allUser as $user => $data) {
                if ($data['name'] === $name)
                    return $data;
            }
        }
        return false;
    }

    function getUserByID($id) {
        $allUser = getAllUser();
        if (count($allUser) > 0) {
            foreach ($allUser as $user => $data) {
                if ($data['id'] === $id)
                    return $data;
            }
        }
        return false;
    }

    function addUser($user) {
        $query = "INSERT INTO user VALUES('',
                    '{$user['name']}',
                    '{$user['BOD']}',
                    '{$user['gender']}',
                    '{$user['company']}',
                    '{$user['email']}',
                    '{$user['password']}',
                    '{$user['phone_number']}',
                    '{$user['address']}',
                    '{$user['file_name']}'
                );";
        $result = runQuery($query);
        if ($result)
                return true;
        return false;
    }

    function deleteUser($id) {
        $query = "delete from user where id={$id};";
        $result = runQuery($query);
        if ($result)
                return true;
        return false;
    }

?>