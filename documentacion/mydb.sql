-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 08:57 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `id_campus` int(11) NOT NULL,
  `nombre_campus` varchar(45) DEFAULT NULL,
  `direccion_campus` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `computador`
--

CREATE TABLE IF NOT EXISTS `computador` (
  `id_computador` int(11) NOT NULL,
  `mac_computador` varchar(45) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `estado_id_estado` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(25) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `marcaje`
--

CREATE TABLE IF NOT EXISTS `marcaje` (
  `id_marcaje` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `campus_id_campus` int(11) NOT NULL,
  `hora_marcaje` timestamp NULL DEFAULT NULL,
  `puntoGeografico_marcaje` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL,
  `permiso_perfil` varchar(45) DEFAULT NULL,
  `nombre_perfil` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `puntogeografico`
--

CREATE TABLE IF NOT EXISTS `puntogeografico` (
  `id_puntoGeografico` int(11) NOT NULL,
  `radio_puntoGeografico` int(11) DEFAULT NULL,
  `nombre_puntoGeografico` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `campus_id_campus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `smartphone`
--

CREATE TABLE IF NOT EXISTS `smartphone` (
  `id_smartphone` int(11) NOT NULL,
  `imei_smartphone` varchar(45) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `estado_id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trabajo`
--

CREATE TABLE IF NOT EXISTS `trabajo` (
  `id_trabajo` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `campus_id_campus` int(11) NOT NULL,
  `horario_trabajo` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) DEFAULT NULL,
  `contrasena_usuario` varchar(45) DEFAULT NULL,
  `correo_usuario` varchar(45) DEFAULT NULL,
  `direccion_usuario` varchar(45) DEFAULT NULL,
  `rut_usuario` varchar(10) DEFAULT NULL,
  `apellidoPaterno_usuario` varchar(45) DEFAULT NULL,
  `apellidoMaterno_usuario` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `perfil_id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id_campus`);

--
-- Indexes for table `computador`
--
ALTER TABLE `computador`
  ADD PRIMARY KEY (`id_computador`),
  ADD KEY `fk_computador_estado1_idx` (`estado_id_estado`),
  ADD KEY `fk_computador_usuario1_idx` (`usuario_id_usuario`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `marcaje`
--
ALTER TABLE `marcaje`
  ADD PRIMARY KEY (`id_marcaje`),
  ADD KEY `usuario_id_usuario` (`usuario_id_usuario`),
  ADD KEY `campus_id_campus` (`campus_id_campus`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `puntogeografico`
--
ALTER TABLE `puntogeografico`
  ADD PRIMARY KEY (`id_puntoGeografico`),
  ADD KEY `fk_puntoGeografico_campus1_idx` (`campus_id_campus`);

--
-- Indexes for table `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id_smartphone`),
  ADD KEY `fk_smartphone_usuario_idx` (`usuario_id_usuario`),
  ADD KEY `fk_smartphone_estado1_idx` (`estado_id_estado`);

--
-- Indexes for table `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`id_trabajo`),
  ADD KEY `usuario_id_usuario` (`usuario_id_usuario`),
  ADD KEY `campus_id_campus` (`campus_id_campus`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_perfil1_idx` (`perfil_id_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id_campus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `computador`
--
ALTER TABLE `computador`
  MODIFY `id_computador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marcaje`
--
ALTER TABLE `marcaje`
  MODIFY `id_marcaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `puntogeografico`
--
ALTER TABLE `puntogeografico`
  MODIFY `id_puntoGeografico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id_smartphone` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `computador`
--
ALTER TABLE `computador`
  ADD CONSTRAINT `computador_ibfk_1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `computador_ibfk_2` FOREIGN KEY (`estado_id_estado`) REFERENCES `estado` (`id_estado`) ON UPDATE CASCADE;

--
-- Constraints for table `marcaje`
--
ALTER TABLE `marcaje`
  ADD CONSTRAINT `marcaje_ibfk_1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `marcaje_ibfk_2` FOREIGN KEY (`campus_id_campus`) REFERENCES `campus` (`id_campus`) ON UPDATE CASCADE;

--
-- Constraints for table `puntogeografico`
--
ALTER TABLE `puntogeografico`
  ADD CONSTRAINT `puntogeografico_ibfk_1` FOREIGN KEY (`campus_id_campus`) REFERENCES `campus` (`id_campus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `smartphone`
--
ALTER TABLE `smartphone`
  ADD CONSTRAINT `smartphone_ibfk_1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `smartphone_ibfk_2` FOREIGN KEY (`estado_id_estado`) REFERENCES `estado` (`id_estado`) ON UPDATE CASCADE;

--
-- Constraints for table `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trabajo_ibfk_2` FOREIGN KEY (`campus_id_campus`) REFERENCES `campus` (`id_campus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`perfil_id_perfil`) REFERENCES `perfil` (`id_perfil`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
