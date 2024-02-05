document.addEventListener('DOMContentLoaded', function() {

  var htmlElement = document.documentElement;
  var themeControl = document.getElementById('theme-control');
  var radioInputs = themeControl.querySelectorAll('input[name="html-theme"]');
  var savedTheme = localStorage.getItem('html-theme');
  
  if (savedTheme) {
    radioInputs.forEach(function (input) {
      if (input.value === savedTheme) {
        input.checked = true;
        htmlElement.setAttribute('html-theme', savedTheme);
      }
    });
  }

  radioInputs.forEach(function (input) {
    input.addEventListener('change', function () {
      htmlElement.setAttribute('html-theme', this.value);
      localStorage.setItem('html-theme', this.value);
    });
  });
  
});