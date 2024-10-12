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
        	<h2>OpenAccess Database</h2>
            <ol class="breadcrumb">
              <li><a href="#">Library</a></li>
              <li><a href="index.php">Home</a></li>
              <li class="active">OpenAccess Database</li>
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
            <h2>OpenAccess Database</h2>
            <p>Note: Please for access to all those subscribed resources where you are required to "Ask the Librarian" for login credentials (Username/Password), 
                contact the Librarian through the emails: info@abmlibrary.org.ng, or abmlibrary.org.ng, or visit the Library in person.</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <table class="table table-striped">
                <tbody>
                <tr>
                <th>S/N</th>
                <th>Database</th>
                <th>Disciplines</th>
                <th>Description/Specialization</th>
                <th>Username/Password</th>
                </tr>
                <tr>
                <td>1</td>
                <td><a href="http://agris.fao.org/agris-search/index.do" target="_blank" rel="noopener">AGRIS: Agricultural database</a></td>
                <td>Agriculture</td>
                <td>Covers agriculture, forestry, animal husbandry, aquatic sciences and fisheries, human nutrition, extension literature from over 100 participating countries. Material includes unique grey literature such as unpublished scientific and technical reports, theses, conference papers, government publications, and more</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>2</td>
                <td><a href="http://www.home.asdlib.org/" target="_blank" rel="noopener">Analytical sciences digital library</a></td>
                <td>Analytical Chemistry</td>
                <td>Journal Articles on analytical chemistry</td>
                <td>Open source</td>
                </tr>
                <tr>
                <td>3</td>
                <td><a href="http://www.base-search.net/" target="_blank" rel="noopener">BASE: Bielefeld Academic Search Engine</a></td>
                <td>Multidisciplinary</td>
                <td>Journal article</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>4</td>
                <td><a href="http://www.bioone.org/" target="_blank" rel="noopener">BIO-ONE</a></td>
                <td>Biology, Bioinformatics</td>
                <td>Biological science and related disciplines</td>
                <td>Open source</td>
                </tr>
                <tr>
                <td>5</td>
                <td><a href="http://citeseerx.ist.psu.edu/index" target="_blank" rel="noopener">CiteSeerX</a></td>
                <td>Computer science, Statistics, Mathematics,</td>
                <td>Computer science, Statistics, Mathematics,</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>6</td>
                <td><a href="http://doaj.org/" target="_blank" rel="noopener">DOAJ</a></td>
                <td>Multidisciplinary</td>
                <td>Multidisciplinary</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>7</td>
                <td><a href="http://www.econbiz.de/index.php" target="_blank" rel="noopener">EconBiz</a></td>
                <td>Economics</td>
                <td>EconBiz supports research in and teaching of economics with a central entry Cpoint for all kinds of subject-specific information and direct access to full texts</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>8</td>
                <td><a href="https://lww.com/pages/journals.aspx" target="_blank" rel="noopener">Lippincott Home: Int'l Anaesthesia Research Society</a></td>
                <td>Health Related</td>
                <td>International Anaesthesia Research Society: Lippincott is a leading global publisher of current and influential medical, nursing and allied health research</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>9</td>
                <td><a href="https://worldwidescience.org/" target="_blank" rel="noopener">World Wide Science</a></td>
                <td>Multidisciplinary</td>
                <td>This is a global science gateway composed of national and international scientific databases and portals. </td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>10</td>
                <td><a href="https://www.freefullpdf.com/" target="_blank" rel="noopener">Scientific Publication </a></td>
                <td>Scientific Publication </td>
                <td>FIND FREE SCIENTIFIC PUBLICATIONS IN PDF FORMAT </td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>11</td>
                <td><a href="https://www.jurn.link/#gsc.tab=0&gsc.sort=" target="_blank" rel="noopener">Academic Publication </a></td>
                <td>Academic Publication </td>
                <td>Search millions academic and scientific Publications </td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>12</td>
                <td><a href="https://guides.library.stonybrook.edu/french/journals" target="_blank" rel="noopener">French/Journals </a></td>
                <td>French/Journals</td>
                <td>FRENCH AND FRANCOPHONE LANGUAGES AND LITERATURES: JOURNALS</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>13</td>
                <td><a href="https://books.openedition.org/" target="_blank" rel="noopener">OpenEdition</a></td>
                <td>OpenEdition</td>
                <td>OpenEdition Books is a web platform for books in the humanities and social sciences</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>14</td>
                <td><a href="https://www.tandfonline.com/openaccess" target="_blank" rel="noopener">Taylor & Francis </a></td>
                <td>Taylor & Francis </td>
                <td>Taylor & Francis</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>15</td>
                <td><a href="https://www.scienceopen.com/" target="_blank" rel="noopener">Scientific Publication </a></td>
                <td>Scientific Publication </td>
                <td>Scientific Publication </td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>16</td>
                <td><a href="https://freecomputerbooks.com/" target="_blank" rel="noopener">Computer Books</a></td>
                <td>Computer Books</td>
                <td>Computer Books</td>
                <td>Open Access</td>
                </tr>
                
                <tr>
                <td>17</td>
                <td><a href="http://www.oalib.com/" target="_blank" rel="noopener">Open Access Library (OALib)</a></td>
                <td>Multidisciplinary</td>
                <td>Aims to provide open access to scholarly papers and books</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>18</td>
                <td><a href="https://www.omicsonline.org/open-access-journals.php" target="_blank" rel="noopener">Open Access Journals | Scientific Conferences and Events Organizer</a></td>
                <td>Multidisciplinary</td>
                <td>Open access journals across various disciplines</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>19</td>
                <td><a href="https://guides.library.cornell.edu/MideastIslamDatabases/Islam" target="_blank" rel="noopener">Islamic Studies Databases</a></td>
                <td>Middle East & Islamic Studies</td>
                <td>Databases for research in Middle Eastern and Islamic studies</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>20</td>
                <td><a href="https://www.grafiati.com/" target="_blank" rel="noopener">Grafiati: Citations & references generator</a></td>
                <td>Citation Management</td>
                <td>Online citation and reference management tool</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>21</td>
                <td><a href="https://internationalscholarsjournals.org/" target="_blank" rel="noopener">International Scholars Journals</a></td>
                <td>Multidisciplinary</td>
                <td>Provides access to a wide range of international scholarly journals</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>22</td>
                <td><a href="https://www.freefullpdf.com/" target="_blank" rel="noopener">Find free PDF of scientific publications</a></td>
                <td>Scientific Publications</td>
                <td>Find free PDFs of scientific publications</td>
                <td>Open Access</td>
                </tr>
                <tr>
                <td>23</td>
                <td><a href="https://www.jurn.link/#gsc.tab=0" target="_blank" rel="noopener">JURN</a></td>
                <td>Academic Articles</td>
                <td>Search millions of free academic articles, chapters, and theses</td>
                <td>Open Access</td>
                </tr>
                <tr>
                    <td></td>
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