<?php
session_start();
include("header.php");
?>
    <div class="container-fluid mt-5">
        <div class="row d-flex-center justify-content-center mx-auto">
 			<div class="col-lg-5 col-md-6 col-sm-8 col-12">
 				<form class="bg-white mt-5 p-3" action="../../controllers/LoginController.php" method="POST">
                    
				<h2 class="h4 mb-4"> 
					<!-- <i class="fa fa-sign-in pr-2" aria-hidden="true"></i> -->
					Login
				</h2>
                <?php if(isset($_SESSION['expire'])) {
                    $diff = time() - $_SESSION['expire'];
                    if($diff > 0.001){
                        unset($_SESSION['status']);
                        unset($_SESSION['expire']);
                    }
                }?>
                <?php if(isset($_SESSION['status'])) :?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $_SESSION['status']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif ?>

						<div class="form-group">
							<label for="email"></label>
      						<input type="email" name="email" class="form-control" placeholder="Enter Email" id="email">
                            <?php if(isset($_SESSION['email'])) :?>
                                <p class="text-danger mb-0">
                                <?= $_SESSION['email'] ?>
                                </p>
                            <?php unset($_SESSION['email']); endif ?>
							
							<label for="password"></label>	
							<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                            <?php if(isset($_SESSION['password'])) :?>
                                <p class="text-danger mb-0">
                                <?= $_SESSION['password'] ?>
                                </p>
                            <?php unset($_SESSION['password']); endif ?>
						</div>
                        
                        <input type="hidden" name="action" value="add">
  						<button class="btn btn-primary " type="submit">
                            <!-- <i class="fa fa-plus-circle" aria-hidden="true"></i> -->
                            Login
                        </button>
                        <button class="btn btn-light" type="reset">
                            <!-- <i class="fas fa-eraser"></i>  -->
                            Reset
                        </button>		
				</form>
 			</div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>