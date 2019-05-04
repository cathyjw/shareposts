# Shareposts
It is based on the PHP and MVC project, shareposts, creating by Brad Traversy.
## Installation
Environment 
* PHP 7.3.4
* MySQL 8.0.16

### Install XAMPP
Download XAMPP for Windows at https://www.apachefriends.org/index.html and install following the struction.
Run XAMPP by administrator
Click service installation of Apache and MySQL
Click start of Apache and MySQL
### Modify apache of XAMPP
Click Config button after Apache and open httpd.conf
Change DocumentRoot to the folder of the website
Change Directory to the same folder with DocumentRoot
### Clone shareposts
git clone shareposts to DocumentRoot folder
### Run the website
http://localhost
## Explanation
Explain each part(folder or file) in the structure
### app folder
It contains MVC structure.
 1. libraries folder
    * Core.php - Extract the controller, controller's method and parameters from URL. Then Loading the corresponding file in controllers folder.
    * Controller.php - Load model and view
    * Database.php - PDO (PHP Data Objects): connect the database, create functions (prepare, bind, excute, fetch result, count result) and return result.
 2. helpers folder
    * url_helper.php: redirect helper (such as redirect to login after register successful)
    * session_helper: Used to shows the message after operation. (such as register successful, post add...)
 3. config folder
    * config.php: database parameters
 4. model 
    * Post.php - queries to add, edit, delete and search
    * User.php - queries to let users register and login
 5. view (webpage show on browser)
    * inc - footer, header and navbar
    * pages - homepage and index
    * posts - add, edit, delete and show posts
    * users - login and register
 6. controller 
     * Pages.php - functions for Homepage and About page
     * Users.php - functions for users to register or login
     * Posts.php - fuctions for users to add, delete or update the post
 7. bootstrap.php: require some important file: config, helper, files in libraries folder. (not the open source toolkit)
 8. .htaccess: Hide directories in browser 
### public folder
It bases on front-end application. The HTML, CSS and JavaScript can be added in here. It contain the index.php file.
 1. index.php file - main index file
 2. .htaccess file - Model rewrite module: When URL is shareports/public/undefined_position, it will go through shareports/public/index.php
### .htaccess file
Direct "shareports/" to "shareports/public/"

## Singleton and Factory
I just find the original structure did not contain singleton. I modify shareposts/app/libraries/database.php. I think it used singleton now. I also think the original shareports/app/libraries/controller.php used factory. I still work on that. I will upload if I have new finding.
