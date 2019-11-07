CREATE TABLE `db_ceramicagiusti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messaggio` TEXT NOT NULL,

  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
