# Shareposts
It is based on the PHP and MVC project, shareposts, creating by Brad Traversy.
## Explanation
Explain each part(folder or file) in the structure
### app folder
It contains MVC structure.
 1. libarary folder
    * Core.php - Extract the controller, controller's method and parameters from URL. Then Loading the corresponding file in controllers folder.
    * Controller.php - Load model and view
    * Database.php - PDO (PHP Data Objects):
 2. helpers folder
    * url_helper.php: redirect helper
    * session_helper: 
 3. config folder
    * config.php: database parameters
 4. bootstrap.php: require all files in libarary folder. (not the open source toolkit)
 5. .htaccess: Hide directories in browser 
### public folder
It bases on front-end application. The HTML, CSS and JavaScript can be added in here. It contain the index.php file.
 1. index.php file - main index file
 2. .htaccess file - Model rewrite module: When URL is shareports/public/undefined_position, it will go through shareports/public/index.php
### .htaccess file
Direct "shareports/" to "shareports/public/"
