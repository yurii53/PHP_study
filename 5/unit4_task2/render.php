<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=1">Від дешевших до дорожчих</a>
    <br>
<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=-1">Від дорожчих до дешевших</a>


<?php
if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
        } else 
        { 
            $sort = "name";
        }
if (isset($_GET['order'])) {
            $order = $_GET['order'];
        } else {
            $order = 0;
        } 

function sortArr(array $a, array $b)
{
    global $sort, $order;
    if ($a[$sort]==$b[$sort]) return 0;
    return ($a[$sort]<$b[$sort])?-1*$order:1*$order;
}

if ($order==0){
    uasort($products,"sortArr");
}
else{
    uasort($products,"sortArr");
}


   
foreach($products as $product)  :
?>
    <div class="product">
        <p class="sku">Код: <?php echo $product['sku']?></p>
        <h4><?php echo $product['name']?><h4>
        <p> Ціна: <span class="price"><?php echo $product['price']?></span> грн</p>
        <p><?php if(!$product['qty'] > 0) { echo 'Нема в наявності'; } ?></p>
    </div>
<?php endforeach; ?>
