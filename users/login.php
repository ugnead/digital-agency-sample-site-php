<?php

include('../header.php');

?>

<div class="signup-form">
    <div class="container mt-5 mb-5">
        <h1 class="text-center pt-3 pb-4">Log In</h1>
        <form action="../includes/login.inc.php" method="post" class="row flex-column justify-content-center align-items-center g-3">
            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-2">
                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo '<p class="alert alert-danger p-2">Fill in all fields!</p>';
                        } else if ($_GET["error"] == "wronglogin") {
                            echo '<p class="alert alert-danger p-2">Incorrect login information!</p>';
                        }
                    }
                ?>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-2">
                <label>Email address or Username</label>
                <input type="text" name="uid" class="form-control" placeholder="Your email or username">
            </div>

            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-2">
                <label>Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password">
            </div>  

            <div class="text-center pt-3">
                <button type="submit" name="submit" class="btn btn-primary rounded-pill">Log In!</button>
            </div>
        </form>
    </div>
</div>

<?php

include('../footer.php');