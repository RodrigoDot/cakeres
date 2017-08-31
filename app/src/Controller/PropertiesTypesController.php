<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PropertiesTypes Controller
 *
 * @property \App\Model\Table\PropertiesTypesTable $PropertiesTypes
 *
 * @method \App\Model\Entity\PropertiesType[] paginate($object = null, array $settings = [])
 */
class PropertiesTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $propertiesTypes = $this->paginate($this->PropertiesTypes);

        $this->set(compact('propertiesTypes'));
        $this->set('_serialize', ['propertiesTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Properties Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propertiesType = $this->PropertiesTypes->get($id, [
            'contain' => []
        ]);

        $this->set('propertiesType', $propertiesType);
        $this->set('_serialize', ['propertiesType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propertiesType = $this->PropertiesTypes->newEntity();
        if ($this->request->is('post')) {
            $propertiesType = $this->PropertiesTypes->patchEntity($propertiesType, $this->request->getData());
            if ($this->PropertiesTypes->save($propertiesType)) {
                $this->Flash->success(__('The properties type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The properties type could not be saved. Please, try again.'));
        }
        $this->set(compact('propertiesType'));
        $this->set('_serialize', ['propertiesType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Properties Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propertiesType = $this->PropertiesTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propertiesType = $this->PropertiesTypes->patchEntity($propertiesType, $this->request->getData());
            if ($this->PropertiesTypes->save($propertiesType)) {
                $this->Flash->success(__('The properties type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The properties type could not be saved. Please, try again.'));
        }
        $this->set(compact('propertiesType'));
        $this->set('_serialize', ['propertiesType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Properties Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propertiesType = $this->PropertiesTypes->get($id);
        if ($this->PropertiesTypes->delete($propertiesType)) {
            $this->Flash->success(__('The properties type has been deleted.'));
        } else {
            $this->Flash->error(__('The properties type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
