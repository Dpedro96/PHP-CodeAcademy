SELECT p.codPedido, p.dataRealizacao, p.dataEntrega, f.nomeFantasia
FROM pedido p NATURAL INNER JOIN fornecedor f 
WHERE YEAR(p.dataRealizacao)=2014

SELECT v.nome, v.dataNascimento, c.nome
FROM vendedor v JOIN cidade c on v.codCidade=c.codCidade
WHERE c.nome='Apucarana'

SELECT v.codVenda, v.dataVenda, vd.nome, it.numeroLote, p.descricao
FROM itemvenda it
NATURAL INNER JOIN venda v 
NATURAL INNER JOIN vendedor vd
NATURAL INNER JOIN produto p 
WHERE p.descricao='Cal'

SELECT cl.codClasse, cl.nome, p.codProduto, p.descricao, p.estoqueMinimo
FROM produto p JOIN classe cl ON p.codClasse=cl.codClasse
WHERE cl.nome='Acabamentos'

SELECT f.nomeFantasia, p.codPedido, p.dataRealizacao, p.dataEntrega
FROM fornecedor f NATURAL INNER JOIN pedido p
WHERE f.nomeFantasia='Incepa'

SELECT p.codProduto, p.descricao, pd.dataRealizacao, itv.codVenda
FROM produto p 
LEFT JOIN itempedido it ON p.codProduto=it.codProduto
LEFT JOIN pedido pd ON it.codPedido=pd.codPedido
LEFT JOIN itemvenda itv ON p.codProduto=itv.codProduto

SELECT f.nomeFantasia, pd.codPedido, pd.dataEntrega
FROM fornecedor f LEFT JOIN pedido pd ON f.codFornecedor=pd.codFornecedor

SELECT d.nome, d.localizacao, v.nome, v.dataNascimento
FROM vendedor v RIGHT JOIN departamento d  ON d.codDepartamento=v.codVendedor