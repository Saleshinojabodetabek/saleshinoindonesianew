document.addEventListener("DOMContentLoaded", () => {
  /* ==========================
     HAMBURGER MENU
  ========================== */
  const hamburger = document.querySelector(".hamburger-menu");
  const navLinks = document.querySelector(".nav.links");

  if (hamburger && navLinks) {
    hamburger.addEventListener("click", (e) => {
      e.stopPropagation();
      navLinks.classList.toggle("active");
    });

    document.addEventListener("click", (e) => {
      if (!navLinks.contains(e.target) && !hamburger.contains(e.target)) {
        navLinks.classList.remove("active");

        document.querySelectorAll(".dropdown").forEach((dd) => {
          dd.classList.remove("open");
        });
      }
    });

    navLinks.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        navLinks.classList.remove("active");
      });
    });
  }

  /* ==========================
     DROPDOWN PRODUK (CLICK ONLY)
  ========================== */
  document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();

      const dropdownParent = toggle.closest(".dropdown");

      document.querySelectorAll(".dropdown").forEach((dd) => {
        if (dd !== dropdownParent) dd.classList.remove("open");
      });

      dropdownParent.classList.toggle("open");
    });
  });

  /* ==========================
     SLIDER AUTO
  ========================== */
  const slides = document.querySelectorAll(".slide");

  if (slides.length > 0) {
    let currentSlide = 0;

    const showSlide = (index) => {
      slides.forEach((slide, i) =>
        slide.classList.toggle("active", i === index)
      );
    };

    setInterval(() => {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }, 4000);
  }

  /* ==========================
     SMOOTH SCROLL
  ========================== */
  document.querySelectorAll('nav a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      e.preventDefault();

      const targetID = anchor.getAttribute("href").substring(1);
      const target = document.getElementById(targetID);

      if (target) {
        const offsetPosition =
          target.getBoundingClientRect().top + window.pageYOffset - 130;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      }
    });
  });

  /* ==========================
     FADE IN ON SCROLL
  ========================== */
  const faders = document.querySelectorAll(".fade-element");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        entry.target.classList.toggle("visible", entry.isIntersecting);
      });
    },
    { threshold: 0.1 }
  );

  faders.forEach((el) => observer.observe(el));
});
