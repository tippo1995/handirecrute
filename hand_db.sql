-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2016 at 10:03 PM
-- Server version: 5.6.28-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hand_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  FULLTEXT KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`id`, `email`) VALUES
(1, 'mo.bo@gmail.com'),
(2, 'aa.bb@oo'),
(4, 'aa.bpp@efd'),
(7, 'hilama.anas@gmail.com'),
(8, 'moughit.bouachir@gmail.com'),
(9, 'khalid.coc@pa');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(40) NOT NULL,
  `auteur` varchar(40) NOT NULL,
  `contenu` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `titre`, `auteur`, `contenu`, `date`) VALUES
(1, 'actu1', 'anas.h', 'le site salinah', '2016-05-02'),
(2, 'actu2', 'anas.h', 'le site salinah 2', '2016-05-02'),
(3, '', '', '', '2016-05-02'),
(4, 'actu3', 'anas.h', 'had lakhera', '2016-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `sujet` varchar(20) NOT NULL,
  `message` varchar(60) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `cert` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`nom`, `email`, `telephone`, `sujet`, `message`, `cv`, `cert`) VALUES
('effdfdf', 'hilama.anas@gmail.com', '06569856', 'khedma', 'dnfsdfnsdkfnsdfnskn', 'cv-56ed861a984946.08656047.pdf', 'cert-56ed861a984f06.75859545.pdf'),
('anas hilama', 'dfsdfs@sdq', 'sdsqd', 'sdsqd', 'sdsqdq', 'cv-56ed87a9758ad7.42000343.pdf', 'cert-56ed87a97593e5.02733352.pdf'),
('dfsdfs', 'sdfsd@sdfsf', 'sdfsdf', 'fsdfs', 'sfss', 'cv-56ed87ec023cf3.06996043.pdf', 'cert-56ed87ec0243e0.39160617.pdf'),
('SDFSDBFH', 'DSBFS@FDSDBFNS', 'SDFSKBF', 'FKSDBFSNB', 'FKDSNFNSDF', 'cv-56ed88403f9193.65223875.pdf', 'cert-56ed88403f9764.51485425.pdf'),
('DFSNBFSBDFB', 'hilama.anas@gmail.com', 'SDNBFSDNSF', 'SDFBSBFSB', 'SDBFSBDFS', 'cv-56ed88af141853.64661538.pdf', 'cert-56ed88af141d60.19250669.pdf'),
('kdjfskjdhf', 'skjdfjksdf@sdjfnsjn', 'fskdbfs', 'fdbfnsdbf', 'fd,dnfbdnf', 'cv-56ed8930ece426.63293446.pdf', 'cert-56ed8930ece687.65536041.pdf'),
(',sdbfsdbfn', 'sdbfsnb@sdjfsdj', 'sdfsd', 'sdfsd', 'sfsdfs', 'cv-56ed897094ed16.42705354.pdf', 'cert-56ed897094f2e2.57451395.pdf'),
('sdfsfsdf', 'sdfsfs@sdfsdf', 'sfsdsf', 'sdfsdf', 'sdfsfsf', 'cv-56ed8afa2feee4.09922202.pdf', 'cert-56ed8afa2ff179.06120855.pdf'),
('sxcwxcxw', 'dfsfs@dfsd', 'sdfsdf', 'sdfsfd', 'sdfsdf', 'cv-56ed8ba6259509.98479561.pdf', 'cert-56ed8ba62597c1.52946465.pdf'),
('sdfsdfs', 'fsdfs@sdfsf', 'sdfsdf', 'sdfsdf', 'sdfsfs', 'cv-56ed9562158848.23385298.pdf', 'cert-56ed9562181311.53040187.pdf'),
('hilama', 'hilama.anas@gmail.com', '0665812579', 'i want to ', 'xfdfd', 'cv-5720b6abba63d1.06347158.pdf', 'cert-5720b6abba69a4.88222160.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`handirecrute.database.windows.net`, `admin2016`, `handi2015`) VALUES
(1, 'admin', 'admin2016#'),
(2, 'quebaj', 'handi2015');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
