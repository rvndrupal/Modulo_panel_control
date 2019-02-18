<?php


namespace Drupal\panel\Controller;

use Drupal\user\Entity\User;
use Drupal\file\Entity\File;


use Drupal\Core\Controller\ControllerBase;


/**
 * An example controller.
 */
class PanelController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */

  public function index() {
	

     $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
     //ksm($user);
     $nombre=$user->get('name')->value;
     //dpm($nombre);

    
     

  	return[

  		'#theme' => 'panel_control',
		'#nombre' => $nombre,
	];
  }
}