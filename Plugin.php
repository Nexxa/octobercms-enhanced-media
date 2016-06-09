<?php namespace Nexxa\Enhancedmedia;

use Backend;
use System\Classes\PluginBase;

/**
 * enhancedmedia Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Enhanced Media',
            'description' => 'Abstract media center with tags, easily replaced with a simple twig filter',
            'author'      => 'Gabriele Stefanini <gabriele.stefanini@gmail.com>',
            'icon'        => 'icon-image'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        // return [
        //     'Nexxa\Enhancedmedia\Components\MyComponent' => 'myComponent',
        // ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'nexxa.enhancedmedia.manage' => [
                'tab'   => 'enhancedmedia',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        // return []; // Remove this line to activate

        return [
            'enhancedmedia' => [
                'label'       => 'Enhanced Media',
                'url'         => Backend::url('nexxa/enhancedmedia/enhancedmedia'),
                'icon'        => 'icon-image',
                'permissions' => ['nexxa.enhancedmedia.manage'],
                'order'       => 500,
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'enhanced_media' => [$this, 'enhancedMedia']
            ]
        ];
    }

    public function enhancedMedia($label)
    {
        return \Nexxa\Enhancedmedia\Models\EnhancedMedia::getImageUrl($label);
    }
}
