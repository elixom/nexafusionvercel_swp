<?php get_header(); ?>

<main class="min-h-[80vh] flex items-center justify-center px-12 bg-white">
    <div class="max-w-xl text-center">
        <span class="text-[12px] font-bold uppercase tracking-[0.3em] text-accent mb-8 block">Error 404</span>
        <h1 class="text-6xl md:text-8xl font-light tracking-tight text-primary leading-tight mb-8">
            Page not <span class="italic font-serif">found</span>.
        </h1>
        <p class="text-secondary text-lg leading-relaxed mb-12 font-light">
            The resource you are looking for has been moved or archived. We prioritize clarity, so let's guide you back to the home page.
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block px-12 py-5 bg-primary text-white text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-secondary transition-all">
            Return to Home
        </a>
    </div>
</main>

<?php get_footer(); ?>
