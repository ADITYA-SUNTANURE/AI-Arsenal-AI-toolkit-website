<?php
    include 'config.php';

    if (isset($_POST['post_comment'])) {

        $name = $_POST['name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comment2 (name, message)
        VALUES ('$name', '$message')";
        
        if ($conn->query($sql) === TRUE) {
          echo "";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Outfit&display=swap" rel="stylesheet" />
    <link href="../css2/midjourney.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="v29_188">
        <div class="v29_189"></div>
        <div class="v29_199"><span class="v29_200">AI Arsenal</span><span class="v29_201"></span>
        <span class="v29_204"><a style="color: white; text-decoration: none;" href="http://localhost/AI/">Home</a></span>
        </div>
        <div class="v31_363"></div><span class="v31_412">

        <p>
               <b> Midjourney</b> is an independent research lab dedicated to advancing human imaginative
                powers through <br>AI and design. Key features and advantages include:
            <br>
            <br></p>

            <ul type="circle">
                <li><b>Expert team:</b>  Comprised of experienced staff, advisors, and researchers from various prestigious<br>
                    organizations
                    <br>
                    <br></li>
                <li><b>Multidisciplinary focus:</b>  Emphasis on design, human infrastructure, and AI to enable exploration
                    of new <br>
                    thought mediums
                    <br>
                    <br></li>
                <li><b>Creative projects:</b>  A diverse portfolio ranging from realistic cityscapes to abstract art, and<br>
                    virtual
                    reality experiences.
                    <br>
                    <br>
                </li>
            </ul>

                <p><b>Use cases</b> for Midjourney involve various creative fields:</p>
                <br>
                
                <ul type="circle">
                    <li> Artists and designers seeking inspiration from AI-generated works.
                    </li>
                    <br>
                    <li>Multidisciplinary focus: Emphasis on design, human infrastructure, and AI to enable exploration
                        of new <br>
                        thought mediums.</li>
                        <br>
                    <li> Artists and designers seeking inspiration from AI-generated works.
                    </li>
                    <br>
                    <li> Researchers exploring the intersection of AI, design, and human imagination.
                    <br>    
                </li>
                <br>    
                <li> Innovators looking to push the boundaries of what is possible with AI tools.
                    </li>
                    <br>
                    </ul
                

            <p> Overall, Midjourney offers a unique platform for harnessing AI technology to create powerful,
                imaginative<br>
                works that inspire and captivate.</p>

        </span>
        <div class="v40_6"><span class="v31_413">YouTube Review</span><span class="v31_418">YouTube Tutorial</span>
            <div class="v31_414"onclick="location.href='https://www.youtube.com/watch?v=nYqeHIRKboM'"></div>
            <div class="v31_415"onclick="location.href='https://www.youtube.com/watch?v=jytmYCC5OtE'"></div>
        </div>
        <div class="v31_392"></div>
        <div class="v40_4">
            <div class="v40_3"><span class="v31_409">Midjourney</span><span class="v31_410">Product Information</span>
                    <div class="v31_420"></div>
                </div>
                
            </div>
            <div class="v31_408"></div>
        </div>
        <div class="v40_5"><span class="v31_427">What do you think about Midjourney ?</span>
            <div class="v31_429">
            
                
            </div>
            <div class="rating">
                <input type="radio" name="star" id="star1"><label for="star1"></label>
                <input type="radio" name="star" id="star2"><label for="star2"></label>
                <input type="radio" name="star" id="star3"><label for="star3"></label>
                <input type="radio" name="star" id="star4"><label for="star4"></label>
                <input type="radio" name="star" id="star5"><label for="star5"></label>
            </div>
            <span class="v31_440">Reviews</span>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>           
            <!-- COMMENT SECTION STARTS -->
            <div class="wrapper">
            <form action="" method="post" class="form">
            <input type="text" class="name" name="name" placeholder="Name">
            <br>
            <textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
            <br><br>
            <button type="submit" class="btn" name="post_comment">Comment!</button>
            </form>
            </div>
            
                <div class="content">

                <?php
                    $sql = "SELECT * FROM comment2";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                ?>
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['message']; ?></p>
                <?php  } }?>
                </div>
            
            <!-- COMMENT SECTION ENDS -->
        </div>       


        
        
        
        
    </div>
</body>

</html>