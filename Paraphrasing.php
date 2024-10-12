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
        	<h2>Paraphrasing Tools</h2>
            <ol class="breadcrumb">
              <li><a href="#">Library</a></li>
              <li><a href="index.php">Home</a></li>
              <li class="active">Paraphrasing Tools</li>
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
            <h2>Paraphrasing Tools</h2>
            <p>Note: Please for access to all those subscribed Paraphrasing Tools where you are required to "Ask the Librarian" for login credentials (Username/Password), 
                contact the Librarian through the emails: info@abmlibrary.org.ng, or abmlibrary.org.ng, or visit the Library in person.</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <table class="table table-striped">
            <tbody>
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Paraphrasing Tools</th>
            <th>Username/Password</th>
            </tr>
            <tr>
            <td>1</td>
            <td><a href="https://www.paraphraser.io/" target="_blank" rel="noopener">Paraphraser</a></td>
            <td>Paraphraser</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>2</td>
            <td><a href="https://quillbot.com/" target="_blank" rel="noopener">Quillbot</a></td>
            <td>Quillbot</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="https://www.paraphrasingonline.com/fast-paraphraser-online/" target="_blank" rel="noopener">Paraphraseronline</a></td>
            <td>Paraphraseronline</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>4</td>
            <td><a href="http://prespostseo.com/" target="_blank" rel="noopener">Prespostseo</a></td>
            <td>Prespostseo</td>
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