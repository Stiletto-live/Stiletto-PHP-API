SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `botconfigs` (
  `serverdiscordid` varchar(50) CHARACTER SET utf8mb3 NOT NULL DEFAULT '',
  `servername` varchar(100) CHARACTER SET utf8mb3 DEFAULT NULL,
  `botlanguaje` varchar(50) CHARACTER SET utf8mb3 DEFAULT 'EN',
  `readclanlog` tinyint(1) DEFAULT NULL,
  `automatickick` tinyint(1) DEFAULT NULL,
  `setnotreadypvp` tinyint(1) DEFAULT NULL,
  `walkeralarm` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `clanmaps` (
  `mapid` int(11) NOT NULL,
  `typemap` varchar(50) CHARACTER SET utf8mb3 NOT NULL DEFAULT '',
  `discordID` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `dateofburning` date DEFAULT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL,
  `allowedit` tinyint(1) UNSIGNED ZEROFILL NOT NULL,
  `lastUpdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `clanpermissions` (
  `clanid` int(11) NOT NULL,
  `discordID` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `request` tinyint(1) NOT NULL DEFAULT 0,
  `kickmembers` tinyint(1) NOT NULL DEFAULT 0,
  `walkers` tinyint(1) NOT NULL DEFAULT 0,
  `bot` tinyint(1) NOT NULL DEFAULT 0,
  `diplomacy` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `clanrequest` (
  `clanid` int(11) NOT NULL DEFAULT 0,
  `discordid` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `clans` (
  `clanid` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL,
  `discordid` varchar(100) CHARACTER SET utf8mb3 DEFAULT NULL,
  `leaderid` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `invitelink` varchar(10) CHARACTER SET utf8mb3 DEFAULT NULL,
  `recruitment` tinyint(1) UNSIGNED ZEROFILL DEFAULT NULL,
  `flagcolor` varchar(10) CHARACTER SET utf8mb3 DEFAULT NULL,
  `creationdate` date DEFAULT NULL,
  `symbol` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL,
  `region` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `clusters` (
  `cluster_id` int(11) NOT NULL,
  `region` varchar(10) CHARACTER SET utf8mb3 DEFAULT NULL,
  `name` varchar(30) CHARACTER SET utf8mb3 DEFAULT NULL,
  `clan_limit` int(3) DEFAULT NULL,
  `crossplay` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `diplomacy` (
  `id` int(11) NOT NULL,
  `idcreatorclan` int(11) NOT NULL DEFAULT 0,
  `idotherclan` int(11) DEFAULT NULL,
  `typed` int(11) DEFAULT NULL,
  `clanflag` varchar(10) CHARACTER SET utf8mb3 DEFAULT NULL,
  `nameotherclan` varchar(100) CHARACTER SET utf8mb3 DEFAULT NULL,
  `symbol` varchar(50) CHARACTER SET utf8mb3 DEFAULT 'C1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `recipes` (
  `recipeid` int(11) NOT NULL,
  `token` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL,
  `items` varchar(2000) CHARACTER SET utf8mb3 DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `resourcemap` (
  `resourceid` int(11) NOT NULL,
  `mapid` int(11) NOT NULL,
  `resourcetype` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `quality` int(11) DEFAULT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `token` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL,
  `description` varchar(200) CHARACTER SET utf8mb3 DEFAULT NULL,
  `lastharvested` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `trades` (
  `idtrade` int(11) NOT NULL,
  `discordid` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb3 NOT NULL DEFAULT '1',
  `resource` varchar(100) CHARACTER SET utf8mb3 DEFAULT NULL,
  `amount` int(11) UNSIGNED DEFAULT 0,
  `quality` int(11) UNSIGNED DEFAULT 0,
  `region` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL,
  `price` int(11) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `userdiscordserver` (
  `userdiscordid` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `serverdiscordid` varchar(255) CHARACTER SET utf8mb3 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `users` (
  `discordID` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `nickname` varchar(100) CHARACTER SET utf8mb3 DEFAULT NULL,
  `discordTag` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `clanid` int(11) DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `lastUpdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `walkers` (
  `walkerID` bigint(60) NOT NULL,
  `discorid` varchar(100) CHARACTER SET utf8mb3 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `ownerUser` varchar(255) CHARACTER SET utf8mb3 DEFAULT '',
  `lastUser` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `isBeingUsed` tinyint(1) DEFAULT NULL,
  `isPublic` tinyint(1) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb3 DEFAULT NULL,
  `datelastuse` date DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL,
  `walker_use` varchar(50) CHARACTER SET utf8mb3 DEFAULT NULL,
  `isReady` tinyint(1) UNSIGNED ZEROFILL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;


ALTER TABLE `botconfigs`
  ADD PRIMARY KEY (`serverdiscordid`);

ALTER TABLE `clanmaps`
  ADD PRIMARY KEY (`mapid`),
  ADD KEY `clanid` (`discordID`);

ALTER TABLE `clanpermissions`
  ADD PRIMARY KEY (`discordID`),
  ADD KEY `FK_clanpermisions_clans` (`clanid`);

ALTER TABLE `clanrequest`
  ADD KEY `discordid` (`discordid`),
  ADD KEY `clanid` (`clanid`);

ALTER TABLE `clans`
  ADD PRIMARY KEY (`clanid`),
  ADD UNIQUE KEY `discordid` (`discordid`),
  ADD KEY `FK_clans_users` (`leaderid`);

ALTER TABLE `clusters`
  ADD PRIMARY KEY (`cluster_id`);

ALTER TABLE `diplomacy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcreatorclan` (`idcreatorclan`),
  ADD KEY `idotherclan` (`idotherclan`);

ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipeid`),
  ADD UNIQUE KEY `token` (`token`);

ALTER TABLE `resourcemap`
  ADD PRIMARY KEY (`resourceid`),
  ADD KEY `mapid` (`mapid`);

ALTER TABLE `trades`
  ADD PRIMARY KEY (`idtrade`),
  ADD KEY `discordid` (`discordid`);

ALTER TABLE `userdiscordserver`
  ADD KEY `userdiscordid` (`userdiscordid`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`discordID`),
  ADD KEY `clanid` (`clanid`);

ALTER TABLE `walkers`
  ADD PRIMARY KEY (`walkerID`),
  ADD KEY `FK_walkers_botconfigs` (`discorid`);


ALTER TABLE `clanmaps`
  MODIFY `mapid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `clans`
  MODIFY `clanid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `clusters`
  MODIFY `cluster_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `diplomacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `recipes`
  MODIFY `recipeid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `resourcemap`
  MODIFY `resourceid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `trades`
  MODIFY `idtrade` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `clanmaps`
  ADD CONSTRAINT `FK_clanmaps_users` FOREIGN KEY (`discordID`) REFERENCES `users` (`discordID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `clanpermissions`
  ADD CONSTRAINT `FK_clanpermisions_clans` FOREIGN KEY (`clanid`) REFERENCES `clans` (`clanid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_clanpermisions_users` FOREIGN KEY (`discordID`) REFERENCES `users` (`discordID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `clanrequest`
  ADD CONSTRAINT `FK_clanrequest_users` FOREIGN KEY (`discordid`) REFERENCES `users` (`discordID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clanrequest_ibfk_1` FOREIGN KEY (`clanid`) REFERENCES `clans` (`clanid`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `clans`
  ADD CONSTRAINT `FK_clans_users` FOREIGN KEY (`leaderid`) REFERENCES `users` (`discordID`) ON DELETE CASCADE;

ALTER TABLE `diplomacy`
  ADD CONSTRAINT `diplomacy_ibfk_1` FOREIGN KEY (`idcreatorclan`) REFERENCES `clans` (`clanid`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `resourcemap`
  ADD CONSTRAINT `resourcemap_ibfk_1` FOREIGN KEY (`mapid`) REFERENCES `clanmaps` (`mapid`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `trades`
  ADD CONSTRAINT `FK_trades_users` FOREIGN KEY (`discordid`) REFERENCES `users` (`discordID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `userdiscordserver`
  ADD CONSTRAINT `FK_userdiscordserver_users` FOREIGN KEY (`userdiscordid`) REFERENCES `users` (`discordID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `walkers`
  ADD CONSTRAINT `FK_walkers_botconfigs` FOREIGN KEY (`discorid`) REFERENCES `botconfigs` (`serverdiscordid`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
CREATE DEFINER=`user`@`localhost` EVENT `Delete old maps` ON SCHEDULE EVERY 1 MONTH STARTS '2021-11-09 00:00:00' ENDS '2030-08-31 00:00:00' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Borra los mapas viejos' DO delete FROM clanmaps WHERE dateofburning<=curdate() AND lastupdate<=DATE_SUB(curdate(), INTERVAL 2 MONTH)$$

CREATE DEFINER=`user`@`localhost` EVENT `Delete Walkers` ON SCHEDULE EVERY 1 MONTH STARTS '2021-11-09 00:00:00' ENDS '2030-01-09 00:00:00' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Borra c' DO delete FROM walkers WHERE datelastuse<=DATE_SUB(curdate(), INTERVAL 1 MONTH)$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
