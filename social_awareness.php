<?php
include("header.php");
?>

<style>
    .border-button1 a {
        display: inline-block !important;
        padding: 10px 20px !important;
        color: #ffff !important;
        border: 1px solid #ff0000;
        text-transform: capitalize;
        font-size: 15px;
        display: inline-block;
        background-color: #ff0000;
        border-radius: 23px;
        font-weight: 500 !important;
        letter-spacing: 0.3px !important;
        transition: all .5s;
    }

</style>


<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4><em>Social </em> Awareness</h4>
                    <img src="assets/images/heading-line-dec.png" alt="">
                    <p>Fostering understanding and empathy, for individuals through engaging content and community support.</p>
                </div>
            </div>
            <?php
            include("connection.php");
            $sel = "select * from social_awareness";
            $res = mysqli_query($con, $sel);
            $i = 1;
            while ($row = mysqli_fetch_array($res)) {
                ?>
                <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price"></span>
                        <h4><?php echo $row['title']; ?></h4>
                        <div class="icon" style="border-radius: 30px; overflow: hidden;">
                            <video width="100%" height="100%" controls
                                   style="border: 10px solid #D5EEFF; border-radius: 30px;"
                                   class="video-player">
                                <source src="admin/social_awareness/uploads/<?php echo $row['video']; ?>"
                                        type="video/mp4">
                            </video>
                        </div>
                        <br><br>
                    </div>

                </div>
                <?php
                $i++;
            }
            ?>

        </div>
    </div>
</div>

<script>
    var videos = document.querySelectorAll('.video-player');

    videos.forEach(function (video) {
        video.addEventListener('play', function (event) {
            pauseAllOtherVideos(video);
        });
    });

    function pauseAllOtherVideos(currentVideo) {
        videos.forEach(function (video) {
            if (video !== currentVideo) {
                video.pause();
            }
        });
    }
</script>

<?php
include("footer.php");
?>
