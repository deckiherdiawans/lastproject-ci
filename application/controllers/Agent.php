<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Agent extends CI_Controller {
        public function __construct() {
            parent::__construct();
            is_logged_in();
            $this->load->model('Agent_model');
            $this->load->library('form_validation');
        }
        
        public function index() {
            $data['title'] = 'Tickets';
            $data['tickets'] = $this->Agent_model->getAllTickets();
            if ($this->input->post('searchticket')) {
                $data['tickets'] = $this->Agent_model->searchTickets();
            }
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar');
            $this->load->view('agent/tickets', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function profile() {
            $data['title'] = '';
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar');
            $this->load->view('agent/profile');
            $this->load->view('templates/agent_footer');
        }

        public function update_profile() {
            $data['title'] = '';
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar');
            $this->load->view('agent/update_profile');
            $this->load->view('templates/agent_footer');
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
            redirect('agent/profile/');
        }

        public function change_profile_password() {
            $data['title'] = '';
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar');
            $this->load->view('agent/change_profile_password');
            $this->load->view('templates/agent_footer');
        }
        
        public function changeProfilePassword() {
            $this->Agent_model->changeAgentProfilePassword();
            $this->session->set_flashdata('flash', 'Password changed successfully!');
            redirect('agent/profile/');
        }

        public function lists_menu() {
            $data['title'] = 'Lists';
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar');
            $this->load->view('agent/lists_menu');
            $this->load->view('templates/agent_footer');
        }
        
        public function contacts() {
            $data['title'] = 'Lists';
            $data['contacts'] = $this->Agent_model->getAllContacts();
            if ($this->input->post('searchcontact')) {
                $data['contacts'] = $this->Agent_model->searchContact();
            }
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar');
            $this->load->view('agent/contacts', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function contact_details($id) {
            $data['title'] = 'Lists';
            $data['contact'] = $this->Agent_model->getContactById($id);
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/contact_details', $data);
            $this->load->view('templates/agent_footer');
        }

        public function contact_form() {
            $data['title'] = 'Lists';
            $this->form_validation->set_rules('name', 'name', 'required|trim');
            $this->form_validation->set_rules('company_brand', 'company_brand', 'callback_company_check');
            $this->form_validation->set_rules('branch_address', 'branch_address', 'required|trim');
            $this->form_validation->set_rules('branch_city', 'branch_city', 'required|trim');
            $this->form_validation->set_rules('phone', 'phone', 'required|trim');
            $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
            $this->form_validation->set_rules('username', 'username', 'required|trim');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]');
            $this->form_validation->set_rules('note', 'note', 'required|trim');
            $this->form_validation->set_rules('image', 'image', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/agent_header');
                $this->load->view('templates/agent_sidebar', $data);
                $this->load->view('templates/agent_topbar');
                $this->load->view('agent/contact_form');
                $this->load->view('templates/agent_footer');
            } else {
                $this->Agent_model->addNewContact();
                $this->session->set_flashdata('flash', 'The data saved successfully!');
                redirect('agent/contacts/');
            }
        }

        public function company_check($str) {
            if ($str == '--Choose company--') {
                $this->form_validation->set_message('company_check', 'The company_brand field is required.');
                return false;
            } else {
                return true;
            }
        }

        public function ajax_contact() {
            $this->load->view('agent/ajax_contact');
        }
        
        public function contact_update_form($id) {
            $data['title'] = 'Lists';
            $data['contact'] = $this->Agent_model->getContactById($id);
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/contact_update_form', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function update_contact() {
            $this->Agent_model->updateContact();
            $this->session->set_flashdata('flash', 'The data updated successfully!');
            redirect('agent/contacts/');
        }

        public function change_contact_password($id) {
            $data['title'] = 'Lists';
            $data['contact'] = $this->Agent_model->getContactById($id);
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/change_contact_password', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function changeContactPassword() {
            $this->Agent_model->changeContactPasswordById();
            $this->session->set_flashdata('flash', 'Password changed successfully!');
            redirect('agent/contact_details/' . $this->input->post('id') . '/');
        }

        public function delete_contact($id) {
            $this->Agent_model->deleteContact($id);
            $this->session->set_flashdata('flash', 'The data deleted successfully!');
            redirect('agent/contacts/');
        }

        public function companies() {
            $data['title'] = 'Lists';
            $data['companies'] = $this->Agent_model->getAllCompanies();
            if ($this->input->post('searchcompany')) {
                $data['companies'] = $this->Agent_model->searchCompany();
            }
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar');
            $this->load->view('agent/companies', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function company_details($id) {
            $data['title'] = 'Lists';
            $data['company'] = $this->Agent_model->getCompanyById($id);
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/company_details', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function company_contacts($company_brand) {
            $data['title'] = 'Lists';
            $data['companycontacts'] = $this->Agent_model->getContactsByCompany($company_brand);
            if ($this->input->post('searchcompanycontact')) {
                $data['companycontacts'] = $this->Agent_model->searchContactByCompany($company_brand);
            }
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/company_contacts', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function company_form() {
            $data['title'] = 'Lists';
            $this->form_validation->set_rules('brand', 'brand', 'required|trim');
            $this->form_validation->set_rules('headquarter_address', 'headquarter_address', 'required|trim');
            $this->form_validation->set_rules('headquarter_city', 'headquarter_city', 'required|trim');
            $this->form_validation->set_rules('logo', 'logo', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/agent_header');
                $this->load->view('templates/agent_sidebar', $data);
                $this->load->view('templates/agent_topbar');
                $this->load->view('agent/company_form');
                $this->load->view('templates/agent_footer');
            } else {
                $this->Agent_model->addNewCompany();
                $this->session->set_flashdata('flash', 'The data saved successfully!');
                redirect('agent/companies/');
            }
        }
        
        public function company_update_form($id) {
            $data['title'] = 'Lists';
            $data['company'] = $this->Agent_model->getCompanyById($id);
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/company_update_form', $data);
            $this->load->view('templates/agent_footer');
        }

        public function update_company() {
            $this->Agent_model->updateCompany();
            $this->session->set_flashdata('flash', 'The data updated successfully!');
            redirect('agent/companies/');
        }

        public function delete_company($id) {
            $this->Agent_model->deleteCompany($id);
            $this->session->set_flashdata('flash', 'The data deleted successfully!');
            redirect('agent/companies/');
        }

        public function agents() {
            if ($this->session->userdata('role_id') > 1) {
                redirect('auth/blocked/');
            }
            $data['title'] = 'Lists';
            $data['agents'] = $this->Agent_model->getAllAgents();
            if ($this->input->post('searchagent')) {
                $data['agents'] = $this->Agent_model->searchAgent();
            }
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar');
            $this->load->view('agent/agents', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function agent_details($id) {
            if ($this->session->userdata('role_id') > 1) {
                redirect('auth/blocked/');
            }
            $data['title'] = 'Lists';
            $data['agent'] = $this->Agent_model->getAgentById($id);
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/agent_details', $data);
            $this->load->view('templates/agent_footer');
        }

        public function agent_form() {
            if ($this->session->userdata('role_id') > 1) {
                redirect('auth/blocked/');
            }
            $data['title'] = 'Lists';
            $this->form_validation->set_rules('name', 'name', 'required|trim');
            $this->form_validation->set_rules('address', 'address', 'required|trim');
            $this->form_validation->set_rules('city', 'city', 'required|trim');
            $this->form_validation->set_rules('phone', 'phone', 'required|trim');
            $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
            $this->form_validation->set_rules('username', 'username', 'required|trim');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]');
            $this->form_validation->set_rules('image', 'image', 'required|trim');
            $this->form_validation->set_rules('role_id', 'role_id', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/agent_header');
                $this->load->view('templates/agent_sidebar', $data);
                $this->load->view('templates/agent_topbar');
                $this->load->view('agent/agent_form');
                $this->load->view('templates/agent_footer');
            } else {
                $this->Agent_model->addNewAgent();
                $this->session->set_flashdata('flash', 'The data saved successfully!');
                redirect('agent/agents/');
            }
        }

        public function agent_update_form($id) {
            if ($this->session->userdata('role_id') > 1) {
                redirect('auth/blocked/');
            }
            $data['title'] = 'Lists';
            $data['agent'] = $this->Agent_model->getAgentById($id);
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/agent_update_form', $data);
            $this->load->view('templates/agent_footer');
        }

        public function update_agent() {
            $this->Agent_model->updateAgent();
            $this->session->set_flashdata('flash', 'The data updated successfully!');
            redirect('agent/agents/');
        }

        public function change_agent_password($id) {
            if ($this->session->userdata('role_id') > 1) {
                redirect('auth/blocked/');
            }
            $data['title'] = 'Lists';
            $data['agent'] = $this->Agent_model->getAgentById($id);
            $this->load->view('templates/agent_header');
            $this->load->view('templates/agent_sidebar', $data);
            $this->load->view('templates/agent_topbar', $data);
            $this->load->view('agent/change_agent_password', $data);
            $this->load->view('templates/agent_footer');
        }
        
        public function changeAgentPassword() {
            $this->Agent_model->changeAgentPasswordById();
            $this->session->set_flashdata('flash', 'Password changed successfully!');
            redirect('agent/agent_details/' . $this->input->post('id') . '/');
        }

        public function delete_agent($id) {
            $this->Agent_model->deleteAgent($id);
            $this->session->set_flashdata('flash', 'The data deleted successfully!');
            redirect('agent/agents/');
        }
    }
?>