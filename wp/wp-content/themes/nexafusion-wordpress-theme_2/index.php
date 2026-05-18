<?php get_header(); ?>

<main class="pt-40 pb-32">
    <div class="px-12 max-w-7xl mx-auto border-b border-border pb-20 mb-20">
        <h1 class="text-6xl md:text-8xl font-light tracking-tight text-primary leading-[1.05]">
            The <span class="italic font-serif">Journal</span>.
        </h1>
    </div>

    <div class="px-12 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 border-t border-l border-border">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="border-r border-b border-border group bg-white hover:bg-background transition-colors">
                <a href="<?php the_permalink(); ?>" class="block p-10 h-full">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="aspect-video overflow-hidden border border-border mb-8 bg-background grayscale opacity-80 group-hover:opacity-100 group-hover:scale-[1.02] transition-all">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    <div class="space-y-4">
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent block"><?php echo get_the_date(); ?></span>
                        <h2 class="text-2xl font-medium tracking-tight text-primary group-hover:text-primary transition-colors">
                            <?php the_title(); ?>
                        </h2>
                        <div class="text-secondary text-sm line-clamp-2 leading-relaxed">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="pt-6 flex items-center gap-2 text-[10px] font-bold uppercase tracking-[0.2em] text-primary group-hover:gap-4 transition-all">
                            Read Entry <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                        </div>
                    </div>
                </a>
            </article>
        <?php endwhile; else : ?>
            <div class="p-12 text-secondary">No entries found.</div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
