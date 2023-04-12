FROM php:8.1 as base
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /app

FROM base as project
COPY . /app

FROM project as builder
RUN composer install && composer dumpautoload
