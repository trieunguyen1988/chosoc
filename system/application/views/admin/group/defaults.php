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
                                            <a href="<?php echo base_url(); ?>administ/group">
                                            	<img src="<?php echo base_url(); ?>templates/admin/images/item_group.gif" border="0" />
                                            </a>
                                        </td>
                                        <td width="40%" height="67" class="item_menu_middle"><?php echo $this->lang->line('title_defaults'); ?></td>
                                        <td width="55%" height="67" class="item_menu_right">
                                            <div class="icon_item" id="icon_item_1" onclick="ActionDelete('frmGroup')" onmouseover="ChangeStyleIconItem('icon_item_1',1)" onmouseout="ChangeStyleIconItem('icon_item_1',2)">
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
                                            <div class="icon_item" id="icon_item_2" onclick="ActionLink('<?php echo base_url(); ?>administ/group/add')" onmouseover="ChangeStyleIconItem('icon_item_2',1)" onmouseout="ChangeStyleIconItem('icon_item_2',2)">
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
                                            <select name="search" id="search" onchange="ActionSearch('<?php echo base_url(); ?>administ/group/',1)" class="select_search">
                                                <option value="0"><?php echo $this->lang->line('search_by_search'); ?></option>
                                                <option value="name"><?php echo $this->lang->line('name_defaults'); ?></option>
                                            </select>
                                        </td>
                                        <td align="left">
                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_search.gif" border="0" style="cursor:pointer;" onclick="ActionSearch('<?php echo base_url(); ?>administ/group/',1)" title="<?php echo $this->lang->line('search_tip'); ?>" />
                                        </td>
                                        <!---->
                                        <td width="115" align="left">
                                            <select name="filter" id="filter" onchange="ActionSearch('<?php echo base_url(); ?>administ/group/',2)" class="select_search">
                                                <option value="0"><?php echo $this->lang->line('filter_by_search'); ?></option>
                                                <option value="active"><?php echo $this->lang->line('active_search'); ?></option>
                                                <option value="deactive"><?php echo $this->lang->line('deactive_search'); ?></option>
                                            </select>
                                        </td>
                                        <td width="25" align="right">
                                            <img src="<?php echo base_url(); ?>templates/admin/images/icon_search.gif" border="0" style="cursor:pointer;" onclick="ActionSearch('<?php echo base_url(); ?>administ/group/',2)" title="<?php echo $this->lang->line('filter_tip'); ?>" />
                                        </td>
                                    </tr>
                                </table>
                                <!--END Search-->
                            </td>
                        </tr>
                        <tr>
                            <td height="5"></td>
                        </tr>
                        <form name="frmGroup" method="post">
                        <tr>
                            <td>
                                <!--BEGIN: Content-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="25" class="title_list">#</td>
                                        <td width="20" class="title_list">
                                            <input type="checkbox" name="checkall" id="checkall" value="0" onclick="DoCheck(this.checked,'frmGroup',0)" />
                                        </td>
                                        <td width="150" class="title_list">
                                            <?php echo $this->lang->line('groupname_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>name/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>name/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td class="title_list">
                                            <?php echo $this->lang->line('descr_list'); ?>
                                        </td>
                                        <td class="title_list">
                                            <?php echo $this->lang->line('permission_list'); ?>
                                        </td>
                                        <td width="90" class="title_list">
                                            <?php echo $this->lang->line('order_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>order/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>order/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                        <td width="60" class="title_list">
                                            <?php echo $this->lang->line('status_list'); ?>
                                        </td>
                                        <td width="60" class="title_list">
                                            <?php echo $this->lang->line('id_list'); ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_asc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>id/by/asc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                            <img src="<?php echo base_url(); ?>templates/admin/images/sort_desc.gif" onclick="ActionSort('<?php echo $sortUrl; ?>id/by/desc<?php echo $pageSort; ?>')" style="cursor:pointer;" border="0" />
                                        </td>
                                    </tr>
                                    <!---->
                                    <?php $idDiv = 1; ?>
                                    <?php foreach($group as $groupArray){ ?>
                                    <tr style="background:#<?php if($idDiv % 2 == 0){echo 'F7F7F7';}else{echo 'FFF';} ?>;" id="DivRow_<?php echo $idDiv; ?>" onmouseover="ChangeStyleRow('DivRow_<?php echo $idDiv; ?>',<?php echo $idDiv; ?>,1)" onmouseout="ChangeStyleRow('DivRow_<?php echo $idDiv; ?>',<?php echo $idDiv; ?>,2)">
                                        <td class="detail_list" style="text-align:center;"><b><?php echo $sTT++; ?></b></td>
                                        <td class="detail_list" style="text-align:center;">
                                            <input type="checkbox" name="checkone[]" id="checkone" value="<?php echo $groupArray->gro_id; ?>" <?php if($groupArray->gro_id == 1 || $groupArray->gro_id == 2 || $groupArray->gro_id == 3 || $groupArray->gro_id == 4){echo 'disabled="disabled"';} ?> onclick="DoCheckOne('frmGroup')" />
                                        </td>
                                        <td class="detail_list">
                                            <a class="menu" href="<?php if($groupArray->gro_id == 1 || $groupArray->gro_id == 2 || $groupArray->gro_id == 3 || $groupArray->gro_id == 4){echo '#';}else{ ?><?php echo base_url() ?>administ/group/edit/<?php echo $groupArray->gro_id; ?><?php } ?>" title="<?php if($groupArray->gro_id != 1 && $groupArray->gro_id != 2 && $groupArray->gro_id != 3 && $groupArray->gro_id != 4){echo $this->lang->line('edit_tip');} ?>">
                                                <?php echo $groupArray->gro_name; ?>
                                            </a>
                                        </td>
                                        <td class="detail_list">
                                            <?php echo sub($groupArray->gro_descr, 50); ?>
                                        </td>
                                        <td class="detail_list">
											<?php if($groupArray->gro_id == 4){echo $this->lang->line('all_allow_permission_defaults');}elseif($groupArray->gro_id == 1 || $groupArray->gro_id == 2 || $groupArray->gro_id == 3 || $groupArray->gro_permission == 'none'){echo $this->lang->line('unallowed_permission_defaults');}else{echo $this->lang->line('customize_permission_defaults');} ?>
                                        </td>
                                        <td class="detail_list" style="text-align:center;">
                                            <b><?php echo $groupArray->gro_order; ?></b>
                                        </td>
                                        <td class="detail_list" style="text-align:center;">
                                            <?php if($groupArray->gro_status == 1){ ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/active.png" onclick="ActionStatus('<?php echo $statusUrl; ?>/status/deactive/id/<?php echo $groupArray->gro_id; ?>')" style="cursor:pointer;" border="0" title="<?php echo $this->lang->line('deactive_tip'); ?>" />
                                            <?php }else{ ?>
                                            <img src="<?php echo base_url(); ?>templates/admin/images/deactive.png" onclick="ActionStatus('<?php echo $statusUrl; ?>/status/active/id/<?php echo $groupArray->gro_id; ?>')" style="cursor:pointer;" border="0" title="<?php echo $this->lang->line('active_tip'); ?>" />
                                            <?php } ?>
                                        </td>
                                        <td class="detail_list" style="text-align:center;">
                                            <?php echo $groupArray->gro_id; ?>
                                        </td>
                                    </tr>
                                    <?php $idDiv++; ?>
                                    <?php } ?>
                                    <!---->
                                    <tr>
                                        <td id="show_page" colspan="8"><?php echo $linkPage; ?></td>
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