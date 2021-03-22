<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">User</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">UM</a>
          </div>
          <ul class="sidebar-menu">


            <li class="menu-header">User</li>

              <li class="dropdown <?php echo $this->uri->segment(2) == 'components_article' || $this->uri->segment(2) == 'components_avatar' || $this->uri->segment(2) == 'components_chat_box' || $this->uri->segment(2) == 'components_empty_state' || $this->uri->segment(2) == 'components_gallery' || $this->uri->segment(2) == 'components_hero' || $this->uri->segment(2) == 'components_multiple_upload' || $this->uri->segment(2) == 'components_pricing' || $this->uri->segment(2) == 'components_statistic' || $this->uri->segment(2) == 'components_tab' || $this->uri->segment(2) == 'components_table' || $this->uri->segment(2) == 'components_user' || $this->uri->segment(2) == 'components_wizard' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
              <ul class="dropdown-menu">

                <li class="<?php echo $this->uri->segment(2) == 'components_table' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url('user_form'); ?>">User Management</a></li>

              </ul>
            </li>




            </ul>


        </aside>
      </div>
