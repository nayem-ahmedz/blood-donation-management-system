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
    <base href="/blood-donation-management-system/">
    <link rel="stylesheet" href="styles.css">
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
                    <li> <a href="index.php">Home</a> </li>
                    <li> <a href="pages/donations.php" class="active-link">Donations</a> </li>
                    <li> <a href="pages/inventory.php">Inventory</a> </li>
                    <li> <a href="pages/appointments.php">Appointments</a> </li>
                    <li> <a href="pages/reports.php">Reports</a> </li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="content-area">
            <h2>Donations</h2>
            <table>
              <tr>
                <th>Donor Name</th>
                <th>Date</th>
                <th>Amount</th>
              </tr>
              <tr>
                <td>Hajifa Jui</td>
                <td>2024-01-25</td>
                <td>500 ml</td>
              </tr>
              <tr>
                <td>Nayem Ahmed</td>
                <td>2024-01-27</td>
                <td>450 ml</td>
              </tr>
              <tr>
                <td>Mahmud Hasan</td>
                <td>2024-01-31</td>
                <td>500 ml</td>
              </tr>
              <tr>
                <td>Udoy Row</td>
                <td>2024-02-1</td>
                <td>450 ml</td>
              </tr>
            </table>
        </div>
    </section>
    <footer>
        <div class="wrapper">
            <p>
                View <a href="/originalProjectFiles/index.html" target="_blank" title="Created during DBMS course back in 2nd semester">Origianl Project</a>
            </p>
            <p>
                © <span id="pYear"></span> Blood Donation Management System. All rights reserved.
            </p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
