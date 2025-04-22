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

    public function execute(CommandSender $sender, string $commandLabel, array $args) {

        if ($sender instanceof Player) {

            if (isset($args[0])) {

                $player = Server::getInstance()->getPlayerByPrefix($args[0]);

                if ($player instanceof Player) {

                    $name = $player->getName();
                    $ping = $player->getNetworkSession()->getPing();
                    if($ping < 100){
                        $ping = "§9{$ping}";
                    }
                    if($ping >= 100 and $ping < 500){
                        $ping = "§7{$ping}";
                    }
                    if($ping >= 500){
                        $ping = "§c{$ping}";
                    }

                    $sender->sendMessage("§aLe joueur {$name} possède {$ping}ms");

                } else {
                }

            } else {

                $ping = $sender->getNetworkSession()->getPing();
                if($ping < 100){
                    $ping = "§9{$ping}";
                }
                if($ping >= 100 and $ping < 500){
                    $ping = "§7{$ping}";
                }
                if($ping >= 500){
                    $ping = "§c{$ping}";
                }

                $sender->sendMessage("§aVous avez {$ping}ms");

            }
        } else {
        }
    }
}
