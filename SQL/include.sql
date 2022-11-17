-- Includes para testar

INSERT INTO estados (nomeestado) VALUES ('PR');
INSERT INTO estados (nomeestado) VALUES ('AC');
INSERT INTO estados (nomeestado) VALUES ('AL');
INSERT INTO estados (nomeestado) VALUES ('AM');
INSERT INTO estados (nomeestado) VALUES ('AP');
INSERT INTO estados (nomeestado) VALUES ('BA');
INSERT INTO estados (nomeestado) VALUES ('CE');
INSERT INTO estados (nomeestado) VALUES ('DF');
INSERT INTO estados (nomeestado) VALUES ('ES');
INSERT INTO estados (nomeestado) VALUES ('GO');
INSERT INTO estados (nomeestado) VALUES ('MA');
INSERT INTO estados (nomeestado) VALUES ('MG');
INSERT INTO estados (nomeestado) VALUES ('MS');
INSERT INTO estados (nomeestado) VALUES ('MT');
INSERT INTO estados (nomeestado) VALUES ('PA');
INSERT INTO estados (nomeestado) VALUES ('PB');
INSERT INTO estados (nomeestado) VALUES ('PE');
INSERT INTO estados (nomeestado) VALUES ('PI');
INSERT INTO estados (nomeestado) VALUES ('RJ');
INSERT INTO estados (nomeestado) VALUES ('RN');
INSERT INTO estados (nomeestado) VALUES ('RO');
INSERT INTO estados (nomeestado) VALUES ('RR');
INSERT INTO estados (nomeestado) VALUES ('RS');
INSERT INTO estados (nomeestado) VALUES ('SC');
INSERT INTO estados (nomeestado) VALUES ('SE');
INSERT INTO estados (nomeestado) VALUES ('SP');
INSERT INTO estados (nomeestado) VALUES ('TO');

INSERT INTO cidades (nomecidade, fk_idestado) VALUES ('Cascavel', 1);
INSERT INTO cidades (nomecidade, fk_idestado) VALUES ('Foz do Iguaçu', 1);

INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Maria Restaurante', 'maria.teixeira@restaurante.com', 'Maria Teixeira', '00dab8a0c5bd8264fe6bbcf80f32cfb4', '45999876578', '12456678000125'); -- SENHA Maria.Teixeira123
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Cantina do Paulo', 'paulo.joao@lojasbrasil.com', 'Paulo Ricardo', 'd2646c1d1e9fff1f13635c82cefce276', '45964782547', '34468756000110'); -- SENHA Pessego_Paulo46
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'SpaceX', 'spaceX@brasil.com', 'Ellon Musk', '3c2d80a1e9b9a45695f1d7bb8c46fd3a', '45957397485', '6846875600015'); -- SENHA chupaZukenberg
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Super Muffatinho', 'mufato@mercado.com', 'Jose Muffato', 'aca3ec7278a47144c0a863e60c595abe', '45958319947', '6946875600012'); -- SENHA batata123
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'MercadinhoTOP', 'rafael.eduardo@mercado.com', 'Eduardo Rafael', '0af49b414fae9ffe5000f2969c1d70af', '45944787567', '7046875600011'); -- SENHA underline_underline12
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Display', 'display.flex@codigo.com', 'Douglas Braga', '687c45c4a5292c9c560079b61f47c65a', '45966881232', '1146875600013'); -- SENHA dougObest
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Oscorp', 'Corp.company@corporation.com', 'Norman Osborn', '5bec0f670d2112ba3302216c9881f27f', '4591209558', '70468756000124'); -- SENHA malditoHomiAranha
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Sirius Cibernética', 'hackingcomputers@cyber.com', 'Luana de Melo', 'hackerman123', '4591832457', '14468756000123'); -- SENHA hackerman123
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Industria Rico', 'making.progress@sucss.com', '784ce9c62d5c53d3fffcf2d5a72f88e6', 't12345678', '45912342344', '15468756000122'); -- SENHA MindSet ;)
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Soylent Corp', 'melhor.empresas@secrets.com', 'Harry Osborn', '66ec55dea128beba04a2d2b0a368f553', '45934534556', '16468756000121'); -- SENHA Eu não mamei seu pai
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, tipo) VALUES ( 'VBC America', 'gon.friques@hunter.com', 'Gon Friques', '569bfcd06da769ce8c26d300e5519048', '45912321444', '17468756000120', 'A'); -- SENHA KilluaS2
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'BCG União', 'naruto.uchiha@folha.com', 'Naruto Uchiha', 'be877f26501edbb3727be0ebdefcafd9', '45945767668', '18468756000119'); -- SENHA SASUKEEEEEE
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Latina', 'menino.ney@brasil.com', 'Neymar Jr.', '', '45923547877', '19468756000118'); -- SENHA 
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Marcolle', 'festa.marcolle@enterteri.com', 'Luiza de Souza', 'n31846713', '45925362453', '20468756000117'); -- SENHA 
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Bacaro', 'bacaro.reunioes@escritorio.com', 'Franklin Clinton', 'g91243678', '45925436245', '21468756000116'); -- SENHA 
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Sorrentino', 'sorrentino.italia@spaguet.com', 'William Sorrentino', 'U29348569', '45924536243', '22468756000115'); -- SENHA 
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Green Blacks', 'blacks.flag@credo.com', 'Amanda Dias', 'S943275631', '4597897-8585', '23468756000114'); -- SENHA 
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Cioccolatta', 'cioco.latta@brasil.com', 'Nicolas Costa', 'w12934578', '45912312354', '24468756000113'); -- SENHA 
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Speedwagon Foundation', 'jotaro.kujo@star.com', 'Jotaro Kujo', '0fa89b15799d7e5039ed375c52ce6324', '45953667865', '25468756000112'); -- SENHA Yare Yare Daze
INSERT INTO empresas (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj) VALUES ( 'Magna ', 'swing.magna@brasil.com', 'Rafael Correia', 'y45454545', '45912454576', '01468756000125'); -- SENHA 

