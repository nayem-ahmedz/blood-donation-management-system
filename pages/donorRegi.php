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
                    <li> <a href="pages/donations.php">Donations</a> </li>
                    <li> <a href="pages/inventory.php">Inventory</a> </li>
                    <li> <a href="pages/appointments.php">Appointments</a> </li>
                    <li> <a href="pages/reports.php">Reports</a> </li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="content-area">
            <div class="regiForm">
                <h2 style="text-align: center;">Registration</h2>
                <form>
                    <label for="fullname">Full Name:</label> <br>
                    <input type="text" id="fullname" name="fullname" required><br><br>
              
                    <label for="age">Age:</label> <br>
                    <input type="number" id="age" name="age" required><br><br>
              
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                      <option value="">Select</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select><br><br>
              
                    <label for="bloodgroup">Blood Group:</label>
                    <select id="bloodgroup" name="bloodgroup" required>
                      <option value="">Select</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                    </select><br><br>
                    <label for="contact">Contact Number:</label> <br>
                    <input type="text" id="contact" name="contact" required><br><br>
                    <label for="email">Email:</label> <br>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="address">Address:</label> <br>
                    <textarea id="address" name="address" required></textarea><br><br>
                    <input type="submit" value="Submit" id="regi-btn">
                  </form>
            </div>
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
    <script src="/script.js"></script>
</body>
</html>
