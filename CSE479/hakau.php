<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@100;400;900&display=swap"
        rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"> -->
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo1.png" width="125px" />
                </div>
                <?php
                include('navbar.php');
                ?>
                <img src="images/menu.png" class="menu-icon" />
            </div>
        </div>
    </div>

    <!-- Profile -->
    <section class="custom-form-section" id="signin">
        <div class="profile-container">
            <!-- 1st row -->
            <div class="profile-row justify-content-center">
                <div class="col-lg-9">
                    <div class="c_title text-center">
                        <h1 class="c_h1 yellow form-title">Profile</h1>
                        <p class="c_p ash">Check and Edit you Infromation</p>
                    </div>
                </div>
            </div>
            <!-- 2nd row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="c_form">
                        <form method="POST" action="updateprofile.php" enctype="multipart/form-data">
                            <div class="row g-3 justify-content-center">
                                <!-- Image Preview -->
                                <div class="col-lg-8 col-md-8 d-flex justify-content-center align-items-center">
                                    <label for="profile-picture" class="form-label"></label>
                                    <input type="file" class="form-control" id="profile-picture" name="profile-picture"
                                        accept="image/*" style="display: none" onchange="previewImage(this);" />
                                    <div id="image-preview-wrapper">
                                        <label for="profile-picture" id="image-preview-label">
                                            <img id="image-preview" src="images/alfaz.JPG" alt="Preview your Photo" />
                                            <span id="upload-text">For Profile Image<br />Click Here</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Image Preview -->
                                <div class="col-lg-8 col-md-8">
                                    <input type="text" class="form-control c_email" placeholder="Fullname" name="name"
                                        required value="" />
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="text" class="form-control c_email" placeholder="Username"
                                        name="username" required value="" />
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="email" class="form-control c_email" placeholder="Email" name="email"
                                        required value="" />
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 container-fluid">
                                <div class="button-container">
                                    <a href="logout.php" class="profile-btn c_button alt-button"
                                        style="margin-top: 5rem">Logout</a>
                                    <a href="password_page.php" class="profile-btn c_button alt-button"
                                        style="margin-top: 5rem">Change Password</a>
                                    <button type="submit" class="profile-btn c_button" style="margin-top: 5rem">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------- Footer----------------->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Address</h3>
                    <p>
                        Ma Nur Traders <br />
                        Birol, Dinajpur <br />
                        Email: manurtraders@gmail.com <br />
                        Mobile: 01310226757
                    </p>
                </div>

                <div class="footer-col-2">
                    <img src="images/logo.png" alt="" />
                    <p>Our goal is to connect the farmers and industries</p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Contact Admin</li>
                        <li>Helpline</li>
                        <li>Return Policy</li>
                        <li>Join the Family</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <div class="social_media">
                        <h3>Follow Us</h3>
                        <ul>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">linkedin</a></li>
                            <li><a href="">Twitter</a></li>
                            <li><a href="">YouTube</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr />
            <p class="copyright">Copyright-2023 - Alfaz Akash</p>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/54d680c585.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('load', function () {
            var profilePhotoUrl = "<?php echo $profile_photo; ?>";
            var imagePreview = document.getElementById('image-preview');
            var uploadText = document.getElementById('upload-text');
            imagePreview.src = profilePhotoUrl;
            imagePreview.style.display = 'block';
            uploadText.style.display = 'none';
        });
        function previewImage(input) {
            var imagePreview = document.getElementById('image-preview');
            var uploadText = document.getElementById('upload-text');

            if (input.files && input.files[0]) {
                var reader = new FileReader();


                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    uploadText.style.display = 'none';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.style.display = 'none';
                uploadText.style.display = 'block';
            }
        }
    </script>
</body>

</html>