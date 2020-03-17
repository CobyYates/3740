<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>CABOT CRUISES: <?php echo $title; ?></title>

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="slick/slick/slick.css" />
    <link rel="stylesheet" href="slick/slick/slick-theme.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:300,500"
      rel="stylesheet"
    />
  </head>

  <body id="top">
    <?php
$title="Booking";
include '_top.php';
?>

    <main>
        <h1>Book a Cruise</h1>
        <div class="form">
            <form>
                <label for="fname">Full Name*</label>
                <input type="text" id="fname" name="firstname" placeholder="Your full name.." required>
            
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Your address">

                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="City">

                <!-- add drop down list of states -->
                <label for="state">State</label>
                <select id="state" name="state" placeholder="Please Select...">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>

                <label for="zipcode">Zipcode</label>
                <input type="number" id="zipcode" name="zipcode" placeholder="88888">

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="5555555555">

                <label for="email_input">Email*</label>
                <input type="email" id="email" name="email" placeholder="example@example.com" required>
            
                <label for="country">Cruise Selection</label>
                <select id="country" name="country">
                  <option value="australia">Australia</option>
                  <option value="canada">Carribean</option>
                  <option value="usa">European</option>
                  <option value="usa">Central America</option>
                </select>
              
                <input type="submit" value="Book My Cruise">
              </form>
        </div>
      
    </main>

    <?php include '_bot.php'; ?>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="slick/slick/slick.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".myslider").slick({
          autoplay: true,
          dots: true,
          arrows: false,
          cssEase: "ease-out",
          speed: 500,
          autoplaySpeed: 5000
        });
      });
    </script>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "TravelAgency",
        "name": "Cabot Cruises",
        "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
        "openingHours": "Mo-Fr 09:00-16:00",
        "telephone": "+13855551234",
        "faxNumber": "+1385559876",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "1 Washington Ave",
          "addressLocality": "Miami Beach",
          "addressRegion": "FL"
        },
        "image": "http://fullpath.com/logo.png",
        "priceRange": "$500 to $4000"
      }
    </script>

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
    <script src="/js/index.js"></script>
  </body>
</html>
