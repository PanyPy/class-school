<!DOCTYPE html>
<html>
<?php include './includes/head.php';?>
<body>
  <?php include './includes/header.php'; ?>

  <div class="jumbotron">
    <div class="container text-center">
      <h2><u>Blink-182</u> announce 2 Irish gigs for 2023</h2>
      
      <p><strong>Blink 182&#174;</strong> are set to make their <i>return to Ireland</i> next year for dates in Dublin and Belfast on their first tour in almost &#60; 10 years. &#177; <a target="_blank" href="https://www.rte.ie/entertainment/2022/1011/1328509-blink-182-announce-two-irish-gigs-for-2023/">Read more</a></p>
      
      <a target="_blank" href="blink182.jpeg">
        <img src="blink182.jpeg" alt="blink image" title="blink 182">
      </a>
    </div>
  </div>

  <div class="container-fluid bg-3">    
    <div class="col-sm-12 text-center" > <h3>World Tour 2023</h3><br> </div>
      <div class="col-sm-3">
      
        <div class="col-sm-6">
          <h2>Cities</h2>    
          <ul>
            <li>Belfast</a></li>
            <li>Dublin</a></li>
          </ul>
        </div>
      
        <div class="col-sm-6"> 
          <h2>Tour</h2>
          <ol>
            <li> September 4 - SSE Arena Belfast</li>
            <li> September 5 - 3Arena Dublin</li>
          </ol>
        </div>
      </div>

      <div class="col-sm-5">
        <table class="table">
          <tr>
            <th>Year</th>
            <th>Day</th>
            <th>Location</th>
          </tr>
          <tr>
            <td>2023</td>
            <td>MAR 21/22</td>
            <td>ASUNCION, PY</td>
          </tr>
          <tr>
            <td>2023</td>
            <td>SEP 04</td>
            <td>BELFAST, UK</td>
          </tr>
          <tr>
            <td>2023</td>
            <td>SEP 05</td>
            <td>DUBLIN, IE</td>
          </tr>
          <tr>
            <td>2024</td>
            <td>FEB 13</td>
            <td>MELBOURNE, AU</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-3">
      
        <div class="col-sm-6">
          <form action="add-song.php" method="post" class="form-group" style="display: flex">
            <label for="songName">Song</label>
            <input type="text" name="songName" id="songName" class="form-control"/>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
          <?php include './list-songs.php'; ?>
        </div>
      </div>
    </div>
  </div><br>
  <!-- end of section -->
</body>

<footer>
    <?php include './includes/footer.php' ?>
</footer>
</html>