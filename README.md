Petshop in Laravel

## Instalação

Vá ate a pasta onde quer clonar o projeto e abra o terminal e digite o código abaixo:

`git clone https://github.com/evandiodellatorre/petshop-laravel.git`

no terminal digite o código abixo, para entrar na pasta petshop-laravel recém criada:

`cd petshop-laravel`

no terminal digite o código abixo, para abrir o vscode:

`code .`

com o vscode aberto abra o seu terminal e digite o código abaixo:

`composer install`

logo apos acabar a instalação do composer digite o código abaixo:

`npm install`

logo apos acabar a instalação do npm digite o código abaixo:

`npm run dev`

logo apos acabar o run dev digite o código abaixo para fazer uma copia do arquivo .env.example e renomear para .env:

`nv .env.example .env`

logo após entre no arquivo .env e altere as credencias de banco de dados, email e qualquer outras necessárias.

digite o código abaixo para gerar a chave de acesso do laravel

`php artisan key:generate`

digite o código abaixo para criar link simbólico para upload de arquivos

`php artisan storage:link`

Apenas para a primeira instalação crie o banco de dados no mysql e execute o seguinte comando para criação das tabelas

`php artisan migrate`

digite o código abaixo para criar dados de teste.

`php artisan db:seed`
