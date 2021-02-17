<?php

declare(strict_types=1);

namespace Pollen\Encryption;

use Pollen\Container\BaseServiceProvider;

class EncryptionServiceProvider extends BaseServiceProvider
{
    /**
     * @var string[]
     */
    protected $provides = [
        EncrypterInterface::class
    ];

    /**
     * @inheritDoc
     */
    public function register(): void
    {
        $this->getContainer()->share(EncrypterInterface::class, function () {
            $cipher = 'AES-128-CBC';
            $key = Encrypter::generateKey($cipher);

            return new Encrypter($key, $cipher);
        });
    }
}