<?php 

include("inc/shop-items.php"); 

if (isset($_GET["id"])) {
    $item_id = $_GET["id"];
    if (isset($items[$item_id])) {
        $item = $items[$item_id];
    }
} 

if (!isset($item)) {
    header("Location: shop.php");
    exit();
}

$section = "shop";
$pageTitle = $item["name"];
include("inc/header-shop.php");

?>

    <div class="section page">
        <div class="wrapper">
            <div class="breadcrumb"><a href="shop.php">UFBH MiniMart</a> &gt; <?php echo $item["name"]; ?></div>
            
            <div class="shirt-picture">
                <span>
                    <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["name"]; ?>">
                </span>
            </div>
            <div class="shirt-details">
                <h1><span class="price">$<?php echo $item["price"]; ?></span> <?php echo $product["name"]; ?></h1>
                
                <?php 
                    if ($item["type"] == "shirt") { ?>
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="<?php echo $item["paypal"]; ?>">
                        <input type="hidden" name="item_name" value="<?php echo $item["name"]; ?>">
                        <table>
                        <tr>
                            <th>
                                <input type="hidden" name="on0" value="Size">
                                <label for="os0">Sizes</label>
                            </th>
                            <td>
                                <select name="os0" id="os0">
                                    <?php foreach($item["sizes"] as $size) { ?>
                                        <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                                    <?php } ?>
                                </select> 
                            </td>
                            </tr>
                        </table>
                        <input type="submit" value="Add to Cart" name="submit">
                        </form>
                    <?php }
                    elseif ($item["type"] == "membership") { ?>
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="<?php echo $item["paypal"]; ?>">
                        <input type="hidden" name="item_name" value="<?php echo $item["name"]; ?>">
                        <input type="submit" value="UFBH Membership" name="submit">
                        </form>
                    <?php }
                    else { ?>
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="<?php echo $item["paypal"]; ?>">
                        <input type="hidden" name="item_name" value="<?php echo $item["name"]; ?>">
                        <table>
                        <tr>
                            <th>
                                <input type="hidden" name="on0" value="Brief reason for purchase">
                                <label for="os0">Brief reason for purchase</label>
                            </th>
                            <td>
                                <input type="text" name="os0" maxlength="200" id="os0">
                            </td>
                        </tr>
                        </table>
                        <input type="submit" value="Add to Cart" name="submit">
                        </form>
                    <?php }
                ?>       
                
                <p class="note-designer">* All proceeds will go towards basset hounds from the UFBH.</p>
            </div>
        </div>
    </div>

<?php include("inc/footer_pages.php"); ?>