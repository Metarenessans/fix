import $ from 'jquery';
import 'jquery.maskedinput/src/jquery.maskedinput';
import 'wicg-inert';

console.log('It works!');

$('[type="tel"]').mask('+7 (999) 999-9999');

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

// Открытие модального окна
[...document.querySelectorAll('.js-modal')].forEach(element => {
  element.addEventListener('click', () => {
    modal.classList.add('modal--visible');
    main.inert = true; 
    document.body.classList.add('scroll-disabled');
    resetForm();
  });
});

modal.addEventListener('click', e => {
  if (e.target.classList.contains('modal--visible')) {
    modal.classList.remove('modal--visible');
    main.inert = false;
    document.body.classList.remove('scroll-disabled');
  }
});

function resetForm() {
  const button = $('button[type="submit"]');
  button.text('Отправить');
  button.prop('disabled', '');
}

$('form').on('submit', e => {
  e.preventDefault();

  // Валидация
  let valid = true;

  const telInput = $('input[name="tel"]');
  const tel = telInput.val();
  if (tel.length === 0) {
    valid = false;
    telInput.attr('placeholder', 'Укажите телефон');
    telInput.addClass('error');
  }

  const nameInput = $('input[name="name"]');
  const name = nameInput.val();
  if (name.length === 0) {
    valid = false;
    nameInput.attr('placeholder', 'Укажите свое имя');
    nameInput.addClass('error');
  }

  if (!valid) {
    return;
  }

  nameInput.removeClass('error');
  telInput.removeClass('error');

  const data = { name, tel };
  $.ajax({
    type: 'GET',
    url: 'google-sheets.php',
    data,
    success: message => {
      console.log(message);
      $('button[type="submit"]')
        .text('Спасибо! Мы скоро с вами свяжемся')
        .prop('disabled', 'true');
    },
    error: error => {
      console.error(error);
    }
  });
});