## Requirements

PHP version 8.1 <br />
Node Version 16.17.0+ <br />

## Installation

### Create .env file with a copy of .env.example and configure for websocket
  BROADCAST_DRIVER=pusher <br />
  QUEUE_CONNECTION=sync <br />
  PUSHER_APP_ID=anything <br />
  PUSHER_APP_KEY=anything <br />
  PUSHER_APP_SECRET=anything <br />
  PUSHER_HOST=127.0.0.1 <br />
  PUSHER_PORT=6001 <br />
  PUSHER_SCHEME=http <br />
  PUSHER_APP_CLUSTER=mt1 <br />
And related Database configuration <br />
### Install composer and npm
composer install <br />
npm install
### Migrate Database
php artisan migrate
### Run
php artisan serve <br />
npm run dev <br />
php artisan websockets:serve

## Test
Open two tabs on browser and run each as below <br />

http://localhost:8000?username=user1 <br />
http://localhost:8000?username=user2 <br />

Enjoy!


