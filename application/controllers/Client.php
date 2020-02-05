<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Client extends CI_Controller {
        public function __construct() {
            parent::__construct();
            is_logged_in();
            $this->load->model('Agent_model');
            $this->load->library('form_validation');
        }

        public function index() {
            if ($this->session->userdata('role_id') < 3) {
                $data['tickets'] = $this->Agent_model->getAllTickets();
                if ($this->input->post('from')) {
                    $data['tickets'] = $this->Agent_model->ticketsByPeriod();
                } elseif ($this->input->post('type')) {
                    $data['tickets'] = $this->Agent_model->ticketsByType();
                } elseif ($this->input->post('agent_name')) {
                    $data['tickets'] = $this->Agent_model->ticketsByAssignee();
                } elseif ($this->input->post('status')) {
                    $data['tickets'] = $this->Agent_model->ticketsByStatus();
                }
                $this->load->view('templates/client_header');
                $this->load->view('client/tickets', $data);
                $this->load->view('templates/client_footer');
            } else {
                $data['tickets'] = $this->Agent_model->getAllTicketsForClient();
                if ($this->input->post('from')) {
                    $data['tickets'] = $this->Agent_model->ticketsByPeriodClient();
                } elseif ($this->input->post('type')) {
                    $data['tickets'] = $this->Agent_model->ticketsByTypeClient();
                } elseif ($this->input->post('agent_name')) {
                    $data['tickets'] = $this->Agent_model->ticketsByAssigneeClient();
                } elseif ($this->input->post('status')) {
                    $data['tickets'] = $this->Agent_model->ticketsByStatusClient();
                }
                $data['agent'] = $this->Agent_model->getAllAgents();
                $this->load->view('templates/client_header');
                $this->load->view('client/tickets', $data);
                $this->load->view('templates/client_footer');
            }
        }

        public function ticket_details($id) {
            $data['ticket'] = $this->Agent_model->getTicketById($id);
            $this->load->view('templates/client_header', $data);
            $this->load->view('client/ticket_details', $data);
            $this->load->view('templates/client_footer');
        }
        
        public function ticket_form() {
            $data['subject'] = $this->Agent_model->getAllSubjects();
            $this->form_validation->set_rules('type', 'type', 'callback_type_check');
            $this->form_validation->set_rules('module', 'module', 'callback_module_check');
            $this->form_validation->set_rules('subject', 'subject', 'required|trim');
            $this->form_validation->set_rules('description', 'description', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/client_header');
                $this->load->view('client/ticket_form', $data);
                $this->load->view('templates/client_footer');
            } else {
                $this->Agent_model->addSubject();
                $this->Agent_model->createNewTicket();
                $this->session->set_flashdata('flash', 'The data saved successfully!');
                redirect('client/');
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

        public function ticket_update_form($id) {
            $data['ticket'] = $this->Agent_model->getTicketById($id);
            $data['type'] = ['On The Spot', 'Remote', 'Visit'];
            $data['module'] = ['Distribution', 'Expo', 'Online', 'Production', 'Shop', 'Wholesale'];
            $data['subject'] = $this->Agent_model->getAllSubjects();
            $this->load->view('templates/client_header');
            $this->load->view('client/ticket_update_form', $data);
            $this->load->view('templates/client_footer');
        }

        public function update_ticket() {
            $this->Agent_model->addSubject();
            $this->Agent_model->updateTicket();
            $this->session->set_flashdata('flash', 'The data updated successfully!');
            redirect('client/ticket_details/' . $this->input->post('id') . '/');
        }

        public function print_ticket($id) {
            $data['ticket'] = $this->Agent_model->getTicketById($id);
            $this->load->view('client/print_ticket', $data);
        }

        public function profile() {
            $this->load->view('templates/client_header');
            $this->load->view('client/profile');
            $this->load->view('templates/client_footer');
        }

        public function update_profile() {
            $this->load->view('templates/client_header');
            $this->load->view('client/update_profile');
            $this->load->view('templates/client_footer');
        }
        
        public function updateprofile() {
            $this->Agent_model->updateContactProfile();
            $this->session->unset_userdata('name');
            $this->session->unset_userdata('company_brand');
            $this->session->unset_userdata('branch_address');
            $this->session->unset_userdata('branch_city');
            $this->session->unset_userdata('phone');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('note');
            $this->session->unset_userdata('image');
            $this->session->unset_userdata('role_id');
            $id = $this->session->userdata('id');
            $contact = $this->Agent_model->getContactById($id);
            $data = [
                'name' => $contact['name'],
                'company_brand' => $contact['company_brand'],
                'branch_address' => $contact['branch_address'],
                'branch_city' => $contact['branch_city'],
                'phone' => $contact['phone'],
                'email' => $contact['email'],
                'username' => $contact['username'],
                'note' => $contact['note'],
                'image' => $contact['image'],
                'role_id' => $contact['role_id']
            ];
            $this->session->set_userdata($data);
            $this->session->set_flashdata('flash', 'Profile updated successfully!');
            redirect('client/profile/');
        }
        
        public function change_profile_password() {
            $this->load->view('templates/client_header');
            $this->load->view('client/change_profile_password');
            $this->load->view('templates/client_footer');
        }
        
        public function changeProfilePassword() {
            $this->Agent_model->changeContactProfilePassword();
            $this->session->set_flashdata('flash', 'Password changed successfully!');
            redirect('client/profile/');
        }
    }
?>