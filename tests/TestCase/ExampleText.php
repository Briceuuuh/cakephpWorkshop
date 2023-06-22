<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;
use App\Controller\HomeController;useCake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

class HomeControllerTest extends TestCase {
    use IntegrationTestTrait;
    public function testIndex() {
    $this->get('/');
    $this->assertResponseOk();
    $this->assertEquals('test',
    $this->viewVariable('test'));
    $this->assertEquals('bob',
    $this->viewVariable('bob'));
    }
}