INSERT INTO endereco_empresas (cep, bairro, rua, numero, fk_idcidade, fk_idempresa) VALUES (85803280, "Santa Felicidade", "Geraldo de Oliveira", 740, 1, 11);

INSERT INTO categorias (nomecategoria) VALUES ('Pastel Grande');
INSERT INTO categorias (nomecategoria) VALUES ('Pastel Mini');
INSERT INTO categorias (nomecategoria) VALUES ('Bolinho Grande');
INSERT INTO categorias (nomecategoria) VALUES ('Bolinho Mini');
INSERT INTO categorias (nomecategoria) VALUES ('Coxinha Grande');
INSERT INTO categorias (nomecategoria) VALUES ('Coxinha Mini');
INSERT INTO categorias (nomecategoria) VALUES ('Risolis Grande');
INSERT INTO categorias (nomecategoria) VALUES ('Risolis Mini');
INSERT INTO categorias (nomecategoria) VALUES ('Salgados Grande');
INSERT INTO categorias (nomecategoria) VALUES ('Salgados Mini');

INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Carne Mini', '1', '22', 'pcm.jpg', '2' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Frango Mini', '1', '22', 'pfm.jpg', '2' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Pizza Mini', '1', '22', 'ppm.jpg', '2' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Queijo Mini', '1', '22', 'pqm.jpg', '2' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel  de Carne Grande', '1', '22', 'pcg.jpg', '1' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Frango Grande', '1', '22', 'pfg.jpg', '1' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Pizza Grande', '1', '22', 'ppg.jpg', '1' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Queijo Grande', '1', '22', 'pqg.jpg', '1' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Bolinho de Carne Empanado Grande', '1.3', '21', 'bceg.jpg', '3' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Bolinho de Batata com Carne', '1.3', '21', 'bbcg.jpg', '4' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Bolinho de Batata com Frango Grande', '1.3', '21', 'bbfg.jpg', '3' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Carne Grande', '1.3', '21', 'ccg.jpg', '5' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Frango Grande com Requeijao ', '1.3', '21', 'cfrg.jpg', '5' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Frango Grande', '1.3', '21', 'cfg.jpg', '5' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Enrolado de Salsicha Grande', '1.3', '21', 'esg.jpg', '9' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Kibe de Carne Grande', '1.3', '21', 'kcg.jpg', '9' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Risolis de Carne Grande', '1.3', '21', 'rcg.jpg', '7' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Risolis de Frango Grande', '1.3', '21', 'rfg.jpg', '7' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Risolis de Pizza Grande', '1.3', '21', 'rpg.jpg', '7' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Bolinho de Queijo Mini', '2', '36', 'bqm.jpg', '4' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Carne Mini', '2', '36', 'ccm.jpg', '6' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Frango Mini', '2', '36', 'cfm.jpg', '6' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Enrolado de Salsicha Mini', '2', '36', 'esm.jpg', '10' );
INSERT INTO produtos (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Kibe de Carne Mini', '2', '36', 'kcm.jpg', '10' );

-- INSERT INTO funcionario (nomefuncionario, email, fone, cpf) VALUES ( 'Bruno Cinha Pereira', '206.917.950-88', 'bruno.pereira@trabalho.com', '4592286-4142', 'PR', 'Cascavel', 'Rua Santos Drumont, 324');
-- INSERT INTO funcionario (nomefuncionario, email, fone, cpf) VALUES ( 'Manuela Correia Ribeiro', '098.313790-04', 'manuela.ribeiro@trabalho.com', '4592102-3528', 'PR', 'Cascavel', 'Avenida Afonso Trigo, 234');
-- INSERT INTO funcionario (nomefuncionario, email, fone, cpf) VALUES ( 'Gabriel Goncalves Dias', '326.97761012', 'gabriel.dias@trabalho.com', '45930151871', 'PR', 'Cascavel', 'Avenida Goias, 465');
-- INSERT INTO funcionario (nomefuncionario, email, fone, cpf) VALUES ( 'Sarah Alves Costa', '527.498.490-80', 'sarah.costa@trabalho.com', '45934732231', 'PR', 'Cascavel', 'Rua 7 de Setembro, 823');
-- INSERT INTO funcionario (nomefuncionario, email, fone, cpf) VALUES ( 'Emily Lima Barros', '103.291.15065', 'emily.barros@trabalho.com', '45945521833', 'PR', 'Cascavel', 'Rua 8 de Setembro, 175');

-- INSERT INTO movimentos (data, funcionario_idfuncionario, empresa_idempresa) VALUES ('2018-01-01', 1, 1);

-- INSERT INTO movimento_itens (fk_idproduto, fk_idmovimento, quantidade) VALUES (1, 1, 20);
-- INSERT INTO movimento_itens (fk_idproduto, fk_idmovimento, quantidade) VALUES (2, 1, 10);
-- INSERT INTO movimento_itens (fk_idproduto, fk_idmovimento, quantidade) VALUES (3, 1, 5);


