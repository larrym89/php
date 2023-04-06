<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <ul class="list-unstyled mb-0">
                    <?php
                    $category = new Category();
                    $res = $category->read();
                    while ($row = mysqli_fetch_assoc($res)) : ?>

                        <li><a href="news?category=<?php echo $row['category_name'] ?>" class="text-decoration-none"><?php echo ucfirst($row['category_name']) ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </div>

        </div>
    </div>
</div>