## Set up task manager
This is the public repo for the task manager built as an assessment for Coalition Technologies
With a good knowledge of Laravel and PHP, you should be able to conviniently find your way around this project
Because of time contraint, only this version is available yet, with time the other features will be added to it.
See the installation steps below

## :rocket: Installation

#### 1. Clone the project

via HTTPS:
```
git clone https://github.com/jmkolawole/task-manager.git
```

#### 2. Install Dependencies With Composer
Change directory to your project folder and run:
```
composer install
```

#### 3. Setup Environment Configuration
Create a _.env_ file from _.env.example_ file provided in the cloned project
```
cp .env.example .env
```
Create a _.env.testing_ file from _.env.testing.example_ file provided in the cloned project
```
cp .env.testing.example .env.testing
```

#### 4. Generate App Key
```
php artisan key:generate
```

#### 5. Run Migration and Seeders for the application

```
php artisan migrate --database=mysql
```

Cheers! You have successfully setup the task manager on your local machine.
:+1: :+1: :+1:

## :Task Manager: Built With

* [Laravel](http://laravel.com/docs/)
* [Composer](https://getcomposer.org/)

