<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#FAF8FF',
                        foreground: '#0B1A3B',
                        primary: '#0057AD',
                        secondary: '#F2F3FF',
                        muted: '#F2F3FF',
                        accent: '#6C2CD5',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        headline: ['Syne', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .electric-gradient {
            background: linear-gradient(135deg, #0057AD 0%, #6C2CD5 100%);
        }
        .glass-nav {
            background: rgba(11, 26, 59, 0.8);
            backdrop-filter: blur(20px);
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Syne', sans-serif; }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-background text-foreground selection:bg-primary selection:text-white'); ?>>

    <!-- Floating Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 mt-6 mx-auto max-w-7xl px-4">
        <div class="glass-nav shadow-2xl shadow-primary/10 rounded-full flex justify-between items-center w-full px-8 py-4 border border-white/10">
            <div class="text-2xl font-black tracking-tighter text-white">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex space-x-8',
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ) );
                ?>
                <!-- Fallback links if no menu is set -->
                <?php if ( ! has_nav_menu( 'primary' ) ) : ?>
                    <a href="#" class="text-slate-300 font-medium hover:text-white transition-colors">Home</a>
                    <a href="#" class="text-slate-300 font-medium hover:text-white transition-colors">About</a>
                    <a href="#" class="text-slate-300 font-medium hover:text-white transition-colors">Services</a>
                <?php endif; ?>
            </div>
            <a href="#contact" class="bg-primary text-white rounded-full px-8 py-2.5 font-bold hover:scale-105 transition-all active:scale-95">
                Get Started
            </a>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section class="max-w-7xl mx-auto px-8 pt-48 mb-24">
            <span class="text-primary font-bold tracking-[0.2em] uppercase text-xs mb-6 block">Get in Touch</span>
            <h1 class="text-6xl md:text-8xl font-black tracking-tighter text-foreground max-w-4xl leading-[0.9] mb-12">
                Let's Build Something <br />
                <span class="text-primary italic">Extraordinary</span>.
            </h1>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="max-w-7xl mx-auto px-8 mb-32">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Form -->
                <div class="lg:col-span-7 bg-secondary rounded-[2rem] p-8 md:p-12">
                    <form class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-3">
                                <label class="text-[10px] font-bold tracking-widest uppercase text-slate-500 ml-1">Name</label>
                                <input type="text" placeholder="John Doe" class="w-full bg-white border-none h-14 rounded-xl px-6 focus:ring-2 focus:ring-primary shadow-sm">
                            </div>
                            <div class="space-y-3">
                                <label class="text-[10px] font-bold tracking-widest uppercase text-slate-500 ml-1">Email</label>
                                <input type="email" placeholder="john@example.com" class="w-full bg-white border-none h-14 rounded-xl px-6 focus:ring-2 focus:ring-primary shadow-sm">
                            </div>
                        </div>
                        <div class="space-y-3">
                            <label class="text-[10px] font-bold tracking-widest uppercase text-slate-500 ml-1">Message</label>
                            <textarea placeholder="Tell us about your project..." class="w-full bg-white border-none rounded-xl p-6 focus:ring-2 focus:ring-primary shadow-sm min-h-[160px] resize-none"></textarea>
                        </div>
                        <button type="submit" class="electric-gradient text-white w-full h-16 rounded-xl font-bold text-lg hover:shadow-2xl hover:shadow-primary/20 transition-all">
                            Send Proposal Request
                        </button>
                    </form>
                </div>

                <!-- Info -->
                <div class="lg:col-span-5 space-y-8">
                    <div class="bg-foreground text-white rounded-[2rem] p-10 relative overflow-hidden shadow-2xl">
                        <div class="relative z-10 space-y-12">
                            <div>
                                <h3 class="text-4xl font-bold mb-3">Connect</h3>
                                <p class="text-slate-400 max-w-xs leading-relaxed">We typically respond to inquiries within one business day.</p>
                            </div>
                            <div class="space-y-8">
                                <div class="flex items-center space-x-5">
                                    <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center border border-white/10 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500 mb-1">Email</p>
                                        <p class="text-lg font-medium">hello@nexafusion.com</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-5">
                                    <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center border border-white/10 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500 mb-1">Phone</p>
                                        <p class="text-lg font-medium">+1 (876) 416-7813</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-primary blur-[120px] opacity-20"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="bg-secondary py-32">
            <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <h2 class="text-4xl md:text-5xl font-black tracking-tight text-foreground leading-[1.1]">Architecture of <br /> Strategy</h2>
                    <p class="text-slate-500 text-lg max-w-md leading-relaxed">Join our monthly brief on digital transformation, design psychology, and the future of enterprise software.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Your executive email" class="flex-grow bg-white border-none h-16 rounded-xl px-8 shadow-sm focus:ring-2 focus:ring-primary">
                    <button class="bg-foreground text-white h-16 px-10 rounded-xl font-bold hover:bg-primary transition-all shadow-lg">Subscribe</button>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-foreground py-24">
        <div class="max-w-7xl mx-auto px-8 flex flex-col items-center text-center">
            <div class="text-4xl font-black text-white mb-12 tracking-tighter">NexaFusion</div>
            <div class="text-slate-500 text-sm font-medium tracking-wide">
                © <?php echo date('Y'); ?> NexaFusion. All rights reserved.
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
