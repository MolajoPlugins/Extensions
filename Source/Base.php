<?php
/**
 * Base for Extensions Plugin
 *
 * @package    Molajo
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Molajo\Plugins\Extensions;

use Molajo\Plugins\SystemEvent;

/**
 * Base for Extensions Plugin
 *
 * @package     Molajo
 * @license     http://www.opensource.org/licenses/mit-license.html MIT License
 * @since       1.0
 */
abstract class Base extends SystemEvent
{
    /**
     * Extension Catalog Type Ids
     *
     * @var    array
     * @since  1.0.0
     */
    protected $extension_catalog_type_ids
        = array(
            5000  => 'Plugins',
            7000  => 'Themes',
            12000 => 'Resources'
        );

    /**
     * Extension folders
     *
     * @var    array
     * @since  1.0.0
     */
    protected $extension_folders
        = array(
            5000  => array('/Source/Plugins'),
            7000  => array('/Source/Themes'),
            12000 => array('/Source/Resources')
        );

    /**
     * Installed Themes
     *
     * @var    array
     * @since  1.0.0
     */
    protected $installed_themes = array();

    /**
     * Parent Id
     *
     * @var    integer
     * @since  1.0.0
     */
    protected $parent_id = 0;
}
