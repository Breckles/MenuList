<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recipe Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $name
 * @property string $description
 * @property string $instructions
 * @property int $num_served
 * @property bool $private
 * @property string $image
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\RecipeIngredient[] $recipe_ingredients
 * @property \App\Model\Entity\ScheduledMeal[] $scheduled_meals
 */
class Recipe extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];


    public function addTestHeader($response)
    {
        $response->header('Test', 'It works!!!');
        return $response;
    }


}
