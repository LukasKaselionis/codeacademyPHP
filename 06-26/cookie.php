<?php

declare(strict_types = 1);

function credentials(): array {
    return [
        'username' => 'petras',
        'password' => 'petraitis',
    ];
}

function getInputData(): array {
    return $_GET + $_POST;
}

function login(){
    $inputData = getInputData();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
        if (isset($inputData['submit_login']) && $inputData['submit_login'] === 'submit'){
            if(isCredentialsIsvValid($inputData)){
            $expireTime = time() + 3600;
            setcookie('logged_in', '1', $expireTime);
            setcookie('username', $_POST['username'], $expireTime);

            header('Location: cookie.php');
        }
    } else {
        if (isset($inputData['logout']) && $inputData['logout'] === 'Logout') {

            setcookie('logged_in', '-1', time() - 1);
            setcookie('username', '-1', time() - 1);

            header('Location: cookie.php');
        }
    }
}

function isCredentialsIsvValid(array $postCredentials): bool {
    $userCredentials = credentials();

    $isValid = false;
    if(
            $userCredentials['username'] === $postCredentials['username'] &&

            $userCredentials['password'] === $postCredentials['password']
    ){
        $isValid = true;
    }

    return $isValid;
}

login();

if(isset($_COOKIE['logged_in']) && $_COOKIE['logged_in'] == 1){
    echo $_COOKIE['username'];
    ?>

    <form action="" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

    <?php
} else {
    ?>
    <form action="" method="post">
        <input type="text" name="username" value="" placeholder="Username">
        <input type="password" name="password" value="" placeholder="Password">
        <input type="submit" name="submit_login" value="submit">
    </form>
    <?php
}
    ?>
