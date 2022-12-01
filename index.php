<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/0345135d49.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <!-- external css -->
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Job Description</title>
</head>

<body onload='document.form1.fname.focus()'>
    <?php
    // search section
    include "sections/search-section.php";
    // header section
    include "sections/header-section.php";
    // career apply section
    include "sections/career-apply-section.php";
    // footer
    include "sections/footer.php";
    ?>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src="assets/scripts/career-apply-script.js"></script>
    <script src="assets/scripts/form1.js"></script>
    <script src="assets/scripts/form2.js"></script>
    <script src="assets/scripts/form3.js"></script>
    <script src="assets/scripts/form4.js"></script>
</body>

</html>