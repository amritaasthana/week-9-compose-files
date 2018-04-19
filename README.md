
You need to have Docker on your machine/VM.
The Docker Compose is used to run multi-container Docker applications. 
The directory structure is as follows:

/home/amas3682/week-9-compose-files
docker-compose.yml
Dockerfile

/home/amas3682/week-9-compose-files/dump
cloudDb.sql

/home/amas3682/week-9-compose-files/www
cloudtech.php


1) The app's environment is defined with a Dockerfile.

2)The services (web-server, database) are in docker-compose.yml which run together in an isolated environment.

3)"docker-compose up" command is used to start and run the app.

