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
  
	public function onEnable() : void {
		$this->getLogger()->info(Main::PREFIX . "Plugin has been Enabled");
	}

	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) : bool {
		if ($sender instanceof Player) {
			switch ($cmd->getName()) {
				case "helpme":
					$sender->sendMessage(TextFormat::RED . TextFormat::BOLD . "- HELP -");
					$sender->sendMessage(TextFormat::YELLOW . TextFormat::BOLD . "/f create (name) - Create your own faction");
					$sender->sendMessage(TextFormat::YELLOW . TextFormat::BOLD . "/f accept (faction) - Accept a factions invite");
					$sender->sendMessage(TextFormat::YELLOW . TextFormat::BOLD . "/f del - Delete your faction");
					$sender->sendMessage(TextFormat::YELLOW . TextFormat::BOLD . "/f about (faction) - Shows factions information");
					$sender->sendMessage(TextFormat::YELLOW . TextFormat::BOLD . "/f overclaim - Overclaims another persons claim");
					$sender->sendMessage(TextFormat::YELLOW . TextFormat::BOLD . "/f war (faction) - Starts a war with another faction");
					$sender->sendMessage(TextFormat::YELLOW . TextFormat::BOLD . "/f topfactions - Shows top 10 factions");
					$sender->sendMessage(TextFormat::YELLOW . TextFormat::BOLD . "/f pf (player) - Shows players faction");
					$sender->sendMessage(TextFormat::RED . TextFormat::BOLD . "- HELP -");
					return true;
			}
		} else {
			//Code for console
		}
	}
  
	public function onDisable() : void {
		$this->getLogger()->info(Main::PREFIX . "Plugin has been Disabled");
	}
}
