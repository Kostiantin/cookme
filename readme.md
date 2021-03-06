# Cookme Forum/Blog with Chat, Threads and Replies (Laravel 5.6)

This is a cooking forum/blog based on Laravel 5.6. Here you can register, make threads and give comments, write your blog posts and use a simple chat page based on: Laravel Echo, Vue and Pusher, where you can ask for help one of users.  
After installing, the site should look like this:  
  Home page:  
  ![home page](https://github.com/Kostiantin/cookme/blob/master/public/img/screenshots/home_page_en.png)  
  Recipes pages:  
    ![recipes page 1](https://github.com/Kostiantin/cookme/blob/master/public/img/screenshots/recipes_1.png)  
    ![recipes page 2](https://github.com/Kostiantin/cookme/blob/master/public/img/screenshots/recipes_2.png)  
      
  Chat page:  
  ![chat](https://github.com/Kostiantin/cookme/blob/master/public/img/screenshots/cookme_chat.png)    

This project can be used as a quick start for cooking forum/blog and chat for helping users during cooking.  
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

6) IMPORTANT, to make chat page work properly, you need to have your own registered Pusher API and then set credentials in the .env file:  
     PUSHER_APP_ID=  
     PUSHER_APP_KEY=  
     PUSHER_APP_SECRET  
     
   Also in the \resources\assets\js\bootstrap.js you will find these rows of code:  
     window.Echo = new Echo({  
         broadcaster: 'pusher',  
         key: 'Put your PUSHER api key here',  
         cluster: 'ap1',  
         encrypted: true  
     });  

7) To check the chat page you need to login with two seeded users in different browsers and go to your_site.com/chat url.  
   Please use these credentials to login with Chef:  
     login: admin@admin.com  
     password: admin  
     
   and Regular user credentials:  
     login: regular@regular.com  
     password: regular  
     
8) Later if you need to add or change translations you need to do 3 things:  
     a) work with file: /database/translations/cookme_translations.csv  
     b) run seeder with command:  
          php artisan db:seed --class=TranslationsTableSeeder  
     c) refresh translations cache with command:  
          php artisan translator:flush  
       
## Authors

* **Kostiantin Zavizion** - *Initial work* - [Kostiantin](https://github.com/Kostiantin)
