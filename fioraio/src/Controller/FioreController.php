<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Fiore Controller
 *
 * @property \App\Model\Table\FioreTable $Fiore
 * @method \App\Model\Entity\Fiore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FioreController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Occasions'],
        ];
        $fiore = $this->paginate($this->Fiore);

        $this->set(compact('fiore'));
    }

    /**
     * View method
     *
     * @param string|null $id Fiore id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fiore = $this->Fiore->get($id, [
            'contain' => ['Occasions'],
        ]);

        $this->set('fiore', $fiore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fiore = $this->Fiore->newEmptyEntity();
        if ($this->request->is('post')) {
            $fiore = $this->Fiore->patchEntity($fiore, $this->request->getData());
            if ($this->Fiore->save($fiore)) {
                $this->Flash->success(__('The fiore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fiore could not be saved. Please, try again.'));
        }
        $occasions = $this->Fiore->Occasions->find('list', ['limit' => 200]);
        $this->set(compact('fiore', 'occasions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fiore id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fiore = $this->Fiore->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fiore = $this->Fiore->patchEntity($fiore, $this->request->getData());
            if ($this->Fiore->save($fiore)) {
                $this->Flash->success(__('The fiore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fiore could not be saved. Please, try again.'));
        }
        $occasions = $this->Fiore->Occasions->find('list', ['limit' => 200]);
        $this->set(compact('fiore', 'occasions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fiore id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fiore = $this->Fiore->get($id);
        if ($this->Fiore->delete($fiore)) {
            $this->Flash->success(__('The fiore has been deleted.'));
        } else {
            $this->Flash->error(__('The fiore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
