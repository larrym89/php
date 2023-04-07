<div class="card mb-4 shadow">
    <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
    <div class="card-body">
        <div class="small text-muted"><?php echo format_timestamp($row['posts_created_at']) ?></div>
        <h2 class="card-title h4"><?php echo ucfirst($row['posts_title']) ?></h2>
        <p class="card-text"><?php echo ucfirst($row['posts_content']); ?></p>

        <div class="d-flex justify-content-between">
    <a class="btn btn-primary" href="#!">Read more</a>
    <div></div>
    <div>
        <a href=""><a class="btn btn-warning" href="#!">Edit</a>
            <a class="btn btn-danger" href="#!">Delete</a></a>
    </div>
</div>
    </div>
</div>

