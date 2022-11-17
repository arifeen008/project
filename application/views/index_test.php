<div class="card">
    <b class="card-title text-dark border-bottom border-secondary mx-2">ข่าวสาร</b>
    <div class="row">
        <?php foreach ($google_news->articles as $row) { ?>
            <div class="col-md-3">
                <a href="<?php echo $row->url ?>" class="card hover-shadow mx-2 mb-1">
                    <img src="<?php echo $row->urlToImage ?>" class="card-img-top" />
                    <div class="card-body">
                        <p class="card-text text-dark"><?php echo $row->title ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>

