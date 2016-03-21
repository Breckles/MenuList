<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RecipeIngredients Controller
 *
 * @property \App\Model\Table\RecipeIngredientsTable $RecipeIngredients
 */
class RecipeIngredientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recipes', 'Ingredients', 'Uoms']
        ];
        $recipeIngredients = $this->paginate($this->RecipeIngredients);

        $this->set(compact('recipeIngredients'));
        $this->set('_serialize', ['recipeIngredients']);
    }

    /**
     * View method
     *
     * @param string|null $id Recipe Ingredient id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipeIngredient = $this->RecipeIngredients->get($id, [
            'contain' => ['Recipes', 'Ingredients', 'Uoms']
        ]);

        $this->set('recipeIngredient', $recipeIngredient);
        $this->set('_serialize', ['recipeIngredient']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipeIngredient = $this->RecipeIngredients->newEntity();
        if ($this->request->is('post')) {
            $recipeIngredient = $this->RecipeIngredients->patchEntity($recipeIngredient, $this->request->data);
            if ($this->RecipeIngredients->save($recipeIngredient)) {
                $this->Flash->success(__('The recipe ingredient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recipe ingredient could not be saved. Please, try again.'));
            }
        }
        $recipes = $this->RecipeIngredients->Recipes->find('list', ['limit' => 200]);
        $ingredients = $this->RecipeIngredients->Ingredients->find('list', ['limit' => 200]);
        $uoms = $this->RecipeIngredients->Uoms->find('list', ['limit' => 200]);
        $this->set(compact('recipeIngredient', 'recipes', 'ingredients', 'uoms'));
        $this->set('_serialize', ['recipeIngredient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipe Ingredient id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipeIngredient = $this->RecipeIngredients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipeIngredient = $this->RecipeIngredients->patchEntity($recipeIngredient, $this->request->data);
            if ($this->RecipeIngredients->save($recipeIngredient)) {
                $this->Flash->success(__('The recipe ingredient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recipe ingredient could not be saved. Please, try again.'));
            }
        }
        $recipes = $this->RecipeIngredients->Recipes->find('list', ['limit' => 200]);
        $ingredients = $this->RecipeIngredients->Ingredients->find('list', ['limit' => 200]);
        $uoms = $this->RecipeIngredients->Uoms->find('list', ['limit' => 200]);
        $this->set(compact('recipeIngredient', 'recipes', 'ingredients', 'uoms'));
        $this->set('_serialize', ['recipeIngredient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipe Ingredient id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipeIngredient = $this->RecipeIngredients->get($id);
        if ($this->RecipeIngredients->delete($recipeIngredient)) {
            $this->Flash->success(__('The recipe ingredient has been deleted.'));
        } else {
            $this->Flash->error(__('The recipe ingredient could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}