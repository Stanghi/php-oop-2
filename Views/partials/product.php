<?php
//var_dump($products);
?>

<body>
    <main>

        <div class="container">
            <div class="row py-5">
                <?php foreach ($products as $product) : ?>
                    <div class="col-3 mb-5">
                        <div class="card">
                            <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php echo $product->name ?>">
                            <div class="card-body">
                                <span class="badge text-bg-primary position-absolute top-0 end-0 m-1"><?php echo $product->category->name ?> / <?php echo $product->category->name ?></span>
                                <h3 class="card-title"><?php echo $product->name ?></h3>
                                <p class="card-title"><?php echo $product->brand ?></p>
                                <p class="card-title">€ <?php echo $product->price ?></p>
                                <p class="card-title"><?php echo $product->is_available ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>
</body>