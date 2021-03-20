<?php 
    $baseUrl = "http://localhost/digital-agency-php/"; 
?>

<div class="users text-white bg-primary">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <?php 
                    if (isset($_SESSION["useruid"])) {
                        echo '<ul class="users-wrapper users-session nav justify-content-end text-white">';
                            echo '<li class="pt-2 pe-3">Hello, ' . $_SESSION["useruid"] . '!</li>';
                            echo '<li><a class="nav-link btn-primary" href="profile.php">Profile</a></li>';
                            echo '<li><a class="nav-link btn-primary" href="includes/logout.inc.php">Log Out</a></li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="users-wrapper nav justify-content-end text-white">';
                            echo '<li><a class="nav-link btn-primary" href="/digital-agency-php/users/signup.php">Sign Up</a></li>';
                            echo '<li><a class="nav-link btn-primary" href="/digital-agency-php/users/login.php">Log In</a></li>';
                        echo '</ul>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-lg">
        <a class="logo me-5" href="<?php echo $baseUrl; ?>">
            <img src="/digital-agency-php/images/main-logo.svg" alt="digits logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="link navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $baseUrl; ?>">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item contact-link d-none">
                    <a class="nav-link" href="<?php echo $baseUrl . 'contact.php'; ?>">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Company
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 contact-block d-flex justify-content-center pt-1">
            <ul class="contact-wrapper"></ul>
                <li class="contact-no nav-item nav-link">+00 123 456 789</li>
                <li class="contact-us buttons nav-item nav-link">
                    <a class="btn btn-primary nav-btn nav-link" href="<?php echo $baseUrl . 'contact.php'; ?>">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>