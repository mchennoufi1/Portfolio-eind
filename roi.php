<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <link rel="stylesheet" href="css/roi.css"> 
        <title>Roi - Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "roi";
                include("includes/header.php");
            ?>
        </header>
        <main>
        <section class="section-roi">
      <div class="container">
        <div class="content">
          <h3>ROI Calculator</h3>
        </div>
        <div class="columns">
          <div class="column is-three-quarters">
            <div class="card">
              <div class="card-content">
                <form id="roi-form">
                  <div class="level">
                    <div class="level-left">
                      <div class="level-item">
                        Starting Amount:
                      </div>
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control">
                            <input class="input" id="amount" type="number" />
                            <span class="icon">
                              <i class="fa fa-dollar-sign"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="level">
                    <div class="level-left">
                      <div class="level-item">
                        Percentage of Return:
                      </div>
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control">
                            <input class="input" id="return" type="number" />
                            <span class="icon">
                              <i class="fa fa-percentage"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="level">
                    <div class="level-left">
                      <div class="level-item">
                        Number Of Years:
                      </div>
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control">
                            <input class="input" id="years" type="number" />
                            <span class="icon">
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="control">
                    <button
                      class="button is-large is-fullwidth is-primary is-outlined"
                    >
                      Calculate
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class="section-results"> 
      <h3 class="title ">Calculated Results</h3>
    <div class="columns">
  
  

    <div class="column">
        <div class="notification is-info has-text">
        <p class="subtitle-r">Total Gain:</p>
          <p id="totalReturn" class="title">$ </p>
        </div>
      </div>
      <div class="column">
    <div class="notification is-primary has-text">
    <p class="subtitle">Monthly Returns:</p>
      <p id="monthlyPayment" class="title">$ </p>
    </div>
    </div>
      <div class="column">
        <div class="notification is-link has-text">
        <p class="subtitle">Total Amount:</p>
          <p id="totalPayment" class="title">$ </p>
        </div>
      </div>

</div>
</section>
        </main>
        <br>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
    </body>
    <script src="js/roi.js"></script>
    <script src="js/index.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
</html>
