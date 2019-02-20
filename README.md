# Teste CRUD MontarSite

### Requisitos do sistema
- PHP 7.2.10
- MySql 5.7.23
- Yii Framework 2.0.16

### Instalação
```sh
$ cd /caminho/do/servidor/www
$ git clone https://github.com/edgarleite/teste-crud-montarsite.git nome-da-pasta
$ cd nome-da-pasta
$ composer install
```

### Configuração
Editar arquivo `config/db.php` com os dados de acesso ao banco de dados local.

### Banco de dados
No banco de dados, rodar script SQL do arquivo `teste-crud-montarsite.sql` anexo ao projeto.

### Testanto a aplicação

Você pode usar seu navegador para acessar o aplicativo Yii instalado com o seguinte URL:
```sh
http://localhost/nome-da-pasta/web
```

A pasta raíz da aplicação é `/web`.