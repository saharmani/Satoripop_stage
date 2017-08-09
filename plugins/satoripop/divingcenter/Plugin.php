<?php namespace satoripop\DivingCenter;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
 'satoripop\DivingCenter\Components\reservationform' => 'reservationForm'  ,
 'satoripop\DivingCenter\Components\centerform' => 'centerForm' ,
 'satoripop\DivingCenter\Components\statutsform' => 'statutsForm' ,

               ];

    }

    public function registerSettings()
    {
    }
}
