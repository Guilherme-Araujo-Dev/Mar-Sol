DROP DATABASE marESol;
CREATE DATABASE marESol;
USE marESol;

CREATE TABLE categorias (
    idcategoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomecategoria VARCHAR(50) NOT NULL,
    status CHAR(1) DEFAULT('A') CHECK (status IN ('A' , 'I'))
);

CREATE TABLE produtos (
    idproduto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeproduto VARCHAR(100) NOT NULL,
    peso FLOAT(5,2) NOT NULL,
    preco FLOAT(5,2) NOT NULL,
    imagem VARCHAR(200),                                           -- Passa local onde a imagem se hospeda
    info TEXT(500),
    fk_idcategoria INT NOT NULL,
    status CHAR(1) DEFAULT('A') CHECK (status IN ('A' , 'I')),
    FOREIGN KEY (fk_idcategoria) REFERENCES categorias(idcategoria)
);

CREATE TABLE estados (
    idestado INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeestado CHAR(2) NOT NULL UNIQUE
);

CREATE TABLE cidades (
    idcidade INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomecidade VARCHAR(30) NOT NULL,
    fk_idestado INT NOT NULL,
    status CHAR(1) DEFAULT('A') CHECK (status IN ('A' , 'I')),
    FOREIGN KEY (fk_idestado) REFERENCES estados(idestado)
);

CREATE TABLE empresas (
    idempresa INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeempresa VARCHAR(100) NOT NULL,
    status CHAR(1) DEFAULT('A') CHECK (status IN ('A' , 'I')),                                      -- Se ele está ativo (A) ou inativo (I)
    cnpj BIGINT(14) ZEROFILL NOT NULL UNIQUE,                                    -- Não pode existir dois cnpjs iguais no sistema
    nomecliente VARCHAR(100) NOT NULL,
    emailcliente VARCHAR(100) NOT NULL,                               -- Será o Login da empresas
    tipo CHAR(1) DEFAULT('U') CHECK (tipo IN ('U' , 'A')),
    senha CHAR(32) NOT NULL,                                                   -- Será a Senha da empresas
    fone BIGINT(11) ZEROFILL NOT NULL
);

CREATE TABLE endereco_empresas (
    idendereco INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cep INT ZEROFILL NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero INT NOT NULL,
    fk_idcidade INT NOT NULL,
    fk_idempresa INT NOT NULL,
    FOREIGN KEY (fk_idcidade) REFERENCES cidades(idcidade),
    FOREIGN KEY (fk_idempresa) REFERENCES empresas(idempresa)
);

CREATE TABLE endereco_funcionarios (
    idendereco INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cep INT ZEROFILL NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero INT NOT NULL,
    fk_idcidade INT NOT NULL,
    FOREIGN KEY (fk_idcidade) REFERENCES cidades(idcidade)
);

CREATE TABLE funcionarios (
    idfuncionario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomefuncionario VARCHAR(100) NOT NULL,
    cpf BIGINT(11) ZEROFILL NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL,
    fone BIGINT(11) ZEROFILL NOT NULL,
    fk_idendereco INT NOT NULL,
    status CHAR(1) DEFAULT('A') CHECK (status IN ('A' , 'I')),     
    FOREIGN KEY (fk_idendereco) REFERENCES endereco_funcionarios(idendereco)
);

CREATE TABLE movimentos (                                         -- Um 'Pacote'de movimentos, pode ter vários Itens
    idmovimento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data DATE NOT NULL,
    observacao VARCHAR(200),
    aprovado CHAR(1) DEFAULT('N') CHECK (aprovado IN ('S' , 'N')),                          -- Informa se o pedido está aprovado (S) ou não (N) pelo sistema
    entregue CHAR(1) DEFAULT('N') CHECK (entregue IN ('S' , 'N')),                          -- Informa se o pedido foi entregue (S) ou não (N)
    tipo CHAR(1) DEFAULT('S') CHECK (tipo IN ('S' , 'E')),                             -- Informa se o tipo do Moviemento é Entrada (E) ou Saída (S)                                            
    fk_idfuncionario INT NOT NULL,
    fk_idempresa INT NOT NULL,
    FOREIGN KEY (fk_idempresa) REFERENCES empresas(idempresa),
    FOREIGN KEY (fk_idfuncionario) REFERENCES funcionarios(idfuncionario)
);

CREATE TABLE movimento_itens (                                    -- Cada item de uma movimentos
    fk_idproduto INT NOT NULL,
    fk_idmovimento INT NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (fk_idproduto) REFERENCES produtos(idproduto),
    FOREIGN KEY (fk_idmovimento) REFERENCES movimentos(idmovimento)
);


-- Funciona só no phpMyAdmin
-- SELECT M.idmovimento, M.data AS Data, M.observacao AS Observação, M.aprovado AS Aprovado, M.entregue AS Entregue, F.nomefuncionario AS Funcionário FROM movimentos AS M INNER JOIN funcionarios AS F ON M.fk_idfuncionario = F.idfuncionario; 
-- SELECT M.data AS Data, M.tipo AS Tipo, I.quantidade AS Quantidade, M.aprovado AS Aprovado, M.entregue AS Entregue, M.observacao AS Observação FROM movimento_itens AS I INNER JOIN movimentos AS M ON I.fk_idmovimento = M.idmovimento;