<?php
    $errors = [];

    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
        if (strlen($_POST['name']) < 2) {
            $errors['name'] = 'The name should be at least 2 characters long.';
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'You need to enter a valid email address.';
        }

        if (strlen($_POST['message']) < 10) {
            $errors['message'] = 'The message should be at least 10 characters long.';
        }

        if (empty($errors)) {
            // send mail here...
            
            if (str_contains(getallheaders()['Accept'], 'text/vnd.turbo-stream.html')) {
                header('Content-Type: text/vnd.turbo-stream.html');

                require_once 'streams/contact.success.php';
                die;
            }

            $_SESSION['success'] = "Message sent! We'll get back to you very soon";
            
            http_response_code(303);
            header('Location: /');
            die;
        } else {
            http_response_code(422);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="css/app.css">

    <script type="module" src="https://cdn.skypack.dev/@hotwired/turbo"></script>
</head>
<body>
    <?php require_once 'partials/_nav.php'; ?>
    <?php require_once 'partials/_flash_messages.php'; ?>

    <h1>Contact</h1>

    <div id="contact_form">
        <form action="/contact" method="post">
            <div>
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" placeholder="Ex: John Doe" required value="<?= $_POST['name'] ?? '' ?>">
                <?php if (isset($errors['name'])): ?>
                    <div class="error-message"><?= $errors['name'] ?></div>
                <?php endif; ?>
            </div>

            <div>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" placeholder="Ex: johndoe@example.com" required value="<?= $_POST['email'] ?? '' ?>">
                <?php if (isset($errors['email'])): ?>
                    <div class="error-message"><?= $errors['email'] ?></div>
                <?php endif; ?>
            </div>

            <div>
                <label for="message">Name:</label><br>
                <textarea name="message" id="message" placeholder="Please enter your message here..." required><?= $_POST['message'] ?? '' ?></textarea>
                <?php if (isset($errors['message'])): ?>
                    <div class="error-message"><?= $errors['message'] ?></div>
                <?php endif; ?>
            </div>

            <div>
                <button type="submit" formnovalidate>Send</button>
            </div>
        </form>
    </div>
</body>
</html>
