<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Déconnexion'), ['controller' => 'Users', 'action' => 'logout']); ?></li>
    </ul>
</nav>

<div class="articles index large-9 medium-8 columns content">
  <h4>le sujet de l'article se porte sur: <b><?= ucfirst(h($article->title)) ?></b></h4>
  <h3><?= __('Comments') ?></h3>
  <table cellpadding="0" cellspacing="0">
    <thead>
      <tr>
        <th scope="col"><?= $this->Paginator->sort('content') ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= h($article->content) ?></td>
      </tr>
    </tbody>
  </table>
  <div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
      <legend><?= __('Add Comments') ?></legend>
      <?php
      echo $this->Form->control('user_id', ['options' => $users]);
      echo $this->Form->control('title');
      echo $this->Form->control('content');
      echo $this->Form->control('tag');
      ?>
      <?= $this->Form->button(__('Submit')) ?>
      <?= $this->Form->end() ?>
    </fieldset>
  </div>
</div>
