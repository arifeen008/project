 					<div class="col-md-12">
 					    <div class="card">
 					        <b class="card-title text-dark border-bottom border-secondary mx-2" style="font-size: large;"><?php echo lang('news_news') ?></b>
 					        <div class="row">
 					            <?php foreach (array_slice($google_news->results, 0, 8)  as $row) { ?>
 					                <div class="col-md-3">
 					                    <a href="<?php echo $row->link ?>" class="card hover-shadow mx-2 mb-1">
 					                        <img src="<?php echo $row->image_url ?>" class="card-img-top" />
 					                        <div class="card-body">
 					                            <p class="card-text text-dark transaction"><?php echo $row->title ?></p>
 					                        </div>
 					                    </a>
 					                </div>
 					            <?php } ?>
 					        </div>
 					    </div>
 					</div>