<?php  


    function toHotel2 () {

        header('Content-Type: application/json');
        $server = 'localhost';
        $username = 'root';
        $password = 'root';
        $dbName = 'Hotel2';
        $conn = new mysqli($server, $username, $password, $dbName);

        if ($conn -> connect_errno) {
            echo $conn -> connect_errno;
            return;
        }

        $results = $conn -> query("
            SELECT name, lastname, address
            FROM `paganti`
        ");

        if ($results -> num_rows < 1) {
            echo "no result";
            return;
        }

        $res = [];

        while ($row = $results -> fetch_assoc()) {

            $res[] =  $row;

        }

        $conn -> close();

        echo json_encode($res);

    }

    