<?php get_header(); ?>

<!-- Hero Section -->
<header class="pt-32 pb-24 px-12 border-b border-border bg-white">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-6xl md:text-8xl font-light leading-[1.05] tracking-tight max-w-4xl text-primary">
            Crafting digital <span class="italic font-serif">experiences</span> for modern brands.
        </h1>
        <p class="mt-10 text-secondary text-xl max-w-xl leading-[1.6]">
            NexaFusion is a minimalist studio specializing in high-end digital architecture, performance strategy, and clarified brand identities.
        </p>
    </div>
</header>

<!-- Filter Bar -->
<section class="px-12 py-10 border-b border-border bg-white sticky top-[89px] z-40">
    <div class="max-w-7xl mx-auto flex flex-wrap gap-12 items-center text-[10px] font-bold uppercase tracking-[0.2em] text-accent">
        <button class="text-primary border-b-2 border-primary pb-1">All Projects</button>
        <button class="hover:text-primary transition-colors">Digital Architecture</button>
        <button class="hover:text-primary transition-colors">Growth Strategy</button>
        <button class="hover:text-primary transition-colors">Visual Identity</button>
    </div>
</section>

<!-- Content Grid -->
<main class="border-b border-border">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Project 1 -->
        <article class="border-r border-b border-border group bg-white">
            <a href="#" class="block p-12 h-full flex flex-col justify-between aspect-[1/1] hover:bg-background transition-colors">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent">01 / Digital</span>
                    <h3 class="text-3xl mt-4 font-medium tracking-tight">Monolith Studio</h3>
                </div>
                <div class="w-full aspect-video bg-background flex items-center justify-center overflow-hidden border border-border">
                     <img alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-80" src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=800"/>
                </div>
                <div class="pt-8 text-[10px] font-bold uppercase tracking-[0.2em] flex items-center gap-2">
                    View Case Study <span class="material-symbols-outlined text-[14px]">arrow_outward</span>
                </div>
            </a>
        </article>

        <!-- Project 2 -->
        <article class="border-r border-b border-border group bg-white">
            <a href="#" class="block p-12 h-full flex flex-col justify-between aspect-[1/1] hover:bg-background transition-colors">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent">02 / Identity</span>
                    <h3 class="text-3xl mt-4 font-medium tracking-tight">Ether Collective</h3>
                </div>
                <div class="w-full aspect-video bg-background flex items-center justify-center overflow-hidden border border-border">
                     <img alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-80" src="https://images.unsplash.com/photo-1634942550159-640a401bb501?auto=format&fit=crop&q=80&w=800"/>
                </div>
                <div class="pt-8 text-[10px] font-bold uppercase tracking-[0.2em] flex items-center gap-2">
                    View Case Study <span class="material-symbols-outlined text-[14px]">arrow_outward</span>
                </div>
            </a>
        </article>

        <!-- Project 3 -->
        <article class="border-b border-border group bg-white">
            <a href="#" class="block p-12 h-full flex flex-col justify-between aspect-[1/1] hover:bg-background transition-colors">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent">03 / Architecture</span>
                    <h3 class="text-3xl mt-4 font-medium tracking-tight">Vera Spaces</h3>
                </div>
                <div class="w-full aspect-video bg-background flex items-center justify-center overflow-hidden border border-border">
                     <img alt="Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-80" src="https://images.unsplash.com/photo-1518005020250-675f0f0fd47b?auto=format&fit=crop&q=80&w=800"/>
                </div>
                <div class="pt-8 text-[10px] font-bold uppercase tracking-[0.2em] flex items-center gap-2">
                    View Case Study <span class="material-symbols-outlined text-[14px]">arrow_outward</span>
                </div>
            </a>
        </article>
    </div>
</main>

<!-- Info Section -->
<section class="px-12 py-32 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-24">
        <div>
            <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-12 text-accent">The Approach</h2>
            <p class="text-4xl font-light leading-tight tracking-tight text-primary">
                We believe that <span class="italic font-serif">simplicity</span> is the ultimate sophistication. By removing the noise, we allow the core message to resonate with clarity and intent.
            </p>
        </div>
        <div class="flex flex-col justify-end">
            <p class="text-secondary text-lg leading-relaxed mb-12 max-w-md">
                Our process is rooted in architectural principles—building solid foundations that support scalable growth and emotional connection.
            </p>
            <a href="/about" class="inline-flex items-center gap-4 text-[10px] font-bold uppercase tracking-[0.2em] group">
                Learn more about our studio
                <span class="w-12 h-[1px] bg-border group-hover:w-20 group-hover:bg-primary transition-all"></span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php get_footer(); ?>
