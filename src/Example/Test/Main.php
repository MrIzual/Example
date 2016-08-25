<?php
namespace Example;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;

class Main extend PluginBase implements Listener {
        public function onLoad( ) {
                $this->getLogger->info(TextFormat::BLUE . "Example Loading.");
                
        }
        
        public function onEnable( ) {
                $this->getServer( )->getPluginManager( )->registerEvents($this, $this);
                $this->getLogger( )->info(TextFormat::GREEN . "Example Enabled.");
        }
        
        public function onDisable( ){
                $this->getLogger( )->info(TextFormat::RED . "Example Disabled.")
        }
}
