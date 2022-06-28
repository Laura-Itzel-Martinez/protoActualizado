-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 02:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybernahualt`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `paterno` varchar(255) NOT NULL,
  `materno` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `telefono` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombre`, `paterno`, `materno`, `sexo`, `telefono`, `email`, `usuario`, `password`, `fecha`) VALUES
(2, 'Juana', 'Mtz', 'Mtz', 'Femenino', 2147483647, '789martinezjuan@gmail.com', 'juan', '8cb2237d0679ca88db6464eac60da96345513964', '2021-08-04 01:33:05'),
(4, 'Jorge', 'Mtz', 'Zaragoza', 'Femenino', 2147483647, 'itzelmartinez4@gmail.com', 'jorge', '8cb2237d0679ca88db6464eac60da96345513964', '2022-06-05 12:19:53'),
(6, 'fer', 'lopez', 'Zaragoza', 'Femenino', 2147483647, 'itzelmartinez4@gmail.com', 'fer', '8cb2237d0679ca88db6464eac60da96345513964', '2022-06-05 14:12:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
