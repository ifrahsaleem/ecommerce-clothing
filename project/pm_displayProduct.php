<html>
<body>
    <div class="col-md-4 col-xs-6">
        <div class="product">
            <div class="product-img">
                <img src="./img/product01.png" alt="">
                <div class="product-label">
                </div>
            </div>
            <div class="product-body">
                <p class="product-category">Category</p>
                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                <h4 class="product-price">$980.00 </h4>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                </div>
            </div>
            <div class="add-to-cart">
                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
        </div>
    </div>

<?php

include "config.php";

$sql_statement = "SELECT P.*, C.Name AS categoryName FROM product P, category C WHERE P.cid = C.cid ";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    $CName = $row['Name'];
    $cid = $row['cid'];

    echo "<option>" . $CName . " - ". $cid . "</option>";
}
?>

</body>
</html>