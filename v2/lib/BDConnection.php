<?php

namespace OpenAPIServer;

use PDO;

    class BDConnection {

        public function getCon() {
            try {
                $dsn = "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_DATABASE'];
                $options = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                );
                return new PDO($dsn, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $options);
            } catch (PDOException $e){
                throw new PDOException($e);
            }
        }

        public function updateDateUser($discordid) {
            if ($discordid != null) {
                $datetime = date_create()->format('Y-m-d');
                try {
                    $dbh = $this->getCon();
                    $stmt = $dbh->prepare("update users set lastUpdate=:date where discordID=:discordid");
                    $stmt->bindParam(':date', $datetime);
                    $stmt->bindParam(':discordid', $discordid);
                    $stmt->execute();
                } catch (PDOException $e){
                }
            }
        }

        public function hasPermission($clanid, $discordid, $permission)
        {
            if (empty($clanid) || empty($discordid)) {
                return false;
            }

            try {
                $dbh = $this->getCon();
                $stmt = $dbh->prepare("select clanid, discordID, request, kickmembers, walkers, bot, diplomacy from clanpermissions where clanid=:clanid and discordID=:discordid");
                $stmt->bindParam(':clanid', $clanid);
                $stmt->bindParam(':discordid', $discordid);
                $stmt->execute();
                $results = $stmt->fetch(PDO::FETCH_ASSOC);

                if (empty($results)) {
                    return false;
                }

                if (!empty($results[$permission])) {
                    return ($results[$permission] == '1');
                } else {
                    return false;
                }
            } catch (PDOException $e){
                return false;
            }
        }

    }
?>