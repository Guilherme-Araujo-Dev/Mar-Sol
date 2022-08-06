DROP DATABASE marESol;
CREATE DATABASE marESol;
USE marESol;

CREATE TABLE Categorias (
    idCategoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeCategoria VARCHAR(50) NOT NULL
);

CREATE TABLE Produtos (
    idProduto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeProduto VARCHAR(100) NOT NULL,
    peso FLOAT(4,2) NOT NULL,
    preco FLOAT(5,2) NOT NULL,
    imagem VARCHAR(200),                                           -- Passa local onde a imagem se hospeda
    Categoria_idCategoria INT NOT NULL,
    FOREIGN KEY (Categoria_idCategoria) REFERENCES Categorias(idCategoria)
);

CREATE TABLE Empresas (
    idEmpresa INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeEmpresa VARCHAR(100) NOT NULL,
    situacao CHAR(1) DEFAULT('A'),                                   -- Se ele está ativo (A) ou inativo (I)
    nomeCliente VARCHAR(100) NOT NULL,
    emailCliente VARCHAR(100) NOT NULL,                              -- Será o Login da Empresa
    senha VARCHAR(32) NOT NULL,                                               -- Será a Senha da Empresa
    fone VARCHAR(16) NOT NULL,
    CNPJ CHAR(18) NOT NULL,
    estado CHAR(2) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    CONSTRAINT ck_estado CHECK (estado IN ('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO')),
    CONSTRAINT ai_cnpj UNIQUE (CNPJ)                                 -- Não pode existir dois CNPJs iguais no sistema
);

CREATE TABLE Funcionarios (
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

CREATE TABLE Movimentos (                                         -- Um 'Pacote' de Movimentos, pode ter vários Itens
    idMovimento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data DATE NOT NULL,
    observacao VARCHAR(200),
    aprovado CHAR(1) DEFAULT('N'),                           -- Informa se o pedido está aprovado (S) ou não (N) pelo sistema
    entregue CHAR(1) DEFAULT('N'),                           -- Informa se o pedido foi entregue (S) ou não (N)
    tipo CHAR(1) DEFAULT('S'),                               -- Informa se o tipo do Moviemento é Entrada (E) ou Saída (S)                                            
    Funcionario_idFuncionario INT NOT NULL,
    Empresa_idEmpresa INT NOT NULL,
    FOREIGN KEY (Empresa_idEmpresa) REFERENCES Empresas(idEmpresa),
    FOREIGN KEY (Funcionario_idFuncionario) REFERENCES Funcionarios(idFuncionario)
);

CREATE TABLE Movimento_Item (                                    -- Cada item de uma Movimentos
    Produto_idProduto INT NOT NULL,
    Movimento_idMovimento INT NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (Produto_idProduto) REFERENCES Produtos(idProduto),
    FOREIGN KEY (Movimento_idMovimento) REFERENCES Movimentos(idMovimento)
);