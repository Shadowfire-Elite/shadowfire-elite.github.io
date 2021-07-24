<?php include 'inc/header.php' ?>
{% include header.html%}

<main>
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div id="slider" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/imgs/farm.jpg" class="d-block w-100" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                            <img src="assets/imgs/brussel.jpg" class="d-block w-100" alt="Second Slide" />
                        </div>
                        <div class="carousel-item">
                            <img src="assets/imgs/berries.jpg" class="d-block w-100" alt="Third slide" />
                        </div>
                        <div class="carousel-item">
                            <img src="assets/imgs/pumpkin.jpg" class="d-block w-100" alt="Fourth slide" />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5" id="content">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <h1>See Our Products</h1>
                <hr class="line" />
            </div>

            <div class="row cols-auto d-flex justify-content-center text-center">
                <div class="col">
                    <h5>Produce</h5>
                    <img class="mb-4 mt-2" src="assets/imgs/fruits.jpg" alt="" />
                    <div>
                        <p>
                            We produce organic vegetable boxes that are affordable,
                            seasonal, and as fresh and local as possible.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <h5>Meat</h5>
                    <img class="mb-4 mt-2" src="assets/imgs/meat.jpg" alt="" />
                    <div>
                        <p>
                            We have different sizes of boxes available for various
                            appetites, from individuals to families.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row cols-auto d-flex justify-content-center text-center">
                <div class="col">
                    <h5>Seafood</h5>
                    <img class="mb-4 mt-2" src="assets/imgs/seafood.jpg" alt="" />
                    <div>
                        <p>
                            We are flexible with the items in your boxes. You can change
                            items in your order for something you would like.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <h5>Organics</h5>
                    <img class="mb-4 mt-2" src="assets/imgs/vegetables.jpg" alt="" />
                    <div>
                        <p>
                            There is never been a better time to eat organic. Organic
                            means working with nature. We’re coming into a fantastic time
                            for European food.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="my-5">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <h1>Customer Reviews</h1>
                    <hr class="line" />

                    <figure>
                        <div class="border border-1 border-dark w-50 mx-auto">
                            <img src="" alt="" />

                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </div>
                    </figure>

                    <iframe src="https://www.google.com/maps/reviews/@43.7677935,-79.7310719,17z/data=!3m1!4b1!4m5!14m4!1m3!1m2!1s116921958938497091197!2s0x0:0xcc698a4fc8929176" width="100%" height="790px" frameborder="0" style="border: 0"></iframe><br />Brought to you by
                    <a href="miangrocer.com" target="_blank">Mian Grocer</a>
                </div>
            </div>
        </section> -->

    <!-- src="https://goo.gl/maps/TmxBYcf9SidBn1zx8" -->
</main>

<p class="invisible">
    Delicious Ethical Sustainable Seasonal Free delivery
</p>

{% include footer.html%}
<?php include 'inc/footer.php'; ?>
