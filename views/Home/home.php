<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>
    <link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- <link href="//cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"> -->
<?php $this->stop() ?>

<?php $this->start("page") ?>

<div class="">
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Welcome to my book!</h6>
                        <h4>Don't judge others <br> by their appearance!</h4>
                        <p>A very important requirement for you to be effective. The highest from this book is: A strong desire, a strong determination to change, want to improve ability treat others and improve themselves.</p>
                        <a href="/books" class="filled-button">Read More</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Welcome to my book!</h6>
                        <h4>Don't feel sad, <br> enjoy life and smile</h4>
                        <p>Come on! Relax and enjoy the fun. Because it's not life that hates you, it's you who are struggling with the fatigue in life. For example, today is the deadline and suddenly the network is dropped, this morning I forgot to bring my wallet to work, or a colleague at the company said bad things about me ...</p>
                        <a href="/#about-href" class="filled-button">About Us</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Welcome to my book!</h6>
                        <h4>Hope you become <br> the version most perfect</h4>
                        <p>A strong interior is always better than a flashy exterior. Hope you are always resilient and brave to stand in the place of light and live the life you desire.</p>
                        <a href="/#contact-href" class="filled-button">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="more-info">
        <div class="container">
            <div class="row" id="tabs">
                <div class="col-md-4">
                    <ul>
                        <li><a href='#tabs-1'>The richest man in Babylon <br> <small>George S. Clason &nbsp;|&nbsp; 27.04.2022 23:10</small></a></li>
                        <li><a href='#tabs-2'>Thinking fast and slow <br> <small>Daniel Kahneman &nbsp;|&nbsp; 27.04.2022 23:10</small></a></li>
                        <li><a href='#tabs-3'>999 letters to myself <br> <small>Miêu Công Tử &nbsp;|&nbsp; 27.04.2022 23:10</small></a></li>
                    </ul>

                    <br>

                    <div class="text-center">
                        <a href="blog.html" class="filled-button">Read More</a>
                    </div>

                    <br>
                </div>

                <div class="col-md-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="/images/blog-image-1-940x460.jpg" alt="">
                            <h4><a href="blog-details.html">The most effective way to get rich book of all time.</a></h4>
                            <p>This is a meaningful gift for those who have been entering the business world, or for many people who are confused and hesitant in how to use money. In addition, this book will also be interesting and novel lessons for anyone, even the most experienced financial investor in the world.</p>
                        </article>
                        <article id='tabs-2'>
                            <img src="/images/blog-image-2-940x460.jpg" alt="">
                            <h4><a href="blog-details.html">Do you think you think fast, or slow?</a></h4>
                            <p>We often think of ourselves as humans with strong rationality, when deciding or evaluating problems, we are always thorough and rational. But the truth is, no matter how careful you are, in everyday life or in economic matters, you still make decisions based on your subjective feelings.</p>
                        </article>
                        <article id='tabs-3'>
                            <img src="/images/blog-image-3-940x460.jpg" alt="">
                            <h4><a href="blog-details.html">Letters to myself - Every day must be lived carefully</a></h4>
                            <p>Có rất nhiều bạn trẻ hiện nay cảm thấy thất vọng với con người hiện tại của chính mình. Điều đáng sợ chính là, đám đông ấy không hề bé tẹo nào. Họ giắt trên mình đôi ba điều đẹp đẽ ngủ im trong quá khứ, để rồi chấp nhận cuộc sống tù túng, nhợt nhạt, vô vị, thậm chí hoang đường đến mức không tưởng tượng được. Thuở bé ai cũng nghĩ mình sẽ thực hiện nghĩ việc lớn lao, vĩ đại nhưng càng lớn lên chúng ta càng thu bé khả năng, tự thôi miên ngủ yên trong lớp vỏ bọc lớn xác, vô dụng. Chúng ta không biết rằng mình sẽ trở thành một người vô cùng tuyệt vời nếu chấp nhận thay đổi. 
                            </p>
                        </article>
                    </section>
                </div>
            </div>


        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="more-info-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-image">
                            <img src="/images/about-1-570x350.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="right-content">
                            <span>Who we are</span>
                            <h2>Get to know <em>about us</em></h2>
                            <p>We are very pleased to serve you. If you need assistance or have questions, please do not hesitate to send us a request via our online support system. You will have all your questions answered about solutions, services and products. Our enthusiastic customer service staff will help you.</p>
                            <a href="/#about-href" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<?php $this->stop() ?>