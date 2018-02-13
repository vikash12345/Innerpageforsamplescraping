<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//              
                  $urlofpage  = 'https://indiankanoon.org/search/?formInput=doctypes:supremecourt fromdate:1-1-1948 todate: 31-1-1948';
                  $pagination	=	$urlofpage.'&pagenum=';
          				$linkofpage	=	file_get_html($pagination);
        				if($linkofpage)
					{
					    echo $linkofpage;
					}
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
scraperwiki::select("* from data where 'name'='peter'")


?>
