# Cron


Bu bileşen cron job ekleme ve silme gibi işler için kullanılır.

-------------------------

Sınıfın Çağrımı
--------------

Cronjob ile ilgili sınıflar `Anonym\Components\Cron` namespace içinde bulunur.

```php

use Anonym\Components\Cron\Cron;
use Anonym\Components\Cron\Task;


$cron = new Cron();

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
->hourly();	Run the task every hour
->daily();	Run the task every day at midnight
->dailyAt('13:00');	Run the task every day at 13:00
->twiceDaily(1, 13);	Run the task daily at 1:00 & 13:00
->weekly();	Run the task every week
->monthly();	Run the task every month


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