-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2026 at 04:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigma`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('sigma_cache_livewire-rate-limiter:75a036ac0fdcb20b35ac6fd6a3875ea2dbe60af1', 'i:1;', 1767665462),
('sigma_cache_livewire-rate-limiter:75a036ac0fdcb20b35ac6fd6a3875ea2dbe60af1:timer', 'i:1767665462;', 1767665462);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswas`
--

CREATE TABLE `data_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ts_label` enum('TS-3','TS-2','TS-1','TS') NOT NULL,
  `capacity` int(10) UNSIGNED NOT NULL,
  `applicants_total` int(10) UNSIGNED NOT NULL,
  `applicants_affirmation` int(10) UNSIGNED NOT NULL,
  `applicants_special_needs` int(10) UNSIGNED NOT NULL,
  `new_regular_accepted` int(10) UNSIGNED NOT NULL,
  `new_regular_affirmation` int(10) UNSIGNED NOT NULL,
  `new_regular_special_needs` int(10) UNSIGNED NOT NULL,
  `new_rpl_accepted` int(10) UNSIGNED NOT NULL,
  `new_rpl_affirmation` int(10) UNSIGNED NOT NULL,
  `new_rpl_special_needs` int(10) UNSIGNED NOT NULL,
  `active_regular_accepted` int(10) UNSIGNED NOT NULL,
  `active_regular_affirmation` int(10) UNSIGNED NOT NULL,
  `active_regular_special_needs` int(10) UNSIGNED NOT NULL,
  `active_rpl_accepted` int(10) UNSIGNED NOT NULL,
  `active_rpl_affirmation` int(10) UNSIGNED NOT NULL,
  `active_rpl_special_needs` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_mahasiswas`
--

INSERT INTO `data_mahasiswas` (`id`, `ts_label`, `capacity`, `applicants_total`, `applicants_affirmation`, `applicants_special_needs`, `new_regular_accepted`, `new_regular_affirmation`, `new_regular_special_needs`, `new_rpl_accepted`, `new_rpl_affirmation`, `new_rpl_special_needs`, `active_regular_accepted`, `active_regular_affirmation`, `active_regular_special_needs`, `active_rpl_accepted`, `active_rpl_affirmation`, `active_rpl_special_needs`, `created_at`, `updated_at`) VALUES
(1, 'TS', 200, 487, 0, 0, 139, 0, 0, 0, 0, 0, 131, 0, 0, 0, 0, 0, '2026-01-02 02:15:04', '2026-01-02 02:15:04'),
(2, 'TS-1', 160, 669, 1, 0, 188, 1, 0, 0, 0, 0, 188, 1, 0, 0, 0, 0, '2026-01-02 03:04:41', '2026-01-02 03:04:41'),
(3, 'TS-2', 120, 579, 0, 0, 133, 0, 0, 0, 0, 0, 133, 0, 0, 0, 0, 0, '2026-01-02 04:45:26', '2026-01-02 04:45:26'),
(4, 'TS-3', 200, 770, 1, 0, 114, 1, 0, 0, 0, 0, 114, 1, 0, 0, 0, 0, '2026-01-02 04:47:41', '2026-01-02 04:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `diseminasi_pkms`
--

CREATE TABLE `diseminasi_pkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dtpr` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `diseminasi` enum('Media Massa Elektronik Lokal','Media Massa Elektronik Nasional','Jurnal PKM','Social Media Youtube') NOT NULL,
  `waktu` enum('TS','TS-1','TS-2') NOT NULL,
  `link_bukti` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseminasi_pkms`
--

