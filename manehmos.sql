-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2018 at 05:00 PM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

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
-- Stand-in structure for view `alipojifungua`
-- (See below for the actual view)
--
CREATE TABLE `alipojifungua` (
`tarehe_ya_hudhurio` date
,`Namba_ya_kadi` varchar(10)
,`umri` int(7)
,`mahali_alipojifungulia` varchar(9)
,`kada_ya_aliyemzalisha` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `antenatal_malaria`
-- (See below for the actual view)
--
CREATE TABLE `antenatal_malaria` (
`tarehe_ya_hudhurio` date
,`namba_ya_usajili` varchar(10)
,`umri` int(7)
,`llin` varchar(6)
,`mrdt_o_bs` varchar(8)
,`ipt` varchar(6)
,`albendazole_mebendazole` varchar(6)
,`vidonge_vya_I_FA` varchar(15)
,`rufaa_alikopelekwa` varchar(25)
,`sababu_ya_rufaa` varchar(191)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `antenatal_pmtct`
-- (See below for the actual view)
--
CREATE TABLE `antenatal_pmtct` (
`tarehe_ya_hudhurio` date
,`namba_ya_usajili` varchar(10)
,`umri` int(7)
,`hudhurio` varchar(18)
,`mume_tayari_ana_VVU` varchar(6)
,`mume_tarehe_ya_unasihi` date
,`mume_amepima_VVU` varchar(6)
,`mume_kipimo_aina` varchar(8)
,`mume_tarehe_ya_kipimo` date
,`mume_kipimo1_VVU` varchar(8)
,`mume_unasihi_baada_ya_kipimo_1` varchar(6)
,`mke_tayari_ana_VVU` varchar(6)
,`mke_tarehe_ya_unasihi` date
,`mke_amepima_VVU` varchar(6)
,`mke_kipimo_aina` varchar(8)
,`mke_tarehe_ya_kipimo` date
,`mke_kipimo1_VVU` varchar(8)
,`mke_unasihi_baada_ya_kipimo_1` varchar(6)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `family_plan`
-- (See below for the actual view)
--
CREATE TABLE `family_plan` (
`tarehe_ya_hudhurio` date
,`Namba_ya_kadi` varchar(10)
,`umri` int(7)
,`family_plan_usahuri_umetolewa` varchar(6)
,`family_plan_amepatiwa_kielelezo` varchar(6)
,`amepatiwa_family_plan_wakati_wa_ppc` varchar(6)
,`rufaa_kupata_family_plan` varchar(6)
);

-- --------------------------------------------------------

--
-- Table structure for table `infants`
--

CREATE TABLE `infants` (
  `id` int(10) UNSIGNED NOT NULL,
  `jina_la_mtoto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_usajili` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hudhurio` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aina` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe` date NOT NULL,
  `joto` double(4,2) NOT NULL,
  `uzito` smallint(5) UNSIGNED NOT NULL,
  `hb` double(4,2) NOT NULL,
  `maambukizi_machoni` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maambukizi_mdomoni` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maambukizi_kitovu` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lishe` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uambukizo_mkali` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kmc` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maambukizi_ngozini` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_BCG` date DEFAULT NULL,
  `tarehe_OPVO` date DEFAULT NULL,
  `matatizo_mengine` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_kurudi` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `kaswende`
-- (See below for the actual view)
--
CREATE TABLE `kaswende` (
`tarehe_ya_hudhurio` date
,`namba_ya_usajili` varchar(10)
,`umri` int(7)
,`matokeo_stds_mume` varchar(8)
,`mume_ametibiwa` varchar(6)
,`matokeo_stds_mke` varchar(8)
,`mke_ametibiwa` varchar(6)
,`kaswende_mume` varchar(8)
,`mume_ametibiwa_kaswende` varchar(6)
,`kaswende_mke` varchar(8)
,`mke_ametibiwa_kaswende` varchar(6)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `maelezo`
-- (See below for the actual view)
--
CREATE TABLE `maelezo` (
`tarehe_ya_hudhurio` date
,`Jina_la_mama` varchar(30)
,`Namba_ya_kadi` varchar(10)
,`aina` varchar(9)
,`hudhurio` varchar(10)
,`tarehe_ya_kuzaliwa` date
,`umri` int(7)
,`mama_HB` double(8,2)
,`hali_ya_msamba` varchar(16)
,`fistula` varchar(6)
,`akili_timamu` varchar(6)
,`idadi_ya_dawa_vitaminA` tinyint(3) unsigned
);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_03_235121_create_register_maternals_table', 1),
(4, '2018_05_05_105439_create_postnatals_table', 1),
(5, '2018_05_12_062605_create_register_children_table', 1),
(6, '2018_05_12_062746_create_infants_table', 1),
(7, '2018_05_12_062838_create_register6s_table', 1),
(8, '2018_05_12_062927_create_register7s_table', 1),
(9, '2018_05_12_062935_create_register13s_table', 1),
(10, '2018_05_17_055612_create_tasks_table', 1),
(11, '2018_05_23_195001_create_maelezo_views_table', 1),
(12, '2018_05_23_204419_create_alipojifungua_views_table', 1),
(13, '2018_05_23_205749_create_family_plans_table', 1),
(14, '2018_05_24_040547_create_pmtct_views_table', 1),
(15, '2018_05_26_030840_create_mtoto_views_table', 1),
(16, '2018_05_29_085623_create_mtoto_hudumas_table', 1),
(17, '2018_05_29_155104_create_mtoto_lishes_table', 1),
(18, '2018_05_30_193029_mtoto_uambukizo', 1),
(19, '2018_06_16_085531_create_vidokezo_hataris_table', 1),
(20, '2018_06_16_123929_create_kaswendes_table', 1),
(21, '2018_06_16_171144_create_antenatal_pmtcts_table', 1),
(22, '2018_06_16_182157_create_antenatal_malarias_table', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mtoto`
-- (See below for the actual view)
--
CREATE TABLE `mtoto` (
`tarehe` date
,`jina_la_mtoto` varchar(30)
,`namba_ya_mtoto` varchar(10)
,`jinsia` varchar(8)
,`aina` varchar(5)
,`hudhurio` varchar(17)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mtoto_huduma`
-- (See below for the actual view)
--
CREATE TABLE `mtoto_huduma` (
`tarehe` date
,`namba_ya_mtoto` varchar(10)
,`tarehe_BCG` date
,`tarehe_OPVO` date
,`uzito` smallint(5) unsigned
,`mahali_alipozaliwa` varchar(9)
,`jinsia` varchar(8)
,`hb` double(4,2)
,`kmc` varchar(6)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mtoto_lishe`
-- (See below for the actual view)
--
CREATE TABLE `mtoto_lishe` (
`tarehe` date
,`namba_ya_mtoto` varchar(10)
,`lishe` varchar(3)
,`jinsia` varchar(8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mtoto_uambukizo`
-- (See below for the actual view)
--
CREATE TABLE `mtoto_uambukizo` (
`tarehe` date
,`namba_ya_mtoto` varchar(10)
,`maambukizi_kitovu` varchar(6)
,`uambukizo_mkali` varchar(6)
,`maambukizi_ngozini` varchar(6)
,`jinsia` varchar(8)
,`mahali_alipozaliwa` varchar(9)
,`hali_ya_mtoto` varchar(9)
);

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
-- Stand-in structure for view `pmtct`
-- (See below for the actual view)
--
CREATE TABLE `pmtct` (
`tarehe_ya_hudhurio` date
,`Namba_ya_kadi` varchar(10)
,`umri` int(7)
,`Hali_ya_VVU_kwenye_kadi` varchar(8)
,`kipimo_vvu_wakati_wa_postnatal` varchar(8)
,`amepima_postnatal` varchar(6)
,`lishe_ya_mtoto` varchar(3)
);

-- --------------------------------------------------------

--
-- Table structure for table `postnatals`
--

CREATE TABLE `postnatals` (
  `id` int(10) UNSIGNED NOT NULL,
  `tarehe_ya_kuandikishwa` date NOT NULL,
  `namba_ya_kadi_RCH4` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jina_la_mama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtaa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lishe_ya_mtoto` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_kuzaliwa` date NOT NULL,
  `para` tinyint(4) NOT NULL,
  `tarehe_ya_kujifungua` date NOT NULL,
  `kada_ya_aliyemzalisha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahali_alipojifungulia` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hali_ya_mama` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hali_ya_mtoto` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unyonyeshaji_ndani_ya_saa_1` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hali_ya_VVU_kwenye_kadi` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amepima_postnatal` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kipimo_vvu_wakati_wa_postnatal` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register6s`
--

CREATE TABLE `register6s` (
  `id` int(10) UNSIGNED NOT NULL,
  `namba_ya_usajili` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matokeo_stds_mume` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_ametibiwa` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matokeo_stds_mke` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_ametibiwa` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `damu_HB` double(8,2) NOT NULL,
  `BP` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sukari_kwenye_mkojo` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaswende_mume` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_ametibiwa_kaswende` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaswende_mke` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_ametibiwa_kaswende` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_tayari_ana_VVU` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_tarehe_ya_unasihi` date NOT NULL,
  `mume_amepima_VVU` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_tarehe_ya_kipimo` date DEFAULT NULL,
  `mume_kipimo1_VVU` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mume_unasihi_baada_ya_kipimo_1` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mke_tayari_ana_VVU` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_tarehe_ya_unasihi` date NOT NULL,
  `mke_amepima_VVU` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_tarehe_ya_kipimo` date DEFAULT NULL,
  `mke_kipimo1_VVU` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mke_unasihi_baada_ya_kipimo_1` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hana_matatizo` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `Anaemia` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `Protenuria` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `high_BP` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `kutoongezeka_uzito` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `damu_ukeni` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `mlalo_mbaya_wa_mtoto` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `hudhurio` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uzito` smallint(5) UNSIGNED NOT NULL,
  `tarehe_ya_hudhurio` date NOT NULL,
  `tarehe_ya_marudio` date NOT NULL,
  `albendazole_mebendazole` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vidonge_vya_I_FA` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrdt_o_bs` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `llin` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipt` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mke_kipimo_aina` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mume_kipimo_aina` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_ipt` date NOT NULL,
  `maoni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_rufaa` date NOT NULL,
  `rufaa_alikopelekwa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sababu_ya_rufaa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_TT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register7s`
--

CREATE TABLE `register7s` (
  `id` int(10) UNSIGNED NOT NULL,
  `namba_ya_usajili` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe` date NOT NULL,
  `vitamin_A_umri` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amepata_vitamin_A` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mebendazole_albendazole_umri` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amepata_mebendazole_albendazole` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENTA` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penta_tarehe` date DEFAULT NULL,
  `Polio` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Polio_tarehe` date DEFAULT NULL,
  `PCV13` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PCV13_tarehe` date DEFAULT NULL,
  `Rota` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rota_tarehe` date DEFAULT NULL,
  `Surua` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Surua_tarehe` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register13s`
--

CREATE TABLE `register13s` (
  `id` int(10) UNSIGNED NOT NULL,
  `Namba_ya_kadi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jina_la_mama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hudhurio` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aina` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_hudhurio` date NOT NULL,
  `mama_BP` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mama_HB` double(8,2) NOT NULL,
  `matiti` varchar(19) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tumbo_la_uzazi` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lochia` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hali_ya_msamba` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fistula` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akili_timamu` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aina_ya_dawa_nyongeza` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idadi_ya_dawa_nyongeza` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idadi_ya_dawa_vitaminA` tinyint(3) UNSIGNED NOT NULL,
  `chanjo_ya_TT` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_plan_usahuri_umetolewa` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `family_plan_amepatiwa_kielelezo` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `amepatiwa_family_plan_wakati_wa_ppc` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `rufaa_kupata_family_plan` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hapana',
  `rufaa_alikopelekwa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rufaa_alikotoka` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rufaa_sababu_o_maoni` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_children`
--

CREATE TABLE `register_children` (
  `tarehe_ya_kuandikishwa` date NOT NULL,
  `namba_ya_usajili_RITA` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hajasajiliwa RITA',
  `jina_la_mtoto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_mtoto` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jinsia` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namba_ya_HEID` varchar(27) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Mama hana maambukizi ya VVU',
  `jina_la_mama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahali_anapoishi_mtoto` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_maternals`
--

CREATE TABLE `register_maternals` (
  `namba_ya_usajili` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_kuandikishwa` date NOT NULL,
  `jina_la_mama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarehe_ya_kuzaliwa` date NOT NULL,
  `BP` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lnmp` date NOT NULL,
  `urefu` int(11) NOT NULL,
  `jina_la_mume` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtaa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jina_la_mwenyekiti` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mimba_ngapi` int(11) NOT NULL,
  `amezaa_mara_ngapi` int(11) NOT NULL,
  `watoto_walio_hai` int(11) NOT NULL,
  `mimba_zilizoharibika` int(11) NOT NULL,
  `kifo_cha_mtoto_wiki_1` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umri_mtoto_wa_mwisho` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `participant` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worker_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `worker_id`, `position`, `phone_no`, `email`, `center`, `district`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Manehmos Super Administrator', 'MANEHMOS2', 'System Administrator', '0000000000', 'manehmos2@gmail.com', 'sawala dispensary', 'Mufindi', '$2y$10$w.fyb1wNI3allMpmLo/oveS/l4AhTpOfyM5x6jEwa8TP6e.jWmgTi', 'BCbZa7FB7rul7wMcRSJG7rGqtTUakRC1UPCmR80jKRs1tlLHTwCiIV36HuLC', '2018-05-14 04:05:58', '2018-07-11 08:49:36', 'active');
-- --------------------------------------------------------

--
-- Stand-in structure for view `vidokezo_hatari`
-- (See below for the actual view)
--
CREATE TABLE `vidokezo_hatari` (
`tarehe_ya_hudhurio` date
,`namba_ya_usajili` varchar(10)
,`umri` int(7)
,`umri_mimba` int(7)
,`hudhurio` varchar(18)
,`mimba_ngapi` int(11)
,`damu_HB` double(8,2)
,`TT` varchar(191)
,`BP` varchar(7)
,`sukari_kwenye_mkojo` varchar(6)
,`Protenuria` varchar(6)
);

-- --------------------------------------------------------

--
-- Structure for view `alipojifungua`
--
DROP TABLE IF EXISTS `alipojifungua`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `alipojifungua`  AS  select `register13s`.`tarehe_ya_hudhurio` AS `tarehe_ya_hudhurio`,`register13s`.`Namba_ya_kadi` AS `Namba_ya_kadi`,(to_days(`postnatals`.`tarehe_ya_kujifungua`) - to_days(`postnatals`.`tarehe_ya_kuzaliwa`)) AS `umri`,`postnatals`.`mahali_alipojifungulia` AS `mahali_alipojifungulia`,`postnatals`.`kada_ya_aliyemzalisha` AS `kada_ya_aliyemzalisha` from (`postnatals` join `register13s` on((`register13s`.`Namba_ya_kadi` = `postnatals`.`namba_ya_kadi_RCH4`))) ;

-- --------------------------------------------------------

--
-- Structure for view `antenatal_malaria`
--
DROP TABLE IF EXISTS `antenatal_malaria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `antenatal_malaria`  AS  select `register6s`.`tarehe_ya_hudhurio` AS `tarehe_ya_hudhurio`,`register_maternals`.`namba_ya_usajili` AS `namba_ya_usajili`,(to_days(`register_maternals`.`lnmp`) - to_days(`register_maternals`.`tarehe_ya_kuzaliwa`)) AS `umri`,`register6s`.`llin` AS `llin`,`register6s`.`mrdt_o_bs` AS `mrdt_o_bs`,`register6s`.`ipt` AS `ipt`,`register6s`.`albendazole_mebendazole` AS `albendazole_mebendazole`,`register6s`.`vidonge_vya_I_FA` AS `vidonge_vya_I_FA`,`register6s`.`rufaa_alikopelekwa` AS `rufaa_alikopelekwa`,`register6s`.`sababu_ya_rufaa` AS `sababu_ya_rufaa` from (`register_maternals` join `register6s`) where (`register_maternals`.`namba_ya_usajili` = `register6s`.`namba_ya_usajili`) ;

-- --------------------------------------------------------

--
-- Structure for view `antenatal_pmtct`
--
DROP TABLE IF EXISTS `antenatal_pmtct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `antenatal_pmtct`  AS  select `register6s`.`tarehe_ya_hudhurio` AS `tarehe_ya_hudhurio`,`register_maternals`.`namba_ya_usajili` AS `namba_ya_usajili`,(to_days(`register_maternals`.`lnmp`) - to_days(`register_maternals`.`tarehe_ya_kuzaliwa`)) AS `umri`,`register6s`.`hudhurio` AS `hudhurio`,`register6s`.`mume_tayari_ana_VVU` AS `mume_tayari_ana_VVU`,`register6s`.`mume_tarehe_ya_unasihi` AS `mume_tarehe_ya_unasihi`,`register6s`.`mume_amepima_VVU` AS `mume_amepima_VVU`,`register6s`.`mume_kipimo_aina` AS `mume_kipimo_aina`,`register6s`.`mume_tarehe_ya_kipimo` AS `mume_tarehe_ya_kipimo`,`register6s`.`mume_kipimo1_VVU` AS `mume_kipimo1_VVU`,`register6s`.`mume_unasihi_baada_ya_kipimo_1` AS `mume_unasihi_baada_ya_kipimo_1`,`register6s`.`mke_tayari_ana_VVU` AS `mke_tayari_ana_VVU`,`register6s`.`mke_tarehe_ya_unasihi` AS `mke_tarehe_ya_unasihi`,`register6s`.`mke_amepima_VVU` AS `mke_amepima_VVU`,`register6s`.`mke_kipimo_aina` AS `mke_kipimo_aina`,`register6s`.`mke_tarehe_ya_kipimo` AS `mke_tarehe_ya_kipimo`,`register6s`.`mke_kipimo1_VVU` AS `mke_kipimo1_VVU`,`register6s`.`mke_unasihi_baada_ya_kipimo_1` AS `mke_unasihi_baada_ya_kipimo_1` from (`register_maternals` join `register6s`) where (`register_maternals`.`namba_ya_usajili` = `register6s`.`namba_ya_usajili`) ;

-- --------------------------------------------------------

--
-- Structure for view `family_plan`
--
DROP TABLE IF EXISTS `family_plan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `family_plan`  AS  select `register13s`.`tarehe_ya_hudhurio` AS `tarehe_ya_hudhurio`,`register13s`.`Namba_ya_kadi` AS `Namba_ya_kadi`,(to_days(`postnatals`.`tarehe_ya_kujifungua`) - to_days(`postnatals`.`tarehe_ya_kuzaliwa`)) AS `umri`,`register13s`.`family_plan_usahuri_umetolewa` AS `family_plan_usahuri_umetolewa`,`register13s`.`family_plan_amepatiwa_kielelezo` AS `family_plan_amepatiwa_kielelezo`,`register13s`.`amepatiwa_family_plan_wakati_wa_ppc` AS `amepatiwa_family_plan_wakati_wa_ppc`,`register13s`.`rufaa_kupata_family_plan` AS `rufaa_kupata_family_plan` from (`postnatals` join `register13s` on((`register13s`.`Namba_ya_kadi` = `postnatals`.`namba_ya_kadi_RCH4`))) ;

-- --------------------------------------------------------

--
-- Structure for view `kaswende`
--
DROP TABLE IF EXISTS `kaswende`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `kaswende`  AS  select `register6s`.`tarehe_ya_hudhurio` AS `tarehe_ya_hudhurio`,`register_maternals`.`namba_ya_usajili` AS `namba_ya_usajili`,(to_days(`register_maternals`.`lnmp`) - to_days(`register_maternals`.`tarehe_ya_kuzaliwa`)) AS `umri`,`register6s`.`matokeo_stds_mume` AS `matokeo_stds_mume`,`register6s`.`mume_ametibiwa` AS `mume_ametibiwa`,`register6s`.`matokeo_stds_mke` AS `matokeo_stds_mke`,`register6s`.`mke_ametibiwa` AS `mke_ametibiwa`,`register6s`.`kaswende_mume` AS `kaswende_mume`,`register6s`.`mume_ametibiwa_kaswende` AS `mume_ametibiwa_kaswende`,`register6s`.`kaswende_mke` AS `kaswende_mke`,`register6s`.`mke_ametibiwa_kaswende` AS `mke_ametibiwa_kaswende` from (`register_maternals` join `register6s`) where (`register_maternals`.`namba_ya_usajili` = `register6s`.`namba_ya_usajili`) ;

-- --------------------------------------------------------

--
-- Structure for view `maelezo`
--
DROP TABLE IF EXISTS `maelezo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `maelezo`  AS  select `register13s`.`tarehe_ya_hudhurio` AS `tarehe_ya_hudhurio`,`postnatals`.`jina_la_mama` AS `Jina_la_mama`,`register13s`.`Namba_ya_kadi` AS `Namba_ya_kadi`,`register13s`.`aina` AS `aina`,`register13s`.`hudhurio` AS `hudhurio`,`postnatals`.`tarehe_ya_kuzaliwa` AS `tarehe_ya_kuzaliwa`,(to_days(`postnatals`.`tarehe_ya_kujifungua`) - to_days(`postnatals`.`tarehe_ya_kuzaliwa`)) AS `umri`,`register13s`.`mama_HB` AS `mama_HB`,`register13s`.`hali_ya_msamba` AS `hali_ya_msamba`,`register13s`.`fistula` AS `fistula`,`register13s`.`akili_timamu` AS `akili_timamu`,`register13s`.`idadi_ya_dawa_vitaminA` AS `idadi_ya_dawa_vitaminA` from (`postnatals` join `register13s` on((`register13s`.`Namba_ya_kadi` = `postnatals`.`namba_ya_kadi_RCH4`))) ;

-- --------------------------------------------------------

--
-- Structure for view `mtoto`
--
DROP TABLE IF EXISTS `mtoto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `mtoto`  AS  select `infants`.`tarehe` AS `tarehe`,`register_children`.`jina_la_mtoto` AS `jina_la_mtoto`,`register_children`.`namba_ya_mtoto` AS `namba_ya_mtoto`,`register_children`.`jinsia` AS `jinsia`,`infants`.`aina` AS `aina`,`infants`.`hudhurio` AS `hudhurio` from (`register_children` join `infants` on((`register_children`.`namba_ya_mtoto` = `infants`.`namba_ya_usajili`))) ;

-- --------------------------------------------------------

--
-- Structure for view `mtoto_huduma`
--
DROP TABLE IF EXISTS `mtoto_huduma`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `mtoto_huduma`  AS  select `infants`.`tarehe` AS `tarehe`,`register_children`.`namba_ya_mtoto` AS `namba_ya_mtoto`,`infants`.`tarehe_BCG` AS `tarehe_BCG`,`infants`.`tarehe_OPVO` AS `tarehe_OPVO`,`infants`.`uzito` AS `uzito`,`postnatals`.`mahali_alipojifungulia` AS `mahali_alipozaliwa`,`register_children`.`jinsia` AS `jinsia`,`infants`.`hb` AS `hb`,`infants`.`kmc` AS `kmc` from ((`register_children` join `infants` on((`register_children`.`namba_ya_mtoto` = `infants`.`namba_ya_usajili`))) join `postnatals` on((`postnatals`.`namba_ya_kadi_RCH4` = `register_children`.`jina_la_mama`))) ;

-- --------------------------------------------------------

--
-- Structure for view `mtoto_lishe`
--
DROP TABLE IF EXISTS `mtoto_lishe`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `mtoto_lishe`  AS  select `infants`.`tarehe` AS `tarehe`,`register_children`.`namba_ya_mtoto` AS `namba_ya_mtoto`,`infants`.`lishe` AS `lishe`,`register_children`.`jinsia` AS `jinsia` from (`register_children` join `infants` on((`register_children`.`namba_ya_mtoto` = `infants`.`namba_ya_usajili`))) ;

-- --------------------------------------------------------

--
-- Structure for view `mtoto_uambukizo`
--
DROP TABLE IF EXISTS `mtoto_uambukizo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `mtoto_uambukizo`  AS  select `infants`.`tarehe` AS `tarehe`,`register_children`.`namba_ya_mtoto` AS `namba_ya_mtoto`,`infants`.`maambukizi_kitovu` AS `maambukizi_kitovu`,`infants`.`uambukizo_mkali` AS `uambukizo_mkali`,`infants`.`maambukizi_ngozini` AS `maambukizi_ngozini`,`register_children`.`jinsia` AS `jinsia`,`postnatals`.`mahali_alipojifungulia` AS `mahali_alipozaliwa`,`postnatals`.`hali_ya_mtoto` AS `hali_ya_mtoto` from ((`register_children` join `infants` on((`register_children`.`namba_ya_mtoto` = `infants`.`namba_ya_usajili`))) join `postnatals` on((`postnatals`.`namba_ya_kadi_RCH4` = `register_children`.`jina_la_mama`))) ;

-- --------------------------------------------------------

--
-- Structure for view `pmtct`
--
DROP TABLE IF EXISTS `pmtct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `pmtct`  AS  select `register13s`.`tarehe_ya_hudhurio` AS `tarehe_ya_hudhurio`,`register13s`.`Namba_ya_kadi` AS `Namba_ya_kadi`,(to_days(`postnatals`.`tarehe_ya_kujifungua`) - to_days(`postnatals`.`tarehe_ya_kuzaliwa`)) AS `umri`,`postnatals`.`Hali_ya_VVU_kwenye_kadi` AS `Hali_ya_VVU_kwenye_kadi`,`postnatals`.`kipimo_vvu_wakati_wa_postnatal` AS `kipimo_vvu_wakati_wa_postnatal`,`postnatals`.`amepima_postnatal` AS `amepima_postnatal`,`postnatals`.`lishe_ya_mtoto` AS `lishe_ya_mtoto` from (`postnatals` join `register13s` on((`register13s`.`Namba_ya_kadi` = `postnatals`.`namba_ya_kadi_RCH4`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vidokezo_hatari`
--
DROP TABLE IF EXISTS `vidokezo_hatari`;

CREATE ALGORITHM=UNDEFINED DEFINER=`emma`@`localhost` SQL SECURITY DEFINER VIEW `vidokezo_hatari`  AS  select `register6s`.`tarehe_ya_hudhurio` AS `tarehe_ya_hudhurio`,`register_maternals`.`namba_ya_usajili` AS `namba_ya_usajili`,(to_days(`register_maternals`.`lnmp`) - to_days(`register_maternals`.`tarehe_ya_kuzaliwa`)) AS `umri`,(to_days(`register_maternals`.`tarehe_ya_kuandikishwa`) - to_days(`register_maternals`.`lnmp`)) AS `umri_mimba`,`register6s`.`hudhurio` AS `hudhurio`,`register_maternals`.`mimba_ngapi` AS `mimba_ngapi`,`register6s`.`damu_HB` AS `damu_HB`,`register6s`.`TT` AS `TT`,`register6s`.`BP` AS `BP`,`register6s`.`sukari_kwenye_mkojo` AS `sukari_kwenye_mkojo`,`register6s`.`Protenuria` AS `Protenuria` from (`register_maternals` join `register6s`) where (`register_maternals`.`namba_ya_usajili` = `register6s`.`namba_ya_usajili`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infants`
--
ALTER TABLE `infants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infants_namba_ya_usajili_foreign` (`namba_ya_usajili`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `postnatals_namba_ya_kadi_rch4_foreign` (`namba_ya_kadi_RCH4`);

--
-- Indexes for table `register6s`
--
ALTER TABLE `register6s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `10` (`namba_ya_usajili`);

--
-- Indexes for table `register7s`
--
ALTER TABLE `register7s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register7s_namba_ya_usajili_foreign` (`namba_ya_usajili`);

--
-- Indexes for table `register13s`
--
ALTER TABLE `register13s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register13s_namba_ya_kadi_foreign` (`Namba_ya_kadi`);

--
-- Indexes for table `register_children`
--
ALTER TABLE `register_children`
  ADD PRIMARY KEY (`namba_ya_mtoto`),
  ADD UNIQUE KEY `register_children_namba_ya_mtoto_unique` (`namba_ya_mtoto`);

--
-- Indexes for table `register_maternals`
--
ALTER TABLE `register_maternals`
  ADD PRIMARY KEY (`namba_ya_usajili`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `postnatals`
--
ALTER TABLE `postnatals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register6s`
--
ALTER TABLE `register6s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register7s`
--
ALTER TABLE `register7s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register13s`
--
ALTER TABLE `register13s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `infants`
--
ALTER TABLE `infants`
  ADD CONSTRAINT `infants_namba_ya_usajili_foreign` FOREIGN KEY (`namba_ya_usajili`) REFERENCES `register_children` (`namba_ya_mtoto`) ON DELETE CASCADE;

--
-- Constraints for table `postnatals`
--
ALTER TABLE `postnatals`
  ADD CONSTRAINT `postnatals_namba_ya_kadi_rch4_foreign` FOREIGN KEY (`namba_ya_kadi_RCH4`) REFERENCES `register_maternals` (`namba_ya_usajili`) ON DELETE CASCADE;

--
-- Constraints for table `register6s`
--
ALTER TABLE `register6s`
  ADD CONSTRAINT `10` FOREIGN KEY (`namba_ya_usajili`) REFERENCES `register_maternals` (`namba_ya_usajili`) ON DELETE CASCADE;

--
-- Constraints for table `register7s`
--
ALTER TABLE `register7s`
  ADD CONSTRAINT `register7s_namba_ya_usajili_foreign` FOREIGN KEY (`namba_ya_usajili`) REFERENCES `register_children` (`namba_ya_mtoto`) ON DELETE CASCADE;

--
-- Constraints for table `register13s`
--
ALTER TABLE `register13s`
  ADD CONSTRAINT `register13s_namba_ya_kadi_foreign` FOREIGN KEY (`Namba_ya_kadi`) REFERENCES `register_maternals` (`namba_ya_usajili`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
