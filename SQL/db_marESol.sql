--DROP DATABASE marESol;
CREATE DATABASE marESol;
USE marESol;

CREATE TABLE Categoria (
    idCategoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeCategoria VARCHAR(50) NOT NULL
);

CREATE TABLE Produto (
    idProduto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeProduto VARCHAR(100) NOT NULL,
    peso FLOAT(4,2) NOT NULL,
    preco FLOAT(5,2) NOT NULL,
    imagem VARCHAR(200),                                           -- Passa local onde a imagem se hospeda
    Categoria_idCategoria INT NOT NULL,
    FOREIGN KEY (Categoria_idCategoria) REFERENCES Categoria(idCategoria)
);

CREATE TABLE Empresa (
    idEmpresa INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeEmpresa VARCHAR(100) NOT NULL,
    situacao CHAR(1) DEFAULT('A'),                                   -- Se ele está ativo (A) ou inativo (I)
    nomeCliente VARCHAR(100) NOT NULL,
    emailCliente VARCHAR(100) NOT NULL,                              -- Será o Login da Empresa
    senha VARCHAR(32),                                               -- Será a Senha da Empresa
    fone VARCHAR(15) NOT NULL,
    CNPJ CHAR(18) NOT NULL,
    estado CHAR(2) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    CONSTRAINT ck_estado CHECK (estado IN ('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO')),
    CONSTRAINT ai_cnpj UNIQUE (CNPJ)                                 -- Não pode existir dois CNPJs iguais no sistema
);

CREATE TABLE Funcionario (
    idFuncionario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeFuncionario VARCHAR(100) NOT NULL,
    CPF CHAR(14) NOT NULL,
    email VARCHAR(100) NOT NULL,
    fone VARCHAR(15) NOT NULL,
    estado CHAR(2) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    CONSTRAINT ai_cpf UNIQUE (CPF),    
    CONSTRAINT ck_estado CHECK (estado IN ('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'))
);

CREATE TABLE Movimento (                                         -- Um 'Pacote' de Movimento, pode ter vários Itens
    idMovimento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data DATE NOT NULL,
    observacao VARCHAR(200),
    aprovado CHAR(1) DEFAULT('N'),                           -- Informa se o pedido está aprovado (S) ou não (N) pelo sistema
    entregue CHAR(1) DEFAULT('N'),                           -- Informa se o pedido foi entregue (S) ou não (N)
    tipo CHAR(1) DEFAULT('S'),                               -- Informa se o tipo do Moviemento é Entrada (E) ou Saída (S)                                            
    Funcionario_idFuncionario INT NOT NULL,
    Empresa_idEmpresa INT NOT NULL,
    FOREIGN KEY (Empresa_idEmpresa) REFERENCES Empresa(idEmpresa),
    FOREIGN KEY (Funcionario_idFuncionario) REFERENCES Funcionario(idFuncionario)
);

CREATE TABLE Movimento_Item (                                    -- Cada item de uma Movimento
    Produto_idProduto INT NOT NULL,
    Movimento_idMovimento INT NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (Produto_idProduto) REFERENCES Produto(idProduto),
    FOREIGN KEY (Movimento_idMovimento) REFERENCES Movimento(idMovimento)
);


-- Includes para testar

INSERT INTO Empresa (nomeEmpresa, emailCliente, nomeCliente, senha, fone, CNPJ, estado, cidade, endereco) VALUES ('João Lanches', 'joao.carlos@lanches.com', 'João Carlos', '12345678', '(45) 99856-4146', '24.198.467/0001-63', 'PR', 'Cascavel', 'Rua das Flores, 498');
INSERT INTO Empresa (nomeEmpresa, emailCliente, nomeCliente, senha, fone, CNPJ, estado, cidade, endereco) VALUES ('Maria da Silva', 'maria.silva@lanches.com', 'Maria da Siva', '87654321', '(45) 98745-3226', '63.498.132/0001-19', 'PR', 'Cascavel', 'Avenida Machado de Asis, 1594');

INSERT INTO Categoria (nomeCategoria) VALUES ('Pastel Grande');

INSERT INTO Produto (nomeProduto, peso, preco, imagem, Categoria_idCategoria) VALUES ('Pastel de Carne G', 0.5, 2.50, 'pcg.jpg', 1);
INSERT INTO Produto (nomeProduto, peso, preco, imagem, Categoria_idCategoria) VALUES ('Pastel de Frango G', 0.5, 2.50, 'pfg.jpg', 1);
INSERT INTO Produto (nomeProduto, peso, preco, imagem, Categoria_idCategoria) VALUES ('Pastel de Pizza G', 0.5, 2.50, 'ppg.jpg', 1);
INSERT INTO Produto (nomeProduto, peso, preco, imagem, Categoria_idCategoria) VALUES ('Pastel de Queijo G', 0.5, 2.50, 'pqg.jpg', 1);

INSERT INTO Funcionario (nomeFuncionario, email, fone, cpf, estado, cidade, endereco) VALUES ('Rodrigo dos Santos', 'rodrigo.santos@maresolsalgados.com', '(45) 93167-5817', '144.657.251-08','PR', 'Cascavel', 'Rua General Alincar, 498');

INSERT INTO Movimento (data, Funcionario_idFuncionario, Empresa_idEmpresa) VALUES ('2018-01-01', 1, 1);

INSERT INTO Movimento_Item (Produto_idProduto, Movimento_idMovimento, quantidade) VALUES (1, 1, 20);
INSERT INTO Movimento_Item (Produto_idProduto, Movimento_idMovimento, quantidade) VALUES (2, 1, 10);
INSERT INTO Movimento_Item (Produto_idProduto, Movimento_idMovimento, quantidade) VALUES (3, 1, 5);


-- Funciona só no phpMyAdmin
-- SELECT M.idMovimento, M.data AS Data, M.observacao AS Observação, M.aprovado AS Aprovado, M.entregue AS Entregue, F.nomeFuncionario AS Funcionário FROM Movimento AS M INNER JOIN Funcionario AS F ON M.Funcionario_idFuncionario = F.idFuncionario; 
-- SELECT M.data AS Data, M.tipo AS Tipo, I.quantidade AS Quantidade, M.aprovado AS Aprovado, M.entregue AS Entregue, M.observacao AS Observação FROM Movimento_Item AS I INNER JOIN Movimento AS M ON I.Movimento_idMovimento = M.idMovimento;