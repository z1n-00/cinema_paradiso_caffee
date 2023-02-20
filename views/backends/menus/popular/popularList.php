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
            <table class="table text-center bg-white ">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Item</th>
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
                    <td><?= $menu['item_one'] ?></td>
                    <td><?= $menu['price_one'] ?></td>
                    <td>
                        <a href="admin.php?page=menu-edit&id=<?= $menu['id'] ?>"><i class="fas fa-edit text-success pr-2"></i></a>
                        <a href="../../controllers/PopularMenuController.php?action=delete&id=
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