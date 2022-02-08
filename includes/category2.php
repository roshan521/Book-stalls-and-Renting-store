                        <div class="col-lg-3 order-lg-1 mt--30 mt-md--40" id="primary-sidebar">
                            <div class="sidebar-widget">
                                <!-- Category Widget Start -->
                                <div class="product-widget categroy-widget mb--35 mb-md--30">
                                    <h3 class="widget-title">Semester-wise</h3>
                                    <ul class="prouduct-categories product-widget__list">
                                        <li><a href="first-sem.php">First Semester</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where Sem='1' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <li><a href="second-sem.php">Second Semester</a>
                                            <span class="count">
                                             ( <?php 
                                                    include('config.php');
                                                    $query = "SELECT new_id FROM nbook  where Sem='2' ORDER BY new_id";  
                                                    $query_run = mysqli_query($connection, $query);
                                                    $row = mysqli_num_rows($query_run);
                                                    echo $row;
                                             ?>)
                                             </span>
                                        </li>
                                        <li><a href="third-sem.php">Third Semester</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where Sem='3' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <li><a href="forth-sem.php">Fourth Semester</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where Sem='4' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <li><a href="fifth-sem.php">Fifth Semester</a>
                                             <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where Sem='5' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <li><a href="sixth-sem.php">Sixth Semester</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where Sem='6' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <li><a href="seventh-sem.php">Seventh Semester</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where Sem='7' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <li><a href="eight-sem.php">Eight Semester</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where Sem='8' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Category Widget Start -->


                                


                                <!-- Product Brand Widget Start -->
                                <div class="product-widget product-widget--brand mb--40 mb-md--30">
                                    <h3 class="widget-title">Author-wise</h3>
                                    <ul class="product-widget__list">
                                        <li><a href="kec.php">KEC</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where PublicationHouse='KEC' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <li><a href="osborne.php">Osborne</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where PublicationHouse='osborne' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <li><a href="pearson.php">Pearson</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where PublicationHouse='pearson' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li>
                                        <!-- <li><a href="#">Mc Graw Hill</a>
                                            <span class="count">  
                                                ( <?php 
                                                        include('config.php');
                                                        $query = "SELECT new_id FROM nbook  where PublicationHouse='mcgraw' ORDER BY new_id";  
                                                        $query_run = mysqli_query($connection, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                        echo $row;
                                                ?>)
                                            </span>
                                        </li> -->
                                    </ul>
                                </div>
                                <!-- Product Brand Widget End -->
                                                    
                            </div>
                        </div>