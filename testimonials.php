<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Testimonials</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<h2>Testimonials</h2>
<div id="content">
    <p>Here are some testimonials of our happy customers</p>
    <div class="collection-wrapper">

    <?php
    $sql = "select * from testimonials";

    /** @var TYPE_NAME $dbh */
    $result = $dbh->query($sql);
    foreach ($result as $row) {
        //  print_r($row);
        echo "<div class=\"testi\"><img  src=", $row['image'], " alt='profile' /><blockquote>\n<p><em class='classic'>&quot;", $row['testimonial'], "&quot;</em> - <p>  <strong class='customer-name'>— ", $row['customer'], "</strong></p>";

        echo "</p>\n</blockquote>\n<br>";
        echo "</div>";
    }
    ?>
</div>
<p>&nbsp;</p>
<?php include("inc_footer.php"); ?>
</body>
</html>
