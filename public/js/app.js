document.addEventListener('turbo:before-cache', function() {
  document.querySelectorAll('input, textarea').forEach(el => el.value = '');
  document.querySelectorAll('.alert-success, .error-message').forEach(el => el.remove());
});
