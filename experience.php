<html>
<?php include 'header.php'; ?>
<link href="..\assets\css\style.css" rel="stylesheet">

<body>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">

                <div class="carousel-item active " id="text_Carou1">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat debitis aperiam itaque ratione quas nulla aspernatur, dolorum eum esse! Asperiores sunt beatae veritatis laudantium aspernatur, eos fuga neque dolorum distinctio?</p>
                    <p>Veniam explicabo natus ex at aspernatur voluptates, dolorem suscipit magni tenetur laborum fuga numquam reiciendis commodi nisi est earum consequatur laudantium corporis, ipsa facilis dolores, corrupti esse. Perferendis, ducimus voluptatibus!</p>
                    <p>Sit, tempore quam? Iusto numquam ullam corrupti atque, nam quidem suscipit laboriosam totam eum laudantium repellat facere dicta quisquam ab sed cupiditate ipsam ad est repellendus optio magnam officiis? Delectus.</p>
                    <p>Delectus et dolorem explicabo quasi nemo aut cum pariatur, vel aliquam! Delectus autem ratione hic natus praesentium esse, distinctio pariatur aliquid accusantium veritatis tempore consectetur eius, facere fugit, velit sit.</p>
                </div>
                <div class="carousel-item col-4" id="text_Carou2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit amet blanditiis, excepturi maxime corrupti optio velit? Cumque ad, impedit quos corporis fuga eveniet optio suscipit ut itaque laborum aperiam! Amet?</p>
                    <p>Amet possimus distinctio nisi ullam voluptatibus, vel autem, accusamus nemo aut ratione eligendi cupiditate. Sunt sit nostrum hic id, quisquam, eaque consequuntur dolorum ipsum veritatis mollitia impedit culpa accusantium? Ex.</p>
                    <p>Nemo dolore saepe sapiente quisquam pariatur officia maiores eius odio vel vero nesciunt quasi, quos rerum? Tenetur, unde. Sint sapiente dolorum suscipit temporibus quia quam nulla non neque consectetur aspernatur?</p>
                    <p>Quas vitae possimus blanditiis deserunt explicabo dolorum cum suscipit dignissimos sequi magnam voluptate quia, mollitia illum debitis. Saepe enim maxime dolorem magnam eos incidunt inventore quibusdam, officiis, perspiciatis tenetur blanditiis.</p>
                </div>
                <div class="carousel-item col-4" id="text_Carou3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius dignissimos sit rem error possimus recusandae, rerum soluta doloremque ducimus illo incidunt laudantium facilis voluptate dolorem expedita fugiat animi neque enim.</p>
                    <p>Autem natus doloribus dolorem necessitatibus blanditiis, quae provident fugit repellendus veritatis, commodi neque reiciendis vero consectetur facilis odit quibusdam soluta! Architecto voluptatum recusandae assumenda beatae earum maiores perferendis quis itaque!</p>
                    <p>Velit laudantium autem tempora saepe eveniet voluptatum quod distinctio provident ratione dolorem? Sint inventore eaque obcaecati omnis quos minima, iste aliquid, odit eum dolore asperiores ullam aperiam voluptatibus consectetur illum.</p>
                    <p>Doloremque aliquam ullam, natus commodi sapiente quaerat vel fugit quos aperiam excepturi tenetur veniam amet ad ea cumque rerum culpa ipsam. Nobis ex asperiores voluptatem odio eveniet maxime amet. Dolores?</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" id="bouton_Bas_Carou"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active" aria-label="Slide 2" id="bouton_Bas_Carou1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="active" aria-label="Slide 3" id="bouton_Bas_Carou2"></button>
        </div>
        <!-- Barre de progression -->

        <section>
            <div class="progressbarWrapper">
                <span id="progressBar"></span>
            </div>
            <button class="btn_Anim" onclick="move()">JavaScript</button>

        </section>
        <section>
            <div class="progressbarWrapper2">
                <span id="progressBarSql"></span>
            </div>
            <button class="btn_Anim" id="sql_button" onclick="move1()">SQL</button>
        </section>
        <section>
            <div class="progressbarWrapper2">
                <span id="progressBarSymfony"></span>
            </div>
            <button class="btn_Anim" id="symfony_button"onclick="move2()">Symfony</button>
        </section>
        <section>
            <div class="progressbarWrapper2">
                <span id="progressBarReact"></span>
            </div>
            <button class="btn_Anim" id="react_button" onclick="move3()">REACT</button>
        </section>
        <section>
            <div class="progressbarWrapper2">
                <span id="progressBarCss"></span>
            </div>
            <button class="btn_Anim" id="css_button" onclick="move4()">CSS</button>
        </section>
        <?php include 'footer.php' ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="..\assets\js\script.js"></script>

</html>