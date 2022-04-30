# Laravel AakashSms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sachinkiranti/aakash-sms.svg?style=flat-square)](https://packagist.org/packages/sachinkiranti/aakash-sms)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sachinkiranti/aakash-sms/run-tests?label=tests)](https://github.com/sachinkiranti/aakash-sms/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sachinkiranti/aakash-sms/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sachinkiranti/aakash-sms/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sachinkiranti/aakash-sms.svg?style=flat-square)](https://packagist.org/packages/sachinkiranti/aakash-sms)

The `sachinkiranti/aakash-sms` package provides easy access to the api of *Nepali Sms Service Provider* called **AakashSms**.

## Installation

Installation is straightforward, setup is similar to every other Laravel Packages.

#### 1. Install via Composer

Begin by pulling in the package through Composer:

```
composer require sachinkiranti/aakash-sms
```

#### 2. Define the Service Provider and alias

**Note:** This package supports the new auto discovery features of `Laravel >=5.5`, so if you are working on a `Laravel >=5.5` project, then your installation is complete, you can skip to step 3.

Add manually the service provider in your `config/app.php` file :

```php
'providers' => [
    // ...
    SachinKiranti\AakashSms\AakashSmsServiceProvider::class,
];
```

#### 3. Publish Config File

To generate a config file type this command into your terminal:

```
php artisan vendor:publish --tag=aakash-sms
```

## Usage
Using the `sachinkiranti/aakash-sms` package :

After publishing the config files, please add the **auth token** <small>token</small>.

Sending Sms :
```php
// $recipients can be array of phone number or a single phone number
 (new AakashSms(98xxxxxxxx, "Hello From sachinkiranti/aakash-sms repo."))->send()
//  or sending to multiple phone number
 (new AakashSms([98xxxxxxxx, 98xxxxxxxx], "Hello From sachinkiranti/aakash-sms repo."))->send()
```

### Using with helpers

```php
// Single recipient
 send_aakash_sms (98xxxxxxxx, "Hello From sachinkiranti/aakash-sms repo.");
// Or multiple recipients
 send_aakash_sms ([98xxxxxxxx, 98xxxxxxxx], "Hello From sachinkiranti/aakash-sms repo.");
```

### TODO
- [ ] Test
- [ ] More flexible Api
- [ ] Credit check Api
- 
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.