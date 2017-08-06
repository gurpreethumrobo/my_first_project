



<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="603276559714-rg447uomehgbp3teqh6bnv5ennngknb8.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
      
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <div form="post">
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
      console.log("ID: " + profile.getId());// Don't send this directly to your server!
    
       console.log('Full Name: ' + profile.getName()); 
      
       console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
       
        
        
       // document.write(profile.getId());
        //document.write(profile.getName()); 
         //document.write(profile.getGivenName());
          //document.write(profile.getFamilyName());
           //document.write(profile.getImageUrl());
            //document.write(profile.getEmail());
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
     </script>
    </div>
   
  </body>
</html>
