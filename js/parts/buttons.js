const buttons = document.querySelectorAll('.ripple');

buttons.forEach(button => {

  button.addEventListener('mouseenter', function (e) {

    const x = e.clientX - e.target.offsetLeft;
    const y = e.clientY - e.target.offsetTop;
    const ripples = document.createElement('span');
    ripples.classList.add("dec");
    ripples.style.left = `${x}px`;
    ripples.style.top = `${y}px`;

    this.appendChild(ripples);
    setTimeout(() => {
      ripples.remove();
    }, 1000);

  });

});