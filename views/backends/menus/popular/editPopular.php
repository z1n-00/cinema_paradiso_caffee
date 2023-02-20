<div class="container-fluid my-3">
    <div class="row d-flex-center justify-content-center mx-auto">
 			<form class="bg-white p-3 border-1" action="../../controllers/PopularMenuController.php" method="POST" enctype="multipart/form-data">    
				<h2 class="h4 mb-4">Edit Popular Menu</h2>
                    <div class="form-group text-center">
                        <img class="img-thumbnail" src="../../../../../caffe/assets/images/menus/popular/<?= $menuData['image']?>" name="menu_image" alt="" id="menu_image" onclick="triggerClick()" alt="menu_image">
                        <input type="text" name="old_image" hidden="hidden" value="<?= $menuData['image']?>">
                        <label for="image">Menu Image</label>
                        <input class="form-control" type="file" onchange="displayImage(this)" name="image" id="image" style="display: none;">
                        <?php if(isset($_SESSION['image'])) :?>
                            <p class="text-danger mb-0">
                                <?= $_SESSION['image'] ?>
                            </p>
                        <?php unset($_SESSION['image']); endif ?>
                    </div>

					<div class="form-group">
                        <label for="title"></label>
      						<input type="text" name="title" class="form-control" value="<?= $menuData['title']?>" id="title" autofocus>                          
                        <?php if(isset($_SESSION['title'])) :?>
                            <p class="text-danger mb-0">
                                <?= $_SESSION['title'] ?>
                            </p>
                        <?php unset($_SESSION['title']); endif ?>

						<div class="form-row">
                            <div class="col-md-6">
                                <label for="item_one"></label>
      						        <input type="text" name="item_one" class="form-control" value="<?= $menuData['item_one']?>" id="item_one">                        
                                <?php if(isset($_SESSION['item_one'])) :?>
                                    <p class="text-danger mb-0">
                                        <?= $_SESSION['item_one'] ?>
                                    </p>
                                <?php unset($_SESSION['item_one']); endif ?>
                            </div>
                            <div class="col-md-6">
                                <label for="price_one"></label>
      						        <input type="number" min="1" name="price_one" class="form-control" value="<?= $menuData['price_one'] ?>" id="price_one">                        
                                <?php if(isset($_SESSION['price_one'])) :?>
                                    <p class="text-danger mb-0">
                                        <?= $_SESSION['price_one'] ?>
                                    </p>
                                <?php unset($_SESSION['price_one']); endif ?>
                            </div>
                        </div>

                        <!-- <div class="form-row">
                            <div class="col-md-6">
                                <label for="item_two"></label>
      						    <input type="text" name="item_two" class="form-control" value="<?= $menuData['item_two'] ?>" id="item_two">                                                 
                            </div>
                            <div class="col-md-6">
                                <label for="price_two"></label>
      						    <input type="text" name="price_two" min="1" class="form-control" value="<?= $menuData['price_two']?>" id="price_two">                        
                            </div>
                        </div> -->
                    </div>

                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="id" value="<?= $menuData['id']?>">
  						<button class="btn btn-success" type="submit" name="update-submit">
                            <!-- <i class="fa fa-plus-circle" aria-hidden="true"></i> -->
                            Update
                        </button>
                        <a href="../../../../../caffe/views/backends/admin.php?page=menu-list" class="btn btn-light" type="reset">
                            <!-- <i class="fas fa-eraser"></i> -->
                            Cancel
                        </a>		
				</form>
 			</div>
        </div>
    </div>
</div>

<script>
// For Add Menu Image 
function triggerClick(){
    document.querySelector('#image').click();
}

function displayImage(e){
    if(e.files[0]){
        let reader = new FileReader();

        reader.onload = function(e){
            document.querySelector("#menu_image").setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}
</script>