<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Uoms Controller
 *
 * @property \App\Model\Table\UomsTable $Uoms
 */
class UomsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $uoms = $this->paginate($this->Uoms);

        $this->set(compact('uoms'));
        $this->set('_serialize', ['uoms']);
    }

    /**
     * View method
     *
     * @param string|null $id Uom id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $uom = $this->Uoms->get($id, [
            'contain' => ['RecipeIngredients']
        ]);

        $this->set('uom', $uom);
        $this->set('_serialize', ['uom']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uom = $this->Uoms->newEntity();
        if ($this->request->is('post')) {
            $uom = $this->Uoms->patchEntity($uom, $this->request->data);
            if ($this->Uoms->save($uom)) {
                $this->Flash->success(__('The uom has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The uom could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('uom'));
        $this->set('_serialize', ['uom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Uom id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uom = $this->Uoms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $uom = $this->Uoms->patchEntity($uom, $this->request->data);
            if ($this->Uoms->save($uom)) {
                $this->Flash->success(__('The uom has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The uom could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('uom'));
        $this->set('_serialize', ['uom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Uom id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $uom = $this->Uoms->get($id);
        if ($this->Uoms->delete($uom)) {
            $this->Flash->success(__('The uom has been deleted.'));
        } else {
            $this->Flash->error(__('The uom could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
