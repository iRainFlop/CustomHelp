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
  
	public function onEnable() : void {
		$this->getLogger()->info(Main::PREFIX . "Plugin has been Enabled");
	}

	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) : bool {
		if ($sender instanceof Player) {
			switch ($cmd->getName()) {
				case "helpme factions":
					$sender->sendMessage(TextFormat::RED . TextFormat::BOLD . "- HELP -");
					$sender->sendMessage(TextFormat::YELLOW . "/f create (name) - Create your own faction");
					$sender->sendMessage(TextFormat::YELLOW . "/f accept (faction) - Accept a factions invite");
					$sender->sendMessage(TextFormat::YELLOW . "/f del - Delete your faction");
					$sender->sendMessage(TextFormat::YELLOW . "/f about (faction) - Shows factions information");
					$sender->sendMessage(TextFormat::YELLOW . "/f overclaim - Overclaims another persons claim");
					$sender->sendMessage(TextFormat::YELLOW . "/f war (faction) - Starts a war with another faction");
					$sender->sendMessage(TextFormat::YELLOW . "/f topfactions - Shows top 10 factions");
					$sender->sendMessage(TextFormat::YELLOW . "/f pf (player) - Shows players faction");
					$sender->sendMessage(TextFormat::RED . TextFormat::BOLD . "- HELP -");
					return true;
				case "helpme":
					$sender->sendMessage(TextFormat::RED . TextFormat::BOLD . "- HELP -");
					$sender->sendMessage(TextFormat::RED . "/helpme factions - Factions related commands");
					$sender->sendMessage(TextFormat::YELLOW . "/kit - List of all kits");
					$sender->sendMessage(TextFormat::YELLOW . "/gbuy - List of all gen buckets");
					$sender->sendMessage(TextFormat::YELLOW . "/warp - List of all warps");
					$sender->sendMessage(TextFormat::YELLOW . "/home - List of all of your homes");
					$sender->sendMessage(TextFormat::YELLOW . "/sethome (name) - Set a home");
					$sender->sendMessage(TextFormat::YELLOW . "/delhome (name) - Remove a home");
					$sender->sendMessage(TextFormat::YELLOW . "/wild - Teleport to a random location on the map");
					$sender->sendMessage(TextFormat::RED . TextFormat::BOLD . "- HELP -");
					return true;
			}
		} else {

		}
	}
  
	public function onDisable() : void {
		$this->getLogger()->info(Main::PREFIX . "Plugin has been Disabled");
	}
}

