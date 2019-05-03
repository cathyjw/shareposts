# Shareposts
It is based on the PHP and MVC project, shareposts, creating by Brad Traversy.
## Explanation
Explain each part(folder or file) in the structure
### app folder
It contains MVC structure.
 1. libarary folder
    * Core.php - Extract the controller, controller's method and parameters from URL. Then Loading the corresponding file in controllers folder.
    * Controller.php - Load model and view
    * Database.php - PDO (PHP Data Objects): connect the database, create functions for query.
 2. helpers folder
    * url_helper.php: redirect helper (such as redirect to login after register successful)
    * session_helper: Used to shows the message after operation. (such as register successful, post add...)
 3. config folder
    * config.php: database parameters
 4. model 
 5. view 
 6. controller 
     * Pages.php - the homepage
     * Users.php - functions for users to register or login
     * Posts.php - fuctions for users to add, delete or update the post
 7. bootstrap.php: require some important file: config, helper, libraries. (not the open source toolkit)
 8. .htaccess: Hide directories in browser 
### public folder
It bases on front-end application. The HTML, CSS and JavaScript can be added in here. It contain the index.php file.
 1. index.php file - main index file
 2. .htaccess file - Model rewrite module: When URL is shareports/public/undefined_position, it will go through shareports/public/index.php
### .htaccess file
Direct "shareports/" to "shareports/public/"
