## RESTful API and DDD with Laravel


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
