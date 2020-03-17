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
$title="Cruises";
include '_top.php';
?>

    <main>
        <h1 class="cruiseH1">Cruises</h1>
        <div class="cruiseContainers">
            <img src="/images/cruise1.png" class="cruisePhoto">
            <div>
                <h2>Australia & New Zealand Cruises from $999!</h2>
                <p>On the other side of the world, Australia and New Zealand are full of wonders to behold! Now, more than ever before, you can get
                    phenomenal discounts to cruise the South Pacific. Sail to New Zealand from Sydney, Australia on a 12-day cruise from just $888 per
                    person plus taxes.</p>
                <button>Read More</button>
            </div>
        </div class="cruiseContainers">
        <div class="cruiseContainers">
            <img src="/images/cruise2.png" class="cruisePhoto">
            <div>
                <h2>Carribean Cruises from $1,200</h2>
                <p>Discover the best of the Southern Caribbean on this round-trip cruise from San Juan. 
                    Explore Bridgetown, Barbados, the most British of all the Caribbean islands with the 
                    third-oldest Parliament in the entire Commonwealth. Take a scenic drive through the 
                    rainforest in St. Lucia, heading right into the crater of a massive “drive-in” 
                    volcano. And in St. Thomas, enjoy the beautiful beaches and bountiful duty-free 
                    shopping that are truly its claim to fame.</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="cruiseContainers">
            <img src="/images/cruise3.jpg" class="cruisePhoto">
            <div>
                <h2>European Cruises from $800</h2>
                <p>Explore Rome and Athens, where two great civilizations sprang forth. Soak in the 
                    spectacular views of whitewashed villages and ancient windmills from a seaside café 
                    on the isle of Mykonos. Relive the Renaissance in Florence, stroll the medieval 
                    walled city of Dubrovnik, experience the wonder of Santorini, or visit the fabled 
                    Amalfi Coast from Naples. European cruises to the Mediterranean & Greek Isles will 
                    captivate you with timeless beauty.</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="cruiseContainers">
            <img src="/images/cruise4.png" class="cruisePhoto">
            <div>
                <h2>Central American Cruises from $899</h2>
                <p>Trace the coast of Central America, uncovering rich history, vibrant culture and 
                    natural beauty. Discover the colonial past of Cozumel, and glimpse Belize’s Mayan 
                    civilization and Panama’s Emberá people. Gaze upon sand beaches and turquoise waters 
                    in Honduras and lush rainforests in Costa Rica. Marvel at the workings of the Panama
                     Canal and admire a colorful blend of past and present in Jamaica.</p>
                <button>Read More</button>
            </div>
        </div>
    </main>

    <?php include '_bot.php'; ?>
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
