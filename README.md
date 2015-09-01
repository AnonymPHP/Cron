# Cron


Bu sınıf cron job ekleme ve silme gibi işler için kullanılır.


Sınıfın Çağrımı
--------------

Cronjob ile ilgili sınıflar `Anonym\Components\Cron` namespace içinde bulunur.

```php

use Anonym\Components\Cron\Cron;
use Anonym\Components\Cron\Task;


$cron = new Cron();

```

Yeni bir iş eklemek
-------------------


Ekleyeceğiniz işleri direk terminal ile veya terminalde php üzerinden çağrılacak şekilde yapabilirsiniz.


**Terminal komutu çağırmak**:

```php

$cron->event(function(){

    return Task::exec('your exec command');

});

```

**Php komutu çağırmak**:

```php

$cron->event(function(){

 return Task::php('/var/www/html/test.php'); // call test.php
});

```

İşlerin Ne Zaman Çalışacağını Ayarlamak
----------------


