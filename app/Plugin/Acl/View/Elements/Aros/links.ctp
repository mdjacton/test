<div id="aros_link" class="acl_links">
<?php
$selected = isset($selected) ? $selected : $this->params['action'];

$links = array();
$links[] = $this->Html->link(__d('acl', 'Build missing AROs'), '/admin/acl/aros/check', array('class' => ($selected == 'admin_check' )? 'selected' : null));
$links[] = $this->Html->link(__d('acl', 'Users groups'), '/admin/acl/aros/users', array('class' => ($selected == 'admin_users' )? 'selected' : null));

if(Configure :: read('acl.gui.groups_permissions.ajax') === true)
{
    $links[] = $this->Html->link(__d('acl', 'Groups permissions'), '/admin/acl/aros/ajax_group_permissions', array('class' => ($selected == 'admin_group_permissions' || $selected == 'admin_ajax_group_permissions' )? 'selected' : null));
}
else
{
    $links[] = $this->Html->link(__d('acl', 'Groups permissions'), '/admin/acl/aros/group_permissions', array('class' => ($selected == 'admin_group_permissions' || $selected == 'admin_ajax_group_permissions' )? 'selected' : null));
}
$links[] = $this->Html->link(__d('acl', 'Users permissions'), '/admin/acl/aros/user_permissions', array('class' => ($selected == 'admin_user_permissions' )? 'selected' : null));
echo $this->Html->nestedList($links, array('class' => 'acl_links'));
?>
</div>