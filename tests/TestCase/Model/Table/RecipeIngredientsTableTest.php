<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipeIngredientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipeIngredientsTable Test Case
 */
class RecipeIngredientsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipeIngredientsTable
     */
    public $RecipeIngredients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recipe_ingredients',
        'app.recipes',
        'app.users',
        'app.weekly_menus',
        'app.scheduled_meals',
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
        $config = TableRegistry::exists('RecipeIngredients') ? [] : ['className' => 'App\Model\Table\RecipeIngredientsTable'];
        $this->RecipeIngredients = TableRegistry::get('RecipeIngredients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RecipeIngredients);

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
