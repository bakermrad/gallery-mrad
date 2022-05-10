
<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

    
include_once'header.php';
?>



<head>   
     <link rel="stylesheet" href="main.css">
</head>






    <section id="upperImg" class="upperImg">
        <h2>Just Like Home.</h2>
    </section>
    <h2 class="Recommended">Recommended For You</h2>
    <div class="media-scroller snaps-inline">
        <a href="sproduct.php">
        <div class="media-element"><img src="../images/p (1).png">
            <h4>product</h4>
        </div></a>
        <a href=sproduct.php"">
        <div class="media-element"><img src="../images/p (10).png">
            <h4>product</h4>
        </div></a>
        <a href="sproduct.php">
        <div class="media-element"><img src="../images/p (11).png">
            <h4>product</h4>
        </div></a>
        <a href="sproduct.php">
        <div class="media-element"><img src="../images/p (12).png">
            <h4>product</h4>
        </div></a>
        <a href="sproduct.php">
        <div class="media-element"><img src="../images/p (13).png">
            <h4>product</h4>
        </div></a>
        <a href="sproduct.php">
        <div class="media-element"><img src="../images/p (14).png">
            <h4>product</h4>
        </div></a>
        <a href="sproduct.php">
        <div class="media-element"><img src="../images/p (15).png">
            <h4>product</h4>
        </div></a>
        <a href="sproduct.php">
        <div class="media-element"><img src="../images/p (16).png">
            <h4>product</h4>
        </div></a>
        <a href="sproduct.php">
        <div class="media-element"><img src="../images/p (13).png">
            <h4>product</h4>
        </div></a>



    </div>
    <br><br><br><br>
    <h2 class="Recommended">Our Favourite Finds
    </h2>
   <h1 id="gallery"></h1>
   <br>
   <br>
    <div  class="gallery">
        <div class="content">

            <img src="../images/p (16).png">
            <h3>couch</h3>
            <p>Lorem ipsum dolor .</p>
            <h6>$250.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>
        </div>
        <div class="content">

            <img src="../images/p (18).png">
            <h3>corner couch</h3>
            <p>Lorem ipsum dolor .</p>
            <h6>$230.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>

        </div>
        <div class="content">

            <img src="../images/p (12).png">
            <h3>chair</h3>
            <p>some details .</p>
            <h6>$7600.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>

        </div>
        <div class="content">

            <img src="../images/p (13).png">
            <h3>table</h3>
            <p>Lorem ipsum dolor .</p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>

        </div>
    </div>
    <h2 class="Recommended"> Rated Excellent By You
    </h2>
<h3 style="color: #5a0909;" >Designs and service you can trust – just ask our customers.</h3>
    <br>
    <div class="container">
       
        <div class="element">
            <a href="https://www.made.com/">
            <img src="../images/p (10).png">
            
            <h3>couch</h3>
            </a>
            <p>Lorem ipsum dolor .</p>
            <h6>$120.00</h6>    
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>
        
        </div>
        <div class="element">
            <a href="https://www.made.com/">
            <img src="../images/p (15).png">
            
            <h3>chair</h3>
            </a>
            <p>Lorem ipsum dolor .</p>
            <h6>$40.00</h6>    
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>
        
        </div>
        <div class="element">
            <a href="https://www.made.com/">
            <img src="../images/p (2).png">
            
            <h3>closet</h3>
            </a>
            <p>Lorem ipsum dolor .</p>
            <h6>$560.00</h6>    
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <button class="buy">buy Now</button>
        
        </div>
        <div class="element">
            <a href="https://www.made.com/">
            <img src="../images/p (3).png">
            
            <h3>closet</h3>
            </a>
            <p>Lorem ipsum dolor .</p>
            <h6>$100.00</h6>    
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>
        
        </div>
        <div class="element">
            <a href="https://www.made.com/">
            <img src="../images/p (4).png">
            
            <h3>table</h3>
            </a>
            <p>Lorem ipsum dolor .</p>
            <h6>$100.00</h6>    
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <button class="buy">buy Now</button>
        
        </div>
        <div class="element">
            <a href="https://www.made.com/">
            <img src="../images/p (5).png">
            
            <h3>table</h3>
            </a>
            <p>Lorem ipsum dolor .</p>
            <h6>$100.00</h6>    
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>

        </div>
        <div class="element">
            <a href="https://www.made.com/">
            <img src="../images/p (6).png">

            <h3>table</h3>
            </a>
            <p>Lorem ipsum dolor .</p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>

        </div>
        <div class="element">
            <a href="https://www.made.com/">
            <img src="../images/p (7).png">

            <h3>table</h3>
            </a>
            <p>Lorem ipsum dolor .</p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star star"></i></li>
            </ul>
            <button class="buy">buy Now</button>

        </div>


    </div>
    <br>
    <h1 id="about"></h1>
    <br>
    <br>
    <div  class="about">
    <h2>About MRAD</h2>
    <h5>We believe that great design should be available to everyone. <br> Want to know more? Scroll on...</h5>
