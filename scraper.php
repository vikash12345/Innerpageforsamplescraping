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
					
        				if(!$NoMATCH)
					{	
						$Checkpagination	=	$linkofpage->find("//a[plaintext^=Next]", 0)->href;
						if($Checkpagination)
						{	
							
							$mainpage	=	'https://indiankanoon.org'.$Checkpagination;
							While($Checkpagination != null)
							{
								$checkpago	=	file_get_html($mainpage);
								echo "$mainpage++\n";
							}
						}
						
					  
					}
else{
 echo 'Data Not Available on that link'. ' - > '.$pagination;
}
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
scraperwiki::select("* from data where 'name'='peter'")


?>
