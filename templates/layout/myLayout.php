
<main class="main">
    <div class="container">
        <?= $this->Html->css(['bob.css']) ?>
        <?= $this->fetch('css') ?>

        <?=$this->fetch('content') ?>
        <?=$this->Flash->render() ?>

        <?= $this->Html->script(['home.js']) ?>
        <?= $this->fetch('script') ?>
    </div>
</main>
