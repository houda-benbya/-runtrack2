<h2>Contact Nous</h2>
            <form class="formJob1" action="../Job01/index2.php" method="get">
                <label>Votre nom :</label>
                <input name="nom" id="nom" type="text" placeholder="Houda" />
                <label>Votre ville :</label>
                <input name="ville" id="ville" type="text" placeholder="toulon" />
                <button type="submit">Valider</button>
            </form>

            <?php
            /*************************************************************************************************

             * $name et $age initialisé en haut de la page.
             * 
             * Condition : Si $_GET est Vrai alors on exécute la condition
             */
            if (isset($_GET)) {

                $countGET = 0; // Variable Conmpteur.

                // Parcour le tableau $_GET 
                foreach ($_GET as $getElement) {
                    $countGET++; // incrémente le compteur
                }

                // Résultat
                echo "<h2>Résultat</h2>
                <p>
                   Nombre de valeurs contenu dans \$_GET :" . $countGET . "            
                </p>";
            }
            ?>
        </section>
    </main>
</body>

</html>