<?php

namespace ImNotYourDev\PGToDiscord;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class EventListener implements Listener
{
    /**
     * @param PlayerChatEvent $event
     * send messages to discord
     */
    public function onChat(PlayerChatEvent $event)
    {
        if(PGTD::getInstance()->settings["enabled"]){
            $data = array("user" => $event->getPlayer()->getName(), "message" => $event->getMessage());
            PGTD::getInstance()->sendMessage($data);
        }
    }

   
}