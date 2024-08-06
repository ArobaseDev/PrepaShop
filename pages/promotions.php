    <!-- ***** Main Banner Area Start ***** -->
    <?php  $products = getProductsByPromotion();?>
    <div class="page-heading" id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-content">
              <h2>
                Nos promotions
              </h2>
              <span>Un large gamme de produits à prix attractif</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h2>Les bons plans du moment</h2>
              <span>Retrouvez les bonnes affaires ici.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <?php 
         
     //     myVarDump($products); 

          foreach ($products as $product) : ?>
          <div class="col-lg-4">
            <div class="item">
              <div class="thumb img-product">
                <div class="hover-content ">
                  <ul>
                    <li><a href="index.php?page=product&id=<? echo htmlspecialchars($product['id'] );?>"><i
                          class="fa fa-eye"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                </div>
                <img src=<? echo htmlspecialchars($product["image"]) ;?> alt="" class=" img-zoom-effect">
              </div>
              <div class="down-content">
                <h4>
                  <?  echo htmlspecialchars($product["designation"]) ;?>
                </h4>
                <span>€
                  <?  echo htmlspecialchars($product["prix"]) ;?>
                </span>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <?php endforeach ?>

          <div class="col-lg-12">
            <div class="pagination">
              <ul>
                <li>
                  <a href="#">1</a>
                </li>
                <li class="active">
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li>
                  <a href="#">4</a>
                </li>
                <li>
                  <a href="#">></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>