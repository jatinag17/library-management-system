<!--Offcanvas start-->


<div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">CORE</div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-gauge me-2"></i>Dashboard</a>
            </li>
            <li class="nav-item my-0">
                <hr />
            </li>
            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">INVENTORY</div>
            </li>

            <li class="nav-item">
                <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#booksMgmt" role="button" aria-expanded="false"
                    aria-controls="booksMgmt">
                    <i class="fa-solid fa-book-open me-2"></i> Books Management
                    <span class="right-icon float-end"><i class="fa-solid fa-chevron-down "></i></span>
                </a>
                <div class="collapse" id="booksMgmt">
                    <div>
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="./add-book.php" class="nav-link"><i class="far fa-plus me-2"></i>Add New</a>
                            </li>
                            <li>
                                <a href="./manage-books.php" class="nav-link"><i class="fa-solid fa-bars me-2"></i>Manage All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#studentMgmt" role="button" aria-expanded="false"
                    aria-controls="studentMgmt">
                    <i class="fa-solid fa-users me-2"></i>Students Management
                    <span class="right-icon float-end"><i class="fa-solid fa-chevron-down "></i></span>
                </a>
                <div class="collapse" id="studentMgmt">
                    <div>
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="./add-students.php" class="nav-link"><i class="far fa-plus me-2"></i>Add New</a>
                            </li>
                            <li>
                                <a href="./manage-students.php" class="nav-link"><i class="fa-solid fa-bars me-2"></i>Manage All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item my-0">
                <hr />
            </li>
            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">BUSINESS</div>
            </li>

            <li class="nav-item">
                <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#booksLoanMgmt" role="button" aria-expanded="false"
                    aria-controls="booksLoanMgmt">
                    <i class="fa-solid fa-book-open-reader me-2"></i>Books Loan
                    <span class="right-icon float-end"><i class="fa-solid fa-chevron-down "></i></span>
                </a>
                <div class="collapse" id="booksLoanMgmt">
                    <div>
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="./add-loan.php" class="nav-link"><i class="far fa-plus me-2"></i>Add New</a>
                            </li>
                            <li>
                                <a href="./manage-loans.php" class="nav-link"><i class="fa-solid fa-bars me-2"></i>Manage All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#subsMgmt" role="button" aria-expanded="false"
                    aria-controls="subsMgmt">
                    <i class="fa-solid fa-indian-rupee-sign me-2"></i>Subscription
                    <span class="right-icon float-end"><i class="fa-solid fa-chevron-down "></i></span>
                </a>
                <div class="collapse" id="subsMgmt">
                    <div>
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="./add-plans.php" class="nav-link"><i class="far fa-plus me-2"></i>Plans</a>
                            </li>
                            <li>
                                <a href="./purchase-history.php" class="nav-link"><i class="fa-solid fa-bars me-2"></i>Purchase History</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item my-0">
                <hr />
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a>
            </li>
        </ul>
        </ul>
    </div>
</div>


<!--Offcanvas  end-->