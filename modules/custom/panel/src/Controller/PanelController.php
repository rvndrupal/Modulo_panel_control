<?php


namespace Drupal\panel\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class PanelController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function index() {

  	return[

  		'#theme' => 'panel_control',
		//'#title' => 'Rodrigo Villanueva Nieto'
	];
  }
}