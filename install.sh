#!/usr/bin/env bash
echo =============================
echo BAIXANDO O WORDPRESS
echo =============================

curl https://wordpress.org/latest.tar.gz | tar -xvzf -

echo =============================
echo INSTALANDO DEPENDENCIAS DO npm
echo =============================

npm install

echo =============================
echo RODANDO O DOCKER
echo =============================

docker-compose up