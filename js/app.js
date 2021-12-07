
/*menu de navegacion*/

addEventListener('DOMContentLoaded', () => {
  const btn_menu = document.querySelector('.btn_menu')

  if(btn_menu) {
  btn_menu.addEventListener('click', () => {
  const menu_items = document.querySelector('.menu_items')
  menu_items.classList.toggle('show')

  })
  }
})


/*fin */

const Sections = new fullpage('#fullpage',{
  navigation: true,
  menu:'#menu',
  anchors: ['home','mas','caracteristicas','planes','contacto','login'],
  showActiveTooltip: true,
});



