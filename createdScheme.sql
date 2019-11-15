CREATE SCHEMA buscarcep;

CREATE TABLE `buscarCep`.`CEP` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,
    `cep` VARCHAR(100) NOT NULL ,
    `logradouro` VARCHAR(100) NOT NULL ,
    `complemento` VARCHAR(100) NOT NULL ,
    `bairro` VARCHAR(100) NOT NULL ,
    `localidade` VARCHAR(100) NOT NULL ,
    `uf` VARCHAR(100) NOT NULL ,
    PRIMARY KEY (`id`)
);
