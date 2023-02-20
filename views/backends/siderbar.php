<div class="container-lg-none">
    <div class="navigation bg-white">
        <ul>
            <li>
                <a href="">
                    <span class="icon">
                        <img src="../../assets/images/navimage.png" width="30px">
                    </span>

                    <span class="title">
                        <span style="font-size: 20px; font-family:'Dancing Script', cursive; border-radius: 3px;">Cinema<span style="background-color: #faa005; border-radius: 5px; padding: 0px 5px;">Paradiso</span></span>
                    </span>
                </a>
            </li>
            <li>
                <a href="admin.php?page=home">
                    <span class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="admin.php?page=add-user">
                    <span class="icon">
                    <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="title">Add User</span>
                </a>
            </li>
            <li>
                <a href="admin.php?page=user-list">
                    <span class="icon">
                    <i class="fas fa-users" aria-hidden="true"></i>
                    </span>
                    <span class="title">User List</span>
                </a>
            </li>
            <li>
                <a href="admin.php?page=menu-list">
                    <span class="icon">
                    <i class="fas fa-book" aria-hidden="true"></i>
                    </span>
                    <span class="title">Menu List</span>
                </a>
            </li>
            <li>
                <a href="admin.php?page=add-menu">
                    <span class="icon">
                    <i class="fas fa-edit" aria-hidden="true"></i>
                    </span>
                    <span class="title">Add New Menu</span>
                </a>
            </li>
            <li>
                <a href="../../controllers/LoginController.php?action=logout">
                    <span class="icon">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="topbar sticky-top shadow-sm">
            <div class="toggle" onclick="toggleMenu();"></div>
            <div class="search py-0">
                <label for="search-bar">
                    <input type="text" placeholder="Search here">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </label>
            </div>
            <!-- <div class="user">
                <img src="../../assets/images/users/user.jpg" alt="user_image">
            </div> -->

            <div class="user nav-item dropdown show">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle text-dark"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownMenuLink">
                    <li>
                        <a href="./views/backends/admin.php" class="dropdown-item">User Login</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">Logout</a>
                    </li>
                </ul>
            </div>
        </div>