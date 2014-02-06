<?php
/*************************************************************************************
 * jass.php
 * -------
 * Author: Rasmus Abrahamsen (ralleab@gmail.com)
 * Copyright: (c) 2011 Rasmus Abrahamsen (http://www.hiveworkshop.com)
 * Release Version: 1
 * Date Started: 2011/14/09
 *
 * JASS language file for GeSHi.
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

require_once __DIR__ . '/_vjass_keywords.php';
$language_words_vjass = $GLOBALS['language_words_vjass'];

$language_words_wurst = $language_words_vjass;
$language_words_wurst["blocks"] = array_merge($language_words_vjass["blocks"], array('var', 'let', 'class', 'while', 'for', 'in', 'break', 'package', 'endpackage', 'protected', 'import', 'nativetype', 'use', 'abstract', 'override', 'immutable', 'it', 'construct', 'ondestroy', 'destroy', 'init', 'castTo', 'tuple', 'div', 'mod', 'let', 'from', 'to', 'downto', 'step', 'endpackage', 'skip', 'instanceof', 'enum', 'switch', 'case', 'default', 'typeId', 'begin', 'end'));
$language_words_wurst["types"] = array_merge($language_words_vjass["types"], array('int','bool'));
$language_words_wurst["values"] = array_merge($language_words_vjass["values"],  array('new'));

$language_data = array (
  'LANG_NAME' => 'WurstScript',
  'COMMENT_SINGLE' => array(
    1 => "//",
    ),
  'COMMENT_MULTI' => array('/*' => '*/'),
  'COMMENT_REGEXP' => array(
    2 => '#\\@.*?\\@#'
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
    1 => $language_words_wurst["blocks"],
    // types
    2 => $language_words_wurst["types"],
    // values
    3 => $language_words_wurst["values"],
    // natives
    4 => $language_words_wurst['natives'],
    5 => $language_words_wurst['constants'],
    6 => $language_words_wurst['bj_constants'],
    7 => $language_words_wurst['bj_functions'],
  ),
  'SYMBOLS' => array( // , ( ) [ ] . / * + - = " ' 
    '+', '-', '*', '/', 
    '==', '~=', '<=', '>=', '<', '>', '=',
    '(', ')', '[', ']',
    ',',
    '->'
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
      1 => 'color: #009933;',
      'MULTI' => 'color: #009933;',
      2 => 'color: red; font-weight: bold;'
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