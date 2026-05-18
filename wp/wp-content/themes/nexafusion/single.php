<?php get_header(); ?>

<main class="pt-40 pb-32 px-12 max-w-4xl mx-auto">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="prose prose-primary max-w-none">
            <div class="mb-16 border-b border-border pb-12">
                <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-6 block"><?php echo get_the_date(); ?> — By NexaFusion</span>
                <h1 class="text-5xl md:text-7xl font-light text-primary mb-8 tracking-tight leading-tight">
                    <?php the_title(); ?>
                </h1>
            </div>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="border border-border grayscale opacity-90 mb-16 overflow-hidden">
                    <?php the_post_thumbnail('full', array('class' => 'w-full h-auto object-cover')); ?>
                </div>
            <?php endif; ?>

            <div class="text-secondary text-xl leading-relaxed space-y-8 font-light">
                <?php the_content(); ?>
            </div>

            <div class="mt-20 pt-12 border-t border-border flex justify-between items-center text-[10px] font-bold uppercase tracking-[0.2em] text-accent">
                <a href="<?php echo get_permalink(get_adjacent_post(false, '', true)); ?>" class="hover:text-primary transition-colors flex items-center gap-2">
                    <span class="material-symbols-outlined text-[14px]">arrow_back</span> Previous
                </a>
                <a href="<?php echo get_permalink(get_adjacent_post(false, '', false)); ?>" class="hover:text-primary transition-colors flex items-center gap-2">
                    Next <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                </a>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
