-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 22, 2018 at 08:32 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manehmos`
--

-- --------------------------------------------------------

--
-- Table structure for table `infants`
--

CREATE TABLE `infants` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jina_la_mtoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_usajili` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hudhurio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe` date NOT NULL,
  `joto` double(8,2) NOT NULL,
  `uzito` double(8,2) NOT NULL,
  `lishe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macho_yanatoa_uchafu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngozi_ina_vipele_vyenye_usaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wekundu_wa_damu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuchezacheza_mtoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utando_mweupe_mdomoni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngozi_njano` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kitovu_kimepona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kitovu_chekundu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kitovu_kinatoa_harufu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kitovu_kinatoa_usaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_BCG` date DEFAULT NULL,
  `tarehe_OPVO` date DEFAULT NULL,
  `matatizo_mengine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_kurudi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infants`
--

INSERT INTO `infants` (`id`, `created_at`, `updated_at`, `jina_la_mtoto`, `namba_ya_usajili`, `hudhurio`, `tarehe`, `joto`, `uzito`, `lishe`, `macho_yanatoa_uchafu`, `ngozi_ina_vipele_vyenye_usaha`, `wekundu_wa_damu`, `kuchezacheza_mtoto`, `utando_mweupe_mdomoni`, `ngozi_njano`, `kitovu_kimepona`, `kitovu_chekundu`, `kitovu_kinatoa_harufu`, `kitovu_kinatoa_usaha`, `tarehe_BCG`, `tarehe_OPVO`, `matatizo_mengine`, `tarehe_ya_kurudi`) VALUES
(1, '2018-05-15 15:34:34', '2018-05-15 15:34:34', 'dfsegfg', 'sgsfgfgf', 'Hudhurio la kwanza', '2018-05-02', 44.00, 3455.00, 'EBF', 'Hapana', 'Hapana', 'Hapana', 'Kidogo kuliko Kawaida', 'Ndio', 'Hapana', 'Hapana', 'Ndio', 'Ndio', 'Hapana', NULL, NULL, 'werwrwefrfr', '2018-05-30');

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
(143, '2014_10_12_000000_create_users_table', 1),
(144, '2014_10_12_100000_create_password_resets_table', 1),
(145, '2018_05_03_235121_create_register_maternals_table', 1),
(146, '2018_05_05_105439_create_postnatals_table', 1),
(147, '2018_05_12_062746_create_infants_table', 1),
(148, '2018_05_12_062838_create_register6s_table', 1),
(149, '2018_05_12_062905_create_register_children_table', 1),
(150, '2018_05_12_062927_create_register7s_table', 1),
(151, '2018_05_12_062935_create_register13s_table', 1),
(152, '2018_05_17_055612_create_tasks_table', 2);

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
-- Table structure for table `postnatals`
--

