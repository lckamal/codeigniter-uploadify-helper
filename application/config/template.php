<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Active template
|--------------------------------------------------------------------------
|
| The $template['active_template'] setting lets you choose which template 
| group to make active.  By default there is only one group (the 
| "default" group).
|
*/
$template['active_template'] = 'admin';
/*
|--------------------------------------------------------------------------
| Explaination of template group variables
|--------------------------------------------------------------------------
|
| ['template'] The filename of your master template file in the Views folder.
|   Typically this file will contain a full XHTML skeleton that outputs your
|   full template or region per region. Include the file extension if other
|   than ".php"
| ['regions'] Places within the template where your content may land. 
|   You may also include default markup, wrappers and attributes here 
|   (though not recommended). Region keys must be translatable into variables 
|   (no spaces or dashes, etc)
| ['parser'] The parser class/library to use for the parse_view() method
|   NOTE: See http://codeigniter.com/forums/viewthread/60050/P0/ for a good
|   Smarty Parser that works perfectly with Template
| ['parse_template'] FALSE (default) to treat master template as a View. TRUE
|   to user parser (see above) on the master template
|
| Region information can be extended by setting the following variables:
| ['content'] Must be an array! Use to set default region content
| ['name'] A string to identify the region beyond what it is defined by its key.
| ['wrapper'] An HTML element to wrap the region contents in. (We 
|   recommend doing this in your template file.)
| ['attributes'] Multidimensional array defining HTML attributes of the 
|   wrapper. (We recommend doing this in your template file.)
|
| Example:
| $template['default']['regions'] = array(
|    'header' => array(
|       'content' => array('<h1>Welcome</h1>','<p>Hello World</p>'),
|       'name' => 'Page Header',
|       'wrapper' => '<div>',
|       'attributes' => array('id' => 'header', 'class' => 'clearfix')
|    )
| );
|
*/

/*
|--------------------------------------------------------------------------
| Default Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/
$template['default']['template'] = 'template/template_main';
$template['default']['regions'] = array(
  'nav',
  'header_nav',
  'slideshow',
  'videos',
  'content',
  'newsbox',
  'gallerybox',
  'bulletin',
  'flash_news',
  'result_search'
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE;

//$template['default']['regions']['title'] = array('content' => array($this->config->item('website_name')));
$template['default']['regions']['footer'] = array('content' => array('<div id="footer"><!--footer start-->
        	copyright &copy; tsc.gov.np, all rights reserved
        </div>'));

/*
|--------------------------------------------------------------------------
| Admin Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/
$template['admin']['template'] = 'template/template_admin';
$template['admin']['regions'] = array(
  'header',
  'nav',
  'content',
  'sidebar',
  'error'
);
$template['admin']['parser'] = 'parser';
$template['admin']['parser_method'] = 'parse';
$template['admin']['parse_template'] = FALSE;

$template['admin']['regions']['title'] = array('content' => array('tsc.gov.np admin panel'));

$template['admin']['regions']['footer'] = array('content' => array('<p id="copyright"> copyright &copy; tsc.gov.np. Powered by: e-Zone Intl</p>'));
/* End of file template.php */
/* Location: ./system/application/config/template.php */