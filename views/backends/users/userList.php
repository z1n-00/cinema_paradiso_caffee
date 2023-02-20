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
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
                $i = 1;
                foreach($users as $user){ ?>
                    <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a href="admin.php?page=user-edit&id=<?= $user['id'] ?>"><i class="fas fa-user-edit text-success pr-2"></i></a>
                        <a href="../../controllers/UserController.php?action=delete&id=
                        <?= $user['id']?>"><i class="fas fa-user-minus text-danger"></i></a>
                    </td>
                    </tr>
                <?php $i++; }?>
                </tbody>
            </table> 
        </div>  
    </div>
</div>
</div>