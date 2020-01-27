<?
//
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once('errors.php');
require_once('global_pass.php');

    $user = new Post(10);
    $user->getTable('users');

    //var_dump($user);

    ?>

<div>
    <div>
        <b><?=$user->getField('login');?></b>
    </div>
    <a href="#">
        <?=$user->getField('password');?>
    </a>
</div>


<?$user = new User(11);?>
<div>
    <div>
        <b><?=$user->getField('login');?></b>
    </div>
    <a href="#">
        <?=$user->getField('password');?>
    </a>
</div>

<?php

$sql = $pdo->prepare("SELECT * FROM users WHERE id=11");
$sql->execute();
$info =  $sql->fetch(PDO::FETCH_LAZY);

echo $info->login;

User::drochka();
?>

<form action="system/controllers/posts/create.php" method="post">
    <input name="table" />
    <input name="login" />
    <input name="password" />
    <button>test</button>
</form>