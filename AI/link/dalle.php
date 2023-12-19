<?php
    include 'config.php';

    if (isset($_POST['post_comment'])) {

        $name = $_POST['name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comment5 (name, message)
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
    <link href="../css2/main2.css" rel="stylesheet" />
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

            <ol>
                <ul>Copy.ai is an AI-powered content generator that helps you create high-quality content for various
                    use cases,<br>including:<br></ul>
                <br>
                <ul type="circle">
                    <li>Blog Writers: Write blogs 10x faster</li>
                    <li>Social Media Managers: Write higher converting posts</li>
                    <li>Email Marketers: Write more engaging emails</li>
                </ul>
                

            </ol>


            <br>
            <br>
            <ol>
                <ul>
                    Features:<br>
                </ul>
                <ul type="circle">
                    <li>Over 90 tools and templates</li>
                    <li>Write in 29+ languages</li>
                    <li>7,000,000+ professionals and teams using the platform</li>
                    <li>Free account with 2,000 free words per month</li>
                </ul>
            </ol>
            <br>
            <br>
            <ol>
                <ul>Use Cases:<br></ul>
                <ul type="circle">
                    <li>Blog Content</li>
                    <li>Sales Copy</li>
                    <li>Digital Ad Copy</li>
                    <li>Social Media Content</li>
                    <li>eCommerce Copy</li>
                    <li>Website Copy</li>

                </ul>
            </ol>
            <br>
            <br>
            <ol>
                <ul><b>Testimonials:</b></ul>
                <ul type="circle">
                    <li>Users praise the platform for its ease of use, time-saving capabilities, and high-quality
                        content generation.</li>
                    <li>The "First Draft Wizard" and Freestyle tool are highlighted as game-changers in content
                        creation.</li>
                </ul>
            </ol>
            <br>
            <br>

            <ol>
                <ul>
                    <b>How it works:</b>
                </ul>
                <ul type="circle">
                    <li>Enter your copywriting project (emails, social posts, long-form blog posts, etc.)</li>
                    <li>Give Copy.ai a bit of context about your brand and products.</li>
                    <li>Sift through the AI-generated results.</li>
                    <li>Edit, polish, and publish the content using Copy.ai's editor.</li>
                </ul>
            </ol>

        </span>
        <div class="v40_6"><span class="v31_413">YouTube Review</span><span class="v31_418">YouTube Tutorial</span>
            <div class="v31_414"onclick="location.href='https://youtu.be/5tf-esY1IGE'"></div>
            <div class="v31_415"onclick="location.href='https://www.youtube.com/watch?v=nYqeHIRKboM'"></div>
        </div>
        <div class="v31_392"></div>
        <div class="v40_4">
            <div class="v40_3"><span class="v31_409">DALLE</span><span class="v31_410">Product Information</span>
                    <div class="v31_420"></div>
                </div>
                
            </div>
            <div class="v31_408"></div>
        </div>
        <div class="v40_5"><span class="v31_427">What do you think about DALLE ?</span>
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
                    $sql = "SELECT * FROM comment5";
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