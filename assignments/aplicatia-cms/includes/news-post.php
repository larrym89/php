<div class="card mb-4">
    <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
    <div class="card-body">
        <div class="small text-muted"><?php echo format_timestamp($row['posts_created_at']) ?></div>
        <h2 class="card-title h4"><?php echo ucfirst($row['posts_title']) ?></h2>
        <p class="card-text"><?php echo ucfirst($row['posts_content']); ?></p>

        <a class="btn btn-primary" href="article.php?id=<?php echo $row['id']; ?>">Read more →</a>
    </div>
</div>

<!-- <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2022</div>
                    <h2 class="card-title">Featured Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div> -->