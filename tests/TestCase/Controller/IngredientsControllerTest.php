<?php
namespace App\Test\TestCase\Controller;

use App\Controller\IngredientsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\IngredientsController Test Case
 */
class IngredientsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ingredients',
        'app.categories',
        'app.recipe_ingredients',
        'app.recipes',
        'app.users',
        'app.weekly_menus',
        'app.scheduled_meals',
        'app.uoms'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
