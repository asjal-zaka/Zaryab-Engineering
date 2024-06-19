<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5XPHMTPF3E"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5XPHMTPF3E');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaryab Engineering, Contracting & Trading (Pvt.) Ltd.</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="shortcut icon" href="clear.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/all.js"></script>
</head>

<body>
    <header>
        <div class="logo"><img src="clear.png" alt="Logo Of Zaryab Engineering, Contracting & Trading (Pvt.) Ltd.">
        </div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="index.html">Home</a>
                <div class=" dropdown">
                    <button class="dropbtn">About Us
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="http://zaryab.pk/company-profile.html" class="active">Company Profile</a>
                        <a href="http://zaryab.pk/message-from-c.e.o.html">Message From C.E.O</a>
                        <a href="http://zaryab.pk/vision-mission-values.html">Vision,Mission And Values</a>
                        <a href="http://zaryab.pk/organizational-chart.html">Organizational Chart</a>
                    </div>
                </div>
                <a href="http://zaryab.pk/qhse.html">QHSE</a>
                <a href="http://zaryab.pk/our-clients.html">Our Clients</a>
                <a href="http://zaryab.pk/projects.html">Projects</a>
                <a href="http://zaryab.pk/new-&-events.php">News And Events</a>
                <a href="http://zaryab.pk/contact.html">Contact Us</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
            </div>
        </nav>
    </header>
            <h2 class="blocks_heading">News & Events</h2>
    <?php
function generateNewsPost($date, $eventName, $quote, $imageLink, $altText) {
    echo '<div class="wrapper">';
    echo "<h2 class=\"date\">$date</h2>";
    echo "<p class=\"name\">$eventName <br> <span class=\"quote\">$quote</span></p>";
    echo "<img class=\"postImg\" src=\"$imageLink\" alt=\"$altText\">";
    echo '</div>';
}

// Load data from JSON file
$data = file_get_contents("news_data.json");
$events = json_decode($data, true);

// Check if JSON decoding was successful
if ($events !== null) {
    // Loop through the events array and generate news posts
    foreach ($events as $event) {
        $date = $event['Date'];
        $eventName = $event['Name'];
        $quote = $event['Description'];
        $imageLink = $event['Link'];
        $altText = $event['Alt'];

        generateNewsPost($date, $eventName, $quote, $imageLink, $altText);
    }
} else {
    echo "Failed to decode JSON data.";
}
?>

    <footer>
        <center>
            <a href="index.html">Home</a>
            <a href="sitemap.html">Sitemap</a>
            <a href="new-&-events.php">News & Events</a>
            <a href="contact.html">Contact</a>
        </center>
        <p>© Copyright Zaryab Engineering Contracting and Trading (Private) Limited <span class="year"></span></p>
    </footer>
    <!-- CDNS -->
    <!-- Scripts -->
</body>

</html>