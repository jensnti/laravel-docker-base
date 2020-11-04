# Laravel Docker base

```git clone 

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

.env
FILESYSTEM_DRIVER=public

```
php artisan storage:link
```

Viktigt med passwd

```php
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
```

```sql
select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id;
```
