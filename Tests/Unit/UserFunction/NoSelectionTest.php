<?php
namespace FluidTYPO3\Flux\UserFunction;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Claus Due <claus@wildside.dk>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

use FluidTYPO3\Flux\UserFunction\AbstractUserFunctionTest;

/**
 * @author Claus Due <claus@wildside.dk>
 * @package Flux
 */
class NoSelectionTest extends AbstractUserFunctionTest {

	/**
	 * @var boolean
	 */
	protected $expectsNull = TRUE;

	/**
	 * @test
	 */
	public function rendersOutputWithDebugEnabled() {
		$backup = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['flux']['setup']['debugMode'];
		$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['flux']['setup']['debugMode'] = 1;
		$this->expectsNull = FALSE;
		$this->canCallMethodAndReceiveOutput();
		$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['flux']['setup']['debugMode'] = $backup;
	}

}