<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2015 Michaël BILCOT & Jérémy VALENTIN

This file is part of NeoFrag.

NeoFrag is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

NeoFrag is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with NeoFrag. If not, see <http://www.gnu.org/licenses/>.
**************************************************************************/

class w_facewidg_c_checker extends Controller_Widget
{
	public function index($settings = [])
	{
		return [				
			'fb-url'		=>	$settings['fb-url'],
			'header-taille'	=> 	in_array($settings['header-taille'], ['1', '0']) ? $settings['header-taille'] : '1',
			'voir-tous'		=>	in_array($settings['voir-tous'], ['1', '0']) ? $settings['voir-tous'] : '1',
			'voir-aime'		=>	in_array($settings['voir-aime'], ['1', '0']) ? $settings['voir-aime'] : '1',
			'hauteur'		=>	$settings['hauteur'],
		];
	}
}
/*
NeoFrag Alpha 0.1.6
./widgets/facewidg/controllers/facewidg.php
*/