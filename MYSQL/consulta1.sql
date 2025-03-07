SELECT * FROM produto

SELECT nomeFantasia, endereco, telefone, codCidade FROM fornecedor

SELECT cadVenda, dataVenda
FROM venda
WHERE status='Despachada'

SELECT * FROM clientejuridico

SELECT numeroLote 
FROM produtolote
WHERE dataValidade<(CURRENT_DATE)

SELECT nome FROM departamento