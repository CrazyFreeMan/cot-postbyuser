<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=projects.add.add.import,market.add.add.import,folio.add.add.import
[END_COT_EXT]
==================== */

if($usr['isadmin']){
	$import_module =  $env['ext'];
	$postbyuser[$import_module] = cot_import('rpostbyuser_'.$import_module, 'P', 'TXT');
	if(!empty($postbyuser[$import_module])){
		
		if(is_numeric($postbyuser[$import_module])){

			$sql = $db->query("SELECT user_id, user_name FROM $db_users WHERE user_id=".$db->quote($postbyuser[$import_module]));			
			if ($sql->rowCount() == 1){	
				$sqlresult = $sql->fetch();	
				$ritem['item_userid'] 		= $sqlresult['user_id'];				
				/* Потім колись допишу перезапис буферу для виводу імені користувача
					// Extract the server-relative part
					$url = parse_url($_SERVER['HTTP_REFERER']);
					// Strip ajax param from the query
					$url['query'] = str_replace('&_ajax=1', '', $url['query']);
					$path = empty($url['query']) ? $url['path'] : $url['path'] . '?' . $url['query'];
					$hash = md5($path);
					// Save the buffer
					$_SESSION['cot_buffer'][$hash]['rpostbyuser_'.$import_module] = $sqlresult['user_name'];
				*/

			}else{
				cot_error('postbyuser_err_usr');
			}

		}else if(is_string($postbyuser[$import_module])){
			
			$postbyuser_id = $db->query("SELECT user_id FROM $db_users WHERE user_name=".$db->quote($postbyuser[$import_module]))->fetchColumn();
			if (!empty($postbyuser_id) && is_numeric($postbyuser_id)){
				$ritem['item_userid'] = $postbyuser_id;
			}else{
				cot_error('postbyuser_err_usr');
			}

		}else{
			cot_error('postbyuser_err_usr');
		}
	}
}