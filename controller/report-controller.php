<?php
    include_once("../config/config.php");

    include_once(CONTROLLER_PATH."dbmanager.php");

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch($action) {
        case 'settings':
            $baseURL = isset($_POST['baseURL']) ? $_POST['baseURL'] : '';

            $select = "*";
            $table = "sq_settings";
            $where = "is_active = 1";
            $data = $db->select($select, $table, $where);

            if(count($data)) {
                // Update the data
                $update =   "sq_settings";
                $set    =   array("base_url"=>$baseURL);
                $where  =   "is_active = 1";
                $data = $db->update($update, $set, $where);
            } else {
                // Insert record
                $insert =   "sq_settings";
                $values =   array("base_url"=>$baseURL);
                $data = $db->insert($insert, $values);
            }
            $_SESSION['message'] = "Settings updated successfully.";
            @header('location:'.FOLDER_PATH_HTTP.'settings.php');
            die;

        break;
    }
?>
