<?php
declare(strict_types = 1);
namespace Help;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;
use pocketmine\item\Item;
use pocketmine\nbt\tag\ListTag;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\PluginCommand;

class Main extends PluginBase implements Listener {
	public const PREFIX = TextFormat::YELLOW . "Welcome!" . TextFormat::DARK_GRAY. " ";
  
	public function onLoad()  : void {
		$int = rand(1, 3);
		switch ($int) {
			case 1:
				$str = "FUN";
				break;
			case 2:
				$str = "EASY";
				break;
			case 3:
				$str = "SIMPLE";
		}
		$this->getLogger()->info(Main::PREFIX . "CODING IS " . $str);
	}
  
	public function onEnable() : void {
		$this->getLogger()->info(Main::PREFIX . "IDK");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
	        $this->registerCommands();
	}

                $command = explode(" ", strtolower($event->getMessage()));
                if($command[0] === "/help"){
                  $event->setCancelled(true);
                  if($command[1] === "test, test, test"){
                  if($command[2] === "test, test, test"){
        }

	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) : bool
	{
		$time = time();
		$date = date('Y-m-d');
		if ($sender instanceof Player) {
			switch ($cmd->getName()) {
				case "help":
					$sender->sendMessage(Main::PREFIX . TextFormat::RED . TextFormat::BOLD . "- HELP -");
					$sender->sendMessage(Main::PREFIX . TextFormat::RED . TextFormat::BOLD . "/f create");
					$sender->sendMessage(Main::PREFIX . TextFormat::RED . TextFormat::BOLD . "/f join");
					$sender->sendMessage(Main::PREFIX . TextFormat::RED . TextFormat::BOLD . "/f del");
					$sender->sendMessage(Main::PREFIX . TextFormat::RED . TextFormat::BOLD . "/f about");
					$sender->sendMessage(Main::PREFIX . TextFormat::RED . TextFormat::BOLD . "- HELP -");
					return true;
			}
		} else {
			//Code for console
		}
	}
  
	public function onDisable() : void {
		$this->getLogger()->info(Main::PREFIX . "Oml");
	}
}
