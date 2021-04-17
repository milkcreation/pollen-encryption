# Pollen Encryption Component

[![Latest Version](https://img.shields.io/badge/release-1.0.0-blue?style=for-the-badge)](https://www.presstify.com/pollen-solutions/encryption/)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-green?style=for-the-badge)](LICENSE.md)
[![PHP Supported Versions](https://img.shields.io/badge/PHP->=7.0-8892BF?style=for-the-badge&logo=php)](https://www.php.net/supported-versions.php)

Pollen **Encryption** Component.

## Installation

```bash
composer require pollen-solutions/encryption
```

## Basic Usage

```php
use Pollen\Encryption\Encrypter;

// Cypher (AES-128-CBC|AES-256-CBC) and Key definitions
$cypher = 'AES-256-CBC';
// Recommended (use a static key. Replace 'static_key' by your own string)
$key = md5('static_key');
// Random key (valid only current request)
// $key = Encrypter::generateKey($cypher);

// Encrypter instanciation
$encrypter = new Encrypter($key, $cypher);

// To encrypt
$toEncrypt = 'toEncrypt';

// Encrypt
$encrypted = $encrypter->encrypt($toEncrypt);
var_dump('encrypted string : ' . $encrypted);
// ex. eyJpdiI6ImwxcmNicytwcVpkZmdsem4zTEpROVE9PSIsInZhbHVlIjoiK0JTN2EzWFVFazJoYi9abk1maW4vZz09IiwibWFjIjoiNDFiMzNlNzJkZjQxNGNhNmQyYmQ3MmViYjc0MTMyNmZiOTJmZTdlNDNmZmZiZGM3NzE1ZTc5YzE3YjIyZGQwZCJ9 

// Décrypt
$decrypted = $encrypter->decrypt($encrypted);
var_dump('decrypted string : ' . $decrypted);
// >> toEncrypt

```