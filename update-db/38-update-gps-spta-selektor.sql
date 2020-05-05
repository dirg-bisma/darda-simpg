ALTER TABLE `t_spta` ADD COLUMN `rfid` VARCHAR(100) NULL AFTER `sbh_sap_tgl`, ADD COLUMN `rfid_tagging` DATETIME NULL AFTER `rfid`, ADD COLUMN `rfid_status` SMALLINT(1) DEFAULT 0 NULL COMMENT '0. belum tag 1. sudah tag 2. close tag' AFTER `rfid_tagging`, ADD COLUMN `rfid_closetag` DATETIME NULL AFTER `rfid_status`; 
ALTER TABLE `t_spta` CHANGE `rfid` `rfid_card` VARCHAR(100) CHARSET latin1 COLLATE latin1_swedish_ci NULL, CHANGE `rfid_tagging` `rfid_card_tagging` DATETIME NULL, CHANGE `rfid_status` `rfid_card_status` SMALLINT(1) DEFAULT 0 NULL COMMENT '0. belum tag 1. sudah tag 2. close tag', CHANGE `rfid_closetag` `rfid_card_closetag` DATETIME NULL; 
ALTER TABLE `t_spta` ADD COLUMN `rfid_sticker` VARCHAR(100) NULL AFTER `rfid_card_closetag`, ADD COLUMN `rfid_sticker_tagging` DATETIME NULL AFTER `rfid_sticker`, ADD COLUMN `rfid_sticker_status` SMALLINT(1) DEFAULT 0 NULL COMMENT '0. kosong 1. sudah tag 2. close tag' AFTER `rfid_sticker_tagging`, ADD COLUMN `rfid_sticker_closetag` DATETIME NULL AFTER `rfid_sticker_status`, ADD COLUMN `id_truck` INT(50) NULL AFTER `rfid_sticker_closetag`, ADD COLUMN `persno_mandor` VARCHAR(100) NULL AFTER `id_truck`, ADD COLUMN `status_distribusi` SMALLINT(1) DEFAULT 0 NULL COMMENT '0. belum distribusi 1. sudah distribusi 2. non distribusi' AFTER `persno_mandor`, ADD COLUMN `tgl_distribusi` DATETIME NULL AFTER `status_distribusi`;
CREATE TABLE `m_truk_gps`( `id` INT(50) NOT NULL AUTO_INCREMENT, `vendor_id` INT(20), `nopol_truk` VARCHAR(8), `norangka` VARCHAR(150), `namatruk` VARCHAR(150), `imei` VARCHAR(150), `latitude` DOUBLE(10,7), `longitude` DOUBLE(10,7), `last_update` DATETIME, `status` SMALLINT(1) DEFAULT 0 COMMENT '0. free 1. on task', `task_update` DATETIME, PRIMARY KEY (`id`) );
ALTER TABLE `m_truk_gps` ADD COLUMN `rfid_sticker` VARCHAR(100) NULL AFTER `task_update`;
ALTER TABLE `m_truk_gps` ADD UNIQUE INDEX (`nopol_truk`), ADD UNIQUE INDEX (`rfid_sticker`);
ALTER TABLE `m_truk_gps` CHANGE `latitude` `latitude` DOUBLE DEFAULT 0 NULL, CHANGE `longitude` `longitude` DOUBLE DEFAULT 0 NULL;
ALTER TABLE `t_selektor` CHANGE `id_selektor` `id_selektor` INT(11) NOT NULL AUTO_INCREMENT COMMENT ' ', ADD COLUMN `rfid_card` VARCHAR(100) NULL AFTER `tgl_urut`, ADD COLUMN `open_gate` DATETIME NULL AFTER `rfid_card`; 
ALTER ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_selektor_data` AS ( SELECT `b`.`no_spat` AS `no_spat`, `b`.`kode_blok` AS `kode_blok`, `e`.`deskripsi_blok` AS `deskripsi_blok`, `b`.`kode_kat_lahan` AS `kode_kat_lahan`, `c`.`name` AS `mandor`, `a`.`id_selektor` AS `id_selektor`, `a`.`id_spta` AS `id_spta`, `a`.`persno_mandor_tma` AS `persno_mandor_tma`, `a`.`tgl_tebang` AS `tgl_tebang`, `a`.`no_angkutan` AS `no_angkutan`, `a`.`ptgs_angkutan` AS `ptgs_angkutan`, `a`.`ha_tertebang` AS `ha_tertebang`, `a`.`terbakar_sel` AS `terbakar_sel`, `a`.`ditolak_sel` AS `ditolak_sel`, `a`.`ditolak_alasan` AS `ditolak_alasan`, `a`.`brix_sel` AS `brix_sel`, `a`.`ph_sel` AS `ph_sel`, `a`.`tgl_pintumasuk` AS `tgl_pintumasuk`, `a`.`ptgs_pintumasuk` AS `ptgs_pintumasuk`, `a`.`no_urut_timbang` AS `no_urut_timbang`, `a`.`no_trainstat` AS `no_trainstat`, `a`.`no_hv` AS `no_hv`, `a`.`op_hv` AS `op_hv`, `a`.`no_stipping` AS `no_stipping`, `a`.`op_stipping` AS `op_stipping`, `a`.`no_gl` AS `no_gl`, `a`.`op_gl` AS `op_gl`, `a`.`ptgs_selektor` AS `ptgs_selektor`, `a`.`tgl_selektor` AS `tgl_selektor`, `a`.`tgl_urut` AS `tgl_urut`, `a`.`no_urut` AS `no_urut`, a.open_gate FROM (((`t_selektor` `a` JOIN `t_spta` `b` ON ((`a`.`id_spta` = `b`.`id`))) JOIN `sap_m_karyawan` `c` ON ((`c`.`Persno` = CONVERT(`a`.`persno_mandor_tma` USING utf8)))) JOIN `sap_field` `e` ON ((`e`.`kode_blok` = `b`.`kode_blok`))) ORDER BY `a`.`tgl_selektor` DESC);
INSERT INTO `tb_groups` (`group_id`, `name`, `description`, `level`) VALUES ('22', 'User Mobile', 'User Mobile', '6');