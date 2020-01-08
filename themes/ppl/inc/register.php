<?php

require_once('../../../../wp-load.php');


$email = $_REQUEST['mail'];
$name = $_REQUEST['name'];
$last_name = $_REQUEST['last_name'];
$random_password = wp_generate_password( 12 );

$user = get_user_by( 'email', $email );
    if ( !$user ) {
//         $user_id = wp_create_user( $email, $random_password, $email, $name, $last_name );
		$userdata = array(
			'ID'              => 0,  // когда нужно обновить пользователя
			'user_pass'       => $random_password, // обязательно
			'user_login'      => $email, // обязательно
			'user_nicename'   => '',
			'user_url'        => '',
			'user_email'      => $email,
			'display_name'    => $name,
			'nickname'        => '',
			'first_name'      => $name,
			'last_name'       => $last_name,
			'description'     => '',
			'rich_editing'    => 'true', // false - выключить визуальный редактор
			'user_registered' => '', // дата регистрации (Y-m-d H:i:s) в GMT
			'role'            => '', // (строка) роль пользователя
			'jabber'          => '',
			'aim'             => '',
			'yim'             => '',
		);

		wp_insert_user( $userdata );
		
        if ( is_wp_error( $userdata ) ) {
            $data['error'] = true;
            $data['error_desc'] = $userdata->get_error_message();
        } else {
            $data['succes'] = true;
            $data['succes_desc'] = 'user_create';
        }
    } else {
        $data['error'] = true;
        $data['error_desc'] = 'email_exist';
    }

$data['req'] = $_REQUEST;

header('Content-Type: application/json');
echo(json_encode ($data));