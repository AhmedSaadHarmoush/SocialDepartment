<?php
include_once './controller/loggedin.php';
?>
<aside class="sidebar">
    <?php if(loggedIn()==TRUE){?>        
    <center>
                <div class="prof-pic section">
                    <div class="prof-pic-img">
                        <img src="images/b.jpg"><!--progile-picture-->
                    </div>
                    
                </div>
            </center>
    <?php } ?>
              
            <div class="group section">
                <h3 class="side-title">Subjects</h3>
                <div class="group-container">
                    <ul>
                        <li><a href="#">Theory Of Computation | cs220</a></li><!--group-item-->
                        <li><a href="#">Graphics | cs402</a></li>
                        <li><a href="#">C++ | cs201</a></li>
                        <li><a href="#">Java | cs202</a></li>
                        <li><a href="#">Java | cs202</a></li>
                        <li><a href="#">Java | cs202</a></li>
                        <li><a href="#">Java | cs202</a></li>
                    </ul><!--user-groupes-->
                </div>
            </div>    
        </aside>