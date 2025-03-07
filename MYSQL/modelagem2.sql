CREATE TABLE departamento(
    codDepartamento SERIAL PRIMARY KEY,
    nome VARCHAR(40) UNIQUE NOT NULL,
    descricaoFuncional VARCHAR(80),
    localizacao TEXT
);

CREATE TABLE estado(
    siglaEstado CHAR(2) PRIMARY KEY,
    nome VARCHAR(30) UNIQUE NOT NULL
);

CREATE TABLE cidade(
    codCidade SERIAL PRIMARY KEY,
    nome VARCHAR(50) UNIQUE NOT NULL,
    siglaEstado CHAR(2) NOT NULL,
    FOREIGN KEY (siglaEstado) REFERENCES estado(siglaEstado)
);

CREATE TABLE vendedor(
    codVendedor SERIAL PRIMARY KEY,
    nome VARCHAR(60) NOT NULL,
    dataNascimento DATE,
    endereco VARCHAR(60),
    cep CHAR(8),
    telefone VARCHAR(20),
    codCidade BIGINT UNSIGNED,
    dataContratacao DATE DEFAULT (CURRENT_DATE),
    codDepartamento BIGINT UNSIGNED,
    FOREIGN KEY (codCidade) REFERENCES cidade(codCidade),
    FOREIGN KEY (codDepartamento) REFERENCES departamento(codDepartamento)
);

CREATE TABLE cliente(
    codCliente SERIAL PRIMARY KEY,
    endereco VARCHAR(60),
    codCidade BIGINT UNSIGNED NOT NULL,
    telefone VARCHAR(20),
    tipo CHAR(1),
    dataCadastro DATE DEFAULT (CURRENT_DATE),
    cep CHAR(8),
    FOREIGN KEY (codCidade) REFERENCES cidade(codCidade)
);

CREATE TABLE clienteFisico(
    codCliente BIGINT UNSIGNED PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    dataNascimento DATE,
    cpf VARCHAR(11) NOT NULL UNIQUE,
    rg VARCHAR(8),
    FOREIGN KEY (codCliente) REFERENCES cliente(codCliente)
);

CREATE TABLE clienteJuridico(
    codCliente BIGINT UNSIGNED PRIMARY KEY,
    nomeFantasia VARCHAR(80) UNIQUE,
    razaoSocial VARCHAR(80) UNIQUE NOT NULL,
    ie VARCHAR(20) NOT NULL UNIQUE,
    cgc VARCHAR(20) UNIQUE NOT NULL,
    FOREIGN KEY (codCliente) REFERENCES cliente(codCliente)
);

CREATE TABLE classe(
    codClasse SERIAL PRIMARY KEY,
    sigla VARCHAR(12),
    nome VARCHAR(40) NOT NULL,
    descricao VARCHAR(80)
);

CREATE TABLE produto(
    codProduto SERIAL PRIMARY KEY,
    descricao VARCHAR(40) NOT NULL,
    unidadeMedida CHAR(2),
    embalagem VARCHAR(15) DEFAULT 'Fardo',
    codClasse BIGINT UNSIGNED,
    precoVenda DECIMAL(14,2),
    estoqueMinimo DECIMAL(14,2),
    FOREIGN KEY (codClasse) REFERENCES classe(codClasse)
);

CREATE TABLE produtoLote(
    codProduto BIGINT UNSIGNED,
    numeroLote INT,
    quantidadeAdquirida DECIMAL(14,2),
    quantidadeVendida DECIMAL(14,2),
    precoCusto DECIMAL(14,2),
    dataValidade DATE,
    PRIMARY KEY (codProduto, numeroLote),
    FOREIGN KEY (codProduto) REFERENCES produto(codProduto)
);

CREATE TABLE venda(
    codVenda INT PRIMARY KEY,
    codCliente BIGINT UNSIGNED,
    codVendedor BIGINT UNSIGNED,
    dataVenda DATE DEFAULT (CURRENT_DATE),
    enderecoEntrega VARCHAR(60),
    status VARCHAR(30),
    FOREIGN KEY (codCliente) REFERENCES cliente(codCliente),
    FOREIGN KEY (codVendedor) REFERENCES vendedor(codVendedor)
);

CREATE TABLE itemVenda(
    codVenda INT,
    codProduto BIGINT UNSIGNED,
    numeroLote INT,
    quantidade DECIMAL(14,2) NOT NULL CHECK(quantidade>=0),
    PRIMARY KEY(codVenda,codProduto,numeroLote),
    FOREIGN KEY (codVenda) REFERENCES venda(codVenda),
    FOREIGN KEY (codProduto,numeroLote) REFERENCES produtoLote(codProduto,numeroLote)
);

CREATE TABLE fornecedor(
    codFornecedor INT PRIMARY KEY,
    nomeFantasia VARCHAR(80) UNIQUE,
    razaoSocial VARCHAR(80) UNIQUE NOT NULL,
    ie VARCHAR(20) NOT NULL UNIQUE,
    cgc VARCHAR(20) UNIQUE NOT NULL,
    endereco VARCHAR(60),
    telefone VARCHAR(20),
    codCidade BIGINT UNSIGNED,
    FOREIGN KEY (codCidade) REFERENCES cidade(codCidade)
);

CREATE TABLE pedido(
    codPedido SERIAL PRIMARY KEY,
    dataRealizacao DATE DEFAULT (CURRENT_DATE),
    dataEntrega DATE,
    codFornecedor INT,
    valor DECIMAL(20,2),
    FOREIGN KEY (codFornecedor) REFERENCES fornecedor(codFornecedor)
);

CREATE TABLE itemPedido(
    codPedido BIGINT UNSIGNED,
    codProduto BIGINT UNSIGNED,
    quantidade DECIMAL(14,2) NOT NULL CHECK(quantidade>=0),
    PRIMARY KEY(codPedido,codProduto),
    FOREIGN KEY (codPedido) REFERENCES pedido(codPedido),
    FOREIGN KEY (codProduto) REFERENCES produto(codProduto)
);

CREATE TABLE contasPagar(
    codTitulo INT PRIMARY KEY,
    dataVencimento DATE NOT NULL,
    parcela INT,
    codPedido BIGINT UNSIGNED,
    valor DECIMAL(20,2),
    dataPagamento DATE,
    localPagamento VARCHAR(80),
    juros DECIMAL(12,2),
    correcaoMonetaria DECIMAL(12,2),
    FOREIGN KEY (codPedido) REFERENCES pedido(codPedido) 
);

CREATE TABLE contasPagar(
    codTitulo INT PRIMARY KEY,
    dataVencimento DATE NOT NULL,
    codVenda INT NOT NULL,
    parcela INT,
    valor DECIMAL(20,2),
    dataPagamento DATE,
    FOREIGN KEY (codVenda) REFERENCES venda(codVenda)
);

CREATE TABLE contasReceber(
    codTitulo INT PRIMARY KEY,
    dataVencimento DATE NOT NULL,
    codVenda INT NOT NULL,
    parcela INT,
    valor DECIMAL(20,2),
    dataPagamento DATE,
    localPagamento VARCHAR(80),
    juros DECIMAL(12,2),
    correcaoMonetaria DECIMAL(12,2),
    FOREIGN KEY (codVenda) REFERENCES venda(codVenda)
);