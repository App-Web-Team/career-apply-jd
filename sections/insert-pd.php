<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "career-apply");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }


        // Taking all 5 values from the form data(input)
        $position = $_REQUEST['position'];
        $jobId = $_REQUEST['jobId'];
        $first_name = $_REQUEST['fname'];
        $last_name = $_REQUEST['lname'];
        $phNo = $_REQUEST['phNo'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $state = $_REQUEST['state'];
        $pincode = $_REQUEST['pincode'];
        $certifications = $_REQUEST['certifications'];
        $year = $_REQUEST['year'];
        $pb = $_REQUEST['pb'];
        $eSalary = $_REQUEST['eSalary'];
        $ePosition = $_REQUEST['ePosition'];
        // $resume = $_REQUEST['resume'];

        $degree = $_POST['degree'];
        $degrees = implode(",", $degree);
        $college = $_POST['college'];
        $colleges = implode(",", $college);
        $yog = $_POST['yog'];
        $yogs = implode(",", $yog);
        $cgpa = $_POST['cgpa'];
        $cgpas = implode(",", $cgpa);

        $certifications = $_POST['certifications'];
        $certificationss = implode(",", $certifications);
        $year = $_POST['year'];
        $years = implode(",", $year);
        $pb = $_POST['pb'];
        $pbs = implode(",", $pb);


        // $coldDrinks = $_POST['colddrinks'];
        foreach ($yog as $eachYog) {
            echo $eachYog . "<br/>";
        }

        $designation = $_POST['designation'];
        $designations = implode(",", $designation);
        $company = $_POST['company'];
        $companys = implode(",", $company);
        $experience = $_POST['experience'];
        $experiences = implode(",", $experience);
        $ctc = $_POST['ctc'];
        $ctcs = implode(",", $ctc);

        foreach ($designation as $eachDes) {
            echo $eachDes . "<br/>";
        }

        $skills = $_POST['skills'];
        $skillss = implode(",", $skills);
        $yip = $_POST['yip'];
        $yips = implode(",", $yip);

        $fileName = $_FILES["myFile"]["name"];
        $fileSize = $_FILES["myFile"]["size"];
        $tmpName = $_FILES["myFile"]["tmp_name"];

        $validImageExtension = ['pdf', 'docx'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;

        if (!in_array($imageExtension, $validImageExtension)) {
            echo
            "
                <script>
                alert('Invalid Image Extension');
                </script>
            ";
        } else if ($fileSize > 1000000) {
            echo
            "
                <script>
                alert('Image Size Is Too Large');
                </script>
            ";
        }
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO career_apply_jd (jobId, position, fname, lname, phNo, email, address, state, pincode, degree, college, yog, cgpa, certifications, year, pb, designation, company, experience, ctc, skills, yip, eSalary, ePosition, myFile)
        VALUES ('$jobId', '$position', '$first_name', '$last_name', '$phNo', '$email', '$address', '$state', '$pincode','$degrees', '$colleges', '$yogs', '$cgpas', '$certificationss', '$years', '$pbs', '$designations', '$companys', '$experiences', '$ctcs', '$skillss', '$yips', '$eSalary', '$ePosition', '$newImageName')";


        if (mysqli_query($conn, $sql)) {
            header('Location: ../index.php');
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>