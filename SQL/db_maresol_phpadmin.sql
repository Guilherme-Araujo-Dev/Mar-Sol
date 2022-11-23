-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2022 às 13:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

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
  `idcategoria` int(11) NOT NULL,
  `nomecategoria` varchar(50) NOT NULL,
  `status` char(1) DEFAULT 'A' CHECK (`status` in ('A','I'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nomecategoria`, `status`) VALUES
(1, 'Pastel Grande', 'A'),
(2, 'Pastel Mini', 'A'),
(3, 'Bolinho Grande', 'A'),
(4, 'Bolinho Mini', 'A'),
(5, 'Coxinha Grande', 'A'),
(6, 'Coxinha Mini', 'A'),
(7, 'Risolis Grande', 'A'),
(8, 'Risolis Mini', 'A'),
(9, 'Salgados Grande', 'A'),
(10, 'Salgados Mini', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `idcidade` int(11) NOT NULL,
  `nomecidade` varchar(30) NOT NULL,
  `fk_idestado` int(11) NOT NULL,
  `status` char(1) DEFAULT 'A' CHECK (`status` in ('A','I'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`idcidade`, `nomecidade`, `fk_idestado`, `status`) VALUES
(1, 'Cascavel', 1, 'A'),
(2, 'Foz do Igua?u', 1, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `idempresa` int(11) NOT NULL,
  `nomeempresa` varchar(100) NOT NULL,
  `status` char(1) DEFAULT 'A' CHECK (`status` in ('A','I')),
  `cnpj` bigint(14) UNSIGNED ZEROFILL NOT NULL,
  `nomecliente` varchar(100) NOT NULL,
  `emailcliente` varchar(100) NOT NULL,
  `tipo` char(1) DEFAULT 'U' CHECK (`tipo` in ('U','A')),
  `senha` char(32) NOT NULL,
  `fone` bigint(11) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`idempresa`, `nomeempresa`, `status`, `cnpj`, `nomecliente`, `emailcliente`, `tipo`, `senha`, `fone`) VALUES
(1, 'Maria Restaurante', 'A', 12456678000125, 'Maria Teixeira', 'maria.teixeira@restaurante.com', 'U', '00dab8a0c5bd8264fe6bbcf80f32cfb4', 45999876578),
(2, 'Cantina do Paulo', 'A', 34468756000110, 'Paulo Ricardo', 'paulo.joao@lojasbrasil.com', 'U', 'd2646c1d1e9fff1f13635c82cefce276', 45964782547),
(3, 'SpaceX', 'A', 06846875600015, 'Ellon Musk', 'spaceX@brasil.com', 'U', '3c2d80a1e9b9a45695f1d7bb8c46fd3a', 45957397485),
(4, 'Super Muffatinho', 'A', 06946875600012, 'Jose Muffato', 'mufato@mercado.com', 'U', 'aca3ec7278a47144c0a863e60c595abe', 45958319947),
(5, 'MercadinhoTOP', 'A', 07046875600011, 'Eduardo Rafael', 'rafael.eduardo@mercado.com', 'U', '0af49b414fae9ffe5000f2969c1d70af', 45944787567),
(6, 'Display', 'A', 01146875600013, 'Douglas Braga', 'display.flex@codigo.com', 'U', '687c45c4a5292c9c560079b61f47c65a', 45966881232),
(7, 'Oscorp', 'A', 70468756000124, 'Norman Osborn', 'Corp.company@corporation.com', 'U', '5bec0f670d2112ba3302216c9881f27f', 45991209558),
(8, 'Sirius Cibern?tica', 'A', 14468756000123, 'Luana de Melo', 'hackingcomputers@cyber.com', 'U', 'hackerman123', 45991832457),
(9, 'VBC America', 'A', 17468756000120, 'Gon Friques', 'gon.friques@hunter.com', 'A', '569bfcd06da769ce8c26d300e5519048', 45912321444),
(10, 'BCG Uni?o', 'A', 18468756000119, 'Naruto Uchiha', 'naruto.uchiha@folha.com', 'U', 'be877f26501edbb3727be0ebdefcafd9', 45945767668),
(11, 'Latina', 'A', 19468756000118, 'Neymar Jr.', 'menino.ney@brasil.com', 'U', '6b652225a1746788da4fac4424f6f761', 45923547877),
(12, 'Marcolle', 'A', 20468756000117, 'Zenitsu Agatsuma', 'zenitsu.agatsuma@slayer.com', 'U', '2089e73e08d3c4853c255f1b01aa0184', 45925362453),
(13, 'Bacaro', 'A', 21468756000116, 'Zoro Roronoa', 'roronoa.zoro@twopiece.com', 'U', 'b99d75fbcbe864eb7bb5864bfbee13e9', 45925436245),
(14, 'Sorrentino', 'A', 22468756000115, 'Vegeta', 'vegeta@sayajin.com', 'U', '5bad6196f37ff7b00c11ec8369b5b37b', 45924536243),
(15, 'Green Blacks', 'A', 23468756000114, 'Adam Sandler', 'adam.sandler@actor.com', 'U', '63ed837c23e55d0831fe92dbf425a226', 45978978585),
(16, 'Cioccolatta', 'A', 24468756000113, 'Nikolas Tesla', 'nikolas.tesla@inventor.com', 'U', 'a0599a37eb0a028fc615b66b7c9451fb', 45912312354),
(17, 'Speedwagon Foundation', 'A', 25468756000112, 'Jotaro Kujo', 'jotaro.kujo@star.com', 'U', '0fa89b15799d7e5039ed375c52ce6324', 45953667865),
(18, 'Magna ', 'A', 01468756000125, 'Cellbit', 'rafael.lange@twitch.com', 'U', '192623e9b1a42ddf939db21fa4f0c701', 45912454576);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_empresas`
--

CREATE TABLE `endereco_empresas` (
  `idendereco` int(11) NOT NULL,
  `cep` int(10) UNSIGNED ZEROFILL NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `fk_idcidade` int(11) NOT NULL,
  `fk_idempresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco_empresas`
--

INSERT INTO `endereco_empresas` (`idendereco`, `cep`, `bairro`, `rua`, `numero`, `fk_idcidade`, `fk_idempresa`) VALUES
(1, 0085803280, 'Santa Felicidade', 'Geraldo de Oliveira', 740, 1, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_funcionarios`
--

CREATE TABLE `endereco_funcionarios` (
  `idendereco` int(11) NOT NULL,
  `cep` int(10) UNSIGNED ZEROFILL NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `fk_idcidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco_funcionarios`
--

INSERT INTO `endereco_funcionarios` (`idendereco`, `cep`, `bairro`, `rua`, `numero`, `fk_idcidade`) VALUES
(1, 0085810160, 'Vila Tolentino', 'Pio XII', 1742, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `idestado` int(11) NOT NULL,
  `nomeestado` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`idestado`, `nomeestado`) VALUES
(2, 'AC'),
(3, 'AL'),
(4, 'AM'),
(5, 'AP'),
(6, 'BA'),
(7, 'CE'),
(8, 'DF'),
(9, 'ES'),
(10, 'GO'),
(11, 'MA'),
(12, 'MG'),
(13, 'MS'),
(14, 'MT'),
(15, 'PA'),
(16, 'PB'),
(17, 'PE'),
(18, 'PI'),
(1, 'PR'),
(19, 'RJ'),
(20, 'RN'),
(21, 'RO'),
(22, 'RR'),
(23, 'RS'),
(24, 'SC'),
(25, 'SE'),
(26, 'SP'),
(27, 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `idfuncionario` int(11) NOT NULL,
  `nomefuncionario` varchar(100) NOT NULL,
  `cpf` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(100) NOT NULL,
  `fone` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `fk_idendereco` int(11) NOT NULL,
  `status` char(1) DEFAULT 'A' CHECK (`status` in ('A','I'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionario`, `nomefuncionario`, `cpf`, `email`, `fone`, `fk_idendereco`, `status`) VALUES
(1, 'Gabriel Ferreira', 42564557831, 'gabriel.ferreira@gmail.com', 45912454576, 1, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentos`
--

CREATE TABLE `movimentos` (
  `idmovimento` int(11) NOT NULL,
  `data` date NOT NULL,
  `observacao` varchar(200) DEFAULT NULL,
  `aprovado` char(1) DEFAULT 'N' CHECK (`aprovado` in ('S','N')),
  `entregue` char(1) DEFAULT 'N' CHECK (`entregue` in ('S','N')),
  `tipo` char(1) DEFAULT 'S' CHECK (`tipo` in ('S','E')),
  `fk_idfuncionario` int(11) NOT NULL,
  `fk_idempresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimento_itens`
--

CREATE TABLE `movimento_itens` (
  `fk_idproduto` int(11) NOT NULL,
  `fk_idmovimento` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `nomeproduto` varchar(100) NOT NULL,
  `peso` float(5,2) NOT NULL,
  `preco` float(5,2) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `fk_idcategoria` int(11) NOT NULL,
  `status` char(1) DEFAULT 'A' CHECK (`status` in ('A','I'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `nomeproduto`, `peso`, `preco`, `imagem`, `info`, `fk_idcategoria`, `status`) VALUES
(1, 'Pastel de Carne Mini', 1.00, 22.00, 'pcm.jpg', NULL, 2, 'A'),
(2, 'Pastel de Frango Mini', 1.00, 22.00, 'pfm.jpg', NULL, 2, 'A'),
(3, 'Pastel de Pizza Mini', 1.00, 22.00, 'ppm.jpg', NULL, 2, 'A'),
(4, 'Pastel de Queijo Mini', 1.00, 22.00, 'pqm.jpg', NULL, 2, 'A'),
(5, 'Pastel  de Carne Grande', 1.00, 22.00, 'pcg.jpg', NULL, 1, 'A'),
(6, 'Pastel de Frango Grande', 1.00, 22.00, 'pfg.jpg', NULL, 1, 'A'),
(7, 'Pastel de Pizza Grande', 1.00, 22.00, 'ppg.jpg', NULL, 1, 'A'),
(8, 'Pastel de Queijo Grande', 1.00, 22.00, 'pqg.jpg', NULL, 1, 'A'),
(9, 'Bolinho de Carne Empanado Grande', 1.30, 21.00, 'bceg.jpg', NULL, 3, 'A'),
(10, 'Bolinho de Batata com Carne', 1.30, 21.00, 'bbcg.jpg', NULL, 4, 'A'),
(11, 'Bolinho de Batata com Frango Grande', 1.30, 21.00, 'bbfg.jpg', NULL, 3, 'A'),
(12, 'Coxinha de Carne Grande', 1.30, 21.00, 'ccg.jpg', NULL, 5, 'A'),
(13, 'Coxinha de Frango Grande com Requeijao ', 1.30, 21.00, 'cfrg.jpg', NULL, 5, 'A'),
(14, 'Coxinha de Frango Grande', 1.30, 21.00, 'cfg.jpg', NULL, 5, 'A'),
(15, 'Enrolado de Salsicha Grande', 1.30, 21.00, 'esg.jpg', NULL, 9, 'A'),
(16, 'Kibe de Carne Grande', 1.30, 21.00, 'kcg.jpg', NULL, 9, 'A'),
(17, 'Risolis de Carne Grande', 1.30, 21.00, 'rcg.jpg', NULL, 7, 'A'),
(18, 'Risolis de Frango Grande', 1.30, 21.00, 'rfg.jpg', NULL, 7, 'A'),
(19, 'Risolis de Pizza Grande', 1.30, 21.00, 'rpg.jpg', NULL, 7, 'A'),
(20, 'Bolinho de Queijo Mini', 2.00, 36.00, 'bqm.jpg', NULL, 4, 'A'),
(21, 'Coxinha de Carne Mini', 2.00, 36.00, 'ccm.jpg', NULL, 6, 'A'),
(22, 'Coxinha de Frango Mini', 2.00, 36.00, 'cfm.jpg', NULL, 6, 'A'),
(23, 'Enrolado de Salsicha Mini', 2.00, 36.00, 'esm.jpg', NULL, 10, 'A'),
(24, 'Kibe de Carne Mini', 2.00, 36.00, 'kcm.jpg', NULL, 10, 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`idcidade`),
  ADD KEY `fk_idestado` (`fk_idestado`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idempresa`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `endereco_empresas`
--
ALTER TABLE `endereco_empresas`
  ADD PRIMARY KEY (`idendereco`),
  ADD KEY `fk_idcidade` (`fk_idcidade`),
  ADD KEY `fk_idempresa` (`fk_idempresa`);

--
-- Índices para tabela `endereco_funcionarios`
--
ALTER TABLE `endereco_funcionarios`
  ADD PRIMARY KEY (`idendereco`),
  ADD KEY `fk_idcidade` (`fk_idcidade`);

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idestado`),
  ADD UNIQUE KEY `nomeestado` (`nomeestado`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `fk_idendereco` (`fk_idendereco`);

--
-- Índices para tabela `movimentos`
--
ALTER TABLE `movimentos`
  ADD PRIMARY KEY (`idmovimento`),
  ADD KEY `fk_idempresa` (`fk_idempresa`),
  ADD KEY `fk_idfuncionario` (`fk_idfuncionario`);

--
-- Índices para tabela `movimento_itens`
--
ALTER TABLE `movimento_itens`
  ADD KEY `fk_idproduto` (`fk_idproduto`),
  ADD KEY `fk_idmovimento` (`fk_idmovimento`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`),
  ADD KEY `fk_idcategoria` (`fk_idcategoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `idcidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `endereco_empresas`
--
ALTER TABLE `endereco_empresas`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `endereco_funcionarios`
--
ALTER TABLE `endereco_funcionarios`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `movimentos`
--
ALTER TABLE `movimentos`
  MODIFY `idmovimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cidades`
--
ALTER TABLE `cidades`
  ADD CONSTRAINT `cidades_ibfk_1` FOREIGN KEY (`fk_idestado`) REFERENCES `estados` (`idestado`);

--
-- Limitadores para a tabela `endereco_empresas`
--
ALTER TABLE `endereco_empresas`
  ADD CONSTRAINT `endereco_empresas_ibfk_1` FOREIGN KEY (`fk_idcidade`) REFERENCES `cidades` (`idcidade`),
  ADD CONSTRAINT `endereco_empresas_ibfk_2` FOREIGN KEY (`fk_idempresa`) REFERENCES `empresas` (`idempresa`);

--
-- Limitadores para a tabela `endereco_funcionarios`
--
ALTER TABLE `endereco_funcionarios`
  ADD CONSTRAINT `endereco_funcionarios_ibfk_1` FOREIGN KEY (`fk_idcidade`) REFERENCES `cidades` (`idcidade`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`fk_idendereco`) REFERENCES `endereco_funcionarios` (`idendereco`);

--
-- Limitadores para a tabela `movimentos`
--
ALTER TABLE `movimentos`
  ADD CONSTRAINT `movimentos_ibfk_1` FOREIGN KEY (`fk_idempresa`) REFERENCES `empresas` (`idempresa`),
  ADD CONSTRAINT `movimentos_ibfk_2` FOREIGN KEY (`fk_idfuncionario`) REFERENCES `funcionarios` (`idfuncionario`);

--
-- Limitadores para a tabela `movimento_itens`
--
ALTER TABLE `movimento_itens`
  ADD CONSTRAINT `movimento_itens_ibfk_1` FOREIGN KEY (`fk_idproduto`) REFERENCES `produtos` (`idproduto`),
  ADD CONSTRAINT `movimento_itens_ibfk_2` FOREIGN KEY (`fk_idmovimento`) REFERENCES `movimentos` (`idmovimento`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`fk_idcategoria`) REFERENCES `categorias` (`idcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
