<?php if(empty($result) == false) {  $blog = $result[0] ?>

    <article>
        <div class="row">
            <div class="col-md-2">  </div>
            <div class="col-md-8"> 

                <div class="tc">
                    <img src="<?= $blog->imgurl; ?>" alt="" style="height: 300px; width: auto;">
                </div> 
                <h1> <?= $blog->title ?> </h1>
                <div class="blog content">
                    <?= $blog->description ?>
                    <?= $blog->description ?>
                </div>
            
            </div>
            <div class="col-md-2"> </div>
        </div>
    </article>  

<?php } else { die("Blog niet gevonden"); }