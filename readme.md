# 3D Planejamento Estratégico

Site do 3D Planejamento Estratégico, desenvolvido por [Grupo Tesseract](https://grupotesseract.com.br) utilizando Laravel.

## Requisitos

- Docker

<small>

``` bash
curl -fsSL https://get.docker.com/ | sh
sudo groupadd docker
sudo usermod -aG docker $USER
sudo systemctl restart docker
```

</small>

- Docker Compose

```
COMPOSE_VERSION=`git ls-remote https://github.com/docker/compose | grep refs/tags | grep -oP "[0-9]+\.[0-9][0-9]+\.[0-9]+$" | tail -n 1`
sudo sh -c "curl -L https://github.com/docker/compose/releases/download/${COMPOSE_VERSION}/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose"
sudo chmod +x /usr/local/bin/docker-compose
```

- Node

```
curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
sudo apt-get install -y nodejs
mkdir ~/.npm-global
npm config set prefix '~/.npm-global'
export PATH=~/.npm-global/bin:$PATH
source ~/.profile
```

- Gulp

```
npm i -g gulp-cli
npm i
```

## Instalação

```
git clone github:grupotesseract/fabiao
cd fabiao
cp .env-example .env
```

Modifique o valor das variáveis conforme sua preferência, como porta do Nginx (padrão: 80), phpMyAdmin (padrão: 8080), MySQL (padrão: 3306), etc. Em seguida, suba os containers. Se já subiu alguma vez, e modificou algo no .env, será necessário refazer o build.

```
docker-compose up nginx php-fpm workspace mysql phpmyadmin
```

Em outra aba, na mesma pasta:

```
docker-compose exec --user=laradock workspace composer install
docker-compose exec workspace php artisan october:install
```

Em outra aba, na mesma pasta:

```
gulp
```
