<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//              
                  $urlofpage  = 'https://indiankanoon.org/search/?formInput=doctypes:bombay%20fromdate:1-12-1902%20todate:%2031-12-1902';
                  $pagination	=	$urlofpage.'&pagenum=';
          	echo   $linkofpage	=	file_get_html($pagination);
if($linkofpage){		  
			$NoMATCH	=	$linkofpage->find("//b[plaintext^=No matching results]", 0)->plaintext;
		  	$Next			=	$linkofpage->find("//a[plaintext^=Next]", 0)->plaintext;
			$var	=	0;		
        	while($var <= 39)
			{
				$paginationlink		=	$pagination.$var;
				$mainpageofprofiles 	=	file_get_html($paginationlink);
				$var++;

					
			}	
		}
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
scraperwiki::select("* from data where 'name'='peter'")


?>
