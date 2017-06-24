(function () {

    /* Image Slider */

    var head = document.getElementsByTagName('head')[0],
        mbjs = document.createElement('script');

    mbjs.src = './assets/scripts/slider/js-image-slider.js';
    mbjs.async = 'true';
    head.appendChild(mbjs);

    /* Slack */

    var container = document.getElementById('slack-container'),
        form = document.createElement('form'),
        label = document.createElement('label'),
        input = document.createElement('input'),
        button = document.createElement('button');

    if (!container) {
        return;
    }

    form.method = 'post';
    form.autocomplete = true;
    form.className = 'slack-form';

    input.type = 'email';
    input.name = 'mail';
    input.autocomplete = 'email';
    input.style.width = '250px';

    label.innerText = 'E-Mail: ';
    label.appendChild(input);

    button.type = 'submit';
    button.innerText = 'Anmelden';

    form.appendChild(lebel);
    form.appendChild(button);

    container.appendChild(form);
})();