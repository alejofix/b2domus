document.addEventListener('DOMContentLoaded', function() {

    // Navbar scroll effect
    const nav = document.getElementById('mainNav');
    if (nav) {
        gsap.to(nav, {
            scrollTrigger: {
                trigger: 'body',
                start: '80px top',
                toggleClass: { targets: nav, className: 'navbar-scrolled' }
            }
        });
    }

    // Hero reveal animation
    const heroContent = document.querySelector('.hero-content');
    const heroBadge = document.querySelector('.hero-badge');
    if (heroContent) {
        const tl = gsap.timeline({ delay: 0.3 });
        if (heroBadge) tl.from(heroBadge, { y: 40, opacity: 0, duration: 0.8, ease: 'power3.out' });
        tl.from('.hero-content h1', { y: 60, opacity: 0, duration: 1, ease: 'power4.out' }, '-=0.4');
        tl.from('.hero-content p', { y: 40, opacity: 0, duration: 0.8, ease: 'power3.out' }, '-=0.6');
        tl.from('.hero-content .hero-cta', { y: 30, opacity: 0, duration: 0.6, ease: 'power3.out' }, '-=0.4');
    }

    // Hero parallax / zoom effect
    const heroBg = document.querySelector('.hero-bg img');
    if (heroBg) {
        gsap.to(heroBg, {
            scale: 1.1,
            scrollTrigger: {
                trigger: '.hero',
                start: 'top top',
                end: 'bottom top',
                scrub: 1
            }
        });
    }

    // Section scroll reveal
    gsap.utils.toArray('.reveal').forEach(el => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            y: 60,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        });
    });

    // Stagger service cards
    gsap.utils.toArray('.service-card').forEach((card, i) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 88%',
                toggleActions: 'play none none none'
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: i * 0.15,
            ease: 'power3.out'
        });
    });

    // Counter animation
    gsap.utils.toArray('.stat-number').forEach(counter => {
        const target = parseInt(counter.dataset.target) || 0;
        const suffixEl = counter.querySelector('.stat-suffix');
        const suffix = suffixEl ? suffixEl.textContent : '';

        const obj = { val: 0 };
        gsap.to(obj, {
            val: target,
            duration: 2,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: counter,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            onUpdate: function() {
                counter.innerHTML = Math.round(obj.val) + suffix;
            }
        });
    });

    // Process steps sequential reveal
    gsap.utils.toArray('.process-step').forEach((step, i) => {
        gsap.from(step, {
            scrollTrigger: {
                trigger: step,
                start: 'top 88%',
                toggleActions: 'play none none none'
            },
            y: 40,
            opacity: 0,
            duration: 0.7,
            delay: i * 0.2,
            ease: 'power3.out'
        });
    });

    // Portfolio items stagger
    gsap.utils.toArray('.portfolio-item').forEach((item, i) => {
        gsap.from(item, {
            scrollTrigger: {
                trigger: item,
                start: 'top 90%',
                toggleActions: 'play none none none'
            },
            y: 40,
            opacity: 0,
            duration: 0.7,
            delay: i * 0.1,
            ease: 'power3.out'
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

});
