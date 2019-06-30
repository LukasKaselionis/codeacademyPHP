<?php

declare(strict_types = 1);

$string = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
$salt = '';
$crypt = crypt($string, $salt);
echo $crypt;

echo '<br>';

$md5 = md5($string);
echo $md5;

echo '<br>';

$sha1 = sha1($string, false);

echo $sha1;

echo '<br>';

$hash = password_hash( $string, PASSWORD_BCRYPT);

echo $hash;

echo '<br>';

echo md5_file('../06-26/cookie.php');

echo '<br>';

echo lcfirst($string);

echo '<br>';

echo ucfirst($string);

echo '<br>';

echo strlen($string);

echo '<br>';

echo number_format(8946531.5661616699, 5, '.', '|');

echo '<br>';

echo ucwords($string);

echo '<br>';

echo wordwrap($string, 10, '<br>', false);

echo '<br>';

echo substr($string, 10, 1);

echo '<br>';

$string = '<div><p>sone</p><p>sadasfasf</p></div>';

echo strip_tags($string);

echo '<br>';

$ids = [1, 2, 3, 54];
$url = 'http://www.some.url/product/%d';

foreach ($ids as $id) {
    echo sprintf($url, $id);
    echo '<br>';
}


