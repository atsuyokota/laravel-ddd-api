# RESTful API and DDD sample with Laravel


## 環境構築
- Copy `.env` file from `.env.example`, and modify `DB_HOST` and `DB_PASSWORD` according to your envirnoment.
- Follow the steps below.
```
composer install
php artisan migrate
php artisan db:seed
```

## アーキテクチャー
- ドメイン層にレポジトリのインターフェイスを設置し、インフラストラクチャー層から依存するように実装しています。

<img src=https://user-images.githubusercontent.com/6086624/76143827-027caf80-60be-11ea-965a-fc3daa8422a8.png>

## ディレクトリ構成
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
