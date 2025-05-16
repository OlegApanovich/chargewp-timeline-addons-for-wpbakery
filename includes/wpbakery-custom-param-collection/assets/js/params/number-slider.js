document.querySelectorAll('.wcp-number-slider-wrapper').forEach(wrapper => {
    const range = wrapper.querySelector('.wcp-number-slider');
    const number = wrapper.querySelector('.wcp-number-slider-input');

    range.addEventListener('input', () => {
        number.value = range.value;
    });

    number.addEventListener('input', () => {
        range.value = number.value;
    });
});
