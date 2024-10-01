<html>
    <head>
        <title>05 Laboratory Exercise 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php
            $CakeShapes = array("Heart", "Rectangle", "Square", "Round");
            $CakeFlavors = array("Chocolate", "Vanilla", "Lemon", "Cheesecake");
            $CakeToppings = array("Cookies", "Spun-sugar Flowers", "Mini Chocolate Candies", "Marshmallows");
        ?>
        
        <div class="row">
            <div class="column-9">
                <div class="row">
                    <div class="column-12">
                        <div class="box" style="">
                            <h1>D-I-Y Cake</h1>
                            <table border="1">
                                <tr>
                                    <th>Cake Shape</th>
                                    <th>Cake Flavor</th>
                                    <th>Cake Toppings</th>
                                </tr>
                                <tr>
                                    <!--Cake Shape-->
                                    <td>
                                        <form>
                                            <?php foreach ($CakeShapes as $shape) { ?>
                                                <input type="radio" name="cakeShape" value="<?php echo $shape; ?>"> <?php echo $shape; ?><br>
                                            <?php } ?>
                                        </form>
                                    </td>

                                    <!--Cake Flavor-->
                                    <td>
                                        <form>
                                            <?php foreach ($CakeFlavors as $flavor) { ?>
                                                <input type="radio" name="cakeFlavor" value="<?php echo $flavor; ?>"> <?php echo $flavor; ?><br>
                                            <?php } ?>
                                        </form>
                                    </td>
                                    
                                    <!--Cake Toppings-->
                                    <td>
                                        <form>
                                            <?php foreach ($CakeToppings as $topping) { ?>
                                                <input type="radio" name="cakeTopping" value="<?php echo $topping; ?>"> <?php echo $topping; ?><br>
                                            <?php } ?>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
