<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PropertiesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PropertiesController Test Case
 *
 * @uses \App\Controller\PropertiesController
 */
class PropertiesControllerTest extends TestCase
{
    use IntegrationTestTrait;
    
    protected $fixtures = [
        'app.Properties',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\PropertiesController::index()
     */
    public function testIndex()
    {
        $this->get('/properties');
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\PropertiesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\PropertiesController::add()
     */
    public function testAdd()
    {
       $data = [
        'title' => 'Test Property',
        'description' => 'Test Description',
        'address' => 'Lorem ipsum dolor sit amet',
        'city' => 'Lorem ipsum dolor sit amet',
        'state' => 'Lorem ipsum dolor sit amet',
        'zip_code' => 'Lorem ipsum dolor ',
        'price' => 1.5,
        'bedrooms' => 1,
        'bathrooms' => 1,
        'area_sqft' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
       ];

       $this->enableCsrfToken();
       $this->enableSecurityToken();
       $this->put('/properties/edit/1', $data);
       $this->assertRedirect(['controller' => 'Properties', 'action' => 'index' ]);
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\PropertiesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\PropertiesController::delete()
     */
    public function testDelete()
    {
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->delete('/properties/delete/1');
        $this->assertRedirect(['controller'=>'Properties', 'action' => 'index' ]);
    }
}
