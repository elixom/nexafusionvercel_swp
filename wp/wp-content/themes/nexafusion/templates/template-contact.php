<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="pt-40 pb-32 px-12 border-b border-border bg-white">
        <div class="max-w-7xl mx-auto">
            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent mb-8 block">Connect</span>
            <h1 class="text-6xl md:text-8xl font-light leading-[1.05] tracking-tight max-w-5xl text-primary">
                Let's start a <span class="italic font-serif">conversation</span> about your project.
            </h1>
        </div>
    </section>

    <!-- Content Grid -->
    <section class="grid grid-cols-1 lg:grid-cols-2 border-b border-border bg-white">
        <!-- Contact Information -->
        <div class="p-12 border-r border-border flex flex-col justify-between min-h-[500px]">
            <div>
                <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-12 text-accent">Studio Details</h2>
                <div class="space-y-12">
                    <div>
                        <h4 class="text-sm font-bold uppercase tracking-widest text-primary mb-4">Location</h4>
                        <p class="text-secondary text-lg leading-relaxed">
                            120 Hudson St, 4th Floor<br/>
                            New York, NY 10013
                        </p>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold uppercase tracking-widest text-primary mb-4">Inquiries</h4>
                        <p class="text-secondary text-lg leading-relaxed">
                            hello@nexafusion.com<br/>
                            +1 212 555 0192
                        </p>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold uppercase tracking-widest text-primary mb-4">Social</h4>
                        <div class="flex gap-8 text-secondary text-xs font-bold uppercase tracking-widest">
                            <a href="#" class="hover:text-primary transition-colors">Instagram</a>
                            <a href="#" class="hover:text-primary transition-colors">Behance</a>
                            <a href="#" class="hover:text-primary transition-colors">Dribbble</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-12">
                <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent">Office Hours: 09:00 — 18:00 EST</span>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="p-12 bg-white">
            <h2 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-12 text-accent">Dispatch Message</h2>
            <form class="space-y-10">
                <div class="space-y-2 border-b border-border pb-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent block">Your Name</label>
                    <input class="w-full bg-transparent border-none p-0 text-xl text-primary placeholder:text-border focus:ring-0" placeholder="Johnathan Doe" type="text"/>
                </div>
                <div class="space-y-2 border-b border-border pb-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent block">Email Address</label>
                    <input class="w-full bg-transparent border-none p-0 text-xl text-primary placeholder:text-border focus:ring-0" placeholder="hello@company.com" type="email"/>
                </div>
                <div class="space-y-2 border-b border-border pb-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent block">Tell us about your project</label>
                    <textarea class="w-full bg-transparent border-none p-0 text-xl text-primary placeholder:text-border focus:ring-0 resize-none" placeholder="Vision, goals, and timeline..." rows="4"></textarea>
                </div>
                <button class="px-12 py-5 bg-primary text-white text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-secondary transition-all">
                    Send Inquiry
                </button>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>
