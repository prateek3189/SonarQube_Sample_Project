<?php
    class DBManager {
        function connection() {
            // Create connection
            $conn = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);

            // Check connection
            if(!$conn) {
                die('Could not connect: ' . mysql_error());
            }

            // Select DB
            mysql_select_db(DB_NAME);

            return $conn;
        }

        // Select single record
        function select($select, $table, $where) {
            $conn = $this->connection();

            $query = "SELECT ".$select." FROM ". $table;
            if($where)
                $query .= " WHERE ".$where;

            $result = mysql_query($query, $conn);

            if(!$result) {
                die('Error: ' . mysql_error());
            }
            if(mysql_num_rows($result)) {
                $data = mysql_fetch_object($result);
            } else {
                return array();
            }

            $this->close_connection($conn);

            return $data;
        }

        // Insert one row
        function insert($insert, $data) {
            $conn = $this->connection();

            if(count($data)){
                $coloumn = '';
                $values  = '';
                foreach($data as $key=>$value) {
                    $coloumn .= $key.",";
                    $values  .= "'" . $value."',";
                }
                $query =    "INSERT INTO `".$insert . "` (" . rtrim($coloumn, ",") . ") VALUES (" . rtrim($values, ",") . ")";
            }

            $result = mysql_query($query, $conn);

            if(!$result) {
                die('Error: ' . mysql_error());
            }

            $data = mysql_fetch_object($result);

            $this->close_connection($conn);

            return $data;
        }

        // Update
        function update($update, $set, $where) {
            $conn = $this->connection();
            if(count($set)){
                $set_query = '';
                foreach($set as $key=>$value) {
                    $set_query .= $key ."='".$value."',";
                }
                $query =    "UPDATE `".$update . "` SET ". rtrim($set_query, ",");
            }

            $result = mysql_query($query, $conn);

            if(!$result) {
                die('Error: ' . mysql_error());
            }

            $this->close_connection($conn);

            return $data;
        }

        function close_connection($conn) {
            mysql_close($conn);
        }
    }

    $db = new DBManager();
?>
