# Projeto 1 PHP

Aplicação PHP simples com páginas públicas e área administrativa para cadastro de clientes e produtos.

## Requisitos
- XAMPP com PHP 7.4 ou superior (Apache + MariaDB + PHP)
- Navegador moderno
- Git (opcional, para clonar o repositório)

## Como preparar o ambiente com XAMPP
1. Instale o XAMPP a partir de https://www.apachefriends.org (Windows, macOS ou Linux).
2. No diretório `htdocs` do XAMPP, copie ou clone este repositório:
   - Windows: `C:\xampp\htdocs\projeto1_php`
   - Linux/macOS: `/opt/lampp/htdocs/projeto1_php`
3. Inicie os serviços Apache e MySQL pelo painel de controle do XAMPP.
4. Acesse `http://localhost/phpmyadmin`, crie o banco `projeto1` (ou use a opção Importar) e carregue o arquivo `projeto1.sql`.
5. Caso utilize credenciais diferentes das padrão do XAMPP (`root` sem senha), ajuste-as em `projeto1/admin/config.inc.php`.

## Como executar a aplicação no XAMPP
1. Com Apache e MySQL ativos, abra o navegador e acesse `http://localhost/projeto1_php/projeto1/index.php` para ver o site público.
2. Para usar a área administrativa, acesse `http://localhost/projeto1_php/projeto1/admin/index.php`.
3. Caso tenha renomeado a pasta dentro de `htdocs`, atualize o caminho nas URLs acima.

## Estrutura do banco de dados
- Banco `projeto1` com as tabelas:
  - `clientes`: campos para nome, e-mail, cidade e estado. A página `clientes.php` lista os registros.
  - `produtos`: campos para produto, preço e descrição. A área administrativa permite cadastrar e editar os itens.

O arquivo `projeto1.sql` também inclui registros de exemplo que facilitam a validação do ambiente após a importação.
