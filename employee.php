<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editable Anchors with Sidebar</title>
    <link rel="stylesheet" href="employee.css">
</head>
<body>

<!-- Sidebar using aside -->
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



    <!-- Main Content -->
    <div class="main-content">
        <h2>Employee</h2>
        <div id="message-box" class="message-box">Maximum of 20 anchors reached!</div>
        <div id="anchor-container" class="grid-container"></div>
        
        <!-- "Add Anchor" button with message beside it -->
        <div class="add-anchor-container">
            <button onclick="addAnchor()" class="add-anchor-btn">Add Employee</button>
            <span id="max-anchor-message" class="max-anchor-message">Maximum of 20 Employee reached</span>
        </div>

        <!-- Overlay and Edit Box -->
        <div id="overlay"></div>
        <div id="edit-box">
            <h3>Edit Employee</h3>
            <input type="text" id="edit-name" placeholder="Enter Name" />
            <input type="text" id="edit-position" placeholder="Enter Position" />
            <button onclick="saveAnchor()" class="save-btn">Save</button>
            <button onclick="closeEditBox()" class="cancel-btn">Cancel</button>
        </div>
    </div>

    <script src="script.js"></script>

</div>
</body>
</html>
