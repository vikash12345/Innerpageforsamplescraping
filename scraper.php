<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//              
                  $urlofpage  = 'https://indiankanoon.org/search/?formInput=doctypes:supremecourt%20fromdate:1-4-1947%20todate:%2030-4-1947&pagenum=';
                  $pagination	=	$urlofpage.'&pagenum=';
          	  $linkofpage	=	file_get_html($pagination);
		  $NoMATCH	=	$linkofpage->find("//b[plaintext^=No matching results]", 0)->plaintext;
		  $Next			=	$linkofpage->find("//a[plaintext^=Next]", 0);
  
		$var	=	0;		
        	while($Next == true)
			{	
				$paginationlink	=	$pagination.$var;
				
				$mainpageofprofiles 	=	file_get_html($paginationlink);
				if($mainpageofprofiles)
				{
				echo "$paginationlink\n";
				
				}
			$var++;
					 	
			}	

scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
scraperwiki::select("* from data where 'name'='peter'")


?>
