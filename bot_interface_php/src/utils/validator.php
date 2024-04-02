<?php

class Validator
{
    /**
     * Nettoie une chaîne de caractères pour enlever les balises HTML et PHP.
     *
     * @param string $data La chaîne à nettoyer.
     * @return string La chaîne nettoyée.
     */
    public static function sanitizeString($data)
    {
        return htmlspecialchars(strip_tags($data));
    }

    /**
     * Valide si une chaîne de caractères n'est pas vide.
     *
     * @param string $data La chaîne à valider.
     * @return bool True si la chaîne n'est pas vide, false sinon.
     */
    public static function validateNotEmpty($data)
    {
        return trim($data) !== '';
    }

    /**
     * Valide un format d'email.
     *
     * @param string $email L'email à valider.
     * @return bool True si l'email est valide, false sinon.
     */
    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Valide une longueur minimale pour une chaîne de caractères.
     *
     * @param string $data La chaîne à valider.
     * @param int $minLength La longueur minimale.
     * @return bool True si la chaîne respecte la longueur minimale, false sinon.
     */
    public static function validateMinLength($data, $minLength)
    {
        return strlen($data) >= $minLength;
    }

    // Ajoutez ici d'autres méthodes de validation selon vos besoins...
}
?>