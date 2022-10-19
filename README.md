## Laravel Websocket Demo Project

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:



## Requirements

PHP version 8.1
Node Version 16.17.0+

## Installation

### Create .env file with a copy of .env.example and configure for websocket
  BROADCAST_DRIVER=pusher
  QUEUE_CONNECTION=sync
  PUSHER_APP_ID=anything
  PUSHER_APP_KEY=anything
  PUSHER_APP_SECRET=anything
  PUSHER_HOST=127.0.0.1
  PUSHER_PORT=6001
  PUSHER_SCHEME=http
  PUSHER_APP_CLUSTER=mt1
And related Database configuration
### Install composer and npm
composer install
npm install
### Migrate Database
php artisan migrate
### Run
php artisan serve
npm run dev
php artisan websockets:serve

## Test
Open two tabs on browser and run each as below

http://localhost:8000?username=user1
http://localhost:8000?username=user2

Enjoy!


