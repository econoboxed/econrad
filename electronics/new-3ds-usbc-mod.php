<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
	<meta name="author" content="Bootlab">

  <title>econrad.org</title>

  <link href="../css/app.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

</head>
<body>

  <?php include '../header.php';?> 

  <main class="main pt-4">
  
    <div class="container">

      <div class="row">
        <div class="col-md-9">

          <article class="card mb-4">
            <header class="card-header text-center">
              <div class="card-meta">
                <a href="#"><time class="timeago" datetime="2021-09-26 20:00">12 march 2022</time></a> in <a href="page-category.html">Electronics</a>
              </div>
              <h1 class="card-title">Modifying a New Nintendo 3ds to Charge over USB-C</h1>
            </header>
            <img class="img" src="../img/electronics/new-3ds-usbc-mod/1.png" alt="" />
            <p>&emsp;Here is how I modded my New Nintendo 3ds (2015, non-xl) to charge over USB-C. The mod is made possible by a small PCB manufactured by Adifruit.</p>

            <img class = "img-half" src="../img/electronics/new-3ds-usbc-mod/2.png" alt="" />
            <p>&emsp;This was the breakout board I used for this project. The PCB needed to be small, and even this small board needed to be modified further.</p>

            <img class="img" src="../img/electronics/new-3ds-usbc-mod/3.png" alt="" />
            <p>&emsp; Here is the Modified PCB. All material under the pad left of the “JRC” text has been removed, making the PCB about a centimetre shorter overall. Additionally, a 4042 5.1k resistor has been added to “R1”. This step is not strictly necessary; however, without that resistor the 3ds will not charge from a downstream USB-C port. </p>

            <img class="img" src="../img/electronics/new-3ds-usbc-mod/4.png" alt="" />
            <p>&emsp; Here is the location of the PCB inside the case. I soldered two 30 AWG wires to the PCB. A small amount of disassembly is required to free the pictured portion of the bottom shell. I made a USB-C sized hole in the case by drilling a small hole where the port will be, then widening the hole with a circular file. This entire process took about 20 minutes, filing conservatively and checking test fitting the port often. After the hole is made, the entire PCB can slide in from the outside. Finally, I adhered the PCB in place using a CA glue. </p>

            <img class="img" src="../img/electronics/new-3ds-usbc-mod/5.png" alt="" />
            <p>&emsp; Connecting the PCB to the motherboard is pretty easy. Removal of the motherboard is not necessary, an in fact I’d recommend against it; removing the motherboard puts strain on the LCD ribbon cables that can be exceedingly delicate especially if the console was used heavily. I recommend soldering the cables to the highlighted regions. </p>
                        
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../img/electronics/new-3ds-usbc-mod/7.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/electronics/new-3ds-usbc-mod/6.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/electronics/new-3ds-usbc-mod/1.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>            
          
            <p>&emsp; All that is left is to button up the console. No further modification of the shell is required, and the PCB fits with no issue. Here are a few pictures of the completed mod. </p>

          </article><!-- /.card -->

        </div>
        <div class="col-md-3 ms-auto">

          <?php include "../side.php"; ?>
          </aside>

        </div>
      </div>
    </div>

  </main>

  <?php include "../footer.php"; ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
