## RESTful API and DDD with Laravel


## Installation
- Copy `.env` file from `.env.example`, and modify `DB_HOST` and `DB_PASSWORD` according to your envirnoment.
- Follow the steps below.
```
composer install
php artisan migrate
php artisan db:seed
```

### Directory structure
```
├── Application
│   └── UseCase
│       └── UserUseCase.php
├── Domain
│   └── Model
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
    │   └── UserController.php
    └── Resources
        └── UserResource.php
```
