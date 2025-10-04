# Libre Turing - Sistema de Gerenciamento de Biblioteca

`Libre Turing` é um projeto acadêmico de sistema de gerenciamento para bibliotecas, desenvolvido para a disciplina de **Banco de Dados 1** do curso de **Sistemas de Informação**. O sistema é implementado em PHP e MySQL, com foco na manipulação e consulta de dados relacionais.

## 👨‍💻 Equipe

* Agabo Monteiro
* Gustavo Martins
* José Gabriel
* Tiago Lemes

## ✨ Funcionalidades Implementadas

O projeto atualmente conta com as seguintes funcionalidades:

* **Gerenciamento de Livros (CRUD Completo):**
    * Cadastro de novos títulos.
    * Listagem completa de todos os livros no acervo.
    * Consulta de livros por título.
    * Edição dos dados de um livro já cadastrado.
    * Exclusão de um livro do banco de dados.
* **Gerenciamento de Alunos:**
    * Listagem completa de todos os alunos cadastrados.
* **Interface Front-end:**
    * Páginas HTML para login, menu principal, e formulários de empréstimo e consultas.

## 🛠️ Tecnologias Utilizadas

* **Backend:** PHP
* **Banco de Dados:** MySQL
* **Servidor Local:** XAMPP


## 🚀 Instalação e Configuração do Ambiente

Para configurar o banco de dados e rodar o projeto localmente, siga os passos abaixo.

### Pré-requisitos

* Ter um ambiente de servidor local como o [XAMPP](https://www.apachefriends.org/pt_br/index.html) instalado.


### Passo a Passo

1.  **Clone o Repositório:**
    ```bash
    git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)
    ```
    Ou baixe e descompacte os arquivos do projeto.

2.  **Mova os Arquivos:**
    Mova a pasta do projeto para o diretório `htdocs` do seu XAMPP.
    (Ex: `C:\xampp\htdocs\libre-turing`)

3.  **Inicie os Serviços:**
    Abra o Painel de Controle do XAMPP e inicie os serviços **Apache** e **MySQL**.

4.  **Crie o Banco de Dados:**
    Abra seu navegador e acesse a URL do script de criação do banco de dados para executá-lo:
    ```
    http://localhost/libre-turing/BD/criarBD.php
    ```
    *(**Atenção:** Verifique se o caminho para o arquivo `criarBD.php` está correto dentro da sua estrutura de pastas)*

5.  **Crie as Tabelas:**
    Após criar o banco, acesse a URL do script de criação de tabelas:
    ```
    http://localhost/libre-turing/BD/criarTabelas.php
    ```
    *(**Atenção:** Verifique se o caminho para o arquivo `criarTabelas.php` está correto)*

6.  **Acesse o Sistema:**
    Com o banco de dados pronto, acesse a página inicial do sistema:
    ```
    http://localhost/libre-turing/
    ```

Ao final desses passos, o sistema estará pronto para ser utilizado.