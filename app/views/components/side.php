<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="font-size: 20px;">
      <img src="<?php echo ROOT.BOOTSTRAP; ?>img/logo.png" alt="RDMS" class="img-circle elevation-3 logo" width="65px">
      <span class="brand-text" style="color: #ffffff;">&nbsp&nbsp&nbsp<?php echo TITLE; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview dashboard">
            <a href="<?php echo ROOT; ?>home" class="nav-link" id="dashboard">
              <i id="dashboardi" class="nav-icon fas fa-home"></i>
              <p id="dashboardp">
                Dashboard
              </p>
            </a>
          </li>

          <!-- <li class="nav-item has-treeview room_type">
            <a href="<?php echo ROOT; ?>roomtype" class="nav-link" id="room_type">
              <i id="room_typei" class="nav-icon fas fa-bookmark"></i>
              <p id="room_typep">
                Room Types
              </p>
            </a>
          </li> -->

          <li class="nav-item has-treeview rooms">
            <a href="<?php echo ROOT; ?>rooms" class="nav-link" id="rooms">
              <i id="roomsi" class="nav-icon fas fa-building"></i>
              <p id="roomsp">
                Rooms
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview tenants">
            <a href="<?php echo ROOT; ?>tenants" class="nav-link" id="tenants">
              <i id="tenantsi" class="nav-icon fas fa-users"></i>
              <p id="tenantsp">
                Tenants
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview guests">
            <a href="<?php echo ROOT; ?>guests" class="nav-link" id="guests">
              <i id="guestsi" class="nav-icon fas fa-users"></i>
              <p id="guestsp">
                Guests
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview waterbilling_payment">
            <a href="<?php echo ROOT; ?>waterbillingpayment" class="nav-link" id="waterbilling_payment">
              <i id="waterbilling_paymenti" class="nav-icon fas fa-tint"></i>
              <p id="waterbilling_paymentp">
                Water Billing Payment
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview electricitybilling_payment">
            <a href="<?php echo ROOT; ?>electricitybillingpayment" class="nav-link" id="electricitybilling_payment">
              <i id="electricitybilling_paymenti" class="nav-icon fas fa-bolt"></i>
              <p id="electricitybilling_paymentp">
                Electricity Billing Payment
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview reports">
            <a href="<?php echo ROOT; ?>reports" class="nav-link" id="reports">
              <i id="reportsi" class="nav-icon fas fa-book"></i>
              <p id="reportsp">
               Reports
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
</aside>