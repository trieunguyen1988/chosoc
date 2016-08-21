<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/menu'); ?>
<tr>
    <td valign="top">
        <table width="100%" border="0" align="center" class="main" cellpadding="0" cellspacing="0">
            <tr>
                <td width="2"></td>
                <td width="10" class="left_main" valign="top"></td>
                <td align="center" valign="top">
                    <!--BEGIN: Main-->
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="10"></td>
                        </tr>
                        <tr>
                            <td>
                                <!--BEGIN: Item Menu-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="5%" height="67" class="item_menu_left">
                                            <img src="<?php echo base_url(); ?>templates/admin/images/item_addadvertise.gif" border="0" />
                                        </td>
                                        <td width="40%" height="67" class="item_menu_middle"><?php echo $this->lang->line('title_add'); ?></td>
                                        <td width="55%" height="67" class="item_menu_right">
                                            <?php if($successAdd == false){ ?>
                                            <div class="icon_item" id="icon_item_1" onclick="ActionLink('<?php echo base_url(); ?>administ/advertise')" onmouseover="ChangeStyleIconItem('icon_item_1',1)" onmouseout="ChangeStyleIconItem('icon_item_1',2)">
                                                <table width="100%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td align="center">
                                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_reset.png" border="0" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_icon_item" nowrap="nowrap"><?php echo $this->lang->line('cancel_tool'); ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="icon_item" id="icon_item_2" onclick="CheckInput_AddAdvertise()" onmouseover="ChangeStyleIconItem('icon_item_2',1)" onmouseout="ChangeStyleIconItem('icon_item_2',2)">
                                                <table width="100%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td align="center">
                                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_save.png" border="0" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_icon_item" nowrap="nowrap"><?php echo $this->lang->line('save_tool'); ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <?php }else{ ?>
                                            <div class="icon_item" id="icon_item_2" onclick="ActionLink('<?php echo base_url(); ?>administ/advertise/add')" onmouseover="ChangeStyleIconItem('icon_item_2',1)" onmouseout="ChangeStyleIconItem('icon_item_2',2)">
                                                <table width="100%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td align="center">
                                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_add.png" border="0" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_icon_item" nowrap="nowrap"><?php echo $this->lang->line('add_tool'); ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                </table>
                                <!--END Item Menu-->
                            </td>
                        </tr>
                        <tr>
                            <td height="10"></td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="20" height="20" class="corner_lt_post"></td>
                                        <td height="20" class="top_post"></td>
                                        <td width="20" height="20" class="corner_rt_post"></td>
                                    </tr>
                                    <tr>
                                        <td width="20" class="left_post"></td>
                                        <td align="center" valign="top">
                                            <!--BEGIN: Content-->
                                            <table width="585" class="form_main" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td colspan="2" height="30" class="form_top"></td>
                                                </tr>
                                                <?php if($successAdd == false){ ?>
                                                <form name="frmAddAdvertise" method="post" enctype="multipart/form-data">
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('title_title_add'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="title_adv" id="title_adv" value="<?php echo $title_adv; ?>" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('title_adv',1)" onblur="ChangeStyle('title_adv',2)" />
                                                        <?php echo form_error('title_adv'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('banner_add'); ?>:</td>
                                                    <td align="left" style="padding-top:7px;">
                                                        <input type="file" name="banner_adv" id="banner_adv" value="" size="24" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('banner_tip_help_add'); ?>',355,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('link_add'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="link_adv" id="link_adv" maxlength="100" value="<?php echo $link_adv; ?>" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('link_adv',1)" onblur="ChangeStyle('link_adv',2)" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('link_tip_help_add'); ?>',185,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <?php echo form_error('link_adv'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('position_add'); ?>:</td>
                                                    <td align="left">
                                                        <select name="position_adv" id="position_adv" class="selectposition_formpost">
                                                            <option value="1" <?php if($position_adv == 1){echo 'selected="selected"';} ?>><?php echo $this->lang->line('header_add') ?></option>
                                                            <option value="2" <?php if($position_adv == 2){echo 'selected="selected"';} ?>><?php echo $this->lang->line('footer_add') ?></option>
                                                            <option value="3" <?php if($position_adv == 3){echo 'selected="selected"';}elseif($position_adv == ''){echo 'selected="selected"';} ?>><?php echo $this->lang->line('left_add') ?></option>
                                                            <option value="4" <?php if($position_adv == 4){echo 'selected="selected"';} ?>><?php echo $this->lang->line('right_add') ?></option>
                                                            <option value="5" <?php if($position_adv == 5){echo 'selected="selected"';} ?>><?php echo $this->lang->line('top_add') ?></option>
                                                            <option value="6" <?php if($position_adv == 6){echo 'selected="selected"';} ?>><?php echo $this->lang->line('bottom_add') ?></option>
                                                        </select>
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('position_tip_help_add'); ?>',190,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('page_add'); ?>:</td>
                                                    <td align="left">
                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td>
                                                                    <select name="page_adv[]" id="page_adv" class="selectpage_formpost" multiple="multiple">
                                                                        <option value="home" <?php if($page_adv != '' && stristr($page_adv, 'home')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('home_add') ?></option>
                                                                        <option value="product_sub" <?php if($page_adv != '' && stristr($page_adv, 'product_sub')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('product_sub_add') ?></option>
                                                                        <option value="product_detail" <?php if($page_adv != '' && stristr($page_adv, 'product_detail')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('product_detail_add') ?></option>
                                                                        <option value="ads_index" <?php if($page_adv != '' && stristr($page_adv, 'ads_index')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('ads_index_add') ?></option>
                                                                        <option value="ads_sub" <?php if($page_adv != '' && stristr($page_adv, 'ads_sub')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('ads_sub_add') ?></option>
                                                                        <option value="ads_detail" <?php if($page_adv != '' && stristr($page_adv, 'ads_detail')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('ads_detail_add') ?></option>
                                                                        <option value="job_index" <?php if($page_adv != '' && stristr($page_adv, 'job_index')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('job_index_add') ?></option>
                                                                        <option value="job_sub" <?php if($page_adv != '' && stristr($page_adv, 'job_sub')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('job_sub_add') ?></option>
                                                                        <option value="job_detail" <?php if($page_adv != '' && stristr($page_adv, 'job_detail')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('job_detail_add') ?></option>
                                                                        <option value="employ_index" <?php if($page_adv != '' && stristr($page_adv, 'employ_index')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('employ_index_add') ?></option>
                                                                        <option value="employ_sub" <?php if($page_adv != '' && stristr($page_adv, 'employ_sub')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('employ_sub_add') ?></option>
                                                                        <option value="employ_detail" <?php if($page_adv != '' && stristr($page_adv, 'employ_detail')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('employ_detail_add') ?></option>
                                                                        <option value="shop_index" <?php if($page_adv != '' && stristr($page_adv, 'shop_index')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('shop_index_add') ?></option>
                                                                        <option value="shop_sub" <?php if($page_adv != '' && stristr($page_adv, 'shop_sub')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('shop_sub_add') ?></option>
                                                                        <option value="shop_detail" <?php if($page_adv != '' && stristr($page_adv, 'shop_detail')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('shop_detail_add') ?></option>
                                                                        <option value="search" <?php if($page_adv != '' && stristr($page_adv, 'search')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('search_add') ?></option>
                                                                        <option value="showcart" <?php if($page_adv != '' && stristr($page_adv, 'showcart')){echo 'selected="selected"';}; ?>><?php echo $this->lang->line('showcart_add') ?></option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('page_tip_help_add'); ?>',225,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('order_add'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="order_adv" id="order_adv" value="<?php if($order_adv != ''){echo $order_adv;}else{echo '1';} ?>" maxlength="4" class="inputorder_formpost" onkeyup="BlockChar(this,'NotNumbers')" onfocus="ChangeStyle('order_adv',1)" onblur="ChangeStyle('order_adv',2)" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('order_tip_help'); ?>',155,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <?php echo form_error('order_adv'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('advertiser_add'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="name_adv" id="name_adv" value="<?php echo $name_adv; ?>" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar'); CapitalizeNames('frmAddAdvertise','name_adv');" onfocus="ChangeStyle('name_adv',1)" onblur="ChangeStyle('name_adv',2)" />
                                                        <?php echo form_error('name_adv'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('address_add'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="address_adv" id="address_adv" value="<?php echo $address_adv; ?>" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar'); CapitalizeNames('frmAddAdvertise','address_adv');" onfocus="ChangeStyle('address_adv',1)" onblur="ChangeStyle('address_adv',2)" />
                                                        <?php echo form_error('address_adv'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('phone_add'); ?>:</td>
                                                    <td align="left">
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/phone_1.gif" border="0" />
                                                        <input type="text" name="phone_adv" id="phone_adv" value="<?php echo $phone_adv; ?>" maxlength="20" class="inputphone_formpost" onfocus="ChangeStyle('phone_adv',1)" onblur="ChangeStyle('phone_adv',2)" />
                                                        <b>-</b>
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/mobile_1.gif" border="0" />
                                                        <input type="text" name="mobile_adv" id="mobile_adv" value="<?php echo $mobile_adv; ?>" maxlength="20" class="inputphone_formpost" onfocus="ChangeStyle('mobile_adv',1)" onblur="ChangeStyle('mobile_adv',2)" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('phone_tip_help'); ?>',135,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <span class="div_helppost"><?php echo $this->lang->line('phone_help'); ?></span>
                                                        <?php echo form_error('phone_adv'); ?>
                                                        <?php echo form_error('mobile_adv'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('email_add'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="email_adv" id="email_adv" value="<?php echo $email_adv; ?>" maxlength="50" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('email_adv',1)" onblur="ChangeStyle('email_adv',2)" />
                                                        <?php echo form_error('email_adv'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('enddate_add'); ?>:</td>
                                                    <td align="left">
                                                        <select name="endday_adv" id="endday_adv" class="selectdate_formpost">
                                                            <?php for($endday = 1; $endday <= 31; $endday++){ ?>
                                                            <?php if($endday_adv == $endday){ ?>
                                                            <option value="<?php echo $endday; ?>" selected="selected"><?php echo $endday; ?></option>
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $endday; ?>"><?php echo $endday; ?></option>
                                                            <?php } ?>
															<?php } ?>
                                                        </select>
                                                        <b>-</b>
                                                        <select name="endmonth_adv" id="endmonth_adv" class="selectdate_formpost">
                                                            <?php for($endmonth = 1; $endmonth <= 12; $endmonth++){ ?>
                                                            <?php if($endmonth_adv == $endmonth){ ?>
                                                            <option value="<?php echo $endmonth; ?>" selected="selected"><?php echo $endmonth; ?></option>
                                                            <?php }elseif($endmonth == $nextMonth && $endmonth_adv == ''){ ?>
                                                            <option value="<?php echo $endmonth; ?>" selected="selected"><?php echo $endmonth; ?></option>
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $endmonth; ?>"><?php echo $endmonth; ?></option>
                                                            <?php } ?>
															<?php } ?>
                                                        </select>
                                                        <b>-</b>
                                                        <select name="endyear_adv" id="endyear_adv" class="selectdate_formpost">
                                                            <?php for($endyear = (int)date('Y'); $endyear < (int)date('Y')+10; $endyear++){ ?>
                                                            <?php if($endyear_adv == $endyear){ ?>
                                                            <option value="<?php echo $endyear; ?>" selected="selected"><?php echo $endyear; ?></option>
                                                            <?php }elseif($endyear == $nextYear && $endyear_adv == ''){ ?>
                                                            <option value="<?php echo $endyear; ?>" selected="selected"><?php echo $endyear; ?></option>
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $endyear; ?>"><?php echo $endyear; ?></option>
                                                            <?php } ?>
															<?php } ?>
                                                        </select>
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('enddate_tip_help'); ?>',325,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <span class="div_helppost"><?php echo $this->lang->line('enddate_help'); ?></span>
                                                        <?php echo form_error('endday_adv'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('status_add'); ?>:</td>
                                                    <td align="left" style="padding-top:7px;">
                                                        <input type="checkbox" name="active_adv" id="active_adv" value="1" <?php if($active_adv == '1'){echo 'checked="checked"';} ?> />
                                                    </td>
                                                </tr>
                                                </form>
                                                <?php }else{ ?>
                                                <tr class="success_post">
                                                    <td colspan="2">
                                                        <meta http-equiv=refresh content="2; url=<?php echo base_url().'administ/advertise' ?>">
                                                		<?php echo $this->lang->line('success_add'); ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td colspan="2" height="30" class="form_bottom"></td>
                                                </tr>
                                            </table>
                                            <!--END Content-->
                                        </td>
                                        <td width="20" class="right_post"></td>
                                    </tr>
                                    <tr>
                                        <td width="20" height="20" class="corner_lb_post"></td>
                                        <td height="20" class="bottom_post"></td>
                                        <td width="20" height="20" class="corner_rb_post"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!--END Main-->
                </td>
                <td width="10" class="right_main" valign="top"></td>
                <td width="2"></td>
            </tr>
            <tr>
                <td width="2" height="11"></td>
                <td width="10" height="11" class="corner_lb_main" valign="top"></td>
                <td height="11" class="middle_bottom_main"></td>
                <td width="10" height="11" class="corner_rb_main" valign="top"></td>
                <td width="2" height="11"></td>
            </tr>
        </table>
    </td>
</tr>
<?php $this->load->view('admin/common/footer'); ?>