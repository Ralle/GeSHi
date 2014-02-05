<?php

require_once __DIR__ . '/_jass_keywords.php';

$language_words_jass = $GLOBALS['language_words_jass'];

$language_words_vjass = $language_words_jass;

$language_words_vjass['blocks'] = array_merge(array(
	'requires' , 'struct', 'endstruct', 'method', 'endmethod', 'scope', 'endscope', 'library', 'endlibrary', 
	'public', 'protected', 'private', 'uses', 'module', 'endmodule', 'static', 'readonly', 'implement', 
	'debug', 'library_once', 'optional', 'initializer', 'operator', 'hook', 'stub', 'interface', 
	'endinterface', 'delegate', 'needs',
	// cohadar
	'for', 'endfor', 'while', 'endwhile',
), $language_words_jass['blocks']);

$language_words_vjass['types'] = array_merge(array(
	'thistype', 
	'key',
), $language_words_jass['types']);

$language_words_vjass['values'] = array_merge(array(
	'super', 
	'this',
), $language_words_jass['values']);

$GLOBALS['language_words_vjass'] = $language_words_vjass;