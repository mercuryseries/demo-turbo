document.addEventListener('turbo:before-cache', function() {
  document.querySelectorAll('.alert-success').forEach(e => e.parentNode.removeChild(e));
  document.querySelectorAll('.error-message').forEach(e => e.parentNode.removeChild(e));
});
