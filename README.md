# Landing Page Project

## Criadores 🤝🏼
**Levi Cruz** e **Guilherme Alves** trabalhando em parceria para desenvolver este pequeno projeto.

## Objetivo 📚
Com o intuito de aprimorar os nossos conhecimentos e fortalecer o trabalho em equipe, criamos este projeto que nos permite explorar diferentes tecnologias e aprimorar nossas habilidades de desenvolvimento.

## Sobre o Projeto
Este projeto é uma landing page estilizada, que serve como um exemplo prático de como conectar uma interface web a um banco de dados. A página é conectada a um banco de dados MySQL para verificar a existência de usuários. A partir da verificação, dois caminhos distintos são oferecidos:

1. **Página Admin**:
   - Funcionalidade de cadastro de novos usuários.
   - Permite inserir informações como nome, e-mail, nível de acesso e senha.
   - Os novos usuários são adicionados ao banco de dados e, após o cadastro, são redirecionados para a tela de login.

2. **Página User**:
   - Funciona como uma página de visualização sem funcionalidades adicionais.

### Responsabilidades
- **Guilherme Alves** foi responsável pelo desenvolvimento do front-end, garantindo que a interface do usuário fosse intuitiva, responsiva e visualmente atraente.
- **Levi Cruz** foi responsável pelo desenvolvimento do back-end, implementando a lógica de negócios e a integração com o banco de dados MySQL.

## Ferramentas Utilizadas
![HTML](https://img.shields.io/badge/HTML-Used-blue)
![CSS](https://img.shields.io/badge/CSS-Used-blue)
![MySQL](https://img.shields.io/badge/MySQL-Used-blue)
![PHP](https://img.shields.io/badge/PHP-Used-blue)

## Como Importar o Projeto e o Banco de Dados ⚠️

### Importar o Projeto
1. Clone o repositório para a sua máquina local:
    ```bash
    git clone https://github.com/Levi-cruz/Landing-Page.git
    ```
2. Navegue até a pasta do projeto:
    ```bash
    cd Landing-Page
    ```
3. Certifique-se de ter um servidor web configurado (por exemplo, XAMPP, WAMP, MAMP).

### Importar o Banco de Dados
1. Abra o MySQL (ou MariaDB) e crie um banco de dados chamado `login`:
    ```sql
    CREATE DATABASE login;
    ```
2. Importe o arquivo `BancoLogin.sql` para o banco de dados:
    ```bash
    mysql -u seu_usuario -p login < caminho/para/o/arquivo/BancoLogin.sql
    ```

### Configuração do Banco de Dados no Projeto
1. Abra o arquivo de configuração do banco de dados no projeto (por exemplo, `config.php`).
2. Atualize as informações de conexão com o banco de dados:
    ```php
    $db_host = 'localhost';
    $db_user = 'seu_usuario';
    $db_pass = 'sua_senha';
    $db_name = 'login';
    ```

### Executar o Projeto
1. Inicie o servidor web.
2. Acesse o projeto através do navegador:
    ```
    http://localhost/Landing-Page
    ```

---

Agradecemos por conferir nosso projeto! 

**Levi Cruz & Guilherme Alves**
