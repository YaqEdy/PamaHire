/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_pama_hire
Target Host: localhost
Target Database: db_pama_hire
Date: 4/26/2018 10:47:03 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_m_berkas_pelamar
-- ----------------------------
CREATE TABLE `tbl_m_berkas_pelamar` (
  `pid_berkas_pelamar` varchar(50) NOT NULL,
  `upload_ktp` varchar(100) DEFAULT NULL,
  `upload_akte_lahir` varchar(100) DEFAULT NULL,
  `upload_ijazah` varchar(100) DEFAULT NULL,
  `upload_transkrip` varchar(100) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update_by` varchar(50) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid_berkas_pelamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_m_bulan
-- ----------------------------
CREATE TABLE `tbl_m_bulan` (
  `kode_bulan` varchar(4) NOT NULL DEFAULT '',
  `bulan` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`kode_bulan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_m_info_kontak_pelamar
-- ----------------------------
CREATE TABLE `tbl_m_info_kontak_pelamar` (
  `pid_info_kontak_pelamar` varchar(50) NOT NULL,
  `alamat_ktp` varchar(200) DEFAULT NULL,
  `kota_ktp` varchar(100) DEFAULT NULL,
  `propinsi_ktp` varchar(100) DEFAULT NULL,
  `domisili_sama` char(1) DEFAULT NULL,
  `alamat_domisili` varchar(200) DEFAULT NULL,
  `kota_domisili` varchar(100) DEFAULT NULL,
  `propinsi_domisili` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `no_telpon` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update_by` varchar(50) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid_info_kontak_pelamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_m_jurusan
-- ----------------------------
CREATE TABLE `tbl_m_jurusan` (
  `pid` varchar(70) NOT NULL,
  `kode_jurusan` varchar(40) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `jurusan` varchar(400) NOT NULL,
  `created_by` varchar(40) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `last_update_by` varchar(40) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_m_keluarga_pelamar
-- ----------------------------
CREATE TABLE `tbl_m_keluarga_pelamar` (
  `pid_keluarga_pelamar` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `hubungan_keluarga` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update_by` varchar(50) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid_keluarga_pelamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_m_pelamar
-- ----------------------------
CREATE TABLE `tbl_m_pelamar` (
  `pid_pelamar` varchar(50) NOT NULL,
  `nama_pelamar` varchar(100) DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenkel` char(1) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `gol_darah` varchar(5) DEFAULT NULL,
  `status_pernikahan` varchar(20) DEFAULT NULL,
  `profil_path` varchar(100) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update_by` varchar(50) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid_pelamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_m_pendidikan_pelamar
-- ----------------------------
CREATE TABLE `tbl_m_pendidikan_pelamar` (
  `pid_pendidikan_pelamar` varchar(50) NOT NULL,
  `jenjang_pendidikan` varchar(10) DEFAULT NULL,
  `sekolah_universitas` varchar(100) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `nem_ipk` varchar(5) DEFAULT NULL,
  `tahun_masuk` varchar(4) DEFAULT NULL,
  `tahun_lulus` varchar(10) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update_by` varchar(50) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid_pendidikan_pelamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_m_pengalaman_pelamar
-- ----------------------------
CREATE TABLE `tbl_m_pengalaman_pelamar` (
  `pid_pengalaman_pelamar` tinyint(50) NOT NULL AUTO_INCREMENT,
  `pid_pelamar` varchar(50) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jenis_pekerjaan` varchar(50) DEFAULT NULL,
  `tahun_masuk` char(4) DEFAULT NULL,
  `tahun_keluar` varchar(10) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `pekerjaan_desc` varchar(1000) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update_by` varchar(50) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid_pengalaman_pelamar`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_m_posisi
-- ----------------------------
CREATE TABLE `tbl_m_posisi` (
  `pid` varchar(100) NOT NULL,
  `kode_posisi` varchar(100) NOT NULL,
  `position_title` varchar(50) NOT NULL,
  `employee_type` varchar(50) NOT NULL,
  `contract` int(11) DEFAULT NULL,
  `level` varchar(50) NOT NULL,
  `jurusan` varchar(250) NOT NULL,
  `education` varchar(70) NOT NULL,
  `min_gpa` float NOT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `status_pernikahan` varchar(50) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `work_location` varchar(250) NOT NULL,
  `job_description` text NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `last_update_by` varchar(50) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
DELIMITER ;;
CREATE TRIGGER `insert_tbl_r_verivikasi_auto` AFTER INSERT ON `tbl_m_posisi` FOR EACH ROW BEGIN     
    CALL sp_insert_tbl_r_verivikasi_auto(new.pid,new.position_title,new.usia,new.jenis_kelamin,new.status_pernikahan,new.min_gpa,new.jurusan,new.created_by);
END;;
DELIMITER ;

-- ----------------------------
-- Table structure for tbl_m_posisi_detail
-- ----------------------------
CREATE TABLE `tbl_m_posisi_detail` (
  `pid` varchar(70) NOT NULL,
  `pid_posisi` varchar(70) NOT NULL,
  `pid_jurusan` varchar(70) NOT NULL,
  `min_gpa` float NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_update_by` varchar(40) NOT NULL,
  `last_update_date` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_r_jurusan
-- ----------------------------
CREATE TABLE `tbl_r_jurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_r_provinsi_kota
-- ----------------------------
CREATE TABLE `tbl_r_provinsi_kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_r_universitas
-- ----------------------------
CREATE TABLE `tbl_r_universitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `universitas` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3321 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_r_verivikasi_auto
-- ----------------------------
CREATE TABLE `tbl_r_verivikasi_auto` (
  `pid_verivikasi` varchar(50) NOT NULL,
  `pid_posisi` varchar(50) DEFAULT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `aktivasi_usia` char(1) DEFAULT NULL,
  `usia_maxs` int(11) DEFAULT NULL,
  `detail_ukuran_usia` varchar(50) DEFAULT NULL,
  `aktivasi_jenis_kelamin` char(1) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `aktivasi_status` char(1) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `aktivasi_ipk` char(1) DEFAULT NULL,
  `ipk` varchar(5) DEFAULT NULL,
  `aktivasi_jurusan` char(1) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update_by` varchar(50) DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pid_verivikasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_sessions
-- ----------------------------
CREATE TABLE `tbl_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_t_blacklist
-- ----------------------------
CREATE TABLE `tbl_t_blacklist` (
  `pid` varchar(50) NOT NULL,
  `pid_pelamar` varchar(50) NOT NULL,
  `status_blacklist` char(1) DEFAULT NULL,
  `created_by` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_update_by` varchar(40) NOT NULL,
  `last_update_date` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_t_blacklist_copy_copy
-- ----------------------------
CREATE TABLE `tbl_t_blacklist_copy_copy` (
  `pid` varchar(50) NOT NULL,
  `pid_pelamar` varchar(50) NOT NULL,
  `pid_rekrutmen` varchar(50) NOT NULL,
  `administrasi` char(1) DEFAULT NULL,
  `psikotes` char(1) DEFAULT NULL,
  `interview` char(1) DEFAULT NULL,
  `interview_user` char(1) DEFAULT NULL,
  `mcu` char(1) DEFAULT NULL,
  `sign_contract` char(1) DEFAULT NULL,
  `status_blacklist` char(1) DEFAULT NULL,
  `created_by` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_update_by` varchar(40) NOT NULL,
  `last_update_date` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_t_lamaran
-- ----------------------------
CREATE TABLE `tbl_t_lamaran` (
  `pid` varchar(50) NOT NULL,
  `pid_user` varchar(50) NOT NULL,
  `pid_rekrutmen` varchar(50) NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_update_by` varchar(40) NOT NULL,
  `last_update_date` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_t_progress_lamaran
-- ----------------------------
CREATE TABLE `tbl_t_progress_lamaran` (
  `pid` varchar(50) NOT NULL,
  `pid_pelamar` varchar(50) NOT NULL,
  `pid_rekrutmen` varchar(50) NOT NULL,
  `administrasi` char(1) DEFAULT NULL,
  `psikotes` char(1) DEFAULT NULL,
  `interview` char(1) DEFAULT NULL,
  `interview_user` char(1) DEFAULT NULL,
  `mcu` char(1) DEFAULT NULL,
  `sign_contract` char(1) DEFAULT NULL,
  `created_by` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_update_by` varchar(40) NOT NULL,
  `last_update_date` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_t_rekrutmen
-- ----------------------------
CREATE TABLE `tbl_t_rekrutmen` (
  `pid` varchar(70) NOT NULL,
  `pid_source` varchar(70) NOT NULL,
  `kota_kabupaten` varchar(70) NOT NULL,
  `gelombang` varchar(30) NOT NULL,
  `periode` varchar(14) NOT NULL,
  `judul_rekrutmen` varchar(300) NOT NULL,
  `tipe_rekrutmen` varchar(50) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `zona_waktu` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_update_by` varchar(40) NOT NULL,
  `last_update_date` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_t_rekrutmen_detail
-- ----------------------------
CREATE TABLE `tbl_t_rekrutmen_detail` (
  `pid` varchar(100) NOT NULL,
  `pid_rekrutmen` varchar(100) NOT NULL,
  `pid_posisi` varchar(100) NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_update_by` varchar(40) NOT NULL,
  `last_update_date` datetime NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
CREATE TABLE `tbl_user` (
  `ID` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nomor_ktp` varchar(20) NOT NULL,
  `group` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL,
  `email` varchar(300) NOT NULL,
  `jenjang_pendidikan` varchar(50) NOT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `konsentrasi_jurusan` varchar(100) DEFAULT NULL,
  `nem_ipk` float NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- View structure for tbl_vw_m_posisi
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_vw_m_posisi` AS select `tbl_m_posisi`.`pid` AS `pid`,concat(`tbl_m_posisi`.`kode_posisi`,' ',`tbl_m_posisi`.`position_title`) AS `posisi_desc`,`tbl_m_posisi`.`kode_posisi` AS `kode_posisi`,`tbl_m_posisi`.`position_title` AS `position_title`,`tbl_m_posisi`.`employee_type` AS `employee_type`,`tbl_m_posisi`.`contract` AS `contract`,`tbl_m_posisi`.`level` AS `level`,`tbl_m_posisi`.`jurusan` AS `jurusan`,`tbl_m_posisi`.`education` AS `education`,`tbl_m_posisi`.`min_gpa` AS `min_gpa`,`tbl_m_posisi`.`work_location` AS `work_location`,`tbl_m_posisi`.`job_description` AS `job_description`,`tbl_m_posisi`.`created_by` AS `created_by`,`tbl_m_posisi`.`created_date` AS `created_date`,`tbl_m_posisi`.`last_update_by` AS `last_update_by`,`tbl_m_posisi`.`last_update_date` AS `last_update_date` from `tbl_m_posisi`;

-- ----------------------------
-- View structure for tbl_vw_m_posisi_detail
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_vw_m_posisi_detail` AS select `tbl_m_posisi_detail`.`pid` AS `pid`,`tbl_m_posisi_detail`.`pid_posisi` AS `pid_posisi`,`tbl_m_posisi_detail`.`pid_jurusan` AS `pid_jurusan`,`tbl_m_posisi_detail`.`min_gpa` AS `min_gpa`,`tbl_m_posisi_detail`.`created_by` AS `created_by`,`tbl_m_posisi_detail`.`created_date` AS `created_date`,`tbl_m_posisi_detail`.`last_update_by` AS `last_update_by`,`tbl_m_posisi_detail`.`last_update_date` AS `last_update_date`,`tbl_m_jurusan`.`kode_jurusan` AS `kode_jurusan`,`tbl_m_jurusan`.`pendidikan` AS `pendidikan`,`tbl_m_jurusan`.`jurusan` AS `jurusan`,concat(`tbl_m_jurusan`.`kode_jurusan`,' ',`tbl_m_jurusan`.`jurusan`) AS `jurusan_desc` from (`tbl_m_posisi_detail` left join `tbl_m_jurusan` on((`tbl_m_posisi_detail`.`pid_jurusan` = `tbl_m_jurusan`.`pid`)));

-- ----------------------------
-- View structure for tbl_vw_seleksi_adm
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_vw_seleksi_adm` AS select distinct `e`.`pid` AS `pid_blacklist`,`a`.`pid_pelamar` AS `pid_pelamar`,`a`.`profil_path` AS `profil_path`,`a`.`nama_pelamar` AS `nama_pelamar`,`a`.`jenjang_pendidikan` AS `jenjang_pendidikan`,`a`.`jurusan` AS `jurusan`,`d`.`position_title` AS `kode_profesi`,concat((year(now()) - year(`a`.`tanggal_lahir`)),' thn, ',`a`.`tanggal_lahir`) AS `usia`,`a`.`status_pernikahan` AS `status_pernikahan`,`a`.`jenkel` AS `jenkel`,`a`.`nem_ipk` AS `nem_ipk`,`fn_validasi_pendidikan`(`a`.`pid_pelamar`) AS `status`,'' AS `status_final`,`b`.`last_update_by` AS `verifikator`,`a`.`no_ktp` AS `no_ktp`,`a`.`tempat_lahir` AS `tempat_lahir`,`a`.`tanggal_lahir` AS `tanggal_lahir`,`a`.`alamat_ktp` AS `alamat_ktp`,`a`.`sekolah_universitas` AS `sekolah_universitas`,`a`.`upload_ktp` AS `upload_ktp`,`a`.`upload_akte_lahir` AS `upload_akte_lahir`,`a`.`upload_ijazah` AS `upload_ijazah`,`a`.`upload_transkrip` AS `upload_transkrip`,`b`.`administrasi` AS `administrasi`,`d`.`position_title` AS `position_title`,'UGM' AS `rekrutment`,'1' AS `gelombang`,(case when (`e`.`status_blacklist` < 2) then `fn_validasi_data_pelamar`(`a`.`pid_pelamar`) else '' end) AS `kriteria`,`b`.`last_update_date` AS `last_update_date`,`f`.`pid_source` AS `pid_source` from (((((`vw_pelamar` `a` left join `vw_tbl_t_progress_lamaran_desc` `b` on((`a`.`pid_pelamar` = `b`.`pid_pelamar`))) left join `tbl_t_rekrutmen_detail` `c` on((`b`.`pid_rekrutmen` = `c`.`pid_rekrutmen`))) left join `tbl_m_posisi` `d` on((`c`.`pid_posisi` = `d`.`pid`))) left join `tbl_t_blacklist` `e` on((`a`.`pid_pelamar` = `e`.`pid_pelamar`))) left join `tbl_t_rekrutmen` `f` on((`c`.`pid_rekrutmen` = `f`.`pid`))) where (`fn_validasi_pendidikan`(`a`.`pid_pelamar`) = 'Lulus');

-- ----------------------------
-- View structure for tbl_vw_t_rekrutmen
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_vw_t_rekrutmen` AS select `tbl_t_rekrutmen`.`pid` AS `pid`,`tbl_t_rekrutmen`.`pid_source` AS `pid_source`,`tbl_t_rekrutmen`.`kota_kabupaten` AS `kota_kabupaten`,`tbl_t_rekrutmen`.`gelombang` AS `gelombang`,`tbl_t_rekrutmen`.`periode` AS `periode`,`tbl_m_bulan`.`bulan` AS `bulan`,`tbl_m_bulan`.`kode_bulan` AS `kode_bulan`,left(`tbl_t_rekrutmen`.`periode`,4) AS `tahun`,`tbl_t_rekrutmen`.`judul_rekrutmen` AS `judul_rekrutmen`,`tbl_t_rekrutmen`.`tipe_rekrutmen` AS `tipe_rekrutmen`,`tbl_t_rekrutmen`.`deskripsi_event` AS `deskripsi_event`,`tbl_t_rekrutmen`.`tanggal_mulai` AS `tanggal_mulai`,`tbl_t_rekrutmen`.`tanggal_selesai` AS `tanggal_selesai`,`tbl_t_rekrutmen`.`zona_waktu` AS `zona_waktu`,`tbl_t_rekrutmen`.`status` AS `status`,`tbl_t_rekrutmen`.`created_by` AS `created_by`,`tbl_t_rekrutmen`.`created_date` AS `created_date`,`tbl_t_rekrutmen`.`last_update_by` AS `last_update_by`,`tbl_t_rekrutmen`.`last_update_date` AS `last_update_date` from (`tbl_t_rekrutmen` join `tbl_m_bulan` on((right(`tbl_t_rekrutmen`.`periode`,2) = `tbl_m_bulan`.`kode_bulan`)));

-- ----------------------------
-- View structure for tbl_vw_user_pelamar
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_vw_user_pelamar` AS select `a`.`ID` AS `ID`,`b`.`pid_pelamar` AS `pid_pelamar`,(case when isnull(`b`.`nama_pelamar`) then `a`.`nama_lengkap` else `b`.`nama_pelamar` end) AS `nama_pelamar`,(case when isnull(`b`.`no_ktp`) then `a`.`nomor_ktp` else `b`.`no_ktp` end) AS `no_ktp`,(case when isnull(`b`.`email`) then `a`.`email` else `b`.`email` end) AS `email`,`b`.`tempat_lahir` AS `tempat_lahir`,`b`.`tanggal_lahir` AS `tanggal_lahir`,`b`.`jenkel` AS `jenkel`,`b`.`agama` AS `agama`,`b`.`gol_darah` AS `gol_darah`,`b`.`status_pernikahan` AS `status_pernikahan`,`b`.`profil_path` AS `profil_path`,`b`.`pid_info_kontak_pelamar` AS `pid_info_kontak_pelamar`,`b`.`alamat_ktp` AS `alamat_ktp`,`b`.`kota_ktp` AS `kota_ktp`,`b`.`propinsi_ktp` AS `propinsi_ktp`,`b`.`domisili_sama` AS `domisili_sama`,`b`.`alamat_domisili` AS `alamat_domisili`,`b`.`kota_domisili` AS `kota_domisili`,`b`.`propinsi_domisili` AS `propinsi_domisili`,`b`.`kode_pos` AS `kode_pos`,`b`.`no_telpon` AS `no_telpon`,`b`.`no_hp` AS `no_hp`,`b`.`pid_pendidikan_pelamar` AS `pid_pendidikan_pelamar`,(case when isnull(`b`.`jenjang_pendidikan`) then `a`.`jenjang_pendidikan` else `b`.`jenjang_pendidikan` end) AS `jenjang_pendidikan`,`b`.`sekolah_universitas` AS `sekolah_universitas`,(case when isnull(`b`.`jurusan`) then `a`.`konsentrasi_jurusan` else `b`.`jurusan` end) AS `jurusan`,(case when isnull(`b`.`nem_ipk`) then `a`.`nem_ipk` else `b`.`nem_ipk` end) AS `nem_ipk`,`b`.`tahun_masuk_pendidikan` AS `tahun_masuk_pendidikan`,`b`.`tahun_lulus` AS `tahun_lulus`,`b`.`pid_berkas_pelamar` AS `pid_berkas_pelamar`,`b`.`upload_ktp` AS `upload_ktp`,`b`.`upload_akte_lahir` AS `upload_akte_lahir`,`b`.`upload_ijazah` AS `upload_ijazah`,`b`.`upload_transkrip` AS `upload_transkrip`,`b`.`pid_keluarga_pelamar` AS `pid_keluarga_pelamar`,`b`.`nama_lengkap` AS `nama_lengkap`,`b`.`jenis_kelamin` AS `jenis_kelamin`,`b`.`hubungan_keluarga` AS `hubungan_keluarga`,`b`.`tanggal_lahir_keluarga` AS `tanggal_lahir_keluarga`,`b`.`alamat` AS `alamat`,`b`.`no_telp` AS `no_telp`,`b`.`pekerjaan` AS `pekerjaan`,`b`.`pid_pengalaman_pelamar` AS `pid_pengalaman_pelamar`,`b`.`nama_perusahaan` AS `nama_perusahaan`,`b`.`level` AS `level`,`b`.`status` AS `status`,`b`.`jenis_pekerjaan` AS `jenis_pekerjaan`,`b`.`tahun_masuk_pengalaman` AS `tahun_masuk_pengalaman`,`b`.`tahun_keluar` AS `tahun_keluar`,`b`.`posisi` AS `posisi`,`b`.`pekerjaan_desc` AS `pekerjaan_desc` from (`tbl_user` `a` left join `vw_pelamar` `b` on((`a`.`ID` = `b`.`pid_pelamar`)));

-- ----------------------------
-- View structure for tbl_vw_validasi_otomatis
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_vw_validasi_otomatis` AS select `a`.`pid_verivikasi` AS `pid_verivikasi`,`a`.`pid_posisi` AS `pid_posisi`,`a`.`posisi` AS `posisi`,`a`.`aktivasi_usia` AS `aktivasi_usia`,`a`.`usia_maxs` AS `usia_maxs`,`a`.`detail_ukuran_usia` AS `detail_ukuran_usia`,`a`.`aktivasi_jenis_kelamin` AS `aktivasi_jenis_kelamin`,`a`.`jenis_kelamin` AS `jenis_kelamin`,`a`.`aktivasi_status` AS `aktivasi_status`,`a`.`status` AS `status`,`a`.`aktivasi_ipk` AS `aktivasi_ipk`,`a`.`ipk` AS `ipk`,`a`.`aktivasi_jurusan` AS `aktivasi_jurusan`,`a`.`jurusan` AS `jurusan`,`a`.`create_by` AS `create_by`,`a`.`create_date` AS `create_date`,`a`.`last_update_by` AS `last_update_by`,`a`.`last_update_date` AS `last_update_date`,`tbl_t_rekrutmen`.`pid_source` AS `pid_source` from ((`tbl_r_verivikasi_auto` `a` left join `tbl_t_rekrutmen_detail` on((`a`.`pid_posisi` = `tbl_t_rekrutmen_detail`.`pid_posisi`))) left join `tbl_t_rekrutmen` on((`tbl_t_rekrutmen_detail`.`pid_rekrutmen` = `tbl_t_rekrutmen`.`pid`)));

-- ----------------------------
-- View structure for vw_pelamar
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_pelamar` AS select `a`.`pid_pelamar` AS `pid_pelamar`,`a`.`nama_pelamar` AS `nama_pelamar`,`a`.`no_ktp` AS `no_ktp`,`a`.`email` AS `email`,`a`.`tempat_lahir` AS `tempat_lahir`,`a`.`tanggal_lahir` AS `tanggal_lahir`,`a`.`jenkel` AS `jenkel`,`a`.`agama` AS `agama`,`a`.`gol_darah` AS `gol_darah`,`a`.`status_pernikahan` AS `status_pernikahan`,`a`.`profil_path` AS `profil_path`,`b`.`pid_info_kontak_pelamar` AS `pid_info_kontak_pelamar`,`b`.`alamat_ktp` AS `alamat_ktp`,`b`.`kota_ktp` AS `kota_ktp`,`b`.`propinsi_ktp` AS `propinsi_ktp`,`b`.`domisili_sama` AS `domisili_sama`,`b`.`alamat_domisili` AS `alamat_domisili`,`b`.`kota_domisili` AS `kota_domisili`,`b`.`propinsi_domisili` AS `propinsi_domisili`,`b`.`kode_pos` AS `kode_pos`,`b`.`no_telpon` AS `no_telpon`,`b`.`no_hp` AS `no_hp`,`c`.`pid_pendidikan_pelamar` AS `pid_pendidikan_pelamar`,`c`.`jenjang_pendidikan` AS `jenjang_pendidikan`,`c`.`sekolah_universitas` AS `sekolah_universitas`,`c`.`jurusan` AS `jurusan`,`c`.`nem_ipk` AS `nem_ipk`,`c`.`tahun_masuk` AS `tahun_masuk_pendidikan`,`c`.`tahun_lulus` AS `tahun_lulus`,`d`.`pid_berkas_pelamar` AS `pid_berkas_pelamar`,`d`.`upload_ktp` AS `upload_ktp`,`d`.`upload_akte_lahir` AS `upload_akte_lahir`,`d`.`upload_ijazah` AS `upload_ijazah`,`d`.`upload_transkrip` AS `upload_transkrip`,`e`.`pid_keluarga_pelamar` AS `pid_keluarga_pelamar`,`e`.`nama_lengkap` AS `nama_lengkap`,`e`.`jenis_kelamin` AS `jenis_kelamin`,`e`.`hubungan_keluarga` AS `hubungan_keluarga`,`e`.`tanggal_lahir` AS `tanggal_lahir_keluarga`,`e`.`alamat` AS `alamat`,`e`.`no_telp` AS `no_telp`,`e`.`pekerjaan` AS `pekerjaan`,`f`.`pid_pengalaman_pelamar` AS `pid_pengalaman_pelamar`,`f`.`nama_perusahaan` AS `nama_perusahaan`,`f`.`level` AS `level`,`f`.`status` AS `status`,`f`.`jenis_pekerjaan` AS `jenis_pekerjaan`,`f`.`tahun_masuk` AS `tahun_masuk_pengalaman`,`f`.`tahun_keluar` AS `tahun_keluar`,`f`.`posisi` AS `posisi`,`f`.`pekerjaan_desc` AS `pekerjaan_desc` from (((((`tbl_m_pelamar` `a` left join `tbl_m_info_kontak_pelamar` `b` on((`a`.`pid_pelamar` = `b`.`pid_info_kontak_pelamar`))) left join `tbl_m_pendidikan_pelamar` `c` on((`a`.`pid_pelamar` = `c`.`pid_pendidikan_pelamar`))) left join `tbl_m_berkas_pelamar` `d` on((`a`.`pid_pelamar` = `d`.`pid_berkas_pelamar`))) left join `tbl_m_keluarga_pelamar` `e` on((`a`.`pid_pelamar` = `e`.`pid_keluarga_pelamar`))) left join `tbl_m_pengalaman_pelamar` `f` on((`a`.`pid_pelamar` = `f`.`pid_pelamar`)));

-- ----------------------------
-- View structure for vw_tbl_t_progress_lamaran_desc
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_tbl_t_progress_lamaran_desc` AS select `a`.`pid_pelamar` AS `pid_pelamar`,`a`.`pid_rekrutmen` AS `pid_rekrutmen`,`a`.`administrasi` AS `administrasi`,`a`.`psikotes` AS `psikotes`,`a`.`interview` AS `interview`,`a`.`interview_user` AS `interview_user`,`a`.`mcu` AS `mcu`,`a`.`sign_contract` AS `sign_contract`,`a`.`created_by` AS `created_by`,`a`.`created_date` AS `created_date`,`a`.`last_update_by` AS `last_update_by`,`a`.`last_update_date` AS `last_update_date`,max(`a`.`last_update_date`) AS `Max(``a``.``last_update_date``)` from (`tbl_t_progress_lamaran` `a` join `tbl_t_progress_lamaran` `b` on((`a`.`pid` = `b`.`pid`))) group by `a`.`pid_pelamar`;

-- ----------------------------
-- View structure for vw_tes
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_tes` AS select `a`.`pid_pelamar` AS `pid_pelamar`,`a`.`nama_pelamar` AS `nama_pelamar`,`a`.`no_ktp` AS `no_ktp`,`a`.`tanggal_lahir` AS `tanggal_lahir`,`a`.`sekolah_universitas` AS `sekolah_universitas`,`a`.`tahun_lulus` AS `tahun_lulus`,`a`.`no_hp` AS `no_hp`,`a`.`upload_ktp` AS `upload_ktp`,`a`.`upload_akte_lahir` AS `upload_akte_lahir`,`a`.`upload_ijazah` AS `upload_ijazah`,`a`.`upload_transkrip` AS `upload_transkrip`,`b`.`status_blacklist` AS `status_blacklist`,'tes' AS `kualifikasi`,'tes2' AS `kriteria` from (`vw_pelamar` `a` left join `tbl_t_blacklist` `b` on((`a`.`pid_pelamar` = `b`.`pid_pelamar`)));

-- ----------------------------
-- View structure for vw_validasi_pelamar
-- ----------------------------
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_validasi_pelamar` AS select `c`.`pid` AS `pid`,`c`.`pid_user` AS `pid_user`,`a`.`pid_rekrutmen` AS `pid_rekrutmen`,`b`.`pid_posisi` AS `pid_posisi`,`b`.`pendidikan` AS `pendidikan`,`b`.`jurusan` AS `jurusan`,`b`.`min_gpa` AS `min_gpa`,`d`.`nama_pelamar` AS `nama_pelamar`,`d`.`no_ktp` AS `no_ktp`,`d`.`tempat_lahir` AS `tempat_lahir`,`d`.`tanggal_lahir` AS `tanggal_lahir`,`f`.`jenis_kelamin` AS `jenis_kelamin`,`f`.`usia` AS `usia`,`d`.`sekolah_universitas` AS `sekolah_universitas`,`d`.`tahun_lulus` AS `tahun_lulus`,`d`.`no_hp` AS `no_hp`,`e`.`pid_source` AS `pid_source` from (((((`tbl_t_rekrutmen_detail` `a` join `tbl_vw_m_posisi_detail` `b` on((`a`.`pid_posisi` = `b`.`pid_posisi`))) join `tbl_t_lamaran` `c` on((`c`.`pid_rekrutmen` = `a`.`pid_rekrutmen`))) join `tbl_vw_user_pelamar` `d` on((`c`.`pid_user` = `d`.`pid_pelamar`))) join `tbl_t_rekrutmen` `e` on((`a`.`pid_rekrutmen` = `e`.`pid`))) join `tbl_m_posisi` `f` on((`a`.`pid_posisi` = `f`.`pid`)));

-- ----------------------------
-- Procedure structure for sp_auto_blacklist
-- ----------------------------
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_auto_blacklist`()
BEGIN

UPDATE `db_pama_hire`.`tbl_t_blacklist`
SET
`status_blacklist` = case when (date_format(now(),'%Y%m%d')-fn_r_Last_update_bl(pid_pelamar))/10000 >=1 then 0 else status_blacklist end,
`last_update_by` = case when (date_format(now(),'%Y%m%d')-fn_r_Last_update_bl(pid_pelamar))/10000 >=1 then 'SYSTEM' else last_update_by end,
`last_update_date` = case when (date_format(now(),'%Y%m%d')-fn_r_Last_update_bl(pid_pelamar))/10000 >=1 then now() else last_update_date end
;

END;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_auto_kualifikasi
-- ----------------------------
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_auto_kualifikasi`()
BEGIN

UPDATE `db_pama_hire`.`tbl_t_progress_lamaran`
SET
	`administrasi` =  CASE WHEN fn_validasi_pendidikan(pid_pelamar) != 'Lulus' THEN 0 ELSE administrasi END ,
	`last_update_by` =  CASE WHEN fn_validasi_pendidikan(pid_pelamar) != 'Lulus' THEN 'SYSTEM' ELSE last_update_by END ,
	`last_update_date` =  CASE WHEN fn_validasi_pendidikan(pid_pelamar) != 'Lulus' THEN now() ELSE last_update_date END 
;

END;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_blacklist
-- ----------------------------
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_blacklist`(
spid_pelamar varchar(50),
snrp varchar(50),
sstatus varchar(1)
)
BEGIN
UPDATE `db_pama_hire`.`tbl_t_blacklist`
SET
`status_blacklist` = sstatus,
`last_update_by` = snrp,
`last_update_date` = now()
WHERE `pid_pelamar` = spid_pelamar;

END;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_insert_tbl_r_verivikasi_auto
-- ----------------------------
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_tbl_r_verivikasi_auto`(
spid_posisi varchar(50),
sposisi varchar(50),
susia_maxs varchar(50),
sjenis_kelamin varchar(50),
sstatus varchar(50),
sipk varchar(50),
sjurusan varchar(50),
screate_by varchar(50)
)
BEGIN
insert into tbl_r_verivikasi_auto
(`pid_verivikasi`,
`pid_posisi`,
`posisi`,
-- `aktivasi_usia`,
 `usia_maxs`,
 `detail_ukuran_usia`,
-- `aktivasi_jenis_kelamin`,
 `jenis_kelamin`,
-- `aktivasi_status`,
 `status`,
-- `aktivasi_ipk`,
 `ipk`,
-- `aktivasi_jurusan`,
 `jurusan`,
`create_by`,
`create_date`
-- `last_update_by`,
-- `last_update_date`
)
VALUES
(
uuid(),
spid_posisi,
sposisi,
susia_maxs,
'Tahun',
sjenis_kelamin,
sstatus,
sipk,
sjurusan,
screate_by,
now()
);

END;;
DELIMITER ;

-- ----------------------------
-- Function structure for fn_r_auto_blacklist_X
-- ----------------------------
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_r_auto_blacklist_X`(
spid_pelamar varchar(50)
) RETURNS int(11)
BEGIN

declare ireturn int default(
select 
	case when count(1)>=1 then 
		case when psikotes=1 then 1 
				when interview=1 then 1
				when interview_user=1 then 1
				when mcu=1 then 1
				when sign_contract=1 then 1
		else 0
		end
	end		
	FROM	tbl_t_progress_lamaran AS a
where pid_pelamar=spid_pelamar
order by last_update_date desc
limit 1
);

-- declare ireturn int;

RETURN ireturn;
END;;
DELIMITER ;

-- ----------------------------
-- Function structure for fn_r_Last_update_bl
-- ----------------------------
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_r_Last_update_bl`(
spid_pelamar varchar(50)
) RETURNS varchar(50) CHARSET latin1
BEGIN

declare ireturn varchar(50) default(
select date_format(last_update_date,'%Y%m%d')
	FROM	tbl_t_blacklist
where pid_pelamar=spid_pelamar
order by last_update_date desc
limit 1
);


RETURN ireturn;
END;;
DELIMITER ;

-- ----------------------------
-- Function structure for fn_validasi_data_pelamar
-- ----------------------------
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_validasi_data_pelamar`(
 spid varchar(50)
) RETURNS varchar(50) CHARSET latin1
BEGIN

-- prioritas --
declare inama int default(
	SELECT 
	case when substring_index(nama_pelamar,' ',-2) in (select substring_index(nama_pelamar,' ',-2) from vw_validasi_pelamar)
		then 1
		else 0 
	 end 
	FROM tbl_vw_user_pelamar
where pid_pelamar=spid
);

declare ino_ktp int default(
	SELECT 
	case when left(no_ktp,6) in (select left(no_ktp,6) from vw_validasi_pelamar)
		then 1
		else 0 
	 end 
	FROM tbl_vw_user_pelamar
where pid_pelamar=spid
);

declare itgl_lahir int default(
	SELECT 
	case when tanggal_lahir in (select tanggal_lahir from vw_validasi_pelamar)
		then 1
		else 0 
	 end 
	FROM tbl_vw_user_pelamar
where pid_pelamar=spid
);

declare ino_hp int default(
	SELECT 
	case when right(no_hp,4) in (select right(no_hp,4) from vw_validasi_pelamar)
		then 1
		else 0 
	 end 
	FROM tbl_vw_user_pelamar
where pid_pelamar=spid
);

-- opsional --
declare itmpt_lahir int default(
	SELECT 
	case when tempat_lahir in (select tempat_lahir from vw_validasi_pelamar)
		then 1
		else 0 
	 end 
	FROM tbl_vw_user_pelamar
where pid_pelamar=spid
);

declare isekolah int default(
	SELECT 
	case when sekolah_universitas in (select sekolah_universitas from vw_validasi_pelamar)
		then 1
		else 0 
	 end 
	FROM tbl_vw_user_pelamar
where pid_pelamar=spid
);

declare ithn_lulus int default(
	SELECT 
	case when tahun_lulus in (select tahun_lulus from vw_validasi_pelamar)
		then 1
		else 0 
	 end 
	FROM tbl_vw_user_pelamar
where pid_pelamar=spid
);

declare itotal int default( inama+ino_ktp+itgl_lahir+ino_hp);

declare ireturn varchar(50);
if (itotal >=2)
	then set ireturn = 'TERDUPLIKASI';
elseif(itotal =1)
	then set ireturn='DIINDIKASIKAN TERDUPLIKASI';
else set ireturn='';
end if;


RETURN ireturn;
END;;
DELIMITER ;

-- ----------------------------
-- Function structure for fn_validasi_pendidikan
-- ----------------------------
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_validasi_pendidikan`(
spid varchar(50)
) RETURNS varchar(50) CHARSET latin1
BEGIN

declare ireturn1 int default(
SELECT count(1)
FROM tbl_vw_user_pelamar
where pid_pelamar= spid
and jenkel in (select distinct jenis_kelamin from vw_validasi_pelamar where pid_user=spid)
);

declare ireturn2 int default(
SELECT count(1)
FROM tbl_vw_user_pelamar
where pid_pelamar= spid
and year(now())-year(tanggal_lahir) <= (select max(usia) from vw_validasi_pelamar where pid_user=spid)
);

declare ireturn3 int default(
SELECT count(1)
FROM tbl_vw_user_pelamar
where pid_pelamar= spid
and jenjang_pendidikan in (select pendidikan from vw_validasi_pelamar where pid_user=spid)
);

declare ireturn4 int default(
SELECT count(1)
FROM tbl_vw_user_pelamar
where pid_pelamar= spid
and nem_ipk >= (select min(min_gpa) from vw_validasi_pelamar where pid_user=spid)
);

declare ireturn5 int default(
SELECT count(1)
FROM tbl_vw_user_pelamar
where pid_pelamar= spid
and jurusan in (select jurusan from vw_validasi_pelamar where pid_user=spid)
);

declare ireturn varchar(50);
if(ireturn1+ireturn2+ireturn3+ireturn4+ireturn5=5)
	then set ireturn='Lulus';
else
	set ireturn='Tidak Lulus';
end if;

-- declare ireturn varchar(50) default(
-- SELECT count(1)
-- FROM tbl_vw_user_pelamar
-- where
-- pid_pelamar= spid
-- and jenkel in (select distinct jenis_kelamin from vw_validasi_pelamar where pid_user=spid)
-- and year(now())-year(tanggal_lahir) <= (select max(usia) from vw_validasi_pelamar where pid_user=spid)
-- and jenjang_pendidikan in (select pendidikan from vw_validasi_pelamar where pid_user=spid)
-- and nem_ipk >= (select min(min_gpa) from vw_validasi_pelamar where pid_user=spid)
-- and jurusan in (select jurusan from vw_validasi_pelamar where pid_user=spid)
-- );

RETURN ireturn;
END;;
DELIMITER ;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_m_berkas_pelamar` VALUES ('04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', 'uploads/berkas/5ad69fa6323b1.jpg', 'uploads/berkas/5ad69fafbefd4.jpg', 'uploads/berkas/5ad69fbd28c92.png', 'uploads/berkas/5ad69fc58c833.jpg', '1234', '2018-04-13 09:52:21', '1234', '2018-04-18 08:30:45');
INSERT INTO `tbl_m_berkas_pelamar` VALUES ('111AAA222AAA', 'uploads/berkas/5ad9acab7668d.jpg', 'uploads/berkas/5ad9acb537c88.jpg', 'uploads/berkas/5ad9acba5d1b8.png', 'uploads/berkas/5ad9acbd44299.jpg', '1234', '2018-04-20 16:02:35', '1234', '2018-04-20 16:02:53');
INSERT INTO `tbl_m_bulan` VALUES ('01', 'Januari');
INSERT INTO `tbl_m_bulan` VALUES ('02', 'Februari');
INSERT INTO `tbl_m_bulan` VALUES ('03', 'Maret');
INSERT INTO `tbl_m_bulan` VALUES ('04', 'April');
INSERT INTO `tbl_m_bulan` VALUES ('05', 'Mei');
INSERT INTO `tbl_m_bulan` VALUES ('06', 'Juni');
INSERT INTO `tbl_m_bulan` VALUES ('07', 'Juni');
INSERT INTO `tbl_m_bulan` VALUES ('08', 'Agustus');
INSERT INTO `tbl_m_bulan` VALUES ('09', 'September');
INSERT INTO `tbl_m_bulan` VALUES ('10', 'Oktober');
INSERT INTO `tbl_m_bulan` VALUES ('11', 'November');
INSERT INTO `tbl_m_bulan` VALUES ('12', 'Desember');
INSERT INTO `tbl_m_info_kontak_pelamar` VALUES ('04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', 'Bekasi', 'Kota Bekasi', 'Jawa Barat', '1', '', '', '', '17510', '0218888', '08722222', '1234', '2018-04-13 09:51:47', '1234', '2018-04-18 14:38:42');
INSERT INTO `tbl_m_info_kontak_pelamar` VALUES ('111AAA222AAA', 'Tambun', 'Kota Bekasi', 'Jawa Barat', '1', '', '', '', '17510', '021777799', '08577777799', '1234', '2018-04-20 16:01:48', '1234', '2018-04-25 14:18:02');
INSERT INTO `tbl_m_jurusan` VALUES ('56fe74ba789ea0a8a142f2ed25120ca3', 'A001', 'SMA/SMK', 'SMA IPA', 'Abdul', '2018-03-28 09:38:08', 'Abdul', '2018-03-28 09:38:08');
INSERT INTO `tbl_m_jurusan` VALUES ('e4cb35b0ea94a6b0bf9c8a2792ca7aee', 'A002', 'SMA/SMK', 'SMA IPS', 'Abdul', '2018-03-28 04:05:49', 'Abdul', '2018-03-28 04:06:20');
INSERT INTO `tbl_m_jurusan` VALUES ('e4cb35b0ea94a6b0bf9c8a2792ca7aee9', 'A003', 'D-III', 'ILMU KOMPUTER', 'YAQ', '2018-03-28 04:05:49', 'YAQ', '2018-03-28 04:06:20');
INSERT INTO `tbl_m_keluarga_pelamar` VALUES ('04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', 'eko p', '1', 'Kakak Laki-Laki', '2018-04-10', 'Bekasi', '087777', 'apa aja', '1234', '2018-04-13 14:14:16', '1234', '2018-04-18 14:39:04');
INSERT INTO `tbl_m_keluarga_pelamar` VALUES ('111AAA222AAA', 'Budi', '1', 'Kakak Laki-Laki', '2018-04-10', 'Bekasi', '0877777998', 'apap', '1234', '2018-04-20 16:03:20', '1234', '2018-04-25 14:18:29');
INSERT INTO `tbl_m_pelamar` VALUES ('04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', 'Bagus Kuncoro PRABOWO EKO', '1111111111111111', 'abdul.wicaksono@gmail.com', 'Kab.Bekasi', '1994-06-15', '1', 'Islam', 'A', 'Lajang', 'uploads/profiles/04f289d5-3ec5-11e8-a66f-782bcbdbdcb7.jpg', '1234', '2018-04-13 14:21:09', '1234', '2018-04-18 14:38:34');
INSERT INTO `tbl_m_pelamar` VALUES ('111AAA222AAA', 'yaq', '9999999999999999', 'yaq@gmail.com', 'Kab.Bekasi', '1998-07-16', '1', 'Islam', '-', 'Menikah', 'uploads/profiles/111AAA222AAA.jpg', '1234', '2018-04-20 16:01:02', '1234', '2018-04-25 14:17:53');
INSERT INTO `tbl_m_pendidikan_pelamar` VALUES ('04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', 'D-III', 'Universitas  Padjadjaran', 'ILMU KOMPUTER', '3.30', '2014', '2017', '1234', '2018-04-18 14:40:22', '1234', '2018-04-18 14:40:22');
INSERT INTO `tbl_m_pendidikan_pelamar` VALUES ('111AAA222AAA', 'D-III', 'STMIK Bani Saleh', 'ILMU KOMPUTER', '2.8', '2010', '2013', '1234', '2018-04-20 16:02:23', '1234', '2018-04-25 14:18:17');
INSERT INTO `tbl_m_pengalaman_pelamar` VALUES ('1', '04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', 'ptpt', 'level', 'Aktif', 'Permanent', '2014', 'Sekarang', 'posisi', 'des11111', '1234', '2018-04-13 09:53:08', '1234', '2018-04-13 09:53:08');
INSERT INTO `tbl_m_posisi` VALUES ('462f98f4ada974f5dceffe4b370dfab4', 'zzzz', 'Enginering Group Leader', 'Pro-Hire', '0', 'Dept. Head', 'Dept. Head', 'SMA/SMK', '2.76', '1', null, '25', 'HO', '123456', 'Abdul', '2018-04-18 04:22:39', 'Abdul', '2018-04-18 06:01:55');
INSERT INTO `tbl_m_posisi` VALUES ('6633a327a60021c67ef191b3f9c03f37', 'Abdul123', 'Enginering Group Leader', 'Pro-Hire', '0', 'Dept. Head', 'Dept. Head', 'SMA/SMK', '2.76', '1', null, '25', 'HO', 'aaaa', 'Abdul', '2018-04-17 08:51:39', 'Abdul', '2018-04-18 06:19:44');
INSERT INTO `tbl_m_posisi` VALUES ('8a10b73a82b9811a4edf61aac390d901', 'zzzzz', 'Enginering Group Leader', 'Pro-Hire', '0', 'Dept. Head', 'Dept. Head', 'SMA/SMK', '0', '1', null, '25', 'HO', 'zzzzzz', 'Abdul', '2018-04-18 04:21:38', 'Abdul', '2018-04-18 04:21:38');
INSERT INTO `tbl_m_posisi` VALUES ('af11a83bb6b5f61c40c45197351b4b9a', 'ccccc', 'Enginering Group Leader', 'Pro-Hire', '0', 'Dept. Head', 'Dept. Head', 'SMA/SMK', '0', '1', null, '25', 'HO', '1234', 'Abdul', '2018-04-18 03:28:47', 'Abdul', '2018-04-18 03:28:47');
INSERT INTO `tbl_m_posisi` VALUES ('f904706be9f017e7f20f3ef196f876a8', 'aaaa', 'Enginering Group Leader', 'Pro-Hire', '0', 'Dept. Head', 'Dept. Head', 'SMA/SMK', '0', '1', null, '25', 'HO', 'sdsd', 'Abdul', '2018-04-17 08:47:31', 'Abdul', '2018-04-17 08:47:31');
INSERT INTO `tbl_m_posisi` VALUES ('fd00ba21a2023f19c29e44ae9aa63583', 'A.1.1.124', 'Enginering Group Leader', 'Pro-Hire', '0', 'Dept. Head', 'Dept. Head', 'SMA/SMK', '2.9', '1', null, '25', 'HO', '123', 'Abdul', '2018-04-18 09:49:19', 'Abdul', '2018-04-18 09:49:52');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad5997b533fe3.03811255', '6633a327a60021c67ef191b3f9c03f37', '56fe74ba789ea0a8a142f2ed25120ca3', '2.76', 'Abdul', '2018-04-17 08:51:39', 'Abdul', '2018-04-18 06:19:16');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad69f4fd024f8.85669426', 'af11a83bb6b5f61c40c45197351b4b9a', '56fe74ba789ea0a8a142f2ed25120ca3', '2.75', 'Abdul', '2018-04-18 03:28:47', 'Abdul', '2018-04-18 03:28:47');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad69f4fe2f8e4.05226932', 'af11a83bb6b5f61c40c45197351b4b9a', 'e4cb35b0ea94a6b0bf9c8a2792ca7aee', '2.75', 'Abdul', '2018-04-18 03:28:47', 'Abdul', '2018-04-18 03:28:47');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad6abb2be3e86.85170185', '8a10b73a82b9811a4edf61aac390d901', '56fe74ba789ea0a8a142f2ed25120ca3', '2.75', 'Abdul', '2018-04-18 04:21:38', 'Abdul', '2018-04-18 04:21:38');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad6abb2c86605.48367231', '8a10b73a82b9811a4edf61aac390d901', 'e4cb35b0ea94a6b0bf9c8a2792ca7aee', '2.75', 'Abdul', '2018-04-18 04:21:38', 'Abdul', '2018-04-18 04:21:38');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad6abefcd6b86.31413627', '462f98f4ada974f5dceffe4b370dfab4', '56fe74ba789ea0a8a142f2ed25120ca3', '2.76', 'Abdul', '2018-04-18 04:22:39', 'Abdul', '2018-04-18 05:58:50');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad6abefd56b77.33204351', '462f98f4ada974f5dceffe4b370dfab4', 'e4cb35b0ea94a6b0bf9c8a2792ca7aee', '2.75', 'Abdul', '2018-04-18 04:22:39', 'Abdul', '2018-04-18 04:22:39');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad6f87f6de784.90839348', 'fd00ba21a2023f19c29e44ae9aa63583', '56fe74ba789ea0a8a142f2ed25120ca3', '2.9', 'Abdul', '2018-04-18 09:49:19', 'Abdul', '2018-04-18 09:49:35');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad6f87f7b9438.18447074', 'fd00ba21a2023f19c29e44ae9aa63583', 'e4cb35b0ea94a6b0bf9c8a2792ca7aee', '2.75', 'Abdul', '2018-04-18 09:49:19', 'Abdul', '2018-04-18 09:49:35');
INSERT INTO `tbl_m_posisi_detail` VALUES ('5ad6f87f7b9438.18447074W', '8a10b73a82b9811a4edf61aac390d901', 'e4cb35b0ea94a6b0bf9c8a2792ca7aee9', '3.3', 'YAQ', '2018-04-18 09:49:19', 'YAQ', '2018-04-18 09:49:35');
INSERT INTO `tbl_r_jurusan` VALUES ('1', 'ADMINISTRASI BISNIS');
INSERT INTO `tbl_r_jurusan` VALUES ('2', 'ADMINISTRASI NIAGA');
INSERT INTO `tbl_r_jurusan` VALUES ('3', 'ADMINISTRASI PERKANTORAN');
INSERT INTO `tbl_r_jurusan` VALUES ('4', 'AKUNTANSI');
INSERT INTO `tbl_r_jurusan` VALUES ('5', 'DESAIN KOMUNIKASI VISUAL');
INSERT INTO `tbl_r_jurusan` VALUES ('6', 'ELEKTRONIKA DAN INSTRUMENTASI');
INSERT INTO `tbl_r_jurusan` VALUES ('7', 'HUBUNGAN INTERNASIONAL');
INSERT INTO `tbl_r_jurusan` VALUES ('8', 'HUKUM');
INSERT INTO `tbl_r_jurusan` VALUES ('9', 'IESP');
INSERT INTO `tbl_r_jurusan` VALUES ('10', 'ILMU KOMPUTER');
INSERT INTO `tbl_r_jurusan` VALUES ('11', 'ILMU KOMPUTER / INFORMATIKA');
INSERT INTO `tbl_r_jurusan` VALUES ('12', 'KEUANGAN');
INSERT INTO `tbl_r_jurusan` VALUES ('13', 'KIMIA');
INSERT INTO `tbl_r_jurusan` VALUES ('14', 'KOMUNIKASI');
INSERT INTO `tbl_r_jurusan` VALUES ('15', 'LINGKUNGAN');
INSERT INTO `tbl_r_jurusan` VALUES ('16', 'MANAJEMEN');
INSERT INTO `tbl_r_jurusan` VALUES ('17', 'MANAJEMEN SDM');
INSERT INTO `tbl_r_jurusan` VALUES ('18', 'METALURGI');
INSERT INTO `tbl_r_jurusan` VALUES ('19', 'NIAGA');
INSERT INTO `tbl_r_jurusan` VALUES ('20', 'PERPAJAKAN');
INSERT INTO `tbl_r_jurusan` VALUES ('21', 'PERTANAHAN');
INSERT INTO `tbl_r_jurusan` VALUES ('22', 'PSIKOLOGI');
INSERT INTO `tbl_r_jurusan` VALUES ('23', 'SEKRETARIS');
INSERT INTO `tbl_r_jurusan` VALUES ('24', 'SISTEM INFORMASI');
INSERT INTO `tbl_r_jurusan` VALUES ('25', 'SMA IPA');
INSERT INTO `tbl_r_jurusan` VALUES ('26', 'SMA IPS');
INSERT INTO `tbl_r_jurusan` VALUES ('27', 'SMA UMUM');
INSERT INTO `tbl_r_jurusan` VALUES ('28', 'SMK ADMINISTRASI');
INSERT INTO `tbl_r_jurusan` VALUES ('29', 'SMK ADMINISTRASI PERKANTORAN');
INSERT INTO `tbl_r_jurusan` VALUES ('30', 'SMK KESEKRETARIATAN');
INSERT INTO `tbl_r_jurusan` VALUES ('31', 'SMK KIMIA');
INSERT INTO `tbl_r_jurusan` VALUES ('32', 'SMK LISTRIK');
INSERT INTO `tbl_r_jurusan` VALUES ('33', 'SMK LISTRIK (PDKB)');
INSERT INTO `tbl_r_jurusan` VALUES ('34', 'SMK MESIN');
INSERT INTO `tbl_r_jurusan` VALUES ('35', 'SMK SIPIL');
INSERT INTO `tbl_r_jurusan` VALUES ('36', 'STATISTIK');
INSERT INTO `tbl_r_jurusan` VALUES ('37', 'TEKNIK ELEKTRO');
INSERT INTO `tbl_r_jurusan` VALUES ('38', 'TEKNIK FISIKA');
INSERT INTO `tbl_r_jurusan` VALUES ('39', 'TEKNIK GEOLOGI');
INSERT INTO `tbl_r_jurusan` VALUES ('40', 'TEKNIK INDUSTRI');
INSERT INTO `tbl_r_jurusan` VALUES ('41', 'TEKNIK INFORMATIKA');
INSERT INTO `tbl_r_jurusan` VALUES ('42', 'TEKNIK KIMIA');
INSERT INTO `tbl_r_jurusan` VALUES ('43', 'TEKNIK LINGKUNGAN');
INSERT INTO `tbl_r_jurusan` VALUES ('44', 'TEKNIK MESIN');
INSERT INTO `tbl_r_jurusan` VALUES ('45', 'TEKNIK METALURGI');
INSERT INTO `tbl_r_jurusan` VALUES ('46', 'TEKNIK PERMINYAKAN');
INSERT INTO `tbl_r_jurusan` VALUES ('47', 'TEKNIK PERTAMBANGAN');
INSERT INTO `tbl_r_jurusan` VALUES ('48', 'TEKNIK SIPIL');
INSERT INTO `tbl_r_jurusan` VALUES ('49', 'TEKNIK SISTEM PERKAPALAN');
INSERT INTO `tbl_r_jurusan` VALUES ('50', 'TEKNIK TELEKOMUNIKASI');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('1', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('2', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Barat Daya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('3', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Besar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('4', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Jaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('5', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('6', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Singkil');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('7', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Tamiang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('8', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('9', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Tenggara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('10', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('11', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Aceh Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('12', 'Sumatera Barat', 'Kab.Agam');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('13', 'Nusa Tenggara Timur (NTT)', 'Kab.Alor');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('14', 'Maluku', 'Kota Ambon');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('15', 'Sumatera Utara', 'Kab.Asahan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('16', 'Papua', 'Kab.Asmat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('17', 'Bali', 'Kab.Badung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('18', 'Kalimantan Selatan', 'Kab.Balangan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('19', 'Kalimantan Timur', 'Kota Balikpapan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('20', 'Nanggroe Aceh Darussalam (NAD)', 'Kota Banda Aceh');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('21', 'Lampung', 'Kota Bandar Lampung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('22', 'Jawa Barat', 'Kab.Bandung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('23', 'Jawa Barat', 'Kota Bandung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('24', 'Jawa Barat', 'Kab.Bandung Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('25', 'Sulawesi Tengah', 'Kab.Banggai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('26', 'Sulawesi Tengah', 'Kab.Banggai Kepulauan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('27', 'Sulawesi Tengah', 'Kab.Banggai Laut');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('28', 'Bangka Belitung', 'Kab.Bangka');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('29', 'Bangka Belitung', 'Kab.Bangka Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('30', 'Bangka Belitung', 'Kab.Bangka Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('31', 'Bangka Belitung', 'Kab.Bangka Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('32', 'Jawa Timur', 'Kab.Bangkalan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('33', 'Bali', 'Kab.Bangli');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('34', 'Kalimantan Selatan', 'Kab.Banjar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('35', 'Jawa Barat', 'Kota Banjar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('36', 'Kalimantan Selatan', 'Kota Banjarbaru');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('37', 'Kalimantan Selatan', 'Kota Banjarmasin');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('38', 'Jawa Tengah', 'Kab.Banjarnegara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('39', 'Sulawesi Selatan', 'Kab.Bantaeng');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('40', 'DI Yogyakarta', 'Kab.Bantul');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('41', 'Sumatera Selatan', 'Kab.Banyuasin');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('42', 'Jawa Tengah', 'Kab.Banyumas');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('43', 'Jawa Timur', 'Kab.Banyuwangi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('44', 'Kalimantan Selatan', 'Kab.Barito Kuala');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('45', 'Kalimantan Tengah', 'Kab.Barito Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('46', 'Kalimantan Tengah', 'Kab.Barito Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('47', 'Kalimantan Tengah', 'Kab.Barito Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('48', 'Sulawesi Selatan', 'Kab.Barru');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('49', 'Kepulauan Riau', 'Kota Batam');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('50', 'Jawa Tengah', 'Kab.Batang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('51', 'Jambi', 'Kab.Batang Hari');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('52', 'Jawa Timur', 'Kota Batu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('53', 'Sumatera Utara', 'Kab.Batu Bara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('54', 'Sulawesi Tenggara', 'Kota Bau-Bau');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('55', 'Jawa Barat', 'Kab.Bekasi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('56', 'Jawa Barat', 'Kota Bekasi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('57', 'Bangka Belitung', 'Kab.Belitung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('58', 'Bangka Belitung', 'Kab.Belitung Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('59', 'Nusa Tenggara Timur (NTT)', 'Kab.Belu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('60', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Bener Meriah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('61', 'Riau', 'Kab.Bengkalis');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('62', 'Kalimantan Barat', 'Kab.Bengkayang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('63', 'Bengkulu', 'Kota Bengkulu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('64', 'Bengkulu', 'Kab.Bengkulu Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('65', 'Bengkulu', 'Kab.Bengkulu Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('66', 'Bengkulu', 'Kab.Bengkulu Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('67', 'Kalimantan Timur', 'Kab.Berau');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('68', 'Papua', 'Kab.Biak Numfor');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('69', 'Nusa Tenggara Barat (NTB)', 'Kab.Bima');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('70', 'Nusa Tenggara Barat (NTB)', 'Kota Bima');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('71', 'Sumatera Utara', 'Kota Binjai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('72', 'Kepulauan Riau', 'Kab.Bintan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('73', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Bireuen');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('74', 'Sulawesi Utara', 'Kota Bitung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('75', 'Jawa Timur', 'Kab.Blitar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('76', 'Jawa Timur', 'Kota Blitar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('77', 'Jawa Tengah', 'Kab.Blora');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('78', 'Gorontalo', 'Kab.Boalemo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('79', 'Jawa Barat', 'Kab.Bogor');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('80', 'Jawa Barat', 'Kota Bogor');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('81', 'Jawa Timur', 'Kab.Bojonegoro');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('82', 'Sulawesi Utara', 'Kab.Bolaang Mongondow');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('83', 'Sulawesi Utara', 'Kab.Bolaang Mongondow Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('84', 'Sulawesi Utara', 'Kab.Bolaang Mongondow Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('85', 'Sulawesi Utara', 'Kab.Bolaang Mongondow Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('86', 'Sulawesi Tenggara', 'Kab.Bombana');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('87', 'Jawa Timur', 'Kab.Bondowoso');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('88', 'Sulawesi Selatan', 'Kab.Bone');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('89', 'Gorontalo', 'Kab.Bone Bolango');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('90', 'Kalimantan Timur', 'Kota Bontang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('91', 'Papua', 'Kab.Boven Digoel');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('92', 'Jawa Tengah', 'Kab.Boyolali');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('93', 'Jawa Tengah', 'Kab.Brebes');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('94', 'Sumatera Barat', 'Kota Bukittinggi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('95', 'Bali', 'Kab.Buleleng');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('96', 'Sulawesi Selatan', 'Kab.Bulukumba');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('97', 'Kalimantan Utara', 'Kab.Bulungan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('98', 'Jambi', 'Kab.Bungo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('99', 'Sulawesi Tengah', 'Kab.Buol');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('100', 'Maluku', 'Kab.Buru');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('101', 'Maluku', 'Kab.Buru Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('102', 'Sulawesi Tenggara', 'Kab.Buton');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('103', 'Sulawesi Tenggara', 'Kab.Buton Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('104', 'Sulawesi Tenggara', 'Kab.Buton Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('105', 'Sulawesi Tenggara', 'Kab.Buton Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('106', 'Jawa Barat', 'Kab.Ciamis');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('107', 'Jawa Barat', 'Kab.Cianjur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('108', 'Jawa Tengah', 'Kab.Cilacap');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('109', 'Banten', 'Kota Cilegon');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('110', 'Jawa Barat', 'Kota Cimahi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('111', 'Jawa Barat', 'Kab.Cirebon');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('112', 'Jawa Barat', 'Kota Cirebon');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('113', 'Sumatera Utara', 'Kab.Dairi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('114', 'Papua', 'Kab.Deiyai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('115', 'Sumatera Utara', 'Kab.Deli Serdang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('116', 'Jawa Tengah', 'Kab.Demak');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('117', 'Bali', 'Kota Denpasar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('118', 'Jawa Barat', 'Kota Depok');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('119', 'Sumatera Barat', 'Kab.Dharmasraya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('120', 'Papua', 'Kab.Dogiyai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('121', 'Nusa Tenggara Barat (NTB)', 'Kab.Dompu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('122', 'Sulawesi Tengah', 'Kab.Donggala');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('123', 'Riau', 'Kota Dumai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('124', 'Sumatera Selatan', 'Kab.Empat Lawang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('125', 'Nusa Tenggara Timur (NTT)', 'Kab.Ende');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('126', 'Sulawesi Selatan', 'Kab.Enrekang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('127', 'Papua Barat', 'Kab.Fakfak');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('128', 'Nusa Tenggara Timur (NTT)', 'Kab.Flores Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('129', 'Jawa Barat', 'Kab.Garut');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('130', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Gayo Lues');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('131', 'Bali', 'Kab.Gianyar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('132', 'Gorontalo', 'Kab.Gorontalo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('133', 'Gorontalo', 'Kota Gorontalo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('134', 'Gorontalo', 'Kab.Gorontalo Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('135', 'Sulawesi Selatan', 'Kab.Gowa');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('136', 'Jawa Timur', 'Kab.Gresik');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('137', 'Jawa Tengah', 'Kab.Grobogan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('138', 'DI Yogyakarta', 'Kab.Gunung Kidul');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('139', 'Kalimantan Tengah', 'Kab.Gunung Mas');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('140', 'Sumatera Utara', 'Kota Gunungsitoli');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('141', 'Maluku Utara', 'Kab.Halmahera Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('142', 'Maluku Utara', 'Kab.Halmahera Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('143', 'Maluku Utara', 'Kab.Halmahera Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('144', 'Maluku Utara', 'Kab.Halmahera Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('145', 'Maluku Utara', 'Kab.Halmahera Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('146', 'Kalimantan Selatan', 'Kab.Hulu Sungai Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('147', 'Kalimantan Selatan', 'Kab.Hulu Sungai Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('148', 'Kalimantan Selatan', 'Kab.Hulu Sungai Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('149', 'Sumatera Utara', 'Kab.Humbang Hasundutan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('150', 'Riau', 'Kab.Indragiri Hilir');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('151', 'Riau', 'Kab.Indragiri Hulu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('152', 'Jawa Barat', 'Kab.Indramayu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('153', 'Papua', 'Kab.Intan Jaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('154', 'DKI Jakarta', 'Kota Jakarta Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('155', 'DKI Jakarta', 'Kota Jakarta Pusat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('156', 'DKI Jakarta', 'Kota Jakarta Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('157', 'DKI Jakarta', 'Kota Jakarta Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('158', 'DKI Jakarta', 'Kota Jakarta Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('159', 'Jambi', 'Kota Jambi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('160', 'Papua', 'Kab.Jayapura');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('161', 'Papua', 'Kota Jayapura');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('162', 'Papua', 'Kab.Jayawijaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('163', 'Jawa Timur', 'Kab.Jember');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('164', 'Bali', 'Kab.Jembrana');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('165', 'Sulawesi Selatan', 'Kab.Jeneponto');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('166', 'Jawa Tengah', 'Kab.Jepara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('167', 'Jawa Timur', 'Kab.Jombang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('168', 'Papua Barat', 'Kab.Kaimana');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('169', 'Riau', 'Kab.Kampar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('170', 'Kalimantan Tengah', 'Kab.Kapuas');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('171', 'Kalimantan Barat', 'Kab.Kapuas Hulu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('172', 'Jawa Tengah', 'Kab.Karanganyar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('173', 'Bali', 'Kab.Karangasem');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('174', 'Jawa Barat', 'Kab.Karawang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('175', 'Kepulauan Riau', 'Kab.Karimun');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('176', 'Sumatera Utara', 'Kab.Karo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('177', 'Kalimantan Tengah', 'Kab.Katingan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('178', 'Bengkulu', 'Kab.Kaur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('179', 'Kalimantan Barat', 'Kab.Kayong Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('180', 'Jawa Tengah', 'Kab.Kebumen');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('181', 'Jawa Timur', 'Kab.Kediri');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('182', 'Jawa Timur', 'Kota Kediri');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('183', 'Papua', 'Kab.Keerom');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('184', 'Jawa Tengah', 'Kab.Kendal');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('185', 'Sulawesi Tenggara', 'Kota Kendari');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('186', 'Bengkulu', 'Kab.Kepahiang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('187', 'Kepulauan Riau', 'Kab.Kepulauan Anambas');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('188', 'Maluku', 'Kab.Kepulauan Aru');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('189', 'Sumatera Barat', 'Kab.Kepulauan Mentawai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('190', 'Riau', 'Kab.Kepulauan Meranti');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('191', 'Sulawesi Utara', 'Kab.Kepulauan Sangihe');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('192', 'Sulawesi Selatan', 'Kab.Kepulauan Selayar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('193', 'DKI Jakarta', 'Kab.Kepulauan Seribu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('194', 'Sulawesi Utara', 'Kab.Kepulauan Siau Tagulandang Biaro (Sitaro)');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('195', 'Maluku Utara', 'Kab.Kepulauan Sula');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('196', 'Sulawesi Utara', 'Kab.Kepulauan Talaud');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('197', 'Papua', 'Kab.Kepulauan Yapen');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('198', 'Jambi', 'Kab.Kerinci');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('199', 'Kalimantan Barat', 'Kab.Ketapang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('200', 'Jawa Tengah', 'Kab.Klaten');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('201', 'Bali', 'Kab.Klungkung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('202', 'Sulawesi Tenggara', 'Kab.Kolaka');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('203', 'Sulawesi Tenggara', 'Kab.Kolaka Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('204', 'Sulawesi Tenggara', 'Kab.Kolaka Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('205', 'Sulawesi Tenggara', 'Kab.Konawe');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('206', 'Sulawesi Tenggara', 'Kab.Konawe Kepulauan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('207', 'Sulawesi Tenggara', 'Kab.Konawe Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('208', 'Sulawesi Tenggara', 'Kab.Konawe Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('209', 'Kalimantan Selatan', 'Kab.Kotabaru');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('210', 'Sulawesi Utara', 'Kota Kotamobagu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('211', 'Kalimantan Tengah', 'Kab.Kotawaringin Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('212', 'Kalimantan Tengah', 'Kab.Kotawaringin Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('213', 'Riau', 'Kab.Kuantan Singingi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('214', 'Kalimantan Barat', 'Kab.Kubu Raya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('215', 'Jawa Tengah', 'Kab.Kudus');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('216', 'DI Yogyakarta', 'Kab.Kulon Progo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('217', 'Jawa Barat', 'Kab.Kuningan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('218', 'Nusa Tenggara Timur (NTT)', 'Kab.Kupang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('219', 'Nusa Tenggara Timur (NTT)', 'Kota Kupang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('220', 'Kalimantan Timur', 'Kab.Kutai Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('221', 'Kalimantan Timur', 'Kab.Kutai Kartanegara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('222', 'Kalimantan Timur', 'Kab.Kutai Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('223', 'Sumatera Utara', 'Kab.Labuhanbatu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('224', 'Sumatera Utara', 'Kab.Labuhanbatu Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('225', 'Sumatera Utara', 'Kab.Labuhanbatu Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('226', 'Sumatera Selatan', 'Kab.Lahat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('227', 'Kalimantan Tengah', 'Kab.Lamandau');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('228', 'Jawa Timur', 'Kab.Lamongan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('229', 'Lampung', 'Kab.Lampung Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('230', 'Lampung', 'Kab.Lampung Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('231', 'Lampung', 'Kab.Lampung Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('232', 'Lampung', 'Kab.Lampung Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('233', 'Lampung', 'Kab.Lampung Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('234', 'Kalimantan Barat', 'Kab.Landak');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('235', 'Sumatera Utara', 'Kab.Langkat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('236', 'Nanggroe Aceh Darussalam (NAD)', 'Kota Langsa');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('237', 'Papua', 'Kab.Lanny Jaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('238', 'Banten', 'Kab.Lebak');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('239', 'Bengkulu', 'Kab.Lebong');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('240', 'Nusa Tenggara Timur (NTT)', 'Kab.Lembata');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('241', 'Nanggroe Aceh Darussalam (NAD)', 'Kota Lhokseumawe');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('242', 'Sumatera Barat', 'Kab.Lima Puluh Kota');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('243', 'Kepulauan Riau', 'Kab.Lingga');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('244', 'Nusa Tenggara Barat (NTB)', 'Kab.Lombok Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('245', 'Nusa Tenggara Barat (NTB)', 'Kab.Lombok Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('246', 'Nusa Tenggara Barat (NTB)', 'Kab.Lombok Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('247', 'Nusa Tenggara Barat (NTB)', 'Kab.Lombok Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('248', 'Sumatera Selatan', 'Kota Lubuk Linggau');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('249', 'Jawa Timur', 'Kab.Lumajang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('250', 'Sulawesi Selatan', 'Kab.Luwu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('251', 'Sulawesi Selatan', 'Kab.Luwu Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('252', 'Sulawesi Selatan', 'Kab.Luwu Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('253', 'Jawa Timur', 'Kab.Madiun');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('254', 'Jawa Timur', 'Kota Madiun');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('255', 'Jawa Tengah', 'Kab.Magelang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('256', 'Jawa Tengah', 'Kota Magelang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('257', 'Jawa Timur', 'Kab.Magetan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('258', 'Kalimantan Timur', 'Kab.Mahakam Ulu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('259', 'Jawa Barat', 'Kab.Majalengka');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('260', 'Sulawesi Barat', 'Kab.Majene');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('261', 'Sulawesi Selatan', 'Kota Makassar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('262', 'Nusa Tenggara Timur (NTT)', 'Kab.Malaka');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('263', 'Jawa Timur', 'Kab.Malang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('264', 'Jawa Timur', 'Kota Malang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('265', 'Kalimantan Utara', 'Kab.Malinau');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('266', 'Maluku', 'Kab.Maluku Barat Daya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('267', 'Maluku', 'Kab.Maluku Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('268', 'Maluku', 'Kab.Maluku Tenggara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('269', 'Maluku', 'Kab.Maluku Tenggara Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('270', 'Sulawesi Barat', 'Kab.Mamasa');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('271', 'Papua', 'Kab.Mamberamo Raya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('272', 'Papua', 'Kab.Mamberamo Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('273', 'Sulawesi Barat', 'Kab.Mamuju');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('274', 'Sulawesi Barat', 'Kab.Mamuju Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('275', 'Sulawesi Barat', 'Kab.Mamuju Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('276', 'Sulawesi Utara', 'Kota Manado');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('277', 'Sumatera Utara', 'Kab.Mandailing Natal');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('278', 'Nusa Tenggara Timur (NTT)', 'Kab.Manggarai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('279', 'Nusa Tenggara Timur (NTT)', 'Kab.Manggarai Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('280', 'Nusa Tenggara Timur (NTT)', 'Kab.Manggarai Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('281', 'Papua Barat', 'Kab.Manokwari');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('282', 'Papua Barat', 'Kab.Manokwari Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('283', 'Papua', 'Kab.Mappi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('284', 'Sulawesi Selatan', 'Kab.Maros');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('285', 'Nusa Tenggara Barat (NTB)', 'Kota Mataram');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('286', 'Papua Barat', 'Kab.Maybrat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('287', 'Sumatera Utara', 'Kota Medan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('288', 'Kalimantan Barat', 'Kab.Melawi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('289', 'Kalimantan Barat', 'Kab.Mempawah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('290', 'Jambi', 'Kab.Merangin');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('291', 'Papua', 'Kab.Merauke');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('292', 'Lampung', 'Kab.Mesuji');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('293', 'Lampung', 'Kota Metro');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('294', 'Papua', 'Kab.Mimika');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('295', 'Sulawesi Utara', 'Kab.Minahasa');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('296', 'Sulawesi Utara', 'Kab.Minahasa Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('297', 'Sulawesi Utara', 'Kab.Minahasa Tenggara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('298', 'Sulawesi Utara', 'Kab.Minahasa Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('299', 'Jawa Timur', 'Kab.Mojokerto');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('300', 'Jawa Timur', 'Kota Mojokerto');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('301', 'Sulawesi Tengah', 'Kab.Morowali');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('302', 'Sulawesi Tengah', 'Kab.Morowali Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('303', 'Sumatera Selatan', 'Kab.Muara Enim');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('304', 'Jambi', 'Kab.Muaro Jambi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('305', 'Bengkulu', 'Kab.Muko Muko');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('306', 'Sulawesi Tenggara', 'Kab.Muna');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('307', 'Sulawesi Tenggara', 'Kab.Muna Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('308', 'Kalimantan Tengah', 'Kab.Murung Raya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('309', 'Sumatera Selatan', 'Kab.Musi Banyuasin');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('310', 'Sumatera Selatan', 'Kab.Musi Rawas');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('311', 'Sumatera Selatan', 'Kab.Musi Rawas Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('312', 'Papua', 'Kab.Nabire');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('313', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Nagan Raya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('314', 'Nusa Tenggara Timur (NTT)', 'Kab.Nagekeo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('315', 'Kepulauan Riau', 'Kab.Natuna');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('316', 'Papua', 'Kab.Nduga');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('317', 'Nusa Tenggara Timur (NTT)', 'Kab.Ngada');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('318', 'Jawa Timur', 'Kab.Nganjuk');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('319', 'Jawa Timur', 'Kab.Ngawi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('320', 'Sumatera Utara', 'Kab.Nias');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('321', 'Sumatera Utara', 'Kab.Nias Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('322', 'Sumatera Utara', 'Kab.Nias Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('323', 'Sumatera Utara', 'Kab.Nias Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('324', 'Kalimantan Utara', 'Kab.Nunukan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('325', 'Sumatera Selatan', 'Kab.Ogan Ilir');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('326', 'Sumatera Selatan', 'Kab.Ogan Komering Ilir');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('327', 'Sumatera Selatan', 'Kab.Ogan Komering Ulu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('328', 'Sumatera Selatan', 'Kab.Ogan Komering Ulu Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('329', 'Sumatera Selatan', 'Kab.Ogan Komering Ulu Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('330', 'Jawa Timur', 'Kab.Pacitan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('331', 'Sumatera Barat', 'Kota Padang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('332', 'Sumatera Utara', 'Kab.Padang Lawas');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('333', 'Sumatera Utara', 'Kab.Padang Lawas Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('334', 'Sumatera Barat', 'Kota Padang Panjang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('335', 'Sumatera Barat', 'Kab.Padang Pariaman');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('336', 'Sumatera Utara', 'Kota Padang Sidempuan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('337', 'Sumatera Selatan', 'Kota Pagar Alam');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('338', 'Sumatera Utara', 'Kab.Pakpak Bharat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('339', 'Kalimantan Tengah', 'Kota Palangka Raya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('340', 'Sumatera Selatan', 'Kota Palembang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('341', 'Sulawesi Selatan', 'Kota Palopo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('342', 'Sulawesi Tengah', 'Kota Palu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('343', 'Jawa Timur', 'Kab.Pamekasan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('344', 'Banten', 'Kab.Pandeglang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('345', 'Jawa Barat', 'Kab.Pangandaran');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('346', 'Sulawesi Selatan', 'Kab.Pangkajene Kepulauan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('347', 'Bangka Belitung', 'Kota Pangkal Pinang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('348', 'Papua', 'Kab.Paniai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('349', 'Sulawesi Selatan', 'Kota Parepare');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('350', 'Sumatera Barat', 'Kota Pariaman');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('351', 'Sulawesi Tengah', 'Kab.Parigi Moutong');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('352', 'Sumatera Barat', 'Kab.Pasaman');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('353', 'Sumatera Barat', 'Kab.Pasaman Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('354', 'Kalimantan Timur', 'Kab.Paser');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('355', 'Jawa Timur', 'Kab.Pasuruan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('356', 'Jawa Timur', 'Kota Pasuruan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('357', 'Jawa Tengah', 'Kab.Pati');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('358', 'Sumatera Barat', 'Kota Payakumbuh');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('359', 'Papua Barat', 'Kab.Pegunungan Arfak');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('360', 'Papua', 'Kab.Pegunungan Bintang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('361', 'Jawa Tengah', 'Kab.Pekalongan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('362', 'Jawa Tengah', 'Kota Pekalongan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('363', 'Riau', 'Kota Pekanbaru');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('364', 'Riau', 'Kab.Pelalawan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('365', 'Jawa Tengah', 'Kab.Pemalang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('366', 'Sumatera Utara', 'Kota Pematang Siantar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('367', 'Kalimantan Timur', 'Kab.Penajam Paser Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('368', 'Sumatera Selatan', 'Kab.Penukal Abab Lematang Ilir');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('369', 'Lampung', 'Kab.Pesawaran');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('370', 'Lampung', 'Kab.Pesisir Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('371', 'Sumatera Barat', 'Kab.Pesisir Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('372', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Pidie');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('373', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Pidie Jaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('374', 'Sulawesi Selatan', 'Kab.Pinrang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('375', 'Gorontalo', 'Kab.Pohuwato');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('376', 'Sulawesi Barat', 'Kab.Polewali Mandar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('377', 'Jawa Timur', 'Kab.Ponorogo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('378', 'Kalimantan Barat', 'Kota Pontianak');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('379', 'Sulawesi Tengah', 'Kab.Poso');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('380', 'Sumatera Selatan', 'Kota Prabumulih');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('381', 'Lampung', 'Kab.Pringsewu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('382', 'Jawa Timur', 'Kab.Probolinggo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('383', 'Jawa Timur', 'Kota Probolinggo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('384', 'Kalimantan Tengah', 'Kab.Pulang Pisau');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('385', 'Maluku Utara', 'Kab.Pulau Morotai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('386', 'Maluku Utara', 'Kab.Pulau Taliabu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('387', 'Papua', 'Kab.Puncak');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('388', 'Papua', 'Kab.Puncak Jaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('389', 'Jawa Tengah', 'Kab.Purbalingga');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('390', 'Jawa Barat', 'Kab.Purwakarta');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('391', 'Jawa Tengah', 'Kab.Purworejo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('392', 'Papua Barat', 'Kab.Raja Ampat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('393', 'Bengkulu', 'Kab.Rejang Lebong');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('394', 'Jawa Tengah', 'Kab.Rembang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('395', 'Riau', 'Kab.Rokan Hilir');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('396', 'Riau', 'Kab.Rokan Hulu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('397', 'Nusa Tenggara Timur (NTT)', 'Kab.Rote Ndao');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('398', 'Nanggroe Aceh Darussalam (NAD)', 'Kota Sabang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('399', 'Nusa Tenggara Timur (NTT)', 'Kab.Sabu Raijua');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('400', 'Jawa Tengah', 'Kota Salatiga');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('401', 'Kalimantan Timur', 'Kota Samarinda');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('402', 'Kalimantan Barat', 'Kab.Sambas');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('403', 'Sumatera Utara', 'Kab.Samosir');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('404', 'Jawa Timur', 'Kab.Sampang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('405', 'Kalimantan Barat', 'Kab.Sanggau');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('406', 'Papua', 'Kab.Sarmi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('407', 'Jambi', 'Kab.Sarolangun');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('408', 'Sumatera Barat', 'Kota Sawah Lunto');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('409', 'Kalimantan Barat', 'Kab.Sekadau');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('410', 'Bengkulu', 'Kab.Seluma');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('411', 'Jawa Tengah', 'Kab.Semarang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('412', 'Jawa Tengah', 'Kota Semarang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('413', 'Maluku', 'Kab.Seram Bagian Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('414', 'Maluku', 'Kab.Seram Bagian Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('415', 'Banten', 'Kab.Serang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('416', 'Banten', 'Kota Serang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('417', 'Sumatera Utara', 'Kab.Serdang Bedagai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('418', 'Kalimantan Tengah', 'Kab.Seruyan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('419', 'Riau', 'Kab.Siak');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('420', 'Sumatera Utara', 'Kota Sibolga');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('421', 'Sulawesi Selatan', 'Kab.Sidenreng Rappang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('422', 'Jawa Timur', 'Kab.Sidoarjo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('423', 'Sulawesi Tengah', 'Kab.Sigi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('424', 'Sumatera Barat', 'Kab.Sijunjung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('425', 'Nusa Tenggara Timur (NTT)', 'Kab.Sikka');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('426', 'Sumatera Utara', 'Kab.Simalungun');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('427', 'Nanggroe Aceh Darussalam (NAD)', 'Kab.Simeulue');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('428', 'Kalimantan Barat', 'Kota Singkawang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('429', 'Sulawesi Selatan', 'Kab.Sinjai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('430', 'Kalimantan Barat', 'Kab.Sintang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('431', 'Jawa Timur', 'Kab.Situbondo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('432', 'DI Yogyakarta', 'Kab.Sleman');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('433', 'Sumatera Barat', 'Kab.Solok');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('434', 'Sumatera Barat', 'Kota Solok');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('435', 'Sumatera Barat', 'Kab.Solok Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('436', 'Sulawesi Selatan', 'Kab.Soppeng');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('437', 'Papua Barat', 'Kab.Sorong');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('438', 'Papua Barat', 'Kota Sorong');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('439', 'Papua Barat', 'Kab.Sorong Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('440', 'Jawa Tengah', 'Kab.Sragen');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('441', 'Jawa Barat', 'Kab.Subang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('442', 'Nanggroe Aceh Darussalam (NAD)', 'Kota Subulussalam');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('443', 'Jawa Barat', 'Kab.Sukabumi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('444', 'Jawa Barat', 'Kota Sukabumi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('445', 'Kalimantan Tengah', 'Kab.Sukamara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('446', 'Jawa Tengah', 'Kab.Sukoharjo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('447', 'Nusa Tenggara Timur (NTT)', 'Kab.Sumba Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('448', 'Nusa Tenggara Timur (NTT)', 'Kab.Sumba Barat Daya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('449', 'Nusa Tenggara Timur (NTT)', 'Kab.Sumba Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('450', 'Nusa Tenggara Timur (NTT)', 'Kab.Sumba Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('451', 'Nusa Tenggara Barat (NTB)', 'Kab.Sumbawa');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('452', 'Nusa Tenggara Barat (NTB)', 'Kab.Sumbawa Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('453', 'Jawa Barat', 'Kab.Sumedang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('454', 'Jawa Timur', 'Kab.Sumenep');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('455', 'Jambi', 'Kota Sungaipenuh');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('456', 'Papua', 'Kab.Supiori');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('457', 'Jawa Timur', 'Kota Surabaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('458', 'Jawa Tengah', 'Kota Surakarta');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('459', 'Kalimantan Selatan', 'Kab.Tabalong');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('460', 'Bali', 'Kab.Tabanan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('461', 'Sulawesi Selatan', 'Kab.Takalar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('462', 'Papua Barat', 'Kab.Tambrauw');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('463', 'Kalimantan Utara', 'Kab.Tana Tidung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('464', 'Sulawesi Selatan', 'Kab.Tana Toraja');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('465', 'Kalimantan Selatan', 'Kab.Tanah Bumbu');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('466', 'Sumatera Barat', 'Kab.Tanah Datar');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('467', 'Kalimantan Selatan', 'Kab.Tanah Laut');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('468', 'Banten', 'Kab.Tangerang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('469', 'Banten', 'Kota Tangerang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('470', 'Banten', 'Kota Tangerang Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('471', 'Lampung', 'Kab.Tanggamus');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('472', 'Sumatera Utara', 'Kota Tanjung Balai');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('473', 'Jambi', 'Kab.Tanjung Jabung Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('474', 'Jambi', 'Kab.Tanjung Jabung Timur');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('475', 'Kepulauan Riau', 'Kota Tanjung Pinang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('476', 'Sumatera Utara', 'Kab.Tapanuli Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('477', 'Sumatera Utara', 'Kab.Tapanuli Tengah');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('478', 'Sumatera Utara', 'Kab.Tapanuli Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('479', 'Kalimantan Selatan', 'Kab.Tapin');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('480', 'Kalimantan Utara', 'Kota Tarakan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('481', 'Jawa Barat', 'Kab.Tasikmalaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('482', 'Jawa Barat', 'Kota Tasikmalaya');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('483', 'Sumatera Utara', 'Kota Tebing Tinggi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('484', 'Jambi', 'Kab.Tebo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('485', 'Jawa Tengah', 'Kab.Tegal');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('486', 'Jawa Tengah', 'Kota Tegal');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('487', 'Papua Barat', 'Kab.Teluk Bintuni');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('488', 'Papua Barat', 'Kab.Teluk Wondama');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('489', 'Jawa Tengah', 'Kab.Temanggung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('490', 'Maluku Utara', 'Kota Ternate');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('491', 'Maluku Utara', 'Kota Tidore Kepulauan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('492', 'Nusa Tenggara Timur (NTT)', 'Kab.Timor Tengah Selatan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('493', 'Nusa Tenggara Timur (NTT)', 'Kab.Timor Tengah Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('494', 'Sumatera Utara', 'Kab.Toba Samosir');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('495', 'Sulawesi Tengah', 'Kab.Tojo Una-Una');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('496', 'Sulawesi Tengah', 'Kab.Toli-Toli');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('497', 'Papua', 'Kab.Tolikara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('498', 'Sulawesi Utara', 'Kota Tomohon');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('499', 'Sulawesi Selatan', 'Kab.Toraja Utara');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('500', 'Jawa Timur', 'Kab.Trenggalek');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('501', 'Maluku', 'Kota Tual');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('502', 'Jawa Timur', 'Kab.Tuban');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('503', 'Lampung', 'Kab.Tulang Bawang');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('504', 'Lampung', 'Kab.Tulang Bawang Barat');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('505', 'Jawa Timur', 'Kab.Tulungagung');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('506', 'Sulawesi Selatan', 'Kab.Wajo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('507', 'Sulawesi Tenggara', 'Kab.Wakatobi');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('508', 'Papua', 'Kab.Waropen');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('509', 'Lampung', 'Kab.Way Kanan');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('510', 'Jawa Tengah', 'Kab.Wonogiri');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('511', 'Jawa Tengah', 'Kab.Wonosobo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('512', 'Papua', 'Kab.Yahukimo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('513', 'Papua', 'Kab.Yalimo');
INSERT INTO `tbl_r_provinsi_kota` VALUES ('514', 'DI Yogyakarta', 'Kota Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1', 'Institut Teknologi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2', 'Universitas Gadjah Mada');
INSERT INTO `tbl_r_universitas` VALUES ('3', 'Institut Pertanian Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('4', 'Universitas  Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('5', 'Institut Teknologi Sepuluh Nopember');
INSERT INTO `tbl_r_universitas` VALUES ('6', 'Universitas  Brawijaya');
INSERT INTO `tbl_r_universitas` VALUES ('7', 'Universitas  Padjadjaran');
INSERT INTO `tbl_r_universitas` VALUES ('8', 'Universitas  Airlangga');
INSERT INTO `tbl_r_universitas` VALUES ('9', 'Universitas Sebelas Maret');
INSERT INTO `tbl_r_universitas` VALUES ('10', 'Universitas  Diponegoro');
INSERT INTO `tbl_r_universitas` VALUES ('11', 'Universitas  Hasanuddin');
INSERT INTO `tbl_r_universitas` VALUES ('12', 'Universitas  Andalas');
INSERT INTO `tbl_r_universitas` VALUES ('13', 'Universitas Negeri Malang');
INSERT INTO `tbl_r_universitas` VALUES ('14', 'Universitas Negeri Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('15', 'Universitas Kristen Petra');
INSERT INTO `tbl_r_universitas` VALUES ('16', 'Universitas Jenderal Soedirman');
INSERT INTO `tbl_r_universitas` VALUES ('17', 'Universitas Negeri Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('18', 'Politeknik Elektronik Negeri Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('19', 'Universitas Pendidikan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('20', 'Universitas Riau');
INSERT INTO `tbl_r_universitas` VALUES ('21', 'Universitas Negeri Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('22', 'Universitas  Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('23', 'Universitas  Sriwijaya');
INSERT INTO `tbl_r_universitas` VALUES ('24', 'Universitas Sanata Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('25', 'Universitas Katolik Parahyangan');
INSERT INTO `tbl_r_universitas` VALUES ('26', 'Universitas  Muhammadiyah  Malang');
INSERT INTO `tbl_r_universitas` VALUES ('27', 'Universitas  Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('28', 'Universitas Katolik Widya Mandala Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('29', 'Universitas Negeri Medan');
INSERT INTO `tbl_r_universitas` VALUES ('30', 'Universitas Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('31', 'Universitas Negeri Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('32', 'Universitas Islam Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('33', 'Universitas Katolik Indonesia Atma Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('34', 'Universitas Muslim Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('35', 'Universitas  Tadulako');
INSERT INTO `tbl_r_universitas` VALUES ('36', 'Universitas  Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('37', 'Universitas  Bengkulu');
INSERT INTO `tbl_r_universitas` VALUES ('38', 'Universitas Sumatera Utara');
INSERT INTO `tbl_r_universitas` VALUES ('39', 'Universitas Katolik Soegijapranata');
INSERT INTO `tbl_r_universitas` VALUES ('40', 'Universitas Bina Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('41', 'Universitas  Muhammadiyah  Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('42', 'Universitas Islam Malang');
INSERT INTO `tbl_r_universitas` VALUES ('43', 'Universitas  Muhammadiyah  Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('44', 'Universitas  Mahasaraswati  Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('45', 'Universitas  Jember');
INSERT INTO `tbl_r_universitas` VALUES ('46', 'Universitas Pendidikan Ganesha');
INSERT INTO `tbl_r_universitas` VALUES ('47', 'Universitas  Gunadarma');
INSERT INTO `tbl_r_universitas` VALUES ('48', 'Universitas  Mulawarman');
INSERT INTO `tbl_r_universitas` VALUES ('49', 'Politeknik Negeri Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('50', 'Institut Seni Indonesia Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('51', 'Universitas Islam Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('52', 'Universitas Kristen Maranatha');
INSERT INTO `tbl_r_universitas` VALUES ('53', 'Universitas  Muhammadiyah  Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('54', 'Universitas Al-azhar Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('55', 'Sekolah Tinggi Hukum Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('56', 'Universitas  Narotama');
INSERT INTO `tbl_r_universitas` VALUES ('57', 'Universitas  Udayana');
INSERT INTO `tbl_r_universitas` VALUES ('58', 'Universitas Lambung Mangkurat');
INSERT INTO `tbl_r_universitas` VALUES ('59', 'Universitas  Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('60', 'Universitas Negeri Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('61', 'Universitas Syiah Kuala');
INSERT INTO `tbl_r_universitas` VALUES ('62', 'Universitas  Pancasila');
INSERT INTO `tbl_r_universitas` VALUES ('63', 'Institut Sains Dan Teknologi Akprind');
INSERT INTO `tbl_r_universitas` VALUES ('64', 'Universitas Kristen Satya Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('65', 'Universitas Wijaya Kusuma Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('66', 'Universitas Atma Jaya Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('67', 'Politeknik Negeri Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('68', 'Universitas Pendidikan Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('69', 'Universitas Halu Oleo');
INSERT INTO `tbl_r_universitas` VALUES ('70', 'Universitas Sam Ratulangi');
INSERT INTO `tbl_r_universitas` VALUES ('71', 'Politeknik Negeri Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('72', 'Sekolah Tinggi Ilmu Kesehatan Aisyiyah Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('73', 'Universitas  Djuanda');
INSERT INTO `tbl_r_universitas` VALUES ('74', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('75', 'Universitas  Trisakti');
INSERT INTO `tbl_r_universitas` VALUES ('76', 'Sekolah Tinggi Ilmu Ekonomi Perbanas Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('77', 'STMIK Jakarta Sti&k');
INSERT INTO `tbl_r_universitas` VALUES ('78', 'Universitas  Pancasakti');
INSERT INTO `tbl_r_universitas` VALUES ('79', 'STMIK Amikom');
INSERT INTO `tbl_r_universitas` VALUES ('80', 'Universitas Hang Tuah');
INSERT INTO `tbl_r_universitas` VALUES ('81', 'Universitas  Telkom');
INSERT INTO `tbl_r_universitas` VALUES ('82', 'Universitas Nusa Cendana');
INSERT INTO `tbl_r_universitas` VALUES ('83', 'Universitas Islam Sultan Agung');
INSERT INTO `tbl_r_universitas` VALUES ('84', 'Universitas  Tarumanagara');
INSERT INTO `tbl_r_universitas` VALUES ('85', 'Universitas Sahid');
INSERT INTO `tbl_r_universitas` VALUES ('86', 'Institut Teknologi Nasional Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('87', 'Akademi Kebidanan Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('88', 'Universitas Negeri Padang');
INSERT INTO `tbl_r_universitas` VALUES ('89', 'Universitas  Muhammadiyah  Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('90', 'Universitas  Muhammadiyah  Jember');
INSERT INTO `tbl_r_universitas` VALUES ('91', 'Universitas  Trunojoyo');
INSERT INTO `tbl_r_universitas` VALUES ('92', 'Universitas Merdeka Malang');
INSERT INTO `tbl_r_universitas` VALUES ('93', 'Sekolah Tinggi Ilmu Ekonomi Malangkucecwara');
INSERT INTO `tbl_r_universitas` VALUES ('94', 'Universitas Pembangunan Panca Budi');
INSERT INTO `tbl_r_universitas` VALUES ('95', 'Universitas  Muhammadiyah  Purwokerto');
INSERT INTO `tbl_r_universitas` VALUES ('96', 'Akademi Peternakan  Karanganyar');
INSERT INTO `tbl_r_universitas` VALUES ('97', 'STIE Indonesia Banking School');
INSERT INTO `tbl_r_universitas` VALUES ('98', 'Institut Seni Indonesia Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('99', 'Politeknik Negeri Malang');
INSERT INTO `tbl_r_universitas` VALUES ('100', 'IKIP PGRI Bali');
INSERT INTO `tbl_r_universitas` VALUES ('101', 'Institut Bisnis Dan Informatika Kwik Kian Gie');
INSERT INTO `tbl_r_universitas` VALUES ('102', 'Universitas  Widyatama');
INSERT INTO `tbl_r_universitas` VALUES ('103', 'Sekolah Tinggi Filsafat Driyarkara');
INSERT INTO `tbl_r_universitas` VALUES ('104', 'Sekolah Tinggi Ilmu Ekonomi Nusa Megar Kencana');
INSERT INTO `tbl_r_universitas` VALUES ('105', 'Universitas  Stikubank');
INSERT INTO `tbl_r_universitas` VALUES ('106', 'Universitas  Tanjungpura');
INSERT INTO `tbl_r_universitas` VALUES ('107', 'Universitas  Muhammadiyah  Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('108', 'Universitas Negeri Gorontalo');
INSERT INTO `tbl_r_universitas` VALUES ('109', 'Universitas  Muhammadiyah  Bengkulu');
INSERT INTO `tbl_r_universitas` VALUES ('110', 'Universitas  Tamansiswa');
INSERT INTO `tbl_r_universitas` VALUES ('111', 'Sekolah Tinggi Pembangunan Masyarakat Desa APMD');
INSERT INTO `tbl_r_universitas` VALUES ('112', 'Universitas 17 Agustus 1945 Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('113', 'Sekolah Tinggi Ilmu Pertanian Dharma Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('114', 'Politeknik Pertanian Negeri Pangkajene Kepulauan');
INSERT INTO `tbl_r_universitas` VALUES ('115', 'Sekolah Tinggi Filsafat Teologi Widya Sasana');
INSERT INTO `tbl_r_universitas` VALUES ('116', 'STIE Pariwisata Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('117', 'Institut Pertanian Intan');
INSERT INTO `tbl_r_universitas` VALUES ('118', 'Universitas 17 Agustus 1945 Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('119', 'Politeknik Negeri Sriwijaya');
INSERT INTO `tbl_r_universitas` VALUES ('120', 'Institut Teknologi Nasional Malang');
INSERT INTO `tbl_r_universitas` VALUES ('121', 'Sekolah Tinggi Ilmu Ekonomi Mandala');
INSERT INTO `tbl_r_universitas` VALUES ('122', 'Universitas Pelita Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('123', 'Sekolah Tinggi Pariwisata Bali Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('124', 'Universitas Merdeka Madiun');
INSERT INTO `tbl_r_universitas` VALUES ('125', 'Universitas Indraprasta PGRI');
INSERT INTO `tbl_r_universitas` VALUES ('126', 'Akademi Pariwisata Indonesia Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('127', 'Sekolah Tinggi Ilmu Ekonomi YAI');
INSERT INTO `tbl_r_universitas` VALUES ('128', 'Universitas PGRI Adi Buana');
INSERT INTO `tbl_r_universitas` VALUES ('129', 'Politeknik Perkapalan Negeri Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('130', 'Sekolah Tinggi Ilmu Ekonomi Kusuma Negara');
INSERT INTO `tbl_r_universitas` VALUES ('131', 'Akademi Pertanian Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('132', 'Universitas Islam Batik');
INSERT INTO `tbl_r_universitas` VALUES ('133', 'Sekolah Tinggi Filsafat Katolik Ledalero');
INSERT INTO `tbl_r_universitas` VALUES ('134', 'Sekolah Tinggi Ilmu Manajemen Ykpn');
INSERT INTO `tbl_r_universitas` VALUES ('135', 'Universitas Kristen Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('136', 'Sekolah Tinggi Farmasi Indonesia Perintis Padang');
INSERT INTO `tbl_r_universitas` VALUES ('137', 'Universitas Kristen Duta Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('138', 'Universitas Satya Negara Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('139', 'Universitas  Pasundan');
INSERT INTO `tbl_r_universitas` VALUES ('140', 'STKIP PGRI Jombang');
INSERT INTO `tbl_r_universitas` VALUES ('141', 'Universitas Internasional Batam');
INSERT INTO `tbl_r_universitas` VALUES ('142', 'Universitas Islam Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('143', 'Universitas Bandar Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('144', 'Universitas Komputer Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('145', 'Sekolah Tinggi Ilmu Administrasi Bengkulu');
INSERT INTO `tbl_r_universitas` VALUES ('146', 'Universitas Prof Dr Moestopo (Beragama)');
INSERT INTO `tbl_r_universitas` VALUES ('147', 'Politeknik Negeri Jember');
INSERT INTO `tbl_r_universitas` VALUES ('148', 'Universitas Langlang Buana');
INSERT INTO `tbl_r_universitas` VALUES ('149', 'Sekolah Tinggi Ilmu Ekonomi Dharma Bumi Putra');
INSERT INTO `tbl_r_universitas` VALUES ('150', 'Sekolah Tinggi Pariwisata Ampta Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('151', 'Universitas  Muhammadiyah  Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('152', 'Universitas Ciputra Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('153', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('154', 'Universitas  Sarjanawiyata  Tamansiswa');
INSERT INTO `tbl_r_universitas` VALUES ('155', 'Akademi Kebidanan Ibrahimy Situbondo');
INSERT INTO `tbl_r_universitas` VALUES ('156', 'STIE Nobel Indonesia Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('157', 'STIE Putera Sampoerna');
INSERT INTO `tbl_r_universitas` VALUES ('158', 'Universitas Medan Area');
INSERT INTO `tbl_r_universitas` VALUES ('159', 'Sekolah Tinggi Ilmu Hukum Muhammadiyah Bima');
INSERT INTO `tbl_r_universitas` VALUES ('160', 'Akademi Teknnologi Warga Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('161', 'Sekolah Tinggi Pariwisata Trisakti');
INSERT INTO `tbl_r_universitas` VALUES ('162', 'Sekolah Tinggi Ilmu Hukum Sultan Adam');
INSERT INTO `tbl_r_universitas` VALUES ('163', 'Sekolah Tinggi Ilmu Administrasi Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('164', 'Universitas Dian Nuswantoro');
INSERT INTO `tbl_r_universitas` VALUES ('165', 'Universitas  Muhammadiyah  Magelang');
INSERT INTO `tbl_r_universitas` VALUES ('166', 'Universitas  Bhayangkara  Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('167', 'Universitas Ngurah Rai');
INSERT INTO `tbl_r_universitas` VALUES ('168', 'Politeknik Caltex');
INSERT INTO `tbl_r_universitas` VALUES ('169', 'Sekolah Tinggi Manajemen Ppm');
INSERT INTO `tbl_r_universitas` VALUES ('170', 'Sekolah Tinggi Ilmu Komunikasi');
INSERT INTO `tbl_r_universitas` VALUES ('171', 'Universitas Muhammadiyah Prof Dr Hamka');
INSERT INTO `tbl_r_universitas` VALUES ('172', 'Akademi Keperawatan Baramuli');
INSERT INTO `tbl_r_universitas` VALUES ('173', 'IKIP PGRI Wates');
INSERT INTO `tbl_r_universitas` VALUES ('174', 'IKIP Veteran Jawa Tengah');
INSERT INTO `tbl_r_universitas` VALUES ('175', 'Universitas Borneo Tarakan');
INSERT INTO `tbl_r_universitas` VALUES ('176', 'Universitas Muhammadiyah Sumatera Utara');
INSERT INTO `tbl_r_universitas` VALUES ('177', 'Universitas Yarsi');
INSERT INTO `tbl_r_universitas` VALUES ('178', 'Akademi Sekretari Dan Manajemen BSI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('179', 'Politeknik Manufaktur Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('180', 'Sekolah Tinggi Pariwisata Sahid Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('181', 'Akademi Komunikasi BSI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('182', 'Akademi Bahasa Asing BSI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('183', 'Universitas  Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('184', 'Universitas Slamet Riyadi');
INSERT INTO `tbl_r_universitas` VALUES ('185', 'Universitas Persada Indonesia Yai');
INSERT INTO `tbl_r_universitas` VALUES ('186', 'Politeknik Negeri Ambon');
INSERT INTO `tbl_r_universitas` VALUES ('187', 'Akademi Keperawatan Ngudi Waluyo Ungaran');
INSERT INTO `tbl_r_universitas` VALUES ('188', 'Universitas Islam Kalimantan M A B Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('189', 'Universitas Mercu Buana Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('190', 'STIMIK - STIKOM Bali');
INSERT INTO `tbl_r_universitas` VALUES ('191', 'Sekolah Tinggi Teknik Lingkungan');
INSERT INTO `tbl_r_universitas` VALUES ('192', 'Sekolah Tinggi Teknologi Garut');
INSERT INTO `tbl_r_universitas` VALUES ('193', 'Sekolah Tinggi Ilmu Ekonomi Nasional Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('194', 'Universitas Sultan Ageng Tirtayasa');
INSERT INTO `tbl_r_universitas` VALUES ('195', 'Sekolah Tinggi Ilmu Ekonomi Kesatuan');
INSERT INTO `tbl_r_universitas` VALUES ('196', 'Universitas Multimedia Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('197', 'Sekolah Tinggi Manajemen Transpor Trisakti');
INSERT INTO `tbl_r_universitas` VALUES ('198', 'Universitas  Khairun');
INSERT INTO `tbl_r_universitas` VALUES ('199', 'STIKS Tarakanita');
INSERT INTO `tbl_r_universitas` VALUES ('200', 'Universitas Hindu Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('201', 'Universitas  Dwijendra');
INSERT INTO `tbl_r_universitas` VALUES ('202', 'Politeknik Negeri Lhokseumawe');
INSERT INTO `tbl_r_universitas` VALUES ('203', 'Sekolah Tinggi Ilmu Ekonomi Satya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('204', 'Sekolah Tinggi Ilmu Administrasi Pancamarga Palu');
INSERT INTO `tbl_r_universitas` VALUES ('205', 'Institut Teknologi Harapan Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('206', 'IKIP PGRI Madiun');
INSERT INTO `tbl_r_universitas` VALUES ('207', 'Universitas  Pekalongan');
INSERT INTO `tbl_r_universitas` VALUES ('208', 'Universitas  Terbuka');
INSERT INTO `tbl_r_universitas` VALUES ('209', 'Universitas Islam 45');
INSERT INTO `tbl_r_universitas` VALUES ('210', 'Sekolah Tinggi Filsafat Theologi Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('211', 'Politeknik Negeri Padang');
INSERT INTO `tbl_r_universitas` VALUES ('212', 'Universitas  Jayabaya');
INSERT INTO `tbl_r_universitas` VALUES ('213', 'Universitas 45 Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('214', 'Politeknik Negeri Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('215', 'Universitas  Mahendradatta');
INSERT INTO `tbl_r_universitas` VALUES ('216', 'STIE Jakarta International College');
INSERT INTO `tbl_r_universitas` VALUES ('217', 'Akademi Kebidanan Abdi Husada');
INSERT INTO `tbl_r_universitas` VALUES ('218', 'Universitas Garut');
INSERT INTO `tbl_r_universitas` VALUES ('219', 'Sekolah Tinggi Ilmu Hukum Sumpah Pemuda');
INSERT INTO `tbl_r_universitas` VALUES ('220', 'Sekolah Tinggi Ilmu Ekonomi Pasundan');
INSERT INTO `tbl_r_universitas` VALUES ('221', 'Politeknik  Darusalam');
INSERT INTO `tbl_r_universitas` VALUES ('222', 'Universitas Veteran Bangun Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('223', 'Universitas Tunas Pembangunan Surakarta (UTP)');
INSERT INTO `tbl_r_universitas` VALUES ('224', 'STKIP Garut');
INSERT INTO `tbl_r_universitas` VALUES ('225', 'Sekolah Tinggi Ilmu Ekonomi Ykpn');
INSERT INTO `tbl_r_universitas` VALUES ('226', 'Universitas  Warmadewa');
INSERT INTO `tbl_r_universitas` VALUES ('227', 'Universitas  Siliwangi');
INSERT INTO `tbl_r_universitas` VALUES ('228', 'STMIK Likmi');
INSERT INTO `tbl_r_universitas` VALUES ('229', 'Universitas Jenderal Achmad Yani');
INSERT INTO `tbl_r_universitas` VALUES ('230', 'Akademi Pariwisata Siliwangi');
INSERT INTO `tbl_r_universitas` VALUES ('231', 'STKIP PGRI Sidoarjo');
INSERT INTO `tbl_r_universitas` VALUES ('232', 'Akademi Akuntansi PGRI Jember');
INSERT INTO `tbl_r_universitas` VALUES ('233', 'Akademi Akuntansi Nasional Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('234', 'Universitas Ahmad Dahlan');
INSERT INTO `tbl_r_universitas` VALUES ('235', 'Sekolah Tinggi Ilmu Hukum Pertiba Pangkalpinang');
INSERT INTO `tbl_r_universitas` VALUES ('236', 'Sekolah Tinggi Pariwisata Triatma Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('237', 'Universitas Atma Jaya Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('238', 'Akademi Sekretari Dan Manajemen BSI Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('239', 'Universitas  Janabadra');
INSERT INTO `tbl_r_universitas` VALUES ('240', 'Sekolah Tinggi Ilmu Ekonomi Sutaatmadja');
INSERT INTO `tbl_r_universitas` VALUES ('241', 'Universitas 17 Agustus 1945 Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('242', 'Universitas Esa Unggul');
INSERT INTO `tbl_r_universitas` VALUES ('243', 'Sekolah Tinggi Ilmu Manajemen Handayani');
INSERT INTO `tbl_r_universitas` VALUES ('244', 'Akademi Kebidanan Helvetia Medan');
INSERT INTO `tbl_r_universitas` VALUES ('245', 'Sekolah Tinggi Ilmu Ekonomi Prasetiya Mandiri Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('246', 'STIM Lasharan Jaya Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('247', 'STMIK Raharja');
INSERT INTO `tbl_r_universitas` VALUES ('248', 'Sekolah Tinggi Ilmu Ekonomi Pariwisata Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('249', 'Universitas Wahid Hasyim');
INSERT INTO `tbl_r_universitas` VALUES ('250', 'Sekolah Tinggi Ilmu Administrasi Maulana Yusuf');
INSERT INTO `tbl_r_universitas` VALUES ('251', 'Institut Seni Indonesia Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('252', 'Sekolah Tinggi Ilmu Kesehatan Surya Global');
INSERT INTO `tbl_r_universitas` VALUES ('253', 'Politeknik Komputer Niaga Lpkia');
INSERT INTO `tbl_r_universitas` VALUES ('254', 'Institut Keu Perbankan Dan Inf Asia Perbanas');
INSERT INTO `tbl_r_universitas` VALUES ('255', 'Akademi Pariwisata Dan Perhotelan Ganesha');
INSERT INTO `tbl_r_universitas` VALUES ('256', 'Akademi Kebidanan Estu Utomo');
INSERT INTO `tbl_r_universitas` VALUES ('257', 'Universitas  Muhammadiyah  Ponorogo');
INSERT INTO `tbl_r_universitas` VALUES ('258', 'Universitas Bung Hatta');
INSERT INTO `tbl_r_universitas` VALUES ('259', 'Universitas  Paramadina');
INSERT INTO `tbl_r_universitas` VALUES ('260', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Membangun (Inaba)');
INSERT INTO `tbl_r_universitas` VALUES ('261', 'Sekolah Tinggi Ilmu Administrasi Mandala Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('262', 'Akademi Kimia Industri Santo Paulus Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('263', 'Institut Seni Indonesia Padang Panjang');
INSERT INTO `tbl_r_universitas` VALUES ('264', 'Sekolah Tinggi Ilmu Administrasi Aan');
INSERT INTO `tbl_r_universitas` VALUES ('265', 'Akademi Kebidanan Kartini Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('266', 'STIA & Pemerintahan Annisa Dwi Salfarizi');
INSERT INTO `tbl_r_universitas` VALUES ('267', 'Sekolah Tinggi Ilmu Ekonomi Mitra Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('268', 'Akademi Akuntansi Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('269', 'Akademi Seni Rupa Dan Desain MSD');
INSERT INTO `tbl_r_universitas` VALUES ('270', 'Akademi Kebidanan Budi Mulia Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('271', 'Akademi Keperawatan Kesdam II Sriwijaya');
INSERT INTO `tbl_r_universitas` VALUES ('272', 'Sekolah Tinggi Bahasa Asing LIA Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('273', 'Akademi Pariwisata Stipary');
INSERT INTO `tbl_r_universitas` VALUES ('274', 'Akademi Keperawatan Panti Rapih Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('275', 'Akademi Pelayaran Nasional Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('276', 'Akademi Keperawatan Mamba ul Ulum Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('277', 'Akademi Keperawatan Kesdam IV/Diponegoro');
INSERT INTO `tbl_r_universitas` VALUES ('278', 'Akademi Kebidanan Munawarrah Bireuen');
INSERT INTO `tbl_r_universitas` VALUES ('279', 'Akademi Komunikasi Indonesia YPK');
INSERT INTO `tbl_r_universitas` VALUES ('280', 'Akademi Sekretari Budi Luhur Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('281', 'Politeknik Pertanian Negeri Payakumbuh');
INSERT INTO `tbl_r_universitas` VALUES ('282', 'Universitas  Pattimura');
INSERT INTO `tbl_r_universitas` VALUES ('283', 'STISIP Muhammadiyah Rappang');
INSERT INTO `tbl_r_universitas` VALUES ('284', 'Universitas Islam Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('285', 'Sekolah Tinggi Ilmu Ekonomi Dharma Putra Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('286', 'Sekolah Tinggi Ilmu Bahasa Asing Nusa Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('287', 'Sekolah Tinggi Ilmu Ekonomi Ahmad Dahlan Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('288', 'Universitas Widya Gama');
INSERT INTO `tbl_r_universitas` VALUES ('289', 'Sekolah Tinggi Ilmu Kesehatan Helvetia');
INSERT INTO `tbl_r_universitas` VALUES ('290', 'Sekolah Tinggi Ilmu Hukum Umel Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('291', 'Akademi Kebidanan Harapan Ibu Pekalongan');
INSERT INTO `tbl_r_universitas` VALUES ('292', 'Akademi Kebidanan Muhammadiyah Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('293', 'Sekolah Tinggi Pariwisata Satya Widya');
INSERT INTO `tbl_r_universitas` VALUES ('294', 'Sekolah Tinggi Teknik Pln');
INSERT INTO `tbl_r_universitas` VALUES ('295', 'Sekolah Tinggi Ilmu Manajemen Nitro Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('296', 'Universitas  Wisnuwardhana');
INSERT INTO `tbl_r_universitas` VALUES ('297', 'Sekolah Tinggi Ilmu Ekonomi IPWI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('298', 'Universitas Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('299', 'Sekolah Tinggi Ilmu Administrasi Banten');
INSERT INTO `tbl_r_universitas` VALUES ('300', 'Akademi Kebidanan Mitra Husada Medan');
INSERT INTO `tbl_r_universitas` VALUES ('301', 'STMIK Mikroskil');
INSERT INTO `tbl_r_universitas` VALUES ('302', 'ASM Marsudirini Santa Maria');
INSERT INTO `tbl_r_universitas` VALUES ('303', 'Universitas Pelita Harapan Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('304', 'Sekolah Tinggi Ilmu Ekonomi Putra Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('305', 'Universitas 17 Agustus 1945 Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('306', 'Akademi  Keperawatan  Notokusumo');
INSERT INTO `tbl_r_universitas` VALUES ('307', 'Universitas Bina Darma');
INSERT INTO `tbl_r_universitas` VALUES ('308', 'Sekolah Tinggi Teknologi Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('309', 'Sekolah Tinggi Filsafat Fajar Timur Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('310', 'Akademi Akuntansi YAI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('311', 'Universitas  Dharmawangsa');
INSERT INTO `tbl_r_universitas` VALUES ('312', 'Universitas Muslim Nusantara Al-wasliyah');
INSERT INTO `tbl_r_universitas` VALUES ('313', 'STKIP Widya Yuwana');
INSERT INTO `tbl_r_universitas` VALUES ('314', 'Universitas Ibn Khaldun');
INSERT INTO `tbl_r_universitas` VALUES ('315', 'Universitas Dr Soetomo');
INSERT INTO `tbl_r_universitas` VALUES ('316', 'Politeknik Negeri Bali');
INSERT INTO `tbl_r_universitas` VALUES ('317', 'Akademi Kebidanan Banua Bina Husada');
INSERT INTO `tbl_r_universitas` VALUES ('318', 'Sekolah Tinggi Ilmu Ekonomi Adi Unggul Bhirawa');
INSERT INTO `tbl_r_universitas` VALUES ('319', 'Universitas Lancang Kuning');
INSERT INTO `tbl_r_universitas` VALUES ('320', 'Politeknik LP3I Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('321', 'Universitas  Krisnadwipayana');
INSERT INTO `tbl_r_universitas` VALUES ('322', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('323', 'Universitas Pembangunan Nasional Veteran Jawa Timur');
INSERT INTO `tbl_r_universitas` VALUES ('324', 'AMIK BSI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('325', 'Universitas PGRI Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('326', 'Universitas Kristen Indonesia Paulus');
INSERT INTO `tbl_r_universitas` VALUES ('327', 'Institut Sains Dan Teknologi Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('328', 'Universitas  Presiden');
INSERT INTO `tbl_r_universitas` VALUES ('329', 'Universitas  Muhammadiyah  Pare-pare');
INSERT INTO `tbl_r_universitas` VALUES ('330', 'STIA Bina Banua Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('331', 'Universitas Batanghari Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('332', 'Universitas Katolik Santo Thomas');
INSERT INTO `tbl_r_universitas` VALUES ('333', 'Universitas Budi Luhur');
INSERT INTO `tbl_r_universitas` VALUES ('334', 'Akademi Akuntansi YKPN');
INSERT INTO `tbl_r_universitas` VALUES ('335', 'Universitas HKBP Nommensen');
INSERT INTO `tbl_r_universitas` VALUES ('336', 'Politeknik Manufaktur Ceper');
INSERT INTO `tbl_r_universitas` VALUES ('337', 'Universitas Muhammadiyah Metro');
INSERT INTO `tbl_r_universitas` VALUES ('338', 'Sekolah Tinggi Ilmu Komunikasi ITKP');
INSERT INTO `tbl_r_universitas` VALUES ('339', 'Universitas Panca Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('340', 'Universitas Mercu Buana');
INSERT INTO `tbl_r_universitas` VALUES ('341', 'Universitas Islam Riau');
INSERT INTO `tbl_r_universitas` VALUES ('342', 'Sekolah Tinggi Ilmu Ekonomi Bank Bpd Jawa Tengah');
INSERT INTO `tbl_r_universitas` VALUES ('343', 'Sekolah Tinggi Ilmu Ekonomi Bhakti Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('344', 'Sekolah Tinggi Hukum Pasundan');
INSERT INTO `tbl_r_universitas` VALUES ('345', 'Sekolah Tinggi Filsafat Jaffray Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('346', 'Akademi Kebidanan Karya Bunda Husada');
INSERT INTO `tbl_r_universitas` VALUES ('347', 'Universitas Pesantren Tinggi Darul ulum');
INSERT INTO `tbl_r_universitas` VALUES ('348', 'Politeknik Ubaya');
INSERT INTO `tbl_r_universitas` VALUES ('349', 'STISIP Kartika Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('350', 'Akademi Analisi Kesehatan An-Nasher');
INSERT INTO `tbl_r_universitas` VALUES ('351', 'STIM LPI Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('352', 'Universitas Ma Chung');
INSERT INTO `tbl_r_universitas` VALUES ('353', 'AMIK Teknokrat');
INSERT INTO `tbl_r_universitas` VALUES ('354', 'Sekolah Tinggi Ilmu Kesehatan Immanuel Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('355', 'Sekolah Tinggi Hukum Garut');
INSERT INTO `tbl_r_universitas` VALUES ('356', 'Politeknik Negeri Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('357', 'Akademi Kebidanan Indragiri');
INSERT INTO `tbl_r_universitas` VALUES ('358', 'Akademi Kebidanan Bakti Utama Pati');
INSERT INTO `tbl_r_universitas` VALUES ('359', 'Politeknik Negeri Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('360', 'Universitas  Malikussaleh');
INSERT INTO `tbl_r_universitas` VALUES ('361', 'Akademi Pariwisata Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('362', 'Akademi Sekretari Widya Mandala Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('363', 'Universitas  Muhammadiyah  Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('364', 'Akademi Pariwisata Patria Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('365', 'Universitas Swiss German');
INSERT INTO `tbl_r_universitas` VALUES ('366', 'Universitas Darma Persada');
INSERT INTO `tbl_r_universitas` VALUES ('367', 'Akademi Kebidanan Bhakti Husada Cikarang');
INSERT INTO `tbl_r_universitas` VALUES ('368', 'Akademi Teknik Telekomunikasi Sandhy Putra Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('369', 'STMIK Amik Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('370', 'Politeknik Pertanian Negeri Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('371', 'Institut Teknologi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('372', 'Sekolah Tinggi Ilmu Sosial Politik Wira Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('373', 'Akademi Tata Boga Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('374', 'Akademi Pelayaran Niaga Indonesia Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('375', 'Universitas Tabanan');
INSERT INTO `tbl_r_universitas` VALUES ('376', 'Sekolah Tinggi Ilmu Kesehatan Respati');
INSERT INTO `tbl_r_universitas` VALUES ('377', 'STISIP Widuri');
INSERT INTO `tbl_r_universitas` VALUES ('378', 'AMIK BSI Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('379', 'Sekolah Tinggi Ilmu Ekonomi Latifah Mubarokiyah');
INSERT INTO `tbl_r_universitas` VALUES ('380', 'Akademi Kebidanan Alifah Padang');
INSERT INTO `tbl_r_universitas` VALUES ('381', 'Sekolah Tinggi Maritim Dan Transpor AMNI');
INSERT INTO `tbl_r_universitas` VALUES ('382', 'Akademi Pariwisata BSI Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('383', 'Akademi Kebidanan Amanah Muara Bungo');
INSERT INTO `tbl_r_universitas` VALUES ('384', 'Politeknik Negeri Bengkalis');
INSERT INTO `tbl_r_universitas` VALUES ('385', 'Sekolah Tinggi Ilmu Ekonomi Widya Manggala');
INSERT INTO `tbl_r_universitas` VALUES ('386', 'Sekolah Tinggi Ilmu Ekonomi Musi');
INSERT INTO `tbl_r_universitas` VALUES ('387', 'Sekolah Tinggi Teknik Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('388', 'Sekolah Tinggi Ilmu Ekonomi Binaniaga');
INSERT INTO `tbl_r_universitas` VALUES ('389', 'Akademi Pariwisata Bunda Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('390', 'Akademi Sekretari Marsudirini Santa Maria');
INSERT INTO `tbl_r_universitas` VALUES ('391', 'Akademi Farmasi Bina Husada Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('392', 'Universitas Advent Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('393', 'Sekolah Tinggi Ilmu Komunikasi Lspr');
INSERT INTO `tbl_r_universitas` VALUES ('394', 'Akademi Perniagaan dan Perusahaan APIPSU Medan');
INSERT INTO `tbl_r_universitas` VALUES ('395', 'Institut Pertanian Stiper');
INSERT INTO `tbl_r_universitas` VALUES ('396', 'STIKES Kusuma Husada Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('397', 'Sekolah Tinggi Ilmu Ekonomi YPUP Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('398', 'Sekolah Tinggi Ilmu Ekonomi Mahardhika');
INSERT INTO `tbl_r_universitas` VALUES ('399', 'Universitas Muhammadiyah Gresik');
INSERT INTO `tbl_r_universitas` VALUES ('400', 'Universitas Methodist Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('401', 'Institut Teknologi Medan');
INSERT INTO `tbl_r_universitas` VALUES ('402', 'Akademi Maritim Nusantara Cilacap');
INSERT INTO `tbl_r_universitas` VALUES ('403', 'Universitas  Klabat');
INSERT INTO `tbl_r_universitas` VALUES ('404', 'Universitas Darul Ulum Islamic Centre Sudirman');
INSERT INTO `tbl_r_universitas` VALUES ('405', 'Akademi Televisi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('406', 'Sekolah Tinggi Ilmu Administrasi YPPT Tasikmalaya');
INSERT INTO `tbl_r_universitas` VALUES ('407', 'Sekolah Tinggi Ilmu Pertanian Farming');
INSERT INTO `tbl_r_universitas` VALUES ('408', 'Universitas Musamus Merauke');
INSERT INTO `tbl_r_universitas` VALUES ('409', 'STIMI  Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('410', 'STISIP Persada Bunda');
INSERT INTO `tbl_r_universitas` VALUES ('411', 'Akademi Fisioterapi ST Lukas Tomohon');
INSERT INTO `tbl_r_universitas` VALUES ('412', 'Universitas  Cenderawasih');
INSERT INTO `tbl_r_universitas` VALUES ('413', 'Akademi Pariwisata Nusantara Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('414', 'Sekolah Tinggi Ilmu Ekonomi La Tansa Mashiro');
INSERT INTO `tbl_r_universitas` VALUES ('415', 'STIKI Malang');
INSERT INTO `tbl_r_universitas` VALUES ('416', 'Sekolah Tinggi Ilmu Pemerintahan Abdi Negara');
INSERT INTO `tbl_r_universitas` VALUES ('417', 'Sekolah Tinggi Teknik Musi');
INSERT INTO `tbl_r_universitas` VALUES ('418', 'STMIK Teknokrat');
INSERT INTO `tbl_r_universitas` VALUES ('419', 'Universitas  Muhammadiyah  Sidoarjo');
INSERT INTO `tbl_r_universitas` VALUES ('420', 'STMIK Triguna Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('421', 'Universitas Wijaya Putra');
INSERT INTO `tbl_r_universitas` VALUES ('422', 'Akademi Akuntansi Bina Insani');
INSERT INTO `tbl_r_universitas` VALUES ('423', 'Akademi Pariwisata Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('424', 'Universitas Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('425', 'Universitas  Alwashliyah');
INSERT INTO `tbl_r_universitas` VALUES ('426', 'Sekolah Tinggi Hukum Galunggung');
INSERT INTO `tbl_r_universitas` VALUES ('427', 'Sekolah Tinggi Perpajakan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('428', 'Sekolah Tinggi Ilmu Kesehatan Binawan');
INSERT INTO `tbl_r_universitas` VALUES ('429', 'Politeknik Negeri Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('430', 'STIKES Mandala Waluya Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('431', 'Akademi Kebidanan Panti Wilasa');
INSERT INTO `tbl_r_universitas` VALUES ('432', 'Universitas Sangga Buana');
INSERT INTO `tbl_r_universitas` VALUES ('433', 'Universitas Tribhuwana Tungga Dewi');
INSERT INTO `tbl_r_universitas` VALUES ('434', 'Universitas Setia Budi Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('435', 'Universitas Muria Kudus');
INSERT INTO `tbl_r_universitas` VALUES ('436', 'Sekolah Tinggi Ilmu Ekonomi Triatma Mulya');
INSERT INTO `tbl_r_universitas` VALUES ('437', 'STKIP  Hamzanwadi');
INSERT INTO `tbl_r_universitas` VALUES ('438', 'Universitas Wijaya Kusuma Purwokerto');
INSERT INTO `tbl_r_universitas` VALUES ('439', 'Akademi Bahasa Asing Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('440', 'Universitas  Trilogi');
INSERT INTO `tbl_r_universitas` VALUES ('441', 'Universitas Dayanu Ikhsanuddin');
INSERT INTO `tbl_r_universitas` VALUES ('442', 'Akademi Perbankan Yuki');
INSERT INTO `tbl_r_universitas` VALUES ('443', 'Institut Informatika Dan Bisnis Darmajaya');
INSERT INTO `tbl_r_universitas` VALUES ('444', 'Akademi Bahasa Asing Borobudur');
INSERT INTO `tbl_r_universitas` VALUES ('445', 'Sekolah Tinggi Bahasa Asing JIA');
INSERT INTO `tbl_r_universitas` VALUES ('446', 'Universitas Islam Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('447', 'Sekolah Tinggi Ilmu Administrasi Bagasasi');
INSERT INTO `tbl_r_universitas` VALUES ('448', 'Sekolah Tinggi Ilmu Ekonomi Amsir Pare-pare');
INSERT INTO `tbl_r_universitas` VALUES ('449', 'Institut Manajemen Koperasi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('450', 'Sekolah Tinggi Ilmu Farmasi Yayasan Pharmasi');
INSERT INTO `tbl_r_universitas` VALUES ('451', 'Sekolah Tinggi Ilmu Farmasi Riau');
INSERT INTO `tbl_r_universitas` VALUES ('452', 'Universitas Negeri Manado');
INSERT INTO `tbl_r_universitas` VALUES ('453', 'Sekolah Tinggi Ilmu Ekonomi Yasa Anggana');
INSERT INTO `tbl_r_universitas` VALUES ('454', 'Sekolah Tinggi Ilmu Ekonomi Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('455', 'Universitas 17 Agustus 1945 Banyuwangi');
INSERT INTO `tbl_r_universitas` VALUES ('456', 'STIE Informasi Teknologi Dan Bisnis');
INSERT INTO `tbl_r_universitas` VALUES ('457', 'Universitas  Ekasakti');
INSERT INTO `tbl_r_universitas` VALUES ('458', 'Akademi Refraksi Optisi Binalita Sudama');
INSERT INTO `tbl_r_universitas` VALUES ('459', 'STIKES Bina Sehat PPNI Mojokerto');
INSERT INTO `tbl_r_universitas` VALUES ('460', 'Sekolah Tinggi Ilmu Ekonomi Pelita Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('461', 'IKIP Saraswati');
INSERT INTO `tbl_r_universitas` VALUES ('462', 'Sekolah Tinggi Ilmu Hukum IBLAM');
INSERT INTO `tbl_r_universitas` VALUES ('463', 'Akademi Kebidanan Sempena Negeri Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('464', 'STMIK Indonesia Padang');
INSERT INTO `tbl_r_universitas` VALUES ('465', 'Sekolah Tinggi Ilmu Administrasi Lppn');
INSERT INTO `tbl_r_universitas` VALUES ('466', 'Akademi Analis Kesehatan Nasional Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('467', 'Sekolah Tinggi Ilmu Ekonomi Sumbar');
INSERT INTO `tbl_r_universitas` VALUES ('468', 'Sekolah Tinggi Ilmu Komunikasi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('469', 'Sekolah Tinggi Ilmu Ekonomi Cipasung');
INSERT INTO `tbl_r_universitas` VALUES ('470', 'Akademi Industri Tekstil Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('471', 'AMIK Tunas Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('472', 'Akademi Keperawatan Bina Sehat PPNI Mojokerto');
INSERT INTO `tbl_r_universitas` VALUES ('473', 'Sekolah Tinggi Ilmu Sosial Dan Politik Mbojo');
INSERT INTO `tbl_r_universitas` VALUES ('474', 'Akademi Kebidanan Dehasen Bengkulu');
INSERT INTO `tbl_r_universitas` VALUES ('475', 'Akademi Kebidanan Helvetia Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('476', 'Akademi Kebidanan Mardirahayu');
INSERT INTO `tbl_r_universitas` VALUES ('477', 'Politeknik Negeri Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('478', 'Akademi Keperawatan Rumkit Tingkat III Manado');
INSERT INTO `tbl_r_universitas` VALUES ('479', 'Universitas Panji Sakti Singaraja');
INSERT INTO `tbl_r_universitas` VALUES ('480', 'Universitas  Simalungun');
INSERT INTO `tbl_r_universitas` VALUES ('481', 'Sekolah Tinggi Filsafat Seminari Pineleng');
INSERT INTO `tbl_r_universitas` VALUES ('482', 'Akademi Kebidanan Anugerah Bintan');
INSERT INTO `tbl_r_universitas` VALUES ('483', 'Sekolah Tinggi Ilmu Administrasi Pelita Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('484', 'AMIK BSI Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('485', 'Politeknik API Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('486', 'Universitas Darma Agung');
INSERT INTO `tbl_r_universitas` VALUES ('487', 'Sekolah Tinggi Teknologi Duta Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('488', 'Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Gombong');
INSERT INTO `tbl_r_universitas` VALUES ('489', 'Sekolah Tinggi Ilmu Ekonomi STEMBI');
INSERT INTO `tbl_r_universitas` VALUES ('490', 'Sekolah Tinggi Ilmu Kesehatan Jenderal Achmad Yani');
INSERT INTO `tbl_r_universitas` VALUES ('491', 'Universitas Prof Dr Hazairin SH');
INSERT INTO `tbl_r_universitas` VALUES ('492', 'Akademi Kebidanan Sari Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('493', 'Sekolah Tinggi Ilmu Ekonomi Pariwisata YAPARI');
INSERT INTO `tbl_r_universitas` VALUES ('494', 'Sekolah Tinggi Ilmu Ekonomi Urip Sumohardjo');
INSERT INTO `tbl_r_universitas` VALUES ('495', 'Politeknik Negeri Medan');
INSERT INTO `tbl_r_universitas` VALUES ('496', 'Sekolah Tinggi Sosial Politik Waskita Darma');
INSERT INTO `tbl_r_universitas` VALUES ('497', 'Sekolah Tinggi Ilmu Ekonomi LPI Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('498', 'Universitas  Nurtanio');
INSERT INTO `tbl_r_universitas` VALUES ('499', 'Universitas PGRI Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('500', 'Universitas Yos Sudarso');
INSERT INTO `tbl_r_universitas` VALUES ('501', 'Akademi Pariwisata Yasmi');
INSERT INTO `tbl_r_universitas` VALUES ('502', 'Universitas Widya Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('503', 'Universitas Negeri Papua');
INSERT INTO `tbl_r_universitas` VALUES ('504', 'Universitas  Tulungagung');
INSERT INTO `tbl_r_universitas` VALUES ('505', 'Sekolah Tinggi Pariwisata Sahid');
INSERT INTO `tbl_r_universitas` VALUES ('506', 'Akademi Pariwisata Bhakti Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('507', 'Universitas Bunda Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('508', 'Politeknik Manufaktur Astra');
INSERT INTO `tbl_r_universitas` VALUES ('509', 'Universitas Sintuwu Maroso Poso');
INSERT INTO `tbl_r_universitas` VALUES ('510', 'Universitas Potensi Utama');
INSERT INTO `tbl_r_universitas` VALUES ('511', 'Sekolah Tinggi Ilmu Ekonomi AMA');
INSERT INTO `tbl_r_universitas` VALUES ('512', 'Sekolah Tinggi Ilmu Kesehatan Sint Carolus');
INSERT INTO `tbl_r_universitas` VALUES ('513', 'Sekolah Tinggi Ilmu Ekonomi Ekuitas');
INSERT INTO `tbl_r_universitas` VALUES ('514', 'Politeknik Piksi Ganesha');
INSERT INTO `tbl_r_universitas` VALUES ('515', 'Sekolah Tinggi Ilmu Administrasi YPIAMI');
INSERT INTO `tbl_r_universitas` VALUES ('516', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('517', 'Universitas  Muhammadiyah  Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('518', 'STISIPOL Dharma Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('519', 'Universitas Respati Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('520', 'Sekolah Tinggi Manajemen Ipmi');
INSERT INTO `tbl_r_universitas` VALUES ('521', 'Akademi Maritim Indonesia Medan');
INSERT INTO `tbl_r_universitas` VALUES ('522', 'Sekolah Tinggi Bahasa Asing Saraswati');
INSERT INTO `tbl_r_universitas` VALUES ('523', 'Universitas Merdeka Pasuruan');
INSERT INTO `tbl_r_universitas` VALUES ('524', 'Akademi Teknik YKPN');
INSERT INTO `tbl_r_universitas` VALUES ('525', 'Universitas Teknologi Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('526', 'Sekolah Tinggi Ilmu Kesehatan Hang Tuah');
INSERT INTO `tbl_r_universitas` VALUES ('527', 'Akademi Kebidanan Aisyiyah Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('528', 'Universitas  Kanjuruhan');
INSERT INTO `tbl_r_universitas` VALUES ('529', 'Universitas Katolik Widya Mandira Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('530', 'Akademi Keuangan Dan Perbankan Riau');
INSERT INTO `tbl_r_universitas` VALUES ('531', 'Institut Teknologi Padang');
INSERT INTO `tbl_r_universitas` VALUES ('532', 'Sekolah Tinggi Ilmu Hukum Muhammadiyah Kalianda');
INSERT INTO `tbl_r_universitas` VALUES ('533', 'Akademi Pariwisata Nasional Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('534', 'Sekolah Tinggi Ilmu Kesehatan Bali');
INSERT INTO `tbl_r_universitas` VALUES ('535', 'Sekolah Tinggi Ilmu Administrasi Adabiah');
INSERT INTO `tbl_r_universitas` VALUES ('536', 'Akademi Pariwisata Majapahit');
INSERT INTO `tbl_r_universitas` VALUES ('537', 'Sekolah Tinggi Teknik Kelautan Balik Diwa');
INSERT INTO `tbl_r_universitas` VALUES ('538', 'Universitas  Batam');
INSERT INTO `tbl_r_universitas` VALUES ('539', 'Akademi Teknik Mesin Industri Cikarang');
INSERT INTO `tbl_r_universitas` VALUES ('540', 'Sekolah Tinggi Ilmu Kesehatan Dharma Husada');
INSERT INTO `tbl_r_universitas` VALUES ('541', 'Universitas  Muhammadiyah  Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('542', 'Universitas  Gajayana');
INSERT INTO `tbl_r_universitas` VALUES ('543', 'Sekolah Tinggi Ilmu Ekonomi Bangkinang');
INSERT INTO `tbl_r_universitas` VALUES ('544', 'Sekolah Tinggi Ilmu Hukum Lamaddukelleng');
INSERT INTO `tbl_r_universitas` VALUES ('545', 'Akademi Keperawatan RS Dustira');
INSERT INTO `tbl_r_universitas` VALUES ('546', 'Akademi Pariwisata BSI Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('547', 'AMIK BSI Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('548', 'Akademi Fisioterapi UPN Veteran Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('549', 'STKIP Bina Insan Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('550', 'Akademi Farmasi Kebangsaan Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('551', 'Universitas  Bakrie');
INSERT INTO `tbl_r_universitas` VALUES ('552', 'Politeknik ATMI');
INSERT INTO `tbl_r_universitas` VALUES ('553', 'STKIP Yapim Maros');
INSERT INTO `tbl_r_universitas` VALUES ('554', 'Sekolah Tinggi Ilmu Ekonomi AMM');
INSERT INTO `tbl_r_universitas` VALUES ('555', 'STMIK Jaya Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('556', 'STMIK Amikom Purwokerto');
INSERT INTO `tbl_r_universitas` VALUES ('557', 'STMIK Akakom');
INSERT INTO `tbl_r_universitas` VALUES ('558', 'Sekolah Tinggi Pariwisata Ambarrukmo Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('559', 'Akademi Teknik Soroako');
INSERT INTO `tbl_r_universitas` VALUES ('560', 'Universitas Kristen Indonesia Maluku');
INSERT INTO `tbl_r_universitas` VALUES ('561', 'Sekolah Tinggi Ilmu Ekonomi Swadaya');
INSERT INTO `tbl_r_universitas` VALUES ('562', 'Universitas Muhammadiyah Maluku Utara');
INSERT INTO `tbl_r_universitas` VALUES ('563', 'STKIP PGRI Tulungagung');
INSERT INTO `tbl_r_universitas` VALUES ('564', 'Akademi Keperawatan Bhakti Kencana Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('565', 'Sekolah Tinggi Ilmu Kesehatan Syedza Saintika');
INSERT INTO `tbl_r_universitas` VALUES ('566', 'Politeknik Sakti Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('567', 'Universitas  Muhammadiyah  Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('568', 'Sekolah Tinggi Bahasa Asing Cipto Hadi Pranoto');
INSERT INTO `tbl_r_universitas` VALUES ('569', 'Universitas  Kadiri');
INSERT INTO `tbl_r_universitas` VALUES ('570', 'STMIK Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('571', 'Sekolah Tinggi Ilmu Ekonomi Harapan Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('572', 'Politeknik Cahaya Surya');
INSERT INTO `tbl_r_universitas` VALUES ('573', 'Universitas Islam As-syafiiyah');
INSERT INTO `tbl_r_universitas` VALUES ('574', 'Sekolah Tinggi Ilmu Ekonomi Asia Malang');
INSERT INTO `tbl_r_universitas` VALUES ('575', 'Universitas 17 Agustus 1945 Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('576', 'Universitas Winaya Mukti');
INSERT INTO `tbl_r_universitas` VALUES ('577', 'Sekolah Tinggi Ilmu Ekonomi Isti Ekatana Upaweda');
INSERT INTO `tbl_r_universitas` VALUES ('578', 'Politeknik Negeri Ujung Pandang');
INSERT INTO `tbl_r_universitas` VALUES ('579', 'Akademi Maritim Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('580', 'STKIP  Dharmasraya');
INSERT INTO `tbl_r_universitas` VALUES ('581', 'Universitas  Muhammadiyah  Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('582', 'Sekolah Tinggi Teknologi Adisutjipto');
INSERT INTO `tbl_r_universitas` VALUES ('583', 'STKIP PGRI Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('584', 'STISIPOL  Candradimuka');
INSERT INTO `tbl_r_universitas` VALUES ('585', 'Universitas  Muhammadiyah  Purworejo');
INSERT INTO `tbl_r_universitas` VALUES ('586', 'Institut Bisnis dan Multimedia Asmi Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('587', 'STIKES Surya Mitra Husada');
INSERT INTO `tbl_r_universitas` VALUES ('588', 'Universitas  Baiturrahmah');
INSERT INTO `tbl_r_universitas` VALUES ('589', 'Sekolah Tinggi Pariwisata Pelita Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('590', 'Politeknik LP3I Medan');
INSERT INTO `tbl_r_universitas` VALUES ('591', 'Akademi Informatika Dan Komputer Medicom');
INSERT INTO `tbl_r_universitas` VALUES ('592', 'Politeknik Manufaktur Negeri Bangka Belitung');
INSERT INTO `tbl_r_universitas` VALUES ('593', 'Universitas  Borobudur');
INSERT INTO `tbl_r_universitas` VALUES ('594', 'Akademi Maritim Djadajat');
INSERT INTO `tbl_r_universitas` VALUES ('595', 'Sekolah Tinggi Ilmu Ekonomi Jayakarta');
INSERT INTO `tbl_r_universitas` VALUES ('596', 'Akademi Kebidanan Muhammadiyah Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('597', 'Akademi Kebidanan Kartini');
INSERT INTO `tbl_r_universitas` VALUES ('598', 'Akademi Bahasa Asing Persada Bunda');
INSERT INTO `tbl_r_universitas` VALUES ('599', 'Universitas Gunung Rinjani');
INSERT INTO `tbl_r_universitas` VALUES ('600', 'STMIK Widya Pratama');
INSERT INTO `tbl_r_universitas` VALUES ('601', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Malang');
INSERT INTO `tbl_r_universitas` VALUES ('602', 'Universitas Merdeka Ponorogo');
INSERT INTO `tbl_r_universitas` VALUES ('603', 'Universitas Surya Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('604', 'Sekolah Tinggi Ilmu Komunikasi Wangsa Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('605', 'Akademi Farmasi Indah Deli Serdang');
INSERT INTO `tbl_r_universitas` VALUES ('606', 'Sekolah Tinggi Ilmu Hukum Manokwari');
INSERT INTO `tbl_r_universitas` VALUES ('607', 'Universitas Islam Sumatera Utara');
INSERT INTO `tbl_r_universitas` VALUES ('608', 'Politeknik Negeri Manado');
INSERT INTO `tbl_r_universitas` VALUES ('609', 'Akademi Kebidanan Yayasan Husada Madani');
INSERT INTO `tbl_r_universitas` VALUES ('610', 'STKIP PGRI Pacitan');
INSERT INTO `tbl_r_universitas` VALUES ('611', 'Sekolah Tinggi Ilmu Ekonomi Dewantara');
INSERT INTO `tbl_r_universitas` VALUES ('612', 'Universitas Galuh Ciamis');
INSERT INTO `tbl_r_universitas` VALUES ('613', 'Sekolah Tinggi Bahasa Asing Persada Bunda');
INSERT INTO `tbl_r_universitas` VALUES ('614', 'Akademi Kebidanan RSPAD Gatot Soebroto');
INSERT INTO `tbl_r_universitas` VALUES ('615', 'Sekolah Tinggi Desain La Salle');
INSERT INTO `tbl_r_universitas` VALUES ('616', 'Akademi Manajemen Informatika dan Komputer Imelda');
INSERT INTO `tbl_r_universitas` VALUES ('617', 'Sekolah Tinggi Ilmu Ekonomi Mulia Darma Pratama');
INSERT INTO `tbl_r_universitas` VALUES ('618', 'STIAS Bunda Hati Kudus');
INSERT INTO `tbl_r_universitas` VALUES ('619', 'Akademi Perikanan Bhima Sakti');
INSERT INTO `tbl_r_universitas` VALUES ('620', 'Akademi Akuntansi Dan Manajemen Mitra Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('621', 'Akademi Pariwisata Pertiwi');
INSERT INTO `tbl_r_universitas` VALUES ('622', 'Akademi Teknik Radiodiagnostik dan Radioterapi Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('623', 'Akademi Keperawatan Yatna Yuana Lebak');
INSERT INTO `tbl_r_universitas` VALUES ('624', 'Akademi Kebidanan Bhakti Purna Husada');
INSERT INTO `tbl_r_universitas` VALUES ('625', 'Akademi Pariwisata Nusantara Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('626', 'Sekolah Tinggi Seni Rupa Dan Desain Visi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('627', 'Akademi Kebidanan Ummi Khasanah');
INSERT INTO `tbl_r_universitas` VALUES ('628', 'Akademi Teknik Tirta Wiyata');
INSERT INTO `tbl_r_universitas` VALUES ('629', 'Sekolah Tinggi Ilmu Ekonomi KH Ahmad Dahlan');
INSERT INTO `tbl_r_universitas` VALUES ('630', 'Akademi Keperawatan Pemerintah Kabupaten Ngawi');
INSERT INTO `tbl_r_universitas` VALUES ('631', 'Sekolah Tinggi Ilmu Hukum Pengayoman');
INSERT INTO `tbl_r_universitas` VALUES ('632', 'Akademi Bahasa Asing UMI Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('633', 'Sekolah Tinggi Ilmu Ekonomi Kebangsaan Bireuen');
INSERT INTO `tbl_r_universitas` VALUES ('634', 'Sekolah Tinggi Ilmu Kesehatan Mitra Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('635', 'STIKES Muhammadiyah  Lamongan');
INSERT INTO `tbl_r_universitas` VALUES ('636', 'Universitas BSI');
INSERT INTO `tbl_r_universitas` VALUES ('637', 'Universitas  Malahayati');
INSERT INTO `tbl_r_universitas` VALUES ('638', 'Universitas Muhammadiyah Riau');
INSERT INTO `tbl_r_universitas` VALUES ('639', 'Sekolah Tinggi Ilmu Ekonomi Widya Wiwaha');
INSERT INTO `tbl_r_universitas` VALUES ('640', 'STKIP PGRI Ngawi');
INSERT INTO `tbl_r_universitas` VALUES ('641', 'Universitas Islam Kadiri');
INSERT INTO `tbl_r_universitas` VALUES ('642', 'STIKES Muhammadiyah  Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('643', 'Universitas  Muhammadiyah  Gorontalo');
INSERT INTO `tbl_r_universitas` VALUES ('644', 'IKIP Budi Utomo');
INSERT INTO `tbl_r_universitas` VALUES ('645', 'Akademi Farmasi Nusaputera Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('646', 'STIKES Qamarul Huda');
INSERT INTO `tbl_r_universitas` VALUES ('647', 'Sekolah Tinggi Ilmu Ekonomi Cendekia Bojonegoro');
INSERT INTO `tbl_r_universitas` VALUES ('648', 'STKIP Surya');
INSERT INTO `tbl_r_universitas` VALUES ('649', 'Sekolah Tinggi Ilmu Administrasi Menara Siswa');
INSERT INTO `tbl_r_universitas` VALUES ('650', 'Sekolah Tinggi Ilmu Ekonomi Wira Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('651', 'Universitas  Bojonegoro');
INSERT INTO `tbl_r_universitas` VALUES ('652', 'Politeknik Kesehatan Bhakti Setya Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('653', 'STIKES Muhammadiyah  Pekajangan');
INSERT INTO `tbl_r_universitas` VALUES ('654', 'Politeknik Pos Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('655', 'Akademi Perpajakan Tridarma');
INSERT INTO `tbl_r_universitas` VALUES ('656', 'Universitas Swadaya Gunung Djati');
INSERT INTO `tbl_r_universitas` VALUES ('657', 'Sekolah Tinggi Ilmu Pertanian Amuntai');
INSERT INTO `tbl_r_universitas` VALUES ('658', 'Sekolah Tinggi Elektronika Dan Komputer Pat');
INSERT INTO `tbl_r_universitas` VALUES ('659', 'STMIK PPKIA Pradnya Paramita');
INSERT INTO `tbl_r_universitas` VALUES ('660', 'Akademi Manajemen Informatika & Komputer Jaya Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('661', 'Universitas  Muhammadiyah  Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('662', 'Akademi Maritim Indonesia Veteran Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('663', 'Akademi Kebidanan Bhakti Asih Purwakarta');
INSERT INTO `tbl_r_universitas` VALUES ('664', 'Akademi Sekretari Manajemen Taruna Bakti');
INSERT INTO `tbl_r_universitas` VALUES ('665', 'Akademi Maritim Indonesia AIPI');
INSERT INTO `tbl_r_universitas` VALUES ('666', 'Univeristas Katolik Darma Cendika');
INSERT INTO `tbl_r_universitas` VALUES ('667', 'Sekolah Tinggi Ilmu Ekonomi Trisakti');
INSERT INTO `tbl_r_universitas` VALUES ('668', 'STKIP Pasundan');
INSERT INTO `tbl_r_universitas` VALUES ('669', 'STKIP Agama Hindu Singaraja');
INSERT INTO `tbl_r_universitas` VALUES ('670', 'Universitas  Azzahra');
INSERT INTO `tbl_r_universitas` VALUES ('671', 'Sekolah Tinggi Ilmu Kesehatan Elisabeth Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('672', 'Universitas Yudharta Pasuruan');
INSERT INTO `tbl_r_universitas` VALUES ('673', 'STKIP Kebangkitan Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('674', 'Universitas Putra Indonesia Yptk Padang');
INSERT INTO `tbl_r_universitas` VALUES ('675', 'Politeknik Kesehatan Majapahit');
INSERT INTO `tbl_r_universitas` VALUES ('676', 'St Ilmu Komputer Cipta Karya Informatika');
INSERT INTO `tbl_r_universitas` VALUES ('677', 'Universitas  Tridinanti');
INSERT INTO `tbl_r_universitas` VALUES ('678', 'AMIK Raharja Informatika');
INSERT INTO `tbl_r_universitas` VALUES ('679', 'Universitas Muhammadiyah Sumatera Barat');
INSERT INTO `tbl_r_universitas` VALUES ('680', 'Sekolah Tinggi Ilmu Kesehatan Indonesia Maju');
INSERT INTO `tbl_r_universitas` VALUES ('681', 'Universitas  Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('682', 'Universitas  Pakuan');
INSERT INTO `tbl_r_universitas` VALUES ('683', 'Akademi Sekretari Manajemen Cendana');
INSERT INTO `tbl_r_universitas` VALUES ('684', 'Sekolah Tinggi Ilmu Ekonomi Trisna Negara');
INSERT INTO `tbl_r_universitas` VALUES ('685', 'Universitas Merdeka Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('686', 'Akademi Kebidanan YPSDMI');
INSERT INTO `tbl_r_universitas` VALUES ('687', 'Akademi Farmasi Nasional Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('688', 'Universitas  Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('689', 'Sekolah Tinggi Ilmu Ekonomi Amkop Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('690', 'STMIK IBBI');
INSERT INTO `tbl_r_universitas` VALUES ('691', 'Politeknik Pertanian Negeri Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('692', 'Universitas Iskandar Muda');
INSERT INTO `tbl_r_universitas` VALUES ('693', 'Akademi Sekretari Dan Manajemen Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('694', 'Universitas Muhammadiyah Palu');
INSERT INTO `tbl_r_universitas` VALUES ('695', 'Universitas Cokroaminoto Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('696', 'Sekolah Tinggi Ilmu Ekonomi Pertiba');
INSERT INTO `tbl_r_universitas` VALUES ('697', 'Sekolah Tinggi Ilmu Ekonomi Lampung Timur');
INSERT INTO `tbl_r_universitas` VALUES ('698', 'Sekolah Tinggi Teknik Multimedia Cendikia Abditama');
INSERT INTO `tbl_r_universitas` VALUES ('699', 'Politeknik Unggul LP3M');
INSERT INTO `tbl_r_universitas` VALUES ('700', 'STMIK Indonesia Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('701', 'Akademi Keperawatan Dian Husada');
INSERT INTO `tbl_r_universitas` VALUES ('702', 'STIK Muhammadiyah Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('703', 'STIKES Nahdlatul Ulama Tuban');
INSERT INTO `tbl_r_universitas` VALUES ('704', 'Sekolah Tinggi Ilmu Ekonomi Widya Gama');
INSERT INTO `tbl_r_universitas` VALUES ('705', 'Sekolah Tinggi Ilmu Ekonomi Sakti Alam Kerinci');
INSERT INTO `tbl_r_universitas` VALUES ('706', 'Institut Teknologi Adhi Tama Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('707', 'STIKES Mercubaktijaya Padang');
INSERT INTO `tbl_r_universitas` VALUES ('708', 'Akademi Keperawatan Dharma Husada Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('709', 'Akademi Statistika Muhammadiyah Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('710', 'Universitas Nusa Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('711', 'STMIK Bina Insani');
INSERT INTO `tbl_r_universitas` VALUES ('712', 'Universitas  Sawerigading  Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('713', 'Institut Ilmu Sosial Dan Ilmu Politik Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('714', 'STKIP PGRI Sumatera Barat');
INSERT INTO `tbl_r_universitas` VALUES ('715', 'Universitas  Al-ghifari');
INSERT INTO `tbl_r_universitas` VALUES ('716', 'STMIK Amik Riau');
INSERT INTO `tbl_r_universitas` VALUES ('717', 'Sekolah Tinggi Ilmu Kesehatan Bakti Tunas Husada');
INSERT INTO `tbl_r_universitas` VALUES ('718', 'Politeknik Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('719', 'STISIP Widyapuri Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('720', 'Sekolah Tinggi Ilmu Ekonomi Persada Bunda');
INSERT INTO `tbl_r_universitas` VALUES ('721', 'Sekolah Tinggi Ilmu Ekonomi Musi Rawas');
INSERT INTO `tbl_r_universitas` VALUES ('722', 'Universitas  Satyagama');
INSERT INTO `tbl_r_universitas` VALUES ('723', 'STIE Multi Data Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('724', 'Universitas Mahaputra Muhammad Yamin');
INSERT INTO `tbl_r_universitas` VALUES ('725', 'Sekolah Tinggi Teknologi Ronggolawe');
INSERT INTO `tbl_r_universitas` VALUES ('726', 'Sekolah Tinggi Farmasi Muhammadiyah Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('727', 'Universitas  Wiraraja');
INSERT INTO `tbl_r_universitas` VALUES ('728', 'Universitas  Sjakhyakirti');
INSERT INTO `tbl_r_universitas` VALUES ('729', 'Sekolah Tinggi Ilmu Administrasi YAPPI Makassa');
INSERT INTO `tbl_r_universitas` VALUES ('730', 'STIE Muhammadiyah Pekalongan');
INSERT INTO `tbl_r_universitas` VALUES ('731', 'Sekolah Tinggi Teknologi Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('732', 'STMIK Global Informatika Mdp');
INSERT INTO `tbl_r_universitas` VALUES ('733', 'Universitas Proklamasi 45');
INSERT INTO `tbl_r_universitas` VALUES ('734', 'Universitas Katolik Widya Karya');
INSERT INTO `tbl_r_universitas` VALUES ('735', 'STIA  Puangrimaggalatung');
INSERT INTO `tbl_r_universitas` VALUES ('736', 'Akademi Kesejahteraan Sosial Ibu Kartini');
INSERT INTO `tbl_r_universitas` VALUES ('737', 'Sekolah Tinggi Farmasi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('738', 'Institut Sains Dan Teknologi Al-Kamal');
INSERT INTO `tbl_r_universitas` VALUES ('739', 'Universitas IBA');
INSERT INTO `tbl_r_universitas` VALUES ('740', 'Akademi Akuntansi Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('741', 'Politeknik Negeri Media Kreatif');
INSERT INTO `tbl_r_universitas` VALUES ('742', 'Akademi Keperawatan Helvetia Medan');
INSERT INTO `tbl_r_universitas` VALUES ('743', 'Sekolah Tinggi Ilmu Komputer Dinamika Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('744', 'Sekolah Tinggi Ilmu Hukum Serasan Muara Enim');
INSERT INTO `tbl_r_universitas` VALUES ('745', 'Universitas Sulawesi Tenggara');
INSERT INTO `tbl_r_universitas` VALUES ('746', 'STMIK Bumi Gora');
INSERT INTO `tbl_r_universitas` VALUES ('747', 'Universitas Achmad Yani Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('748', 'Universitas Muhammadiyah Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('749', 'Sekolah Tinggi Ilmu Kesehatan \'Aisyiyah Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('750', 'Institut Teknologi dan Bisnis Kalbis');
INSERT INTO `tbl_r_universitas` VALUES ('751', 'Sekolah Tinggi Ilmu Kesehatan Pemkab Jombang');
INSERT INTO `tbl_r_universitas` VALUES ('752', 'Universitas  Kuningan');
INSERT INTO `tbl_r_universitas` VALUES ('753', 'Akademi Keuangan Dan Perbankan Borobudur');
INSERT INTO `tbl_r_universitas` VALUES ('754', 'Sekolah Tinggi Desain Interstudi');
INSERT INTO `tbl_r_universitas` VALUES ('755', 'Universitas Yapis Papua');
INSERT INTO `tbl_r_universitas` VALUES ('756', 'Akademi Manajemen Informatika Dan Komputer Logika');
INSERT INTO `tbl_r_universitas` VALUES ('757', 'Sekolah Tinggi Ilmu Kesehatan Bina Husada');
INSERT INTO `tbl_r_universitas` VALUES ('758', 'Sekolah Tinggi Ilmu Hukum Sunan Giri');
INSERT INTO `tbl_r_universitas` VALUES ('759', 'STMIK DCI');
INSERT INTO `tbl_r_universitas` VALUES ('760', 'STMIK Dharma Putra');
INSERT INTO `tbl_r_universitas` VALUES ('761', 'Sekolah Tinggi Ilmu Kesehatan Mitra Kencana');
INSERT INTO `tbl_r_universitas` VALUES ('762', 'Akademi Kebidanan Bhakti Asih Cileduk');
INSERT INTO `tbl_r_universitas` VALUES ('763', 'Akademi Analis Kesehatan Muhammadiyah Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('764', 'Institut Kesenian Jakarta - LPKJ');
INSERT INTO `tbl_r_universitas` VALUES ('765', 'Universitas Sains Alqur an');
INSERT INTO `tbl_r_universitas` VALUES ('766', 'Universitas PGRI Ronggolawe');
INSERT INTO `tbl_r_universitas` VALUES ('767', 'Sekolah Tinggi Bahasa Asing Yapari');
INSERT INTO `tbl_r_universitas` VALUES ('768', 'Sekolah Tinggi Ilmu Hukum Muhammadiyah Kotabumi');
INSERT INTO `tbl_r_universitas` VALUES ('769', 'Sekolah Tinggi Ilmu Ekonomi Panca Bhakti Palu');
INSERT INTO `tbl_r_universitas` VALUES ('770', 'Universitas Bangka Belitung');
INSERT INTO `tbl_r_universitas` VALUES ('771', 'Universitas  Soerjo');
INSERT INTO `tbl_r_universitas` VALUES ('772', 'Universitas Bakti Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('773', 'AKTEK Radiodiagnostik Dan Radioterapi Bali');
INSERT INTO `tbl_r_universitas` VALUES ('774', 'STKIP Muhammadiyah  Pringsewu');
INSERT INTO `tbl_r_universitas` VALUES ('775', 'Akademi Pembangunan Pertanian Lubuk Alung');
INSERT INTO `tbl_r_universitas` VALUES ('776', 'STKIP  Kusumanegara');
INSERT INTO `tbl_r_universitas` VALUES ('777', 'Sekolah Tinggi Ilmu Kesehatan Santo Borromeus');
INSERT INTO `tbl_r_universitas` VALUES ('778', 'Universitas Sunan Giri');
INSERT INTO `tbl_r_universitas` VALUES ('779', 'Sekolah Tinggi Pariwisata Riau');
INSERT INTO `tbl_r_universitas` VALUES ('780', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('781', 'STMIK Widya Cipta Dharma Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('782', 'STKIP Andi Mattappa');
INSERT INTO `tbl_r_universitas` VALUES ('783', 'Politeknik Perikanan Negeri Tual');
INSERT INTO `tbl_r_universitas` VALUES ('784', 'Akademi Pariwisata Saint Mary');
INSERT INTO `tbl_r_universitas` VALUES ('785', 'Universitas Kristen Artha Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('786', 'Sekolah Tinggi Ilmu Kesehatan Achmad Yani Yogya');
INSERT INTO `tbl_r_universitas` VALUES ('787', 'Akademi Bahasa Asing Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('788', 'Akademi Refraksi Optisi YLPTK');
INSERT INTO `tbl_r_universitas` VALUES ('789', 'Universitas  Alkhairaat');
INSERT INTO `tbl_r_universitas` VALUES ('790', 'Sekolah Tinggi Ilmu Ekonomi El Fatah Manado');
INSERT INTO `tbl_r_universitas` VALUES ('791', 'Sekolah Tinggi Ilmu Ekonomi Wijaya Mulya');
INSERT INTO `tbl_r_universitas` VALUES ('792', 'Sekolah Tinggi Ilmu Ekonomi St Pignatelli');
INSERT INTO `tbl_r_universitas` VALUES ('793', 'Universitas  Suryakancana');
INSERT INTO `tbl_r_universitas` VALUES ('794', 'Sekolah Tinggi Ilmu Ekonomi Pancasetia');
INSERT INTO `tbl_r_universitas` VALUES ('795', 'Universitas Sari Mutiara Indonesia Medan');
INSERT INTO `tbl_r_universitas` VALUES ('796', 'Sekolah Tinggi Ilmu Ekonomi Sulawesi Utara');
INSERT INTO `tbl_r_universitas` VALUES ('797', 'Akademi Perikanan Ibrahimy');
INSERT INTO `tbl_r_universitas` VALUES ('798', 'Universitas Islam Al-azhar Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('799', 'Sekolah Tinggi Ilmu Ekonomi Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('800', 'STKIP PGRI Bangkalan');
INSERT INTO `tbl_r_universitas` VALUES ('801', 'Sekolah Tinggi Ilmu Ekonomi Riau');
INSERT INTO `tbl_r_universitas` VALUES ('802', 'Sekolah Tinggi Manajemen Labora');
INSERT INTO `tbl_r_universitas` VALUES ('803', 'Universitas Islam Attahiriyah');
INSERT INTO `tbl_r_universitas` VALUES ('804', 'Sekolah Tinggi Ilmu Ekonomi Tridharma');
INSERT INTO `tbl_r_universitas` VALUES ('805', 'Akademi Kebidanan Pelita Ilmu Depok');
INSERT INTO `tbl_r_universitas` VALUES ('806', 'Akademi Kesehatan Karya Husada Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('807', 'STKIP Pembangunan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('808', 'Politeknik Pratama Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('809', 'STIE Pengembangan Bisnis Dan Manajemen');
INSERT INTO `tbl_r_universitas` VALUES ('810', 'Sekolah Tinggi Ilmu Ekonomi Ibnusina');
INSERT INTO `tbl_r_universitas` VALUES ('811', 'Akademi Kebidanan Citra Medika Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('812', 'Akademi Kebidanan Budi Kemuliaan');
INSERT INTO `tbl_r_universitas` VALUES ('813', 'Sekolah Tinggi Ilmu Kesehatan Fort De Kock');
INSERT INTO `tbl_r_universitas` VALUES ('814', 'Universitas  Flores');
INSERT INTO `tbl_r_universitas` VALUES ('815', 'Politeknik Kesehatan TNI-AU Ciumbuleuit');
INSERT INTO `tbl_r_universitas` VALUES ('816', 'Akademi Manajemen Informatika & Komputer Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('817', 'Sekolah Tinggi Ilmu Ekonomi Pelita Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('818', 'Universitas Nusantara PGRI Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('819', 'Sekolah Tinggi Ilmu Ekonomi Port Numbay Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('820', 'Universitas Tidar');
INSERT INTO `tbl_r_universitas` VALUES ('821', 'Universitas Katolik Widya Mandala Madiun');
INSERT INTO `tbl_r_universitas` VALUES ('822', 'Universitas Kristen Krida Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('823', 'Sekolah Tinggi Ilmu Kesehatan Majapahit');
INSERT INTO `tbl_r_universitas` VALUES ('824', 'Sekolah Tinggi Ilmu Kesehatan Kuningan Garawangi');
INSERT INTO `tbl_r_universitas` VALUES ('825', 'Sekolah Tinggi Ilmu Kesehatan YPIB');
INSERT INTO `tbl_r_universitas` VALUES ('826', 'STIKES Telogorejo Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('827', 'Universitas  Tamansiswa');
INSERT INTO `tbl_r_universitas` VALUES ('828', 'STIPER Agrobisnis Perkebunan');
INSERT INTO `tbl_r_universitas` VALUES ('829', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('830', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('831', 'Sekolah Tinggi Ilmu Ekonomi Jaya Negara');
INSERT INTO `tbl_r_universitas` VALUES ('832', 'Akademi Pariwisata Muhammadiyah Jember');
INSERT INTO `tbl_r_universitas` VALUES ('833', 'STKIP Siliwangi');
INSERT INTO `tbl_r_universitas` VALUES ('834', 'Akademi Kebidanan Bali Wisnu Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('835', 'Sekolah Tinggi Ilmu Manajemen Amkop');
INSERT INTO `tbl_r_universitas` VALUES ('836', 'Universitas Madako Toli-toli');
INSERT INTO `tbl_r_universitas` VALUES ('837', 'STKIP PGRI Ponorogo');
INSERT INTO `tbl_r_universitas` VALUES ('838', 'Sekolah Tinggi Bahasa Asing LIA Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('839', 'STIE Dharma Negara');
INSERT INTO `tbl_r_universitas` VALUES ('840', 'STMIK Sinar Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('841', 'Politeknik LPP Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('842', 'Sekolah Tinggi Teknologi Kedirgantaraan');
INSERT INTO `tbl_r_universitas` VALUES ('843', 'Sekolah Tinggi Ilmu Ekonomi Ykp');
INSERT INTO `tbl_r_universitas` VALUES ('844', 'Sekolah Tinggi Ilmu Kesehatan Abdi Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('845', 'Sekolah Tinggi Ilmu Administrasi Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('846', 'Akademi Pariwisata NHI Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('847', 'Akademi Sekretari Dan Manajemen Ariyanti');
INSERT INTO `tbl_r_universitas` VALUES ('848', 'STIKES Bhakti Husada Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('849', 'STIKES Widyagama Husada Malang');
INSERT INTO `tbl_r_universitas` VALUES ('850', 'Akademi Sekretari Manajemen Indonesia Publik');
INSERT INTO `tbl_r_universitas` VALUES ('851', 'Akademi Maritim Aceh Darussalam');
INSERT INTO `tbl_r_universitas` VALUES ('852', 'Sekolah Tinggi Ilmu Pertanian Yapim Maros');
INSERT INTO `tbl_r_universitas` VALUES ('853', 'Sekolah Tinggi Ilmu Ekonomi Bongaya YPBUP Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('854', 'Universitas Aki');
INSERT INTO `tbl_r_universitas` VALUES ('855', 'Sekolah Tinggi Perikanan Hatta-sjahrir');
INSERT INTO `tbl_r_universitas` VALUES ('856', 'STIP Graha Karya');
INSERT INTO `tbl_r_universitas` VALUES ('857', 'Universitas Prima Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('858', 'Akademi Kebidanan Ngudia Husada Madura');
INSERT INTO `tbl_r_universitas` VALUES ('859', 'Universitas Amir Hamzah');
INSERT INTO `tbl_r_universitas` VALUES ('860', 'Akademi Pariwisata Sandhy Putra');
INSERT INTO `tbl_r_universitas` VALUES ('861', 'Universitas Bale Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('862', 'Universitas Sang Bumi Ruwa Jurai');
INSERT INTO `tbl_r_universitas` VALUES ('863', 'Akademi Kebidanan La Tansa Mashiro');
INSERT INTO `tbl_r_universitas` VALUES ('864', 'Universitas Ottow Geissler Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('865', 'Universitas Fajar');
INSERT INTO `tbl_r_universitas` VALUES ('866', 'Sekolah Tinggi Theologia Intim Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('867', 'Politeknik Poliprofesi Medan');
INSERT INTO `tbl_r_universitas` VALUES ('868', 'STMIK Mardira Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('869', 'Sekolah Tinggi Ilmu Ekonomi Lembah Dempo');
INSERT INTO `tbl_r_universitas` VALUES ('870', 'Sekolah Tinggi Ilmu Hukum Amsir');
INSERT INTO `tbl_r_universitas` VALUES ('871', 'STISIP  Margarana');
INSERT INTO `tbl_r_universitas` VALUES ('872', 'Sekolah Tinggi Ilmu Administrasi Bina Taruna');
INSERT INTO `tbl_r_universitas` VALUES ('873', 'Universitas Pasir Pengaraian');
INSERT INTO `tbl_r_universitas` VALUES ('874', 'STIKES Insan Cendekia Husada Bojonegoro');
INSERT INTO `tbl_r_universitas` VALUES ('875', 'Universitas Islam Syekh Yusuf');
INSERT INTO `tbl_r_universitas` VALUES ('876', 'Universitas  Kartini');
INSERT INTO `tbl_r_universitas` VALUES ('877', 'Akademi Sekretari Dan Manajemen Bina Insani');
INSERT INTO `tbl_r_universitas` VALUES ('878', 'STKIP Yayasan Abdi Pendidikan');
INSERT INTO `tbl_r_universitas` VALUES ('879', 'Akademi Komunikasi Media Radio Dan TV Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('880', 'Universitas Nahdlatul Ulama');
INSERT INTO `tbl_r_universitas` VALUES ('881', 'Sekolah Tinggi Ilmu Ekonomi Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('882', 'Sekolah Tinggi Ilmu Pertanian');
INSERT INTO `tbl_r_universitas` VALUES ('883', 'Akademi Akuntansi Indonesia Padang');
INSERT INTO `tbl_r_universitas` VALUES ('884', 'STKIP PGRI Blitar');
INSERT INTO `tbl_r_universitas` VALUES ('885', 'Sekolah Tinggi Ilmu Ekonomi AKA');
INSERT INTO `tbl_r_universitas` VALUES ('886', 'Akademi Kebidanan Sismadi');
INSERT INTO `tbl_r_universitas` VALUES ('887', 'IKIP Widya Darma');
INSERT INTO `tbl_r_universitas` VALUES ('888', 'Universitas  Quality');
INSERT INTO `tbl_r_universitas` VALUES ('889', 'Akademi Pariwisata Dan Perhotelan Darma Agung');
INSERT INTO `tbl_r_universitas` VALUES ('890', 'Akademi Maritim Nasional Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('891', 'Sekolah Tinggi Ilmu Komunikasi Inter Studi');
INSERT INTO `tbl_r_universitas` VALUES ('892', 'Sekolah Tinggi Ilmu Kesehatan Mega Rezky');
INSERT INTO `tbl_r_universitas` VALUES ('893', 'Politeknik Kelapa Sawit Citra Widya Edukasi');
INSERT INTO `tbl_r_universitas` VALUES ('894', 'STMIK Muhammadiyah Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('895', 'Sekolah Tinggi Ilmu Ekonomi IGI');
INSERT INTO `tbl_r_universitas` VALUES ('896', 'Sekolah Tinggi Ilmu Manajemen Pase');
INSERT INTO `tbl_r_universitas` VALUES ('897', 'STKIP YPUP Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('898', 'Sekolah Tinggi Ilmu Komunikasi Indonesia Maju');
INSERT INTO `tbl_r_universitas` VALUES ('899', 'STMIK Kadiri');
INSERT INTO `tbl_r_universitas` VALUES ('900', 'Akademi Analis Kesehatan Borneo Lestari Banjarbaru');
INSERT INTO `tbl_r_universitas` VALUES ('901', 'Sekolah Tinggi Ilmu Administrasi Malang');
INSERT INTO `tbl_r_universitas` VALUES ('902', 'Universitas Preston Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('903', 'Universitas Darul ulum');
INSERT INTO `tbl_r_universitas` VALUES ('904', 'Sekolah Tinggi Ilmu Hukum Tambun Bungai');
INSERT INTO `tbl_r_universitas` VALUES ('905', 'STIP Muhammadiyah Sinjai');
INSERT INTO `tbl_r_universitas` VALUES ('906', 'STIKES Patria Husada');
INSERT INTO `tbl_r_universitas` VALUES ('907', 'Akademi Keperawatan  Pamenang');
INSERT INTO `tbl_r_universitas` VALUES ('908', 'Universitas Ratu Samban');
INSERT INTO `tbl_r_universitas` VALUES ('909', 'Sekolah Tinggi Bahasa Asing Pertiwi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('910', 'Sekolah Tinggi Ilmu Pertanian Puangrimanggalatung');
INSERT INTO `tbl_r_universitas` VALUES ('911', 'STISIP Setia Budhi');
INSERT INTO `tbl_r_universitas` VALUES ('912', 'Akademi Kesenian Melayu Riau');
INSERT INTO `tbl_r_universitas` VALUES ('913', 'Politeknik LP3I Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('914', 'Akademi Pariwisata Muhammadiyah Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('915', 'Sekolah Tinggi Teknologi Sapta Taruna');
INSERT INTO `tbl_r_universitas` VALUES ('916', 'Sekolah Tinggi Ilmu Ekonomi Sabang');
INSERT INTO `tbl_r_universitas` VALUES ('917', 'STKIP  Puangrimaggalatung  Sengkang');
INSERT INTO `tbl_r_universitas` VALUES ('918', 'Universitas Muhammadiyah Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('919', 'Politeknik Mandiri Bina Prestasi');
INSERT INTO `tbl_r_universitas` VALUES ('920', 'Sekolah Tinggi Analis Bakti Asih');
INSERT INTO `tbl_r_universitas` VALUES ('921', 'Institut Bisnis Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('922', 'Universitas Islam Jember');
INSERT INTO `tbl_r_universitas` VALUES ('923', 'Sekolah Tinggi Ilmu Administrasi Setih Setio');
INSERT INTO `tbl_r_universitas` VALUES ('924', 'Universitas Kristen Indonesia Toraja');
INSERT INTO `tbl_r_universitas` VALUES ('925', 'Akademi Kebidanan Muhammadiyah Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('926', 'STIE Prasetiya Mulya');
INSERT INTO `tbl_r_universitas` VALUES ('927', 'Sekolah Tinggi Ilmu Manajemen Lpmi');
INSERT INTO `tbl_r_universitas` VALUES ('928', 'Universitas Kristen Immanuel');
INSERT INTO `tbl_r_universitas` VALUES ('929', 'Sekolah Tinggi Ilmu Kesehatan Yatsi');
INSERT INTO `tbl_r_universitas` VALUES ('930', 'Universitas Andi Djemma Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('931', 'Akademi Sekretari Dan Manajemen Don Bosco');
INSERT INTO `tbl_r_universitas` VALUES ('932', 'STMIK  Pringsewu');
INSERT INTO `tbl_r_universitas` VALUES ('933', 'Universitas Islam Balitar');
INSERT INTO `tbl_r_universitas` VALUES ('934', 'Institut Teknologi Minaesa');
INSERT INTO `tbl_r_universitas` VALUES ('935', 'Akademi Pekerjaan Sosial Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('936', 'AMIK BSI Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('937', 'Universitas Dehasen Bengkulu');
INSERT INTO `tbl_r_universitas` VALUES ('938', 'Sekolah Tinggi Bahasa Asing Sebelas April Sumedang');
INSERT INTO `tbl_r_universitas` VALUES ('939', 'STKIP PGRI Nganjuk');
INSERT INTO `tbl_r_universitas` VALUES ('940', 'Akademi Peternakan Brahma Putra');
INSERT INTO `tbl_r_universitas` VALUES ('941', 'Sekolah Tinggi Ilmu Kesehatan Ngudi Waluyo');
INSERT INTO `tbl_r_universitas` VALUES ('942', 'Akademi Pariwisata Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('943', 'Sekolah Tinggi Ilmu Ekonomi Fatahillah');
INSERT INTO `tbl_r_universitas` VALUES ('944', 'Sekolah Tinggi Ilmu Manajemen Pendidikan 45');
INSERT INTO `tbl_r_universitas` VALUES ('945', 'Sekolah Tinggi Ilmu Kesehatan Panrita Husada');
INSERT INTO `tbl_r_universitas` VALUES ('946', 'Universitas Mpu Tantular');
INSERT INTO `tbl_r_universitas` VALUES ('947', 'Sekolah Tinggi Ilmu Kesehatan Dehasen');
INSERT INTO `tbl_r_universitas` VALUES ('948', 'STKIP Bina Bangsa Getsempena');
INSERT INTO `tbl_r_universitas` VALUES ('949', 'Sekolah Tinggi Bahasa Asing Teknokrat');
INSERT INTO `tbl_r_universitas` VALUES ('950', 'STIKES Ngudia Husada Madura');
INSERT INTO `tbl_r_universitas` VALUES ('951', 'Akademi Perekam Medis & Informatika Kesehatan');
INSERT INTO `tbl_r_universitas` VALUES ('952', 'Sekolah Tinggi Ilmu Kesehatan Deli Husada');
INSERT INTO `tbl_r_universitas` VALUES ('953', 'Sekolah Tinggi Ilmu Ekonomi H Agus Salim');
INSERT INTO `tbl_r_universitas` VALUES ('954', 'Universitas Widya Gama Mahakam Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('955', 'Sekolah Tinggi Ilmu Administrasi Al Gazali Barru');
INSERT INTO `tbl_r_universitas` VALUES ('956', 'IKIP Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('957', 'Universitas  Muhammadiyah  Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('958', 'STISIP Muhammadiah Sinjai');
INSERT INTO `tbl_r_universitas` VALUES ('959', 'Universitas Kristen Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('960', 'Sekolah Tinggi Teknik Wiworotomo');
INSERT INTO `tbl_r_universitas` VALUES ('961', 'AMIK Sigma');
INSERT INTO `tbl_r_universitas` VALUES ('962', 'Universitas Muhammadiyah Luwuk Banggai');
INSERT INTO `tbl_r_universitas` VALUES ('963', 'Universitas Bung Karno');
INSERT INTO `tbl_r_universitas` VALUES ('964', 'AMIK Medan Business Polyteknik');
INSERT INTO `tbl_r_universitas` VALUES ('965', 'Sekolah Tinggi Ilmu Hukum Gunung Jati');
INSERT INTO `tbl_r_universitas` VALUES ('966', 'Sekolah Tinggi Ilmu Ekonomi Eben Haezer Manado');
INSERT INTO `tbl_r_universitas` VALUES ('967', 'Sekolah Tinggi Ilmu Kesehatan Rajawali');
INSERT INTO `tbl_r_universitas` VALUES ('968', 'STMIK Profesional Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('969', 'Akademi Manajemen Informatika Dan Komputer Garut');
INSERT INTO `tbl_r_universitas` VALUES ('970', 'Sekolah Tinggi Ilmu Ekonomi Kertanegara');
INSERT INTO `tbl_r_universitas` VALUES ('971', 'Akademi Kebidanan Mandiri Gresik');
INSERT INTO `tbl_r_universitas` VALUES ('972', 'STIMIK Pro Visi');
INSERT INTO `tbl_r_universitas` VALUES ('973', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('974', 'Universitas  Cokroaminoto  Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('975', 'Sekolah Tinggi Ilmu Ekonomi Banten');
INSERT INTO `tbl_r_universitas` VALUES ('976', 'Universitas  Suryadarma');
INSERT INTO `tbl_r_universitas` VALUES ('977', 'Sekolah Tinggi Teknologi Telematika Telkom');
INSERT INTO `tbl_r_universitas` VALUES ('978', 'Akademi Pariwisata Nasional Indonesia Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('979', 'Akademi Pertanian Hkti Banyumas');
INSERT INTO `tbl_r_universitas` VALUES ('980', 'Universitas  Baturaja');
INSERT INTO `tbl_r_universitas` VALUES ('981', 'STMIK El Rahma');
INSERT INTO `tbl_r_universitas` VALUES ('982', 'IKIP PGRI Jember');
INSERT INTO `tbl_r_universitas` VALUES ('983', 'Sekolah Tinggi Bahasa Asing Prayoga');
INSERT INTO `tbl_r_universitas` VALUES ('984', 'Akademi Keperawatan Surya Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('985', 'Akademi Refraksi Optisi Kartika Indera Persada');
INSERT INTO `tbl_r_universitas` VALUES ('986', 'Akademi Hiperkes Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('987', 'Politeknik Harapan Bersama');
INSERT INTO `tbl_r_universitas` VALUES ('988', 'Universitas Kristen Papua');
INSERT INTO `tbl_r_universitas` VALUES ('989', 'Sekolah Tinggi Ilmu Administrasi Trinitas');
INSERT INTO `tbl_r_universitas` VALUES ('990', 'Sekolah Tinggi Teknologi Wastukancana');
INSERT INTO `tbl_r_universitas` VALUES ('991', 'Sekolah Tinggi Ilmu Keperawatan Gunung Sari');
INSERT INTO `tbl_r_universitas` VALUES ('992', 'Sekolah Tinggi Ilmu Ekonomi Indocakti');
INSERT INTO `tbl_r_universitas` VALUES ('993', 'Akademi Keperawatan RSP TNI-AU Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('994', 'Sekolah Tinggi Ilmu Farmasi Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('995', 'STIKES Yarsi Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('996', 'STMIK Uyelindo Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('997', 'Akademi Keuangan Dan Bank Mulia Darma Pratama');
INSERT INTO `tbl_r_universitas` VALUES ('998', 'STIKOM Muhammadiyah  Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('999', 'STIKES Al Irsyad Al Islamiyyah Cilacap');
INSERT INTO `tbl_r_universitas` VALUES ('1000', 'Sekolah Tinggi Ilmu Ekonomi Perdagangan');
INSERT INTO `tbl_r_universitas` VALUES ('1001', 'Sekolah Tinggi Ilmu Kesehatan Hang Tuah');
INSERT INTO `tbl_r_universitas` VALUES ('1002', 'Sekolah Tinggi Teknologi Bontang');
INSERT INTO `tbl_r_universitas` VALUES ('1003', 'Universitas Pawyatan Daha');
INSERT INTO `tbl_r_universitas` VALUES ('1004', 'Akbid Gemilang Husada Kotabumi');
INSERT INTO `tbl_r_universitas` VALUES ('1005', 'STMIK Catur Insan Cendekia');
INSERT INTO `tbl_r_universitas` VALUES ('1006', 'AMIK BSI Karawang');
INSERT INTO `tbl_r_universitas` VALUES ('1007', 'Universitas Patria Artha');
INSERT INTO `tbl_r_universitas` VALUES ('1008', 'Sekolah Tinggi Ilmu Ekonomi Miftahul Huda Subang');
INSERT INTO `tbl_r_universitas` VALUES ('1009', 'Akademi Analis Farmasi Dan Makanan Sunan Giri');
INSERT INTO `tbl_r_universitas` VALUES ('1010', 'Sekolah Tinggi Ilmu Ekonomi Ganesha');
INSERT INTO `tbl_r_universitas` VALUES ('1011', 'Sekolah Tinggi Penerbangan Aviasi');
INSERT INTO `tbl_r_universitas` VALUES ('1012', 'STKIP Muhammadiyah  Bulukumba');
INSERT INTO `tbl_r_universitas` VALUES ('1013', 'Akademi Keperawatan Bahrul Ulum Jombang');
INSERT INTO `tbl_r_universitas` VALUES ('1014', 'STIKES Muhammadiyah Kudus');
INSERT INTO `tbl_r_universitas` VALUES ('1015', 'Akademi Fisioterapi Harapan Bangsa Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('1016', 'Politeknik Praktisi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1017', 'Sekolah Tinggi Ilmu Ekonomi Assholeh');
INSERT INTO `tbl_r_universitas` VALUES ('1018', 'Universitas Satria Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1019', 'Sekolah Tinggi Ilmu Ekonomi Pelita Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1020', 'Universitas Riau Kepulauan');
INSERT INTO `tbl_r_universitas` VALUES ('1021', 'Universitas Abdurachman Saleh');
INSERT INTO `tbl_r_universitas` VALUES ('1022', 'Universitas PGRI Banyuwangi');
INSERT INTO `tbl_r_universitas` VALUES ('1023', 'Universitas  Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('1024', 'Sekolah Tinggi Ilmu Kesehatan Siti Khadijah');
INSERT INTO `tbl_r_universitas` VALUES ('1025', 'Akademi Pariwisata Paramitha Bukittinggi');
INSERT INTO `tbl_r_universitas` VALUES ('1026', 'Sekolah Tinggi Ilmu Bahasa Dan Sastra Satya Widya');
INSERT INTO `tbl_r_universitas` VALUES ('1027', 'Sekolah Tinggi Sains Dan Teknologi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1028', 'Sekolah Tinggi Ilmu Administrasi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1029', 'Sekolah Tinggi Ilmu Kesehatan Medistra');
INSERT INTO `tbl_r_universitas` VALUES ('1030', 'Akademi Sekretari Dan Manajemen Desanta');
INSERT INTO `tbl_r_universitas` VALUES ('1031', 'Sekolah Tinggi Ilmu Administrasi Satya Negara');
INSERT INTO `tbl_r_universitas` VALUES ('1032', 'Akademi Kebidanan Ar-Rahmah Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1033', 'Sekolah Tinggi Pariwisata Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('1034', 'Politeknik Indonusa Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1035', 'Sekolah Tinggi Ilmu Ekonomi Gentiaras');
INSERT INTO `tbl_r_universitas` VALUES ('1036', 'Sekolah Tinggi Ilmu Ekonomi Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('1037', 'Politeknik Kesehatan BHakti Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('1038', 'Universitas Islam Lamongan');
INSERT INTO `tbl_r_universitas` VALUES ('1039', 'Sekolah Tinggi Ilmu Ekonomi Tenggarong');
INSERT INTO `tbl_r_universitas` VALUES ('1040', 'AMIK Jakarta Teknologi Cipta');
INSERT INTO `tbl_r_universitas` VALUES ('1041', 'Sekolah Tinggi Ilmu Ekonomi Jayakusuma');
INSERT INTO `tbl_r_universitas` VALUES ('1042', 'Sekolah Tinggi Ilmu Administrasi Sebelas April');
INSERT INTO `tbl_r_universitas` VALUES ('1043', 'Sekolah Tinggi Teknik Ibnu Sina');
INSERT INTO `tbl_r_universitas` VALUES ('1044', 'Sekolah Tinggi Ilmu Ekonomi YAPAN');
INSERT INTO `tbl_r_universitas` VALUES ('1045', 'STIKES Al-Insyirah Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('1046', 'STIKS Tamalanrea Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1047', 'Sekolah Tinggi Ilmu Ekonomi Dwimulya');
INSERT INTO `tbl_r_universitas` VALUES ('1048', 'Sekolah Tinggi Ilmu Ekonomi AAS');
INSERT INTO `tbl_r_universitas` VALUES ('1049', 'Politeknik  Banjarnegara');
INSERT INTO `tbl_r_universitas` VALUES ('1050', 'Sekolah Tinggi Ilmu Ekonomi Paripurna');
INSERT INTO `tbl_r_universitas` VALUES ('1051', 'Sekolah Tinggi Teknologi Nusantara Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('1052', 'STIKES Karsa Husada Garut');
INSERT INTO `tbl_r_universitas` VALUES ('1053', 'Universitas  Muhammadiyah  Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('1054', 'Sekolah Tinggi Ilmu Kesehatan Garut');
INSERT INTO `tbl_r_universitas` VALUES ('1055', 'AMIK BSI Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1056', 'Akademi Kesehatan Yayasan Sapta Bakti Bengkulu');
INSERT INTO `tbl_r_universitas` VALUES ('1057', 'STKIP YDB Lubuk Alung');
INSERT INTO `tbl_r_universitas` VALUES ('1058', 'Universitas 45 Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('1059', 'Sekolah Tinggi Bahasa Asing Bina Dinamika Cianjur');
INSERT INTO `tbl_r_universitas` VALUES ('1060', 'STKIP Sebelas April');
INSERT INTO `tbl_r_universitas` VALUES ('1061', 'STKIP PGRI Bandar Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('1062', 'Sekolah Tinggi Ilmu Administrasi Tabalong');
INSERT INTO `tbl_r_universitas` VALUES ('1063', 'Sekolah Tinggi Ilmu Kesehatan Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1064', 'Sekolah Tinggi Teknologi Fatahillah Cilegon');
INSERT INTO `tbl_r_universitas` VALUES ('1065', 'STMIK Jenderal Achmad Yani');
INSERT INTO `tbl_r_universitas` VALUES ('1066', 'STKIP PGRI Lumajang');
INSERT INTO `tbl_r_universitas` VALUES ('1067', 'Universitas Muara Bungo');
INSERT INTO `tbl_r_universitas` VALUES ('1068', 'STIKES  Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1069', 'STMIK AKBA');
INSERT INTO `tbl_r_universitas` VALUES ('1070', 'STMIK Nusa Mandiri Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('1071', 'STIKES Sari Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('1072', 'STKIP Veteran Sidrap');
INSERT INTO `tbl_r_universitas` VALUES ('1073', 'STIKES PKU Muhammadiyah Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1074', 'Universitas Bandung Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1075', 'Politeknik  Swadharma');
INSERT INTO `tbl_r_universitas` VALUES ('1076', 'Universitas Widya Kartika');
INSERT INTO `tbl_r_universitas` VALUES ('1077', 'STMIK  Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('1078', 'STIKES Amanah Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1079', 'Akademi Analis Kesehatan Manggala Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1080', 'STKIP Setiabudhi');
INSERT INTO `tbl_r_universitas` VALUES ('1081', 'STIE Professional Manajemen College Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1082', 'STMIK Insan Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('1083', 'Universitas Ichsan Gorontalo');
INSERT INTO `tbl_r_universitas` VALUES ('1084', 'Universitas Banten Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('1085', 'Sekolah Tinggi Ilmu Ekonomi Triguna');
INSERT INTO `tbl_r_universitas` VALUES ('1086', 'STMIK Adhi Guna');
INSERT INTO `tbl_r_universitas` VALUES ('1087', 'ASMI Citra Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1088', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Citra Bakti');
INSERT INTO `tbl_r_universitas` VALUES ('1089', 'Universitas Pembangunan Nasional Veteran Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1090', 'STKIP PGRI Sumenep');
INSERT INTO `tbl_r_universitas` VALUES ('1091', 'Institut Teknologi Del');
INSERT INTO `tbl_r_universitas` VALUES ('1092', 'Akademi Kebidanan Graha Ananda');
INSERT INTO `tbl_r_universitas` VALUES ('1093', 'Akademi Farmasi Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('1094', 'Universitas  Subang');
INSERT INTO `tbl_r_universitas` VALUES ('1095', 'STIKES Muhammadiyah Sidrap');
INSERT INTO `tbl_r_universitas` VALUES ('1096', 'STIKES Guna Bangsa Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1097', 'STMIK Rosma');
INSERT INTO `tbl_r_universitas` VALUES ('1098', 'Sekolah Tinggi Ilmu Ekonomi Widya Manggalia');
INSERT INTO `tbl_r_universitas` VALUES ('1099', 'Akademi Kebidanan YLPP Purwokerto');
INSERT INTO `tbl_r_universitas` VALUES ('1100', 'Sekolah Tinggi Ilmu Ekonomi Sailendra');
INSERT INTO `tbl_r_universitas` VALUES ('1101', 'Sekolah Tinggi Teknik Malang');
INSERT INTO `tbl_r_universitas` VALUES ('1102', 'Universitas Nusa Nipa');
INSERT INTO `tbl_r_universitas` VALUES ('1103', 'Universitas W R Supratman');
INSERT INTO `tbl_r_universitas` VALUES ('1104', 'Sekolah Tinggi Ilmu Maritim Ami');
INSERT INTO `tbl_r_universitas` VALUES ('1105', 'STMIK  Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('1106', 'Universitas  Wiralodra');
INSERT INTO `tbl_r_universitas` VALUES ('1107', 'Sekolah Tinggi Ilmu Ekonomi Kesumanegara');
INSERT INTO `tbl_r_universitas` VALUES ('1108', 'Universitas Teknologi Sulawesi Utara');
INSERT INTO `tbl_r_universitas` VALUES ('1109', 'Politeknik IT&B Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1110', 'Sekolah Tinggi Ilmu Kesehatan Bhakti Kencana');
INSERT INTO `tbl_r_universitas` VALUES ('1111', 'Universitas Islam Labuhan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('1112', 'Universitas Nahdlatul Wathan Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('1113', 'STKIP PGRI Lubuk Linggau');
INSERT INTO `tbl_r_universitas` VALUES ('1114', 'Politeknik Pajajaran Insan Cinta Bangsa Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1115', 'AMIK BSI Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1116', 'Sekolah Tinggi Manajemen Immi');
INSERT INTO `tbl_r_universitas` VALUES ('1117', 'Akademi Kebidanan Sari Mutiara');
INSERT INTO `tbl_r_universitas` VALUES ('1118', 'Akademi Keperawatan Kesdam I/Bukit Barisan Binjai');
INSERT INTO `tbl_r_universitas` VALUES ('1119', 'Akademi Manajemen Informatika Dan Komputer Itmi');
INSERT INTO `tbl_r_universitas` VALUES ('1120', 'Akademi Keperawatan Islamic Village');
INSERT INTO `tbl_r_universitas` VALUES ('1121', 'AMIK Harapan Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1122', 'AMIK Wahana Mandiri Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('1123', 'Akademi Manajemen Informatika & Komputer Multicom');
INSERT INTO `tbl_r_universitas` VALUES ('1124', 'Sekolah Tinggi Teknik Poliprofesi');
INSERT INTO `tbl_r_universitas` VALUES ('1125', 'Akademi Keperawatan Husada Karya Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('1126', 'AMIK Master Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('1127', 'Sekolah Tinggi Ilmu Ekonomi Maiji');
INSERT INTO `tbl_r_universitas` VALUES ('1128', 'Akademi Analis Kesehatan Malang');
INSERT INTO `tbl_r_universitas` VALUES ('1129', 'AMIK Lembah Dempo');
INSERT INTO `tbl_r_universitas` VALUES ('1130', 'Politeknik Perdana Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('1131', 'Akademi Manajemen Informatika Dan Komputer Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1132', 'Sekolah Tinggi Teologi HKBP');
INSERT INTO `tbl_r_universitas` VALUES ('1133', 'Akademi Kebidanan An-Nur Purwodadi');
INSERT INTO `tbl_r_universitas` VALUES ('1134', 'Akd Teknik Radiodiag. Dan Radioterapi Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1135', 'AMIK Purnama Niaga');
INSERT INTO `tbl_r_universitas` VALUES ('1136', 'Akademi Kebidanan Bogor Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1137', 'STKIP Weetebula');
INSERT INTO `tbl_r_universitas` VALUES ('1138', 'STMIK Pelita Nusantara Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1139', 'Akademi Kebidanan Hendersen');
INSERT INTO `tbl_r_universitas` VALUES ('1140', 'Akademi Keperawatan Indah');
INSERT INTO `tbl_r_universitas` VALUES ('1141', 'Akademi Keperawatan Kesdam I/Bukit Barisan Pematang Siantar');
INSERT INTO `tbl_r_universitas` VALUES ('1142', 'STMIK Dharma Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('1143', 'Akademi Kebidanan Patriot Bangsa Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1144', 'Akademi Kebidanan Budi Mulia Prabumulih');
INSERT INTO `tbl_r_universitas` VALUES ('1145', 'Akademi Pariwisata Jakarta International Hotel');
INSERT INTO `tbl_r_universitas` VALUES ('1146', 'Akademi Maritim Pembangunan Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1147', 'Akademi Sekretari Interstudi');
INSERT INTO `tbl_r_universitas` VALUES ('1148', 'Akademi Teknik Informatika Tunas Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1149', 'Akademi Kebidanan Mitra Persahabatan');
INSERT INTO `tbl_r_universitas` VALUES ('1150', 'Akademi Keperawatan Manggala Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1151', 'Akademi Keperawatan RS Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1152', 'Akademi Keperawatan  Fatmawati');
INSERT INTO `tbl_r_universitas` VALUES ('1153', 'Politeknik Karya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1154', 'Sekolah Tinggi Ilmu Ekonomi YP-Karya');
INSERT INTO `tbl_r_universitas` VALUES ('1155', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1156', 'Sekolah Tinggi Ilmu Komputer Poltek Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('1157', 'Sekolah Tinggi Ilmu Ekonomi Ppi');
INSERT INTO `tbl_r_universitas` VALUES ('1158', 'Sekolah Tinggi Ilmu Ekonomi BII Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('1159', 'STMIK  Mercusuar');
INSERT INTO `tbl_r_universitas` VALUES ('1160', 'STMIK PGRI Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('1161', 'STISIP Guna Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1162', 'AMIK Al-Ma soem');
INSERT INTO `tbl_r_universitas` VALUES ('1163', 'Akademi Keperawatan Buntet Pesantren');
INSERT INTO `tbl_r_universitas` VALUES ('1164', 'Akademi Kebidanan Citama Raya Depok');
INSERT INTO `tbl_r_universitas` VALUES ('1165', 'Akademi Kebidanan Bunda Auni Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('1166', 'Akademi Kebidanan Prima Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1167', 'Akademi Farmasi Muhammadiyah Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('1168', 'Akademi Keperawatan Bidara Mukti');
INSERT INTO `tbl_r_universitas` VALUES ('1169', 'Politeknik Gajah Tunggal');
INSERT INTO `tbl_r_universitas` VALUES ('1170', 'Politeknik Mitra Kusuma');
INSERT INTO `tbl_r_universitas` VALUES ('1171', 'Akademi Manajemen Administrasi Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1172', 'Akademi Teknik Radiodiagnostik dan Radioterapi (ATRO)');
INSERT INTO `tbl_r_universitas` VALUES ('1173', 'Akademi Kebidanan Ngudi Waluyo');
INSERT INTO `tbl_r_universitas` VALUES ('1174', 'Akademi Keperawatan Panti Kosala');
INSERT INTO `tbl_r_universitas` VALUES ('1175', 'Akademi Keperawatan Ngesti Waluyo Parakan');
INSERT INTO `tbl_r_universitas` VALUES ('1176', 'Akademi Keperawatan Karya Bhakti Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1177', 'Akademi Kebidanan Uniska');
INSERT INTO `tbl_r_universitas` VALUES ('1178', 'Akademi Farmasi Theresiana Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('1179', 'AKBID Wira Husada Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1180', 'Politeknik Trisila Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1181', 'Sekolah Tinggi Ilmu Ekonomi Kosgoro');
INSERT INTO `tbl_r_universitas` VALUES ('1182', 'Sekolah Tinggi Teknologi Stikma Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('1183', 'STIKES Yayasan RS. Dr. Soetomo');
INSERT INTO `tbl_r_universitas` VALUES ('1184', 'Akademi Keperawatan Kerta Cendekia Sidoarjo');
INSERT INTO `tbl_r_universitas` VALUES ('1185', 'Akbid Harapan Mulya Ponorogo');
INSERT INTO `tbl_r_universitas` VALUES ('1186', 'Akademi Kebidanan Wijaya Kusuma Malang');
INSERT INTO `tbl_r_universitas` VALUES ('1187', 'Akademi Farmasi Mitra Sehat Mandiri Sidoarjo');
INSERT INTO `tbl_r_universitas` VALUES ('1188', 'Akademi Kebidanan Dr Soebandi');
INSERT INTO `tbl_r_universitas` VALUES ('1189', 'Akademi Kebidanan Brawijaya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1190', 'Akademi Analis Kesehatan Delima Husada Gresik');
INSERT INTO `tbl_r_universitas` VALUES ('1191', 'STIKOM  Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1192', 'STKIP Qamarul Huda');
INSERT INTO `tbl_r_universitas` VALUES ('1193', 'Akademi Farmasi Saraswati Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('1194', 'Universitas Dumoga Bone Kotamubagu');
INSERT INTO `tbl_r_universitas` VALUES ('1195', 'STISIP Panca Bhakti Palu');
INSERT INTO `tbl_r_universitas` VALUES ('1196', 'Sekolah Tinggi Ilmu Kesehatan Tana Toraja');
INSERT INTO `tbl_r_universitas` VALUES ('1197', 'Sekolah Tinggi Ilmu Kesehatan Muhamadiyah Manado');
INSERT INTO `tbl_r_universitas` VALUES ('1198', 'Akademi Bahasa Asing Atmajaya Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1199', 'Akademi Keperawatan Muhammadiyah Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1200', 'Akademi Keperawatan Yapenas 21 Maros');
INSERT INTO `tbl_r_universitas` VALUES ('1201', 'Akademi Kebidanan Pelita Ibu Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('1202', 'Akademi Kebidanan Kamanre Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('1203', 'Akademi Kebidanan Madani Sinjai');
INSERT INTO `tbl_r_universitas` VALUES ('1204', 'AKTEK Radiodiagnostik & Radioterapi Muhammadiyah');
INSERT INTO `tbl_r_universitas` VALUES ('1205', 'Akademi Farmasi Sandi Karsa');
INSERT INTO `tbl_r_universitas` VALUES ('1206', 'Akademi Kebidanan Tahirah Al Baeti Bulukumba');
INSERT INTO `tbl_r_universitas` VALUES ('1207', 'Akademi Keperawatan Metuari Waya Manado');
INSERT INTO `tbl_r_universitas` VALUES ('1208', 'Akademi Farmasi Toraja');
INSERT INTO `tbl_r_universitas` VALUES ('1209', 'Sekolah Tinggi Ilmu Ekonomi Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('1210', 'Sekolah Tinggi Ilmu Hukum Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1211', 'Akademi Akuntansi Riau Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('1212', 'Akademi Kebidanan Budi Mulia Kotabaru');
INSERT INTO `tbl_r_universitas` VALUES ('1213', 'Sekolah Tinggi Ilmu Ekonomi Dahani Dahanai Buntok');
INSERT INTO `tbl_r_universitas` VALUES ('1214', 'Akademi Keuangan & Perbankan Grha Arta Katulistiwa');
INSERT INTO `tbl_r_universitas` VALUES ('1215', 'Akademi Keperawatan Yarsi Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('1216', 'Akademi Kebidanan Panca Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('1217', 'STKIP Hatta Sjahrir');
INSERT INTO `tbl_r_universitas` VALUES ('1218', 'STIKES Payung Negeri Aceh Darussalam');
INSERT INTO `tbl_r_universitas` VALUES ('1219', 'STIKES Medika Nurul Islam');
INSERT INTO `tbl_r_universitas` VALUES ('1220', 'STIKES Bumi Persada Lhokseumawe');
INSERT INTO `tbl_r_universitas` VALUES ('1221', 'STKIP Usman Safri Kutacane');
INSERT INTO `tbl_r_universitas` VALUES ('1222', 'Sekolah Tinggi Ilmu Hukum Bintuni');
INSERT INTO `tbl_r_universitas` VALUES ('1223', 'Akademi Kebidanan Assyifa Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('1224', 'Universitas 45 Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1225', 'Akademi Kebidanan Keris Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1226', 'Sekolah Tinggi Ilmu Ekonomi Atma Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('1227', 'Universitas Kristen Tentena');
INSERT INTO `tbl_r_universitas` VALUES ('1228', 'AMIK Cipta Darma');
INSERT INTO `tbl_r_universitas` VALUES ('1229', 'Akademi Bahasa Asing Internasional Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1230', 'STKIP Subang');
INSERT INTO `tbl_r_universitas` VALUES ('1231', 'Sekolah Tinggi Teknologi YBS Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('1232', 'Sekolah Tinggi Ilmu Ekonomi Wilwatikta');
INSERT INTO `tbl_r_universitas` VALUES ('1233', 'Akademi Bahasa Asing Nasional Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1234', 'STIMIK Bandung Bali');
INSERT INTO `tbl_r_universitas` VALUES ('1235', 'Universitas Darwan Ali');
INSERT INTO `tbl_r_universitas` VALUES ('1236', 'Akademi Kesehatan Gigi Ditkesad Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1237', 'STIKES Muhammadiyah  Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('1238', 'Akademi Keperawatan  Serulingmas');
INSERT INTO `tbl_r_universitas` VALUES ('1239', 'Politeknik Negeri Madiun');
INSERT INTO `tbl_r_universitas` VALUES ('1240', 'Akademi Perekam Medik Dan Infokes Imelda');
INSERT INTO `tbl_r_universitas` VALUES ('1241', 'Akademi Kebidanan Wiyata Mitra Husada Nganjuk');
INSERT INTO `tbl_r_universitas` VALUES ('1242', 'Politeknik Negeri Batam');
INSERT INTO `tbl_r_universitas` VALUES ('1243', 'Sekolah Tinggi Ilmu Ekonomi IBBI');
INSERT INTO `tbl_r_universitas` VALUES ('1244', 'Sekolah Tinggi Ilmu Hukum Labuhan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('1245', 'Universitas PGRI Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('1246', 'STMIK Tunas Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1247', 'STKIP Muhammadiyah Kotabumi');
INSERT INTO `tbl_r_universitas` VALUES ('1248', 'STMIK Musi Rawas');
INSERT INTO `tbl_r_universitas` VALUES ('1249', 'Akademi Kebidanan Aisyiyah Serang');
INSERT INTO `tbl_r_universitas` VALUES ('1250', 'Sekolah Tinggi Ilmu Komunikasi Mahakam');
INSERT INTO `tbl_r_universitas` VALUES ('1251', 'STIE Manajemen Bisnis Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1252', 'Akademi Kebidanan Muhammadiyah Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('1253', 'Universitas Pramita Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1254', 'IKIP PGRI Bojonegoro');
INSERT INTO `tbl_r_universitas` VALUES ('1255', 'STMIK Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1256', 'Akademi Keperawatan Kesdam I/Bukit Barisan Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1257', 'STMIK Bani Saleh');
INSERT INTO `tbl_r_universitas` VALUES ('1258', 'Akademi Kebidanan Dharma Husada Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('1259', 'Universitas Bhayangkara Jakarta Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1260', 'Sekolah Tinggi Ilmu Ekonomi Nusa Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1261', 'Universitas Kristen Indonesia Tomohon');
INSERT INTO `tbl_r_universitas` VALUES ('1262', 'Akademi Teknologi AUB');
INSERT INTO `tbl_r_universitas` VALUES ('1263', 'Akademi Analis Kesehatan Pekalongan');
INSERT INTO `tbl_r_universitas` VALUES ('1264', 'Akademi Keperawatan Kamanre');
INSERT INTO `tbl_r_universitas` VALUES ('1265', 'Akademi Keperawatan Prima Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('1266', 'AKPER Rumkit Tk.III Dr. JA.A. Latumentten Kesdam XVI');
INSERT INTO `tbl_r_universitas` VALUES ('1267', 'Universitas Respati Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1268', 'Akademi Keperawatan Berkala Widya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1269', 'Akademi Farmasi Imam Bonjol');
INSERT INTO `tbl_r_universitas` VALUES ('1270', 'Akademi Keperawatan YKY Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1271', 'Universitas Kutai Kartanegara Tenggarong');
INSERT INTO `tbl_r_universitas` VALUES ('1272', 'STFT Gki Izaak Samuel Kijne Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('1273', 'Akademi Kesehatan Rajekwesi Bojonegoro');
INSERT INTO `tbl_r_universitas` VALUES ('1274', 'STKIP Kie Raha');
INSERT INTO `tbl_r_universitas` VALUES ('1275', 'Sekolah Tinggi Ilmu Komputer Yos Sudarso');
INSERT INTO `tbl_r_universitas` VALUES ('1276', 'Akademi Kebidanan Dharma Praja Bondowoso');
INSERT INTO `tbl_r_universitas` VALUES ('1277', 'STKIP Muhammadiyah Barru');
INSERT INTO `tbl_r_universitas` VALUES ('1278', 'STKIP Nurul Huda di Sukaraja');
INSERT INTO `tbl_r_universitas` VALUES ('1279', 'Sekolah Tinggi Teknologi Muhammadiyah Cileungsi');
INSERT INTO `tbl_r_universitas` VALUES ('1280', 'STIKES Hafshawaty Pesantren Zainul Hasan');
INSERT INTO `tbl_r_universitas` VALUES ('1281', 'Sekolah Tinggi Ilmu Kesehatan Alma Ata Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1282', 'Sekolah Tinggi Ilmu Kesehatan Pertamedika');
INSERT INTO `tbl_r_universitas` VALUES ('1283', 'Akademi Kebidanan Al-Fathonah');
INSERT INTO `tbl_r_universitas` VALUES ('1284', 'Akademi Keperawatan Alkautsar Temanggung');
INSERT INTO `tbl_r_universitas` VALUES ('1285', 'STIKES Tanawali Takalar');
INSERT INTO `tbl_r_universitas` VALUES ('1286', 'STMIK Kaputama');
INSERT INTO `tbl_r_universitas` VALUES ('1287', 'Akademi Keperawatan Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('1288', 'Universitas Musi Rawas');
INSERT INTO `tbl_r_universitas` VALUES ('1289', 'Universitas  Gorontalo');
INSERT INTO `tbl_r_universitas` VALUES ('1290', 'Sekolah Tinggi Ilmu Kesehatan Cahaya Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1291', 'STIKES Prima Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1292', 'Akademi Pariwisata Buana Wisata Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1293', 'Akademi Keperawatan Yaspen Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1294', 'STIKES Marendeng Majene');
INSERT INTO `tbl_r_universitas` VALUES ('1295', 'Universitas Panca Marga');
INSERT INTO `tbl_r_universitas` VALUES ('1296', 'STIE Biitm Kuta Badung');
INSERT INTO `tbl_r_universitas` VALUES ('1297', 'Akademi Keperawatan  Reformasi');
INSERT INTO `tbl_r_universitas` VALUES ('1298', 'Akademi Keperawatan Dirgahayu Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('1299', 'STIKES Satria Bhakti Nganjuk');
INSERT INTO `tbl_r_universitas` VALUES ('1300', 'Akademi Manajemen Informatika Dan Komputer Serang');
INSERT INTO `tbl_r_universitas` VALUES ('1301', 'Akademi Kebidanan Sentra Bina Yudistira Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('1302', 'Akademi Kebidanan Nusantara Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('1303', 'Akademi Farmasi YPPM Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('1304', 'STKIP Abdi Wacana Wamena');
INSERT INTO `tbl_r_universitas` VALUES ('1305', 'Akademi Kebidanan Hang Jebat');
INSERT INTO `tbl_r_universitas` VALUES ('1306', 'Sekolah Tinggi Ilmu Ekonomi Pandu Madania');
INSERT INTO `tbl_r_universitas` VALUES ('1307', 'STIKES Muhammadiyah Klaten');
INSERT INTO `tbl_r_universitas` VALUES ('1308', 'STKIP Pahlawan Tuanku Tambusai');
INSERT INTO `tbl_r_universitas` VALUES ('1309', 'Politeknik Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('1310', 'STMIK Nusa Mandiri Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1311', 'Universitas Darussalam Ambon');
INSERT INTO `tbl_r_universitas` VALUES ('1312', 'AMIK Mapan Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('1313', 'Sekolah Tinggi Ilmu Komputer Pelita Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1314', 'Universitas  Madura');
INSERT INTO `tbl_r_universitas` VALUES ('1315', 'Sekolah Tinggi Ilmu Administrasi Yapann');
INSERT INTO `tbl_r_universitas` VALUES ('1316', 'Sekolah Tinggi Ilmu Ekonomi Nasional Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('1317', 'Universitas Victory Sorong');
INSERT INTO `tbl_r_universitas` VALUES ('1318', 'Sekolah Tinggi Teknologi Nusa Putra');
INSERT INTO `tbl_r_universitas` VALUES ('1319', 'STMIK Mitra Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('1320', 'Akademi Kebidanan Agung Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1321', 'Universitas Pelita Harapan Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1322', 'Politeknik Akamigas Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('1323', 'Akademi Kebidanan Medika Wiyata Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('1324', 'STIKIP Catur Sakti');
INSERT INTO `tbl_r_universitas` VALUES ('1325', 'Akademi Manajemen Informatika Dan Komputer Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('1326', 'Sekolah Tinggi Ilmu Ekonomi Kasih Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1327', 'Institut Bisnis dan Informatika (IBI) Kosgoro 1957');
INSERT INTO `tbl_r_universitas` VALUES ('1328', 'Akademi Farmasi Yarsi Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('1329', 'Akademi Keperawatan RSPAD Gatot Subroto');
INSERT INTO `tbl_r_universitas` VALUES ('1330', 'STIKES Bataraguru Soroaka');
INSERT INTO `tbl_r_universitas` VALUES ('1331', 'STIKES Ranah Minang');
INSERT INTO `tbl_r_universitas` VALUES ('1332', 'Akademi Kebidanan Bhakti Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1333', 'STIMIK Jayabaya Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1334', 'Sekolah Tinggi Teknologi Mandala');
INSERT INTO `tbl_r_universitas` VALUES ('1335', 'STISIPOL Raja Haji');
INSERT INTO `tbl_r_universitas` VALUES ('1336', 'Universitas Al Muslim');
INSERT INTO `tbl_r_universitas` VALUES ('1337', 'Akademi Manajemen Informatika Dan Komputer Mdp');
INSERT INTO `tbl_r_universitas` VALUES ('1338', 'Akademi Keperawatan Bethesda Tomohon');
INSERT INTO `tbl_r_universitas` VALUES ('1339', 'Akademi Keperawatan Setih Setio');
INSERT INTO `tbl_r_universitas` VALUES ('1340', 'AMIK Panca Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('1341', 'Sekolah Tinggi Ilmu Kesehatan Faletehan');
INSERT INTO `tbl_r_universitas` VALUES ('1342', 'Politeknik Negeri Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('1343', 'STIKES  Muhammadiyah  Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('1344', 'Sekolah Tinggi Ilmu Ekonomi Rahmaniyah');
INSERT INTO `tbl_r_universitas` VALUES ('1345', 'STKIP Muhammadiyah Sampit');
INSERT INTO `tbl_r_universitas` VALUES ('1346', 'STKIP Al Islam Tunas Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1347', 'Sekolah Tinggi Teknologi Informatika Sony Sugema');
INSERT INTO `tbl_r_universitas` VALUES ('1348', 'Akademi Keperawatan Batari Toja');
INSERT INTO `tbl_r_universitas` VALUES ('1349', 'STMIK Bina Patria');
INSERT INTO `tbl_r_universitas` VALUES ('1350', 'STMIK Logika');
INSERT INTO `tbl_r_universitas` VALUES ('1351', 'Sekolah Tinggi Ilmu Ekonomi Sultan Agung');
INSERT INTO `tbl_r_universitas` VALUES ('1352', 'Akademi Kebidanan Yayasan Kesehatan Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('1353', 'Universitas Cut Nyak Dhien');
INSERT INTO `tbl_r_universitas` VALUES ('1354', 'Universitas Wanita Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('1355', 'Universitas  Cokroaminoto');
INSERT INTO `tbl_r_universitas` VALUES ('1356', 'Politeknik Informatika Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('1357', 'Sekolah Tinggi Ilmu Kesehatan Alifah Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1358', 'Universitas  Pamulang');
INSERT INTO `tbl_r_universitas` VALUES ('1359', 'Sekolah Tinggi Ilmu Ekonomi Anindyaguna');
INSERT INTO `tbl_r_universitas` VALUES ('1360', 'Akademi Kebidanan Sukawati Lawang');
INSERT INTO `tbl_r_universitas` VALUES ('1361', 'Sekolah Tinggi Ilmu Ekonomi Graha Kirana');
INSERT INTO `tbl_r_universitas` VALUES ('1362', 'Sekolah Tinggi Ilmu Ekonomi Dr Kh Ez Mutaqien');
INSERT INTO `tbl_r_universitas` VALUES ('1363', 'Akademi Pariwisata Paramitha Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1364', 'STKIP Persatuan Islam');
INSERT INTO `tbl_r_universitas` VALUES ('1365', 'STIKES Bina Permata Medika');
INSERT INTO `tbl_r_universitas` VALUES ('1366', 'Akademi Keperawatan Muhammadiyah Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('1367', 'Akademi Kebidanan Suka Wangi Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('1368', 'AMIK Harapan Bangsa Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1369', 'Akademi Kebidanan Giri Satria Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1370', 'Akademi Kebidanan Muhammadiyah Madiun');
INSERT INTO `tbl_r_universitas` VALUES ('1371', 'Akademi Keperawatan Gowa Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1372', 'Akademi Kebidanan Yapma Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1373', 'Akademi Kebidanan Aisyah Kabupaten Pangkep');
INSERT INTO `tbl_r_universitas` VALUES ('1374', 'Akademi Farmasi Dwi Frama');
INSERT INTO `tbl_r_universitas` VALUES ('1375', 'Akademi Kebidanan Mitra Husada Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1376', 'Akademi Kebidanan Pasaman Barat');
INSERT INTO `tbl_r_universitas` VALUES ('1377', 'Akademi Bahasa Asing Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1378', 'Akademi Kebidanan Permata Husada Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('1379', 'Sekolah Tinggi Ilmu Ekonomi Nusantara Sangatta');
INSERT INTO `tbl_r_universitas` VALUES ('1380', 'Universitas Sahid Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1381', 'Sekolah Tinggi Manajemen Asuransi Trisakti');
INSERT INTO `tbl_r_universitas` VALUES ('1382', 'STMIK Duta Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1383', 'Sekolah Tinggi Ilmu Ekonomi Mah-eisa');
INSERT INTO `tbl_r_universitas` VALUES ('1384', 'Akademi Akuntansi Borobudur');
INSERT INTO `tbl_r_universitas` VALUES ('1385', 'Sekolah Tinggi Teknologi Payakumbuh');
INSERT INTO `tbl_r_universitas` VALUES ('1386', 'Akademi Kebidanan Bina Sejahtera');
INSERT INTO `tbl_r_universitas` VALUES ('1387', 'STIA Asuh Mitra Solo');
INSERT INTO `tbl_r_universitas` VALUES ('1388', 'Politeknik Al-Islam Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1389', 'Akademi Kebidanan Graha Mandiri Cilacap');
INSERT INTO `tbl_r_universitas` VALUES ('1390', 'Sekolah Tinggi Ilmu Ekonomi Kridatama Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1391', 'Akademi Kebidanan Griya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1392', 'Sekolah Tinggi Ilmu Ekonomi Makassar Maju');
INSERT INTO `tbl_r_universitas` VALUES ('1393', 'Akademi Kebidanan Nusantara 2000');
INSERT INTO `tbl_r_universitas` VALUES ('1394', 'AMIK Ibrahimy');
INSERT INTO `tbl_r_universitas` VALUES ('1395', 'Sekolah Tinggi Teknologi Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('1396', 'Akademi Kebidanan Sinar Kasih Toraja');
INSERT INTO `tbl_r_universitas` VALUES ('1397', 'STIKES Insan Cendekia Medika Jombang');
INSERT INTO `tbl_r_universitas` VALUES ('1398', 'Sekolah Tinggi Ilmu Ekonomi YPPI');
INSERT INTO `tbl_r_universitas` VALUES ('1399', 'Akademi Keperawatan POLRI');
INSERT INTO `tbl_r_universitas` VALUES ('1400', 'Sekolah Tinggi Ilmu Ekonomi IEU');
INSERT INTO `tbl_r_universitas` VALUES ('1401', 'Sekolah Tinggi Pertanian Haji Agus Salim');
INSERT INTO `tbl_r_universitas` VALUES ('1402', 'Akademi Keperawatan Samawa');
INSERT INTO `tbl_r_universitas` VALUES ('1403', 'Sekolah Tinggi Ilmu Manajemen Prima Graha');
INSERT INTO `tbl_r_universitas` VALUES ('1404', 'Akademi Kebidanan Karsa Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('1405', 'Universitas  Cordova');
INSERT INTO `tbl_r_universitas` VALUES ('1406', 'STKIP PGRI Situbondo');
INSERT INTO `tbl_r_universitas` VALUES ('1407', 'STIKES Bhakti Pertiwi Luwu Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1408', 'STKIP Muhammadiyah Enrekang');
INSERT INTO `tbl_r_universitas` VALUES ('1409', 'Sekolah Tinggi Kesehatan Bina Cipta Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1410', 'STMIK Triguna Utama');
INSERT INTO `tbl_r_universitas` VALUES ('1411', 'Sekolah Tinggi Ilmu Ekonomi Bima');
INSERT INTO `tbl_r_universitas` VALUES ('1412', 'STIKES Darul Azhar Batulicin');
INSERT INTO `tbl_r_universitas` VALUES ('1413', 'Akademi Kebidanan Prima Sengkang');
INSERT INTO `tbl_r_universitas` VALUES ('1414', 'Sekolah Tinggi Ilmu Ekonomi Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('1415', 'STIKES IST Buton');
INSERT INTO `tbl_r_universitas` VALUES ('1416', 'Politeknik  Malinau');
INSERT INTO `tbl_r_universitas` VALUES ('1417', 'Akademi Keperawatan Saifudin Zuhri');
INSERT INTO `tbl_r_universitas` VALUES ('1418', 'STIKES Muhammadiyah Ciamis');
INSERT INTO `tbl_r_universitas` VALUES ('1419', 'STIKES Insan Unggul Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1420', 'Universitas  Muhammadiyah  Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('1421', 'Sekolah Tinggi Teknik Ilmu Komputer Insan Unggul');
INSERT INTO `tbl_r_universitas` VALUES ('1422', 'Akademi Manajemen Administrasi Dharmala');
INSERT INTO `tbl_r_universitas` VALUES ('1423', 'Akademi Kebidanan PGRI Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('1424', 'Akademi Keperawatan Bina Insan Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1425', 'Akademi Pariwisata Taman Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('1426', 'STIA Dan Manajemen Kepelabuhan Barunawati');
INSERT INTO `tbl_r_universitas` VALUES ('1427', 'STKIP Yapis Dompu');
INSERT INTO `tbl_r_universitas` VALUES ('1428', 'Sekolah Tinggi Perkebunan Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('1429', 'STISIP 17-8-1945 Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1430', 'Sekolah Tinggi Ilmu Kesehatan Baiturrahim');
INSERT INTO `tbl_r_universitas` VALUES ('1431', 'Politeknik Triguna Tasikmalaya');
INSERT INTO `tbl_r_universitas` VALUES ('1432', 'Institut Seni Budaya Indonesia Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1433', 'Sekolah Tinggi Bahasa Asing Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('1434', 'Akademi Manajemen Informatika Dan Komputer Dumai');
INSERT INTO `tbl_r_universitas` VALUES ('1435', 'STIKES Muhammadiyah  Pringsewu');
INSERT INTO `tbl_r_universitas` VALUES ('1436', 'Akademi Farmasi Medika Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1437', 'Universitas Indo Global Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('1438', 'Politeknik Kent');
INSERT INTO `tbl_r_universitas` VALUES ('1439', 'Sekolah Tinggi Ilmu Ekonomi Cendekia Karya Utama');
INSERT INTO `tbl_r_universitas` VALUES ('1440', 'Akademi Kesehatan Gigi Karya Adi Husada Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('1441', 'Akademi Kebidanan Haji Amirullah');
INSERT INTO `tbl_r_universitas` VALUES ('1442', 'STISIP Bina Putera Banjar');
INSERT INTO `tbl_r_universitas` VALUES ('1443', 'Akademi Keperawatan Sandi Karsa');
INSERT INTO `tbl_r_universitas` VALUES ('1444', 'Sekolah Tinggi Ilmu Ekonomi PGRI Dewantara');
INSERT INTO `tbl_r_universitas` VALUES ('1445', 'STMIK Borneo Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('1446', 'Sekolah Tinggi Ilmu Ekonomi Satria');
INSERT INTO `tbl_r_universitas` VALUES ('1447', 'Sekolah Tinggi Informatika Komputer Artha Buana');
INSERT INTO `tbl_r_universitas` VALUES ('1448', 'Sekolah Tinggi Ilmu Ekonomi Tribuana Tambun');
INSERT INTO `tbl_r_universitas` VALUES ('1449', 'Sekolah Tinggi Ilmu Kesehatan Wira Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1450', 'Universitas Dian Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1451', 'AMIK Parbina Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1452', 'STIEB Perdana Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('1453', 'Akademi Keperawatan Justitia');
INSERT INTO `tbl_r_universitas` VALUES ('1454', 'STMIK PPKIA Tarakanita Rahmawati Tarakan');
INSERT INTO `tbl_r_universitas` VALUES ('1455', 'Sekolah Tinggi Ilmu Ekonomi Sebelas April');
INSERT INTO `tbl_r_universitas` VALUES ('1456', 'Sekolah Tinggi Ilmu Kesehatan Sumatera Utara');
INSERT INTO `tbl_r_universitas` VALUES ('1457', 'Akademi Analis Farmasi & Makanan Putera Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1458', 'Universitas Tri Tunggal');
INSERT INTO `tbl_r_universitas` VALUES ('1459', 'Sekolah Tinggi Ilmu Ekonomi Stan Im');
INSERT INTO `tbl_r_universitas` VALUES ('1460', 'Universitas Mohammad Husni Thamrin Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1461', 'Sekolah Tinggi Ilmu Ekonomi Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1462', 'Akademi Keperawatan Pelni');
INSERT INTO `tbl_r_universitas` VALUES ('1463', 'STKIP PGRI Trenggalek');
INSERT INTO `tbl_r_universitas` VALUES ('1464', 'AMIK BSI Purwokerto');
INSERT INTO `tbl_r_universitas` VALUES ('1465', 'Universitas Mathla ul Anwar');
INSERT INTO `tbl_r_universitas` VALUES ('1466', 'Akademi Keuangan Dan Perbankan Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1467', 'Institut Sains Dan Teknologi Td Pardede');
INSERT INTO `tbl_r_universitas` VALUES ('1468', 'STIMED Nusa Palapa');
INSERT INTO `tbl_r_universitas` VALUES ('1469', 'Sekolah Tinggi Ilmu Administrasi Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('1470', 'Akademi Kebidanan Agatha');
INSERT INTO `tbl_r_universitas` VALUES ('1471', 'Universitas Maritim Raja Ali Haji (UMRAH)');
INSERT INTO `tbl_r_universitas` VALUES ('1472', 'Akademi Pariwisata Dharma Nusantara Sakti');
INSERT INTO `tbl_r_universitas` VALUES ('1473', 'STIKES Bina Usada Bali');
INSERT INTO `tbl_r_universitas` VALUES ('1474', 'Akademi Kebidanan Delima Persada Gresik');
INSERT INTO `tbl_r_universitas` VALUES ('1475', 'STMIK Cilegon');
INSERT INTO `tbl_r_universitas` VALUES ('1476', 'STKIP Santu Paulus');
INSERT INTO `tbl_r_universitas` VALUES ('1477', 'Politeknik Piksi Input Serang');
INSERT INTO `tbl_r_universitas` VALUES ('1478', 'Sekolah Tinggi Ilmu Ekonomi Tamansiswa');
INSERT INTO `tbl_r_universitas` VALUES ('1479', 'AMIK Pakarti Luhur');
INSERT INTO `tbl_r_universitas` VALUES ('1480', 'Akademi Keperawatan Sehat Binjai');
INSERT INTO `tbl_r_universitas` VALUES ('1481', 'Akademi Pariwisata Indraprasta');
INSERT INTO `tbl_r_universitas` VALUES ('1482', 'Sekolah Tinggi Ilmu Ekonomi Widya Darma');
INSERT INTO `tbl_r_universitas` VALUES ('1483', 'STIKES Hutama Abdi Husada Tulungagung');
INSERT INTO `tbl_r_universitas` VALUES ('1484', 'Akademi Pariwisata Mandala Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('1485', 'STMIK Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1486', 'Sekolah Tinggi Bahasa Asing IEC Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('1487', 'Akademi Keperawatan Bhakti Husada Cikarang');
INSERT INTO `tbl_r_universitas` VALUES ('1488', 'STKIP  Arrahmaniyah');
INSERT INTO `tbl_r_universitas` VALUES ('1489', 'STKIP Muhammadiyah Bangka Belitung');
INSERT INTO `tbl_r_universitas` VALUES ('1490', 'Sekolah Tinggi Ilmu Kesehatan Widya Nusantara Palu');
INSERT INTO `tbl_r_universitas` VALUES ('1491', 'STIKES Tengku Maharatu');
INSERT INTO `tbl_r_universitas` VALUES ('1492', 'Akademi Keperawatan Adi Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1493', 'Sekolah Tinggi Teknik Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('1494', 'STIKES Hang Tuah Tanjung Pinang');
INSERT INTO `tbl_r_universitas` VALUES ('1495', 'Sekolah Tinggi Ilmu Kesehatan Flora');
INSERT INTO `tbl_r_universitas` VALUES ('1496', 'Universitas Kapuas Sintang');
INSERT INTO `tbl_r_universitas` VALUES ('1497', 'AMIK Polibisnis Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1498', 'Akademi Kebidanan Takasima Kabanjahe');
INSERT INTO `tbl_r_universitas` VALUES ('1499', 'Akademi Keperawatan Kesdam Iskandar Muda Lhokseumawe');
INSERT INTO `tbl_r_universitas` VALUES ('1500', 'STMIK Kristen Neumann Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1501', 'Sekolah Tinggi Teknik Qomaruddin');
INSERT INTO `tbl_r_universitas` VALUES ('1502', 'Universitas Dhyana Pura');
INSERT INTO `tbl_r_universitas` VALUES ('1503', 'Universitas Nahdlatul Ulama Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1504', 'Sekolah Tinggi Ilmu Kesehatan Nurul Jadid');
INSERT INTO `tbl_r_universitas` VALUES ('1505', 'STMIK Lombok');
INSERT INTO `tbl_r_universitas` VALUES ('1506', 'STKIP PGRI Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('1507', 'Akademi Pariwisata Bunda Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1508', 'STMIK  Swadharma');
INSERT INTO `tbl_r_universitas` VALUES ('1509', 'Sekolah Tinggi Ilmu Kesehatan Medika Cikarang');
INSERT INTO `tbl_r_universitas` VALUES ('1510', 'AMIK Al-Muslim Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('1511', 'STIKES Kharisma Karawang');
INSERT INTO `tbl_r_universitas` VALUES ('1512', 'Akademi Pariwisata Medan Hotel School');
INSERT INTO `tbl_r_universitas` VALUES ('1513', 'Politeknik Indotec Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('1514', 'AMIK Dian Cipta Cendikia');
INSERT INTO `tbl_r_universitas` VALUES ('1515', 'Universitas Pembinaan Masyarakat Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1516', 'Akademi Manajemen Bumi Sebalo Bengkayang');
INSERT INTO `tbl_r_universitas` VALUES ('1517', 'STIKES  Dharmasraya');
INSERT INTO `tbl_r_universitas` VALUES ('1518', 'STIKES Widya Husada Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1519', 'STMIK Handayani Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1520', 'Sekolah Tinggi Teknologi Banten');
INSERT INTO `tbl_r_universitas` VALUES ('1521', 'Akademi Audiologi Indonesia Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1522', 'Sekolah Tinggi Ilmu Keperawatan PPNI Jawa Barat');
INSERT INTO `tbl_r_universitas` VALUES ('1523', 'STIE ISM');
INSERT INTO `tbl_r_universitas` VALUES ('1524', 'Sekolah Tinggi Ilmu Bahasa (STIBA) Hita Widya Singaraja');
INSERT INTO `tbl_r_universitas` VALUES ('1525', 'AMIK Luwuk Banggai');
INSERT INTO `tbl_r_universitas` VALUES ('1526', 'STKIP Panca Sakti Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('1527', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Cilacap');
INSERT INTO `tbl_r_universitas` VALUES ('1528', 'Universitas Sunan Bonang');
INSERT INTO `tbl_r_universitas` VALUES ('1529', 'IKIP PGRI Kaltim');
INSERT INTO `tbl_r_universitas` VALUES ('1530', 'STKIP YPM Bangko');
INSERT INTO `tbl_r_universitas` VALUES ('1531', 'Akademi Kebidanan Graha Husada Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('1532', 'STISIP  Pancasakti');
INSERT INTO `tbl_r_universitas` VALUES ('1533', 'Universitas Putera Batam');
INSERT INTO `tbl_r_universitas` VALUES ('1534', 'Akademi  Keperawatan  Baiturrahmah');
INSERT INTO `tbl_r_universitas` VALUES ('1535', 'Universitas Serang Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1536', 'Sekolah Tinggi Ilmu Keperawatan Famika');
INSERT INTO `tbl_r_universitas` VALUES ('1537', 'Universitas Tompotika Luwuk Banggai');
INSERT INTO `tbl_r_universitas` VALUES ('1538', 'AMIK Bumi Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1539', 'Akademi Kelautan Banyuwangi');
INSERT INTO `tbl_r_universitas` VALUES ('1540', 'STMIK Bina Sarana Global');
INSERT INTO `tbl_r_universitas` VALUES ('1541', 'Universitas Mochammad Sroedji');
INSERT INTO `tbl_r_universitas` VALUES ('1542', 'Akademi Manajemen Informatika & Komputer Royal');
INSERT INTO `tbl_r_universitas` VALUES ('1543', 'Akademi Kebidanan Al-Sua Ibah Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('1544', 'Universitas  Boyolali');
INSERT INTO `tbl_r_universitas` VALUES ('1545', 'AMIK Datuk Parpatiah Nan Sabatang');
INSERT INTO `tbl_r_universitas` VALUES ('1546', 'STKIP PGRI Pasuruan');
INSERT INTO `tbl_r_universitas` VALUES ('1547', 'STMIK Dipanegara Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1548', 'Sekolah Tinggi Ilmu Manajemen Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('1549', 'Politeknik Geologi Dan Pertambangan Agp');
INSERT INTO `tbl_r_universitas` VALUES ('1550', 'Universitas Gunung Kidul');
INSERT INTO `tbl_r_universitas` VALUES ('1551', 'Akademi Kebidanan Hafshawaty Zainul Hasan Genggong');
INSERT INTO `tbl_r_universitas` VALUES ('1552', 'Sekolah Tinggi Ilmu Kesehatan Bethesda Yakkum');
INSERT INTO `tbl_r_universitas` VALUES ('1553', 'STIKES Dharma Landbouw');
INSERT INTO `tbl_r_universitas` VALUES ('1554', 'STMIK Antar Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1555', 'AMIK AKMI');
INSERT INTO `tbl_r_universitas` VALUES ('1556', 'Politeknik  Pratama');
INSERT INTO `tbl_r_universitas` VALUES ('1557', 'STIKES Nusantara Lasinrang');
INSERT INTO `tbl_r_universitas` VALUES ('1558', 'Sekolah Tinggi Teknologi Immanuel');
INSERT INTO `tbl_r_universitas` VALUES ('1559', 'Sekolah Tinggi Ilmu Administrasi Panglima Sudirman');
INSERT INTO `tbl_r_universitas` VALUES ('1560', 'Akademi Keperawatan Toraya');
INSERT INTO `tbl_r_universitas` VALUES ('1561', 'STIKES Karya Husada Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('1562', 'Sekolah Tinggi Ilmu Ekonomi Bisnis Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1563', 'Sekolah Tinggi Ilmu Ekonomi Gema Widya Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1564', 'Universitas  Majalengka');
INSERT INTO `tbl_r_universitas` VALUES ('1565', 'Akademi Keperawatan Giri Satria Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1566', 'Akademi Keperawatan Abdi Florensia');
INSERT INTO `tbl_r_universitas` VALUES ('1567', 'STIE  Unisadhuguna');
INSERT INTO `tbl_r_universitas` VALUES ('1568', 'Akademi Keperawatan Keris Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1569', 'STIKES Widya Dharma Husada Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('1570', 'Akademi Farmasi Ranah Minang');
INSERT INTO `tbl_r_universitas` VALUES ('1571', 'Sekolah Tinggi Ilmu Hukum Soelthan M Tsjafioeddin');
INSERT INTO `tbl_r_universitas` VALUES ('1572', 'Sekolah Tinggi Ilmu Ekonomi Mulia Singkawang');
INSERT INTO `tbl_r_universitas` VALUES ('1573', 'Akademi Keperawatan Rumah Sakit Tk. II Pelamonia');
INSERT INTO `tbl_r_universitas` VALUES ('1574', 'Sekolah Tinggi Ilmu Ekonomi PGRI Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('1575', 'Sekolah Tinggi Ilmu Ekonomi Insan Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('1576', 'Universitas Kader Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1577', 'Universitas Serambi Mekkah');
INSERT INTO `tbl_r_universitas` VALUES ('1578', 'Akademi Kebidanan Hampar Baiduri');
INSERT INTO `tbl_r_universitas` VALUES ('1579', 'Universitas  Samudra');
INSERT INTO `tbl_r_universitas` VALUES ('1580', 'STISIP Yupentek Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('1581', 'Akademi Keperawatan Fatima Pare-pare');
INSERT INTO `tbl_r_universitas` VALUES ('1582', 'Universitas Siswa Bangsa Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('1583', 'Sekolah Tinggi Ilmu Kesehatan Kendal');
INSERT INTO `tbl_r_universitas` VALUES ('1584', 'Sekolah Tinggi Farmasi Indonesia Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1585', 'Akademi Keperawatan Baitul Hikmah');
INSERT INTO `tbl_r_universitas` VALUES ('1586', 'Sekolah Tinggi Ilmu Ekonomi Lamappoleonro');
INSERT INTO `tbl_r_universitas` VALUES ('1587', 'STIA Bina Nusantara Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('1588', 'STMIK Pasim Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('1589', 'Akademi Kebidanan Reformasi');
INSERT INTO `tbl_r_universitas` VALUES ('1590', 'STIKES Tri Mandiri Sakti Bengkulu');
INSERT INTO `tbl_r_universitas` VALUES ('1591', 'Sekolah Tinggi Ilmu Manajemen Sukma');
INSERT INTO `tbl_r_universitas` VALUES ('1592', 'Universitas  Asahan');
INSERT INTO `tbl_r_universitas` VALUES ('1593', 'Sekolah Tinggi Ilmu Kesehatan Payung Negeri');
INSERT INTO `tbl_r_universitas` VALUES ('1594', 'Sekolah Tinggi Ilmu Ekonomi 45 Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('1595', 'Universitas  Al-azhar');
INSERT INTO `tbl_r_universitas` VALUES ('1596', 'Sekolah Tinggi Ilmu Ekonomi YPN');
INSERT INTO `tbl_r_universitas` VALUES ('1597', 'Akademi Manajemen Koperasi Tantular');
INSERT INTO `tbl_r_universitas` VALUES ('1598', 'Sekolah Tinggi Ilmu Ekonomi Purna Graha');
INSERT INTO `tbl_r_universitas` VALUES ('1599', 'STIMIK  Lamappapoleonro');
INSERT INTO `tbl_r_universitas` VALUES ('1600', 'Sekolah Tinggi Ilmu Kesehatan Kepanjen');
INSERT INTO `tbl_r_universitas` VALUES ('1601', 'Sekolah Tinggi Ilmu Ekonomi Bisnis Dan Perbankan');
INSERT INTO `tbl_r_universitas` VALUES ('1602', 'Sekolah Tinggi Ilmu Manajemen Budi Bakti');
INSERT INTO `tbl_r_universitas` VALUES ('1603', 'STIA Abdul Azis Kataloka');
INSERT INTO `tbl_r_universitas` VALUES ('1604', 'STMIK Masa Depan');
INSERT INTO `tbl_r_universitas` VALUES ('1605', 'Sekolah Tinggi Ilmu Ekonomi Hidayatullah Depok');
INSERT INTO `tbl_r_universitas` VALUES ('1606', 'Akademi Farmasi Bumi Siliwangi');
INSERT INTO `tbl_r_universitas` VALUES ('1607', 'Sekolah Tinggi Ilmu Komputer Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1608', 'Akademi Sekretari & Manajemen Dharma Budhi Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('1609', 'STMIK Tulus Cendekia');
INSERT INTO `tbl_r_universitas` VALUES ('1610', 'Universitas Katolik De La Salle');
INSERT INTO `tbl_r_universitas` VALUES ('1611', 'Sekolah Tinggi Ilmu Ekonomi Perbankan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1612', 'STIA Nusantara Sakti Sungai Penuh');
INSERT INTO `tbl_r_universitas` VALUES ('1613', 'Sekolah Tinggi Ilmu Ekonomi Serelo Lahat');
INSERT INTO `tbl_r_universitas` VALUES ('1614', 'STMIK Syaikh Zainuddin Nahdlatul Wathan');
INSERT INTO `tbl_r_universitas` VALUES ('1615', 'Akademi Kebidanan Mamba ul Ulum Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1616', 'Sekolah Tinggi Ilmu Ekonomi Yasmi');
INSERT INTO `tbl_r_universitas` VALUES ('1617', 'Akademi Manajemen Putra Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('1618', 'STIKES Awal Bros Batam');
INSERT INTO `tbl_r_universitas` VALUES ('1619', 'Akademi Kebidanan Putri Bangsa Pariaman');
INSERT INTO `tbl_r_universitas` VALUES ('1620', 'STIKESMAS Abdi Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('1621', 'Akademi Farmasi Indonesia Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1622', 'Sekolah Tinggi Ilmu Administrasi Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('1623', 'Sekolah Tinggi Ilmu Kesehatan Harapan Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1624', 'Universitas  Halmahera');
INSERT INTO `tbl_r_universitas` VALUES ('1625', 'Akademi Perekam Medik & Info Kes Citra Medika');
INSERT INTO `tbl_r_universitas` VALUES ('1626', 'Akademi Bahasa Asing St Pignatelli');
INSERT INTO `tbl_r_universitas` VALUES ('1627', 'STIKES AL-Islam Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1628', 'STKIP Hamzar');
INSERT INTO `tbl_r_universitas` VALUES ('1629', 'Sekolah Tinggi Ilmu Ekonomi Lamaddukelleng');
INSERT INTO `tbl_r_universitas` VALUES ('1630', 'STMIK Dumai');
INSERT INTO `tbl_r_universitas` VALUES ('1631', 'Akademi Kesehatan Gigi Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('1632', 'Akademi Kebidanan Indah');
INSERT INTO `tbl_r_universitas` VALUES ('1633', 'Akademi Keperawatan HKBP Balige');
INSERT INTO `tbl_r_universitas` VALUES ('1634', 'Akademi Kebidanan Tiara Bunda');
INSERT INTO `tbl_r_universitas` VALUES ('1635', 'Akademi Komunikasi Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1636', 'Akademi Perawatan Karya Bakti Husada Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1637', 'Universitas Islam Nahdlatul Ulama Jepara');
INSERT INTO `tbl_r_universitas` VALUES ('1638', 'Sekolah Tinggi Ilmu Kesehatan Mitra Adiguna');
INSERT INTO `tbl_r_universitas` VALUES ('1639', 'Sekolah Tinggi Ilmu Ekonomi Pariwisata Api');
INSERT INTO `tbl_r_universitas` VALUES ('1640', 'Sekolah Tinggi Ilmu Hukum Jenderal Sudirman');
INSERT INTO `tbl_r_universitas` VALUES ('1641', 'Akademi Sekretari Dan Manajemen Indonesia Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1642', 'Akademi Kebidanan Imam Bonjol');
INSERT INTO `tbl_r_universitas` VALUES ('1643', 'Universitas Satya Wiyata Mandala');
INSERT INTO `tbl_r_universitas` VALUES ('1644', 'Sekolah Tinggi Ilmu Kesehatan Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('1645', 'Akademi Manajemen Perusahaan Panca Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('1646', 'Sekolah Tinggi Pertanian Kutai Timur');
INSERT INTO `tbl_r_universitas` VALUES ('1647', 'STIKES An-Nur Purwodadi');
INSERT INTO `tbl_r_universitas` VALUES ('1648', 'Universitas  Abdurrab');
INSERT INTO `tbl_r_universitas` VALUES ('1649', 'Sekolah Tinggi Ilmu Manajemen Indonesia YAPMI');
INSERT INTO `tbl_r_universitas` VALUES ('1650', 'Universitas Lakidende Unahaa');
INSERT INTO `tbl_r_universitas` VALUES ('1651', 'Universitas Al Asyariah Mandar');
INSERT INTO `tbl_r_universitas` VALUES ('1652', 'Sekolah Tinggi Teknologi Informasi NIIT');
INSERT INTO `tbl_r_universitas` VALUES ('1653', 'STIKES Citra Delima Bangka Belitung');
INSERT INTO `tbl_r_universitas` VALUES ('1654', 'Sekolah Tinggi Ilmu Hukum Lubuk Sikaping');
INSERT INTO `tbl_r_universitas` VALUES ('1655', 'Akademi Kebidanan Bunga Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1656', 'Akademi Analis Farmasi Dan Makanan Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('1657', 'Sekolah Tinggi Ilmu Komputer Muhammadiyah Batam');
INSERT INTO `tbl_r_universitas` VALUES ('1658', 'Akademi Pariwisata Satu Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('1659', 'Universitas Islam Darul ulum');
INSERT INTO `tbl_r_universitas` VALUES ('1660', 'Akademi Keperawatan Insan Husada Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1661', 'Sekolah Tinggi Ilmu Kesehatan Madani Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1662', 'Sekolah Tinggi Ilmu Kesehatan Artha Bodhi Iswara');
INSERT INTO `tbl_r_universitas` VALUES ('1663', 'STKIP Islam Bumi Ayu');
INSERT INTO `tbl_r_universitas` VALUES ('1664', 'Sekolah Tinggi Ilmu Kesehatan Hakli');
INSERT INTO `tbl_r_universitas` VALUES ('1665', 'Politeknik Kota Malang');
INSERT INTO `tbl_r_universitas` VALUES ('1666', 'Akademi Analis Kesehatan Unmuh Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1667', 'Sekolah Tinggi Teknik Raden Wijaya');
INSERT INTO `tbl_r_universitas` VALUES ('1668', 'Sekolah Tinggi Teknologi Industri Farmasi Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('1669', 'Sekolah Tinggi Ilmu Kesehatan Widya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1670', 'Universitas  Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1671', 'STIKES Bhakti Pertiwi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1672', 'STIKES Aufa Royhan');
INSERT INTO `tbl_r_universitas` VALUES ('1673', 'Universitas PGRI Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1674', 'Politeknik  Raflesia');
INSERT INTO `tbl_r_universitas` VALUES ('1675', 'Sekolah Tinggi Ilmu Ekonomi Nasional Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1676', 'Politeknik Mekatronika Sanata Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1677', 'STIKES Nusantara Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('1678', 'Sekolah Tinggi Ilmu Komunikasi Aws');
INSERT INTO `tbl_r_universitas` VALUES ('1679', 'Akademi Keperawatan Widya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1680', 'Akademi Kebidanan Farama Mulya');
INSERT INTO `tbl_r_universitas` VALUES ('1681', 'STKIP PGRI Sampang');
INSERT INTO `tbl_r_universitas` VALUES ('1682', 'Akademi Kebidanan Minasa Upa');
INSERT INTO `tbl_r_universitas` VALUES ('1683', 'Akademi Farmasi ISFI Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('1684', 'Sekolah Tinggi Ilmu Ekonomi Mars');
INSERT INTO `tbl_r_universitas` VALUES ('1685', 'STKIP Aisyiyah Riau');
INSERT INTO `tbl_r_universitas` VALUES ('1686', 'STIKES Yahya Bima');
INSERT INTO `tbl_r_universitas` VALUES ('1687', 'Sekolah Tinggi Teknologi Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('1688', 'STKIP Insan Madani Airmolek');
INSERT INTO `tbl_r_universitas` VALUES ('1689', 'STIKES  Panakkukang');
INSERT INTO `tbl_r_universitas` VALUES ('1690', 'Sekolah Tinggi Ilmu Kesehatan Mitra Ria Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1691', 'Akademi Teknik Deli Serdang');
INSERT INTO `tbl_r_universitas` VALUES ('1692', 'Sekolah Tinggi Ilmu Kesehatan Budhi Luhur Cimahi');
INSERT INTO `tbl_r_universitas` VALUES ('1693', 'Universitas Kristen Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1694', 'Akademi Kebidanan Bina Husada Serang');
INSERT INTO `tbl_r_universitas` VALUES ('1695', 'Akademi Kegidanan Surya Sehat');
INSERT INTO `tbl_r_universitas` VALUES ('1696', 'STIKES Bahrul Ulum Jombang');
INSERT INTO `tbl_r_universitas` VALUES ('1697', 'Sekolah Tinggi Teknologi Industri Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1698', 'Sekolah Tinggi Ilmu Kesehatan Indramayu');
INSERT INTO `tbl_r_universitas` VALUES ('1699', 'STMIK Parnaraya');
INSERT INTO `tbl_r_universitas` VALUES ('1700', 'Sekolah Tinggi Ilmu Ekonomi Trianandra');
INSERT INTO `tbl_r_universitas` VALUES ('1701', 'Sekolah Tinggi Ilmu Ekonomi IBMT');
INSERT INTO `tbl_r_universitas` VALUES ('1702', 'Politeknik Seni Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1703', 'Sekolah Tinggi Ilmu Ekonomi KBP');
INSERT INTO `tbl_r_universitas` VALUES ('1704', 'Sekolah Tinggi Ilmu Ekonomi Pelita Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1705', 'Akademi Manajemen Perusahaan Jayabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1706', 'STMIK Cikarang');
INSERT INTO `tbl_r_universitas` VALUES ('1707', 'Sekolah Tinggi Ilmu Kesehatan Ibnu Sina Batam');
INSERT INTO `tbl_r_universitas` VALUES ('1708', 'Sekolah Tinggi Ilmu Kesehatan Cendekia Utama');
INSERT INTO `tbl_r_universitas` VALUES ('1709', 'Sekolah Tinggi Ilmu Komputer Rajawali');
INSERT INTO `tbl_r_universitas` VALUES ('1710', 'Akademi Kebidanan Dian Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('1711', 'Sekolah Tinggi Ilmu Ekonomi Lhokseumawe');
INSERT INTO `tbl_r_universitas` VALUES ('1712', 'STIMI Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('1713', 'Sekolah Tinggi Pembangunan Masyarakat Santa Ursula');
INSERT INTO `tbl_r_universitas` VALUES ('1714', 'AMIK Selat Panjang');
INSERT INTO `tbl_r_universitas` VALUES ('1715', 'STIKES Yarsi Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('1716', 'STKIP Riama');
INSERT INTO `tbl_r_universitas` VALUES ('1717', 'Sekolah Tinggi Ilmu Ekonomi Tri Dharma Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1718', 'Sekolah Tinggi Matematika & Ilmu Pengetahuan Alam');
INSERT INTO `tbl_r_universitas` VALUES ('1719', 'Sekolah Tinggi Ilmu Ekonomi Totalwin');
INSERT INTO `tbl_r_universitas` VALUES ('1720', 'Universitas  Pandanaran');
INSERT INTO `tbl_r_universitas` VALUES ('1721', 'Akademi Pariwisata Tridaya');
INSERT INTO `tbl_r_universitas` VALUES ('1722', 'STMIK Sumedang');
INSERT INTO `tbl_r_universitas` VALUES ('1723', 'Sekolah Tinggi Ilmu Ekonomi LM Immanuel Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1724', 'Akademi Kebidanan Darmo Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1725', 'STIE Mahaputra Riau');
INSERT INTO `tbl_r_universitas` VALUES ('1726', 'Akademi Keperawatan Panti Waluya Malang');
INSERT INTO `tbl_r_universitas` VALUES ('1727', 'STMIK Atma Luhur');
INSERT INTO `tbl_r_universitas` VALUES ('1728', 'STKIP Muhammadiyah Rappang');
INSERT INTO `tbl_r_universitas` VALUES ('1729', 'Universitas Tama Jagakarsa');
INSERT INTO `tbl_r_universitas` VALUES ('1730', 'Sekolah Tinggi Ilmu Ekonomi Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1731', 'Iisip Yapis Biak');
INSERT INTO `tbl_r_universitas` VALUES ('1732', 'STISIP Banten Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1733', 'Politeknik Tri Mitra Karya Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('1734', 'STMIK Islam Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('1735', 'Akademi Bahasa Asing Santa Mary Ende');
INSERT INTO `tbl_r_universitas` VALUES ('1736', 'Akademi Kebidanan Bhakti Nusantara Salatiga');
INSERT INTO `tbl_r_universitas` VALUES ('1737', 'Politeknik  Gorontalo');
INSERT INTO `tbl_r_universitas` VALUES ('1738', 'Universitas Tanri Abeng');
INSERT INTO `tbl_r_universitas` VALUES ('1739', 'Akademi Kebidanan Bina Husada Jember');
INSERT INTO `tbl_r_universitas` VALUES ('1740', 'Akademi Bahasa Asing Permata Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('1741', 'Universitas Sari Putra Indonesia Tomohon');
INSERT INTO `tbl_r_universitas` VALUES ('1742', 'STIKES Pekanbaru Medical Center');
INSERT INTO `tbl_r_universitas` VALUES ('1743', 'Akademi Keperawatan Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('1744', 'Akademi Farmasi YPF');
INSERT INTO `tbl_r_universitas` VALUES ('1745', 'Akademi Bahasa Asing Sinema Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1746', 'Politeknik  Ganesha');
INSERT INTO `tbl_r_universitas` VALUES ('1747', 'Universitas Maarif Hasyim Latif');
INSERT INTO `tbl_r_universitas` VALUES ('1748', 'Universitas Teknologi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1749', 'Sekolah Tinggi Ilmu Hukum Graha Kirana');
INSERT INTO `tbl_r_universitas` VALUES ('1750', 'Akademi Sekretari Dan Manajemen Sriwijaya');
INSERT INTO `tbl_r_universitas` VALUES ('1751', 'Universitas Gajah Putih');
INSERT INTO `tbl_r_universitas` VALUES ('1752', 'Sekolah Tinggi Ilmu Kesehatan Bani Saleh');
INSERT INTO `tbl_r_universitas` VALUES ('1753', 'Sekolah Tinggi Ilmu Kesehatan RS Haji Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1754', 'Universitas Sisingamangaraja XII');
INSERT INTO `tbl_r_universitas` VALUES ('1755', 'Akademi Pariwisata Krisanti Widya Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('1756', 'STMIK AUB Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1757', 'Universitas Sains Dan Teknologi Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('1758', 'Sekolah Tinggi Ilmu Administrasi Cimahi');
INSERT INTO `tbl_r_universitas` VALUES ('1759', 'STIKES Yarsi Sumatera Barat');
INSERT INTO `tbl_r_universitas` VALUES ('1760', 'Akademi Komunikasi Radya Binatama');
INSERT INTO `tbl_r_universitas` VALUES ('1761', 'Akademi Teknik Perkapalan Veteran');
INSERT INTO `tbl_r_universitas` VALUES ('1762', 'Sekolah Tinggi Ilmu Bahasa Asing ITMI Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1763', 'STMIK Ganesha Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1764', 'Sekolah Tinggi Ilmu Farmasi Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1765', 'Sekolah Tinggi Ilmu Ekonomi Dharma Agung Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1766', 'Sekolah Tinggi Ilmu Ekonomi Gandhi');
INSERT INTO `tbl_r_universitas` VALUES ('1767', 'Sekolah Tinggi Pertanian Jawa Barat');
INSERT INTO `tbl_r_universitas` VALUES ('1768', 'STKIP Mutiara Banten');
INSERT INTO `tbl_r_universitas` VALUES ('1769', 'STKIP Agama Hindu Amlapura');
INSERT INTO `tbl_r_universitas` VALUES ('1770', 'Akademi Kebidanan Prestasi Agung');
INSERT INTO `tbl_r_universitas` VALUES ('1771', 'Akademi Kebidanan Sakinah');
INSERT INTO `tbl_r_universitas` VALUES ('1772', 'Akademi Keperawatan Dharma Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('1773', 'Sekolah Tinggi Ilmu Hukum Rahmaniyah');
INSERT INTO `tbl_r_universitas` VALUES ('1774', 'Akademi Kebidanan Wira Husada Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1775', 'STKIP Sinar Pancasila');
INSERT INTO `tbl_r_universitas` VALUES ('1776', 'Universitas  Tomakaka');
INSERT INTO `tbl_r_universitas` VALUES ('1777', 'Akademi Kebidanan Paramata Raha');
INSERT INTO `tbl_r_universitas` VALUES ('1778', 'STKIP Al Azhar Diniyyah Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('1779', 'Akademi Keperawatan Pandan Harum Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('1780', 'Sekolah Tinggi Ilmu Ekonomi Al-Anwar');
INSERT INTO `tbl_r_universitas` VALUES ('1781', 'Sekolah Tinggi Ilmu Pertanian Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('1782', 'Sekolah Tinggi Manajemen Transportasi Malahayati');
INSERT INTO `tbl_r_universitas` VALUES ('1783', 'Universitas  Lumajang');
INSERT INTO `tbl_r_universitas` VALUES ('1784', 'Akademi Pariwisata Nusantara Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1785', 'STMIK LPKIA Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1786', 'Akademi Maritim Bina Bahari');
INSERT INTO `tbl_r_universitas` VALUES ('1787', 'Akademi Kebidanan Muslimat Nahdlatul Ulama Kudus');
INSERT INTO `tbl_r_universitas` VALUES ('1788', 'Politeknik Negeri Sambas');
INSERT INTO `tbl_r_universitas` VALUES ('1789', 'Akademik Kebidanan Armina Centre Panyabungan');
INSERT INTO `tbl_r_universitas` VALUES ('1790', 'Sekolah Tinggi Ilmu Ekonomi Yadika Bangil');
INSERT INTO `tbl_r_universitas` VALUES ('1791', 'Akademi Manajemen Informatika Dan Komputer Kosgoro');
INSERT INTO `tbl_r_universitas` VALUES ('1792', 'Akademi Keperawatan Sari Mutiara Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1793', 'Universitas PGRI Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('1794', 'Sekolah Tinggi Bahasa Asing Cakrawala Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1795', 'Sekolah Tinggi Ilmu Kesehatan Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('1796', 'STMIK Inovasi Sains Teknologi Bisnis');
INSERT INTO `tbl_r_universitas` VALUES ('1797', 'Akademi Kebidanan Heppy Zal');
INSERT INTO `tbl_r_universitas` VALUES ('1798', 'Akademi Keperawatan RS Efarina');
INSERT INTO `tbl_r_universitas` VALUES ('1799', 'Sekolah Tinggi Ilmu Hukum Habaring Hurung Sampit');
INSERT INTO `tbl_r_universitas` VALUES ('1800', 'STISIP  Tasikmalaya');
INSERT INTO `tbl_r_universitas` VALUES ('1801', 'Akademi Kebidanan Dewi Sartika Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1802', 'Akademi Kebidanan Bina Sejaktera Ameta');
INSERT INTO `tbl_r_universitas` VALUES ('1803', 'Sekolah Tinggi Ilmu Ekonomi Jembatan Bulan');
INSERT INTO `tbl_r_universitas` VALUES ('1804', 'Akademi Manajemen Informatika Dan Komputer Hass');
INSERT INTO `tbl_r_universitas` VALUES ('1805', 'Sekolah Tinggi Ilmu Ekonomi Wirawacana');
INSERT INTO `tbl_r_universitas` VALUES ('1806', 'Akademi Kebidanan Tuti Rahayu');
INSERT INTO `tbl_r_universitas` VALUES ('1807', 'Sekolah Tinggi Ilmu Ekonomi Oemathonis');
INSERT INTO `tbl_r_universitas` VALUES ('1808', 'Sekolah Tinggi Ilmu Kesehatan Bina Bangsa Majene');
INSERT INTO `tbl_r_universitas` VALUES ('1809', 'Akademi Kebidanan Yappi Sragen');
INSERT INTO `tbl_r_universitas` VALUES ('1810', 'Sekolah Tinggi Ilmu Ekonomi El Hakim');
INSERT INTO `tbl_r_universitas` VALUES ('1811', 'Sekolah Tinggi Kesenian Wilwatikta');
INSERT INTO `tbl_r_universitas` VALUES ('1812', 'Sekolah Tinggi Ilmu Kesehatan William Booth');
INSERT INTO `tbl_r_universitas` VALUES ('1813', 'Universitas  Gresik');
INSERT INTO `tbl_r_universitas` VALUES ('1814', 'Sekolah Tinggi Ilmu Pertanian Surya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1815', 'Akademi Sekretari Manajemen Atmajaya Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1816', 'Politeknik  Muhammadiyah  Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1817', 'STKIP Dharma Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('1818', 'Sekolah Tinggi Teknologi Cipasung');
INSERT INTO `tbl_r_universitas` VALUES ('1819', 'Universitas Mayjen Sungkono');
INSERT INTO `tbl_r_universitas` VALUES ('1820', 'Sekolah Tinggi Ilmu Administrasi Kawula Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1821', 'Sekolah Tinggi Teknologi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1822', 'STIH Litigasi');
INSERT INTO `tbl_r_universitas` VALUES ('1823', 'Sekolah Tinggi Ilmu Ekonomi Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('1824', 'Universitas Indonesia Timur');
INSERT INTO `tbl_r_universitas` VALUES ('1825', 'Sekolah Tinggi Ilmu Kesehatan \'Aisyiyah Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('1826', 'STIKES Bhakti Husada Bengkulu');
INSERT INTO `tbl_r_universitas` VALUES ('1827', 'Akademi Keperawatan Sawerigading Pemda Luwu');
INSERT INTO `tbl_r_universitas` VALUES ('1828', 'STKIP Nasional Padang Pariaman');
INSERT INTO `tbl_r_universitas` VALUES ('1829', 'ASM Widya Mandala Madiun');
INSERT INTO `tbl_r_universitas` VALUES ('1830', 'AMIK Bina Sriwijaya');
INSERT INTO `tbl_r_universitas` VALUES ('1831', 'Universitas Jabal Ghafur');
INSERT INTO `tbl_r_universitas` VALUES ('1832', 'STIE Islam Bumiayu');
INSERT INTO `tbl_r_universitas` VALUES ('1833', 'Akademi Kebidanan Sumatera Barat');
INSERT INTO `tbl_r_universitas` VALUES ('1834', 'Universitas  Samawa');
INSERT INTO `tbl_r_universitas` VALUES ('1835', 'Akademi Sekretari & Manajemen Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1836', 'Akademi Analis Kesehatan 17 Agustus 1945 Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('1837', 'STMIK Cahaya Surya');
INSERT INTO `tbl_r_universitas` VALUES ('1838', 'Institut Pertanian Malang');
INSERT INTO `tbl_r_universitas` VALUES ('1839', 'Universitas Teknologi Nusantara Cilegon');
INSERT INTO `tbl_r_universitas` VALUES ('1840', 'Sekolah Tinggi Ilmu Ekonomi Pembangunan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1841', 'Akademi Pariwisata Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1842', 'STKIP Albana');
INSERT INTO `tbl_r_universitas` VALUES ('1843', 'Sekolah Tinggi Media Komunikasi Trisakti');
INSERT INTO `tbl_r_universitas` VALUES ('1844', 'Sekolah Tinggi Ilmu Ekonomi Dharma Iswara');
INSERT INTO `tbl_r_universitas` VALUES ('1845', 'Akademi Keperawatan Makasar');
INSERT INTO `tbl_r_universitas` VALUES ('1846', 'STISIP Veteran Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('1847', 'Akademi Kebidanan Pidie Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('1848', 'Politeknik Widya Dharma Bali');
INSERT INTO `tbl_r_universitas` VALUES ('1849', 'AMIK Intelcom Global Indo Kisaran');
INSERT INTO `tbl_r_universitas` VALUES ('1850', 'Akademi Manajemen Keuangan BSI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1851', 'Akademi Keperawatan William Booth Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1852', 'Akademi Keperawatan Patria Husada Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1853', 'Akademi Kebidanan Global Medika');
INSERT INTO `tbl_r_universitas` VALUES ('1854', 'STIKES Kapuas Raya');
INSERT INTO `tbl_r_universitas` VALUES ('1855', 'Akademi Maritim Sapta Samudra');
INSERT INTO `tbl_r_universitas` VALUES ('1856', 'Sekolah Tinggi Ilmu Pertanian Sriwigama');
INSERT INTO `tbl_r_universitas` VALUES ('1857', 'Sekolah Tinggi Ilmu Hukum Persada Bunda');
INSERT INTO `tbl_r_universitas` VALUES ('1858', 'Universitas  Abulyatama');
INSERT INTO `tbl_r_universitas` VALUES ('1859', 'STIKES RS Baptis Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('1860', 'Sekolah Tinggi Ilmu Ekonomi Petra');
INSERT INTO `tbl_r_universitas` VALUES ('1861', 'STKIP Suluh Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1862', 'Sekolah Tinggi Ilmu Ekonomi Fajar');
INSERT INTO `tbl_r_universitas` VALUES ('1863', 'Institut Teknologi Pembangunan Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1864', 'Sekolah Tinggi Ilmu Kesehatan Jembrana');
INSERT INTO `tbl_r_universitas` VALUES ('1865', 'STIKES Bina Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1866', 'Politeknik Maritim Negeri Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1867', 'Akademi Kebidanan Menara Primadani');
INSERT INTO `tbl_r_universitas` VALUES ('1868', 'Sekolah Tinggi Ilmu Ekonomi Pagaruyung');
INSERT INTO `tbl_r_universitas` VALUES ('1869', 'STMIK Pamitran');
INSERT INTO `tbl_r_universitas` VALUES ('1870', 'Sekolah Tinggi Ilmu Kesehatan Prima');
INSERT INTO `tbl_r_universitas` VALUES ('1871', 'Akademi Kebidanan Widya Karsa Jayakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1872', 'Sekolah Tinggi Ilmu Kesehatan Stella Maris Makasar');
INSERT INTO `tbl_r_universitas` VALUES ('1873', 'Akademi Keperawatan 17 Karanganyar');
INSERT INTO `tbl_r_universitas` VALUES ('1874', 'STMIK Dharma Negara');
INSERT INTO `tbl_r_universitas` VALUES ('1875', 'Akademi Terapi Wicara Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1876', 'AMIK BSI Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('1877', 'Sekolah Tinggi Ilmu Kesehatan (STIKES) Lenggogeni Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1878', 'Sekolah Tinggi Ilmu Ekonomi Taman Siswa');
INSERT INTO `tbl_r_universitas` VALUES ('1879', 'Akademi Kebidanan Sifra Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1880', 'Sekolah Tinggi Ilmu Ekonomi Boedi Oetomo');
INSERT INTO `tbl_r_universitas` VALUES ('1881', 'Sekolah Tinggi Ilmu Teknik Trisula');
INSERT INTO `tbl_r_universitas` VALUES ('1882', 'Akademi Kebidanan Borneo Medistra');
INSERT INTO `tbl_r_universitas` VALUES ('1883', 'Universitas Kristen Cipta Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('1884', 'Institut Bio Scientia Internasional Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1885', 'Sekolah Tinggi Ilmu Ekonomi Bajiminasa Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1886', 'Sekolah Tinggi Ilmu Kesehatan Merangin');
INSERT INTO `tbl_r_universitas` VALUES ('1887', 'Akademi Keperawatan Panca Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('1888', 'Sekolah Tinggi Teknik Atlas Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1889', 'Sekolah Tinggi Ilmu Ekonomi Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('1890', 'STMIK  Dharmasraya');
INSERT INTO `tbl_r_universitas` VALUES ('1891', 'Universitas Nasional Pasim');
INSERT INTO `tbl_r_universitas` VALUES ('1892', 'Akademi Kebidanan Aifa Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1893', 'Politeknik TEDC');
INSERT INTO `tbl_r_universitas` VALUES ('1894', 'STMIK Kuwera');
INSERT INTO `tbl_r_universitas` VALUES ('1895', 'Sekolah Tinggi Ilmu Ekonomi Mitra Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1896', 'STIKES Nan Tongga');
INSERT INTO `tbl_r_universitas` VALUES ('1897', 'Politeknik Negeri Nusa Utara');
INSERT INTO `tbl_r_universitas` VALUES ('1898', 'Universitas Islam Indragiri');
INSERT INTO `tbl_r_universitas` VALUES ('1899', 'Akademi Manajemen Informatika Dan Komputer Jombang');
INSERT INTO `tbl_r_universitas` VALUES ('1900', 'Akademi Teknologi Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('1901', 'Sekolah Tinggi Ilmu Sosial Dan Politik Fajar Timur');
INSERT INTO `tbl_r_universitas` VALUES ('1902', 'STMIK Budi Darma');
INSERT INTO `tbl_r_universitas` VALUES ('1903', 'Sekolah Tinggi Ilmu Ekonomi Mulia Pratama');
INSERT INTO `tbl_r_universitas` VALUES ('1904', 'Akademi Farmasi Yayasan Tenaga Pembangunan Arjuna Laguboti');
INSERT INTO `tbl_r_universitas` VALUES ('1905', 'Sekolah Tinggi Ilmu Ekonomi Nu Trate');
INSERT INTO `tbl_r_universitas` VALUES ('1906', 'Akademi Kebidanan Wira Buana');
INSERT INTO `tbl_r_universitas` VALUES ('1907', 'Akademi Kebidanan Sehati');
INSERT INTO `tbl_r_universitas` VALUES ('1908', 'AKTEK Radiodiagnostik & Radioterapi Patriot Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1909', 'Sekolah Tinggi Ilmu Ekonomi Rajawali');
INSERT INTO `tbl_r_universitas` VALUES ('1910', 'Akademi Akuntansi Bukittinggi');
INSERT INTO `tbl_r_universitas` VALUES ('1911', 'AMIK BSI Tasikmalaya');
INSERT INTO `tbl_r_universitas` VALUES ('1912', 'Akademi Ketatalaksanaan Pelayaran Niaga Bahtera');
INSERT INTO `tbl_r_universitas` VALUES ('1913', 'Akademi Teknik Pembangunan Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('1914', 'STKIP Al Amin Dompu');
INSERT INTO `tbl_r_universitas` VALUES ('1915', 'Akademi Kesehatan Rustida');
INSERT INTO `tbl_r_universitas` VALUES ('1916', 'Politeknik Kesehatan Siteba');
INSERT INTO `tbl_r_universitas` VALUES ('1917', 'Akademi Seni Rupa Dan Desain ISWI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('1918', 'Sekolah Tinggi Internasional Konservatori Musik Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1919', 'Akademi Bahasa Asing Webb');
INSERT INTO `tbl_r_universitas` VALUES ('1920', 'STMIK  Primakara');
INSERT INTO `tbl_r_universitas` VALUES ('1921', 'Universitas Trunajaya Bontang');
INSERT INTO `tbl_r_universitas` VALUES ('1922', 'Universitas Muhammadiyah Buton');
INSERT INTO `tbl_r_universitas` VALUES ('1923', 'Institut Sains Dan Teknologi Indonesia Manokwari');
INSERT INTO `tbl_r_universitas` VALUES ('1924', 'STKIP Gotong Royong Masohi');
INSERT INTO `tbl_r_universitas` VALUES ('1925', 'Sekolah Tinggi Ilmu Kesehatan Nani Hasanuddin');
INSERT INTO `tbl_r_universitas` VALUES ('1926', 'Universitas Islam Majapahit');
INSERT INTO `tbl_r_universitas` VALUES ('1927', 'Sekolah Tinggi Ilmu Ekonomi Dr Moechtar Talib');
INSERT INTO `tbl_r_universitas` VALUES ('1928', 'Universitas Pepabri Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('1929', 'STMIK Widuri');
INSERT INTO `tbl_r_universitas` VALUES ('1930', 'Akademi Keuangan Dan Perbankan ICM Cantrika Mitra');
INSERT INTO `tbl_r_universitas` VALUES ('1931', 'Akademi Kebidanan Pamenang');
INSERT INTO `tbl_r_universitas` VALUES ('1932', 'Universitas Pembangunan Jaya Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('1933', 'Politeknik  Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1934', 'Politeknik  Agroindustri');
INSERT INTO `tbl_r_universitas` VALUES ('1935', 'Akademi Kebidanan Prima Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1936', 'Akademi Kebidanan Petro Mandau Husada');
INSERT INTO `tbl_r_universitas` VALUES ('1937', 'STIE Nias Selatan');
INSERT INTO `tbl_r_universitas` VALUES ('1938', 'STKIP Melawi');
INSERT INTO `tbl_r_universitas` VALUES ('1939', 'STIKES Getsempena Lhoksukon');
INSERT INTO `tbl_r_universitas` VALUES ('1940', 'Akademi  Keperawatan  Pangkalpinang');
INSERT INTO `tbl_r_universitas` VALUES ('1941', 'Sekolah Tinggi Ilmu Ekonomi Labuhan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('1942', 'Akademi Keperawatan Bunda Delima');
INSERT INTO `tbl_r_universitas` VALUES ('1943', 'Sekolah Tinggi Ilmu Pariwisata Manado');
INSERT INTO `tbl_r_universitas` VALUES ('1944', 'STIE Mikroskill');
INSERT INTO `tbl_r_universitas` VALUES ('1945', 'STKIP Bina Bangsa Meulaboh');
INSERT INTO `tbl_r_universitas` VALUES ('1946', 'Akademi Kebidanan Rizki Patya');
INSERT INTO `tbl_r_universitas` VALUES ('1947', 'STIKES Nurul Hasanah Kutacane');
INSERT INTO `tbl_r_universitas` VALUES ('1948', 'STIKES Bhakti Mandala Husada Slawi');
INSERT INTO `tbl_r_universitas` VALUES ('1949', 'STISIP Merdeka Manado');
INSERT INTO `tbl_r_universitas` VALUES ('1950', 'Universitas Islam Madura');
INSERT INTO `tbl_r_universitas` VALUES ('1951', 'Institut Bisnis dan Informatika STIKOM Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1952', 'Stba Persahabatan Internasional Asia');
INSERT INTO `tbl_r_universitas` VALUES ('1953', 'Sekolah Tinggi Ilmu Komputer Binaniaga');
INSERT INTO `tbl_r_universitas` VALUES ('1954', 'Akademi Farmasi Prayoga Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1955', 'STIKES Suaka Insan');
INSERT INTO `tbl_r_universitas` VALUES ('1956', 'Akademi Kebidanan Makariwo');
INSERT INTO `tbl_r_universitas` VALUES ('1957', 'Sekolah Tinggi Ilmu Ekonomi Swasta Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('1958', 'Akademi Kebidanan Trinita Manado');
INSERT INTO `tbl_r_universitas` VALUES ('1959', 'Akademi Akuntansi YPK Medan');
INSERT INTO `tbl_r_universitas` VALUES ('1960', 'STKIP Muhammadiyah Bone');
INSERT INTO `tbl_r_universitas` VALUES ('1961', 'Politeknik Medica Farma Husada Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('1962', 'STIKES Nusantara Oebobo');
INSERT INTO `tbl_r_universitas` VALUES ('1963', 'Akademi Bahasa Asing Nurdin Hamzah');
INSERT INTO `tbl_r_universitas` VALUES ('1964', 'Akademi Keperawatan Kesdam IX/Udayana');
INSERT INTO `tbl_r_universitas` VALUES ('1965', 'STMIK  Abulyatama');
INSERT INTO `tbl_r_universitas` VALUES ('1966', 'Universitas Sulawesi Barat');
INSERT INTO `tbl_r_universitas` VALUES ('1967', 'Universitas Graha Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('1968', 'Politeknik Enjinering Indorama');
INSERT INTO `tbl_r_universitas` VALUES ('1969', 'Sekolah Tinggi Ilmu Ekonomi Tricom');
INSERT INTO `tbl_r_universitas` VALUES ('1970', 'Akademi Farmasi Tadulako Farma');
INSERT INTO `tbl_r_universitas` VALUES ('1971', 'STIKES Karya Husada Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('1972', 'Akademi Kebidanan Nusantara Indonesia Lubuklinggau');
INSERT INTO `tbl_r_universitas` VALUES ('1973', 'IKIP Gunung Sitoli');
INSERT INTO `tbl_r_universitas` VALUES ('1974', 'STIKES Advaita Medika Tabanan');
INSERT INTO `tbl_r_universitas` VALUES ('1975', 'Universitas  Singaperbangsa  Karawang');
INSERT INTO `tbl_r_universitas` VALUES ('1976', 'Akademi Sekretari Dan Manajemen Insulindo');
INSERT INTO `tbl_r_universitas` VALUES ('1977', 'Universitas  Muhammadiyah  Sorong');
INSERT INTO `tbl_r_universitas` VALUES ('1978', 'Akademi Keperawatan Bina Husada Tebing Tinggi');
INSERT INTO `tbl_r_universitas` VALUES ('1979', 'AMIK Sultan Agung');
INSERT INTO `tbl_r_universitas` VALUES ('1980', 'Universitas Wiraswasta Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1981', 'STMIK Himsya');
INSERT INTO `tbl_r_universitas` VALUES ('1982', 'STMIK IM');
INSERT INTO `tbl_r_universitas` VALUES ('1983', 'STMIK Muhammadiyah Banten');
INSERT INTO `tbl_r_universitas` VALUES ('1984', 'Politeknik Santo Thomas');
INSERT INTO `tbl_r_universitas` VALUES ('1985', 'Akademi Kebidanan Puteri Andalas');
INSERT INTO `tbl_r_universitas` VALUES ('1986', 'Politeknik  Palcomtech');
INSERT INTO `tbl_r_universitas` VALUES ('1987', 'Akademi Komunikasi The Next Academy');
INSERT INTO `tbl_r_universitas` VALUES ('1988', 'Akademi Akuntansi Jayabaya');
INSERT INTO `tbl_r_universitas` VALUES ('1989', 'STMIK Muara Dua');
INSERT INTO `tbl_r_universitas` VALUES ('1990', 'Universitas Putra Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1991', 'Sekolah Tinggi Ilmu Kesehatan YPAK Padang');
INSERT INTO `tbl_r_universitas` VALUES ('1992', 'Akademi Kebidanan Payung Pelalawan');
INSERT INTO `tbl_r_universitas` VALUES ('1993', 'STMIK Bina Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('1994', 'Akademi Keperawatan Takasima Kabanjahe');
INSERT INTO `tbl_r_universitas` VALUES ('1995', 'STIKES Pembina Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('1996', 'Sekolah Tinggi Manajemen Logistik Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('1997', 'Akademi Bahasa Asing IEC Putra Bangsa tegal');
INSERT INTO `tbl_r_universitas` VALUES ('1998', 'STKIP  Ahlussunnah');
INSERT INTO `tbl_r_universitas` VALUES ('1999', 'Sekolah Tinggi Ilmu Administrasi Abdul Haris');
INSERT INTO `tbl_r_universitas` VALUES ('2000', 'Akademi Kebidanan Isma Husada Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('2001', 'Universitas Dharma Andalas');
INSERT INTO `tbl_r_universitas` VALUES ('2002', 'Politeknik  Tanjungbalai');
INSERT INTO `tbl_r_universitas` VALUES ('2003', 'Akademi Kebidanan Darussalam');
INSERT INTO `tbl_r_universitas` VALUES ('2004', 'Akademi Keperawatan Columbia Asia');
INSERT INTO `tbl_r_universitas` VALUES ('2005', 'Akademi Kebidanan Buton Raya');
INSERT INTO `tbl_r_universitas` VALUES ('2006', 'Sekolah Tinggi Ilmu Ekonomi Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('2007', 'Sekolah Tinggi Ilmu Komputer Al-khairiyah');
INSERT INTO `tbl_r_universitas` VALUES ('2008', 'STIE Ottow & Geissler Fak-fak');
INSERT INTO `tbl_r_universitas` VALUES ('2009', 'Sekolah Tinggi Ilmu Ekonomi Rizky');
INSERT INTO `tbl_r_universitas` VALUES ('2010', 'STIMIK Bina Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2011', 'Sekolah Tinggi Ilmu Ekonomi Selamat Sri Kendal');
INSERT INTO `tbl_r_universitas` VALUES ('2012', 'Sekolah Tinggi Ilmu Ekonomi Wiyatamandala');
INSERT INTO `tbl_r_universitas` VALUES ('2013', 'Sekolah Tinggi Ilmu Maritim Mutiara Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('2014', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri');
INSERT INTO `tbl_r_universitas` VALUES ('2015', 'Akademi Koperasi Indonesia Ratu Jelita');
INSERT INTO `tbl_r_universitas` VALUES ('2016', 'STIKES Widya Cipta Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2017', 'Politeknik Katolik Saint Paul');
INSERT INTO `tbl_r_universitas` VALUES ('2018', 'Sekolah Tinggi Ilmu Pertanian Belitang');
INSERT INTO `tbl_r_universitas` VALUES ('2019', 'Akademi Kebidanan As-Syifa Kisaran');
INSERT INTO `tbl_r_universitas` VALUES ('2020', 'Sekolah Tinggi Ilmu Kesehatan Medistra Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2021', 'Akademi Kebidanan Darul Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2022', 'Politeknik Islam Syekh Salman Al-Farisi Rantau');
INSERT INTO `tbl_r_universitas` VALUES ('2023', 'Akademi Manajemen Informatika Dan Komputer Yapri');
INSERT INTO `tbl_r_universitas` VALUES ('2024', 'Akademi Kebidanan Widya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2025', 'Politeknik Tanah Laut');
INSERT INTO `tbl_r_universitas` VALUES ('2026', 'AMIK New Media');
INSERT INTO `tbl_r_universitas` VALUES ('2027', 'Sekolah Tinggi Ilmu Ekonomi Dharma Putra Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2028', 'STMIK  Tasikmalaya');
INSERT INTO `tbl_r_universitas` VALUES ('2029', 'Sekolah Tinggi Ilmu Kesehatan Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('2030', 'Sekolah Tinggi Ilmu Ekonomi Sbi');
INSERT INTO `tbl_r_universitas` VALUES ('2031', 'Akademi Kebidanan Kartika Mitra Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2032', 'Sekolah Tinggi Ilmu Hukum Biak-Papua');
INSERT INTO `tbl_r_universitas` VALUES ('2033', 'Akademi Pariwisata Manado');
INSERT INTO `tbl_r_universitas` VALUES ('2034', 'STMIK Asia Malang');
INSERT INTO `tbl_r_universitas` VALUES ('2035', 'Politeknik Putra Bangsa Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('2036', 'Universitas  Matana');
INSERT INTO `tbl_r_universitas` VALUES ('2037', 'Sekolah Tinggi Ilmu Manajemen Yapim Maros');
INSERT INTO `tbl_r_universitas` VALUES ('2038', 'Sekolah Tinggi Teknologi Sinar Husni');
INSERT INTO `tbl_r_universitas` VALUES ('2039', 'Sekolah Tinggi Bahasa Asing Cahaya Surya');
INSERT INTO `tbl_r_universitas` VALUES ('2040', 'Akademi Telekomunikasi Indonesia Gemilang');
INSERT INTO `tbl_r_universitas` VALUES ('2041', 'Akademi Maritim Ganesha Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2042', 'Akademi Kebidanan Bina Daya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2043', 'Sekolah Tinggi Ilmu Ekonomi Dwipa Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('2044', 'Akademi Teknik Wacana Manunggal Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('2045', 'AMIK Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2046', 'Sekolah Tinggi Ilmu Manajemen Publik Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2047', 'Akademi Kebidanan Nadhirah');
INSERT INTO `tbl_r_universitas` VALUES ('2048', 'Sekolah Tinggi Ilmu Sosial Ilmu Politik Kebangsaan');
INSERT INTO `tbl_r_universitas` VALUES ('2049', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('2050', 'Akademi Bahasa Asing Bina Insan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2051', 'STIKES Eka Harap Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('2052', 'Akademi Farmasi Putera Indonesia Malang');
INSERT INTO `tbl_r_universitas` VALUES ('2053', 'Akademi Kebidanan Sentral');
INSERT INTO `tbl_r_universitas` VALUES ('2054', 'Sekolah Tinggi Administrasi Muhammadiyah Selong');
INSERT INTO `tbl_r_universitas` VALUES ('2055', 'Akademi Keperawatan Yakpermas Banyumas');
INSERT INTO `tbl_r_universitas` VALUES ('2056', 'Sekolah Tinggi Pertanian Panca Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('2057', 'Politeknik Bunda Kandung');
INSERT INTO `tbl_r_universitas` VALUES ('2058', 'Sekolah Tinggi Ilmu Kesehatan Indonesia Padang');
INSERT INTO `tbl_r_universitas` VALUES ('2059', 'Politeknik Gunakarya Indonesia Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('2060', 'Akademi Kebidanan Sandi Karsa');
INSERT INTO `tbl_r_universitas` VALUES ('2061', 'AMIK Rizky Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2062', 'STKIP Sera');
INSERT INTO `tbl_r_universitas` VALUES ('2063', 'Sekolah Tinggi Ilmu Ekonomi Bentara Persada Batam');
INSERT INTO `tbl_r_universitas` VALUES ('2064', 'Akademi Keperawatan RSU Herna');
INSERT INTO `tbl_r_universitas` VALUES ('2065', 'Universitas Islam Kuantan Singingi');
INSERT INTO `tbl_r_universitas` VALUES ('2066', 'Institut Informatika Indonesia Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('2067', 'Akademi Pariwisata Widya Nusantara Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2068', 'Sekolah Tinggi Teknologi Mitra Karya');
INSERT INTO `tbl_r_universitas` VALUES ('2069', 'Universitas Muhadi Setiabudi');
INSERT INTO `tbl_r_universitas` VALUES ('2070', 'Sekolah Tinggi Ilmu Ekonomi Abdi Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('2071', 'Sekolah Tinggi Ilmu Ekonomi Putra Timor');
INSERT INTO `tbl_r_universitas` VALUES ('2072', 'Akademi Kebidanan Sari Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2073', 'STMIK  Satyagama');
INSERT INTO `tbl_r_universitas` VALUES ('2074', 'STMIK  Mahakarya');
INSERT INTO `tbl_r_universitas` VALUES ('2075', 'Akademi Kesehatan Lingkungan Andalusia');
INSERT INTO `tbl_r_universitas` VALUES ('2076', 'Akademi Kesejahteraan Sosial AKK');
INSERT INTO `tbl_r_universitas` VALUES ('2077', 'Sekolah Tinggi Teknologi Cahaya Surya');
INSERT INTO `tbl_r_universitas` VALUES ('2078', 'Sekolah Tinggi Ilmu Ekonomi Bukit Zaitun Sorong');
INSERT INTO `tbl_r_universitas` VALUES ('2079', 'Akademi Keperawatan Binalita Sudama');
INSERT INTO `tbl_r_universitas` VALUES ('2080', 'Akademi Pariwisata Sinar Surya');
INSERT INTO `tbl_r_universitas` VALUES ('2081', 'Sekolah Tinggi Ilmu Ekonomi Sampit');
INSERT INTO `tbl_r_universitas` VALUES ('2082', 'STKIP Muhammadiyah Sorong');
INSERT INTO `tbl_r_universitas` VALUES ('2083', 'Sekolah Tinggi Manajemen Informatika dan Komputer Royal');
INSERT INTO `tbl_r_universitas` VALUES ('2084', 'STMIK Sentra Pendidikan Bisnis');
INSERT INTO `tbl_r_universitas` VALUES ('2085', 'STISIP Silas Papare Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('2086', 'STIKES Kurnia Jaya Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2087', 'STKIP Paracendekia N W Sumbawa');
INSERT INTO `tbl_r_universitas` VALUES ('2088', 'STISIP Padang');
INSERT INTO `tbl_r_universitas` VALUES ('2089', 'STMIK Dharmapala Riau');
INSERT INTO `tbl_r_universitas` VALUES ('2090', 'STIKES Katolik St Vincentius A Paulo Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('2091', 'AMIK Parnaraya Manado');
INSERT INTO `tbl_r_universitas` VALUES ('2092', 'STMIK Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('2093', 'Akademi Sekretari Manajemen Indonesia Klabat');
INSERT INTO `tbl_r_universitas` VALUES ('2094', 'Politeknik Kesehatan YRSU Dr Rusdi');
INSERT INTO `tbl_r_universitas` VALUES ('2095', 'Akademi Farmasi Yamasi Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2096', 'Universitas Islam Ogan Komering Ilir Kayuagung');
INSERT INTO `tbl_r_universitas` VALUES ('2097', 'Politeknik Palu');
INSERT INTO `tbl_r_universitas` VALUES ('2098', 'STISIP Petta Baringeng Soppeng');
INSERT INTO `tbl_r_universitas` VALUES ('2099', 'Akademi Kebidanan St Benedicta Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('2100', 'Sekolah Tinggi Ilmu Ekonomi Muara Teweh');
INSERT INTO `tbl_r_universitas` VALUES ('2101', 'Sekolah Tinggi Teknologi Yupentek');
INSERT INTO `tbl_r_universitas` VALUES ('2102', 'Universitas Agung Podomoro');
INSERT INTO `tbl_r_universitas` VALUES ('2103', 'Sekolah Tinggi Ilmu Manajemen');
INSERT INTO `tbl_r_universitas` VALUES ('2104', 'STMIK Bina Mulya');
INSERT INTO `tbl_r_universitas` VALUES ('2105', 'Sekolah Tinggi Ilmu Kesehatan Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('2106', 'Akademi Analis Farmasi Al-Islam');
INSERT INTO `tbl_r_universitas` VALUES ('2107', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Kalianda');
INSERT INTO `tbl_r_universitas` VALUES ('2108', 'Akademi Sekretari Dan Manajemen Lepisi');
INSERT INTO `tbl_r_universitas` VALUES ('2109', 'Sekolah Tinggi Ilmu Ekonomi Al-Washliyah');
INSERT INTO `tbl_r_universitas` VALUES ('2110', 'Akademi Keperawatan RS DGI Cikini');
INSERT INTO `tbl_r_universitas` VALUES ('2111', 'Akademi Telekomunikasi Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('2112', 'Akademi Keperawatan Garuda Putih Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('2113', 'STIKES Purna Bhakti Husada Batusangkar');
INSERT INTO `tbl_r_universitas` VALUES ('2114', 'Sekolah Tinggi Teknologi Mineral Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2115', 'STIBA Indonesia LPI');
INSERT INTO `tbl_r_universitas` VALUES ('2116', 'Sekolah Tinggi Ilmu Ekonomi Dharma Nasional Jember');
INSERT INTO `tbl_r_universitas` VALUES ('2117', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Tuban');
INSERT INTO `tbl_r_universitas` VALUES ('2118', 'Sekolah Tinggi Ilmu Pertanian Mujahidin Toli-toli');
INSERT INTO `tbl_r_universitas` VALUES ('2119', 'STMIK Putera Batam');
INSERT INTO `tbl_r_universitas` VALUES ('2120', 'ASMI Airlangga Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('2121', 'Akademi Keperawatan Andalusia Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2122', 'STMIK Eresha');
INSERT INTO `tbl_r_universitas` VALUES ('2123', 'Sekolah Tinggi Ilmu Ekonomi Pariwisata Satya Widya');
INSERT INTO `tbl_r_universitas` VALUES ('2124', 'Sekolah Tinggi Teknologi Nurul Jadid');
INSERT INTO `tbl_r_universitas` VALUES ('2125', 'Sekolah Tinggi Ilmu Administrasi Al Gazali Soppeng');
INSERT INTO `tbl_r_universitas` VALUES ('2126', 'Sekolah Tinggi Ilmu Kesehatan Maharani');
INSERT INTO `tbl_r_universitas` VALUES ('2127', 'Sekolah Tinggi Teknologi Indonesia Tanjung Pinang');
INSERT INTO `tbl_r_universitas` VALUES ('2128', 'Sekolah Tinggi Ilmu Pertanian Yashafa');
INSERT INTO `tbl_r_universitas` VALUES ('2129', 'Akademi Seni Dan Desain Indonesia Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2130', 'Akademi Kebidanan Jakarta Mitra Sejahtera');
INSERT INTO `tbl_r_universitas` VALUES ('2131', 'Akademi Kebidanan Jayakarta Sehat');
INSERT INTO `tbl_r_universitas` VALUES ('2132', 'STIKES Husada Borneo');
INSERT INTO `tbl_r_universitas` VALUES ('2133', 'AKPER Tenaga Pembangunan Arjuna Laguboti');
INSERT INTO `tbl_r_universitas` VALUES ('2134', 'Akademi Teknik Indonesia Cut Meutia');
INSERT INTO `tbl_r_universitas` VALUES ('2135', 'AMIK Mahaputra Riau');
INSERT INTO `tbl_r_universitas` VALUES ('2136', 'STIKES  Lakipadada');
INSERT INTO `tbl_r_universitas` VALUES ('2137', 'STKIP Tapanuli Selatan');
INSERT INTO `tbl_r_universitas` VALUES ('2138', 'Sekolah Tinggi Ilmu Ekonomi Indragiri Rengat');
INSERT INTO `tbl_r_universitas` VALUES ('2139', 'STIKES Perintis Padang');
INSERT INTO `tbl_r_universitas` VALUES ('2140', 'Sekolah Tinggi Teknologi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2141', 'Akademi Kebidanan Sapta Karya');
INSERT INTO `tbl_r_universitas` VALUES ('2142', 'Sekolah Tinggi Ilmu Ekonomi Eka Prasetya');
INSERT INTO `tbl_r_universitas` VALUES ('2143', 'STMIK IKMI Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('2144', 'Politeknik Muhammadiyah Tegal');
INSERT INTO `tbl_r_universitas` VALUES ('2145', 'AMIK Citra Buana Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2146', 'Sekolah Tinggi Ilmu Kesehatan Harapan Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2147', 'Sekolah Tinggi Ilmu Administrasi Lancang Kuning');
INSERT INTO `tbl_r_universitas` VALUES ('2148', 'Akademi Kebidanan Harapan Ibu Langsa');
INSERT INTO `tbl_r_universitas` VALUES ('2149', 'STIKES Aisyah Pringsewu');
INSERT INTO `tbl_r_universitas` VALUES ('2150', 'AMIK Stiekom Sumatera Utara');
INSERT INTO `tbl_r_universitas` VALUES ('2151', 'Sekolah Tinggi Ilmu Ekonomi Tri Dharma Widya');
INSERT INTO `tbl_r_universitas` VALUES ('2152', 'Akademi Keperawatan  Abulyatama');
INSERT INTO `tbl_r_universitas` VALUES ('2153', 'Akademi Kesehatan Lingkungan Muhammadiyah Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2154', 'Politeknik Kesehatan RS Dr Soepraoen Kesdam V');
INSERT INTO `tbl_r_universitas` VALUES ('2155', 'Sekolah Tinggi Bahasa Asing IEC Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2156', 'STIPER Sawahlunto Sijunjung');
INSERT INTO `tbl_r_universitas` VALUES ('2157', 'Akademi Keperawatan Muhammadiyah Kendal');
INSERT INTO `tbl_r_universitas` VALUES ('2158', 'Akademi Kebidanan Duta Dharma Pati');
INSERT INTO `tbl_r_universitas` VALUES ('2159', 'Universitas  Karimun');
INSERT INTO `tbl_r_universitas` VALUES ('2160', 'Akademi Kebidanan Singkawang');
INSERT INTO `tbl_r_universitas` VALUES ('2161', 'Sekolah Tinggi Filsafat Theologi S Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2162', 'Akademi Manajemen Perusahaan Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2163', 'Akademi Keperawatan Hafshawaty Zainul Hasan');
INSERT INTO `tbl_r_universitas` VALUES ('2164', 'AMIK Ibnu Khaldum Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('2165', 'STMIK Dian Cipta Cendikia Kotabumi');
INSERT INTO `tbl_r_universitas` VALUES ('2166', 'Akademi Keperawatan Aisyiyah Padang');
INSERT INTO `tbl_r_universitas` VALUES ('2167', 'Politeknik Unggulan Sragen');
INSERT INTO `tbl_r_universitas` VALUES ('2168', 'IKIP PGRI Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('2169', 'Sekolah Tinggi Ilmu Komputer PGRI Banyuwangi');
INSERT INTO `tbl_r_universitas` VALUES ('2170', 'Akademi Kebidanan Pondok Pesantren Assanadiyah');
INSERT INTO `tbl_r_universitas` VALUES ('2171', 'Akademi Maritim Maluku');
INSERT INTO `tbl_r_universitas` VALUES ('2172', 'Politeknik Kesehatan Permata Indonesia Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2173', 'Universitas  Timor');
INSERT INTO `tbl_r_universitas` VALUES ('2174', 'STIKES Bina Bangsa Kuala Simpang');
INSERT INTO `tbl_r_universitas` VALUES ('2175', 'STMIK MIC Cikarang');
INSERT INTO `tbl_r_universitas` VALUES ('2176', 'STKIP Adzkia');
INSERT INTO `tbl_r_universitas` VALUES ('2177', 'Sekolah Tinggi Ilmu Ekonomi Gici');
INSERT INTO `tbl_r_universitas` VALUES ('2178', 'Universitas  Kaltara');
INSERT INTO `tbl_r_universitas` VALUES ('2179', 'Akademi Keperawatan Dharma Insan Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('2180', 'Akademi Farmasi Kusuma Husada Purwokerto');
INSERT INTO `tbl_r_universitas` VALUES ('2181', 'Institut Teknologi Budi Utomo');
INSERT INTO `tbl_r_universitas` VALUES ('2182', 'Universitas  Efarina');
INSERT INTO `tbl_r_universitas` VALUES ('2183', 'AKTEK Radiodiagnostik & Terapi Citra Intan Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2184', 'Sekolah Tinggi Ilmu Ekonomi Pioner Manado');
INSERT INTO `tbl_r_universitas` VALUES ('2185', 'Sekolah Tinggi Ilmu Ekonomi Aprin');
INSERT INTO `tbl_r_universitas` VALUES ('2186', 'STMIK Jayakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2187', 'Institut Teknologi Sains Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2188', 'STIKES Dr. Soebandi Jember');
INSERT INTO `tbl_r_universitas` VALUES ('2189', 'Akademi Keperawatan As-Syafi iyah');
INSERT INTO `tbl_r_universitas` VALUES ('2190', 'Akademi Manajemen Administrasi YPK Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2191', 'Sekolah Tinggi Ilmu Ekonomi Al-Khairiyah');
INSERT INTO `tbl_r_universitas` VALUES ('2192', 'Akademi Kebidanan Salma');
INSERT INTO `tbl_r_universitas` VALUES ('2193', 'Akademi Keperawatan Intan Martapura');
INSERT INTO `tbl_r_universitas` VALUES ('2194', 'Akademi Keperawatan Gunung Maria');
INSERT INTO `tbl_r_universitas` VALUES ('2195', 'Akademi Kebidanan YAPKESBI Banjarbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2196', 'STIKES RSU Daya Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2197', 'Akademi Teknik Gigi YLPTK Padang');
INSERT INTO `tbl_r_universitas` VALUES ('2198', 'Sekolah Tinggi Ilmu Ekonomi Yapti Jeneponto');
INSERT INTO `tbl_r_universitas` VALUES ('2199', 'Akademi Kesehatan Swakarsa Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2200', 'Sekolah Tinggi Ilmu Kesehatan Baramuli');
INSERT INTO `tbl_r_universitas` VALUES ('2201', 'STMIK Jabar');
INSERT INTO `tbl_r_universitas` VALUES ('2202', 'Sekolah Tinggi Ilmu Ekonomi Gotong Royong');
INSERT INTO `tbl_r_universitas` VALUES ('2203', 'Universitas  Purwakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2204', 'Akademi Kebidanan Nurul Hasanah');
INSERT INTO `tbl_r_universitas` VALUES ('2205', 'Akademi Kebidanan Jember');
INSERT INTO `tbl_r_universitas` VALUES ('2206', 'AMIK Wira Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2207', 'Sekolah Tinggi Ilmu Bahasa Banten Raya');
INSERT INTO `tbl_r_universitas` VALUES ('2208', 'STISIP Syamsul Ulun');
INSERT INTO `tbl_r_universitas` VALUES ('2209', 'Sekolah Tinggi Ilmu Komputer Ambon');
INSERT INTO `tbl_r_universitas` VALUES ('2210', 'Sekolah Tinggi Ilmu Ekonomi ITMI Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2211', 'AMIK Andalan Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2212', 'Politeknik Indonesia Venezuela');
INSERT INTO `tbl_r_universitas` VALUES ('2213', 'Universitas  Mahasaraswati Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('2214', 'Universitas  Sutomo');
INSERT INTO `tbl_r_universitas` VALUES ('2215', 'Akademi Bahasa Asing Harapan Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2216', 'Sekolah Tinggi Bahasa Asing Methodist');
INSERT INTO `tbl_r_universitas` VALUES ('2217', 'Universitas  Surapati');
INSERT INTO `tbl_r_universitas` VALUES ('2218', 'Akademi Refraksi Optisi dan Optometry Gapopin');
INSERT INTO `tbl_r_universitas` VALUES ('2219', 'Sekolah Tinggi Ilmu Ekonomi Pertiwi');
INSERT INTO `tbl_r_universitas` VALUES ('2220', 'Sekolah Tinggi Ilmu Ekonomi Pemuda');
INSERT INTO `tbl_r_universitas` VALUES ('2221', 'STIKES Graha Edukasi');
INSERT INTO `tbl_r_universitas` VALUES ('2222', 'Sekolah Tinggi Bahasa Asing Yunisla Bandar Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('2223', 'Akademi Kebidanan Bhakti Nugraha');
INSERT INTO `tbl_r_universitas` VALUES ('2224', 'STMIK Mikar');
INSERT INTO `tbl_r_universitas` VALUES ('2225', 'STKIP Doktor Nugroho Magetan');
INSERT INTO `tbl_r_universitas` VALUES ('2226', 'Akademi Keperawatan Al-Hikmah Brebes');
INSERT INTO `tbl_r_universitas` VALUES ('2227', 'Akademi Keperawatan Arta Kaban Jahe');
INSERT INTO `tbl_r_universitas` VALUES ('2228', 'Akademi Kebidanan An-Nur Husada Walisongo');
INSERT INTO `tbl_r_universitas` VALUES ('2229', 'STMIK Indonesia Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('2230', 'Akademi Kebidanan YPDR');
INSERT INTO `tbl_r_universitas` VALUES ('2231', 'Sekolah Tinggi Manajemen Resiko Dan Asuransi');
INSERT INTO `tbl_r_universitas` VALUES ('2232', 'STIE YBPK Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('2233', 'Sekolah Tinggi Ilmu Ekonomi Satu Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('2234', 'STKIP PGRI Metro');
INSERT INTO `tbl_r_universitas` VALUES ('2235', 'Universitas Teknologi Sulawesi');
INSERT INTO `tbl_r_universitas` VALUES ('2236', 'Sekolah Tinggi Ilmu Komunikasi Profesi Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2237', 'Akademi Farmasi Mahadhika');
INSERT INTO `tbl_r_universitas` VALUES ('2238', 'Sekolah Tinggi Ilmu Kesehatan Permata Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2239', 'Akademi Kebidanan Bakti Indonesia Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('2240', 'Akademi Kebidanan Darmais Padangsidimpuan');
INSERT INTO `tbl_r_universitas` VALUES ('2241', 'Politeknik Sawunggalih Aji');
INSERT INTO `tbl_r_universitas` VALUES ('2242', 'AMIK Widya Loka Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2243', 'Sekolah Tinggi Ilmu Ekonomi Swadaya Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2244', 'Politeknik Negeri Indramayu');
INSERT INTO `tbl_r_universitas` VALUES ('2245', 'Sekolah Tinggi Ilmu Pertanian Labuhan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('2246', 'Akademi Bahasa Asing Dian Cipta Cendikia Kotabumi');
INSERT INTO `tbl_r_universitas` VALUES ('2247', 'Sekolah Tinggi Ilmu Ekonomi Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('2248', 'Akademi Teknologi Lorena');
INSERT INTO `tbl_r_universitas` VALUES ('2249', 'Sekolah Tinggi Bahasa Asing Swadaya Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2250', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2251', 'Sekolah Tinggi Ilmu Hukum Nias Selatan');
INSERT INTO `tbl_r_universitas` VALUES ('2252', 'Akademi Kebidanan Langkat');
INSERT INTO `tbl_r_universitas` VALUES ('2253', 'STKIP Labuhan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('2254', 'STIE Akuntansi Dan Bisnis Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('2255', 'Akademi Bahasa Asing YIPK Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2256', 'Politeknik Negeri Cilacap');
INSERT INTO `tbl_r_universitas` VALUES ('2257', 'Akademi Keperawatan Bas Balimbangan Pematang Siantar');
INSERT INTO `tbl_r_universitas` VALUES ('2258', 'Politeknik Profesional Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('2259', 'Akademi Kebidanan Abdurahman');
INSERT INTO `tbl_r_universitas` VALUES ('2260', 'Akademi Kebidanan Hasarma Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2261', 'Sekolah Tinggi Teknik Graha Kirana');
INSERT INTO `tbl_r_universitas` VALUES ('2262', 'Sekolah Tinggi Ilmu Ekonomi Budi Pertiwi');
INSERT INTO `tbl_r_universitas` VALUES ('2263', 'Sekolah Tinggi Ilmu Hukum Dharma Andhiga');
INSERT INTO `tbl_r_universitas` VALUES ('2264', 'Akademi Perikanan Wachyuni Mandira');
INSERT INTO `tbl_r_universitas` VALUES ('2265', 'Universitas Al-washliyah Labuhan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('2266', 'Akademi Pariwisata Gsp Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('2267', 'Akademi Kebidanan Ika Bina Labuhan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('2268', 'Politeknik  Yanada');
INSERT INTO `tbl_r_universitas` VALUES ('2269', 'Akademi Keperawatan Antariksa');
INSERT INTO `tbl_r_universitas` VALUES ('2270', 'Akademi Keuangan dan Bisnis Indonesia Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('2271', 'Sekolah Tinggi Bahasa Asing Technocrat');
INSERT INTO `tbl_r_universitas` VALUES ('2272', 'STMIK YMI Tegal');
INSERT INTO `tbl_r_universitas` VALUES ('2273', 'STMIK Jakarta Institute Of Technology');
INSERT INTO `tbl_r_universitas` VALUES ('2274', 'Sekolah Tinggi Ilmu Ekonomi Prabumulih');
INSERT INTO `tbl_r_universitas` VALUES ('2275', 'STKIP Muhammadiyah  Pagaralam');
INSERT INTO `tbl_r_universitas` VALUES ('2276', 'Akademi Kebidanan Kudus');
INSERT INTO `tbl_r_universitas` VALUES ('2277', 'S.T. Manajemen Bisnis Multi Sarana Manajemen Administrasi dan Rekayasa Teknologi');
INSERT INTO `tbl_r_universitas` VALUES ('2278', 'Sekolah Tinggi Ilmu Hukum Muhammadiyah Kisaran');
INSERT INTO `tbl_r_universitas` VALUES ('2279', 'Akademi Farmasi IKIFA');
INSERT INTO `tbl_r_universitas` VALUES ('2280', 'Sekolah Tinggi Ilmu Ekonomi Yapman Majene');
INSERT INTO `tbl_r_universitas` VALUES ('2281', 'Universitas Lintas Internasional Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2282', 'Akademi Keuangan Dan Perbankan YPK');
INSERT INTO `tbl_r_universitas` VALUES ('2283', 'STKIP Pelita Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2284', 'Akademi Akuntansi Unggulan SMB Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('2285', 'Sekolah Tinggi Ilmu Ekonomi Serasan Muara Enim');
INSERT INTO `tbl_r_universitas` VALUES ('2286', 'Akademi Bahasa Asing YPKK Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('2287', 'Sekolah Tinggi Manajemen Yaksi');
INSERT INTO `tbl_r_universitas` VALUES ('2288', 'STIKES  Muhammadiyah  Tasikmalaya');
INSERT INTO `tbl_r_universitas` VALUES ('2289', 'Sekolah Tinggi Ilmu Ekonomi Riama');
INSERT INTO `tbl_r_universitas` VALUES ('2290', 'STIKES Syuhada di Padangsidimpuan');
INSERT INTO `tbl_r_universitas` VALUES ('2291', 'Akademi Kholisatur Rahmi');
INSERT INTO `tbl_r_universitas` VALUES ('2292', 'Akademi Kebidanan Sehat Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2293', 'Akademi Kebidanan Eunice Rajawali Binjai');
INSERT INTO `tbl_r_universitas` VALUES ('2294', 'Akademi Analis Kesehatan Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('2295', 'Akademi Keperawatan Sapta Karya');
INSERT INTO `tbl_r_universitas` VALUES ('2296', 'Akademi Keperawatan Al Ma Arif');
INSERT INTO `tbl_r_universitas` VALUES ('2297', 'Politeknik YPPB Belitang');
INSERT INTO `tbl_r_universitas` VALUES ('2298', 'Politeknik Muara Dua');
INSERT INTO `tbl_r_universitas` VALUES ('2299', 'Sekolah Tinggi Manajemen Imni');
INSERT INTO `tbl_r_universitas` VALUES ('2300', 'Sekolah Tinggi Ilmu Ekonomi Santa Ursula');
INSERT INTO `tbl_r_universitas` VALUES ('2301', 'Sekolah Tinggi Ilmu Kesehatan Sismadi');
INSERT INTO `tbl_r_universitas` VALUES ('2302', 'STIKES Kharisma Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2303', 'Sekolah Tinggi Ilmu Ekonomi BPKP');
INSERT INTO `tbl_r_universitas` VALUES ('2304', 'STIKES Mitra Keluarga');
INSERT INTO `tbl_r_universitas` VALUES ('2305', 'Akademi Bahasa Asing Santa Ursula');
INSERT INTO `tbl_r_universitas` VALUES ('2306', 'Akademi Akuntansi Bentara Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2307', 'Akademi Kebidanan Yayasan Rumah Sakit Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2308', 'Akademi Keperawatan Yayasan Dharma Bhakti Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2309', 'Politeknik Tugu Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2310', 'Sekolah Tinggi Teknologi Mutu Muhammadiyah');
INSERT INTO `tbl_r_universitas` VALUES ('2311', 'STMIK Subang');
INSERT INTO `tbl_r_universitas` VALUES ('2312', 'Sekolah Tinggi Ilmu Ekonomi Stmy');
INSERT INTO `tbl_r_universitas` VALUES ('2313', 'Sekolah Tinggi Ilmu Teknik Bina Putra');
INSERT INTO `tbl_r_universitas` VALUES ('2314', 'Sekolah Tinggi Teknologi Pratama Adi');
INSERT INTO `tbl_r_universitas` VALUES ('2315', 'STKIP Banten');
INSERT INTO `tbl_r_universitas` VALUES ('2316', 'Sekolah Tinggi Teknologi Muhammadiyah Karawang');
INSERT INTO `tbl_r_universitas` VALUES ('2317', 'STKIP Muhammadiyah Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('2318', 'STKIP Muhammadiyah Kuningan');
INSERT INTO `tbl_r_universitas` VALUES ('2319', 'Sekolah Tinggi Ilmu Hukum Painan');
INSERT INTO `tbl_r_universitas` VALUES ('2320', 'Akademi Sekretari Dan Manajemen Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('2321', 'Akademi Sekretari Dan Manajemen Kencana Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2322', 'Akademi Maritim Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('2323', 'Akademi Kesenian Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('2324', 'Akademi Sekretari Dan Manajemen Tunas Harapan');
INSERT INTO `tbl_r_universitas` VALUES ('2325', 'Akademi  Telekomunikasi  Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2326', 'Akademi Kebidanan Bina Husada Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('2327', 'Akademi Kebidanan Salsabila');
INSERT INTO `tbl_r_universitas` VALUES ('2328', 'Akademi Kebidanan Tri Dharma Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2329', 'Akademi Kebidanan Cianjur');
INSERT INTO `tbl_r_universitas` VALUES ('2330', 'Akademi Refraksi Optisi Polycore Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2331', 'Akademi Kebidanan Bhakti Mitra Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2332', 'Akademi Perdagangan Catur Insan Cendekia');
INSERT INTO `tbl_r_universitas` VALUES ('2333', 'Politeknik Manufaktur Igasa Pindad');
INSERT INTO `tbl_r_universitas` VALUES ('2334', 'Politeknik  Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('2335', 'Politeknik Tunas Pemuda');
INSERT INTO `tbl_r_universitas` VALUES ('2336', 'STMIK Pelita Nusantara Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2337', 'Akademi Kesejahteraan Sosial Tarakanita');
INSERT INTO `tbl_r_universitas` VALUES ('2338', 'Akademi Keuangan Dan Perbankan YIPK');
INSERT INTO `tbl_r_universitas` VALUES ('2339', 'Akademi Sekretari Dan Manajemen Indonesia Bantul');
INSERT INTO `tbl_r_universitas` VALUES ('2340', 'Akademi Perikanan Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2341', 'Akademi Seni Rupa Dan Desain Akseri');
INSERT INTO `tbl_r_universitas` VALUES ('2342', 'STIKES Paguwarmas Maos');
INSERT INTO `tbl_r_universitas` VALUES ('2343', 'Akademi Keuangan Perbankan Widya Buana');
INSERT INTO `tbl_r_universitas` VALUES ('2344', 'Akademi Kesehatan Asih Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2345', 'Akademi Teknik Elektro Medik');
INSERT INTO `tbl_r_universitas` VALUES ('2346', 'AMIK BSI Tegal');
INSERT INTO `tbl_r_universitas` VALUES ('2347', 'Politeknik Jawa Dwipa');
INSERT INTO `tbl_r_universitas` VALUES ('2348', 'Politeknik  Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2349', 'Universitas Kahuripan Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('2350', 'Universitas Darussalam Gontor');
INSERT INTO `tbl_r_universitas` VALUES ('2351', 'Universitas  Wahidiyah');
INSERT INTO `tbl_r_universitas` VALUES ('2352', 'Institut Sains Dan Teknologi Palapa');
INSERT INTO `tbl_r_universitas` VALUES ('2353', 'STKIP Tri Bhuwana');
INSERT INTO `tbl_r_universitas` VALUES ('2354', 'Sekolah Tinggi Ilmu Ekonomi Nganjuk');
INSERT INTO `tbl_r_universitas` VALUES ('2355', 'Sekolah Tinggi Teknik Widya Darma');
INSERT INTO `tbl_r_universitas` VALUES ('2356', 'STIKES Bhakti Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('2357', 'STKIP Al Hikmah Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('2358', 'Akademi Pariwisata 17 Agustus 1945 Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('2359', 'Akademi Keperawatan Kosgoro Mojokerto');
INSERT INTO `tbl_r_universitas` VALUES ('2360', 'Akademi Kuliner dan Patiseri Ottimmo Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('2361', 'Sekolah Tinggi Ilmu Teknologi Kelautan');
INSERT INTO `tbl_r_universitas` VALUES ('2362', 'STKIP Taman Siswa Bima');
INSERT INTO `tbl_r_universitas` VALUES ('2363', 'STIKES Wira Medika Bali');
INSERT INTO `tbl_r_universitas` VALUES ('2364', 'STKIP Indonesia Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('2365', 'STIKES Hamzar Memben Lombok Timur');
INSERT INTO `tbl_r_universitas` VALUES ('2366', 'STKIP Nusa Bunga Floresta');
INSERT INTO `tbl_r_universitas` VALUES ('2367', 'Akademi Keuangan Dan Perbankan Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('2368', 'Akademi Teknik Bima');
INSERT INTO `tbl_r_universitas` VALUES ('2369', 'Akademi Bahasa Asing New Media');
INSERT INTO `tbl_r_universitas` VALUES ('2370', 'Politeknik Nasional Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('2371', 'Sekolah Tinggi Ilmu Hukum Al Gazali Soppeng');
INSERT INTO `tbl_r_universitas` VALUES ('2372', 'Sekolah Tinggi Ilmu Farmasi Pelita Mas');
INSERT INTO `tbl_r_universitas` VALUES ('2373', 'Sekolah Tinggi Teknologi Dirgantara Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2374', 'Sekolah Tinggi Ilmu Ekonomi Mujahidin');
INSERT INTO `tbl_r_universitas` VALUES ('2375', 'Sekolah Tinggi Ilmu Pariwisata Tamalatea Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2376', 'STKIP Darud Da wah Wal Irsyad Pinrang');
INSERT INTO `tbl_r_universitas` VALUES ('2377', 'Sekolah Tinggi Ilmu Kesehatan St Fatimah');
INSERT INTO `tbl_r_universitas` VALUES ('2378', 'Sekolah Tinggi Ilmu Hukum dan HAM');
INSERT INTO `tbl_r_universitas` VALUES ('2379', 'Sekolah Tinggi Bisnis dan Manajemen Dua Saudara');
INSERT INTO `tbl_r_universitas` VALUES ('2380', 'Sekolah Tinggi Ilmu Kesehatan Salewangan Maros');
INSERT INTO `tbl_r_universitas` VALUES ('2381', 'Akademi Pariwisata YPAG Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2382', 'Akademi Maritim Indonesia Bitung');
INSERT INTO `tbl_r_universitas` VALUES ('2383', 'Akademi Keuangan Perbankan Tahuna');
INSERT INTO `tbl_r_universitas` VALUES ('2384', 'Akademi Sekretari Manajemen Amsir Pare-Pare');
INSERT INTO `tbl_r_universitas` VALUES ('2385', 'Akademi Manajemen Informatika Dan Komputer Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2386', 'AMIK Tomakaka');
INSERT INTO `tbl_r_universitas` VALUES ('2387', 'Akademi Parawisata Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2388', 'Akademi Keperawatan Putra Pertiwi');
INSERT INTO `tbl_r_universitas` VALUES ('2389', 'Akademi Kebidanan Bakti Nusantara Rantepao');
INSERT INTO `tbl_r_universitas` VALUES ('2390', 'Akademi Analis Kesehatan Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2391', 'AKPER Putra Pertiwi Watansoppeng');
INSERT INTO `tbl_r_universitas` VALUES ('2392', 'Akademi Kebidanan Andi Makkasau');
INSERT INTO `tbl_r_universitas` VALUES ('2393', 'Akademi Kebidanan Inau');
INSERT INTO `tbl_r_universitas` VALUES ('2394', 'Akademi Kebidanan Masamba');
INSERT INTO `tbl_r_universitas` VALUES ('2395', 'Akademi Kebidanan Pelamonia Kesdam VIIWirabuana');
INSERT INTO `tbl_r_universitas` VALUES ('2396', 'Akademi Keperawatan Bala Keselamatan');
INSERT INTO `tbl_r_universitas` VALUES ('2397', 'AKPER Mappa Oudang Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2398', 'Politeknik Internasional Indonesia Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2399', 'STKIP Muhammadiyah Sungai Penuh');
INSERT INTO `tbl_r_universitas` VALUES ('2400', 'STIKES Piala Sakti Pariaman');
INSERT INTO `tbl_r_universitas` VALUES ('2401', 'Sekolah Tinggi Ilmu Ekonomi Cakrawala');
INSERT INTO `tbl_r_universitas` VALUES ('2402', 'STIE Widyaswara Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2403', 'STIE Prakarti Mulya');
INSERT INTO `tbl_r_universitas` VALUES ('2404', 'STIA Indragiri');
INSERT INTO `tbl_r_universitas` VALUES ('2405', 'STKIP Pesisir Selatan');
INSERT INTO `tbl_r_universitas` VALUES ('2406', 'Akademi Pariwisata Engku Putri Hamidah');
INSERT INTO `tbl_r_universitas` VALUES ('2407', 'Akademi Sekretari Dan Manajemen Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('2408', 'Akademi Teknik Adikarya');
INSERT INTO `tbl_r_universitas` VALUES ('2409', 'Akademi Telekomunikasi Indonesia Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('2410', 'AMIK Depati Parbo Kerinci');
INSERT INTO `tbl_r_universitas` VALUES ('2411', 'Akademi Kebidanan Internasional Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2412', 'Akademi Manajemen Informatika Dan Komputer Gici');
INSERT INTO `tbl_r_universitas` VALUES ('2413', 'Akademi Akuntansi Permata Harapan Batam');
INSERT INTO `tbl_r_universitas` VALUES ('2414', 'Akademi Kebidanan Satu Enam Lima');
INSERT INTO `tbl_r_universitas` VALUES ('2415', 'Akademi Kesehatan John Paul II Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2416', 'Sekolah Tinggi Bahasa Asing Dinamik');
INSERT INTO `tbl_r_universitas` VALUES ('2417', 'STIPER Muhammadiyah Tanah Grogot');
INSERT INTO `tbl_r_universitas` VALUES ('2418', 'Sekolah Tinggi Ilmu Bahasa Asing Palangka Raya');
INSERT INTO `tbl_r_universitas` VALUES ('2419', 'Sekolah Tinggi Ilmu Ekonomi Tanjung Selor');
INSERT INTO `tbl_r_universitas` VALUES ('2420', 'STIKES Wiyata Husada Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('2421', 'STKIP  Singkawang');
INSERT INTO `tbl_r_universitas` VALUES ('2422', 'Akademi Manajemen Koperasi Barabai');
INSERT INTO `tbl_r_universitas` VALUES ('2423', 'ASMI KMPI Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('2424', 'Akademi Pariwisata Nasional Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('2425', 'Akademi Maritim Nusantara Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('2426', 'Akademi Sekretari Indonesia Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('2427', 'Akademi Agrobisnis Bumi Sebalo');
INSERT INTO `tbl_r_universitas` VALUES ('2428', 'Akademi Kebidanan Betang Asi Raya');
INSERT INTO `tbl_r_universitas` VALUES ('2429', 'Akademi Kebidanan Mutiara Mahakam');
INSERT INTO `tbl_r_universitas` VALUES ('2430', 'Akademi Kebidanan Banjarbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2431', 'Akademi Keperawatan Kesdam VI/Tanjung Pura');
INSERT INTO `tbl_r_universitas` VALUES ('2432', 'Universitas Pasifik Morotai');
INSERT INTO `tbl_r_universitas` VALUES ('2433', 'Akademi Kebidanan Gatra Buana Gurabati Tidore');
INSERT INTO `tbl_r_universitas` VALUES ('2434', 'Sekolah Tinggi Ilmu Hukum Muhammadiyah Takengon');
INSERT INTO `tbl_r_universitas` VALUES ('2435', 'Sekolah Tinggi Ilmu Manajemen Indonesia Meulaboh');
INSERT INTO `tbl_r_universitas` VALUES ('2436', 'STKIP  Al-Washliyah');
INSERT INTO `tbl_r_universitas` VALUES ('2437', 'Sekolah Tinggi Ilmu Kesehatan Langsa');
INSERT INTO `tbl_r_universitas` VALUES ('2438', 'STIKES Darussalam  Lhokseumawe');
INSERT INTO `tbl_r_universitas` VALUES ('2439', 'STKIP Muhammadiyah Aceh Barat Daya');
INSERT INTO `tbl_r_universitas` VALUES ('2440', 'Akademi Sekretari Manajemen Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2441', 'Akademi Keuangan Perbankan Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2442', 'Akademi Maritim Nusantara Malahayati');
INSERT INTO `tbl_r_universitas` VALUES ('2443', 'Akademi Kebidanan Public Health Medical Nursing');
INSERT INTO `tbl_r_universitas` VALUES ('2444', 'Akademi Kebidanan Medica Bakti Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2445', 'Akademi Kebidanan Gayo Lues');
INSERT INTO `tbl_r_universitas` VALUES ('2446', 'Akademi Kesehatan Lingkungan Jabal Ghafur');
INSERT INTO `tbl_r_universitas` VALUES ('2447', 'Akademi Keperawatan Jabal Ghafur');
INSERT INTO `tbl_r_universitas` VALUES ('2448', 'STKIP Kristen Wamena');
INSERT INTO `tbl_r_universitas` VALUES ('2449', 'STISIPOL Yaleka Maro');
INSERT INTO `tbl_r_universitas` VALUES ('2450', 'STISIP Amal Ilmiah Yapis Wamena');
INSERT INTO `tbl_r_universitas` VALUES ('2451', 'Akademi Sekretari Dan Manajemen Indonesia Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('2452', 'Sekolah Tinggi Ilmu Administrasi Amuntai');
INSERT INTO `tbl_r_universitas` VALUES ('2453', 'Akademi Manajemen Informatika Dan Komputer Taruna');
INSERT INTO `tbl_r_universitas` VALUES ('2454', 'Akademi Kebidanan Islam Al-hikmah');
INSERT INTO `tbl_r_universitas` VALUES ('2455', 'Akademi Analis Kesehatan Theresiana');
INSERT INTO `tbl_r_universitas` VALUES ('2456', 'STIKES Wijaya Husada Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('2457', 'Politeknik Negeri Banyuwangi');
INSERT INTO `tbl_r_universitas` VALUES ('2458', 'Universitas Sultan Fatah');
INSERT INTO `tbl_r_universitas` VALUES ('2459', 'Sekolah Tinggi Ilmu Pertanian Berau');
INSERT INTO `tbl_r_universitas` VALUES ('2460', 'AMIK Tri Dharma Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2461', 'STISIP Nurdin Hamzah');
INSERT INTO `tbl_r_universitas` VALUES ('2462', 'Akademi Kebidanan Cipta Daya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2463', 'Universitas  Antakusuma');
INSERT INTO `tbl_r_universitas` VALUES ('2464', 'Sekolah Tinggi Farmasi YPIB Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('2465', 'STMIK  Palcomtech');
INSERT INTO `tbl_r_universitas` VALUES ('2466', 'STIE Bumi Persada Lhokseumawe');
INSERT INTO `tbl_r_universitas` VALUES ('2467', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Kisaran');
INSERT INTO `tbl_r_universitas` VALUES ('2468', 'AMIK Catur Sakti Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2469', 'Sekolah Tinggi Ilmu Ekonomi Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('2470', 'Universitas  Kebangsaan');
INSERT INTO `tbl_r_universitas` VALUES ('2471', 'Akademi Kebidanan Medica Obgin');
INSERT INTO `tbl_r_universitas` VALUES ('2472', 'Akademi Akuntansi Effendi Harahap');
INSERT INTO `tbl_r_universitas` VALUES ('2473', 'STBA Haji Agus Salim');
INSERT INTO `tbl_r_universitas` VALUES ('2474', 'Akademi Kebidanan Persada Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('2475', 'Akademi Keperawatan Pasar Rebo Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2476', 'STKIP Barus Tapanuli Tengah');
INSERT INTO `tbl_r_universitas` VALUES ('2477', 'Universitas Pejuang Republik Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2478', 'Politeknik Kesehatan Bhakti Pertiwi Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2479', 'STIKES Santa Elisabeth Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2480', 'Sekolah Tinggi Ilmu Ekonomi Pemnas Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2481', 'Akademi Kebidanan Wahana Husada Bandar Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('2482', 'Sekolah Tinggi Ilmu Administrasi Sandikta');
INSERT INTO `tbl_r_universitas` VALUES ('2483', 'Akademi Kebidanan Wijaya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2484', 'Sekolah Tinggi Ilmu Ekonomi Bina Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2485', 'Sekolah Tinggi Ilmu Manajemen dan Ilmu Komputer ESQ');
INSERT INTO `tbl_r_universitas` VALUES ('2486', 'STIE Pembangunan Tanjungpinang');
INSERT INTO `tbl_r_universitas` VALUES ('2487', 'Sekolah Tinggi Ilmu Administrasi Saumlaki');
INSERT INTO `tbl_r_universitas` VALUES ('2488', 'Sekolah Tinggi Ilmu Kesehatan Banten');
INSERT INTO `tbl_r_universitas` VALUES ('2489', 'Sekolah Tinggi Pertanian Kewirausahaan Banau');
INSERT INTO `tbl_r_universitas` VALUES ('2490', 'Politeknik Bina Budaya Cipta');
INSERT INTO `tbl_r_universitas` VALUES ('2491', 'Sekolah Tinggi Teknologi Pagaralam');
INSERT INTO `tbl_r_universitas` VALUES ('2492', 'STKIP Muhammadiyah Lumajang');
INSERT INTO `tbl_r_universitas` VALUES ('2493', 'Sekolah Tinggi Ilmu Kesehatan Ceria Buana');
INSERT INTO `tbl_r_universitas` VALUES ('2494', 'Sekolah Tinggi Ilmu Kesehatan Al Ma arif');
INSERT INTO `tbl_r_universitas` VALUES ('2495', 'AKPER Gita Matura Abadi Kisaran');
INSERT INTO `tbl_r_universitas` VALUES ('2496', 'AMIK Lamappapoleonro Soppeng');
INSERT INTO `tbl_r_universitas` VALUES ('2497', 'Akademi Keperawatan YPIB Majalengka');
INSERT INTO `tbl_r_universitas` VALUES ('2498', 'Akademi Analis Kesehatan Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2499', 'Universitas  Pancasakti');
INSERT INTO `tbl_r_universitas` VALUES ('2500', 'STMIK WIT Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('2501', 'Akademi Kebidanan Hafsyah Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2502', 'Universitas Megou Pak Tulang Bawang');
INSERT INTO `tbl_r_universitas` VALUES ('2503', 'Politeknik 17 Agustus 1945 Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('2504', 'Akademi Keperawatan Royhan');
INSERT INTO `tbl_r_universitas` VALUES ('2505', 'Akademi Kebidanan Graha Husada Sampang');
INSERT INTO `tbl_r_universitas` VALUES ('2506', 'Akademi Gizi Andalusia');
INSERT INTO `tbl_r_universitas` VALUES ('2507', 'Sekolah Tinggi Teknologi Geusan Ulun');
INSERT INTO `tbl_r_universitas` VALUES ('2508', 'Sekolah Tinggi Ilmu Kesehatan Karimun');
INSERT INTO `tbl_r_universitas` VALUES ('2509', 'Sekolah Tinggi Bahasa Asing Mentari Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('2510', 'STISIP Imam Bonjol');
INSERT INTO `tbl_r_universitas` VALUES ('2511', 'STIKES Faathir Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2512', 'STMIK Denpasar');
INSERT INTO `tbl_r_universitas` VALUES ('2513', 'Akademi Kebidanan Ar-Rum Salatiga');
INSERT INTO `tbl_r_universitas` VALUES ('2514', 'Akademi Keperawatan YPSBR Muara Bulian');
INSERT INTO `tbl_r_universitas` VALUES ('2515', 'Sekolah Tinggi Kesehatan Indonesia Wirautama');
INSERT INTO `tbl_r_universitas` VALUES ('2516', 'Sekolah Tinggi Kesehatan Imelda Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2517', 'Sekolah Tinggi Ilmu Kesehatan Duta Gama Klaten');
INSERT INTO `tbl_r_universitas` VALUES ('2518', 'Sekolah Tinggi Ilmu Ekonomi Widya Jayakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2519', 'Universitas Hasyim Asy\'ari Tebuireng Jombang');
INSERT INTO `tbl_r_universitas` VALUES ('2520', 'Akademi Pariwisata Petrus Kafiar Biak');
INSERT INTO `tbl_r_universitas` VALUES ('2521', 'Sekolah Tinggi Ilmu Ekonomi Enam Enam Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2522', 'Politeknik  Pusmanu');
INSERT INTO `tbl_r_universitas` VALUES ('2523', 'STKIP Bima');
INSERT INTO `tbl_r_universitas` VALUES ('2524', 'Politeknik Negeri Tanah Laut');
INSERT INTO `tbl_r_universitas` VALUES ('2525', 'STIKES Mega Buana Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('2526', 'Sekolah Tinggi Ilmu Bahasa Asing Invada');
INSERT INTO `tbl_r_universitas` VALUES ('2527', 'STMIK Pranata Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2528', 'Akademi Kesehatan Arga Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2529', 'STIKES Dian Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2530', 'Akademi Kebidanan Mayapada Gading Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2531', 'Sekolah Tinggi Ilmu Ekonomi Pelita Buana');
INSERT INTO `tbl_r_universitas` VALUES ('2532', 'Akademi Sekretari Manajemen Indonesia Pontianak');
INSERT INTO `tbl_r_universitas` VALUES ('2533', 'Akademi Keperawatan Malahayati Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2534', 'Akademi Keperawatan Kesdam Iskandar Muda Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('2535', 'Universitas Gunung Leuser Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('2536', 'Sekolah Tinggi Ilmu Ekonomi Bulungan Tarakan');
INSERT INTO `tbl_r_universitas` VALUES ('2537', 'Sekolah Tinggi Teknologi Dumai');
INSERT INTO `tbl_r_universitas` VALUES ('2538', 'Akademi Teknologi Aeronautika Siliwangi');
INSERT INTO `tbl_r_universitas` VALUES ('2539', 'STIKES Bhakti Al-Qodiri');
INSERT INTO `tbl_r_universitas` VALUES ('2540', 'Sekolah Tinggi Ilmu Ekonomi Dharma Barata Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2541', 'Akademi Bisnis Internasional Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('2542', 'Sekolah Tinggi Teknologi Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2543', 'Akademi Kebidanan Deli Husada Delitua Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2544', 'Universitas Sembilanbelas November Kolaka');
INSERT INTO `tbl_r_universitas` VALUES ('2545', 'Politeknik  Kotabaru');
INSERT INTO `tbl_r_universitas` VALUES ('2546', 'Akademi Kebidanan Sungailiat Bangka');
INSERT INTO `tbl_r_universitas` VALUES ('2547', 'Universitas Informatika Dan Bisnis Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2548', 'Politeknik Tonggak Equator');
INSERT INTO `tbl_r_universitas` VALUES ('2549', 'STIKES Cut Nyak Dhien Langsa');
INSERT INTO `tbl_r_universitas` VALUES ('2550', 'Akademi Keperawatan Harum');
INSERT INTO `tbl_r_universitas` VALUES ('2551', 'Akademi Kebidanan Harapan Mama Deli Serdang');
INSERT INTO `tbl_r_universitas` VALUES ('2552', 'Akademi Kuliner Monas Pasifik');
INSERT INTO `tbl_r_universitas` VALUES ('2553', 'Akademi Kimia Analis Caraka Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2554', 'Sekolah Tinggi Ilmu Ekonomi Kalpataru');
INSERT INTO `tbl_r_universitas` VALUES ('2555', 'STKIP Purnama');
INSERT INTO `tbl_r_universitas` VALUES ('2556', 'Akademi Perdagangan Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2557', 'Politeknik  Hasnur');
INSERT INTO `tbl_r_universitas` VALUES ('2558', 'STISIP Swadaya');
INSERT INTO `tbl_r_universitas` VALUES ('2559', 'Universitas Nahdlatul Ulama Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('2560', 'Akademi Teknik Elektromedik Muhammadiyah Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2561', 'Akademi Kebidanan Bhakti Kencana');
INSERT INTO `tbl_r_universitas` VALUES ('2562', 'Akademi Manajemen Belitung');
INSERT INTO `tbl_r_universitas` VALUES ('2563', 'STMIK  Banjarbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2564', 'Akademi Maritim Suaka Bahari');
INSERT INTO `tbl_r_universitas` VALUES ('2565', 'Akademi Keperawatan Dharma Husada Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('2566', 'Sekolah Tinggi Desain Indonesia Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2567', 'Akademi Sekretari Manajemen Indonesia Lpi Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2568', 'STISIP Bunda Tanah Melayu');
INSERT INTO `tbl_r_universitas` VALUES ('2569', 'Sekolah Tinggi Desain Bali');
INSERT INTO `tbl_r_universitas` VALUES ('2570', 'STMIK Hang Tuah Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2571', 'Akademi Kebidanan Bhakti Putra Bangsa Purworejo');
INSERT INTO `tbl_r_universitas` VALUES ('2572', 'Sekolah Tinggi Ilmu Kesehatan Jayakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2573', 'AMIK Mikenium Kolaka');
INSERT INTO `tbl_r_universitas` VALUES ('2574', 'STIKES  Muhammadiyah  Lhokseumawe');
INSERT INTO `tbl_r_universitas` VALUES ('2575', 'Akademi Kebidanan Batari Toja');
INSERT INTO `tbl_r_universitas` VALUES ('2576', 'STMIK Nurdin Hamzah');
INSERT INTO `tbl_r_universitas` VALUES ('2577', 'STIMIK Tunas Bangsa Banjarnegara');
INSERT INTO `tbl_r_universitas` VALUES ('2578', 'Akademi Akuntansi Profesional Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2579', 'Sekolah Tinggi Ilmu Administrasi Darul Rahman Tual');
INSERT INTO `tbl_r_universitas` VALUES ('2580', 'STKIP Mega Rezky');
INSERT INTO `tbl_r_universitas` VALUES ('2581', 'Sekolah Tinggi Ilmu Ekonomi Koperasi Malang');
INSERT INTO `tbl_r_universitas` VALUES ('2582', 'Politeknik Dharma Patria');
INSERT INTO `tbl_r_universitas` VALUES ('2583', 'Akademi Bahasa Asing Saint Mary');
INSERT INTO `tbl_r_universitas` VALUES ('2584', 'Akademi Bahasa Asing Prawira Marta Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2585', 'STKIP Situs Banten di Serang');
INSERT INTO `tbl_r_universitas` VALUES ('2586', 'Universitas KH. A. Wahab Hasbullah');
INSERT INTO `tbl_r_universitas` VALUES ('2587', 'Akademi Keperawatan Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('2588', 'Akademi Kebisanan Medika Sri Tamiang');
INSERT INTO `tbl_r_universitas` VALUES ('2589', 'Akademi Pariwisata 45 Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('2590', 'Akademi Kebidanan Bakti Inang Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2591', 'STIKES Medika Seramoe Barat');
INSERT INTO `tbl_r_universitas` VALUES ('2592', 'STKIP Pamane Talino');
INSERT INTO `tbl_r_universitas` VALUES ('2593', 'Sekolah Tinggi Ilmu Kesehatan Kendedes');
INSERT INTO `tbl_r_universitas` VALUES ('2594', 'STIKES  Banyuwangi');
INSERT INTO `tbl_r_universitas` VALUES ('2595', 'Sekolah Tinggi Teknologi Jawa Barat');
INSERT INTO `tbl_r_universitas` VALUES ('2596', 'Universitas  Tridharma');
INSERT INTO `tbl_r_universitas` VALUES ('2597', 'Sekolah Tinggi Ilmu Hukum Damarica Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('2598', 'Akademi Kebidanan Nyai Ahmad Dahlan');
INSERT INTO `tbl_r_universitas` VALUES ('2599', 'STMIK Surya Intan');
INSERT INTO `tbl_r_universitas` VALUES ('2600', 'Universitas Muhammadiyah Tapanuli Selatan');
INSERT INTO `tbl_r_universitas` VALUES ('2601', 'Sekolah Tinggi Ilmu Ekonomi Widya Praja');
INSERT INTO `tbl_r_universitas` VALUES ('2602', 'Akademi Kebidanan Berlian Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2603', 'Sekolah Tinggi Ilmu Ekonomi Adhy Niaga');
INSERT INTO `tbl_r_universitas` VALUES ('2604', 'STIE Muhammadiyah Tanjung Redeb');
INSERT INTO `tbl_r_universitas` VALUES ('2605', 'Sekolah Tinggi Ilmu Kesehatan Yapika');
INSERT INTO `tbl_r_universitas` VALUES ('2606', 'Sekolah Tinggi Ilmu Kesehatan Harapan Ibu Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('2607', 'Akademi Bahasa Asing Dian Cipta Cendikia Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('2608', 'AMIK Mpu Tantular');
INSERT INTO `tbl_r_universitas` VALUES ('2609', 'Sekolah Tinggi Ilmu Ekonomi Artha Bodhi Iswara');
INSERT INTO `tbl_r_universitas` VALUES ('2610', 'STIE Pasim Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('2611', 'Universitas Teknologi Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('2612', 'Sekolah Tinggi Ilmu Ekonomi Tunas Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2613', 'Akademi Kebidanan Muhammadiyah Kotim');
INSERT INTO `tbl_r_universitas` VALUES ('2614', 'STKIP  Purwakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2615', 'Akademi Kebidanan Ar-Rahma Bangil');
INSERT INTO `tbl_r_universitas` VALUES ('2616', 'Akademi Kebidanan Husada Gemilang');
INSERT INTO `tbl_r_universitas` VALUES ('2617', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('2618', 'Akademi Keperawatan Yappi Sragen');
INSERT INTO `tbl_r_universitas` VALUES ('2619', 'STMIK ITMI Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2620', 'STISIP Pusaka Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2621', 'Sekolah Tinggi Ilmu Ekonomi Gempol');
INSERT INTO `tbl_r_universitas` VALUES ('2622', 'Sekolah Tinggi Ilmu Kesehatan Perdhaki Charitas');
INSERT INTO `tbl_r_universitas` VALUES ('2623', 'Sekolah Tinggi Ilmu Administrasi Pagaruyung');
INSERT INTO `tbl_r_universitas` VALUES ('2624', 'Akademi Kebidanan Al-Ikhlas Cisarua');
INSERT INTO `tbl_r_universitas` VALUES ('2625', 'Akademi Perikanan Baruna');
INSERT INTO `tbl_r_universitas` VALUES ('2626', 'STMIK Multicom Bolaan Mongondow');
INSERT INTO `tbl_r_universitas` VALUES ('2627', 'Sekolah Tinggi Ilmu Hukum Benteng Huraba');
INSERT INTO `tbl_r_universitas` VALUES ('2628', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Pringsewu');
INSERT INTO `tbl_r_universitas` VALUES ('2629', 'Sekolah Tinggi Seni Musik Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2630', 'Akademi Kebidanan Mitra Syuhada Padangsidimpuan');
INSERT INTO `tbl_r_universitas` VALUES ('2631', 'Sekolah Tinggi Ilmu Ekonomi Pasaman');
INSERT INTO `tbl_r_universitas` VALUES ('2632', 'Sekolah Tinggi Teknologi Texmaco');
INSERT INTO `tbl_r_universitas` VALUES ('2633', 'Sekolah Tinggi Teknologi Walisongo Gempol');
INSERT INTO `tbl_r_universitas` VALUES ('2634', 'Sekolah Tinggi Ilmu Kesehatan Abdi Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('2635', 'Akademi Keperawatan Bina Insani Sakti');
INSERT INTO `tbl_r_universitas` VALUES ('2636', 'STITEK Dharma Yadi Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2637', 'Akademi Farmasi Al-Ishlah Cilegon');
INSERT INTO `tbl_r_universitas` VALUES ('2638', 'Akademi Kebidanan Bakti Indonesia Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('2639', 'STMIK Yadika Bangil');
INSERT INTO `tbl_r_universitas` VALUES ('2640', 'Institut Kesenian Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2641', 'Akademi Analis Kimia Yapika Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2642', 'Akademi Kebidanan Harapan Keluarga');
INSERT INTO `tbl_r_universitas` VALUES ('2643', 'Sekolah Tinggi Ilmu Ekonomi Wibawa Karta Raharja');
INSERT INTO `tbl_r_universitas` VALUES ('2644', 'Universitas Pembangunan Nasional Veteran Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2645', 'Universitas Iqra Buru');
INSERT INTO `tbl_r_universitas` VALUES ('2646', 'Akademi Sekretari Dan Manajemen Santa Anna');
INSERT INTO `tbl_r_universitas` VALUES ('2647', 'Politeknik  Kampar');
INSERT INTO `tbl_r_universitas` VALUES ('2648', 'Sekolah Tinggi Ilmu Kesehatan Istara Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2649', 'Akademi Kebidanan Soko Tunggal');
INSERT INTO `tbl_r_universitas` VALUES ('2650', 'STIKES Tuanku Tambusai');
INSERT INTO `tbl_r_universitas` VALUES ('2651', 'AMIK Mitra Gama');
INSERT INTO `tbl_r_universitas` VALUES ('2652', 'Akademi Kebidanan Kutai Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2653', 'Politeknik NSC Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('2654', 'Sekolah Tinggi Ilmu Farmasi Bhakti Pertiwi');
INSERT INTO `tbl_r_universitas` VALUES ('2655', 'Akademi Perekam Medis Dan Infokes Bhumi Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2656', 'AKAFARMA Putra Indonesia Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('2657', 'Akademi Keperawatan RS Marthen Indey');
INSERT INTO `tbl_r_universitas` VALUES ('2658', 'Akademi Akuntansi Keuangan dan Perbankan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2659', 'Akademi Minyak Dan Gas Balongan');
INSERT INTO `tbl_r_universitas` VALUES ('2660', 'STIKES Mitra Husada Karanganyar');
INSERT INTO `tbl_r_universitas` VALUES ('2661', 'STMIK Ichsan');
INSERT INTO `tbl_r_universitas` VALUES ('2662', 'Sekolah Tinggi Olahraga Dan Kesehatan Bina Guna');
INSERT INTO `tbl_r_universitas` VALUES ('2663', 'Akademi Ilmu Gizi YPAG Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2664', 'STIBA Bumi Gora Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('2665', 'Akademi Farmasi Bhumi Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2666', 'Sekolah Tinggi Ilmu Ekonomi Ragam Tunas');
INSERT INTO `tbl_r_universitas` VALUES ('2667', 'Akademi Teknik Industri Immanuel');
INSERT INTO `tbl_r_universitas` VALUES ('2668', 'STISIP Muhammadiyah Madiun');
INSERT INTO `tbl_r_universitas` VALUES ('2669', 'Akademi Keperawatan Lapatau Bone');
INSERT INTO `tbl_r_universitas` VALUES ('2670', 'Akademi Kebidanan Pelita Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2671', 'Sekolah Tinggi Manajemen Industri Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2672', 'STIE IBMI Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2673', 'Universitas Kejuangan 45 Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2674', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Bina Mutiara');
INSERT INTO `tbl_r_universitas` VALUES ('2675', 'Akademi Kebidanan Wahana Sehat Sidoarjo');
INSERT INTO `tbl_r_universitas` VALUES ('2676', 'Akademi Kebidanan Surya Mandiri Kota Bima');
INSERT INTO `tbl_r_universitas` VALUES ('2677', 'Akademi Kebidanan Medica Bakti Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2678', 'Sekolah Tinggi Ilmu Perikanan Malang');
INSERT INTO `tbl_r_universitas` VALUES ('2679', 'STKIP PGRI Lamongan');
INSERT INTO `tbl_r_universitas` VALUES ('2680', 'STIE Muhammadiyah Paciran Lamongan');
INSERT INTO `tbl_r_universitas` VALUES ('2681', 'Sekolah Tinggi Hukum YNI');
INSERT INTO `tbl_r_universitas` VALUES ('2682', 'Akademi Kebidanan Bangka Belitung');
INSERT INTO `tbl_r_universitas` VALUES ('2683', 'Akademi Kebidanan Kesehatan Baru');
INSERT INTO `tbl_r_universitas` VALUES ('2684', 'STMIK Sepuluh Nopember Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('2685', 'Akademi Sekretari Dan Manajemen Saint Mary');
INSERT INTO `tbl_r_universitas` VALUES ('2686', 'STIKES Ganesha Husada Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('2687', 'Sekolah Tinggi Pariwisata Ars Internasional');
INSERT INTO `tbl_r_universitas` VALUES ('2688', 'Akademi Analis Kesehatan Harapan Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2689', 'Sekolah Tinggi Teknik Dharma Iswara');
INSERT INTO `tbl_r_universitas` VALUES ('2690', 'Sekolah Tinggi Teknologi Bina Tunggal');
INSERT INTO `tbl_r_universitas` VALUES ('2691', 'Akademi Kebidanan Sumber Kasih Enrekang');
INSERT INTO `tbl_r_universitas` VALUES ('2692', 'Akademi Kebidanan Aru');
INSERT INTO `tbl_r_universitas` VALUES ('2693', 'Akademi Manajemen Informatika Dan Komputer Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('2694', 'Sekolah Tinggi Ilmu Pertanian Wuna Raha');
INSERT INTO `tbl_r_universitas` VALUES ('2695', 'Sekolah Tinggi Ilmu Ekonomi Swadaya Manado');
INSERT INTO `tbl_r_universitas` VALUES ('2696', 'STIKES Sebelas April Sumedang');
INSERT INTO `tbl_r_universitas` VALUES ('2697', 'STMIK Patria Wacana');
INSERT INTO `tbl_r_universitas` VALUES ('2698', 'Sekolah Tinggi Teknik Bentara Persada Batam');
INSERT INTO `tbl_r_universitas` VALUES ('2699', 'Sekolah Tinggi Ilmu Ekonomi Bina Karya');
INSERT INTO `tbl_r_universitas` VALUES ('2700', 'Akademi Kebidanan Medica Putro Bungsu');
INSERT INTO `tbl_r_universitas` VALUES ('2701', 'Universitas  Pembangunan  Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2702', 'Sekolah Tinggi Teknik Pelita Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2703', 'Universitas Tulang Bawang');
INSERT INTO `tbl_r_universitas` VALUES ('2704', 'Sekolah Tinggi Ilmu Teknik Baramuli');
INSERT INTO `tbl_r_universitas` VALUES ('2705', 'Sekolah Tinggi Bahasa Asing Malang');
INSERT INTO `tbl_r_universitas` VALUES ('2706', 'Akademi Kebidanan Bina Sehat Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2707', 'Sekolah Tinggi Ilmu Administrasi Iskandar Thani');
INSERT INTO `tbl_r_universitas` VALUES ('2708', 'STKIP Yasika');
INSERT INTO `tbl_r_universitas` VALUES ('2709', 'Akademi Fisioterapi Widya Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2710', 'STIMIK Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('2711', 'Akademi Keperawatan Rumah Sakit Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2712', 'Akademi Manajemen Indonesia Semarang');
INSERT INTO `tbl_r_universitas` VALUES ('2713', 'Akademi Kebidanan Umi Bagan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('2714', 'STT  Hamzanwadi');
INSERT INTO `tbl_r_universitas` VALUES ('2715', 'STMIK Time');
INSERT INTO `tbl_r_universitas` VALUES ('2716', 'Sekolah Tinggi Ilmu Ekonomi Manajemen Rutu Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('2717', 'Sekolah Tinggi Teknologi Pomosda');
INSERT INTO `tbl_r_universitas` VALUES ('2718', 'Akademi Keperawatan Darmo Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2719', 'Akademi Akuntansi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2720', 'Sekolah Tinggi Pertanian Labuha');
INSERT INTO `tbl_r_universitas` VALUES ('2721', 'STKIP PGRI Manado');
INSERT INTO `tbl_r_universitas` VALUES ('2722', 'AMIK Labuhan Batu');
INSERT INTO `tbl_r_universitas` VALUES ('2723', 'STIKES Nauli Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2724', 'Akademi Keperawatan Dharma Husada Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2725', 'Akademi Pariwisata Eka Sakti');
INSERT INTO `tbl_r_universitas` VALUES ('2726', 'Akademi Farmasi Jember');
INSERT INTO `tbl_r_universitas` VALUES ('2727', 'Sekolah Tinggi Ilmu Kesehatan Pamentas');
INSERT INTO `tbl_r_universitas` VALUES ('2728', 'STKIP Majenang');
INSERT INTO `tbl_r_universitas` VALUES ('2729', 'Universitas Ma\'arif Nahdlatul Ulama Kebumen');
INSERT INTO `tbl_r_universitas` VALUES ('2730', 'Akademi Kebidanan Yaspen Tugu Ibu');
INSERT INTO `tbl_r_universitas` VALUES ('2731', 'Akademi Kebidanan Bunda Serumpun');
INSERT INTO `tbl_r_universitas` VALUES ('2732', 'Akademi Perpajakan Panca Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('2733', 'Akademi Fisioterapi YAB Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2734', 'AMIK PGRI Kebumen');
INSERT INTO `tbl_r_universitas` VALUES ('2735', 'Akademi Kesehatan Lingkungan Mandala Waluya');
INSERT INTO `tbl_r_universitas` VALUES ('2736', 'Akademi Manajemen Informatika & Komputer Universal');
INSERT INTO `tbl_r_universitas` VALUES ('2737', 'Akademi Kebidanan Bunga Kalimantan');
INSERT INTO `tbl_r_universitas` VALUES ('2738', 'Akademi Kebidanan Bhakti Pertiwi Pemalang');
INSERT INTO `tbl_r_universitas` VALUES ('2739', 'Akademi Perikanan Dan Ilmu Kelautan');
INSERT INTO `tbl_r_universitas` VALUES ('2740', 'Sekolah Tinggi Ilmu Kesehatan Bina Putra Banjar');
INSERT INTO `tbl_r_universitas` VALUES ('2741', 'Politeknik  Sendawar');
INSERT INTO `tbl_r_universitas` VALUES ('2742', 'STIKES Gema Insan Akademik');
INSERT INTO `tbl_r_universitas` VALUES ('2743', 'Sekolah Tinggi Ilmu Ekonomi Trianandra');
INSERT INTO `tbl_r_universitas` VALUES ('2744', 'Universitas Setia Budi Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('2745', 'Akademi Manajemen Informatika Dan Komputer YPAT');
INSERT INTO `tbl_r_universitas` VALUES ('2746', 'AMIK Yapenas Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2747', 'Institut Keguruan dan Teknologi Larantuka');
INSERT INTO `tbl_r_universitas` VALUES ('2748', 'Universitas Buddhi Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('2749', 'Universitas Islam Sumatera Barat');
INSERT INTO `tbl_r_universitas` VALUES ('2750', 'Sekolah Tinggi Ilmu Ekonomi Kuala Kapuas');
INSERT INTO `tbl_r_universitas` VALUES ('2751', 'STMIK Tidore Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('2752', 'Sekolah Tinggi Ilmu Komunikasi Internasional Gurindam Archipelago');
INSERT INTO `tbl_r_universitas` VALUES ('2753', 'Sekolah Tinggi Ilmu Pendidikan Bunga Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2754', 'Akademi Kebidanan Bunda Kotamobagu');
INSERT INTO `tbl_r_universitas` VALUES ('2755', 'STKIP Yapti Jeneponto');
INSERT INTO `tbl_r_universitas` VALUES ('2756', 'Institut Ilmu Kesehatan Bhakti Wiyata Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('2757', 'Politeknik Anika Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('2758', 'AMIK Veteran Purwokerto');
INSERT INTO `tbl_r_universitas` VALUES ('2759', 'Akademi Kebidanan Dharma Husada Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('2760', 'Akademi Sekretari Dan Manajemen Persada Bunda');
INSERT INTO `tbl_r_universitas` VALUES ('2761', 'STIE IBEK Pangkalpinang Bangka');
INSERT INTO `tbl_r_universitas` VALUES ('2762', 'STIKES Senior Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2763', 'STIKES Persada Husada Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2764', 'Akademi Keperawatan Al-Hambra Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2765', 'Akademi Teknik Nasional Sidoarjo');
INSERT INTO `tbl_r_universitas` VALUES ('2766', 'AMIK Mitra Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('2767', 'STIKES Maluku Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2768', 'Akademi Sekretari Manajemen Maria Goreti');
INSERT INTO `tbl_r_universitas` VALUES ('2769', 'Sekolah Tinggi Ilmu Ekonomi Budi Utomo Manado');
INSERT INTO `tbl_r_universitas` VALUES ('2770', 'Sekolah Tinggi Ilmu Administrasi Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('2771', 'STKIP Darud Da wah Wal Irsyad Mamuju');
INSERT INTO `tbl_r_universitas` VALUES ('2772', 'Sekolah Tinggi Ilmu Ekonomi Yapis');
INSERT INTO `tbl_r_universitas` VALUES ('2773', 'Sekolah Tinggi Ilmu Ekonomi Surya Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2774', 'Akademi Keperawatan Purna Bhakti Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2775', 'Akademi Seni Mangkunegaran Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2776', 'Sekolah Tinggi Ilmu Ekonomi Pariwisata');
INSERT INTO `tbl_r_universitas` VALUES ('2777', 'Apikes Iris');
INSERT INTO `tbl_r_universitas` VALUES ('2778', 'Akademi Kebidanan Yayasan Pendidikan Mona');
INSERT INTO `tbl_r_universitas` VALUES ('2779', 'Akademi Kebidanan Madina Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2780', 'Sekolah Tinggi Ilmu Kesehatan Holistik');
INSERT INTO `tbl_r_universitas` VALUES ('2781', 'Akademi Keperawatan Bethesda Serukam');
INSERT INTO `tbl_r_universitas` VALUES ('2782', 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Mamuju');
INSERT INTO `tbl_r_universitas` VALUES ('2783', 'STMIK Widya Utama');
INSERT INTO `tbl_r_universitas` VALUES ('2784', 'Akademi Teknik Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('2785', 'STIKES Aisyiyah Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('2786', 'Sekolah Tinggi Ilmu Perikanan Kalinyamat');
INSERT INTO `tbl_r_universitas` VALUES ('2787', 'STMIK Matuari');
INSERT INTO `tbl_r_universitas` VALUES ('2788', 'STMIK Catur Sakti Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2789', 'STIKES Bina Generasi Polewali Mandar');
INSERT INTO `tbl_r_universitas` VALUES ('2790', 'Sekolah Tinggi Hukum Indonesia Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2791', 'Sekolah Tinggi Ilmu Teknik Serasan');
INSERT INTO `tbl_r_universitas` VALUES ('2792', 'Akademi Keperawatan Teladan Bahagia');
INSERT INTO `tbl_r_universitas` VALUES ('2793', 'Sekolah Tinggi Ilmu Administrasi Bayuangga');
INSERT INTO `tbl_r_universitas` VALUES ('2794', 'Sekolah Tinggi Teknologi Muhammadiyah Kebumen');
INSERT INTO `tbl_r_universitas` VALUES ('2795', 'STKIP Soe');
INSERT INTO `tbl_r_universitas` VALUES ('2796', 'Akademi Keperawatan Sumber Waras');
INSERT INTO `tbl_r_universitas` VALUES ('2797', 'Sekolah Tinggi Ilmu Administrasi Prima');
INSERT INTO `tbl_r_universitas` VALUES ('2798', 'Akademi Kebidanan Dewi Maya');
INSERT INTO `tbl_r_universitas` VALUES ('2799', 'Sekolah Tinggi Ilmu Hukum Zainul Hasan');
INSERT INTO `tbl_r_universitas` VALUES ('2800', 'STIKES Andini Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2801', 'Akademi Keperawatan Malahayati Bandar Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('2802', 'Sekolah Tinggi Ilmu Ekonomi Ottow & Geissler Serui');
INSERT INTO `tbl_r_universitas` VALUES ('2803', 'Akademi Keperawatan Pemerintah Kab Purworejo');
INSERT INTO `tbl_r_universitas` VALUES ('2804', 'STKIP An-nur Nangro Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('2805', 'Akademi Kebidanan Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2806', 'STMIK Bina Nusantara Jaya Lubuk Linggau');
INSERT INTO `tbl_r_universitas` VALUES ('2807', 'Politeknik Negeri Madura');
INSERT INTO `tbl_r_universitas` VALUES ('2808', 'Sekolah Tinggi Ilmu Kesehatan Avicenna');
INSERT INTO `tbl_r_universitas` VALUES ('2809', 'STKIP Budi Daya');
INSERT INTO `tbl_r_universitas` VALUES ('2810', 'Politeknik St Wilhelmus');
INSERT INTO `tbl_r_universitas` VALUES ('2811', 'Akademi Keperawatan Kebonjati');
INSERT INTO `tbl_r_universitas` VALUES ('2812', 'Sekolah Tinggi Ilmu Sosial Mutiara');
INSERT INTO `tbl_r_universitas` VALUES ('2813', 'STIE Madani Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('2814', 'Universitas U\'budiyah Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2815', 'Sekolah Tinggi Ilmu Kesehatan Husada Jombang');
INSERT INTO `tbl_r_universitas` VALUES ('2816', 'Akademi Kebidanan Manna');
INSERT INTO `tbl_r_universitas` VALUES ('2817', 'STIKES Putra Abadi Langkat');
INSERT INTO `tbl_r_universitas` VALUES ('2818', 'Universitas Nusa Tenggara Barat');
INSERT INTO `tbl_r_universitas` VALUES ('2819', 'Sekolah Tinggi Ilmu Bahasa Asing Bumi Beringin');
INSERT INTO `tbl_r_universitas` VALUES ('2820', 'Sekolah Tinggi Ilmu Komunikasi Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('2821', 'STMIK Kharisma Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2822', 'Akademi Kebidanan Rangga Husada Prabumulih');
INSERT INTO `tbl_r_universitas` VALUES ('2823', 'Akademi Keperawatan PPNI Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2824', 'Akademi Keperawatan Kesdam I/Bukit Barisan Padang');
INSERT INTO `tbl_r_universitas` VALUES ('2825', 'Sekolah Tinggi Teknologi Indragiri');
INSERT INTO `tbl_r_universitas` VALUES ('2826', 'STIE Graha Karya Muara Bulian');
INSERT INTO `tbl_r_universitas` VALUES ('2827', 'Akademi Kebidanan Pelita Andalas');
INSERT INTO `tbl_r_universitas` VALUES ('2828', 'Sekolah Tinggi Ilmu Kesehatan Tamalatea Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2829', 'Universitas Ibnu Chaldun');
INSERT INTO `tbl_r_universitas` VALUES ('2830', 'STITEK Bina Taruna');
INSERT INTO `tbl_r_universitas` VALUES ('2831', 'Akademi Farmasi Yayasan Al-Fatah');
INSERT INTO `tbl_r_universitas` VALUES ('2832', 'Sekolah Tinggi Perikanan Dan Kelautan Palu');
INSERT INTO `tbl_r_universitas` VALUES ('2833', 'Akademi Kebidanan Nusantara Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('2834', 'Akademi Analis Farmasi dan Makanan 17 Agustus 1945');
INSERT INTO `tbl_r_universitas` VALUES ('2835', 'Akademi Keperawatan Yayasan Jalan Kimia');
INSERT INTO `tbl_r_universitas` VALUES ('2836', 'Sekolah Tinggi Ilmu Ekonomi Bisma Lepisi');
INSERT INTO `tbl_r_universitas` VALUES ('2837', 'Akademi Manajemen Perpajakan Indonesia Blitar');
INSERT INTO `tbl_r_universitas` VALUES ('2838', 'Sekolah Tinggi Ilmu Ekonomi Umel');
INSERT INTO `tbl_r_universitas` VALUES ('2839', 'Sekolah Tinggi Teknik Bina Cendikia');
INSERT INTO `tbl_r_universitas` VALUES ('2840', 'Akademi Kebidanan Bunga Bangsa Idi');
INSERT INTO `tbl_r_universitas` VALUES ('2841', 'Akademi Kebidanan Ibtisam Aulia');
INSERT INTO `tbl_r_universitas` VALUES ('2842', 'Akademi Keperawatan Rantepao');
INSERT INTO `tbl_r_universitas` VALUES ('2843', 'Akademi Keperawatan Kaltara Tarakan');
INSERT INTO `tbl_r_universitas` VALUES ('2844', 'AMIK Bukittinggi');
INSERT INTO `tbl_r_universitas` VALUES ('2845', 'Sekolah Tinggi Ilmu Ekonomi Triguna');
INSERT INTO `tbl_r_universitas` VALUES ('2846', 'Sekolah Tinggi Ilmu Pertanian Yapi Bone');
INSERT INTO `tbl_r_universitas` VALUES ('2847', 'Sekolah Tinggi Ilmu Hukum Swadaya');
INSERT INTO `tbl_r_universitas` VALUES ('2848', 'Politeknik Trijaya Krama');
INSERT INTO `tbl_r_universitas` VALUES ('2849', 'STIKESMAS  Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2850', 'Akademi Sekretari Triguna');
INSERT INTO `tbl_r_universitas` VALUES ('2851', 'Akademi Kebidanan Gema Nusantara Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('2852', 'Akademi Teknologi Otomotif Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('2853', 'Institut Sains Dan Teknologi Pembangunan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2854', 'Sekolah Tinggi Ilmu Hukum Cokroaminoto');
INSERT INTO `tbl_r_universitas` VALUES ('2855', 'STMIK Samudra Bitung');
INSERT INTO `tbl_r_universitas` VALUES ('2856', 'AMIK Milan Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2857', 'Akademi Ketalak Pelayaran Niagakeplb Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('2858', 'Akademi Keperawatan Yapi');
INSERT INTO `tbl_r_universitas` VALUES ('2859', 'STIPER Santo Thomas Aquinas Jayapura');
INSERT INTO `tbl_r_universitas` VALUES ('2860', 'Sekolah Tinggi Teknologi Migas');
INSERT INTO `tbl_r_universitas` VALUES ('2861', 'Universitas Veteran Republik Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2862', 'Akademi Kebidanan Palu Sulawesi Tengah');
INSERT INTO `tbl_r_universitas` VALUES ('2863', 'Politeknik Ganesa Guru');
INSERT INTO `tbl_r_universitas` VALUES ('2864', 'Sekolah Tinggi Teknologi Nusantara Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2865', 'Sekolah Tinggi Ilmu Manajemen dan Bisnis Gorontalo');
INSERT INTO `tbl_r_universitas` VALUES ('2866', 'Sekolah Tinggi Perikanan Sibolga');
INSERT INTO `tbl_r_universitas` VALUES ('2867', 'STIKESMAS Widya Dharma Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('2868', 'Akademi Kebidanan Alifa Pringsewu Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('2869', 'Sekolah Tinggi Ilmu Ekonomi YPHB');
INSERT INTO `tbl_r_universitas` VALUES ('2870', 'STMIK Bina Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('2871', 'Sekolah Tinggi Ilmu Hukum Al-hikmah');
INSERT INTO `tbl_r_universitas` VALUES ('2872', 'Sekolah Tinggi Pertanian Benteng Huraba');
INSERT INTO `tbl_r_universitas` VALUES ('2873', 'Sekolah Tinggi Teknologi Pelita Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2874', 'Akademi Keperawatan Sri Bunga Tanjung');
INSERT INTO `tbl_r_universitas` VALUES ('2875', 'Sekolah Tinggi Ilmu Kesehatan Karya Kesehatan');
INSERT INTO `tbl_r_universitas` VALUES ('2876', 'Akademi Sekretari Manajemen Tanah Rencong');
INSERT INTO `tbl_r_universitas` VALUES ('2877', 'Sekolah Tinggi Bahasa Asing Widya Dharma Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('2878', 'Akademi Kebidanan Audi Husada Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2879', 'Akademi Radiognostik Dan Radioterapi Yapenpernus');
INSERT INTO `tbl_r_universitas` VALUES ('2880', 'Sekolah Tinggi Psikologi Yogyakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2881', 'Akademi Kebidanan Palapa Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2882', 'Sekolah Tinggi Ilmu Ekonomi Tri Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('2883', 'Sekolah Tinggi Ilmu Kesehatan Papua');
INSERT INTO `tbl_r_universitas` VALUES ('2884', 'AMIK Umel Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('2885', 'STISIPOL  Mujahidin');
INSERT INTO `tbl_r_universitas` VALUES ('2886', 'Apikes Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('2887', 'Akademi Kebidanan Perwira Husada Purwokerto');
INSERT INTO `tbl_r_universitas` VALUES ('2888', 'Akademi Keperawatan Krida Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2889', 'Politeknik Perdamaian Halmahera');
INSERT INTO `tbl_r_universitas` VALUES ('2890', 'Akademi Kebidanan Nadira');
INSERT INTO `tbl_r_universitas` VALUES ('2891', 'Universitas Sisingamangaraja XII Tapanuli Utara');
INSERT INTO `tbl_r_universitas` VALUES ('2892', 'Universitas Teuku Umar');
INSERT INTO `tbl_r_universitas` VALUES ('2893', 'Akademi Kebidanan Permata Delima');
INSERT INTO `tbl_r_universitas` VALUES ('2894', 'Akademi Keperawatan Harapan Mama Deli Serdang');
INSERT INTO `tbl_r_universitas` VALUES ('2895', 'Politeknik Ma arif');
INSERT INTO `tbl_r_universitas` VALUES ('2896', 'Politeknik  Amamapare');
INSERT INTO `tbl_r_universitas` VALUES ('2897', 'STKIP Persada Khatulistiwa Sintang');
INSERT INTO `tbl_r_universitas` VALUES ('2898', 'Akademi Kebidanan Namira Kotanopan');
INSERT INTO `tbl_r_universitas` VALUES ('2899', 'Akademi Kebidanan Yaleka Maro Merauke');
INSERT INTO `tbl_r_universitas` VALUES ('2900', 'Sekolah Tinggi Teknik Iskandar Thani');
INSERT INTO `tbl_r_universitas` VALUES ('2901', 'Politeknik Kridatama Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('2902', 'Akademi Kebidanan Abdi Persada Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('2903', 'Politeknik  Krakatau');
INSERT INTO `tbl_r_universitas` VALUES ('2904', 'Sekolah Tinggi Ilmu Ekonomi Widya Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2905', 'Sekolah Tinggi Ilmu Ekonomi Penguji Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('2906', 'Universitas Tribuana Kalabahi');
INSERT INTO `tbl_r_universitas` VALUES ('2907', 'Akademi Kebidanan Sayid Sabiq Indramayu');
INSERT INTO `tbl_r_universitas` VALUES ('2908', 'Akademi Keperawatan RSU FK-UKI');
INSERT INTO `tbl_r_universitas` VALUES ('2909', 'Sekolah Tinggi Teknologi Telematika Cakrawala');
INSERT INTO `tbl_r_universitas` VALUES ('2910', 'Akademi Akupunktur Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('2911', 'STKIP Cokroaminoto Pinrang');
INSERT INTO `tbl_r_universitas` VALUES ('2912', 'Akademi Kebidanan Laksamana');
INSERT INTO `tbl_r_universitas` VALUES ('2913', 'Sekolah Tinggi Ilmu Kehutanan Pante Kulu');
INSERT INTO `tbl_r_universitas` VALUES ('2914', 'Akademi Akuntansi Trinitas Sorong');
INSERT INTO `tbl_r_universitas` VALUES ('2915', 'Sekolah Tinggi Teknologi 10 November');
INSERT INTO `tbl_r_universitas` VALUES ('2916', 'Politeknik  Muhammadiyah  Pekalongan');
INSERT INTO `tbl_r_universitas` VALUES ('2917', 'Politeknik Sains & Teknologi Wiratama Maluku Utara');
INSERT INTO `tbl_r_universitas` VALUES ('2918', 'STKIP Paris Barantai');
INSERT INTO `tbl_r_universitas` VALUES ('2919', 'Akademi Kebidanan Paluta Husada');
INSERT INTO `tbl_r_universitas` VALUES ('2920', 'Akademik Teknik Otomotif Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('2921', 'Sekolah Tinggi Ilmu Administrasi Madani');
INSERT INTO `tbl_r_universitas` VALUES ('2922', 'STIKES Citra Husada Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('2923', 'Sekolah Tinggi Ilmu Kesehatan Mahardika Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('2924', 'Sekolah Tinggi Ilmu Ekonomi Ichsan');
INSERT INTO `tbl_r_universitas` VALUES ('2925', 'Akademi Teknik Gigi Hang Tuah Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2926', 'Akademi Kebidanan Tunas Harapan Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2927', 'STIKES Mitra Bunda Persada');
INSERT INTO `tbl_r_universitas` VALUES ('2928', 'Politeknik PGRI Banten');
INSERT INTO `tbl_r_universitas` VALUES ('2929', 'Sekolah Tinggi Ilmu Ekonomi Nusantara Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2930', 'STIPSI Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('2931', 'Sekolah Tinggi Ilmu Administrasi Said Perintah');
INSERT INTO `tbl_r_universitas` VALUES ('2932', 'Akademi Teknik Piri');
INSERT INTO `tbl_r_universitas` VALUES ('2933', 'Akademi Kebidanan Mitra Sehat Sidoarjo');
INSERT INTO `tbl_r_universitas` VALUES ('2934', 'Politenik Kesehatan Yapkesbi Sukabumi');
INSERT INTO `tbl_r_universitas` VALUES ('2935', 'Akademi Keperawatan Hang Tuah Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('2936', 'Akademi Maritim Indonesia Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('2937', 'Sekolah Tinggi Ilmu Kesehatan Indonesia Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('2938', 'STKIP Pangeran Dharma Kusuma Segeran Juntinyuat Indramayu');
INSERT INTO `tbl_r_universitas` VALUES ('2939', 'Sekolah Tinggi Teknik Industri Turen');
INSERT INTO `tbl_r_universitas` VALUES ('2940', 'Sekolah Tinggi Ilmu Ekonomi Dwi Sakti Baturaja');
INSERT INTO `tbl_r_universitas` VALUES ('2941', 'Sekolah Tinggi Teknologi Dr Kh Ez Muttaqien');
INSERT INTO `tbl_r_universitas` VALUES ('2942', 'STKIP Nias Selatan');
INSERT INTO `tbl_r_universitas` VALUES ('2943', 'Akademi Kebidanan Medica Alas Leuser');
INSERT INTO `tbl_r_universitas` VALUES ('2944', 'Akademi Kebidanan Persada Wajo');
INSERT INTO `tbl_r_universitas` VALUES ('2945', 'Politeknik Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('2946', 'Sekolah Tinggi Teknik Lingkungan Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('2947', 'STIKES  Puangrimanggalatung');
INSERT INTO `tbl_r_universitas` VALUES ('2948', 'Akademi Kebidanan Gunung Sari Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('2949', 'Akademi Keperawatan Raflesia');
INSERT INTO `tbl_r_universitas` VALUES ('2950', 'Akademi Kebidanan Saleha');
INSERT INTO `tbl_r_universitas` VALUES ('2951', 'Politeknik  Stibisnis');
INSERT INTO `tbl_r_universitas` VALUES ('2952', 'STKIP Widyaswara Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2953', 'Akademi Keperawatan Totabuan Kotamobagu');
INSERT INTO `tbl_r_universitas` VALUES ('2954', 'STIKES Ichsan Medical Centre Bintaro');
INSERT INTO `tbl_r_universitas` VALUES ('2955', 'Universitas Nusa Lontar Rote');
INSERT INTO `tbl_r_universitas` VALUES ('2956', 'Sekolah Tinggi Ilmu Pertanian Rejang Lebong');
INSERT INTO `tbl_r_universitas` VALUES ('2957', 'Akademi Kebidanan Respati');
INSERT INTO `tbl_r_universitas` VALUES ('2958', 'Akademi Kebidanan YPBHK Brebes');
INSERT INTO `tbl_r_universitas` VALUES ('2959', 'Akademi Teknologi Pringsewu');
INSERT INTO `tbl_r_universitas` VALUES ('2960', 'Sekolah Tinggi Ilmu Kesehatan Fitrah Aldar');
INSERT INTO `tbl_r_universitas` VALUES ('2961', 'Akademi Kebidanan Kharisma Husada Binjai');
INSERT INTO `tbl_r_universitas` VALUES ('2962', 'Sekolah Tinggi Ilmu Ekonomi Islamiyah');
INSERT INTO `tbl_r_universitas` VALUES ('2963', 'STISIP Al Washliyah Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('2964', 'STIPSI Abdi Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('2965', 'Akademi Keperawatan Pemkab Tapanuli Utara');
INSERT INTO `tbl_r_universitas` VALUES ('2966', 'Akademi Pariwisata Widya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('2967', 'STIKES Insan Se Agung');
INSERT INTO `tbl_r_universitas` VALUES ('2968', 'Sekolah Tinggi Ilmu Ekonomi Saumlaki');
INSERT INTO `tbl_r_universitas` VALUES ('2969', 'Politeknik Bisnis Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2970', 'Sekolah Tinggi Ilmu Kesehatan Majapahit Singaraja');
INSERT INTO `tbl_r_universitas` VALUES ('2971', 'Politeknik Muara Teweh');
INSERT INTO `tbl_r_universitas` VALUES ('2972', 'Akademi Kebidanan Arta Kabanjahe');
INSERT INTO `tbl_r_universitas` VALUES ('2973', 'Akademi Kebidanan Matorkis');
INSERT INTO `tbl_r_universitas` VALUES ('2974', 'Akademi Akuntansi Muhammadiyah Klaten');
INSERT INTO `tbl_r_universitas` VALUES ('2975', 'Akademi Enterpreneurship Terang Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('2976', 'Sekolah Tinggi Teknik Mekongga Kolaka');
INSERT INTO `tbl_r_universitas` VALUES ('2977', 'Akademi Kebidanan Lapatau Bone');
INSERT INTO `tbl_r_universitas` VALUES ('2978', 'Universitas  Bondowoso');
INSERT INTO `tbl_r_universitas` VALUES ('2979', 'Akademi Kebidanan Panca Bhakti');
INSERT INTO `tbl_r_universitas` VALUES ('2980', 'Sekolah Tinggi Teknik Karawang');
INSERT INTO `tbl_r_universitas` VALUES ('2981', 'Akademi Kebidanan YYS Pendidikan Dr Rusdi Medan');
INSERT INTO `tbl_r_universitas` VALUES ('2982', 'Akademi Bahasa Asing Permata Hati Tarakan');
INSERT INTO `tbl_r_universitas` VALUES ('2983', 'Akademi Pariwisata Citra Buana Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2984', 'Universitas Timbul Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('2985', 'Universitas Teknologi Sumbawa');
INSERT INTO `tbl_r_universitas` VALUES ('2986', 'STMIK Bidakara');
INSERT INTO `tbl_r_universitas` VALUES ('2987', 'STMIK Sisingamangaraja XII');
INSERT INTO `tbl_r_universitas` VALUES ('2988', 'STIKES Kesetiakawanan Sosial Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('2989', 'Akademi Kebidanan Syekh Yusuf Gowa');
INSERT INTO `tbl_r_universitas` VALUES ('2990', 'Sekolah Tinggi Ilmu Administrasi Karya Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('2991', 'Akademi Manajemen Informatika Dan Komputer Yasika');
INSERT INTO `tbl_r_universitas` VALUES ('2992', 'AMIK Tri Dharma Palu');
INSERT INTO `tbl_r_universitas` VALUES ('2993', 'Akademi Keperawatan Yappkes Aceh Singkil');
INSERT INTO `tbl_r_universitas` VALUES ('2994', 'AMIK YMI Tegal');
INSERT INTO `tbl_r_universitas` VALUES ('2995', 'Akademi Keperawatan YPTK Solok');
INSERT INTO `tbl_r_universitas` VALUES ('2996', 'Akademi Kebidanan Putra Jaya Mandiri Batam');
INSERT INTO `tbl_r_universitas` VALUES ('2997', 'Akademi Fisioterapi Rumah Sakit Dustira');
INSERT INTO `tbl_r_universitas` VALUES ('2998', 'STKIP Suar Bangli');
INSERT INTO `tbl_r_universitas` VALUES ('2999', 'Politeknik  Halmahera');
INSERT INTO `tbl_r_universitas` VALUES ('3000', 'Akademi Refraksi Optisi Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('3001', 'Akademi Keperawatan YPPP Wonomulyo');
INSERT INTO `tbl_r_universitas` VALUES ('3002', 'STISIPOL Pahlawan 12');
INSERT INTO `tbl_r_universitas` VALUES ('3003', 'Akademi Teknik Pratama Makale');
INSERT INTO `tbl_r_universitas` VALUES ('3004', 'Sekolah Tinggi Farmasi Borneo Lestari');
INSERT INTO `tbl_r_universitas` VALUES ('3005', 'Sekolah Tinggi Ilmu Administrasi Langgur');
INSERT INTO `tbl_r_universitas` VALUES ('3006', 'Sekolah Tinggi Ilmu Kesehatan Halmahera');
INSERT INTO `tbl_r_universitas` VALUES ('3007', 'Universitas Bumi Hijrah Tidore');
INSERT INTO `tbl_r_universitas` VALUES ('3008', 'Akademi Sekretari Saint Theresia');
INSERT INTO `tbl_r_universitas` VALUES ('3009', 'Sekolah Tinggi Ilmu Hukum Kuala Kapuas');
INSERT INTO `tbl_r_universitas` VALUES ('3010', 'Akademi Kebidanan Adila');
INSERT INTO `tbl_r_universitas` VALUES ('3011', 'Akademi Kebidanan Bina Nusantara Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('3012', 'Akademi Farmasi Muhammadiyah Kabupaten Kuningan');
INSERT INTO `tbl_r_universitas` VALUES ('3013', 'Sekolah Tinggi Ilmu Ekonomi Y P Kampus');
INSERT INTO `tbl_r_universitas` VALUES ('3014', 'Akademi Kebidanan Bunga Bangsaku Bangka');
INSERT INTO `tbl_r_universitas` VALUES ('3015', 'Akademi Kebidanan Harapan Bunda Bima');
INSERT INTO `tbl_r_universitas` VALUES ('3016', 'Akademi Keperawatan Teungku Fakinah Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('3017', 'Akademi kebidanan Meuligoe Nur Amin');
INSERT INTO `tbl_r_universitas` VALUES ('3018', 'Akademi Kebidanan Bina Husada Tebing Tinggi');
INSERT INTO `tbl_r_universitas` VALUES ('3019', 'Universitas Nuku');
INSERT INTO `tbl_r_universitas` VALUES ('3020', 'Akademi Keuangan Dan Perbankan Effata Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('3021', 'STKIP Muhammadiyah  Manokwari');
INSERT INTO `tbl_r_universitas` VALUES ('3022', 'Politeknik Unisma Malang');
INSERT INTO `tbl_r_universitas` VALUES ('3023', 'Sekolah Tinggi Ilmu Ekonomi Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('3024', 'Akademi Pariwisata Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('3025', 'Akademi Keperawatan Deli Husada Delitua Medan');
INSERT INTO `tbl_r_universitas` VALUES ('3026', 'STMIK AKI Pati');
INSERT INTO `tbl_r_universitas` VALUES ('3027', 'Akademi Perpajakan Maria Mediatrix');
INSERT INTO `tbl_r_universitas` VALUES ('3028', 'Sekolah Tinggi Teknologi Industri Bontang');
INSERT INTO `tbl_r_universitas` VALUES ('3029', 'Akademi Perpajakan Padang (AKAP) Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('3030', 'STMIK Kharisma Karawang');
INSERT INTO `tbl_r_universitas` VALUES ('3031', 'Akademi Kebidanan Keluarga Bunda Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('3032', 'Sekolah Tinggi Ilmu Teknik Prabumulih');
INSERT INTO `tbl_r_universitas` VALUES ('3033', 'Sekolah Tinggi Ilmu Ekonomi Al-Hikmah');
INSERT INTO `tbl_r_universitas` VALUES ('3034', 'Sekolah Tinggi Ilmu Kesehatan Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('3035', 'STMIK  Prabumulih');
INSERT INTO `tbl_r_universitas` VALUES ('3036', 'Politeknik Pertanian Yasanto');
INSERT INTO `tbl_r_universitas` VALUES ('3037', 'Akademi Ilmu Komputer Ternate');
INSERT INTO `tbl_r_universitas` VALUES ('3038', 'Akademi Kebidanan Cipto Medan');
INSERT INTO `tbl_r_universitas` VALUES ('3039', 'Akademi Teknik Elektro Medik Binalita Sudama');
INSERT INTO `tbl_r_universitas` VALUES ('3040', 'Institut Teknologi Kalimantan');
INSERT INTO `tbl_r_universitas` VALUES ('3041', 'Politeknik Negeri Ketapang');
INSERT INTO `tbl_r_universitas` VALUES ('3042', 'Akademi Komunitas Negeri Aceh Barat');
INSERT INTO `tbl_r_universitas` VALUES ('3043', 'Akademi Manajemen Gunung Leuser');
INSERT INTO `tbl_r_universitas` VALUES ('3044', 'Politeknik Negeri Fakfak');
INSERT INTO `tbl_r_universitas` VALUES ('3045', 'Sekolah Tinggi Ilmu Kesehatan Binalita Sudama');
INSERT INTO `tbl_r_universitas` VALUES ('3046', 'Institut Seni Budaya Indonesia Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('3047', 'Akademi Sekretari Dan Manajemen Tunas Patria');
INSERT INTO `tbl_r_universitas` VALUES ('3048', 'Akademi Pertanian PGRI Wonosobo');
INSERT INTO `tbl_r_universitas` VALUES ('3049', 'Sekolah Tinggi Teknik Bima');
INSERT INTO `tbl_r_universitas` VALUES ('3050', 'Akademi Kebidanan Baruna Husada Sibuhuan');
INSERT INTO `tbl_r_universitas` VALUES ('3051', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Invada Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('3052', 'Akademi Pertanian Gunung Sitoli');
INSERT INTO `tbl_r_universitas` VALUES ('3053', 'Akademi Komunitas Negeri Pacitan');
INSERT INTO `tbl_r_universitas` VALUES ('3054', 'STIKES Siti Hajar');
INSERT INTO `tbl_r_universitas` VALUES ('3055', 'Institut Teknologi Sumatera');
INSERT INTO `tbl_r_universitas` VALUES ('3056', 'AMIK Tunas Patria');
INSERT INTO `tbl_r_universitas` VALUES ('3057', 'Akademi Teknologi Grafika Indonesia Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('3058', 'Akademi Maritim Belawan');
INSERT INTO `tbl_r_universitas` VALUES ('3059', 'Akademi Pertamanan Interstudi');
INSERT INTO `tbl_r_universitas` VALUES ('3060', 'Akademi Keperawatan Wirahusada Medan');
INSERT INTO `tbl_r_universitas` VALUES ('3061', 'Politeknik Gihon');
INSERT INTO `tbl_r_universitas` VALUES ('3062', 'Akademi Keperawatan UPN Veteran Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('3063', 'Akademi Sekretari Manajemen Lancang Kuning');
INSERT INTO `tbl_r_universitas` VALUES ('3064', 'Akademi Kesehatan Lingkungan Binalita Sudama');
INSERT INTO `tbl_r_universitas` VALUES ('3065', 'Politeknik Tugu 45 Medan');
INSERT INTO `tbl_r_universitas` VALUES ('3066', 'Akademi Keuangan Perbankan Swadaya Medan');
INSERT INTO `tbl_r_universitas` VALUES ('3067', 'STIKES Nurliana Medan');
INSERT INTO `tbl_r_universitas` VALUES ('3068', 'Sekolah Tinggi Ilmu Teknik Jembrana');
INSERT INTO `tbl_r_universitas` VALUES ('3069', 'Sekolah Tinggi Teknologi Kelautan Hatawana');
INSERT INTO `tbl_r_universitas` VALUES ('3070', 'Politeknik Meta Industri Cikarang');
INSERT INTO `tbl_r_universitas` VALUES ('3071', 'Akademi Pendidikan Kesehatan Talitakum');
INSERT INTO `tbl_r_universitas` VALUES ('3072', 'STIA Bala Putra Dewa');
INSERT INTO `tbl_r_universitas` VALUES ('3073', 'Akademi Fisioterapi Universitas Kristen Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3074', 'STIKES Sakinah Husada Tanjung Balai');
INSERT INTO `tbl_r_universitas` VALUES ('3075', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Al-Amin Indramayu');
INSERT INTO `tbl_r_universitas` VALUES ('3076', 'Politeknik Negeri Subang');
INSERT INTO `tbl_r_universitas` VALUES ('3077', 'Politeknik Soca');
INSERT INTO `tbl_r_universitas` VALUES ('3078', 'Akademi Bahasa Asing RA Kartini Surakarta');
INSERT INTO `tbl_r_universitas` VALUES ('3079', 'Sekolah Tinggi Ilmu Sosial Dan Ilmu Politik Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('3080', 'STIE IBMI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('3081', 'Politeknik Industri Dan Niaga Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('3082', 'STKIP Nahdlatul Ulama Indramayu');
INSERT INTO `tbl_r_universitas` VALUES ('3083', 'STKIP Citra Bina Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('3084', 'Sekolah Tinggi Manajemen Semen Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3085', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Kumala Lampung');
INSERT INTO `tbl_r_universitas` VALUES ('3086', 'Akademi Sekretari Dan Manajemen Pitaloka');
INSERT INTO `tbl_r_universitas` VALUES ('3087', 'Sekolah Tinggi Kelautan Dan Perikanan Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3088', 'Sekolah Tinggi Teknik Budi Utomo');
INSERT INTO `tbl_r_universitas` VALUES ('3089', 'STIKES Maranatha Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('3090', 'Akademi Akuntansi Artawiyata Indo-lpi');
INSERT INTO `tbl_r_universitas` VALUES ('3091', 'STMIK MBC Palembang');
INSERT INTO `tbl_r_universitas` VALUES ('3092', 'Sekolah Tinggi Ilmu Ekonomi Profesional Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3093', 'Akademi Komunikasi Radio Dan Televisi Hutama');
INSERT INTO `tbl_r_universitas` VALUES ('3094', 'Sekolah Tinggi Analis Kimia Cilegon');
INSERT INTO `tbl_r_universitas` VALUES ('3095', 'Akademi Komunitas Negeri Putra Sang Fajar Blitar');
INSERT INTO `tbl_r_universitas` VALUES ('3096', 'Sekolah Tinggi Ilmu Ekonomi Wira Bakti');
INSERT INTO `tbl_r_universitas` VALUES ('3097', 'Sekolah Tinggi Ilmu Ekonomi Tunas Patria');
INSERT INTO `tbl_r_universitas` VALUES ('3098', 'Akademi Bahasa Asing Kusuma Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('3099', 'Akademi Administrasi Kusuma Mandiri');
INSERT INTO `tbl_r_universitas` VALUES ('3100', 'Institut Seni Budaya Indonesia Tanah Papua');
INSERT INTO `tbl_r_universitas` VALUES ('3101', 'STIKOM Tunas Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('3102', 'STMIK Methodist Binjai');
INSERT INTO `tbl_r_universitas` VALUES ('3103', 'STIKES Darmais  Padangsidimpuan');
INSERT INTO `tbl_r_universitas` VALUES ('3104', 'Akademi Kebidanan Jaya Wijaya');
INSERT INTO `tbl_r_universitas` VALUES ('3105', 'Akademi Kebidanan Budi Mulia Medan');
INSERT INTO `tbl_r_universitas` VALUES ('3106', 'Akademi Kebidanan Delima');
INSERT INTO `tbl_r_universitas` VALUES ('3107', 'Akademi Keperawatan Medistra Lubuk Pakam');
INSERT INTO `tbl_r_universitas` VALUES ('3108', 'Akademi Kebidanan Medistra Lubuk Pakam');
INSERT INTO `tbl_r_universitas` VALUES ('3109', 'ATRO Yayasan Amal Sinar Bhakti Medan');
INSERT INTO `tbl_r_universitas` VALUES ('3110', 'STISIP Bina Marta');
INSERT INTO `tbl_r_universitas` VALUES ('3111', 'STKIP Tunas Palapa');
INSERT INTO `tbl_r_universitas` VALUES ('3112', 'AMIK Dian Cipta Cendikia Pringsewu');
INSERT INTO `tbl_r_universitas` VALUES ('3113', 'Akademi Keperawatan Pembina');
INSERT INTO `tbl_r_universitas` VALUES ('3114', 'Politeknik Gajah Sakti');
INSERT INTO `tbl_r_universitas` VALUES ('3115', 'Politeknik  Sekayu');
INSERT INTO `tbl_r_universitas` VALUES ('3116', 'Politeknik Darma Ganesha');
INSERT INTO `tbl_r_universitas` VALUES ('3117', 'Sekolah Tinggi Keuangan Niaga & Negara Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('3118', 'Sekolah Tinggi Ilmu Ekonomi YPBI');
INSERT INTO `tbl_r_universitas` VALUES ('3119', 'Sekolah Tinggi Kepemerintahan dan Kebijakan Publik');
INSERT INTO `tbl_r_universitas` VALUES ('3120', 'STIH Indonesia Jentera');
INSERT INTO `tbl_r_universitas` VALUES ('3121', 'Akademi Keuangan Dan Perbankan LPI');
INSERT INTO `tbl_r_universitas` VALUES ('3122', 'Akademi Sekretari Dan Manajemen Purnama');
INSERT INTO `tbl_r_universitas` VALUES ('3123', 'Akademi Akuntansi Syafa at Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3124', 'Akademi Sekretaris ISWI Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('3125', 'Akademi Pariwisata Matoa');
INSERT INTO `tbl_r_universitas` VALUES ('3126', 'AMIK Laksi-31');
INSERT INTO `tbl_r_universitas` VALUES ('3127', 'Akademi Kebidanan Suluh Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('3128', 'Akademi Farmasi Hang Tuah Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('3129', 'Akademi Perekam Medis Dan Informasi Kesehatan');
INSERT INTO `tbl_r_universitas` VALUES ('3130', 'Akademi Kebidanan Bhinneka Jakarta Satu');
INSERT INTO `tbl_r_universitas` VALUES ('3131', 'Akademi Keperawatan YPDR');
INSERT INTO `tbl_r_universitas` VALUES ('3132', 'Akademi Refraksi Optisi Leprindo Jakarta');
INSERT INTO `tbl_r_universitas` VALUES ('3133', 'Akademi Keperawatan Andakara');
INSERT INTO `tbl_r_universitas` VALUES ('3134', 'Akademi Teknik Elektromedik Andakara');
INSERT INTO `tbl_r_universitas` VALUES ('3135', 'Politeknik Global Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3136', 'Universitas Islam Al-Ihya Kuningan');
INSERT INTO `tbl_r_universitas` VALUES ('3137', 'Institut Bisnis Muhammadiyah Bekasi');
INSERT INTO `tbl_r_universitas` VALUES ('3138', 'Institut Manajemen Wiyata Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3139', 'Sekolah Tinggi Teknologi Ar-rahmah Cianjur');
INSERT INTO `tbl_r_universitas` VALUES ('3140', 'Sekolah Tinggi Teknologi Nasional Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('3141', 'Sekolah Tinggi Teknik Cikarang');
INSERT INTO `tbl_r_universitas` VALUES ('3142', 'STMIK  Padjadjaran');
INSERT INTO `tbl_r_universitas` VALUES ('3143', 'Sekolah Tinggi Ilmu Kesehatan Bakti Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3144', 'Sekolah Tinggi Bahasa Asing Cirebon');
INSERT INTO `tbl_r_universitas` VALUES ('3145', 'STKIP  PANCAKARYA');
INSERT INTO `tbl_r_universitas` VALUES ('3146', 'STISIP Trimasda Cilegon');
INSERT INTO `tbl_r_universitas` VALUES ('3147', 'STKIP Pelita Pratama');
INSERT INTO `tbl_r_universitas` VALUES ('3148', 'STKIP Syekh Manshur');
INSERT INTO `tbl_r_universitas` VALUES ('3149', 'Akademi Pariwisata Tadika Puri');
INSERT INTO `tbl_r_universitas` VALUES ('3150', 'Akademi Pariwisata Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('3151', 'Akademi Teknologi Patriot');
INSERT INTO `tbl_r_universitas` VALUES ('3152', 'Akademi Sekretari Dan Manajemen Al-Ma soem');
INSERT INTO `tbl_r_universitas` VALUES ('3153', 'Akademi Teknologi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('3154', 'Akademi Akuntansi Era 2020');
INSERT INTO `tbl_r_universitas` VALUES ('3155', 'Akademi Surtasdal-As Bogor');
INSERT INTO `tbl_r_universitas` VALUES ('3156', 'AMIK PGRI Tangerang');
INSERT INTO `tbl_r_universitas` VALUES ('3157', 'Akademi Teknologi Telekomunikasi Bandung');
INSERT INTO `tbl_r_universitas` VALUES ('3158', 'Akademi Kebidanan Al-Ishlah Cilegon');
INSERT INTO `tbl_r_universitas` VALUES ('3159', 'Akademi Kebidanan Syahida Komunika');
INSERT INTO `tbl_r_universitas` VALUES ('3160', 'Akademi Keperawatan Al-Ikhlas Cisarua');
INSERT INTO `tbl_r_universitas` VALUES ('3161', 'Universitas Nahdlatul Ulama Al Ghazali Cilacap');
INSERT INTO `tbl_r_universitas` VALUES ('3162', 'Universitas  Peradaban');
INSERT INTO `tbl_r_universitas` VALUES ('3163', 'STKIP Darussalam Cilacap');
INSERT INTO `tbl_r_universitas` VALUES ('3164', 'Akademi Bahasa Asing Prawira Martha Sukoharjo');
INSERT INTO `tbl_r_universitas` VALUES ('3165', 'Akademi Manajemen Rumah Sakit Kusuma Husada');
INSERT INTO `tbl_r_universitas` VALUES ('3166', 'Akademi Kebidanan Dulang Mas');
INSERT INTO `tbl_r_universitas` VALUES ('3167', 'Akademi Kebidanan Siti Fatimah');
INSERT INTO `tbl_r_universitas` VALUES ('3168', 'Akademi Kebidanan KH Putra');
INSERT INTO `tbl_r_universitas` VALUES ('3169', 'Akademi Keperawatan  Pragolopati');
INSERT INTO `tbl_r_universitas` VALUES ('3170', 'Akademi Teknik PIKA');
INSERT INTO `tbl_r_universitas` VALUES ('3171', 'Politeknik  Muhammadiyah  Magelang');
INSERT INTO `tbl_r_universitas` VALUES ('3172', 'Politeknik  Purbaya');
INSERT INTO `tbl_r_universitas` VALUES ('3173', 'Politeknik Baja Tegal');
INSERT INTO `tbl_r_universitas` VALUES ('3174', 'Akademi Komunitas  Balekambang');
INSERT INTO `tbl_r_universitas` VALUES ('3175', 'Universitas  Cakrawala');
INSERT INTO `tbl_r_universitas` VALUES ('3176', 'Universitas Nahdlatul Ulama Sidoarjo');
INSERT INTO `tbl_r_universitas` VALUES ('3177', 'Universitas Islam Raden Rahmat');
INSERT INTO `tbl_r_universitas` VALUES ('3178', 'STIKES Buana Husada Ponorogo');
INSERT INTO `tbl_r_universitas` VALUES ('3179', 'STIKES Karya Putra Bangsa Tulungagung');
INSERT INTO `tbl_r_universitas` VALUES ('3180', 'STIKES Muhammadiyah  Bojonegoro');
INSERT INTO `tbl_r_universitas` VALUES ('3181', 'STKIP Modern Ngawi');
INSERT INTO `tbl_r_universitas` VALUES ('3182', 'Sekolah Tinggi Ilmu Kesehatan Delima Persada Gresik');
INSERT INTO `tbl_r_universitas` VALUES ('3183', 'STKIP Qomaruddin Gresik');
INSERT INTO `tbl_r_universitas` VALUES ('3184', 'Akademi Teknologi Industri Tekstil Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('3185', 'Akademi Peternakan PGRI Jember');
INSERT INTO `tbl_r_universitas` VALUES ('3186', 'Akademi Pariwisata Bhakti Wiyata');
INSERT INTO `tbl_r_universitas` VALUES ('3187', 'AMIK Aji Jaya Baya');
INSERT INTO `tbl_r_universitas` VALUES ('3188', 'Akademi Keperawatan Nazhatut Thullab Sampang');
INSERT INTO `tbl_r_universitas` VALUES ('3189', 'Akademi Kebidanan Anindya');
INSERT INTO `tbl_r_universitas` VALUES ('3190', 'Akademi Gizi Karya Husada Kediri');
INSERT INTO `tbl_r_universitas` VALUES ('3191', 'Akademi Farmasi Surabaya');
INSERT INTO `tbl_r_universitas` VALUES ('3192', 'Akademi Komunitas Semen Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3193', 'Universitas Karyadarma Kupang');
INSERT INTO `tbl_r_universitas` VALUES ('3194', 'Universitas Nahdlatul Ulama Nusa Tenggara Barat');
INSERT INTO `tbl_r_universitas` VALUES ('3195', 'IKIP Muhammadiyah Maumere');
INSERT INTO `tbl_r_universitas` VALUES ('3196', 'Institut Ilmu Sosial dan Budaya Samawa Rea');
INSERT INTO `tbl_r_universitas` VALUES ('3197', 'Sekolah Tinggi Teknologi Dan Kejuruan Gianyar');
INSERT INTO `tbl_r_universitas` VALUES ('3198', 'STIKES Santu Paulus Ruteng');
INSERT INTO `tbl_r_universitas` VALUES ('3199', 'STKIP Nusa Timor');
INSERT INTO `tbl_r_universitas` VALUES ('3200', 'STKIP Simbiosis');
INSERT INTO `tbl_r_universitas` VALUES ('3201', 'STIKES Panca Atma Jaya');
INSERT INTO `tbl_r_universitas` VALUES ('3202', 'STKIP Muhammadiyah Kalabahi');
INSERT INTO `tbl_r_universitas` VALUES ('3203', 'Sekolah Tinggi Manajemen Informatika Komputer Stella Maris Sumba');
INSERT INTO `tbl_r_universitas` VALUES ('3204', 'Sekolah Tinggi Ilmu Kesehatan Buleleng');
INSERT INTO `tbl_r_universitas` VALUES ('3205', 'STKIP Harapan Bima');
INSERT INTO `tbl_r_universitas` VALUES ('3206', 'Akademi Keperawatan Maranatha Groups');
INSERT INTO `tbl_r_universitas` VALUES ('3207', 'Akademi Manajemen Surya Mataram');
INSERT INTO `tbl_r_universitas` VALUES ('3208', 'Akademi Keperawatan ST Elisabeth Lela');
INSERT INTO `tbl_r_universitas` VALUES ('3209', 'Akademi Kebidanan Santa Elisabeth Kefamenanu');
INSERT INTO `tbl_r_universitas` VALUES ('3210', 'Akademi Farmasi Santo Fransiskus Xaverius');
INSERT INTO `tbl_r_universitas` VALUES ('3211', 'Universitas Nusantara Manado');
INSERT INTO `tbl_r_universitas` VALUES ('3212', 'Sekolah Tinggi Ilmu Kesejahteraan Sosial Manado');
INSERT INTO `tbl_r_universitas` VALUES ('3213', 'Sekolah Tinggi Ilmu Komunikasi Manado');
INSERT INTO `tbl_r_universitas` VALUES ('3214', 'Sekolah Tinggi Ilmu Ekonomi Yapi Bone');
INSERT INTO `tbl_r_universitas` VALUES ('3215', 'STISIP Bina Generasi Polewali');
INSERT INTO `tbl_r_universitas` VALUES ('3216', 'STIKES Graha Medika');
INSERT INTO `tbl_r_universitas` VALUES ('3217', 'Sekolah Tinggi Ilmu Kesehatan Husada Mandiri Poso');
INSERT INTO `tbl_r_universitas` VALUES ('3218', 'STIM Boalemo');
INSERT INTO `tbl_r_universitas` VALUES ('3219', 'STIKES Bina Mandiri Gorontalo di Kota Gorontalo');
INSERT INTO `tbl_r_universitas` VALUES ('3220', 'STIKES Bakti Nusantara Gorontalo');
INSERT INTO `tbl_r_universitas` VALUES ('3221', 'Sekolah Tinggi Manajemen Informatika dan Komputer Bina Adinata');
INSERT INTO `tbl_r_universitas` VALUES ('3222', 'Sekolah Tinggi Ilmu Kesehatan Pelamonia Kesdam VII Wirabuana');
INSERT INTO `tbl_r_universitas` VALUES ('3223', 'STIK Trinita Manado');
INSERT INTO `tbl_r_universitas` VALUES ('3224', 'Sekolah Tinggi Ilmu Kesehatan Budi Mulia');
INSERT INTO `tbl_r_universitas` VALUES ('3225', 'STMIK Hasan Sulur Wonomulyo');
INSERT INTO `tbl_r_universitas` VALUES ('3226', 'STKIP Pelita Nusantara Buton');
INSERT INTO `tbl_r_universitas` VALUES ('3227', 'Sekolah Tinggi Ilmu Hukum dan Politik Palu');
INSERT INTO `tbl_r_universitas` VALUES ('3228', 'Akademi Teknik Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('3229', 'Akademi Pariwisata Dian Rana Rantepao');
INSERT INTO `tbl_r_universitas` VALUES ('3230', 'Akademi Pariwisata Air Madidi');
INSERT INTO `tbl_r_universitas` VALUES ('3231', 'ASMI Yapika Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('3232', 'Akademi Teknologi Industri Dewantara Palopo');
INSERT INTO `tbl_r_universitas` VALUES ('3233', 'Akademi Bahasa Asing Barakati Kendari');
INSERT INTO `tbl_r_universitas` VALUES ('3234', 'Akademi Pertambangan  Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('3235', 'ASMI Shita Palu');
INSERT INTO `tbl_r_universitas` VALUES ('3236', 'Akademi Komputer Mall Cendikia');
INSERT INTO `tbl_r_universitas` VALUES ('3237', 'Akademi Teknik Otomotive Makassar');
INSERT INTO `tbl_r_universitas` VALUES ('3238', 'Akademi Keperawatan Fatima Mamuju');
INSERT INTO `tbl_r_universitas` VALUES ('3239', 'Akademi Kebidanan Konawe');
INSERT INTO `tbl_r_universitas` VALUES ('3240', 'Akademi Keperawatan Pemda Sengkang');
INSERT INTO `tbl_r_universitas` VALUES ('3241', 'Akademi Kebidanan Menara Bunda');
INSERT INTO `tbl_r_universitas` VALUES ('3242', 'Akademi Kebidanan Bambapuang Prima Persada');
INSERT INTO `tbl_r_universitas` VALUES ('3243', 'Akademi Kebidanan Graha Rabita Anugerah');
INSERT INTO `tbl_r_universitas` VALUES ('3244', 'Politeknik  Bosowa');
INSERT INTO `tbl_r_universitas` VALUES ('3245', 'Universitas  Universal');
INSERT INTO `tbl_r_universitas` VALUES ('3246', 'Institut Sains Dan Teknologi Pembangunan Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('3247', 'Sekolah Tinggi Ilmu Manajemen Sumbar');
INSERT INTO `tbl_r_universitas` VALUES ('3248', 'STIE Nagoya Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3249', 'STIH Putri Maharaja');
INSERT INTO `tbl_r_universitas` VALUES ('3250', 'STKIP Rokania');
INSERT INTO `tbl_r_universitas` VALUES ('3251', 'STKIP Muhammadiyah Muara Bungo');
INSERT INTO `tbl_r_universitas` VALUES ('3252', 'STMIK Indragiri');
INSERT INTO `tbl_r_universitas` VALUES ('3253', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Meranti');
INSERT INTO `tbl_r_universitas` VALUES ('3254', 'Akademi Koperasi Sumbar');
INSERT INTO `tbl_r_universitas` VALUES ('3255', 'Akademi Sekretari Dan Manajemen Indonesia Padang');
INSERT INTO `tbl_r_universitas` VALUES ('3256', 'Akademi Manajemen Koperasi Graha Karya');
INSERT INTO `tbl_r_universitas` VALUES ('3257', 'Akademi Teknologi Pratama');
INSERT INTO `tbl_r_universitas` VALUES ('3258', 'Akademi Teknik Taman Siswa');
INSERT INTO `tbl_r_universitas` VALUES ('3259', 'Akademi Bahasa Asing Alaska Padang');
INSERT INTO `tbl_r_universitas` VALUES ('3260', 'Akademi Keselamatan Dan Kesehatan Kerja Pekanbaru');
INSERT INTO `tbl_r_universitas` VALUES ('3261', 'Akademi Bahasa Asing Tanjung Pinang');
INSERT INTO `tbl_r_universitas` VALUES ('3262', 'Akademi Bahasa Asing Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('3263', 'Akademi Keperawatan Nabila');
INSERT INTO `tbl_r_universitas` VALUES ('3264', 'Akademi Kebidanan Prima Jambi');
INSERT INTO `tbl_r_universitas` VALUES ('3265', 'Akademi Analis Kesehatan Putra Jaya Batam');
INSERT INTO `tbl_r_universitas` VALUES ('3266', 'Akademi Akuntansi Dan Manajemen Pembangunan');
INSERT INTO `tbl_r_universitas` VALUES ('3267', 'Politeknik Tri Dharma');
INSERT INTO `tbl_r_universitas` VALUES ('3268', 'Politeknik Pariwisata Batam');
INSERT INTO `tbl_r_universitas` VALUES ('3269', 'Universitas Nahdlatul Ulama Kalimantan Timur');
INSERT INTO `tbl_r_universitas` VALUES ('3270', 'STIE Prima Visi');
INSERT INTO `tbl_r_universitas` VALUES ('3271', 'Akademi Bahasa Asing Colorado Samarinda');
INSERT INTO `tbl_r_universitas` VALUES ('3272', 'Akademi Manajemen Agribisnis Sanggau');
INSERT INTO `tbl_r_universitas` VALUES ('3273', 'Akademi Pariwisata Nasional Banjarmasin');
INSERT INTO `tbl_r_universitas` VALUES ('3274', 'Akademi Kebidanan Martapura');
INSERT INTO `tbl_r_universitas` VALUES ('3275', 'Akademi Manajemen Komputer dan Informatika Ketapang');
INSERT INTO `tbl_r_universitas` VALUES ('3276', 'Akademi Teknologi Borneo');
INSERT INTO `tbl_r_universitas` VALUES ('3277', 'Akademi Gizi Sinka Dharma Madani Singkawang di Kota Singkawang');
INSERT INTO `tbl_r_universitas` VALUES ('3278', 'Politeknik Bisnis Lamda');
INSERT INTO `tbl_r_universitas` VALUES ('3279', 'Politeknik Ilmu Pelayaran Balikpapan');
INSERT INTO `tbl_r_universitas` VALUES ('3280', 'STIKES Pasapua Ambon');
INSERT INTO `tbl_r_universitas` VALUES ('3281', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Saumlaki');
INSERT INTO `tbl_r_universitas` VALUES ('3282', 'Sekolah Tinggi Ilmu Hukum Muhammad Thaha Tual');
INSERT INTO `tbl_r_universitas` VALUES ('3283', 'STKIP Ita Wotu Nusa');
INSERT INTO `tbl_r_universitas` VALUES ('3284', 'Universitas Sains Cut Nyak Dhien');
INSERT INTO `tbl_r_universitas` VALUES ('3285', 'Sekolah Tinggi Ilmu Psikologi Harapan Bangsa');
INSERT INTO `tbl_r_universitas` VALUES ('3286', 'STKIP Muhammadiyah Aceh Tengah');
INSERT INTO `tbl_r_universitas` VALUES ('3287', 'STKIP Bumi Persada Lhokseumawe');
INSERT INTO `tbl_r_universitas` VALUES ('3288', 'STIKES Medika Teuku Umar');
INSERT INTO `tbl_r_universitas` VALUES ('3289', 'STIKES Bustanul Ulum Langsa');
INSERT INTO `tbl_r_universitas` VALUES ('3290', 'STMIK Indonesia Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('3291', 'Akademi Manajemen Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('3292', 'Akademi Teknik Iskandar Muda');
INSERT INTO `tbl_r_universitas` VALUES ('3293', 'Akademi Pertanian Iskandar Muda **');
INSERT INTO `tbl_r_universitas` VALUES ('3294', 'AMIK Indonesia');
INSERT INTO `tbl_r_universitas` VALUES ('3295', 'AMIK Jabal Ghafur');
INSERT INTO `tbl_r_universitas` VALUES ('3296', 'Akademi Keuangan Perbankan Nasional');
INSERT INTO `tbl_r_universitas` VALUES ('3297', 'Akademi Kebidanan Bustanul Ulum Langsa');
INSERT INTO `tbl_r_universitas` VALUES ('3298', 'Akademi Kebidanan Adhira Mustika Gayo');
INSERT INTO `tbl_r_universitas` VALUES ('3299', 'Akademi Keperawatan Ibnu Sina Kota Sabang');
INSERT INTO `tbl_r_universitas` VALUES ('3300', 'Akademi Perekam dan Info Kes Sihat Beurata');
INSERT INTO `tbl_r_universitas` VALUES ('3301', 'Akademi Teknik Elektromedik Kupula Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('3302', 'Akademi Kebidanan Medika Anugerah Tasya');
INSERT INTO `tbl_r_universitas` VALUES ('3303', 'Akademi Teknik Radiodiagnostik Dan Radioterapi Banda Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('3304', 'Akademi Fisioterapi Muhammadiyah Aceh');
INSERT INTO `tbl_r_universitas` VALUES ('3305', 'Akademi Keperawatan Muhammadiyah Bireuen');
INSERT INTO `tbl_r_universitas` VALUES ('3306', 'Akademi Manajemen Gunung Leuser');
INSERT INTO `tbl_r_universitas` VALUES ('3307', 'Politeknik Aceh Selatan');
INSERT INTO `tbl_r_universitas` VALUES ('3308', 'Universitas  Timika');
INSERT INTO `tbl_r_universitas` VALUES ('3309', 'Universitas Nani Bili Nusantara');
INSERT INTO `tbl_r_universitas` VALUES ('3310', 'Sekolah Tinggi Ilmu Administrasi Asy Syafi iyah');
INSERT INTO `tbl_r_universitas` VALUES ('3311', 'Sekolah Tinggi Seni Papua');
INSERT INTO `tbl_r_universitas` VALUES ('3312', 'Sekolah Tinggi Ilmu Pertanian Petra Baliem Wamena');
INSERT INTO `tbl_r_universitas` VALUES ('3313', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Nuuwar');
INSERT INTO `tbl_r_universitas` VALUES ('3314', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Biak');
INSERT INTO `tbl_r_universitas` VALUES ('3315', 'STMIK Agamua Wamena Papua');
INSERT INTO `tbl_r_universitas` VALUES ('3316', 'Sekolah Tinggi Ilmu Eknomi Yapis Merauke');
INSERT INTO `tbl_r_universitas` VALUES ('3317', 'STIE Saint Theresa');
INSERT INTO `tbl_r_universitas` VALUES ('3318', 'Akademi Perikanan Kamasan Biak');
INSERT INTO `tbl_r_universitas` VALUES ('3319', 'Akademi Teknik Biak');
INSERT INTO `tbl_r_universitas` VALUES ('3320', 'Akademi Bahasa Asing Netaiken Wamena');
INSERT INTO `tbl_sessions` VALUES ('tcq1hf01mi0i1d3goauar9ec4u', '::1', '1524703196', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333139363B);
INSERT INTO `tbl_sessions` VALUES ('011qd741ns6r7tpka6b8h0cuu2', '::1', '1524703198', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333139383B);
INSERT INTO `tbl_sessions` VALUES ('558f8ht4db92ftlcc9shqdcja3', '::1', '1524703198', '');
INSERT INTO `tbl_sessions` VALUES ('55baclq7qhtv5ovko179tq7kkb', '::1', '1524703199', '');
INSERT INTO `tbl_sessions` VALUES ('0bnphqjum06pighsf2etjo7q0p', '::1', '1524703388', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333338383B);
INSERT INTO `tbl_sessions` VALUES ('rseu3a65j1cpj03649pjm4dcei', '::1', '1524703389', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333338393B);
INSERT INTO `tbl_sessions` VALUES ('i21ep5eq00vffr82k7ru01s4c4', '::1', '1524703389', '');
INSERT INTO `tbl_sessions` VALUES ('t465iborfip2r0h7ge6nei7iqn', '::1', '1524703390', '');
INSERT INTO `tbl_sessions` VALUES ('qcj3pdhpds665nnj5ajjj56q3k', '::1', '1524703413', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333431333B);
INSERT INTO `tbl_sessions` VALUES ('q7vtn9b14leogbkptm0dj6c4jp', '::1', '1524703414', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333431343B);
INSERT INTO `tbl_sessions` VALUES ('p9th65ss6mhigoptibdsfb9lcs', '::1', '1524703414', '');
INSERT INTO `tbl_sessions` VALUES ('emlruuq686ice2r2hkfu5m61vr', '::1', '1524703415', '');
INSERT INTO `tbl_sessions` VALUES ('ds1ab6r0bjv5c7aht0lrm11out', '::1', '1524703434', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333433343B);
INSERT INTO `tbl_sessions` VALUES ('8q3bcr1m4u5kkkdf117ci84rth', '::1', '1524703436', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333433363B);
INSERT INTO `tbl_sessions` VALUES ('gp5koiid9lckdjr18o1o74lopq', '::1', '1524703436', '');
INSERT INTO `tbl_sessions` VALUES ('fk5k93p7h1qkjpja9ko54b549r', '::1', '1524703436', '');
INSERT INTO `tbl_sessions` VALUES ('8l60hj0a99g3b1veu13in4on2a', '::1', '1524703497', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333439373B);
INSERT INTO `tbl_sessions` VALUES ('ia4s2bodov89d895qhvqsastou', '::1', '1524703498', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333439383B);
INSERT INTO `tbl_sessions` VALUES ('5qk9b3qd3b21092sja1uuboj1k', '::1', '1524703498', '');
INSERT INTO `tbl_sessions` VALUES ('tb6ffji8fjvf1b9gifecp6jo00', '::1', '1524703498', '');
INSERT INTO `tbl_sessions` VALUES ('1ccpi42ps30j2ji1tfo9oao751', '::1', '1524703511', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333531313B);
INSERT INTO `tbl_sessions` VALUES ('4ifathf43j1ecnc6hihujr6qd9', '::1', '1524703513', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333531333B);
INSERT INTO `tbl_sessions` VALUES ('4cf0mhhterdqnplhlcs0j1slid', '::1', '1524703513', '');
INSERT INTO `tbl_sessions` VALUES ('hm0jif1ajvdi9u4518gq110vvv', '::1', '1524703513', '');
INSERT INTO `tbl_sessions` VALUES ('cpbcnu2guut2jut5tju3s0qjgs', '::1', '1524703532', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333533323B);
INSERT INTO `tbl_sessions` VALUES ('8d8fhmcs0qdsqgc0kh9qaq9msj', '::1', '1524703533', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333533333B);
INSERT INTO `tbl_sessions` VALUES ('gvuqev9rpai8a3dunq8hlt3pd2', '::1', '1524703533', '');
INSERT INTO `tbl_sessions` VALUES ('t3m3p3kaqjlto7jhphfe7mj0um', '::1', '1524703534', '');
INSERT INTO `tbl_sessions` VALUES ('mr1opoonl7dnl26o7onk6o7p3d', '::1', '1524703644', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333634343B);
INSERT INTO `tbl_sessions` VALUES ('dqhclbfkrh01lqgep8u1drrh0k', '::1', '1524703645', '');
INSERT INTO `tbl_sessions` VALUES ('gv1s0ma4kgkmd3c8ink4hha51b', '::1', '1524703645', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333634353B);
INSERT INTO `tbl_sessions` VALUES ('lh3ra5d1edonhmj8aatf0df8gb', '::1', '1524703645', '');
INSERT INTO `tbl_sessions` VALUES ('16sjl9hvbqo5eki4ai1vl33s1a', '::1', '1524703649', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333634393B);
INSERT INTO `tbl_sessions` VALUES ('hkm74kpn0j6hgdobj7u7a13hk5', '::1', '1524703650', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333635303B);
INSERT INTO `tbl_sessions` VALUES ('plrgn27n60hkf61sgvi4ms60tm', '::1', '1524703650', '');
INSERT INTO `tbl_sessions` VALUES ('runrr4calk186lbr48v4giq4gs', '::1', '1524703651', '');
INSERT INTO `tbl_sessions` VALUES ('j228oa6o2rruop2t337qetbhbh', '::1', '1524703661', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333636313B);
INSERT INTO `tbl_sessions` VALUES ('ivnjhhf4s8535eti2dk2ij2mi0', '::1', '1524703662', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333636323B);
INSERT INTO `tbl_sessions` VALUES ('9hcbunivvg94r17bueiddj7236', '::1', '1524703663', '');
INSERT INTO `tbl_sessions` VALUES ('sf0m19s8k15fda79om2gh7gkh7', '::1', '1524703663', '');
INSERT INTO `tbl_sessions` VALUES ('srsr76jo1814rm33jdik3hi6cq', '::1', '1524703671', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333637313B);
INSERT INTO `tbl_sessions` VALUES ('2i6s3j4vqf37r3ca6kf6ol5rup', '::1', '1524703672', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333637323B);
INSERT INTO `tbl_sessions` VALUES ('2klt95r34ec6g2q6i9c08k9dn4', '::1', '1524703672', '');
INSERT INTO `tbl_sessions` VALUES ('ssr3v5fo52rsd4kmua7d1abf9b', '::1', '1524703672', '');
INSERT INTO `tbl_sessions` VALUES ('p5cn66u3gujb52h02ea8e18is3', '::1', '1524703682', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333638323B);
INSERT INTO `tbl_sessions` VALUES ('li48vnvig73tneicllafn1pt6d', '::1', '1524703683', '');
INSERT INTO `tbl_sessions` VALUES ('hquqidq0hprh0ts4slmld065h4', '::1', '1524703683', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333638333B);
INSERT INTO `tbl_sessions` VALUES ('m484djt7g2neqshqiujjbnj2f7', '::1', '1524703683', '');
INSERT INTO `tbl_sessions` VALUES ('vllulv9mni536nhohl4c93tjjm', '::1', '1524703697', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333639373B);
INSERT INTO `tbl_sessions` VALUES ('9cvbhj94b0n0r442m4j8uarkjt', '::1', '1524703699', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333639383B);
INSERT INTO `tbl_sessions` VALUES ('movk29prum9fg8fes3rgvi94ja', '::1', '1524703699', '');
INSERT INTO `tbl_sessions` VALUES ('6t53qch9hfjj50qv9jneguh7m6', '::1', '1524703699', '');
INSERT INTO `tbl_sessions` VALUES ('qu7rqrckfvp1nqijldida891o0', '::1', '1524703704', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333730343B);
INSERT INTO `tbl_sessions` VALUES ('30svfee39ug7da5ll0g4qisgov', '::1', '1524703705', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333730353B);
INSERT INTO `tbl_sessions` VALUES ('88ev2kmq14jh2hrsu8cv4lcqbl', '::1', '1524703705', '');
INSERT INTO `tbl_sessions` VALUES ('2g6ucd9ko64e5phnqmanip7lv6', '::1', '1524703705', '');
INSERT INTO `tbl_sessions` VALUES ('d3t8g8ajnrnnjeeapngrjhlkkt', '::1', '1524703716', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333731363B);
INSERT INTO `tbl_sessions` VALUES ('6tr4fih0cql11idk59r8kb5v78', '::1', '1524703717', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333731373B);
INSERT INTO `tbl_sessions` VALUES ('3j1o1af3ug3b9050uo405f333i', '::1', '1524703717', '');
INSERT INTO `tbl_sessions` VALUES ('inslls6i5v5vhl0v7k7dhsrfno', '::1', '1524703718', '');
INSERT INTO `tbl_sessions` VALUES ('93kolpm6a8qn13eqt48n13s224', '::1', '1524703722', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333732323B);
INSERT INTO `tbl_sessions` VALUES ('hh6ualcclcceftlrlr6srrlj53', '::1', '1524703723', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333732333B);
INSERT INTO `tbl_sessions` VALUES ('8tb8ldisoht9ih5g1n99dgamiu', '::1', '1524703723', '');
INSERT INTO `tbl_sessions` VALUES ('qd4oo7h5bmgeheb7n830pa3thk', '::1', '1524703723', '');
INSERT INTO `tbl_sessions` VALUES ('fuav1ursoic3usb0c117go810v', '::1', '1524703731', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333733313B);
INSERT INTO `tbl_sessions` VALUES ('n8bjku77gerq24jeh240ku4c39', '::1', '1524703732', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333733323B);
INSERT INTO `tbl_sessions` VALUES ('0fumaplmdh1qdj5v458dq82fv8', '::1', '1524703732', '');
INSERT INTO `tbl_sessions` VALUES ('pd1updlb7irimd3k7ib9dm8q64', '::1', '1524703733', '');
INSERT INTO `tbl_sessions` VALUES ('lr2kdi3pl01vtm0v7f2es67602', '::1', '1524703741', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333734303B);
INSERT INTO `tbl_sessions` VALUES ('991qrqafptg6stfba8g6q5s8uk', '::1', '1524703741', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333734313B);
INSERT INTO `tbl_sessions` VALUES ('3hk7pmc4fmif7sjdqjcckf3k33', '::1', '1524703741', '');
INSERT INTO `tbl_sessions` VALUES ('1ge9u46pr47of47s3up4gkud0u', '::1', '1524703742', '');
INSERT INTO `tbl_sessions` VALUES ('lm909atvep780pb6vjg20kp2e1', '::1', '1524703763', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333736333B);
INSERT INTO `tbl_sessions` VALUES ('lb2f86egq074eph6pspm4fbtp4', '::1', '1524703764', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333736343B);
INSERT INTO `tbl_sessions` VALUES ('du7ucovi50hcj4a3voptsonflq', '::1', '1524703764', '');
INSERT INTO `tbl_sessions` VALUES ('cbr8nqne1826m4rj4bomtlv6ep', '::1', '1524703764', '');
INSERT INTO `tbl_sessions` VALUES ('onpo5glaf6n2t32demu4gmuc6t', '::1', '1524703770', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333737303B);
INSERT INTO `tbl_sessions` VALUES ('f78h2pj7ahrb5br6nbdsdup0d0', '::1', '1524703771', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333737313B);
INSERT INTO `tbl_sessions` VALUES ('cmk6fur29gb8v5f9ihhsd0rroj', '::1', '1524703771', '');
INSERT INTO `tbl_sessions` VALUES ('vv2ahretejo9qo2vdcq80vl3fk', '::1', '1524703771', '');
INSERT INTO `tbl_sessions` VALUES ('3n93tffalurebqvh513iebu39j', '::1', '1524703785', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333738343B);
INSERT INTO `tbl_sessions` VALUES ('5bhmf5a713j46i7mmv20rgk7o5', '::1', '1524703785', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333738353B);
INSERT INTO `tbl_sessions` VALUES ('csojjka6j6840513cirdu214qv', '::1', '1524703786', '');
INSERT INTO `tbl_sessions` VALUES ('ab0a0341v4maqf0q0g7pqq923g', '::1', '1524703786', '');
INSERT INTO `tbl_sessions` VALUES ('djk523alkv7aimmhi82oen7smb', '::1', '1524703793', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333739333B);
INSERT INTO `tbl_sessions` VALUES ('372dblcv9dg1fe98785pp4nslo', '::1', '1524703793', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333739333B);
INSERT INTO `tbl_sessions` VALUES ('dl12hrnq24sibllhngfbu6u58d', '::1', '1524703793', '');
INSERT INTO `tbl_sessions` VALUES ('gikbvo3q9h16quuae7cofnqlc9', '::1', '1524703794', '');
INSERT INTO `tbl_sessions` VALUES ('n6t1sttg7djhcrmon5de3p8s16', '::1', '1524703836', '');
INSERT INTO `tbl_sessions` VALUES ('8rlrn4lfp44lmimcpp7mlc1274', '::1', '1524703840', '');
INSERT INTO `tbl_sessions` VALUES ('u23233tsuabgdpp31n1jduklgf', '::1', '1524703898', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333839383B);
INSERT INTO `tbl_sessions` VALUES ('u7ikdclr5ftu3525k3ped5pb5n', '::1', '1524703899', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333839393B);
INSERT INTO `tbl_sessions` VALUES ('ebm36njngocdfgl589nc7ge7lj', '::1', '1524703899', '');
INSERT INTO `tbl_sessions` VALUES ('6mk9ajuopl9efuuakj14r5qjf4', '::1', '1524703900', '');
INSERT INTO `tbl_sessions` VALUES ('s1q44lq0dhgk1ftqll30gjbk6n', '::1', '1524703943', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333934333B);
INSERT INTO `tbl_sessions` VALUES ('kvv031jv47f75e301mcb2982nu', '::1', '1524703944', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333934343B);
INSERT INTO `tbl_sessions` VALUES ('tg25b9m7kei86tl4u1i1rtklhu', '::1', '1524703944', '');
INSERT INTO `tbl_sessions` VALUES ('br730v7uevthrt0smr4tta2iqn', '::1', '1524703945', '');
INSERT INTO `tbl_sessions` VALUES ('aqrjfkph4tln21bkonhvv4ocjl', '::1', '1524703953', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333935333B);
INSERT INTO `tbl_sessions` VALUES ('3kvmh2n5ksohqd0ou7k25kth7r', '::1', '1524703953', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333935333B);
INSERT INTO `tbl_sessions` VALUES ('e6tplkhk3i29kdqgs0tiqr94li', '::1', '1524703954', '');
INSERT INTO `tbl_sessions` VALUES ('g5u9g4p53i3pmn6assbug8bd7q', '::1', '1524703954', '');
INSERT INTO `tbl_sessions` VALUES ('fs1gphq5i1qanghn9bvb005afr', '::1', '1524703968', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333936383B);
INSERT INTO `tbl_sessions` VALUES ('cd60etofptp3ckunklbg7i7j08', '::1', '1524703969', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730333936393B);
INSERT INTO `tbl_sessions` VALUES ('crp1a6ps8v0o9ijp4cqp2ugrba', '::1', '1524703969', '');
INSERT INTO `tbl_sessions` VALUES ('diqfk8mt9p0t2rqp3aa9toecsi', '::1', '1524703970', '');
INSERT INTO `tbl_sessions` VALUES ('2halt6bikfgkgigag2mc9q1mrt', '::1', '1524704041', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343034313B);
INSERT INTO `tbl_sessions` VALUES ('sanuem24f3ursd0qh4608sr4eh', '::1', '1524704042', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343034323B);
INSERT INTO `tbl_sessions` VALUES ('gt3o5bu7ldch0thk48bj34j0uc', '::1', '1524704042', '');
INSERT INTO `tbl_sessions` VALUES ('76otclc2uak5thirv1kh081u1n', '::1', '1524704043', '');
INSERT INTO `tbl_sessions` VALUES ('ksqrb8e7c1ab4b6sf6u3enngk2', '::1', '1524704407', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343430373B);
INSERT INTO `tbl_sessions` VALUES ('iio9keo171de8ff6od4ds5qk14', '::1', '1524704408', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343430383B);
INSERT INTO `tbl_sessions` VALUES ('h5hkhu8dbjcs6tb0uhc8pt1fl8', '::1', '1524704408', '');
INSERT INTO `tbl_sessions` VALUES ('7mtc7qdng81vkh7b3soq9v4jgp', '::1', '1524704409', '');
INSERT INTO `tbl_sessions` VALUES ('nlemjf3vrvpqolktn717gff66r', '::1', '1524704445', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343434353B);
INSERT INTO `tbl_sessions` VALUES ('289bie3qajkebo09ut9kml2ff0', '::1', '1524704446', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343434363B);
INSERT INTO `tbl_sessions` VALUES ('mhq2vu2a0sk7fvph6am633mp7t', '::1', '1524704446', '');
INSERT INTO `tbl_sessions` VALUES ('l5gvf7u7uclm39v28d984jk4rg', '::1', '1524704447', '');
INSERT INTO `tbl_sessions` VALUES ('euhbhu09to6mvij4g7omogo1qp', '::1', '1524704511', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343531313B);
INSERT INTO `tbl_sessions` VALUES ('cpegu4p70en767ajtm96nceul2', '::1', '1524704512', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343531323B);
INSERT INTO `tbl_sessions` VALUES ('57ir9tgrris3qs7si8cmvn0mlm', '::1', '1524704512', '');
INSERT INTO `tbl_sessions` VALUES ('mn1bjbbp3elgli35b43jt77khk', '::1', '1524704513', '');
INSERT INTO `tbl_sessions` VALUES ('9b11pbghvo2p21eg1s30114jl1', '::1', '1524704546', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343534363B);
INSERT INTO `tbl_sessions` VALUES ('9c1ndjmrvcfj64sp558il9jbqb', '::1', '1524704548', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343534373B);
INSERT INTO `tbl_sessions` VALUES ('u02hgrpvuaahj5o1l8i2pnkgml', '::1', '1524704548', '');
INSERT INTO `tbl_sessions` VALUES ('ouvf4ee1fr17hu12o12vqsll4i', '::1', '1524704548', '');
INSERT INTO `tbl_sessions` VALUES ('80ghq0v97mntn579ve6g02isj6', '::1', '1524704797', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343739373B);
INSERT INTO `tbl_sessions` VALUES ('u4lcmlbtf9afe0mcugas0os69t', '::1', '1524704798', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343739383B);
INSERT INTO `tbl_sessions` VALUES ('8p2okq90o1k9eq8a5k17t3fng0', '::1', '1524704798', '');
INSERT INTO `tbl_sessions` VALUES ('eeufcom6jdvgmakj310jbci5gn', '::1', '1524704799', '');
INSERT INTO `tbl_sessions` VALUES ('rddlfqqrlo57ha2abm2o7vhdcp', '::1', '1524704802', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343830323B);
INSERT INTO `tbl_sessions` VALUES ('frp9ona2s3e1err959v6iph6v2', '::1', '1524704803', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730343830333B);
INSERT INTO `tbl_sessions` VALUES ('6rlfa7h14uc1t2e37jqljis7fk', '::1', '1524704803', '');
INSERT INTO `tbl_sessions` VALUES ('rjq9kd5u71kra618864dvdd3gm', '::1', '1524704804', '');
INSERT INTO `tbl_sessions` VALUES ('vvq6k07olbtlsrg3uq0ijq32t6', '::1', '1524705400', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353430303B);
INSERT INTO `tbl_sessions` VALUES ('cerkc5blkfngb8plo686ckkunq', '::1', '1524705401', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353430313B);
INSERT INTO `tbl_sessions` VALUES ('i9uq22gqcuvr4kolgfvn2f21h7', '::1', '1524705401', '');
INSERT INTO `tbl_sessions` VALUES ('688fs1bhfcslapd2uilf2m4r1k', '::1', '1524705401', '');
INSERT INTO `tbl_sessions` VALUES ('3i41l9om5j6r6k3nh2okrnbmup', '::1', '1524705402', '');
INSERT INTO `tbl_sessions` VALUES ('mlj46be4m4nebc6h2p98g5dfju', '::1', '1524705414', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353431343B);
INSERT INTO `tbl_sessions` VALUES ('740hu737kce5ar68glt4fevfv0', '::1', '1524705415', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353431353B);
INSERT INTO `tbl_sessions` VALUES ('9f698lu7olbnk8m493m3hvecer', '::1', '1524705415', '');
INSERT INTO `tbl_sessions` VALUES ('v8phoiiih00cgoecf6o9fnan5d', '::1', '1524705415', '');
INSERT INTO `tbl_sessions` VALUES ('gvpe1rtm69289dt2tt0v41jqu4', '::1', '1524705415', '');
INSERT INTO `tbl_sessions` VALUES ('6p584pr2sdfqtnuamjsjrqaej5', '::1', '1524705462', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353436323B);
INSERT INTO `tbl_sessions` VALUES ('d9j496opkmvlg5dc417q2dtukn', '::1', '1524705463', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353436333B);
INSERT INTO `tbl_sessions` VALUES ('mk1oaqfn0tnb5l40v1o9ioik49', '::1', '1524705463', '');
INSERT INTO `tbl_sessions` VALUES ('rjvut1lkh768hujs115ghiskqh', '::1', '1524705463', '');
INSERT INTO `tbl_sessions` VALUES ('tc1i1adkihordtk2f0go4galr8', '::1', '1524705464', '');
INSERT INTO `tbl_sessions` VALUES ('j4f71rquvs4locjgokm5uuo4nf', '::1', '1524705535', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353533353B);
INSERT INTO `tbl_sessions` VALUES ('rg52v7mba1upvdbogdtc0272i2', '::1', '1524705535', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353533353B);
INSERT INTO `tbl_sessions` VALUES ('nv5ih7617v3j0bi5q0aa75i9jm', '::1', '1524705535', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353533353B);
INSERT INTO `tbl_sessions` VALUES ('dsjbjvn5ue81tpv1t5vd16jqr6', '::1', '1524705535', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353533353B);
INSERT INTO `tbl_sessions` VALUES ('8vqaqgccvfeb6aj61o116jelep', '::1', '1524705536', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353533363B);
INSERT INTO `tbl_sessions` VALUES ('knie77m3r8a94nqc66rnv8m6qf', '::1', '1524705537', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353533373B);
INSERT INTO `tbl_sessions` VALUES ('ans5n0is42654e9o31pfjnf0e9', '::1', '1524705537', '');
INSERT INTO `tbl_sessions` VALUES ('msi1i5040lrn8tpn16jvg8lgoq', '::1', '1524705537', '');
INSERT INTO `tbl_sessions` VALUES ('0oj213036s7t9chsubo18m6l0p', '::1', '1524705537', '');
INSERT INTO `tbl_sessions` VALUES ('o2is3jjjkqj0mhtoe1f9c8fbun', '::1', '1524705591', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353539313B);
INSERT INTO `tbl_sessions` VALUES ('taebh51iu8qald2o06ko29qdd6', '::1', '1524705592', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353539323B);
INSERT INTO `tbl_sessions` VALUES ('ups2c954451524l08a2v768rf7', '::1', '1524705592', '');
INSERT INTO `tbl_sessions` VALUES ('kgbkk95dtcia83jeh5h9i47c80', '::1', '1524705592', '');
INSERT INTO `tbl_sessions` VALUES ('r4d1m8jvvecukg1bhi6f3f9jjk', '::1', '1524705593', '');
INSERT INTO `tbl_sessions` VALUES ('u6tdiupb4jiapbmdk9e652vkk7', '::1', '1524705618', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353631383B);
INSERT INTO `tbl_sessions` VALUES ('k4vkaut55bknl0d11ij09cjp5n', '::1', '1524705618', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353631383B);
INSERT INTO `tbl_sessions` VALUES ('8a0c90r0a0vglplopgtsbd1u9j', '::1', '1524705618', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353631383B);
INSERT INTO `tbl_sessions` VALUES ('p87i36vjbegu3ol648j8qjrc4l', '::1', '1524705619', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353631393B);
INSERT INTO `tbl_sessions` VALUES ('aepql93a9lgqudd2ut4id21b9h', '::1', '1524705619', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353631393B);
INSERT INTO `tbl_sessions` VALUES ('61j5po3r884ga8001tbc9g1cg5', '::1', '1524705620', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353632303B);
INSERT INTO `tbl_sessions` VALUES ('vghnn8nmtkpq82came3m5em6uu', '::1', '1524705620', '');
INSERT INTO `tbl_sessions` VALUES ('a91mhshe16bqd69ojcdjkdb0n6', '::1', '1524705620', '');
INSERT INTO `tbl_sessions` VALUES ('nddldbj9tbrce504aipcif1coq', '::1', '1524705621', '');
INSERT INTO `tbl_sessions` VALUES ('68p0fri5plinrftt2f64fn7st5', '::1', '1524705697', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353639373B);
INSERT INTO `tbl_sessions` VALUES ('gbstkm6e47124ansblts5r6bv3', '::1', '1524705699', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353639393B);
INSERT INTO `tbl_sessions` VALUES ('mrm6orq5lj54cf668n3hf4ajva', '::1', '1524705699', '');
INSERT INTO `tbl_sessions` VALUES ('dbtjnps6q575uhush97ggirnp3', '::1', '1524705699', '');
INSERT INTO `tbl_sessions` VALUES ('m841h90lici8f4ibqe1dub4bnb', '::1', '1524705699', '');
INSERT INTO `tbl_sessions` VALUES ('38nsjeo2o46vlrsnh67jgupd82', '::1', '1524705805', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353830353B);
INSERT INTO `tbl_sessions` VALUES ('7av6e3irmb6o1j4fh4d0n96vp4', '::1', '1524705806', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353830363B);
INSERT INTO `tbl_sessions` VALUES ('92nu6khs4q1utuv806en8celp2', '::1', '1524705806', '');
INSERT INTO `tbl_sessions` VALUES ('7tdut0lc20mf898k547knpam5d', '::1', '1524705806', '');
INSERT INTO `tbl_sessions` VALUES ('hv63stv9f9jf4d1idj2cb61m85', '::1', '1524705807', '');
INSERT INTO `tbl_sessions` VALUES ('mi4bq24gpfu6814rdemm8rovcg', '::1', '1524705856', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353835363B);
INSERT INTO `tbl_sessions` VALUES ('2qbsjj0arslchn6tbdhu5fc05q', '::1', '1524705857', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353835373B);
INSERT INTO `tbl_sessions` VALUES ('id66a9rpoes17p9aic3k4nikkv', '::1', '1524705857', '');
INSERT INTO `tbl_sessions` VALUES ('svcebvqgrc8buuj1snalq2ta4s', '::1', '1524705858', '');
INSERT INTO `tbl_sessions` VALUES ('i654393qee426j28ckp78cng2s', '::1', '1524705966', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353936363B);
INSERT INTO `tbl_sessions` VALUES ('53gmcjenj01ene36ce9bjepof0', '::1', '1524705967', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353936373B);
INSERT INTO `tbl_sessions` VALUES ('mqekaeulc49le0b8bn6m8f5rkm', '::1', '1524705967', '');
INSERT INTO `tbl_sessions` VALUES ('ebphar78m040a5g6q8mu4mtpm3', '::1', '1524705967', '');
INSERT INTO `tbl_sessions` VALUES ('m1k1adfk5a2arvlhotlk03gjir', '::1', '1524705968', '');
INSERT INTO `tbl_sessions` VALUES ('kpkvd4p6e92pk7dr5ejo0hd3bo', '::1', '1524705972', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353937323B);
INSERT INTO `tbl_sessions` VALUES ('ajceveopsqciai9ha40bu5skci', '::1', '1524705973', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730353937333B);
INSERT INTO `tbl_sessions` VALUES ('m0tpd64n0qt2ebsjalejj3qj67', '::1', '1524705973', '');
INSERT INTO `tbl_sessions` VALUES ('le29mmle9jlvhdgn4hsnhchgqs', '::1', '1524705973', '');
INSERT INTO `tbl_sessions` VALUES ('ipfb20k0e5lkiolj8h1lm6fr42', '::1', '1524705974', '');
INSERT INTO `tbl_sessions` VALUES ('eivhim8campa33q4javuujcp39', '::1', '1524706170', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363137303B);
INSERT INTO `tbl_sessions` VALUES ('0go05mgr5al621mmkq8t2vrvpu', '::1', '1524706171', '');
INSERT INTO `tbl_sessions` VALUES ('kmgcq557334i1tkodbllu4q5a4', '::1', '1524706171', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363137313B);
INSERT INTO `tbl_sessions` VALUES ('rbhpp0ku1fstfluut8l1v2rh03', '::1', '1524706171', '');
INSERT INTO `tbl_sessions` VALUES ('77limufrbn6s6lpdlauu04u986', '::1', '1524706172', '');
INSERT INTO `tbl_sessions` VALUES ('chn3ejpae147ojqgkqa5nj2tgm', '::1', '1524706217', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363231363B);
INSERT INTO `tbl_sessions` VALUES ('npo2a2p3u5qt6fsquvue5tgbbp', '::1', '1524706218', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363231383B);
INSERT INTO `tbl_sessions` VALUES ('5hf53sphjsvk3do5eogje01f5m', '::1', '1524706218', '');
INSERT INTO `tbl_sessions` VALUES ('0pulghma334jo0psls3vqnh5fp', '::1', '1524706218', '');
INSERT INTO `tbl_sessions` VALUES ('81mukbnco3njvar06iojdn2n2l', '::1', '1524706219', '');
INSERT INTO `tbl_sessions` VALUES ('i3ulf76mmj1u58jr4slv2dccng', '::1', '1524706237', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363233373B);
INSERT INTO `tbl_sessions` VALUES ('gbklk0lmnepmjjrl4b2lcc9ns2', '::1', '1524706238', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363233383B);
INSERT INTO `tbl_sessions` VALUES ('tgu4440lku140k67nnuevc96ph', '::1', '1524706238', '');
INSERT INTO `tbl_sessions` VALUES ('pea108lgl14f2nal9252f1klh9', '::1', '1524706238', '');
INSERT INTO `tbl_sessions` VALUES ('v7i3lt0kdtunmutrndl22b0pe4', '::1', '1524706239', '');
INSERT INTO `tbl_sessions` VALUES ('cpc6ffibsjj8j4pd116lshn12f', '::1', '1524706241', '');
INSERT INTO `tbl_sessions` VALUES ('qnu65645modgm4n1qojg1404gm', '::1', '1524706267', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363236373B);
INSERT INTO `tbl_sessions` VALUES ('9r7gtlahvla3s3mvegbscsbn5s', '::1', '1524706268', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363236383B);
INSERT INTO `tbl_sessions` VALUES ('ogqbhj8sfdvr7n6spd4bic58vp', '::1', '1524706268', '');
INSERT INTO `tbl_sessions` VALUES ('81cfgjfecvetvnousjvb6pftvs', '::1', '1524706268', '');
INSERT INTO `tbl_sessions` VALUES ('ubmuh8klcq8h17duai15bg2b78', '::1', '1524706269', '');
INSERT INTO `tbl_sessions` VALUES ('q11fomdfbu67vrt1jf5cuocckd', '::1', '1524706272', '');
INSERT INTO `tbl_sessions` VALUES ('0qppel3mpd3hrrctr4klo2jp6u', '::1', '1524706853', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363835333B);
INSERT INTO `tbl_sessions` VALUES ('rh8mog3vohivreoc56tqkdkoir', '::1', '1524706854', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730363835343B);
INSERT INTO `tbl_sessions` VALUES ('4c7olvg52etm1j3fn4lh61om7s', '::1', '1524706854', '');
INSERT INTO `tbl_sessions` VALUES ('1fqoaiscjp9ed1pi34qd2ihl2u', '::1', '1524706854', '');
INSERT INTO `tbl_sessions` VALUES ('15i6ibl4i05g05kae7vvu2acc3', '::1', '1524706854', '');
INSERT INTO `tbl_sessions` VALUES ('niv85t783oa4pqj8oov2uleumc', '::1', '1524707194', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373139343B);
INSERT INTO `tbl_sessions` VALUES ('6gvh0aq1j9b3471pioomrjlc7n', '::1', '1524707195', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373139353B);
INSERT INTO `tbl_sessions` VALUES ('l9nr9c1b3kamfu8cujkpg8vu5p', '::1', '1524707195', '');
INSERT INTO `tbl_sessions` VALUES ('0o9khtr0sse499h9dsdvqa3koi', '::1', '1524707195', '');
INSERT INTO `tbl_sessions` VALUES ('eta9oi81bjinqmjvm01nv54i32', '::1', '1524707196', '');
INSERT INTO `tbl_sessions` VALUES ('e4f0kjl628of2uppp7qr91jqh9', '::1', '1524707198', '');
INSERT INTO `tbl_sessions` VALUES ('0c3r975n2mjv9kc7tauithri0j', '::1', '1524707294', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373239343B);
INSERT INTO `tbl_sessions` VALUES ('0dn8u0o4bgtvi696i8b80glaa6', '::1', '1524707295', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373239353B);
INSERT INTO `tbl_sessions` VALUES ('5us3pasbqopo4aieiaoo2q81qt', '::1', '1524707295', '');
INSERT INTO `tbl_sessions` VALUES ('13353q1u3thvsb08ulah6lsbai', '::1', '1524707295', '');
INSERT INTO `tbl_sessions` VALUES ('3m96hcdhgkq8k1vabottqgm7vl', '::1', '1524707296', '');
INSERT INTO `tbl_sessions` VALUES ('2g668321tkj2qga2e64culv005', '::1', '1524707297', '');
INSERT INTO `tbl_sessions` VALUES ('tlfm4oj84o0omf3s7r2rk85f3s', '::1', '1524707318', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373331383B);
INSERT INTO `tbl_sessions` VALUES ('jsiqn99um9f5jopeg5epfkgtch', '::1', '1524707319', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373331393B);
INSERT INTO `tbl_sessions` VALUES ('u0lgh4triq8ttu6gqk9nhr8qdq', '::1', '1524707319', '');
INSERT INTO `tbl_sessions` VALUES ('c3d9g141qlaf7jffp9u2kc645d', '::1', '1524707319', '');
INSERT INTO `tbl_sessions` VALUES ('mag83vn28elj8kuobh67np17he', '::1', '1524707320', '');
INSERT INTO `tbl_sessions` VALUES ('7mgqi4i583jscln1g4n2r2ivb7', '::1', '1524707321', '');
INSERT INTO `tbl_sessions` VALUES ('9nhq81e1vmpl8iuhmmpgt7lou5', '::1', '1524707386', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373338363B);
INSERT INTO `tbl_sessions` VALUES ('9higha82dpnqdu5tajqkm6rccs', '::1', '1524707387', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373338373B);
INSERT INTO `tbl_sessions` VALUES ('nkon7ohu0gl4dkrgio1ic5sf92', '::1', '1524707387', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373338373B);
INSERT INTO `tbl_sessions` VALUES ('3obt3a45vovs9a3o9g0eo699hg', '::1', '1524707387', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373338373B);
INSERT INTO `tbl_sessions` VALUES ('c061kekrp3ogb1dcobrfnddn16', '::1', '1524707387', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373338373B);
INSERT INTO `tbl_sessions` VALUES ('t9hqil5ffqjilta0ir5d9nrouh', '::1', '1524707387', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373338373B);
INSERT INTO `tbl_sessions` VALUES ('vikvid736gdgfmtpsdmr8l891e', '::1', '1524707388', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373338383B);
INSERT INTO `tbl_sessions` VALUES ('0fuieuvctbrltjiribdmpci79c', '::1', '1524707389', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373338393B);
INSERT INTO `tbl_sessions` VALUES ('2si7o44pmlktilkam8i0c308tl', '::1', '1524707389', '');
INSERT INTO `tbl_sessions` VALUES ('smtig6d357nsb76lhn1dc74ukh', '::1', '1524707389', '');
INSERT INTO `tbl_sessions` VALUES ('mbj1anhfo23nep1i036vna8jnr', '::1', '1524707390', '');
INSERT INTO `tbl_sessions` VALUES ('e743eiee14vumpvdo61rimsp6k', '::1', '1524707391', '');
INSERT INTO `tbl_sessions` VALUES ('l3j24ui1jj65rv0g578nui15s2', '::1', '1524707474', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373437343B);
INSERT INTO `tbl_sessions` VALUES ('m1i2do7nmki9vlc4vcfthc9qhh', '::1', '1524707475', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373437353B);
INSERT INTO `tbl_sessions` VALUES ('9gimun6b1jo8rpqjhvc4v1dkpk', '::1', '1524707475', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373437353B);
INSERT INTO `tbl_sessions` VALUES ('hmmfdr2lg2s1fqtacs7gvqqes6', '::1', '1524707475', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373437353B);
INSERT INTO `tbl_sessions` VALUES ('ug7rtti04fep33cpaigniqose5', '::1', '1524707476', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373437363B);
INSERT INTO `tbl_sessions` VALUES ('7k93ckdvtg8dlo9rlbrrbqi4n2', '::1', '1524707477', '');
INSERT INTO `tbl_sessions` VALUES ('895ug706hkpmckg9epcdl3vtvl', '::1', '1524707477', '');
INSERT INTO `tbl_sessions` VALUES ('rff88eb5v2cf7dmtoprjumlctn', '::1', '1524707477', '');
INSERT INTO `tbl_sessions` VALUES ('mjbeg8vuqt22n7mksd9kui41fm', '::1', '1524707479', '');
INSERT INTO `tbl_sessions` VALUES ('n5c6gjrhudqvnmbupgfisgvjc7', '::1', '1524707551', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373535313B);
INSERT INTO `tbl_sessions` VALUES ('09nkp3l1681m69bhc6th9rpfv0', '::1', '1524707552', '');
INSERT INTO `tbl_sessions` VALUES ('k70t9dvnl60ii6tb6db1s6nf29', '::1', '1524707552', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373535323B);
INSERT INTO `tbl_sessions` VALUES ('lc9fgq42ujhnsm04jbm6m3v3lv', '::1', '1524707552', '');
INSERT INTO `tbl_sessions` VALUES ('nff3jje6ci8fqtvromodaijlgl', '::1', '1524707553', '');
INSERT INTO `tbl_sessions` VALUES ('9qte38b5142sbb0ul74qu67oqm', '::1', '1524707555', '');
INSERT INTO `tbl_sessions` VALUES ('fj69rdg8pphub7vfk2m1jqd4db', '::1', '1524707567', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373536373B);
INSERT INTO `tbl_sessions` VALUES ('c0n1sr0l3qvcibjmfna2731hmk', '::1', '1524707568', '');
INSERT INTO `tbl_sessions` VALUES ('jj30mp597a115jcnh45anrnie4', '::1', '1524707568', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373536383B);
INSERT INTO `tbl_sessions` VALUES ('rc9bvhih0maonf2q40l8m7m8ub', '::1', '1524707569', '');
INSERT INTO `tbl_sessions` VALUES ('l4cueroui5fk9tujbbd5tg5jad', '::1', '1524707569', '');
INSERT INTO `tbl_sessions` VALUES ('cl1pniplgdhodi4ulo4891io87', '::1', '1524707571', '');
INSERT INTO `tbl_sessions` VALUES ('f9p1kj8jvaln7hfqtktkahc1m8', '::1', '1524707612', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373631323B);
INSERT INTO `tbl_sessions` VALUES ('m0nqlt94njf0s371mfi63cnokb', '::1', '1524707613', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373631333B);
INSERT INTO `tbl_sessions` VALUES ('65bcesgdgcaimr72t1onpgr5nr', '::1', '1524707613', '');
INSERT INTO `tbl_sessions` VALUES ('h9egdm8muvsgubpngloasvmas8', '::1', '1524707613', '');
INSERT INTO `tbl_sessions` VALUES ('pq1ggudii63lal6osgg41tqs6j', '::1', '1524707614', '');
INSERT INTO `tbl_sessions` VALUES ('g090rp14k9v9tqablfgn0urb01', '::1', '1524707615', '');
INSERT INTO `tbl_sessions` VALUES ('qes3i1k6k247gb3jf75me8ovon', '::1', '1524707622', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373632323B);
INSERT INTO `tbl_sessions` VALUES ('69qujbr1djqmhv6jts7jpff5v4', '::1', '1524707623', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373632333B);
INSERT INTO `tbl_sessions` VALUES ('68p7mncttujib1kqb53fi38i5t', '::1', '1524707623', '');
INSERT INTO `tbl_sessions` VALUES ('7ads11fj34vp3qpsr03a1d3r22', '::1', '1524707623', '');
INSERT INTO `tbl_sessions` VALUES ('br1q9nlb41h3kue334k61pb6sv', '::1', '1524707624', '');
INSERT INTO `tbl_sessions` VALUES ('2nnc5degoaqo4ab0sn2oo2l3qo', '::1', '1524707626', '');
INSERT INTO `tbl_sessions` VALUES ('543vliduo0rc1mr0drd9qt1ece', '::1', '1524707664', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373636343B);
INSERT INTO `tbl_sessions` VALUES ('jfedmlaekg5oqmrds694bkd8af', '::1', '1524707666', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373636363B);
INSERT INTO `tbl_sessions` VALUES ('5ihumutop6m7td123j301ksndb', '::1', '1524707666', '');
INSERT INTO `tbl_sessions` VALUES ('fscve74p5ie45c5cm01dv80t3d', '::1', '1524707666', '');
INSERT INTO `tbl_sessions` VALUES ('8ko6lmdqg9jtnekj3g4tod4e68', '::1', '1524707667', '');
INSERT INTO `tbl_sessions` VALUES ('c094bsamvtr29sm6pg6d3bt9e4', '::1', '1524707668', '');
INSERT INTO `tbl_sessions` VALUES ('puo5uoql7ou38et3b5jc2oes4s', '::1', '1524707903', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373930333B);
INSERT INTO `tbl_sessions` VALUES ('3as478n9ukvvguad7q8l5tp2qg', '::1', '1524707904', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730373930343B);
INSERT INTO `tbl_sessions` VALUES ('nsl0usnp73rpdr2he8f0lkrk13', '::1', '1524707905', '');
INSERT INTO `tbl_sessions` VALUES ('bre5sujsnvdi7p2ib8svm1veeg', '::1', '1524707905', '');
INSERT INTO `tbl_sessions` VALUES ('qnjta5be4jn64bd92hjha2fif4', '::1', '1524707905', '');
INSERT INTO `tbl_sessions` VALUES ('18lo55isgmojnu4s29212jhg11', '::1', '1524707907', '');
INSERT INTO `tbl_sessions` VALUES ('56u70dem0oo1fihresspndocj0', '::1', '1524708008', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383030383B);
INSERT INTO `tbl_sessions` VALUES ('ho3k69tdtpaiadkdlmos1l5be5', '::1', '1524708009', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383030393B);
INSERT INTO `tbl_sessions` VALUES ('p1i1ssh7p5us5lf614t5v9nat5', '::1', '1524708009', '');
INSERT INTO `tbl_sessions` VALUES ('kivjvd6cifaac7cmav7mj1ftc1', '::1', '1524708009', '');
INSERT INTO `tbl_sessions` VALUES ('k4q4ft8i3shaua87je5sqc5hrh', '::1', '1524708010', '');
INSERT INTO `tbl_sessions` VALUES ('tv77jf7e8sahsojdm2vhg3aftl', '::1', '1524708011', '');
INSERT INTO `tbl_sessions` VALUES ('p7j37tqtkcpha2mabd4l49li0n', '::1', '1524708042', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383034323B);
INSERT INTO `tbl_sessions` VALUES ('5vsq61edo8pvg3659uc946ser1', '::1', '1524708043', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383034333B);
INSERT INTO `tbl_sessions` VALUES ('veh63lset7q1kd1sun7gqfoqb9', '::1', '1524708043', '');
INSERT INTO `tbl_sessions` VALUES ('j1rcqr8dkk43fdqu8b14802a6m', '::1', '1524708043', '');
INSERT INTO `tbl_sessions` VALUES ('og7r76dtddqu6drgn0jrku376s', '::1', '1524708043', '');
INSERT INTO `tbl_sessions` VALUES ('8usagmoj2r57fvdq5hhr4qn0s3', '::1', '1524708045', '');
INSERT INTO `tbl_sessions` VALUES ('17plm9f35uk2rg8orl36q8rq2p', '::1', '1524708264', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383236343B);
INSERT INTO `tbl_sessions` VALUES ('7o622sqhl8a54qmip6q8pe5u9r', '::1', '1524708265', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383236353B);
INSERT INTO `tbl_sessions` VALUES ('6p3a3irjbk6j3usdrjumefl9c3', '::1', '1524708265', '');
INSERT INTO `tbl_sessions` VALUES ('llnprhtrork5puegc8lcihksc9', '::1', '1524708265', '');
INSERT INTO `tbl_sessions` VALUES ('6stnvk2ao09mi2tt3qnoa8lloa', '::1', '1524708266', '');
INSERT INTO `tbl_sessions` VALUES ('vpuppvorh5g31k424ql3krqvtn', '::1', '1524708266', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383236363B);
INSERT INTO `tbl_sessions` VALUES ('nl9nmk0438utad5is0l85isc1h', '::1', '1524708267', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383236373B);
INSERT INTO `tbl_sessions` VALUES ('47dts1jv64hgouralhfp9sfjo4', '::1', '1524708267', '');
INSERT INTO `tbl_sessions` VALUES ('sgr7ortq8e25osn01qclst86ri', '::1', '1524708267', '');
INSERT INTO `tbl_sessions` VALUES ('02ud48ntngv6ncmbd3a0090hcr', '::1', '1524708267', '');
INSERT INTO `tbl_sessions` VALUES ('sbfb2tmfa3ppm8riabaa1vt6eh', '::1', '1524708269', '');
INSERT INTO `tbl_sessions` VALUES ('uhk6p07kqm9g9hjm4aim4bbiu8', '::1', '1524708317', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383331373B);
INSERT INTO `tbl_sessions` VALUES ('j1qp3edtuh9l7ft5v27scieu3t', '::1', '1524708318', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383331383B);
INSERT INTO `tbl_sessions` VALUES ('3efhhqlbeij6gvbfboau90vrm7', '::1', '1524708318', '');
INSERT INTO `tbl_sessions` VALUES ('9n92bu2s442h0bksplniet0mj7', '::1', '1524708318', '');
INSERT INTO `tbl_sessions` VALUES ('nnn9ifjhkplfbkto2m93hm5408', '::1', '1524708318', '');
INSERT INTO `tbl_sessions` VALUES ('2ppjnuofp0bct6e1jgcgn7bvnt', '::1', '1524708320', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383332303B);
INSERT INTO `tbl_sessions` VALUES ('ac4mi6nl86b5f2uqdpi5cj3osk', '::1', '1524708320', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383332303B);
INSERT INTO `tbl_sessions` VALUES ('bogbc4esgvpgrej6snrh2nr79j', '::1', '1524708320', '');
INSERT INTO `tbl_sessions` VALUES ('jjcqk4463ihdubf13d6oodd68e', '::1', '1524708320', '');
INSERT INTO `tbl_sessions` VALUES ('tum7vj2d12gagmgjk1jbbafbre', '::1', '1524708321', '');
INSERT INTO `tbl_sessions` VALUES ('vflu6cm70h3km99m5pp1fkf3as', '::1', '1524708322', '');
INSERT INTO `tbl_sessions` VALUES ('jqb586rlmpg4cb2bmfsakapobn', '::1', '1524708357', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383335373B);
INSERT INTO `tbl_sessions` VALUES ('01hg25oq7oppm7cqg6ig47khbn', '::1', '1524708358', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383335383B);
INSERT INTO `tbl_sessions` VALUES ('tocbt3opl4m32d319tk806n5o7', '::1', '1524708359', '');
INSERT INTO `tbl_sessions` VALUES ('g5h1ubis6qf4shkcm6mnf7nvu2', '::1', '1524708359', '');
INSERT INTO `tbl_sessions` VALUES ('fqikbf4a4960i0vt6rbdlep2t5', '::1', '1524708359', '');
INSERT INTO `tbl_sessions` VALUES ('oseledu08sumfor34t9oqso7s9', '::1', '1524708361', '');
INSERT INTO `tbl_sessions` VALUES ('1o9kgbvchu5ag1vavra9l1rgov', '::1', '1524708393', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383339333B);
INSERT INTO `tbl_sessions` VALUES ('qjadaam7a0o78bbd5kmam773jh', '::1', '1524708394', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383339343B);
INSERT INTO `tbl_sessions` VALUES ('qnb3qml4c26vbushhm8pkec1kd', '::1', '1524708394', '');
INSERT INTO `tbl_sessions` VALUES ('skv36o5ob4gppvugu9kob3qdqc', '::1', '1524708394', '');
INSERT INTO `tbl_sessions` VALUES ('32mub61cn43edg5msoj44nd0v0', '::1', '1524708395', '');
INSERT INTO `tbl_sessions` VALUES ('f7u5tcrj5o05v9k5fog4sfbtbq', '::1', '1524708398', '');
INSERT INTO `tbl_sessions` VALUES ('v4if7rtblf2oci61qnf0il4a6c', '::1', '1524708405', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383430353B);
INSERT INTO `tbl_sessions` VALUES ('ff2b1nbova0mj8ih7o5vbparjl', '::1', '1524708406', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383430363B);
INSERT INTO `tbl_sessions` VALUES ('nqcl82ufn3tb8j1glg3orfvu2e', '::1', '1524708406', '');
INSERT INTO `tbl_sessions` VALUES ('t5mqi2n9hdpu7jhot09penlc76', '::1', '1524708406', '');
INSERT INTO `tbl_sessions` VALUES ('j6s34s8dh66kojl444fitp9ob6', '::1', '1524708407', '');
INSERT INTO `tbl_sessions` VALUES ('0gcbl9bobccf4hmaoa3899jue4', '::1', '1524708504', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383530343B);
INSERT INTO `tbl_sessions` VALUES ('tf7i3nkidrf4jaeca1vp3n8deo', '::1', '1524708505', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383530353B);
INSERT INTO `tbl_sessions` VALUES ('2p2n0flvc8juabl3rneimdphvr', '::1', '1524708505', '');
INSERT INTO `tbl_sessions` VALUES ('fr81b45n9m4ej4ea7vs179rvld', '::1', '1524708505', '');
INSERT INTO `tbl_sessions` VALUES ('m3g43lg6ta8bcrrqbuctl1djtm', '::1', '1524708506', '');
INSERT INTO `tbl_sessions` VALUES ('kv48i2hrgo9a9vrmff30t3am10', '::1', '1524708507', '');
INSERT INTO `tbl_sessions` VALUES ('s1840q4bsc027pe56ir1g76tb2', '::1', '1524708550', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383535303B);
INSERT INTO `tbl_sessions` VALUES ('utm7aj4vlsu4cjsg1ihpqmf8jp', '::1', '1524708551', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383535313B);
INSERT INTO `tbl_sessions` VALUES ('568cilchd9rn5rkrm4js6ti1tl', '::1', '1524708551', '');
INSERT INTO `tbl_sessions` VALUES ('ihoojhoptbdukn0n6b3likn89u', '::1', '1524708551', '');
INSERT INTO `tbl_sessions` VALUES ('0p4usjniptn38th57bfg7pe7bf', '::1', '1524708552', '');
INSERT INTO `tbl_sessions` VALUES ('afu38ee5q8gvu7358m5dleasd0', '::1', '1524708553', '');
INSERT INTO `tbl_sessions` VALUES ('2tq50krm7rk5ev851uk7j9eb35', '::1', '1524708689', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383638393B);
INSERT INTO `tbl_sessions` VALUES ('bkt53ulo7rgsit0bk1fgg4g5ep', '::1', '1524708690', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383639303B);
INSERT INTO `tbl_sessions` VALUES ('afuph7eo82quq4umap1p374v4m', '::1', '1524708690', '');
INSERT INTO `tbl_sessions` VALUES ('oe279usa28l93o41foa97a2cjj', '::1', '1524708690', '');
INSERT INTO `tbl_sessions` VALUES ('gaamuckahvggqljhfhigp5ts5g', '::1', '1524708691', '');
INSERT INTO `tbl_sessions` VALUES ('96gk8fphs20h5vrmbd9btq0bsq', '::1', '1524708692', '');
INSERT INTO `tbl_sessions` VALUES ('oqa8ku33mcb79fqvjuu5mml6up', '::1', '1524708712', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383731323B);
INSERT INTO `tbl_sessions` VALUES ('u9qsph58h3rh7ebdb2nraoas1h', '::1', '1524708713', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383731333B);
INSERT INTO `tbl_sessions` VALUES ('c5imfsspobnregacbg8svpbte7', '::1', '1524708713', '');
INSERT INTO `tbl_sessions` VALUES ('iim8uijc1s29n1mhv1mgvtirjv', '::1', '1524708713', '');
INSERT INTO `tbl_sessions` VALUES ('2o9fr8pmmm4udm2ljp0m5qk2ce', '::1', '1524708714', '');
INSERT INTO `tbl_sessions` VALUES ('996og2ggjtvtmkqpili94o3tdr', '::1', '1524708715', '');
INSERT INTO `tbl_sessions` VALUES ('1peh9d347nunl7csd1pj22o8qe', '::1', '1524708840', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383834303B);
INSERT INTO `tbl_sessions` VALUES ('4s2rtp8e701r6dpjdnjql7kn6d', '::1', '1524708841', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383834303B);
INSERT INTO `tbl_sessions` VALUES ('29gjuvf1uesq2os120mp0lbia7', '::1', '1524708841', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383834313B);
INSERT INTO `tbl_sessions` VALUES ('3t0n078dnt8geh90uuk1et4dl1', '::1', '1524708841', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383834313B);
INSERT INTO `tbl_sessions` VALUES ('9v19186ppoghgcc6pgn914lml2', '::1', '1524708842', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383834323B);
INSERT INTO `tbl_sessions` VALUES ('rfcjo1uftvgd9mti4lq0qoao84', '::1', '1524708842', '');
INSERT INTO `tbl_sessions` VALUES ('1e22ppknduobe7mnj6cofudvgr', '::1', '1524708842', '');
INSERT INTO `tbl_sessions` VALUES ('3pbabruaa2gsrd9d6sfr6rj4rs', '::1', '1524708843', '');
INSERT INTO `tbl_sessions` VALUES ('ir9o2nlv1l031as7aj2ucb1qom', '::1', '1524708844', '');
INSERT INTO `tbl_sessions` VALUES ('hi2rtpgm89tmicqlaj1o6n74cu', '::1', '1524708885', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383838353B);
INSERT INTO `tbl_sessions` VALUES ('v5ldippkbpvelskdqejj18r7p5', '::1', '1524708886', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730383838363B);
INSERT INTO `tbl_sessions` VALUES ('pmqn096mtqal8fk1uq5h603m14', '::1', '1524708886', '');
INSERT INTO `tbl_sessions` VALUES ('acgv10nkfbq08fafu6o7rjteok', '::1', '1524708887', '');
INSERT INTO `tbl_sessions` VALUES ('qardsv7dvhb4vskudtuvq1sml9', '::1', '1524708887', '');
INSERT INTO `tbl_sessions` VALUES ('3o1p6iqvp3eqp9j5n1a1hqkf3h', '::1', '1524708889', '');
INSERT INTO `tbl_sessions` VALUES ('dhekhch1vgfnporsoivrjf0h4r', '::1', '1524709880', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730393838303B);
INSERT INTO `tbl_sessions` VALUES ('hjo59cv3077pe6uobtgtipfl4o', '::1', '1524709881', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730393838313B);
INSERT INTO `tbl_sessions` VALUES ('1f5m9tt9mscjjhlsmpsiictc1g', '::1', '1524709881', '');
INSERT INTO `tbl_sessions` VALUES ('j44vr3c71mmr9u7i3tut7v0t6c', '::1', '1524709881', '');
INSERT INTO `tbl_sessions` VALUES ('9vnkp78nv97mnbjpktgr987kf6', '::1', '1524709882', '');
INSERT INTO `tbl_sessions` VALUES ('3etlpbcsrc319pb5k03f91q3oi', '::1', '1524709883', '');
INSERT INTO `tbl_sessions` VALUES ('6g3alh8e9irpd09i528feoa6t9', '::1', '1524709946', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730393934363B);
INSERT INTO `tbl_sessions` VALUES ('v81eua6i2ebh2rngdt7f2spnvf', '::1', '1524709947', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343730393934373B);
INSERT INTO `tbl_sessions` VALUES ('di4pl0m78o9nrp8lihrv8867ru', '::1', '1524709947', '');
INSERT INTO `tbl_sessions` VALUES ('t5j8u1l6mv8a7m7jn1qve5bh2v', '::1', '1524709947', '');
INSERT INTO `tbl_sessions` VALUES ('svtbi3j1rhufnh7dbqh2981ags', '::1', '1524709948', '');
INSERT INTO `tbl_sessions` VALUES ('be53r79fftcklpslf9rnt7frsc', '::1', '1524709949', '');
INSERT INTO `tbl_sessions` VALUES ('lla9jola3a95vsr443pi32t3so', '::1', '1524710422', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343731303432323B);
INSERT INTO `tbl_sessions` VALUES ('2ku03rdddl9l9va0q5c5r569mk', '::1', '1524710423', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343731303432333B);
INSERT INTO `tbl_sessions` VALUES ('5qr472m05ikekd0kvee9li2djv', '::1', '1524710423', '');
INSERT INTO `tbl_sessions` VALUES ('trqs6oamj1v61g4v6tf5c1cc2m', '::1', '1524710423', '');
INSERT INTO `tbl_sessions` VALUES ('h3lt37sa0g5ufk9dmtkvrh2gb3', '::1', '1524710423', '');
INSERT INTO `tbl_sessions` VALUES ('s9bhmkg4jh3ve2141kchv0cnd6', '::1', '1524710425', '');
INSERT INTO `tbl_sessions` VALUES ('9bik6t19krv7jv4iqjmfthrv8l', '::1', '1524710501', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343731303530313B);
INSERT INTO `tbl_sessions` VALUES ('1p6ba32a9h89v44ivfj06i8uen', '::1', '1524710502', 0x5F5F63695F6C6173745F726567656E65726174657C693A313532343731303530323B);
INSERT INTO `tbl_sessions` VALUES ('ae779vpd6nu3arnjjkhbckdhbe', '::1', '1524710502', '');
INSERT INTO `tbl_sessions` VALUES ('7b7d2t8qnn5s7b18j475ji5to9', '::1', '1524710502', '');
INSERT INTO `tbl_sessions` VALUES ('sadcf7s3t8a6ocvtefi7au91ae', '::1', '1524710503', '');
INSERT INTO `tbl_sessions` VALUES ('ken6jnogff9nqvi8tbeh1b0dbe', '::1', '1524710504', '');
INSERT INTO `tbl_t_blacklist` VALUES ('ncjnxknkxkxkxzmxk', '04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', '0', 'sdmksdm', '2018-04-19 00:00:00', 'SYSTEM', '2018-04-25 08:49:00');
INSERT INTO `tbl_t_blacklist_copy_copy` VALUES ('ncjnxknkxkxkxzmxk', '04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', '35e69739ad9b3f2694e323973ece4140', '1', null, null, null, null, null, '0', 'sdmksdm', '2018-04-19 00:00:00', '1234', '2018-04-23 10:08:38');
INSERT INTO `tbl_t_lamaran` VALUES ('000', '111AAA222AAA', '35e69739ad9b3f2694e323973ece4140', 'tes', '0000-00-00 00:00:00', 'tes', '0000-00-00 00:00:00');
INSERT INTO `tbl_t_lamaran` VALUES ('hcdjcnsjnscnsucns', '04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', '35e69739ad9b3f2694e323973ece4140', 'ksosj', '2018-04-19 03:00:00', 'ksosj', '2018-04-19 00:00:00');
INSERT INTO `tbl_t_progress_lamaran` VALUES ('1212', '111AAA222AAA', '35e69739ad9b3f2694e323973ece4140', '0', null, null, null, null, null, '1234', '2018-04-24 11:41:59', 'SYSTEM', '2018-04-25 09:00:00');
INSERT INTO `tbl_t_progress_lamaran` VALUES ('ncjnxknkxkxkxzmxk', '04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', '35e69739ad9b3f2694e323973ece4140', '0', '1', '1', null, null, null, 'sdmksdm', '2018-04-19 00:00:00', '1234', '2018-04-25 14:46:46');
INSERT INTO `tbl_t_progress_lamaran` VALUES ('sss1', '04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', '35e69739ad9b3f2694e323973ece4140', '1', '1', '0', null, null, null, 'sdmksdm', '2018-04-09 00:00:00', '1234', '2018-04-10 15:47:00');
INSERT INTO `tbl_t_progress_lamaran` VALUES ('wwws', '', '', '1', null, null, null, null, null, '1234', '2018-04-25 14:11:44', '1234', '2018-04-25 14:11:44');
INSERT INTO `tbl_t_rekrutmen` VALUES ('35e69739ad9b3f2694e323973ece4140', 'Source 2', 'Kab.Aceh Barat', '123', '2018-01', 'aaa', 'HO', 'sdsd', '2018-04-18', '2018-04-19', '14:00 WIB', 'posted', 'Abdul', '2018-04-18 09:51:44', 'Abdul', '2018-04-18 09:52:15');
INSERT INTO `tbl_t_rekrutmen` VALUES ('7854b785b58561a8f201d8f841ef0947', 'Source 1', 'Kab.Aceh Barat', '123456', '2018-01', '123456', 'HO', '12345', '2018-04-18', '2018-04-26', '14:00 WIB', 'draft', 'Abdul', '2018-04-18 09:17:29', 'Abdul', '2018-04-18 09:17:29');
INSERT INTO `tbl_t_rekrutmen` VALUES ('bc665b24c905534f7ec4dca5fea5631d', 'Source 1', 'Kab.Aceh Barat', '12345', '2018-01', '12345', 'HO', '12345', '2018-04-18', '2018-04-26', '14:00 WIB', 'closed', 'Abdul', '2018-04-18 08:54:46', 'Abdul', '2018-04-18 09:51:55');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6e84aa3bfb9.05593551', 'ee957a640ea4e9d0c3b7d6a60619a270', '462f98f4ada974f5dceffe4b370dfab4', 'Abdul', '2018-04-18 08:40:10', 'Abdul', '2018-04-18 08:40:10');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6e84ac42d26.35301387', 'ee957a640ea4e9d0c3b7d6a60619a270', '6633a327a60021c67ef191b3f9c03f37', 'Abdul', '2018-04-18 08:40:10', 'Abdul', '2018-04-18 08:40:10');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6e95bbdc435.59627936', 'daa83d5e94b0bf1c6da436ad33e1c40c', '462f98f4ada974f5dceffe4b370dfab4', 'Abdul', '2018-04-18 08:44:43', 'Abdul', '2018-04-18 08:44:43');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6e95bc5d3d9.53519585', 'daa83d5e94b0bf1c6da436ad33e1c40c', '6633a327a60021c67ef191b3f9c03f37', 'Abdul', '2018-04-18 08:44:43', 'Abdul', '2018-04-18 08:44:43');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6ebb686b984.06966015', 'bc665b24c905534f7ec4dca5fea5631d', '462f98f4ada974f5dceffe4b370dfab4', 'Abdul', '2018-04-18 08:54:46', 'Abdul', '2018-04-18 08:54:46');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6ebb6971da4.33531206', 'bc665b24c905534f7ec4dca5fea5631d', '6633a327a60021c67ef191b3f9c03f37', 'Abdul', '2018-04-18 08:54:46', 'Abdul', '2018-04-18 08:54:46');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6f109ace4a3.13047099', '7854b785b58561a8f201d8f841ef0947', '462f98f4ada974f5dceffe4b370dfab4', 'Abdul', '2018-04-18 09:17:29', 'Abdul', '2018-04-18 09:17:29');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6f109ca9d77.69465136', '7854b785b58561a8f201d8f841ef0947', '6633a327a60021c67ef191b3f9c03f37', 'Abdul', '2018-04-18 09:17:29', 'Abdul', '2018-04-18 09:17:29');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6f910de4089.21419628', '35e69739ad9b3f2694e323973ece4140', '462f98f4ada974f5dceffe4b370dfab4', 'Abdul', '2018-04-18 09:51:44', 'Abdul', '2018-04-18 09:51:44');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6f91102a208.85485011', '35e69739ad9b3f2694e323973ece4140', '6633a327a60021c67ef191b3f9c03f37', 'Abdul', '2018-04-18 09:51:44', 'Abdul', '2018-04-18 09:51:44');
INSERT INTO `tbl_t_rekrutmen_detail` VALUES ('5ad6f91112caf6.59767282', '35e69739ad9b3f2694e323973ece4140', '8a10b73a82b9811a4edf61aac390d901', 'Abdul', '2018-04-18 09:51:45', 'Abdul', '2018-04-18 09:51:45');
INSERT INTO `tbl_user` VALUES ('04f289d5-3ec5-11e8-a66f-782bcbdbdcb7', 'Bagus Kuncoro', '1111111111111111', 'user', '$2a$12$esimxoRlTfZjgAn7FXmQj.FgIQNOLd.GS5GcsC.Cl/CpOjJcBkQ7e', 'abdul.wicaksono@gmail.com', 'SMA/SMK', 'ADMINISTRASI BISNIS', 'ADMINISTRASI BISNIS(KEUANGAN)', '0', '$2a$12$i74A5mGDbQqwAjF7iFNkKOa5yN80R4v02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_user` VALUES ('111AAA222AAA', 'yaq', '9999999999999999', 'user', '$2a$12$esimxoRlTfZjgAn7FXmQj.FgIQNOLd.GS5GcsC.Cl/CpOjJcBkQ7e', 'yaq@gmail.com', 'D-III', 'KOMPUTER', 'MI', '2.8', '$2a$12$i74A5mGDbQqwAjF7iFNkKOa5yN80R4v02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');
