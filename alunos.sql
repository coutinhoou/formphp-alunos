SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `alunos` (
  `ID` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(40) DEFAULT NULL,
  `turma` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `alunos` (`ID`, `nome`, `sobrenome`, `turma`) VALUES
(0, 'Kaique', 'Santos', '3ºB'),
(1, 'Alisson', 'Evangelista', '3ºB'),
(2, 'Eduardo', 'Marques', '3ºB'),
(3, 'Felipe', 'Alexandre', '3ºB'),
(4, 'Felipe', 'Moura', '3ºB'),
(5, 'Felipe', 'Soares', '3ºB');


ALTER TABLE `alunos`
  ADD PRIMARY KEY (`ID`);
COMMIT;
