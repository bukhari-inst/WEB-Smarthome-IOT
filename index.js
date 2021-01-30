const numb = document.querySelector('.num');
const numt = document.querySelector('.numb');
//const imgImage = document.getElementById("#myImage");
let counter = 0;
setInterval(() => {
  if (counter == 100) {
    clearInterval();
  } else {
    counter += 1;
    numb.textContent = counter + '%';
    numt.textContent = counter + '%';
  }
}, 80);

function emit() {
  const a = document.getElementById('myImage');
  const s = document.getElementById('flexSwitchCheckChecked');

  if (s.value == 'On') {
    a.src = 'img/pic_bulbon.gif';
    s.value = 'Off';
  } else {
    a.src = 'img/pic_bulboff.gif';
    s.value = 'On';
  }
}

function emits() {
  const a = document.getElementById('myImg');
  const s = document.getElementById('flexSwitchCheckCheckeds');

  if (s.value == 'On') {
    a.src = 'img/pic_bulbon.gif';
    s.value = 'Off';
  } else {
    a.src = 'img/pic_bulboff.gif';
    s.value = 'On';
  }
}

function eve() {
  const a = document.getElementById('myBtn');
  const s = document.getElementById('flexSwitchCheckCheckeda');

  if (s.value == '0') {
    // a.src = 'img/pic_bulbonsd.gif';
    s.value = '0';
  } else {
    // a.src = 'img/pic_bulbofff.gif';
    s.value = '1';
  }
}

function goods() {
  const a = document.getElementById('myClass');
  const s = document.getElementById('flexSwitchCheckCheckedt');

  if (s.value == 'On') {
    a.src = 'img/pic_bulbon.gif';
    s.value = 'Off';
  } else {
    a.src = 'img/pic_bulboff.gif';
    s.value = 'On';
  }
}

function good() {
  const a = document.getElementById('myClas');
  const s = document.getElementById('flexSwitchCheckCheckedd');

  if (s.value == 'On') {
    a.src = 'img/pic_bulbon.gif';
    s.value = 'Off';
  } else {
    a.src = 'img/pic_bulboff.gif';
    s.value = 'On';
  }
}
