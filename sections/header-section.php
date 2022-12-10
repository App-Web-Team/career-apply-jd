<?php

include "db/connection.php";
$sql = "SELECT * FROM jds WHERE jdId='JPW22I-WD-1001'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $jdRole =  $row["jdRole"];
        $jdId =  $row["jdId"];
        $jdSummary =  $row["jdSummary"];
        $jdDesc =  $row["jdDesc"];
        $jdElig =  $row["jdElig"];
    }}


?>
                       

<head>
    <link rel="stylesheet" href="assets/styles/style-header.css">
</head>

<div class="fullscreen">
    <div class="gradient-background">
        <div class="container header-container py-3">
            <div class="row text-center text-sm-left justify-content-center justify-content-sm-between mt-4">
                <div class="col-10 col-xs-5 col-sm-6">
                    <p class="job-title text-capitalize">
                        
                        <!-- graphic designer -->
                        <?php echo $jdRole; ?>
                    </p>
                    <p class="job-id text-uppercase">
                        Job ID: <?php echo $jdId; ?>
                    </p>
                </div>
                <div class="col-10 col-xs-5 col-sm-6 mt-3 my-xs-auto d-sm-flex justify-content-sm-end">
                    <a href="#apply-section">
                        <button class="btn btn-danger text-capitalize">
                            apply now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container summary-container">
    <div class="row justify-content-center mt-5">
        <div class="col-10 col-sm-12">
            <p class="heading">
                job summary
            </p>
            <p class="content mt-4">
            <?php echo $jdSummary; ?>
            </p>
        </div>
        <div class="col-10 col-sm-12 col-md-6 jd-col mt-4">
            <p class="heading">
                job description
            </p>
            <ul class="mt-4">
                <li>Study design briefs and determine requirements</li>
                <li>Schedule projects and define budget constraints</li>
                <li>Conceptualize visuals based on requirements</li>
                <li>Prepare rough drafts and present ideas</li>
                <li>Develop illustrations, logos and other designs using software or by hand</li>
                <li>Use the appropriate colors and layouts for each graphic</li>
                <li>Work with copywriters and creative director to produce final design</li>
                <li>Test graphics across various media</li>
                <li>Amend designs after feedback</li>
                <li>Ensure final graphics and layouts are visually appealing and on-brand</li>
            </ul>
        </div>
        <div class="col-10 col-sm-12 col-md-6 mt-4">
            <p class="heading">
                Eligibilities
            </p>
            <ul class="mt-4">
                <li>2+ years of design and motion graphics experience at a creative agency or similar experience</li>
                <li>Excellent English written/verbal communication skills</li>
                <li>An available online portfolio that demonstrates visual design/Motion graphics skills.</li>
                <li>Proficiency in creative tools such as Photoshop, GIF Animation,Illustrator, Premiere pro and after effect</li>
                <li>Unwavering dedication to craft from idea to execution.</li>
                <li>Conceptualise and execute narrative storytelling ability.</li>
                <li>Willing to handle multiple projects in a fast-paced work environment, under tight deadlines.</li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center mt-4 mb-5">
        <a href="#apply-section">
            <button class="btn text-capitalize">apply now</button>
        </a>
    </div>
</div>