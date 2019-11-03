$(document).ready(function() {

  $(".navbar-burger").click(function() {
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });

  $(".card-hover").hover( function(){
    $(".card-hover").removeClass('active');
    $(this).addClass('active');
  });

  bulmaCarousel.attach('#depoimentos-slide', {
    slidesToScroll: 1,
    slidesToShow: 1,
    pagination: false,
    icons: {
      'previous': '<svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/></svg>',
      'next': '<svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/></svg>'
    }
  });

  $("#menu-categoria").click(function(){
    if($('.c-navigation-panel').hasClass('is-visible')){
      $('.c-navigation-panel').removeClass('is-visible');
      $('.c-navigation-panel__content').removeClass('is-visible');
    }else{
      $('.c-navigation-panel').addClass('is-visible');
      $('.c-navigation-panel__content').addClass('is-visible');
    }
  });

  var placeholderText = [
    'Procurando algo específico?',
    'Você pode pesquisar por "Ingressos"',
    'Buscar por "Livros"',
    'Pesquisar sobre "Camisetas masculinas"',
    'Encontrar "Cursos online"?',
    'O que a sua sorte procura hoje?',
  ];
  $('#search').placeholderTypewriter({text: placeholderText});
});