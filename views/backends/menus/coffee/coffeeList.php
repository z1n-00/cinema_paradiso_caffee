<div class="container-fluid mt-3">
                
    <div class="row justify-content-center">
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
                <!-- <h2>Coffee Menu Table</h2> -->
            <table class="table text-center bg-white">
                <thead>
                <!-- <tr> -->
                    <th class="justify-content-center border-0 ml-5" scope="row" colspan="3"><h3>Coffee Menu Table</h3></th>
                <!-- </tr>                  -->
                </thead>
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
                $i = 1;
                foreach($menus as $menu){ ?>
                    <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $menu['title'] ?></td>
                    <td><?= $menu['price'] ?></td>
                    <td>
                        <a href="admin.php?page=menu-edit&id=<?= $menu['id'] ?>"><i class="fas fa-edit text-success"></i></a>
                        <a href="../../controllers/CoffeeMenuController.php?action=delete&id=
                        <?= $menu['id']?>"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                <?php $i++; }?>
                </tbody>
            </table> 
        </div>  
    </div>
</div>
</div>