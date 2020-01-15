
# Travigo-api

API retrieves the Hotels Data

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

* PHP 7.0
* Mysql 7.5
* Composer (https://getcomposer.org/)



## Deployment

Execute the following command in your project root :

   
    Create your DB and change the credential in .env 
    composer install
    php artisan migrate
    php artisan db:seed
    php artisan serve


## Running the tests
  Execute the following command in your project root to install this library:

	./vendor/bin/phpunit 


### Postman collection
    https://www.getpostman.com/collections/43890dea7edeb5a0adeb

## Built With

* Laravel framework
* [PHPunit](https://phpunit.de/) Used to generate unit testing


##commits
* setup database structure and migration and seeder
* add apis with test
* add book api 

## Authors

* **Hoda Hussin** -- (https://github.com/hodaa)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
