<?php 

namespace Azox;

use pocketmine\plugin\PluginBase;
use Azox\Task\TimeTask;

class Main extends PluginBase {

  public function onEnable(): void {

    $this->getLogger()->info("CornaliumCore activé");
    $this->saveDefaultConfig();
    $this->getScheduler()->scheduleRepeatingTask(new TimeTask(), 20 * 60);
    


  }
    public function onDisable(): void {

        $this->getLogger()->info("CornaliumCore desaactivé");
        
 }




}