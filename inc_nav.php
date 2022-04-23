<nav>
  <ul>
    <li <?php if ($name == "index") echo 'class="current"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li <?php if ($name == "advisors") echo 'class="current"'; ?>><a href="advisors.php"><span class="glyphicon glyphicon-star"></span> Advisors</a></li>
    <li <?php if ($name == "samples") echo 'class="current"'; ?>><a href="samples.php"><span class="glyphicon glyphicon-comment"></span> Sample Advice</a></li>
    <li <?php if ($name == "subscribe") echo 'class="current"'; ?>><a href="subscribe.php"><span class="glyphicon glyphicon-shopping-cart"></span> Subscribe Now</a></li>
    <li <?php if ($name == "locations") echo 'class="current"'; ?>><a href="locations.php"><span class="glyphicon glyphicon-map-marker"></span> Locations</a></li>
    <li <?php if ($name == "testimonials") echo 'class="current"'; ?>><a href="testimonials.php"><span class="glyphicon glyphicon-check"></span> Testimonials</a></li>
  </ul>
</nav>
