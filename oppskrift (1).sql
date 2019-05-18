-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-05-2019 a las 14:14:18
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oppskrift`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Europea', NULL),
(2, 'Asiatica', NULL),
(3, 'Norte Americana', NULL),
(4, 'Mexicana', NULL),
(5, 'China', NULL),
(6, 'Japonesa', NULL),
(7, 'Española', NULL),
(8, 'Rusa', NULL),
(9, 'Alemana', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `description`, `created_at`, `updated_at`) VALUES
(3, 1, 16, 'Muy buena', '2019-03-30 10:01:15', '2019-03-30 10:01:15'),
(4, 1, 20, 'asasas', '2019-03-30 10:03:37', '2019-03-30 10:03:37'),
(5, 1, 6, 'buena pizza', '2019-03-30 10:04:18', '2019-03-30 10:04:18'),
(6, 1, 22, 'Que rica la tortilla', '2019-03-30 10:04:41', '2019-03-30 10:04:41'),
(7, 1, 22, 'Que rica la tortilla', '2019-03-30 10:04:42', '2019-03-30 10:04:42'),
(8, 1, 22, 'mmmmmm', '2019-03-30 10:05:00', '2019-03-30 10:05:00'),
(9, 1, 22, 'mmmmmm', '2019-03-30 10:05:00', '2019-03-30 10:05:00'),
(10, 1, 16, 'nice', '2019-03-30 10:06:49', '2019-03-30 10:06:49'),
(11, 1, 16, 'nice', '2019-03-30 10:06:49', '2019-03-30 10:06:49'),
(12, 1, 16, 'sdbsehb', '2019-03-30 10:07:00', '2019-03-30 10:07:00'),
(13, 1, 16, 'sdbsehb', '2019-03-30 10:07:00', '2019-03-30 10:07:00'),
(14, 1, 16, 'sdbsehb', '2019-03-30 10:07:00', '2019-03-30 10:07:00'),
(15, 1, 16, 'sdbsehb', '2019-03-30 10:07:00', '2019-03-30 10:07:00'),
(16, 1, 16, 'sdbsehb', '2019-03-30 10:07:01', '2019-03-30 10:07:01'),
(17, 1, 16, 'sdbsehb', '2019-03-30 10:07:01', '2019-03-30 10:07:01'),
(18, 1, 16, 'sdbsehb', '2019-03-30 10:07:01', '2019-03-30 10:07:01'),
(19, 1, 16, 'sdbsehb', '2019-03-30 10:07:01', '2019-03-30 10:07:01'),
(20, 1, 29, 'awdawdawd', '2019-03-30 10:13:24', '2019-03-30 10:13:24'),
(21, 1, 29, 'nice conejo', '2019-03-30 10:13:46', '2019-03-30 10:13:46'),
(22, 3, 22, 'Que ovalada!', '2019-03-30 10:16:28', '2019-03-30 10:16:28'),
(23, 3, 20, 'Cebolla!!!!!', '2019-03-30 10:16:46', '2019-03-30 10:16:46'),
(24, 3, 29, 'Podemos?', '2019-03-30 10:17:06', '2019-03-30 10:17:06'),
(25, 3, 21, 'Se llama Fire...watch', '2019-03-30 10:17:33', '2019-03-30 10:17:33'),
(26, 3, 18, 'Menudas rosquillas!!', '2019-03-30 10:17:48', '2019-03-30 10:17:48'),
(27, 3, 6, 'Te comias un buen trozo', '2019-03-30 10:18:20', '2019-03-30 10:18:20'),
(28, 3, 19, 'So soft', '2019-03-31 06:12:08', '2019-03-31 06:12:08'),
(29, 1, 20, 'Buena receta', '2019-05-18 08:55:23', '2019-05-18 08:55:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `ingredients` json NOT NULL,
  `description` json NOT NULL,
  `category_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `info` json NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  `votes_user` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `ingredients`, `description`, `category_id`, `image_path`, `user_id`, `info`, `votes`, `votes_user`, `created_at`, `updated_at`) VALUES
