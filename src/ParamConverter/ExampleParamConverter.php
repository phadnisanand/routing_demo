<?php

namespace Drupal\routing_demo\ParamConverter;

use Drupal\Core\ParamConverter\ParamConverterInterface;
use Drupal\node\Entity\Node;
use Symfony\Component\Routing\Route;

class ExampleParamConverter implements ParamConverterInterface {
  public function convert($value, $definition, $name, array $defaults) {
    return Node::load($value);
  }

  public function applies($definition, $name, Route $route) {
    return (!empty($definition['type']) && $definition['type'] == 'a_node');
  }

}

?>