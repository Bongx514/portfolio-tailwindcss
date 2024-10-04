<?php
    // Include the script to get experience data
    $experienceData = include('../../../../backend/module-experience/get-experience-data.php');
    $currentDate = date('YYYY-MM-DD');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/input.css">
    <link rel="stylesheet" href="css/_experience.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bongx514.Dev</title>
</head>

<body>

    <!-- navbar -->
    <?php include('../template/navbar.html')?>
    <!-- end navbar-->

    <!-- experience -->
    <?php include('../template/experience-view/experience-view.php')?>
    <!-- end experience -->
    
    <!-- footer -->
    <?php include('../template/footer.html')?>
    <!-- end footer -->

    <button id="scrollBtn" onclick="topFunction()"><i class="fa-solid fa-circle-up fa-2x"></i></button>

    <!-- plug in scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--  -->
    <script src="../../web/js/scrollScript.js"></script>
    <script src="../../web/js/script.js"></script>
</body>