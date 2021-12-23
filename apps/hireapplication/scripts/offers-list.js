// handles data offers list 
$(document).ready(function(){

  $.get({
    url: 'php/offers.php',
    success: function(response) {

      const offers = $.parseJSON(response);

      $('#offers-list').pagination({
        dataSource: offers,
        pageSize: 4,
        callback: function(data) {
	
          $(".paginationjs").appendTo("#pagination");

          $('#offers-list').empty();

          data.forEach(function(offer, pagination) {

            const obligation = offer.obligation ? ('<li>' + translates[offer.obligation] + '</li>') : undefined;
            const education = offer.education ? ('<li>' + translates[offer.education] + '</li>') : undefined;

            // creating combined address
            let address;

            if (offer.street && offer.streetNumber || offer.town) {

              if (offer.street && offer.streetNumber) {
                address = '<li>' + offer.street + ' ' +  offer.streetNumber;
              }

              if (address && offer.town) { 
                address += ', ' + offer.town + '</li>'
              } else {
                address = '<li>' + offer.town + '</li>';
              }

            }

            $('#offers-list').append("<div class='__item mdl-card mdl-shadow--2dp'><div class='mdl-card__media'><img src='" + offer.pictureLink + "'></div><div class='mdl-card__title'><h4 class='mdl-card__title-text'>" + offer.job + "</h4></div><div class='mdl-card__supporting-text'><ul><li class='company-name'>" + offer.company + "</li>" + address + obligation + education + "</ul></div><div class='mdl-card__actions'><a class='link mdl-button mdl-js-button mdl-typography--text-uppercase' href='offer.php'>Prohlédnout si nabídku<i class='material-icons'>chevron_right</i></a></div></div>");


          });

        }
      }) 

    }
  });
});
