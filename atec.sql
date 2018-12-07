-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2018 at 11:45 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atec`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title_ar`, `title_en`, `image`, `content_ar`, `content_en`, `year_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Sed et veritatis id suscipit praesentium.', 'Ut earum dolores dolore eos id.', 'ex', 'Ipsum cupiditate saepe possimus. Unde et sed corporis est. Tenetur facere adipisci nesciunt vel mollitia ab perferendis.\n\nQuia doloribus dignissimos tempora quia. Qui quaerat magni odit est recusandae non. Corporis voluptatem aut ratione magnam ad.\n\nLabore perspiciatis voluptatibus aspernatur autem numquam. Neque quas repellat odio officiis itaque minima vero sunt.', 'Pariatur aut amet nulla aut ipsa. Est corrupti qui sed temporibus architecto facilis. Voluptatem possimus rem nemo corporis.\n\nEst amet ea cumque pariatur dolores aut. Voluptatum exercitationem aspernatur voluptas fugit saepe. Quia temporibus et commodi dicta ex quasi. Ipsam necessitatibus et sunt.\n\nAutem voluptatem qui fugit sed dolores consequatur. Est voluptas et nihil qui dolorem et vitae doloremque. Totam repudiandae quaerat eos vel tempora id. Porro exercitationem quasi quisquam id voluptatum qui eum nisi.\n\nEligendi porro assumenda excepturi nulla saepe. Ut inventore aut ullam debitis non odit quo. Rem et doloribus provident aut et quibusdam. Temporibus est veritatis ut ut dolore dolorem enim.\n\nNobis esse vel inventore id ipsam quia consequatur. Illum ut libero laboriosam eos repellat. Ut et et dolorem quibusdam.', 1, '2018-11-07 04:17:38', '2018-07-24 01:36:45', '2018-11-07 04:17:38'),
(2, 'Ut eos ut dignissimos maxime.', 'Ut dolorum aperiam delectus similique quae temporibus sed.', '1541535451.jpg', 'Necessitatibus voluptas sequi illum doloribus. Voluptatem deserunt doloribus labore maxime. Enim aliquam aut fuga cumque maxime. Quia fugiat sed voluptatem temporibus. Aliquam doloribus doloribus dolore tempore libero nesciunt suscipit.\r\n\r\nMolestiae voluptatum ea dolores id reprehenderit molestiae voluptatem consequuntur. Et ut eum esse. Asperiores sint quod maiores eligendi odio voluptas soluta tenetur.\r\n\r\nEarum possimus nesciunt et. Consequatur sint praesentium similique ut. Quo doloremque nobis id et omnis. Rem illo inventore dolorum ut assumenda nesciunt. Nesciunt dolor consequatur ut rerum laboriosam dolorem omnis.\r\n\r\nQuisquam excepturi quo quia voluptas voluptate. At voluptatum quis illum temporibus aperiam. Id cum dolorem voluptates et. Alias velit autem laborum et.\r\n\r\nIn deserunt ducimus voluptatem ad. Quibusdam consequatur possimus cum molestiae quis nesciunt aliquam. Dolor quidem eius et. Alias qui quia asperiores quos eius esse nulla.\r\n\r\nSit eaque voluptatem nihil minima ut nostrum. Ut dolorum voluptatem nemo aspernatur adipisci repellat omnis. Eum ipsam exercitationem distinctio incidunt quia.\r\n\r\nDoloremque ea omnis enim nam modi vel aut. Asperiores rerum magni numquam. Eligendi voluptatem nostrum et fuga numquam.', 'Iste quisquam odio temporibus error saepe. Aliquid veniam pariatur facilis autem nisi blanditiis cum soluta. Cum maiores error qui velit et minus aspernatur.\r\n\r\nRem odit ut dolores rerum. Perspiciatis totam accusamus corrupti esse dolorum. Dolor asperiores et et vel suscipit ad.\r\n\r\nIusto asperiores consequatur quibusdam quo sit aut consectetur fuga. Non doloremque amet dolore iste architecto architecto quas. Neque maiores dolorum delectus ea laudantium sit.\r\n\r\nAtque magni quasi consequatur et beatae odio. Amet expedita est recusandae qui sed odit at debitis. Est rerum repellendus saepe quam.\r\n\r\nUt at culpa dolores nihil soluta qui. Quae voluptas et neque facere repellat est facilis sed. Sunt et expedita modi est. Iusto aut vel velit rerum neque qui dolore sunt.\r\n\r\nVelit aliquam minima rerum exercitationem aut qui. Voluptates unde doloremque ipsum placeat. Cupiditate assumenda fugiat fugit.\r\n\r\nEaque omnis earum aut omnis modi dolores qui. Incidunt ullam maxime distinctio non nisi illum. Cumque non excepturi non et alias. Provident consequatur animi quas. Ut voluptatem ipsum autem.', 2, NULL, '2018-07-24 01:36:46', '2018-11-07 04:17:31'),
(3, 'Suscipit maxime corporis unde porro suscipit natus provident.', 'Ipsum ut sed reiciendis rerum dolores nisi nihil tempora.', '1541535437.jpg', 'Modi ut ratione ut dignissimos. Vel eius et pariatur labore vel quae. Quisquam et quisquam accusamus.\r\n\r\nSimilique eius qui voluptatum temporibus nihil similique corporis. Iste ducimus asperiores possimus id placeat officiis voluptas. Repellendus unde placeat nobis praesentium. Eius et eaque aut nam fuga.\r\n\r\nEst repellat enim ullam. Rerum eum ut reiciendis sint. Praesentium ea non nobis odit.\r\n\r\nQui omnis sed libero et. Quisquam dignissimos odit repellendus eveniet vero natus. Temporibus minima nesciunt asperiores incidunt quisquam et. Impedit ut nemo pariatur consequuntur rem sit.\r\n\r\nFuga repudiandae molestias dolorem omnis debitis animi. Quisquam unde voluptatem pariatur impedit deleniti odit aut ipsa. Eos quos illum sunt quibusdam eum assumenda.', 'Et sed ipsa ad rem ut vitae aut. Qui qui sit voluptatem molestias quo beatae. Est quibusdam similique accusamus et id explicabo iusto. Rerum blanditiis aut minus fugit. Labore sapiente aliquam doloribus qui vero incidunt repellat.\r\n\r\nEt quam dolorem blanditiis. Omnis minima voluptatum quidem pariatur. Voluptatem aliquid enim voluptatem voluptatem perferendis laborum nam. Illum laboriosam nihil veritatis sequi.\r\n\r\nFuga aut voluptas voluptate sunt. Amet quis neque natus laudantium ad. Id voluptatem aut molestias officia dolores. Rerum incidunt hic quibusdam dignissimos.\r\n\r\nAnimi est sapiente temporibus porro. Quo alias est repellat non consequatur.\r\n\r\nRepellendus rem perferendis consequatur corporis nulla quasi officiis voluptas. Inventore minima magni sed delectus sequi. Tempore suscipit atque perspiciatis cumque sed ad et.\r\n\r\nLaudantium tempora ut sunt necessitatibus. Nam doloremque enim tempora nemo saepe asperiores impedit. Rem molestiae consequatur sequi commodi nostrum. Iste cum non at autem laudantium veritatis.', 3, NULL, '2018-07-24 01:36:46', '2018-11-07 04:17:17'),
(4, 'Magnam nulla dolor autem nobis minus quo consequuntur.', 'Sit nulla doloribus ut.', '1541535422.jpg', 'Maiores qui atque asperiores cupiditate nostrum. Est facere eos fuga qui id. Placeat omnis assumenda consectetur quaerat non. Placeat ad fugiat recusandae illum.\r\n\r\nQuo et corrupti accusamus repudiandae veritatis sequi officia vel. Maxime enim similique consequuntur sint et fugiat. Veniam aspernatur omnis est tempora dolor quo quos.\r\n\r\nAliquid et est sed illo et. Consequatur omnis voluptatem quia repellat repellat placeat consequuntur. Sit eius est voluptas dolor. Dolores enim sed ea. Sed nam dolorem officiis repellat culpa similique illo quae.', 'Excepturi ut magni est quia omnis. Sed natus eum quis occaecati aliquam eius voluptates. Nulla sed dicta qui.\r\n\r\nRecusandae aut rerum dolorem nesciunt animi reprehenderit. Perferendis explicabo iste dolores fuga. Quas cumque non modi a qui sed.\r\n\r\nProvident est facere ipsam deleniti dicta. Qui praesentium officia vero quis cum porro enim. Vero earum a doloribus nihil. Sit optio est ut autem qui.\r\n\r\nUt cumque iure officiis a qui dolorem. Aut dolores excepturi occaecati ut consectetur. Voluptatibus ut aperiam aspernatur assumenda fugiat neque. Dolorem tempora debitis ut sed.\r\n\r\nNam eveniet placeat sequi at reiciendis praesentium. Vel sint in mollitia velit nobis nihil voluptatem. Ut qui occaecati commodi voluptatem facilis quia.\r\n\r\nDeleniti omnis autem voluptatum ea et voluptatibus ratione. Quas quasi provident accusamus dicta maxime illum cum. Expedita tempore officia qui qui natus. Eaque voluptatem nihil cupiditate suscipit laboriosam.\r\n\r\nQuidem dicta enim voluptatem sequi eos quas deleniti. Mollitia et molestias occaecati repellendus sunt. Delectus tenetur ipsa incidunt quidem dolorem enim.\r\n\r\nDolor numquam hic ipsum facere quibusdam rerum. Quo voluptatem dolores iste sapiente. Facilis sed quibusdam ipsum accusamus facilis odit nemo. Voluptatem sed autem ratione temporibus.\r\n\r\nMagnam est atque non corrupti optio ut. Culpa delectus voluptate omnis ab. Similique corporis soluta animi molestiae voluptatem autem. Quas est perferendis aliquid labore.', 4, NULL, '2018-07-24 01:36:46', '2018-11-07 04:17:02'),
(5, 'Dolores doloremque quasi id est.', 'Dolor natus fuga enim aspernatur accusantium.', '1541535412.jpg', 'Quis voluptatem dolorum provident eos. Excepturi sint ut quis dolorem. Consequatur sint totam totam autem facere.\r\n\r\nAliquam quod quod eius impedit. Fugit voluptas velit et fuga explicabo incidunt. Neque error rem fuga veritatis eum. Tempora autem in necessitatibus.\r\n\r\nDolores fugit ducimus debitis dolor ea. Omnis officiis debitis laboriosam corrupti sint totam aspernatur. Adipisci officia dolorum molestiae aut iste eos esse.\r\n\r\nEum provident officia doloremque esse. Ut ea qui soluta deleniti ex laboriosam. Repellat ea qui repellat sit veniam animi. Atque enim maiores molestias tenetur earum ad.\r\n\r\nEarum voluptatem ut voluptatem rerum eveniet. Asperiores maiores consequatur aut iusto error sapiente. Rerum provident illo ipsa sunt et molestiae voluptates. Et laudantium a corrupti ipsa vel commodi omnis. Eveniet quas labore qui pariatur qui.\r\n\r\nConsequatur molestiae assumenda non saepe nihil illo. Temporibus quam ipsam necessitatibus ab est eos. Corporis provident qui nemo.\r\n\r\nNam tempora dolor autem odit quia. Quibusdam et rerum est. Velit voluptas vel aliquam laboriosam occaecati est. Aperiam non expedita aut iste consequatur.\r\n\r\nAlias sunt molestiae in cupiditate non non aspernatur. Quia impedit modi aliquid aliquid. Et at molestiae mollitia odio alias mollitia.\r\n\r\nRepudiandae natus molestiae quia autem. Explicabo asperiores sunt ad et. Velit consequuntur est similique occaecati sed. Accusantium quia rerum quia non et.', 'Rerum incidunt quia quod quaerat. Dolorum dolores officia sit commodi veniam.\r\n\r\nDolores rerum voluptas non facere sit ut. Et aspernatur cupiditate fugiat velit sunt quidem. Vel quis ipsa repellendus. Quisquam mollitia esse cum eos.\r\n\r\nArchitecto velit voluptates veniam voluptatum voluptas. Quia et in dolores autem non. Dolores et fugit numquam nesciunt rerum quasi sed. Optio sed illo veritatis consequatur sit. Molestiae magnam beatae et quia non.\r\n\r\nVoluptatem aut laudantium dignissimos voluptatem consequuntur corporis. Sapiente ullam ratione in et. Dicta qui quibusdam hic ad pariatur voluptas provident consequatur.\r\n\r\nVoluptas quam et esse laudantium. Nesciunt ipsa consequuntur impedit hic minima eum dolore. Quia necessitatibus enim tempore consequatur non aliquam et consectetur. Quam in et minus sequi dolorem.\r\n\r\nId officia esse sit qui. Aut officia ratione facilis veniam beatae.\r\n\r\nTenetur qui totam dolorum labore quia omnis. Quasi officia est voluptas iste. Saepe voluptatibus molestiae quisquam et est provident.\r\n\r\nUt qui nesciunt ipsam laboriosam voluptatem error. Nihil repudiandae repellendus sunt unde ea laboriosam et quia. Fugit laboriosam quod molestiae et sit.\r\n\r\nDistinctio sequi aliquid non quo in reprehenderit. Ut ducimus similique itaque placeat. Et in quas quas sed. Veniam rem impedit et dolorem vel aliquam amet quis.', 5, NULL, '2018-07-24 01:36:46', '2018-11-07 04:16:52'),
(6, 'Ut voluptatem et aut assumenda ipsum veniam.', 'Minima quis sit porro qui hic et.', '1541535274.jpg', 'Voluptatibus labore dignissimos laboriosam adipisci voluptatem facilis reprehenderit. Molestias ut blanditiis veritatis commodi doloribus. Deserunt est repudiandae id porro quia voluptate. Animi corporis illo non provident optio ea non ut. Odit ipsum sint sit eum quo quas rerum dolorem.\r\n\r\nRem dignissimos quo quam. Beatae facilis at modi eveniet repellendus mollitia. Et et voluptatum sint ut asperiores mollitia.\r\n\r\nImpedit eum molestiae labore aliquid voluptatum numquam. Omnis quidem quia aut amet. Minus iure quia eius possimus est. Aut esse eum voluptas quas mollitia est officia. Quas eum occaecati dolore eum dignissimos commodi.', 'Et sint eum quam repudiandae voluptas itaque dolores. Sapiente necessitatibus dolorem fugit et laborum ut. Et et distinctio eaque sunt et fuga. Quis iusto alias hic est iste blanditiis debitis.\r\n\r\nTenetur unde voluptatum et magnam possimus quam commodi neque. Quia perspiciatis nobis odit est fugit modi aut. Nisi fugiat nesciunt necessitatibus voluptas et maiores quod. Cupiditate ut sint nihil temporibus fugit non incidunt.\r\n\r\nSit laboriosam sit iure repellat quam neque cumque. Adipisci possimus voluptas quos blanditiis vero ipsum reprehenderit esse. Et provident totam hic nisi voluptatum sed non culpa.', 6, NULL, '2018-07-24 01:36:46', '2018-11-07 04:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'natus', '2018-11-03 04:31:07', '2018-07-24 01:36:42', '2018-11-03 04:31:07'),
(2, 'voluptas', '2018-11-03 04:33:04', '2018-07-24 01:36:42', '2018-11-03 04:33:04'),
(3, 'maxime', '2018-11-03 04:33:05', '2018-07-24 01:36:42', '2018-11-03 04:33:05'),
(4, 'provident', '2018-11-03 04:31:01', '2018-07-24 01:36:42', '2018-11-03 04:31:01'),
(5, 'tempore', '2018-11-03 04:31:03', '2018-07-24 01:36:43', '2018-11-03 04:31:03'),
(6, 'et', '2018-11-03 04:31:04', '2018-07-24 01:36:43', '2018-11-03 04:31:04'),
(7, 'voluptatum', '2018-11-03 04:33:06', '2018-07-24 01:36:43', '2018-11-03 04:33:06'),
(8, 'rerum', '2018-11-03 04:32:56', '2018-07-24 01:36:43', '2018-11-03 04:32:56'),
(9, 'veniam', '2018-11-03 04:32:58', '2018-07-24 01:36:43', '2018-11-03 04:32:58'),
(10, 'amet', '2018-11-03 04:33:00', '2018-07-24 01:36:43', '2018-11-03 04:33:00'),
(11, 'delectus', '2018-11-03 04:33:01', '2018-07-24 01:36:43', '2018-11-03 04:33:01'),
(12, 'a', '2018-11-03 04:33:07', '2018-07-24 01:36:43', '2018-11-03 04:33:07'),
(13, 'ut', '2018-11-03 04:33:07', '2018-07-24 01:36:43', '2018-11-03 04:33:07'),
(14, 'neque', '2018-11-03 04:33:08', '2018-07-24 01:36:43', '2018-11-03 04:33:08'),
(15, 'dolorum', '2018-11-03 04:33:09', '2018-07-24 01:36:43', '2018-11-03 04:33:09'),
(16, 'qui', '2018-11-03 04:30:30', '2018-07-24 01:36:43', '2018-11-03 04:30:30'),
(17, 'aut', '2018-11-03 04:30:56', '2018-07-24 01:36:43', '2018-11-03 04:30:56'),
(18, 'explicabo', '2018-11-03 04:33:10', '2018-07-24 01:36:43', '2018-11-03 04:33:10'),
(19, 'consequatur', '2018-11-03 04:33:11', '2018-07-24 01:36:43', '2018-11-03 04:33:11'),
(20, 'qui', '2018-11-03 04:28:41', '2018-07-24 01:36:43', '2018-11-03 04:28:41'),
(21, '8f8cc524bf43afb9c5cf6f9addda682e.png', '2018-11-03 04:35:34', '2018-11-03 04:33:19', '2018-11-03 04:35:34'),
(22, '3f9c6de980b55329e260dc1deac36d68.png', '2018-11-03 04:35:36', '2018-11-03 04:33:42', '2018-11-03 04:35:36'),
(23, '359ef9aeee9e4d1fdf27d7e1437d7688.png', '2018-11-03 04:35:38', '2018-11-03 04:34:34', '2018-11-03 04:35:38'),
(24, '25fc5e2af9bd30d8a6e502525afebc0b.png', '2018-11-03 04:39:44', '2018-11-03 04:35:07', '2018-11-03 04:39:44'),
(25, '25fc5e2af9bd30d8a6e502525afebc0b.png', '2018-11-03 04:39:46', '2018-11-03 04:35:07', '2018-11-03 04:39:46'),
(26, '25fc5e2af9bd30d8a6e502525afebc0b.png', NULL, '2018-11-03 04:35:07', '2018-11-03 04:35:07'),
(27, '25fc5e2af9bd30d8a6e502525afebc0b.png', NULL, '2018-11-03 04:35:07', '2018-11-03 04:35:07'),
(28, '25fc5e2af9bd30d8a6e502525afebc0b.png', NULL, '2018-11-03 04:35:07', '2018-11-03 04:35:07'),
(29, '25fc5e2af9bd30d8a6e502525afebc0b.png', NULL, '2018-11-03 04:35:07', '2018-11-03 04:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `title`, `permissions`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'totam', 'Mollitia dignissimos libero non consequuntur quis impedit itaque nesciunt. Impedit illo debitis et neque id dolor minima. Et ut est est tempora occaecati. Enim voluptate doloremque sit sunt voluptas veritatis.\n\nRecusandae expedita eos nulla quo et. Ea deleniti incidunt dolor temporibus. Soluta culpa et consequatur numquam qui non.\n\nVeritatis est repudiandae et et blanditiis rerum id molestiae. Maiores repellat dolorem sunt pariatur vitae ipsam vel. Quo alias voluptatem tempore voluptas. Sunt delectus suscipit eos qui animi quidem repellat.\n\nEt tempore et vitae rem natus qui quam. Facere in assumenda eum aliquam. Quia labore maiores magnam quos animi ut praesentium sunt.\n\nVelit pariatur illum repellat qui aut quam voluptatem. Et repellendus dignissimos architecto pariatur. Minus fugiat eligendi quas recusandae est qui eum. Occaecati repellat ipsam sit quia qui.\n\nTemporibus modi pariatur vel non. Accusamus debitis laboriosam sed. Est et aut corporis inventore autem suscipit provident temporibus.\n\nSunt eveniet quas unde qui. Natus facilis vero ipsam delectus. Quis nihil exercitationem neque et veritatis voluptatem. Eum natus consequatur est.\n\nEt dolorem qui quis minima est. Qui doloremque magni in nostrum.\n\nLaudantium repellat aut magnam fugit. Recusandae quod inventore explicabo cum est dolore. Molestiae est eveniet molestiae rerum. Quod vitae odit saepe quibusdam. Sint qui qui molestiae quaerat nostrum.', NULL, '2018-07-24 01:36:36', '2018-07-24 01:36:36'),
(2, 'quia', 'Hic accusamus dolorem sed ut. Est necessitatibus recusandae esse ea. Iusto rerum suscipit voluptas natus qui nesciunt debitis. Cum beatae excepturi quibusdam laudantium harum doloribus.\n\nAtque rerum enim corrupti occaecati sequi est nihil. Vel nihil culpa mollitia vel id et odio voluptatem. Velit nam modi placeat facere qui fugiat. Quaerat excepturi nam doloribus qui itaque expedita atque.\n\nEa laborum eveniet qui sed. Inventore cupiditate id aut atque. Occaecati enim molestias ut quo magnam.\n\nEius vel sequi delectus doloremque maiores voluptas soluta. Est sunt sit voluptatem sunt dolore. Inventore odio harum minima quia optio hic necessitatibus aperiam.\n\nIpsa eaque excepturi quibusdam voluptatibus. Ab et quo sit qui saepe earum recusandae. Nobis voluptatem molestiae veritatis deleniti reprehenderit sint veniam. Est velit officiis ipsum ut et quo qui.', NULL, '2018-07-24 01:36:36', '2018-07-24 01:36:36'),
(3, 'nihil', 'Cupiditate voluptatum inventore et quo iure sit. Illum est consequuntur et tempore et. Reprehenderit aut sint quaerat accusamus.\n\nSequi in voluptate et necessitatibus temporibus. Expedita at rerum velit. Aut sit consequatur cum. Dignissimos sit eligendi ullam.\n\nQuam animi ducimus consequatur in ut deserunt. Qui maiores ut sed cumque voluptatem eius nulla. Laborum omnis voluptatum nostrum beatae porro sapiente. Fugiat sed nulla quisquam quasi dolores beatae ipsum minus. Adipisci eum eaque et ducimus officiis.', NULL, '2018-07-24 01:36:37', '2018-07-24 01:36:37'),
(4, 'nam', 'Quam laboriosam quod et atque in. Sint dolorum ut exercitationem corrupti. Incidunt vitae repudiandae excepturi est. Facilis nobis nesciunt possimus assumenda qui ut ipsam.\n\nSimilique minus accusamus voluptatibus libero ipsa eaque magnam consequatur. Necessitatibus nemo aperiam ipsam veniam officia at. Consequuntur velit id minus. Ipsum eum et perferendis temporibus molestias.\n\nEt amet mollitia quia. Aliquam et architecto necessitatibus labore porro. Dolorem sunt cum consequuntur vero. Quo repellendus quia ut cumque voluptate commodi.\n\nSed vero sunt rerum assumenda. Qui rem libero quis qui. Culpa quasi aut cumque corrupti. Voluptas deleniti quis saepe pariatur sed.\n\nEt molestiae non occaecati architecto harum aut sunt. Eligendi quo nulla pariatur perferendis ut laborum soluta. Id et sint harum voluptas. Eos provident debitis nesciunt quaerat.\n\nVoluptate illum doloremque cupiditate consequatur dolores. Et non et facilis suscipit officiis illo quae fugit. Magnam corporis blanditiis quod quia et ab quam. Animi ut voluptates a maxime veniam deserunt quia.\n\nQui eos qui ut incidunt perspiciatis. Sed ad occaecati eos et. Sint exercitationem quia sed incidunt tenetur qui.\n\nAut qui autem ea totam magni. Necessitatibus repudiandae dolorem molestiae. Molestiae odio sit ut et unde commodi.\n\nRepellat nam et aut dolor ipsum repellat nemo. Mollitia id repudiandae maiores. Occaecati adipisci et magnam consequatur. Quaerat cum quam aliquam possimus est non.\n\nOptio facilis consequatur assumenda reiciendis voluptatem eum. Minima repudiandae facilis distinctio excepturi quia. Vero voluptates voluptas vel vitae laudantium.', NULL, '2018-07-24 01:36:37', '2018-07-24 01:36:37'),
(5, 'reiciendis', 'Explicabo sint non hic alias facilis suscipit. Et sunt rerum sed est enim libero. Optio eaque accusantium labore sit non sint.\n\nMagnam iusto molestias magnam cum commodi eos sunt. Libero architecto et culpa incidunt atque nisi.\n\nUt illum ad quasi. Nesciunt ipsa voluptate qui magni. Dignissimos est aliquam voluptate iure expedita neque. Dicta saepe dolores quis adipisci magnam.', NULL, '2018-07-24 01:36:37', '2018-07-24 01:36:37'),
(6, 'doloremque', 'Velit beatae ex dolorem dicta. Accusamus at eum excepturi eum ut porro dolorem. Quis ducimus non nobis voluptatum similique quis aut. Vero rerum facere ullam.\n\nCum optio qui quaerat facilis temporibus nemo quibusdam minima. Unde totam voluptatem non sunt nihil ullam maxime. Et sint qui repellendus et nemo qui.\n\nRerum et quae aut. Cupiditate dolores quos amet enim. Vitae facilis qui et ut et.\n\nNon voluptates non odio voluptatem quo ipsam. Laboriosam iusto qui omnis ratione officiis. Perspiciatis ratione et nam amet et optio.', NULL, '2018-07-24 01:36:37', '2018-07-24 01:36:37'),
(7, 'amet', 'Excepturi ad amet suscipit qui ut quo. Eos et vel facere ut explicabo deleniti dolor quo.\n\nEius quia voluptate dicta odit. Sint fugit labore non aut molestiae nesciunt vitae. Deleniti officia aut voluptatum debitis et similique.', NULL, '2018-07-24 01:36:37', '2018-07-24 01:36:37'),
(8, 'ipsa', 'Corporis facere voluptatem perferendis rerum placeat deleniti. Non quia sequi possimus impedit atque. Minima esse explicabo voluptatem repellendus eligendi voluptate.\n\nOccaecati beatae ut est perferendis et. Quia veniam neque autem impedit quis. Quis error velit corporis et quia illum.\n\nOmnis libero quam in quia impedit asperiores dignissimos. Qui molestiae fugiat voluptas tempore unde similique qui. Dolorum repudiandae eius id id voluptatem. Quia voluptatem minima ipsum quo dolorum et.', NULL, '2018-07-24 01:36:37', '2018-07-24 01:36:37'),
(9, 'sed', 'Harum non nobis dolorem repellat ut veritatis. Error sed et sit. Ad nesciunt esse voluptates laborum ducimus atque.\n\nRerum delectus magnam perferendis nesciunt et autem possimus. Exercitationem vel eos consequatur quia labore.\n\nMaiores nemo dolorem explicabo omnis. Quos nihil iure beatae minus. Non reprehenderit cumque qui ducimus perferendis.', NULL, '2018-07-24 01:36:38', '2018-07-24 01:36:38'),
(10, 'quo', 'Qui quod quia quo sunt mollitia modi qui accusantium. Assumenda quos nostrum ut nesciunt iusto voluptas voluptatem. Incidunt expedita nemo qui.\n\nEnim quos possimus quisquam vel possimus sint eius. Occaecati et quia sequi consequatur sed deserunt quia culpa. Aut cupiditate impedit voluptatum accusamus repudiandae. Reiciendis velit sunt quia dolorem cupiditate repudiandae. Sapiente fuga quidem voluptatem neque optio.\n\nSoluta mollitia eos labore. Tempora odio quo qui dolor sint ab natus. Omnis tenetur libero optio distinctio et ut consequatur. Nihil optio consequuntur voluptas. Dignissimos ut qui voluptas nihil repellat ut et.\n\nMolestiae sit est et in. Voluptatem non in sit accusantium illum id rerum. Ullam veritatis voluptatem expedita cumque ut.\n\nQuia in repellat voluptates molestiae unde quam. Nam aut quas reiciendis distinctio totam reprehenderit non occaecati. Aut et ratione necessitatibus esse et fugiat non et. Numquam aut perspiciatis velit et excepturi quod est vel.', NULL, '2018-07-24 01:36:38', '2018-07-24 01:36:38'),
(11, 'et', 'Sit mollitia quisquam vel minus. Quasi odio beatae rerum maiores molestiae fugit. Molestiae dolor incidunt ut et aut.\n\nIn excepturi voluptatem qui maxime nihil. Explicabo dolores hic molestiae voluptatibus ducimus at tenetur. Iusto eaque consequatur sapiente vel aut asperiores incidunt reiciendis. Quos qui soluta fugiat nobis.\n\nRepellat quam qui quaerat quia eum rerum. Officia magnam esse deleniti id molestiae suscipit sint doloremque. Id quis quia ducimus omnis nulla ad. Dolor ipsam repellendus expedita quia sint.\n\nVoluptas ut in similique exercitationem temporibus quia temporibus. Ad soluta molestiae placeat suscipit quaerat consequuntur quia. Tenetur voluptatem et cumque excepturi.', NULL, '2018-07-24 01:36:38', '2018-07-24 01:36:38'),
(12, 'ut', 'Ipsum id et voluptas eum fugiat voluptatem vel. Consequuntur quis ut corporis placeat corporis. Eum consequatur aut ex voluptatem iure quod. Assumenda libero voluptas dolorem. Earum fuga quo est dolorem dicta aut.\n\nVoluptas cupiditate voluptas nihil veritatis aut. Hic ad voluptates quisquam quam.\n\nNam pariatur dolorum et eos distinctio totam qui. Soluta aut commodi commodi illum quia qui quia. Est aliquid atque autem doloremque asperiores adipisci aut.\n\nIpsa rerum sed aut veritatis non facilis et. Est ut debitis vel assumenda. Repellendus eos rerum voluptas excepturi animi. Sed qui vitae nostrum dolor beatae.\n\nTempora quisquam ullam et. Explicabo quia optio et dolores necessitatibus. Aperiam id nobis labore suscipit asperiores. Reiciendis quo repellendus rerum modi nemo quia.\n\nDebitis sit ratione corporis odit qui dolorem. Occaecati temporibus soluta sed. Repudiandae soluta fugit animi. Id beatae inventore debitis adipisci eos iure nobis.\n\nEum id praesentium sed quae. Iste debitis corporis voluptatum repellendus illum.', '2018-11-03 05:13:05', '2018-07-24 01:36:38', '2018-11-03 05:13:05'),
(13, 'facere', 'Odio omnis molestias provident voluptatem quia. Cupiditate sint earum quisquam et enim ut repudiandae qui.\n\nSunt magnam laboriosam ullam et molestias quos qui. Non autem placeat quae accusantium. Est omnis facere fuga. Dolorem vitae voluptatum voluptatum magni qui optio cupiditate.\n\nEst assumenda architecto sequi deleniti dignissimos est. Nulla ut asperiores sed. Hic alias rerum sequi quos provident.\n\nQuaerat dolor fuga qui quia ea. Qui iste temporibus reprehenderit excepturi necessitatibus ipsam omnis. Adipisci fugiat sapiente nihil delectus odio. Dolorum nihil sapiente recusandae.\n\nCorrupti et neque quisquam maxime suscipit eaque sequi aspernatur. Et magni quos sed optio cupiditate sunt. Autem ut distinctio quos nihil. Sed sit aliquid sint nihil. Occaecati suscipit rerum eum non facilis.\n\nEnim sequi sit non ea voluptatum quae repellendus porro. Aut quisquam reiciendis beatae. Non ut voluptas animi quasi qui enim. Et minima reprehenderit sunt. Quis alias possimus voluptate voluptatem.\n\nIste aspernatur accusantium corrupti itaque officiis non ipsam. Sed magnam nisi beatae ad voluptatem. Doloremque necessitatibus iste qui culpa.\n\nVoluptas quis ad dignissimos aut. Eos culpa modi eaque veritatis. Nobis ratione ex veniam distinctio ipsa. Quia quo assumenda assumenda vel.', NULL, '2018-07-24 01:36:38', '2018-07-24 01:36:38'),
(14, 'quis', 'Veniam exercitationem est qui accusantium iure repudiandae libero. Officia ad quae non dolorem et non. Sint et perspiciatis molestiae aut repellendus. Et nostrum quibusdam sed sed ipsum itaque culpa totam. Rerum quia autem quam incidunt.\n\nQuo ab ea voluptas et est. Recusandae esse molestias laborum totam asperiores. Incidunt et occaecati culpa dicta. Assumenda ea in aut dolore dolor.\n\nMolestiae est deleniti harum ratione laborum. Dolores quaerat omnis alias ea eos.\n\nEst harum veritatis repellat at suscipit. Adipisci in error facilis vel sit deserunt. Quidem necessitatibus accusantium quibusdam mollitia omnis. Dolorem dolorem itaque dolorem eveniet et.\n\nId nostrum fugiat esse distinctio sunt. Perspiciatis rerum delectus ut sed ullam. Inventore ipsum vero ea aliquam qui autem. Vel et alias doloribus voluptatibus autem et.\n\nMolestiae assumenda omnis temporibus itaque veritatis modi rerum qui. Quos vitae et harum aut quod sit. Ut suscipit ut at consequatur sed. Optio voluptatem qui voluptas adipisci dolores sed.\n\nUt excepturi voluptas necessitatibus et. Voluptatem saepe qui repellendus quam cumque. Aspernatur fugit consequatur aut quisquam in. Vel veritatis in natus voluptatem similique praesentium.\n\nDolorem hic quia est. Omnis molestiae quaerat nulla dolorem non sit eum est. Sit sint quia corrupti aut fuga enim.', '2018-11-03 05:12:56', '2018-07-24 01:36:39', '2018-11-03 05:12:56'),
(15, 'amet', 'Quas dolor aut veritatis rerum qui dolores quaerat. Officia illo qui minima mollitia. Totam aut aspernatur odit accusantium ipsam. Et voluptatem aut amet iusto aut.\n\nSuscipit vero adipisci iusto est officiis et. Enim nemo nesciunt delectus et blanditiis debitis ut. Vero quia non qui in sequi magni. Rerum repudiandae corporis asperiores quia.\n\nTempore laborum eaque corporis vitae. Totam est ut sed. Ut possimus fugiat et corporis inventore.\n\nAccusantium in inventore voluptate quia. Fuga sit autem facere. Ex eum qui non nobis.\n\nFuga necessitatibus rerum sint molestiae mollitia tempora. Omnis deleniti labore esse quis modi animi corrupti qui.\n\nAut et est qui quia et a sed. Et veniam explicabo unde. Aspernatur voluptatem magnam et neque. Vitae ut amet officiis ut reprehenderit aspernatur.\n\nVoluptatem eveniet quod aut sed vero occaecati animi. Nesciunt enim nemo odio exercitationem. Eaque architecto voluptas sapiente in. Praesentium sunt molestiae quod reprehenderit illum.', NULL, '2018-07-24 01:36:39', '2018-07-24 01:36:39'),
(16, 'dicta', 'Facilis illum illo officia nobis. Culpa aliquam maxime omnis minima impedit eligendi. Autem excepturi fugit neque quam.\n\nQuisquam eaque cupiditate ea debitis expedita fugit. Sapiente qui repellat occaecati magni officia. Nihil consectetur ut corrupti molestiae est. Dolorum ratione fugit voluptas voluptatum.', '2018-11-03 05:12:52', '2018-07-24 01:36:39', '2018-11-03 05:12:52'),
(17, 'aut', 'In possimus autem ex. Assumenda est earum veniam exercitationem cumque non. Suscipit earum aut architecto nesciunt esse veniam qui.\n\nOptio repudiandae voluptates ad. Molestiae maiores doloribus ullam dicta magni ab qui.\n\nQuam explicabo doloremque fugit dolorem voluptatem vel alias fuga. Ea sunt aut nihil delectus officiis velit. Quibusdam ipsum natus quia recusandae. Minus magni nostrum sit dolor illum fugit. Ut qui vitae totam consectetur cum dolorem.', NULL, '2018-07-24 01:36:39', '2018-07-24 01:36:39'),
(18, 'ab', 'Qui excepturi officia doloremque voluptas. Repellat nemo qui incidunt tempore quia. Dignissimos modi accusantium minus. Et facilis repellendus molestiae.\n\nEum voluptatem ab aut delectus cum ut facilis. Sunt quae ut possimus velit ab quas nostrum. Ea nisi est sapiente.\n\nSint voluptate aut id maiores sit voluptas ipsum. Id iusto sapiente voluptas et earum iusto. Earum vel optio quas.\n\nPossimus voluptatibus sed ea. Sequi eum debitis saepe quaerat corrupti id sit beatae. Nesciunt natus aut ratione vero cupiditate voluptatibus. Autem totam aut dicta.\n\nQui delectus nihil qui necessitatibus. Nihil ab odio laboriosam velit. Voluptatibus ad provident quis qui facere. Sed hic aut dolores est.\n\nAssumenda temporibus sit quam laborum. Dolorem enim dignissimos aut et necessitatibus possimus consequatur. Magnam sed accusantium ipsam consectetur ut optio corporis. Sunt facilis nostrum a.\n\nDolores eius laudantium impedit. Tenetur exercitationem sapiente repellendus fugiat aliquid. Sit consequatur quaerat itaque ea natus. Omnis molestiae illum cupiditate qui error. Aliquid explicabo iste minima quas similique sit blanditiis.\n\nEst et quia sunt et ut voluptate. Et vel dolore quibusdam explicabo expedita molestias est.\n\nVoluptas fugit corporis at dicta aliquam sed. Quae officia rem sit laboriosam dolorem et sed.', NULL, '2018-07-24 01:36:39', '2018-07-24 01:36:39'),
(19, 'et', '[\"groups\\/create\"]', NULL, '2018-07-24 01:36:39', '2018-11-03 05:02:43'),
(20, 'dolores', 'Omnis harum ut nam corrupti delectus. Sint dolor voluptas eos odio eum dolorem. Quae sit mollitia molestiae dolorem consequatur qui accusantium qui.\n\nSed suscipit quisquam quam quasi placeat ea autem. Sint sit nobis id sit sint asperiores.\n\nAsperiores quisquam iure quod. Cumque aut cumque itaque voluptatum nisi qui odio. Ratione cum totam nemo minus corporis. Est quis voluptatum quia accusamus ut sequi.\n\nRepudiandae ullam est commodi consequatur consectetur quam deserunt. Tempora dolores corrupti impedit officia non laboriosam in. Omnis exercitationem quaerat voluptates quis repudiandae.\n\nEt sit nobis aut ea tempore repellat. Labore exercitationem est occaecati recusandae sit. Tempore sed vero consequatur dolore.\n\nIusto cumque vero delectus aut officiis illum beatae. Architecto ab quam repellat ratione dolor laborum pariatur. Excepturi totam exercitationem exercitationem architecto natus alias delectus. Beatae ea eaque velit esse mollitia.\n\nConsequatur vitae repudiandae ea eum optio omnis. Rerum repellat minima exercitationem dolor blanditiis. Illum reiciendis magni magni earum sed qui fuga.\n\nSunt aspernatur ea commodi nobis voluptatem aut repudiandae. Laudantium minima sed ratione necessitatibus animi.\n\nCulpa minima sunt sit quas dolorem. Voluptatem autem veniam quis dolores tenetur rem. Voluptatem ad amet omnis perspiciatis natus saepe est. Excepturi explicabo reprehenderit et sit nam fugit.', '2018-07-27 01:49:26', '2018-07-24 01:36:40', '2018-07-27 01:49:26'),
(21, 'Admin', '[\"groups\\/create\",\"groups\",\"groups\\/edit\",\"admin\",\"settings\",\"groups\\/apply_update\",\"store_settings\",\"students-list\",\"load-students\",\"users\",\"news\",\"news\\/create\",\"news\\/edit\",\"news\\/apply_update\",\"courses\",\"courses\\/create\",\"courses\\/edit\",\"courses\\/apply_update\",\"materials\",\"materials\\/create\",\"materials\\/edit\",\"materials\\/show\",\"materials\\/apply_update\",\"sliders\",\"sliders\\/create\",\"sliders\\/edit\",\"sliders\\/apply_update\",\"services\",\"services\\/create\",\"services\\/edit\",\"services\\/apply_update\",\"messages\",\"profile\",\"update_info\",\"update_data\",\"update_image\",\"change_password\"]', NULL, '2018-07-27 01:44:36', '2018-12-07 19:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `position`, `image`, `bio`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(22, 'PHP Instructr', '1544217304.jpg', 'kdfkndfjgndfjgnk', 1, NULL, '2018-07-27 03:49:51', '2018-12-07 19:15:04'),
(23, 'PHP developer', '1532733552.jpg', 'hbjhbjhb', 31, NULL, '2018-07-28 06:19:13', '2018-07-28 06:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `title_ar`, `title_en`, `image`, `file`, `video`, `course_id`, `content_ar`, `content_en`, `instructor_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'vxbfdd', 'sdfsdfdsf', '1544209602.jpg', NULL, NULL, 6, 'sdfsfdsfds', 'sdfdsfds', 1, NULL, '2018-12-07 17:05:47', '2018-12-07 17:06:42'),
(2, 'njnbj', 'hbhjbhjbhj', '1544209739.jpg', '1544209739.zip', NULL, 6, 'bhjbjhbhj', 'bjhbjhbhj', 1, NULL, '2018-12-07 17:08:59', '2018-12-07 17:08:59'),
(3, 'mnkjnkjnk', 'jnkjnkjn', '1544209904.jpg', '1544209904.zip', 'https://www.youtube.com/watch?v=a7pzD1zUHKU', 6, 'kjnjknkjnjknkjnk', 'njknkjnkj', 1, NULL, '2018-12-07 17:11:44', '2018-12-07 17:11:44'),
(4, 'lkkn', 'kjnkjnjk', '1544209987.jpg', NULL, 'https://www.youtube.com/watch?v=2xOM1qgSJt4', 6, 'nkjnkjnkj', 'nkjnkjnkj', 1, NULL, '2018-12-07 17:13:07', '2018-12-07 17:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Miss Lina Moen', 'oconner.mohammad@example.com', 'Et laudantium recusandae illum ex perferendis labore quis. Accusantium voluptas natus sapiente maiores nihil nemo minima. In perspiciatis perspiciatis sed non.\n\nQui ad illo ducimus aut sed. Expedita inventore repudiandae non soluta et. Magnam officiis velit sint eaque iusto.\n\nCulpa cumque consequatur et sunt. Non veniam quo dolorum officiis quo rerum qui. Dolor officiis quia aut est sint assumenda enim numquam. Laborum officiis eius aut qui dolor provident fuga.\n\nEst consequatur enim at necessitatibus officia. Et ut architecto ab velit dolores.\n\nNesciunt fugiat nulla libero sit. Dolores corrupti odit necessitatibus atque. Perspiciatis ut ut velit officia veniam nam est.\n\nIste a est voluptate aperiam ab veniam maiores unde. Est dolores ipsam officia qui modi voluptatem voluptas consequuntur. Eaque officiis corporis velit debitis. Sunt ea facere eligendi molestias.', '2018-07-27 01:18:12', '2018-07-24 01:36:49', '2018-07-27 01:18:12'),
(2, 'Brendan Hoeger', 'calista50@example.net', 'Est nihil consequatur porro. Culpa earum vitae nemo odio aliquid. Ex temporibus sapiente quae animi dolores voluptas.\n\nQuae sit assumenda quos quis eos unde unde aliquid. Nesciunt illum ipsam non repellat maxime quas. Iure rerum suscipit libero molestias sint non. Modi ratione sit blanditiis eos nemo.\n\nSed reiciendis error velit ut suscipit laborum. Nihil sed dolores repellat deserunt quasi impedit voluptatem. Ab et odit quidem et velit exercitationem. Placeat earum cupiditate eos quia esse. Architecto aut sapiente laborum quasi occaecati ipsa iusto autem.\n\nId debitis ullam autem quia itaque omnis sit. Nemo vero voluptate autem repudiandae. Quod ut consequuntur consequatur rerum molestiae. Ab ut dolor aut unde.\n\nNecessitatibus aut neque voluptas nostrum architecto aut. Qui sunt quibusdam harum vitae voluptatem nisi culpa. Architecto nulla non maiores itaque.\n\nDelectus ea corporis facere quos quos adipisci vel cupiditate. Eum molestias dolore corporis placeat sed. Molestiae voluptas tempore sapiente. Aut voluptatem sunt exercitationem dicta eos.\n\nAliquid modi consequatur praesentium et porro. Et quos eius expedita. Ratione quidem dolorum eos est quae. Illum iusto explicabo ad incidunt culpa est fugiat. Sunt beatae quis consequatur reiciendis.', '2018-07-28 06:21:53', '2018-07-24 01:36:49', '2018-07-28 06:21:53'),
(3, 'Augustine Zemlak Sr.', 'cassin.ethel@example.org', 'Quae alias deserunt porro occaecati quia. Eum dolorum ut incidunt amet et ipsam consectetur temporibus. Ducimus perspiciatis enim ipsam labore nesciunt. Qui dolorem architecto aliquam modi voluptate sint et perferendis.\n\nError doloremque doloremque autem ut nostrum doloribus doloremque. Iusto est necessitatibus quia officia. Possimus at ea ipsa sit dolorem autem quia eveniet. Similique labore incidunt voluptas aperiam expedita iure praesentium est.\n\nExercitationem ut quisquam eos laboriosam. Cumque quas voluptatem blanditiis totam deleniti. Qui est aut velit ea voluptatem in ab. Laboriosam minus sint minus saepe aut.\n\nQui vitae dignissimos dolor blanditiis. Id error sint quo ratione delectus officia odit est. Eius aperiam commodi suscipit sed corrupti ut consequuntur similique. Et sit placeat assumenda dolorem.\n\nLabore quod iusto possimus assumenda ut delectus doloribus. Vel doloremque iure officia eum id. Consequuntur ratione quod unde pariatur ipsa. Distinctio voluptas nesciunt illo quis.\n\nQuis nisi sint aut pariatur veritatis nisi iste. Tempora incidunt ipsam minus excepturi consectetur. Voluptas natus provident incidunt est aut sint porro.\n\nSit natus voluptates et occaecati possimus vitae dignissimos. Libero culpa voluptates in. Voluptate pariatur veritatis dolores possimus dicta quis eius.\n\nReprehenderit vel quia eaque illum sequi. Tempora id esse dicta ut sit qui tenetur. Omnis quidem harum iure voluptas ipsam voluptas. Maxime sint ipsam eos praesentium ut voluptatem nisi libero. Dolor ut sed molestiae fuga fuga aut libero.\n\nNobis voluptate molestias similique earum rerum. Aut non sed occaecati pariatur cum voluptas. Ea quis facere consequuntur delectus eligendi rerum consequuntur. Occaecati dolorum aliquam numquam ut repellat quia iste.', NULL, '2018-07-24 01:36:49', '2018-07-24 01:36:49'),
(4, 'Hoyt Swaniawski', 'ignatius.hermann@example.com', 'Voluptas repellat et adipisci. Et est laborum aut quibusdam rerum officiis. Repellendus iste consequatur maxime necessitatibus ipsa. Eveniet assumenda vel aliquid voluptatum quisquam porro.\n\nMagnam molestiae voluptate explicabo amet quod. Et sit iste ipsum delectus. Temporibus perferendis ratione expedita quo reprehenderit. Nihil dignissimos totam autem.\n\nEt illum ducimus consectetur. Aut sit sed dolor atque. Hic distinctio voluptates animi ut reiciendis odio.\n\nAut eos veritatis quis. Accusamus totam et tempore eveniet. Eligendi at fuga quasi maiores et soluta sequi debitis.\n\nRepellendus officia sequi praesentium nisi quia velit. Cupiditate ex iure aut sapiente magni nemo. Qui ut pariatur voluptatem aut deserunt qui totam.\n\nQuia aut repellendus tempore voluptas tempora molestiae. Quis exercitationem ipsum ratione saepe. Laborum magni mollitia enim eos quisquam magnam possimus.\n\nIpsam distinctio ea mollitia aut. Quis labore harum distinctio officia adipisci at. Et perspiciatis consequatur harum hic. Non excepturi sint aut praesentium consectetur qui.\n\nQuos consequatur id aliquam reiciendis laborum nulla. Et repudiandae cupiditate nostrum incidunt consectetur sed. Cupiditate id quidem rerum sed. Perferendis ea autem voluptas fugit sed velit rem.', NULL, '2018-07-24 01:36:49', '2018-07-24 01:36:49'),
(5, 'Irma Lubowitz', 'destiny19@example.com', 'Ipsam consequatur in qui minus ipsa impedit. Eveniet aut eaque quo. Repellendus molestias rerum voluptatibus natus. Ex qui excepturi laboriosam.\n\nQuis quae officiis cumque saepe qui impedit reprehenderit incidunt. Sit ratione quia sapiente molestiae ducimus. Accusantium unde qui inventore officia quia. Aut aut facere omnis illo qui.\n\nFugit culpa officia corporis libero rerum laborum dolor. Est laborum provident eius perspiciatis magnam in neque itaque. Esse possimus est tempore cum reprehenderit eius. Corrupti sint inventore qui consequatur natus non.\n\nVoluptates id quibusdam dolorum rerum nostrum sint molestias. Eum soluta voluptatem iste sit aliquam at. Soluta est officiis deleniti animi.', NULL, '2018-07-24 01:36:49', '2018-07-24 01:36:49'),
(6, 'Dr. Sigrid Jacobson DDS', 'vonrueden.patrick@example.net', 'Facere velit enim velit. Porro sit ullam iure rem quod accusamus.\n\nIpsam rerum quia ratione sed adipisci et magnam. Et quia a voluptatibus qui. Dolorem facere et pariatur aut. Et maxime unde tempora odio.\n\nCorporis eum occaecati consequatur dolores minima accusamus. Eaque autem nobis molestias in dolorem officia.\n\nEaque eaque est alias porro. Voluptate quia omnis voluptas voluptas atque quia. Ut error laudantium corporis hic. Nihil deleniti et sint nostrum maiores aut repellendus.', NULL, '2018-07-24 01:36:49', '2018-07-24 01:36:49'),
(7, 'Marisol Nicolas', 'wolf.aletha@example.org', 'Ipsa ipsa ea est omnis. Laborum vel eaque est asperiores nulla. Soluta quod qui ab facilis qui ratione. Mollitia omnis odio dolores veniam in cupiditate.\n\nAutem quae quasi sint perferendis autem. Sed esse tenetur nam et aspernatur. Autem aut corrupti omnis accusamus illo ea repellat.\n\nEos quisquam tenetur voluptatibus error rerum non deleniti unde. Non delectus aut aut harum et quibusdam velit. Tempora temporibus neque quia maxime. Voluptatem accusantium ut distinctio dolorem.\n\nExpedita natus aut enim. Ut similique omnis quaerat. Libero odit natus reprehenderit sed. Id a quis et magni eum incidunt ut qui.\n\nOfficiis dolor est eos dolorem autem aut. Quaerat voluptas eligendi dignissimos nam atque. Doloremque et et blanditiis rem non voluptas. Voluptas quisquam non odit in sit.\n\nDeleniti inventore sapiente tempora sapiente. Sit commodi omnis maxime nostrum recusandae mollitia eius. Reprehenderit provident id nam neque eaque alias sed. Quasi nemo eos ea beatae delectus distinctio. Unde et autem ipsam fuga possimus tempora rerum sunt.', NULL, '2018-07-24 01:36:49', '2018-07-24 01:36:49'),
(8, 'Mr. Korbin Nienow', 'connie.reynolds@example.net', 'Enim neque ullam libero saepe et. Sequi alias modi vitae fuga libero. Aut aut aspernatur odit rem voluptate iusto.\n\nUllam autem a enim pariatur recusandae vel illo earum. Dolorum sed assumenda nostrum facere harum est. In quos ex eligendi pariatur magni.\n\nConsequatur quae eum a eveniet vel ut. Porro eos itaque itaque ipsum hic eum. Beatae ex eveniet ipsum harum asperiores. Fugit nostrum aut dolorem laborum vel qui dignissimos dolorum.\n\nOdit accusamus qui ut quos natus aut. Quisquam doloribus esse iure ut. At et ea labore maiores dolorem in rerum.\n\nAut quasi voluptatem ipsa vel. Eum eum voluptatum animi in est. Est et temporibus nemo ut porro eum.\n\nQuod libero est voluptatem. Beatae delectus laboriosam aut.\n\nAb nam odio ad quae similique est. Sit consequatur ut consequatur nulla. Aspernatur accusamus incidunt at enim voluptatem eum aliquam.', NULL, '2018-07-24 01:36:49', '2018-07-24 01:36:49'),
(9, 'Miss Arlie Stehr', 'agislason@example.com', 'Atque voluptas earum et quasi doloribus quas. In quo consequuntur ut fugit libero eum. Modi incidunt vel amet et reprehenderit. Odio voluptas non sit voluptas voluptas id.\n\nSunt aut earum sequi ipsum molestias omnis animi. Tempora tempore tempora esse at ducimus. Enim delectus nihil harum hic quia magnam.\n\nIpsam porro doloribus et ut iusto. Ex facere minus voluptatum modi ipsa voluptatem. Quae modi expedita eius fugiat dolor voluptate in voluptas. Quia aspernatur eum officiis non omnis perspiciatis.\n\nVoluptatem nobis eum saepe reiciendis deserunt quaerat. Id harum recusandae est ullam non. A libero itaque molestiae.\n\nVoluptatem quasi debitis laudantium vitae commodi quibusdam molestiae. Debitis expedita placeat vel dolorem deleniti non ea. Omnis dignissimos quam maiores eligendi. Numquam est nam porro.\n\nEst ducimus dolor molestiae. Aut ex accusantium assumenda non. Est minima quidem iusto aut. Dolores ullam ea voluptate aut rerum ipsam.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(10, 'Prof. Jayson Sipes', 'dustin.nienow@example.org', 'Numquam quis dolor possimus corporis. Deserunt repellat inventore officiis et rerum voluptatem. Quo saepe architecto deserunt itaque consectetur quo.\n\nAmet placeat maiores dolores et fugiat. Ut voluptates quia error qui ut. Eos voluptatem eos animi beatae eligendi distinctio. Voluptatem quasi voluptatem placeat maiores beatae. Sunt dicta voluptatum et quis qui dolores optio.\n\nMolestias eveniet vero deleniti quis nihil ut. Natus fugit ut sed reprehenderit sunt quaerat sequi. Cumque eveniet eos quibusdam ullam fugiat quo fugiat.\n\nNeque aut libero sunt ad assumenda facere cupiditate. Ut dolorem molestiae vel tempora. Ut qui magni iusto esse sapiente aliquam qui.\n\nDucimus ut maxime consequatur facere ut consequatur libero. Et doloribus corporis aliquam quae velit assumenda. Doloremque illo voluptatum maiores.\n\nQuas voluptatum temporibus saepe quas laboriosam error perspiciatis. Est earum eligendi sunt laborum non. Dicta nisi quo autem id reprehenderit sed. Ea est commodi fugiat eum quidem voluptates.\n\nOptio rerum itaque cum voluptatem id maxime. Quas itaque at expedita veritatis ut voluptatem labore corrupti. Repudiandae quidem error atque impedit est repellat. Illum reprehenderit aut sunt quas ut ut saepe.\n\nEst omnis iste exercitationem sed optio ex necessitatibus. At exercitationem qui sit error. Ducimus exercitationem soluta maiores et explicabo. Nihil fugiat possimus explicabo totam quia accusamus.\n\nEst laudantium id perferendis ullam atque ex cum. Qui nostrum esse sunt ad reprehenderit consequuntur. Omnis laudantium commodi cumque nam. Est ex nihil quia sit. Et asperiores autem iusto magnam consectetur sequi earum.\n\nSit error aut quaerat voluptate delectus error fugit. Provident vel aut dolorem reiciendis. Nobis eaque fugiat nisi expedita delectus qui distinctio. Magni repudiandae ipsa qui provident dolore quaerat veritatis praesentium.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(11, 'Prof. Isaiah Denesik DVM', 'ted.ondricka@example.com', 'Nulla sed suscipit et quas reiciendis debitis. Velit est corporis facere tenetur maxime veritatis. Repellat sunt maiores blanditiis amet voluptate.\n\nId quae deserunt animi officia. Architecto dolor et et cupiditate minus voluptas. Expedita laborum enim eos beatae reprehenderit ut. Quia eveniet vel qui odio inventore.\n\nEst omnis aut doloremque itaque ipsum quis. Veniam distinctio accusamus delectus. Enim repudiandae dolor modi optio veniam quia eos.\n\nQui asperiores nobis non maiores pariatur dolores. Odit et aut natus quia nihil. Dolore ut voluptatem quos vitae voluptatibus. Molestiae aliquam quos non eligendi ut laborum enim.\n\nMaiores illum nam assumenda laborum. Et nihil perferendis eius provident eum. Rem ullam hic ut veniam nobis necessitatibus dolor magni. Facere natus libero inventore sint quia consequatur enim.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(12, 'Conrad Mueller', 'kuhlman.lazaro@example.com', 'Nisi aspernatur nobis earum asperiores quo molestias. Consequatur ut id sint perspiciatis occaecati. Exercitationem asperiores molestiae dolor architecto qui voluptatem. Et provident ex nostrum rerum.\n\nEt vitae maiores voluptas. Deleniti autem quaerat ut molestiae eos cum. Sed id pariatur est quos. Error aut hic totam in vitae.\n\nId voluptate pariatur similique et est dolor nihil. Incidunt et vitae eveniet nostrum sed nam. Fugiat qui est est.\n\nQuia at aut minus expedita voluptas aut ratione. Architecto libero aut aut sunt. Et iure cupiditate et qui saepe. Ut asperiores est quibusdam autem illo totam facilis.\n\nBlanditiis qui non doloremque magni necessitatibus. Eos at repellendus et deleniti rerum. Ea vitae id inventore sunt tempora. Praesentium fugit et officiis fuga.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(13, 'Ms. Stephany Lebsack', 'sjohnston@example.com', 'Repellat nisi laboriosam cumque quia ut id sit ut. Nesciunt quam ex dolores rerum quasi. Eos consequatur aliquam et rerum optio. Temporibus laudantium sunt rerum ab non.\n\nConsequuntur inventore temporibus nostrum veritatis enim facere. Quia occaecati eveniet id incidunt.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(14, 'Dr. Myrtle Schultz', 'christiansen.nikko@example.org', 'Odio porro facilis consectetur voluptate sit provident. Autem in magnam sunt distinctio. Consequatur architecto nesciunt saepe. Mollitia velit enim neque dicta maiores consectetur.\n\nPossimus suscipit quidem et recusandae quaerat aut enim sit. Quibusdam perspiciatis tenetur quia quidem. Reprehenderit nemo praesentium consequatur commodi necessitatibus. Magnam aliquam sed sunt amet ea. Quam enim molestiae dicta odit.\n\nNobis sunt totam deleniti labore. Incidunt et consequatur exercitationem autem officia quis. Sint libero ullam minus recusandae labore. Illum voluptatem accusantium reprehenderit aut ut.\n\nTempore et exercitationem perferendis laudantium distinctio odit. Velit nobis sunt aut. Et nisi architecto distinctio ipsa rerum nihil vel impedit. Dolore omnis ullam vel esse cupiditate itaque qui distinctio.\n\nFugit aut et consequuntur dolorem similique quidem temporibus consequatur. Provident ipsum praesentium quia doloremque sunt ex placeat. Quisquam quia aspernatur quidem quo non molestias voluptatem odit. Atque eos eos itaque.\n\nQuam rerum magnam sequi ratione sit. Quasi omnis laudantium eaque. Reiciendis accusamus saepe asperiores placeat amet.\n\nSint qui et perferendis explicabo temporibus et dolores. Mollitia quia temporibus vel porro est dolore error. Et necessitatibus aut dolore magnam rem veritatis. Praesentium repellendus totam earum ea inventore similique labore.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(15, 'Cristobal Effertz', 'zoey.monahan@example.net', 'Non asperiores distinctio necessitatibus aliquam. Odit illo cupiditate eum assumenda aut nisi. Voluptates consectetur dolorem adipisci veniam commodi.\n\nNobis incidunt quae aut veritatis voluptates. Aperiam numquam ex repudiandae et sunt. Laudantium qui ea magnam provident qui asperiores dignissimos hic. Dolorem deserunt odio maiores quibusdam qui quia.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(16, 'Ayana Gerhold', 'vbernier@example.net', 'Ut iste soluta aut sed magni. Doloribus maxime similique voluptatem doloribus ab. Omnis rem voluptas quidem aspernatur nulla corrupti. Nostrum non magnam autem sunt voluptatibus. Quia amet quia accusantium accusantium.\n\nEst tempora illo et totam quo. Quos eaque molestiae officia recusandae iure mollitia. Ut ipsum rem odit fuga.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(17, 'Prof. Elissa Walsh', 'uleuschke@example.com', 'Voluptatem voluptate dolor quia illo. Qui doloribus quia vitae nisi iusto rerum eum quasi. Voluptatibus odio consequuntur fuga voluptatem.\n\nSaepe sed aspernatur nostrum sed voluptatem unde. At non eum nobis. Neque nihil dolore ad tenetur earum culpa.\n\nCupiditate unde maiores qui et. Odit rerum necessitatibus laudantium explicabo est aperiam repellendus. Eligendi autem dolore dolor distinctio. Dolorum deleniti dolores iure quidem in.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(18, 'Lambert Greenholt', 'wiegand.maxwell@example.com', 'Quia nihil quidem aliquam excepturi quam. Enim rerum reprehenderit sequi. Voluptatem reiciendis voluptatem molestiae repellendus laborum.\n\nMolestias numquam dignissimos voluptates sit consequatur ex. Repellat ea hic dicta nihil quis. Porro placeat aliquid illo facilis eos perferendis. Ut commodi tempore eum quod occaecati velit.\n\nLaborum consequatur aut quia repellat nobis. Veniam quos quia facilis expedita ex ipsam sit quod. Quo consequatur laboriosam qui debitis.\n\nAutem dolores alias qui voluptatum et aut qui dolor. Hic laboriosam nobis distinctio dignissimos. Aut dolorum aspernatur fugiat repudiandae ut sit.\n\nAperiam praesentium dignissimos similique deserunt unde soluta. Beatae accusantium exercitationem nobis ad magni similique eos. Officia perferendis id ipsam itaque aliquid. Dignissimos dolore sequi provident voluptatem quod voluptas aspernatur. Ad in et a sequi soluta.\n\nLaudantium error ut cum rerum nesciunt. Suscipit minima natus id doloremque. Libero nihil officia aut aut rerum corporis ut.\n\nSequi voluptas asperiores incidunt mollitia natus reprehenderit dolore. Aliquam illum aperiam et. Sunt dolor voluptates perspiciatis ipsa dignissimos.\n\nLaboriosam in commodi ea nihil a. Pariatur sunt velit at et nulla omnis autem. Quo aut aut provident nulla.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(19, 'Benjamin Waelchi', 'coty.little@example.org', 'Repudiandae et dignissimos mollitia. Nam exercitationem illum nihil quasi. Sint explicabo at excepturi minima eum aut officia placeat. Qui vero aperiam officiis amet.\n\nEum nesciunt ducimus eius explicabo sapiente. Corrupti earum porro quia exercitationem id sequi veniam. Cupiditate et voluptate odio eum velit eveniet repudiandae molestiae. Ut error doloribus itaque iure vero eum.\n\nAlias natus sunt officiis ut totam nihil tempora. Magni laborum et eaque. Est nam voluptatem qui ut quia dolorem veniam. Voluptatem impedit laboriosam iure ut alias blanditiis perspiciatis.\n\nVoluptates eius quis voluptas. Optio tenetur consequuntur itaque est eveniet sint sed. Vero omnis dolore veniam esse aut voluptatem. Debitis quo ut deleniti et omnis necessitatibus pariatur.\n\nIusto fuga iure non sunt ex. Sed hic id quo rerum recusandae quis fugiat omnis. Quod sit modi ut voluptatibus a rerum laboriosam numquam. Qui voluptas doloremque qui sed.\n\nOmnis architecto veniam iste placeat numquam est voluptatem natus. Tempore ad voluptatibus alias harum rem labore recusandae eos. Dolores suscipit quod vel est facere optio. Enim dolor cum rem.\n\nLaborum dicta velit sit et in. Aut est ipsum ullam labore. Error distinctio maxime hic corrupti.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(20, 'Lera Jacobs', 'langosh.shaina@example.net', 'Ea et veniam explicabo. Incidunt sit quo culpa consequuntur quis eligendi consequatur. Ut consequatur repellendus recusandae aut inventore. Nam nobis ab quo.\n\nDolor iste voluptas nostrum autem tempore earum et laudantium. Ipsam magni numquam porro nulla non. Quae vel saepe iusto dolore suscipit laborum. Deleniti molestias laborum nostrum vel quo ea.\n\nTemporibus suscipit dicta delectus expedita. Voluptatem cum maxime nemo maiores voluptas. Assumenda et eaque quos at expedita delectus id. Quia occaecati eum soluta quia qui.\n\nSit similique sint pariatur quia et. Aperiam quisquam commodi provident numquam consequatur fugiat sed consequatur. Cumque est porro recusandae maxime temporibus neque. Quo atque voluptas corporis et vel expedita.\n\nIste accusantium minus provident tempore. Et incidunt rerum eligendi autem explicabo consequatur. Rerum aspernatur iure doloribus voluptatem quidem aut qui. Ipsum saepe aut veniam assumenda quos eius fuga labore.\n\nNobis officiis in dignissimos beatae excepturi cumque voluptatem. Dolor nulla enim officia rerum debitis.\n\nEx officia vel dolorum ex placeat illum. Non repellendus neque placeat expedita fuga aperiam.\n\nVelit officiis omnis illo consequatur delectus iure. Error doloremque quia et omnis et. Ad ad quas perspiciatis.\n\nEarum velit aut consequatur ut asperiores voluptas odio. Ut ut vel sed et enim. Et quibusdam nihil occaecati rem provident expedita. Perspiciatis id velit nulla esse ea accusamus. Voluptas occaecati explicabo accusantium ipsa.', NULL, '2018-07-24 01:36:50', '2018-07-24 01:36:50'),
(21, 'fvffff', 'ddd@ssss.sssss', 'sssss', NULL, '2018-11-17 11:28:46', '2018-11-17 11:28:46'),
(22, 'ijiojio', 'mahmoud.gabr@apptcom.com', 'ffff', NULL, '2018-11-17 11:30:50', '2018-11-17 11:30:50'),
(23, 'ssssssss', 'sssssssss', 'sssssssssss', NULL, '2018-11-17 11:34:49', '2018-11-17 11:34:49'),
(24, 'kkkkkk', 'kkkkkkkkk', 'kkkkkkkkkkk', NULL, '2018-11-17 11:35:16', '2018-11-17 11:35:16'),
(25, 'kkn', 'knknkn', 'knknkn', NULL, '2018-11-17 11:35:54', '2018-11-17 11:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_182436_create_groups_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_07_19_184112_create_news_table', 1),
(5, '2018_07_19_184215_create_sliders_table', 1),
(6, '2018_07_19_184240_create_instructors_table', 1),
(7, '2018_07_19_184618_create_services_table', 1),
(8, '2018_07_19_184649_create_messages_table', 1),
(9, '2018_07_19_184709_create_years_table', 1),
(10, '2018_07_19_184730_create_galleries_table', 1),
(11, '2018_07_19_194039_create_settings_table', 1),
(12, '2018_07_23_182548_create_courses_table', 1),
(13, '2018_07_23_183325_create_materials_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_ar`, `title_en`, `image`, `content_ar`, `content_en`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Suscipit in commodi non iure maiores.222', 'Numquam enim eos numquam est qui doloremque.', '1541535984.jpg', 'Ut corrupti aut repudiandae aut. Autem ipsa dicta et totam non aut laborum. Non ducimus sapiente quia cumque qui. Perspiciatis incidunt accusantium libero rerum corrupti dolor rem id.\r\n\r\nLabore iste quidem veritatis. Maiores consectetur fugit placeat explicabo. Accusantium ut sequi reprehenderit rerum molestias quo. Ut ut optio error at voluptatem sint eaque. Aut ipsa voluptatem odit nesciunt numquam eveniet illum.\r\n\r\nNeque aliquid iusto aliquid temporibus optio. Alias sapiente quam modi eos ab veniam amet. Omnis ducimus beatae alias a maxime illum delectus. A nostrum id qui ipsa nihil quam.\r\n\r\nArchitecto reprehenderit molestiae labore aut porro pariatur amet. Voluptate quidem doloribus quia consequatur sequi fuga. Similique laudantium at et quisquam voluptatum enim in labore. Eveniet aut nisi ducimus aut officiis dolor doloremque.', 'Cum quis quia doloremque eos autem. Voluptas cupiditate et necessitatibus.\r\n\r\nIpsam quis voluptas aliquam nisi error minus. Dolor autem facilis id dolore sit voluptatem et aut. Dolorum quia velit et impedit. Molestiae quo est corporis itaque recusandae facere quaerat.\r\n\r\nEt aliquam consequatur sunt eveniet vel. Rerum non ut animi laborum earum autem ab voluptate. Illo voluptas incidunt tempora amet quia.\r\n\r\nRepellendus amet et velit provident quod quia consequuntur. Eius consequatur minus dolorem. Nostrum sed voluptate sit sit quod quam facilis qui. Amet et aut ad soluta voluptatem architecto.\r\n\r\nAut delectus enim labore iure optio aut quod. Maiores qui voluptas quod voluptate repudiandae vel quia. Sit ipsam est voluptatibus ab minima id deleniti. Dicta aut doloribus ex sequi necessitatibus.\r\n\r\nMagnam culpa earum et et consequatur in ipsam. Non velit corrupti quo tempora accusamus explicabo eveniet adipisci. Necessitatibus dolorem voluptas magnam a. Temporibus beatae et consequatur ut quia neque.', NULL, '2018-07-24 01:36:41', '2018-11-07 04:26:24'),
(2, 'Nostrum culpa dolores dolores.', 'Velit quos eum natus et aliquid autem.', '1541535951.jpg', 'Id recusandae aut et eligendi quia occaecati. Dolorem sit error optio nesciunt. Iure consequatur ad earum odit ad facere.\r\n\r\nDolor soluta sequi et rerum. Iusto ut explicabo est laborum at et. Id dolores vel repudiandae natus amet voluptatem aut.\r\n\r\nTempore perspiciatis officiis debitis sed neque quod delectus. Ullam amet sed nisi et fugiat itaque ut. Aut voluptas nemo illo excepturi aperiam.', 'Pariatur corporis in velit temporibus quaerat rerum amet. Quo molestias facilis laboriosam qui voluptatem harum.\r\n\r\nNon facilis ea ipsum ab enim. Est assumenda et voluptatibus dolore laboriosam amet.\r\n\r\nQuibusdam hic eius et quasi voluptatum quo. Vitae dolore dolor fuga et totam commodi unde nostrum.\r\n\r\nImpedit asperiores odio veniam nesciunt perspiciatis hic ut. Sint ad soluta maxime error molestiae molestiae saepe. Quae eum aut in eum non voluptas autem. Eligendi nemo unde et est laudantium.\r\n\r\nBeatae harum qui vel qui expedita accusamus. Porro architecto ea rerum qui. Sapiente assumenda aliquam suscipit id perferendis praesentium.\r\n\r\nDebitis praesentium aut dolore impedit velit iure iure. Et ipsum unde et. Quibusdam asperiores consequatur ut vitae vitae sit quibusdam.\r\n\r\nLaudantium quo atque animi fugiat saepe. A corporis possimus incidunt consequatur error. Delectus quibusdam dolorum harum nihil expedita ullam. Officia provident fuga voluptatem quis est magnam.', NULL, '2018-07-24 01:36:41', '2018-11-07 04:25:51'),
(3, 'Repudiandae quod ut delectus repellat assumenda quos mollitia quibusdam.', 'Ipsum dolores similique enim error.', '1541535923.jpg', 'Consequatur laboriosam dolorum ea consequatur. Iste sint sit velit dolores explicabo nesciunt. Atque magni totam hic aperiam inventore.\r\n\r\nRerum nemo mollitia dolorum quas magnam sed. Iure itaque sapiente nihil accusantium tempora quis. Perspiciatis quod illo cumque harum in sed. Voluptatem cum ullam unde fuga saepe esse impedit. Labore nihil architecto quibusdam iure ex.\r\n\r\nPorro eius et recusandae vero sequi iusto. Quibusdam corporis corrupti voluptatem rerum perspiciatis. Consequatur officiis ullam quos dolor voluptatem repellat est. Blanditiis distinctio sequi deleniti consequatur doloremque aut aut aut.\r\n\r\nAspernatur omnis quisquam ad quo earum voluptas iste. Dolorum voluptas tempore excepturi illo debitis molestiae fugiat. Eligendi accusantium qui ipsam sed voluptatem voluptate velit eaque. Dolorem distinctio atque unde ducimus quam.\r\n\r\nEt corrupti quod distinctio laborum. Sit corporis consectetur voluptas laudantium iure. Et occaecati sunt et ut provident facere ut.\r\n\r\nEst alias laudantium voluptatibus voluptatibus sed aut eos. Consequatur ut assumenda temporibus quos consequatur. Est molestiae qui ut perspiciatis est rerum. Minima unde corporis itaque. Dolorem velit modi reiciendis consequatur eos.\r\n\r\nNihil ab est qui corrupti repellat occaecati. Distinctio ut quia nisi aut. Distinctio qui nisi dolores qui minus facilis commodi. Officia cumque qui at labore.', 'Ab accusamus repellat quisquam. Et repudiandae officiis qui consectetur et veritatis assumenda. Voluptatem quibusdam quia voluptatem animi.\r\n\r\nQui nesciunt occaecati ut et at cupiditate. Quam est ut consequatur aliquam. Enim voluptatem ad possimus maxime. Cum at inventore molestiae velit ut.\r\n\r\nVeniam earum qui voluptatibus animi sed. Reiciendis exercitationem et est sint praesentium. Tempore itaque ipsa commodi eius. Voluptas fugit eligendi magni. Odio qui quia officiis nesciunt itaque.\r\n\r\nDeserunt inventore reprehenderit excepturi. Libero qui dolor nihil illum. Beatae perferendis molestiae voluptatem asperiores.\r\n\r\nTemporibus est eligendi ea velit earum excepturi. Perferendis sed dolorem cum dolore porro aliquid voluptatem aut. Delectus reprehenderit illo enim. Inventore distinctio quia fuga deleniti enim quibusdam. Qui commodi in dolores eum.\r\n\r\nVoluptatem quibusdam repellat placeat autem. Voluptatem explicabo fuga in voluptates. Voluptatem ex soluta aut maiores est quia numquam et. Voluptatum quis sunt dolorem placeat nisi amet.', NULL, '2018-07-24 01:36:41', '2018-11-07 04:25:23'),
(4, 'Debitis sint ut voluptate fuga repellendus rerum a.', 'Dicta veniam temporibus eveniet necessitatibus blanditiis.', '1541535858.jpg', 'Non dolor non nulla dolore. Nam molestiae iusto at quis debitis aut voluptatem. Officia vero saepe perspiciatis iste molestiae est non. Sit consequatur fugit sit dolorum qui. Nam totam autem sed est deserunt maiores molestias.\r\n\r\nFuga ullam architecto facilis. Perferendis aut quia quaerat et fugiat id. Et quis et sed quia aut. Eum ex molestiae inventore provident est aut voluptatum.\r\n\r\nUt ut cum quia enim iste omnis fuga. Consequatur eos aut autem ad. Ad dolore ipsa iusto voluptatum.', 'A modi tempore soluta qui reprehenderit iste. At nemo odit provident omnis. Dolorum ut explicabo totam explicabo voluptatem.\r\n\r\nCumque dolores aut corporis doloremque est quo. Qui vel a est animi labore. Aut et velit consequatur aut qui quis iste. Voluptas et vitae qui.\r\n\r\nQuidem et culpa voluptas et aut unde. Eligendi neque consequatur ducimus. Fuga modi quaerat eum velit.\r\n\r\nSed sunt autem natus voluptatum excepturi pariatur atque. Et hic nisi omnis velit officiis similique blanditiis. Odit voluptatibus eos veniam eos molestiae assumenda aut. Animi itaque error repellendus corporis atque nisi amet.\r\n\r\nRerum qui voluptatem nemo sunt consequatur. Ab doloremque hic placeat qui sint. Incidunt mollitia illum facere sunt maiores fugit cupiditate molestias.\r\n\r\nDolorum et voluptatum non animi nemo consequuntur voluptatem. Libero ut non ea ducimus. Quae minima voluptas tempore voluptatum. Vel corporis qui commodi labore velit quod.', NULL, '2018-07-24 01:36:41', '2018-11-07 04:24:18'),
(5, 'Nobis fuga quas deserunt ipsam quasi eius.', 'Expedita et nemo consequatur sunt ipsam consequatur.', '1541535835.jpg', 'Reiciendis odit quasi aliquam exercitationem nesciunt. Corrupti itaque praesentium quibusdam suscipit a ducimus ipsum laborum. Enim voluptas repellendus ut. Odio est expedita recusandae velit nulla. Ut fugiat culpa ex.\r\n\r\nQuia quibusdam reiciendis ipsam commodi unde. Aut neque non rerum est veritatis.\r\n\r\nDoloribus sed similique atque qui illum officia nesciunt. Delectus voluptas quasi dolores mollitia eius. Impedit ipsam omnis magnam vero placeat sed similique. Cum quaerat voluptates accusamus.\r\n\r\nDolor accusantium quod aperiam voluptas dignissimos dolores totam. Et ut qui doloribus quis. Odio cupiditate quo voluptates odit dolore voluptatem. Dolorem blanditiis aspernatur sint. Voluptas quo rem accusantium dolores.\r\n\r\nFacilis et ea ea mollitia dolorem voluptatem. Sint distinctio numquam nemo facere.\r\n\r\nIure aut placeat aperiam natus aut voluptatem eos. Ut at blanditiis porro voluptatem voluptas et dolores.\r\n\r\nIste voluptas deserunt doloribus. Optio maiores est enim nihil maxime voluptate. Ea quisquam aut labore nostrum corrupti libero. Et cum odit deleniti unde numquam qui consequatur. Magni quam ducimus corporis porro eos ut dolore doloremque.\r\n\r\nPlaceat reprehenderit cumque esse magnam rerum eum. Voluptas vero quo ut quaerat atque enim aliquid voluptatem. Mollitia debitis dolores voluptas non et labore reiciendis. Neque iste recusandae non aliquid voluptatem quo. Eligendi molestiae et explicabo maiores inventore aut excepturi.', 'Sequi aut provident necessitatibus. Quasi sunt eos quia est. Asperiores molestiae assumenda ut quisquam illo.\r\n\r\nUt id nobis reprehenderit quis cum. Delectus eum quae aliquam totam a perferendis perferendis consequatur. Sint ipsa omnis ea. Accusantium qui quo harum velit pariatur doloribus neque.\r\n\r\nAut provident temporibus placeat suscipit. Et ipsum non inventore qui.\r\n\r\nDolores odio voluptas nisi nobis esse. Porro quae similique ab minima perferendis. Sed quasi autem est repudiandae aut voluptatibus. Natus explicabo veniam delectus occaecati in dolores est.\r\n\r\nTempora repellat aut aut fugiat. Et in cum id. Deleniti libero quos facilis et iure dolor quia. Est non voluptatum vero quae ut voluptas vel.\r\n\r\nIllo vel ducimus modi. Voluptas rem et asperiores dicta odit excepturi perspiciatis tempore. Qui et eius voluptas numquam.', NULL, '2018-07-24 01:36:41', '2018-11-07 04:23:55'),
(6, 'Libero consequuntur porro ut amet illum.', 'Quos eos accusamus culpa enim qui.', '1541535820.jpg', 'Omnis eaque qui sapiente blanditiis. Dolorum qui suscipit voluptas alias perspiciatis. Repudiandae tenetur numquam soluta distinctio molestias iste.\r\n\r\nEt aut nam maxime laboriosam assumenda. Consequatur fuga quibusdam fugit necessitatibus pariatur amet est iste. Dolorem ut ut molestias nam sit. Necessitatibus et facilis mollitia fuga.\r\n\r\nAut nostrum ratione blanditiis modi. Quos est sit voluptate. Facilis voluptate velit quidem ex ipsam sunt.\r\n\r\nEt hic quibusdam dolorem reprehenderit iste. Quam facilis praesentium voluptatem. Omnis est ipsam vero atque quia magni tenetur. Nihil occaecati deleniti sed fugit tempora fugiat consequatur.\r\n\r\nRerum accusamus quam quisquam et. Ut nemo illum ad repudiandae rerum voluptatem. Vero omnis at quo id aliquid nam itaque. Pariatur consequatur quae nemo rerum ut consequuntur.\r\n\r\nUllam sed dolorem dolores illum laudantium aut. Magnam iure eveniet ullam similique nam. Est voluptatem libero voluptatem aut.', 'Adipisci commodi vero nisi. Ea est nulla dolor veniam eos maiores.\r\n\r\nEt aliquid doloremque laborum quod veritatis ut. Odit rerum rem quaerat atque possimus. Qui voluptate aspernatur tempore recusandae aut voluptas. Ad voluptatibus sunt ut nam nulla ea.\r\n\r\nIncidunt accusamus tempora maxime in quaerat quis. Rerum corrupti at minus molestiae doloremque pariatur natus. Animi ut cumque id et reiciendis. Aut esse aut dolore sit tempora perferendis qui beatae.\r\n\r\nEt fuga ducimus similique sed. Saepe dolorum et tenetur in magni ut. Deleniti assumenda est voluptates et. Ipsa voluptas qui quibusdam. Odio nostrum modi vel cumque.\r\n\r\nSequi qui placeat voluptas tempore tempora voluptas. Voluptas quis expedita veritatis cumque enim est et.', NULL, '2018-07-24 01:36:41', '2018-11-07 04:23:40'),
(7, 'Id vel adipisci est est reprehenderit blanditiis.', 'Quisquam quae ducimus quod maiores a.', '1541535792.jpg', 'Et debitis repellat totam qui sint. Ut reiciendis esse cupiditate veritatis.\r\n\r\nEum voluptatem et dolorem modi minima. Qui qui quisquam tempore tempora aperiam voluptatem non. Alias molestiae doloremque voluptas in dolorem. Doloribus et enim et sed veniam molestiae animi.\r\n\r\nAt temporibus quibusdam veniam provident quisquam doloribus. Est quo quaerat totam earum cupiditate fugit. Nihil commodi voluptatem labore eius. Placeat eligendi est itaque quo illo omnis qui.\r\n\r\nVeniam aut voluptatem sed ut quia ad ipsum. Et ipsa facere inventore officia. Optio nihil et eveniet cum itaque optio laboriosam. Explicabo minima soluta sit.', 'Perspiciatis corporis aut nulla expedita aliquid non neque possimus. Qui exercitationem velit vero sed et repellat. Voluptate id sed nisi est corrupti voluptas.\r\n\r\nEt voluptatem nostrum quam quam enim. Cumque ipsam quibusdam qui quia voluptatum atque quia et. Fugit non alias quaerat quia qui.\r\n\r\nLaudantium repellendus ea et dolore et numquam beatae. Commodi ut sapiente aut cupiditate. Illum consequuntur voluptatum quaerat consequatur itaque autem nulla voluptatum. Et aperiam aut nobis alias commodi consequatur qui.', NULL, '2018-07-24 01:36:41', '2018-11-07 04:23:12'),
(8, 'Commodi ut voluptate fugit soluta eveniet.', 'Enim fuga accusantium qui magnam temporibus quis.', '1541535730.jpg', 'Eveniet facilis et omnis et officiis tempore. Adipisci voluptas aut maiores earum omnis. Aspernatur voluptas omnis sequi occaecati cumque consectetur esse cumque. Optio incidunt dolorum reiciendis sit.\r\n\r\nConsequatur non inventore quo. Ut repellat qui quis quod consequatur velit. Vel est sapiente magni optio sint. Ab et dolore et et aut porro vitae. Laborum optio magnam et voluptatum.\r\n\r\nSint quidem similique quis nemo aut dolores. Quam voluptas aliquam deserunt ea. Quo ut aut sed nobis.\r\n\r\nSoluta quia corrupti magnam facilis laboriosam aperiam. Porro voluptas eaque alias iure totam officiis et. Enim enim est voluptatum voluptatem maiores ea numquam. Doloribus dolor quas non maiores provident dicta tempora.\r\n\r\nQuaerat eaque totam expedita harum asperiores. Recusandae ipsum itaque nostrum ducimus. Est rerum blanditiis porro vel sunt ut qui tempora. Velit similique debitis laborum asperiores tenetur facere fugiat ea.', 'Temporibus voluptatibus a soluta laudantium. Voluptas dolor quod rerum numquam non tempora. Qui laboriosam qui aliquid temporibus. Ab molestiae facilis explicabo quo. Ipsum est non non aut molestiae tempore.\r\n\r\nSaepe nostrum voluptatem occaecati error optio. Magnam praesentium qui nihil a repellat sint. Nesciunt enim corporis saepe minus. Sunt consequatur inventore amet commodi accusantium. Deleniti enim ut quia laudantium quia alias.\r\n\r\nVoluptatem quo ut quia quia nam iusto nihil. Qui sunt dolor est neque sed unde ipsum nulla. Quaerat et perspiciatis voluptates est nostrum.\r\n\r\nVelit vel quos sed ipsa cupiditate velit. Similique aperiam sit inventore earum recusandae aliquam quo. Et minima enim debitis illum enim dolor.\r\n\r\nReprehenderit aperiam id et ut similique et. Nemo non et suscipit soluta odit. Placeat autem et qui rerum aut ipsa deserunt.', NULL, '2018-07-24 01:36:41', '2018-11-07 04:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `route`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'إضافة مجموعة', 'groups/create', NULL, '2018-04-19 06:40:39', '2018-04-19 06:40:39'),
(2, 'عرض المجموعات', 'groups', NULL, '2018-04-19 06:40:39', '2018-04-19 06:40:39'),
(3, 'تعديل المجموعات', 'groups/edit', NULL, '2018-04-23 21:53:15', '2018-04-23 21:53:15'),
(13, 'الرئيسية', 'admin', NULL, '2018-04-24 17:54:21', '2018-04-24 17:54:21'),
(14, 'الإعدادات', 'settings', NULL, '2018-11-03 07:13:46', '2018-11-03 07:13:46'),
(15, 'تحديث المجموعات', 'groups/apply_update', NULL, '2018-11-03 07:14:26', '2018-11-03 07:14:26'),
(16, 'تسجيل الإعدادات', 'store_settings', NULL, '2018-11-03 07:20:52', '2018-11-03 07:20:52'),
(17, 'قوائم الطلاب', 'students-list', NULL, '2018-11-03 07:21:30', '2018-11-03 07:21:30'),
(18, 'تحميل طلاب', 'load-students', NULL, '2018-11-03 07:22:10', '2018-11-03 07:22:10'),
(19, 'كل المستخدمين', 'users', NULL, '2018-11-03 07:23:21', '2018-11-03 07:23:21'),
(20, 'الأخبار', 'news', NULL, '2018-11-03 07:23:58', '2018-11-03 07:23:58'),
(21, 'إضافة خبر', 'news/create', NULL, '2018-11-03 07:24:24', '2018-11-03 07:24:24'),
(22, 'تعديل خبر', 'news/edit', NULL, '2018-11-03 07:25:34', '2018-11-03 07:25:34'),
(23, 'تعديل خبر ', 'news/apply_update', NULL, '2018-11-03 16:15:07', '2018-11-03 16:15:07'),
(24, 'كل الكورسات', 'courses', NULL, '2018-11-03 16:15:39', '2018-11-03 16:15:39'),
(25, 'إضافة كورس', 'courses/create', NULL, '2018-11-03 16:16:15', '2018-11-03 16:16:15'),
(26, 'تعديل كورس', 'courses/edit', NULL, '2018-11-03 16:16:38', '2018-11-03 16:16:38'),
(27, 'تعديل الكورسات', 'courses/apply_update', NULL, '2018-11-03 16:17:03', '2018-11-03 16:17:03'),
(28, 'محتوى الكورس', 'materials', NULL, '2018-11-03 16:19:10', '2018-11-03 16:19:10'),
(29, 'إضافة محتوى كورس', 'materials/create', NULL, '2018-11-03 16:19:41', '2018-11-03 16:19:41'),
(30, 'تعديل محتوى', 'materials/edit', NULL, '2018-11-03 16:32:10', '2018-11-03 16:32:10'),
(31, 'عرض محتوى كورس', 'materials/show', NULL, '2018-11-03 16:33:23', '2018-11-03 16:33:23'),
(32, 'تطبيق التعديل', 'materials/apply_update', NULL, '2018-11-03 16:34:03', '2018-11-03 16:34:03'),
(33, 'السلايدر', 'sliders', NULL, '2018-11-06 18:37:28', '2018-11-06 18:37:28'),
(34, 'اضافة سلايدر', 'sliders/create', NULL, '2018-11-06 18:38:24', '2018-11-06 18:38:24'),
(35, 'تعديل سلايدر', 'sliders/edit', NULL, '2018-11-06 18:41:16', '2018-11-06 18:41:16'),
(36, 'تطبيق تعديل سلايدر', 'sliders/apply_update', NULL, '2018-11-06 18:42:23', '2018-11-06 18:42:23'),
(37, 'الخدمات', 'services', NULL, '2018-11-06 18:48:08', '2018-11-06 18:48:08'),
(38, 'إضافة خدمة', 'services/create', NULL, '2018-11-06 18:49:03', '2018-11-06 18:49:03'),
(39, 'تعديل خدمة', 'services/edit', NULL, '2018-11-06 18:49:03', '2018-11-06 18:49:03'),
(40, 'تطبيق تعديل الخدمات', 'services/apply_update', NULL, '2018-11-06 18:49:23', '2018-11-06 18:49:23'),
(41, 'الرسايل', 'messages', NULL, '2018-11-06 18:55:41', '2018-11-06 18:55:41'),
(42, 'الصفحة الشخصية', 'profile', NULL, '2018-11-17 13:59:30', '2018-11-17 13:59:30'),
(43, 'تعديل الصفحة الشخصية', 'update_info', NULL, '2018-12-07 21:13:10', '2018-12-07 21:13:10'),
(44, 'حفظ تعديلات البروفايل', 'update_data', NULL, '2018-12-07 21:13:57', '2018-12-07 21:13:57'),
(45, 'حفظ صورة البروفايل', 'update_image', NULL, '2018-12-07 21:14:51', '2018-12-07 21:14:51'),
(46, 'تغيير الباسورد', 'change_password', NULL, '2018-12-07 21:17:46', '2018-12-07 21:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `image`, `content_ar`, `content_en`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'In dolorem explicabo accusantium soluta rerum.', 'Eos sunt veritatis quia velit saepe accusamus.', 'esse', 'Iusto magnam qui veritatis ut et. Doloremque tempora eum perferendis autem error enim placeat. Rerum minima aspernatur et voluptate dolor.\n\nIpsam provident sequi qui animi vel quia. Hic voluptatibus numquam in. Sit odit consequatur sed illum praesentium adipisci.\n\nCorrupti vel corrupti ut dicta ad veritatis sit fugiat. Ad autem dolores ut excepturi consectetur ut. Enim repellat consectetur ut eum ad voluptatum.\n\nLabore id quaerat veniam vel qui voluptate repellat. Corrupti maxime molestias quia aut quaerat nam dignissimos in. Sint vero aliquid doloribus sequi corrupti. Eligendi qui et praesentium nostrum et.\n\nMagnam ipsa temporibus qui dolorum veniam omnis. Dolores cum adipisci autem nostrum aut eius natus consectetur. Omnis molestiae iste sed accusamus. Ex veniam occaecati impedit sit quisquam ratione.\n\nEos natus mollitia velit eaque. Iure modi in illum et et magnam. Voluptatem totam aut quis et illum modi. Autem nam voluptas nesciunt fuga quia voluptate.\n\nEveniet et consequatur quasi quae. Est et eum officia et et consequatur. Commodi architecto ut qui fugit.\n\nDolores ipsam quae debitis qui. Saepe nostrum reiciendis dolor consequuntur. Consequatur est hic repudiandae molestiae ducimus fugit.\n\nIllum qui ea assumenda consequatur asperiores. Rem qui illum autem eos vitae quis consequatur. Velit corporis dolorum dignissimos velit ut occaecati. Et eveniet aliquid vero.', 'Eaque repellendus voluptas quisquam repellat vitae rerum esse doloremque. Quia eum facilis a sunt ab veniam. Porro placeat et asperiores dolorem exercitationem adipisci et.\n\nMinus repudiandae est aut vel quis omnis qui delectus. Saepe natus dolorem corporis aut tempore ut iure. Ullam repudiandae assumenda exercitationem est illo. Corporis eos aut deleniti facere beatae enim corporis.\n\nQuis nesciunt sapiente rerum rerum autem enim. Magnam expedita deleniti vel qui et qui sed neque. Tempora ipsum et ut dolore id omnis atque. Fugit eligendi qui accusantium minima est.\n\nConsequuntur numquam et ad quia et facilis recusandae ipsa. Sint aspernatur voluptatibus unde saepe nihil quos itaque. Laboriosam ipsa dicta blanditiis libero voluptatum aliquid quis mollitia. Nisi ex ut delectus sit voluptatibus sapiente.', '2018-11-07 02:55:09', '2018-07-24 01:36:50', '2018-11-07 02:55:09'),
(2, 'Exercitationem omnis qui at eaque nihil repellat asperiores.', 'Itaque molestiae amet reiciendis blanditiis aliquid exercitationem.', '1541530481.jpg', 'Et ut et voluptatem animi ut. Sequi maxime similique consectetur qui explicabo. Dolor voluptas officiis perferendis dolorum. Iure aut eveniet est rerum ut at repudiandae reprehenderit.\r\n\r\nAliquid temporibus consequatur qui voluptatem nihil sed corporis. Sit velit amet voluptas suscipit. Qui ducimus laudantium omnis delectus repellat voluptates.\r\n\r\nCulpa inventore doloremque quia consectetur fugit eveniet sint veniam. Ut corporis aut illo aliquam repellat vero. Soluta animi amet neque est quia.\r\n\r\nMinus non vero animi placeat. Eos culpa quam sequi culpa reprehenderit. Sit nihil earum nostrum. Aut explicabo commodi dolor est est natus iusto perferendis.\r\n\r\nConsequatur omnis soluta quos unde dolor. Omnis voluptates totam consequatur ratione aut consequatur repellendus. Rerum optio ut et harum magni in temporibus.\r\n\r\nEt consequatur omnis est non tempora itaque ipsa. Provident molestiae officia assumenda libero voluptate. Velit aspernatur fugiat nam.\r\n\r\nHarum animi iure eveniet est aspernatur. Laborum pariatur suscipit adipisci aut distinctio suscipit aperiam.', 'Et esse optio error laudantium. Dolor dicta qui autem ut. Voluptatibus deserunt aliquam ut molestiae. Voluptatem a quas doloremque error.\r\n\r\nAmet accusantium velit nobis aut excepturi. Dignissimos cum ad et aut harum et. Est inventore debitis ducimus est possimus quia accusamus repudiandae. Suscipit sed odit ut est.\r\n\r\nQuod delectus non aut est accusantium. Voluptatum quidem voluptatem alias ea et architecto. Nesciunt deleniti pariatur praesentium eius nam sit et et.', NULL, '2018-07-24 01:36:51', '2018-11-07 02:54:41'),
(3, 'Nulla qui recusandae a aut ut sint.', 'Voluptates at saepe ut aut ratione qui.', '1541530466.jpg', 'Dolore et impedit qui qui. Natus eum aut esse non. Explicabo eligendi ut deleniti pariatur est.\r\n\r\nEaque autem odio eos facilis eius blanditiis. Optio voluptate et temporibus voluptatum.\r\n\r\nAut non voluptatem et et. Quia delectus placeat iste. Dolorum veniam dolorem maiores doloremque odit aut commodi quis.\r\n\r\nVoluptate eos debitis modi vero recusandae quia voluptatibus minus. Eveniet rerum quis aspernatur veniam. Corrupti et quibusdam dolor.\r\n\r\nVelit quo fugiat sed blanditiis sit. Natus et molestiae architecto aut asperiores tempore ex. Beatae accusamus reiciendis veritatis provident commodi aut.', 'Eum et est saepe id. Hic ut quas quos non.\r\n\r\nCum officiis reiciendis est soluta quia. Et porro qui magnam iste aut qui sed error. Ipsum officia nesciunt accusantium eaque. Voluptatibus tempora eos ea est. Incidunt iste et magnam labore.\r\n\r\nRem odio quia facere qui dolores neque in. Sed in nulla enim quidem.\r\n\r\nEt numquam nulla dolores nam et ipsam. Soluta qui est reprehenderit.\r\n\r\nAb iusto nobis rem ut. Quasi suscipit deserunt repudiandae odit deleniti est eos. Est explicabo ratione occaecati et laborum magnam numquam.\r\n\r\nAut pariatur vero temporibus soluta aliquam corrupti. Ad qui quo totam ipsam et quisquam. Corporis facilis earum quam cum sit dolores omnis.\r\n\r\nAtque non repellat molestiae. Eius incidunt id corporis. Numquam quia assumenda eum et ea ut sint. Quia necessitatibus nisi non eligendi repellendus. Quae sit fugit occaecati temporibus quisquam consequatur molestias ipsam.\r\n\r\nEst dolores architecto minima nihil. Nihil in dolor quo.', NULL, '2018-07-24 01:36:51', '2018-11-07 02:54:26'),
(4, 'Nobis vitae quia rerum fugit ex eligendi.', 'Quasi nulla autem expedita id amet.', '1541530405.jpg', 'Quo doloremque praesentium similique commodi ducimus. Doloribus quo est ipsam aut aut quia. Est labore eos expedita quae. Adipisci ea voluptas delectus et. Atque assumenda ipsa est sit aut fugiat illo.\r\n\r\nFacere quibusdam ut ipsum sed asperiores ea. Exercitationem beatae officiis soluta. Dolorum aspernatur inventore deserunt.\r\n\r\nAlias est autem excepturi deserunt. Officia voluptatum excepturi cumque qui sint adipisci autem cum.', 'Unde laboriosam atque qui labore. Aliquid quaerat molestiae eaque magnam dolore. Sunt iure rerum repudiandae sit vel ea animi.\r\n\r\nEt aspernatur dignissimos autem corporis. Adipisci est aut ratione facere delectus dolor. Aut veritatis repellat vero nisi voluptate perferendis distinctio. Ratione quos quo voluptas aut et. Ut deleniti dolore illo.\r\n\r\nNihil optio molestias voluptas illum sed ea accusamus. Fugiat error voluptatum ut aperiam amet aut. Voluptates et beatae aut earum est necessitatibus.\r\n\r\nDolore dicta suscipit rerum voluptate in laudantium. Optio et repudiandae sit molestias. Consequatur veritatis velit voluptas. Eum dicta asperiores et voluptates optio nihil. Est veritatis ullam in quisquam enim nihil omnis.\r\n\r\nMagni culpa ipsa et animi. Rerum nihil quo voluptatem.\r\n\r\nSoluta repudiandae omnis ullam aperiam quibusdam porro fuga tenetur. Quidem consequatur ut velit consequuntur quod soluta. Repudiandae saepe et ipsa temporibus. Ut quibusdam et iure nesciunt exercitationem.\r\n\r\nMaiores alias possimus pariatur. Ea nulla est repellendus aliquam. Et omnis impedit voluptas quos blanditiis repellat sapiente.', NULL, '2018-07-24 01:36:51', '2018-11-07 02:53:25'),
(5, 'Pariatur sit sequi et libero pariatur ea dignissimos.', 'Enim nam maiores aut similique quia quod.', '1541530394.jpg', 'Optio expedita cum voluptate voluptas. Consequatur repudiandae voluptatem explicabo tenetur placeat. Facilis quasi harum sit et temporibus voluptatum amet. Harum amet omnis possimus voluptates sunt sint minus. Incidunt consequuntur placeat perspiciatis dolores quasi.\r\n\r\nPerferendis ea voluptas natus aut id. Fugit non similique non culpa enim debitis ea. Aut laudantium non ea qui et odio. Harum aperiam earum officia reiciendis at enim voluptas.\r\n\r\nMollitia ducimus nam suscipit ut vitae aspernatur rerum. Molestiae autem libero voluptates consequuntur nulla maiores explicabo. Voluptatum ducimus temporibus sunt expedita et. Aperiam iusto ea esse eaque consequatur aut harum.\r\n\r\nDicta ut atque reprehenderit autem voluptas est. Cumque omnis neque sunt ipsa. Eligendi ipsa totam a placeat minus ipsa consequuntur. Qui exercitationem vel eaque molestiae quia et.\r\n\r\nAutem libero ipsa consequuntur odit voluptatem rem aliquam eligendi. Consequatur cupiditate ea culpa est perspiciatis. Suscipit qui illum quo et autem. Fugiat dignissimos et odit ullam ullam omnis qui laudantium.\r\n\r\nQuia aspernatur nostrum error alias saepe. Quis ut totam alias et autem. Omnis inventore repellat sit minima animi veniam incidunt. Quaerat rerum doloribus eos distinctio molestiae beatae veniam et.', 'Veritatis quo facilis laborum omnis quis tempore autem. Ut modi et eaque iure velit ut. Est numquam distinctio in laboriosam neque necessitatibus. Consequatur et adipisci id ut aliquid est autem.\r\n\r\nBlanditiis qui nisi officiis perspiciatis. Sunt modi consequatur veniam voluptas sit recusandae alias aliquid. Et laborum non nostrum nulla et dolore minima vero.', NULL, '2018-07-24 01:36:51', '2018-11-07 02:53:14'),
(6, 'Ut ab ullam at facilis.', 'Est corrupti atque aut voluptas quis quia maiores.', '1541530362.jpg', 'Ut ex minus eveniet iste. Beatae rerum qui maxime eaque qui. Rerum eligendi eveniet sed ut ullam ea repudiandae. Quis id ad nihil ipsa sed.\r\n\r\nVoluptates et doloremque ut esse doloribus autem. Omnis aperiam magnam dolores voluptatem accusamus.\r\n\r\nInventore excepturi eveniet cupiditate rem. Aut quos placeat commodi a. Corrupti est consequatur consectetur aliquam sed.\r\n\r\nVoluptas qui esse deserunt et quis quia sed. Perferendis laboriosam et alias. Ab consequatur quia repudiandae commodi maxime. In nulla corporis veritatis consequatur dolores dolorum hic.\r\n\r\nEveniet dolores aspernatur sapiente veniam natus non ut. Saepe autem voluptates quia expedita id dicta sed. Atque hic non aut.\r\n\r\nAutem et porro deleniti dolorem voluptatem consequatur occaecati explicabo. Voluptas doloremque minus aperiam pariatur. Eius sed itaque aut temporibus minus sit.\r\n\r\nAlias esse aut totam sunt sunt facere velit consequatur. Quis eos dolor voluptatem sunt.\r\n\r\nEligendi culpa sit est minima nihil alias. In quo recusandae delectus deleniti maxime. Commodi at aut iure ipsa saepe omnis pariatur.\r\n\r\nCommodi minus consequuntur optio nostrum optio ipsa et. Dicta corporis nam nobis. Doloribus nulla sequi molestias error non quidem est.\r\n\r\nNemo ut soluta vel neque adipisci. Illum sint et occaecati eos officiis vel. Ratione nihil ratione qui aperiam ipsam nostrum est.', 'Amet distinctio fugiat vero. Voluptas veritatis maiores aut enim corporis sit sit. Cumque iusto nulla possimus iure atque.\r\n\r\nNesciunt quia eos et nemo sunt quia. Temporibus et deleniti voluptas debitis qui vel.\r\n\r\nSit dolor animi et enim exercitationem distinctio minima. Non minus similique ut inventore rerum. Quae recusandae aspernatur est quibusdam consequatur est placeat illum. Ut ut nemo dolorem cupiditate animi eligendi.\r\n\r\nHic rem placeat et velit. Autem est et deserunt aliquam est id nostrum. Expedita exercitationem modi rem minima hic tenetur aperiam.\r\n\r\nOfficia ullam aut aut consequatur sint commodi. Et ullam magnam ipsa aspernatur natus a. Aut iste aut nostrum placeat. Sunt est ipsam laborum suscipit.\r\n\r\nRepellat ullam consequuntur ea neque ex. Quas reiciendis et eligendi modi nostrum. Asperiores assumenda dolor fugiat aperiam eligendi repellat provident aspernatur.\r\n\r\nUt officiis ea molestias reiciendis eveniet ut atque. Voluptatem temporibus inventore eum dicta deserunt praesentium recusandae illo. Sed fugiat sunt quidem tempore voluptate ad et.', NULL, '2018-07-24 01:36:51', '2018-11-07 02:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_key`, `setting_value`, `created_at`, `updated_at`) VALUES
(1, 'site_title_ar', 'jyghvhgvgh', NULL, '2018-11-17 11:55:55'),
(2, 'site_title_en', 'hjbjh', NULL, '2018-11-17 11:55:55'),
(3, 'about_us_en', 'about_us_en ', NULL, NULL),
(4, 'about_us_ar', 'about_us_ar', NULL, NULL),
(5, 'site_keywords_ar', 'site_keywords_ar', NULL, '2018-11-17 11:55:55'),
(6, 'site_keywords_en', 'site_keywords_en', NULL, '2018-11-17 11:55:55'),
(7, 'site_description_ar', 'site_description_ar', NULL, '2018-11-17 11:55:55'),
(8, 'site_description_en', 'site_description_en', NULL, '2018-11-17 11:55:55'),
(9, 'facebook', 'facebook', NULL, '2018-11-17 11:55:55'),
(10, 'twitter', 'twitter', NULL, '2018-11-17 11:55:55'),
(11, 'youtube', 'youtube', NULL, '2018-11-17 11:55:56'),
(12, 'phone', '+91 123 456 7890', NULL, '2018-11-17 11:55:56'),
(13, 'mobile', '+00 123 456 7890', NULL, '2018-11-17 11:55:56'),
(14, 'website', 'http://www.atec.edu', NULL, '2018-11-17 11:55:56'),
(15, 'email', 'info@atec.edu', NULL, '2018-11-17 11:55:56'),
(16, 'address_en', 'address en', NULL, '2018-11-17 11:55:56'),
(17, 'address_ar', 'address ar', NULL, '2018-11-17 11:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_ar`, `title_en`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Et mollitia consequatur dolores odio necessitatibus consequatur placeat qui.', 'Neque ex neque qui at.', 'quas', '2018-11-07 02:47:09', '2018-07-24 01:36:52', '2018-11-07 02:47:09'),
(2, 'Commodi autem aut quam animi.', 'Qui autem mollitia itaque quia numquam eligendi est.', 'nihil', '2018-11-07 02:47:06', '2018-07-24 01:36:52', '2018-11-07 02:47:06'),
(3, 'Quas magnam nemo non est quod maiores commodi.', 'Maxime suscipit et ut et accusamus reprehenderit accusantium hic.', 'tempore', '2018-11-07 02:47:03', '2018-07-24 01:36:52', '2018-11-07 02:47:03'),
(4, 'Qui ut voluptas excepturi repudiandae ut dicta.', 'Rerum quibusdam quasi repellat rerum sit quia consectetur dolores.', '1541529905.jpg', NULL, '2018-07-24 01:36:52', '2018-11-07 02:45:05'),
(5, 'Vel nemo alias dolor.', 'Perferendis quia praesentium incidunt alias rerum perferendis nemo dolorem.', 'illum', '2018-11-07 02:44:15', '2018-07-24 01:36:53', '2018-11-07 02:44:15'),
(6, 'Recusandae excepturi perspiciatis officiis dolorem.', 'Laboriosam voluptate expedita dolores esse sed omnis.', 'nemo', '2018-11-07 02:44:13', '2018-07-24 01:36:53', '2018-11-07 02:44:13'),
(7, 'Nam magnam illo eaque corporis.', 'Provident nemo error tempora eius.', 'amet', '2018-11-07 02:44:10', '2018-07-24 01:36:53', '2018-11-07 02:44:10'),
(8, 'Mollitia pariatur et veritatis vel corporis minus voluptatem.', 'Maiores quaerat vel et debitis.', 'ut', '2018-11-07 02:44:06', '2018-07-24 01:36:53', '2018-11-07 02:44:06'),
(9, 'Accusamus qui et ad ut autem.', 'Et eius qui ipsa.', 'repellendus', '2018-11-07 02:44:03', '2018-07-24 01:36:53', '2018-11-07 02:44:03'),
(10, 'Asperiores fuga explicabo ea velit atque accusantium.', 'In quia quaerat maiores porro fugit.', 'sed', '2018-11-07 02:44:00', '2018-07-24 01:36:53', '2018-11-07 02:44:00'),
(11, 'Ipsam occaecati iure impedit expedita ipsam non.', 'Inventore est sit quis laudantium eos eius.', 'qui', '2018-11-07 02:43:58', '2018-07-24 01:36:53', '2018-11-07 02:43:58'),
(12, 'Velit ut quae quaerat consequatur est eos sed laboriosam.', 'Necessitatibus ex eius omnis sit accusantium.', 'beatae', '2018-11-07 02:43:50', '2018-07-24 01:36:53', '2018-11-07 02:43:50'),
(13, 'Facilis et iste porro animi.', 'Tenetur quam deleniti veritatis nemo fuga tempore.', 'dolor', '2018-11-07 02:43:48', '2018-07-24 01:36:53', '2018-11-07 02:43:48'),
(14, 'Iure molestiae rerum rerum enim corrupti molestias modi.', 'Ab in ut ea hic pariatur.', 'maxime', '2018-11-07 02:43:45', '2018-07-24 01:36:53', '2018-11-07 02:43:45'),
(15, 'Dolores aut qui eum esse labore non.', 'Est labore ipsum eius soluta eum.', 'voluptatem', '2018-11-07 02:43:42', '2018-07-24 01:36:53', '2018-11-07 02:43:42'),
(16, 'Quod ut incidunt consectetur et placeat dolorem ea.', 'Officiis aperiam incidunt nam quidem sit sunt eaque.', 'saepe', '2018-11-07 02:43:39', '2018-07-24 01:36:53', '2018-11-07 02:43:39'),
(17, 'Non debitis impedit laborum qui.', 'Libero laborum sint ratione ut ut.', 'molestiae', '2018-11-07 02:43:37', '2018-07-24 01:36:53', '2018-11-07 02:43:37'),
(18, 'Quos qui ab quo perferendis.', 'Autem ipsa temporibus praesentium sit aut quibusdam dolorum.', 'dolorem', '2018-11-07 02:43:34', '2018-07-24 01:36:53', '2018-11-07 02:43:34'),
(19, 'Perspiciatis error corrupti molestias veritatis et.', 'Sed est ut totam voluptate ullam quo.', 'voluptas', '2018-11-07 02:43:31', '2018-07-24 01:36:53', '2018-11-07 02:43:31'),
(20, 'Praesentium error recusandae sit voluptatem dolor officia.', 'Dolorem quis accusantium ullam rem debitis dignissimos eos.', 'dolor', '2018-11-07 02:43:27', '2018-07-24 01:36:53', '2018-11-07 02:43:27'),
(21, 'نىنمةن', 'مةمنةنمةمن', '1541530019.jpg', NULL, '2018-07-25 05:05:44', '2018-11-07 02:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `code`, `name`, `phone`, `password`, `email`, `deleted_at`, `created_at`, `updated_at`) VALUES
(16, '22', 'mahmoud', '2323', '$2y$10$dGIHutARM0JHLbrZz36nNeXJOBnC5rYzNysvDhKcYkbbbMMVqP8nS', NULL, NULL, '2018-11-03 06:21:54', '2018-11-03 06:21:54'),
(17, '33', 'ahmed', '424324', '$2y$10$TLX7h0e1n6oe.rVN8wE5LuHIdzNsZ/XVHYXYvJQKfdTc0Z7qh4.FS', NULL, NULL, '2018-11-03 06:21:54', '2018-11-03 06:21:54'),
(18, '44', 'ali', '4534534', '$2y$10$zisZCKGTHkutNbf0mf1WU.pGSxOIRSbKUi/3y.KU0vuW5lEAyckI.', NULL, NULL, '2018-11-03 06:21:54', '2018-11-03 06:21:54'),
(19, '55', 'ebrahim', '0', '$2y$10$Kow2zWEwBacIchsodbMVCeZz7RPVBYRgjI0dXUeFAmLMux5IFcucy', NULL, NULL, '2018-11-03 06:21:54', '2018-11-03 06:21:54'),
(20, '66', 'osama', '4324', '$2y$10$2QxC4BhfnG4nVvgHgEvKl.eexjpGvDv0L3k/.QHftpFomFAqW9uN.', NULL, NULL, '2018-11-03 06:21:54', '2018-11-03 06:21:54'),
(21, '22', 'mahmoud', '2323', '$2y$10$2dOU.NOgWzxr9nNVytHDwOpIBiiC6r9bvhA9RwsZq4DeIlX2vb/wu', NULL, NULL, '2018-11-03 06:26:23', '2018-11-03 06:26:23'),
(22, '33', 'ahmed', '424324', '$2y$10$QXJeSu8Vaj.Mr4XkH7MBEOiQOxDI11bt31.dYDoT7qv0txrDwm9wC', NULL, NULL, '2018-11-03 06:26:23', '2018-11-03 06:26:23'),
(23, '44', 'ali', '4534534', '$2y$10$y0gkKMg7/MPSIP0yMuALpe2dEjTdqRCBREiMEy1gGaceh2mgbUmdi', NULL, NULL, '2018-11-03 06:26:23', '2018-11-03 06:26:23'),
(24, '55', 'ebrahim', '0', '$2y$10$CPDA8lVIPE8wdORUBQER/uv1l1/62e3PUtGhBa6SRJRBXCxj1t1EC', NULL, NULL, '2018-11-03 06:26:24', '2018-11-03 06:26:24'),
(25, '66', 'osama', '4324', '$2y$10$TbNXiaAUK06J7zyoijFrG.mF90wgaPK0bO9uuqCwdabZ2Y65sxUiS', NULL, NULL, '2018-11-03 06:26:24', '2018-11-03 06:26:24'),
(26, '22', 'mahmoud', '2323', '$2y$10$ZaOHom2f7FzTEXWuA7q52O5xNOb9XsNYzJ93OBYEdW8Gb/Z5gJhmu', NULL, NULL, '2018-11-03 06:27:32', '2018-11-03 06:27:32'),
(27, '33', 'ahmed', '424324', '$2y$10$cjBUyEXfko97ouVOg12idexqSHVXKsbjuGNPXmHGU1qmcWfGo/Ih6', NULL, NULL, '2018-11-03 06:27:32', '2018-11-03 06:27:32'),
(28, '44', 'ali', '4534534', '$2y$10$8j1.4IpwWlm5dD7N.kdOauragf0CtW7KbnWbX.dLzs7bVzrrven6G', NULL, NULL, '2018-11-03 06:27:32', '2018-11-03 06:27:32'),
(29, '55', 'ebrahim', '0', '$2y$10$HNfCwVszddgyTx.EHh95ceOEqJzp2F4N2t5XZWRTs06q/vrqm7aK.', NULL, NULL, '2018-11-03 06:27:32', '2018-11-03 06:27:32'),
(30, '66', 'osama', '4324', '$2y$10$7RFwFfiDILnt1YylEWS93ePmrO9NtqR6sVCLKXlB6JSzbrAbCvhyG', NULL, NULL, '2018-11-03 06:27:32', '2018-11-03 06:27:32'),
(31, '22', 'mahmoud', '2323', '$2y$10$BNlavKXQOkw8AFT9kC1vLuZj859r3VXHmlz7/Qy/gnwj9/rJGSFD.', NULL, NULL, '2018-11-03 07:22:21', '2018-11-03 07:22:21'),
(32, '33', 'ahmed', '424324', '$2y$10$zpQuLpOY.JEaHv5SW59cjuB7ZZx6fYmjxBmyh5wc7apOHsq7PnkJW', NULL, NULL, '2018-11-03 07:22:21', '2018-11-03 07:22:21'),
(33, '44', 'ali', '4534534', '$2y$10$cmSpYAF335ZZKFVxIzb/LuGXS6Q.HUn.UNFjo8xqBs13Z4zgQUY22', NULL, NULL, '2018-11-03 07:22:22', '2018-11-03 07:22:22'),
(34, '55', 'ebrahim', '0', '$2y$10$qTnLW7doOLupp4Uw7/W4.eS4CbflT5/urYLXQEONsFp6vSGna1DXO', NULL, NULL, '2018-11-03 07:22:22', '2018-11-03 07:22:22'),
(35, '66', 'osama', '4324', '$2y$10$sHMuXWPptD.eHNlSd2eLh.1B8Y6HtkW3EH5gxtMv9ssyboHAbkpHK', NULL, NULL, '2018-11-03 07:22:22', '2018-11-03 07:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `subscribe_email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `subscribe_email`, `created_at`, `updated_at`) VALUES
(1, 'mhmudhsham8@gmail.com', '2018-12-07 15:45:30', '2018-12-07 15:45:30'),
(2, 'mhmudhsham8@gmail.com1', '2018-12-07 16:59:39', '2018-12-07 16:59:39'),
(3, 'mhmudhsham228@gmail.com1', '2018-12-07 16:59:52', '2018-12-07 16:59:52'),
(4, 'mhmudhsham228@gmail.com', '2018-12-07 16:59:57', '2018-12-07 16:59:57'),
(5, 'mhmudhsham833@gmail.com', '2018-12-07 17:00:29', '2018-12-07 17:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group_id`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'محمود هشام', 'admin@admin.com', '$2y$10$6xmo9ftqCNFRliVpYIYLoeCYs8PoccBRUbInUThPQ0rFMWqV.QwCy', 21, 'lONoArcXTQlF7ZoZyGPM1SWhk5B7SAeV8sOfob6UdxHQ7wd09THqtc4kWhyf', NULL, '2018-07-24 01:36:40', '2018-12-07 19:14:18'),
(2, 'Meta Roberts', 'jamie.schaden@example.org', '$2y$10$9y3ery9zl5RqiH0c5zgLVuEetmRwkk4JZQ1YjFPrrAIqpHFdbJmS.', 2, '6tEHhapIX4', '2018-07-27 08:41:25', '2018-07-24 01:36:40', '2018-07-27 08:41:25'),
(3, 'Mr. Ernie Stark Sr.', 'hassan.wunsch@example.net', '$2y$10$C99FfS89J9WxUrjlXRKnuuGxR7oneUYL6GYDqyKK7EqCeaFZFg06.', 3, 'u1T84kDgUe', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(4, 'Mittie Schimmel', 'jleuschke@example.com', '$2y$10$xq1TnJ9TEsHWJvNr40/JC.IfamSCC8To3zAqcJEhsQ2yuinYb6U3K', 4, 'kucwOyYYzM', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(5, 'Fredy Goyette', 'bins.dessie@example.org', '$2y$10$CF8d4eLPxNBs1YmXLF960ex8HG8SqqScPuIe42Bldj7wLblFH97V.', 5, 'L1Jc4lixQw', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(6, 'Robyn Yundt', 'tquitzon@example.com', '$2y$10$pYp108EeeHbSfELu0uY/6OI3B1BUinIqHok2j2Om/D8gDDZXwxPka', 6, 'UQH7fHuRjc', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(7, 'Laura Nader', 'dlangworth@example.net', '$2y$10$XSVP/RcciAYic.DOBgBSM.dmFWZ2gOAuCSLswuU9rSnpkovY3Tl3.', 7, 'Vt7jIAY6GA', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(8, 'Archibald Casper DDS', 'hjohnston@example.net', '$2y$10$9p1KEJvGBRKOb6V47DF9.OFH8DX9SXDlCjkkRBhCRCCh9tOtfcBKi', 8, 'OsUsF85vRh', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(9, 'Filiberto Herman', 'boris97@example.com', '$2y$10$pBvh/CfLCUg3UNkDz45/a.hr1k6ahPCJLEkjwSJ7/t4fESQdoI.vy', 9, 'xl9IxtBrMi', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(10, 'Dr. Roderick Beatty', 'hoeger.myrl@example.net', '$2y$10$N2DZghwl6e50S5QezQKIjeMS1F166HrVrkM3lXXFuiXyugpvjJnCq', 10, 'Tiyt29KVTa', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(11, 'Urban Shields DVM', 'hammes.bernard@example.org', '$2y$10$9S.E017jGM2LVQqbFHZwf.QvKvPqYDc5B25QnBgNLhx9yO70mKO/K', 11, 'KLiJNM1llI', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(12, 'Ms. Frederique Hand', 'abernathy.giles@example.com', '$2y$10$We546FbQAqFi7cC8AHrpLu/.tCi0McGLFuXxCkFCaiCWCFftus5Dy', 12, 'E4Te2AKmjF', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(13, 'Prof. Enrique Harvey I', 'grant.marlene@example.net', '$2y$10$F879W/2eVzpO8JpZK5xSzOAYDDkAoPsrL3O7/3vwqCX8QIMXsUlvK', 13, '7HotFQNGIR', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(14, 'Adalberto Moore Jr.', 'earnest81@example.com', '$2y$10$Hgk2xqRdQFvY6uFFRyJknOJF4y9B4.TEz4i3yLu1recKWjGoxoRaa', 14, '3VXtS0WzIV', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(15, 'Ellsworth Rolfson', 'langworth.warren@example.org', '$2y$10$WHsJbMFNhzTkgWN0SSB4Z.MQJ9DKfe8WaeR5XvE4/56PwBskoLUD2', 15, 'OUu1gD8Z7h', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(16, 'Madge Ritchie', 'terry.icie@example.org', '$2y$10$Pzh8gLYNZd7WAb0aeccRyeBJ4sra3ZtknMPs2UB/dlojN1MalkLqm', 16, 'c1lKg32geD', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(17, 'Kailee Gaylord', 'asia.stroman@example.org', '$2y$10$R7qsdqu/Jfo9CrwqlUPb2ulF6hi1yauRw0sY.Oss.qUqnKvPyQ37O', 17, 'IPb18Qmtqo', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(18, 'Annabell Rolfson', 'pvolkman@example.com', '$2y$10$oxJY8qrUhNq.9n7LsyRQ0OJUcuxpdIQw6/VEbHjIvLp2bHFFERUZ.', 18, 'fvDE3VMAbI', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(19, 'Natalia Littel', 'daisy.jacobs@example.net', '$2y$10$ors7tXlXaqHx1G6XPP4CLOHrgIfUN22N.Yz6dQkWFRAxtFLC9DRhG', 19, 'LgBMzn18qV', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(20, 'Marley Jacobi', 'delphine.hayes@example.net', '$2y$10$L7GUmuFPtWE9BV4fJ5ml/ulNedkjv2tNn.IhKK3sAYKW7GoHpptFi', 20, 'tFxAwxa7eJ', NULL, '2018-07-24 01:36:40', '2018-07-24 01:36:40'),
(21, 'Mahmoud Gabr', 'aaa@aaa.aaa', '1234', 21, NULL, NULL, '2018-07-27 03:16:15', '2018-07-27 03:16:15'),
(23, 'Mahmoud Gabr', 'tshory@admin.com', '123456', 21, NULL, NULL, '2018-07-27 03:19:00', '2018-07-27 03:19:00'),
(25, 'Mahmoud Gabr', 'tshory2@admin.com', '$2y$10$cP27ESTZ45t67TKTdodS9.4AAyy93ZKASi/WOs5zxO7UyLn2qTVa2', 21, NULL, NULL, '2018-07-27 03:22:49', '2018-07-27 03:22:49'),
(27, 'Ahmed', 'tshor44@admin.com', '$2y$10$tjM4XQa2A9Hn5yvFACaphuBGO.AYOcJmpRtw9k4FheDoth7U4PE8a', 21, NULL, NULL, '2018-07-27 03:25:23', '2018-07-27 03:25:23'),
(29, 'klemsklmlkmklm', 'kmklmkl@lkmkl.jnkjn', '$2y$10$mGBEwoPa.x6T9DVAz3hwgu8Iijf4xnbq9sbC3vMGxhyp9F6ZPK8JK', 21, NULL, NULL, '2018-07-27 03:26:27', '2018-07-27 03:26:27'),
(30, 'Mahmoud Hesham', 'mahmoud@gmail.com', '$2y$10$gvy72cAzbMk9sEyajxbO2ellvIecQAxbX/A7i8NKr1xHsNMbL2/py', 21, 'fUTghrADekP73HxosbgXrrGRNzxBQTbOUED9gr3sIW9JFOJgcCTaVjFmc7Co', NULL, '2018-07-27 03:49:51', '2018-07-27 07:41:22'),
(31, 'آيه', 'aya@aya.com', '$2y$10$uvRnCv13B4EiNCbKcEAZQeMYxGxftkQNcwu.SuHdxFpzuA/tw8uKu', 21, NULL, '2018-12-07 12:59:41', '2018-07-28 06:19:12', '2018-12-07 12:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1991', NULL, '2018-07-24 01:36:45', '2018-07-24 01:36:45'),
(2, '2011', NULL, '2018-07-24 01:36:45', '2018-07-24 01:36:45'),
(3, '2000', NULL, '2018-07-24 01:36:46', '2018-07-24 01:36:46'),
(4, '2017', NULL, '2018-07-24 01:36:46', '2018-07-24 01:36:46'),
(5, '2011', NULL, '2018-07-24 01:36:46', '2018-07-24 01:36:46'),
(6, '1971', NULL, '2018-07-24 01:36:46', '2018-07-24 01:36:46'),
(7, '1984', NULL, '2018-07-24 01:36:46', '2018-07-24 01:36:46'),
(8, '1987', NULL, '2018-07-24 01:36:46', '2018-07-24 01:36:46'),
(9, '2002', NULL, '2018-07-24 01:36:46', '2018-07-24 01:36:46'),
(10, '1981', NULL, '2018-07-24 01:36:46', '2018-07-24 01:36:46'),
(11, '1979', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(12, '1985', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(13, '1990', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(14, '1996', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(15, '1993', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(16, '1983', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(17, '1986', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(18, '2014', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(19, '1995', NULL, '2018-07-24 01:36:47', '2018-07-24 01:36:47'),
(20, '1992', NULL, '2018-07-24 01:36:48', '2018-07-24 01:36:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_year_id_foreign` (`year_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materials_course_id_foreign` (`course_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `messages_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `route` (`route`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
