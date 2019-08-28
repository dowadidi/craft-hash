<?php
/**
 * Craft-Hash plugin for Craft CMS 3.x
 *
 * Twig filter for hashing.
 *
 * @link      https://github.com/dowadidi
 * @copyright Copyright (c) 2019 Diederik Van Hoorebeke
 */

namespace dowadidicrafthash\crafthash;

use dowadidicrafthash\crafthash\twigextensions\CraftHashTwigExtension;

use Craft;
use craft\base\Plugin;

use yii\base\Event;

/**
 * Class CraftHash
 *
 * @author    Diederik Van Hoorebeke
 * @package   CraftHash
 * @since     0.0.1
 *
 */
class CraftHash extends Plugin
{
    public static $plugin;
    public $schemaVersion = '0.0.1';

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new CraftHashTwigExtension());
    }
}
