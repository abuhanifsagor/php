<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card_body{
            border-radius: 10px;
        }
        .banner_box{
            width: 100%;
            height: 580px;
            position: relative;
            overflow: hidden;
        }
        .banner_box div{
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: -35%;
            left: 0;
            z-index: -1;
            
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4"> Product List</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Product Name</th>
                    <th>Color</th>
                    <th>Type</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $products = [
                    ['name' => 'Echo Dot', 'color' => 'Red', 'type' => 'Electronics', 'price' => '$100'],
                    ['name' => 'Nike Air Max', 'color' => 'Blue', 'type' => 'Apparel', 'price' => '$50'],
                    ['name' => 'Fitbit Versa', 'color' => 'Green', 'type' => 'Gadget', 'price' => '$150'],
                    ['name' => 'Ikea Lamp', 'color' => 'Yellow', 'type' => 'Home Decor', 'price' => '$70'],
                    ['name' => 'Samsung Galaxy S21', 'color' => 'Black', 'type' => 'Electronics', 'price' => '$700'],
                    ['name' => 'Adidas Ultra Boost', 'color' => 'White', 'type' => 'Apparel', 'price' => '$180'],
                    ['name' => 'Apple Watch Series 6', 'color' => 'Silver', 'type' => 'Gadget', 'price' => '$399'],
                    ['name' => 'Philips Hue Bulb', 'color' => 'Purple', 'type' => 'Home Decor', 'price' => '$40'],
                ];

                foreach ($products as $product) {
                    echo "<tr>";
                    echo "<td>{$product['name']}</td>";
                    echo "<td>{$product['color']}</td>";
                    echo "<td>{$product['type']}</td>";
                    echo "<td>{$product['price']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Product Gallery</h2>
        <div class="row">
            <?php
            $products = [
                [
                    'title' => 'Echo Dot',
                    'image' => 'https://ae01.alicdn.com/kf/S8314eef522df4a98abc3d844c2045d45l/GGMM-D3-Battery-Base-for-Amazon-Alexa-Echo-Dot-3rd-Gen-Alexa-Speaker-Holder-Mount-Charger.jpg',
                    'price' => '$100',
                    'details' => 'This is a great electronic product.',
                ],
                [
                    'title' => 'Nike Air Max',
                    'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a1f04dd2-e4a0-4821-9ba7-e3611e1bee61/air-max-dn-shoes-xD4x0g.png',
                    'price' => '$50',
                    'details' => 'High-quality apparel for everyday use.',
                ],
                [
                    'title' => 'Fitbit Versa',
                    'image' => 'https://media.wired.com/photos/5ada9229c6901c5ee084057b/1:1/w_150%2Cc_limit/versaspread-w.jpg',
                    'price' => '$150',
                    'details' => 'A must-have gadget for tech enthusiasts.',
                ],
                [
                    'title' => 'Ikea Lamp',
                    'image' => 'https://gagu.co.nz/wp-content/uploads/2022/04/tertial_work-lamp_dark-grey2.jpg',
                    'price' => '$70',
                    'details' => 'Beautiful home decor to brighten your space.',
                ],
                [
                    'title' => 'Samsung Galaxy S21',
                    'image' => 'https://rukminim2.flixcart.com/image/850/1000/xif0q/mobile/i/5/1/-original-imagzm8pvabtmeys.jpeg?q=20&crop=false',
                    'price' => '$700',
                    'details' => 'Cutting-edge smartphone with advanced features.',
                ],
                [
                    'title' => 'Adidas Ultra Boost',
                    'image' => 'https://assets.adidas.com/images/w_1880,f_auto,q_auto/5e95696215274b23be71dfe4b2980dfd_9366/HQ4202_HM5.jpg',
                    'price' => '$180',
                    'details' => 'Comfortable running shoes with superior performance.',
                ],
                [
                    'title' => 'Apple Watch Series 6',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRInhSAWnHYIpJv3JGdtBj3FQvsoM0qBDpOoVoQRABJJIcbRqTy18gkAlWXo0F8rM6A6sM&usqp=CAU',
                    'price' => '$399',
                    'details' => 'Advanced smartwatch with health and fitness tracking.',
                ],
                [
                    'title' => 'Philips Hue Bulb',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRACnIUVTm_Q_Mo_Ae1OfqjkUpPMqL4rSmgyQ&s',
                    'price' => '$40',
                    'details' => 'Smart LED bulb with customizable lighting .',
                ],
            ];

            foreach ($products as $product) {
                echo "
                <div class='mx-auto col-8 col-md-4 col-lg-3 mb-4 mb-lg-0 text-center text-lg-start card  p-3  rounded border-0 '>
                    <div class='card mb-4 card_body'>
                        <img src='{$product['image']}' class='card-img-top' alt='{$product['title']}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$product['title']}</h5>
                            <p class='card-text'>{$product['details']}</p>
                            <p class='card-text'><strong>{$product['price']}</strong></p>
                            <a href='#' class='btn btn-primary'>Buy Now</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
           
    <div class="row">
        <div class="col-12 banner_box">
        <div style="position:relative; width:100%; height:0px; padding-bottom:56.250%"><iframe allow="fullscreen;autoplay" allowfullscreen height="100%" src="https://streamable.com/e/x8huml?autoplay=1&muted=1&nocontrols=1" width="100%" style="border:none; width:100%; height:100%; position:absolute; left:0px; top:0px; overflow:hidden;"></iframe></div>
            
        </div>     
    </div>
    <div class="container mt-5">
        <h2 class="mb-4">Product Gallery</h2>
        <div class="row">
            <?php
            $products = [
                [
                    'title' => 'Echo Dot',
                    'image' => 'https://ae01.alicdn.com/kf/S8314eef522df4a98abc3d844c2045d45l/GGMM-D3-Battery-Base-for-Amazon-Alexa-Echo-Dot-3rd-Gen-Alexa-Speaker-Holder-Mount-Charger.jpg',
                    'price' => '$100',
                    'details' => 'This is a great electronic product.',
                ],
                [
                    'title' => 'Nike Air Max',
                    'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a1f04dd2-e4a0-4821-9ba7-e3611e1bee61/air-max-dn-shoes-xD4x0g.png',
                    'price' => '$50',
                    'details' => 'High-quality apparel for everyday use.',
                ],
                [
                    'title' => 'Fitbit Versa',
                    'image' => 'https://media.wired.com/photos/5ada9229c6901c5ee084057b/1:1/w_150%2Cc_limit/versaspread-w.jpg',
                    'price' => '$150',
                    'details' => 'A must-have gadget for tech enthusiasts.',
                ],
                [
                    'title' => 'Ikea Lamp',
                    'image' => 'https://gagu.co.nz/wp-content/uploads/2022/04/tertial_work-lamp_dark-grey2.jpg',
                    'price' => '$70',
                    'details' => 'Beautiful home decor to brighten your space.',
                ],
                [
                    'title' => 'Samsung Galaxy S21',
                    'image' => 'https://rukminim2.flixcart.com/image/850/1000/xif0q/mobile/i/5/1/-original-imagzm8pvabtmeys.jpeg?q=20&crop=false',
                    'price' => '$700',
                    'details' => 'Cutting-edge smartphone with advanced features.',
                ],
                [
                    'title' => 'Adidas Ultra Boost',
                    'image' => 'https://assets.adidas.com/images/w_1880,f_auto,q_auto/5e95696215274b23be71dfe4b2980dfd_9366/HQ4202_HM5.jpg',
                    'price' => '$180',
                    'details' => 'Comfortable running shoes with superior performance.',
                ],
                [
                    'title' => 'Apple Watch Series 6',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRInhSAWnHYIpJv3JGdtBj3FQvsoM0qBDpOoVoQRABJJIcbRqTy18gkAlWXo0F8rM6A6sM&usqp=CAU',
                    'price' => '$399',
                    'details' => 'Advanced smartwatch with health and fitness tracking.',
                ],
                [
                    'title' => 'Philips Hue Bulb',
                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRACnIUVTm_Q_Mo_Ae1OfqjkUpPMqL4rSmgyQ&s',
                    'price' => '$40',
                    'details' => 'Smart LED bulb with customizable lighting .',
                ],
            ];

            foreach ($products as $product) {
                echo "
                <div class=' mx-auto col-8 col-md-4 col-lg-3 mb-4 mb-lg-0 text-center text-lg-start card  p-3  rounded border-0 '>
                    <div class='card mb-4 card_body'>
                        <img src='{$product['image']}' class='card-img-top' alt='{$product['title']}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$product['title']}</h5>
                            <p class='card-text'>{$product['details']}</p>
                            <p class='card-text'><strong>{$product['price']}</strong></p>
                            <a href='#' class='btn btn-primary'>Buy Now</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
