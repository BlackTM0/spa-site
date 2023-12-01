 <?php 
 function checkPassword (string $login, string $password) { 
    $users  = require __DIR__ . '/usersDB.php'; 
    foreach ($users as $user) { 
        if ($user['login'] === $login && $user['password'] === $password ) { 
            return true; 
        }
    }
    return false; 
 }

function getCurrentUser() : ?string { 
    $loginFromCookie = $_COOKIE['login'] ?? ''; 
    $passwordFromCookie = $_COOKIE['password'] ?? '';
    if(checkPassword($loginFromCookie, $passwordFromCookie)){ 
        return $loginFromCookie; 
    } 
    return null; 
}


