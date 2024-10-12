<?php
require_once('header.php');

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
?>

<meta http-equiv="Refresh" content="0; url='login.php'" />
<?php
}
?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>Arabic</h2>
            <ol class="breadcrumb">
              <li><a href="#">Library</a></li>
              <li><a href="index.php">Home</a></li>
              <li class="active">Arabic</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->
    <!--BUT NOW START-->
    


    
    <!--BUT NOW END-->
    <!--CONTENT START-->
 <!--TOP AUTHOR START-->
 <section class="kode-lib-team-member">
    <div class="container">
        <!--SECTION CONTENT START-->
        <div class="section-heading-1">
            <h2>Islamic Resources section of the Library</h2>
            <p>On this page, you can view a list of our latest collections of Arabic / Islamic Books and materials available in the Library. You can also see a list of some Arabic / Islamic Databases and resources, for your research. Just click on each link and get access to a large number of resources.</p>
            <p>Below are links to some Databases you can find Arabic /Islamic resources from. Click to follow the links and search for materials:</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <table class="table table-striped">
            <tbody>
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Arabic</th>
            <th>Username/Password</th>
            </tr>
            <tr>
            <td>1</td>
            <td><a href="https://www.al-badr.net/" target="_blank" rel="noopener">al-badr</a></td>
            <td>The Personal Arabic / Islamic Database of Abdurrazzaq Bn Abdul-Muhsin Al-Badr</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>2</td>
            <td><a href="http://www.freefullpdf.com/" target="_blank" rel="noopener">freefullpdf</a></td>
            <td>FreeFullPDF - Download free scientific publications</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="https://www.pdfdrive.com/" target="_blank" rel="noopener">pdfdrive</a></td>
            <td>PDFDrive - Search engine for free PDF files</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="https://www.al-mostafa.com/" target="_blank" rel="noopener">Al-Mustapha Electronic Llibrary </a></td>
            <td>Al-Mustapha Electronic Llibrary</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>4</td>
            <td><a href="https://www.lancaster.ac.uk/jais/" target="_blank" rel="noopener">Journals of Arabic and Islamic </a></td>
            <td>Journals of Arabic and Islamic</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>5</td>
            <td><a href="https://guides.library.cornell.edu/MideastIslamDatabases/Islam" target="_blank" rel="noopener">Arabic Database </a></td>
            <td>Middle East & Islamic Studies Databases for Research: Islamic Studies Databases</td>
            <td>Ask the Librarian</td>
            </tr>
            
            <tr>
            <td>7</td>
            <td><a href="https://www.dfaj.net/index.php?r=journals/details&i=23/" target="_blank" rel="noopener">DFAJ - Details Journals</a></td>
            <td>Details Journals</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>8</td>
            <td><a href="https://gpa.eastview.com/crl/mena" target="_blank" rel="noopener">Middle Eastern and North African Newspapers</a></td>
            <td>Middle Eastern and North African Newspapers</td>
            <td>Ask the Librarian</td>
            </tr>
            
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            </tbody>
        </table>
    </div>
 </div>
        </section>
        <!--TOP AUTHOR END-->
        
        
        <!--FACTS SECTION START-->
       
	</div>	
	<!--FACTS SECTION END-->
	
    <?php
require_once('footer.php');
  ?>