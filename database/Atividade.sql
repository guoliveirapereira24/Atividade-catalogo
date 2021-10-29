#HABILITA O BANCO DE DADOS QUE SERÁ USADO.
use icatalogo;

#SELECIONANDO DADOS DE PRODUTOS.
SELECT * FROM tbl_produto;

#SELECIONA OS DADOS DE PRODUTO E CATEGORIA
SELECT * FROM tbl_categoria;

#SELECIONA OS DADOS DE PRODUTO E CATEGORIA
SELECT p.*, c.descricao AS nome_categoria FROM tbl_produto p
INNER JOIN tbl_categoria c ON
p.categoria_id = c.id;

#PODE-SE UTILIZAR DE APELIDOS EM TABLEAS PARA FACILITAR,
#ASSIM COMO FOI USADO NA tbl_produto E categoria
#ONDE OS APELIDOS USADOS FORAM p PARA tbl_produtos
#E c PARA tbl_categoria, ISSO É CHAMADO DE 'ALIAS'

UPDATE tbl_produtos SET descricao = 'Relógio edição', peso = 15.00, quantidade = 1, cor = 'Azul', tamanho = '1', valor = 4500, desconto = 0, categoria_id = 4, imagem = 'ebfc8bc3adf02d3ac1797238000519c2.jpg' WHERE id = 4;

select id, nome, usuario, senha from tbl_administrador;

describe tbl_administrador;

#Sempre dizer o que vai fazer, onde vai fazer, e os valores
INSERT INTO tbl_administrador (nome, usuario, senha)
VALUES ('João', 'João1', '123');

INSERT INTO tbl_administrador (nome, usuario, senha)
VALUES ('Julia', 'juju', '123');

INSERT INTO tbl_administrador (nome, usuario, senha)
VALUES ('guilherme', 'gui', '$2y$10$IOMq29ZvVj0XwHUQ2QzRUe3ZoJKDOh.I07PyAhQ4Cn0E0c9XeAhCS');

SELECT * FROM tbl_administrador;

SELECT * FROM tbl_administrador
WHERE usuario = 'João1' AND senha = '123';