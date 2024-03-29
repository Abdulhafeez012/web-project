<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>Wildy-graphy</title>
    <link rel="icon" href="/web-project/app/front-end/media/favicon.ico">
</head>
<style>
    * {
        font-family: 'Sofia';
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
<script>
    $(function () {
        $("#NavBar").load("../front-end/navbar.html");
    });
</script>

<body>
    <div id="NavBar"></div>
    <!-- Log In Form -->
    <div class="h-100 container d-flex flex-column 
        justify-content-center align-items-center 
        position-absolute top-50 start-50 translate-middle">
        <form class="border-bottom border-dark" method="POST" action="./index.php">
            <div class="alert alert-danger" role="alert" id="error_message">
                <?php echo $_GET['error_message'] ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">username</label>
                <input type="text" class="form-control" id="user-name" aria-describedby="emailHelp" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="user-password">
            </div>
            <div class="d-grid gap-2 col-3 mx-auto mb-4">
                <input name="confirm" type="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>
        <div class="d-grid col-3 mx-auto my-3">
            <p class="fs-3">You Don't Have an account?</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SignUpModel">
                Sign Up
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="SignUpModel" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="SignUpModalLabel">Sign Up Model</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="mx-1 mx-md-4" method="POST" action="../Back-end/index.php">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="name" class="form-control" name="Name" />
                                <label class="form-label" for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="username" class="form-control" name="username" />
                                <label class="form-label" for="name">Your username</label>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" id="password1" class="form-control" name="user-password" />
                                <label class="form-label" for="password1">Password</label>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" id="repeat-password" class="form-control"
                                    name="repeat-password" />
                                <label class="form-label" for="repeat-password">Repeat your password</label>
                            </div>
                        </div>
                        <div class="form-check d-flex justify-content-evenly mb-5">
                            <div>
                                <input class="form-check-input me-2" type="radio" value="1" id="checker1"
                                    name="checker" />
                                <label class="form-check-label" for="checker1">
                                    I'm a photographer
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input me-2" type="radio" id="checker2" value="0"
                                    name="checker" />
                                <label class="form-check-label" for="checker2">
                                    I'm not a photographer
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input name="confirm" type="submit" class="btn btn-primary btn-lg" value="Register" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var error = "<?php echo $_GET['error_message'] ?>";
        if (error == '') {
            $("#error_message").hide();
        }
    </script>
</body>

</html>