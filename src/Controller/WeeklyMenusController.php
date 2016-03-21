<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WeeklyMenus Controller
 *
 * @property \App\Model\Table\WeeklyMenusTable $WeeklyMenus
 */
class WeeklyMenusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $weeklyMenus = $this->paginate($this->WeeklyMenus);

        $this->set(compact('weeklyMenus'));
        $this->set('_serialize', ['weeklyMenus']);
    }

    /**
     * View method
     *
     * @param string|null $id Weekly Menu id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weeklyMenu = $this->WeeklyMenus->get($id, [
            'contain' => ['Users', 'ScheduledMeals']
        ]);

        $this->set('weeklyMenu', $weeklyMenu);
        $this->set('_serialize', ['weeklyMenu']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weeklyMenu = $this->WeeklyMenus->newEntity();
        if ($this->request->is('post')) {
            $weeklyMenu = $this->WeeklyMenus->patchEntity($weeklyMenu, $this->request->data);
            if ($this->WeeklyMenus->save($weeklyMenu)) {
                $this->Flash->success(__('The weekly menu has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The weekly menu could not be saved. Please, try again.'));
            }
        }
        $users = $this->WeeklyMenus->Users->find('list', ['limit' => 200]);
        $this->set(compact('weeklyMenu', 'users'));
        $this->set('_serialize', ['weeklyMenu']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Weekly Menu id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weeklyMenu = $this->WeeklyMenus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weeklyMenu = $this->WeeklyMenus->patchEntity($weeklyMenu, $this->request->data);
            if ($this->WeeklyMenus->save($weeklyMenu)) {
                $this->Flash->success(__('The weekly menu has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The weekly menu could not be saved. Please, try again.'));
            }
        }
        $users = $this->WeeklyMenus->Users->find('list', ['limit' => 200]);
        $this->set(compact('weeklyMenu', 'users'));
        $this->set('_serialize', ['weeklyMenu']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Weekly Menu id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weeklyMenu = $this->WeeklyMenus->get($id);
        if ($this->WeeklyMenus->delete($weeklyMenu)) {
            $this->Flash->success(__('The weekly menu has been deleted.'));
        } else {
            $this->Flash->error(__('The weekly menu could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
