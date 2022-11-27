
## Overview
This project is developed using Laravel 9, to learn about it see the official [documentation](https://laravel.com/docs) and Using Vue as a frontend that supported with laravel, see the Official [documentation](https://laravel.com/docs/9.x/frontend#inertia).
This project style is using Tailwind, to contribute this project please see the official [documentation](https://tailwindcss.com/docs/).
## How To Run
This project can run if you have all system below:
- PHP 8.0.2
- Node 14
- Mysql

and set the .env.example and adjust it with your current device setup.
After that you can run this project with command

```
php artisan serve
```

and then migrate the database schema
```
php artisan migrate
```

when you want to start developing frontend, please run the command below to compile and watch the javascript
```
npm installl
```
then
```
npm run dev
```



## Run with Docker (Recommended)
If you have Docker & Docker Compose installed, you can use command below to start di project
```
./vendor/bin/sail up
```

and then migrate the database schema
```
./vendor/bin/sail artisan migrate
```

when you want to start developing frontend, please run the command below to compile and watch the javascript
```
./vendor/bin/sail npm installl
```
then
```
./vendor/bin/sail npm run dev
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
