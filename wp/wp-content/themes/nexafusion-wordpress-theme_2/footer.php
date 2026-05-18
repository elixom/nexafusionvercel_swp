    <footer class="bg-surface mt-24 border-t border-border">
        <div class="max-w-7xl mx-auto px-12 py-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 items-start">
            <div>
                <div class="text-xl font-bold tracking-tighter mb-4"><?php bloginfo('name'); ?>.</div>
                <p class="text-secondary text-sm leading-relaxed max-w-xs"><?php bloginfo('description'); ?></p>
            </div>
            <div>
                <h4 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-8 text-accent">Services</h4>
                <ul class="space-y-4">
                    <li><a class="text-secondary hover:text-primary transition-colors text-xs uppercase tracking-widest" href="#">Branding</a></li>
                    <li><a class="text-secondary hover:text-primary transition-colors text-xs uppercase tracking-widest" href="#">Digital</a></li>
                    <li><a class="text-secondary hover:text-primary transition-colors text-xs uppercase tracking-widest" href="#">Architecture</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-8 text-accent">Studio</h4>
                <ul class="space-y-4">
                    <li><a class="text-secondary hover:text-primary transition-colors text-xs uppercase tracking-widest" href="#">About</a></li>
                    <li><a class="text-secondary hover:text-primary transition-colors text-xs uppercase tracking-widest" href="#">Careers</a></li>
                    <li><a class="text-secondary hover:text-primary transition-colors text-xs uppercase tracking-widest" href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-8 text-accent">Social</h4>
                <div class="flex gap-6">
                    <a class="text-secondary hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">share</span></a>
                    <a class="text-secondary hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">link</span></a>
                    <a class="text-secondary hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">public</span></a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-12 py-8 border-t border-border flex flex-col md:flex-row justify-between items-center gap-6 text-[10px] font-bold uppercase tracking-[0.2em] text-accent">
            <p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. ALL RIGHTS RESERVED.</p>
            <div class="flex gap-8">
                <a class="hover:text-primary transition-colors" href="#">Instagram</a>
                <a class="hover:text-primary transition-colors" href="#">Behance</a>
                <a class="hover:text-primary transition-colors" href="#">Dribbble</a>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
