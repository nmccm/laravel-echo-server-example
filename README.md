# laravel-echo-server-example

라라벨(5.7) 에코서버 샘플 프로젝트이며, 최초 Git Clone 이후 아래의 명령어를 수행해주어야 한다.

> Webserver Port 는 8003 으로 설정되어 있어야 하며, 다른 포트 사용시 laravel-echo-server.json 의 authHost 를 수정해주어야 한다. 

> Require : npm, nodejs, composer, xampp

```bash
$ git clone https://github.com/nmccm/laravel-echo-server-example.git
$ cd laravel-echo-server-example
$ composer install
$ cp .env.example .env
$ php artisan key:generate
```

add line (.env)

```bash
LARAVEL_ECHO_PORT=6001
```

modiey line (.env)

```bash
BROADCAST_DRIVER=redis // default = log
```

http://localhost:8003

Reference URL : https://nmccm.github.io/framework/laravel/php/laravel-echo-server/laravel8-echo/
