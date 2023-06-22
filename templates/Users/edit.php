<div class="row">
    <aside class="column">
        <div class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <!-- // créer un lien qui va pouvoir éxecuter l'action delete sans accéder à sa vue -->
        <?= $this->Html->link(__('Liste Utilisateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
        </aside>
        <div class="column-responsive column-80">
            <div class="user form content">
        <!-- // compléter par un From qui va modifier les différentes valeurs -->
            </div>
    </div>
</div>