<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <img src="view/assets/img/discount.png" alt="">
            <h2 style="margin-top: 16px;"> Flash Sale </h2>
        </div>


        <div id="myDiv" class="container">
            <div class="card">
                <h5 class="card-header">Time To Flash Sale : </h5>
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-center w-100">
                        <div class="card" style="width: 180px;">
                            <img class="card-img-top"
                                src="view/assets/img/giày/136483014_1120761781709206_8264582522056943691_n.jpg"
                                alt="Sản phẩm 1">
                            <div class="card-body">
                                <h5 class="card-title">Sản phẩm 1</h5>
                                <p class="card-text">Mô tả sản phẩm 1</p>
                            </div>
                        </div>
                        <div class="card" style="width: 180px;">
                            <img class="card-img-top"
                                src="view/assets/img/giày/137025794_1120761928375858_1306783998200071807_n.jpg"
                                alt="Sản phẩm 2">
                            <div class="card-body">
                                <h5 class="card-title">Sản phẩm 2</h5>
                                <p class="card-text">Mô tả sản phẩm 2</p>
                            </div>
                        </div>
                        <div class="card" style="width: 180px;">
                            <img class="card-img-top"
                                src="view/assets/img/giày/137587389_1123367508115300_8019483488871276490_n.jpg"
                                alt="Sản phẩm 3">
                            <div class="card-body">
                                <h5 class="card-title">Sản phẩm 3</h5>
                                <p class="card-text">Mô tả sản phẩm 3</p>
                            </div>
                        </div>
                        <div class="card" style="width: 180px;">
                            <img class="card-img-top" src="view/assets/img/giày/anh-tui-xach-nu-dep-gia-re.jpg"
                                alt="Sản phẩm 4">
                            <div class="card-body">
                                <h5 class="card-title">Sản phẩm 4</h5>
                                <p class="card-text">Mô tả sản phẩm 4</p>
                            </div>
                        </div>
                        <div class="card" style="width: 180px;">
                            <img class="card-img-top"
                                src="view/assets/img/giày/137261585_1123364978115553_2358244192962294122_n.jpg"
                                alt="Sản phẩm 5">
                            <div class="card-body">
                                <h5 class="card-title">Sản phẩm 5</h5>
                                <p class="card-text">Mô tả sản phẩm 5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        var opacity = 0;
        var intervalID = setInterval(function() {
            opacity += 0.1;
            document.getElementById("myDiv").style.opacity = opacity;
            if (opacity >= 1) {
                clearInterval(intervalID);
            }
        }, 100);
        </script>


    </div>
</section><!-- End Services Section -->