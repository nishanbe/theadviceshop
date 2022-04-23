<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Locations</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<h2>Locations</h2>
<div id="content">
    <p>Our locations are spread across the state. You're welcome visit the nearest store to you.</p>
    <div class="collection-wrapper">

        <?php
        $sql = "select * from locations";
        /** @var TYPE_NAME $dbh */
        $locs = $dbh->query($sql);
        foreach ($locs as $loc) {
//        print_r($locs);

            echo "<div class=\"location\"><iframe src=\"http://maps.google.com/maps?q=", $loc['address'], "&z=13&output=embed\" width=\"250\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>";
            if ($loc['id'] == 1)
                echo "<br><strong>(Headquarters)</strong>";
            echo "<p>", $loc['address'], "<strong>", "<br><br>Phone: ", $loc['phone'], "</strong>", "<br>Hours: ", $loc['hours'];

            echo "</p>\n
        </div>";
        }
        ?>
    </div>
</div>
<p>&nbsp;</p>
<?php include("inc_footer.php"); ?>
</body>
</html>
