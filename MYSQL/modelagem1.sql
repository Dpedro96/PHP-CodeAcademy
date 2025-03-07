CREATE TABLE departamento (
    codDepartamento SERIAL PRIMARY KEY,
    nome VARCHAR(40) UNIQUE NOT NULL,
    descricaoFuncional VARCHAR(80),
    localizacao TEXT
);

CREATE TABLE estado (
    siglaEstado VARCHAR(2) PRIMARY KEY,
    nome VARCHAR(30) UNIQUE NOT NULL
);

CREATE TABLE cidade (
    codCidade SERIAL PRIMARY KEY,
    nome VARCHAR(50) UNIQUE NOT NULL,
    estado_siglaEstado VARCHAR(2) NOT NULL,
    FOREIGN KEY (estado_siglaEstado) REFERENCES estado(siglaEstado)
);

CREATE TABLE vendedor (
    codVendedor SERIAL PRIMARY KEY,
    nome VARCHAR(60) NOT NULL,
    dataNascimento DATE,
    endereco VARCHAR(60),
    cep VARCHAR(8),
    telefone VARCHAR(20),
    cidade_codCidade INT,
    dataContratacao DATE DEFAULT (CURRENT_DATE),
    departamento_codDepartamento INT
);

CREATE TABLE cliente (
    codCliente SERIAL PRIMARY KEY,
    endereco VARCHAR(60),
    codCidade INT NOT NULL,
    telefone VARCHAR(20),
    tipo CHAR(1) CHECK (tipo IN ('F', 'J')),
    dataCadastro DATE DEFAULT (CURRENT_DATE),
    cep CHAR(8)
);

CREATE TABLE clienteFisico(
    codCliente INT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    dataNascimento DATE,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    rg VARCHAR(8)
);

CREATE TABLE clienteJuridico(
    codCliente INT PRIMARY KEY,
    nomeFanstasia VARCHAR(80) UNIQUE,
    razaoSocial VARCHAR(80) UNIQUE NOT NULL,
    ie VARCHAR(20) UNIQUE NOT NULL, 
    cgc VARCHAR(20) UNIQUE NOT NULL
);

CREATE TABLE classe(
    codClasse SERIAL PRIMARY KEY,
    sigla VARCHAR(12),
    nome VARCHAR(40) NOT NULL,
    descricao VARCHAR(80)
);

CREATE TABLE produto(
    codProduto SERIAL,
    descricao VARCHAR(40) NOT NULL,
    unidadeMedida VARCHAR(2),
    embalagem VARCHAR(15) DEFAULT 'Fardo',
    codClass INT,
    precoVenda DECIMAL(14,2),
    estoqueMinimo DECIMAL(14,2)
);

CREATE TABLE produtoLote(
    codProduto INT,
    numeroLote INT,
    quantidadeAdquirida DECIMAL(14,2),
    quantidadeVendida DECIMAL(14,2),
    precoCusto DECIMAL(14,2),
    dataValidade DATE
);

CREATE TABLE venda(
    cadVenda INT PRIMARY KEY,
    codCliente INT,
    codVendedor INT,
    dataVenda DATE DEFAULT (SELECT numeroLote 
FROM produtolote
WHERE dataValidade<(CURRENT_DATE)),
    enderecoEntrega VARCHAR(60),
    status VARCHAR(30)
);

CREATE TABLE itemVenda(
    codVenda INT PRIMARY KEY,
    codProduto INT,
    numeroLote INT,
    quantidade DECIMAL(14,2) NOT NULL CHECK(quantidade >= 0)
);

CREATE TABLE fornecedor(
    codFornecedor INT PRIMARY KEY,
    nomeFantasia VARCHAR(80) UNIQUE,
    razaoSocial VARCHAR(80) UNIQUE NOT NULL,
    ie VARCHAR(20) UNIQUE NOT NULL,
    cgc VARCHAR(20) UNIQUE NOT NULL,
    endereco VARCHAR(60),
    telefone VARCHAR(20),
    codCidade INT 
);

CREATE TABLE pedido(
    codPedido SERIAL PRIMARY KEY,
    dataRealizacao DATE DEFAULT (SELECT numeroLote 
FROM produtolote
WHERE dataValidade<(CURRENT_DATE)),
    dataEntrega DATE,
    codFornecedor INT,
    valor DECIMAL(20,2)
);

CREATE TABLE itemPedido(
    codPedido INT PRIMARY KEY,
    codProduto INT,
    quantidade DECIMAL(14,2) NOT NULL CHECK(quantidade >= 0)
);