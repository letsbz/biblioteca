CREATE TABLE aluno (
  idaluno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_aluno VARCHAR(100) NULL,
  email_aluno VARCHAR(100) NULL,
  fone_aluno VARCHAR(20) NULL,
  rgm_aluno VARCHAR(100) NULL,
  data_nasc DATE NULL,
  end_aluno VARCHAR(100) NULL,
  genero_aluno VARCHAR(10) NULL,
  PRIMARY KEY(idaluno)
);

CREATE TABLE atendente (
  idatendente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  biblioteca_id_biblioteca INTEGER UNSIGNED NOT NULL,
  nome_atendente INTEGER UNSIGNED NULL,
  PRIMARY KEY(idatendente),
  INDEX atendente_FKIndex1(biblioteca_id_biblioteca)
);

CREATE TABLE biblioteca (
  id_biblioteca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_biblioteca VARCHAR(100) NOT NULL,
  end_biblioteca VARCHAR(100) NOT NULL,
  PRIMARY KEY(id_biblioteca)
);

CREATE TABLE categoria (
  idcategoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(100) NULL,
  PRIMARY KEY(idcategoria)
);

CREATE TABLE livro (
  idlivro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  biblioteca_id_biblioteca INTEGER UNSIGNED NOT NULL,
  categoria_idcategoria INTEGER UNSIGNED NOT NULL,
  titulo_livro VARCHAR(100) NULL,
  autor_livro VARCHAR(100) NULL,
  editora_livro VARCHAR(100) NULL,
  edicao_livro CHAR(3) NULL,
  localidade_livro VARCHAR(100) NULL,
  ano_livro YEAR NULL,
  PRIMARY KEY(idlivro),
  INDEX livro_FKIndex1(categoria_idcategoria),
  INDEX livro_FKIndex2(biblioteca_id_biblioteca)
);

CREATE TABLE reserva (
  livro_idlivro INTEGER UNSIGNED NOT NULL,
  aluno_idaluno INTEGER UNSIGNED NOT NULL,
  atendente_idatendente INTEGER UNSIGNED NOT NULL,
  data_empres DATE NULL,
  devolucao DATE NULL,
  PRIMARY KEY(livro_idlivro, aluno_idaluno),
  INDEX livro_has_aluno_FKIndex1(livro_idlivro),
  INDEX livro_has_aluno_FKIndex2(aluno_idaluno),
  INDEX reserva_FKIndex3(atendente_idatendente)
);


