<?php
    $subject = $_GET['subject'];
    $this->db->where('subject', $subject);
    $similar = $this->db->get('subjects')->row_array();
    if ($similar == 0) {   
        $data = ['subject' => $this->input->post('subject')];
        $this->db->insert('subjects', $data);
    }
?>