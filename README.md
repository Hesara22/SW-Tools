# SW-Tools
AMS
Accommodation Management System is a website for managing accommodation bookings and reservations. It is designed to help students find and book accommodations for their academic year.

Users
There are four types of users in the system:

Admin
Can create users of type warden, landlord, and student.
Can create, edit articles.
Student
Can view available accommodations as advertisements.
Request for accommodation.
View articles posted by the admin.
Landlord
Can post advertisements for accommodations.
View requests for accommodations.
Warden
Must approve/reject advertisements posted by landlords.
Local Setup Guide
Follow these steps to host the project locally using XAMPP:

Step 1: Install XAMPP
Download and install XAMPP from the official website: XAMPP

Step 2: Create Database
Open phpMyAdmin by navigating to http://localhost/phpmyadmin in your browser.
Create a new database named ams_test_db.
Step 3: Import SQL Files
Locate the sql directory in the project repository.
Import the SQL files into the ams_test_db database. You can do this by:
Clicking on the ams_test_db database in phpMyAdmin.
Navigating to the Import tab.
Choosing the SQL files from the sql directory and clicking Go.
Step 4: Create User in phpMyAdmin
Create a new user with appropriate privileges for accessing the ams_test_db database in phpMyAdmin.
Step 5: Update Configuration File
Locate the app/backend/config.php file in the project repository.
Update the database and user details in the config.php file with the credentials you created in Steps 2 and 4.
Step 6: Copy Project Files to htdocs
Copy all the project files or clone the repository into the htdocs directory of your XAMPP installation. The htdocs directory is typically located at C:\xampp\htdocs on Windows or /Applications/XAMPP/htdocs on macOS.
Step 7: Update Base URL
Open the app/init.php file in the project repository.
Update the BASE_URL constant with the appropriate URL. For example, if your apache server is open on port 80 (which is the default port), the BASE_URL should be set as follows:
const BASE_URL = 'http://localhost:80/';
Step 8: Start Apache and MySQL Servers
Open the XAMPP Control Panel.
Start the Apache and MySQL servers by clicking on the Start button next to their respective services.
Step 9: Access the Project
Open your web browser and navigate to http://localhost:80.
