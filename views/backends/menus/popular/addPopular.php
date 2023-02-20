<div class="container-fluid my-3">
    <div class="row d-flex-center justify-content-center mx-auto">
 		<div class="col-lg-6 col-md-8 col-sm-10 col-12">
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

 			<form class="bg-white p-3 border-1" action="../../controllers/PopularMenuController.php" method="POST" enctype="multipart/form-data">    
				<h2 class="h4 mb-4">Add Popular Menu</h2>
                    <div class="form-group text-center">
                        <img src="../../../../../caffe/assets/images/menus/popular/menu_placeholder.jpg" alt="" id="menu_image" onclick="triggerClick()" alt="menu_image" class="img-thumbnail">
                        <label for="image">Menu Image</label>
                        <input class="form-control" type="file" onchange="displayImage(this)" name="image" id="image" display="none" style="display: none;">

                        <?php if(isset($_SESSION['image'])) :?>
                            <p class="text-danger mb-0">
                                <?= $_SESSION['image'] ?>
                             </p>
                        <?php unset($_SESSION['image']); endif ?>
                    </div>

					<div class="form-group">
                        <label for="title"></label>
      						<input type="text" name="title" class="form-control" placeholder="Enter Menu Title" id="title" autofocus>                          
                            <?php if(isset($_SESSION['title'])) :?>
                                <p class="text-danger mb-0">
                                    <?= $_SESSION['title'] ?>
                                </p>
                            <?php unset($_SESSION['title']); endif ?>

						<div class="form-row">
                            <div class="col-md-6">
                                <label for="item_one"></label>
      						        <input type="text" name="item_one" class="form-control" placeholder="Enter a Cup or Piece" id="item_one">                        
                                <?php if(isset($_SESSION['item_one'])) :?>
                                    <p class="text-danger mb-0">
                                        <?= $_SESSION['item_one'] ?>
                                    </p>
                                <?php unset($_SESSION['item_one']); endif ?>
                            </div>
                            <div class="col-md-6">
                                <label for="price_one"></label>
      						        <input type="number" min="1" name="price_one" class="form-control" placeholder="Enter Price" id="price_one">                        
                                <?php if(isset($_SESSION['price_one'])) :?>
                                    <p class="text-danger mb-0">
                                        <?= $_SESSION['price_one'] ?>
                                    </p>
                                <?php unset($_SESSION['price_one']); endif ?>
                            </div>
                        </div>
<!-- 
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="item_two"></label>
      						    <input type="text" name="item_two" class="form-control" placeholder="Enter table or pieces" id="item_two">                        
                            </div>
                            <div class="col-md-6">
                                <label for="price_two"></label>
      						    <input type="number" name="price_two" class="form-control" placeholder="Enter Price" id="price_two">                       
                            </div>
                        </div> -->
                    </div>

                        <input type="hidden" name="action" value="add">
  						<button class="btn btn-success" type="submit" name="add-submit">
                            <!-- <i class="fa fa-plus-circle" aria-hidden="true"></i> -->
                            Save
                        </button>
                        <a href="../../../../../caffe/views/backends/admin.php?page=add-menu" class="btn btn-light" type="reset">
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