<?php

namespace Azox\Task;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class TimeTask extends Task {
   public function onRun(): void {
    $world = Server::getInstance()->getWorldManager()->getDefaultWorld();
    if ($world->getTime() >= 11000) {
        $world->setTime(1000);
    }
   }
}