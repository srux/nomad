<section class="section main-s <?php the_field('css_classes')?>" id="<?php echo $slug ?>">

<div class="row">
<div class="col twoThird" style="background-image:url(<?php the_field( 'block_one_image' ) ?>);background-position:<?php the_field( 'block_one_image_position' ) ?>;">
<a class="block-link" href="<?php the_field( 'block_one_link' ) ?>">
          <div class="content-block">
                        <h2><?php the_field( 'block_one_heading' ) ?></h2>
                        <p><?php the_field( 'block_one_content' ) ?></p>  
              </div> 
        </a>
        </div>
        <div class="col oneThird">
       
        <div class="one" style="background-image:url(<?php the_field( 'block_two_image' ) ?>);background-position:<?php the_field( 'block_one_image_position' ) ?>;">
        <a class="block-link"  href="<?php the_field( 'block_two_link' ) ?>"> 
        
                    <div class="content-block">
                      <h2><?php the_field( 'block_two_heading' ) ?></h2>
                      <p><?php the_field( 'block_two_content' ) ?></p>
                    
                    </div>
                    </a>
              </div>
            
              <div class="two" style="background-image:url(<?php the_field( 'block_three_image' ) ?>);background-position:<?php the_field( 'block_one_image_position' ) ?>;">
              <a  class="block-link" href="<?php the_field( 'block_three_link' ) ?>"> 
              
                  <div class="content-block">
                      <h2><?php the_field( 'block_three_heading' ) ?></h2>
                      <p><?php the_field( 'block_three_content' ) ?></p>
                  </div>
                </a>
              </div>
          </div>
        </div>
  </section>
  <section class="section">
    <div class="row">
      <div class="col">
        <?php the_content()?>
      </div>
    </div>
  </section>




