<?php

declare(strict_types=1);

namespace Pollen\Encryption;

interface EncrypterInterface
{
    /**
     * Décryptage.
     *
     * @param string $hash
     *
     * @return string
     */
    public function decrypt(string $hash): string;

    /**
     * Encryptage.
     *
     * @param string $plain
     *
     * @return string
     */
    public function encrypt(string $plain): string;
}