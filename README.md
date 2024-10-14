Car Rental System

Descrição
O Car Rental System é uma aplicação de gerenciamento de aluguel de carros desenvolvida em Laravel. O sistema permite que usuários cadastrem carros, gerenciem aluguéis e acompanhem a disponibilidade dos veículos de forma eficiente. Ele foi projetado para ser utilizado por empresas que oferecem serviços de locação de veículos, fornecendo uma interface amigável para gerenciar os registros de carros, aluguéis e clientes.

Funcionalidades
Gerenciamento de carros: cadastro, edição, visualização e exclusão de veículos disponíveis para aluguel.
Gerenciamento de aluguéis: registro de novos aluguéis, controle de datas de devolução e status de cada aluguel.
Gerenciamento de usuários: controle de acesso e perfis de usuários, com sistema de login, registro e autenticação.
Sistema de reservas: permite reservar veículos para datas específicas.
Interface intuitiva: interface moderna com Bootstrap e layouts responsivos.
Segurança: autenticação de usuários e proteção de rotas.
Tecnologias Utilizadas
PHP 8.1
Laravel 9.x
MySQL ou SQLite (banco de dados)
Bootstrap 5 (estilização)
Tailwind CSS
JavaScript
Blade Templating Engine
Requisitos do Sistema
Antes de instalar o sistema, certifique-se de que seu ambiente atenda aos seguintes requisitos:

PHP >= 8.1
Composer
MySQL ou SQLite
Node.js & NPM
Extensões do PHP:
OpenSSL
PDO
Mbstring
Tokenizer
XML
Ctype
JSON
Instalação
Siga os passos abaixo para instalar o sistema localmente.

1. Clone o repositório
bash
Copiar código
git clone https://github.com/Lucasantunesribeiro/car_rental.git
cd car_rental
2. Instale as dependências do PHP
Utilize o Composer para instalar as dependências do projeto:

bash
Copiar código
composer install
3. Crie o arquivo .env
Crie um arquivo .env baseado no arquivo de exemplo .env.example:

bash
Copiar código
cp .env.example .env
4. Configure as variáveis de ambiente
No arquivo .env, configure as informações do banco de dados e outras variáveis necessárias:

env
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=car_rental
DB_USERNAME=root
DB_PASSWORD=senha
5. Gere a chave da aplicação
bash
Copiar código
php artisan key:generate
6. Execute as migrações do banco de dados
bash
Copiar código
php artisan migrate
7. Instale as dependências do front-end
bash
Copiar código
npm install
npm run dev
8. Inicie o servidor de desenvolvimento
bash
Copiar código
php artisan serve
Acesse o projeto em http://localhost:8000.

Como Usar
1. Gerenciamento de Carros
Acesse a seção "Carros" para cadastrar, editar, visualizar ou excluir veículos.
Insira informações como marca, modelo, ano e imagem do carro.
2. Gerenciamento de Aluguéis
Acesse a seção "Aluguéis" para registrar novos aluguéis.
Selecione o carro desejado, a data de retirada e devolução, e o status do aluguel.
3. Gerenciamento de Usuários
A aplicação possui sistema de autenticação onde os administradores podem gerenciar contas de usuários, que podem fazer login para acessar o sistema.
Estrutura de Pastas
app/Models: Modelos de dados (Carro, Rent, User).
app/Http/Controllers: Controladores que lidam com a lógica de negócios.
resources/views: Arquivos Blade que controlam o frontend.
public: Arquivos públicos (imagens, CSS, JavaScript).
routes/web.php: Arquivo de rotas da aplicação.
APIs (Opcional)
Se o projeto incluir uma API RESTful, você pode fornecer uma breve descrição sobre as rotas da API. Por exemplo:

Método	URL	Descrição
GET	/api/cars	Lista todos os carros
POST	/api/rents	Cria um novo aluguel
PUT	/api/rents/{id}	Atualiza o status de um aluguel
DELETE	/api/rents/{id}	Exclui um aluguel
Testes
Para executar os testes da aplicação:

bash
Copiar código
php artisan test
Contribuição
Se você quiser contribuir para o desenvolvimento deste projeto:

Faça um fork do projeto.
Crie uma branch com a sua feature (git checkout -b minha-feature).
Faça commit das suas mudanças (git commit -am 'Adiciona minha feature').
Faça o push para a branch (git push origin minha-feature).
Envie um Pull Request.
