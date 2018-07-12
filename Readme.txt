
Manehmos is developed using Laravel framework.

Testing Manehmos in the local server.

make sure you have XAMP or WAMP server and composer installed in your system.

STEP ONE (creating the system databases.)

1. Create a database named manehmos

2. Open the .env file under the folder Manehmos2 and assign the database user name in DB_USERNAME; eg DB_USERNAME=emma

3. Import the sql in the file named manehmos.sql found in the Manehmos2 directory

    when successfull imported, the admin password with name is Manehmos Super Administrator and the password is ROwHikbeftyawW8

4. Open the terminal under change directory up to ...../Manehmos2/

5. In terminal, write php artisan serve to serve Manehmos.

6. Go to browser and type http://127.0.0.1:8000/

in order to access the modules for the clinical attendant, then create a user with the position Clinical attendant
and for modules of doctor or health expert set the position of the user as Doctor