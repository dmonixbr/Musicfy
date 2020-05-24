-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 22-Maio-2019 às 20:57
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Musicfy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE `musica` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `album` varchar(255) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `duracao` time DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`id`, `nome`, `autor`, `album`, `genero`, `duracao`, `status`) VALUES
(1, 'Vento Ventania', 'Biquini Cavadao', 'Ao vivo em fortaleza', 'Rock Brasileiro', '00:04:00', 0),
(2, 'Fear of the dark', 'Iron maiden', 'Fear of the dark', 'Metal', '00:07:00', 1),
(3, 'Mulheres', 'Martinho da vila', 'Maxximum', 'Samba', '00:05:00', 1),
(4, 'segura o tcham!', 'Ã‰ o tcham!', 'AxÃ© moa', 'AxÃ©', '00:04:00', 1),
(5, 'When the wild wind blows', 'Iron Maiden', 'The final frontier', 'Metal', '00:09:00', 1),
(6, 'The Trooper', 'Iron Maiden', 'Piece of Mind', 'Metal', '00:03:00', 1),
(7, 'The Bull', 'Massacration', 'Good blood headbangers', 'Metal', '00:05:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica_playlist`
--

CREATE TABLE `musica_playlist` (
  `playlist` int(11) DEFAULT NULL,
  `musica` int(11) DEFAULT NULL,
  `status_musica` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `musica_playlist`
--

INSERT INTO `musica_playlist` (`playlist`, `musica`, `status_musica`) VALUES
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 4, 1),
(3, 2, 0),
(3, 5, 0),
(3, 6, 0),
(3, 7, 0),
(3, 2, 1),
(3, 5, 1),
(3, 6, 0),
(3, 6, 0),
(3, 6, 1),
(3, 7, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `playlist`
--

INSERT INTO `playlist` (`id`, `nome`, `descricao`, `status`) VALUES
(1, 'Baladinha TOP', 'Muita azaraÃ§Ã£o nesse verÃ£o', 0),
(2, 'VerÃ£o 2001', 'Chicleteiro eu chicleteira ela', 0),
(3, 'Metal', 'As melhores do metal internacional', 1),
(4, 'Lofi', 'Estudo e relaxamento', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musica`
--
ALTER TABLE `musica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
