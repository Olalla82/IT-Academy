-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2021 a las 19:24:08
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_m11`
--
CREATE DATABASE IF NOT EXISTS `php_m11` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php_m11`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `nif`, `email`, `profesion`, `created_at`, `updated_at`) VALUES
(1, 'Saepe aut ex culpa error.', 'Ut suscipit facere dolor veniam.', 'gisselle17@example.org', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(2, 'Aut et similique in laudantium.', 'Praesentium sed sequi officia temporibus.', 'renner.ole@example.org', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(3, 'Error sed aut at qui debitis ducimus.', 'Accusamus sit assumenda et ut ullam aut.', 'herminio.towne@example.org', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(4, 'Dolor ad dolores dolor sit accusantium.', 'Assumenda repudiandae nulla fuga dignissimos soluta.', 'marvin.gilberto@example.org', 'Abogada', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(5, 'Assumenda sint natus nostrum qui ea rerum inventore.', 'Temporibus impedit in et quam ullam veritatis exercitationem aspernatur.', 'major95@example.net', 'Programadora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(6, 'Modi porro repellendus ut ut officia voluptatem.', 'Sequi mollitia totam aut qui tenetur quia.', 'nya.wiza@example.com', 'Escritora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(7, 'Eum ea sit fuga unde.', 'Beatae sunt voluptas reiciendis est eos modi.', 'ekulas@example.org', 'Profesor', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(8, 'Consequatur provident reprehenderit libero laborum.', 'Natus deserunt dolor qui commodi et exercitationem.', 'mraz.camron@example.com', 'Abogada', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(9, 'Corrupti sunt ut omnis sit qui provident.', 'Asperiores quos quaerat id quas distinctio impedit voluptatem.', 'njohns@example.com', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(10, 'Aut deleniti laboriosam dolore rerum sunt sint aut.', 'Voluptatem sit distinctio eos quae.', 'gleichner.nickolas@example.net', 'Escritora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(11, 'Nesciunt in quam eum nihil aspernatur quis magni.', 'Eum ut enim eaque saepe.', 'grover.christiansen@example.org', 'Peluquero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(12, 'Aut ullam eos et porro quo aut et recusandae.', 'Debitis aut consectetur aut quisquam.', 'hhoeger@example.net', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(13, 'Occaecati aspernatur maxime pariatur sed sed.', 'Ut libero amet amet suscipit repellendus saepe.', 'wilmer.maggio@example.org', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(14, 'Facilis laudantium qui itaque earum qui non.', 'Autem sequi quo rerum eligendi ut consequuntur temporibus voluptas.', 'adaline48@example.org', 'Peluquero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(15, 'Exercitationem in ea qui molestiae fugiat adipisci.', 'Et in voluptate beatae quisquam.', 'jessy47@example.org', 'Programadora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(16, 'Voluptate incidunt aut sed.', 'Quia deleniti quo incidunt consequatur qui omnis.', 'jschoen@example.com', 'Escritora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(17, 'Deserunt numquam harum dignissimos dolor eos quo blanditiis.', 'Voluptatum odio ipsa deserunt.', 'greenholt.marlee@example.org', 'Escritora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(18, 'Ut eligendi tempore et ad.', 'Ea alias beatae dolor consequatur.', 'weissnat.dawson@example.net', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(19, 'Aliquam consequatur omnis sed tenetur est debitis architecto.', 'Natus aliquid quae eum asperiores odio consequatur similique debitis.', 'ransom04@example.org', 'Abogada', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(20, 'Animi non sint nemo nesciunt.', 'Nobis perferendis rerum ad occaecati ut.', 'lenna54@example.net', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(21, 'Quo officia ex sed cupiditate autem consequuntur.', 'Non aut rerum sit consequatur repudiandae corporis aliquid.', 'lenny22@example.net', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(22, 'Aut et atque praesentium quia deleniti.', 'Est quisquam aspernatur sunt aperiam et dicta est quisquam.', 'fritsch.selina@example.org', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(23, 'Ut dicta maxime in voluptatem quod repellendus.', 'Corporis qui veniam aperiam deleniti non rerum atque.', 'xcole@example.com', 'Profesor', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(24, 'Qui debitis qui omnis itaque aliquam pariatur aut.', 'Sint aut voluptas est quo ad facilis animi.', 'katlyn09@example.org', 'Peluquero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(25, 'Quibusdam perferendis eveniet consectetur omnis corrupti soluta.', 'Vel ut tempore at nesciunt voluptatem sunt repellendus.', 'deontae32@example.net', 'Escritora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(26, 'Et atque ut commodi vero nisi quidem hic itaque.', 'Ut hic magni dolores rerum non voluptatibus.', 'ldickinson@example.org', 'Profesor', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(27, 'Explicabo nesciunt quos et doloribus et eos excepturi.', 'Necessitatibus ratione voluptas animi aspernatur necessitatibus quaerat dolor.', 'wolf.montana@example.net', 'Programadora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(28, 'Porro magni rerum id minima corrupti ab consequatur.', 'Iusto voluptatibus ipsam molestiae est quidem corporis.', 'carolyn28@example.org', 'Programadora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(29, 'Voluptatem sapiente vero distinctio in.', 'Dolorem quidem esse ullam labore sit autem sunt.', 'mona93@example.org', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(30, 'Doloribus aliquam molestiae quibusdam reprehenderit facere suscipit repudiandae.', 'Veritatis optio consequatur et amet.', 'ghuel@example.com', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(31, 'Assumenda qui quia quia facere quisquam.', 'Aut enim quia nesciunt sit vel asperiores.', 'erna.lynch@example.net', 'Programadora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(32, 'Voluptatem magnam nulla at laudantium aut.', 'Ut rerum nulla et sed et.', 'lrobel@example.org', 'Profesor', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(33, 'Praesentium illum voluptatem qui porro.', 'Dolorem nostrum dolores quia doloribus accusantium.', 'jacobi.narciso@example.com', 'Abogada', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(34, 'Quasi velit maxime quas dolorem dolorem.', 'Nesciunt laudantium quae quo nostrum perspiciatis.', 'ngaylord@example.net', 'Profesor', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(35, 'Ea suscipit cum qui facilis consectetur numquam et.', 'Suscipit dolores id voluptatem quae.', 'allan.blick@example.net', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(36, 'Cum recusandae sit cumque nam.', 'Inventore labore amet quo esse necessitatibus animi doloribus.', 'xjohnson@example.com', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(37, 'Ipsum minima nam dolores quaerat atque eos.', 'Aut officia quaerat consectetur occaecati enim ea voluptatibus esse.', 'hegmann.kellie@example.com', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(38, 'Est omnis est et dolor eligendi ullam totam accusantium.', 'Est mollitia atque provident nam nihil.', 'rippin.buster@example.org', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(39, 'Consequatur recusandae vero itaque harum.', 'Earum temporibus rem officiis aliquid non rerum ullam.', 'abraham.schroeder@example.org', 'Abogada', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(40, 'Rerum ipsa voluptas provident quo quas dolorem odit et.', 'Et nesciunt quo eaque consequuntur.', 'santa21@example.net', 'Peluquero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(41, 'In ut corporis illum non ipsa.', 'Ipsa sed sit ad distinctio dolore.', 'mcummerata@example.com', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(42, 'Asperiores eum voluptate dolorem eum totam.', 'Officiis aut delectus beatae.', 'emmanuelle.mante@example.com', 'Abogada', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(43, 'Eos voluptatem ipsum quo minima et.', 'Repellat dolores magnam deleniti cupiditate.', 'keshaun.deckow@example.com', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(44, 'Aliquam ut in non et.', 'Similique earum est et.', 'ibrahim22@example.com', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(45, 'Eos culpa quas esse veritatis explicabo.', 'Repellat debitis quis necessitatibus sit quam.', 'cleta67@example.net', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(46, 'Incidunt tenetur ut id odit molestiae quas alias.', 'Mollitia voluptatem commodi id qui.', 'tabernathy@example.com', 'Escritora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(47, 'Doloremque excepturi qui deleniti ut nesciunt qui.', 'Qui officia aut quidem et nulla enim expedita et.', 'dframi@example.org', 'Escritora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(48, 'Nihil illum tempore laboriosam impedit corrupti voluptates.', 'Eligendi accusantium et harum tenetur.', 'leopold.crist@example.net', 'Escritora', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(49, 'Doloremque velit rem et id.', 'Ex ea quaerat recusandae temporibus consequatur incidunt.', 'marlin.moen@example.com', 'Diseñador', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(50, 'Quibusdam id ut eos quas.', 'Ad necessitatibus incidunt at.', 'aharris@example.com', 'Ingeniero', '2021-05-03 14:07:47', '2021-05-03 14:07:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_29_172603_create_empleados_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Tyler Kovacek DDS', 'ashton10@example.net', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7HmIB1vDKr', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(2, 'Timmy Cormier', 'domenic98@example.net', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zupm0b9Ses', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(3, 'Mathew Torphy', 'wgaylord@example.com', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'V3TR88Mt1u', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(4, 'Misty Hahn', 'donald83@example.net', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IPJAaK03S8', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(5, 'Mr. Mateo Kovacek', 'beahan.ciara@example.org', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oQZ3WK51M7', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(6, 'Mrs. Prudence Jast Jr.', 'mariane64@example.net', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0NFpvVjmDO', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(7, 'Grant Marquardt', 'emmanuel83@example.net', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QX68fR5liH', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(8, 'Jay O\'Reilly', 'lucio.lesch@example.org', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '614wPnR33Z', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(9, 'Dr. Grayson Swift', 'tschultz@example.net', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5svU1t7gB7', '2021-05-03 14:07:47', '2021-05-03 14:07:47'),
(10, 'Keeley Stamm', 'white.brett@example.com', '2021-05-03 14:07:46', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KT3LHtIPdE', '2021-05-03 14:07:47', '2021-05-03 14:07:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empleados_nif_unique` (`nif`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
