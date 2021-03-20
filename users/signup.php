<?php

include('../header.php');

?>

<div class="signup-form">
    <div class="container mt-5 mb-5">
        <h1 class="text-center pt-3 pb-4">Sign Up</h1>
        <form action="../includes/signup.inc.php" method="post" class="row flex-column justify-content-center align-items-center g-3">
            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-2">
                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo '<p class="alert alert-danger p-2">Fill in all fields!</p>';
                        } else if ($_GET["error"] == "invaliduid") {
                            echo '<p class="alert alert-danger p-2">Choose a proper username!</p>';
                        } else if ($_GET["error"] == "invalidemail") {
                            echo '<p class="alert alert-danger p-2">Choose a proper email!</p>';
                        } else if ($_GET["error"] == "passwordsdontmatch") {
                            echo '<p class="alert alert-danger p-2">Passwords doesn\'t match!</p>';
                        } else if ($_GET["error"] == "stmtfailed") {
                            echo '<p class="alert alert-danger p-2">Something went wrong, try again!</p>';
                        } else if ($_GET["error"] == "usernametaken") {
                            echo '<p class="alert alert-danger p-2">Username already taken!</p>';
                        } else if ($_GET["error"] == "none") {
                            echo '<p class="alert alert-success p-2">You have signed up!</p>';
                        }
                    }
                ?>
            </div>
            
            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-2">
                <label>Full name</label>
                <input type="text" name="name" class="form-control" placeholder="Your full name">
            </div>

            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-2">
                <label>Email address</label>
                <input type="text" name="email" class="form-control" placeholder="Your email">
            </div>

            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-2">
                <label>Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="uid" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="username">
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-2">
                <label>Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password">
                <div id="passwordHelpBlock" class="form-text">
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-11 col-11 mb-4">
                <label>Repeat password</label>
                <input type="password" name="pwdrepeat" class="form-control" placeholder="Repeat password">
            </div> 

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary rounded-pill">Sign Up!</button>
            </div>
        </form>
    </div>
</div>

<?php

include('../footer.php');

?>