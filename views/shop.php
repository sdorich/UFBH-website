<?php include('inc/shop-items.php'); ?>
<?php
$pageTitle = "UFBH MiniMart";
$section = "store";
include('inc/header-shop.php'); ?>

        <div class="section shirts page">
            <div class="wrapper">
                
                <p><?php echo "The UFBH MiniMart currently has " . count($items) . " item(s) available.\n"; ?></p>
                
                <ul class="products">
                    <?php foreach($items as $item_id => $item) {
                        echo "<li>";
                        echo '<a href="item.php?id=' . $item_id .'">';
                        echo '<img src="' . $item["img"] . '" alt="' . $item["name"] . '">';
                        echo "<p>View Details</p>";
                        echo "</a>";
                        echo "</li>";
                        } 
                    ?>
                </ul>
            </div>
        </div>

<?php include('inc/footer.php') ?>