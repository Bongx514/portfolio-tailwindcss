<?php
    // Fetch user data from the database
    $userData = include('../../backend/contact_me/get-user-data.php');
    $currentDate = date('YYYY-MM-DD');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('../../../libraries/bootsrap.html') ?>
<?php include('../../../libraries/icons.html') ?>
<link rel="stylesheet" href="sidebar/src/web/css/_sidebar.css">
<link rel="stylesheet" href="web/css/_my-message.css">
<body>

    <?php include('sidebar/src/template/sidebar.html') ?>

    <div class="messages-body">
        <?php if (!empty($userData)): ?>
            <?php foreach ($userData as $user): ?>
                <div class="alert alert-success" role="alert">
                    <p class="date-created"><?= $user->getDateCreated()?></p>
                    <h4 class="user-name"><?= $user->getName()?></h4>
                    <h6 class="user-email"><?= $user->getEmail()?></h6>
                    <span class="user-messages"><?= $user->getMessage()?></span>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-warning" role="alert">
                <span>No new messages</span>
            </div>
        <?php endif; ?>
    </div>

    <script src="sidebar/src/web/js/sidebar.js"></script>
</body>
</html>
