<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=market.add.tags
Tags=market.add.tpl:{PRDADD_FORM_POSTBYUSER}
[END_COT_EXT]
==================== */
if($usr['isadmin']){
	$t->assign("PRDADD_FORM_POSTBYUSER", cot_inputbox('text', 'rpostbyuser_market',$postbyuser['market'], 'size="30" class="userinput"'));
}