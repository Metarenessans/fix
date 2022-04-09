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

let initiator = document.getElementsByClassName('js-popup');
let popup     = document.getElementById('popup');
let main      = document.getElementById('main');

for (let item of initiator) {
  item.addEventListener('click', () => {
    popup.classList.add("popup--active"); 
    main.classList.add("block-events"); 
  });
}

console.log('initiator',initiator);

popup.addEventListener('click', e => {
  let classList = e.target.classList;
  if (classList.contains('popup--active')) {
    popup.classList.remove("popup--active");
    main.classList.remove("block-events");
  }
});
