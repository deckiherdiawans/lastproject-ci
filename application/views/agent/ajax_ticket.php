<?php
    $name = $_GET['name'];
    $sql = "SELECT * FROM `contacts` WHERE `name` = '$name'";
    $contact = $this->db->query($sql)->row_array();
    echo json_encode($contact);
?>