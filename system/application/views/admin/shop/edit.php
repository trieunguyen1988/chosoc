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
                                            <img src="<?php echo base_url(); ?>templates/admin/images/item_editshop.gif" border="0" />
                                        </td>
                                        <td width="40%" height="67" class="item_menu_middle"><?php echo $this->lang->line('title_edit'); ?></td>
                                        <td width="55%" height="67" class="item_menu_right">
                                            <?php if($successEdit == false){ ?>
                                            <div class="icon_item" id="icon_item_1" onclick="ActionLink('<?php echo base_url(); ?>administ/shop')" onmouseover="ChangeStyleIconItem('icon_item_1',1)" onmouseout="ChangeStyleIconItem('icon_item_1',2)">
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
                                            <div class="icon_item" id="icon_item_2" onclick="CheckInput_EditShop()" onmouseover="ChangeStyleIconItem('icon_item_2',1)" onmouseout="ChangeStyleIconItem('icon_item_2',2)">
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
                                            <div class="icon_item" id="icon_item_2" onclick="ActionLink('<?php echo base_url(); ?>administ/shop/add')" onmouseover="ChangeStyleIconItem('icon_item_2',1)" onmouseout="ChangeStyleIconItem('icon_item_2',2)">
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
                                                <?php if($successEdit == false){ ?>
                                                <form name="frmEditShop" method="post" enctype="multipart/form-data">
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('logo_edit'); ?>:</td>
                                                    <td align="left" style="padding-top:7px;">
                                                        <input type="file" name="logo_shop" id="logo_shop" value="" size="24" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('logo_tip_help_edit'); ?>',255,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <span class="div_helppost" style="font-weight:normal;"><?php echo $this->lang->line('logo_help_edit'); ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('banner_edit'); ?>:</td>
                                                    <td align="left" style="padding-top:7px;">
                                                        <input type="file" name="banner_shop" id="banner_shop" value="" size="24" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('banner_tip_help_edit'); ?>',355,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <span class="div_helppost" style="font-weight:normal;"><?php echo $this->lang->line('banner_help_edit'); ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('link_edit'); ?>:</td>
                                                    <td style="color:#06F; font-weight:bold; text-align:left; padding-top:7px;">
                                                        <a class="menu" href="http://e360.vn" target="_blank">http://e360.vn/</a>
                                                        <input type="text" name="link_shop" id="link_shop" value="<?php echo $link_shop; ?>" maxlength="100" class="inputlinkshop_formpost" onkeyup="BlockChar(this,'AllSpecialChar')" onfocus="ChangeStyle('link_shop',1)" onblur="ChangeStyle('link_shop',2)" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('link_tip_help_edit'); ?>',395,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <span class="div_helppost" style="font-weight:normal;"><?php echo $this->lang->line('link_help_edit'); ?></span>
                                                        <span style="font-weight:normal;"><?php echo form_error('link_shop'); ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="middle" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('saler_edit'); ?>:</td>
                                                    <td align="left">
                                                        <select name="username_shop" id="username_shop" size="1000" class="selectsaler_formpost">
                                                            <?php foreach($user as $userArray){ ?>
                                                            <option value="<?php echo $userArray->use_id; ?>" <?php if($userArray->use_id == $username_shop){echo 'selected="selected"';} ?> title="<?php echo $userArray->use_email; ?>"><?php echo $userArray->use_username; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <?php echo form_error('username_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('name_edit'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="name_shop" id="name_shop" value="<?php echo $name_shop; ?>" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar'); CapitalizeNames('frmEditShop','name_shop');" onfocus="ChangeStyle('name_shop',1)" onblur="ChangeStyle('name_shop',2)" />
                                                        <?php echo form_error('name_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('descr_edit'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="descr_shop" id="descr_shop" value="<?php echo $descr_shop; ?>" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('descr_shop',1)" onblur="ChangeStyle('descr_shop',2)" />
                                                        <?php echo form_error('descr_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('category_edit'); ?>:</td>
                                                    <td align="left">
                                                        <select name="category_shop" id="category_shop" class="selectcategory_formpost">
                                                        	<?php foreach($category as $categoryArray){ ?>
                                                            <option value="<?php echo $categoryArray->cat_id; ?>" <?php if($categoryArray->cat_id == $category_shop){echo 'selected="selected"';} ?>><?php echo $categoryArray->cat_name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('address_edit'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="address_shop" id="address_shop" value="<?php echo $address_shop; ?>" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar'); CapitalizeNames('frmEditShop','address_shop');" onfocus="ChangeStyle('address_shop',1)" onblur="ChangeStyle('address_shop',2)" />
                                                        <?php echo form_error('address_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('province_edit'); ?>:</td>
                                                    <td align="left">
                                                        <select name="province_shop" id="province_shop" class="selectprovince_formpost">
                                                            <?php foreach($province as $provinceArray){ ?>
                                                            <option value="<?php echo $provinceArray->pre_id; ?>" <?php if($provinceArray->pre_id == $province_shop){echo 'selected="selected"';} ?>><?php echo $provinceArray->pre_name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('phone_edit'); ?>:</td>
                                                    <td align="left">
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/phone_1.gif" border="0" />
                                                        <input type="text" name="phone_shop" id="phone_shop" value="<?php echo $phone_shop; ?>" maxlength="20" class="inputphone_formpost" onfocus="ChangeStyle('phone_shop',1)" onblur="ChangeStyle('phone_shop',2)" />
                                                        <b>-</b>
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/mobile_1.gif" border="0" />
                                                        <input type="text" name="mobile_shop" id="mobile_shop" value="<?php echo $mobile_shop; ?>" maxlength="20" class="inputphone_formpost" onfocus="ChangeStyle('mobile_shop',1)" onblur="ChangeStyle('mobile_shop',2)" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('phone_tip_help'); ?>',135,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <span class="div_helppost"><?php echo $this->lang->line('phone_help'); ?></span>
                                                        <?php echo form_error('phone_shop'); ?>
                                                        <?php echo form_error('mobile_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('email_edit'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="email_shop" id="email_shop" value="<?php echo $email_shop; ?>" maxlength="50" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('email_shop',1)" onblur="ChangeStyle('email_shop',2)" />
                                                        <?php echo form_error('email_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('yahoo_edit'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="yahoo_shop" id="yahoo_shop" value="<?php echo $yahoo_shop; ?>" maxlength="50" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('yahoo_shop',1)" onblur="ChangeStyle('yahoo_shop',2)" />
                                                        <?php echo form_error('yahoo_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('skype_edit'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="skype_shop" id="skype_shop" value="<?php echo $skype_shop; ?>" maxlength="50" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('skype_shop',1)" onblur="ChangeStyle('skype_shop',2)" />
                                                        <?php echo form_error('skype_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('website_edit'); ?>:</td>
                                                    <td align="left">
                                                        <input type="text" name="website_shop" id="website_shop" value="<?php echo $website_shop; ?>" maxlength="100" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('website_shop',1)" onblur="ChangeStyle('website_shop',2)" />
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('website_tip_help_edit'); ?>',230,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <?php echo form_error('website_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('style_edit'); ?>:</td>
                                                    <td align="left">
                                                        <select name="style_shop" id="style_shop" class="selectstyle_formpost">
                                                            <?php foreach($style as $styleArray){ ?>
                                                            <option value="<?php echo $styleArray; ?>" <?php if($styleArray == $style_shop){echo 'selected="selected"';}elseif($style_shop == '' && $styleArray == 'default'){echo 'selected="selected"';} ?>><?php echo ucfirst(strtolower($styleArray)); ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('style_tip_help_edit'); ?>',180,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150"></td>
                                                    <td align="left">
                                                        <div class="saleoff_shop"><input type="checkbox" name="saleoff_shop" id="saleoff_shop" value="1" <?php if($saleoff_shop == '1'){echo 'checked="checked"';} ?> /><?php echo $this->lang->line('saleoff_edit'); ?>&nbsp;&nbsp;<img src="<?php echo base_url(); ?>templates/admin/images/saleoff_shop.gif" border="0" /></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('enddate_edit'); ?>:</td>
                                                    <td align="left">
                                                        <select name="endday_shop" id="endday_shop" class="selectdate_formpost">
                                                           	<?php for($endday = 1; $endday <= 31; $endday++){ ?>
                                                            <?php if($endday_shop == $endday){ ?>
                                                            <option value="<?php echo $endday; ?>" selected="selected"><?php echo $endday; ?></option>
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $endday; ?>"><?php echo $endday; ?></option>
                                                            <?php } ?>
															<?php } ?>
                                                        </select>
                                                        <b>-</b>
                                                        <select name="endmonth_shop" id="endmonth_shop" class="selectdate_formpost">
                                                            <?php for($endmonth = 1; $endmonth <= 12; $endmonth++){ ?>
                                                            <?php if($endmonth_shop == $endmonth){ ?>
                                                            <option value="<?php echo $endmonth; ?>" selected="selected"><?php echo $endmonth; ?></option>
                                                            <?php }elseif($endmonth == $nextMonth && $endmonth_shop == ''){ ?>
                                                            <option value="<?php echo $endmonth; ?>" selected="selected"><?php echo $endmonth; ?></option>
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $endmonth; ?>"><?php echo $endmonth; ?></option>
                                                            <?php } ?>
															<?php } ?>
                                                        </select>
                                                        <b>-</b>
                                                        <select name="endyear_shop" id="endyear_shop" class="selectdate_formpost">
                                                            <?php for($endyear = (int)date('Y'); $endyear < (int)date('Y')+10; $endyear++){ ?>
                                                            <?php if($endyear_shop == $endyear){ ?>
                                                            <option value="<?php echo $endyear; ?>" selected="selected"><?php echo $endyear; ?></option>
                                                            <?php }elseif($endyear == $nextYear && $endyear_shop == ''){ ?>
                                                            <option value="<?php echo $endyear; ?>" selected="selected"><?php echo $endyear; ?></option>
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $endyear; ?>"><?php echo $endyear; ?></option>
                                                            <?php } ?>
															<?php } ?>
                                                        </select>
                                                        <img src="<?php echo base_url(); ?>templates/admin/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('enddate_tip_help'); ?>',325,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                                        <span class="div_helppost"><?php echo $this->lang->line('enddate_help'); ?></span>
                                                        <?php echo form_error('endday_shop'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('status_edit'); ?>:</td>
                                                    <td align="left" style="padding-top:7px;">
                                                        <input type="checkbox" name="active_shop" id="active_shop" value="1" <?php if($active_shop == '1'){echo 'checked="checked"';} ?> />
                                                    </td>
                                                </tr>
                                                </form>
                                                <?php }else{ ?>
                                                <tr class="success_post">
                                                    <td colspan="2">
                                                        <meta http-equiv=refresh content="2; url=<?php echo base_url().'administ/shop' ?>">
                                                		<?php echo $this->lang->line('success_edit'); ?>
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