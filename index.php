<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<title>
    sample
</title>

<body>

    <div class="top">
        <div class="btn-group-toggle text-center" data-toggle="buttons">
            <label class="btn btn-white btn-sm">
                <input type="button" class="btn btn-info" value="Checked" autocomplete="off">
            </label>
            <p1> how we are responding covid?</p1>
        </div>
    </div>
    <?php

include 'includes/menubar.php'
?>

    <div class="bg-image-1 text-white">
        <div class="container py-5">
            <h2 class="text-capitalize text-center  h1">since 1989</h2>
            <p class="py-4 text-size-1">The about us page is often a reflection
                of the purpose and personality of the business
                and its owners or top employees.
                Finally, the page can also incorporate contact or locational
                information. One way to view the about us concept is as a
                text self-portrait or short autobiography created by a
                business.</p>
            <div class="text-center" data-toggle="buttons">

                <input type="button" autocomplete="off" value="Show" class="btn btn-primary">

            </div>
        </div>
    </div>
    <div class="container py-5 input-style">
        <section>
            <div class="row">
            <div class="col-6">
        <label for="vol">Volume:</label>
        <input type="range" id="vol" name="vol" min="0" max="50"></div>

           <div id="log"> <?php
            include 'login.php'
            ?>
</div>
        <div class="col-6">
            
</section>
    </div>

    <section class="bg-white container py-5">
        <div class="row">
            <div class="col-6">
                <p>Ways to support</p>
                <h2>Support Acme Outdoors.</h2>
            </div>

            <div class="col-6">

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci numquam deleniti voluptates rerum
                    necessitatibus corporis qui aspernatur quasi accusamus nobis iure provident, quas ratione fuga,
                    voluptate autem excepturi ex quae!</p>
            </div>
        </div>


        <div class="row py-4 my-3">
            <div class="col-4">
                <div class="card" style="width: 18rem;" id="img1">
                    <img class="card-img-top c-img" src="bg4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-primary" onclick="removeElement()">Go somewhere</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;" id="img2">
                    <img class="card-img-top c-img" src="bg5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-primary" onclick="changeVisibility()">Go somewhere</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top c-img" src="bg3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="btn btn-primary" onclick="resetBack()">Go somewhere</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-img-4 py-5">
        <div class="container text-right text-light">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <h2>How we are keeping you safe during covid 19</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eius nisi nesciunt distinctio
                        perferendis quae deserunt similique nulla odit doloremque alias quod nemo sunt iure, sint
                        aperiam minus? Voluptatum, quasi?</p>
                    <button class="btn btn-primary">More Details</button>

                </div>
            </div>
        </div>
    </section>

    <div class="approch py-3 px-3">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. A perspiciatis asperiores alias
                            facere! Quia quibusdam dolor velit perspiciatis labore doloremque? Voluptas ea alias et ad,
                            aliquam veniam eligendi dolor quasi!
                            Some placeholder content for the first accordion panel. This panel is shown by default,
                            thanks to the class.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quo, harum asperiores
                            consequuntur natus debitis voluptatum? Aliquid quod totam placeat harum explicabo obcaecati
                            dicta, fuga cupiditate enim nisi accusantium vitae.
                            Some placeholder content for the second accordion panel. This panel is hidden by default.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </button>
                        </h2>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam sit voluptate tempora
                            officia expedita natus, aut sunt obcaecati minima, ipsa hic eius harum cumque quidem
                            deserunt facere non. Amet, dolorum.
                            And lastly, the placeholder content for the third and final accordion panel. This panel is
                            hidden by default.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <section>
        <div class="container">
            <div class="row">
                <div class="padding">
                    <div class=" padding col-6"><img src="bg1.jpg" class="rounded mx-auto d-block" alt="image loading">
                    </div>
                </div>
                <div class="col-6 py-5 px-5">

                <form action = "post.php" method = "post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="no">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="texta"></textarea>
                        </div>
                        <button type="submit" name="submita" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                    </form>
                    
                </div>

            </div>

        </div>
    </section>

    <blockquote class="blockquote">
        <footer class="blockquote-footer container py-4">
            <h3>Varsha Kakumanu</h3>
        </footer>
    </blockquote>


    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
    function removeElement() {
        document.getElementById("img1").style.display = "none";
    }

    function changeVisibility() {
        document.getElementById("img2").style.visibility = "hidden";
    }

    function resetBack() {
        document.getElementById("img1").style.display = "block";
        document.getElementById("img2").style.visibility = "visible";
    }
    </script>
</body>

</html>