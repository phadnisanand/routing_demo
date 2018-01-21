<?php

namespace Drupal\routing_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ExampleController.
 *
 * @package Drupal\example_module\Controller
 */
class ExampleController extends ControllerBase {
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function content($name = "undefined", NodeInterface $a_node = NULL) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Node passed title: ' . $a_node->getTitle()),
    ];
  }

  public function contentDemo(Request $request, $some_var, $another_var) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Node passed title: ' . $some_var .  ' ' .  $another_var ),
    ];
  }

   public function titleMethodName() {
     return  'Dynamic title' . mt_rand(0, 10);
  }

}