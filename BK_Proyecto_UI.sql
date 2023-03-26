-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla post_bd.categories: ~1 rows (aproximadamente)
REPLACE INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(2, 'asasas111', 'asasasa111', '2023-03-27 01:27:50', '2023-03-27 01:29:46');

-- Volcando datos para la tabla post_bd.failed_jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla post_bd.migrations: ~6 rows (aproximadamente)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(7, '2014_10_12_000000_create_users_table', 1),
	(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(9, '2019_08_19_000000_create_failed_jobs_table', 1),
	(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(11, '2023_03_26_152649_create_posts_table', 1),
	(12, '2023_03_26_152657_create_categories_table', 1);

-- Volcando datos para la tabla post_bd.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla post_bd.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla post_bd.posts: ~1 rows (aproximadamente)
REPLACE INTO `posts` (`id`, `name`, `category_id`, `description`, `state`, `created_at`, `updated_at`) VALUES
	(6, 'unificacion-instalaciones', NULL, 'ddddd23', 'no_post', '2023-03-27 01:22:37', '2023-03-27 01:22:37');

-- Volcando datos para la tabla post_bd.users: ~1 rows (aproximadamente)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Carlos Andres Loaiza', 'andres_loaiza95@hotmail.com', NULL, '$2y$10$EO652pM/Qvyc7alRVv3.u.64XE4MZdUHyOWdC1b2UFwwdz7euM4vq', NULL, '2023-03-27 01:53:22', '2023-03-27 01:53:22');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
