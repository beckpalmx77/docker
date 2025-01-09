FROM php:8.3-apache

# ติดตั้ง Dependencies สำหรับ MySQL, MSSQL, PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libssl-dev \
    unixodbc-dev \
    libxml2-dev \
    default-mysql-client \
    && docker-php-ext-install \
    pdo_mysql \
    pdo_pgsql pgsql \
    && pecl install pdo_sqlsrv sqlsrv \
    && docker-php-ext-enable \
    pdo_mysql pdo_pgsql pdo_sqlsrv sqlsrv

# เปิดใช้งาน Apache mod_rewrite
RUN a2enmod rewrite

# ตั้งค่าค่าเริ่มต้น
WORKDIR /var/www/html
