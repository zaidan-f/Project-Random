// Get the bubbles container
const bubblesContainer = document.querySelector('.bubbles');

// Create bubbles
for (let i = 0; i < 128; i++) {
  const bubble = document.createElement('div');
  bubble.classList.add('bubble');
  bubble.style.setProperty('--size', `${2 + Math.random() * 4}rem`);
  bubble.style.setProperty('--distance', `${6 + Math.random() * 4}rem`);
  bubble.style.setProperty('--position', `${-5 + Math.random() * 110}%`);
  bubble.style.setProperty('--time', `${2 + Math.random() * 2}s`);
  bubble.style.setProperty('--delay', `${-1 * (2 + Math.random() * 2)}s`);
  bubblesContainer.appendChild(bubble);
}

// UPDATE: I was able to get this working again... Enjoy!

var cursor = document.querySelector('.cursor');
var cursorinner = document.querySelector('.cursor2');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursorinner.style.left = x + 'px';
  cursorinner.style.top = y + 'px';
});

document.addEventListener('mousedown', function(){
  cursor.classList.add('click');
  cursorinner.classList.add('cursorinnerhover')
});

document.addEventListener('mouseup', function(){
  cursor.classList.remove('click')
  cursorinner.classList.remove('cursorinnerhover')
});

a.forEach(item => {
  item.addEventListener('mouseover', () => {
    cursor.classList.add('hover');
  });
  item.addEventListener('mouseleave', () => {
    cursor.classList.remove('hover');
  });
})