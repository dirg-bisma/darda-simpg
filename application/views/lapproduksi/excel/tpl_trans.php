
<?php foreach($plant_trans as $row_trans){?>
    <?php
    $otv_qty_digiling_hi_trans = 0;
    $otv_qty_digiling_sd_trans = 0;
    $otv_qty_kristal_hi_trans = 0;
    $otv_qty_kristal_sd_trans = 0;
    ?>
    <tr>
        <td> -- <?php echo $row_trans->nama_plant." (".$row_trans->kode_plant_trasnfer.")"; ?></td>
        <?php $hi_nilai_trans = 0;?>
        <!------------------HI HA TERTEBANG TRANS----------------->
        <?php $status = 0; ?>
        <?php $hi_nilai_trans = 0;?>
        <?php foreach ($timb_trans as $row_trans_timb ){?>
            <?php if($trans_kode_kat == $row_trans_timb->kat_ptp && $row_trans->kode_plant_trasnfer == $row_trans_timb->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo number_format($row_trans_timb->ha_tertebang_selektor, 3); ?></td>
                <?php $hi_nilai_trans = $row_trans_timb->ha_tertebang_selektor;?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\"> 0</td>"; }?>

        <!------------------SD HA TERTEBANG TRANS----------------->
        <?php $status = 0; ?>
        <?php $sd_nilai_trans = 0; ?>
        <?php foreach ($sum_trans as $row_trans_sd ){?>
            <?php if($trans_kode_kat == $row_trans_sd->kat_ptpn && $row_trans->kode_plant_trasnfer == $row_trans_sd->kode_plant_trasnfer){?>
                <?php $sd_nilai_trans = $row_trans_sd->sum_ha_tertebang+$hi_nilai_trans;?>
                <td style="text-align: right"><?php echo number_format($sd_nilai_trans, 3); ?></td>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){
            echo "<td style=\"text-align: right\">".number_format($hi_nilai_trans,3)."</td>"; }?>

        <!------------------HI QTY TEREBANG TRANS----------------->
        <?php $status = 0; ?>
        <?php $hi_nilai_trans = 0;?>
        <?php foreach ($timb_trans as $row_trans_timb ){?>
            <?php if($trans_kode_kat == $row_trans_timb->kat_ptp && $row_trans->kode_plant_trasnfer == $row_trans_timb->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo ($row_trans_timb->netto/1000); ?></td>
                <?php $hi_nilai_trans = $row_trans_timb->netto_kg; ?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\">0</td>"; }?>

        <!------------------SD QTY TERTEBANG TRANS----------------->
        <?php $status = 0; ?>
        <?php $sd_nilai_trans = 0; ?>
        <?php foreach ($sum_trans as $row_trans_sd ){?>
            <?php if($trans_kode_kat == $row_trans_sd->kat_ptpn && $row_trans->kode_plant_trasnfer == $row_trans_sd->kode_plant_trasnfer){?>
                <?php $sd_nilai_trans = $row_trans_sd->sum_qty_tertebang+$hi_nilai_trans;?>
                <?php $s_dgn_ha_ditebang =$s_dgn_ha_ditebang+$sd_nilai;?>
                <td style="text-align: right"><?php echo ($sd_nilai_trans/1000); ?></td>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\">".($hi_nilai_trans/1000)."</td>"; }?>

        <!------------------HI HA TERGILING TRANS----------------->
        <?php $status = 0; ?>
        <?php $hi_nilai_trans = 0;?>
        <?php foreach ($ari_trans as $row_trans_ari ){?>
            <?php if($trans_kode_kat == $row_trans_ari->kat_ptp && $row_trans->kode_plant_trasnfer == $row_trans_ari->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo number_format($row_trans_ari->ha_tertebang_selektor,3 ); ?></td>
                <?php $hi_nilai_trans = $row_trans_ari->ha_tertebang_selektor; ?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\">0</td>"; }?>

        <!------------------SD HA TERGILING TRANS----------------->
        <?php $status = 0; ?>
        <?php foreach ($sum_trans as $row_trans_sd ){?>
            <?php if($trans_kode_kat == $row_trans_sd->kat_ptpn && $row_trans->kode_plant_trasnfer == $row_trans_sd->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo number_format($row_trans_sd->sum_ha_digiiling+$hi_nilai_trans ,3); ?></td>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\">".number_format($hi_nilai_trans,3)."</td>"; }?>

        <!------------------HI QTY TERGILING TRANS----------------->
        <?php $status = 0; ?>
        <?php $hi_nilai_trans = 0;?>
        <?php foreach ($ari_trans as $row_trans_ari ){?>
            <?php if($trans_kode_kat == $row_trans_ari->kat_ptp && $row_trans->kode_plant_trasnfer == $row_trans_ari->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo ($row_trans_ari->netto/1000); ?></td>
                <?php $hi_nilai_trans = $row_trans_ari->netto; ?>
                <?php $otv_qty_digiling_hi_trans = $row_trans_ari->netto_kg; ?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\">0.00</td>"; }?>
        <!------------------SD QTY TERGILING TRANS----------------->
        <?php $status = 0; ?>
        <?php foreach ($sum_trans as $row_trans_sd ){?>
            <?php if($trans_kode_kat == $row_trans_sd->kat_ptpn && $row_trans->kode_plant_trasnfer == $row_trans_sd->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo ($row_trans_sd->sum_qty_digiling+$hi_nilai_trans/1000); ?></td>
                <?php $otv_qty_digiling_sd_trans = $row_trans_sd->sum_qty_digiling; ?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){
            if($sd_nilai_trans != 0){
                echo "<td style=\"text-align: right\">".($hi_nilai_trans/1000)."</td>";
            }else{
                echo "<td style=\"text-align: right\">0</td>";
            }
        }?>
        <!------------------HI QTY KRISTAL TRANS----------------->
        <?php $status = 0; ?>
        <?php $hi_nilai_trans = 0;?>
        <?php foreach ($ari_trans as $row_trans_ari ){?>
            <?php if($trans_kode_kat == $row_trans_ari->kat_ptp && $row_trans->kode_plant_trasnfer == $row_trans_ari->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo ($row_trans_ari->hablur/1000); ?></td>
                <?php $hi_nilai_trans = $row_trans_ari->hablur_kg; ?>
                <?php $otv_qty_kristal_hi_trans  = $row_trans_ari->hablur_kg; ?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\">0.00</td>"; }?>
        <!------------------SD QTY KRISTAL TRANS----------------->
        <?php $status = 0; ?>
        <?php foreach ($sum_trans as $row_trans_sd ){?>
            <?php if($trans_kode_kat == $row_trans_sd->kat_ptpn && $row_trans->kode_plant_trasnfer == $row_trans_sd->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo ($row_trans_sd->sum_qty_kristal+$hi_nilai_trans/1000); ?></td>
                <?php $otv_qty_kristal_sd_trans  = $row_trans_sd->sum_qty_kristal; ?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){
            if($sd_nilai_trans != 0){
                echo "<td style=\"text-align: right\">".number_format($hi_nilai_trans/1000)."</td>";
            }else{
                echo "<td style=\"text-align: right\">0</td>";
            }
        }?>
        <!------------------HI RENDEMEN TRANS----------------->
        <?php $qty_kristal_trans = 0; ?>
        <?php foreach ($ari_trans as $row_trans_ari ){?>
            <?php if($trans_kode_kat == $row_trans_ari->kat_ptp && $row_trans->kode_plant_trasnfer == $row_trans_ari->kode_plant_trasnfer){?>
                <?php $rendemen = ($row_trans_ari->hablur_kg/$row_trans_ari->netto_kg)*100;?>
                <td style="text-align: right"><?php echo number_format($rendemen,2); ?></td>
                <?php $qty_kristal_trans = 1; } ?>
        <?php } ?>
        <?php if($qty_kristal_trans == 0){ echo "<td style=\"text-align: right\">0</td>"; }?>
        <!------------------SD RENDEMEN TRANS----------------->
        <?php $status = 0; ?>
        <?php foreach ($sum_trans as $row_trans_sd ){?>
            <?php if($trans_kode_kat == $row_trans_sd->kat_ptpn && $row_trans->kode_plant_trasnfer == $row_trans_sd->kode_plant_trasnfer){?>
                <?php if($otv_qty_digiling_hi_trans != 0){?>
                    <?php $total_rend_sd_trans =($otv_qty_kristal_hi_trans+$otv_qty_kristal_sd_trans)/($otv_qty_digiling_hi_trans+$otv_qty_digiling_sd_trans)*100;?>
                    <td style="text-align: right"><?php echo number_format($total_rend_sd_trans);?></td>
                    <?php $status = 1; } ?>
            <?php } ?>
        <?php } ?>
        <?php if($status == 0){?>
            <?php if($otv_qty_digiling_hi_trans != 0){ ?>
                <?php $total_rend_sd_trans = ($otv_qty_kristal_hi_trans+$otv_qty_kristal_sd_trans)/($otv_qty_digiling_hi_trans+$otv_qty_digiling_sd_trans)*100;?>
                <?php  echo "<td style=\"text-align: right\">".number_format($total_rend_sd_trans,2)."</td>"; ?>
            <?php  }else{ echo "<td style=\"text-align: right\">0</td>"; } ?>
        <?php } ?>
        <!------------------HI GULA PTR TRANS----------------->
        <?php $status = 0; ?>
        <?php $hi_nilai_trans = 0; ?>
        <?php foreach ($ari_trans as $row_trans_ari ){?>
            <?php if($trans_kode_kat == $row_trans_ari->kat_ptp && $row_trans->kode_plant_trasnfer == $row_trans_ari->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo ($row_trans_ari->gula_ptr/1000); ?></td>
                <?php $hi_nilai_trans = $row_trans_ari->gula_ptr_kg; ?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\">0</td>"; }?>
        <!------------------SD GULA PTR TRANS----------------->
        <?php $status = 0; ?>
        <?php foreach ($sum_trans as $row_trans_sd ){?>
            <?php if($trans_kode_kat == $row_trans_sd->kat_ptpn && $row_trans->kode_plant_trasnfer == $row_trans_sd->kode_plant_trasnfer){?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){
            if($sd_nilai_trans != 0){
                echo "<td style=\"text-align: right\">".($hi_nilai_trans/1000)."</td>";
            }else{
                echo "<td style=\"text-align: right\">0.00</td>";
            }
        }?>
        <!------------------HI TETES PTR TRANS----------------->
        <?php $status = 0; ?>
        <?php $hi_nilai_trans = 0; ?>
        <?php foreach ($ari_trans as $row_trans_ari ){?>
            <?php if($trans_kode_kat == $row_trans_ari->kat_ptp && $row_trans->kode_plant_trasnfer == $row_trans_ari->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo ($row_trans_ari->tetes_ptr/1000); ?></td>
                <?php $hi_nilai_trans = $row_trans_ari->tetes_ptr_kg; ?>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){ echo "<td style=\"text-align: right\">0</td>"; }?>
        <!------------------SD TETES PTR TRANS----------------->
        <?php $status = 0; ?>
        <?php foreach ($sum_trans as $row_trans_sd ){?>
            <?php if($trans_kode_kat == $row_trans_sd->kat_ptpn && $row_trans->kode_plant_trasnfer == $row_trans_sd->kode_plant_trasnfer){?>
                <td style="text-align: right"><?php echo ($row_trans_sd->sum_qty_tetes_ptr+$hi_nilai_trans/1000 ); ?></td>
                <?php $status = 1; } ?>
        <?php } ?>
        <?php if($status == 0){
            if($sd_nilai_trans != 0){
                echo "<td style=\"text-align: right\">".($hi_nilai_trans/1000)."</td>";
            }else{
                echo "<td style=\"text-align: right\">0</td>";
            }
        }?>
    </tr>
<?php } ?>