
<section class="4col <?php the_field('css_classes')?>" id="<?php echo $slug ?>">
    <div class="col-container">
        <?php the_content()?>
        <div class="row">
            <div class="col">
            <?php the_field('4col_first_col')?>
            </div>
            <div class="col">
            <?php the_field('4col_second_col')?>
            </div>
            <div class="col">
            <?php the_field('4col_third_col')?>
            </div>
            <div class="col">
            <?php the_field('4col_fourth_col')?>
            </div>
        </div>
    </div>
</div>
