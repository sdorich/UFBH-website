<?php
$pageTitle = "Donate to UFBH";
$section = "donate";
include('inc/header-shop.php'); 
?>
    <div class="section donate">
        <div class="wrapper">
            <h1>Help Us Rescue Bassets &mdash; Please Donate</h1>
            
            <p>In the last nine years, UFBH has rescued over 500 basset hounds in Utah and southern Idaho. We took in over 100 dogs in 2010, and have helped over 150 in 2011, so the demands increase constantly.</p>
            <p>Thanks to donors like you, UFBH will be able to provide appropriate veterinary care and housing for more bassets in need. Donations are tax deductible as UFBH is a federally recognized 501(c)(3) public charity and licensed by the state of Utah.</p>
            
            <div class="donate-form">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="P8J65D6BHKGTW">
                    <input type="hidden" name="item_name" value="UFBH Annual Membership">
                    <table>
                        <tr>
                            <td>
                                <input type="hidden" name="on0" value="Designate your donation">Designate your donation
                            </td>
                            <td>
                                <select name="os0">
	                               <option value="5">$5</option>
	                               <option value="10">$10</option>
	                               <option value="100">$100</option>
	                               <option value="other">other</option>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="on1" value="Name of person you want to honor.">Name of person you want to honor:
                            </td>
                            <td>
                                <input type="text" name="os1" maxlength="200">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="on2" value="Address">Address:
                            </td>
                            <td>
                                <input type="text" name="os2" maxlength="200">
                            </td>
                        </tr>
                    </table>
                    <input class="btn-submit" type="submit" value="Donate to UFBH Now" name="submit">
                </form>
            </div>
            
            <h2>Join Beauford&rsquo;s Buddies</h2>
            <p>The family of basset Beauford T. Justice was the first to set up automatic monthly donations to Utah Friends of Basset Hounds. Donate by clicking the button below.</p>
            
            <h2>Donations by Mail</h2>
            <p>UFBH also accepts all the above donations by mail for those donors who wish to send a check or money order. You may send donations to:</p>
            <address>
                Utah Friends of Basset Hounds<br>
                1338 South Foothill Drive #172<br>
                Salt Lake City, UT 84108
            </address>
            <p>Please make your checks payable to UFBH or Utah Friends of Basset Hounds.</p>
            
        </div>
    </div>

<script type="text/javascript">
    $(function() {
      //Calls the selectBoxIt method on your HTML select box.
        $("select").selectBoxIt();
    });
</script>

<?php
include('inc/footer.php');
?>