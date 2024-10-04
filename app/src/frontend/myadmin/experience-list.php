<?php
    // Include the script to get experience data
    $experienceData = include('../../backend/module-experience/get-experience-data.php');
    $currentDate = date('YYYY-MM-DD');
    $id = 0;
?>
<!DOCTYPE html>
<html lang="en">
<?php include('../../../libraries/bootsrap.html') ?>
<?php include('../../../libraries/icons.html') ?>
<link rel="stylesheet" href="sidebar/src/web/css/_sidebar.css">
<link rel="stylesheet" href="web/css/_experience-list.css">
<body>

    <?php include('sidebar/src/template/sidebar.html') ?>

    <div class="inner-form">
        <div>
            <h1 class="header">Experience List</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Company Name</th>
                <th scope="col">Start Date</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($experienceData)): ?>
                    <?php foreach ($experienceData as $experience): ?>
                        <?php $id++ ?>
                        <tr>
                            <th scope="row"><?php echo $id?></th>
                            <td><?php echo $experience->getTitle() ?></td>
                            <td><?php echo $experience->getCompanyName() ?></td>
                            <td><?php echo $experience->getStartDate() ?></td>
                            <td>
                                <a href="#" class="btn btn-danger" type="button">
                                    <?= "DELETE";?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                <?php else:?>
                    <tr>
                        <th scope="row"><?php echo $id?></th>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>
                            <a href="#" class="btn btn-danger disabled" type="button">
                                <?= "DELETE";?>
                            </a>
                        </td>
                    </tr>
                <?php endif?>
            </tbody>
        </table>
            
        <a href="experience-form.php" class="btn btn-primary" type="button">Add New Record</a>
    </div>

    <script src="sidebar/src/web/js/sidebar.js"></script>
</body>
</html>
