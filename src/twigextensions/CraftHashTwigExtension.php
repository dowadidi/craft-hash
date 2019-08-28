<?php
/**
 * Craft-Hash plugin for Craft CMS 3.x
 *
 * Twig filter for hashing.
 *
 * @link      https://github.com/dowadidi
 * @copyright Copyright (c) 2019 Diederik Van Hoorebeke
 */

namespace dowadidicrafthash\crafthash\twigextensions;

use dowadidicrafthash\crafthash\CraftHash;

use Craft;

/**
 * @author    Diederik Van Hoorebeke
 * @package   CraftHash
 * @since     0.0.1
 */
class CraftHashTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'CraftHash';
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
