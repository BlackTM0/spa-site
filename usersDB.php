 <?php 
return [
   ['login' =>'admin', 'password' =>'123456'], 
   ['login' =>'moderator', 'password' =>'12345'], 
   ['login' =>'user', 'password' =>'123']
];

$hashed_users = array_map(function($user) {
   $user['password'] = md5($user['password']);
   return $user;
}, $users);

return $hashed_users;