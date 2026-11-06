<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.apartment-gallery-swiper', {
                slidesPerView: 1.15,
                spaceBetween: 20,
                grabCursor: true,
                watchOverflow: true,
                centeredSlides: true,
                loop: true,
                pagination: {
                    el: '.apartment-gallery-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24
                    },
                    1024: {
                        slidesPerView: 1.5,
                        spaceBetween: 28
                    }
                }
            });
        }

        var fpTypes = document.querySelectorAll('.fp-type');
        var fpPanels = document.querySelectorAll('.fp-panel');

        fpTypes.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var id = btn.getAttribute('data-fp-type');
                fpTypes.forEach(function(item) {
                    var active = item === btn;
                    item.classList.toggle('bg-gold', active);
                    item.classList.toggle('text-white', active);
                    item.classList.toggle('bg-white', !active);
                    item.classList.toggle('text-[#302F5A]', !active);
                });
                fpPanels.forEach(function(panel) {
                    panel.classList.toggle('hidden', panel.getAttribute('data-fp-panel') !== id);
                });
            });
        });

        document.querySelectorAll('.fp-plan').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var panel = btn.closest('.fp-panel');
                if (!panel) return;

                panel.querySelectorAll('.fp-plan').forEach(function(item) {
                    var active = item === btn;
                    item.classList.toggle('bg-gold', active);
                    item.classList.toggle('text-white', active);
                    item.classList.toggle('bg-white', !active);
                    item.classList.toggle('text-[#302F5A]', !active);
                });

                var image = panel.querySelector('.fp-image');
                var imageUrl = btn.getAttribute('data-fp-plan');
                if (image && imageUrl) image.src = imageUrl;
            });
        });

        document.querySelectorAll('[data-send-otp]').forEach(function(button) {
            button.addEventListener('click', function() {
                button.textContent = 'Coming soon';
            });
        });

        var tabs = document.querySelectorAll('[data-tab]');

        function setActiveTab(activeTab) {
            tabs.forEach(function(tab) {
                var active = tab === activeTab;
                tab.classList.toggle('bg-gold', active);
                tab.classList.toggle('text-white', active);
                tab.classList.toggle('border-gold', active);
                tab.classList.toggle('text-[#302F5A]', !active);
                tab.classList.toggle('border-ink-line', !active);
            });
        }

        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (!entry.isIntersecting) return;
                    var activeTab = document.querySelector('[data-tab][href="#' + entry.target.id + '"]');
                    if (activeTab) setActiveTab(activeTab);
                });
            }, {
                rootMargin: '-40% 0px -55% 0px'
            });

            tabs.forEach(function(tab) {
                var section = document.querySelector(tab.getAttribute('href'));
                if (section) observer.observe(section);
            });
        }

        document.querySelectorAll('details').forEach(function(details) {
            var plus = details.querySelector('.faq-plus');
            var minus = details.querySelector('.faq-minus');
            if (!plus || !minus) return;

            function syncIcon() {
                plus.classList.toggle('hidden', details.open);
                minus.classList.toggle('hidden', !details.open);
            }

            syncIcon();
            details.addEventListener('toggle', syncIcon);
        });

        function pager(selector) {
            return {
                el: selector + ' .swiper-pagination',
                clickable: true
            };
        }


        // Your Journey With Estate Partner
        new Swiper('.process-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 0,
            grabCursor: true,
            watchOverflow: true,
            // pagination: pager('.process-swiper'),
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                },
                1280: {
                    slidesPerView: 6
                }
            }
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const accordionHeader = document.getElementById('accordionHeader');
        const specificationsBody = document.getElementById('specificationsBody');
        const chevronIcon = document.getElementById('chevronIcon');

        accordionHeader.addEventListener('click', () => {
            const isCollapsed = specificationsBody.classList.contains('collapsed');

            if (isCollapsed) {
                specificationsBody.classList.remove('collapsed');
                chevronIcon.classList.remove('rotated');
                accordionHeader.setAttribute('aria-expanded', 'true');
            } else {
                specificationsBody.classList.add('collapsed');
                chevronIcon.classList.add('rotated');
                accordionHeader.setAttribute('aria-expanded', 'false');
            }
        });

        const SubmitText = document.getElementById('wpforms-submit-41');
        SubmitText.innerText = 'Get Lowest Price';
        console.log(SubmitText.innerText);
    });
</script>

