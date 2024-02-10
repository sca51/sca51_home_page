<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" html-theme="light">
  <head>
    <title>CS 346</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://nrs-projects.humboldt.edu/~st10/styles/normalize.css" type="text/css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" type="text/css" rel="stylesheet" />
    <link href="css/styles.css" type="text/css" rel="stylesheet"  />
    <script src="js/toggle-theme.js" defer="defer"></script>
  </head>
  <body>

    <header>
      <div class="container border-bottom">
        <a href="./">Sean C. Allen</a>
        <form id="theme-control">
          <input type="radio" id="dark-theme" name="html-theme" value="dark">
          <label for="dark-theme">dark</label>
          <input type="radio" id="light-theme" name="html-theme" value="light" checked="checked">
          <label for="light-theme">light</label><br>
        </form>
      </div>
    </header>

    <main>

      <div class="container">
        <div class="course-heading">
          <p>CS 346</p>
          <h1 class="course-heading">Telecommunications &amp; Networks</h1>
          <p>Fall 2023</p>
        </div>
      </div>

      <div class="container">
        <table>
          <caption>Metric unit prefixes</caption>
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Symbol</th>
              <th scope="col">Value</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>femto</td>
              <td>f</td>
              <td>10<sup>-15</sup></td>
              <td>one quadrillionth</td>
            </tr>
            <tr>
              <td>pico</td>
              <td>p</td>
              <td>10<sup>-12</sup></td>
              <td>one trillionth</td>
            </tr>
            <tr>
              <td>nano</td>
              <td>n</td>
              <td>10<sup>-9</sup></td>
              <td>one billionth</td>
            </tr>
            <tr>
              <td>micro</td>
              <td>&#x00B5;</td>
              <td>10<sup>-6</sup></td>
              <td>one millionth</td>
            </tr>
            <tr>
              <td>milli</td>
              <td>m</td>
              <td>10<sup>-3</sup></td>
              <td>one thousandth</td>
            </tr>
            <tr>
              <td>Kilo</td>
              <td>K</td>
              <td>10<sup>3</sup></td>
              <td>one thousand</td>
            </tr>
            <tr>
              <td>Mega</td>
              <td>M</td>
              <td>10<sup>6</sup></td>
              <td>one million</td>
            </tr>
            <tr>
              <td>Giga</td>
              <td>G</td>
              <td>10<sup>9</sup></td>
              <td>one billion</td>
            </tr>
            <tr>
              <td>Tera</td>
              <td>T</td>
              <td>10<sup>12</sup></td>
              <td>one trillion</td>
            </tr>
            <tr>
              <td>Peta</td>
              <td>P</td>
              <td>10<sup>15</sup></td>
              <td>one quadrillion</td>
            </tr>
          </tbody>        
        </table>
      </div>
      
      <div class="bg2">
        <div class="container">
          
        </div>
      </div>

    </main>

    <?php include 'html_parts/footer.php'; ?>
  </body>
</html>