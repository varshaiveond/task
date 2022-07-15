<?php 

session_start();
?>

<div class="bg-light">
        <div class="container bg-light ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">
                        <h1>brand</h1>
                    </a>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
<?php
                        if(isset($_SESSION['login_user'])){


             ?>           <li class="nav-item">
                            <a class="nav-link" href="table.php">Data</a>
                        </li>
                        
                        <?php
      
   }
   
   ?>
                        
                        <?php
                        if(isset($_SESSION['login_user'])){


             ?>           <li class="nav-item">
             <a class="nav-link" href="logout.php" >logout</a>
         </li>
                        
                        <?php
      
   }else{ ?>

<li class="nav-item">
             <a class="nav-link" href="#log">login</a>
         </li>

  <?php }
   
   ?>
                        
                    </ul>

                </div>
            </nav>
        </div>
    </div>