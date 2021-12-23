// handles cookies
var options = {
  title: '&#x1F36A; Chcete přijmout cookies a zásady ochrany osobních údajů?',
  message: 'Cookie jsou použity k zlepšení uživatelské zkušenosti...',
  delay: 600,
  expires: 1,
  link: '#privacy',
  onAccept: function(){
      var myPreferences = $.fn.ihavecookies.cookie();
  },
  uncheckBoxes: true,
  acceptBtnLabel: 'Přijmout',
  moreInfoLabel: 'Více informací',
  cookieTypesTitle: 'Select which cookies you want to accept',
  fixedCookieTypeLabel: 'Essential',
  fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
}
$(document).ready(function() {
    $('body').ihavecookies(options);
});
