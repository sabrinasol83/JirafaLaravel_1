-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 03:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beerdb`
--

-- --------------------------------------------------------
--
-- Table structure for table `carts`
--
CREATE  TABLE IF NOT EXISTS `beerdb`.`carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `beer_img` varchar(191) NOT NULL,
  `cant` int(11) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `cart_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `beerdb`.`carts` (`id`, `name`, `description`, `price`, `beer_img`, `cant`, `user_id`, `status`, `cart_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DORTMUNDER GOLD® LAGER', 'Yes, it\s known for winning medals worldwide. But locally, it\s known as \"Dort,\" our flagship lager that humbly maintains its smooth, balanced (and charmingly unpretentious) ways.', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 2, 0, NULL, '2019-07-01 01:57:05', '2019-07-01 01:57:21', '2019-07-01 01:57:21'),
(2, 'ELIOT NESS® AMBER LAGER', 'Admittedly, it’s a bit of a paradox to name our Amber Lager for history’s most famous agent of prohibition. But it’s a smooth, malty (and dare we say, arresting?) paradox.', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 2, 1, 1, '2019-07-01 01:57:11', '2019-07-01 01:57:24', NULL),
(3, 'TURNTABLE PILS®', 'Flip that record and wax nostalgic about Ohio\s deep-cut music legacy with our refreshing pilsner. Consider this our reissue of a a classic style.', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 2, 1, 2, '2019-07-02 16:26:01', '2019-07-02 16:26:11', NULL),
(4, 'HOLY MOSES WHITE ALE®', 'Refreshment or bust! Orange peel, coriander, and chamomile stake their claim in this unfiltered White Ale, named for our fair city\s founder, Moses Cleaveland. FLAVOR: An intrepid crew of spices and orange peel blaze a trail to a refreshing, light-bodied landing.', '2849.24', 'dc332874ef33de4dd247b875c878994b.jpg', 1, 2, 0, NULL, '2019-07-02 16:39:54', '2019-07-02 16:39:54', NULL),
(5, 'BURNING RIVER® PALE ALE', 'A toast to the Cuyahoga River Fire! For rekindling an appreciation of the Great Lakes region’s natural resources (like the malt and hops illuminating this fresh Pale Ale). FLAVOR: Crisp and bright, with refreshing flickers of citrus and pine that ignite the senses (not our local waterways).', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 2, 0, NULL, '2019-07-02 16:40:09', '2019-07-02 16:40:09', NULL),
(6, 'GREAT LAKES IPA', 'To celebrate our family of employee-owners, we crafted a lightly filtered, citrus-forward IPA that’s as bright and approachable as our crew. Hard work never tasted so good. FLAVOR: A dry-hopped, easy-drinking American IPA by the people, for the people (who happen to be our employee-owners!)', '3745.72', 'b1e9e8197a0c36fea01884f881c77f76.jpg', 1, 10, 1, 3, '2019-07-02 16:41:47', '2019-07-02 16:42:00', NULL),
(7, 'COMMODORE PERRY® IPA', 'What’s this? A British-style IPA named after the man who defeated His Majesty’s Royal Navy in the War of 1812? Consider this a bold, hoppy (and mildly ironic) plunder of war. FLAVOR: Dry and well-hopped, with an arsenal of caramel malt flavors befitting the “Hero of Lake Erie.”', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 10, 1, 4, '2019-07-02 17:08:08', '2019-07-02 17:11:58', NULL),
(8, 'EDMUND FITZGERALD® PORTER', 'Robust and complex, our Porter is a bittersweet tribute to the legendary freighter’s fallen crew—taken too soon when the gales of November came early. FLAVOR: Brewed in memory of the sunken freighter, with rich roasted barley and bittersweet chocolate-coffee notes.', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 10, 1, 4, '2019-07-02 17:08:19', '2019-07-02 17:11:58', NULL),
(9, 'CONWAY\S IRISH ALE®', 'A pint for Pa Conway! Our co-owners’ grandfather and policeman who’d likely uphold that an Irish Ale with full-bodied caramel malt flavors is just the ticket. FLAVOR: Arrestingly smooth with a rap sheet of toasty biscuit and caramel malt flavors.', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 10, 1, 4, '2019-07-02 17:11:48', '2019-07-02 17:11:58', NULL),
(10, 'Facilis sint nostrum recusandae.', 'Sint qui autem id qui similique voluptatibus. Facilis dicta dolore reiciendis necessitatibus rerum veritatis labore.', '1638.98', '56d7966042638a5a3563d3cdff97d212.jpg', 1, 11, 1, 5, '2019-07-02 17:21:57', '2019-07-02 17:22:07', NULL),
(11, 'DORTMUNDER GOLD® LAGER', 'Yes, it\s known for winning medals worldwide. But locally, it\s known as \"Dort,\" our flagship lager that humbly maintains its smooth, balanced (and charmingly unpretentious) ways.', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 11, 0, NULL, '2019-07-02 18:00:06', '2019-07-02 18:00:06', NULL),
(12, 'DORTMUNDER GOLD® LAGER', 'Yes, it\s known for winning medals worldwide. But locally, it\s known as \"Dort,\" our flagship lager that humbly maintains its smooth, balanced (and charmingly unpretentious) ways.', '2806.53', 'eedc06f9ed956189d999e02d1b1b6b48.jpg', 1, 11, 0, NULL, '2019-07-02 18:00:26', '2019-07-02 18:00:26', NULL);



