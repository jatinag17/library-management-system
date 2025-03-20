<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="./assets/js/7d9b19adfc.js" crossorigin="anonymous"></script>

    <title>Forgot Password | Library</title>
</head>


<body style="background-color: rgb(41, 40, 40);">
    <div class="container d-flex align-items-center justify-content-center vh-100 ">
        <div class="row">
            <div class="col-md-12 login-form">
                <div class="card mb-3" style="max-width:900px;">
                    <div class="row g-0">
                        <div class="col-md-5 ">
                            <img src="./assets/images/login.jpeg" class="img-fluid rounded-start" alt="..."
                                style="width: 100%; height: 100%;"">
                    </div>
                    <div class=" col-md-7">
                            <div class="card-body">
                                <h1 class="card-title text-uppercase fw-bold">Library</h1>
                                <p class="card-text">Enter email to reset password</p>

                                <form action="./reset-password.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Login</button>

                                </form>

                                <hr />
                                <a href="./index.php" class="card-link link-underline-light">Login Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>



</body>

</html>