<?php
//var_dump($products);
?>

<body>
    <main>

        <div class="container">
            <div class="row py-5">
                <?php foreach ($products as $product) : ?>
                    <div class="col-3 mb-5">
                        <div class="card" style="height: 100%">
                            <img src=" <?php echo $product->image ?>" class="card-img-top" alt="<?php echo $product->name ?>">
                            <div class="card-body">
                                <span class="badge text-bg-primary position-absolute top-0 end-0 m-1"><?php echo $product->category->name ?> > <?php echo $product->product_type ?></span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-title fw-bold"><?php echo $product->name ?></p>
                                    <span class="badge text-bg-success fs-6">€ <?php echo $product->price ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>
</body>