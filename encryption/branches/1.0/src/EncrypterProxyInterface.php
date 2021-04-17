<?php

declare(strict_types=1);

namespace Pollen\Encryption;

interface EncrypterProxyInterface
{
    /**
     * Instance du gestionnaire d'encryptage.
     *
     * @return EncrypterInterface
     */
    public function encrypter(): EncrypterInterface;

    /**
     * Décryptage d'une chaîne de caractères.
     *
     * @param string $hash
     *
     * @return string
     */
    public function decrypt(string $hash): string;

    /**
     * Encryptage d'une chaîne de caractères.
     *
     * @param string $plain
     *
     * @return string
     */
    public function encrypt(string $plain): string;

    /**
     * Définition du gestionnaire d'encryptage.
     *
     * @param EncrypterInterface $encrypter
     *
     * @return void
     */
    public function setEncrypter(EncrypterInterface $encrypter): void;
}