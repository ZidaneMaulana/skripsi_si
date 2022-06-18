-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2022 pada 04.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tauth`
--

CREATE TABLE `tauth` (
  `Iduser` int(11) DEFAULT NULL,
  `Namalevel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tauth`
--

INSERT INTO `tauth` (`Iduser`, `Namalevel`) VALUES
(1, 'dosen'),
(15, 'dosen'),
(14, 'dosen'),
(16, 'dosen'),
(2, 'dosen'),
(3, 'dosen'),
(4, 'dosen'),
(5, 'dosen'),
(6, 'dosen'),
(7, 'dosen'),
(8, 'dosen'),
(9, 'dosen'),
(10, 'dosen'),
(11, 'dosen'),
(12, 'dosen'),
(13, 'dosen'),
(17, 'operator'),
(5, 'kaprodi'),
(16, 'koordinator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbimbingans`
--

CREATE TABLE `tbimbingans` (
  `BimbingansId` int(11) NOT NULL,
  `BimbingansPeriodeId` int(11) DEFAULT NULL,
  `BimbingansDosbingsId` int(11) DEFAULT NULL,
  `BimbingansMhsNim` int(11) DEFAULT NULL,
  `BimbingansBab` varchar(255) DEFAULT NULL,
  `BimbingansKet` varchar(255) DEFAULT NULL,
  `BimbingansFile` varchar(255) DEFAULT NULL,
  `BimbingansTgl` date DEFAULT NULL,
  `BimbingansDosenId` int(11) DEFAULT NULL,
  `BimbingansBalasanFile` varchar(255) DEFAULT NULL,
  `BimbingansBalasanKet` varchar(255) DEFAULT NULL,
  `BimbingansBalasanTgl` date DEFAULT NULL,
  `BimbingansStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbimbingans`
--

INSERT INTO `tbimbingans` (`BimbingansId`, `BimbingansPeriodeId`, `BimbingansDosbingsId`, `BimbingansMhsNim`, `BimbingansBab`, `BimbingansKet`, `BimbingansFile`, `BimbingansTgl`, `BimbingansDosenId`, `BimbingansBalasanFile`, `BimbingansBalasanKet`, `BimbingansBalasanTgl`, `BimbingansStatus`) VALUES
(1, 6, 1, 202153131, 'judul', 'kfdg', 'fd7299e4640b0b71153c707e8ee201d5.png', '2022-05-27', 1, '4e807d4442cb3d2cc1cfefd83bfec7db.png', 'ok', '2022-05-27', '1'),
(2, 6, 1, 202153131, 'judul', 'csdkfj', 'd0b889786d9084fdfad58ea87c310bdc.png', '2022-05-27', 2, '3091d9e9732e683af224cfbb62215bb1.png', 'dkf', '2022-05-27', '1'),
(3, 6, 1, 202153131, 'proposal', 'md', 'c434ec866bdddbc50d06f74b52b216d3.png', '2022-05-28', 1, NULL, NULL, NULL, '0'),
(4, 6, 1, 202153131, 'proposal', 'md', 'f769628bc1174f8b5d7ee5f7f0c7cd28.png', '2022-05-28', 2, NULL, NULL, NULL, '0'),
(5, 6, 2, 201451003, 'judul', 'Pengajuan Judul', 'a374920bc419f4eb8124f1136e42f588.pdf', '2022-05-29', 1, '21c24d483dc389c248f78ab63870b0aa.pdf', '', '2022-05-29', '1'),
(6, 6, 2, 201451003, 'judul', 'Pengajuan Judul', '5aca19d79e8125c4d4b25fbce8e01a91.pdf', '2022-05-29', 2, 'b9a12609675d222f904239fb7afcd2d3.pdf', '', '2022-05-29', '1'),
(7, 6, 2, 201451003, 'proposal', 'Bimbingan Proposal', '3e8f1c88b69c8650104ac2c065f19bfd.pdf', '2022-05-29', 1, '9899ff9a10f08327facb72ef847b4666.pdf', 'Oke mas', '2022-05-29', '1'),
(8, 6, 2, 201451003, 'proposal', 'Proposal', '7275e448d782a9fbb44dc5a6c16f2be4.pdf', '2022-05-29', 2, '9a8b41812170a4d0c662dc89b56df79e.pdf', 'Lanjut', '2022-05-29', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdaftars`
--

CREATE TABLE `tdaftars` (
  `DaftarsId` int(11) NOT NULL,
  `DaftarsTgl` varchar(255) DEFAULT NULL,
  `DaftarsNIM` varchar(255) DEFAULT NULL,
  `DaftarsFileKrs` varchar(255) DEFAULT NULL,
  `DaftarsFileTranskrip` varchar(255) DEFAULT NULL,
  `DaftarsFileSlip` varchar(255) DEFAULT NULL,
  `DaftarsStatus` varchar(255) DEFAULT NULL,
  `DaftarsKeterangan` text DEFAULT NULL,
  `DaftarsPeriodesId` int(11) DEFAULT NULL,
  `DaftarsPeriodesId2` int(11) DEFAULT NULL,
  `DaftarsStatusAkhir` varchar(255) DEFAULT NULL,
  `DaftarsTglSelesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tdaftars`
--

INSERT INTO `tdaftars` (`DaftarsId`, `DaftarsTgl`, `DaftarsNIM`, `DaftarsFileKrs`, `DaftarsFileTranskrip`, `DaftarsFileSlip`, `DaftarsStatus`, `DaftarsKeterangan`, `DaftarsPeriodesId`, `DaftarsPeriodesId2`, `DaftarsStatusAkhir`, `DaftarsTglSelesai`) VALUES
(1, '27-05-2022', '202153131', 'af978a560f326b49850332fbd8ff60ff.pdf', '6a50819927e0c83cf844a0e34381cd96.pdf', 'bbe382a11da1807eae436d3cece6a9cc.png', '1', NULL, 6, NULL, '0', NULL),
(2, '29-05-2022', '201451003', '288f77461833806092be99044fc7f3b3.pdf', 'c89eb9de0bf8a1a19615eed4ecc5ac7a.pdf', '80d7f8e136795ff2d0a11fd7eb4e4912.png', '1', NULL, 6, NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdaftarsempro`
--

CREATE TABLE `tdaftarsempro` (
  `DafsemId` int(11) NOT NULL,
  `DafsemDaftarsId` int(11) DEFAULT NULL,
  `DafsemPeriodeId` int(11) DEFAULT NULL,
  `DafsemFileTranskrip` varchar(255) DEFAULT NULL,
  `DafsemFilePengesahan` varchar(255) DEFAULT NULL,
  `DafsemFileBukubimbingan` varchar(255) DEFAULT NULL,
  `DafsemFileKWKomputer` varchar(255) DEFAULT NULL,
  `DafsemFileKWInggris` varchar(255) DEFAULT NULL,
  `DafsemFileKWKewirausahaan` varchar(255) DEFAULT NULL,
  `DafsemFileSlip` varchar(255) DEFAULT NULL,
  `DafsemFilePlagiasi` varchar(255) DEFAULT NULL,
  `DafsemTgl` date DEFAULT NULL,
  `DafsemCekTgl` date DEFAULT NULL,
  `DafsemKet` varchar(255) DEFAULT NULL,
  `DafsemStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tdaftarsempro`
--

INSERT INTO `tdaftarsempro` (`DafsemId`, `DafsemDaftarsId`, `DafsemPeriodeId`, `DafsemFileTranskrip`, `DafsemFilePengesahan`, `DafsemFileBukubimbingan`, `DafsemFileKWKomputer`, `DafsemFileKWInggris`, `DafsemFileKWKewirausahaan`, `DafsemFileSlip`, `DafsemFilePlagiasi`, `DafsemTgl`, `DafsemCekTgl`, `DafsemKet`, `DafsemStatus`) VALUES
(1, 2, 6, 'd3f752f136a40784ea8f5e0e0f190288.pdf', 'a599d65a705a7048e2fc033cae2574b5.pdf', 'e3671e776ae7a3283bfa8eb9fd37cfdc.pdf', '7a46edfbc654ef3d15e827c02feb6738.pdf', '8e84780e52d750918c0596d58e8831c3.pdf', 'bb7906843294358551898beb4db77b87.pdf', 'f744a1c1115738bf838604ac9efaa436.pdf', '88260f234267f5ac68da73671e1a379c.pdf', '2029-05-22', '2029-05-22', NULL, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdaftarsidang`
--

CREATE TABLE `tdaftarsidang` (
  `DafsidId` int(11) NOT NULL,
  `DafsidDaftarsId` int(11) DEFAULT NULL,
  `DafsidPeriodeId` int(11) DEFAULT NULL,
  `DafsidFileProposal` varchar(255) DEFAULT NULL,
  `DafsidFileBukubimbingan` varchar(255) DEFAULT NULL,
  `DafsidFileSuratBalasan` varchar(255) DEFAULT NULL,
  `DafsidFileKWKomputer` varchar(255) DEFAULT NULL,
  `DafsidFileKWInggris` varchar(255) DEFAULT NULL,
  `DafsidFileKWKewirausahaan` varchar(255) DEFAULT NULL,
  `DafsidFileSlip` varchar(255) DEFAULT NULL,
  `DafsidFileBeritaAcara` varchar(255) DEFAULT NULL,
  `DafsidFileTranskrip` varchar(255) DEFAULT NULL,
  `DafsidFilePlagiasi` varchar(255) DEFAULT NULL,
  `DafsidFileEsq` varchar(255) DEFAULT NULL,
  `DafsidTgl` date DEFAULT NULL,
  `DafsidCekTgl` date DEFAULT NULL,
  `DafsidKet` varchar(255) DEFAULT NULL,
  `DafsidStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdetailsempro`
--

CREATE TABLE `tdetailsempro` (
  `DetsemId` int(11) NOT NULL,
  `DetsemDafsemId` int(11) DEFAULT NULL,
  `DetsemSemproId` int(11) DEFAULT NULL,
  `DetsemDosenId` int(11) DEFAULT NULL,
  `DetsemLevelDosen` varchar(255) DEFAULT NULL,
  `DetsemKetRevisi` varchar(255) DEFAULT NULL,
  `DetsemTgl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdetailsidang`
--

CREATE TABLE `tdetailsidang` (
  `DetsidId` int(11) NOT NULL,
  `DetsidDafsidId` int(11) DEFAULT NULL,
  `DetsidSidangId` int(11) DEFAULT NULL,
  `DetsidDosenId` int(11) DEFAULT NULL,
  `DetsidLevelDosen` varchar(255) DEFAULT NULL,
  `DetsidKetRevisi` varchar(255) DEFAULT NULL,
  `DetsidTgl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdosbings`
--

CREATE TABLE `tdosbings` (
  `DosbingsId` int(11) NOT NULL,
  `DosbingsPeriodeId` int(11) DEFAULT NULL,
  `DosbingsDaftarsId` int(11) DEFAULT NULL,
  `DosbingsDosenId1` int(11) DEFAULT NULL,
  `DosbingsDosenId2` int(11) DEFAULT NULL,
  `DosbingsKetua` int(11) DEFAULT NULL,
  `DosbingsTamu` int(11) DEFAULT NULL,
  `DosbingsTgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tdosbings`
--

INSERT INTO `tdosbings` (`DosbingsId`, `DosbingsPeriodeId`, `DosbingsDaftarsId`, `DosbingsDosenId1`, `DosbingsDosenId2`, `DosbingsKetua`, `DosbingsTamu`, `DosbingsTgl`) VALUES
(1, 6, 1, 1, 2, NULL, NULL, '0000-00-00'),
(2, 6, 2, 1, 2, NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdosen`
--

CREATE TABLE `tdosen` (
  `DosenId` int(11) NOT NULL,
  `DosenNidn` varchar(255) DEFAULT NULL,
  `DosenNama` varchar(255) DEFAULT NULL,
  `DosenAlamat` varchar(255) DEFAULT NULL,
  `DosenNohp` varchar(255) DEFAULT NULL,
  `DosenFoto` varchar(255) DEFAULT NULL,
  `DosenEmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tdosen`
--

INSERT INTO `tdosen` (`DosenId`, `DosenNidn`, `DosenNama`, `DosenAlamat`, `DosenNohp`, `DosenFoto`, `DosenEmail`) VALUES
(1, '0618058301', 'Andy Prasetyo Utomo, S.Kom, M.T', 'Desa Ploso RT. 5 RW. 5 No. 5, Kec.Jati, Kudus', '6285726170948', NULL, 'andy.prasetyo@umk.ac.id'),
(2, '0628017501', 'Anteng Widodo, ST., M.Kom', 'Kudus', '6285726170948', NULL, 'anteng.widodo@umk.ac.id'),
(3, '0623018201', 'Arif Setiawan, S.Kom, M.Cs', 'Perum Grand Purwosari Regency B3 Ganesha Kudus', '6285726170948', NULL, 'arif.setiawan@umk.ac.id'),
(4, '0627018502', 'Diana Laily Fithri, S.Kom, M.Kom', 'Kandang Mas RT.03 RW 1, Dawe, Kudus', '6285726170948', NULL, 'diana.laily@umk.ac.id'),
(5, '0608047901', 'Dr. Eko Darmanto, S.Kom, M.Cs', 'Tanjungkarang RT. 04 RW. 01. Jati, Kudus', '6285726170948', NULL, 'eko.darmanto@umk.ac.id'),
(6, '0606058201', 'Fajar Nugraha, S.Kom, M.Kom', 'Jl. Muria Raya II/47 RT.13 RW. 07, Gondang Manis, Bae, Kudus', '6285726170948', NULL, 'fajar.nugraha@umk.ac.id'),
(7, '0621048301', 'Muhammad Arifin, S.Kom, M.Kom', 'Gondangmanis RT. 07 RW. 11, Bae, Kudus', '6285726170948', NULL, 'arifin.m@umk.ac.id'),
(8, '0608088201', 'Nanik Susanti, S.Kom, M.Kom', 'Desa Gulang RT.01 Rw. 03, Mejobo, Kudus', '6285726170948', NULL, 'nanik.susanti@umk.ac.id'),
(9, '0618098701', 'Noor Latifah, S.Kom, M.Kom', 'Janggalan No. 140 RT. 3 RW. 2, Kudus 59316', '6285726170948', NULL, 'noor.latifah@umk.ac.id'),
(10, '0619067802', 'Pratomo Setiaji, S.Kom, M.Kom', 'Jl.Muria Raya II/34, RT.13 RW.07 Gondangmanis, Bae, Kudus', '6285726170948', NULL, 'pratomo.setiaji@umk.ac.id'),
(11, '0610128601', 'Putri Kurnia Handayani, S.Kom, M.Kom', 'Kramat Rejo No. 391 Barongan, Kudus', '6285726170948', NULL, 'putri.kurnia@umk.ac.id'),
(12, '0607067001', 'R. Rhoedy Setiawan, S.Kom, M.Kom', 'Jl. Getas Pejaten no. 94 RT. 06 RW. 01, Kec. Jati, Kudus', '6285726170948', NULL, 'rhoedy.setiawan@umk.ac.id'),
(13, '0602017901', 'Supriyono, S.Kom, M.Kom', 'Perumahan Megawon Indah Blok E 51-52, Kudus', '6285726170948', NULL, 'supriyono.si@umk.ac.id'),
(14, '0623068301', 'Syafiul Muzid, ST, M.Cs', 'Teluk Weten RT. 25 RW. 03, Welahan, Jepara', '6285726170948', NULL, 'syafiul.muzid@umk.ac.id'),
(15, '0631088901', 'Wiwit Agus Triyanto, S.Kom, M.Kom', 'Prambatan Kidul RT. 01 RW. 1, Klaiwungu, Kudus', '6285726170948', NULL, 'at.wiwit@umk.ac.id'),
(16, '0004047501', 'Yudie Irawan, S.Kom, M.Kom', 'Mlatinorowito Gg. III No. 93', '6285726170948', 'eadfd5c516ab59ad7db5346d283c6a63.jpg', 'yudie.irawan@umk.ac.id'),
(17, '201753001', 'Safira', 'Kudus', '6285726170948', NULL, 'safira@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjadwalbimbingan`
--

CREATE TABLE `tjadwalbimbingan` (
  `JadwalId` int(11) NOT NULL,
  `JadwalDosenId` int(11) DEFAULT NULL,
  `JadwalHari` varchar(255) DEFAULT NULL,
  `JadwalJamMulai` varchar(255) DEFAULT NULL,
  `JadwalJamSelesai` varchar(255) DEFAULT NULL,
  `JadwalRuangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tjadwalbimbingan`
--

INSERT INTO `tjadwalbimbingan` (`JadwalId`, `JadwalDosenId`, `JadwalHari`, `JadwalJamMulai`, `JadwalJamSelesai`, `JadwalRuangan`) VALUES
(1, 1, 'SENIN', '10:30 PM', '10:30 PM', 'J Lt.3 No.6'),
(2, 2, 'SELASA', '10:30 PM', '10:30 PM', 'Lab. Multimedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmhs`
--

CREATE TABLE `tmhs` (
  `MhsId` int(11) NOT NULL,
  `MhsNim` varchar(255) NOT NULL,
  `MhsNama` varchar(255) DEFAULT NULL,
  `MhsPassword` varchar(255) DEFAULT NULL,
  `MhsNohp` varchar(255) DEFAULT NULL,
  `MhsAlamat` text DEFAULT NULL,
  `MhsEmail` varchar(255) DEFAULT NULL,
  `MhsFoto` varchar(255) DEFAULT NULL,
  `MhsStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tmhs`
--

INSERT INTO `tmhs` (`MhsId`, `MhsNim`, `MhsNama`, `MhsPassword`, `MhsNohp`, `MhsAlamat`, `MhsEmail`, `MhsFoto`, `MhsStatus`) VALUES
(1, '201553001', 'Farih Daroini', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567890', 'Kudus', '201553001@std.umk.ac.id', NULL, '1'),
(2, '201553002', 'Rusyana Sari', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567891', 'Jepara', '201553002@std.umk.ac.id', NULL, '1'),
(3, '201553003', 'Mohammad Kamal Al Fitra', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567892', 'Demak', '201553003@std.umk.ac.id', NULL, '1'),
(4, '201553004', 'Bela Herwati Ningsih', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567893', 'Pati', '201553004@std.umk.ac.id', NULL, '1'),
(5, '201553006', 'Erlina Nofianti', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567894', 'Grobogan', '201553006@std.umk.ac.id', NULL, '1'),
(6, '201653001', 'Jihan Nisrina', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567895', 'Porwodadi', '201553007@std.umk.ac.id', NULL, '1'),
(7, '201653002', 'Yusiana Rahma', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567896', 'Semarang', '201553008@std.umk.ac.id', NULL, '1'),
(8, '201653003', 'Indi Kurnia Atmaja', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '62895397268443', 'Kudus', '201553009@std.umk.ac.id', NULL, '1'),
(9, '201653004', 'Abdul Rouf', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567898', 'Jepara', '201553010@std.umk.ac.id', NULL, '1'),
(10, '201653005', 'Arsya Yoga Pratama', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567899', 'Demak', '201553011@std.umk.ac.id', NULL, '0'),
(11, '201653006', 'Bayu Afrian', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567900', 'Pati', '201553012@std.umk.ac.id', NULL, '1'),
(12, '201653007', 'Iman Ardhi Prabowo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567901', 'Grobogan', '201553013@std.umk.ac.id', NULL, '0'),
(13, '201653008', 'Farid Yuliyanto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567902', 'Porwodadi', '201553014@std.umk.ac.id', NULL, '1'),
(14, '201653009', 'Toni Alfiyan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567903', 'Semarang', '201553015@std.umk.ac.id', NULL, '0'),
(15, '201653010', 'Abi Andreanto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567904', 'Kudus', '201553016@std.umk.ac.id', NULL, '1'),
(16, '201653011', 'Novita Dwi Andriyani', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567905', 'Jepara', '201553017@std.umk.ac.id', NULL, '0'),
(17, '201653012', 'Fiyyalailatun Nayyiroh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567906', 'Demak', '201553018@std.umk.ac.id', NULL, '1'),
(18, '201653013', 'Achmad Rizal Hafidzin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567907', 'Pati', '201553019@std.umk.ac.id', NULL, '0'),
(19, '201653014', 'Triya Adzani Maulidina', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567908', 'Grobogan', '201553020@std.umk.ac.id', NULL, '1'),
(20, '201653015', 'Agung Dwi Ariyanto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567909', 'Porwodadi', '201553021@std.umk.ac.id', NULL, '0'),
(21, '201653016', 'Dessy Muharfianti Putri', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567910', 'Semarang', '201553022@std.umk.ac.id', NULL, '1'),
(22, '201653017', 'Fita Choiyanti', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567911', 'Kudus', '201553023@std.umk.ac.id', NULL, '0'),
(23, '201653018', 'Fidiana Sekar Rizqi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567912', 'Jepara', '201553024@std.umk.ac.id', NULL, '1'),
(24, '201653019', 'Luqman Rosid', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567913', 'Demak', '201553025@std.umk.ac.id', NULL, '1'),
(25, '201653020', 'Rina Khoirunnisa\'', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567914', 'Pati', '201553026@std.umk.ac.id', NULL, '1'),
(26, '201653021', 'Muhammad Ilham', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567915', 'Grobogan', '201553027@std.umk.ac.id', NULL, '1'),
(27, '201653022', 'Anisa Ulya', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567916', 'Porwodadi', '201553028@std.umk.ac.id', NULL, '1'),
(28, '201653023', 'Risa Erlinawati', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567917', 'Semarang', '201553030@std.umk.ac.id', NULL, '0'),
(29, '201653024', 'Nur Arief Yufrizal Prasetyo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567918', 'Kudus', '201553031@std.umk.ac.id', NULL, '1'),
(30, '201653025', 'Labib Ashrori', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567919', 'Jepara', '201553032@std.umk.ac.id', NULL, '0'),
(31, '201653026', 'Syaiful Bahri Bayuda Pradani', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567920', 'Demak', '201553033@std.umk.ac.id', NULL, '1'),
(33, '201653028', 'Muhammad Azka Darojat', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567922', 'Grobogan', '201553035@std.umk.ac.id', NULL, '1'),
(34, '201653029', 'Lina Noviana', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567923', 'Porwodadi', '201553036@std.umk.ac.id', NULL, '0'),
(35, '201653030', 'Yuli Irmawati', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567924', 'Semarang', '201553037@std.umk.ac.id', NULL, '1'),
(36, '201753001', 'Bevi Maulida Khasanah', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567925', 'Kudus', '201553038@std.umk.ac.id', NULL, '0'),
(37, '201753002', 'Muhammad Afham Fikri', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567926', 'Jepara', '201553040@std.umk.ac.id', NULL, '1'),
(38, '201753003', 'Nurul Mashfufah', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567927', 'Demak', '201553041@std.umk.ac.id', NULL, '0'),
(39, '201753004', 'Faiz Faishol Majid', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567928', 'Pati', '201553042@std.umk.ac.id', NULL, '1'),
(40, '201753005', 'Muh Suhartomi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567929', 'Grobogan', '201553043@std.umk.ac.id', NULL, '0'),
(41, '201753006', 'Agus Dwi Ismawan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567930', 'Porwodadi', '201553044@std.umk.ac.id', NULL, '1'),
(42, '201753007', 'Fredo Maulana Putra', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567931', 'Semarang', '201553045@std.umk.ac.id', NULL, '0'),
(43, '201753008', 'Anin Dita Widyastuti', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567932', 'Kudus', '201553046@std.umk.ac.id', NULL, '1'),
(44, '201753009', 'Rofiyatun', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567933', 'Jepara', '201553047@std.umk.ac.id', NULL, '0'),
(45, '201753010', 'Adi Nugroho', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567934', 'Demak', '201553048@std.umk.ac.id', NULL, '1'),
(46, '201753011', 'Shinta Ulfiana', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567935', 'Pati', '201553049@std.umk.ac.id', NULL, '0'),
(47, '201753012', 'Rita Suryana', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567936', 'Grobogan', '201553050@std.umk.ac.id', NULL, '1'),
(48, '201753013', 'Fat\'hul Umam', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567937', 'Porwodadi', '201553051@std.umk.ac.id', NULL, '0'),
(49, '201753014', 'Ahmad Luthfi Hakim', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567938', 'Semarang', '201553052@std.umk.ac.id', NULL, '1'),
(50, '201753015', 'Galih Eka Nugraha', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567939', 'Kudus', '201553054@std.umk.ac.id', NULL, '0'),
(51, '201753016', 'Dhimas Aji Wicaksono', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567940', 'Jepara', '201553056@std.umk.ac.id', NULL, '1'),
(52, '201753017', 'Fahrul Anas Mandasari', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567941', 'Demak', '201553057@std.umk.ac.id', NULL, '0'),
(53, '201753018', 'Sovia', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567942', 'Pati', '201553060@std.umk.ac.id', NULL, '1'),
(54, '201753019', 'Subekti Nur Wahyudi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567943', 'Grobogan', '201553061@std.umk.ac.id', NULL, '0'),
(55, '201853001', 'Pristina Dwita Soraya', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567944', 'Porwodadi', '201553062@std.umk.ac.id', NULL, '1'),
(56, '201853002', 'Oktova Aulia Chasan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567945', 'Semarang', '201553063@std.umk.ac.id', NULL, '1'),
(57, '201853003', 'Ahmad Isnan Wahyudi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567946', 'Kudus', '201553064@std.umk.ac.id', NULL, '1'),
(58, '201853004', 'Nisrina Ainiyatul Munawaroh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567947', 'Jepara', '201553065@std.umk.ac.id', NULL, '1'),
(59, '201853005', 'Erna Zulianti', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567948', 'Demak', '201553066@std.umk.ac.id', NULL, '1'),
(60, '201853006', 'Umi Rahayu', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567949', 'Pati', '201553067@std.umk.ac.id', NULL, '1'),
(61, '201853007', 'Yulimar Astutik Widyaningsih', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567950', 'Grobogan', '201553068@std.umk.ac.id', NULL, '1'),
(62, '201853008', 'Nauval Sa\'ieduddin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567951', 'Porwodadi', '201553069@std.umk.ac.id', NULL, '1'),
(63, '201853009', 'Muhammad Nafi\'uddin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567952', 'Semarang', '201553071@std.umk.ac.id', NULL, '1'),
(64, '2018530010', 'Milasita Mangesthiningtyas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567953', 'Kudus', '201553072@std.umk.ac.id', NULL, '1'),
(72, '202053027', 'Fahmi Setiawan ', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '098987625412', 'KUDUS', 'A@gmail.com', NULL, '1'),
(73, '123', 'Andrew Anto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '6285641199790', 'jepara', 'andrew@g.com', '5adc5ced5812dbf643be0eeb33a7fe9e.jpg', '1'),
(74, '201753027', 'Andrew Anto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '62', 'JPR', 'A@gmail', '1ba9ca54ca264f565692fee200487ff2.jpg', '1'),
(75, '202153131', 'rais', '3f5f7b7d834374842ff6b8b943f7f3ca9bbddca6', '9032493498574', 'mejobo', 'dsjksnfknr@gm.com', NULL, '1'),
(76, '202253027', 'ANdrew', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '123456789098', 'jpr', 'adminn@gmail.com', '2160e89624ec59197453ca429d6263b5.png', '1'),
(77, '201451003', 'Rully KA', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '6281325384789', 'Desa Temulus RT.04 / RW.01 Warung Jamu \"Kondang\"', 'rullykhoirulanwar@gmail.com', NULL, '1'),
(79, '201451004', 'Rully KA', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '6285726170948', 'Kudus saja', 'rullykhoirulanwar@gmail.com', NULL, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tnilaiakhir`
--

CREATE TABLE `tnilaiakhir` (
  `NaId` int(11) NOT NULL,
  `NaSidangId` int(11) DEFAULT NULL,
  `NaPenguji1` int(11) DEFAULT NULL,
  `NaPenguji2` int(11) DEFAULT NULL,
  `NaPenguji3` int(11) DEFAULT NULL,
  `NaAngka` float(11,0) DEFAULT NULL,
  `NaHuruf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tnilaikonversi`
--

CREATE TABLE `tnilaikonversi` (
  `NikonId` int(11) NOT NULL,
  `NikonK1` float DEFAULT NULL,
  `NikonK2` float DEFAULT NULL,
  `NikonK3` float DEFAULT NULL,
  `NikonK4` float DEFAULT NULL,
  `NikonA` int(11) DEFAULT NULL,
  `NikonAB` int(11) DEFAULT NULL,
  `NikonB` int(11) DEFAULT NULL,
  `NikonBC` int(11) DEFAULT NULL,
  `NikonC` int(11) DEFAULT NULL,
  `NikonNaPenguji1` float DEFAULT NULL,
  `NikonNaPenguji2` float DEFAULT NULL,
  `NikonNaPenguji3` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tnilaikonversi`
--

INSERT INTO `tnilaikonversi` (`NikonId`, `NikonK1`, `NikonK2`, `NikonK3`, `NikonK4`, `NikonA`, `NikonAB`, `NikonB`, `NikonBC`, `NikonC`, `NikonNaPenguji1`, `NikonNaPenguji2`, `NikonNaPenguji3`) VALUES
(1, 0.3, 0.2, 0.2, 0.3, 80, 72, 64, 56, 48, 0.4, 0.3, 0.3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tnilaikriteria`
--

CREATE TABLE `tnilaikriteria` (
  `NiketId` int(11) NOT NULL,
  `NiketSidangId` int(11) DEFAULT NULL,
  `NiketDosenId` int(11) DEFAULT NULL,
  `NiketDosenLevel` int(11) DEFAULT NULL,
  `NiketK1` int(11) DEFAULT NULL,
  `NiketK2` int(11) DEFAULT NULL,
  `NiketK3` int(11) DEFAULT NULL,
  `NiketK4` int(11) DEFAULT NULL,
  `NiketTotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tperiodes`
--

CREATE TABLE `tperiodes` (
  `PeriodesId` int(11) NOT NULL,
  `PeriodesSemester` varchar(255) DEFAULT NULL,
  `PeriodesTahunakademik` varchar(255) DEFAULT NULL,
  `PeriodesMulai` date DEFAULT NULL,
  `PeriodesSelesai` date DEFAULT NULL,
  `PeriodesKaprodi` int(11) DEFAULT NULL,
  `PeriodesKoordinator` int(11) DEFAULT NULL,
  `PeriodesStatusAktif` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tperiodes`
--

INSERT INTO `tperiodes` (`PeriodesId`, `PeriodesSemester`, `PeriodesTahunakademik`, `PeriodesMulai`, `PeriodesSelesai`, `PeriodesKaprodi`, `PeriodesKoordinator`, `PeriodesStatusAktif`) VALUES
(6, 'genap', '2022', '2022-05-27', '2022-07-31', 5, 15, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `truang`
--

CREATE TABLE `truang` (
  `RuangId` int(11) NOT NULL,
  `RuangNama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `truang`
--

INSERT INTO `truang` (`RuangId`, `RuangNama`) VALUES
(1, 'LAB MULTIMEDIA'),
(2, 'LAB RPL'),
(3, 'LAB PEMROGRAMAN'),
(4, 'LAB HARDWARE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsempro`
--

CREATE TABLE `tsempro` (
  `SemproId` int(11) NOT NULL,
  `SemproDafsemId` int(11) DEFAULT NULL,
  `SemproRuangId` int(11) DEFAULT NULL,
  `SemproJam` varchar(255) DEFAULT NULL,
  `SemproTgl` varchar(255) DEFAULT NULL,
  `SemproPenguji1` varchar(255) DEFAULT NULL,
  `SemproPenguji2` varchar(255) DEFAULT NULL,
  `SemproPenguji3` varchar(255) DEFAULT NULL,
  `SemproHasil` varchar(255) DEFAULT NULL,
  `SemproStatusRevisi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tsempro`
--

INSERT INTO `tsempro` (`SemproId`, `SemproDafsemId`, `SemproRuangId`, `SemproJam`, `SemproTgl`, `SemproPenguji1`, `SemproPenguji2`, `SemproPenguji3`, `SemproHasil`, `SemproStatusRevisi`) VALUES
(1, 1, 4, '11:00 PM', '2022-05-29', '3', '1', '2', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsidang`
--

CREATE TABLE `tsidang` (
  `SidangId` int(11) NOT NULL,
  `SidangDafsidId` int(11) DEFAULT NULL,
  `SidangRuangId` int(11) DEFAULT NULL,
  `SidangJam` varchar(255) DEFAULT NULL,
  `SidangTgl` varchar(255) DEFAULT NULL,
  `SidangPenguji1` varchar(255) DEFAULT NULL,
  `SidangPenguji2` varchar(255) DEFAULT NULL,
  `SidangPenguji3` varchar(255) DEFAULT NULL,
  `SidangHasil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tskripsi`
--

CREATE TABLE `tskripsi` (
  `SkripsiId` int(11) NOT NULL,
  `SkripsiMhsNim` varchar(255) DEFAULT NULL,
  `SkripsiPeriodeId` int(11) DEFAULT NULL,
  `SkripsiDaftarsId` int(11) DEFAULT NULL,
  `SkripsiJudul` varchar(255) DEFAULT NULL,
  `SkripsiBebasProdi` varchar(255) DEFAULT NULL,
  `SkripsiKeterangan` varchar(255) DEFAULT NULL,
  `SkripsiStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tskripsi`
--

INSERT INTO `tskripsi` (`SkripsiId`, `SkripsiMhsNim`, `SkripsiPeriodeId`, `SkripsiDaftarsId`, `SkripsiJudul`, `SkripsiBebasProdi`, `SkripsiKeterangan`, `SkripsiStatus`) VALUES
(1, '202153131', NULL, 1, 'Semua Bagus', NULL, NULL, NULL),
(2, '201451003', NULL, 2, 'Sistem Informasi Penjualan Berbasis Web', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
--

CREATE TABLE `tuser` (
  `UserId` int(11) NOT NULL,
  `UserUsername` varchar(255) DEFAULT NULL,
  `UserPassword` varchar(255) DEFAULT NULL,
  `UserLevelAktif` varchar(255) DEFAULT NULL,
  `UserStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`UserId`, `UserUsername`, `UserPassword`, `UserLevelAktif`, `UserStatus`) VALUES
(1, 'andy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(2, 'anteng', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(3, 'arif', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(4, 'diana', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(5, 'eko', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kaprodi', '1'),
(6, 'fajar', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(7, 'arifin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(8, 'nanik', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(9, 'latifah', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(10, 'aji', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(11, 'putri', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(12, 'rudi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(13, 'supri', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(14, 'muzid', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(15, 'wiwit', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dosen', '1'),
(16, 'yudi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'koordinator', '1'),
(17, 'safira', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'operator', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbimbingans`
--
ALTER TABLE `tbimbingans`
  ADD PRIMARY KEY (`BimbingansId`) USING BTREE,
  ADD KEY `bim_dosen_id` (`BimbingansDosbingsId`) USING BTREE;

--
-- Indeks untuk tabel `tdaftars`
--
ALTER TABLE `tdaftars`
  ADD PRIMARY KEY (`DaftarsId`) USING BTREE,
  ADD KEY `daftar_periode_id` (`DaftarsPeriodesId`) USING BTREE,
  ADD KEY `DaftarsNIM` (`DaftarsNIM`) USING BTREE;

--
-- Indeks untuk tabel `tdaftarsempro`
--
ALTER TABLE `tdaftarsempro`
  ADD PRIMARY KEY (`DafsemId`) USING BTREE,
  ADD KEY `DafsemDaftarsId` (`DafsemDaftarsId`) USING BTREE,
  ADD KEY `DafsemPeriodeId` (`DafsemPeriodeId`) USING BTREE;

--
-- Indeks untuk tabel `tdaftarsidang`
--
ALTER TABLE `tdaftarsidang`
  ADD PRIMARY KEY (`DafsidId`) USING BTREE,
  ADD KEY `DafsidDaftarsId` (`DafsidDaftarsId`) USING BTREE,
  ADD KEY `DafsidPeriodeId` (`DafsidPeriodeId`) USING BTREE;

--
-- Indeks untuk tabel `tdetailsempro`
--
ALTER TABLE `tdetailsempro`
  ADD PRIMARY KEY (`DetsemId`) USING BTREE,
  ADD KEY `cat_sempro_id` (`DetsemSemproId`) USING BTREE;

--
-- Indeks untuk tabel `tdetailsidang`
--
ALTER TABLE `tdetailsidang`
  ADD PRIMARY KEY (`DetsidId`) USING BTREE,
  ADD KEY `cat_sempro_id` (`DetsidSidangId`) USING BTREE;

--
-- Indeks untuk tabel `tdosbings`
--
ALTER TABLE `tdosbings`
  ADD PRIMARY KEY (`DosbingsId`) USING BTREE,
  ADD KEY `dosbingdaftarid` (`DosbingsDaftarsId`) USING BTREE,
  ADD KEY `dosbingdosenid` (`DosbingsDosenId1`) USING BTREE,
  ADD KEY `DosbingsPeriodeId` (`DosbingsPeriodeId`) USING BTREE;

--
-- Indeks untuk tabel `tdosen`
--
ALTER TABLE `tdosen`
  ADD PRIMARY KEY (`DosenId`) USING BTREE;

--
-- Indeks untuk tabel `tjadwalbimbingan`
--
ALTER TABLE `tjadwalbimbingan`
  ADD PRIMARY KEY (`JadwalId`) USING BTREE;

--
-- Indeks untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  ADD PRIMARY KEY (`MhsId`) USING BTREE,
  ADD KEY `MhsNim` (`MhsNim`) USING BTREE;

--
-- Indeks untuk tabel `tnilaiakhir`
--
ALTER TABLE `tnilaiakhir`
  ADD PRIMARY KEY (`NaId`) USING BTREE,
  ADD KEY `nilai_sidang_id` (`NaSidangId`) USING BTREE;

--
-- Indeks untuk tabel `tnilaikonversi`
--
ALTER TABLE `tnilaikonversi`
  ADD PRIMARY KEY (`NikonId`) USING BTREE;

--
-- Indeks untuk tabel `tnilaikriteria`
--
ALTER TABLE `tnilaikriteria`
  ADD PRIMARY KEY (`NiketId`) USING BTREE,
  ADD KEY `tnilaikriteria_ibfk_1` (`NiketSidangId`) USING BTREE;

--
-- Indeks untuk tabel `tperiodes`
--
ALTER TABLE `tperiodes`
  ADD PRIMARY KEY (`PeriodesId`) USING BTREE;

--
-- Indeks untuk tabel `truang`
--
ALTER TABLE `truang`
  ADD PRIMARY KEY (`RuangId`) USING BTREE;

--
-- Indeks untuk tabel `tsempro`
--
ALTER TABLE `tsempro`
  ADD PRIMARY KEY (`SemproId`) USING BTREE,
  ADD KEY `sempro_ruang_id` (`SemproRuangId`) USING BTREE,
  ADD KEY `daftar_sempro_id` (`SemproDafsemId`) USING BTREE;

--
-- Indeks untuk tabel `tsidang`
--
ALTER TABLE `tsidang`
  ADD PRIMARY KEY (`SidangId`) USING BTREE,
  ADD KEY `sidang_ruang_id` (`SidangRuangId`) USING BTREE,
  ADD KEY `daftar_sidang_id` (`SidangDafsidId`) USING BTREE;

--
-- Indeks untuk tabel `tskripsi`
--
ALTER TABLE `tskripsi`
  ADD PRIMARY KEY (`SkripsiId`) USING BTREE,
  ADD KEY `SkripsiPeriodeId` (`SkripsiPeriodeId`) USING BTREE;

--
-- Indeks untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`UserId`) USING BTREE,
  ADD KEY `dosenid` (`UserUsername`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbimbingans`
--
ALTER TABLE `tbimbingans`
  MODIFY `BimbingansId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tdaftars`
--
ALTER TABLE `tdaftars`
  MODIFY `DaftarsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tdaftarsempro`
--
ALTER TABLE `tdaftarsempro`
  MODIFY `DafsemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tdaftarsidang`
--
ALTER TABLE `tdaftarsidang`
  MODIFY `DafsidId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tdetailsempro`
--
ALTER TABLE `tdetailsempro`
  MODIFY `DetsemId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tdetailsidang`
--
ALTER TABLE `tdetailsidang`
  MODIFY `DetsidId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tdosbings`
--
ALTER TABLE `tdosbings`
  MODIFY `DosbingsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tdosen`
--
ALTER TABLE `tdosen`
  MODIFY `DosenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tjadwalbimbingan`
--
ALTER TABLE `tjadwalbimbingan`
  MODIFY `JadwalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  MODIFY `MhsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `tnilaiakhir`
--
ALTER TABLE `tnilaiakhir`
  MODIFY `NaId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tnilaikonversi`
--
ALTER TABLE `tnilaikonversi`
  MODIFY `NikonId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tnilaikriteria`
--
ALTER TABLE `tnilaikriteria`
  MODIFY `NiketId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tperiodes`
--
ALTER TABLE `tperiodes`
  MODIFY `PeriodesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `truang`
--
ALTER TABLE `truang`
  MODIFY `RuangId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tsempro`
--
ALTER TABLE `tsempro`
  MODIFY `SemproId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tsidang`
--
ALTER TABLE `tsidang`
  MODIFY `SidangId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tskripsi`
--
ALTER TABLE `tskripsi`
  MODIFY `SkripsiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbimbingans`
--
ALTER TABLE `tbimbingans`
  ADD CONSTRAINT `tbimbingans_ibfk_1` FOREIGN KEY (`BimbingansDosbingsId`) REFERENCES `tdosbings` (`DosbingsId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tdaftars`
--
ALTER TABLE `tdaftars`
  ADD CONSTRAINT `tdaftars_ibfk_1` FOREIGN KEY (`DaftarsNIM`) REFERENCES `tmhs` (`MhsNim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tdaftarsempro`
--
ALTER TABLE `tdaftarsempro`
  ADD CONSTRAINT `tdaftarsempro_ibfk_1` FOREIGN KEY (`DafsemDaftarsId`) REFERENCES `tdaftars` (`DaftarsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tdaftarsempro_ibfk_2` FOREIGN KEY (`DafsemPeriodeId`) REFERENCES `tperiodes` (`PeriodesId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tdaftarsidang`
--
ALTER TABLE `tdaftarsidang`
  ADD CONSTRAINT `tdaftarsidang_ibfk_1` FOREIGN KEY (`DafsidDaftarsId`) REFERENCES `tdaftars` (`DaftarsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tdaftarsidang_ibfk_2` FOREIGN KEY (`DafsidPeriodeId`) REFERENCES `tperiodes` (`PeriodesId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tdetailsempro`
--
ALTER TABLE `tdetailsempro`
  ADD CONSTRAINT `tdetailsempro_ibfk_1` FOREIGN KEY (`DetsemSemproId`) REFERENCES `tsempro` (`SemproId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tdetailsidang`
--
ALTER TABLE `tdetailsidang`
  ADD CONSTRAINT `tdetailsidang_ibfk_1` FOREIGN KEY (`DetsidSidangId`) REFERENCES `tsidang` (`SidangId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tdosbings`
--
ALTER TABLE `tdosbings`
  ADD CONSTRAINT `tdosbings_ibfk_1` FOREIGN KEY (`DosbingsDaftarsId`) REFERENCES `tdaftars` (`DaftarsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tdosbings_ibfk_2` FOREIGN KEY (`DosbingsPeriodeId`) REFERENCES `tperiodes` (`PeriodesId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tnilaiakhir`
--
ALTER TABLE `tnilaiakhir`
  ADD CONSTRAINT `tnilaiakhir_ibfk_1` FOREIGN KEY (`NaSidangId`) REFERENCES `tsidang` (`SidangId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tnilaikriteria`
--
ALTER TABLE `tnilaikriteria`
  ADD CONSTRAINT `tnilaikriteria_ibfk_1` FOREIGN KEY (`NiketSidangId`) REFERENCES `tsidang` (`SidangId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tsempro`
--
ALTER TABLE `tsempro`
  ADD CONSTRAINT `tsempro_ibfk_1` FOREIGN KEY (`SemproDafsemId`) REFERENCES `tdaftarsempro` (`DafsemId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tsidang`
--
ALTER TABLE `tsidang`
  ADD CONSTRAINT `tsidang_ibfk_1` FOREIGN KEY (`SidangDafsidId`) REFERENCES `tdaftarsidang` (`DafsidId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tskripsi`
--
ALTER TABLE `tskripsi`
  ADD CONSTRAINT `tskripsi_ibfk_1` FOREIGN KEY (`SkripsiPeriodeId`) REFERENCES `tperiodes` (`PeriodesId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
