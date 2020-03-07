# RESTful API and DDD sample with Laravel


## Installation
- Copy `.env` file from `.env.example`, and modify `DB_HOST` and `DB_PASSWORD` according to your envirnoment.
- Follow the steps below.
```
composer install
php artisan migrate
php artisan db:seed
```

## Architecture
<img src=https://user-images.githubusercontent.com/6086624/75080300-f685df00-554e-11ea-9025-543bd167116e.png width=250>

## Directory structure
```
src/
└── Demo
    ├── Application
    │   └── UseCase
    │       └── UserUseCase.php
    ├── Domain
    │   ├── Exception
    │   │   └── InvalidDomainException.php
    │   ├── Model
    │   │   ├── DateOfBirth.php
    │   │   ├── Email.php
    │   │   ├── Gender.php
    │   │   ├── Name.php
    │   │   └── User.php
    │   └── Repository
    │       └── UserRepositoryInterface.php
    ├── Infrastructure
    │   ├── Eloquent
    │   │   └── UserEloquent.php
    │   ├── InfrastructureProvider.php
    │   ├── Repository
    │   │   └── UserRepository.php
    │   └── Translator
    │       └── UserTranslator.php
    └── Presentation
        ├── Controllers
        │   ├── ApiController.php
        │   └── UserController.php
        └── Resources
            └── UserResource.php

```
