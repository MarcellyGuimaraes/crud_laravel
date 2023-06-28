# Documentação da API

## Introdução
Esta documentação descreve os endpoints disponíveis na API.

## Autenticação
Os endpoints que requerem autenticação utilizam o Laravel Passport para fornecer tokens de acesso. Para acessar esses endpoints, é necessário fornecer um token válido no cabeçalho da solicitação.

### Registrar um usuário
Endpoint para registrar um novo usuário na API.

**URL:** `/register`
**Método:** `POST`

#### Parâmetros da solicitação
- `name` (string, obrigatório): Nome do usuário.
- `email` (string, obrigatório): E-mail do usuário.
- `password` (string, obrigatório): Senha do usuário.
- `c_password` (string, obrigatório): Confirmação da senha do usuário (deve ser igual à senha).

#### Respostas
- 200 OK: Registro bem-sucedido. Retorna um objeto JSON contendo o token de acesso e o nome do usuário.
- 400 Bad Request: Erro de validação. Retorna uma mensagem de erro com os detalhes.

### Login
Endpoint para autenticar um usuário na API.

**URL:** `/login`
**Método:** `POST`

#### Parâmetros da solicitação
- `email` (string, obrigatório): E-mail do usuário.
- `password` (string, obrigatório): Senha do usuário.
- `client_id` (string, obrigatório): ID do cliente para autenticação com o Laravel Passport.
- `client_secret` (string, obrigatório): Segredo do cliente para autenticação com o Laravel Passport.

#### Respostas
- 200 OK: Login bem-sucedido. Retorna um objeto JSON contendo o token de acesso e o nome do usuário.
- 401 Unauthorized: Credenciais inválidas.
- 400 Bad Request: Erro de validação. Retorna uma mensagem de erro com os detalhes.

## Produtos

### Listar produtos
Endpoint para listar todos os produtos.

**URL:** `/products`
**Método:** `GET`
**Autenticação:** Requer autenticação com token válido.

#### Respostas
- 200 OK: Retorna um array JSON contendo todos os produtos.

### Criar um produto
Endpoint para criar um novo produto.

**URL:** `/products`
**Método:** `POST`
**Autenticação:** Requer autenticação com token válido.

#### Parâmetros da solicitação
- `name` (string, obrigatório): Nome do produto.
- `price` (integer, obrigatório): Preço do produto.
- `description` (string, obrigatório): Descrição do produto.

#### Respostas
- 201 Created: Produto criado com sucesso. Retorna um objeto JSON contendo os dados do produto criado.
- 400 Bad Request: Erro de validação. Retorna uma mensagem de erro com os detalhes.
- 500 Internal Server Error: Ocorreu um erro ao processar a solicitação. Retorna uma mensagem de erro com os detalhes.

### Obter detalhes de um produto
Endpoint para obter os detalhes de um produto específico.

**URL:** `/products/{id}`
**Método:** `GET`
**Autenticação:** Requer autenticação com token válido.

#### Parâmetros da solicitação
- `id` (string, obrigatório): ID do produto.

#### Respostas
- 200 OK: Retorna um objeto JSON cont

endo os detalhes do produto.
- 404 Not Found: Produto não encontrado.

### Atualizar um produto
Endpoint para atualizar um produto existente.

**URL:** `/products/{id}`
**Método:** `PUT`
**Autenticação:** Requer autenticação com token válido.

#### Parâmetros da solicitação
- `id` (string, obrigatório): ID do produto.
- `name` (string, opcional): Novo nome do produto.
- `price` (integer, opcional): Novo preço do produto.
- `description` (string, opcional): Nova descrição do produto.

#### Respostas
- 200 OK: Produto atualizado com sucesso. Retorna um objeto JSON contendo os dados do produto atualizado.
- 400 Bad Request: Erro de validação. Retorna uma mensagem de erro com os detalhes.
- 404 Not Found: Produto não encontrado.
- 500 Internal Server Error: Ocorreu um erro ao processar a solicitação. Retorna uma mensagem de erro com os detalhes.

### Excluir um produto
Endpoint para excluir um produto.

**URL:** `/products/{id}`
**Método:** `DELETE`
**Autenticação:** Requer autenticação com token válido.

#### Parâmetros da solicitação
- `id` (string, obrigatório): ID do produto.

#### Respostas
- 200 OK: Produto excluído com sucesso.
- 404 Not Found: Produto não encontrado.
