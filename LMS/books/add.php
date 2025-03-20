<?php
include_once('../config/config.php');
include_once(DIR_URL . 'include/header.php');
include_once(DIR_URL . 'include/topbar.php');
include_once(DIR_URL . 'include/sidebar.php');
?>

<!--Main Content start-->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <!-- Cards -->
        <div class="row dashboard-counts">
            <div class="col-md-12">
                <h4 class="fw-bold text-uppercase">Add Book</h4>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Fill the Form
                    </div>
                    <div class="card-body">
                        <form>
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Book Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Author Name</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Publisher Name</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Category/course</label>
                                            <select class="form-control">
                                                <option value="">Please Select</option>
                                                <option value="">UPSC</option>
                                                <option value="">GATE</option>
                                                <option value="">MCA Entrance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">Publish</button>
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!--Main Content end-->

<?php
include_once(DIR_URL . 'include/footer.php');
?>