<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Notes
A documentação do Laravel é mt boa
Vamos usar o Laravel como framework
https://herd.laravel.com/
https://laravel.com/

Para estudo:
https://bootcamp.laravel.com/

O php é uma linguagem interpretada (n precisa passar pelo processo de build), quem executa os arquivos .php é o próprio php
O request chega do client para o server | o server vai receber no serviço de web service, a maior parte das vezes Nginx que vai executar o arquivo php que vai retornar para o Nginx que retorna para o client

para n usar o Nginx o próprio php tem o server dele q pode ser executado por php -S localhost:8888 index.php


Para trabalharmos com objetos no PHP usamos -> no lugar de . como é no js
toda variável começa com $
// O fato de declarar variável com $ eu não gostei pois eu posso mudar o valor de algo que talvez eu queria que seja uma const, n posso mudar o escopo da variável coisa que da para fazer no node com const, let e var.
var_dump() = console.log

laravel new

no composer.json o autoload tem name space ou seja conseguimos dizer o caminho que cada classe tem dentro do projeto
autoload psr-4 'App\\': 'app/' mapeia tudo que tiver App para app/


## 1.0
Digitamos
php artisan 
para ver os comandos do artisan

php artisan serve
para ligar na porta 8000

php artisan make:model
php artisan route:list
php artisan about //Ele pega essas informações do .env


**Diretórios**
app/ a maior parte do código de negocio
bootstrap/ onde tudo se inicia, podemos passar configs extras aqui
config/ 
public/ quando um request chega ele procura o index.php (lida com requests) dentro dessa pasta, é onde inicializa o projeto (aqui que busca o bootstrap)
resources/ arquivos de front-end
routes/ todas as rotas web e console, como é um mvc (model view controller) o segundo parâmetro da rota deve ser um controller
storage/ onde guarda todos os arquivos extras, logs, cache e arquivos do projeto que n estiverem no S3 pode ficar aqui tbm
composer.json = package.json só q do php
