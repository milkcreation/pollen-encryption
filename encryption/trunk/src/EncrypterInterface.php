<?php

declare(strict_types=1);

namespace Pollen\Encryption;

interface EncrypterInterface
{
    /**
     * Vérification de support de la clé de hachage et de l'algorithme de cryptographie fournis.
     *
     * @param string $key
     * @param string $cipher AES-128-CBC|AES-256-CBC
     *
     * @return bool
     */
    public static function supported(string $key, string $cipher): bool;

    /**
     * Création d'une clé de hachage
     *
     * @param  string $cipher AES-128-CBC|AES-256-CBC
     *
     * @return string
     */
    public static function generateKey(string $cipher): string;

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