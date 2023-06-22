<?php

declare(strict_types=1);
namespace App\Controller;

class UsersController extends AppController {
    public function index() {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function view($id = null) {
        $users = $this->Users->get($id, [ 'contain' => ['Produits'],]);
        $this->set(compact('users'));
    }

    public function add() {
        $users = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $users = $this->Users->patchEntity($users, $this->request->getData());
            if ($this->Users->save($users)) {
                $this->Flash->success(__('Le produit a été sauvegardé.'));
            } else {
                $this->Flash->error(__('Le produit n\'a pas pu être sauvegardé. Veuillez réessayer.'));
            }
        }
        $this->set(compact('users'));
    }

    public function edit($id = null) {
        if ($this->request->is(['patch', 'post', 'put'])) {
            // faire des requêtes pour modifier un user $this->set(compact('users'));
        }
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        // faire des requêtes pour deletes des users return $this->redirect(['action' => 'index']);
    }
}