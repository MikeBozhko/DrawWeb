$('#shadow-color').asColorPicker({
    hideInput: true
});

$('#shadow-color').on('asColorPicker::change', function (e) {
    console.log($(this).asColorPicker('val'));
});

$('#stroke-color').asColorPicker({
    hideInput: true
});

$('#stroke-color').on('asColorPicker::change', function (e) {
    console.log($(this).asColorPicker('val'));
    $('label[for="stroke-color"]').css('color', $(this).asColorPicker('val'));
});

$('select').niceSelect();

$('#fill-color').asColorPicker({
    hideInput: true
});

$('#fill-color').on('asColorPicker::change', function (e) {
    console.log($(this).asColorPicker('val'));
    $('label[for="fill-color"]').css('color', $(this).asColorPicker('val'));
});

$('#font-background-color').asColorPicker({
    hideInput: true
});

$('#font-background-color').on('asColorPicker::change', function (e) {
    console.log($(this).asColorPicker('val'));
    $('label[for="fill-color"]').css('color', $(this).asColorPicker('val'));
});

var menu = document.querySelector('.menu');
var canvas = document.getElementById('canvas');

function showMenu(x, y){
    menu.style.left = x + 'px';
    menu.style.top = y + 'px';
    menu.classList.add('show-menu');
}

function hideMenu(){
    menu.classList.remove('show-menu');
}


// if (document.addEventListener) {
//     document.addEventListener('contextmenu', function (e) {
//         e.preventDefault();
//     }, false);
// } else {
//     document.attachEvent('oncontextmenu', function () {
//         window.event.returnValue = false;
//     });
// }
//
// $('.upper-canvas').on('contextmenu', function (e) {
//     e.preventDefault();
//     hideMenu();
//     showMenu(e.pageX, e.pageY);
// });
//
// $('.upper-canvas').on('click', function (e) {
//     e.preventDefault();
//     hideMenu();
// });

// function onContextMenu(e){
//     e.preventDefault();
//     console.log(e.target);
//     console.log(e.target.className);
//     if(e.target.className === ('upper-canvas')){
//         showMenu(e.pageX, e.pageY);
//         document.addEventListener('click', onClick, false);
//     }
// }
//
// function onClick(e){
//     hideMenu();
//     document.removeEventListener('click', onClick);
// }
//
// document.addEventListener('contextmenu', onContextMenu, false);
