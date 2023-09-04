<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Super Gestão

### Instalação

Clonar o projeto
```
git clone https://github.com/matheusevs/SuperGestao.git
```
Entrar no projeto
```
cd SuperGestao/
```
Criar os arquivos .env
```
cp .env.example .env
```
Instalação dos pacotes do composer
```
composer install
```
Criação da key do laravel
```
php artisan key:generate
```
Criação do banco de dados
```
php artisan migrate
```
Criação dos motivos para contato
```
php artisan db:seed --class=MotivoContatoSeeder
```
Rodar comando para inicialização do servidor
```
php artisan serve
```
Após rodar todos os comandos, acesse a url [127.0.0.1:8000](http://127.0.0.1:8000) para ter acesso a aplicação
