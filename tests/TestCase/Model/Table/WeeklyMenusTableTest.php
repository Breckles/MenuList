<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeeklyMenusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeeklyMenusTable Test Case
 */
class WeeklyMenusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WeeklyMenusTable
     */
    public $WeeklyMenus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.weekly_menus',
        'app.users',
        'app.recipes',
        'app.recipe_ingredients',
        'app.ingredients',
        'app.categories',
        'app.uoms',
        'app.scheduled_meals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WeeklyMenus') ? [] : ['className' => 'App\Model\Table\WeeklyMenusTable'];
        $this->WeeklyMenus = TableRegistry::get('WeeklyMenus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WeeklyMenus);

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
