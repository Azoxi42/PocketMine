<?php 

naemspace Azox;

use pocketmine\plugin\PluginBase;
use Azox\Task\TimeTask;

class Main extends PluginBase {

  public function onEnable(): void {

    $this->getLogger()->info("ZyroFFA activé");
    $this->saveDefaultConfig();
    $this->getScheduler()->scheduleRepeatingTask(new TimeTask(), 20 * 60);
    


  }
    public function onDisable(): void {

        $this->getLogger()->info("ZyroFFA desaactivé");
 }




}