-- Criação do banco de dados e das tabelas utilizadas pelo projeto
CREATE DATABASE IF NOT EXISTS projeto1
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_unicode_ci;

USE projeto1;

-- Tabela de clientes consumida pelas páginas públicas e administrativas
CREATE TABLE IF NOT EXISTS clientes (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente VARCHAR(120) NOT NULL,
  email VARCHAR(180) NOT NULL,
  cidade VARCHAR(120) DEFAULT NULL,
  estado CHAR(2) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

-- Tabela de produtos utilizada no módulo administrativo
CREATE TABLE IF NOT EXISTS produtos (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  produto VARCHAR(150) NOT NULL,
  preco DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  descricao TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

-- Inserts de exemplo para facilitar testes locais
INSERT INTO clientes (cliente, email, cidade, estado)
VALUES
  ('Maria Silva', 'maria.silva@example.com', 'Sao Paulo', 'SP'),
  ('Joao Santos', 'joao.santos@example.com', 'Rio de Janeiro', 'RJ'),
  ('Carla Souza', 'carla.souza@example.com', 'Belo Horizonte', 'MG');

INSERT INTO produtos (produto, preco, descricao)
VALUES
  ('Notebook X', 3999.90, 'Notebook com processador i5, 8GB de RAM e SSD de 256GB'),
  ('Monitor Full HD', 1299.00, 'Monitor 24 polegadas com tecnologia IPS'),
  ('Teclado Mecânico', 459.50, 'Teclado mecânico com switches azuis e iluminação RGB');
