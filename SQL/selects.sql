-- Funciona só no phpMyAdmin
-- SELECT M.idMovimento, M.data AS Data, M.observacao AS Observação, M.aprovado AS Aprovado, M.entregue AS Entregue, F.nomeFuncionario AS Funcionário FROM Movimentos AS M INNER JOIN Funcionario AS F ON M.Funcionario_idFuncionario = F.idFuncionario; 
-- SELECT M.data AS Data, M.tipo AS Tipo, I.quantidade AS Quantidade, M.aprovado AS Aprovado, M.entregue AS Entregue, M.observacao AS Observação FROM Movimento_Item AS I INNER JOIN Movimentos AS M ON I.Movimento_idMovimento = M.idMovimento;

SELECT P.idProduto as ID, P.nomeProduto AS Produto, P.peso AS Peso, P.preco AS Preço, P.imagem AS Imagem, C.nomeCategoria AS Categoria FROM produtos AS P INNER JOIN Categorias AS C ON C.idCategoria = P.Categoria_idCategoria ORDER BY `ID` ASC;

SELECT C.idCidade AS ID, E.descricao AS Estado, C.descricao AS Cidade, C.ativo AS Ativo FROM cidades AS C INNER JOIN estados AS E