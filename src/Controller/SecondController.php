<?php
namespace App\Controller;
class SecondController extends AppController {
public function index() {
    $this->viewBuilder()->setLayout("myLayout");
} }
?>