<?php
    $brand = $_GET['brand'];
    $sql = "SELECT * FROM `companies` WHERE `brand` = '$brand'";
    $company = $this->db->query($sql)->row_array();
    echo json_encode($company);
?>