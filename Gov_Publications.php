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
        	<h2>Government Publications</h2>
            <ol class="breadcrumb">
              <li><a href="#">Library</a></li>
              <li><a href="index.php">Home</a></li>
              <li class="active">Government Publications</li>
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
            <h2>Government Publications</h2>
            <p>Note: Please for access to all those subscribed resources where you are required to "Ask the Librarian" for login credentials (Username/Password), 
                contact the Librarian through the emails: info@abmlibrary.org.ng, or abmlibrary.org.ng, or visit the Library in person.</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <table class="table table-striped">
            <tbody>
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Government Publications</th>
            <th>Username/Password</th>
            </tr>
            <tr>
            <td>1</td>
            <td><a href="https://www.cbn.gov.ng/Documents/" target="_blank" rel="noopener">CBN</a></td>
            <td>Central Bank of Nigeria Publication</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>2</td>
            <td><a href="https://nipc.gov.ng/product-category/downloads/government-policy-documents/" target="_blank" rel="noopener">Gov't Policy</a></td>
            <td>Government Policy Document</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="https://nipc.gov.ng/product-category/downloads/research-reports/" target="_blank" rel="noopener">Gov't Research</a></td>
            <td>Government Research Report</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>4</td>
            <td><a href="https://eric.ed.gov/" target="_blank" rel="noopener">ERIC</a></td>
            <td>ERIC - Education Resources Information Center </td>
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