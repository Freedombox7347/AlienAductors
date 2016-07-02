<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExpReviews Controller
 *
 * @property \App\Model\Table\ExpReviewsTable $ExpReviews
 */
class ExpReviewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Members', 'Experiences']
        ];
        $expReviews = $this->paginate($this->ExpReviews);

        $this->set(compact('expReviews'));
        $this->set('_serialize', ['expReviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Exp Review id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expReview = $this->ExpReviews->get($id, [
            'contain' => ['Members', 'Experiences']
        ]);

        $this->set('expReview', $expReview);
        $this->set('_serialize', ['expReview']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expReview = $this->ExpReviews->newEntity();
        if ($this->request->is('post')) {
            $expReview = $this->ExpReviews->patchEntity($expReview, $this->request->data);
            if ($this->ExpReviews->save($expReview)) {
                $this->Flash->success(__('The exp review has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The exp review could not be saved. Please, try again.'));
            }
        }
        $members = $this->ExpReviews->Members->find('list', ['limit' => 200]);
        $experiences = $this->ExpReviews->Experiences->find('list', ['limit' => 200]);
        $this->set(compact('expReview', 'members', 'experiences'));
        $this->set('_serialize', ['expReview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Exp Review id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expReview = $this->ExpReviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expReview = $this->ExpReviews->patchEntity($expReview, $this->request->data);
            if ($this->ExpReviews->save($expReview)) {
                $this->Flash->success(__('The exp review has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The exp review could not be saved. Please, try again.'));
            }
        }
        $members = $this->ExpReviews->Members->find('list', ['limit' => 200]);
        $experiences = $this->ExpReviews->Experiences->find('list', ['limit' => 200]);
        $this->set(compact('expReview', 'members', 'experiences'));
        $this->set('_serialize', ['expReview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Exp Review id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expReview = $this->ExpReviews->get($id);
        if ($this->ExpReviews->delete($expReview)) {
            $this->Flash->success(__('The exp review has been deleted.'));
        } else {
            $this->Flash->error(__('The exp review could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
