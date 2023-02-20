<div class="container-fluid mt-3">
<div class="row d-flex-center justify-content-center mx-auto">
            <div class="col-lg-6 col-sm-8 col-12">
 				<form class="bg-white p-3" action="../../controllers/UserController.php" method="POST"  >
                    
				<h2 class="h4 mb-4">Edit User</h2>
						<div class="form-group">
                            <label for="name"></label>
                            <input type="text" name="name" class="form-control" id="name" autofocus value="<?= $userData['name']?>">
                              <?php if(isset($_SESSION['name'])) :?>
                                <p class="text-danger mb-0">
                                    <?= $_SESSION['name'] ?>
                                </p>
                            <?php unset($_SESSION['name']); endif ?>

							<label for="email"></label>
      						<input type="email" name="email" id="email" class="form-control" value="<?= $userData['email'] ?>">
                              <?php if(isset($_SESSION['email'])) :?>
                                <p class="text-danger mb-0">
                                <?= $_SESSION['email'] ?>
                                </p>
                            <?php unset($_SESSION['email']); endif ?>
							
							<label for="password"></label>	
							<input type="password" name="password" class="form-control" id="password">
                            <?php if(isset($_SESSION['password'])) :?>
                                <p class="text-danger mb-0">
                                <?= $_SESSION['password'] ?>
                                </p>
                            <?php unset($_SESSION['password']); endif ?>   
						</div>
                        
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="id" value="<?= $userData['id']?>">
  						<button class="btn btn-success" type="submit">
                            <!-- <i class="fa fa-plus-circle" aria-hidden="true"></i> -->
                            Update
                        </button>
                        <a href="../../../../caffe/views/backends/admin.php?page=user-list" class="btn btn-light" type="submit">
                            <!-- <i class="fas fa-eraser"></i> -->
                            Cancel
                        </a>		
				</form>
 			</div>
        </div>
</div>