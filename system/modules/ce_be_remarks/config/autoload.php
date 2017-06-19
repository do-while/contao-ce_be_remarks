<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Softleister',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Softleister\ContentBeRemarks' => 'system/modules/ce_be_remarks/elements/ContentBeRemarks.php',

	// Forms
	'Softleister\FormBeRemarks'    => 'system/modules/ce_be_remarks/forms/FormBeRemarks.php',

	// Classes
	'Softleister\CssBeRemarks'     => 'system/modules/ce_be_remarks/classes/CssBeRemarks.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_fe_remarks' => 'system/modules/ce_be_remarks/templates',
	'form_remarks'  => 'system/modules/ce_be_remarks/templates',
	'ce_be_remarks' => 'system/modules/ce_be_remarks/templates',
));
