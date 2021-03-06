Установка локальной версии проекта
==================================



Краткий список команд для установки
-----------------------------------

* `git clone git@github.com:liquetsoft/fias-symfony-example.git fias`,

* `cd fias`,

* `cp docker/.env.dist docker/.env`,

* `make build`,

* `make up`,

* для установки `make install`,

* открыть в браузере [http://localhost:8080/api](http://localhost:8080/api).



Подробное описание
------------------

Для запуска окружения проекта следует использовать Docker.

1. Установить последнюю стабильную версию [docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/), если она еще не установлена.

2. Установить последнюю стабильную версию [docker compose](https://docs.docker.com/compose/install/), если она еще не установлена.

3. Установить последнюю стабильную версию `make`, если она еще не установлена.

4. Клонировать репозиторий с проектом.

5. Создать файл `.env` в папке `docker` в локальном склонированном репозитории, скопировать в него содержимое файла `.env.dist`, при необходимости заменить параметры:

    1. **важно для linux** чтобы `docker` не создавал все новый файлы от имени `root`, нужно обязательно изменить параметры `DOCKER_USER_ID` и `DOCKER_GROUP_ID` на идентификатор вашего пользователя и идентификатор его группы соответственно.

6. Выполнить команду `make build` в корне репозитория для сборки проекта.

7. Выполнить команду `make up` для запуска контейнеров.

8. Выполнить команду `make install` для установки ФИАС.
