<?php
	
sleep(1);

$ldap_dn = "uid=".$_POST["usuariolg"].",dc=example,dc=com";
$ldap_password = $_POST["passlg"];

$ldap_con = ldap_connect("ldap.forumsys.com");
ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

	



if (@ldap_bind($ldap_con,$ldap_dn,$ldap_password)) {
    
	echo json_encode(array('error' => false));

	session_start();

	$_SESSION['usuario'] = $_POST["usuariolg"];

} else {

    echo json_encode(array('error' => true));
}

?>