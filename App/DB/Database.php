
<?php

// CREATE TABLE adm(
//     id_adm int not null PRIMARY KEY AUTO_INCREMENT,
//     email varchar(100) not null,
//     senha varchar(100) not null
//     );


// CREATE TABLE tema (
//     id_tema int NOT null PRIMARY key AUTO_INCREMENT,
//     nome varchar(80) not null
//     id_professor int,
//     id_adm int,

//     Foreign KEY (id_adm) REFERENCES adm(id_adm)
//     Foreign KEY (id_professor) REFERENCES professor(id_professor)
    
//     );


// CREATE TABLE professor(
//     id_professor int not null AUTO_INCREMENT PRIMARY Key,
//     nome varchar(80) not null,
//     sobrenome varchar(80) not null,
//     email varchar(100) not null,
//     senha varchar(100) not null
//     );
    



// CREATE TABLE pergunta (
//     id_pergunta int not null AUTO_INCREMENT PRIMARY KEY,
//     enunciado longtext not null,
//     resA text not null,
//     resB text not null,
//     resC text not null,
//     resD text not null,
//     resE text not null,
//     res_correta ENUM('A', 'B','C','D','E') not null,
//     pontuacao int not null,
//     perfil ENUM('ADM','PROF') not null,
//     id_tema int not null,
//     id_professor int,
//     id_adm int,
	
	
    
    
//     FOREIGN KEY (id_tema) REFERENCES tema(id_tema) 
//     Foreign KEY (id_adm) REFERENCES adm(id_adm)
//     Foreign KEY (id_professor) REFERENCES professor(id_professor)

    
//     );



// CREATE TABLE atividade(
//     id_atividade int not null PRIMARY KEY AUTO_INCREMENT,
//     nome varchar(50) not null,
//     quant_perguntas int not null,
//     quant_perguntas_etapa int not null,
//     status_atividade Enum('aberto','terminado')
//     );


// CREATE TABLE item_atividade_tema(
//     id_item_atividade_tema int not null PRIMARY KEY AUTO_INCREMENT,
//     id_tema int not null,
//     id_atividade int not null,
 


//     Foreign KEY (id_tema) REFERENCES tema(id_tema),
//     Foreign KEY (id_atividade) REFERENCES atividade(id_atividade)
  

//  );




// CREATE TABLE time(
//     id_time int not null AUTO_INCREMENT PRIMARY KEY,
//     nome varchar(50) not null,
//     senha varchar(100) not null,
//     status_etapa ENUM('1','2','3','4'),
//     id_atividade int not null,
    
    
//     FOREIGN KEY (id_atividade) REFERENCES atividade(id_atividade)
    
//  );





// CREATE TABLE pontuacao(
//     id_pontuacao int NOT null AUTO_INCREMENT PRIMARY KEY,
//     id_time int not null,
//     id_pergunta int not null,
//     resposta_time ENUM('A','B','C','D','E') not null,
    
    
//     FOREIGN KEY (id_time) REFERENCES time(id_time),
//     FOREIGN KEY (id_pergunta) REFERENCES pergunta(id_pergunta)
//     );
    


    
    

    