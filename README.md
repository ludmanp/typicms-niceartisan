<h1 align="center">TypiCMS Nice Artisan</h1>

Integrates [bestmomo/nice-artisan](https://github.com/bestmomo/nice-artisan) into [TypyCMS](https://github.com/TypiCMS/Base) admin

## Installation

Begin by installing the package through Composer. Run the following command in your terminal:

```
$ composer require ludmanp/typicms-niceartisan
```

Once done, add the following line in your providers array of `config/app.php`:

```php
\TypiCMS\Modules\NiceArtisan\Providers\ModuleProvider::class,
```

before TypiCMS Core Service Provider 

and alias 

```php
'nice_artisan' => \TypiCMS\Modules\NiceArtisan\Http\Middleware\NiceArtisan::class,
```

Last copy the package config to your local config with the publish command:

```
php artisan vendor:publish --tag=niceartisan:config
``` 

You can change options and commands in `config/commands.php`. The menu is dynamically created with this config.
 
Now it is available in TypiCMS admin menu for superadmin or user with appropriate permissions. 

To open Nice Artisan in new window change `view/vendor/sidebar/item` second line adding
```
@if($item->target_blank??false)target="_blank"@endif
``` 
before closing `a` tag