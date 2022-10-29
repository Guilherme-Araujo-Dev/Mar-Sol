DROP DATABASE marESol;
CREATE DATABASE marESol;
USE marESol;

CREATE TABLE categoria (
    idcategoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomecategoria VARCHAR(50) NOT NULL,
    status CHAR(1) DEFAULT('A')
);

CREATE TABLE produto (
    idproduto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeproduto VARCHAR(100) NOT NULL,
    peso FLOAT(5,2) NOT NULL,
    preco FLOAT(5,2) NOT NULL,
    imagem VARCHAR(200),                                           -- Passa local onde a imagem se hospeda
    fk_idcategoria INT NOT NULL,
    status CHAR(1) DEFAULT('A'),
    FOREIGN KEY (fk_idcategoria) REFERENCES categoria(idcategoria)
);

CREATE TABLE estado (
    idestado INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeestado CHAR(2) NOT NULL UNIQUE
);

CREATE TABLE cidade (
    idcidade INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomecidade VARCHAR(30) NOT NULL UNIQUE,
    fk_idestado INT NOT NULL,
    status CHAR(1) DEFAULT('A'),
    FOREIGN KEY (fk_idestado) REFERENCES estado(idestado)
);

CREATE TABLE empresa (
    idempresa INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeempresa VARCHAR(100) NOT NULL,
    status CHAR(1) DEFAULT('A'),                                      -- Se ele está ativo (A) ou inativo (I)
    cnpj CHAR(18) NOT NULL UNIQUE,
    endereco VARCHAR(100) NOT NULL,
    nomecliente VARCHAR(100) NOT NULL,
    emailcliente VARCHAR(100) NOT NULL,                              -- Será o Login da empresa
    tipo CHAR(1) DEFAULT('U'),
    senha CHAR(32),                                               -- Será a Senha da empresa
    fone VARCHAR(16) NOT NULL,
    fk_idcidade INT NOT NULL,
    FOREIGN KEY (fk_idcidade) REFERENCES cidade(idcidade)                        -- Não pode existir dois cnpjs iguais no sistema
);

CREATE TABLE funcionario (
    idfuncionario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomefuncionario VARCHAR(100) NOT NULL,
    cpf CHAR(14) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL,
    fone VARCHAR(16) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    status CHAR(1) DEFAULT('A'),   
    fk_idcidade INT NOT NULL,    
    FOREIGN KEY (fk_idcidade) REFERENCES cidade(idcidade)
);

CREATE TABLE movimento (                                         -- Um 'Pacote'de movimento, pode ter vários Itens
    idmovimento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data DATE NOT NULL,
    observacao VARCHAR(200),
    aprovado CHAR(1) DEFAULT('N'),                           -- Informa se o pedido está aprovado (S) ou não (N) pelo sistema
    entregue CHAR(1) DEFAULT('N'),                           -- Informa se o pedido foi entregue (S) ou não (N)
    tipo CHAR(1) DEFAULT('S'),                               -- Informa se o tipo do Moviemento é Entrada (E) ou Saída (S)                                            
    fk_idfuncionario INT NOT NULL,
    fk_idempresa INT NOT NULL,
    FOREIGN KEY (fk_idempresa) REFERENCES empresa(idempresa),
    FOREIGN KEY (fk_idfuncionario) REFERENCES funcionario(idfuncionario)
);

CREATE TABLE movimento_item (                                    -- Cada item de uma movimento
    fk_idproduto INT NOT NULL,
    fk_idmovimento INT NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (fk_idproduto) REFERENCES produto(idproduto),
    FOREIGN KEY (fk_idmovimento) REFERENCES movimento(idmovimento)
);


-- Funciona só no phpMyAdmin
-- SELECT M.idmovimento, M.data AS Data, M.observacao AS Observação, M.aprovado AS Aprovado, M.entregue AS Entregue, F.nomefuncionario AS Funcionário FROM movimento AS M INNER JOIN funcionario AS F ON M.fk_idfuncionario = F.idfuncionario; 
-- SELECT M.data AS Data, M.tipo AS Tipo, I.quantidade AS Quantidade, M.aprovado AS Aprovado, M.entregue AS Entregue, M.observacao AS Observação FROM movimento_item AS I INNER JOIN movimento AS M ON I.fk_idmovimento = M.idmovimento;