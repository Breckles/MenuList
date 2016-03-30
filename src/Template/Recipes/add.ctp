<div class="recipes form large-9 medium-8 columns content createForm">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create($recipe, ['url' => false, 'ng-submit' => 'submit()']) ?>
    <fieldset>
        <legend><?= __('Add Recipe') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'ng-model' => 'newRecipe.user_id']);
            echo $this->Form->input('name', ['ng-model' => 'newRecipe.name']);
            echo $this->Form->input('description', ['ng-model' => 'newRecipe.description']);
            echo $this->Form->input('instructions', ['ng-model' => 'newRecipe.instructions']);
            echo $this->Form->input('num_served', ['ng-model' => 'newRecipe.num_served', 'min' => 1]);
            echo $this->Form->input('image', ['ng-model' => 'newRecipe.image']);
            echo $this->Form->input('private', ['ng-model' => 'newRecipe.private']);            
        ?>
    </fieldset>  
    <button type="submit" class="btn saveRecipeButton">
        Save Recipe
    </button>
    <?= $this->Form->end() ?>
</div>
