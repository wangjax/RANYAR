<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar" style="background:
        #886F6F;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(). ('welcome')?>">
                <div class="sidebar-brand-icon">
                <i class="fas fa-store"></i>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(). ('welcome')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                
                <a class="nav-link" href="<?php echo base_url(). ('kategori/crewneck')?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Crewneck</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(). ('kategori/kaus')?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Kaus</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                
                <div class="brand-name"><strong>Ranyar.Thrift</strong></div>

                    <!-- Sidebar Toggle (Topbar) -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>   
                                    <?php
                                $keranjang = '<i class="fas fa-cart-arrow-down"></i>  ' .$this->cart->total_items(). ' items' ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang)?>
                                </li>
                            </ul>
                        
                        <div class="topbar-divider d-none d-sm-block"></div>
                        
                        <ul class="na navbar-nav navbar-right">
                            <?php if($this->session->userdata('username')) { ?>
                                <li><div>Halo! <?php echo $this->session->userdata('username') ?></div></li>

                                <li class="ml-2"><?php echo anchor('auth/logout','Logout'); ?></li>

                                 <?php } else{ ?> 
                                <li><?php echo anchor ('auth/login','Login'); ?></li>
                            
                                <?php } ?>
                        </ul>
                     </div>

                    </ul>
             
                </nav>
                <!-- End of Topbar -->