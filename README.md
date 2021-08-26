## Tecnologias utilizadas
- Laravel v8.6.1
- Laravel Sail - [documentação](https://laravel.com/docs/8.x/sail#installation)
- PHP: 8.0.3

## Setup do projeto
- Clonar o repositório
- Instalar dependências 
```
composer install
```
- Fazer o build e subir o docker
```
./vendor/bin/sail up
```
- Duplica o arquivo **.env.example** com nome **.env**
```
ln -s .env.example .env
```
- Rodar migrations 
```
./vendor/bin/sail php artisan migrate
```
- A url padrão do sail é http://localhost

## Rotas da API

### História/logs
- GET - /api/history

### Listar todos produtos
- GET - /api/products

### Cadastrar um novo produto
- POST - /api/products
```
{
	"name": "teste",
	"sku": "TEST123",
	"stock": 2
}
```

### Editar quantidade de um produto
- PATCH - /api/products/{id}/edit
```
action: "remove" | "add"
```
```
{
	"quantity": 10,
	"action": "remove"
}
```
