
<?php

namespace EnterTainerSK\xyz;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;


class xyz extends PluginBase {

	public function onEnable(){
	$this->getLogger()->info("XYZ - ENABLED!");
		return true;
	}
	

	public function onLoad(){
		$this->getLogger()->info("XYZ - LOADED!");
	}
	

	public function onCommand(CommandSender $sender, Command $command, $label, array $args): bool {
		switch($command->getName()){
			case "xyz":
				if($sender instanceof Player){
					$playerX = $sender->getX();
                	$playerY = $sender->getY();
                	$playerZ = $sender->getZ();

                	$outX=round($playerX,1);
                	$outY=round($playerY,1);
                	$outZ=round($playerZ,1);

                	$playerLevel = $sender->getLevel()->getName();

                	$sender->sendMessage("§aX:§e" . $outX . " §aY:§e" . $outY . " §aZ:§e" . $outZ . " §aWorld:§e " . $playerLevel);
					return true;
				}

				else{
					$sender->sendMessage("§cYou must be a in game!");
            }
		}
	}    

	
    public function onDisable(){
        $this->getLogger()->info("XYZ - DISABLED!");
        return true;
	}
}
