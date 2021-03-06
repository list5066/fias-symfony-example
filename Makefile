
#!/usr/bin/make
# Makefile readme (ru): <http://linux.yaroslavl.ru/docs/prog/gnu_make_3-79_russian_manual.html>
# Makefile readme (en): <https://www.gnu.org/software/make/manual/html_node/index.html#SEC_Contents>

SHELL = /bin/sh

php_container_name := php
docker_bin := $(shell command -v docker 2> /dev/null)
docker_compose_bin := $(shell command -v docker-compose 2> /dev/null)
docker_compose_yml := docker/docker-compose.yml
user_id := $(shell id -u)

include docker/.env
export $(shell sed 's/=.*//' docker/.env)

.PHONY : build up down shell install
.DEFAULT_GOAL := build

# --- [ Development tasks ] -------------------------------------------------------------------------------------------

build: ## Build container and install composer libs
	$(docker_compose_bin) --file "$(docker_compose_yml)" build --force-rm
	$(docker_compose_bin) --file "$(docker_compose_yml)" up -d --remove-orphans
	$(docker_compose_bin) --file "$(docker_compose_yml)" exec -u $(user_id) "$(php_container_name)" composer install
	$(docker_compose_bin) --file "$(docker_compose_yml)" exec -u $(user_id) "$(php_container_name)" php -f bin/console doctrine:migrations:migrate --no-ansi --no-interaction

up: ## Start containers
	$(docker_compose_bin) --file "$(docker_compose_yml)" up -d --remove-orphans

down: ## Stop containers
	$(docker_compose_bin) --file "$(docker_compose_yml)" down

shell: ## Runs shell in container
	$(docker_compose_bin) --file "$(docker_compose_yml)" up -d --remove-orphans
	$(docker_compose_bin) --file "$(docker_compose_yml)" exec -u $(user_id) "$(php_container_name)" bash

install: ## Installs FIAS to docker
	$(docker_compose_bin) --file "$(docker_compose_yml)" up -d --remove-orphans
	$(docker_compose_bin) --file "$(docker_compose_yml)" exec -u $(user_id) "$(php_container_name)" php -f bin/console liquetsoft:fias:install --no-ansi --no-interaction
