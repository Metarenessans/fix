import $ from 'jquery';
import 'wicg-inert';

console.log('It works!');

function scrollToElement(selector, callback) {
  $('html').animate({
    scrollTop: $(selector).offset().top + 'px'
  }, 500, callback);
}

$('a[href^="#"]').click(function (e) {
  e.preventDefault();
  scrollToElement($(this).attr('href'));
});

const modal = document.querySelector('#modal');
const main  = document.querySelector('main');

[...document.querySelectorAll('.js-modal')].forEach(element => {
  element.addEventListener('click', () => {
    modal.classList.add('modal--visible');
    main.inert = true; 
    document.body.classList.add('scroll-disabled');
  });
});

modal.addEventListener('click', e => {
  if (e.target.classList.contains('modal--visible')) {
    modal.classList.remove('modal--visible');
    main.inert = false;
    document.body.classList.remove('scroll-disabled');
  }
});
