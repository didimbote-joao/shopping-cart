-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/01/2024 às 10:06
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojafrutas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(32, 'Maçã', '120', 'assets/maca.jpg', 1, '120', 'p1100');

-- --------------------------------------------------------

--
-- Estrutura para tabela `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'Didimbote João Zimpevo', 'didimbote_joao@outlook.com', '937195990', 'Cazenga, Luanda', 'cod', 'Banana(1), Alface(1)', '787'),
(4, 'Afonsina Zimpevo', 'afonsina@gmail.com', '930050949', 'Nova vida ', 'cards', 'Maçã(1), Abacate(1), Melancia(1)', '700'),
(5, 'Afonsina Zimpevo', 'afonsina@gmail.com', '930050949', 'Nova Vida', 'cod', 'Maçã(1), Banana(1), Morango(3)', '2900'),
(6, 'Maria Zimpevo', 'maria@gmail.com', '8634132', 'Gamek', 'netbanking', 'Abacate(1), Melancia(2), Cereja(2)', '2700'),
(7, 'Afonsina Zimpevo', 'afonsina@gmail.com', '930050949', 'Nova vida', 'cod', 'Maçã(1), Banana(1)', '365');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `product_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `product_qty`) VALUES
(1, 'Banana', '245', 'assets/banana.png', 'p1000', 1),
(2, 'Maçã', '120', 'assets/maca.jpg', 'p1100', 1),
(3, 'Melancia', '390', 'assets/melancia.jpg', 'b054', 1),
(4, 'Abacate', '190', 'assets/abacate.jpg', 'jk890', 1),
(5, 'Laranja', '560', 'assets/laranja.jpg', 'hm786', 1),
(6, 'Morango', '845', 'assets/morango.jpg', 'gy761', 1),
(7, 'Goiaba', '230', 'assets/goiaba.jpg', 'ds231', 1),
(8, 'Cereja', '865', 'assets/cereja.jpg', 'gt765', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwordkey` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `passwordkey`, `level`, `phone`, `address`) VALUES
(1, 'Didimbote Zimpevo', 'didimbote@gmail.com', 'ddd', 1, '937195990', 'Cazenga, Luanda'),
(2, 'Afonsina Zimpevo', 'afonsina@gmail.com', 'aaa', 0, '930050949', 'Calemba 2, Viana'),
(3, 'Peter Fernandes', 'peter@zadal.com', 'ppp', 0, '929201433', 'Hoji Ya Henda, Cazenga Luanda'),
(4, 'Peter Fernandes', 'peter@zadal.com', 'ppp', 0, '929201433', 'Hoji Ya Henda, Cazenga Luanda'),
(5, 'Maria Zimpevo', 'maria@gmail.com', 'mmm', 0, '8634132', 'Maianga, Luanda'),
(7, 'Damyan Francisco', 'damiao@gmail.com', 'dddd', 0, '9273635', 'Camama 1, Luanda');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
