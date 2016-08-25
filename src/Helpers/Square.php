<?php
/**
 * This file is part of the BeCy Group internal system
 * (c) 2015 BeCy Group s.r.o.
 */

namespace WebChemistry\Images\Helpers;

use BeCy\Image;

/**
 * Fill image in square by color.
 *
 * @author Jan Zahorsky <honza@becygroup.cz>
 * @package BeCy
 * @since 2016-08-24
 */
class Square implements IHelper
{

	/**
	 * @param Image  $image
	 * @param array $parameters
	 */
	public function invoke(Image $image, array $parameters) {
		$offset = !empty($parameters[0]) ? $parameters[0] : 0;
		$image->fillInSquare($offset);
	}

}