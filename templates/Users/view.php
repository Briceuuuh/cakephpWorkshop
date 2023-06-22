<div class="row">
<aside class="column">
<div class="side-nav">
<h4 class="heading"><?= __('Actions') ?></h4>
<!-- // veuillez ajouter les différents lien vers les autres actions -->
        </div>
    </aside>
<div class="column-responsive column-80"> <div class="user view content">
<table> <tr>
<th><?= __('Email') ?></th>
<td>
    <!-- //ajouter l'email de l'utilisateur -->

</td> </tr>
<tr>
<th><?= __('Username') ?></th>
<td>
    <!-- //ajouter l'username de l'utilisateur -->

</td>
</tr> <tr>
<th><?= __('Id') ?></th>
<td>
    <!-- //ajouter l'id de l'utilisateur -->

</td> </tr>
</table>
<div class="related">
<h4><?= __('Produits') ?></h4>
<?php if (!empty($user->produits)) : ?> <div class="table-responsive">
<!-- // Faire un tableau à l'aide de la balise <table> afin d'afficher les différents produits -->
</div>
<?php endif; ?> </div>
        </div>
    </div>
</div>