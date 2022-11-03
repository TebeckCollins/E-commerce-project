<?php
  include_once ('./header.php');
  include ('functions/common_function.php');
?>

    <!-- banner -->
    <div class="container p-5 mb-1 bg-light rounded-0">
      <div class="container py-5">
        <?php
            if(isset($_GET['cv'])){
                echo "<h1 class='display-5 fw-bold'>Curriculum Vitae</h1>
                <p class='col-md-8 fs-4'>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>";
            }else{
              echo "<h1 class='display-5 fw-bold'>My Blog</h1>
              <p class='col-md-8 fs-4'>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
              <button class='btn btn-primary btn-lg' type='button'>Don't Click Me!</button>";
            }
        ?>
        
      </div>
    </div>

<!--    <div class="bg-c" style="background-color:lightblue;color:white;">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis adipisci dicta ad harum asperiores, quo distinctio, culpa accusamus nam fuga aperiam saepe unde, eligendi laborum! Quisquam quia illo recusandae minus.</p>
  </div> -->

    <!-- main -->
<div class="container">
    <div class="row px-2">
    <!-- featured Products -->
      <div class="col-sm-12 px-2">
        <div class="row">
          <!-- Display products -->
              <!-- Top Products -->
        <div class="bg-white m-0 p-3">
        <div class="col-6 bg-white m-auto px-5">
          <h2 class="text-center">Profile</h2>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, eaque eius sit veritatis corrupti magni, adipisci minus dolor itaque fuga ab sapiente perspiciatis, harum nesciunt? Iste quidem beatae neque minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae maxime reiciendis at? Possimus consequuntur at deserunt optio veniam veritatis earum repellat aliquam neque ipsum unde minima sit odio, eaque assumenda.
          Illum suscipit est quae cumque deserunt, dolor saepe ipsa? A consectetur minus laboriosam exercitationem sequi veniam molestiae sint quasi deserunt magnam recusandae, nulla quidem provident hic nam ipsum nemo dolor?
          Unde natus amet, sed quia, assumenda veniam, maiores a debitis suscipit modi officia placeat ducimus! Magni praesentium totam, fugit voluptatum rem minima consectetur eos nobis, doloribus quasi facere ea at.
          Nulla cum facilis fuga perferendis corrupti facere earum dolorum sint autem quo, quaerat voluptatum blanditiis sapiente modi necessitatibus eius repellendus quos enim libero veniam asperiores beatae. Vel excepturi assumenda deserunt!
          Consequatur, consequuntur vero. Quibusdam sint quisquam maiores nemo recusandae! Cupiditate fuga porro exercitationem autem enim consequuntur odit, unde atque numquam, tempora dicta? Natus ad iure eaque dicta consequatur eum quos?
          Eveniet, a quas recusandae harum porro molestiae delectus perferendis, corrupti ipsum cum nesciunt ad atque, velit perspiciatis. Illum iste, quae, veritatis rerum ab, soluta veniam non magnam ea laudantium dignissimos.
          Vitae minima quaerat, id nemo reiciendis adipisci quos ducimus! Illo officia odit reprehenderit, accusantium aut, incidunt accusamus saepe aliquam, voluptatum eos nulla omnis nihil expedita obcaecati! Magni non aut tenetur!
          Esse id modi excepturi consequuntur inventore necessitatibus rem, quidem eum! Esse debitis soluta corporis a dolorum error, tenetur, libero recusandae ab laboriosam explicabo suscipit consectetur iste obcaecati necessitatibus quasi nobis?</p>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, eaque eius sit veritatis corrupti magni, adipisci minus dolor itaque fuga ab sapiente perspiciatis, harum nesciunt? Iste quidem beatae neque minima.</p>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, eaque eius sit veritatis corrupti magni, adipisci minus dolor itaque fuga ab sapiente perspiciatis, harum nesciunt? Iste quidem beatae neque minima.</p>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, eaque eius sit veritatis corrupti magni, adipisci minus dolor itaque fuga ab sapiente perspiciatis, harum nesciunt? Iste quidem beatae neque minima.</p>
        </div>
        </div>
                    
        </div>
      </div>
    </div>
</div>

    <!-- footer -->
<?php
  include_once './footer.php';
?>