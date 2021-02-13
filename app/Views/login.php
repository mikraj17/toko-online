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
?>
<h1>Login Form</h1>
<?= form_open('auth/login') ?>
<div class="form-group">
    <?= form_label("username", "username") ?>
    <?= form_input($username) ?>
</div>
<div class="from-group">
    <?= form_label("password", "password") ?>
    <?= form_password($password) ?>
</div>
<? form_close() ?>
<?= $this->endsection() ?>