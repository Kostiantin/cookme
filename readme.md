# Project Title

This is a simple cooking blog based on Laravel 5.6. Here i also implemented a simple chat page based on: Laravel Echo, Vue and Pusher, where user can ask for help one of responsible chefs.  
After installing, the site should look like this:  
  Home page:  
  ![home page](https://github.com/Kostiantin/cookme/blob/master/public/img/screenshots/home_page_en.png)  
  Recipes pages:  
    ![recipes page 1](https://www.dropbox.com/s/vxxlxkkawxy5rjv/screencapture-cookme-int-en-recipes-simple-2018-06-24-14_04_05.png?dl=0 "recipes page 1")  
    ![recipes page 2](https://www.dropbox.com/s/wdr9pg4ra0vvylb/screencapture-cookme-int-en-recipes-breakfast-2018-06-24-14_03_33.png?dl=0 "recipes page 2")  
      
  Chat page:  
  ![chat page](https://www.dropbox.com/s/8crmb2jn7i4o1st/screencapture-cookme-int-en-chat-2018-06-24-15_10_52.png?dl=0 "chat page")  

This project can be used as a quick start for cooking blog and chat for helping users during cooking.  
Also translations on three languages were implemented for this project: English, Ukrainian and Russian.  

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

1) Pull the project;

2) Install the local site and database;

3) Change file .env.example to .env. Inside it assign database and connection credentials (user/password);

4) Run commands:  
     
     composer install  
     php artisan key:generate  
     php artisan config:cache  
     php artisan migrate --seed  
     npm install  
     npm run dev  
     php artisan translator:flush  
     
5) Try to go to the site via browser.

6) To check the chat page you need to login with two seeded users in different browsers and go to your_site.com/chat url.  
   Please use these credentials to login with Chef:  
     login: admin@admin.com  
     password: admin  
     
   and Regular user credentials:  
     login: regular@admin.com  
     password: regular  
     
## Authors

* **Kostiantin Zavizion** - *Initial work* - [Kostiantin](https://github.com/Kostiantin)