</div>

<div class="left-right">
<div class="rightside">
<img class="talal" src="../images/about/wassim4.jpg" alt="">
</div>
<div class="leftside abouttxt">
<h5>About Us</h5>
<p >Established 62 years ago by the father Hussain Ali, Gallery Murad became a household name in the furniture sector. The legacy continues today with Wassim, his son who looks into mastering all styles of furniture carving and production. From Classic French style to modern creations the gallery has everything to offer to individuals who come searching for a unique style that reflects their own tastes.</p>
<p >By committing to deadlines and delivering high quality furniture every time, Gallery Murad established relationships of trust with clients and a reputation that is transmitted by word of mouth.</p>
</div>

</div>
<br><br><br>
<div class="left-right ">

<div class="map leftside">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.2032235674646!2d35.81691715049944!3d34.44698880417661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1521f3fd6dfa29af%3A0x3c55d7fa29d42099!2sMrad%20Gallery!5e0!3m2!1sen!2slb!4v1652070107136!5m2!1sen!2slb" width="80%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="rightside locationtext">
    <h1>OUR LOCATION</h1>
    <p>you are welcomed to visit us
        <br> on the following location:
        <br>tripoli - almina - Borsaid Street.

    </p>
</div>

</div>

<br>
<br><br>
<h2 style="padding: 20px;">Our collaboration</h2>
<div class="lowerbanner left-right" >

    <div class="leftside ">
        <h3>MRAD x Omayra Maymó</h3>
        <p>Introducing Omayra Maymó: a Spanish architect turned award-winning designer, who we’ve teamed up with for an exclusive collection. What to expect? Tubular shapes, bold colours and a dash of the unexpected.</p>
    </div>
    <div class="rightside">
    <img src="../images/about/de446033-5a17-4d36-9f28-9b597b6b9374_HP-FEATURED-CONTENT-POD-5652x3768.jpg" alt="">
</div>
</div>


<br><br><br>


<h1 id="contactform"></h1>
   <br>
   <br>
<div class="all">
    <div class="container12">
        <h1 class="contact-us">Contact Us</h1>
           
            <div class="contact-box">
                <div class="contact-left">
                    <h3>send your request</h3>
                    <form>
                        <div class="input-row">
                            <div class="input-group">
                                <label>name</label>
                                <input type="text" placeholder="baker">
                            </div>
                            <div class="input-group">
                                <label>phone</label>
                                <input type="text" placeholder="961 81-291-372">
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label>email</label>
                                <input type="email" placeholder="example@example.com">
                            </div>
                            <div class="input-group">
                                <label>subject</label>
                                <input type="text" placeholder="write here ">
                            </div>
                        </div>
                         <label>message</label>
                         <textarea rows="5" placeholder="write your message"></textarea>
    
                         <button class="submit" type="submit">Submit</button>
    
    
    
                    </form>
                </div>
                <div class="contact-right">
                    <h3>Reach us</h3>
    
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>Bakermradwork@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone </td>
                            <td>+961 81-291-372</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td>Bakermrad0</td>
                        </tr>
                    </table>
    
                </div>
            </div>
    </div>
    </div>

    <br><br><br><br>


<div class="footer">
  <!-- 1 -->
<div class="item1">
        <h3>
            About Us
        </h3>
        <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Voluptate, vitae amet. <br> Tenetur reprehenderit nihil eligendi et assumenda.</p>
</div>
<!-- 2 -->
<div class="item2">
<h3>
    privacy
</h3>
    <ul>
    <li><a href="">Career</a> </li>
    <li><a href="">About Us</a></li> 
    <li><a href="">Contact Us</a> </li> 
    <li><a href="">Services</a></li>
    </ul>

</div>

    <!-- 3 -->
<div class="item3">
        <h3>
            Questions
        </h3>
            <ul>
            <li><a href="">How can A DISCOUNT COUPON?</a></li>
            <li><a href="">What wood do you use?</a></li>
            <li><a href="">Can I ask for custem order?</a> </li>
            <li><a href="">Do you ship world wide?</a></li>
            </ul>
        
</div>
<!-- 4 -->
<div class="item4">
    <h3>
        Social Media
        <div class="socialmedia">
            <label for="">facebook</label>
            <a href=""><i class="fab fa-facebook-square"></i> </a>
          <label for="">Instagram</label>
             <a href=""><i class="fab fa-instagram"></i> 	</a> 
            <label for="">twitter</label>
           <a href=""> <i class="fab fa-twitter"></i></a>

        </div>
    </h3>
</div>
</div>

    <script src="main.js"></script>
</body>

</html>