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
                    if($ping >= 100 and $ping < 300){
                        $ping = "§8{$ping}";
                    }
                    if($ping >= 300){
                        $ping = "§7{$ping}";
                    }

                    $sender->sendMessage(" §a{$name} possède {$ping}ms");

                } else {

                    $sender->sendMessage("§cErreur, faite /ping (nom du joueur)");

                }

            } else {

                $ping = $sender->getNetworkSession()->getPing();
                if($ping < 100){
                    $ping = "§2{$ping}";
                }
                if($ping >= 100 and $ping < 300){
                    $ping = "§6{$ping}";
                }
                if($ping >= 300){
                    $ping = "§4{$ping}";
                }

                $sender->sendMessage("§aVous avez {$ping}ms");

            }
        } else {

            

        }
    }
}
