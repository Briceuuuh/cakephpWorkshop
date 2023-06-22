<?php
namespace App\Controller;
class HomeController extends AppController {
public function index() {
    $test = "test";
    $this->set(compact('test'));
    $this->viewBuilder()->setLayout("myLayout");
} }
?>