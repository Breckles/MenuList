<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Recipe;
// App::uses('RecipeIngredientsController', 'Controller');

/**
 * Recipes Controller
 *
 * @property \App\Model\Table\RecipesTable $Recipes
 */
class RecipesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        // $this->paginate = [
        //     'contain' => ['Users']
        // ];
        // $recipes = $this->paginate($this->Recipes);

        // $recipes = $this->Recipes->find('all')->all();

        // // $recipe = $this->Recipes->get(1);
        // $recipe = new Recipe();
        // $this->response = $recipe->addTestHeader($this->response);

        // will retrieve the recipes, their recipeIngredients, and the associated ingredients
        $recipes = $this->Recipes->find('all')->contain([
                'RecipeIngredients',
                'RecipeIngredients.Ingredients'            
        ]);

        $this->set(compact('recipes'));
        $this->set('_serialize', ['recipes']);
    }

    /**
     * View method
     *
     * @param string|null $id Recipe id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipe = $this->Recipes->get($id, [
            'contain' => [
                'Users',
                'RecipeIngredients',
                'RecipeIngredients.Uoms',
                'RecipeIngredients.Ingredients'
            ]
        ]);


        $this->set('recipe', $recipe);
        $this->set('_serialize', ['recipe']);


        // //original code
        //  $recipe = $this->Recipes->get($id, [
        //     'contain' => ['Users', 'RecipeIngredients', 'ScheduledMeals']
        // ]);

        // $this->set('recipe', $recipe);
        // $this->set('_serialize', ['recipe']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout(false);

        $recipe = $this->Recipes->newEntity($this->request->data());//may not be necessary to pass the data to newEntity, since patchEntity takes it in

        if ($this->request->is('post')) {
            //patch the Recipe entity and make sure the RecipeIngredients associations (contained in $this->request->data('recipe_ingredients')) are added as well
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->data(), [
                'associated' => ['RecipeIngredients']
                ]);

            //If necessary, make recipe image the default 'no_image.jpg' image
            if ($recipe->image == '') {
                $recipe->image = 'no_image.jpg';
            }

            if ($this->Recipes->save($recipe)) {
                //need to send a message to the client to confirm everything has saved
            } else {
                $this->Flash->error(__('The recipe could not be saved. Please, try again.'));
            }
        }
        $users = $this->Recipes->Users->find('list', ['limit' => 200]);
        $this->set(compact('recipe', 'users'));
        $this->set('_serialize', ['recipe']);
        
        //original code

        // $this->viewBuilder()->layout(false);

        // $recipe = $this->Recipes->newEntity();
        // if ($this->request->is('post')) {
        //     $recipe = $this->Recipes->patchEntity($recipe, $this->request->data);
        //     if ($this->Recipes->save($recipe)) {
        //         $this->Flash->success(__('The recipe has been saved.'));
        //         return $this->redirect(['action' => 'add']);
        //     } else {
        //         $this->Flash->error(__('The recipe could not be saved. Please, try again.'));
        //     }
        // }
        // $users = $this->Recipes->Users->find('list', ['limit' => 200]);
        // $this->set(compact('recipe', 'users'));
        // $this->set('_serialize', ['recipe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipe id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipe = $this->Recipes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->data);
            if ($this->Recipes->save($recipe)) {
                $this->Flash->success(__('The recipe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recipe could not be saved. Please, try again.'));
            }
        }
        $users = $this->Recipes->Users->find('list', ['limit' => 200]);
        $this->set(compact('recipe', 'users'));
        $this->set('_serialize', ['recipe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipe id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipe = $this->Recipes->get($id);
        if ($this->Recipes->delete($recipe)) {
            $this->Flash->success(__('The recipe has been deleted.'));
        } else {
            $this->Flash->error(__('The recipe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function sendImage($image_name = null)
    {
        $this->response->file('images' . DS . 'recipes' . DS . $image_name);
        return $this->response;
    }
}
