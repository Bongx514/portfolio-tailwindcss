<!DOCTYPE html>
<html lang="en">
<?php include('../../../libraries/bootsrap.html') ?>
<?php include('../../../libraries/icons.html') ?>
<link rel="stylesheet" href="sidebar/src/web/css/_sidebar.css">
<link rel="stylesheet" href="web/css/_experience-form.css">
<body>

    <?php include('sidebar/src/template/sidebar.html') ?>

    <form action="../../backend/module-admin/post-experience.php" method="POST">
        <div class="inner-form">
            <div>
                <h1 class="header">Experience Form</h1>
            </div>

            <div class="mb-6">
                <label for="experience_title" class="form-label">Experience Title</label>
                <input type="text" class="form-control" id="experience_title" name="experience_title" placeholder="Administrator">
            </div>

            <div class="mb-6">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company .inc">
            </div>

            <div class="mb-6">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" placeholder="">
            </div>

            <div class="mb-6">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" placeholder="">
            </div>

            <div class="mb-3">
                <label for="experience_description" class="form-label">Experience Description</label>
                <textarea class="form-control" id="experience_description" name="experience_description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="duties" class="form-label">Duties</label>
                <textarea class="form-control" id="duties" name="duties" rows="3"></textarea>
            </div>

            <div class="mb-6">
                <label for="companyImg" class="form-label">Company Image Path</label>
                <input type="text" class="form-control" id="companyImg" name="companyImg" placeholder="c:/path/to/image">
            </div>

            <input class="btn btn-primary" type="submit" value="Add New Record">
        </div>
    </form>

    <script src="sidebar/src/web/js/sidebar.js"></script>
</body>
</html>
