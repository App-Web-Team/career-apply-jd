<head>
    <link rel="stylesheet" href="assets/styles/style-career-apply.css">
</head>

<div id="apply-section" class="below-fullscreen">
    <div class="below-gradient-background">
        <div class="container py-5">
            <div class="row justify-content-center">
                <!-- side icons tab -->
                <div class="col-md-3 col-lg-2 p-0">
                    <div class="side-icons line d-flex justify-content-center flex-md-column">
                        <button class="zero first-icon active" disabled>
                            <div class="px-sm-4 py-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-white"></i>
                                    <i class="fa-solid fa-user fa-stack-1x"></i>
                                </span>
                            </div>
                        </button>

                        <button class="first second-icon" disabled>
                            <div class="px-sm-4 py-4 ">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-white"></i>
                                    <i class="fa-solid fa-graduation-cap fa-stack-1x"></i>
                                </span>
                            </div>
                        </button>
                        <button class="second third-icon" disabled>
                            <div class="px-sm-4 py-4 ">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-white"></i>
                                    <i class="fa-solid fa-briefcase fa-stack-1x"></i>
                                </span>
                            </div>
                        </button>
                        <button class="third fourth-icon" disabled>
                            <div class="px-sm-4 py-4 ">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-white"></i>
                                    <i class="fa-solid fa-thumbs-up fa-stack-1x"></i>
                                </span>
                            </div>
                        </button>
                    </div>
                </div>
                <!-- wrapper col -->
                <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 p-0">
                    <form class="wrapper" action="sections/insert-pd.php" method="post" enctype="multipart/form-data" name="form1" autocomplete="off" spellcheck="false">
                        <?php
                        echo '<div class="">';
                        include "sections/form-1.php";
                        echo '</div>';
                        echo '<div class="">';
                        include "sections/form-2.php";
                        echo '</div>';
                        echo '<div class="">';
                        include "sections/form-3.php";
                        echo '</div>';
                        echo '<div class="">';
                        include "sections/form-4.php";
                        echo '</div>';
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>