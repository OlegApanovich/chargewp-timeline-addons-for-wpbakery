(function checkTailwindLoaded() {
    if (window.tailwind && window.tailwind.config) {
        tailwind.config = {
                corePlugins: {
                    preflight: false // Disables Tailwind's CSS reset
                }
        };
    } else {
        setTimeout(checkTailwindLoaded, 50); // Try again in 50ms
    }
})();
