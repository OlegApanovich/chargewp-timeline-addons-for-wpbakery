(function () {
    const originalWarn = console.warn;
    console.warn = function(message, ...args) {
        if (!message.includes('cdn.tailwindcss.com should not be used in production')) {
            originalWarn.apply(console, [message, ...args]);
        }
    };
}())
