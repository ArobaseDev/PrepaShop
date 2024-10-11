    <!-- ***** Main Banner Area Start ***** -->
    <?php
              $product = getProductById($_GET["id"])
    ?>
    <div class="page-heading" id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-content">
              <h2>
                <?php  echo htmlspecialchars($product["designation"]);?>
              </h2>
              <span>Gardez un look toujours branché</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="left-images">
              <img src=" <?php 
                echo htmlspecialchars($product['image']); ?>" alt="" class="detail-img">
              <!-- 
              <img src=" <?php 
                echo htmlspecialchars($product['image_2']) ;?>" alt="">
              -->
            </div>
          </div>
          <div class="col-lg-4">
            <div class="right-content">

              <!-- <h4>
                <?php 
                echo htmlspecialchars($product["designation"]);
                ?>
              </h4> -->
              <h4>
                <?php 
                echo htmlspecialchars($product["modele"]);
                ?>
              </h4>
              <span class="price">€
                <?php 
                echo htmlspecialchars($product["prix"]);
                ?>
              </span>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>
                <?php 
                echo 'Catégorie : ' . htmlspecialchars($product["categorie"]);
                ?>
              </span>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut
                labore.</span>
              <div class="quote">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
              </div>
              <div class="quantity-content">
                <div class="left-content">
                  <h6>Quantité</h6>
                </div>
                <div class="right-content">
                  <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max=""
                      name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern=""
                      inputmode=""><input type="button" value="+" class="plus">
                  </div>
                </div>
              </div>
              <div class="total">
                <!-- <h4>Total: $210.00</h4> -->
                <div class="main-border-button"><a href="#">Ajouter au panier</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
