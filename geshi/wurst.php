<?php
/*************************************************************************************
 * wurst.php
 * -------
 * Author: peq (Peter.peq@gmail.com)
 * Copyright: none
 * Release Version: 1
 * Date Started: 2014/20/01
 *
 * Wurst language file for GeSHi.
 *
 *************************************************************************************
 *
 *   This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

/*
1: jass_keyword
2: jass_primitiveType
3: jass_nativeType
4: jass_constantNativeFunction
5: jass_constant
6: jass_nativeFunction
7: jass_bjConstant
8: jass_bjVariable
9: jass_bjFunction
*/

// take vjass as base ...
include 'vjass.php';

// ... and change keywords:
$language_data['KEYWORDS'][1] = array("class", "return", "if", "else", "while", "for", "in", "break", "new", "null",
		"package", "endpackage", "function", "returns", "public", "private", "protected", "import", "native", "nativetype", "extends",
		"interface", "implements", "module", "use", "abstract", "static", "thistype", "override", "immutable", "it", "array", "and",
		"or", "not", "this", "construct", "ondestroy", "destroy", "type", "constant", "endfunction", "nothing", "init", "castTo",
		"tuple", "div", "mod", "let", "from", "to", "downto", "step", "endpackage", "skip", "true", "false", "var", "instanceof",
		"super", "enum", "switch", "case", "default", "typeId", "begin", "end"
    );
    
// add wurst specific types:
$language_data['KEYWORDS'][2][] = "int";

?>
