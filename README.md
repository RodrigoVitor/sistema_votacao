# Sistema de Votação

Este é um sistema de votação simples, desenvolvido em **Laravel** com **Livewire** para atualizações dinâmicas, **Tailwind CSS** para estilização e **Migrations** para criação de tabelas no banco de dados. Com este sistema, você pode criar enquetes com múltiplas opções e um período de validade.

## Funcionalidades

- **Criação de Enquetes**: O usuário pode criar uma enquete e definir uma data de início e fim.
- **Mínimo de 3 Opções**: Para cada enquete, o usuário deve fornecer no mínimo 3 opções para votação.
- **Adição e Exclusão Dinâmica de Opções**: O sistema permite adicionar e excluir opções de forma dinâmica.
- **Exclusão de Enquete**: O usuário pode deletar a enquete quando necessário.
- **Interface Dinâmica**: As atualizações são feitas em tempo real utilizando o Livewire, sem necessidade de recarregar a página.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para desenvolvimento de aplicações web.
- **Livewire**: Biblioteca para criar interfaces dinâmicas sem necessidade de escrever JavaScript.
- **Tailwind CSS**: Framework CSS para estilização rápida e responsiva.
- **Migrations**: Para a criação e gestão das tabelas no banco de dados.
- **Controller**: Para gerenciar as lógicas de criação e manipulação das enquetes.


## Como Rodar o Projeto

1. Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/sistema-de-votacao.git
    cd sistema-de-votacao
    ```

2. Instale as dependências com o Composer:
    ```bash
    composer install
    ```

3. Configure o arquivo `.env` com as credenciais do banco de dados:
    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=usuario
    DB_PASSWORD=senha
    ```

4. Execute as migrations para criar as tabelas no banco de dados:
    ```bash
    php artisan migrate
    ```

5. Inicie o servidor local:
    ```bash
    php artisan serve
    ```

6. Acesse o sistema em `http://localhost:8000`.

## Estrutura de Pastas

- **app/Http/Controllers**: Controladores responsáveis pela lógica de criação, exclusão e manipulação das enquetes.
- **app/Http/Livewire**: Componentes Livewire para permitir atualizações dinâmicas na interface do usuário.
- **database/migrations**: Arquivos de migration para a criação das tabelas no banco de dados.
- **resources/views**: Arquivos Blade para renderização das páginas do sistema, estilizados com Tailwind CSS.

## Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests para melhorias ou correções.

