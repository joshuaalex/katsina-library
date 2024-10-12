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
        	<h2>Ebooks</h2>
            <ol class="breadcrumb">
              <li><a href="#">Library</a></li>
              <li><a href="index.php">Home</a></li>
              <li class="active">Ebooks</li>
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
            <h2>Ebooks</h2>
            <p>Note: Please for access to all those subscribed resources where you are required to "Ask the Librarian" for login credentials (Username/Password), 
                contact the Librarian through the emails: info@abmlibrary.org.ng, or abmlibrary.org.ng, or visit the Library in person.</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <table class="table table-striped">
            <tbody>
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Ebooks</th>
            <th>Username/Password</th>
            </tr>
            <tr>
            <td>1</td>
            <td><a href="http://libgen.is/" target="_blank" rel="noopener">libgen</a></td>
            <td>Libgen</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>2</td>
            <td><a href="http://pdfdrive.net" target="_blank" rel="noopener">pdf drive</a></td>
            <td>PDF Drive</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="http://bookboon.com" target="_blank" rel="noopener">book boon</a></td>
            <td>Book Boon</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="http://www.freebooks4doctors.com/" target="_blank" rel="noopener">free books 4 doctors</a></td>
            <td>Free Books For Doctors</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="http://en.bookfi.net/" target="_blank" rel="noopener">Bookfi</a></td>
            <td>Bookfi</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="https://b-ok.cc/" target="_blank" rel="noopener">ZLibrary</a></td>
            <td>ZLibrary</td>
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