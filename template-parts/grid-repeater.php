<?php if(have_rows('grid_repeater')) : $i=0; ?>
    <div class="grid">
        <?php while(have_rows('grid_repeater')) : the_row(); $i++; ?>
            <div class="item">
                <?php the_sub_field('grid_column_1'); ?>
            </div>
            <div class="item">
                <?php the_sub_field('grid_column_2'); ?>
            </div>
            <div class="item">
                <?php the_sub_field('grid_column_3'); ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
