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
        	<h2>Thesis & Dissertations</h2>
            <ol class="breadcrumb">
              <li><a href="#">Library</a></li>
              <li><a href="index.php">Home</a></li>
              <li class="active">Thesis & Dissertations</li>
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
            <h2>Thesis & Dissertations</h2>
            <p>Note: Please for access to all those subscribed resources where you are required to "Ask the Librarian" for login credentials (Username/Password), 
                contact the Librarian through the emails: info@abmlibrary.org.ng, or abmlibrary.org.ng, or visit the Library in person.</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <table class="table table-striped">
            <tbody>
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Thesis & Dissertations</th>
            <th>Username/Password</th>
            </tr>
            <tr>
            <td>1</td>
            <td><a href="http://v2.sherpa.ac.uk/opendoar/" target="_blank" rel="noopener">DOAR</a></td>
            <td>Open Directory of Open Access Repositories (DOAR)</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>2</td>
            <td><a href="https://oatd.org/" target="_blank" rel="noopener">OATD</a></td>
            <td>Open Access Theses and Dissertations (OATD)</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="http://www.ndltd.org/" target="_blank" rel="noopener">NDLTD</a></td>
            <td>Networked Digital Library of Theses and Dissertations (NDLTD)</td>
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