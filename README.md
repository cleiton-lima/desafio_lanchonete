

## Desafio Rits Tecnologia

Neste projeto, foi solicitado para cria uma API RESTful para gerenciamento de pedidos numa lanchonete desenvolvida com a ORM do Laravel. 

A API consiste em CRUD de pedidos, clientes e produtos de acordo com as regras de negócio.

Para fazê-la, usei a ORM do Laravel juntamente com o PostgreSql e para testá-la utilizei o Postman.

#### Como rodar?

##### A partir deste ponto, estou supondo que o Laravel, o PostgreSql e o Postman estão devidamente configurados em tua máquina com uma distro GNU/Linux baseada em Debian/Ubuntu

```bash
# Clone o projeto
$ https://github.com/cleiton-lima/desafio_lanchonete.git

## Entre na pasta
$ cd desafio_lanchonete

## Para executar

Copie o arquivo .env.example para .env com o comando logo abaixo (Estou supondo que o usuário está em ambiente GNU/LINUX)
cp .env.example .env

Apois ter feito isto, configure as tuas credenciais do banco de dados no .env como no exemplo abaixo

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=seu_bd
DB_USERNAME=seu_user
DB_PASSWORD=sua_senha

Depois, execute o seguinte comando para gerar uma nova chave para o teu projeto:
$ php artisan key:generate
Execute também o comando para gerar as tabelas do banco de dados:
$ php artisan migrate
Agora, execute o seguinte comando para rodar o projeto:
$ php artisan serve

Supondo que o usuário usará a ferramente Postman, apoós rodar o projeto insira a seguinte url na dita ferramenta (use para cliente, pedido e produto)
localhost:8000/api/cliente

Por exemplo, para listar o cliente de id 1 execute no Postman
localhost:8000/api/cliente/1

E assim sucessivamente com os demais (pedido e produto)
```


