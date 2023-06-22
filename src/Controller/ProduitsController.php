<?php
namespace App\Controller;
class ProduitsController extends AppController {

    public function index() {
        $this->loadComponent('Paginator');
        $produits = $this->Paginator->paginate($this->Produits->find());
        $this->set(compact('produits'));

    }

    public function add() {
        $produit = $this->Produits->newEmptyEntity();
        $this->set(compact('produit'));
        if ($this->request->is('post')) {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('Le produit a été sauvegardé.'));
                // return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Le produit n\'a pas pu être sauvegardé. Veuillez réessayer.'));
            }
        }
    }

    public function buildRules(RulesChecker $rules): RulesChecker {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']); return $rules;
    }
}
?>