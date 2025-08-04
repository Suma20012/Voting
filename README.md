Online Voting System
This is a simple online voting system built using PHP and MySQL.

Project Files
bjp.png: An image file representing the logo of the Bharatiya Janata Party (BJP).

aap.jpg: An image file representing the logo of the Aam Aadmi Party (AAP).

congress.png: An image file representing the logo of the Indian National Congress.

.gitattributes: This file is used to manage how Git handles different types of files, specifically enabling LF normalization for text files.

connection.php: This script establishes a connection to a MySQL database named polltest with the username root and no password.

header.php: This file contains the HTML header for the website, including links to the Home, Register, and Login pages. It also sets the background image and styles for the body and a circular border for images.


footer.php: This file contains a simple footer for the web pages.

auth.php: This script checks if a user is logged in by verifying the existence of a session variable SESS_NAME. If the session variable is not set, it redirects the user to login.php.

change_pass.php: This page provides a form for users to change their password. It includes fields for the current password, a new password, and confirming the new password. The form submits data to change_pass_action.php.

change_pass_action.php: This script handles the password change logic. It retrieves the user's current password from the database and compares it to the password entered in the form. It also checks if the new password and confirm new password fields match. The passwords are encrypted using md5() before being stored in the database.

Setup Instructions
Database:

Create a MySQL database named polltest.

The connection.php file is configured to connect to localhost with the username root and an empty password. You may need to modify this file to match your database credentials.

Web Server:

Place all the project files in your web server's directory (e.g., htdocs for XAMPP or www for WAMP).

Access:

Navigate to the main page of the project in your browser. The header.php file suggests the main page is index.php.
