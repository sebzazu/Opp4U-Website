# Opp4U-Website
Website that allows NCAA student athletes to submit information that Potential Sponsors can view. Sponsors can create account and login. Javascript, PHP, HTML and mySQL.

It is now allowed for NCAA athletes to sell their name, image, and likeness to sponsors. This website allows student athletes in search of sponsorships to submit their 
information to a databse which can be accessed by registered sponsors. Sponsors can create an account which contains the three sports they wish to sponsor most. 
Upon logging in, sponsors are presented with data organized by their sports preferences. Plans to add metrics such as "school", "region", "age", "national ranking"
in order to filter student data more specifically and increase chances of mutually favorable matches.

Page reference tree:

"frontpage.html" references "sponsor-create.html", "student-form.html", "sponsor-login.html". 

-"sponsor-create.html" sends to "connect-sponsors.php" which uploads data to mySQL database "Project_Database", table "sponsors"
-"student-form.html" sends to "connect-students.php" which uploads data to mySQL database "Project_Databse", table "students"
-"sponsor-login.html" sends to "connect-login.php" which pulls data from mySQL database "Project-Database", table "sponsors" and checks against form submission
-"connect-login.php" references "sponsor-page.php"

--"sponsor-page.php" pulls data from mySQL database "Project_Database", table "students" and checks against table "sponsors" and form submission to display relevant data

