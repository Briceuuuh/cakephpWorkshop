<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Liste des utilisateur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?> </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
        <?php
            echo $this->Form->create($users);
            echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => 1]);
            echo $this->Form->control('email');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->button("Valider");
            echo $this->Form->end();
        ?>
        </div>
    </div>
</div>