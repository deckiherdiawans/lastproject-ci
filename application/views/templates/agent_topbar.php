<header class="dashboard-header">
    <section class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm bg-white fixed-top">
        <div class="navbar-nav ml-auto navbar-right-top">

            <?php $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>
            <?php if ($url === '/lastproject-ci/agent/') : ?>
                <h5 class="tickets-header">All Tickets</h5>
                <div class="nav-item">
                    <div class="top-search-bar">
                        <a href="<?= base_url('agent/ticket_form/'); ?>" class="button form-control" id="btn-ticket-custom">
                            Create New Ticket
                        </a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'ticket_details') : ?>
                <nav class="breadcrumb-custom detail-title">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/'); ?>" class="text-decor">All Tickets</a></li>
                            <li class="breadcrumb-item">Ticket Details</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/print_ticket/'); ?><?= $ticket['id']; ?>/" class="button btn-back-custom form-control" target="_blank">Print</a>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/ticket_update_form/'); ?><?= $ticket['id']; ?>/" class="button btn-update-custom form-control">Update</a>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/delete_ticket/'); ?><?= $ticket['id']; ?>/" class="button btn-delete-custom form-control" onclick="return confirm('Are you sure?');">Delete</a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'ticket_form') : ?>
                <h5 class="header-custom">New Support Ticket</h5>
            <?php elseif ($this->uri->segment(2) === 'ticket_update_form') : ?>
                <h5 class="header-custom">Update Ticket</h5>
            <?php elseif ($this->uri->segment(2) === 'profile') : ?>
                <h5 class="header-custom">Your Profile</h5>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/'); ?>" class="button btn-back-custom form-control">Back</a>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/update_profile/'); ?>" class="button btn-update-custom form-control">Update</a>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/change_profile_password/'); ?>" class="button btn-change-custom form-control">Change Password</a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'update_profile') : ?>
                <h5 class="header-custom">Update Profile</h5>
            <?php elseif ($this->uri->segment(2) === 'change_profile_password') : ?>
                <h5 class="header-custom">Change Password</h5>
            <?php elseif ($this->uri->segment(2) === 'lists_menu') : ?>
                <h5 class="header-custom">Lists Menu</h5>
            <?php elseif ($this->uri->segment(2) === 'contacts') : ?>
                <nav class="breadcrumb-custom">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/lists_menu/'); ?>" class="text-decor">Lists Menu</a></li>
                            <li class="breadcrumb-item">All Contacts</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                        <a href="<?= base_url('agent/contact_form/'); ?>" class="button btn-add-custom form-control">
                            Add New Contact
                        </a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'contact_details') : ?>
                <nav class="breadcrumb-custom detail-title">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/contacts/'); ?>" class="text-decor">All Contacts</a></li>
                            <li class="breadcrumb-item">Contact Details</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/contact_update_form/'); ?><?= $contact['id']; ?>/" class="button btn-update-custom form-control">Update</a>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/change_contact_password/'); ?><?= $contact['id']; ?>/" class="button btn-change-custom form-control">Change Password</a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'contact_form') : ?>
                <h5 class="header-custom">New Contact</h5>
            <?php elseif ($this->uri->segment(2) === 'contact_update_form') : ?>
                <h5 class="header-custom">Update Contact</h5>
            <?php elseif ($this->uri->segment(2) === 'change_contact_password') : ?>
                <h5 class="header-custom">Change Contact Password</h5>
            <?php elseif ($this->uri->segment(2) === 'companies') : ?>
                <nav class="breadcrumb-custom">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/lists_menu/'); ?>" class="text-decor">Lists Menu</a></li>
                            <li class="breadcrumb-item">All Companies</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                        <a href="<?= base_url('agent/company_form/'); ?>" class="button btn-add-custom form-control">
                            Add New Company
                        </a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'company_details') : ?>
                <nav class="breadcrumb-custom detail-title">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/companies/'); ?>" class="text-decor">All Companies</a></li>
                            <li class="breadcrumb-item">Company Details</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/company_update_form/'); ?><?= $company['id']; ?>/" class="button btn-update-custom form-control">Update</a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'company_contacts') : ?>
                <nav class="breadcrumb-custom detail-title">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/companies/'); ?>" class="text-decor">All Companies</a></li>
                            <li class="breadcrumb-item"><?= str_replace('%20', ' ', $this->uri->segment(3)); ?> contact list</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/print_contacts/'); ?><?= str_replace('%20', ' ', $this->uri->segment(3)); ?>/" class="button btn-update-custom form-control" target="_blank">Print</a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'company_form') : ?>
                <h5 class="header-custom">New Company</h5>
            <?php elseif ($this->uri->segment(2) === 'company_update_form') : ?>
                <h5 class="header-custom">Update Company</h5>
            <?php elseif ($this->uri->segment(2) === 'agents') : ?>
                <nav class="breadcrumb-custom">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/lists_menu/'); ?>" class="text-decor">Lists Menu</a></li>
                            <li class="breadcrumb-item">All Agents</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                        <a href="<?= base_url('/agent/print_agents/'); ?>" class="button btn-print-custom form-control" target="_blank">Print</a>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="top-search-bar">
                        <a href="<?= base_url('/agent/agent_form/'); ?>" class="button btn-add-custom form-control">Add New Agent</a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'agent_details') : ?>
                <nav class="breadcrumb-custom detail-title">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/agents/'); ?>" class="text-decor">All Agents</a></li>
                            <li class="breadcrumb-item">Agent Details</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/agent_update_form/'); ?><?= $agent['id']; ?>/" class="button btn-update-custom form-control">Update</a>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="top-search-bar">
                       <a href="<?= base_url('agent/change_agent_password/'); ?><?= $agent['id']; ?>/" class="button btn-change-custom form-control">Change Password</a>
                    </div>
                </div>
            <?php elseif ($this->uri->segment(2) === 'agent_form') : ?>
                <h5 class="header-custom">New Agent</h5>
            <?php elseif ($this->uri->segment(2) === 'agent_update_form') : ?>
                <h5 class="header-custom">Update Agent</h5>
            <?php elseif ($this->uri->segment(2) === 'change_agent_password') : ?>
                <h5 class="header-custom">Change Agent Password</h5>
            <?php elseif ($this->uri->segment(2) === 'reports_menu') : ?>
                <h5 class="header-custom">Reports Menu</h5>
            <?php elseif ($this->uri->segment(2) === 'report_mostcasesbysubject') : ?>
                <nav class="breadcrumb-custom">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/reports_menu/'); ?>" class="text-decor">Reports</a></li>
                            <li class="breadcrumb-item">Most Cases by Subject</li>
                        </ol>
                    </h5>
                </nav>
                <?php if ($this->input->post('from')) : ?>
                    <div class="nav-item">
                        <div class="top-search-bar">
                            <a href="<?= base_url('/agent/print_report1'); ?>?from=<?= $this->input->post('from'); ?>&until=<?= $this->input->post('until'); ?>" class="button btn-print-custom form-control" target="_blank">Print</a>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="nav-item">
                        <div class="top-search-bar">
                            <a href="<?= base_url('/agent/print_report1/'); ?>" class="button btn-print-custom form-control" target="_blank">Print</a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php elseif ($this->uri->segment(2) === 'report_agentperformancebyassignment') : ?>
                <nav class="breadcrumb-custom">
                    <h5>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('agent/reports_menu/'); ?>" class="text-decor">Reports</a></li>
                            <li class="breadcrumb-item">Agent Performance by Assignment</li>
                        </ol>
                    </h5>
                </nav>
                <div class="nav-item">
                    <div class="top-search-bar">
                        <a href="<?= base_url('/agent/print_report2/'); ?>" class="button btn-print-custom form-control" target="_blank">Print</a>
                    </div>
                </div>
            <?php endif; ?>

            <div class="nav-item dropdown nav-user">
                <a href="#" class="nav-link nav-user-img" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <img src="<?= base_url('images/'); ?><?= $this->session->userdata('image'); ?>" class="user-avatar-md">
                </a>
                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink">
                    <div class="nav-user-info">
                        <h6 class="mb-0 text-white"><?= $this->session->userdata('name'); ?></h6>
                        <span><?= $this->session->userdata('email'); ?></span>
                    </div>
                    <a href="<?= base_url('agent/profile/'); ?>" class="dropdown-item"><i class="fas fa-user mr-2"></i><b>Profile</b></a>
                    <a href="<?= base_url('auth/logout/'); ?>" class="dropdown-item"><i class="fas fa-power-off mr-2"></i><b>Log Out</b></a>
                </div>
            </div>
        </div>
    </section>
</header>