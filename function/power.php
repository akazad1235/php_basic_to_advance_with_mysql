<?php
function retrieveUserProfile()
{
$user[] = "Jason Gilmore";
$user[] = "jason@example.com";
$user[] = "English";
return $user;
}

list($name, $email)=retrieveUserProfile();

echo ($name);