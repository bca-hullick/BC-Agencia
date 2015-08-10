CREATE TABLE `newsletter`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `email` VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE `contato`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `nome_contato` VARCHAR(40) NOT NULL,
    `email_contato` VARCHAR(50) NOT NULL,
    `telefone_contato` VARCHAR(9) NOT NULL,
    `empresa_contato` VARCHAR(25) NOT NULL,
    `comentarios` TEXT NOT NULL,
    `data_envio` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);