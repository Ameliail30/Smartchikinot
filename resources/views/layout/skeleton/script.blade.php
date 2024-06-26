<!--   Core JS Files   -->
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
@stack('js')
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/argon-dashboard.min.js?v=2.0.4') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modeSelect = document.getElementById('mode');
    const temperatureInput = document.getElementById('temperature_threshold');

    function updateHeaterControl() {
        const mode = modeSelect.value;
        if (mode === 'automatic') {
            temperatureInput.disabled = false;
        } else {
            temperatureInput.disabled = true;
        }
    }

    modeSelect.addEventListener('change', updateHeaterControl);
    updateHeaterControl(); // Initialize on page load
});
</script>
