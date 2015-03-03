<?php

class Cpanel {

    static public function action($params = array()){

    	$cpuser      = (isset($params['cpuser']))      ? $params['cpuser']       : '';//cpanel username
    	$cppass      = (isset($params['cppass']))      ? $params['cppass']       : '';//cpanel password
    	$cpdomain    = (isset($params['cpdomain']))    ? $params['cpdomain']     : '';//cpanel domain address (domain.com)
    	$cpskin      = (isset($params['cpskin']))      ? $params['cpskin']       : 'x3';//cpanel theme
    	$emailname   = (isset($params['emailname']))   ? $params['emailname']    : '';//email name before @
    	$emaildomain = (isset($params['emaildomain'])) ? $params['emaildomain']  : '';//email domain address (domain.com)
    	$emailpass   = (isset($params['emailpass']))   ? $params['emailpass']    : '';//email password
    	$quota       = (isset($params['quota']))       ? $params['quota']        : '250';//quote 0 for unlimited MB
    	$action      = (isset($params['action']))      ? $params['action']       : '';//action to perform

	    switch ($action) {
	    	case 'createemail':
	    		fopen("https://$cpuser:$cppass@$cpdomain:2083/frontend/$cpskin/mail/doaddpop.html?email=$emailname&domain=$emaildomain&password=$emailpass&quota=$quota", "r");
	    		break;
	    	case 'deleteemail':
	    		fopen("https://$cpuser:$cppass@$cpdomain:2083/frontend/$cpskin/mail/realdelpop.html?email=$emailname&domain=$emaildomain", "r");
	    		break;
	    }

	    
    }

}
