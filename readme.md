This project is developed in laravel 5.4. It contain login form signin.

INSTALLATION
download or clone the repository
using git you can clone it by running git clone https://www.github.com/richiekaby/flash laravel-5.4
place the folder inside your xampp/htdocs/
using CMD navigate to your directory and type php artisan serve 
open your browser and type the following url localhost:8000
Run the code and fill in to see the validation
The code is well commented the code for better understanding

LOGIC
Inside the views we have created two files 
The first one is template.blade.php which loads all css and js
The second file is login.blade.php which contains the login panel code
When you click signin the form is directed to route loginFlash which directs it to signincontroller.php
Inside SigninController.php we have a function called create which receives the input and validates it.
