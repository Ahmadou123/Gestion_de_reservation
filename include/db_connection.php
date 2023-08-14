
<?php

class Connect {

    // Fonction pour la connexion
    public static function connexion() {
        try {
            $db = new PDO('mysql:host=localhost;port=3306;dbname=travel_voyage', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {
            echo('Erreur : ' . $e->getMessage());
        }
    }

    // Fonction pour la mise à jour des données sur la base de données
    public static function miseajour($req, $params = []) {
        try {
            $db = self::connexion();
            $stmt = $db->prepare($req);
            $maj = $stmt->execute($params);
            return $maj;
        } catch (Exception $e) {
            echo('Erreur : ' . $e->getMessage());
        } finally {
            $db = null;
        }
    }

    // Fonction pour la sélection des données
    public static function selection($req, $params = []) {
        try {
            $db = self::connexion();
            $stmt = $db->prepare($req);
            $stmt->execute($params);
            return $stmt;
        } catch (Exception $e) {
            echo('Erreur : ' . $e->getMessage());
        } finally {
            $db = null;
        }
    }
}

?>
