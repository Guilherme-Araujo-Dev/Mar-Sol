-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Ago-2022 às 21:20
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `maresol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Pastel Grande'),
(2, 'Pastel Mini'),
(3, 'Bolinho Grande'),
(4, 'Bolinho Mini'),
(5, 'Coxinha Grande'),
(6, 'Coxinha Mini'),
(7, 'Risolis Grande'),
(8, 'Risolis Mini'),
(9, 'Salgados Grande'),
(10, 'Salgados Mini');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `idEmpresa` int(11) NOT NULL,
  `nomeEmpresa` varchar(100) NOT NULL,
  `situacao` char(1) DEFAULT 'A',
  `nomeCliente` varchar(100) NOT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `fone` varchar(15) NOT NULL,
  `CNPJ` char(18) NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`idEmpresa`, `nomeEmpresa`, `situacao`, `nomeCliente`, `emailCliente`, `senha`, `fone`, `CNPJ`, `estado`, `cidade`, `endereco`) VALUES
(1, 'Maria Restaurante', 'A', 'Maria Teixeira', 'maria.teixeira@restaurante.com', 'Maria.Teixeira123', '(45) 99987-6578', '12.456.678/0001-25', 'PR', 'Cascavel', 'Rua Floresta, 354'),
(2, 'Cantina do Paulo', 'A', 'Paulo Ricardo', 'paulo.joao@lojasbrasil.com', 'Pessego_Paulo46', '(45) 96478-2547', '34.468.756/0001-10', 'PR', 'Foz do Iguacu', 'Avenida dos Rios, 58'),
(3, 'SpaceX', 'A', 'Ellon Musk', 'spaceX@brasil.com', 'chupaZukenberg', '(45) 95739-7485', '68.468.756/0001-5', 'PR', 'Cascavel', 'Rua America, 728'),
(4, 'Super Muffatinho', 'A', 'Jose Muffato', 'mufato@mercado.com', 'batata123', '(45) 95831-9947', '69.468.756/0001-2', 'PR', 'Cascavel', 'Rua dos Macacos,143'),
(5, 'MercadinhoTOP', 'A', 'Eduardo Rafael', 'rafael.eduardo@mercado.com', 'underline_underline12', '(45) 94478-7567', '70.468.756/0001-1', 'PR', 'Cascavel', 'Avenida Santo Iuga?u, 243'),
(6, 'Display', 'A', 'Douglas Braga', 'display.flex@codigo.com', 'c73903278', '(45) 96688-1232', '11.468.756/0001-3', 'PR', 'Santa Maria', 'Avenida Santos Dumont, 948'),
(7, 'Oscorp', 'A', 'Norman Osborn', 'Corp.company@corporation.com', 'r01982438', '(45) 9120-9558', '70.468.756/0001-24', 'PR', 'Toledo', 'Rua das Orquideas, 387'),
(8, 'Sirius Cibern?tica', 'A', 'Luana de Melo', 'hackingcomputers@cyber.com', 'e76458123', '(45) 9183-2457', '14.468.756/0001-23', 'PR', 'Boa Vista', 'Rua S?o Jose, 375'),
(9, 'Industria Rico', 'A', 'Thiago Groni', 'making.progress@sucss.com', 't12345678', '(45) 91234-2344', '15.468.756/0001-22', 'PR', 'Boa Vista', 'Avenida Sao Paulo ,953'),
(10, 'Soylent Corp', 'A', 'Harry Osborn', 'melhor.empresa@secrets.com', 's32165474', '(45) 93453-4556', '16.468.756/0001-21', 'PR', 'Cafelandia', 'Avenida Santo Antonio, 123'),
(11, 'VBC America', 'A', 'Priscila Almeida', 'VBC@verybig.com', 'a571057892', '(45) 91232-1444', '17.468.756/0001-20', 'PR', 'Campo Bonito', 'Rua Brasil, 564'),
(12, 'BCG Uni?o', 'A', 'Elizeu Prado', 'uniao.bcg@brasil.com', 'm12035781', '(45) 94576-7668', '18.468.756/0001-19', 'PR', 'Cascavel', 'Rua Sao Pedro, 569'),
(13, 'Latina', 'A', 'Jonas da Silva', 'america.latina@brasil.com', 'o12438571', '(45) 92354-7877', '19.468.756/0001-18', 'PR', 'Santa Maria', 'Avenida Sao Pedro, 010'),
(14, 'Marcolle', 'A', 'Luiza de Souza', 'festa.marcolle@enterteri.com', 'n31846713', '(45) 92536-2453', '20.468.756/0001-17', 'PR', 'Santa Maria', 'Avenida S?o Joao, 212'),
(15, 'Bacaro', 'A', 'Franklin Clinton', 'bacaro.reunioes@escritorio.com', 'g91243678', '(45) 92543-6245', '21.468.756/0001-16', 'PR', 'Santa Maria', 'Rua S?o Francisco, 439'),
(16, 'Sorrentino', 'A', 'William Sorrentino', 'sorrentino.italia@spaguet.com', 'U29348569', '(45) 92453-6243', '22.468.756/0001-15', 'PR', 'Ceu Azul', 'Rua S?o Willcisco, 439'),
(17, 'Green Blacks', 'A', 'Amanda Dias', 'blacks.flag@credo.com', 'S943275631', '(45) 97897-8585', '23.468.756/0001-14', 'PR', 'Corbelia', 'Avenida Afonso Trigo, 590'),
(18, 'Cioccolatta', 'A', 'Nicolas Costa', 'cioco.latta@brasil.com', 'w12934578', '(45) 91231-2354', '24.468.756/0001-13', 'PR', 'Guaraniacu', 'Avenida Gabriel Zanette, 921'),
(19, 'Empresas Star', 'A', 'Carlos Azevedo', 'jo.estar@kujo.com', 'h12834575', '(45) 95366-7865', '25.468.756/0001-12', 'PR', 'Foz do Iguacu', 'Rua Sete de setembro, 367'),
(20, 'Magna ', 'A', 'Rafael Correia', 'swing.magna@brasil.com', 'y45454545', '(45) 91245-4576', '01.468.756/0001-25', 'PR', 'Toledo', 'Rua Tiradentes, 384'),
(21, 'Empresa Boa', 'A', 'Teste Araújo', 'guilhermearaujop26@gmail.com', 'taGdag', '(45) 99830-5347', '12.748.365/0001-94', 'PR', 'Cascavel', 'Rua da Minha Casa, 123'),
(22, 'Empresa Legal', 'A', 'Guilherme Araujo', 'empresa.legal@gmail.com', 'Capivara123', '(45) 99830-5347', '10.000.000/0001-10', 'PR', 'Cascavel', 'Rua da Minha Casa, 123'),
(23, 'Grande Empresa', 'A', 'Guilherme Araújo', 'grande.empresa@restaurante.com', '123456', '(45) 99830-5347', '14.123.654.789/000', 'PR', 'Cascavel', 'Rua da Empresa, 321'),
(24, 'Teste', 'A', 'Guilherme Araújo', 'teste@gmaill.com', '123456', '(45) 9 9937-682', '00.000.000/0000-00', 'PR', 'Cascavel', 'Aqui'),
(28, 'gdagad', 'A', 'gdagad gdagad', 'maria.teixeira@restaurante.com', '55555555555555555555555555555555', '(00) 0000-0000', '00.000.000/0000-01', 'PR', 'dassag', 'tyegad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `idFuncionario` int(11) NOT NULL,
  `nomeFuncionario` varchar(100) NOT NULL,
  `CPF` char(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idFuncionario`, `nomeFuncionario`, `CPF`, `email`, `fone`, `estado`, `cidade`, `endereco`) VALUES
