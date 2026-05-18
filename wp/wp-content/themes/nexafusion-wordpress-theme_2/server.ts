import express from 'express';
import path from 'path';
import fs from 'fs';

const app = express();
const PORT = 3000;

// Helper to extract HTML from the PHP files for preview
// Note: In a real app we'd use a template engine, but for this demo 
// we will just serve the equivalent HTML since the layout is already provided.

const HEADER = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexaFusion | Clean Innovation</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;1,400&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'background': '#F5F5F5',
                        'surface': '#FFFFFF',
                        'primary': '#1A1A1A',
                        'secondary': '#6B7280',
                        'accent': '#9CA3AF',
                        'border': '#E5E7EB',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        'serif': ['Playfair Display', 'ui-serif', 'Georgia', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        body { background-color: #F5F5F5; color: #1A1A1A; }
    </style>
</head>
<body class="font-sans">
    <nav class="flex justify-between items-center px-12 py-8 bg-white border-b border-border sticky top-0 z-50">
        <div class="text-xl font-bold tracking-tighter">NEXAFUSION.</div>
        <div class="hidden md:flex space-x-10 text-sm font-medium uppercase tracking-[0.2em] text-secondary">
            <a href="/services" class="hover:text-primary transition-colors">Services</a>
            <a href="/" class="text-primary">Portfolio</a>
            <a href="/about" class="hover:text-primary transition-colors">Studio</a>
            <a href="/contact" class="hover:text-primary transition-colors">Contact</a>
        </div>
        <button class="px-6 py-2 border border-primary text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-primary hover:text-white transition-all">
            Start Project
        </button>
    </nav>
`;

const FOOTER = `
    <footer class="px-12 py-12 bg-white border-t border-border flex flex-col md:flex-row justify-between items-center text-[10px] font-bold uppercase tracking-[0.2em] text-accent gap-6">
        <div>&copy; 2024 NexaFusion Studio</div>
        <div class="flex space-x-8">
            <a href="#" class="hover:text-primary transition-colors">Instagram</a>
            <a href="#" class="hover:text-primary transition-colors">Behance</a>
            <a href="#" class="hover:text-primary transition-colors">Dribbble</a>
        </div>
        <div>New York, NY</div>
    </footer>
</body>
</html>
`;

app.get('/', (req, res) => {
    const content = fs.readFileSync(path.join(__dirname, 'front-page.php'), 'utf8')
        .split('<?php get_header(); ?>')[1]
        .split('<?php get_footer(); ?>')[0];
    res.send(HEADER + content + FOOTER);
});

app.get('/about', (req, res) => {
    const content = fs.readFileSync(path.join(__dirname, 'templates/template-about.php'), 'utf8')
        .split('get_header(); ?>')[1]
        .split('<?php get_footer(); ?>')[0];
    res.send(HEADER + content + FOOTER);
});

app.get('/services', (req, res) => {
    const content = fs.readFileSync(path.join(__dirname, 'templates/template-services.php'), 'utf8')
        .split('get_header(); ?>')[1]
        .split('<?php get_footer(); ?>')[0];
    res.send(HEADER + content + FOOTER);
});

app.get('/contact', (req, res) => {
    const content = fs.readFileSync(path.join(__dirname, 'templates/template-contact.php'), 'utf8')
        .split('get_header(); ?>')[1]
        .split('<?php get_footer(); ?>')[0];
    res.send(HEADER + content + FOOTER);
});

app.listen(PORT, '0.0.0.0', () => {
    console.log(`Preview server running on port ${PORT}`);
});
