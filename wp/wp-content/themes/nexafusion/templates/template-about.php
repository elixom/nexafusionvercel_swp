<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="pt-40 pb-32 px-12 border-b border-border bg-white">
        <div class="max-w-7xl mx-auto">
            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-8 block">The Studio</span>
            <h1 class="text-6xl md:text-8xl font-light leading-[1.05] tracking-tight max-w-5xl text-primary">
                A team of <span class="italic font-serif">visionaries</span> defining the next digital era.
            </h1>
        </div>
    </section>

    <!-- Content Split -->
    <section class="grid grid-cols-1 md:grid-cols-2 border-b border-border">
        <div class="p-12 border-r border-border bg-white">
            <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-12 text-accent">Our Philosophy</h2>
            <p class="text-3xl font-light leading-snug tracking-tight text-primary mb-12">
                We simplify the complex. Our goal is to create products that feel as though they were <span class="italic font-serif">meant to be</span>, through meticulous attention to detail and a commitment to clarity.
            </p>
            <p class="text-secondary text-lg leading-relaxed max-w-md">
                Founded in 2018, NexaFusion has grown from a boutique design house into a global studio, partnering with founders who value aesthetic precision as much as functional excellence.
            </p>
        </div>
        <div class="bg-background overflow-hidden relative group">
            <img alt="Studio space" class="w-full h-full object-cover grayscale opacity-60 group-hover:scale-105 transition-transform duration-1000" src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1200"/>
        </div>
    </section>

    <!-- Capabilities -->
    <section class="px-12 py-32 bg-white border-b border-border">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-24">
            <div class="w-full md:w-1/3">
                <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-12 text-accent">Capabilities</h2>
                <ul class="space-y-6 text-2xl font-medium text-primary">
                    <li class="flex items-center gap-4">
                        <span class="w-8 h-[1px] bg-border"></span>
                        Digital Product Design
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-8 h-[1px] bg-border"></span>
                        Brand Development
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-8 h-[1px] bg-border"></span>
                        Growth Architecture
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="w-8 h-[1px] bg-border"></span>
                        Technical Innovation
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/2">
                <p class="text-secondary text-xl leading-relaxed">
                    We operate at the intersection of psychology and engineering. Every design decision is backed by behavioral research, ensuring that our work doesn't just look good—it performs.
                </p>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-white">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <!-- Person 1 -->
            <div class="border-r border-border p-12">
                <div class="aspect-[3/4] bg-background mb-8 overflow-hidden grayscale border border-border">
                    <img alt="Team member" class="w-full h-full object-cover opacity-80" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=800"/>
                </div>
                <h4 class="text-xl font-medium mb-2">Julian Vance</h4>
                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent">Founder / CD</p>
            </div>
            <!-- Person 2 -->
            <div class="border-r border-border p-12">
                <div class="aspect-[3/4] bg-background mb-8 overflow-hidden grayscale border border-border">
                    <img alt="Team member" class="w-full h-full object-cover opacity-80" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=800"/>
                </div>
                <h4 class="text-xl font-medium mb-2">Elena Ross</h4>
                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent">Director of Strategy</p>
            </div>
            <!-- Person 3 -->
            <div class="p-12">
                <div class="aspect-[3/4] bg-background mb-8 overflow-hidden grayscale border border-border">
                    <img alt="Team member" class="w-full h-full object-cover opacity-80" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=800"/>
                </div>
                <h4 class="text-xl font-medium mb-2">Marcus Thorne</h4>
                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent">Lead Developer</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
