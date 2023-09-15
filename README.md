# Authors-example

Rest Api by using Lumen 7 from Laravel
- authentication by email and password
- crud function for authors

# usage

```bash
$ composer install
```
## Generate data

```bash
$ php artisan migrate:fresh
$ php artisan migrate
$ php artisan db:seed
```

## Run

Run by apache and mysql or by:
```bash
$ php -S localhost:8000 -t public
```

# Endpoints
- Send a GET request to: http://localhost:8000/api/login/ along with the email and password parameter

- Get all authors - GET /api/authors
- Get one author - GET /api/authors/23
- Create an author - POST /api/authors
- Edit an author - PUT /api/authors/23
- Delete an author - DELETE /api/authors/23