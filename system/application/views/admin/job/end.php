<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/menu'); ?>
<link type="text/css" href="<?php echo base_url(); ?>templates/admin/css/datepicker.css" rel="stylesheet" />	
<script type="text/javascript" src="<?php echo base_url(); ?>templates/admin/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/admin/js/datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/admin/js/ajax.js"></script>
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
                                            <a href="<?php echo base_url(); ?>administ/job/end">
                                            	<img src="<?php echo base_url(); ?>templates/admin/images/item_job.gif" border="0" />
                                            </a>
                                        </td>
                                        <td width="40%" height="67" class="item_menu_middle"><?php echo $this->lang->line('title_end'); ?></td>
                                        <td width="55%" height="67" class="item_menu_right">
                                            <div class="icon_item" id="icon_item_1" onclick="ActionDelete('frmEndJob')" onmouseover="ChangeStyleIconItem('icon_item_1',1)" onmouseout="ChangeStyleIconItem('icon_item_1',2)">
                                                <table width="100%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td align="center">
                                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_delete.png" border="0" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_icon_item" nowrap="nowrap"><?php echo $this->lang->line('delete_tool'); ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="icon_item" id="icon_item_3" onclick="ActionLink('<?php echo base_url(); ?>administ/job')" onmouseover="ChangeStyleIconItem('icon_item_3',1)" onmouseout="ChangeStyleIconItem('icon_item_3',2)">
                                                <table width="100%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td align="center">
                                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_back.png" border="0" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text_icon_item" nowrap="nowrap"><?php echo $this->lang->line('back_tool'); ?></td>
                                                    </tr>
                                                </table>
                                            </div>
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
                            <td align="center">
                                <!--BEGIN: Search-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="160" align="left">
                                            <input type="text" name="keyword" id="keyword" value="<?php echo $keyword; ?>" maxlength="100" class="input_search" onfocus="ChangeStyle('keyword',1)" onblur="ChangeStyle('keyword',2)" />
                                        </td>
                                        <td width="120" align="left">
                                            <select name="search" id="search" onchange="ActionSearch('<?php echo base_url(); ?>administ/job/end/',1)" class="select_search">
                                                <option value="0"><?php echo $this->lang->line('search_by_search'); ?></option>
                                                <option value="title"><?php echo $this->lang->line('title_search_end'); ?></option>
                                                <option value="salary"><?php echo $this->lang->line('salary_search_end'); ?></option>
                                                <option value="username"><?php echo $this->lang->line('username_search_end'); ?></option>
                                            </select>
                                        </td>
                                        <td align="left">
                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_search.gif" border="0" style="cursor:pointer;" onclick="ActionSearch('<?php echo base_url(); ?>administ/job/end/',1)" title="<?php echo $this->lang->line('search_tip'); ?>" />
                                        </td>
                                        <!---->
                                        <td width="115" align="left">
                                            <select name="filter" id="filter" onchange="ActionSearch('<?php echo base_url(); ?>administ/job/end/',2)" class="select_search">
                                                <option value="0"><?php echo $this->lang->line('filter_by_search'); ?></option>
                                                <option value="begindate"><?php echo $this->lang->line('begindate_search'); ?></option>
                                                <option value="enddate"><?php echo $this->lang->line('enddate_search'); ?></option>
                                                <option value="active"><?php echo $this->lang->line('active_search'); ?></option>
                                                <option value="deactive"><?php echo $this->lang->line('deactive_search'); ?></option>
                                                <option value="reliable"><?php echo $this->lang->line('reliable_search_end'); ?></option>
                                                <option value="notreliable"><?php echo $this->lang->line('notreliable_search_end'); ?></option>
                                            </select>
                                        </td>
                                        <td id="DivDateSearch_1" width="10" align="center"><b>:</b></td>
                                        <td id="DivDateSearch_2" width="60" align="left">
                                            <select name="day" id="day" class="select_datesearch">
                                                <option value="0"><?php echo $this->lang->line('day_search'); ?></option>
                                                <?php $this->load->view('admin/common/day'); ?>
                                            </select>
                                        </td>
                                        <td id="DivDateSearch_3" width="10" align="center"><b>-</b></td>
                                        <td id="DivDateSearch_4" width="60" align="left">
                                            <select name="month" id="month" class="select_datesearch">
                                                <option value="0"><?php echo $this->lang->line('month_search'); ?></option>
                                                <?php $this->load->view('admin/common/month'); ?>
                                            </select>
                                        </td>
                                        <td id="DivDateSearch_5" width="10" align="center"><b>-</b></td>
                                        <td id="DivDateSearch_6" width="60" align="left">
                                            <select name="year" id="year" class="select_datesearch">
                                                <option value="0"><?php echo $this->lang->line('year_search'); ?></option>
                                                <?php $this->load->view('admin/common/year'); ?>
                                            </select>
                                        </td>
                                        <script>OpenTabSearch('0',0);</script>
                                        <td width="25" align="right">
                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_search.gif" border="0" style="cursor:pointer;" onclick="ActionSearch('<?php echo base_url(); ?>administ/job/end/',2)" title="<?php echo $this->lang->line('filter_tip'); ?>" />
                                        </td>
                                    </tr>
                                </table>
                                <!--END Search-->
                            </td>
                        </tr>
                        <tr>
                            <td height="5"></td>
                        </tr>
                        <form name="frmEndJob" method="post">
                        <tr>
                            <td>
                                <!--BEGIN: Content-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="25" class="title_list">#</td>
                                        <td width="20" class="title_list">
                                            <input type="checkbox" name="checkall" id="checkall" value="0" onclick="DoCheck(this.checked,'frmEndJob',0)" />
                                        </td>
                                        <td class="title_list">
                                            <?php echo $this->lang->line('title_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>title/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>title/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td width="120" class="title_list">
                                            <?php echo $this->lang->line('field_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>field/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>field/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td width="110" class="title_list">
                                            <?php echo $this->lang->line('place_job_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>province/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>province/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td width="120" class="title_list">
                                            <?php echo $this->lang->line('salary_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>salary/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>salary/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td width="115" class="title_list">
                                            <?php echo $this->lang->line('poster_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>user/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>user/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td width="60" class="title_list">
                                            <?php echo $this->lang->line('reliable_list'); ?>
                                        </td>
                                        <td width="60" class="title_list">
                                            <?php echo $this->lang->line('status_list'); ?>
                                        </td>
                                        <td width="125" class="title_list">
                                            <?php echo $this->lang->line('begindate_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>begindate/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>begindate/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td width="125" class="title_list">
                                            <?php echo $this->lang->line('enddate_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>enddate/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>enddate/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                    </tr>
                                    <!---->
                                    <?php $idDiv = 1; ?>
                                    <?php foreach($job as $jobArray){ ?>
                                    <tr style="background:#<?php if($idDiv % 2 == 0){echo 'F7F7F7';}else{echo 'FFF';} ?>;" id="DivRow_<?php echo $idDiv; ?>" onmouseover="ChangeStyleRow('DivRow_<?php echo $idDiv; ?>',<?php echo $idDiv; ?>,1)" onmouseout="ChangeStyleRow('DivRow_<?php echo $idDiv; ?>',<?php echo $idDiv; ?>,2)">
                                        <td class="detail_list" style="text-align:center;"><b><?php echo $sTT++; ?></b></td>
                                        <td class="detail_list" style="text-align:center;">
                                            <input type="checkbox" name="checkone[]" id="checkone" value="<?php echo $jobArray->job_id; ?>" onclick="DoCheckOne('frmEndJob')" />
                                        </td>
                                        <td class="detail_list">
                                            <a class="menu" href="<?php echo base_url(); ?>job/field/<?php echo $jobArray->job_field; ?>/detail/<?php echo $jobArray->job_id; ?>" target="_blank" title="<?php echo $this->lang->line('view_tip'); ?>">
                                                <?php echo $jobArray->job_title; ?>
                                            </a>
                                            <span style="color:#0C0; font-style:italic;">(<?php echo $jobArray->job_view; ?>)</span>
                                        </td>
                                        <td class="detail_list">
                                            <a class="menu" href="<?php echo base_url(); ?>administ/field/edit/<?php echo $jobArray->fie_id; ?>" title="<?php echo $this->lang->line('edit_tip'); ?>">
                                                <?php echo $jobArray->fie_name; ?>
                                            </a>
                                        </td>
                                        <td class="detail_list">
                                            <a class="menu" href="<?php echo base_url(); ?>administ/province/edit/<?php echo $jobArray->pre_id; ?>" title="<?php echo $this->lang->line('edit_tip'); ?>">
                                                <?php echo $jobArray->pre_name; ?>
                                            </a>
                                        </td>
                                        <td class="detail_list">
                                            <?php $salaryView = explode('|', $jobArray->job_salary); ?>
                                            <font color="#FF0000"><b><span id="DivCost_<?php echo $idDiv; ?>"></span>&nbsp;<?php echo array_pop($salaryView); ?></b></font>
                                            <script>FormatCost('<?php echo $salaryView[0]; ?>', 'DivCost_<?php echo $idDiv; ?>');</script>
                                        </td>
                                        <td class="detail_list">
                                            <a class="menu" href="<?php echo base_url(); ?>administ/user/edit/<?php echo $jobArray->use_id; ?>" title="<?php echo $this->lang->line('edit_tip'); ?>">
                                                <?php echo $jobArray->use_username; ?>
                                            </a>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_expand.gif" onmouseover="ddrivetip('<?php echo $this->lang->line('email_tip_end'); ?>&nbsp;<?php echo $jobArray->use_email; ?>',300,'#F0F8FF');" onmouseout="hideddrivetip();" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td class="detail_list" style="text-align:center;">
                                            <?php if($jobArray->job_reliable == 1){ ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/active.png" onclick="ActionStatus('<?php echo $reliableUrl; ?>/reliable/deactive/jd/<?php echo $jobArray->job_id; ?>')" style="cursor:pointer;" border="0" title="<?php echo $this->lang->line('stop_reliable_tip_help_end'); ?>" />
                                            <?php }else{ ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/deactive.png" onclick="ActionStatus('<?php echo $reliableUrl; ?>/reliable/active/jd/<?php echo $jobArray->job_id; ?>')" style="cursor:pointer;" border="0" title="<?php echo $this->lang->line('reliable_tip_help_end'); ?>" />
                                            <?php } ?>
                                        </td>
                                        <td class="detail_list" style="text-align:center;">
                                            <?php if($jobArray->job_status == 1){ ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/active.png" border="0" title="" />
                                            <?php }else{ ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/deactive.png" border="0" title="" />
                                            <?php } ?>
                                        </td>
                                        <td class="detail_list" style="text-align:center;"><b><?php echo date('d-m-Y', $jobArray->job_begindate); ?></b></td>
                                        <td class="detail_list" style="text-align:center;">
                                            <input type="text" name="DivEnddate_<?php echo $idDiv; ?>" id="DivEnddate_<?php echo $idDiv; ?>" value="<?php echo date('d-m-Y', $jobArray->job_enddate); ?>" readonly="readonly" class="set_enddate" />
                                            <script type="text/javascript">
                                                $(function() {
                                                                $("#DivEnddate_<?php echo $idDiv; ?>").datepicker({showOn: 'button',
                                                                buttonImage: '<?php echo base_url(); ?>templates/admin/images/calendar.gif',
                                                                buttonImageOnly: true,
                                                                buttonText: '<?php echo $this->lang->line('set_enddate_tip'); ?>',
                                                                dateFormat: 'dd-mm-yy',
                                                                minDate: new Date(2008, 1-1, 1),
                                                                maxDate: '+10y',
                                                                onClose: function(){
                                                                        setEndDate(<?php echo $jobArray->job_id; ?>, document.getElementById('DivEnddate_<?php echo $idDiv; ?>').value, '<?php echo base_url(); ?>', 'job');
                                                                    }
                                                                });
                			                                 });
                                            </script>
                                        </td>
                                    </tr>
                                    <?php $idDiv++; ?>
                                    <?php } ?>
                                    <!---->
                                    <tr>
                                        <td id="show_page" colspan="11"><?php echo $linkPage; ?></td>
                                    </tr>
                                </table>
                                <!--END Content-->
                            </td>
                        </tr>
                        </form>
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