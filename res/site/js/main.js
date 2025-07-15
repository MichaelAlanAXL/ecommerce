

document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('#menu-profile a');
  const urlAtual = window.location.pathname;

    // console.log('URL atual:', urlAtual);

  links.forEach(link => {
    const href = link.getAttribute('href');
    // console.log('Verificando link:', href);

    if (href === urlAtual) {
      // console.log('Match! Adicionando classe active');
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }

    // if (link.getAttribute('href') === urlAtual) {
    //   link.classList.add('active');
    // } else {
    //   link.classList.remove('active');
    // }
  });
});

  const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });