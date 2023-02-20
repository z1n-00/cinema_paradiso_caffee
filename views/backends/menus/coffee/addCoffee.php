<div class="container-fluid mt-3">
        <div class="row d-flex-center justify-content-center mx-auto">
 			<div class="col-lg-6 col-md-10 col-sm-10 col-12">
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
 				<form class="bg-white p-5" action="../../controllers/CoffeeMenuController.php" method="POST" enctype="multipart/form-data">
                    
				<h2 class="h4 mb-4">Add Coffee Menu</h2>
						<div class="form-group">
                            <label for="title"></label>
      						<input type="text" name="title" class="form-control" placeholder="Enter Menu Title" id="title" autofocus>                          
                            <?php if(isset($_SESSION['title'])) :?>
                                <p class="text-danger mb-0">
                                    <?= $_SESSION['title'] ?>
                                </p>
                            <?php endif ?>

							<label for="price"></label>
      						<input type="number" name="price" class="form-control" placeholder="Enter Price" id="price">                        
                            <?php if(isset($_SESSION['price'])) :?>
                                <p class="text-danger mb-0">
                                <?= $_SESSION['price'] ?>
                                </p>
                            <?php endif ?>

                            <label for="textOne"></label>
      						<input type="text" name="textOne" class="form-control" placeholder="Enter Item Name and Item Number" id="textOne">                        
                            <?php if(isset($_SESSION['price'])) :?>
                                <p class="text-danger mb-0">
                                <?= $_SESSION['price'] ?>
                                </p>
                            <?php endif ?>

                            <label for="textTwo"></label>
      						<input type="text" name="textTwo" class="form-control" placeholder="Enter Item Name and Item Number"  id="textTwo">                        
                            <?php if(isset($_SESSION['price'])) :?>
                                <p class="text-danger mb-0">
                                <?= $_SESSION['price'] ?>
                                </p>
                            <?php endif ?>
							
							<label for="image"></label>	
                            <div class="custom-file">                   
                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <?php if(isset($_SESSION['image'])) :?>
                                <p class="text-danger mb-0">
                                <?= $_SESSION['image'] ?>
                                </p>
                            <?php endif ?>
						</div>
                        
                        <input type="hidden" name="action" value="add">
  						<button class="btn btn-success" type="submit">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            Save
                        </button>
                        <button class="btn btn-danger" type="reset">
                            <i class="fas fa-eraser"></i> Reset
                        </button>		
				</form>
 			</div>
        </div>
    </div>
</div>