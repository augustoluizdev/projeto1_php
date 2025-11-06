# 🧩 Projeto 1 — Aplicação PHP Simples

![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue?logo=php&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow)

Aplicação PHP simples com **páginas públicas** e uma **área administrativa** para cadastro e gerenciamento de **clientes** e **produtos**.  
Ideal para estudos de **PHP**, **MySQL** e estruturação de projetos web com o **XAMPP**.

---

## 🚀 Funcionalidades

✅ Páginas públicas com listagem de produtos e clientes  
✅ Área administrativa protegida (login básico)  
✅ CRUD completo para clientes e produtos  
✅ Banco de dados MySQL com registros de exemplo  
✅ Estrutura compatível com ambientes XAMPP e LAMP  

---

## 🧱 Requisitos

- PHP 7.4 ou superior  
- Apache (incluso no XAMPP)  
- MariaDB / MySQL  
- Navegador moderno (Chrome, Firefox, Edge, etc.)  
- Git (opcional, para clonar o repositório)

---

## ⚙️ Preparando o ambiente com XAMPP

### 1. Instalação
Baixe o **XAMPP** no site oficial [apachefriends.org](https://www.apachefriends.org)  
Disponível para **Windows**, **macOS** e **Linux**.

---

### 2. Adicionando o projeto
Copie ou clone o projeto para dentro da pasta **htdocs** do XAMPP.  
- Windows: `C:\xampp\htdocs\projeto1_php`  
- Linux/macOS: `/opt/lampp/htdocs/projeto1_php`

---

### 3. Iniciando os serviços
Abra o painel do XAMPP e inicie os módulos **Apache** e **MySQL**.

---

### 4. Configurando o banco de dados
Acesse o **phpMyAdmin** (`http://localhost/phpmyadmin`), crie um banco de dados chamado **projeto1** e importe o arquivo **projeto1.sql** incluído no projeto.  
Esse arquivo cria as tabelas `clientes` e `produtos`, além de adicionar registros de exemplo.

---

### 5. Ajustando credenciais
Se necessário, atualize as credenciais de acesso ao banco no arquivo:
`projeto1/admin/config.inc.php`

---

## ▶️ Executando o projeto

- **Site público:** `http://localhost/projeto1_php/projeto1/index.php`  
- **Área administrativa:** `http://localhost/projeto1_php/projeto1/admin/index.php`

Se o nome da pasta foi alterado, ajuste o caminho nas URLs.

---

## 🗃️ Estrutura do Banco de Dados

**Banco:** `projeto1`

**Tabela `clientes`:**  
Contém campos para identificação, nome, e-mail, cidade e estado.

**Tabela `produtos`:**  
Contém campos para identificação, nome do produto, preço e descrição.

---

## 🧰 Estrutura de Pastas

- **index.php** — Página inicial pública  
- **clientes.php / produtos.php** — Listagem de clientes e produtos  
- **admin/** — Área administrativa (login, painel, cadastros)  
- **projeto1.sql** — Estrutura e dados do banco  
- **README.md** — Documentação do projeto  

---

## 🛍️ Página Pública (Produtos)

A página de produtos exibe uma lista de itens disponíveis, com nome, preço e breve descrição.  
Cada produto pode conter uma imagem e botão para mais detalhes.  
Exemplo de exibição:

- 👕 **Camiseta PHP** — Confortável e moderna — *R$ 59,90*  
- ☕ **Caneca Dev** — “Codar é viver” — *R$ 34,90*  
- 🧢 **Boné Geek** — Estilo e conforto — *R$ 44,90*  

> O layout pode ser adaptado conforme o estilo desejado para o site público.

---

## 🧩 Área Administrativa

A área administrativa é destinada ao gerenciamento interno do sistema.  
Ela possui as seguintes seções principais:

- 🏠 **Dashboard:** visão geral com atalhos para clientes e produtos.  
- 👥 **Clientes:** cadastro, edição e exclusão de clientes com informações como nome, e-mail, cidade e estado.  
- 🛒 **Produtos:** cadastro, edição e exclusão de produtos com nome, preço e descrição.  
- 🚪 **Sair:** encerra a sessão do administrador e retorna à tela de login.  

Os dados cadastrados são exibidos em formato de tabela, facilitando a visualização e a edição das informações.  
Cada registro possui opções de **editar** ✏️ e **excluir** ❌.

---

## 🧑‍💻 Autores

Pedro Henrique Matos Leitão de Medeiros

Augusto Luiz Lima Dantas

---

## 📄 Licença

Este projeto está licenciado sob a **MIT License**.  
Você pode usar, modificar e distribuir o código livremente, mantendo os devidos créditos.

---

## 🏁 Conclusão

Após importar o banco de dados e iniciar o servidor com o XAMPP, acesse o endereço local da aplicação.  
Se as listagens de produtos e clientes forem exibidas corretamente, o ambiente está configurado com sucesso. 🎉




