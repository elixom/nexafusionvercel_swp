<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="pt-40 pb-32 px-12 border-b border-border bg-white">
        <div class="max-w-7xl mx-auto">
            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-8 block">Capabilities</span>
            <h1 class="text-6xl md:text-8xl font-light leading-[1.05] tracking-tight max-w-5xl text-primary">
                Uncompromising <span class="italic font-serif">clarity</span> in every digital touchpoint.
            </h1>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <!-- Service 1 -->
            <div class="border-r border-b border-border p-12 hover:bg-background transition-colors min-h-[400px] flex flex-col justify-between">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-8 block">01</span>
                    <h3 class="text-3xl font-medium tracking-tight mb-6">Digital Branding</h3>
                    <p class="text-secondary text-sm leading-relaxed">
                        We build identities that resonate. Our branding process focuses on defining a core visual language that translates across all digital and physical mediums.
                    </p>
                </div>
                <div class="pt-12 text-[10px] font-bold uppercase tracking-[0.2em] text-primary flex items-center gap-2">
                    Approach <span class="material-symbols-outlined text-[14px]">arrow_downward</span>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="border-r border-b border-border p-12 hover:bg-background transition-colors min-h-[400px] flex flex-col justify-between">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-8 block">02</span>
                    <h3 class="text-3xl font-medium tracking-tight mb-6">Technical Architecture</h3>
                    <p class="text-secondary text-sm leading-relaxed">
                        Performance-driven engineering. We utilize the latest headless technologies to ensure your platform is as fast as it is beautiful.
                    </p>
                </div>
                <div class="pt-12 text-[10px] font-bold uppercase tracking-[0.2em] text-primary flex items-center gap-2">
                    Approach <span class="material-symbols-outlined text-[14px]">arrow_downward</span>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="border-r border-b border-border p-12 hover:bg-background transition-colors min-h-[400px] flex flex-col justify-between">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-8 block">03</span>
                    <h3 class="text-3xl font-medium tracking-tight mb-6">Experience Design</h3>
                    <p class="text-secondary text-sm leading-relaxed">
                        User-centric journeys. Every interaction is mapped to drive engagement and minimize friction, creating a seamless emotional bond.
                    </p>
                </div>
                <div class="pt-12 text-[10px] font-bold uppercase tracking-[0.2em] text-primary flex items-center gap-2">
                    Approach <span class="material-symbols-outlined text-[14px]">arrow_downward</span>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="border-b border-border p-12 hover:bg-background transition-colors min-h-[400px] flex flex-col justify-between">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-8 block">04</span>
                    <h3 class="text-3xl font-medium tracking-tight mb-6">Growth Strategy</h3>
                    <p class="text-secondary text-sm leading-relaxed">
                        Data-backed intuition. We identify the levers that drive growth and execute precision campaigns that deliver measurable market authority.
                    </p>
                </div>
                <div class="pt-12 text-[10px] font-bold uppercase tracking-[0.2em] text-primary flex items-center gap-2">
                    Approach <span class="material-symbols-outlined text-[14px]">arrow_downward</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology -->
    <section class="px-12 py-32 bg-white border-b border-border">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-24">
            <div class="w-full md:w-1/2">
                <h2 class="text-5xl font-light leading-tight tracking-tight text-primary">
                    A <span class="italic font-serif">holistic</span> approach to digital permanence.
                </h2>
            </div>
            <div class="w-full md:w-1/2 flex flex-col gap-8">
                <p class="text-secondary text-xl leading-relaxed">
                    We don't believe in siloed services. To us, brand, code, and growth are inextricably linked. Our methodology ensures that each component reinforces the next.
                </p>
                <div class="grid grid-cols-2 gap-12 mt-8">
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-4 border-b border-border pb-4">Discovery</h4>
                        <p class="text-secondary text-sm">Deep immersion into your business DNA.</p>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-4 border-b border-border pb-4">Iteration</h4>
                        <p class="text-secondary text-sm">Rigorous refinement until absolute clarity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
