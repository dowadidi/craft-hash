<?php
/**
 * Hash plugin for Craft CMS 3.x
 *
 * Twig filter for hashing.
 *
 * @link      https://github.com/dowadidi
 * @copyright Copyright (c) 2019 Diederik Van Hoorebeke
 */

namespace dowadidi\hash;

use dowadidi\hash\twigextensions\HashTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;

use yii\base\Event;

/**
 * Class Hash
 *
 * @author    Diederik Van Hoorebeke
 * @package   Hash
 * @since     0.0.1
 *
 */
class Hash extends Plugin
{
    public static $plugin;
    public $schemaVersion = '0.0.1';

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new HashTwigExtension());
    }

}
