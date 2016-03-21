<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScheduledMealsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScheduledMealsTable Test Case
 */
class ScheduledMealsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ScheduledMealsTable
     */
    public $ScheduledMeals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.scheduled_meals',
        'app.recipes',
        'app.users',
        'app.weekly_menus',
        'app.recipe_ingredients',
        'app.ingredients',
        'app.categories',
        'app.uoms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ScheduledMeals') ? [] : ['className' => 'App\Model\Table\ScheduledMealsTable'];
        $this->ScheduledMeals = TableRegistry::get('ScheduledMeals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ScheduledMeals);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
