create database mini_frame;
use mini_frame;
create table produtos (
id int auto_increment primary key,
nome varchar(100) not null,
preco decimal(10,2) not null,
criado_em timestamp default current_timestamp
);
