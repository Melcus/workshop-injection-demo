### Vulnerable Lumen App

This application contains critical security vulnerabilities, DO NOT deploy or run this application outside of your localhost (or expose your localhost while running this)

```shell script
nginx 1.17.7
php 7.4.1
mysql 8
```

Run `make start` and access @ `http://localhost:5820`

To run the migrations:

- ssh into the container with `docker exec -it inj-app bash`
- run `php artisan migrate:fresh --seed`