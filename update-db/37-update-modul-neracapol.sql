ALTER TABLE `t_lap_harian_pengolahan_ptpn` ADD COLUMN `persen_pol_tetes` DOUBLE(10,2) DEFAULT 0 NULL AFTER `total_persen_jamgil_sd`, ADD COLUMN `persen_pol_tetes_sd` DOUBLE(10,2) DEFAULT 0 NULL AFTER `persen_pol_tetes`, ADD COLUMN `ton_pol_tetes` DOUBLE(10,2) DEFAULT 0 NULL AFTER `persen_pol_tetes_sd`, ADD COLUMN `ton_pol_tetes_sd` DOUBLE(10,2) DEFAULT 0 NULL AFTER `ton_pol_tetes`, ADD COLUMN `k_dlm_tetes` DOUBLE(10,2) DEFAULT 0 NULL AFTER `ton_pol_tetes_sd`, ADD COLUMN `k_dlm_tetes_sd` DOUBLE(10,2) DEFAULT 0 NULL AFTER `k_dlm_tetes`, CHANGE `ampas_ton` `ampas_ton` DOUBLE(10,2) DEFAULT 0.000 NULL, CHANGE `ampas_ton_sd` `ampas_ton_sd` DOUBLE(10,2) NULL, CHANGE `persen_pol_ampas` `persen_pol_ampas` DOUBLE(10,2) DEFAULT 0.000 NULL, CHANGE `persen_pol_ampas_sd` `persen_pol_ampas_sd` DOUBLE(10,2) NULL, ADD COLUMN `pol_ampas_ton` DOUBLE(10,2) NULL AFTER `persen_pol_ampas_sd`, ADD COLUMN `pol_ampas_ton_sd` DOUBLE(10,2) NULL AFTER `pol_ampas_ton`, ADD COLUMN `k_dlm_ampas` DOUBLE(10,2) NULL AFTER `pol_ampas_ton_sd`, ADD COLUMN `k_dlm_ampas_sd` DOUBLE(10,2) NULL AFTER `k_dlm_ampas`, CHANGE `blotong_ton` `blotong_ton` DOUBLE(10,2) DEFAULT 0.000 NULL, CHANGE `blotong_ton_sd` `blotong_ton_sd` DOUBLE(10,2) NULL, CHANGE `persen_pol_blotong` `persen_pol_blotong` DOUBLE(10,2) DEFAULT 0.000 NULL, CHANGE `persen_pol_blotong_sd` `persen_pol_blotong_sd` DOUBLE(10,2) NULL, ADD COLUMN `pol_blotong_ton` DOUBLE(10,2) NULL AFTER `persen_pol_blotong_sd`, ADD COLUMN `pol_blotong_ton_sd` DOUBLE(10,2) NULL AFTER `pol_blotong_ton`, ADD COLUMN `k_dlm_blotong` DOUBLE(10,2) NULL AFTER `pol_blotong_ton_sd`, ADD COLUMN `k_dlm_blotong_sd` DOUBLE(10,2) NULL AFTER `k_dlm_blotong`, CHANGE `pol_dlm_hasil_taksasi_ton` `pol_dlm_hasil_taksasi_ton` DOUBLE(10,2) DEFAULT 0.000 NULL, CHANGE `pol_dlm_hasil_taksasi_ton_sd` `pol_dlm_hasil_taksasi_ton_sd` DOUBLE(10,2) NULL, CHANGE `pol_dlm_hasil_taksasi_persenpol` `pol_dlm_hasil_taksasi_persenpol` DOUBLE(10,2) DEFAULT 0.000 NULL, CHANGE `pol_dlm_hasil_taksasi_persenpol_sd` `pol_dlm_hasil_taksasi_persenpol_sd` DOUBLE(10,2) NULL, ADD COLUMN `pol_taksasi_ton` DOUBLE(10,2) NULL AFTER `pol_dlm_hasil_taksasi_persenpol_sd`, ADD COLUMN `pol_taksasi_ton_sd` DOUBLE(10,2) NULL AFTER `pol_taksasi_ton`, ADD COLUMN `pol_dlm_hasil_taksasi_xtebu` DOUBLE(10,2) NULL AFTER `pol_taksasi_ton_sd`, ADD COLUMN `pol_dlm_hasil_taksasi_xtebu_sd` DOUBLE(10,2) NULL AFTER `pol_dlm_hasil_taksasi_xtebu`, ADD COLUMN `ef_ov` DOUBLE(10,2) NULL AFTER `pol_dlm_hasil_taksasi_xtebu_sd`, ADD COLUMN `ef_ov_sd` DOUBLE(10,2) NULL AFTER `ef_ov`, ADD COLUMN `k_dlm_total` DOUBLE(10,2) NULL AFTER `ef_ov_sd`, ADD COLUMN `k_dlm_total_sd` DOUBLE(10,2) NULL AFTER `k_dlm_total`, ADD COLUMN `ef_me` DOUBLE(10,2) NULL AFTER `k_dlm_total_sd`, ADD COLUMN `ef_me_sd` DOUBLE(10,2) NULL AFTER `ef_me`, ADD COLUMN `ef_bhr` DOUBLE(10,2) NULL AFTER `ef_me_sd`, ADD COLUMN `ef_bhr_sd` DOUBLE(10,2) NULL AFTER `ef_bhr`, CHANGE `ef_or` `ef_or` DOUBLE(10,2) DEFAULT 0.00 NULL AFTER `ef_bhr_sd`, CHANGE `ef_or_sd` `ef_or_sd` DOUBLE(10,2) DEFAULT 0.00 NULL AFTER `ef_or`; 


ALTER TABLE `t_lap_harian_pengolahan_ptpn` ADD COLUMN `pol_tebu` DOUBLE(10,2) NULL AFTER `total_persen_jamgil_sd`, ADD COLUMN `pol_tebu_sd` DOUBLE(10,2) NULL AFTER `pol_tebu`, ADD COLUMN `ton_pol_tebu` DOUBLE(10,2) NULL AFTER `pol_tebu_sd`, ADD COLUMN `ton_pol_tebu_sd` DOUBLE(10,2) NULL AFTER `ton_pol_tebu`; 

ALTER TABLE `t_lap_harian_pengolahan_ptpn` ADD COLUMN `ton_taksasi_tebu` DOUBLE(10,2) NULL AFTER `pol_taksasi_ton_sd`, ADD COLUMN `ton_taksasi_tebu_sd` DOUBLE(10,2) NULL AFTER `ton_taksasi_tebu`; 


