

// Check for DOM loaded before executing
window.addEventListener("DOMContentLoaded", () => {
  if (
    document.readyState == "interactive" ||
    document.readystate == "complete"
  ) {
    const siteHeader = document.getElementById('site-header');
    const siteNavigation = document.getElementById('navigation');
    const navToggleBtn = document.getElementById('navigation-toggle');
    if (siteHeader && siteNavigation && navToggleBtn) {
      initMobileNavToggle(siteHeader, siteNavigation, navToggleBtn);
      initMobileNavSubmenus();


    }

    function openSearch(e) {

      if (document.getElementById('desktop-search-open').classList.contains('is-open')) {
        closeSearch();
      } else {
        document.body.classList.add('search-is-open');
        setTimeout(() => {
          document.getElementById('desktop-search-input').focus();
        }, 100);

        if (document.getElementById('desktop-search-open')) {
          document.getElementById('desktop-search-open').classList.add('is-open');
        }

        if (document.getElementById('desktop-search-close')) {
          document.getElementById('desktop-search-close').classList.remove('hidden');
        }


        // Form basic only
        if (document.querySelector('#desktop-search-input-wrapper form')) {
          document.querySelector('#desktop-search-input-wrapper form').classList.remove('hidden');
        }
        if (document.querySelector('#site-header.header-dropdown #desktop-search-open')) {
          document.querySelector('#site-header.header-dropdown #desktop-search-open').classList.add('hidden');
        }

        if (document.querySelector('.header-dropdown #primary-nav ul')) {
          document.querySelector('.header-dropdown #primary-nav ul').classList.add('hidden');
        }

        // For utility nav only
        if (document.getElementById('desktop-search-drawer')) {
          document.getElementById('desktop-search-drawer').classList.remove('hidden');
        }
      }

    }

    function closeSearch(e) {
      document.body.classList.remove('search-is-open');

      if (document.getElementById('desktop-search-open')) {
        document.getElementById('desktop-search-open').classList.remove('is-open');
      }

      if (document.getElementById('desktop-search-close')) {
        document.getElementById('desktop-search-close').classList.add('hidden');
      }

      if (document.querySelector('.header-dropdown #primary-nav ul')) {
        document.querySelector('.header-dropdown #primary-nav ul').classList.remove('hidden');
      }

      // Form basic only
      if (document.querySelector('#desktop-search-input-wrapper form')) {
        document.querySelector('#desktop-search-input-wrapper form').classList.add('hidden');
      }
      if (document.querySelector('#site-header.header-dropdown #desktop-search-open')) {
        document.querySelector('#site-header.header-dropdown #desktop-search-open').classList.remove('hidden');
      }
      // For utility nav only
      if (document.getElementById('desktop-search-drawer')) {
        document.getElementById('desktop-search-drawer').classList.add('hidden');
      }
    }

    var openSearchEl = document.getElementById('desktop-search-open');
    var closeSearchEl = document.getElementById('desktop-search-close');
    var siteOverlayEl = document.querySelector('[data-mc-namespace]#site-overlay');
    if (openSearchEl && closeSearchEl) {
      openSearchEl.addEventListener("click", openSearch);
      closeSearchEl.addEventListener("click", closeSearch);
    }

    if (siteOverlayEl && closeSearchEl) {
      siteOverlayEl.addEventListener("click", closeSearch);
    }
  }
});

// Add event listener to toggle for mobile nav
function initMobileNavToggle(header, nav, btn) {
  btn.addEventListener("click", function () {
    document.body.classList.toggle('mobile-nav-open');
    header.classList.toggle('mobile-nav-open');
    nav.classList.toggle('show');

    if (btn.getAttribute('aria-expanded') === 'true') {
      btn.setAttribute('aria-expanded', 'false');
    } else {
      btn.setAttribute('aria-expanded', 'true');
    }
  })
}

/**
 * Mobile click listeners for the nav
 */
function initMobileNavSubmenus() {

  const navDropdownItems = document.querySelectorAll(
    ".nav-item.menu-item-has-children.dropdown"
  );
  navDropdownItems.forEach((listEl) => {
    listEl.addEventListener("click", function (e) {
      if (window.outerWidth <= 1199) {
        e.target.classList.toggle("show");
      }
    });
  });
}
