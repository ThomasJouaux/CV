<?php include "header.php"; ?>
<link href="..\assets\css\style.css" rel="stylesheet">

<body>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-3 card_Left" id="card_Left">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">A propos : </h5>
                        <img src="..." class="card-img-top" alt="...">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item card_item">Nom : Jouaux</li>
                        <li class="list-group-item card_item">Prénom : Thomas</li>
                        <li class="list-group-item card_item">Age :
                        <?php
                            $date_Naissance = "17-05-1999";
                            $date_Jour = date("Y-m-d");
                            $diff = date_diff(date_create($date_Naissance), date_create($date_Jour));
                            echo $diff->format('%y') . ' ans';
                            ?></li>
                        

                        <li class="list-group-item card_item">Passionné par l'informatique et les jeux vidéos depuis l'enfance , j'ai également pratiqué du rugby en club durant 6 ans ainsi que d'autres sports collectif

                        </li>
                        
                    </ul>
                </div>
                </div>
                <div class="card col-12 col-md-9 card_Info">
                    <div class="card-body">
                        <h5 class="card-title text-center">Informations</h5>
                        <hr>
                        <div class="row text-center premier_Block_Information col-12">
                            <p class="card-text col-12 col-lg-2  info_gauche" >Nom :</p>
                            <p class="card-text col-12 col-lg-1" id="info_Droite">Jouaux</p>
                            <p class="card-text col-12 col-lg-2 info_gauche" >Prenom :</p>
                            <p class="card-text col-12 col-lg-1" id="info_Droite_Prenom">Thomas</p>
                            <p class="card-text col-12 col-lg-2 info_gauche" >Localisation :</p>
                            <p class="card-text col-12 col-lg-1" id="info_Droite_Pays">France / Hauts de France</p>
                        </div>
                        
                        <div class="row text-center col-12" id="deuxieme_Block_Information">
                            <p class="card-text col-12 col-lg-2 info_gauche" >Langues :</p>
                            <p class="card-text col-12 col-lg-1" id="info_Droite">Anglais / Francais</p>
                            <p class="card-text col-12 col-lg-2 info_gauche" >E-mail :</p>
                            <p class="card-text col-12 col-lg-3" id="info_Mail">Thomasjouau@gmail.com</p>
                            <p class="card-text col-12 col-lg-2" id="info_Tel">Télephone :</p>
                            <p class="card-text col-12 col-lg-2" id="info_tel">06.29.37.72.65</p>
                        </div>
                        <hr>
                       <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores accusamus, aut nam ut dolore enim, architecto libero nostrum veniam laborum, excepturi nihil qui repudiandae non reprehenderit corporis ipsa! Natus, maiores!</span>
                       <span>Eaque adipisci reiciendis unde aliquam! Vel deserunt, at nisi voluptas natus optio, ab expedita error doloremque in laboriosam, temporibus modi. Molestiae ipsum sit laboriosam. Pariatur necessitatibus omnis optio atque eaque?</span>
                       <span>Tempora debitis, quidem perspiciatis molestias totam voluptatibus tempore reiciendis autem facere temporibus repellat accusantium quasi dignissimos rem numquam, optio provident unde nemo qui. Facilis officiis architecto voluptatum obcaecati iure maiores?</span>
                       <span>Animi, dolore officia adipisci magnam ea quos quia amet eum possimus explicabo tempora atque incidunt? Odit molestiae corporis architecto rerum sunt deleniti quidem, pariatur magni facilis neque iure unde quam.</span>
                       <span>Corporis nobis architecto nulla officia incidunt dicta quasi iste adipisci sint, nisi magnam. Mollitia veritatis unde molestias sit minima. Numquam quisquam doloremque quis totam reiciendis corporis perferendis aliquam minus in!</span>
                       <span>Nesciunt ex sequi eum veritatis soluta voluptatum eveniet porro perspiciatis laborum qui accusamus nisi doloribus beatae omnis, voluptas ullam deserunt cum necessitatibus? Odio fuga doloremque molestias voluptatum consequatur voluptates ducimus?</span>
                       <span>Nobis error perferendis veritatis illum excepturi? Vero, consectetur soluta. Beatae hic doloribus, deleniti quasi minima, blanditiis ab facilis, ratione earum tempora aspernatur harum enim nulla at laudantium. In, placeat tempore?</span>
                       <span>Minima repellat distinctio odio impedit reprehenderit sequi optio. Fuga illo maxime quas voluptas repellat perferendis totam laborum laudantium reprehenderit! Facere maiores consequuntur distinctio doloremque iusto consectetur facilis minima deleniti commodi.</span>
                       <span>Vero totam perferendis eum ut adipisci quo laborum ad repellat ducimus aperiam nostrum nesciunt quam saepe, reiciendis, libero aliquid nobis, quos soluta. Id, libero inventore? Distinctio modi adipisci reprehenderit quidem!</span>
                       <span>Aspernatur repellat repellendus minima ut, facere dolorem similique animi voluptatum ea recusandae perspiciatis cumque repudiandae at blanditiis ducimus optio illum nisi porro iusto omnis laborum itaque ullam! Nesciunt, quos voluptate!</span>
                       <span>Facilis earum error cum pariatur facere ipsam laboriosam, quae deleniti harum labore, sint voluptas sit voluptatum quos similique commodi soluta perspiciatis! Sed, commodi perspiciatis? Non quas eaque ad odio consequuntur!</span>
                       <span>Qui exercitationem neque culpa fuga veritatis voluptas nisi corporis nesciunt aspernatur magni voluptatum blanditiis minus pariatur accusantium autem, quo quaerat ad assumenda obcaecati! Quia repellendus voluptatibus, laudantium aspernatur perferendis itaque.</span>
                       <span>Laboriosam veritatis nemo inventore ut quasi illo sunt quam et! Labore laudantium quis, saepe vero pariatur asperiores harum dignissimos corrupti explicabo architecto, aperiam voluptatibus. Dolore magnam impedit voluptatem laudantium hic.</span>
                       <span>Quae libero, fugiat maxime cupiditate, velit placeat assumenda at repellendus recusandae non minima laborum consectetur aliquid a quaerat est! Incidunt et reiciendis ad odio, placeat voluptates delectus eos totam. Quasi.</span>
                    </div>
                </div>
            </div>
        </div>
   
</body>