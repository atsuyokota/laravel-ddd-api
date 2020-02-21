## RESTful API and DDD sample with Laravel


## Installation
- Copy `.env` file from `.env.example`, and modify `DB_HOST` and `DB_PASSWORD` according to your envirnoment.
- Follow the steps below.
```
composer install
php artisan migrate
php artisan db:seed
```

### Architecture
<img src=https://user-images.githubusercontent.com/6086624/75078907-431aeb80-554a-11ea-86e6-253e5a95925e.png width=300>
DIP: Dependency Inversion Principle

### Directory structure
```
src/
└── Demo
    ├── Application
    │   └── UseCase
    │       └── UserUseCase.php
    ├── Domain
    │   ├── Exception
    │   │   └── InvalidDomainException.php
    │   └── Model
    │       ├── DateOfBirth.php
    │       ├── Email.php
    │       ├── Gender.php
    │       ├── Name.php
    │       └── User.php
    ├── Infrastructure
    │   ├── Eloquent
    │   │   └── UserEloquent.php
    │   ├── InfrastructureProvider.php
    │   ├── Repositories
    │   │   ├── UserRepository.php
    │   │   └── UserRepositoryInterface.php
    │   └── Translator
    │       └── UserTranslator.php
    └── UI
        ├── Controllers
        │   ├── ApiController.php
        │   └── UserController.php
        └── Resources
            └── UserResource.php

```
