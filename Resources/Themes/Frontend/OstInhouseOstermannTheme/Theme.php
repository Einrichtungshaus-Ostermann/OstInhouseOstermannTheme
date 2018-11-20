<?php declare(strict_types=1);

/**
 * Einrichtungshaus Ostermann GmbH & Co. KG - Inhouse Ostermann Theme
 *
 * @package   OstInhouseOstermannTheme
 *
 * @author    Eike Brandt-Warneke <e.brandt-warneke@ostermann.de>
 * @copyright 2018 Einrichtungshaus Ostermann GmbH & Co. KG
 * @license   proprietary
 */

namespace Shopware\Themes\OstInhouseOstermannTheme;

class Theme extends \Shopware\Components\Theme
{
    /**
     * ...
     *
     * @var string
     */
    protected $extend = 'OstInhouseTheme';

    /**
     * ...
     *
     * @var string
     */
    protected $name = 'Inhouse Ostermann Theme';

    /**
     * ...
     *
     * @var string
     */
    protected $description = 'Inhouse Ostermann Theme';

    /**
     * ...
     *
     * @var string
     */
    protected $author = 'Einrichtungshaus Ostermann GmbH & Co. KG';

    /**
     * ...
     *
     * @var string
     */
    protected $license = 'New BSD';

    /**
     * ...
     *
     * @var bool
     */
    protected $injectBeforePlugins = true;

    /**
     * ...
     *
     * @var array
     */
    protected $javascript = [
    ];
}
