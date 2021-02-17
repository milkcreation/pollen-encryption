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

// Cypher asn Key definition
$cypher = 'AES-128-CBC';
$key = Encrypter::generateKey($cypher);

// Encrypter instanciation
$encrypter = new Encrypter($key, $cypher);

// Encrypt
$encrypted = $encrypter->encrypt('Test');

// Décrypt
$decrypted = $encrypter->decrypt($encrypted);

echo $decrypted;

```