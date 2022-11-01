-- Includes para testar

INSERT INTO estado (nomeestado) VALUES ('PR');
INSERT INTO estado (nomeestado) VALUES ('AC');
INSERT INTO estado (nomeestado) VALUES ('AL');
INSERT INTO estado (nomeestado) VALUES ('AM');
INSERT INTO estado (nomeestado) VALUES ('AP');
INSERT INTO estado (nomeestado) VALUES ('BA');
INSERT INTO estado (nomeestado) VALUES ('CE');
INSERT INTO estado (nomeestado) VALUES ('DF');
INSERT INTO estado (nomeestado) VALUES ('ES');
INSERT INTO estado (nomeestado) VALUES ('GO');
INSERT INTO estado (nomeestado) VALUES ('MA');
INSERT INTO estado (nomeestado) VALUES ('MG');
INSERT INTO estado (nomeestado) VALUES ('MS');
INSERT INTO estado (nomeestado) VALUES ('MT');
INSERT INTO estado (nomeestado) VALUES ('PA');
INSERT INTO estado (nomeestado) VALUES ('PB');
INSERT INTO estado (nomeestado) VALUES ('PE');
INSERT INTO estado (nomeestado) VALUES ('PI');
INSERT INTO estado (nomeestado) VALUES ('RJ');
INSERT INTO estado (nomeestado) VALUES ('RN');
INSERT INTO estado (nomeestado) VALUES ('RO');
INSERT INTO estado (nomeestado) VALUES ('RR');
INSERT INTO estado (nomeestado) VALUES ('RS');
INSERT INTO estado (nomeestado) VALUES ('SC');
INSERT INTO estado (nomeestado) VALUES ('SE');
INSERT INTO estado (nomeestado) VALUES ('SP');
INSERT INTO estado (nomeestado) VALUES ('TO');

INSERT INTO cidade (nomecidade, fk_idestado) VALUES ('Cascavel', 1);
INSERT INTO cidade (nomecidade, fk_idestado) VALUES ('Foz do Iguaçu', 1);

INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Maria Restaurante', 'maria.teixeira@restaurante.com', 'Maria Teixeira', '00dab8a0c5bd8264fe6bbcf80f32cfb4', '(45) 99987-6578', '12.456.678/0001-25', 'PR', 'Cascavel', 'Rua Floresta, 354' ); -- SENHA Maria.Teixeira123
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Cantina do Paulo', 'paulo.joao@lojasbrasil.com', 'Paulo Ricardo', 'd2646c1d1e9fff1f13635c82cefce276', '(45) 96478-2547', '34.468.756/0001-10', 'PR', 'Foz do Iguacu', 'Avenida dos Rios, 58' ); -- SENHA Pessego_Paulo46
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'SpaceX', 'spaceX@brasil.com', 'Ellon Musk', '3c2d80a1e9b9a45695f1d7bb8c46fd3a', '(45) 95739-7485', '68.468.756/0001-5', 'PR', 'Cascavel', 'Rua America, 728' ); -- SENHA chupaZukenberg
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Super Muffatinho', 'mufato@mercado.com', 'Jose Muffato', 'aca3ec7278a47144c0a863e60c595abe', '(45) 95831-9947', '69.468.756/0001-2', 'PR', 'Cascavel', 'Rua dos Macacos,143' ); -- SENHA batata123
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'MercadinhoTOP', 'rafael.eduardo@mercado.com', 'Eduardo Rafael', '0af49b414fae9ffe5000f2969c1d70af', '(45) 94478-7567', '70.468.756/0001-1', 'PR', 'Cascavel', 'Avenida Santo Iguaçu, 243' ); -- SENHA underline_underline12
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Display', 'display.flex@codigo.com', 'Douglas Braga', '687c45c4a5292c9c560079b61f47c65a', '(45) 96688-1232', '11.468.756/0001-3', 'PR', 'Santa Maria', 'Avenida Santos Dumont, 948' ); -- SENHA dougObest
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Oscorp', 'Corp.company@corporation.com', 'Norman Osborn', '5bec0f670d2112ba3302216c9881f27f', '(45) 9120-9558', '70.468.756/0001-24', 'PR', 'Toledo', 'Rua das Orquideas, 387' ); -- SENHA malditoHomiAranha
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Sirius Cibernética', 'hackingcomputers@cyber.com', 'Luana de Melo', 'hackerman123', '(45) 9183-2457', '14.468.756/0001-23', 'PR', 'Boa Vista', 'Rua São Jose, 375' ); -- SENHA hackerman123
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Industria Rico', 'making.progress@sucss.com', '784ce9c62d5c53d3fffcf2d5a72f88e6', 't12345678', '(45) 91234-2344', '15.468.756/0001-22', 'PR', 'Boa Vista', 'Avenida Sao Paulo ,953' ); -- SENHA MindSet ;)
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Soylent Corp', 'melhor.empresa@secrets.com', 'Harry Osborn', '66ec55dea128beba04a2d2b0a368f553', '(45) 93453-4556', '16.468.756/0001-21', 'PR', 'Cafelandia', 'Avenida Santo Antonio, 123' ); -- SENHA Eu não mamei seu pai
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'VBC America', 'gonfriques@hunter.com', 'Gon Friques', '569bfcd06da769ce8c26d300e5519048', '(45) 91232-1444', '17.468.756/0001-20', 'PR', 'Campo Bonito', 'Rua Brasil, 564' ); -- SENHA KilluaS2
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'BCG União', 'naruto.uchiha@folha.com', 'Naruto Uchiha', 'be877f26501edbb3727be0ebdefcafd9', '(45) 94576-7668', '18.468.756/0001-19', 'PR', 'Cascavel', 'Rua Sao Pedro, 569' ); -- SENHA SASUKEEEEEE
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Latina', 'menino.ney@brasil.com', 'Neymar Jr.', '', '(45) 92354-7877', '19.468.756/0001-18', 'PR', 'Santa Maria', 'Avenida Sao Pedro, 010' ); -- SENHA 
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Marcolle', 'festa.marcolle@enterteri.com', 'Luiza de Souza', 'n31846713', '(45) 92536-2453', '20.468.756/0001-17', 'PR', 'Santa Maria', 'Avenida São Joao, 212' ); -- SENHA 
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Bacaro', 'bacaro.reunioes@escritorio.com', 'Franklin Clinton', 'g91243678', '(45) 92543-6245', '21.468.756/0001-16', 'PR', 'Santa Maria', 'Rua São Francisco, 439' ); -- SENHA 
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Sorrentino', 'sorrentino.italia@spaguet.com', 'William Sorrentino', 'U29348569', '(45) 92453-6243', '22.468.756/0001-15', 'PR', 'Ceu Azul', 'Rua São Willcisco, 439' ); -- SENHA 
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Green Blacks', 'blacks.flag@credo.com', 'Amanda Dias', 'S943275631', '(45) 97897-8585', '23.468.756/0001-14', 'PR', 'Corbelia', 'Avenida Afonso Trigo, 590' ); -- SENHA 
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Cioccolatta', 'cioco.latta@brasil.com', 'Nicolas Costa', 'w12934578', '(45) 91231-2354', '24.468.756/0001-13', 'PR', 'Guaraniacu', 'Avenida Gabriel Zanette, 921' ); -- SENHA 
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'empresa Star', 'jo.estar@kujo.com', 'Jotaro Kujo', 'Yare Yare Daze', '(45) 95366-7865', '25.468.756/0001-12', 'PR', 'Foz do Iguacu', 'Rua Sete de Setembro, 367' ); -- SENHA 0fa89b15799d7e5039ed375c52ce6324
INSERT INTO empresa (nomeempresa, emailcliente, nomecliente, senha, fone, cnpj, estado, cidade, endereco) VALUES ( 'Magna ', 'swing.magna@brasil.com', 'Rafael Correia', 'y45454545', '(45) 91245-4576', '01.468.756/0001-25', 'PR', 'Toledo', 'Rua Tiradentes, 384' ); -- SENHA 

INSERT INTO categoria (nomecategoria) VALUES ('Pastel Grande');
INSERT INTO categoria (nomecategoria) VALUES ('Pastel Mini');
INSERT INTO categoria (nomecategoria) VALUES ('Bolinho Grande');
INSERT INTO categoria (nomecategoria) VALUES ('Bolinho Mini');
INSERT INTO categoria (nomecategoria) VALUES ('Coxinha Grande');
INSERT INTO categoria (nomecategoria) VALUES ('Coxinha Mini');
INSERT INTO categoria (nomecategoria) VALUES ('Risolis Grande');
INSERT INTO categoria (nomecategoria) VALUES ('Risolis Mini');
INSERT INTO categoria (nomecategoria) VALUES ('Salgados Grande');
INSERT INTO categoria (nomecategoria) VALUES ('Salgados Mini');

INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Carne Mini', '1', '22', 'pcm.jpg', '2' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Frango Mini', '1', '22', 'pfm.jpg', '2' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Pizza Mini', '1', '22', 'ppm.jpg', '2' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Queijo Mini', '1', '22', 'pqm.jpg', '2' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel  de Carne Grande', '1', '22', 'pcg.jpg', '1' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Frango Grande', '1', '22', 'pfg.jpg', '1' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Pizza Grande', '1', '22', 'ppg.jpg', '1' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Pastel de Queijo Grande', '1', '22', 'pqg.jpg', '1' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Bolinho de Carne Empanado Grande', '1.3', '21', 'bceg.jpg', '3' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Bolinho de Batata com Carne', '1.3', '21', 'bbcg.jpg', '4' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Bolinho de Batata com Frango Grande', '1.3', '21', 'bbfg.jpg', '3' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Carne Grande', '1.3', '21', 'ccg.jpg', '5' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Frango Grande com Requeijao ', '1.3', '21', 'cfrg.jpg', '5' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Frango Grande', '1.3', '21', 'cfg.jpg', '5' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Enrolado de Salsicha Grande', '1.3', '21', 'esg.jpg', '9' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Kibe de Carne Grande', '1.3', '21', 'kcg.jpg', '9' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Risolis de Carne Grande', '1.3', '21', 'rcg.jpg', '7' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Risolis de Frango Grande', '1.3', '21', 'rfg.jpg', '7' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Risolis de Pizza Grande', '1.3', '21', 'rpg.jpg', '7' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Bolinho de Queijo Mini', '2', '36', 'bqm.jpg', '4' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Carne Mini', '2', '36', 'ccm.jpg', '6' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Coxinha de Frango Mini', '2', '36', 'cfm.jpg', '6' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Enrolado de Salsicha Mini', '2', '36', 'esm.jpg', '10' );
INSERT INTO produto (nomeproduto, peso, preco, imagem, fk_idcategoria) VALUES ( 'Kibe de Carne Mini', '2', '36', 'kcm.jpg', '10' );

INSERT INTO funcionario (nomefuncionario, email, fone, cpf, estado, cidade, endereco) VALUES ( 'Bruno Cinha Pereira', '206.917.950-88', 'bruno.pereira@trabalho.com', '(45) 92286-4142', 'PR', 'Cascavel', 'Rua Santos Drumont, 324');
INSERT INTO funcionario (nomefuncionario, email, fone, cpf, estado, cidade, endereco) VALUES ( 'Manuela Correia Ribeiro', '098.313.790-04', 'manuela.ribeiro@trabalho.com', '(45) 92102-3528', 'PR', 'Cascavel', 'Avenida Afonso Trigo, 234');
INSERT INTO funcionario (nomefuncionario, email, fone, cpf, estado, cidade, endereco) VALUES ( 'Gabriel Goncalves Dias', '326.977.610-12', 'gabriel.dias@trabalho.com', '(45) 93015-1871', 'PR', 'Cascavel', 'Avenida Goias, 465');
INSERT INTO funcionario (nomefuncionario, email, fone, cpf, estado, cidade, endereco) VALUES ( 'Sarah Alves Costa', '527.498.490-80', 'sarah.costa@trabalho.com', '(45) 93473-2231', 'PR', 'Cascavel', 'Rua 7 de Setembro, 823');
INSERT INTO funcionario (nomefuncionario, email, fone, cpf, estado, cidade, endereco) VALUES ( 'Emily Lima Barros', '103.291.150-65', 'emily.barros@trabalho.com', '(45) 94552-1833', 'PR', 'Cascavel', 'Rua 8 de Setembro, 175');

INSERT INTO movimento (data, funcionario_idfuncionario, empresa_idempresa) VALUES ('2018-01-01', 1, 1);

INSERT INTO movimento_item (fk_idproduto, fk_idmovimento, quantidade) VALUES (1, 1, 20);
INSERT INTO movimento_item (fk_idproduto, fk_idmovimento, quantidade) VALUES (2, 1, 10);
INSERT INTO movimento_item (fk_idproduto, fk_idmovimento, quantidade) VALUES (3, 1, 5);


