CREATE DATABASE remei CHARACTER SET utf8 COLLATE utf8_general_ci;

use remei;


CREATE TABLE areas(
	are_id int primary key auto_increment,
    are_nome varchar(100) not null
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE metodologias(
	met_id int primary key auto_increment,
    met_nome varchar(100) not null,
    met_descricao varchar(300) not null
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE posts(
	pos_id int primary key auto_increment,
	pos_titulo varchar(100) not null,
    pos_resumo mediumtext not null,
    pos_descricao mediumtext not null,
    pos_data date not null,
    pos_autor int not null,
    pos_metodologia int not null,
    pos_area int not null,
    pos_visualizacoes int default 0
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE users(
	usu_id int primary key auto_increment,
	usu_nome varchar(100) not null,
    usu_email varchar(100) not null,
	usu_senha varchar(255) not null,
	usu_descricao mediumtext,
    usu_instituicao varchar(255),
    usu_lattes varchar(255)
)CHARACTER SET utf8 COLLATE utf8_general_ci;



CREATE TABLE posts_comment(
	poscom_id int primary key auto_increment,
    poscom_id_pos int not null,
    poscom_id_usu int not null,
    poscom_comment mediumtext not null
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE posts_ranking(
	posran_id int primary key auto_increment,
    posran_id_pos int not null,
    posran_id_usu int not null,
    posran_ranking int not null
)CHARACTER SET utf8 COLLATE utf8_general_ci;








