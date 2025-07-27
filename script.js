const input = document.querySelector("#phone");
window.intlTelInput(input, {
  initialCountry: "auto",
  geoIpLookup: function(success, failure) {
    fetch("https://ipapi.co/json")
      .then(res => res.json())
      .then(data => success(data.country_code))
      .catch(() => success("us"));
  },
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});
