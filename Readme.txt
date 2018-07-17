
Manehmos is developed using Laravel framework.

Testing Manehmos in the local hosting server.

make sure you have XAMP server installed in your system.

NB: Copy both folders Manehmos2 and temp in the same parent directory in your local server folder.

STEP ONE (creating the system databases.)

1. Create a database named manehmos

2. Open the .env file under the folder Manehmos2 and assign the database user name in DB_USERNAME; eg DB_USERNAME=emma

3. Import the sql in the file named manehmos.sql found in the Manehmos2 directory

    when successfull imported, the admin password with name is Manehmos Super Administrator and the password is ROwHikbeftyawW8

4. In linux system run the command sudo chmod -R 777 ./path_to_the_parent_directory containing Manehmos2 and temp folders in order to allow system the writting access. 

5. Navigate from the document root of your localhosting server to Manehmos2/public/index.php in the browser to start the web application
	when the login popped up, enter the credentials in 3 above. After successfully login you should create your new admin account with valid email address
    you have access to, the valid clinic name.

In order to access the modules for the clinical attendant, then create a user with the position Clinical attendant
and for modules of doctor or health expert set the position of the user as Doctor

NB: Each module has its own features depending on the role of the user as explained on the report submitted. Manehmos actors are System Admin for managing
    user accounts, Clinical attendant(clinician) and Doctor/Health expert.
