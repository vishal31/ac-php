<!DOCTYPE html>
<html>
  <head>
    <title>www.W3docs.com</title>

    <style>

      input {
        height: 30px;
        padding-left: 10px;
        border-radius: 4px;
        border: 1px solid rgb(186, 178, 178);
        box-shadow: 0px 0px 12px #EFEFEF;
      }

    </style>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>     


  </head>

  <body>

  <input type="text" id="autocomplete"/>



  <p id="demo"> </p>

<script src="./ajax_script.js"> </script>

<script>

  var input = document.getElementById('autocomplete');

  var autocomplete = new google.maps.places.Autocomplete(input, {types: ['(cities)']} );

google.maps.event.addListener(autocomplete, 'place_changed', function(){

         var place = autocomplete.getPlace();


         console.log(place);


        const value = input.value;
        const lat = place.geometry.location.lat();
        const lng = place.geometry.location.lng();
        const utc_offset_minutes = place.utc_offset_minutes

        console.log('lat', lat);
        console.log('lng', lng);
        console.log('value', value);
        console.log(utc_offset_minutes);

        ajax(value, lat, lng, utc_offset_minutes);


      
        



      });




</script>

  </body>
</html> 