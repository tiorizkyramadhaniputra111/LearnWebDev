<?php
    $reports = [
        [
            'title' => 'Laporan Keuangan 30 September 2025',
            'subtitle' => 'LAPORAN KEUANGAN TERAKHIR',
            'url' => 'https://cp.co.id/wp-content/uploads/2025/10/CPIN-250930IE.pdf'
        ],
        [
            'title' => 'Laporan Tahunan 2024',
            'subtitle' => 'LAPORAN TAHUNAN TERAKHIR',
            'url' => 'https://cp.co.id/wp-content/uploads/2025/04/Annual-Report-CPIN-2024.pdf'
        ],
        [
            'title' => 'Laporan Keberlanjutan 2024',
            'subtitle' => 'LAPORAN KEBERLANJUTAN TERAKHIR',
            'url' => 'https://cp.co.id/wp-content/uploads/2025/04/Sustainability-Report-CPIN-2024.pdf'
        ],
    ];

    $announcements = [
        [
            'day' => '22',
            'month' => 'MAY',
            'year' => '2025',
            'tag' => 'Investor News',
            'title' => 'Dividen 2025',
            'featured' => true,
            'url' => 'https://cp.co.id/wp-content/uploads/2025/05/Web-CPIN-Jadwal-Dividen-2025.pdf'
        ],
        [
            'day' => '22',
            'month' => 'MAY',
            'year' => '2025',
            'tag' => 'Meeting Summary',
            'title' => 'RINGKASAN RISALAH RUPS TAHUNAN 2025',
            'featured' => true,
            'url' => 'https://cp.co.id/wp-content/uploads/2025/05/Web-CPIN-Ringkasan-Risalah-RUPST-2025.pdf'
        ],
        [
            'day' => '29',
            'month' => 'APR',
            'year' => '2025',
            'tag' => 'Notice',
            'title' => 'PEMANGGILAN RUPS TAHUNAN 2025',
            'featured' => false,
            'url' => 'https://cp.co.id/wp-content/uploads/2025/04/Web-CPIN-Pemanggilan-RUPST-2025.pdf'
        ],
        [
            'day' => '14',
            'month' => 'APR',
            'year' => '2025',
            'tag' => 'Announcement',
            'title' => 'PENGUMUMAN RUPS TAHUNAN 2025',
            'featured' => false,
            'url' => 'https://cp.co.id/wp-content/uploads/2025/04/Web-CPIN-Pengumuman-RUPST-2025.pdf'
        ],
    ];
?>

<section class="relative py-16 bg-[#f8f9fb] text-black overflow-hidden font-sans">

    <div class="absolute inset-0 opacity-40 pointer-events-none">
        <div class="absolute top-0 left-0 w-[350px] h-[350px] bg-yellow-200/20 blur-3xl rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-[350px] h-[350px] bg-cyan-300/20 blur-3xl rounded-full translate-x-1/3 translate-y-1/3"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            
            <div class="space-y-8 max-w-xl">

                <div class="border-l-4 border-[#FFD700] pl-6">
                    <p class="text-[#FFD700] text-xs font-bold tracking-[0.4em] uppercase mb-3">
                        Corporate Transparency
                    </p>
                    <h2 class="text-4xl font-extrabold tracking-tight leading-tight">
                        Laporan <br>
                        <span class="text-[#FFD700]">Investasi</span>
                    </h2>
                </div>

                <div class="space-y-4">
                    <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($report['url']); ?>" target="_blank"
                           class="group flex items-center justify-between p-6 bg-white/60 backdrop-blur-md border border-black/5 hover:border-[#FFD700] rounded-xl transition-all duration-300 shadow-sm hover:shadow-xl hover:-translate-y-1 cursor-pointer">

                            <div class="flex items-center gap-5">
                                <img src="/images/PDF_file_icon.svg" alt="PDF Icon" class="w-10 h-10 object-contain">
                                <div>
                                    <h4 class="text-[11px] font-semibold text-gray-600 uppercase tracking-wide">
                                        <?php echo e($report['subtitle']); ?>

                                    </h4>
                                    <p class="text-sm font-bold text-gray-900 group-hover:text-[#FFD700] transition-colors uppercase">
                                        <?php echo e($report['title']); ?>

                                    </p>
                                </div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 class="text-gray-500 group-hover:text-[#FFD700] transition-colors">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                <polyline points="15 3 21 3 21 9"/>
                                <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div class="space-y-8 max-w-xl">

                <div class="border-l-4 border-[#0AA1FF] pl-6">
                    <p class="text-[#0A8AD8] text-xs font-bold tracking-[0.4em] uppercase mb-3">
                        Market Updates
                    </p>
                    <h2 class="text-4xl font-extrabold tracking-tight leading-tight">
                        Pengumuman <br>
                        <span class="text-[#0A8AD8]">Terakhir</span>
                    </h2>
                </div>

                <div class="space-y-6">
                    <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($item['url']); ?>" target="_blank"
                           class="group flex items-start gap-6 pb-6 border-b border-black/10 hover:border-[#0AA1FF] transition-all duration-300 cursor-pointer">

                            <div class="flex-shrink-0 text-center">
                                <span class="block text-3xl font-extrabold text-[#0AA1FF] leading-none">
                                    <?php echo e($item['day']); ?>

                                </span>
                                <span class="block text-[10px] font-semibold text-gray-500 mt-1 uppercase tracking-wide">
                                    <?php echo e($item['month']); ?> '<?php echo e(substr($item['year'], -2)); ?>

                                </span>
                            </div>

                            <div class="flex-grow">
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="text-[9px] font-bold bg-[#0AA1FF]/10 text-[#0AA1FF] px-2 py-0.5 rounded border border-[#0AA1FF]/20 uppercase tracking-wide">
                                        <?php echo e($item['tag']); ?>

                                    </span>
                                    <?php if($item['featured']): ?>
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-ping"></span>
                                    <?php endif; ?>
                                </div>

                                <h3 class="text-sm md:text-base font-bold text-gray-800 group-hover:text-[#0AA1FF] transition-colors uppercase leading-snug tracking-tight">
                                    <?php echo e($item['title']); ?>

                                </h3>
                            </div>

                            <div class="w-10 h-10 border border-black/10 rounded-lg flex items-center justify-center group-hover:bg-[#0AA1FF] group-hover:text-white transition-all shadow-sm hover:shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" stroke="currentColor" stroke-width="3">
                                    <path d="m9 18 6-6-6-6"/>
                                </svg>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>

        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\OneMoreLightLP\resources\views/public/sections/operational-area.blade.php ENDPATH**/ ?>