<?php

if (isset($_POST["name"]) && isset($_POST["phonenumber"]) ) { 

	// ��������� ������ ��� JSON ������
    $result = array(
    	'name' => $_POST["name"],
    	'phonenumber' => $_POST["phonenumber"]
    ); 

    // ��������� ������ � JSON
    echo json_encode($result); 
}

?>