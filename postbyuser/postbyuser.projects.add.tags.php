<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=projects.add.tags
Tags=projects.add.tpl:{PRJADD_FORM_POSTBYUSER}
[END_COT_EXT]
==================== */
if($usr['isadmin']){	
	$t->assign("PRJADD_FORM_POSTBYUSER", cot_inputbox('text', 'rpostbyuser_projects',$postbyuser['projects'], 'size="30" class="userinput"'));
}