<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Syne:wght@400..800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-on-surface": "#eef0ff",
                    "surface-container-low": "#f2f3ff",
                    "on-secondary-fixed": "#0b1a3b",
                    "tertiary-container": "#864bef",
                    "tertiary-fixed": "#eaddff",
                    "on-primary-fixed-variant": "#00458d",
                    "primary-fixed-dim": "#aac7ff",
                    "on-surface-variant": "#414753",
                    "on-primary": "#ffffff",
                    "surface-tint": "#005db9",
                    "surface-bright": "#faf8ff",
                    "on-background": "#0b1a3b",
                    "on-tertiary-container": "#fbf3ff",
                    "surface-container-high": "#e2e7ff",
                    "tertiary": "#6c2cd5",
                    "on-primary-fixed": "#001b3e",
                    "error": "#ba1a1a",
                    "primary-fixed": "#d6e3ff",
                    "error-container": "#ffdad6",
                    "background": "#faf8ff",
                    "secondary-fixed": "#dae2ff",
                    "surface-container-lowest": "#ffffff",
                    "surface-container": "#eaedff",
                    "on-error": "#ffffff",
                    "surface-variant": "#dae2ff",
                    "outline": "#727784",
                    "on-primary-container": "#f4f5ff",
                    "secondary": "#505e82",
                    "inverse-surface": "#222f51",
                    "secondary-fixed-dim": "#b8c6f0",
                    "on-tertiary": "#ffffff",
                    "on-secondary-fixed-variant": "#394669",
                    "on-tertiary-fixed": "#25005a",
                    "surface-container-highest": "#dae2ff",
                    "on-surface": "#0b1a3b",
                    "on-error-container": "#93000a",
                    "on-secondary": "#ffffff",
                    "inverse-primary": "#aac7ff",
                    "on-secondary-container": "#4d5b7f",
                    "surface": "#faf8ff",
                    "surface-dim": "#ced9ff",
                    "primary-container": "#1a6fd4",
                    "primary": "#0057ad",
                    "outline-variant": "#c1c6d5",
                    "tertiary-fixed-dim": "#d3bbff",
                    "secondary-container": "#c6d3fe"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Syne", "Inter", "sans-serif"],
                    "body": ["Inter", "sans-serif"],
                    "label": ["Inter", "sans-serif"]
            }
          },
        },
      }
    </script>
<?php wp_head(); ?>
</head>
<body <?php body_class("bg-background text-on-background font-body selection:bg-primary-container selection:text-white"); ?>>
<!-- TopNavBar -->
<nav class="fixed top-0 left-0 right-0 z-50 mt-4 mx-auto max-w-7xl px-4">
<div class="bg-slate-950/80 backdrop-blur-xl shadow-2xl shadow-blue-900/20 rounded-full flex justify-between items-center w-full px-8 py-4">
<div class="text-2xl font-black tracking-tighter text-slate-50">NexaFusion</div>
<div class="hidden md:flex items-center space-x-8">
<?php
    if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
            'items_wrap' => '%3$s',
        ) );
    } else {
?>
<a class="text-slate-300 font-medium hover:text-white transition-colors hover:scale-105 transition-transform duration-200" href="#">Home</a>
<a class="text-slate-300 font-medium hover:text-white transition-colors hover:scale-105 transition-transform duration-200" href="#">About</a>
<a class="text-slate-300 font-medium hover:text-white transition-colors hover:scale-105 transition-transform duration-200" href="#">Services</a>
<a class="text-slate-300 font-medium hover:text-white transition-colors hover:scale-105 transition-transform duration-200" href="#">Portfolio</a>
<a class="text-slate-300 font-medium hover:text-white transition-colors hover:scale-105 transition-transform duration-200" href="#">Pricing</a>
<a class="text-slate-300 font-medium hover:text-white transition-colors hover:scale-105 transition-transform duration-200" href="#">Blog</a>
<?php } ?>
</div>
<button class="bg-primary text-white px-6 py-2 rounded-full font-bold hover:scale-105 transition-all active:scale-95">
                Get Started
            </button>
</div>
</nav>
