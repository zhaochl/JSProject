<?php


//alert('success', 'congratulations,add success!', U('FaSystem/viewTeamMember','member_fa_id='.$_POST['member_fa_id']));
$data = array('is_deleted'=>1, 'update_time'=>time());
if($m_r_customber_tag->where('rct_id = %d', $_POST['rct_id'])->setField($data)){
	
}



?>