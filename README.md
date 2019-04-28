### Steps to install

1) Run containers
```shell
docker-compose up -d
```

2) Install dependnecies 
```shell
docker run --rm -v $(pwd):/app composer install
```

3) Fix permisions
```shell
sudo chown -R $USER:$USER ~/laravel-app
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
```

4) Generate a key with artisan
```shell
docker exec -it <container-name> /bin/bash
php artisan key:generate
```