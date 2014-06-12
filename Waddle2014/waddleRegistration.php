<?php
$pageTitle = "2014 Wasatch Waddle";
$section = "waddle";
include('inc/header-waddle.php'); ?>

<div class="wrapper">

    <h1>2014 Wasatch Waddle Registration</h1>
            
                    <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks")  { ?>
                        <p>Thanks for registering for the 2014 Wasatch Waddle! Now get busy with getting pledges so we can help save and love more bassets!</p>
                        <p class="note-designer">You can order online here OR you can pay for the registration and UFBH Waddle shirts when you arrive at the Waddle.</p>
                        
    <div class="section page">
        <div class="wrapper">
            <div class="shirt-picture">
                <span>
                    <img src="images/bassets/at_waddle.jpg" alt="Join us at the Waddle">
                </span>
            </div>
            <div class="shirt-details">
                <h1><span class="price">$20</span>2014 Wasatch Waddle Registration</h1>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="VADCWFCVKFTF6">
                        <input type="hidden" name="item_name" value="2014 Wasatch Waddle Registration">
                    <table>
                        <tr>
                            <th>
                                <input type="hidden" name="on0" value="Name">
                                <label for="os0">Name (first and last)</label>
                            </th>
                            <td>
                                <input type="text" name="os0" maxlength="200" id="os0">
                            </td>
                        </tr>
                        </table>
                        <input type="submit" value="Add to Cart" name="submit">
                </form>
                <p class="note-designer">* All proceeds will go towards basset hounds from the UFBH.</p>
            </div>
        </div>
    </div>
        
    <div class="section page">
        <div class="wrapper">
            <div class="shirt-picture">
                <span>
                    <img src="images/logos/fb_logo.jpg" alt="Join us at the Waddle">
                </span>
            </div>
            <div class="shirt-details">
                <h1><span class="price">$20</span>Waddle Tee Shirt</h1>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="L4AJK47CH5SFA">
                        <input type="hidden" name="item_name" value="Waddle T Shirt">
                        <table>
                        <tr>
                            <th>
                                <input type="hidden" name="on0" value="Size">
                                <label for="os0">Sizes</label>
                            </th>
                            <td>
                                <select name="os0" id="os0">
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                    <option value="Xlarge">Extra Large</option>
                                    <option value="XXlarge">2X Large</option>
                                </select> 
                            </td>
                            </tr>
                        </table>
                        <input type="submit" value="Add to Cart" name="submit">
                </form>
                <p class="note-designer">* All proceeds will go towards basset hounds from the UFBH.</p>
            </div>
        </div>
    </div>
        
            <?php } else { ?>

            <div class="wrapper">
            
                        <p>We&rsquo;d love you to join us at the Waddle! Complete the form to join the howling fun!</p>
                        
                    <div class="contact-form" id="form">
                        <form action="php/waddle-process.php" method="post">
                            <table>
                                <tr>
                                    <th>
                                        <label for="name">Name(s) <em>*</em></label>
                                    </th>
                                    <td>
                                        <input type="text" name="name" id="name" class="required"><span>Please enter your name</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="address">Address</label>
                                    </th>
                                    <td>
                                        <input type="text" name="address" id="address"><span>Please enter your address</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="city_state">City/State</label>
                                    </th>
                                    <td>
                                        <input type="text" name="city_state" id="city_state"><span>Please enter your city and state</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="zip">Zip</label>
                                    </th>
                                    <td>
                                        <input type="text" name="zip" id="zip"><span>Please enter your zip code</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="email">E-mail <em>*</em></label>
                                    </th>
                                    <td>
                                        <input type="text" name="email" id="email" class="required"><span>Please enter a valid email address</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="phone">Phone</label>
                                    </th>
                                    <td>
                                        <input type="text" name="phone" id="phone"><span>Please enter a phone number</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="hounds">Name of your hounds <em>*</em></label>
                                    </th>
                                    <td>
                                        <textarea name="hounds" id="hounds" class="required"></textarea><span>Please list all the names of your hounds</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="waddle_shirts">Number of Waddle shirts and sizes <em>*</em></label>
                                    </th>
                                    <td>
                                        <textarea name="waddle_shirts" id="waddle_shirts" class="required"></textarea><span>Please enter the number of UFBH 2014 Waddle shirts you're going to order AND list the sizes needed for each one</span>
                                    </td>
                                </tr>
                            </table>
                            
                            <h2>WASATCH WADDLE DISCLAIMER MUST BE SIGNED</h2>
                            <p class="note-designer">As	consideration for being	permitted to participate in	the	March 15, 2014 St. Patrick&rsquo;s Day Parade in Salt	Lake City Utah I hereby	release	and	waive all claims for damage	or	injury	I incur, against Utah Friends of Basset	Hounds (UFBH) and their	agents	and representatives	in	connection	therewith. I understand	and	recognize that	animals	will be	participating in the event and that	neither	UFBH nor the sponsors can guarantee	their	behavior. I	also	understand	neither	the	sponsors	nor	UFBH can predict or	be	responsible	to	prevent	neglect, malicious,	irresponsibility or	damaging contact by	one	or more members of the	public	who	will be	attracted to the	parade.	 As	a participant, I assume	the	risks to my	person,	animals	or property as a result	of	my	actions	or	from the actions of	any	animal	or	equipment I	own	or operate	at	the	parade	site. Citations	will be	issued	to	those distributing ANY items from	trailers or	persons	participating in parade. UFBH will	be	denied	entry to future	parades. There	will be	photographing done throughout the event.	
                            </p>
                            
                            <div class="sigPad">
                                <label for="name">Type your name <em>*</em></label>
                                <input type="text" name="name" id="name" class="name">
                                <p class="drawItDesc">Sign your signature</p>
                                <ul class="sigNav">
                                    <li class="drawIt"><a href="#draw-it">Draw It</a></li>
                                    <li class="clearButton"><a href="#clear">Clear</a></li>
                                </ul>
                                <div class="sig sigWrapper">
                                    <div class="typed"></div>
                                    <canvas class="pad" width="198" height="55"></canvas>
                                    <input type="hidden" name="output" class="output">
                                </div>
                            </div>
                                
                            <p class="submit">
                                <input type="submit" value="I agree to the terms" class="btn-submit">
                            </p>
                            
            
                        </form>
                        
                        <script>
                            $(document).ready(function () {
                                $('.sigPad').signaturePad({drawOnly:true});
                            });
                        </script>
                        
                        <script type="text/javascript" src="/js/jquery.js"></script>
                        <script type="text/javascript" src="../js/validEmail.js"></script>
                        <script type="text/javascript" src="../js/styleForm.js"></script>
                        
                    
                    <?php } ?>
                        
                    
                    <h4>We ask	everyone	waddling	with	us	to please	register! WASATCH	WADDLE	2014	is	a	FUNDRAISING	EVENT.</h4>
                    <h4>ALL	PROCEEDS	go	directly	to	care	of	UFBH	Hounds.		We	are	a	501c3	NON	PROFIT	ORGANIZATION</h4>	
                    <h4>We	have	lots	of	hounds	to	take	care	of	and	your	fee	and	pledges	you	collect	will	be	greatly	appreciated.</h4>
                        
            </div>
        </div>
</div>

<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
try {
    var pageTracker = _gat._getTracker("UA-8000985-1");
    pageTracker._trackPageview();
} catch(err) {}
</script>
        
<?php include('inc/footer-waddle.php') ?>