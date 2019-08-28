<?php
/**
 * Hash plugin for Craft CMS 3.x
 *
 * Twig filter for hashing.
 *
 * @link      https://github.com/dowadidi
 * @copyright Copyright (c) 2019 Diederik Van Hoorebeke
 */

namespace dowadidicrafthash\hash\twigextensions;

use dowadidicrafthash\hash\Hash;

use Craft;

/**
 * @author    Diederik Van Hoorebeke
 * @package   Hash
 * @since     0.0.1
 */
class HashTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'Hash';
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('hash', [$this, 'hash']),
        ];
    }

    public function hash($text = random_int(0,getrandmax()), $algo = "md5")
    {
        $result = hash($algo, $text);
        return $result;
    }
}
