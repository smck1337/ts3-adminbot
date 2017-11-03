<?php
//endlesscs.hu
$config = array();
$config[] = array();

$config[1]['connection'] = array(
         
/* Server IP  		*/			'server_ip' => '87.229.110.218',
/* Query Port 		*/			'server_query_port' => 10011,
/* Server ID  		*/  		'server_id' => 1,
/* Query login 	 	*/			'server_query_login' => 'serveradmin',
/* Query pass   	*/			'server_query_password' => 'jelszo',
/* Nick Name  		*/			'bot_name' => 'endBot',
/* Channel to move  */			'move_to_channel' => 7
);

$config[1]['events'] = array(
			          
'events_configs' => array(
'adminsOnline' => array(
/* Id channel   	*/			'write_channel' => 7,					
/* Name channel 	*/			'channel_name' => '[cspacer]Online adminok :   ',
/* Up Desc. 		*/			'up_description' => '\n[center][size=15][color=purple]Online adminok:[/color][/size][/center][hr]\n',
/* Down Desc.  		*/			'update' => 'Utoljára frissítve:',
/* Info Down Desc. 	*/			'info' => '#endlesscs.hu',
/* Admins Group  	*/			'groups' => array(6)
		),
	)
);
?>
