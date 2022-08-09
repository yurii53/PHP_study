<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=1">Від дешевших до дорожчих</a>
    <br>
<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=-1">Від дорожчих до дешевших</a>


<?php
function sortArr(array $a, array $b)
{
    global $sort, $order;
    if ($a[$sort]==$b[$sort]) return 0;
    return ($a[$sort]<$b[$sort])?-1*$order:1*$order;
}

function discount(array $products)
{
    for($i = 0; $i < count($products); $i++)
    {
        $products[$i]['price'] = $products[$i]['price'] * (1 - $products[$i]['discount'] /100);
    }
    return $products;
}

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
$products_after_disc = discount($products);

if ($order==0){
    uasort($products_after_disc,"sortArr");
}
else{
    uasort($products_after_disc,"sortArr");
}


   
foreach($products_after_disc as $product)  :
?>
    <div class="product">
        <p class="sku">Код: <?php echo $product['sku']?></p>
        <h4><?php echo $product['name']?><h4>
        <p> Ціна: <span class="price"><?php echo $product['price']?></span> грн</p>
        <p><?php if(!$product['qty'] > 0) { echo 'Нема в наявності'; } ?></p>
    </div>
<?php endforeach; ?>
