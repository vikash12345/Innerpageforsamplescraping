<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//              
        $urlofpage  = 'https://indiankanoon.org/search/?formInput=doctypes:consumer%20fromdate:1-1-2018%20todate:%2031-1-2018';
        $pagination	=	$urlofpage.'&pagenum=';
        $linkofpage	=	file_get_html($pagination);
		 if($linkofpage)
		 {	
 		  	$Next		=	$linkofpage->find("//a[plaintext^=Next]", 0);
			$NoMATCH	=	$linkofpage->find("//b[plaintext^=No matching results]", 0);
			$var	=	0;		
        	while($var < 40)
			{
				 $paginationlink		=	$pagination.$var;
				 $mainpageofprofiles 	=	file_get_html($paginationlink);
				 $var++;
				 $resultlink	=	$mainpageofprofiles->find("//a[class='result_url']",0)->href;
				 echo "$paginationlink\n";
				if(!$resultlink)
				{
					break;
				}
			
			}	
		}
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
scraperwiki::select("* from data where 'name'='peter'")


?>
