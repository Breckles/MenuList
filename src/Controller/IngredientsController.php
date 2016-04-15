<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ingredients Controller
 *
 * @property \App\Model\Table\IngredientsTable $Ingredients
 */
class IngredientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ingredients = $this->Ingredients->find('all')->contain([
            'Categories'
        ]);

        $this->set(compact('ingredients'));
        $this->set('_serialize', ['ingredients']);


        // $this->paginate = [
        //     'contain' => ['Categories']
        // ];
        // $ingredients = $this->paginate($this->Ingredients);

        // $this->set(compact('ingredients'));
        // $this->set('_serialize', ['ingredients']);
    }

    /**
     * View method
     *
     * @param string|null $id Ingredient id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ingredient = $this->Ingredients->get($id, [
            'contain' => ['Categories', 'RecipeIngredients']
        ]);

        $this->set('ingredient', $ingredient);
        $this->set('_serialize', ['ingredient']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //will hold the new list of Ingredients after the new one has been created
        $ingredients;

        $ingredient = $this->Ingredients->newEntity();
        if ($this->request->is('post')) {
            $ingredient = $this->Ingredients->patchEntity($ingredient, $this->request->data);
            if ($this->Ingredients->save($ingredient)) {
                $this->Flash->success(__('The ingredient has been saved.'));
                $ingredient = $this->Ingredients->get($ingredient->id, [
                    'contain' => ['Categories']
                ]);
            } else {
                $this->Flash->error(__('The ingredient could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ingredient', 'categories'));
        $this->set('_serialize', ['ingredient']);



        // $ingredient = $this->Ingredients->newEntity();
        // if ($this->request->is('post')) {
        //     $ingredient = $this->Ingredients->patchEntity($ingredient, $this->request->data);
        //     if ($this->Ingredients->save($ingredient)) {
        //         $this->Flash->success(__('The ingredient has been saved.'));
        //         return $this->redirect(['action' => 'index']);
        //     } else {
        //         $this->Flash->error(__('The ingredient could not be saved. Please, try again.'));
        //     }
        // }
        // $categories = $this->Ingredients->Categories->find('list', ['limit' => 200]);
        // $this->set(compact('ingredient', 'categories'));
        // $this->set('_serialize', ['ingredient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ingredient id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ingredient = $this->Ingredients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ingredient = $this->Ingredients->patchEntity($ingredient, $this->request->data);
            if ($this->Ingredients->save($ingredient)) {
                $this->Flash->success(__('The ingredient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ingredient could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Ingredients->Categories->find('list', ['limit' => 200]);
        $this->set(compact('ingredient', 'categories'));
        $this->set('_serialize', ['ingredient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ingredient id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ingredient = $this->Ingredients->get($id);
        if ($this->Ingredients->delete($ingredient)) {
            $this->Flash->success(__('The ingredient has been deleted.'));
        } else {
            $this->Flash->error(__('The ingredient could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function sendImage($image_name = null)
    {
        $this->response->file('images' . DS . $image_name);
        return $this->response;
    }
}
