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



$language_data = array (
  'LANG_NAME' => 'wurst',
  'COMMENT_SINGLE' => array(
    1 => '//',
    ),
  'COMMENT_MULTI' => array('/*' => '*/'),
  'COMMENT_REGEXP' => array(
    3 => '#\\@.*?\\@#'
  ),
  'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
  'QUOTEMARKS' => array("'", '"'),
  'ESCAPE_CHAR' => '',
  'ESCAPE_REGEXP' => array(
    //Simple Single Char Escapes
    1 => "#\\\\[\\\\abfnrtv\'\"]#i",
    //Octal Char Specs
    2 => '#\\\\\d{1,3}#'
    ),
  'NUMBERS' =>
    GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_HEX_PREFIX |
    GESHI_NUMBER_FLT_NONSCI | GESHI_NUMBER_FLT_NONSCI_F |
    GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
  'KEYWORDS' => array(
    // blocks, keywords
    1 => array("class", "return", "if", "else", "while", "for", "in", "break", "new", "null",
		"package", "endpackage", "function", "returns", "public", "private", "protected", "import", "native", "nativetype", "extends",
		"interface", "implements", "module", "use", "abstract", "static", "thistype", "override", "immutable", "it", "array", "and",
		"or", "not", "this", "construct", "ondestroy", "destroy", "type", "constant", "endfunction", "nothing", "init", "castTo",
		"tuple", "div", "mod", "let", "from", "to", "downto", "step", "endpackage", "skip", "true", "false", "var", "instanceof",
		"super", "enum", "switch", "case", "default", "typeId", "begin", "end"
    ),
    // types
    2 => array("int", "integer", "real", "code", "boolean", "string",
		"agent",  "event",  "player",  "widget",  "unit",  "destructable", 
		 "item",  "ability",  "buff",  "force",  "group", 
		 "trigger",  "triggercondition",  "triggeraction",  "timer",  "location", 
		 "region",  "rect",  "boolexpr",  "sound",  "conditionfunc", 
		 "filterfunc",  "unitpool",  "itempool",  "race",  "alliancetype", 
		 "racepreference",  "gamestate",  "igamestate",  "fgamestate",  "playerstate", 
		 "playerscore",  "playergameresult",  "unitstate",  "aidifficulty",  "eventid", 
		 "gameevent",  "playerevent",  "playerunitevent",  "unitevent",  "limitop", 
		 "widgetevent",  "dialogevent",  "unittype",  "gamespeed",  "gamedifficulty", 
		 "gametype",  "mapflag",  "mapvisibility",  "mapsetting",  "mapdensity", 
		 "mapcontrol",  "playerslotstate",  "volumegroup",  "camerafield",  "camerasetup", 
		 "playercolor",  "placement",  "startlocprio",  "raritycontrol",  "blendmode", 
		 "texmapflags",  "effect",  "effecttype",  "weathereffect",  "terraindeformation", 
		 "fogstate",  "fogmodifier",  "dialog",  "button",  "quest", 
		 "questitem",  "defeatcondition",  "timerdialog",  "leaderboard",  "multiboard", 
		 "multiboarditem",  "trackable",  "gamecache",  "version",  "itemtype", 
		 "texttag",  "attacktype",  "damagetype",  "weapontype",  "soundtype", 
		 "lightning",  "pathingtype",  "image",  "ubersplat",  "hashtable"),
    // values
    3 => array(),
    // natives
    4 => array(),
    5 => array(),
    6 => array(),
    7 => array(),
  ),
  'SYMBOLS' => array( // , ( ) [ ] . / * + - = " ' 
    '+', '-', '*', '/', 
    '==', '~=', '<=', '>=', '<', '>', '=',
    '(', ')', '[', ']',
    ',', '.'
    ),
  'CASE_SENSITIVE' => array(
    GESHI_COMMENTS => false,
    1 => true,
    2 => true,
    3 => true,
    4 => true,
    5 => true,
    6 => true,
    7 => true,
    8 => true,
    9 => true,
    ),
  'URLS' => array(
    ),
  'OOLANG' => true,
  'OBJECT_SPLITTERS' => array(
    1 => '.',
    ),
  'REGEXPS' => array(
    ),
  'STRICT_MODE_APPLIES' => GESHI_NEVER,
  'SCRIPT_DELIMITERS' => array(
    ),
  'HIGHLIGHT_STRICT_BLOCK' => array(
    ),
  'STYLES' => array(
    'KEYWORDS' => array(
      1 => 'font-weight: bold',
      2 => 'color: #4477aa; font-weight: bold',
      3 => 'color: #3333ff',
      4 => 'color: purple',
      5 => 'color: #4477aa',
      6 => 'color: #4477aa',
      7 => 'color: #dd4444',
      ),
    'COMMENTS' => array(
      1 => 'color: #993300;',
      2 => 'color: #009933;',
      'MULTI' => 'color: #009933;',
      3 => 'color: red; font-weight: bold;'
      ),
    'ESCAPE_CHAR' => array(
      0 => '',
      1 => '',
      2 => ''
      ),
    'BRACKETS' => array(
      0 => 'color: sienna;'
      ),
    'STRINGS' => array(
      0 => 'color: blue;'
      ),
    'NUMBERS' => array(
      0 => 'color: #3333FF;'
      ),
    'METHODS' => array(
      1 => 'color: color: #666666'
      ),
    'SYMBOLS' => array(
      0 => 'color: sienna;'
      ),
    'REGEXPS' => array(
      ),
    'SCRIPT' => array(
      )
    ),
);

?>