(1, 'Bruno Cinha Pereira', '(45) 92286-414', '206.917.950-88', 'bruno.pereira@t', 'PR', 'Cascavel', 'Rua Santos Drumont, 324'),
(2, 'Manuela Correia Ribeiro', '(45) 92102-352', '098.313.790-04', 'manuela.ribeiro', 'PR', 'Cascavel', 'Avenida Afonso Trigo, 234'),
(3, 'Gabriel Goncalves Dias', '(45) 93015-187', '326.977.610-12', 'gabriel.dias@tr', 'PR', 'Cascavel', 'Avenida Goias, 465'),
(4, 'Sarah Alves Costa', '(45) 93473-223', '527.498.490-80', 'sarah.costa@tra', 'PR', 'Cascavel', 'Rua 7 de Setembro, 823'),
(5, 'Emily Lima Barros', '(45) 94552-183', '103.291.150-65', 'emily.barros@tr', 'PR', 'Cascavel', 'Rua 8 de Setembro, 175');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentos`
--

CREATE TABLE `movimentos` (
  `idMovimento` int(11) NOT NULL,
  `data` date NOT NULL,
  `observacao` varchar(200) DEFAULT NULL,
  `aprovado` char(1) DEFAULT 'N',
  `entregue` char(1) DEFAULT 'N',
  `tipo` char(1) DEFAULT 'S',
  `Funcionario_idFuncionario` int(11) NOT NULL,
  `Empresa_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `movimentos`
--

