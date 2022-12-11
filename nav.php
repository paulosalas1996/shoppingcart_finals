
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($_SESSION['CURR_PAGE'] == 'dashboard' ? 'active' : '')?>" href="dashboard.php">
                                    <i class="fa fa-tachometer-alt"></i>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($_SESSION['CURR_PAGE'] == 'products' ? 'active' : '')?>" href="product.php">
                                    <i class="fa-brands fa-shopify"></i>
                                    Products
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>