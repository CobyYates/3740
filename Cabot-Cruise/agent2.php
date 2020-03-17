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
$title="Agents";
include '_top.php';
?>

    <main>
      <h1>Agent-Jeff Jeffrey</h1>
      <div class="agentDetails">
        <img class="agentPhoto" src="/images/agent2.jpg.jpg">
          <div class="details">
              <div class="phone">
          <h3>Phone:</h3>
          <p>1-800-555-1234 ext. 12</p>
        </div>
        <div class="working">
          <h3>Working:</h3>
          <p>Monday, Wednesday, Friday</p>
        </div>
        <div class="destination">
          <h3>Destination Specialization:</h3>
          <p>
            Israel, Egypt, Italy, Caribbean cruises.
          </p>
        </div>
        <div class="hours">
          <h3>Working:</h3>
          <p>8:00am-6:00pm</p>
        </div>
        <div class="biography">
          <h3>Biography</h3>
          <p>
            I have loved travel for as long as I can remember. At the age of 12
            I asked if I could fly by myself to Hawaii and I never came back.
          </p>
          <p>
            Right out of high school I started into travel school and have had
            the opportunity to work in many aspects of the industry. In every
            aspect I have worked I have had the opportunity to help people
            travel, to help fulfill people's dreams, what could be better to do
            every day!
          </p>
        </div>
          </div>
      </div>
      <div class="comments">
        <h3>Customer Comments</h3>
        <section><p>"Thank you Jeff for all your planning and efforts to ensure that we could enjoy our tour and bring back such wonderful memories."</p>
        <p>-John Doe</p></section>
        <section><p>"Thank you for your cheery attitude and hard work during the planning of our tour!"</p>
        <p>-The Smiths</p></section>
        <section><p>"Thanks for your patience and efficiency. Let's do it again sometime very soon!"</p>
        <p>-Jane and John Westagar</p></section>
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
