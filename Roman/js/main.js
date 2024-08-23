document.addEventListener('DOMContentLoaded', function () {

    var menuBtn = document.querySelector('.roman-header__menu-btn');
    var headerControlsWrap = document.querySelector('.roman-header-controls-wrap');
    var mainNavLinks = document.querySelectorAll('.roman-main-nav a');

    menuBtn.addEventListener('click', function () {
        if (menuBtn.classList.contains('is-active')) {
            menuBtn.classList.remove('is-active');
            headerControlsWrap.classList.remove('is-active');
            document.body.classList.add('loaded');
        } else {
            menuBtn.classList.add('is-active');
            headerControlsWrap.classList.add('is-active');
            document.body.classList.remove('loaded');
        }
    });

    mainNavLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            menuBtn.classList.remove('is-active');
            document.body.classList.add('loaded');
            headerControlsWrap.classList.remove('is-active');
        });
    });

    const menuLinks = document.querySelectorAll('a[href^="#"], a[href*="/#"]');

    menuLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); // Відміна стандартної поведінки посилання

            // Отримуємо ID секції з href посилання
            const href = this.getAttribute("href");
            // Обрізаємо все до # і враховуємо, що в URL може бути /
            const targetID = href.includes('#') ? href.split('#')[1].split('/')[0] : '';
            const targetSection = document.getElementById(targetID);

            if (targetSection) {
                // Плавний перехід до секції
                window.scrollTo({
                    top: targetSection.offsetTop, // Відступ зверху до секції
                    behavior: "smooth" // Включаємо плавний перехід
                });
            }
        });
    });

});

//Поп-апу

jQuery(document).ready(function ($) {
    $(document).on('wpcf7mailsent wpcf7mailfailed wpcf7invalid', function (event) {

      const response = event.originalEvent.detail.apiResponse;

      if (response && event.type !== 'wpcf7invalid') {
        event.preventDefault();
        let span = $('.span-placeholder');
        span.text(span.attr('data-placeholder'));
        span.removeClass('active');
        show_popup(response.message);
      }
    });

    $('.your-file').on('click', function () {
      document.getElementById("file-hidden-id").click();
    })
    function show_popup(message) {
      $('.mai-popup').addClass('active');
      $('.mai-wpcf7-response-output').text(message);
    }

    $('.popup-button').on('click', function () {
      $('.mai-popup').removeClass('active');
    })

  });
