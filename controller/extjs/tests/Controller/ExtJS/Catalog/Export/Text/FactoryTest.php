<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2011
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 */


class Controller_ExtJS_Catalog_Export_Text_FactoryTest extends PHPUnit_Framework_TestCase
{
	public function testCreateController()
	{
		$obj = Controller_ExtJS_Catalog_Export_Text_Factory::createController( TestHelper::getContext() );
		$this->assertInstanceOf( 'Controller_ExtJS_Common_Load_Text_Interface', $obj );
	}


	public function testFactoryExceptionWrongName()
	{
		$this->setExpectedException( 'Controller_ExtJS_Exception' );
		Controller_ExtJS_Catalog_Export_Text_Factory::createController( TestHelper::getContext(), 'Wrong$$$Name' );
	}


	public function testFactoryExceptionWrongClass()
	{
		$this->setExpectedException( 'Controller_ExtJS_Exception' );
		Controller_ExtJS_Catalog_Export_Text_Factory::createController( TestHelper::getContext(), 'WrongClass' );
	}


	public function testFactoryExceptionWrongInterface()
	{
		$this->setExpectedException( 'Controller_ExtJS_Exception' );
		Controller_ExtJS_Catalog_Export_Text_Factory::createController( TestHelper::getContext(), 'Factory' );
	}

}