INSERT INTO `diseminasi_pkms` (`id`, `nama_dtpr`, `judul`, `diseminasi`, `waktu`, `link_bukti`, `created_at`, `updated_at`) VALUES
(1, 'Mahazam Afrad, S.Kom., M.Kom', 'Penerapan Artificial Intellegence untuk promosi UMKM', 'Media Massa Elektronik Lokal', 'TS-1', 'https://lppm.ittelkom-pwt.ac.id/2023/06/23/pelaku-umkm-di-cingebul-dilatih-promosi-usaha-dengan-teknologi-ai/', '2025-10-08 01:15:00', '2025-10-08 01:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fleksibilitas_pembelajarans`
--

CREATE TABLE `fleksibilitas_pembelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_label` varchar(255) NOT NULL,
  `ts_2` int(10) UNSIGNED DEFAULT NULL,
  `ts_1` int(10) UNSIGNED DEFAULT NULL,
  `ts` int(10) UNSIGNED DEFAULT NULL,
  `evidence_link` varchar(255) DEFAULT NULL,
  `sort_order` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fleksibilitas_pembelajarans`
--

INSERT INTO `fleksibilitas_pembelajarans` (`id`, `item_label`, `ts_2`, `ts_1`, `ts`, `evidence_link`, `sort_order`, `created_at`, `updated_at`) VALUES
(2, 'Jumlah Mahasiswa Aktif', 617, 650, 678, 'https://drive.google.com/drive/folders/1UDdTR8GMPfz0v8-tVYzRGGrKUN8PgkiY?usp=sharing', 1, '2025-12-07 04:27:25', '2025-12-07 04:27:25'),
(3, 'Micro-credensial', 40, 41, 16, NULL, 2, '2025-12-07 04:34:11', '2025-12-07 04:34:11'),
(4, 'Daring', 10, 20, 30, NULL, 2, '2026-01-02 09:52:50', '2026-01-02 09:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `fundings`
--

CREATE TABLE `fundings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `other_name` varchar(255) DEFAULT NULL,
  `sumber_pendanaan` varchar(255) NOT NULL,
  `ts` bigint(20) NOT NULL DEFAULT 0,
  `ts_1` bigint(20) NOT NULL DEFAULT 0,
  `ts_2` bigint(20) NOT NULL DEFAULT 0,
  `bukti_pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fundings`
--

INSERT INTO `fundings` (`id`, `category`, `subcategory`, `other_name`, `sumber_pendanaan`, `ts`, `ts_1`, `ts_2`, `bukti_pdf`, `created_at`, `updated_at`) VALUES
(1, 'bpp', NULL, NULL, 'Dana dari BPP Mahasiswa', 1200000000, 1500000000, 2000000000, 'fundings/bukti/LKPS Tabel 5.1 SPP-UP3-SDP2.pdf', '2025-09-17 09:53:49', '2025-09-17 10:01:17'),
(2, 'yayasan', NULL, NULL, 'Dana dari Yayasan', 500000000, 700000000, 900000000, 'fundings/bukti/LKPS Tabel 5.1 Investasi.pdf', '2025-09-17 10:05:38', '2025-09-17 10:05:38'),
(3, 'luar', 'UP3', NULL, 'UP3', 200000000, 300000000, 400000000, 'fundings/bukti/LKPS Tabel 5.1 SPP-UP3-SDP2.pdf', '2025-09-17 10:17:51', '2025-09-17 10:17:51'),
(4, 'bpp', NULL, NULL, 'Dana dari BPP Mahasiswa', 500000, 1000000, 3000000, NULL, '2026-01-02 09:35:43', '2026-01-02 09:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `isi_pembelajarans`
--

CREATE TABLE `isi_pembelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `sks` int(10) UNSIGNED NOT NULL,
  `semester` varchar(255) NOT NULL,
  `profil_lulusan` enum('PL 1','PL 2','PL 3','PL 4') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isi_pembelajarans`
--

INSERT INTO `isi_pembelajarans` (`id`, `mata_kuliah`, `sks`, `semester`, `profil_lulusan`, `created_at`, `updated_at`) VALUES
(1, 'Agama Hindu', 2, 'Ganjil 2024-2025', 'PL 2', '2025-10-28 23:08:17', '2025-10-28 23:08:17'),
(2, 'Agama Islam', 2, 'Ganjil 2024-2025', 'PL 2', '2025-11-23 05:02:05', '2025-11-23 05:02:05'),
(3, 'Algoritma Pemrograman', 4, 'Ganjil 2024-2025', 'PL 1', '2025-11-23 05:02:35', '2025-11-23 05:02:35'),
(4, 'Komputasi Awan', 3, 'Ganjil 2024-2025', 'PL 1', '2025-12-06 09:57:23', '2025-12-06 09:57:23'),
(5, 'Matematika Diskrit', 3, '2', 'PL 1', '2026-01-02 09:45:03', '2026-01-02 09:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keberagaman_asal_mahasiswas`
--

CREATE TABLE `keberagaman_asal_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` enum('kota_kab_ps','kabupaten_lain','provinsi_ps','provinsi_lain','negara_ps','negara_lain','afirmasi','berkebutuhan_khusus') NOT NULL,
  `nama_asal` varchar(255) NOT NULL,
  `ts_2` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ts_1` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ts` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `link_bukti` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keberagaman_asal_mahasiswas`
--

INSERT INTO `keberagaman_asal_mahasiswas` (`id`, `kategori`, `nama_asal`, `ts_2`, `ts_1`, `ts`, `link_bukti`, `created_at`, `updated_at`) VALUES
(1, 'kota_kab_ps', 'Banyumas', 38, 54, 34, NULL, '2026-01-02 04:43:29', '2026-01-02 04:43:29'),
(2, 'kabupaten_lain', 'Tegal', 2, 5, 1, NULL, '2026-01-02 09:41:53', '2026-01-02 09:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `kepuasan_pengguna_lulusans`
--

CREATE TABLE `kepuasan_pengguna_lulusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kemampuan` varchar(255) NOT NULL,
  `very_good` decimal(5,2) NOT NULL,
  `good` decimal(5,2) NOT NULL,
  `fair` decimal(5,2) NOT NULL,
  `poor` decimal(5,2) NOT NULL,
  `follow_up_plan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepuasan_pengguna_lulusans`
--

INSERT INTO `kepuasan_pengguna_lulusans` (`id`, `jenis_kemampuan`, `very_good`, `good`, `fair`, `poor`, `follow_up_plan`, `created_at`, `updated_at`) VALUES
(1, 'Kerjasama Tim', 70.00, 10.00, 10.00, 10.00, 'Merancang skema tugas akhir yang dapat diselesaikan secara tim ', '2025-12-06 22:56:12', '2025-12-06 22:56:12'),
(2, 'Komunikasi', 50.00, 30.00, 60.00, 10.00, NULL, '2026-01-02 09:50:14', '2026-01-02 09:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama_penelitians`
--

CREATE TABLE `kerjasama_penelitians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_kerjasama` varchar(255) NOT NULL,
  `mitra_kerjasama` varchar(255) NOT NULL,
  `sumber` enum('Lokal/Wilayah','Nasional','Internasional') NOT NULL,
  `durasi` int(11) DEFAULT NULL,
  `ts_2` bigint(20) NOT NULL DEFAULT 0,
  `ts_1` bigint(20) NOT NULL DEFAULT 0,
  `ts` bigint(20) NOT NULL DEFAULT 0,
  `bukti_files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`bukti_files`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kerjasama_penelitians`
--

INSERT INTO `kerjasama_penelitians` (`id`, `judul_kerjasama`, `mitra_kerjasama`, `sumber`, `durasi`, `ts_2`, `ts_1`, `ts`, `bukti_files`, `created_at`, `updated_at`) VALUES
(1, 'Integrasi Teknologi Informasi dan Administrasi Pengelolaan Lahan Pertanian Desa Melalui Sistem Informasi Geografis (ASTAGIS)', 'Desa Cingebul', 'Lokal/Wilayah', 1, 0, 32000000, 0, '[\"penelitian\\/kerjasama\\/bukti\\/Mou Cingebul.pdf\"]', '2025-10-19 22:08:17', '2025-10-19 22:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama_pkms`
--

CREATE TABLE `kerjasama_pkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_kerjasama` varchar(255) NOT NULL,
  `mitra_kerjasama` varchar(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `sumber` enum('Lokal/Wilayah','Nasional','Internasional') NOT NULL,
  `durasi` int(11) DEFAULT NULL,
  `ts_2` bigint(20) NOT NULL DEFAULT 0,
  `ts_1` bigint(20) NOT NULL DEFAULT 0,
  `ts` bigint(20) NOT NULL DEFAULT 0,
  `status` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kerjasama_pkms`
--

INSERT INTO `kerjasama_pkms` (`id`, `judul_kerjasama`, `mitra_kerjasama`, `nama_dosen`, `sumber`, `durasi`, `ts_2`, `ts_1`, `ts`, `status`, `bukti`, `created_at`, `updated_at`) VALUES
(1, 'Pemberdayaan Berbasis Masyarakat Kelompok Tani Desa Plana dalam Pemanfaatan E-GEPATAN untuk Administrasi Pemetaan Lahan Pertanian dan Pemasaran Hasil Panen', 'Desa Plana, Kec Somagede, Kab Banyumas', 'Awiet', 'Nasional', 1, 0, 0, 46245000, 'Selesai', 'kerjasama-pkm/bukti/2025_MoA_TUP x KKNT Desa Plana.pdf', '2025-10-07 23:05:52', '2025-10-07 23:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `kesesuaian_bidang_kerjas`
--

CREATE TABLE `kesesuaian_bidang_kerjas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `graduation_year_label` enum('TS-3','TS-2','TS-1') NOT NULL,
  `total_graduates` int(10) UNSIGNED NOT NULL,
  `tracked_graduates` int(10) UNSIGNED NOT NULL,
  `job_infokom` int(10) UNSIGNED NOT NULL,
  `job_non_infokom` int(10) UNSIGNED NOT NULL,
  `scope_multinational` int(10) UNSIGNED NOT NULL,
  `scope_national` int(10) UNSIGNED NOT NULL,
  `scope_entrepreneur` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kesesuaian_bidang_kerjas`
--

INSERT INTO `kesesuaian_bidang_kerjas` (`id`, `graduation_year_label`, `total_graduates`, `tracked_graduates`, `job_infokom`, `job_non_infokom`, `scope_multinational`, `scope_national`, `scope_entrepreneur`, `created_at`, `updated_at`) VALUES
(1, 'TS-1', 40, 31, 20, 7, 11, 10, 2, '2025-12-06 13:31:41', '2025-12-06 13:31:41'),
(2, 'TS-2', 185, 103, 52, 7, 7, 45, 4, '2025-12-06 13:32:13', '2025-12-06 13:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_mahasiswas`
--

CREATE TABLE `kondisi_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` enum('Mahasiswa Baru','Mahasiswa Aktif pada saat TS','Lulus pada saat TS','Mengundurkan Diri/DO pada saat TS') NOT NULL,
  `ts_2` int(11) NOT NULL DEFAULT 0,
  `ts_1` int(11) NOT NULL DEFAULT 0,
  `ts` int(11) NOT NULL DEFAULT 0,
  `jumlah` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kondisi_mahasiswas`
--

INSERT INTO `kondisi_mahasiswas` (`id`, `kategori`, `ts_2`, `ts_1`, `ts`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Mahasiswa Baru', 133, 188, 131, 452, '2025-10-27 23:21:33', '2025-10-27 23:21:33'),
(2, 'Mahasiswa Aktif pada saat TS', 541, 578, 571, 1690, '2025-11-22 23:41:02', '2025-11-22 23:41:02'),
(3, 'Mahasiswa Baru', 100, 200, 300, 600, '2026-01-02 09:43:42', '2026-01-02 09:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `kualifikasi_tendiks`
--

CREATE TABLE `kualifikasi_tendiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `jenis_tendik` varchar(255) NOT NULL,
  `other_name` varchar(255) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s1` int(11) DEFAULT NULL,
  `d4` int(11) DEFAULT NULL,
  `d3` int(11) DEFAULT NULL,
  `d2` int(11) DEFAULT NULL,
  `d1` int(11) DEFAULT NULL,
  `sma` int(11) DEFAULT NULL,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `ijazah_files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`ijazah_files`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kualifikasi_tendiks`
--

INSERT INTO `kualifikasi_tendiks` (`id`, `category`, `jenis_tendik`, `other_name`, `s3`, `s2`, `s1`, `d4`, `d3`, `d2`, `d1`, `sma`, `unit_kerja`, `ijazah_files`, `created_at`, `updated_at`) VALUES
(1, 'pustakawan', 'Pustakawan', NULL, NULL, NULL, 2, NULL, 1, NULL, NULL, NULL, 'Perpustakaan', '[\"ijazah-sertifikat\\/Ijazah S1 Indah Yuni Syafa_ati.pdf\",\"ijazah-sertifikat\\/Ijazah Wiwus Widya Futiana.pdf\"]', '2025-09-17 23:19:45', '2025-09-17 23:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_17_083827_create_pimpinans_table', 1),
(5, '2025_09_17_113937_change_tupoksi_column_type_in_pimpinans_table', 2),
(6, '2025_09_17_154917_create_fundings_table', 3),
(7, '2025_09_18_030347_create_penggunaan_danas_table', 4),
(8, '2025_09_18_060147_create_kualifikasi_tendiks_table', 5),
(9, '2025_09_18_075000_create_rerata_beban_dtprs_table', 6),
(10, '2025_09_18_075019_create_unit_spmis_table', 6),
(11, '2025_10_03_112812_create_visi_misis_table', 7),
(12, '2025_10_03_120414_create_sistem_tata_kelolas_table', 8),
(13, '2025_10_06_090021_create_sarana_prasaranas_table', 9),
(14, '2025_10_08_044845_create_perolehan_pkms_table', 10),
(15, '2025_10_08_053540_create_kerjasama_pkms_table', 11),
(16, '2025_10_08_080524_create_diseminasi_pkms_table', 12),
(19, '2025_10_08_090010_create_pembiayaan_pkms_table', 13),
(21, '2025_10_13_043435_create_sarana_prasarana_pkms_table', 14),
(22, '2025_10_16_070710_create_sarana_prasarana_penelitians_table', 15),
(23, '2025_10_20_033129_create_pembiayaan_penelitians_table', 16),
(24, '2025_10_20_040925_create_pengembangan_dtpr_penelitians_table', 17),
(25, '2025_10_20_044737_create_kerjasama_penelitians_table', 18),
(26, '2025_10_20_053742_create_publikasi_penelitians_table', 19),
(27, '2025_10_20_060158_create_perolehan_hkis_table', 20),
(28, '2025_10_28_055945_create_kondisi_mahasiswas_table', 21),
(29, '2025_10_28_065434_create_isi_pembelajarans_table', 22),
(30, '2025_10_29_055820_change_type_data_isi_pembelajarans', 23),
(31, '2025_11_23_073443_create_pemetaan_cpl_pls_table', 24),
(32, '2025_11_23_102228_create_peta_pemenuhan_cpls_table', 25),
(33, '2025_11_23_115746_change_semester_column_type_in_isi_pembelajarans_table', 26),
(35, '2025_12_06_181208_create_rerata_masa_tunggu_luluses_table', 27),
(36, '2025_12_06_202253_create_kesesuaian_bidang_kerjas_table', 28),
(37, '2025_12_07_053644_create_kepuasan_pengguna_lulusans_table', 29),
(38, '2025_12_07_105810_create_fleksibilitas_pembelajarans_table', 30),
(40, '2025_12_07_122636_create_rekognisi_lulusans_table', 31),
(42, '2025_12_07_161636_create_data_mahasiswas_table', 32),
(43, '2026_01_02_110322_create_keberagaman_asal_mahasiswas_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembiayaan_penelitians`
--

CREATE TABLE `pembiayaan_penelitians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dtpr` varchar(255) NOT NULL,
  `judul_penelitian` varchar(255) NOT NULL,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  `jenis_hibah_penelitian` varchar(255) DEFAULT NULL,
  `sumber` enum('Lokal/Wilayah','Nasional','Internasional') NOT NULL,
  `durasi` int(11) DEFAULT NULL,
  `ts_2` bigint(20) NOT NULL DEFAULT 0,
  `ts_1` bigint(20) NOT NULL DEFAULT 0,
  `ts` bigint(20) NOT NULL DEFAULT 0,
  `link_bukti` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembiayaan_penelitians`
--

INSERT INTO `pembiayaan_penelitians` (`id`, `nama_dtpr`, `judul_penelitian`, `jumlah_mahasiswa`, `jenis_hibah_penelitian`, `sumber`, `durasi`, `ts_2`, `ts_1`, `ts`, `link_bukti`, `created_at`, `updated_at`) VALUES
(1, 'Anggi Zafia, S.T., M.Eng', 'Perancangan dan Pembuatan Alat Uji Monitoring Performa Kendaraan Untuk Kendaraan Listrik Roda Dua', 2, 'Penelitian Terapan Unggulan Perguruan Tinggi', 'Lokal/Wilayah', 1, 8520000, 0, 0, 'https://drive.google.com/drive/folders/1pQz1ZuMQn-xWCHb-EknR3VUugwCrLznA?usp=sharing', '2025-10-19 20:59:20', '2025-10-19 20:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `pembiayaan_pkms`
--

CREATE TABLE `pembiayaan_pkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dtpr` varchar(255) NOT NULL,
  `judul_pkm` varchar(255) DEFAULT NULL,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  `jenis_hibah_pkm` varchar(255) DEFAULT NULL,
  `sumber_dana` enum('Lokal/Wilayah','Nasional','Internasional') DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL,
  `ts_2` int(11) NOT NULL DEFAULT 0,
  `ts_1` int(11) NOT NULL DEFAULT 0,
  `ts` int(11) NOT NULL DEFAULT 0,
  `bukti_pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembiayaan_pkms`
--

INSERT INTO `pembiayaan_pkms` (`id`, `nama_dtpr`, `judul_pkm`, `jumlah_mahasiswa`, `jenis_hibah_pkm`, `sumber_dana`, `durasi`, `ts_2`, `ts_1`, `ts`, `bukti_pdf`, `created_at`, `updated_at`) VALUES
(1, 'Mahazam Afrad, S.Kom., M.Kom', 'Penerapan Artificial Intellegence untuk promosi UMKM', 2, 'PKM Insidental', 'Lokal/Wilayah', 1, 0, 300000, 0, 'pkm-pembiayaan/bukti/Laporan Pengmas - 29 Mei 2024.pdf', '2025-10-12 22:07:28', '2025-10-12 22:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `pemetaan_cpl_pls`
--

CREATE TABLE `pemetaan_cpl_pls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cpl` enum('CPL 1','CPL 2','CPL 3','CPL 4','CPL 5','CPL 6','CPL 7','CPL 8','CPL 9','CPL 10') NOT NULL,
  `pl` enum('PL 1','PL 2','PL 3','PL 4') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemetaan_cpl_pls`
--

INSERT INTO `pemetaan_cpl_pls` (`id`, `cpl`, `pl`, `created_at`, `updated_at`) VALUES
(1, 'CPL 1', 'PL 1', '2025-11-23 00:59:53', '2025-11-23 00:59:53'),
(2, 'CPL 2', 'PL 1', '2026-01-02 09:45:51', '2026-01-02 09:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `pengembangan_dtpr_penelitians`
--

CREATE TABLE `pengembangan_dtpr_penelitians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pengembangan_dtpr` varchar(255) NOT NULL,
  `nama_dtpr` varchar(255) NOT NULL,
  `tahun_akademik` enum('TS','TS-1','TS-2') NOT NULL,
  `link_bukti` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengembangan_dtpr_penelitians`
--

INSERT INTO `pengembangan_dtpr_penelitians` (`id`, `jenis_pengembangan_dtpr`, `nama_dtpr`, `tahun_akademik`, `link_bukti`, `created_at`, `updated_at`) VALUES
(1, 'Coaching Klinik Proposal Hibah Eksternal PPM', 'Anggi Zafia, S.T., M.Eng', 'TS-2', 'https://drive.google.com/file/d/19PEHhTJfDzqkTzj3cTbgTgaJzguyYyGJ/view?usp=sharing', '2025-10-19 21:26:55', '2025-10-19 21:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_danas`
--

CREATE TABLE `penggunaan_danas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `penggunaan_dana` varchar(255) NOT NULL,
  `ts_2` bigint(20) NOT NULL DEFAULT 0,
  `ts_1` bigint(20) NOT NULL DEFAULT 0,
  `ts` bigint(20) NOT NULL DEFAULT 0,
  `bukti_pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunaan_danas`
--

INSERT INTO `penggunaan_danas` (`id`, `category`, `subcategory`, `penggunaan_dana`, `ts_2`, `ts_1`, `ts`, `bukti_pdf`, `created_at`, `updated_at`) VALUES
(1, 'operasional', 'Biaya Dosen (Gaji, Honor)', 'Biaya Dosen (Gaji, Honor)', 1000000000, 1500000000, 2000000000, 'expense-usage/bukti/Tabel 4 Keuangan Database SIS1.pdf', '2025-09-17 20:51:39', '2025-09-17 20:51:39'),
(2, 'penelitian_pkm', 'Biaya Penelitian', 'Biaya Penelitian', 100000000, 150000000, 300000000, 'expense-usage/bukti/Tabel 4 Keuangan Database SIS1.pdf', '2025-09-17 21:32:45', '2025-09-17 21:32:45'),
(3, 'investasi', 'Biaya Investasi SDM', 'Biaya Investasi SDM', 150000000, 200000000, 110000000, 'expense-usage/bukti/Tabel 4 Keuangan Database SIS1.pdf', '2025-09-23 01:58:47', '2025-09-23 01:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `perolehan_hkis`
--

CREATE TABLE `perolehan_hkis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis_hki` varchar(255) NOT NULL,
  `tahun_terbit` enum('TS','TS-1','TS-2') NOT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `link_bukti` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perolehan_hkis`
--

INSERT INTO `perolehan_hkis` (`id`, `judul`, `jenis_hki`, `tahun_terbit`, `tanggal_terbit`, `link_bukti`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Reservasi Kamar Hotel berbasis website dengan harga fluktuatif', 'Hak Cipta', 'TS', '2025-02-21', 'https://drive.google.com/file/d/1oV2E0SvSeiyw4a59aSA4DtHn4xf8au6K/view?usp=sharing', '2025-10-20 00:54:05', '2025-10-20 00:54:05'),
(2, 'Penerapan Artificial Intellegence untuk promosi UMKM', 'Hak Cipta', 'TS-2', '2026-01-02', NULL, '2026-01-02 09:58:53', '2026-01-02 09:58:53'),
(3, 'Sistem Reservasi Kamar Hotel berbasis website dengan harga fluktuatif', 'Hak Cipta', 'TS-1', '2026-01-01', 'htppss:wwwww', '2026-01-05 20:10:05', '2026-01-05 20:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `perolehan_pkms`
--

CREATE TABLE `perolehan_pkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis_hki` varchar(255) NOT NULL,
  `nama_dtpr` varchar(255) NOT NULL,
  `tahun_perolehan` enum('TS','TS-1','TS-2') NOT NULL,
  `bukti_dokumen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perolehan_pkms`
--

INSERT INTO `perolehan_pkms` (`id`, `judul`, `jenis_hki`, `nama_dtpr`, `tahun_perolehan`, `bukti_dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Website Profil Prawita Garden', 'Hak Cipta', 'Muhammad Lulu Latif Usmana, S.Pd., M.Han', 'TS', 'pkm/bukti/Website Profil Prawita Garden.pdf', '2025-10-07 21:59:05', '2025-10-07 21:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `peta_pemenuhan_cpls`
--

CREATE TABLE `peta_pemenuhan_cpls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cpl` enum('CPL 1','CPL 2','CPL 3','CPL 4','CPL 5','CPL 6','CPL 7','CPL 8','CPL 9','CPL 10') NOT NULL,
  `cpmk_choice` enum('CPMK 01','CPMK 02','CPMK 03','CPMK 04','CPMK 05','CPMK 06','CPMK 07','CPMK 08','CPMK 09','CPMK 10','CPMK 11','CPMK 12','CPMK 13','CPMK 14','LAINNYA') DEFAULT NULL,
  `cpmk_custom` varchar(255) DEFAULT NULL,
  `semester_1_mata_kuliah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_2_mata_kuliah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_3_mata_kuliah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_4_mata_kuliah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_5_mata_kuliah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_6_mata_kuliah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_7_mata_kuliah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_8_mata_kuliah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peta_pemenuhan_cpls`
--

INSERT INTO `peta_pemenuhan_cpls` (`id`, `cpl`, `cpmk_choice`, `cpmk_custom`, `semester_1_mata_kuliah_id`, `semester_2_mata_kuliah_id`, `semester_3_mata_kuliah_id`, `semester_4_mata_kuliah_id`, `semester_5_mata_kuliah_id`, `semester_6_mata_kuliah_id`, `semester_7_mata_kuliah_id`, `semester_8_mata_kuliah_id`, `created_at`, `updated_at`) VALUES
(1, 'CPL 1', 'CPMK 01', NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, '2025-12-06 09:57:59', '2025-12-06 09:57:59'),
(2, 'CPL 2', 'CPMK 01', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-02 09:46:43', '2026-01-02 09:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinans`
--

CREATE TABLE `pimpinans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tupoksi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pimpinans`
--

INSERT INTO `pimpinans` (`id`, `unit_kerja`, `nama`, `periode`, `pendidikan_terakhir`, `jabatan`, `tupoksi`, `created_at`, `updated_at`) VALUES
(1, 'UPPS', 'Dr. Tenia Wahyuningrum, S.Kom., M.T. ', '1 April 2025 - sekarang', 'S3', 'Direktur Universitas Telkom Kampus Purwokerto (Lektor Kepala )', '<ol start=\"1\"><li><p>Menjalankan standar mutu yang telah ditetapkan oleh Kampus Utama;</p></li><li><p>Memastikan pelaksanaan, pengembangan program, dan memberikan evaluasi strategi dan kebijakan Universitas Telkom;</p></li><li><p>Merancang dan mengembangkan kurikulum kekhasan Kampus Cabang dengan tetap berkoordinasi dengan Kampus Utama;</p></li><li><p>Memastikan ketersediaan perencanaan strategis yang meliputi kegiatan akademik (pendidikan, pengajaran, kemahasiswaan, penelitian, dan pengabdian masyarakat), serta Sumber Daya sesuai dengan perencanaan strategis Institusi dan berkoordinasi dengan semua Wakil Rektor, Fakultas terkait, dan unit lainnya, serta Institusi eksternal baik dalam dan luar negeri;</p></li><li><p>Memastikan rencana strategis Universitas Telkom dilaksanakan sesuai dengan arah dan strategi Universitas;</p></li><li><p>Melaksanakan dan mengembangkan program-program internasionalisasi yang dicanangkan oleh Universitas;</p></li><li><p>Melaksanakan dan mengembangkan program-program pengembangan potensi entrepreneurship dari sivitas akademika;</p></li><li><p>Memimpin pelaksanaan operasional sesuai dengan kewenangannya;</p></li><li><p>Merumuskan dan melakukan evaluasi anggaran;</p></li><li><p>Melakukan evaluasi performansi;</p></li><li><p>Melakukan pembinaan terhadap Prodi, Unit, Kelompok Keilmuan (KK), Dosen, dan Tenaga Kependidikan, dan berkoordinasi dengan Unit CoE;</p></li><li><p>Melakukan evaluasi dan performansi Unit, Dosen, dan Tenaga Kependidikan;</p></li><li><p>Menjalin kerja sama dengan pihak industri dan membuka peluang kerja sama untuk pengembangan keilmuan atau keprofesian, antara lain namun tidak terbatas pada Kerja Praktek, Magang, atau Praktek Kerja Lapangan; dan</p></li><li><p>Membuat laporan kegiatan secara berkala kepada Rektor.</p></li></ol>', '2025-09-17 04:41:02', '2025-09-17 04:41:02'),
(2, 'UPPS', 'Dr. Catur Nugroho, S.Sos., M.Ikom.', '1 April 2025 - sekarang', 'S3', 'Wakil Direktur Bidang Akademik dan Riset Kampus Purwokerto (Lektor Kepala)', '<ol start=\"1\"><li><p>Memastikan pelaksanaan, pengembangan program, dan memberikan evaluasi strategi dan kebijakan Universitas Telkom terkait dengan Akademik dan Riset;</p></li><li><p>Memastikan kualitas standar mutu penyelenggaraan pendidikan perguruan tinggi sesuai dengan Kampus Utama, standar nasional (APT dan BANPT) dan internasional;</p></li><li><p>Memastikan pelaksanaan kurikulum kekhasan Kampus Cabang sesuai dengan standar mutu yang ditetapkan;</p></li><li><p>Memastikan pelaksanaan, pengembangan program, dan memberikan evaluasi strategi dan kebijakan Universitas Telkom terkait riset, pengabdian kepada masyarakat, dan transfer teknologi sesuai dengan Rencana Strategis Universitas;</p></li><li><p>Merencanakan dan memimpin pelaksanaan kegiatan bagian yang ada di bawahnya;</p></li><li><p>Melakukan evaluasi dan performansi bagian yang ada di bawahnya; dan</p></li><li><p>Melakukan koordinasi dengan Wakil Direktur lainnya dalam menunjang pelaksanaan Bidang Sumber Daya, Admisi dan Kemahasiswaan, serta pihak terkait lainnya baik internal Kampus Cabang UPPS, Kampus Utama, Fakultas terkait, dan Eksternal (Instansi lainnya).</p></li></ol>', '2025-09-17 04:51:41', '2025-09-23 00:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi_penelitians`
--

CREATE TABLE `publikasi_penelitians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dtpr` varchar(255) NOT NULL,
  `judul_penelitian` varchar(255) NOT NULL,
  `jenis_publikasi` enum('Internasional Bereputasi','Internasional Tidak Bereputasi','Jurnal Sinta 1','Jurnal Sinta 2','Jurnal Sinta 3','Jurnal Sinta 4','Jurnal Sinta 5','Tidak Terakreditasi') NOT NULL,
  `tahun_terbit` enum('TS','TS-1','TS-2') NOT NULL,
  `link_bukti` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publikasi_penelitians`
--

INSERT INTO `publikasi_penelitians` (`id`, `nama_dtpr`, `judul_penelitian`, `jenis_publikasi`, `tahun_terbit`, `link_bukti`, `created_at`, `updated_at`) VALUES
(1, 'Taufik Nur Adi, M.T., Ph.D', 'Pengembangan Aplikasi Umpan Balik Mahasiswa Berbasis Website Modul Keluhan Pada Studi Kasus Program Studi S1 Sistem Informasi Telkom University Dengan Metode Iterative Incremental', 'Internasional Bereputasi', 'TS-1', 'https://journal.stieamkop.ac.id/index.php/seiko/article/view/5549/3655', '2025-10-19 22:59:01', '2025-10-19 22:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `rekognisi_lulusans`
--

CREATE TABLE `rekognisi_lulusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recognition_source` varchar(255) NOT NULL,
  `recognition_type` varchar(255) DEFAULT NULL,
  `ts_3` int(10) UNSIGNED DEFAULT NULL,
  `ts_2` int(10) UNSIGNED DEFAULT NULL,
  `ts_1` int(10) UNSIGNED DEFAULT NULL,
  `evidence_link` text DEFAULT NULL,
  `sort_order` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekognisi_lulusans`
--

INSERT INTO `rekognisi_lulusans` (`id`, `recognition_source`, `recognition_type`, `ts_3`, `ts_2`, `ts_1`, `evidence_link`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Dunia Industri', NULL, 1, 7, 1, NULL, 1, '2025-12-07 07:27:18', '2025-12-07 07:27:18'),
(2, 'Dunia Kerja', NULL, 10, 20, 30, NULL, 0, '2026-01-02 09:54:09', '2026-01-02 09:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `rerata_beban_dtprs`
--

CREATE TABLE `rerata_beban_dtprs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dtpr` varchar(255) NOT NULL,
  `sks_ps_sendiri` decimal(8,2) DEFAULT NULL,
  `sks_ps_lain_pt_sendiri` decimal(8,2) DEFAULT NULL,
  `sks_pt_lain` decimal(8,2) DEFAULT NULL,
  `sks_penelitian` decimal(8,2) DEFAULT NULL,
  `sks_pengabdian` decimal(8,2) DEFAULT NULL,
  `sks_manajemen_pt_sendiri` decimal(8,2) DEFAULT NULL,
  `sks_manajemen_pt_lain` decimal(8,2) DEFAULT NULL,
  `total_sks` decimal(8,2) DEFAULT NULL,
  `evidence` text DEFAULT NULL,
  `hki` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rerata_beban_dtprs`
--

INSERT INTO `rerata_beban_dtprs` (`id`, `nama_dtpr`, `sks_ps_sendiri`, `sks_ps_lain_pt_sendiri`, `sks_pt_lain`, `sks_penelitian`, `sks_pengabdian`, `sks_manajemen_pt_sendiri`, `sks_manajemen_pt_lain`, `total_sks`, `evidence`, `hki`, `created_at`, `updated_at`) VALUES
(3, 'Taufik Nur Adi, M.T., Ph.D', 0.13, 5.50, 0.00, 0.00, 0.00, 6.00, 0.00, 11.63, 'https://drive.google.com/drive/folders/16Oe_KdT3uQrfITIGCbH-Op6BcDEapt-_?usp=drive_link', 'Data HKI Diminta', '2026-01-02 05:00:22', '2026-01-02 05:00:22'),
(4, 'Mahazam Afrad, S.Kom., M.Kom', 12.50, 0.00, 0.00, 1.87, 0.38, 0.00, 0.00, 14.75, 'https://drive.google.com/drive/folders/1mmflspWyJAlkHuKocL3ArE7YZcEjCXY6?usp=drive_link', NULL, '2026-01-02 06:26:01', '2026-01-02 06:26:22'),
(5, 'Muhammad Lulu Latif Usmana, S.Pd., M.Han', 4.00, 5.80, 1.90, 0.00, 0.00, 2.40, 1.00, 15.10, 'https://drive.google.com/drive/folders/1mmflspWyJAlkHuKocL3ArE7YZcEjCXY6?usp=drive_link', NULL, '2026-01-02 09:38:44', '2026-01-02 09:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `rerata_masa_tunggu_luluses`
--

CREATE TABLE `rerata_masa_tunggu_luluses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `graduation_year_label` enum('TS-1','TS-2','TS-3') NOT NULL,
  `total_graduates` int(10) UNSIGNED NOT NULL,
  `tracked_graduates` int(10) UNSIGNED NOT NULL,
  `avg_waiting_time` decimal(4,2) NOT NULL,
  `response_rate` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rerata_masa_tunggu_luluses`
--

INSERT INTO `rerata_masa_tunggu_luluses` (`id`, `graduation_year_label`, `total_graduates`, `tracked_graduates`, `avg_waiting_time`, `response_rate`, `created_at`, `updated_at`) VALUES
(1, 'TS-3', 4, 3, 2.10, 75.00, '2025-12-06 12:48:11', '2026-01-02 09:48:39'),
(2, 'TS-2', 185, 103, 3.00, 55.68, '2025-12-06 12:48:34', '2025-12-06 12:50:03'),
(3, 'TS-1', 63, 24, 0.00, 38.10, '2025-12-06 12:49:00', '2025-12-06 12:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasaranas`
--

CREATE TABLE `sarana_prasaranas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prasarana` varchar(255) NOT NULL,
  `daya_tampung` int(11) DEFAULT NULL,
  `luas_ruang` int(11) DEFAULT NULL,
  `status` enum('milik','sewa') NOT NULL,
  `lisensi` enum('berlisensi','public_domain','tidak_berlisensi') NOT NULL,
  `perangkat` longtext DEFAULT NULL,
  `link_bukti` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarana_prasaranas`
--

INSERT INTO `sarana_prasaranas` (`id`, `nama_prasarana`, `daya_tampung`, `luas_ruang`, `status`, `lisensi`, `perangkat`, `link_bukti`, `created_at`, `updated_at`) VALUES
(1, 'Laboratorium Komputer Jaringan Komputer', 40, 72, 'milik', 'berlisensi', '<ol start=\"1\"><li><p>Perangkat keras :</p><ul><li><p>All In One PC Dell Inspirion AIO ADP Intel Core i7-1355U, Keyboard &amp; Mouse, jumlah 41 unit (40 baik, 1 rusak)</p></li><li><p>Cisco Router 800 Series c800m-Universalk9-Mz Advanced IP Services, jumlah 12 unit (baik)</p></li><li><p>Cisco Router 1800 Series c1800m-Universalk9-Mz Advanced IP Services, jumlah 1 unit (baik)</p></li><li><p>Cisco Router 1700 Series c1700m-Universalk9-Mz Advanced IP Services, jumlah 5 unit (baik)</p></li><li><p>Cisco Router 2600 Series c2600m-Universalk9-Mz Advanced IP Services, jumlah 2 unit (baik)</p></li><li><p>Mikrotik Routerboard RB951 Series, jumlah 6 unit (3 baik, 3 tidak lengkap)</p></li><li><p>Switch Hub TP-Link TL-SF1005D, jumlah 6 unit (baik)</p></li><li><p>Switch Cisco 2950 Series, jumlah 2 unit (baik)</p></li><li><p>Switch Hub D-Link Gigabit Switch, jumlah 2 unit (1 baik, 1 rusak)</p></li><li><p>Digital Cable Tester Network SC8108, jumlah 1 unit (baik)</p></li><li><p>Mouse Logitech, jumlah 13 unit (baik)</p></li></ul></li><li><p>Perangkat Lunak :</p><ul><li><p>OS Windows</p></li><li><p>Bandwidth up to 100 Mbps</p></li><li><p>VSCOde</p></li><li><p>NetBeans IDE</p></li><li><p>Cisco Packet Tracker</p></li><li><p>XAMPP</p></li><li><p>GNS3</p></li></ul></li><li><p>Lainnya :</p><ul><li><p>Projector Panasonic LB332 3300 Lumen, LCD Panel, XGA 1024x768, HDMI, Speaker 10W, jumlah 1 unit (baik)</p></li><li><p>Tang Crimping, jumlah 45 unit (43 baik, 2 rusak)</p></li><li><p>LAN Tester RJ45, jumlah 21 unit (12 baik, 9 rusak)</p></li><li><p>USB Converter 232, jumlah 7 unit (baik)</p></li><li><p>Kabel HDMI, jumlah 7 unit (baik)</p></li><li><p>Kabel RS232, jumlah 2 unit (baik)</p></li><li><p>Kabel Power + Adaptor 21-12 Unit, jumlah 12 unit (baik)</p></li><li><p>Kabel LAN, jumlah 2 unit (baik)</p></li><li><p>Kabel USB 232, jumlah 8 unit (baik)</p></li><li><p>AC Adaptor, jumlah 18 unit (16 baik, 2 rusak)</p></li><li><p>Motherboard MSI, jumlah 2 unit (baik)</p></li><li><p>Motherboard Gigabyte, jumlah 1 unit (baik)</p></li></ul></li></ol>', 'https://manmuti.telkomuniversity.ac.id/kebijakan-layanan-akses-internet/\nhttps://drive.google.com/file/d/1RNhHxJzMr6BjwnqGsAr0mg0a7v9ROGH4/view\nhttps://drive.google.com/drive/folders/1ssCAH4gp8td9fhR_VBxJ48Wl0DaHC2ZO\nhttps://drive.google.com/drive/folders/1vjxvw09kxikMz2Sjl3tKBqVFngV8Oloj?usp=drive_link\nhttps://drive.google.com/file/d/1t2PeVcBUqo3tWYZ62DIvyjmwjUkcGWBo/view?usp=drive_link\n', '2025-10-07 20:57:52', '2025-10-07 20:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana_penelitians`
--

CREATE TABLE `sarana_prasarana_penelitians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prasarana` varchar(255) NOT NULL,
  `daya_tampung` int(11) DEFAULT NULL,
  `luas_ruang` int(11) DEFAULT NULL,
  `status` enum('milik','sewa') NOT NULL,
  `lisensi` enum('berlisensi','public_domain','tidak_berlisensi') DEFAULT NULL,
  `perangkat` longtext DEFAULT NULL,
  `bukti_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarana_prasarana_penelitians`
--

INSERT INTO `sarana_prasarana_penelitians` (`id`, `nama_prasarana`, `daya_tampung`, `luas_ruang`, `status`, `lisensi`, `perangkat`, `bukti_file`, `created_at`, `updated_at`) VALUES
(1, 'Lab High Performance', 20, 72, 'milik', 'berlisensi', '<p>A. Perangkat Keras :</p><p>- Komputer AMD Ryzen 5 7600X, RAM 32GB, AMD Radeon RX6600 24GB, SSD 1TB, Windows 11 Pro, jumlah 40 unit (baik)</p><p>- Komputer Intel Core i5 12400F, RAM 16GB, NVIDIA GeForce GTX 1660 SUPER 14GB, SSD 100GB, Windows 10 Pro, jumlah 1 unit (baik)</p><p>- Keyboard dan Mouse Logitech K120, jumlah 41 unit (baik)</p><p>- Layar Monitor Samsung Curved CF390 24 Inch, jumlah 41 unit (baik)</p><p>- Switch Ethernet D-Link DGS-1024A 24 port, jumlah 2 unit (baik)</p><p>B. Perangkat Lunak :</p><p>- OS Windows</p><p>- Bandwidth up to 100 Mbps</p><p>- Android Studio</p><p>- XAMPP</p><p>- Laragon</p><p>- Wireshark</p><p>- Jupiter notebook</p><p>- Python</p><p>C. Lainnya :</p><p>- Smart TV TCL 75P635 75 Inch, jumlah 1 unit (baik)</p><p>- HDMI M-Tech HDMI 2.0 5 Meter, jumlah 1 unit (baik)</p><p>- AC LG 1,5 PK, jumlah 2 unit (baik)</p><p>- Meja Komputer jumlah 40 unit (baik)</p><p>- Kursi Chitose, jumlah 41 unit (baik)</p><p>- Meja Dosen Activ, jumlah 1 unit (baik)</p><p>- Kursi Dosen jumlah 1 unit (baik)</p><p>- Papan tulis (roda) jumlah 1 unit (baik)</p><p>- Papan tulis kecil jumlah 2 unit (baik)</p><p>- Loker 48 pintu Krisbow, jumlah 1 unit (baik)</p>', 'penelitian/sarana-prasarana/bukti/LAB_FM001_Daftar Inventaris Laboratorium - High Performance (1).pdf', '2025-10-16 00:49:09', '2025-10-16 00:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana_pkms`
--

CREATE TABLE `sarana_prasarana_pkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prasarana` varchar(255) NOT NULL,
  `daya_tampung` int(11) DEFAULT 0,
  `luas_ruang` int(11) DEFAULT 0,
  `status` enum('milik','sewa') NOT NULL,
  `lisensi` enum('berlisensi','public_domain','tidak_berlisensi') NOT NULL,
  `perangkat` longtext DEFAULT NULL,
  `bukti_files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`bukti_files`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarana_prasarana_pkms`
--

INSERT INTO `sarana_prasarana_pkms` (`id`, `nama_prasarana`, `daya_tampung`, `luas_ruang`, `status`, `lisensi`, `perangkat`, `bukti_files`, `created_at`, `updated_at`) VALUES
(2, 'High Performance', 20, 72, 'milik', 'berlisensi', '<p>A. Perangkat Keas :</p><p>- Komputer AMD Ryzen 5 7600X, RAM 32GB, AMD Radeon RX6600 24GB, SSD 1TB, Windows 11 Pro, jumlah 40 unit (baik)</p><p>- Komputer Intel Core i5 12400F, RAM 16GB, NVIDIA GeForce GTX 1660 SUPER 14GB, SSD 100GB, Windows 10 Pro, jumlah 1 unit (baik)</p><p>- Keyboard dan Mouse Logitech K120, jumlah 41 unit (baik)</p><p>- Layar Monitor Samsung Curved CF390 24 Inch, jumlah 41 unit (baik)</p><p>- Switch Ethernet D-Link DGS-1024A 24 port, jumlah 2 unit (baik)</p><p>B. Perangkat Lunak :</p><p>- OS Windows</p><p>- Bandwidth up to 100 Mbps</p><p>- Android Studio</p><p>- XAMPP</p><p>- Laragon</p><p>- Wireshark</p><p>- Jupiter notebook</p><p>- Python</p><p>C. Lainnya :</p><p>- Smart TV TCL 75P635 75 Inch, jumlah 1 unit (baik)</p><p>- HDMI M-Tech HDMI 2.0 5 Meter, jumlah 1 unit (baik)</p><p>- AC LG 1,5 PK, jumlah 2 unit (baik)</p><p>- Meja Komputer jumlah 40 unit (baik)</p><p>- Kursi Chitose, jumlah 41 unit (baik)</p><p>- Meja Dosen Activ, jumlah 1 unit (baik)</p><p>- Kursi Dosen jumlah 1 unit (baik)</p><p>- Papan tulis (roda) jumlah 1 unit (baik)</p><p>- Papan tulis kecil jumlah 2 unit (baik)</p><p>- Loker 48 pintu Krisbow, jumlah 1 unit (baik)</p>', '[\"pkm\\/sarana-prasarana\\/bukti\\/LAB_FM001_Daftar Inventaris Laboratorium - High Performance.pdf\"]', '2025-10-13 00:01:12', '2025-10-13 00:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7OcbwLRz6kZA3qAoPo4OsWuaLlCokJBnwV7E3j43', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSFRNNG9TZlBhcmxPVk5uNzhjNE9ZOGNCSmtWc0tVZDVTOGlKbDhTMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaWdtYSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiR1TWpnM1hMekZvWDY1SDd1Mkx0eFR1QzlNbUNBd3p1bDRrWFFLN3BXSnBwcWlRL1JZaTBQMiI7czo2OiJ0YWJsZXMiO2E6MzA6e3M6NDA6ImEwM2M0N2I5OTEwNTE2ZTE3M2U1NjViNjYxYzhhYzIxX2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1bml0X2tlcmphIjtzOjU6ImxhYmVsIjtzOjEwOiJVbml0IEtlcmphIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJuYW1hIjtzOjU6ImxhYmVsIjtzOjEwOiJOYW1hIEtldHVhIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo3OiJwZXJpb2RlIjtzOjU6ImxhYmVsIjtzOjE1OiJQZXJpb2RlIEphYmF0YW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE5OiJwZW5kaWRpa2FuX3RlcmFraGlyIjtzOjU6ImxhYmVsIjtzOjE5OiJQZW5kaWRpa2FuIFRlcmFraGlyIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo3OiJqYWJhdGFuIjtzOjU6ImxhYmVsIjtzOjE4OiJKYWJhdGFuIEZ1bmdzaW9uYWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjY1Mzc3MGUzYTQxNGViODVlODc1YjFjNDUxZTYxM2EyX2NvbHVtbnMiO2E6Njp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE2OiJzdW1iZXJfcGVuZGFuYWFuIjtzOjU6ImxhYmVsIjtzOjE2OiJTdW1iZXIgUGVuZGFuYWFuIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo4OiJjYXRlZ29yeSI7czo1OiJsYWJlbCI7czo4OiJLYXRlZ29yaSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMiI7czo1OiJsYWJlbCI7czo0OiJUUy0yIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0c18xIjtzOjU6ImxhYmVsIjtzOjQ6IlRTLTEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6InRzIjtzOjU6ImxhYmVsIjtzOjI6IlRTIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJidWt0aV9wZGYiO3M6NToibGFiZWwiO3M6NToiQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6ImY0NjU4YjcwYWU2YzZiNjU1Y2M0ODliY2RhMTY1OTNhX2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE1OiJwZW5nZ3VuYWFuX2RhbmEiO3M6NToibGFiZWwiO3M6MTU6IlBlbmdndW5hYW4gRGFuYSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMiI7czo1OiJsYWJlbCI7czo0OiJUUy0yIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0c18xIjtzOjU6ImxhYmVsIjtzOjQ6IlRTLTEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6InRzIjtzOjU6ImxhYmVsIjtzOjI6IlRTIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJidWt0aV9wZGYiO3M6NToibGFiZWwiO3M6NToiQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6Ijk0MTJhY2RlNTFhOTMxZjJmYThmNDA1YTYyMmJjNWZmX2NvbHVtbnMiO2E6MTE6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJuYW1hX2R0cHIiO3M6NToibGFiZWwiO3M6OToiTmFtYSBEVFBSIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNDoic2tzX3BzX3NlbmRpcmkiO3M6NToibGFiZWwiO3M6MTA6IlBTIFNlbmRpcmkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjIyOiJza3NfcHNfbGFpbl9wdF9zZW5kaXJpIjtzOjU6ImxhYmVsIjtzOjE5OiJQUyBMYWluLCBQVCBTZW5kaXJpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToic2tzX3B0X2xhaW4iO3M6NToibGFiZWwiO3M6NzoiUFQgTGFpbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6InNrc19wZW5lbGl0aWFuIjtzOjU6ImxhYmVsIjtzOjEwOiJQZW5lbGl0aWFuIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNDoic2tzX3BlbmdhYmRpYW4iO3M6NToibGFiZWwiO3M6MTA6IlBlbmdhYmRpYW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI0OiJza3NfbWFuYWplbWVuX3B0X3NlbmRpcmkiO3M6NToibGFiZWwiO3M6MjA6Ik1hbmFqZW1lbiBQVCBTZW5kaXJpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyMToic2tzX21hbmFqZW1lbl9wdF9sYWluIjtzOjU6ImxhYmVsIjtzOjE3OiJNYW5hamVtZW4gUFQgTGFpbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjg7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToidG90YWxfc2tzIjtzOjU6ImxhYmVsIjtzOjk6IlRvdGFsIFNLUyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjk7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoiZXZpZGVuY2UiO3M6NToibGFiZWwiO3M6ODoiRXZpZGVuY2UiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxMDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czozOiJoa2kiO3M6NToibGFiZWwiO3M6MzoiSEtJIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiIzNWJkMWJiZTkxYTZmZjU1OTU1Yjg3MDY2YmNhYzY1YV9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiamVuaXNfdGVuZGlrIjtzOjU6ImxhYmVsIjtzOjI1OiJKZW5pcyBUZW5hZ2EgS2VwZW5kaWRpa2FuIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjg6e3M6NDoidHlwZSI7czo1OiJncm91cCI7czo0OiJuYW1lIjtzOjUzOiJKdW1sYWggVGVuYWdhIEtlcGVuZGlkaWthbiBkZW5nYW4gUGVuZGlkaWthbiBUZXJha2hpciI7czo1OiJsYWJlbCI7czo1MzoiSnVtbGFoIFRlbmFnYSBLZXBlbmRpZGlrYW4gZGVuZ2FuIFBlbmRpZGlrYW4gVGVyYWtoaXIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7TjtzOjc6ImNvbHVtbnMiO2E6ODp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6InMzIjtzOjU6ImxhYmVsIjtzOjI6IlMzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJzMiI7czo1OiJsYWJlbCI7czoyOiJTMiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjoiczEiO3M6NToibGFiZWwiO3M6MjoiUzEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6ImQ0IjtzOjU6ImxhYmVsIjtzOjI6IkQ0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJkMyI7czo1OiJsYWJlbCI7czoyOiJEMyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjoiZDIiO3M6NToibGFiZWwiO3M6MjoiRDIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6ImQxIjtzOjU6ImxhYmVsIjtzOjI6IkQxIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czozOiJzbWEiO3M6NToibGFiZWwiO3M6MTA6IlNNQS9TTUsvTUEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fX1pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVuaXRfa2VyamEiO3M6NToibGFiZWwiO3M6MTA6IlVuaXQgS2VyamEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJpamF6YWhfZmlsZXMiO3M6NToibGFiZWwiO3M6OToiSm1sLiBGaWxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiIxMzc5ZjdhMDQxMjIzNTE3M2Q4MTFmYTczMTllMTNlNF9jb2x1bW5zIjthOjY6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNToiamVuaXNfdW5pdF9zcG1pIjtzOjU6ImxhYmVsIjtzOjk6IlVuaXQgU1BNSSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6Im5hbWFfdW5pdF9zcG1pIjtzOjU6ImxhYmVsIjtzOjE0OiJOYW1hIFVuaXQgU1BNSSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImRva3VtZW5fc3BtaSI7czo1OiJsYWJlbCI7czoxMjoiRG9rdW1lbiBTUE1JIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjg6e3M6NDoidHlwZSI7czo1OiJncm91cCI7czo0OiJuYW1lIjtzOjE5OiJBdWRpdG9yIC8gRnJla3VlbnNpIjtzOjU6ImxhYmVsIjtzOjE5OiJBdWRpdG9yIC8gRnJla3VlbnNpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047czo3OiJjb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNDoianVtbGFoX2F1ZGl0b3IiO3M6NToibGFiZWwiO3M6NjoiSnVtbGFoIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJjZXJ0aWZpZWQiO3M6NToibGFiZWwiO3M6OToiQ2VydGlmaWVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMzoibm9uX2NlcnRpZmllZCI7czo1OiJsYWJlbCI7czozOiJOb24iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE1OiJmcmVrdWVuc2lfYXVkaXQiO3M6NToibGFiZWwiO3M6MTE6IkF1ZGl0L1RhaHVuIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX19aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjIzOiJidWt0aV9jZXJ0aWZpZWRfYXVkaXRvciI7czo1OiJsYWJlbCI7czoyMzoiQnVrdGkgQ2VydGlmaWVkIEF1ZGl0b3IiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEzOiJsYXBvcmFuX2F1ZGl0IjtzOjU6ImxhYmVsIjtzOjEzOiJMYXBvcmFuIEF1ZGl0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiIxN2MxM2E4OWZjODg2NTBlMGQwOTk3YzI4ODQwM2QxN19jb2x1bW5zIjthOjc6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNDoia2F0ZWdvcmlfbGFiZWwiO3M6NToibGFiZWwiO3M6ODoiS2F0ZWdvcmkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6Im5hbWFfYXNhbCI7czo1OiJsYWJlbCI7czoxNDoiQXNhbCBNYWhhc2lzd2EiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InRzXzIiO3M6NToibGFiZWwiO3M6NDoiVFMtMiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMSI7czo1OiJsYWJlbCI7czo0OiJUUy0xIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJ0cyI7czo1OiJsYWJlbCI7czoyOiJUUyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidG90YWwiO3M6NToibGFiZWwiO3M6NToiVE9UQUwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJsaW5rX2J1a3RpIjtzOjU6ImxhYmVsIjtzOjEwOiJMaW5rIEJ1a3RpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI4YmM4Nzc1ZDdjNTg4MzI3NjNmODZkNmEwYTljMmNkNV9jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo4OiJrYXRlZ29yaSI7czo1OiJsYWJlbCI7czo4OiJLYXRlZ29yaSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMiI7czo1OiJsYWJlbCI7czo0OiJUUy0yIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0c18xIjtzOjU6ImxhYmVsIjtzOjQ6IlRTLTEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6InRzIjtzOjU6ImxhYmVsIjtzOjI6IlRTIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJqdW1sYWgiO3M6NToibGFiZWwiO3M6NjoiSnVtbGFoIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI0N2E2MDg4MWY4YTQyZWNlYTQyYjBjYTg2ZGJiMGQzN19jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToibWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MTE6Ik1hdGEgS3VsaWFoIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czozOiJza3MiO3M6NToibGFiZWwiO3M6MzoiU0tTIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo4OiJzZW1lc3RlciI7czo1OiJsYWJlbCI7czo4OiJTZW1lc3RlciI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6InByb2ZpbF9sdWx1c2FuIjtzOjU6ImxhYmVsIjtzOjE0OiJQcm9maWwgTHVsdXNhbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiNGM2MWZiZjFjMjc3MDAzZGNkOWUyNzdiYjM0M2MyMzFfY29sdW1ucyI7YToyOntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MzoiY3BsIjtzOjU6ImxhYmVsIjtzOjM6IkNQTCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjoicGwiO3M6NToibGFiZWwiO3M6MjoiUEwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjUyYWRjNzhhMjdmZDEzYjNmNTRmZGVjZTBjZDM5YjkzX2NvbHVtbnMiO2E6Mzp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjM6ImNwbCI7czo1OiJsYWJlbCI7czozOiJDUEwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcG1rX2xhYmVsIjtzOjU6ImxhYmVsIjtzOjQ6IkNQTUsiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6ODp7czo0OiJ0eXBlIjtzOjU6Imdyb3VwIjtzOjQ6Im5hbWUiO3M6ODoiU2VtZXN0ZXIiO3M6NToibGFiZWwiO3M6ODoiU2VtZXN0ZXIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7TjtzOjc6ImNvbHVtbnMiO2E6ODp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI3OiJzZW1lc3RlcjFDb3Vyc2UubWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MjoiUzEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI3OiJzZW1lc3RlcjJDb3Vyc2UubWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MjoiUzIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI3OiJzZW1lc3RlcjNDb3Vyc2UubWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MjoiUzMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI3OiJzZW1lc3RlcjRDb3Vyc2UubWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MjoiUzQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI3OiJzZW1lc3RlcjVDb3Vyc2UubWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MjoiUzUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI3OiJzZW1lc3RlcjZDb3Vyc2UubWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MjoiUzYiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI3OiJzZW1lc3RlcjdDb3Vyc2UubWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MjoiUzciO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo3O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI3OiJzZW1lc3RlcjhDb3Vyc2UubWF0YV9rdWxpYWgiO3M6NToibGFiZWwiO3M6MjoiUzgiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fX19czo0MDoiOGIyNTQ0YjJlZWUyZTg5NDc2MjE3ZjNkMWUwM2FkNzFfY29sdW1ucyI7YTo1OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjE6ImdyYWR1YXRpb25feWVhcl9sYWJlbCI7czo1OiJsYWJlbCI7czoxMToiVGFodW4gTHVsdXMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE1OiJ0b3RhbF9ncmFkdWF0ZXMiO3M6NToibGFiZWwiO3M6MTQ6Ikp1bWxhaCBMdWx1c2FuIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNzoidHJhY2tlZF9ncmFkdWF0ZXMiO3M6NToibGFiZWwiO3M6Mjg6Ikp1bWxhaCBMdWx1c2FuIHlhbmcgVGVybGFjYWsiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE2OiJhdmdfd2FpdGluZ190aW1lIjtzOjU6ImxhYmVsIjtzOjMwOiJSYXRhLXJhdGEgV2FrdHUgVHVuZ2d1IChCdWxhbikiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEzOiJyZXNwb25zZV9yYXRlIjtzOjU6ImxhYmVsIjtzOjE3OiJSZXNwb25zZSBSYXRlICglKSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiOTI1YzNjNDAxNjljOGQyYmQyNWMzNDgyNTBkMmQyOWJfY29sdW1ucyI7YTo4OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjE6ImdyYWR1YXRpb25feWVhcl9sYWJlbCI7czo1OiJsYWJlbCI7czoxMToiVGFodW4gTHVsdXMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE1OiJ0b3RhbF9ncmFkdWF0ZXMiO3M6NToibGFiZWwiO3M6MTQ6Ikp1bWxhaCBMdWx1c2FuIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNzoidHJhY2tlZF9ncmFkdWF0ZXMiO3M6NToibGFiZWwiO3M6Mjg6Ikp1bWxhaCBMdWx1c2FuIHlhbmcgVGVybGFjYWsiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjExOiJqb2JfaW5mb2tvbSI7czo1OiJsYWJlbCI7czoyODoiUHJvZmVzaSBLZXJqYSBCaWRhbmcgSW5mb2tvbSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTU6ImpvYl9ub25faW5mb2tvbSI7czo1OiJsYWJlbCI7czozMjoiUHJvZmVzaSBLZXJqYSBCaWRhbmcgTm9uIEluZm9rb20iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE5OiJzY29wZV9tdWx0aW5hdGlvbmFsIjtzOjU6ImxhYmVsIjtzOjI5OiJNdWx0aW5hc2lvbmFsIC8gSW50ZXJuYXNpb25hbCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjY7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6InNjb3BlX25hdGlvbmFsIjtzOjU6ImxhYmVsIjtzOjg6Ik5hc2lvbmFsIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxODoic2NvcGVfZW50cmVwcmVuZXVyIjtzOjU6ImxhYmVsIjtzOjk6IldpcmF1c2FoYSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiNWIyYzJhMjk0MmRmNjY0OGNkYWJhZjZjMTFiOTlkY2RfY29sdW1ucyI7YTo0OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoicm93SW5kZXgiO3M6NToibGFiZWwiO3M6MjoiTm8iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE1OiJqZW5pc19rZW1hbXB1YW4iO3M6NToibGFiZWwiO3M6MTU6IkplbmlzIEtlbWFtcHVhbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo4OntzOjQ6InR5cGUiO3M6NToiZ3JvdXAiO3M6NDoibmFtZSI7czoyOToiVGluZ2thdCBLZXB1YXNhbiBQZW5nZ3VuYSAoJSkiO3M6NToibGFiZWwiO3M6Mjk6IlRpbmdrYXQgS2VwdWFzYW4gUGVuZ2d1bmEgKCUpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047czo3OiJjb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJ2ZXJ5X2dvb2QiO3M6NToibGFiZWwiO3M6MTE6IlNhbmdhdCBCYWlrIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJnb29kIjtzOjU6ImxhYmVsIjtzOjQ6IkJhaWsiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6ImZhaXIiO3M6NToibGFiZWwiO3M6NToiQ3VrdXAiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InBvb3IiO3M6NToibGFiZWwiO3M6NjoiS3VyYW5nIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX19aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE0OiJmb2xsb3dfdXBfcGxhbiI7czo1OiJsYWJlbCI7czoyMToiUmVuY2FuYSBUaW5kYWsgTGFuanV0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI5NWVhMWQ4Y2RkNGZmZGE0YWE2MjIyZTYzYzg2MGFmOF9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo4OiJyb3dJbmRleCI7czo1OiJsYWJlbCI7czoyOiJObyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6Iml0ZW1fbGFiZWwiO3M6NToibGFiZWwiO3M6MzY6IlRhaHVuIEFrYWRlbWlrIC8gQmVudHVrIFBlbWJlbGFqYXJhbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo4OntzOjQ6InR5cGUiO3M6NToiZ3JvdXAiO3M6NDoibmFtZSI7czoxNDoiVGFodW4gQWthZGVtaWsiO3M6NToibGFiZWwiO3M6MTQ6IlRhaHVuIEFrYWRlbWlrIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047czo3OiJjb2x1bW5zIjthOjM6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0c18yIjtzOjU6ImxhYmVsIjtzOjQ6IlRTLTIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InRzXzEiO3M6NToibGFiZWwiO3M6NDoiVFMtMSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjoidHMiO3M6NToibGFiZWwiO3M6MjoiVFMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fX1pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTM6ImV2aWRlbmNlX2xpbmsiO3M6NToibGFiZWwiO3M6MTA6IkxpbmsgQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6ImFkMzQzODE4MWYyMTAwZGQ4YjgxZDliODA3YTdjNzhjX2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjg6InJvd0luZGV4IjtzOjU6ImxhYmVsIjtzOjI6Ik5vIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxODoicmVjb2duaXRpb25fc291cmNlIjtzOjU6ImxhYmVsIjtzOjE2OiJTdW1iZXIgUmVrb2duaXNpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNjoicmVjb2duaXRpb25fdHlwZSI7czo1OiJsYWJlbCI7czozNToiSmVuaXMgUGVuZ2FrdWFuIEx1bHVzYW4gKFJla29nbmlzaSkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6ODp7czo0OiJ0eXBlIjtzOjU6Imdyb3VwIjtzOjQ6Im5hbWUiO3M6MTQ6IlRhaHVuIEFrYWRlbWlrIjtzOjU6ImxhYmVsIjtzOjE0OiJUYWh1biBBa2FkZW1payI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO3M6NzoiY29sdW1ucyI7YTozOntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMyI7czo1OiJsYWJlbCI7czo0OiJUUy0zIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0c18yIjtzOjU6ImxhYmVsIjtzOjQ6IlRTLTIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InRzXzEiO3M6NToibGFiZWwiO3M6NDoiVFMtMSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMzoiZXZpZGVuY2VfbGluayI7czo1OiJsYWJlbCI7czoxMDoiTGluayBCdWt0aSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiMmMzYzczY2IwMDFlNDM2OGRmMDQ5ZGE2NzBjNDA2MjRfY29sdW1ucyI7YTo2OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6Im5hbWFfcHJhc2FyYW5hIjtzOjU6ImxhYmVsIjtzOjE0OiJOYW1hIFByYXNhcmFuYSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo4OntzOjQ6InR5cGUiO3M6NToiZ3JvdXAiO3M6NDoibmFtZSI7czoxNjoiS2FwYXNpdGFzICYgTHVhcyI7czo1OiJsYWJlbCI7czoxNjoiS2FwYXNpdGFzICYgTHVhcyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO3M6NzoiY29sdW1ucyI7YToyOntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImRheWFfdGFtcHVuZyI7czo1OiJsYWJlbCI7czo0OiJEYXlhIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoibHVhc19ydWFuZyI7czo1OiJsYWJlbCI7czoxMDoiTHVhcyAobcKyKSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJzdGF0dXMiO3M6NToibGFiZWwiO3M6NjoiU3RhdHVzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo3OiJsaXNlbnNpIjtzOjU6ImxhYmVsIjtzOjc6Ikxpc2Vuc2kiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6InBlcmFuZ2thdCI7czo1OiJsYWJlbCI7czo5OiJQZXJhbmdrYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJidWt0aV9maWxlIjtzOjU6ImxhYmVsIjtzOjU6IkJ1a3RpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiIyZDZiYTYwYmZiNTgxNzUzMGNmMTdhZTQ1NzFiM2U2ZF9jb2x1bW5zIjthOjEwOntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToibmFtYV9kdHByIjtzOjU6ImxhYmVsIjtzOjk6Ik5hbWEgRFRQUiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTY6Imp1ZHVsX3BlbmVsaXRpYW4iO3M6NToibGFiZWwiO3M6NToiSnVkdWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE2OiJqdW1sYWhfbWFoYXNpc3dhIjtzOjU6ImxhYmVsIjtzOjM6Ik1ocyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjI6ImplbmlzX2hpYmFoX3BlbmVsaXRpYW4iO3M6NToibGFiZWwiO3M6MTE6IkplbmlzIEhpYmFoIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJzdW1iZXIiO3M6NToibGFiZWwiO3M6NjoiU3VtYmVyIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJkdXJhc2kiO3M6NToibGFiZWwiO3M6NjoiRHVyYXNpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0c18yIjtzOjU6ImxhYmVsIjtzOjQ6IlRTLTIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo3O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InRzXzEiO3M6NToibGFiZWwiO3M6NDoiVFMtMSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjg7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjoidHMiO3M6NToibGFiZWwiO3M6MjoiVFMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo5O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJsaW5rX2J1a3RpIjtzOjU6ImxhYmVsIjtzOjEwOiJMaW5rIEJ1a3RpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiJlNWFjY2E5NjEzNTBjNDcyNGJlYjQxNTAxZGEyZWY3Yl9jb2x1bW5zIjthOjQ6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyMzoiamVuaXNfcGVuZ2VtYmFuZ2FuX2R0cHIiO3M6NToibGFiZWwiO3M6MjM6IkplbmlzIFBlbmdlbWJhbmdhbiBEVFBSIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJuYW1hX2R0cHIiO3M6NToibGFiZWwiO3M6OToiTmFtYSBEVFBSIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNDoidGFodW5fYWthZGVtaWsiO3M6NToibGFiZWwiO3M6MTQ6IlRhaHVuIEFrYWRlbWlrIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoibGlua19idWt0aSI7czo1OiJsYWJlbCI7czoxMDoiTGluayBCdWt0aSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiM2Q0YTI3MWY4ZGU2YWVkMzhjYTIxYTgwMGZkYjFkMjRfY29sdW1ucyI7YTo4OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTU6Imp1ZHVsX2tlcmphc2FtYSI7czo1OiJsYWJlbCI7czo1OiJKdWR1bCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTU6Im1pdHJhX2tlcmphc2FtYSI7czo1OiJsYWJlbCI7czo1OiJNaXRyYSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6Njoic3VtYmVyIjtzOjU6ImxhYmVsIjtzOjY6IlN1bWJlciI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NjoiZHVyYXNpIjtzOjU6ImxhYmVsIjtzOjY6IkR1cmFzaSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMiI7czo1OiJsYWJlbCI7czo0OiJUUy0yIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0c18xIjtzOjU6ImxhYmVsIjtzOjQ6IlRTLTEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6InRzIjtzOjU6ImxhYmVsIjtzOjI6IlRTIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToiYnVrdGlfZmlsZXMiO3M6NToibGFiZWwiO3M6NToiQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjJmZDViYmU1ZDg4ZjI3NTI1YWFjYTUzYmVhMzQ5NDZhX2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6Im5hbWFfZHRwciI7czo1OiJsYWJlbCI7czo5OiJOYW1hIERUUFIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE2OiJqdWR1bF9wZW5lbGl0aWFuIjtzOjU6ImxhYmVsIjtzOjU6Ikp1ZHVsIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNToiamVuaXNfcHVibGlrYXNpIjtzOjU6ImxhYmVsIjtzOjE1OiJKZW5pcyBQdWJsaWthc2kiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJ0YWh1bl90ZXJiaXQiO3M6NToibGFiZWwiO3M6NToiVGFodW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJsaW5rX2J1a3RpIjtzOjU6ImxhYmVsIjtzOjEwOiJMaW5rIEJ1a3RpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiJjNWJlMmNjZjczNmIyYmIzMDJhYjhhOTBkNTM3NzI3NV9jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJqdWR1bCI7czo1OiJsYWJlbCI7czo1OiJKdWR1bCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToiamVuaXNfaGtpIjtzOjU6ImxhYmVsIjtzOjk6IkplbmlzIEhLSSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6InRhaHVuX3RlcmJpdCI7czo1OiJsYWJlbCI7czo1OiJUYWh1biI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6InRhbmdnYWxfdGVyYml0IjtzOjU6ImxhYmVsIjtzOjE0OiJUYW5nZ2FsIFRlcmJpdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImxpbmtfYnVrdGkiO3M6NToibGFiZWwiO3M6MTA6IkxpbmsgQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6ImQ5ZTUwYmNjZmFlYjE5NWYwMWRlZjc4MzU3ZDgyN2UxX2NvbHVtbnMiO2E6Njp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE0OiJuYW1hX3ByYXNhcmFuYSI7czo1OiJsYWJlbCI7czoxNDoiTmFtYSBQcmFzYXJhbmEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6ODp7czo0OiJ0eXBlIjtzOjU6Imdyb3VwIjtzOjQ6Im5hbWUiO3M6MTY6IkthcGFzaXRhcyAmIEx1YXMiO3M6NToibGFiZWwiO3M6MTY6IkthcGFzaXRhcyAmIEx1YXMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7TjtzOjc6ImNvbHVtbnMiO2E6Mjp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJkYXlhX3RhbXB1bmciO3M6NToibGFiZWwiO3M6NDoiRGF5YSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6Imx1YXNfcnVhbmciO3M6NToibGFiZWwiO3M6MTA6Ikx1YXMgKG3CsikiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fX1pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6Njoic3RhdHVzIjtzOjU6ImxhYmVsIjtzOjY6IlN0YXR1cyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NzoibGlzZW5zaSI7czo1OiJsYWJlbCI7czo3OiJMaXNlbnNpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJwZXJhbmdrYXQiO3M6NToibGFiZWwiO3M6OToiUGVyYW5na2F0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToiYnVrdGlfZmlsZXMiO3M6NToibGFiZWwiO3M6NToiQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjI4ZGFjYzA5ZDg5NDJjMzIxYjM4YzYyZWEwMmJkNjIzX2NvbHVtbnMiO2E6MTA6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJuYW1hX2R0cHIiO3M6NToibGFiZWwiO3M6OToiTmFtYSBEVFBSIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJqdWR1bF9wa20iO3M6NToibGFiZWwiO3M6OToiSnVkdWwgUEtNIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNjoianVtbGFoX21haGFzaXN3YSI7czo1OiJsYWJlbCI7czozOiJNaHMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE1OiJqZW5pc19oaWJhaF9wa20iO3M6NToibGFiZWwiO3M6MTE6IkplbmlzIEhpYmFoIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToic3VtYmVyX2RhbmEiO3M6NToibGFiZWwiO3M6NjoiU3VtYmVyIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJkdXJhc2kiO3M6NToibGFiZWwiO3M6NjoiRHVyYXNpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0c18yIjtzOjU6ImxhYmVsIjtzOjQ6IlRTLTIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo3O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InRzXzEiO3M6NToibGFiZWwiO3M6NDoiVFMtMSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjg7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjoidHMiO3M6NToibGFiZWwiO3M6MjoiVFMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo5O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6ImJ1a3RpX3BkZiI7czo1OiJsYWJlbCI7czo1OiJCdWt0aSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiZDEwODBmMzYyYThjZjA1MzU0ZDZiZDRhM2VjODAxOTBfY29sdW1ucyI7YTo4OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTU6Imp1ZHVsX2tlcmphc2FtYSI7czo1OiJsYWJlbCI7czo1OiJKdWR1bCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTU6Im1pdHJhX2tlcmphc2FtYSI7czo1OiJsYWJlbCI7czo1OiJNaXRyYSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6Im5hbWFfZG9zZW4iO3M6NToibGFiZWwiO3M6MTA6Ik5hbWEgRG9zZW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjY6InN1bWJlciI7czo1OiJsYWJlbCI7czo2OiJTdW1iZXIiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjY6ImR1cmFzaSI7czo1OiJsYWJlbCI7czo2OiJEdXJhc2kiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6ODp7czo0OiJ0eXBlIjtzOjU6Imdyb3VwIjtzOjQ6Im5hbWUiO3M6MTk6IlBlbmRhbmFhbiAoUnAganV0YSkiO3M6NToibGFiZWwiO3M6MTk6IlBlbmRhbmFhbiAoUnAganV0YSkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7TjtzOjc6ImNvbHVtbnMiO2E6Mzp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InRzXzIiO3M6NToibGFiZWwiO3M6NDoiVFMtMiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMSI7czo1OiJsYWJlbCI7czo0OiJUUy0xIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJ0cyI7czo1OiJsYWJlbCI7czoyOiJUUyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319fWk6NjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJzdGF0dXMiO3M6NToibGFiZWwiO3M6NjoiU3RhdHVzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJidWt0aSI7czo1OiJsYWJlbCI7czo1OiJCdWt0aSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiZjFkYTBlZjc1OTQxZDZmNmQyMWI5NWQzNzcwZjY5YTRfY29sdW1ucyI7YTo1OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToibmFtYV9kdHByIjtzOjU6ImxhYmVsIjtzOjk6Ik5hbWEgRFRQUiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToianVkdWwiO3M6NToibGFiZWwiO3M6NToiSnVkdWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJkaXNlbWluYXNpIjtzOjU6ImxhYmVsIjtzOjEwOiJEaXNlbWluYXNpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ3YWt0dSI7czo1OiJsYWJlbCI7czo1OiJXYWt0dSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImxpbmtfYnVrdGkiO3M6NToibGFiZWwiO3M6MTA6IkxpbmsgQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjU0YjAwYTBmZDUwMThkMDM4MzE2ZTI3MGQ3NDhiYThjX2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6Imp1ZHVsIjtzOjU6ImxhYmVsIjtzOjU6Ikp1ZHVsIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJqZW5pc19oa2kiO3M6NToibGFiZWwiO3M6OToiSmVuaXMgSEtJIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJuYW1hX2R0cHIiO3M6NToibGFiZWwiO3M6OToiTmFtYSBEVFBSIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNToidGFodW5fcGVyb2xlaGFuIjtzOjU6ImxhYmVsIjtzOjU6IlRhaHVuIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMzoiYnVrdGlfZG9rdW1lbiI7czo1OiJsYWJlbCI7czo1OiJCdWt0aSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiNGNiZTkxZTEzYzZjNWQwMzczMTJiMzI3MWEzY2E3ZjZfY29sdW1ucyI7YTo2OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6Im5hbWFfcHJhc2FyYW5hIjtzOjU6ImxhYmVsIjtzOjE0OiJOYW1hIFByYXNhcmFuYSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo4OntzOjQ6InR5cGUiO3M6NToiZ3JvdXAiO3M6NDoibmFtZSI7czoxMToiRGF5YSAmIEx1YXMiO3M6NToibGFiZWwiO3M6MTE6IkRheWEgJiBMdWFzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047czo3OiJjb2x1bW5zIjthOjI6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiZGF5YV90YW1wdW5nIjtzOjU6ImxhYmVsIjtzOjQ6IkRheWEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJsdWFzX3J1YW5nIjtzOjU6ImxhYmVsIjtzOjEwOiJMdWFzIChtwrIpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX19aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjY6InN0YXR1cyI7czo1OiJsYWJlbCI7czo2OiJTdGF0dXMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjc6Imxpc2Vuc2kiO3M6NToibGFiZWwiO3M6NzoiTGlzZW5zaSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToicGVyYW5na2F0IjtzOjU6ImxhYmVsIjtzOjk6IlBlcmFuZ2thdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImxpbmtfYnVrdGkiO3M6NToibGFiZWwiO3M6MTA6IkxpbmsgQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjgwZTkxOWFhNmM2ZDlmYTZlZWVhM2YwMzU1YzgzMzZhX2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE3OiJqZW5pc190YXRhX2tlbG9sYSI7czo1OiJsYWJlbCI7czoxNzoiSmVuaXMgVGF0YSBLZWxvbGEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjIxOiJuYW1hX3Npc3RlbV9pbmZvcm1hc2kiO3M6NToibGFiZWwiO3M6MjE6Ik5hbWEgU2lzdGVtIEluZm9ybWFzaSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToiYWtzZXMiO3M6NToibGFiZWwiO3M6NToiQWtzZXMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1bml0X2tlcmphIjtzOjU6ImxhYmVsIjtzOjEwOiJVbml0IEtlcmphIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoibGlua19idWt0aSI7czo1OiJsYWJlbCI7czoxMDoiTGluayBCdWt0aSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiZDliOTMzMjBjNDI0ODUyNGY2ZWQxZmMwMmM3Mjk0MTRfY29sdW1ucyI7YTozOntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoia2F0ZWdvcmkiO3M6NToibGFiZWwiO3M6ODoiS2F0ZWdvcmkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InZpc2kiO3M6NToibGFiZWwiO3M6NDoiVmlzaSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoibWlzaSI7czo1OiJsYWJlbCI7czo0OiJNaXNpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX19czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1767374640);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iXz4qanPSWj34jGxYvEwgXGCWCgnYRdiBxQ9Iucs', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUkhkMTVSOHpQVTBnYnRlc2dXOUVLQVJhdVBGenduaUVKOWQxR3p5WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaWdtYS9zdHVkZW50LWRhdGEtcmVwb3J0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHVNamczWEx6Rm9YNjVIN3UyTHR4VHVDOU1tQ0F3enVsNGtYUUs3cFdKcHBxaVEvUllpMFAyIjtzOjY6InRhYmxlcyI7YTo0OntzOjQwOiJjNWJlMmNjZjczNmIyYmIzMDJhYjhhOTBkNTM3NzI3NV9jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJqdWR1bCI7czo1OiJsYWJlbCI7czo1OiJKdWR1bCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToiamVuaXNfaGtpIjtzOjU6ImxhYmVsIjtzOjk6IkplbmlzIEhLSSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6InRhaHVuX3RlcmJpdCI7czo1OiJsYWJlbCI7czo1OiJUYWh1biI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6InRhbmdnYWxfdGVyYml0IjtzOjU6ImxhYmVsIjtzOjE0OiJUYW5nZ2FsIFRlcmJpdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImxpbmtfYnVrdGkiO3M6NToibGFiZWwiO3M6MTA6IkxpbmsgQnVrdGkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6Ijk0MTJhY2RlNTFhOTMxZjJmYThmNDA1YTYyMmJjNWZmX2NvbHVtbnMiO2E6MTE6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJuYW1hX2R0cHIiO3M6NToibGFiZWwiO3M6OToiTmFtYSBEVFBSIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNDoic2tzX3BzX3NlbmRpcmkiO3M6NToibGFiZWwiO3M6MTA6IlBTIFNlbmRpcmkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjIyOiJza3NfcHNfbGFpbl9wdF9zZW5kaXJpIjtzOjU6ImxhYmVsIjtzOjE5OiJQUyBMYWluLCBQVCBTZW5kaXJpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToic2tzX3B0X2xhaW4iO3M6NToibGFiZWwiO3M6NzoiUFQgTGFpbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6InNrc19wZW5lbGl0aWFuIjtzOjU6ImxhYmVsIjtzOjEwOiJQZW5lbGl0aWFuIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNDoic2tzX3BlbmdhYmRpYW4iO3M6NToibGFiZWwiO3M6MTA6IlBlbmdhYmRpYW4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI0OiJza3NfbWFuYWplbWVuX3B0X3NlbmRpcmkiO3M6NToibGFiZWwiO3M6MjA6Ik1hbmFqZW1lbiBQVCBTZW5kaXJpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyMToic2tzX21hbmFqZW1lbl9wdF9sYWluIjtzOjU6ImxhYmVsIjtzOjE3OiJNYW5hamVtZW4gUFQgTGFpbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjg7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToidG90YWxfc2tzIjtzOjU6ImxhYmVsIjtzOjk6IlRvdGFsIFNLUyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjk7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoiZXZpZGVuY2UiO3M6NToibGFiZWwiO3M6ODoiRXZpZGVuY2UiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxMDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czozOiJoa2kiO3M6NToibGFiZWwiO3M6MzoiSEtJIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiJmNDY1OGI3MGFlNmM2YjY1NWNjNDg5YmNkYTE2NTkzYV9jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNToicGVuZ2d1bmFhbl9kYW5hIjtzOjU6ImxhYmVsIjtzOjE1OiJQZW5nZ3VuYWFuIERhbmEiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InRzXzIiO3M6NToibGFiZWwiO3M6NDoiVFMtMiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMSI7czo1OiJsYWJlbCI7czo0OiJUUy0xIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJ0cyI7czo1OiJsYWJlbCI7czoyOiJUUyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToiYnVrdGlfcGRmIjtzOjU6ImxhYmVsIjtzOjU6IkJ1a3RpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI2NTM3NzBlM2E0MTRlYjg1ZTg3NWIxYzQ1MWU2MTNhMl9jb2x1bW5zIjthOjY6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxNjoic3VtYmVyX3BlbmRhbmFhbiI7czo1OiJsYWJlbCI7czoxNjoiU3VtYmVyIFBlbmRhbmFhbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoiY2F0ZWdvcnkiO3M6NToibGFiZWwiO3M6ODoiS2F0ZWdvcmkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InRzXzIiO3M6NToibGFiZWwiO3M6NDoiVFMtMiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoidHNfMSI7czo1OiJsYWJlbCI7czo0OiJUUy0xIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJ0cyI7czo1OiJsYWJlbCI7czoyOiJUUyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToiYnVrdGlfcGRmIjtzOjU6ImxhYmVsIjtzOjU6IkJ1a3RpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX19czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1767669370),
('lJULcpofmitYo2HzKIg2zKDvZEMrrtz3qoVHqM23', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieWNCSTVrajE4NXBvUXMxdHBQaGt2bWV6MTFkVWwwNm1Jc0M3NEIwQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767369829),
('wvzNm87LZum6xIKXCTDk3fQuLBFoPBDPpBgJxpxk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUEdGZ0pKaDFuTUhIa25waDAyZ0x6djFZaVBPajlaSWpHbURidVpTYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767371037);

-- --------------------------------------------------------

--
-- Table structure for table `sistem_tata_kelolas`
--

CREATE TABLE `sistem_tata_kelolas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_tata_kelola` varchar(255) NOT NULL,
  `nama_sistem_informasi` varchar(255) NOT NULL,
  `akses` enum('Internet','Lokal') NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `link_bukti` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sistem_tata_kelolas`
--

INSERT INTO `sistem_tata_kelolas` (`id`, `jenis_tata_kelola`, `nama_sistem_informasi`, `akses`, `unit_kerja`, `link_bukti`, `created_at`, `updated_at`) VALUES
(1, 'E-learning', 'LMS Celoe', 'Internet', 'Akademik', 'https://lms.telkomuniversity.ac.id/', '2025-10-03 05:14:05', '2025-10-03 05:14:05'),
(2, 'Akademik', 'Igracias', 'Internet', 'Akademik', 'https://igracias.telkomuniversity.ac.id/', '2025-10-03 05:15:14', '2025-10-03 05:15:14'),
(3, 'MBKM', 'Simka', 'Internet', 'Akademik', 'https://simka.telkomuniversity.ac.id/', '2025-10-03 05:16:33', '2025-10-03 05:16:33'),
(4, 'Perpustakaan', 'OpenLib', 'Internet', 'Perpustakaan', 'https://openlibrary.telkomuniversity.ac.id/', '2026-01-02 10:04:31', '2026-01-02 10:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `unit_spmis`
--

CREATE TABLE `unit_spmis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_unit_spmi` varchar(255) NOT NULL,
  `nama_unit_spmi` varchar(255) NOT NULL,
  `dokumen_spmi` text DEFAULT NULL,
  `bukti_certified_auditor` text DEFAULT NULL,
  `laporan_audit` text DEFAULT NULL,
  `jumlah_auditor` int(11) DEFAULT NULL,
  `certified` int(11) DEFAULT NULL,
  `non_certified` int(11) DEFAULT NULL,
  `frekuensi_audit` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_spmis`
--

INSERT INTO `unit_spmis` (`id`, `jenis_unit_spmi`, `nama_unit_spmi`, `dokumen_spmi`, `bukti_certified_auditor`, `laporan_audit`, `jumlah_auditor`, `certified`, `non_certified`, `frekuensi_audit`, `created_at`, `updated_at`) VALUES
(1, 'UPPS', 'Unit SPM, Perencanaan dan Pengembangan Pembelajaran', 'https://drive.google.com/drive/folders/1nKO8TGTPUy83kUWSPimsQpk4e23qZynr', 'https://drive.google.com/drive/folders/1o6qx-WIEcsVlzNo3zUUuEN9vD0Cy7LXQ', 'https://drive.google.com/drive/folders/1tNrAmrxSUG3kLUQPzFz_pFjFgmzU-LQK', 32, 7, 25, 1, '2025-09-23 00:29:10', '2025-09-23 01:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$12$uMjg3XLzFoX65H7u2LtxTuC9MmCAwzul4kXQK7pWJppqiQ/RYi0P2', NULL, '2025-09-17 01:56:56', '2025-09-17 01:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misis`
--

CREATE TABLE `visi_misis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi_misis`
--

INSERT INTO `visi_misis` (`id`, `kategori`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(1, 'pt', 'Menjadi Global Excellence Entrepreneurial University, yang berkontribusi pada pemenuhan tujuan pembangunan\nberkelanjutan.', '<ol start=\"1\"><li><p>Menyelenggarakan sistem pendidikan dengan dasar keilmuan yang kuat, bersinergi antar disiplin ilmu, berwawasan kewirausahaan, dan berorientasi global (global innovative entrepreneurial education system).</p></li><li><p>Menyelenggarakan penelitian lanjut (advance research) yang menghasilkan pengetahuan baru (new knowledge) dan produk–produk intelektual bernilai ekonomi (intellectual economic value products) sesuai kebutuhan bangsa dan dunia.</p></li><li><p>Turut serta dalam meningkatkan kemajuan bangsa dan dunia melalui penerapan ilmu pengetahuan yang dikembangkan dan mendorong menciptakan unit-unit bisnis baru (new business incubators).</p></li><li><p>Menjalankan fungsi perguruan tinggi secara harmonis (harmony) antara kepentingan ekonomi, sosial, dan lingkungan (economic, social, and environment interests).</p></li></ol>', '2025-10-03 04:54:55', '2025-10-03 04:54:55'),
(2, 'upps', 'Menjadi Unit Pengelola Program Studi unggul dalam pengembangan ilmu pengetahuan, teknologi, kewirausahaan, dan budaya Nusantara yang berkontribusi aktif dalam pencapaian tujuan pembangunan berkelanjutan tahun 2028', '<ol start=\"1\"><li><p>Menyelenggarakan program pendidikan, penelitian, dan pengabdian kepada masyarakat yang inovatif serta relevan untuk mengembangkan ilmu pengetahuan dan teknologi.</p></li><li><p>Menjalin kolaborasi dengan pemangku kepentingan untuk mendukung pembangunan berkelanjutan.</p></li><li><p>Menumbuhkan jiwa kewirausahaan dan inovasi yang berakar pada nilai budaya nusantara.</p></li></ol>', '2025-10-03 04:56:22', '2025-10-03 04:56:22'),
(3, 'keilmuan_ps', 'Menjadi Program Studi Sistem Informasi yang unggul dan berkelas dunia yang mengedepankan SDGs di tahun 2028.', '<ol start=\"1\"><li><p>Menyelenggarakan sistem pendidikan bertaraf internasional berbasis research dan entrepreneurship yang mendorong terbentuknya kompetensi yang mendukung SDGs</p></li><li><p>Menghasilkan lulusan sistem informasi yang unggul, beretika, profesional, adaptif dan berjiwa entrepreneur yang mampu memberikan solusi berbasis teknologi informasi guna mendukung SDGs</p></li><li><p>Memanfaatkan, mengembangkan, dan menyebarluaskan bidang ilmu sistem informasi melalui hubungan kerjasama timbal balik dengan masyarakat, pemerintah, dan industri dengan mengedepankan SDGs</p></li></ol>', '2025-10-03 04:57:00', '2025-10-03 04:57:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `data_mahasiswas`
--
ALTER TABLE `data_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseminasi_pkms`
--
ALTER TABLE `diseminasi_pkms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fleksibilitas_pembelajarans`
--
ALTER TABLE `fleksibilitas_pembelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fundings`
--
ALTER TABLE `fundings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_pembelajarans`
--
ALTER TABLE `isi_pembelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keberagaman_asal_mahasiswas`
--
ALTER TABLE `keberagaman_asal_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepuasan_pengguna_lulusans`
--
ALTER TABLE `kepuasan_pengguna_lulusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerjasama_penelitians`
--
ALTER TABLE `kerjasama_penelitians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerjasama_pkms`
--
ALTER TABLE `kerjasama_pkms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesesuaian_bidang_kerjas`
--
ALTER TABLE `kesesuaian_bidang_kerjas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi_mahasiswas`
--
ALTER TABLE `kondisi_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kualifikasi_tendiks`
--
ALTER TABLE `kualifikasi_tendiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembiayaan_penelitians`
--
ALTER TABLE `pembiayaan_penelitians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembiayaan_pkms`
--
ALTER TABLE `pembiayaan_pkms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemetaan_cpl_pls`
--
ALTER TABLE `pemetaan_cpl_pls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemetaan_cpl_pls_cpl_pl_unique` (`cpl`,`pl`);

--
-- Indexes for table `pengembangan_dtpr_penelitians`
--
ALTER TABLE `pengembangan_dtpr_penelitians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggunaan_danas`
--
ALTER TABLE `penggunaan_danas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perolehan_hkis`
--
ALTER TABLE `perolehan_hkis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perolehan_pkms`
--
ALTER TABLE `perolehan_pkms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peta_pemenuhan_cpls`
--
ALTER TABLE `peta_pemenuhan_cpls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peta_pemenuhan_cpls_semester_1_mata_kuliah_id_foreign` (`semester_1_mata_kuliah_id`),
  ADD KEY `peta_pemenuhan_cpls_semester_2_mata_kuliah_id_foreign` (`semester_2_mata_kuliah_id`),
  ADD KEY `peta_pemenuhan_cpls_semester_3_mata_kuliah_id_foreign` (`semester_3_mata_kuliah_id`),
  ADD KEY `peta_pemenuhan_cpls_semester_4_mata_kuliah_id_foreign` (`semester_4_mata_kuliah_id`),
  ADD KEY `peta_pemenuhan_cpls_semester_5_mata_kuliah_id_foreign` (`semester_5_mata_kuliah_id`),
  ADD KEY `peta_pemenuhan_cpls_semester_6_mata_kuliah_id_foreign` (`semester_6_mata_kuliah_id`),
  ADD KEY `peta_pemenuhan_cpls_semester_7_mata_kuliah_id_foreign` (`semester_7_mata_kuliah_id`),
  ADD KEY `peta_pemenuhan_cpls_semester_8_mata_kuliah_id_foreign` (`semester_8_mata_kuliah_id`);

--
-- Indexes for table `pimpinans`
--
ALTER TABLE `pimpinans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasi_penelitians`
--
ALTER TABLE `publikasi_penelitians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekognisi_lulusans`
--
ALTER TABLE `rekognisi_lulusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rerata_beban_dtprs`
--
ALTER TABLE `rerata_beban_dtprs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rerata_masa_tunggu_luluses`
--
ALTER TABLE `rerata_masa_tunggu_luluses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarana_prasaranas`
--
ALTER TABLE `sarana_prasaranas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarana_prasarana_penelitians`
--
ALTER TABLE `sarana_prasarana_penelitians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarana_prasarana_pkms`
--
ALTER TABLE `sarana_prasarana_pkms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sistem_tata_kelolas`
--
ALTER TABLE `sistem_tata_kelolas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_spmis`
--
ALTER TABLE `unit_spmis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswas`
--
ALTER TABLE `data_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diseminasi_pkms`
--
ALTER TABLE `diseminasi_pkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fleksibilitas_pembelajarans`
--
ALTER TABLE `fleksibilitas_pembelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fundings`
--
ALTER TABLE `fundings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `isi_pembelajarans`
--
ALTER TABLE `isi_pembelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keberagaman_asal_mahasiswas`
--
ALTER TABLE `keberagaman_asal_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kepuasan_pengguna_lulusans`
--
ALTER TABLE `kepuasan_pengguna_lulusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kerjasama_penelitians`
--
ALTER TABLE `kerjasama_penelitians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kerjasama_pkms`
--
ALTER TABLE `kerjasama_pkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kesesuaian_bidang_kerjas`
--
ALTER TABLE `kesesuaian_bidang_kerjas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kondisi_mahasiswas`
--
ALTER TABLE `kondisi_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kualifikasi_tendiks`
--
ALTER TABLE `kualifikasi_tendiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pembiayaan_penelitians`
--
ALTER TABLE `pembiayaan_penelitians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembiayaan_pkms`
--
ALTER TABLE `pembiayaan_pkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemetaan_cpl_pls`
--
ALTER TABLE `pemetaan_cpl_pls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengembangan_dtpr_penelitians`
--
ALTER TABLE `pengembangan_dtpr_penelitians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penggunaan_danas`
--
ALTER TABLE `penggunaan_danas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perolehan_hkis`
--
ALTER TABLE `perolehan_hkis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perolehan_pkms`
--
ALTER TABLE `perolehan_pkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peta_pemenuhan_cpls`
--
ALTER TABLE `peta_pemenuhan_cpls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pimpinans`
--
ALTER TABLE `pimpinans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publikasi_penelitians`
--
ALTER TABLE `publikasi_penelitians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekognisi_lulusans`
--
ALTER TABLE `rekognisi_lulusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rerata_beban_dtprs`
--
ALTER TABLE `rerata_beban_dtprs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rerata_masa_tunggu_luluses`
--
ALTER TABLE `rerata_masa_tunggu_luluses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sarana_prasaranas`
--
ALTER TABLE `sarana_prasaranas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarana_prasarana_penelitians`
--
ALTER TABLE `sarana_prasarana_penelitians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarana_prasarana_pkms`
--
ALTER TABLE `sarana_prasarana_pkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sistem_tata_kelolas`
--
ALTER TABLE `sistem_tata_kelolas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unit_spmis`
--
ALTER TABLE `unit_spmis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi_misis`
--
ALTER TABLE `visi_misis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peta_pemenuhan_cpls`
--
ALTER TABLE `peta_pemenuhan_cpls`
  ADD CONSTRAINT `peta_pemenuhan_cpls_semester_1_mata_kuliah_id_foreign` FOREIGN KEY (`semester_1_mata_kuliah_id`) REFERENCES `isi_pembelajarans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `peta_pemenuhan_cpls_semester_2_mata_kuliah_id_foreign` FOREIGN KEY (`semester_2_mata_kuliah_id`) REFERENCES `isi_pembelajarans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `peta_pemenuhan_cpls_semester_3_mata_kuliah_id_foreign` FOREIGN KEY (`semester_3_mata_kuliah_id`) REFERENCES `isi_pembelajarans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `peta_pemenuhan_cpls_semester_4_mata_kuliah_id_foreign` FOREIGN KEY (`semester_4_mata_kuliah_id`) REFERENCES `isi_pembelajarans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `peta_pemenuhan_cpls_semester_5_mata_kuliah_id_foreign` FOREIGN KEY (`semester_5_mata_kuliah_id`) REFERENCES `isi_pembelajarans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `peta_pemenuhan_cpls_semester_6_mata_kuliah_id_foreign` FOREIGN KEY (`semester_6_mata_kuliah_id`) REFERENCES `isi_pembelajarans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `peta_pemenuhan_cpls_semester_7_mata_kuliah_id_foreign` FOREIGN KEY (`semester_7_mata_kuliah_id`) REFERENCES `isi_pembelajarans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `peta_pemenuhan_cpls_semester_8_mata_kuliah_id_foreign` FOREIGN KEY (`semester_8_mata_kuliah_id`) REFERENCES `isi_pembelajarans` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
