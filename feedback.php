<?php
$con=mysqli_connect("localhost","root","","bus_travel");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

if (isset($_POST["submit"])) {
    $name = $_POST['name'];

    $fileName1 = $_FILES["image"]["name"];
    $fileTmpName1 = $_FILES["image"]["tmp_name"];

    $fileName = $_FILES["videofile"]["name"];
    $fileTmpName = $_FILES["videofile"]["tmp_name"];
    $fileType = $_FILES["videofile"]["type"];
    $fileSize = $_FILES["videofile"]["size"];
    $rating = $_POST['rating'];
    $description = $_POST['description'];
    $uploadPath = "uploads/" . $fileName;
    $uploadPath1 = "image/" . $fileName1;

    if (move_uploaded_file($fileTmpName, $uploadPath) && move_uploaded_file($fileTmpName1, $uploadPath1)) 
    {
        $sql = "INSERT INTO feedback (name,image,videofile,rating,description) VALUES ('$name','$fileName1','$fileName','$rating','$description')";
        if (mysqli_query($con, $sql)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        mysqli_close($con);
    } 
    else {
        echo "Failed to upload file.";
    }
}
?>


<?php
include('header.php');
?>

<!-- ======= Breadcrumbs ======= -->
<style>
    //** Rating Code */
    .score {
        display: block;
        font-size: 16px;
        position: relative;
        overflow: hidden;
    }

    .score-wrap {
        display: ;
        position: relative;
        height: 19px;
    }

    .score .stars-active {
        color: #EEBD01;
        position: relative;
        z-index: 10;
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
    }

    .score .stars-inactive {
        color: grey;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-text-stroke: initial;
        /* overflow: hidden; */
    }

    .score .stars-inactive button {
        border: none;
    }

    .star-rating {
        font-size: 24px;
    }

    .star-rating input[type="radio"] {
        display: none;
    }

    .star-rating label {
        float: right;
        color: #ccc;
        margin: 0 5px;
        cursor: pointer;
    }

    .star-rating input[type="radio"]:checked+label,
    .star-rating input[type="radio"]:hover+label,
    .star-rating label:hover~label {
        color: #ffc107;
    }
</style>

<div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
    <div class="container position-relative d-flex flex-column align-items-center">
        <h2>Feedback</h2>
        <ol class="justify-content-center pt-2">
            <li><a href="index.html">Home</a></li>
            <li>Feedback</li>
        </ol>
    </div>
</div>
<!-- End Breadcrumbs -->




<section class=" bg-image mt-5">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px; background-color: #fbf0f1;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Feedback</h2>

                            <form method="POST" enctype="multipart/form-data">

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                        name="name" />
                                    <label class="form-label" for="form3Example1cg">Enter Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="file" id="form3Example3cg" class="form-control form-control-lg"
                                        name="image" />
                                    <label class="form-label" for="form3Example3cg">Upload Image</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="file" id="form3Example3cg" class="form-control form-control-lg"
                                        name="videofile" />
                                    <label class="form-label" for="form3Example3cg">Upload Video</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="rating">Rating:</label>
                                    <div class="star-rating" style="margin-right:280px;">
                                        <input type="radio" id="star5" name="rating" value="5">
                                        <label for="star5">&#9733;</label>
                                        <input type="radio" id="star4" name="rating" value="4">
                                        <label for="star4">&#9733;</label>
                                        <input type="radio" id="star3" name="rating" value="3">
                                        <label for="star3">&#9733;</label>
                                        <input type="radio" id="star2" name="rating" value="2">
                                        <label for="star2">&#9733;</label>
                                        <input type="radio" id="star1" name="rating" value="1">
                                        <label for="star1">&#9733;</label>
                                    </div>
                                </div><br>
                                <div class="form-outline mb-4">
                                    <textarea name="description" class="form-control form-control-lg"></textarea>
                                    <label class="form-label" for="form3Example3cg">Description</label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <input type="submit" name="submit">
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<script>
    $(document).ready(function () {
        for (i = 1; i <= 5; i++) {
            $("#c" + i).on("click", function () {
                id = $(this).val();
                //alert(id);
                for (j = 1; j <= id; j++) {
                    document.getElementById("c" + j).style.cssText = 'background-color: yellow';
                }
                $("#rating").val(id);
            });
        }
    });
</script>
<!-- ======= Footer ======= -->


<!-- ======= Breadcrumbs ======= -->
<!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .star-rating {
            font-size: 24px;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            float: right;
            color: #ccc;
            margin: 0 5px;
            cursor: pointer;
        }

        .star-rating input[type="radio"]:checked + label,
        .star-rating input[type="radio"]:hover + label,
        .star-rating label:hover ~ label {
            color: #ffc107;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('img/banner3.png.webp'); opacity: 0.8; ">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Feedback</h2>
            <ol class="justify-content-center pt-2">
                <li><a href="index.html">Home</a></li>
                <li>Feedback</li>
            </ol>
        </div>
    </div> -->
<!-- End Breadcrumbs -->




<!-- <section class=" bg-image mt-5">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px; background-color: #fbf0f1;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Feedback</h2>

                                <form method="POST" enctype="multipart/form-data">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" />
                                        <label class="form-label" for="form3Example1cg">Enter Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="file" id="form3Example3cg" class="form-control form-control-lg" name="image" accept="image/*">
                                        <label class="form-label" for="form3Example3cg">Upload Image</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="file" id="form3Example3cg" class="form-control form-control-lg" name="videofile" accept="video/*">
                                        <label class="form-label" for="form3Example3cg">Upload Video</label>
                                    </div>

                                    <div class="form-group">
            <label for="rating">Rating:</label>
            <div class="star-rating">
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1">&#9733;</label>
            </div>
        </div>
                                    <div class="form-outline mb-4">
                                       <textarea name="description" class="form-control form-control-lg" name="description"></textarea>
                                        <label class="form-label" for="form3Example3cg">Description</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <input type="submit"
                                            name="submit">
                                    </div>

                                </form> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<br>
<script>
    $(document).ready(function(){
    for(i=1; i<=5; i++)
    {
        $("#c"+i).on("click",function()
        {
            id=$(this).val();
            //alert(id);
            for(j=1; j<=id; j++)
            {	
                document.getElementById("c"+j).style.cssText = 'background-color: yellow';
            }
            $("#rating").val(id);
        });
    }
});
</script> -->
<!-- ======= Footer ======= -->
<?php
include('footer.php');
?>