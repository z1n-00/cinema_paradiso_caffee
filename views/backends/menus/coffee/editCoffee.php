<div class="container-fluid mt-3">
        <div class="row d-flex-center justify-content-center mx-auto">
            <div class="col-lg-6 col-sm-8 col-12">
 				<form class="bg-white p-5" action="../../controllers/MenuController.php" method="POST" enctype= "multipart/form-data">
                    
				    <h2 class="h4 mb-4">Edit Coffee Menu</h2>

						<div class="form-group">
                            <div class="row">
                            <label for="title"></label>
      						<input type="text" name="title" class="form-control" value="<?= $menuData['title']?>" id="title" autofocus>

                            <?php if(isset($_SESSION['expire'])) {
                            $diff = time() - $_SESSION['expire'];
                            if($diff > 1){
                                unset($_SESSION['title']);
                                unset($_SESSION['expire']);
                                }
                            }?>
                            <?php if(isset($_SESSION['title'])) :?>
                                <p class="text-danger">
                                    <?= $_SESSION['title'] ?>
                                </p>
                            <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group">
							<div class="row">
                                <label for="price"></label>
      						    <input type="number" name="price" class="form-control" value="<?= $menuData['price']?>" id="price">
                            
                            <?php if(isset($_SESSION['expire'])) {
                            $diff = time() - $_SESSION['expire'];
                            if($diff > 1){
                                unset($_SESSION['price']);
                                unset($_SESSION['expire']);
                                }
                            }?>
                            <?php if(isset($_SESSION['price'])) :?>
                                <p class="text-danger">
                                    <?= $_SESSION['price'] ?>
                                </p>
                            <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group">
							<div class="row">
                                <label for="image"></label>
                                <div class="custom-file col-12">                   
                                    <input type="file" name="image" class="custom-file-input" id="customFile" value="<?= $menuData['image']?>">
                                    <label class="custom-file-label" for="customFile">Upload Image file</label>
                                </div>
                            </div>
                            
                            <?php if(isset($_SESSION['expire'])) {
                            $diff = time() - $_SESSION['expire'];
                            if($diff > 1){
                                unset($_SESSION['image']);
                                unset($_SESSION['expire']);
                                }
                            }?>
                            <?php if(isset($_SESSION['image'])) :?>
                                <p class="text-danger">
                                <?= $_SESSION['image'] ?>
                                </p>
                            <?php endif ?>
                        </div>    
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="<?= $menuData['id']?>">
  					<button class="btn btn-success" type="submit">
                        <i class="fas fa-plus-circle" aria-hidden="true"></i>
                        Update
                    </button>
                    <button class="btn btn-danger" type="submit">
                        <i class="fas fa-eraser"></i> Reset
                    </button>		
				</form>
 			</div>
        </div>
    </div>
</div>