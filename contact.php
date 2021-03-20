<?php

include('header.php');

$errors = array();

if (empty($_POST) === false) {

    if (empty($_POST['nameInput'])) {
        $errors['name_undefined'] = 'Please enter your name';
    }
    if (empty($_POST['emailInput'])) {
        $errors['email_undefined'] = 'Please enter your email, so that we could contact you';
    }
    if (empty($_POST['messageInput'])) {
        $errors['message_undefined'] = 'Please enter your message';
    }
    if (count($errors) === 0) {
        $name = $_POST['nameInput'];
        $email = $_POST['emailInput'];
        $topic = 'Žinutė iš tinklalapio';
        $message = $_POST['messageInput'];

        //echo "vardas: $name, emailas: $email, tema: $topic, zinute: $message";

        $additionalInfo = 'From: ' . $name . ' <' . $email . '>' . "\n";

        $sentTo = 'u.adomaityte98@gmail.com';
        mail($sentTo, $topic, $message, $additionalInfo);
    }
}

// print_r($errors);

// if (isset($errors['name_undefined'])) {
//     echo "vardo klaida";
// }

?>

<div class="contact-form">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center align-items-center g-3">
            <div class="col-lg-5 col-md-6 col-sm-11 col-11">
                <h1 class="text-center pt-3 pb-4">Contact Us</h1>
                <form action="contact.php" method="post">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Full name</label>
                        <input type="text" class="form-control <?php echo (isset($errors['name_undefined'])) ? 'is-invalid' : ''; ?>" id="nameInput" name="nameInput">
                        <?php
                            if (isset($errors['name_undefined'])) {
                                echo '<div class="invalid-feedback">';
                                echo $errors['name_undefined'];
                                echo '</div>';
                            }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email address</label>
                        <input type="email" class="form-control <?php echo (isset($errors['email_undefined'])) ? 'is-invalid' : ''; ?>" id="emailInput" name="emailInput">
                        <?php
                            if (isset($errors['email_undefined'])) {
                                echo '<div class="invalid-feedback">';
                                echo $errors['email_undefined'];
                                echo '</div>';
                            }
                        ?>
                    </div>
                    <div class="mb-4">
                        <label for="messageInput" class="form-label">Your message</label>
                        <textarea class="form-control <?php echo (isset($errors['message_undefined'])) ? 'is-invalid' : ''; ?>" id="messageInput" name="messageInput" rows="3"></textarea>
                        <?php
                            if (isset($errors['message_undefined'])) {
                                echo '<div class="invalid-feedback">';
                                echo $errors['message_undefined'];
                                echo '</div>';
                            }
                        ?>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary rounded-pill">Send now!</button>
                    <div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

include('footer.php');