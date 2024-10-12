<?php
require_once('header.php');

if(!isset($_SESSION["username"]) || $_SESSION["loggedin"] !== true){
?>

<meta http-equiv="Refresh" content="0; url='login.php'" />
<?php
}
?>

    <!--BANNER START-->
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>Subscribed Database</h2>
            <ol class="breadcrumb">
              <li><a href="#">Library</a></li>
              <li><a href="index.php">Home</a></li>
              <li class="active">Subscribed Databases</li>
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
            <h2>Subscribed Databases</h2>
            <p>Note: Please for access to all those subscribed resources where you are required to "Ask the Librarian" for login credentials (Username/Password), 
                contact the Librarian through the emails: info@abmlibrary.org.ng, or abmlibrary.org.ng, or visit the Library in person.</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <table class="table table-striped">
            <tbody>
            <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Subscribed Database</th>
            <th>Username/Password</th>
            </tr>
            <tr>
            <td>1</td>
            <td><a href="https://www.tripdatabase.com/" target="_blank" rel="noopener">Trip Medical Database</a></td>
            <td>A smart, fast tool to find  high quality clinical research evidence</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <tr>
            <td>2</td>
            <td><a href="https://search.proquest.com/login" target="_blank" rel="noopener">ProQuest</a></td>
            <td>For all Disciplines</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="https://ocw.mit.edu/" target="_blank" rel="noopener">MIT Open Courseware: Unlocking Knowledge</a></td>
            <td>MIT OpenCourseWare (OCW) is a web-based publication of virtually all MIT course content. OCW is open and available</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>4</td>
            <td><a href="http://www.jstor.org/" target="_blank" rel="noopener">JSTOR</a></td>
            <td>Multidisciplinary science</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>5</td>
            <td><a href="http://www.sciencedirect.com/" target="_blank" rel="noopener">Science Direct</a></td>
            <td>For all Disciplines</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>6</td>
            <td><a href="https://ieeexplore.ieee.org/Xplore/home.jsp" target="_blank" rel="noopener">IEEE Advanced Technology</a></td>
            <td>Engineering and related areas</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>7</td>
            <td><a href="http://www.journals.bmj.com/" target="_blank" rel="noopener">BMJ Publishing Group</a></td>
            <td>Contained peer-reviewed journals focusing on biomedical research</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>8</td>
            <td> <a href="https://www.emerald.com/insight/" target="_blank" rel="noopener">Emerald Publishing</a></td>
            <td>Emerald Publishing was founded in 1967 to champion new ideas that would advance the research and practice of business and management. Today, we continue to nurture fresh thinking in applied fields where we feel we can make a real difference, now also including health and social care, education and engineering.</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>9</td>
            <td> <a href="https://www.hathitrust.org/" target="_blank" rel="noopener">Hathitrust</a></td>
            <td>HathiTrust Digital Library is a large-scale collaborative repository of digital content from research libraries including content digitized via the Google Books project and Internet Archive digitization initiatives, as well as content digitized locally by libraries</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>10</td>
            <td><a href="http://www.ajol.info/" target="_blank" rel="noopener">AJOL</a></td>
            <td>Database of journals in Africa, covering the full range of Academic disciplines</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>11</td>
            <td><a href="https://login.research4life.org/tacgw/login.cshtml">Research4life</a></td>
            <td>General Discipline</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>12</td>
            <td><a href="https://journals.sagepub.com/">Sage Journals</a></td>
            <td>General Discipline</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>13</td>
            <td><a href="https://www.loc.gov/research-centers/law-library-of-congress/about-this-research-center/">Law Library of Congress </a></td>
            <td>Law Library of Congress</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>14</td>
            <td><a href="https://www.scopus.com/sources.uri">SCOPUS DATABASE</a></td>
            <td>Multidisciplinary</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>15</td>
            <td><a href="https://www.intechopen.com/">All Subject Areas especially Sciences</a></td>
            <td>Multidisciplinary</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>16</td>
            <td><a href="https://www.mendeley.com/">MENDELEY: Reference Manager</a></td>
            <td>Mendeley is a reference manager software used to manage and share research papers and generate</td>
            <td>Ask the Librarian</td>
            </tr>
            
            <td>17</td>
            <td><a href="https://www.rsc.org/" target="_blank" rel="noopener">The Royal Society of Chemistry</a></td>
            <td>Chemistry resources and journals</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>18</td>
            <td><a href="https://www.karger.com/" target="_blank" rel="noopener">Karger Publishers</a></td>
            <td>Medical and scientific journals</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>19</td>
            <td><a href="https://www.omicsonline.org/" target="_blank" rel="noopener">About Us | Author Publishing Benefits</a></td>
            <td>Publishing benefits and information</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>20</td>
            <td><a href="https://www.erudit.org/" target="_blank" rel="noopener">Cultivate your knowledge – Érudit</a></td>
            <td>Multidisciplinary academic resources</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>21</td>
            <td><a href="https://academic.oup.com/" target="_blank" rel="noopener">Oxford Academic</a></td>
            <td>Academic resources across disciplines</td>
            <td>Ask the Librarian</td>
            </tr>
            <tr>
            <td>22</td>
            <td><a href="https://academic.oup.com/" target="_blank" rel="noopener">Open access | Oxford Academic</a></td>
            <td>Open access academic resources</td>
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