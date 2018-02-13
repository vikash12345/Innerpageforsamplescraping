<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//              
      $urlofpage  = 'https://indiankanoon.org/search/?formInput=doctypes:delhi%20fromdate:1-11-1966%20todate:%2030-11-1966';
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
				 if($mainpageofprofiles)
				 {
					
					 
					 foreach($mainpageofprofiles->find("//div/div/div[@class='result']") as $element)
					 {
						 
						//Name of Case
						$vsname		=	$element->find("//a[@class='result_url']",0)->plaintext;
						
						//Link of Case
						$vsname		=	$element->find("//a[@class='result_url']",0)->href;
						
						//This is for Name of judicary
						 $courtname	=	$element->find("div[@class='docsource']",0)->plaintext;
						
						//Text of Cite
						$cite	=	$element->find("a[@class='cite_tag']",0)->plaintext;
						
						//Link of Cite
						$cite	=	$element->find("a[@class='cite_tag']",0)->href;
						
						
						//This is for Full Document	
						$fulldocument	=	$element->find("//a[plaintext^=Full Document]", 0)->href;
						echo $vsname.'<br>';
						
						
					 }
				 	 
					 	
				 }
				if(!$vsname)
				{
					break;
				}
			
			}	
		}
?>
