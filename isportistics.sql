create database if not exists isportistics;

use isportistics;

create table usuario(
	id int unsigned not null auto_increment primary key,
	nome varchar (255) not null,
    sobrenome varchar (255) not null,
    participacao tinyint not null,
    data_cricao timestamp default now()
)engine=InnoDB default charset=utf8;

insert into usuario values (null, 'Carlos', 'Moura', 5);
insert into usuario values (null, 'Fernanda', 'Oliveira', 15);
insert into usuario values (null, 'Hugo', 'Silva', 20);
insert into usuario values (null, 'Eliza', 'Souza', 20);
insert into usuario values (null, 'Anderson', 'Santos', 40);