<?php

declare(strict_types=1);

namespace Pollen\Encryption;

use Pollen\Support\StaticProxy;
use RuntimeException;

/**
 * @see \Pollen\Support\Proxy\RouterProxyInterface
 */
trait EncrypterProxy
{
    /**
     * Instance du gestionnaire d'encryptage.
     * @var EncrypterInterface
     */
    private $encrypter;

    /**
     * Instance du gestionnaire d'encryptage.
     *
     * @return EncrypterInterface
     */
    public function encrypter(): EncrypterInterface
    {
        if ($this->encrypter === null) {
            try {
                $this->encrypter = Encrypter::getInstance();
            } catch (RuntimeException $e) {
                $this->encrypter = StaticProxy::getProxyInstance(
                    EncrypterInterface::class,
                    null,
                    method_exists($this, 'getContainer') ? $this->getContainer() : null
                );
            }
        }

        return $this->encrypter;
    }

    /**
     * Décryptage d'une chaîne de caractères.
     *
     * @param string $hash
     *
     * @return string
     */
    public function decrypt(string $hash): string
    {
        return $this->encrypter()->decrypt($hash);
    }

    /**
     * Encryptage d'une chaîne de caractères.
     *
     * @param string $plain
     *
     * @return string
     */
    public function encrypt(string $plain): string
    {
        return $this->encrypter()->encrypt($plain);
    }

    /**
     * Définition du gestionnaire d'encryptage.
     *
     * @param EncrypterInterface $encrypter
     *
     * @return void
     */
    public function setEncrypter(EncrypterInterface $encrypter): void
    {
        $this->encrypter = $encrypter;
    }
}