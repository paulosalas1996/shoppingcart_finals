<?php
    session_start();
    $_SESSION['CURR_PAGE'] = 'dashboard';
?>
<?php require_once('header.php');?>
    <div class="container">
         <div class="row">
            <?php require_once('nav.php');?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                   <h1 class="h2"> <i class= "fa fa-dashboard"></i>Dashboard</h1>
               </div>
           </main>
        </div>
   </div>
 <?php require_once('footer.php');?>