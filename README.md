# Laravel Docker base
```git clone

docker-compose up -d

docker run --rm -v $(pwd):/app composer install

sudo chown -R $USER:$USER .

docker-compose exec db bash

mysql -u root -p
```
```sql
CREATE USER 'laraveluser'@'%' IDENTIFIED BY 'Secret123';
GRANT ALL PRIVILEGES ON laravel.* TO 'laraveluser'@'%';
FLUSH PRIVILEGES;
```

```
docker-compose exec app php artisan migrate
```
