<?php
include_once './controller/loggedin.php';
 if(loggedIn()==TRUE){?>
<div class="post-container">
                <h3 class="post-title">What's new</h3>
                <textarea class="post-txt input"></textarea>
                <input type="submit" class="btn floatRight" value="post">
                <div style="clear:both"></div>
 </div><?php } ?>
<div class="all-posts">
                
                <!----post container---->
                    <div class="post-container floatLeft">
                        <div class="user">
                            <div class="user-img floatLeft">
                                <img src="images/prof.jpg"><!-- user img-->
                            </div>
                            <div class="user_info floatLeft">
                                <p class="user-name block">Mohamed issam</p><!--user name-->
                                <p class="post-date block">12/12/2012</p> <!--date-->   
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <p class=" input">I'm tired of being what you want me to be Feeling so faithless, lost under the surface
                         Don't know what you're expecting of me</p><!--text-->
                        
                        
                        <div style="clear:both"></div>
                        
                        
                    </div>
                
                <div style="clear:both"></div>
            </div>