CREATE TABLE `postnatals` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tarehe_ya_kuandikishwa` date NOT NULL,
  `namba_ya_kadi_RCH4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jina_la_mama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtaa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_kuzaliwa` date NOT NULL,
  `amejifungua_mara_ngapi` int(11) NOT NULL,
  `tarehe_ya_kujifugua` date NOT NULL,
  `kada_ya_aliyemzalisha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahali_alipojifungulia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hali_ya_mama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hali_ya_mtoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unyonyeshaji_ndani_ya_saa_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hali_ya_VVU_kwenye_kadi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kipimo_vvu_wakati_wa_postnatal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register6s`
--

CREATE TABLE `register6s` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jina_la_mama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_usajili` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matokeo_stds_mume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_ametibiwa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matokeo_stds_mke` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_ametibiwa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `damu_HB` int(11) NOT NULL,
  `BP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sukari_kwenye_mkojo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaswende_mume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_ametibiwa_kaswende` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaswende_mke` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_ametibiwa_kaswende` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_tayari_ana_VVU` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_tarehe_ya_unasihi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_amepima_VVU` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_tarehe_ya_kipimo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mume_kipimo1_VVU` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mume_unasihi_baada_ya_kipimo_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mke_tayari_ana_VVU` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_tarehe_ya_unasihi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_amepima_VVU` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_tarehe_ya_kipimo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mke_kipimo1_VVU` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mke_unasihi_baada_ya_kipimo_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hana_matatizo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `kuharibika_mimba_mfululizo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `Anaemia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `Protenuria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `high_BP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `kutoongezeka_uzito` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `damu_ukeni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `mlalo_mbaya_wa_mtoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `mimba_ya_nne+` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `kuzaa_kwa_operesheni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `vacuum_extraction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `albendazole_mebendazole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vidonge_vya_I_FA` int(11) NOT NULL,
  `mrdt_o_bs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `llin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_ipt` date NOT NULL,
  `maoni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_rufaa` date NOT NULL,
  `rufaa_alipotoka` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rufaa_alikopelekwa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sababu_ya_rufaa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ana_kadi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_TT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register6s`
--

INSERT INTO `register6s` (`id`, `created_at`, `updated_at`, `jina_la_mama`, `namba_ya_usajili`, `matokeo_stds_mume`, `mume_ametibiwa`, `matokeo_stds_mke`, `mke_ametibiwa`, `damu_HB`, `BP`, `sukari_kwenye_mkojo`, `kaswende_mume`, `mume_ametibiwa_kaswende`, `kaswende_mke`, `mke_ametibiwa_kaswende`, `mume_tayari_ana_VVU`, `mume_tarehe_ya_unasihi`, `mume_amepima_VVU`, `mume_tarehe_ya_kipimo`, `mume_kipimo1_VVU`, `mume_unasihi_baada_ya_kipimo_1`, `mke_tayari_ana_VVU`, `mke_tarehe_ya_unasihi`, `mke_amepima_VVU`, `mke_tarehe_ya_kipimo`, `mke_kipimo1_VVU`, `mke_unasihi_baada_ya_kipimo_1`, `hana_matatizo`, `kuharibika_mimba_mfululizo`, `Anaemia`, `Protenuria`, `high_BP`, `kutoongezeka_uzito`, `damu_ukeni`, `mlalo_mbaya_wa_mtoto`, `mimba_ya_nne+`, `kuzaa_kwa_operesheni`, `vacuum_extraction`, `albendazole_mebendazole`, `vidonge_vya_I_FA`, `mrdt_o_bs`, `llin`, `ipt`, `tarehe_ya_ipt`, `maoni`, `tarehe_rufaa`, `rufaa_alipotoka`, `rufaa_alikopelekwa`, `sababu_ya_rufaa`, `ana_kadi`, `TT`, `tarehe_ya_TT`) VALUES
(1, '2018-05-15 15:36:49', '2018-05-15 15:36:49', 'WEWQEQR', 'EWRWERE', 'Negative', 'hapana', 'Negative', 'hapana', 343, '23R443R', 'hapana', 'Negative', 'hapana', 'Negative', 'ndio', 'Hapana', '2018-05-02', 'Hapana', NULL, NULL, NULL, 'Hapana', '2018-05-25', 'Hapana', NULL, NULL, NULL, 'ndio', 'hapana', 'hapana', 'hapana', 'hapana', 'hapana', 'hapana', 'hapana', 'hapana', 'hapana', 'hapana', 'Ndiyo', 33, 'Negative', 'Ndiyo', 'IPT-2', '2018-05-08', 'SAWAAA', '2018-05-31', '-', '-', '-', 'ndio', 'TT2', '2018-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `register7s`
--

CREATE TABLE `register7s` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jina_la_mtoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_usajili` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vitamin_A_umri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amepata_vitamin_A` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uzito_mtoto` double(8,2) NOT NULL,
  `urefu_mtoto` double(8,2) NOT NULL,
  `mebendazole_albendazole_umri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amepata_mebendazole_albendazole` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENTA` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penta_tarehe` date DEFAULT NULL,
  `Polio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Polio_tarehe` date DEFAULT NULL,
  `PCV13` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PCV13_tarehe` date DEFAULT NULL,
  `Rota` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rota_tarehe` date DEFAULT NULL,
  `Surua` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Surua_tarehe` date DEFAULT NULL,
  `rufaa_alikotoka` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rufaa_alikopelekwa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rufaa_sababu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Maoni_o_maelezo_mengine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register13s`
--

