

<section class="2col <?php the_field('css_classes')?>" id="<?php echo $slug ?>">
    <div class="col-container">
        <?php the_content()?>
        <div class="row">
            <div class="col colOne">
            <?php the_field('2col_first_col')?>
            </div>
            <div class="col colTwo">
            <?php the_field('2col_second_col')?>
            </div>
        </div>
    </div>
</div>
