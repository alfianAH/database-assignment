<?php
$title = "Basis Data 2";

$contentTitle1 = "Prinsip Kerja Pemrosesan Query dalam Basis Data";
$contentPreview1 = "";

$contentTitle2 = "Evaluation Plan";
$contentPreview2 = "";
?>

<html>
    <head>
        <title><?php echo($title); ?></title>
        <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
    </head>

    <body>
        <header>
            <div class="jumbotron">
                <h1><?php echo($title); ?></h1>
            </div>
        </header>

        <main>

            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="preview-title"><?php echo$contentTitle1; ?></h2>
                        <p class="preview-text"><?php echo$contentPreview1; ?></p>
                        <p><a class="btn btn-secondary" href="assignment1/index.html" role="button">View details &raquo;</a></p>
                    </div>

                    <div class="col-md-4">
                    <h2 class="preview-title"><?php echo$contentTitle2; ?></h2>
                        <p class="preview-text"><?php echo$contentPreview2; ?></p>
                        <p><a class="btn btn-secondary" href="assignment2/index.html" role="button">View details &raquo;</a></p>
                    </div>

                    <!-- <div class="col-md-4">
                        <h2 class="preview-title"><?php echo$contentTitle3; ?></h2>
                        <p class="preview-text"><?php echo$contentPreview3; ?></p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div>

                    <div class="col-md-4">
                        <h2 class="preview-title"><?php echo$contentTitle4; ?></h2>
                        <p class="preview-text"><?php echo$contentPreview4; ?></p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div> -->
                </div>
            </div> <!-- /container -->

        </main>

        <footer>
            <p><?php echo($title); ?></p>
        </footer>
    </body>
</html>