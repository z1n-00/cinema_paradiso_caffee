    <div class="container-fluid mt-3">
        <div class="row d-flex-center justify-content-center mx-auto">
 			<div class="col-lg-6 col-sm-8 col-12">
             <?php if(isset($_SESSION['expire'])) {
                    $diff = time() - $_SESSION['expire'];
                    if($diff > 0.001){
                        unset($_SESSION['status']);
                        unset($_SESSION['expire']);
                    }
                }?>
                <?php if(isset($_SESSION['status'])) :?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['status']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif ?>
 				<form class="bg-white p-3" action="../../controllers/UserController.php" method="POST">
                    
				<h2 class="h4 mb-4">Add New User</h2>
						<div class="form-group">
                            <label for="name"></label>
      						<input type="text" name="name" class="form-control" placeholder=" Enter Name" id="name" autofocus>
                            <?php if(isset($_SESSION['name'])) :?>
                                <p class="text-danger mb-0">
                                    <?= $_SESSION['name'] ?>
                                </p>
                            <?php unset($_SESSION['name']); endif ?>

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
  						<button class="btn btn-success" type="submit">
                            <!-- <i class="fa fa-plus-circle" aria-hidden="true"></i> -->
                            Save
                        </button>
                        <a href="../../../../caffe/views/backends/admin.php?page=add-user" class="btn btn-light" type="reset">
                            <!-- <i class="fas fa-eraser"></i> -->
                            Cancel
                        </a>		
				</form>
 			</div>
        </div>
    </div>
</div>