--
-- Table structure for table `migrations`
--

CREATE  TABLE IF NOT EXISTS `beerdb`.`migrations` (
  `id` int(10) UNSIGNED NOT NULL ,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `beerdb`.`migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE  TABLE IF NOT EXISTS `beerdb`.`orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `product` varchar(45) DEFAULT NULL,
  `quantity` smallint(6) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE  TABLE IF NOT EXISTS `beerdb`.`password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE  TABLE IF NOT EXISTS `beerdb`.`presentation` (
  `id` int(11) NOT NULL,
  `measure` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE  TABLE IF NOT EXISTS `beerdb`.`styles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE  TABLE IF NOT EXISTS `beerdb`.`users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_perfil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users` 
--

INSERT INTO `beerdb`.`users` (`id`, `name`, `lastName`, `email`, `gender`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nicole', 'Calzacorta', 'ncalzacorta@gmail.com', 'fem', '$2y$10$lu25EdFMWgy.frDhcsCDSemqfzzqk5165jF3rMyTHuIQZuC/RgS9u', 'Rg1tZCrWijOs3GYuLcQFQICPkLhw5pJNF9itseoRBwBlPZ0sQGSR5pKpRP2E', '2019-06-16 02:01:33', '2019-06-16 02:01:33'),
(2, 'Sabrina', 'Rodriguez', 'sabrinasol83@hotmail.com', 'fem', '$2y$10$QBF/BmA3vU2p9hg8V6QiMOVzwy8NE5seGSqHwlSV2.H1mLaRunc4W', 'QQp8eyqsxrstFumMlISp88xooXRuIcs1Me3aev0YiAV0BQD4SMR5acWWNoDS', '2019-06-16 02:02:41', '2019-06-16 02:02:41');

-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla `products`
--

CREATE  TABLE IF NOT EXISTS `beerdb`.`products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `beer_img` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `beerdb`.`products` (`id`, `name`, `description`, `price`, `beer_img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DORTMUNDER GOLD® LAGER', 'Yes, it\'s known for winning medals worldwide. But locally, it\'s known as \"Dort,\" our flagship lager that humbly maintains its smooth, balanced (and charmingly unpretentious) ways.', '2806.53', '01. dortmunder-fixed_1.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(2, 'ELIOT NESS® AMBER LAGER', 'Admittedly, it’s a bit of a paradox to name our Amber Lager for history’s most famous agent of prohibition. But it’s a smooth, malty (and dare we say, arresting?) paradox.', '3793.72', '02. eliotness-fixed_1.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(3, 'TURNTABLE PILS®', 'Flip that record and wax nostalgic about Ohios deep-cut music legacy with our refreshing pilsner. Consider this our reissue of a classic style.', '3745.72', '03. turntable-fixed.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(4, 'HOLY MOSES WHITE ALE®', 'Refreshment or bust! Orange peel, coriander, and chamomile stake their claim in this unfiltered White Ale, named for our fair city\s founder, Moses Cleaveland.', '3358.20', '04. holy-moses-combo.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(5, 'BURNING RIVER® PALE ALE', 'A toast to the Cuyahoga River Fire! For rekindling an appreciation of the Great Lakes region’s natural resources (like the malt and hops illuminating this fresh Pale Ale).', '2707.76', '05. burning-river-combo.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(6, 'GREAT LAKES IPA', 'To celebrate our family of employee-owners, we crafted a lightly filtered, citrus-forward IPA that’s as bright and approachable as our crew. Hard work never tasted so good.', '3861.58', 'e572a6c35c02da9d605ba50341c41ae9.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(7, 'COMMODORE PERRY® IPA', 'Porro tempora quibusdam eum voluptatem. Quia sit quia dolor enim molestiae unde autem. Porro tempore in iure voluptatem.', '1361.70', '07. commodore-fixed_1.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(8, 'EDMUND FITZGERALD® PORTER', 'Sint qui autem id qui similique voluptatibus. Facilis dicta dolore reiciendis necessitatibus rerum veritatis labore.', '1638.98', '08. edfitz-fixed_1.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(9, 'CONWAY\S IRISH ALE®', 'Officiis accusamus maxime sint odio velit aut vel ratione. Atque enim nobis eos qui.', '799.76', '09. conway-fixed_1.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(10, 'CHILLWAVE® DOUBLE IPA', 'Eum non voluptatem voluptatum atque quia enim quidem commodi. Qui aut et et et voluptatem.', '2849.24', 'dc332874ef33de4dd247b875c878994b.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(11, 'CLOUD CUTTER® HOPPY WHEAT ALE', 'Provident voluptates in quaerat pariatur praesentium. Eos non illo hic et et.', '1691.71', 'f16e3868c1c68c2a0be8ae9206cc1a84.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(12, 'RALLY DRUM RED ALE®', 'Beatae repellendus architecto debitis laudantium vel. Sequi placeat laudantium et. Ut et repellendus ad id error dolorem et itaque.', '421.03', 'ed615061f70062f565face6c236eea21.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(13, 'HOLY MOSES RASPBERRY WHITE ALE®', 'Nam tempora architecto aut doloremque dolore dolore nihil. Sunt velit officiis in. Doloremque dicta quia optio qui facilis.', '692.66', 'a3070393065b88d07a600105009eb202.jpg', '2019-06-30 23:30:11', '2019-06-30 23:30:11', NULL),
(14, 'MIDNIGHT MOSES™ DARK BELGIAN-STYLE ALE', 'Sit enim officiis harum est praesentium cumque culpa nisi. Sit consectetur qui dolores iure ab. Illum non omnis quia qui sed dignissimos.', '2986.06', '98c0dfa21e9433d6887b49d65e23759b.jpg', '2019-06-30 23:30:12', '2019-06-30 23:30:12', NULL),
(15, 'LAKE ERIE MONSTER® IMPERIAL IPA', 'Autem aut explicabo reiciendis occaecati itaque voluptatem. Hic similique animi fugiat dolorem corrupti.', '2318.91', 'eae4ded1d836ac8a1e344acdead7d083.jpg', '2019-06-30 23:30:12', '2019-06-30 23:30:12', NULL),
(16, 'BUCKIN\ MULE MOSCOW MULE ALE', 'Voluptatem dolor rerum qui quia fugiat. Rerum in voluptas et repellendus quo optio voluptate.', '2503.36', '91b5627a592bb201980ce741d7158aa5.jpg', '2019-06-30 23:30:12', '2019-06-30 23:30:12', NULL),
(17, 'OKTOBERFEST', 'Dignissimos quis sit eaque. Officia dignissimos id optio occaecati facere. Vel omnis quisquam ex non exercitationem unde.', '1067.15', 'c22d9bdca6de1fe096e90dc321c09c9d.jpg', '2019-06-30 23:30:12', '2019-06-30 23:30:12', NULL),
(18, 'MOONDOG® ESB', 'Impedit velit eius vero delectus et voluptatibus. Unde quia accusantium laborum deserunt vel quae. Neque omnis culpa iusto.', '3718.04', '7a757647fdbffcf1192995499efd62e7.jpg', '2019-06-30 23:30:12', '2019-06-30 23:30:12', NULL),
(19, 'NOSFERATU® IMPERIAL RED ALE', 'Assumenda quidem velit voluptas ipsum sit. Consequatur non molestiae est error soluta dolorem.', '1603.74', '06468906940e5578989349e1520075cf.jpg', '2019-06-30 23:30:12', '2019-06-30 23:30:12', NULL),
(20, 'OHIO CITY OATMEAL STOUT®', 'Hic quas eius eos porro. Et laboriosam et dolor.', '1119.57', '80686ff5615d374e4fe1122e87906f00.jpg', '2019-06-30 23:30:12', '2019-06-30 23:30:12', NULL);

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `beerdb`.`migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `beerdb`.`orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD UNIQUE KEY `product_id_UNIQUE` (`product_id`),
  ADD KEY `product_id_idx` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `beerdb`.`password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `presentation`
--
ALTER TABLE `beerdb`.`presentation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `measure_UNIQUE` (`measure`);

--
-- Indexes for table `styles`
--
ALTER TABLE `beerdb`.`styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `beerdb`.`users`
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `beerdb`.`usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `beerdb`.`migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `beerdb`.`orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presentation`
--
ALTER TABLE `beerdb`.`presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `beerdb`.`styles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `beerdb`.`users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `beerdb`.`usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `beerdb`.`orders`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
