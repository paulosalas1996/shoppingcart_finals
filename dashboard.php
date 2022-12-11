<?php
    session_start();
    $_SESSION['CURR_PAGE'] = 'dashboard';
?>
<?php require_once('header.php');?>
    <div class="container">
         <div class="row">
            <?php require_once('nav.php');?>
              <main role="main" class="col-md-9 ml-sm-auto col-lg-8 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                   <h1 class="h2"> <i class= "fa fa-dashboard"></i>Dashboard</h1> 
                </div>
                 <div class="row">
                    <div class="col-sm-10">
                       <div class="card text-white bg-primary mb-3">
                         <div class="card-header">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="fa fa-store fa-3x"></i>
                                </div>
                                <div class="col-sm-8">
                                <?php $con = openConnection();?>
                                    <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $strSql=mysqli_query($con,'SELECT * FROM `tbl_products`'); $strSql= mysqli_num_rows($strSql); echo $strSql; ?></span></div>
                                       <div class="clearfix"></div>
                                    <div class="float-sm-right">Total Products</div>
                                    <?php  closeConnection($con);?>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-primary list-group-item list-group-item-action">
                            <a href="product.php?page=all-users">
                               <div class="row">
                                  <div class="col-sm-8">
                                         <p class="">All Products</p>
                                  </div>
                                    <div class="col-sm-4">
                                   <i class="fa fa-arrow-right float-sm-right"></i>
                                  </div>
                               </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
   </div>
   
 <?php require_once('footer.php');?>