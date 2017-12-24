<?php
namespace Drupal\routing_demo\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Stream;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Url;


class TestPageController extends ControllerBase {
 public function test() {
	 return [
	 '#type' => 'markup',
	 '#markup' => $this->t("Test content" ),
	 ];
 }

 public function testArg($arg1,$arg2) {
	return [
	 '#type' => 'markup',
	 '#markup' => $this->t("Test: " . $arg1 . "  " .$arg2),
	 ];
	 	 
 }
 public function testNode(\Drupal\node\NodeInterface $node) {

 	$node = \Drupal::routeMatch()->getParameter('node');
 	if ($node instanceof \Drupal\node\NodeInterface) {
 		 $nid = $node->id();
	     return [
		 '#type' => 'markup',
		 '#markup' => $this->t("Test: " .  $nid  . '  ' .$node->getTitle()),
		 ];
	}
  } 
 public function testRedirect() {
	return $this->redirect('routing_demo.entity_default_list');
 }

 public function testDynamic() {
	 return [
	 '#type' => 'markup',
	 '#markup' => $this->t("Test dynamic route" ),
	 ];
 }
 
 public function testpermisson() {
 	 return [
	 '#type' => 'markup',
	 '#markup' => $this->t("Test testpermisson route" ),
	 ];
 }

}

