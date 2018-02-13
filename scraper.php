<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//              
                  $urlofpage  = 'https://indiankanoon.org/search/?formInput=doctypes:supremecourt%20fromdate:1-1-1948%20todate:%2031-1-1948&pagenum=';
                  $pagination	=	$urlofpage.'&pagenum=';
          	  $linkofpage	=	file_get_html($pagination);
		  $NoMATCH	=	$linkofpage->find("//b[plaintext^=No matching results]", 0)->plaintext;
					
        				if(!$NoMATCH)
					{
					   echo $linkofpage;
					}
else{
echo 'Data Not Available on that link'. ' - > '.$linkofpage;
}
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
scraperwiki::select("* from data where 'name'='peter'")


?>
