<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Management System</title>
    <link rel="icon" href="/assets/favicon.ico">
    <meta name="author" content="Nayem Ahmed">
    <meta name="description" content="Project 1, Blood Donation Management System, created by Nayem Ahmed. This is a modified and completely updated version. Origianally created for a project submission for DBMS course during 3rd Semester at Metropolitan University.">
    <meta name="keywords" content="bdms, blood donation, blood donation system, blood donation management system, project, database management system, web project, nayem, nayem ahmed, nayemscanvas">
    <link rel="stylesheet" href="styles.css">
    <base href="/blood-donation-management-system/">
</head>
<body>
    <header>
        <div class="header-cont wrapper">
            <div class="header-left">
                <h1>Blood Donation Management System</h1>
                <p>Donate Blood, Save life!</p>
            </div>
            <nav>
                <div class="nav-bar">
                    <div class="n-container" onclick="toggleNav(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
                <ul class="top-nav">
                    <li> <a href="index.php" class="active-link">Home</a> </li>
                    <li> <a href="pages/donations.php">Donations</a> </li>
                    <li> <a href="pages/inventory.php">Inventory</a> </li>
                    <li> <a href="pages/appointments.php">Appointments</a> </li>
                    <li> <a href="pages/reports.php">Reports</a> </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="clearfix homepage">
        <div class="wrapper">
            <main>
                <div class="details">
                    <h1>Welcome to Blood Donation Management System !</h1>
                    <p>Manage blood donors, donations, inventory, appointments, and generate reports.</p>
                    <button onclick="document.location='pages/donorRegi.php'" id="donate-btn">
                        Donate
                    </button>
                </div>
            </main>
            <aside>
                <div class="sidebar">
                    <form id="home-login">
                        <p style="text-align: center;">Account</p>
                        <input type="text" id="username" name="username" placeholder="email" required>
                        <input type="password" id="password" name="password" placeholder="password" required>
                        <input type="submit" value="Log in" id="h-signin">
                        <a href="pages/sign-up.php" id="h-btn2">Create a New Account</a>
                    </form>
                </div>
            </aside>
        </div>
    </section>
    <footer>
        <div class="wrapper">
            <p>
                View <a href="originalProjectFiles/index.html" target="_blank" title="Created during DBMS course back in 2nd semester">Origianl Project</a>
            </p>
            <p>
                © <span id="pYear"></span> Blood Donation Management System. All rights reserved.
            </p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>