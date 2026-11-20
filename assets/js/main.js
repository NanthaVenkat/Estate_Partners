/* Estate Partners — homepage interactions */
(function () {
  "use strict";

  function init() {
    var gsap = window.gsap;
    var ScrollTrigger = window.ScrollTrigger;
    if (gsap && ScrollTrigger) gsap.registerPlugin(ScrollTrigger);

    /* ---------- Sticky header shadow ---------- */
    var header = document.getElementById("site-header");
    if (header && gsap && ScrollTrigger) {
      ScrollTrigger.create({
        start: 8,
        onEnter: function () {
          header.classList.add("scrolled");
        },
        onLeaveBack: function () {
          header.classList.remove("scrolled");
        },
      });
    }

    /* ---------- Swiper sliders ---------- */
    if (window.Swiper) {
      // Hero
      if (document.querySelector(".hero-swiper")) {
        new Swiper(".hero-swiper", {
          slidesPerView: 1,
          spaceBetween: 0,
          loop: true,
          effect: "fade",
          fadeEffect: { crossFade: true },
          speed: 900,
          autoplay: { delay: 6000, disableOnInteraction: false },
          pagination: {
            el: ".hero-swiper .swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".hero-swiper .swiper-button-next",
            prevEl: ".hero-swiper .swiper-button-prev",
          },
        });
      }

      // Featured projects
      if (document.querySelector(".projects-swiper")) {
        new Swiper(".projects-swiper", {
          slidesPerView: 1,
          spaceBetween: 24,
          loop: false,
          speed: 600,
          pagination: {
            el: ".projects-swiper .swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".projects-next",
            prevEl: ".projects-prev",
          },
          breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
          },
        });
      }

      // Testimonials
      if (document.querySelector(".testimonials-swiper")) {
        var testSlides = document.querySelectorAll(
          ".testimonials-swiper .swiper-slide",
        ).length;
        new Swiper(".testimonials-swiper", {
          slidesPerView: 1,
          spaceBetween: 24,
          // loop: testSlides >= 3,
          // speed: 600,
          // autoplay:
          //   testSlides >= 3
          //     ? { delay: 5500, disableOnInteraction: false }
          //     : false,
          pagination: {
            el: ".testimonials-swiper .swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".testimonials-swiper .swiper-button-next",
            prevEl: ".testimonials-swiper .swiper-button-prev",
          },
          breakpoints: {
            768: { slidesPerView: 2 },
            1280: { slidesPerView: 2 },
          },
        });
      }

      // Testimonials
      if (document.querySelector(".testimonials-video-swiper")) {
        var testSlides = document.querySelectorAll(
          ".testimonials-video-swiper .swiper-slide",
        ).length;
        new Swiper(".testimonials-video-swiper", {
          slidesPerView: 1,
          spaceBetween: 24,
          // loop: testSlides >= 3,
          // speed: 600,
          // autoplay:
          //   testSlides >= 3
          //     ? { delay: 5500, disableOnInteraction: false }
          //     : false,
          pagination: {
            el: ".testimonials-video-swiper .swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".testimonials-video-swiper .swiper-button-next",
            prevEl: ".testimonials-video-swiper .swiper-button-prev",
          },
          breakpoints: {
            768: { slidesPerView: 2 },
            1280: { slidesPerView: 2 },
          },
        });
      }

      // Insights
      if (document.querySelector(".insights-swiper")) {
        new Swiper(".insights-swiper", {
          slidesPerView: 1,
          spaceBetween: 24,
          loop: false,
          speed: 600,
          pagination: {
            el: ".insights-swiper .swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".insights-next",
            prevEl: ".insights-prev",
          },
          breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
          },
        });
      }
    }

    /* ---------- Project status tabs ---------- */
    document.querySelectorAll('[role="tablist"]').forEach(function (tabList) {
      var tabs = Array.from(tabList.querySelectorAll(".status-tab")).filter(
        function (tab) {
          return tab.closest('[role="tablist"]') === tabList;
        },
      );
      var panels = tabs
        .map(function (tab) {
          return document.getElementById(tab.getAttribute("data-target"));
        })
        .filter(function (panel) {
          return panel !== null;
        });

      tabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
          var target = tab.getAttribute("data-target");
          var targetPanel = document.getElementById(target);
          var showAllPanels = target === "panel-all" && !targetPanel;

          if (!targetPanel && !showAllPanels) return;

          tabs.forEach(function (item) {
            item.classList.toggle("active", item === tab);
          });
          panels.forEach(function (panel) {
            panel.classList.toggle(
              "hidden",
              !showAllPanels && panel.id !== target,
            );
          });
        });
      });
    });

    /* ---------- Project category tabs ---------- */
    var projectTabs = document.querySelectorAll(
      ".project-tab-wrr .project-tab",
    );
    var projectPanels = document.querySelectorAll(
      ".project-pannel-wrr > article",
    );

    projectTabs.forEach(function (tab) {
      tab.addEventListener("click", function () {
        var target = tab.getAttribute("data-target");

        projectTabs.forEach(function (item) {
          var isActive = item === tab;
          item.classList.toggle("active", isActive);
          item.setAttribute("aria-selected", isActive ? "true" : "false");
        });

        projectPanels.forEach(function (panel) {
          var category = panel.getAttribute("data-target");
          panel.classList.toggle(
            "hidden",
            target !== "panel-all" && category !== target,
          );
        });
      });
    });

    /**
     * project-filters.js - reusable client-side filter for property cards.
     * Works on any page that has:
     *   <aside data-project-filters data-target="#project-list">  (template-parts/project-filters.php)
     *   <div id="project-list"> ...<article class="project-pannel" data-*>... </div>
     *
     * Between groups = AND.  Inside a group = OR (location, BHK, price, size).  Amenities = must have ALL selected.
     */
    (function () {
      "use strict";

      var CHIP =
        "inline-block cursor-pointer select-none rounded-full border border-gold/30 bg-white px-4 py-2 text-sm font-semibold text-[#302F5A] transition-colors hover:border-gold peer-checked:border-[#302F5A] peer-checked:bg-[#302F5A] peer-checked:text-white peer-focus-visible:ring-2 peer-focus-visible:ring-gold";

      function split(value, sep) {
        return value ? value.split(sep).filter(Boolean) : [];
      }

      function toNumber(value) {
        var n = parseFloat(value);
        return isNaN(n) ? null : n;
      }

      function buildChip(group, value, label) {
        var wrap = document.createElement("label");
        wrap.className = "relative";

        var input = document.createElement("input");
        input.type = "checkbox";
        input.className = "peer sr-only";
        input.value = value;
        input.setAttribute("data-filter", group);

        var span = document.createElement("span");
        span.className = CHIP;
        span.textContent = label;

        wrap.appendChild(input);
        wrap.appendChild(span);
        return wrap;
      }

      function init(root) {
        var list = document.querySelector(root.getAttribute("data-target"));
        if (!list) return;

        var cards = [].slice.call(
          list.querySelectorAll("article.project-pannel"),
        );
        var sections = [].slice.call(
          root.querySelectorAll("[data-filter-section]"),
        );
        var countEl = root.querySelector("[data-filter-count]");

        var empty = document.createElement("p");
        empty.className =
          "hidden col-span-full py-10 text-center text-[#444444]";
        empty.textContent =
          "No projects match your filters. Try removing a filter.";
        list.appendChild(empty);

        /* ---------- build chips from the cards ---------- */
        function collect(getter, numeric) {
          var map = {};
          cards.forEach(function (card) {
            getter(card).forEach(function (pair) {
              map[pair[0]] = pair[1];
            });
          });
          var keys = Object.keys(map);
          keys.sort(function (a, b) {
            return numeric
              ? parseFloat(a) - parseFloat(b)
              : map[a].localeCompare(map[b]);
          });
          return keys.map(function (k) {
            return [k, map[k]];
          });
        }

        function fill(group, items) {
          var box = root.querySelector('[data-filter-group="' + group + '"]');
          if (!box) return;
          items.forEach(function (it) {
            box.appendChild(buildChip(group, it[0], it[1]));
          });
          // hide the whole section when no card has this data
          var section = box.closest("[data-filter-section]");
          if (section)
            section.setAttribute("data-has", items.length ? "1" : "0");
        }

        fill(
          "location",
          collect(function (c) {
            var v = c.getAttribute("data-location");
            return v ? [[v, c.getAttribute("data-location-label") || v]] : [];
          }),
        );

        fill(
          "bhk",
          collect(function (c) {
            return split(c.getAttribute("data-bhk"), ",").map(function (n) {
              return [n, n + " BHK"];
            });
          }, true),
        );

        fill(
          "amenities",
          collect(function (c) {
            return split(c.getAttribute("data-amenities"), "|").map(
              function (a) {
                return [a.toLowerCase(), a];
              },
            );
          }),
        );

        /* ---------- state ---------- */
        function selectedTypes() {
          return [].map.call(
            root.querySelectorAll('input[data-filter="type"]:checked'),
            function (i) {
              return i.value;
            },
          );
        }

        function readState() {
          var s = {
            type: [],
            location: [],
            bhk: [],
            price: [],
            cents: [],
            amenities: [],
          };

          [].forEach.call(
            root.querySelectorAll("input[data-filter]:checked"),
            function (input) {
              var group = input.getAttribute("data-filter");
              if (group === "price" || group === "cents") {
                var max = toNumber(input.getAttribute("data-max"));
                s[group].push({
                  min: toNumber(input.getAttribute("data-min")) || 0,
                  max: max === null ? Infinity : max,
                });
              } else {
                s[group].push(input.value);
              }
            },
          );
          return s;
        }

        function syncSections(types) {
          sections.forEach(function (section) {
            var only = section.getAttribute("data-for");
            // no type selected = everything allowed; otherwise at least one selected type must belong to this section
            var typeOk =
              !only ||
              !types.length ||
              types.some(function (t) {
                return only.split(" ").indexOf(t) > -1;
              });
            var hasData = section.getAttribute("data-has") !== "0";
            var show = typeOk && hasData;

            section.classList.toggle("hidden", !show);
            if (!show) {
              // a hidden group must not keep filtering
              [].forEach.call(
                section.querySelectorAll("input[data-filter]"),
                function (i) {
                  i.checked = false;
                },
              );
            }
          });
        }

        function matches(card, s) {
          var type = card.getAttribute("data-target");
          if (s.type.length && s.type.indexOf(type) === -1) return false;

          if (
            s.location.length &&
            s.location.indexOf(card.getAttribute("data-location")) === -1
          )
            return false;

          if (s.bhk.length) {
            var bhk = split(card.getAttribute("data-bhk"), ",");
            if (
              !s.bhk.some(function (b) {
                return bhk.indexOf(b) > -1;
              })
            )
              return false;
          }

          if (s.price.length) {
            var price = toNumber(card.getAttribute("data-price"));
            if (price === null) return false;
            if (
              !s.price.some(function (r) {
                return price >= r.min && price < r.max;
              })
            )
              return false;
          }

          if (s.cents.length) {
            var cMin = toNumber(card.getAttribute("data-cents-min"));
            var cMax = toNumber(card.getAttribute("data-cents-max"));
            if (cMin === null || cMax === null) return false;
            // ranges overlap: a 2.5 - 5.5 cent layout appears under "3 - 5" and "5 - 10"
            if (
              !s.cents.some(function (r) {
                return cMin <= r.max && cMax >= r.min;
              })
            )
              return false;
          }

          if (s.amenities.length) {
            var have = split(card.getAttribute("data-amenities"), "|").map(
              function (a) {
                return a.toLowerCase();
              },
            );
            if (
              !s.amenities.every(function (a) {
                return have.indexOf(a) > -1;
              })
            )
              return false;
          }

          return true;
        }

        function apply() {
          syncSections(selectedTypes());
          var s = readState();
          var shown = 0;

          cards.forEach(function (card) {
            var ok = matches(card, s);
            card.classList.toggle("hidden", !ok);
            if (ok) shown++;
          });

          empty.classList.toggle("hidden", shown > 0);
          if (countEl)
            countEl.textContent =
              "Showing " + shown + " of " + cards.length + " projects";
        }

        root.addEventListener("change", apply);

        var reset = root.querySelector("[data-filter-reset]");
        if (reset) {
          reset.addEventListener("click", function () {
            [].forEach.call(
              root.querySelectorAll("input[data-filter]"),
              function (i) {
                i.checked = false;
              },
            );
            apply();
          });
        }

        apply();
      }

      document.addEventListener("DOMContentLoaded", function () {
        [].forEach.call(
          document.querySelectorAll("[data-project-filters]"),
          init,
        );
      });
    })();

    /* ---------- Reveal on scroll ---------- */
    var revealEls = document.querySelectorAll(".reveal");
    if (
      gsap &&
      ScrollTrigger &&
      revealEls.length &&
      !window.matchMedia("(prefers-reduced-motion: reduce)").matches
    ) {
      gsap.utils.toArray(revealEls).forEach(function (el) {
        gsap.fromTo(
          el,
          {
            autoAlpha: 0,
            y: 28,
          },
          {
            autoAlpha: 1,
            y: 0,
            duration: 0.7,
            ease: "power2.out",
            scrollTrigger: {
              trigger: el,
              start: "top 88%",
              once: true,
            },
          },
        );
      });
    }

    /* ---------- Footer year ---------- */
    var yearEl = document.getElementById("year");
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    /* ---------- Contact Form ---------- */
    var contactForm = document.getElementById("contact-form");
    var formMessage = document.getElementById("form-message");

    if (contactForm && formMessage) {
      contactForm.addEventListener("submit", function (e) {
        e.preventDefault();

        var submitBtn = contactForm.querySelector('button[type="submit"]');
        var originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML =
          '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Sending...';

        var formData = new FormData(contactForm);
        formData.append("action", "vnktheme_contact_form");
        formData.append("nonce", vnkthemeData.nonce);

        fetch(vnkthemeData.ajaxUrl, {
          method: "POST",
          body: formData,
          credentials: "same-origin",
        })
          .then(function (response) {
            return response.json();
          })
          .then(function (data) {
            if (data.success) {
              formMessage.textContent = data.data.message;
              formMessage.className = "text-green-600";
              contactForm.reset();
            } else {
              formMessage.textContent =
                data.data.message || "Something went wrong. Please try again.";
              formMessage.className = "text-brand-red";
            }
            formMessage.classList.remove("hidden");
          })
          .catch(function () {
            formMessage.textContent =
              "Network error. Please check your connection and try again.";
            formMessage.className = "text-brand-red";
            formMessage.classList.remove("hidden");
          })
          .finally(function () {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
          });
      });
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();

if (document.querySelector(".similar-projects-swiper")) {
  new Swiper(".similar-projects-swiper", {
    slidesPerView: 1,
    spaceBetween: 24,
    navigation: {
      prevEl: ".similar-projects-prev",
      nextEl: ".similar-projects-next",
    },
    pagination: {
      el: ".similar-projects-pagination",
      clickable: true,
    },
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 32 },
      664: { slidesPerView: 1.5, spaceBetween: 32 },
      1440: { slidesPerView: 2.5, spaceBetween: 32 },
    },
  });
}
