<?php

use Cake\Core\Configure;

/**
 * OAuthServer plugin creates controller that extends App\Controller\AppController class.
 * Config OAuthServer.appController allows to override the base controller class.
 */
/**
 * No. This is a terrible idea it redecalres AppController. Better to just .. call OAuthController wtf is this. Commenting out
 
$appControllerReal = Configure::read('OAuthServer.appController') ?: 'App\Controller\AppController';
$appControllerAlias = 'OAuthServer\Controller\AppController';
class_alias($appControllerReal, $appControllerAlias);
 *
**/
