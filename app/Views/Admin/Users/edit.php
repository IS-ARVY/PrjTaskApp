<?= $this->extend("layouts/default") ?>

<?= $this->Section("title ") ?>Edit user<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Edit user</h1>

<?php if (session()->has('errors')): ?> 
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/admin/users/update/" . $user->id) ?>

    <?= $this->include('admin/users/form') ?>

    <button class="button is-link">Save</button>
    <a href="<?= site_url("/admin/users/show/" .$user->id) ?>">Cancel</a>

</form>

<?= $this->endSection() ?>