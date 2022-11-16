-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Nov-2022 às 19:51
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unicore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroempresa`
--

DROP TABLE IF EXISTS `cadastroempresa`;
CREATE TABLE IF NOT EXISTS `cadastroempresa` (
  `idemp` int(11) NOT NULL AUTO_INCREMENT,
  `razao` varchar(50) NOT NULL,
  `cnpj` varchar(15) NOT NULL,
  `contas` varchar(50) NOT NULL,
  PRIMARY KEY (`idemp`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastroempresa`
--

INSERT INTO `cadastroempresa` (`idemp`, `razao`, `cnpj`, `contas`) VALUES
(20, 'QUEL FRUTI', '3514688100044', 'SAFRA'),
(21, 'KELLE CRISTINA', '10766693000181', 'SAFRA'),
(19, 'KANAKA ', '3514688100044', 'BRADESCO'),
(22, 'HFJ', '645654654654', 'BRADESCO'),
(23, 'KAIQUE', '50821951823', 'SAFRA'),
(24, 'Hugo de Souza', '50000000000', 'BANCO BRASIL'),
(25, 'PAULO DA MAGA', 'ASDS', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `duplicatas`
--

DROP TABLE IF EXISTS `duplicatas`;
CREATE TABLE IF NOT EXISTS `duplicatas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bankclient` varchar(50) NOT NULL,
  `dateDuplic` date NOT NULL,
  `vencDuplic` date NOT NULL,
  `nfeduplic` varchar(11) NOT NULL,
  `valorduplic` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `duplicatas`
--

INSERT INTO `duplicatas` (`id`, `bankclient`, `dateDuplic`, `vencDuplic`, `nfeduplic`, `valorduplic`) VALUES
(3, 'ROSARIO DOS SANTOS', '1233-03-12', '1333-03-12', '123123', 123123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fluxodecheque`
--

DROP TABLE IF EXISTS `fluxodecheque`;
CREATE TABLE IF NOT EXISTS `fluxodecheque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `vencimento` date NOT NULL,
  `conta` varchar(80) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `valor` double NOT NULL,
  `compensado` varchar(10) NOT NULL,
  `obeservacao` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fluxodecheque`
--

INSERT INTO `fluxodecheque` (`id`, `destino`, `data`, `vencimento`, `conta`, `numero`, `valor`, `compensado`, `obeservacao`) VALUES
(36, 'ODAIR MELANCIA', '2022-11-08', '2023-01-02', '/', '5462', 5255, 'nao', 'parcela 1 da CARGA 233'),
(37, 'HAROUDO CAIXAS', '2022-11-01', '2022-11-01', '/', '3212321', 32333, 'nao', '12312'),
(38, 'CAMINHAO AMARELO BOX 25', '2022-11-01', '2022-11-03', '/', '213123', 2233, 'nao', ''),
(39, 'HAROUDO CAIXAS', '2022-11-01', '2022-11-24', '/', '3264', 2500, 'nao', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notasfiscais`
--

DROP TABLE IF EXISTS `notasfiscais`;
CREATE TABLE IF NOT EXISTS `notasfiscais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Remente` varchar(50) NOT NULL,
  `idemp` int(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `chave` varchar(80) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `inclusao` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notasfiscais`
--

INSERT INTO `notasfiscais` (`id`, `Remente`, `idemp`, `numero`, `chave`, `valor`, `inclusao`) VALUES
(3, 'HOURUS FRU', 20, '414', '352211108917560010000004141000037263', '6566', '2022-11-04'),
(5, 'PAULO RICARDO', 20, '1221882', '00', '28000', '2022-11-03'),
(7, 'PAULO RICARDO', 20, '1220696', '00', '30000', '2022-11-02'),
(8, 'DAMIAO BRAN', 20, '23', '2922114449881200', '42334', '2022-11-02'),
(9, 'N G DE SOUZA', 21, '03302', '522211457674810001015500', '7000', '2022-11-01'),
(10, 'EDNALDO G.SILVA', 20, '1220152', '2622111057201400', '26600', '2022-11-01'),
(11, 'FRANCIJANIO RO', 20, '223284262', '2122110352625200', '28800', '2022-11-05'),
(12, 'PAULO RICARDO', 20, '1223772', '26221110572014001335589', '26000', '2022-11-05'),
(13, 'FLORESTAL  IMPORT', 21, '4758', '35221006192047000261550010000047581077450292', '3144', '2022-10-10'),
(14, 'LUCAS FRANSC', 20, '55545022', 'NULL', '22219', '2022-11-01'),
(15, 'PAULO RICARDO', 20, '1220402', '26221110572014000133558900012204021762782614', '22500', '2022-11-01'),
(16, 'PAULO RICARDO', 20, '1221884', '26221110572014000133558900012218841706589547', '25200', '2022-11-03'),
(17, 'EDNALDO G.SILVA', 20, '122255', '26221110572014000133558900012222551769915441', '21400', '2022-11-04'),
(18, 'PAULO RICARDO', 20, '1221884', '26221110572014000133558900012218841706589547', '25200', '2022-11-03'),
(19, 'EDNALDO G.SILVA', 20, '1222255', '2622111057201400013355800012222551769915441', '21400', '2022-11-04'),
(20, 'PAULO RICARDO', 20, '1220402', '26221110572014000133558900012204021762782614', '22500', '2022-11-01'),
(21, 'LUCAS FRANSC', 20, '55545022', 'NULL', '22219', '2022-11-01'),
(22, 'PAULO RICARDO', 20, '1221810', '26221110572014000133558900012218101121169176', '42000', '2022-11-03'),
(23, 'PAULO RICARDO', 20, '2276', '26221143517446000109570010000022761000305501', '42000', '2022-11-03'),
(24, 'PAULO RICARDO', 20, '1223705', '26221110572214000133558900012237051727802240', '39000', '2022-11-05'),
(25, 'LUCAS FRANSC', 20, '56254622', 'NULL', '21268', '2022-11-06'),
(26, 'PAULO RICARDO', 20, '12224974', '26221110572014000133558900012249741612980601', '33800', '2022-11-07'),
(27, 'FRANCIJANIO RO', 20, '223284402', '21221103526252000147558902232844021124751675', '30720', '2022-11-06'),
(28, 'PAULO RICARDO', 20, '1225322', '26221110572014000133558900012253221840351965', '28000', '2022-11-07'),
(29, 'PAULO RICARDO', 20, '1225310', '26221110572014000133558900012253101043885019', '22500', '2022-11-07'),
(30, 'FRANCIJANIO RO', 20, '223285410', '21221103526252000147558902232854101245369840', '30000', '2022-11-07'),
(31, 'EDNALDO G.SILVA', 20, '122889', '26221110572014000133558900012289891370044544', '27360', '2022-11-10'),
(32, 'DAMIAO BRAN', 20, '26', '292211444988120001845500100000002649909606580', '29565', '2022-11-05'),
(33, 'AntÃ´nio Jose Sousa', 20, '223280821', '21221103526252000147558902232808211158643270', '28750', '2022-11-01'),
(34, 'DAMIAO BRAN', 20, '24', '29221144498812000184550010000000241814039026', '42410', '2022-11-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `idproduct` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `locals` varchar(50) NOT NULL,
  PRIMARY KEY (`idproduct`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`idproduct`, `nome`, `tipo`, `locals`) VALUES
(1, 'abacaxi', '1', 'para'),
(2, 'Melancia', '50', 'Goias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtores`
--

DROP TABLE IF EXISTS `produtores`;
CREATE TABLE IF NOT EXISTS `produtores` (
  `idprodutor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeprodutor` varchar(50) NOT NULL,
  `natalidade` varchar(50) NOT NULL,
  `regiao` varchar(50) NOT NULL,
  `produtos` varchar(50) NOT NULL,
  PRIMARY KEY (`idprodutor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
