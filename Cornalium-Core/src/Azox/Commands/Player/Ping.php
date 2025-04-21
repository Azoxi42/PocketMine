<?php

namespace Azox\Commands\Player;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\permission\DefaultPermissions;
use pocketmine\player\Player;
use pocketmine\Server;

class Ping extends Command {
    public function __construct() {
        parent::__construct("ping", "Voir le ping d'un joueur", "/ping");
        $this->setPermission(DefaultPermissions::ROOT_USER);
    }

    

}