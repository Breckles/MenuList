<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ScheduledMeals Controller
 *
 * @property \App\Model\Table\ScheduledMealsTable $ScheduledMeals
 */
class ScheduledMealsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recipes', 'WeeklyMenus']
        ];
        $scheduledMeals = $this->paginate($this->ScheduledMeals);

        $this->set(compact('scheduledMeals'));
        $this->set('_serialize', ['scheduledMeals']);
    }

    /**
     * View method
     *
     * @param string|null $id Scheduled Meal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scheduledMeal = $this->ScheduledMeals->get($id, [
            'contain' => ['Recipes', 'WeeklyMenus']
        ]);

        $this->set('scheduledMeal', $scheduledMeal);
        $this->set('_serialize', ['scheduledMeal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scheduledMeal = $this->ScheduledMeals->newEntity();
        if ($this->request->is('post')) {
            $scheduledMeal = $this->ScheduledMeals->patchEntity($scheduledMeal, $this->request->data);
            if ($this->ScheduledMeals->save($scheduledMeal)) {
                $this->Flash->success(__('The scheduled meal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The scheduled meal could not be saved. Please, try again.'));
            }
        }
        $recipes = $this->ScheduledMeals->Recipes->find('list', ['limit' => 200]);
        $weeklyMenus = $this->ScheduledMeals->WeeklyMenus->find('list', ['limit' => 200]);
        $this->set(compact('scheduledMeal', 'recipes', 'weeklyMenus'));
        $this->set('_serialize', ['scheduledMeal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Scheduled Meal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scheduledMeal = $this->ScheduledMeals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scheduledMeal = $this->ScheduledMeals->patchEntity($scheduledMeal, $this->request->data);
            if ($this->ScheduledMeals->save($scheduledMeal)) {
                $this->Flash->success(__('The scheduled meal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The scheduled meal could not be saved. Please, try again.'));
            }
        }
        $recipes = $this->ScheduledMeals->Recipes->find('list', ['limit' => 200]);
        $weeklyMenus = $this->ScheduledMeals->WeeklyMenus->find('list', ['limit' => 200]);
        $this->set(compact('scheduledMeal', 'recipes', 'weeklyMenus'));
        $this->set('_serialize', ['scheduledMeal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Scheduled Meal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scheduledMeal = $this->ScheduledMeals->get($id);
        if ($this->ScheduledMeals->delete($scheduledMeal)) {
            $this->Flash->success(__('The scheduled meal has been deleted.'));
        } else {
            $this->Flash->error(__('The scheduled meal could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
