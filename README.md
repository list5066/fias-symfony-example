Установка локальной версии проекта
==================================



Краткий список команд для установки
-----------------------------------

* `git clone git@github.com:liquetsoft/fias-example.git fias`

* `cd fias/docker`

* `cp .env.dist .env`

* `docker-compose up -d --build`

* `docker-compose exec -u $UID php composer install`

* `docker-compose exec -u $UID php bin/console doctrine:migrations:migrate`

* открыть в браузере [http://localhost:8080/api](http://localhost:8080/api).



Подробное описание
------------------

Для запуска окружения проекта следует использовать Docker.

1. Установить последнюю стабильную версию [docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/), если она еще не установлена.

2. Установить последнюю стабильную версию [docker compose](https://docs.docker.com/compose/install/), если она еще не установлена.

3. Клонировать репозиторий с проектом.

4. Создать файл `.env` в папке `docker` в локальном склонированном репозитории, скопировать в него содержимое файла `.env.dist`, при необходимости заменить параметры:

    1. **важно для linux** чтобы `docker` не создавал все новый файлы от имени `root`, нужно обязательно изменить параметры `DOCKER_USER_ID` и `DOCKER_GROUP_ID` на идентификатор вашего пользователя и идентификатор его группы соответственно.

5. Перейти в консоли в папку `docker` в локальном склонированном репозитории и выполнить команду `docker-compose up -d --build`.

6. Установить зависимости `composer`:

    1. перейти в консоли в папку `docker` в локальном склонированном репозитории и выполнить команду `docker-compose exec php composer install`,

    2. **важно для linux** каждая команда `docker-compose exec` должна сопровождаться указанием пользователя, например, `docker-compose exec -u $UID php composer install`.

7. Применить миграции:

    1. перейти в консоли в папку `docker` в локальном склонированном репозитории и выполнить команду `docker-compose exec php bin/console doctrine:migrations:migrate`,

    2. **важно для linux** каждая команда `docker-compose exec` должна сопровождаться указанием пользователя, например, `docker-compose exec -u $UID php bin/console doctrine:migrations:migrate`.

8. Загрузить фикстуры:

    1. перейти в консоли в папку `docker` в локальном склонированном репозитории и выполнить команду `docker-compose exec php bin/console doctrine:fixtures:load`,

    2. **важно для linux** каждая команда `docker-compose exec` должна сопровождаться указанием пользователя, например, `docker-compose exec -u $UID php bin/console doctrine:fixtures:load`.

9. После запуска окружения и установки проект будет доступен по ссылке [http://localhost:8080/api](http://localhost:8080/api).

10. Для подключения к базе данных следует использовать:

    1. `host` - `postgres`,

    2. `database` - `symfony`,

    3. `login` - `symfony`,

    4. `password` - `symfonypass`.


11. Операции с `composer` следует выполнять через `docker-compose exec`:

    1. например, для установки библиотек следует использовать `docker-compose exec php composer install`,

    2. **важно для linux** каждая команда `docker-compose exec` должна сопровождаться указанием пользователя, например, `docker-compose exec -u $UID php composer install`.

12. Все операции с файлом `bin/console` следует выполнять через `docker-compose exec`:

    1. например, для применения миграций `docker-compose exec php bin/console doctrine:migrations:migrate`,

    2. **важно для linux** каждая команда `docker-compose exec` должна сопровождаться указанием пользователя, например, `docker-compose exec -u $UID php bin/console doctrine:migrations:migrate`.
