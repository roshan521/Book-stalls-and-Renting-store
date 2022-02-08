
                    <div class="row justify-content-center pt--45 pt-lg--50 pt-md--55 pt-sm--35">
                        <div class="col-12">
                            <div class="product-data-tab tab-style-1">
                                <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab"
                                    role="tablist">
                                    <a class="product-data-tab__link nav-link active" id="nav-description-tab"
                                        data-toggle="tab" href="#nav-description" role="tab" aria-selected="true">
                                        <span>Description</span>
                                    </a>
                                    <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab"
                                        href="#nav-reviews" role="tab" aria-selected="true">
                                        <span>Reviews(
                                                    <?php 
                                                        include('config.php');
                                                        $query = "SELECT id FROM ratting where pid='$ii' ORDER BY id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                    ?>)
                                        
                                        </span>
                                    </a>
                                </div>
                                <div class="tab-content product-data-tab__content" id="product-tabContent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                        aria-labelledby="nav-description-tab">
                                        <div class="product-description">
                                            
                                                <?php
                                                        include('config.php');
                                                       
                                                       
                                                        $query123 = "SELECT * FROM nbook where new_id=$ii";
                                                        $query_run123 = mysqli_query($connection,$query123);
                                                        if(mysqli_num_rows($query_run123) > 0)        
                                                        {
                                                            while($row123 = mysqli_fetch_assoc($query_run123))
                                                            {
                                                                
                                                            ?>
                                                   <p class="text-muted h5"><?php  echo $row123['description'];?></p>
                                                   
                                              <?php }}?>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="nav-reviews" role="tabpanel"
                                        aria-labelledby="nav-reviews-tab">
                                        <div class="product-reviews">
                                            <h3 class="review__title">Review By User:
                                                <?php 
                                                    include('config.php');
                                                    $query = "SELECT id FROM ratting where pid='$ii' ORDER BY id";  
                                                    $query_run = mysqli_query($connection, $query);
                                                    $row = mysqli_num_rows($query_run);
                                                    echo $row;
                                                ?>
                                            
                                            </h3>
                                            <ul class="review__list">
                                                <?php
                                                    include('config.php');
                                                    $query = "SELECT * FROM ratting  where pid='$ii'";
                                                    $query_run = mysqli_query($connection, $query);
                                                    if(mysqli_num_rows($query_run) > 0)        
                                                    {
                                                        while($row = mysqli_fetch_assoc($query_run))
                                                        {
                                                        
                                                ?>
                                                <li class="review__item">
                                                    <div class="review__container">
                                                        <img src="assets/img/others/comment-icon-2.png"
                                                            alt="Review Avatar" class="review__avatar">
                                                        <div class="review__text">
                                                           

                                                            <div class="review__meta">
                                                                <strong class="review__author"><?php echo $row['name']; ?> </strong>
                                                                <span class="review__dash">-</span>
                                                                <span class="review__published-date"><?php echo $row['date'];?></span>
                                                            </div>
                                                            
                                                            <div class="clearfix"></div>
                                                            <p>
                                                                <?php for($i=1;$i<=$row['ratting'];$i++){ ?>
                                                                <span class="fa fa-star checked"></span>
                                                                <?php  }?>

                                                                <?php for($j=1;$j<=5-$row['ratting'];$j++) {?>
                                                            <span class="fa fa-star "></span>
                                                                <?php  } ?>
                                                            </p>
                                                            <p class="review__description"><?php echo $row['review']; ?></p>
                                                                   

                                                        </div>
                                                    </div>
                                                </li>
                                              <?php }}?>
                                            </ul>
                                            <div class="review-form-wrapper">
                                                <span class="reply-title"><strong>Add a review</strong></span>
                                                <form action="ins-ratting.php" class="form" method="post">
                                                    <div class="form-notes mb--20">
                                                        <p>Your email address will not be published. Required fields are
                                                            marked <span class="required">*</span></p>
                                                    </div>
                                                    
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                              
                                                            <div class="col-sm-6 mb-sm--20">
                                                                <label class="form__label" for="name">Name<span
                                                                        class="required">*</span></label>
                                                                <input type="hidden" name="pid" value="<?php echo $ii;?>">
                                                                <input type="text" name="name" id="name" 
                                                                    class="form__input" >
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="form__label" for="email">email<span
                                                                        class="required">*</span></label>
                                                                <input type="email" name="email" id="email" 
                                                                    class="form__input">
                                                            </div>
                                                         
                                                        </div>
                                                    </div>
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <label class="form__label" for="rating">Rating<span
                                                                        class="required">*</span></label>
                                                                        <fieldset class="rating">
                                                                            <input type="radio" id="star5" name="rating" value="5" />
                                                                            <label for="star5" title="Rocks!">5 stars</label>
                                                                            <input type="radio" id="star4" name="rating" value="4" />
                                                                            <label for="star4" title="Pretty good">4 stars</label>
                                                                            <input type="radio" id="star3" name="rating" value="3" />
                                                                            <label for="star3" title="Meh">3 stars</label>
                                                                            <input type="radio" id="star2" name="rating" value="2" />
                                                                            <label for="star2" title="Kinda bad">2 stars</label>
                                                                            <input type="radio" id="star1" name="rating" value="1" />
                                                                            <label for="star1" title="Sucks big time">1 star</label>
                                                                     </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <label class="form__label" for="review">Your Review<span
                                                                        class="required">*</span></label>
                                                                <textarea name="review" id="review"
                                                                    class="form__input form__input--textarea"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__group">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <input type="submit" name="savert" value="Submit"
                                                                    class="btn btn-style-1 btn-submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>