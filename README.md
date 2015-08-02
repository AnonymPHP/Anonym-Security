Anonym-Security
================

Bu sınıf AnonymFrameworkde güvenlik önlemleri almak için kullanılacaktır.

TypeHint
--------


```php

TypeHint::boot();
TypeHint::handle();

```

Firewall
--------

```php


$allowed = [
  'allowedUserAgent' => 'mozilla',
  'allowedAccept' => '*',
  'allowedLanguage' => 'tr-TR',
  'allowedReferer' => 'www.google.com',
  'allowedMethod' => ['GET', 'POST'],
  'allowedConnection' => '*',
  'allowedEncoding' => 'utf-8'
];

$firewall = new Firewall($allowed);
$firewall->run();

```

Authentication
-------------

Bu kısımda giriş, çıkış ve kayıt işlemleri gibi kullanıcı onaylama işlemleri yer almaktadır.


**Login:**


```php

use Anonym\Components\Security\Authentication\Login;
use Anonym\Components\Security\Authentication\AuthenticationLoginObject;
$login = new Login($db, $tables);

$remember = true; // giriş işlemi cookie 'e atanacakmı?
$login = login->login('username', 'password', $remember);

var_dump($login); // false or AuthenticationLoginObject
 
 if($login instanceof AuthenticationLoginObject){
  
   echo $login['username']; // arrayable class
 
 }
 
```


**Register:**

```php

use Anonym\Components\Security\Authentication\Register;

$register = new Register($db, $tables);
$register = register->register([
 'username' => 'test',
 'password' => 'test'
]);

var_dump($register); // true or false
```

**Çıkış Yaptırmak:**

```php

use Anonym\Components\Security\Authentication\Logout;
$logout = new Logout();
$logout->logout(); // true

```