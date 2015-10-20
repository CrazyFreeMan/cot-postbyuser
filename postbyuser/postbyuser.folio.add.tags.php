<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=folio.add.tags
Tags=folio.add.tpl:{PRDADD_FORM_POSTBYUSER}
[END_COT_EXT]
==================== */
if($usr['isadmin']){
	$t->assign("PRDADD_FORM_POSTBYUSER", cot_inputbox('text', 'rpostbyuser_folio',$postbyuser['folio'], 'size="30" class="userinput"'));
}