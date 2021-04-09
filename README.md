# PI-dev symfony
The vendor folder is in the .gitignore therefore, you won't find it. 

Run the command : composer instlal within your project to install all bundles that came in and make sure to change the email and password in the config/packages/dev/swiftmailer.yaml to yours. 



//database configuration : 
make sure to change the port number in the .env file to the port your server is using.
if you want to test this project, create a database kiftrip and  run the command : 

php bin/console doctrine:schema:update --force    

to upload the entities to your database.  


