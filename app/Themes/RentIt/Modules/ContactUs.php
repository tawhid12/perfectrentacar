<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.11.2018
 * Time: 12:26
 */

namespace Corp\Themes\RentIt\Modules;


use Corp\Plugins\eCommerce\Models\Product;
use Corp\Plugins\PageBuilder\Classes\BaseModule;
use Corp\Themes\RentIt\MapLocations;

class ContactUs extends BaseModule {

	public function show( $module = true ) {
echo 'ok';die;
		$id = isset( $module->name ) ? $module->name : 'contact_us';

		if ( isset( $module->value ) ) {
			return $module->value;
		}



		return view( 'theme:rentit::modules.ContactUs' )->with( compact( 'id' ) )->render();
	}


	public function options() {
		return [

		];
	}
}