<?php include_once("./include/header.php") ?>
<?php include_once("./include/topbar.php") ?>
<?php include_once("./include/sidebar.php") ?>


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

<?php include_once("./include/footer.php") ?>