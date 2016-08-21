<?php $this->load->view('home/common/header'); ?>
<script language="javascript" src="<?php echo base_url(); ?>templates/home/js/him.js"></script>
<script language="javascript" src="<?php echo base_url(); ?>templates/home/js/check_email.js"></script>
<!--BEGIN: LEFT-->
<td width="602" valign="top">
    <table width="602" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td background="<?php echo base_url(); ?>templates/home/images/bg_topkhung_left.png" height="30">
                <div class="tile_modules"><?php echo $this->lang->line('title_post'); ?></div>
            </td>
        </tr>
        <tr>
            <td background="<?php echo base_url(); ?>templates/home/images/bg_mainkhung_left.jpg" style="padding-left:4px;" valign="top" >
                <?php if($successPostEmploy == false){ ?>
                <div class="note_post">
                    <img src="<?php echo base_url(); ?>templates/home/images/note_post.gif" border="0" width="20" height="20" />&nbsp;
                    <b><font color="#FD5942"><?php echo $this->lang->line('note_help'); ?>:</font></b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <font color="#FF0000"><b>*</b></font>&nbsp;&nbsp;<?php echo $this->lang->line('must_input_help'); ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo base_url(); ?>templates/home/images/help_post.gif" />&nbsp;&nbsp;<?php echo $this->lang->line('input_help'); ?>
                </div>
                <?php } ?>
                <table width="585" class="post_main" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td colspan="2" height="20" class="post_top"></td>
                    </tr>
                    <?php if($successPostEmploy == false){ ?>
                    <form name="frmPostEmploy" method="post">
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('title_post_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($title_employ)){echo $title_employ;} ?>" name="title_employ" id="title_employ" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('title_employ',1)" onblur="ChangeStyle('title_employ',2)" />
                            <?php echo form_error('title_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td height="7" colspan="2"></td>
                    </tr>
                    <tr>
                        <td height="20" class="seperate_line"><?php echo $this->lang->line('require_title_post'); ?></td>
                        <td height="20" class="seperate_line"></td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('field_post'); ?>:</td>
                        <td>
                            <select name="field_employ" id="field_employ" class="selectcategory_formpost">
                                <?php foreach($field as $fieldArray){ ?>
                                <?php if(isset($field_employ) && $field_employ == $fieldArray->fie_id){ ?>
                                <option value="<?php echo $fieldArray->fie_id; ?>" selected="selected"><?php echo $fieldArray->fie_name; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $fieldArray->fie_id; ?>"><?php echo $fieldArray->fie_name; ?></option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                            <?php echo form_error('field_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('position_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($position_employ)){echo $position_employ;} ?>" name="position_employ" id="position_employ" maxlength="120" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('position_employ',1)" onblur="ChangeStyle('position_employ',2)" />
                            <?php echo form_error('position_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('province_post'); ?>:</td>
                        <td>
                            <select name="province_employ" id="province_employ" class="selectprovince_formpost">
                                <?php foreach($province as $provinceArray){ ?>
                                <?php if(isset($province_employ) && $province_employ == $provinceArray->pre_id){ ?>
                                <option value="<?php echo $provinceArray->pre_id; ?>" selected="selected"><?php echo $provinceArray->pre_name; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $provinceArray->pre_id; ?>"><?php echo $provinceArray->pre_name; ?></option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                            <?php echo form_error('province_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('time_job_post'); ?>:</td>
                        <td>
                            <select name="time_employ" id="time_employ" class="selecttime_formpost">
                                <option value="1" <?php if(isset($time_employ) && $time_employ == '1'){echo 'selected="selected"';}elseif(!isset($time_employ)){echo 'selected="selected"';} ?>><?php echo $this->lang->line('time_employ_1_post'); ?></option>
                                <option value="2" <?php if(isset($time_employ) && $time_employ == '2'){echo 'selected="selected"';} ?>><?php echo $this->lang->line('time_employ_2_post'); ?></option>
                                <option value="3" <?php if(isset($time_employ) && $time_employ == '3'){echo 'selected="selected"';} ?>><?php echo $this->lang->line('time_employ_3_post'); ?></option>
                                <option value="4" <?php if(isset($time_employ) && $time_employ == '4'){echo 'selected="selected"';} ?>><?php echo $this->lang->line('time_employ_4_post'); ?></option>
                                <option value="5" <?php if(isset($time_employ) && $time_employ == '5'){echo 'selected="selected"';} ?>><?php echo $this->lang->line('time_employ_5_post'); ?></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('salary_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($salary_employ)){echo $salary_employ;} ?>" name="salary_employ" id="salary_employ" maxlength="8" class="inputsalary_formpost" onkeyup="FormatCurrency('DivShowSalary','currency_employ',this.value); BlockChar(this,'NotNumbers');" onfocus="ChangeStyle('salary_employ',1)" onblur="ChangeStyle('salary_employ',2)" />
                            <select name="currency_employ" id="currency_employ" class="selectcurrency_formpost" onchange="FormatCurrency('DivShowSalary','currency_employ',document.getElementById('salary_employ').value)">
                                <option value="VND" <?php if(isset($currency_employ) && $currency_employ == 'VND'){echo 'selected="selected"';}elseif(!isset($currency_employ)){echo 'selected="selected"';} ?>><?php echo $this->lang->line('vnd_post'); ?></option>
                                <option value="USD" <?php if(isset($currency_employ) && $currency_employ == 'USD'){echo 'selected="selected"';} ?>><?php echo $this->lang->line('usd_post'); ?></option>
                            </select>
                            <font size="+1">/</font>
                            <select name="datesalary_employ" id="datesalary_employ" class="selectsalary_formpost">
                                <option value="1" <?php if(isset($datesalary_employ) && $datesalary_employ == '1'){echo 'selected="selected"';} ?>><?php echo $this->lang->line('day_post'); ?></option>
                                <option value="2" <?php if(isset($datesalary_employ) && $datesalary_employ == '2'){echo 'selected="selected"';}elseif(!isset($datesalary_employ)){echo 'selected="selected"';} ?>><?php echo $this->lang->line('month_post'); ?></option>
                                <option value="3" <?php if(isset($datesalary_employ) && $datesalary_employ == '3'){echo 'selected="selected"';} ?>><?php echo $this->lang->line('year_post'); ?></option>
                            </select>
                            <span class="div_helppost">(<?php echo $this->lang->line('only_input_number_help'); ?>)</span>
                            <div id="DivShowSalary"></div>
                            <?php echo form_error('salary_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="middle" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('detail_post'); ?>:</td>
                        <td style="padding-top:7px;">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <?php $this->load->view('home/common/editor'); ?>
                                        <?php echo form_error('txtContent'); ?>
                                    </td>
                                    <td style="padding-top:7px;">
                                        <img src="<?php echo base_url(); ?>templates/home/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('detail_tip_help') ?>',400,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="7" colspan="2"></td>
                    </tr>
                    <tr>
                        <td height="20" class="seperate_line"><?php echo $this->lang->line('info_title_post'); ?></td>
                        <td height="20" class="seperate_line"></td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('name_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($name_employ)){echo $name_employ;} ?>" name="name_employ" id="name_employ" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar'); CapitalizeNames('frmPostEmploy','name_employ');" onfocus="ChangeStyle('name_employ',1)" onblur="ChangeStyle('name_employ',2)" />
                            <?php echo form_error('name_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('age_post'); ?>:</td>
                        <td>
                            <select name="age_employ" id="age_employ" class="selectage_formpost">
                                <?php for($age = 18; $age <= 70; $age++){ ?>
                                <?php if(isset($age_employ) && $age_employ == $age){ ?>
                                <option value="<?php echo $age; ?>" selected="selected"><?php echo $age; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $age; ?>"><?php echo $age; ?></option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('sex_post'); ?>:</td>
                        <td>
                            <select name="sex_employ" id="sex_employ" class="selectsex_formpost" style="width:60px;">
                                <option value="1" <?php if(isset($sex_employ) && $sex_employ == '1'){echo 'selected="selected"';}elseif(!isset($sex_employ)){echo 'selected="selected"';} ?>><?php echo $this->lang->line('male_post'); ?></option>
                                <option value="0" <?php if(isset($sex_employ) && $sex_employ == '0'){echo 'selected="selected"';} ?>><?php echo $this->lang->line('female_post'); ?></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('level_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($level_employ)){echo $level_employ;} ?>" name="level_employ" id="level_employ" maxlength="120" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('level_employ',1)" onblur="ChangeStyle('level_employ',2)" />
                            <?php echo form_error('level_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('foreign_language_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($foreign_language_employ)){echo $foreign_language_employ;} ?>" name="foreign_language_employ" id="foreign_language_employ" maxlength="120" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('foreign_language_employ',1)" onblur="ChangeStyle('foreign_language_employ',2)" />
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('computer_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($computer_employ)){echo $computer_employ;} ?>" name="computer_employ" id="computer_employ" maxlength="120" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('computer_employ',1)" onblur="ChangeStyle('computer_employ',2)" />
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('time_exper_post'); ?>:</td>
                        <td>
                            <select name="experience_employ" id="experience_employ" class="selectexper_formpost" style="width:75px;">
                                <option value="0" <?php if(!isset($experience_employ)){ ?>selected="selected"<?php } ?>><?php echo $this->lang->line('none_post'); ?></option>
                                <?php for($exper = 1; $exper <= 30; $exper++){ ?>
                                <?php if(isset($experience_employ) && $experience_employ == $exper){ ?>
                                <option value="<?php echo $exper; ?>" selected="selected"><?php echo $exper; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $exper; ?>"><?php echo $exper; ?></option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                            <span class="exper_employ"><?php echo $this->lang->line('year_exper_post'); ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('address_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($address_employ)){echo $address_employ;} ?>" name="address_employ" id="address_employ" maxlength="80" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar'); CapitalizeNames('frmPostEmploy','address_employ');" onfocus="ChangeStyle('address_employ',1)" onblur="ChangeStyle('address_employ',2)" />
                            <?php echo form_error('address_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('phone_post'); ?>:</td>
                        <td>
                            <img src="<?php echo base_url(); ?>templates/home/images/phone_1.gif" border="0" />
                            <input type="text" value="<?php if(isset($phone_employ)){echo $phone_employ;} ?>" name="phone_employ" id="phone_employ" maxlength="20" class="inputphone_formpost" onfocus="ChangeStyle('phone_employ',1)" onblur="ChangeStyle('phone_employ',2)" />
                            <b>-</b>
                            <img src="<?php echo base_url(); ?>templates/home/images/mobile_1.gif" border="0" />
                            <input type="text" value="<?php if(isset($mobile_employ)){echo $mobile_employ;} ?>" name="mobile_employ" id="mobile_employ" maxlength="20" class="inputphone_formpost" onfocus="ChangeStyle('mobile_employ',1)" onblur="ChangeStyle('mobile_employ',2)" />
                            <img src="<?php echo base_url(); ?>templates/home/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('phone_tip_help') ?>',225,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                            <span class="div_helppost">(<?php echo $this->lang->line('phone_help'); ?>)</span>
                            <?php echo form_error('phone_employ'); ?>
                            <?php echo form_error('mobile_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('email_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($email_employ)){echo $email_employ;} ?>" name="email_employ" id="email_employ" maxlength="50" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('email_employ',1)" onblur="ChangeStyle('email_employ',2)" />
                            <?php echo form_error('email_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('yahoo_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($yahoo_employ)){echo $yahoo_employ;} ?>" name="yahoo_employ" id="yahoo_employ" maxlength="50" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('yahoo_employ',1)" onblur="ChangeStyle('yahoo_employ',2)" />
                            <?php echo form_error('yahoo_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><?php echo $this->lang->line('skype_post'); ?>:</td>
                        <td>
                            <input type="text" value="<?php if(isset($skype_employ)){echo $skype_employ;} ?>" name="skype_employ" id="skype_employ" maxlength="50" class="input_formpost" onkeyup="BlockChar(this,'SpecialChar')" onfocus="ChangeStyle('skype_employ',1)" onblur="ChangeStyle('skype_employ',2)" />
                            <?php echo form_error('skype_employ'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" valign="top" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('enddate_post'); ?>:</td>
                        <td>
                            <select name="endday_employ" id="endday_employ" class="selectdate_formpost">
                                <?php for($endday = 1; $endday <= 31; $endday++){ ?>
                                <?php if(isset($endday_employ) && (int)$endday_employ == $endday){ ?>
                                <option value="<?php echo $endday; ?>" selected="selected"><?php echo $endday; ?></option>
                                <?php }elseif($endday == (int)date('d') && $endday_employ == ''){ ?>
                                <option value="<?php echo $endday; ?>" selected="selected"><?php echo $endday; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $endday; ?>"><?php echo $endday; ?></option>
                                <?php } ?>
								<?php } ?>
                            </select>
                            <b>-</b>
                            <select name="endmonth_employ" id="endmonth_employ" class="selectdate_formpost">
                                <?php for($endmonth = 1; $endmonth <= 12; $endmonth++){ ?>
                                <?php if(isset($endmonth_employ) && (int)$endmonth_employ == $endmonth){ ?>
                                <option value="<?php echo $endmonth; ?>" selected="selected"><?php echo $endmonth; ?></option>
                                <?php }elseif($endmonth == $nextMonth && $endmonth_employ == ''){ ?>
                                <option value="<?php echo $endmonth; ?>" selected="selected"><?php echo $endmonth; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $endmonth; ?>"><?php echo $endmonth; ?></option>
                                <?php } ?>
								<?php } ?>
                            </select>
                            <b>-</b>
                            <select name="endyear_employ" id="endyear_employ" class="selectdate_formpost">
                                <?php for($endyear = (int)date('Y'); $endyear < (int)date('Y')+2; $endyear++){ ?>
                                <?php if(isset($endyear_employ) && (int)$endyear_employ == $endyear){ ?>
                                <option value="<?php echo $endyear; ?>" selected="selected"><?php echo $endyear; ?></option>
                                <?php }elseif($endyear == $nextYear && $endyear_employ == ''){ ?>
                                <option value="<?php echo $endyear; ?>" selected="selected"><?php echo $endyear; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $endyear; ?>"><?php echo $endyear; ?></option>
                                <?php } ?>
								<?php } ?>
                            </select>
                            <img src="<?php echo base_url(); ?>templates/home/images/help_post.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('enddate_tip_help') ?>',235,'#F0F8FF');" onmouseout="hideddrivetip();" class="img_helppost" />
                            <span class="div_helppost">(<?php echo $this->lang->line('enddate_help'); ?>)</span>
                            <?php echo form_error('endday_employ'); ?>
                        </td>
                    </tr>
                    <?php if(isset($imageCaptchaPostEmploy)){ ?>
                    <tr>
                        <td width="150" valign="middle" class="list_post"><font color="#FF0000"><b>*</b></font> <?php echo $this->lang->line('captcha_main'); ?>:</td>
                        <td align="left" style="padding-top:7px;">
                            <img src="<?php echo base_url().$imageCaptchaPostEmploy; ?>" width="151" height="30" /><br />
                            <input type="text" name="captcha_employ" id="captcha_employ" value="" maxlength="10" class="inputcaptcha_form" onfocus="ChangeStyle('captcha_employ',1);" onblur="ChangeStyle('captcha_employ',2);" />
                            <?php echo form_error('captcha_employ'); ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td width="150"></td>
                        <td height="30" valign="bottom" align="center">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="3" height="25"></td>
                                </tr>
                                <tr>
                                    <td><input type="button" onclick="CheckInput_PostEmploy();" name="submit_postemploy" value="<?php echo $this->lang->line('button_agree_post'); ?>" class="button_form" /></td>
                                    <td width="15"></td>
                                    <td><input type="reset" name="reset_postemploy" value="<?php echo $this->lang->line('button_reset_post'); ?>" class="button_form" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </form>
                    <?php }else{ ?>
                    <tr>
                        <td class="success_post">
                            <meta http-equiv=refresh content="5; url=<?php echo base_url(); ?>">
                            <?php echo $this->lang->line('success_post'); ?>
						</td>
					</tr>
                    <?php } ?>
                    <tr>
                        <td colspan="2" height="30" class="post_bottom"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td background="<?php echo base_url(); ?>templates/home/images/bg_bottomkhung_left.png" height="16" ></td>
        </tr>
    </table>
</td>
<!--END LEFT-->
<?php $this->load->view('home/common/info'); ?>
<?php $this->load->view('home/common/footer'); ?>