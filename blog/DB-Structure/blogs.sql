/* Database export results for db blogs */

/* Preserve session variables */
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS=0;

/* Export data */

/* Table structure for categories */
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table categories */

/* Table structure for comments */
CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comments` text,
  `create_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/* data for Table comments */
INSERT INTO `comments` VALUES (1,1,"mobi","testing comments",NULL,NULL);
INSERT INTO `comments` VALUES (2,1,"mobi","another comments",NULL,NULL);

/* Table structure for failed_jobs */
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table failed_jobs */

/* Table structure for migrations */
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table migrations */
INSERT INTO `migrations` VALUES (1,"2014_10_12_000000_create_users_table",1);
INSERT INTO `migrations` VALUES (2,"2014_10_12_100000_create_password_resets_table",1);
INSERT INTO `migrations` VALUES (3,"2019_08_19_000000_create_failed_jobs_table",2);
INSERT INTO `migrations` VALUES (4,"2020_05_18_133936_categories",2);

/* Table structure for password_resets */
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table password_resets */

/* Table structure for posts */
CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text,
  `create_date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/* data for Table posts */
INSERT INTO `posts` VALUES (1,1,"My First Post","post details","2019-01-17",1);
INSERT INTO `posts` VALUES (2,1,"My Second updated post","post details","2019-01-17",1);
INSERT INTO `posts` VALUES (3,1,"My Third Post","post details","2019-01-17",1);
INSERT INTO `posts` VALUES (4,1,"another post","post details",NULL,NULL);
INSERT INTO `posts` VALUES (5,1,"another post","post details",NULL,NULL);
INSERT INTO `posts` VALUES (6,1,"my new post","some details and so on","2020-05-14",1);
INSERT INTO `posts` VALUES (7,1,"my new post","some details and so on","2020-05-14",1);
INSERT INTO `posts` VALUES (8,1,"my new post","some details and so on","2020-05-14",1);
INSERT INTO `posts` VALUES (9,1,"Stocks drop for third day as recovery hopes falter","World stock markets fell for a third day running on Thursday after a sobering warning from the World Health Organisation that the coronavirus may never go away.","2020-05-14",1);
INSERT INTO `posts` VALUES (10,1,"hello testing","testing testing testing testing testing testing testing testing testing testing testing testing testing","2020-05-15",1);
INSERT INTO `posts` VALUES (11,1,"Form validation","validation rules & success message","2020-05-15",1);
INSERT INTO `posts` VALUES (12,1,"testing testing","testing testing testing testing testing testing testing testing testing testing testing testing","2020-05-15",1);

/* Table structure for users */
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table users */
INSERT INTO `users` VALUES (1,"mubashir","muhammedmubashir305@gmail.com","$2y$10$GFeN88/LzvJ.ozIIWCmwNu2dLyz2MCx6lPVyRY5WoBP0CYnliBBqK",NULL,"customer","2019-01-17 10:22:33","2019-01-17 10:22:33");
INSERT INTO `users` VALUES (2,"Salik","salik@gmail.com","$2y$10$JP9696gHfAPBqCxR5G85m.Zksp6CIIndjQRPBT47.xw2CIhHz1LB2",NULL,"admin","2020-05-18 14:01:05","2020-05-18 14:01:05");

/* Restore session variables to original values */
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