INSERT INTO `movimentos` (`idMovimento`, `data`, `observacao`, `aprovado`, `entregue`, `tipo`, `Funcionario_idFuncionario`, `Empresa_idEmpresa`) VALUES
(1, '2018-01-01', NULL, 'N', 'N', 'S', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimento_item`
--

CREATE TABLE `movimento_item` (
  `Produto_idProduto` int(11) NOT NULL,
  `Movimento_idMovimento` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(100) NOT NULL,
  `peso` float(4,2) NOT NULL,
  `preco` float(5,2) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `Categoria_idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `nomeProduto`, `peso`, `preco`, `imagem`, `Categoria_idCategoria`) VALUES
(27, 'Pastel de Carne Mini', 1.00, 22.00, 'pcm.jpg', 2),
(28, 'Pastel de Frango Mini', 1.00, 22.00, 'pfm.jpg', 2),
(29, 'Pastel de Pizza Mini', 1.00, 22.00, 'ppm.jpg', 2),
(30, 'Pastel de Queijo Mini', 1.00, 22.00, 'pqm.jpg', 2),
(31, 'Pastel  de Carne Grande', 1.00, 22.00, 'pcg.jpg', 1),
(32, 'Pastel de Frango Grande', 1.00, 22.00, 'pfg.jpg', 1),
(33, 'Pastel de Pizza Grande', 1.00, 22.00, 'ppg.jpg', 1),
(34, 'Pastel de Queijo Grande', 1.00, 22.00, 'pqg.jpg', 1),
(35, 'Bolinho de Carne Empanado Grande', 1.30, 21.00, 'bceg.jpg', 3),
(36, 'Bolinho de Batata com Carne', 1.30, 21.00, 'bbcg.jpg', 4),
(37, 'Bolinho de Batata com Frango Grande', 1.30, 21.00, 'bbfg.jpg', 3),
(38, 'Coxinha de Carne Grande', 1.30, 21.00, 'ccg.jpg', 5),
(39, 'Coxinha de Frango Grande com Requeijao ', 1.30, 21.00, 'cfrg.jpg', 5),
(40, 'Coxinha de Frango Grande', 1.30, 21.00, 'cfg.jpg', 5),
(41, 'Enrolado de Salsicha Grande', 1.30, 21.00, 'esg.jpg', 9),
(42, 'Kibe de Carne Grande', 1.30, 21.00, 'kcg.jpg', 9),
(43, 'Risolis de Carne Grande', 1.30, 21.00, 'rcg.jpg', 7),
(44, 'Risolis de Frango Grande', 1.30, 21.00, 'rfg.jpg', 7),
(45, 'Risolis de Pizza Grande', 1.30, 21.00, 'rpg.jpg', 7),
(46, 'Bolinho de Queijo Mini', 2.00, 36.00, 'bqm.jpg', 4),
(47, 'Coxinha de Carne Mini', 2.00, 36.00, 'ccm.jpg', 6),
(48, 'Coxinha de Frango Mini', 2.00, 36.00, 'cfm.jpg', 6),
(49, 'Enrolado de Salsicha Mini', 2.00, 36.00, 'esm.jpg', 10),
(50, 'Kibe de Carne Mini', 2.00, 36.00, 'kcm.jpg', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idEmpresa`),
  ADD UNIQUE KEY `ai_cnpj` (`CNPJ`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idFuncionario`),
  ADD UNIQUE KEY `ai_cpf` (`CPF`);

--
-- Índices para tabela `movimentos`
--
ALTER TABLE `movimentos`
  ADD PRIMARY KEY (`idMovimento`),
  ADD KEY `Empresa_idEmpresa` (`Empresa_idEmpresa`),
  ADD KEY `Funcionario_idFuncionario` (`Funcionario_idFuncionario`);

--
-- Índices para tabela `movimento_item`
--
ALTER TABLE `movimento_item`
  ADD KEY `Produto_idProduto` (`Produto_idProduto`),
  ADD KEY `Movimento_idMovimento` (`Movimento_idMovimento`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `Categoria_idCategoria` (`Categoria_idCategoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `movimentos`
--
ALTER TABLE `movimentos`
  MODIFY `idMovimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `movimentos`
--
ALTER TABLE `movimentos`
  ADD CONSTRAINT `movimentos_ibfk_1` FOREIGN KEY (`Empresa_idEmpresa`) REFERENCES `empresas` (`idEmpresa`),
  ADD CONSTRAINT `movimentos_ibfk_2` FOREIGN KEY (`Funcionario_idFuncionario`) REFERENCES `funcionarios` (`idFuncionario`);

--
-- Limitadores para a tabela `movimento_item`
--
ALTER TABLE `movimento_item`
  ADD CONSTRAINT `movimento_item_ibfk_1` FOREIGN KEY (`Produto_idProduto`) REFERENCES `produtos` (`idProduto`),
  ADD CONSTRAINT `movimento_item_ibfk_2` FOREIGN KEY (`Movimento_idMovimento`) REFERENCES `movimentos` (`idMovimento`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categorias` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
