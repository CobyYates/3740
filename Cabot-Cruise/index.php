<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title><?php echo $title; ?></title>

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
  <?php $title="Cobat Cruises | Home";?>
    <main>
      <div class="myslider">
        <picture>
          <source srcset="./images/hero-1.jpg" media="(min-width: 680px)" />
          <img srcset="./images/hero-1sm.jpg" alt="slider" />
        </picture>

        <picture>
          <source srcset="./images/hero-2.jpg" media="(min-width: 680px)" />
          <img srcset="./images/hero-2sm.jpg" alt="slider" />
        </picture>

        <picture>
          <source srcset="./images/hero-3.jpg" media="(min-width: 680px)" />
          <img srcset="./images/hero-3sm.jpg" alt="slider" />
        </picture>

        <picture>
          <source srcset="./images/hero-4.jpg" media="(min-width: 680px)" />
          <img srcset="./images/hero-4sm.jpg" alt="slider" />
        </picture>

        <picture>
          <source srcset="./images/hero-5.jpg" media="(min-width: 680px)" />
          <img srcset="./images/hero-5sm.jpg" alt="slider" />
        </picture>
      </div>

      <h1>Recent Blog Articles</h1>

      <div class="gallery">
        <a href="#" class="coolTrick one">
          <img src="./images/blog1.jpeg" />
          <div class="coverColor photo"></div>
          <div class="txt">Best Cruises of 2019</div>
          <div class="txtLow">May 1, 2019</div>
        </a>

        <a href="#" class="coolTrick two">
          <img src="./images/blog2.jpeg" />
          <div class="coverColor photo"></div>
          <div class="txt">Places to Visit 2020</div>
          <div class="txtLow">May 1, 2019</div>
        </a>

        <a href="#" class="coolTrick three">
          <img src="./images/blog3.jpeg" />
          <div class="coverColor photo"></div>
          <div class="txt">Traveling Car Guide</div>
          <div class="txtLow">May 1, 2019</div>
        </a>

        <a href="#" class="coolTrick four">
          <img src="./images/blog4.jpeg" />
          <div class="coverColor photo"></div>
          <div class="txt">Best Cruise Line</div>
          <div class="txtLow">May 1, 2019</div>
        </a>
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
