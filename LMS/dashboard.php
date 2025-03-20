<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="./assets/js/7d9b19adfc.js" crossorigin="anonymous"></script>
    <title>Library</title>
</head>

<body>
    <!--Top Navbar start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!--Offcanvas trigger start -->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Offcanvas trigger end -->
            <a class="navbar-brand text-uppercase fw-bold text-uppercase me-auto href=" #">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex ms-auto" role="search">
                    <div class="input-group my-3 my-lg-0">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary btn-primary text-white" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./assets/images/admin-icon-vector.jpg" class="user-icon">
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--Top Navbar end-->


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


    <!--Main Content start-->
    <main class="mt-1 pt-3">
        <div class="container-fluid">
            <!-- Cards -->
            <div class="row dashboard-counts">
                <div class="col-md-12">
                    <h4 class="fw-bold text-uppercase">Dashboard</h4>
                    <p>Statistics of the system!</p>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted">TOTAL BOOKS</h6>
                            <h1>130</h1> <a href="#" class="link-underline-light">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center ">
                            <h6 class="card-title text-muted">TOTAL STUDENTS</h6>
                            <h1>84</h1>
                            <a href="#" class="link-underline-light">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted">TOTAL REVENUE</h6>
                            <h1>1,20,000</h1>
                            <a href="#" class="link-underline-light">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted">TOTAL BOOKS LOAN</h6>
                            <h1>35</h1>
                            <a href="#" class="link-underline-light">View more</a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="row mt-5 dashboard-tabs">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase active" id="recent-Students" data-bs-toggle="tab" data-bs-target="#recent-Students-pane" type="button"
                                role="tab" aria-controls="recent-Students-pane" aria-selected="true">New Students</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="recent-loans" data-bs-toggle="tab" data-bs-target="#recent-loans-pane" type="button"
                                role="tab" aria-controls="recent-loans-pane" aria-selected="false">Recent Loans</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="recent-subscriptions" data-bs-toggle="tab" data-bs-target="#recent-subscriptions-pane" type="button"
                                role="tab" aria-controls="recent-subscriptions-pane" aria-selected="false">Recent Subscription</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="recent-Students-pane" role="tabpanel" aria-labelledby="recent-Students" tabindex="0">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Preparing For</th>
                                        <th scope="col">Registered On</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>UPSC</td>
                                        <td>10-05-2023,10:15 AM</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                        <!-- <td>Rakesh Saini</td> -->
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jai</td>
                                        <td>GATE</td>
                                        <td>12-05-2023,11:35 AM</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                        <!-- <td>GATE</td> -->
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Nitin Kumar</td>
                                        <td>IAS</td>
                                        <td>09-05-2023,06:15 PM</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Rakesh Saini</td>
                                        <td>GATE</td>
                                        <td>09-05-2022,11:35 AM</td>
                                        <td><span class="badge text-bg-danger">Inactive</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="recent-loans-pane" role="tabpanel" aria-labelledby="recent-loans" tabindex="0">...
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">BookName</th>
                                        <th scope="col">StudentName</th>
                                        <th scope="col">LoanDate</th>
                                        <th scope="col">DueDate</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Indian Art and Culture</td>
                                        <td>Jai Sharma</td>
                                        <td>26-05-2023</td>
                                        <td>26-06-2023</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                        <!-- <td>Rakesh Saini</td> -->
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Certificate Physical Geography</td>
                                        <td>Rohan Suthkar</td>
                                        <td>26-05-2023</td>
                                        <td>31-05-2023</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                        <!-- <td>GATE</td> -->
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Indian Economy by Nitin Sighania</td>
                                        <td>Nitin Saini</td>
                                        <td>20-05-2023</td>
                                        <td>29-05-2023</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Tata McGraw Hill CSAT Manual</td>
                                        <td>Joy</td>
                                        <td>20-05-2023</td>
                                        <td>25-05-2023</td>
                                        <td><span class="badge text-bg-warning">Returned</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="recent-subscriptions-pane" role="tabpanel" aria-labelledby="recent-subscriptions" tabindex="0">...
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">StudentName</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">StartDate</th>
                                        <th scope="col">EndDate</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jai Kaushik</td>
                                        <td>500</td>
                                        <td>26-05-2023</td>
                                        <td>26-06-2023</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                        <!-- <td>Rakesh Saini</td> -->
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Narayan Soni</td>
                                        <td>750</td>
                                        <td>20-05-2023</td>
                                        <td>19-08-2023</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                        <!-- <td>GATE</td> -->
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Hemlata Khatri</td>
                                        <td>1000</td>
                                        <td>10-05-2023</td>
                                        <td>09-11-2023</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Rakesh</td>
                                        <td>500</td>
                                        <td>20-04-2023</td>
                                        <td>19-05-2023</td>
                                        <td><span class="badge text-bg-danger">Expired</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Main Content end-->




    <script src="./assets/js/bootstrap.bundle.min.js></script>
</body>

</html>