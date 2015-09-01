# Cron


Bu bileşen cron job ekleme ve silme gibi işler için kullanılır.

-------------------------

Sınıfın Çağrımı
--------------

Cronjob ile ilgili sınıflar `Anonym\Components\Cron` namespace içinde bulunur.

```php

use Anonym\Components\Cron\BasicCron;
use Anonym\Components\Cron\Task;


$cron = new BasicCron();

```

------------------------------

Yeni bir iş eklemek
-------------------


Ekleyeceğiniz işleri direk terminal ile veya terminalde php üzerinden çağrılacak şekilde yapabilirsiniz.


**Terminal komutu çağırmak**:

```php

$cron->event(function(){

    return Task::exec('your exec command');

});

```

----------------------------

**Php komutu çağırmak**:

```php

$cron->event(function(){

 return Task::php('/var/www/html/test.php'); // call test.php
});

```

----------------------------

İşlerin Ne Zaman Çalışacağını Ayarlamak
----------------

Eklediğiniz işler ön tanımlı olarak her dakika çalışacak şekilde ayarlıdır. Bunu düzenlemek için;

`return Task::php('/var/www/html/test.php')` kodundan sonra `daily` gibi methodları çağırabilirsiniz.

**Örnek Olarak:**


```php


$cron->event(function(){

 return Task::php('/var/www/html/test.php')->daily(); // call test.php everyday
});


```

-----------------------------

**Kullanabileceğiniz Değerler aşağıdaki gibidir**

```php
->everyMinute();        // her dakika yürütür
->everyFiveMinutes();   // her 5 dakikada bir yürütür
->everyTenMinutes();    // her 10 dakikada bir yürütür
->everyThirtyMinutes();	// her 30 dakikada bir yürütür
->hourly();	            // her saat başı yürütür
->daily();	            // her gün yürütür
->dailyAt('13:00');	    // her günün girilen saatinde yürütür
->twiceDaily(1, 13);	// her gün girilen saatlerde yürütür
->weekly();	            // her haftanın başında yürütür
->monthly();	        // her ayın başında yürütür


->weekdays();	Limit the task to weekdays
->sundays();	Limit the task to Sunday
->mondays();	Limit the task to Monday
->tuesdays();	Limit the task to Tuesday
->wednesdays();	Limit the task to Wednesday
->thursdays();	Limit the task to Thursday
->fridays();	Limit the task to Friday
->saturdays();	Limit the task to Saturday
->when(Closure);	Limit the task based on a truth test

```