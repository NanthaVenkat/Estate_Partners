    <!-- ============ TAB SCRIPT ============ -->
    <script>
        document.querySelectorAll('[data-tabs]').forEach(function(list) {
            // Tabs may sit inside wrapper divs, so take every tab whose nearest tab list is this one.
            var tabs = Array.prototype.slice.call(list.querySelectorAll('[role=tab]'))
                .filter(function(t) {
                    return t.closest('[data-tabs]') === list;
                });

            function select(tab) {
                tabs.forEach(function(t) {
                    var on = t === tab;
                    t.setAttribute('aria-selected', on);
                    t.tabIndex = on ? 0 : -1;
                    var panel = document.getElementById(t.getAttribute('aria-controls'));
                    if (panel) panel.hidden = !on;
                });
                // Optional pill-group styling: mark the group that holds the selected tab.
                list.querySelectorAll('[data-tab-group]').forEach(function(g) {
                    g.setAttribute('data-active', g.contains(tab));
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

            select(tabs.filter(function(t) {
                return t.getAttribute('aria-selected') === 'true';
            })[0] || tabs[0]);
        });
    </script>

