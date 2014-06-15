<?php
$pageTitle = "Contact UFBH";
$section = "contact";
include('inc/header.php'); 
?>

        <div class="section page">
            
            <div class="wrapper">
                
                <h1>Contact UFBH</h1>
        
                <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks")  { ?>
                    <p>Thanks for the email! We&rsquo;ll be in touch shortly!</p>
                <?php } else { ?>
        
                    <p>We&rsquo;d love to hear from you! Complete the form to send us an email or contact a UFBH board member from the table below.</p>
                    
                <div class="contact-form" id="form">
                    <form method="post" action="php/contact-process.php">
                        <table>
                            <tr>
                                <th>
                                    <label for="name">Name:</label>
                                </th>
                                <td>
                                    <input type="text" name="name" id="name" class="required"><span>Please enter your name</span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="email">Email:</label>
                                </th>
                                <td>
                                    <input type="text" name="email" id="email" class="required"><span>Please enter a valid email address</span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="subject">Subject:</label>
                                </th>
                                <td>
                                    <input type="text" name="subject" id="subject"><span>Please enter your subject</span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="message">Message:</label>
                                </th>
                                <td>
                                    <textarea name="message" id="message" class="required"></textarea><span>Please enter your message</span>
                                </td>
                            </tr>                    
                        </table>
                        
                        <p class="submit">
                            <input type="submit" value="Submit" class="btn-submit">
                        </p>
        
                    </form>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <link type="text/css" rel="stylesheet" href="http://gregfranko.com/jquery.selectBoxIt.js/css/jquery.selectBoxIt.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/validEmail.js"></script>
    <script type="text/javascript" src="../js/styleForm.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script src="http://gregfranko.com/jquery.selectBoxIt.js/js/jquery.selectBoxIt.min.js"></script>
    <script type="text/javascript" src=../js/jquery.selectBoxIt.js-master/src/javascripts/jquery.selectBoxIt.js></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="../js/sound.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://github.com/alpixel/jMenu.git"></script>
    <script type="text/javascript" src="../js/jMenu-master/js/jMenu.jquery.min.js"></script>
    <link rel="stylesheet" href="../js/jMenu-master/css/jmenu.css" media="screen">
                </div>
                <?php } ?>
        
            </div>
        
        </div>

        <div class="section board">
            <div class="wrapper">
                <table>
                    <tr>
                        <th>
                            <label>President</label>
                        </th>
                        <td>
                            Peggy Chudd
                        </td>
                        <td>
                            The President is responsible for providing overall direction to UFBH. The President conducts membership meetings as needed.
                        </td>
                        <td>
                            <a href="mailto:Peggy@ufbh.org?subject=UFBH">Send Peggy an e-mail</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Vice-President</label>
                        </th>
                        <td>
                            Carol Mundinger
                        </td>
                        <td>
                            The Vice-President conducts all business of the Organization in the absence of the President. The Vice-President also serves as our Dog Intake Coordinator.
                        </td>
                        <td>
                            <a href="mailto:intake@ufbh.org?subject=UFBH">Send Carol an e-mail</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Secretary &amp; Adoption Coordinator</label>
                        </th>
                        <td>
                            Kristi Mildon
                        </td>
                        <td>
                            The Secretary records minutes of all meetings and distributes them to the members. The Secretary records attendance at meetings.
                        </td>
                        <td>
                             <a href="mailto:adopt@ufbh.org?subject=UFBH">Send Kristi an e-mail</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Treasurer</label>
                        </th>
                        <td>
                        </td>
                        <td>
                            The Treasurer is responsible for the finances of the organization. This includes payment of bills and reimbursement of members for expenses incurred in rescue work. The Treasurer prepares a bi-monthly financial statement, showing income and expenses, which he/she presents at each general meeting. The Treasurer also prepares an annual financial report.
                        </td>
                        <td>
                            <a href="mailto:treasurer@ufbh.org?subject=UFBH">Send the Treasurer an e-mail</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Fundraising &amp; Media Coordinator</label>
                        </th>
                        <td>
                            Peggy Chudd
                        </td>
                        <td>
                            The Fundraising Coordinator evaluates, proposes, and coordinates fundraising ideas. This position also includes posting advertisements in the newspapers when we are planning function.
                        </td>
                        <td>
                            <a href="mailto:media@ufbh.org?subject=UFBH">Send Peggy an e-mail</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Foster Coordinator</label>
                        </th>
                        <td>
                            Carol Mundinger
                        </td>
                        <td>
                            The Foster Coordinator maintains records on all foster volunteers. This position also includes dispersing information about the expectations of fostering a basset hound for UFBH and doing regular check-ins regarding behavior and general basset welfare, with foster families who currently have a foster basset in residence.
                        </td>
                        <td>
                            <a href="mailto:foster@ufbh.org?subject=UFBH">Send Carol an e-mail</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Webmaster</label>
                        </th>
                        <td>
                            
                        </td>
                        <td>
                            The Webmaster is responsible for maintaining the UFBH website. This position includes handling any server problems, database problems, and doing updates on all UFBH web pages.
                        </td>
                        <td>
                            <a href="mailto:webmaster@ufbh.org?subject=UFBH">Send an e-mail</a>
                        </td>
                    </tr>
                </table>
                <h2>Additional Board Members</h2>
                <table>
                    <tr>
                        <th>
                            Assistant Foster Coordinator
                        </th>
                        <td>
                            Penni Javeri
                        </td>
                        <td>
                            <a href="mailto:Penni@ufbh.org?subject=UFBH">Send Penni an e-mail</a>
                        </td>
                    </tr>
                </table>
                
            </div>
        </div>

<?php include('inc/footer.php') ?>
