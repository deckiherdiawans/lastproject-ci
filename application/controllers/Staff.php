<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Staff extends CI_Controller {
        public function __construct() {
            parent::__construct();
            is_logged_in();
            $this->load->model('Agent_model');
            $this->load->library('form_validation');
        }

        public function index() {
            $data['tickets'] = $this->Agent_model->getAllTicketsStaff();
            if ($this->input->post('searchticket')) {
                $data['tickets'] = $this->Agent_model->searchTicketsStaff();
            } elseif ($this->input->post('from')) {
                $data['tickets'] = $this->Agent_model->ticketsByPeriodStaff();
            } elseif ($this->input->post('company_brand')) {
                $data['tickets'] = $this->Agent_model->ticketsByCompanyStaff();
            } elseif ($this->input->post('type')) {
                $data['tickets'] = $this->Agent_model->ticketsByTypeStaff();
            } elseif ($this->input->post('status')) {
                $data['tickets'] = $this->Agent_model->ticketsByStatusStaff();
            }
            $data['company'] = $this->Agent_model->getAllCompanies();
            $this->load->view('templates/staff_header');
            $this->load->view('staff/tickets', $data);
            $this->load->view('templates/staff_footer');
        }

        public function ticket_details($id) {
            $data['ticket'] = $this->Agent_model->getTicketById($id);
            $this->load->view('templates/staff_header', $data);
            $this->load->view('staff/ticket_details', $data);
            $this->load->view('templates/staff_footer');
        }
        
        public function ticket_form() {
            $data['contact'] = $this->Agent_model->getAllActiveContacts();
            $data['subject'] = $this->Agent_model->getAllSubjects();
            $this->form_validation->set_rules('contact_name', 'contact_name', 'callback_contactname_check');
            $this->form_validation->set_rules('type', 'type', 'callback_type_check');
            $this->form_validation->set_rules('module', 'module', 'callback_module_check');
            $this->form_validation->set_rules('priority', 'priority', 'required|trim');
            $this->form_validation->set_rules('status', 'status', 'required|trim');
            $this->form_validation->set_rules('subject', 'subject', 'required|trim');
            $this->form_validation->set_rules('description', 'description', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/staff_header');
                $this->load->view('staff/ticket_form', $data);
                $this->load->view('templates/staff_footer');
            } else {
                $this->Agent_model->addSubject();
                $this->Agent_model->createNewTicketStaff();
                $this->session->set_flashdata('flash', 'The data saved successfully!');
                redirect('staff/');
            }
        }

        public function contactname_check($str) {
            if ($str == '---') {
                $this->form_validation->set_message('contactname_check', 'The contact_name field is required.');
                return false;
            } else {
                return true;
            }
        }

        public function type_check($str) {
            if ($str == '---') {
                $this->form_validation->set_message('type_check', 'The type field is required.');
                return false;
            } else {
                return true;
            }
        }
        
        public function module_check($str) {
            if ($str == '---') {
                $this->form_validation->set_message('module_check', 'The module field is required.');
                return false;
            } else {
                return true;
            }
        }

        public function ajax_ticket() {
            $this->load->view('agent/ajax_ticket');
        }

        public function ticket_update_form($id) {
            $data['ticket'] = $this->Agent_model->getTicketById($id);
            $data['contact'] = $this->Agent_model->getAllActiveContacts();
            $data['type'] = ['On The Spot', 'Remote', 'Visit'];
            $data['module'] = ['Distribution', 'Expo', 'Online', 'Production', 'Shop', 'Wholesale'];
            $data['priority'] = ['Low', 'Medium', 'High', 'Urgent'];
            $data['status'] = ['Open', 'In Progress', 'Pending', 'Resolved'];
            $data['subject'] = $this->Agent_model->getAllSubjects();
            $this->load->view('templates/staff_header');
            $this->load->view('staff/ticket_update_form', $data);
            $this->load->view('templates/staff_footer');
        }

        public function update_ticket() {
            $this->Agent_model->addSubject();
            $this->Agent_model->updateTicketStaff();
            $this->session->set_flashdata('flash', 'The data updated successfully!');
            redirect('staff/ticket_details/' . $this->input->post('id') . '/');
        }

        public function print_ticket($id) {
            $data['ticket'] = $this->Agent_model->getTicketById($id);
            $this->load->view('staff/print_ticket', $data);
        }

        public function delete_ticket($id) {
            $this->Agent_model->deleteTicket($id);
            $this->session->set_flashdata('flash', 'The data deleted successfully!');
            redirect('staff/');
        }

        public function profile() {
            $this->load->view('templates/staff_header');
            $this->load->view('staff/profile');
            $this->load->view('templates/staff_footer');
        }

        public function update_profile() {
            $this->load->view('templates/staff_header');
            $this->load->view('staff/update_profile');
            $this->load->view('templates/staff_footer');
        }
        
        public function updateprofile() {
            $this->Agent_model->updateAgentProfile();
            $this->session->unset_userdata('name');
            $this->session->unset_userdata('address');
            $this->session->unset_userdata('city');
            $this->session->unset_userdata('phone');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('image');
            $this->session->unset_userdata('role_id');
            $id = $this->session->userdata('id');
            $agent = $this->Agent_model->getAgentById($id);
            $data = [
                'name' => $agent['name'],
                'address' => $agent['address'],
                'city' => $agent['city'],
                'phone' => $agent['phone'],
                'email' => $agent['email'],
                'username' => $agent['username'],
                'image' => $agent['image'],
                'role_id' => $agent['role_id']
            ];
            $this->session->set_userdata($data);
            $this->session->set_flashdata('flash', 'Profile updated successfully!');
            redirect('staff/profile/');
        }
        
        public function change_profile_password() {
            $this->load->view('templates/staff_header');
            $this->load->view('staff/change_profile_password');
            $this->load->view('templates/staff_footer');
        }
        
        public function changeProfilePassword() {
            $this->Agent_model->changeAgentProfilePassword();
            $this->session->set_flashdata('flash', 'Password changed successfully!');
            redirect('staff/profile/');
        }
    }
?>