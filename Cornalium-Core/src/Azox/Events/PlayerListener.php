<?php

namespace Azox\Events;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class PlayerListener implements Listener {

    public function OnJoin(PlayerJoinEvent $ev): void {
        $player = $ev->getPlayer();
        $name = $player->getName();
        if (!$player->hasPlayedBefore()) {
            $ev->setJoinMessage("§aBienvenue sur Cornalium $name");
            
        } else {
            $ev->setJoinMessage("§a[+] $name");
        }
    }
    public function OnLeave(PlayerQuitEvent $ev): void {
        $player = $ev->getPlayer();
        $name = $player->getName();
        $ev->setQuitMessage("§c[-] $name");
    }
}