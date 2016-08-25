<?php
namespace Example;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {
	
	public function onEnable( ) {
			    $this->getServer( )->getPluginManager( )->registerEvents($this, $this);
				$this->saveDefaultConfig();
		        $this->getLogger( )->info(TextFormat::GREEN . "[WindyRules]" .TextFormat::YELLOW. "Rules Enabled");
        }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "rules":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::GOLD . "♦->WindyRules<-♦");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule2"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule3"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule4"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule5"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule6"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule7"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("rule8"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("windyrules.rules")){
                    $sender->sendMessage("♦->WindyRules<-♦");
                    $sender->sendMessage("- " . $this->getConfig()->get("rule1"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule2"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule3"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule4"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule5"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule6"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule7"));
                    $sender->sendMessage("- " . $this->getConfig()->get("rule8"));
				}
                    return true;
			}
	    }
    }	  		
?>
