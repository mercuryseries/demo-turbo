<?php if (isset($_SESSION['success'])): ?>
    <div class="alert-success">
        ...
        <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
    </div>
<?php endif; ?>
