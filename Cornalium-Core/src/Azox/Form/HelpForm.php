<?php

namespace Azox\Form;

declare(strict_types=1);

use pocketmine\player\Player;
use TheStepKla\FormAPI\SimpleForm;
use pocketmine\Server;
use pocketmine\world\Position;

class HelpForm {

    public static function Form(Player $player): void {
        $form = new SimpleForm(function (Player $player, ?int $data) {
            if ($data === null) {
                return;
            }
            switch ($data) {
                case 0:
                    $player->sendMessage("§aPour acceder au wiki rejoigné discord.gg/cornalium");
                    break;
                case 1:
                    $player->sendMessage("§vVoici le lien du discord");
                    $player->sendMessage("discord.gg/cornalium");
                    break;
                case 2:
                    $player->sendMessage("§vVoici la liste des items disponible sur le serveur");
                    $player->sendMessage("§aEggTrap\nSpike");
                    break;
            }
        });
        $form->setTitle("§2-§9- aide §2-§9-");
        $form->addButton("wiki");
        $form->addButton("Discord");
        $form->addButton("Items");
        $player->sendForm($form);
    }
}
