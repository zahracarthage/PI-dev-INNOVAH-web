# PI-dev symfony
The vendor folder is in the .gitignore therefore, you won't find it. 

Run the command : composer install within your project to install all bundles that came in.

----------------------------
Mailer : 
sure to change the email and password in the config/packages/dev/swiftmailer.yaml to yours. 

----------------------------
//database configuration : 
Make sure to change the port number in the .env file to the port your server is using.
if you want to test this project, create a database kiftrip and  run the command : 

php bin/console doctrine:schema:update --force    

To upload the entities to your database.  
---------------------------
The main route in the project is pointing on profile, however since this is not a deployed project, the database is empty and you'll have to sign up in order to be let in. 

Make sure to sign up through this route http://127.0.0.1:PORT_NUMBER/inscription



----------------------------
General questions : zahracarthage.chouchene@esprit.tn


