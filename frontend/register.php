<style>
    <?php include './view/css/register.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="view/icons/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="card text-white container">
        <div class="card-body">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

            <form action="controller/register-to-index.php" method="post" class="mx-1 mx-md-4">
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" required="required" class="form-control" /></input>
                    </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label">Email</label>
                        <input type="email" name="newEmail" required="required" class="form-control" /></input>
                    </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label">Password</label>
                        <input type="password" name="newPassword" required="required" class="form-control" /></input>
                    </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label">Repeat your password</label>
                        <input type="password" name="rePassword" required="required" class="form-control" /></input>
                    </div>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" name="submit" class="btn btn-dark btn-outline-light btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">You already have an account? <a class="link" href="login.php" class="link-danger">Log in</a></p>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Visit as guest <a class="link" href="index.html" class="link-danger">Guest</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>