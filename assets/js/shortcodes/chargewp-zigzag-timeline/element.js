(function () {
    function checkTimelinesWidth() {
        document.querySelectorAll('.chargewp-zigzag-timeline').forEach(timeline => {
            if (timeline.offsetWidth <= 400) {
                timeline.classList.add('chargewp-compact');
            } else {
                timeline.classList.remove('chargewp-compact');
            }
        });
    }

    window.addEventListener('load', checkTimelinesWidth);
    window.addEventListener('resize', checkTimelinesWidth);
})();
