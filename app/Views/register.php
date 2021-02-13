<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];
$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
$repeatpassword = [
    'name' => 'repeatpassword',
    'id' => 'repeatpassword',
    'class' => 'form-control'
];
$session = session();
$errors = $session->getflashdata('errors');
?>

<h1>Register Form</h1>
<?php if ($errors != null) :
?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Terjadi Kesalahan</h4>
        <hr>
        <p class="mb-0">
            <?php
            foreach ($errors as $err) {
                echo $err . '<br>';
            }
            ?>
        </p>
    </div>
<?php endif ?>

<?= form_open('auth/register') ?>
<div class="form-group">
    <?= form_label("username", "username") ?>
    <?= form_input($username) ?>
</div>
<div class="from-group">
    <?= form_label("password", "password") ?>
    <?= form_password($password) ?>
</div>
<div class="from-group">
    <?= form_label("Repeat Password", "repeatpassword") ?>
    <?= form_password($repeatpassword) ?>
</div>
<div class="text-right">
    <?= form_submit('submit', 'submit', ['class' => 'btn btn-primary']) ?>
</div>
<?= form_close() ?>
<?= $this->endsection() ?>