(4, 'Hambuerguesa gallega 2', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"2\", \"2\", \"52\"]', 1, '\"[1]\"', '2019-01-26 07:39:06', '2019-03-27 15:21:13'),
(6, 'awfaw', '[\"fawfaw\", \"fawfa\", \"wfawfawfawf\"]', '[\"awfawf\", \"awfawfa\"]', 3, '1548493248photo-1506354666786-959d6d497f1a.jpg', 1, '[\"3\", \"2\", \"2\"]', 1, '[1]', '2019-01-26 08:00:48', '2019-03-27 15:28:58'),
(8, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(9, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(10, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(11, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(12, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(13, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(14, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(15, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(16, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 1, '[1]', '2019-01-26 07:39:06', '2019-03-27 15:28:37'),
(17, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(18, 'Rosquillas gallegas al horno', '[\"500 g. de harina de trigo tipo repostería\", \"5 yemas de huevo y 2 huevos enteros (clara y yema) - 7\", \"100 g. de mantequilla\"]', '[\"Lavamos bien el limón y una naranja pequeña. Secamos y rallamos sin llegar a la parte blanca, no queremos que nos amargue el dulce. Reservamos.\", \"En un bol mezclamos la mantequilla derretida, las yemas, los 2 huevos, la ralladura de los cítricos y el anís. Debe quedar todo perfectamente integrado, podemos emplear una batidora.\"]', 1, '1548491946bobby-rodriguezz-1043119-unsplash.jpg', 1, '[\"3\", \"2\", \"52\"]', 0, NULL, '2019-01-26 07:39:06', '2019-01-26 07:39:06'),
(20, 'Hamburguesa casera muy rica', '[\"500 g. de carne de ternera de calidad suprema\", \"1 diente de ajo\", \"1 huevo\", \"Hojas de albahaca fresca\", \"4 cda. queso parmesano rallado\", \"cebolla confitada\", \"Sal y pimienta negra recién molida (al gusto)\", \"Rúcula\", \"Queso de cabra (o el que más os guste para acompañar)\", \"Pan de hamburguesa\", \"Aceite de oliva virgen extra\"]', '[\"Dividimos la mezcla en 4 partes que corresponderán a las 4 hamburguesas que vamos a formar.\", \"Cada una de las porciones será de unos 125 g.-150 g. y a temperatura ambiente. Pero si preferís hacer mini hamburguesas el rendimiento sería el doble.\", \"Si tenéis un aro de los de emplatar, podéis utilizarlo para dale las hamburguesas un toque más profesional.\", \"Si no es así simplemente tendremos que darle forma con las manos a cada una de las porciones de carne.\", \"Antes de poner en la sartén es el momento de añadir sal y pimienta negra recién molida, al gusto de cada uno.\", \"En una sartén calentamos 2 cucharadas de aceite de oliva virgen extra. Podemos incluso pincelar la carne con un poco de aceite y no añadir aceite a la sartén, queda a vuestra elección e incorporar las hamburguesas. De buena calidad\", \"La sartén debe estar caliente pero sin pasarse, no queremos que se nos quemen las hamburguesas según las pongamos al fuego.\", \"Y otros pasos mas\"]', 1, '1553535624hamburguesa_ternera_cebolla-525x360.jpg', 1, '[\"3\", \"44\", \"45\"]', 16, '[1, 2, 3, 4, 1]', '2019-03-25 16:40:24', '2019-03-27 15:13:43'),
(30, 'afaw', '[\"awfaw\"]', '[\"awfawf\"]', 1, '1558179562canelones-boloñesa-525x360.jpg', 1, '[\"3\", \"2\", \"123\"]', 0, NULL, '2019-05-18 09:20:12', '2019-05-18 09:39:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favorite_recipes` json DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `favorite_recipes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daniel', 'srkoalilla98@gmail.com', NULL, '$2y$10$kUP6p2k5Iy/EEnrdssa6nevF8NXKnvIhkaC7sJSB99ML.1IWRec4C', '[\"27\", \"28\", \"20\", \"4\", \"22\"]', 'vdWOCtSplQXcueLgUDaVJ4MkivACc656GClrGItw40AlWTXqQ39ecXKcmKnG', '2019-01-22 17:06:39', '2019-05-18 09:41:18'),
(2, 'Daniel Perez Rodríguez', 'daniperezrod98@hotmail.com', NULL, '$2y$10$RxQbIzirvTlZSziwMo4yzem9iQ912pyGMxpi8QkfoALUv/5LVl.n2', NULL, '10iDWPkWTnhuq5z7X1LUGX4nuCZMyIY50jSMxGf0HLHUPATFJOvccVmEr1FN', '2019-03-27 15:29:38', '2019-03-27 15:29:38'),
(3, 'Luchia', 'luciialff@gmail.com', NULL, '$2y$10$lBI8xOkf0/NpLRdLVTqOOerrDVWR/xYSWVYUv18F/yjUcWRrd.KbO', '[]', 'n6XoCd6j5khQZmmlzyPQj5qctH2RxgUCOy0PaAdjDHRCMIsrNE714VrNtQ5x', '2019-03-27 15:41:11', '2019-03-31 07:22:45'),
(4, 'Lucas', 'lucas@gmail.com', NULL, '$2y$10$SJLFCFdytojRnbpLAgxzee5jhvONKC4fzonBFgQ/JYbOu7XBYCGTi', NULL, NULL, '2019-03-28 09:28:25', '2019-03-28 09:28:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
