<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Page</title>
    <link rel="stylesheet" href="room1.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar Section -->
        <aside class="sidebar">
            <div class="logo-container">
                <div class="logo"></div>
                <p class="logo-name">TeachTrack</p>
            </div>
            <nav class="nav-menu">
                <a href="b1.php">Building 1</a>
                <a href="b2.php">Building 2</a>
                <a href="lab.php">Labaratory</a>
                <a href="employee.php">Employee</a>

            </nav>
            <hr>
            <div class="settings">
            <a href="index.php">Log Out</a>
            </div>
        </aside>
      
        <div class="content">
            <div class="section">
                <h2 class="section-title">Room 1</h2>
                <br>
            </div>


            <div class="cctv-container">
    <h2>CCTV Feed</h2>
    <iframe src="YOUR_CCTV_STREAM_URL" class="cctv-feed" allowfullscreen></iframe>
</div>


        </div>
    </div>

</body>
</html>
