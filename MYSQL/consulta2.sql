SELECT v.codVendedor, v.nome, v.endereco, c.nome, e.nome
FROM vendedor v, cidade c, estado e
WHERE v.codCidade = c.codCidade AND c.siglaEstado = e.siglaEstado

SELECT v.codVenda, v.dataVenda, vd.nome
FROM vendedor vd, venda v 
WHERE v.status = 'Despachada' AND v.codVendedor = vd.codVendedor

SELECT cf.nome
FROM  clientefisico cf, cliente c
WHERE cf.codCliente=c.codCliente AND c.endereco='Rua Marechal Floriano, 56'

SELECT cj.*, c.* 
FROM cliente c, clientejuridico cj
WHERE c.codCliente=cj.codCliente

SELECT cj.nomeFantasia, c.endereco, c.telefone, cd.nome, cd.siglaEstado
FROM clientejuridico cj, cliente c, cidade cd 
WHERE cj.codCliente=c.codCliente AND cd.codCidade=c.codCidade AND c.dataCadastro BETWEEN  '01/01/1999' AND '30/06/2003'

SELECT v.nome 
FROM vendedor v, venda vd, clientejuridico cj
WHERE v.codVendedor=vd.codVendedor AND cj.codCliente=vd.codCliente AND cj.nomeFantasia='Gelinski'

SELECT p.codProduto, pl.numeroLote, p.descricao
FROM produto p, produtolote pl 
WHERE p.codProduto=pl.codProduto AND pl.dataValidade<(CURRENT_DATE)

SELECT d.nome, v.nome
FROM departamento d, vendedor v
WHERE d.codDepartamento=v.codDepartamento
