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

namespace OstInhouseOstermannTheme\Listeners\Controllers;

use Enlight_Event_EventArgs as EventArgs;
use Enlight_Controller_Action as Controller;

class Frontend
{

    /**
	 * ...
	 *
	 * @var string
	 */

	protected $viewDir;




    /**
	 * ...
	 *
	 * @param string           $viewDir
     * @param array            $configuration
	 */

	public function __construct( $viewDir )
	{
		// set params
		$this->viewDir        = $viewDir;
	}



    /**
     * ...
     *
     * @param EventArgs   $arguments
     *
     * @return void
     */

    public function onPostDispatch( EventArgs $arguments )
    {
        // get the controller
        /* @var $controller Controller */
        $controller = $arguments->get( "subject" );

        // get parameters
        $request    = $controller->Request();
        $view       = $controller->View();



        $activePlugins = Shopware()->Container()->getParameter( "active_plugins" );

        // do we even have our client?
        if ( !isset( $activePlugins['OstClient'] ) )
            // nothing to do
            return;

        $locationService = Shopware()->Container()->get( "ost_client.location_service" );




        // assign new home url
        $view->assign( "ostInhouseOstermannTheme", array( 'homeUrl' => $locationService->getHomeUrl() ) );
    }




}
