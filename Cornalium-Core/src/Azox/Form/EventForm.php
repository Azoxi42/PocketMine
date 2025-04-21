<?php

namespace Azox\Form;

declare(strict_types=1);

use pocketmine\player\Player;
use TheStepKla\FormAPI\SimpleForm;
use pocketmine\Server;
use pocketmine\world\Position;

class EventForm {

    public static function Form(Player $player): void {
        $form = new SimpleForm(function (Player $player, ?int $data) {
            if ($data === null) {
                return;
            }

            switch ($data) {
                case 0:
                    $player->sendMessage("§aTu as été téléporté à l'outpost !");
                    $player->teleport(new Position(71, 72, -89, Server::getInstance()->getWorldManager()->getDefaultWorld()));
                    break;

                case 1:
                    $player->sendMessage("§bTu as été téléporté au Koth !");
                    $player->teleport(new Position(105, 72, 47, Server::getInstance()->getWorldManager()->getDefaultWorld()));
                    break;

                case 2:
                    $player->sendMessage("§bTu as été téléporté au Nexus !");
                    $player->teleport(new Position(-92, 72, -77, Server::getInstance()->getWorldManager()->getDefaultWorld()));
                    break;
               case 3:
                    $player->sendMessage("§bTu as été téléporté a la zone money !");
                    $player->teleport(new Position(81, 72, 0, Server::getInstance()->getWorldManager()->getDefaultWorld()));
                    break;
            }
        });

        $form->setTitle("§2-§9- Event §2-§9-");
        $form->addButton("OutPost");
        $form->addButton("Koth");
        $form->addButton("Nexus");
        $form->addButton("Afk");
        
        $player->sendForm($form);
    }
}