CREATE TABLE `register13s` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Namba_ya_kadi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jina_la_mama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hudhurio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_hudhurio` date NOT NULL,
  `mama_BP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mama_HB` double(8,2) NOT NULL,
  `matiti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tumbo_la_uzazi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lochia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hali_ya_msamba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fistula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akili_timamu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aina_ya_dawa_nyongeza` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idadi_ya_dawa_nyongeza` int(11) NOT NULL,
  `idadi_ya_dawa_vitaminA` int(11) NOT NULL,
  `chanjo_ya_TT` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_plan_usahuri_umetolewa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `family_plan_amepatiwa_kielelezo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `amepatiwa_family_plan_wakati_wa_ppc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `rufaa_kupata_family_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `rufaa_alikopelekwa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rufaa_alikotoka` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rufaa_sababu_o_maoni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register13s`
--

INSERT INTO `register13s` (`id`, `created_at`, `updated_at`, `Namba_ya_kadi`, `Jina_la_mama`, `hudhurio`, `tarehe_ya_hudhurio`, `mama_BP`, `mama_HB`, `matiti`, `tumbo_la_uzazi`, `lochia`, `hali_ya_msamba`, `fistula`, `akili_timamu`, `aina_ya_dawa_nyongeza`, `idadi_ya_dawa_nyongeza`, `idadi_ya_dawa_vitaminA`, `chanjo_ya_TT`, `family_plan_usahuri_umetolewa`, `family_plan_amepatiwa_kielelezo`, `amepatiwa_family_plan_wakati_wa_ppc`, `rufaa_kupata_family_plan`, `rufaa_alikopelekwa`, `rufaa_alikotoka`, `rufaa_sababu_o_maoni`) VALUES
(1, '2018-05-18 03:59:56', '2018-05-18 03:59:56', '8374854', 'kfjni sffskgjfgfngkfg', 'Masaa 48', '2018-05-09', '120/70', 234.00, 'Normal', 'Kawaida', 'normal', 'Mshono umeunga', 'Hapana', 'Ndio', '-', 0, 3, 'Masaa 48', 'ndio', 'hapana', 'hapana', 'hapana', '-', '-', 'anaendelea vizuri');

-- --------------------------------------------------------

--
-- Table structure for table `register_children`
--

CREATE TABLE `register_children` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tarehe_ya_kuandikishwa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_usajili_RITA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hajasajiliwa RITA',
  `jina_la_mtoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_mtoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jinsia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_HEID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Mama hana maambukizi ya VVU',
  `jina_la_mama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahali_anapoishi_mtoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_children`
--

INSERT INTO `register_children` (`id`, `created_at`, `updated_at`, `tarehe_ya_kuandikishwa`, `namba_ya_usajili_RITA`, `jina_la_mtoto`, `namba_ya_mtoto`, `jinsia`, `namba_ya_HEID`, `jina_la_mama`, `mahali_anapoishi_mtoto`) VALUES
(1, '2018-05-15 15:33:28', '2018-05-15 15:33:28', '2018-05-04', '45656', 'gjj hjhjj', '5656', 'Msichana', '-', 'uffkdsjdkf', 'rteyytuj  yhhyh');

-- --------------------------------------------------------

--
-- Table structure for table `register_maternals`
--

CREATE TABLE `register_maternals` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tarehe_ya_kuandikishwa` date NOT NULL,
  `namba_ya_usajili` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jina_la_mama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_kuzaliwa` date NOT NULL,
  `BP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kujifungua_kwa_cs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urefu` int(11) NOT NULL,
  `jina_la_mume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtaa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jina_la_mwenyekiti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mimba_ngapi` int(11) NOT NULL,
  `amezaa_mara_ngapi` int(11) NOT NULL,
  `watoto_walio_hai` int(11) NOT NULL,
  `mimba_zilizoharibika` int(11) NOT NULL,
  `kifo_cha_mtoto_wiki_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umri_mtoto_wa_mwisho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `task_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `participant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `participant`, `comments`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'sdfgfh', 'fghjk', 'dfygujhk', '2018-05-21', '2018-05-17', '2018-05-17 17:30:57', '2018-05-17 17:30:57'),
