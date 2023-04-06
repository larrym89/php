
CREATE DATABASE biblioteca;
use biblioteca;

CREATE TABLE `carti` (
  `id` int(11) NOT NULL,
  `titlu` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `editura` varchar(255) NOT NULL,
  `tip_carte` varchar(255) NOT NULL,
  `an` char(4) NOT NULL,
  `pagini` int(4) NOT NULL,
  `pret` decimal(10,2) NOT NULL,
  `poza` varchar(200) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carti`
--

INSERT INTO `carti` (`id`, `titlu`, `autor`, `editura`, `tip_carte`, `an`, `pagini`, `pret`, `poza`, `ts`) VALUES
(1, 'Ion', 'Liviu Rebreanu', 'All', 'Selecteaza tipul cartii', '1920', 245, '50.00', 'ac205605a960d7e01a0d3d62e15fd7157e15917c.jpg', '2020-02-07 08:11:18'),
(2, ' Carturesti Dictionarul explicativ al limbii romane (DEX)', 'ACADEMIA ROMANA, INSTITUTUL DE LINGVISTICA IORGU IORDAN', 'Univers Enciclopedic', 'dictionar', '2009', 0, '1248.00', 'f3bbc9a5f4b59b7badf06a0f2bd4257b49e4f5f1.jpg', '2020-02-27 16:34:55');



CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(55) NOT NULL,
  `prenume` varchar(55) NOT NULL,
  `email` varchar(40) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `dataadaugare` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
ALTER TABLE `users` ADD UNIQUE `email` (`email`);

INSERT INTO `users` (`id`, `nume`, `prenume`, `email`, `parola`, `dataadaugare`) VALUES ('1', 'Popescu', 'Adam', 'adam.popescu@admin.com', '$2y$10$0Vm4Gv8xH2hmn3LvyN1NveSVFAvtEm8sXtGkI36oPQlD3SDoWkfhW', CURRENT_TIMESTAMP);
