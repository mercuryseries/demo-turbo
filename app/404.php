<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>

    <link rel="stylesheet" href="css/app.css">
    <script type="module" src="https://cdn.skypack.dev/@hotwired/turbo"></script>
</head>
<body>
    <?php require_once 'partials/_nav.php'; ?>
    <?php require_once 'partials/_flash_messages.php'; ?>
    <main class="main-content">
        <div class="jumbotron">
            <h1>404 Not Found 😜</h1>
            <p>
                Please go back <a href="/" class="btn-link">home</a>.
            </p>
        </div>
    </main>

</body>
</html>
