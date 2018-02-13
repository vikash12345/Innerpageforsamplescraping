<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//              
                  $urlofpage  = 'https://indiankanoon.org/search/?formInput=doctypes:supremecourt%20fromdate:1-4-1947%20todate:%2030-4-1947';
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
