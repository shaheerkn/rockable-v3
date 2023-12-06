const themeBtnEl = document.querySelector( '.switch-theme' );
const body = document.querySelector( 'body' );

document.addEventListener( 'DOMContentLoaded', function() {
    AOS.init();

    themeBtnEl.addEventListener( 'click', () => {
      body.classList.toggle('active');
      themeBtnEl.classList.toggle('active');
      const theme = body.classList.contains('active') ? 'active' : '';
      sessionStorage.setItem('theme', theme);
    });

    const actualPosition = document.querySelector( '.text--with-btn .actual-position' );
    const buttonSticky = document.querySelector( '.text--with-btn .button--sticky' );
    const innerHeight = window.innerHeight - 130;

    if (actualPosition && buttonSticky) {
    buttonSticky.classList.add('button--active');

    window.addEventListener('scroll', ()=> {
      if (actualPosition.getBoundingClientRect().y < innerHeight) {
        buttonSticky.classList.remove('button--active')
      } else {
        buttonSticky.classList.add('button--active')
      }
    })
}
})


const logoSvgs = document.querySelectorAll('.logos__logo svg')

// logoSvgs.forEach(svg => {
//   // Get the fill and stroke attributes
//   const fill = svg.getAttribute('fill');
//   const stroke = svg.getAttribute('stroke');

//   // Check if fill or stroke is present and assign the value to --color-primary
//   if (fill) {
//     document.documentElement.style.setProperty('--color-primary', fill);
//   } else if (stroke) {
//     document.documentElement.style.setProperty('--color-primary', stroke);
//   }
// });