(2, 'ghtgtrgt', 'thhhy', 'hyhjyju', '2018-05-12', '2018-05-08', '2018-05-17 17:31:20', '2018-05-17 17:31:20'),
(3, 'gdfgdgg', 'ghgnhjh', 'fghfhtrhtrhy', '2018-05-03', '2018-05-05', '2018-05-17 18:53:55', '2018-05-17 18:53:55'),
(4, 'wake up', 'me', 'wake up early to church', '2018-05-18', '2018-05-26', '2018-05-19 23:19:39', '2018-05-19 23:19:39'),
(5, 'go to sleep', 'emmanuel', 'sleep early so as to wake up early', '2018-05-20', '2018-05-21', '2018-05-20 17:40:40', '2018-05-20 17:40:40'),
(6, 'go out', 'kajddks', 'sdkvjnfkev', '2018-05-02', '2018-05-30', '2018-05-21 09:05:41', '2018-05-21 09:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worker_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `worker_id`, `position`, `phone_no`, `email`, `center`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'emmaClinician', 'emmaClinician', 'Clinical Attendant', '0766457248', 'angelwise255@gmail.com', 'sawala dispensary', '$2y$10$v95lfsMGqe6hzIMzG9Z26ObHv53JeeWncqQVJSiUFCSfW06mlyKQC', 'XJ4j0rHGu4spjsC5mwvVWDXG0mNP6WbTLgXL2Hid2FY6BUtrax7Yu8pRDlea', '2018-05-14 13:05:58', '2018-05-14 13:05:58'),
(2, 'emmaAdmin', 'emmaAdmin', 'System Administrator', '0766457248', 'mtasiwaemma@hotmail.com', 'sawala dispensary', '$2y$10$7s93W9bA3UFrnjHqU19F4e4CuAQ/4IEltnURjShnSCV8FdzHRY02S', 'y2RJh0mtauNInmXhOTUe0Rm1mB2gHVwg8Xq7Z1r1WLCcV0ADqKNRxsu3JL1W', '2018-05-15 11:55:49', '2018-05-15 11:55:49'),
(3, 'emmadoctor', '2015/EMMA', 'Doctor', '0766457248', 'aemmanuel199@gmail.com', 'sawala dispensary', '$2y$10$lnCOfkVnPN2DGvmVeRuUfuXxANxsNVo2cY62MiHCztSFgkXyHaAT2', 'yNlUYNoEOLzFRoENnj4MMCLHht4Le8UQWvboBk6trlPmbDausNeEfSRYtEji', '2018-05-15 11:57:34', '2018-05-15 11:57:34'),
(8, 'Emmanuel Angelus', '2015/EMMA', 'Clinical Attendant', '+255766457248', 'aemmanuel199@gmail.com', 'sawala dispensary', '$2y$10$F4YmrCvK4fg7m4P/HxryF.h9S7KKAabIutnBf1Mq52DkvOU1kV71a', NULL, '2018-05-15 14:08:28', '2018-05-15 14:08:28'),
(10, 'bihawa Mwillenga', 'hawa', 'Doctor', '0673483167', 'mtasiwaemma@hotmail.com', 'Kilombero 2', '$2y$10$/rG9fPfF9RIsOj3EzcZlcewdPQFbB.QHvkQ/sRft8ULpPZ9WUVkLy', 'eNwu3c67Kvwpys2DUn3YczfEpSHJ05mT3mmrq3DqmQTiigzzgHK3lDFUtLuv', '2018-05-17 01:57:21', '2018-05-17 01:57:21'),
(13, 'emma xy', 'xyz', 'Clinical Attendant', '0222700588', 'aemmanuel199@gmail.com', 'Malangali', '$2y$10$sQ1S/Z8Hqaj4WoDDe8arHOtc/3huCOim3ysvuFHWjiaLhIXJhCUNq', NULL, '2018-05-18 02:49:16', '2018-05-18 02:49:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infants`
--
ALTER TABLE `infants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `postnatals`
--
ALTER TABLE `postnatals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register6s`
--
ALTER TABLE `register6s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register7s`
--
ALTER TABLE `register7s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register13s`
--
ALTER TABLE `register13s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_children`
--
ALTER TABLE `register_children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_maternals`
--
ALTER TABLE `register_maternals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infants`
--
ALTER TABLE `infants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `postnatals`
--
ALTER TABLE `postnatals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register6s`
--
ALTER TABLE `register6s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register7s`
--
ALTER TABLE `register7s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register13s`
--
ALTER TABLE `register13s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register_children`
--
ALTER TABLE `register_children`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register_maternals`
--
ALTER TABLE `register_maternals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
