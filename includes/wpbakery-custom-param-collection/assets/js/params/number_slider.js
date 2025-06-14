(() => {
  const init = (container = document) => {
    container.querySelectorAll('.wcp-number-slider-wrapper').forEach(wrapper => {
      const range = wrapper.querySelector('.wcp-number-slider');
      const number = wrapper.querySelector('.wcp-number-slider-input');
      
      if (!range || !number || wrapper.dataset.initialized) return;
      
      ['input'].forEach(event => {
        range.addEventListener(event, () => number.value = range.value);
        number.addEventListener(event, () => range.value = number.value);
      });
      
      wrapper.dataset.initialized = 'true';
    });
  };

  init();
  vc.events.on('vc-param-group-add-new', (ev, $newEl) => init($newEl[0] || $newEl));
})();