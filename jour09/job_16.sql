SELECT S.nom, S.id_etage, S.capacite, E.nom FROM etage E JOIN salles S ON S.capacite > (SELECT AVG(capacite) FROM salles);
