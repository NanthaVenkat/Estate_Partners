    <!-- ============ TAB SCRIPT (works for any number of tab groups, nested or not) ============ -->
    <script>
        document.querySelectorAll('[data-tabs]').forEach(function(list) {
            var tabs = Array.prototype.slice.call(list.querySelectorAll(':scope > [role=tab]'));

            function select(tab) {
                tabs.forEach(function(t) {
                    var on = t === tab;
                    t.setAttribute('aria-selected', on);
                    t.tabIndex = on ? 0 : -1;
                    var panel = document.getElementById(t.getAttribute('aria-controls'));
                    if (panel) panel.hidden = !on;
                });
            }

            tabs.forEach(function(tab, i) {
                tab.addEventListener('click', function() {
                    select(tab);
                });
                tab.addEventListener('keydown', function(e) {
                    var n = e.key === 'ArrowRight' ? i + 1 : e.key === 'ArrowLeft' ? i - 1 : null;
                    if (n === null) return;
                    var next = tabs[(n + tabs.length) % tabs.length];
                    next.focus();
                    select(next);
                    e.preventDefault();
                });
            });

            // Start on the tab marked aria-selected="true" (or the first one)
            select(tabs.filter(function(t) {
                return t.getAttribute('aria-selected') === 'true';
            })[0] || tabs[0]);
        });
    </script>

