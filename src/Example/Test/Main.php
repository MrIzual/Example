<?php
namespace Example;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class Main extend PluginBase implements Listener {
        public function onEnabled( ) {
                $this->getServer( )->getPluginManager( )->registerEvents($this, $this);
                $this->getLogger( )->info(TextFormat::GREEN . ("Example Enabled.");
        }
        
        public funtion onDisable( ) {
                $this->getLogger( )->info(TextFormat::RED . ("Example Disabled.")
        }
