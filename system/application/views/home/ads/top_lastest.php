<tr>
    <td class="tieude_trai"><?php echo $this->lang->line('title_top_lastest_ads_right'); ?></td>
</tr>
<tr>
    <td align="left" style="padding:5px 5px 0px 5px;">
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <?php foreach($topLastestAds as $topLastestAdsArray){ ?>
            <tr>
                <td valign="top" style="padding-top:4px;"><img src="<?php echo base_url(); ?>templates/home/images/list_dot.gif" border="0" /></td>
                <td class="list_1" valign="top">
                    <a class="menu_1" href="<?php echo base_url(); ?>ads/category/<?php echo $topLastestAdsArray->ads_category; ?>/detail/<?php echo $topLastestAdsArray->ads_id; ?>" onmouseover="ddrivetip('<?php echo $topLastestAdsArray->ads_descr; ?>',300,'#F0F8FF');" onmouseout="hideddrivetip();"><?php echo $topLastestAdsArray->ads_title; ?></a>
                </td>
            </tr>
            <?php } ?>
            <tr>
         		<td valign="top" class="view_all" colspan="2"><a class="menu_2" href="<?php echo base_url(); ?>ads"><?php echo $this->lang->line('view_all_right'); ?></a></td>
        	</tr>
        </table>
    </td>
</tr>