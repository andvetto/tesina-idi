
-- Struttura della tabella `articoli`

CREATE TABLE IF NOT EXISTS `articoli` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titolo` VARCHAR(60) NOT NULL,
  `testo` TEXT NOT NULL,
  `immagine` VARCHAR(255) NOT NULL,
  `data` DATE DEFAULT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


-- Struttura della tabella `utenti`

CREATE TABLE IF NOT EXISTS `utenti` (
  `username` varchar(38) NOT NULL,
  `password` varchar(72) NOT NULL,
  `email` varchar(255) NOT NULL,
  `denominazione` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `db_ceramicagiusti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messaggio` TEXT NOT NULL,

  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
