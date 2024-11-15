<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Page</title>
    <link rel="stylesheet" href="b2.css">
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
                <h2 class="section-title">Labaratory</h2>
                <br>

                <!-- Grid container to hold cards in two columns -->
                <div class="card-grid">
                    <!-- Left Column: Room 1 to Room 4 -->
                    <div class="column">
                        <!-- Room 1 -->
                        <a href="#" class="card-link">
                            <div class="employee-card">
                                <div class="employee-info">
                                    <div>NAME</div>
                                    <div>Computer Labaratory 1
                                    </div>
                                    <br>
                                    <div>IN SESSION</div>
                                </div>
                            </div>
                        </a>

                        <!-- Room 2 -->
                        <a href="#" class="card-link">
                            <div class="employee-card">
                                <div class="employee-info">
                                    <div>NAME</div>
                                    <div>Computer Labaratory 2</div>
                                    <br>
                                    <div>AVAILABLE</div>
                                </div>
                            </div>
                        </a>

                        <!-- Room 3 -->
                        <a href="#" class="card-link">
                            <div class="employee-card">
                                <div class="employee-info">
                                    <div>NAME</div>
                                    <div>Science Labaratory</div>
                                    <br>
                                    <div>IN SESSION</div>
                                </div>
                            </div>
                        </a>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
