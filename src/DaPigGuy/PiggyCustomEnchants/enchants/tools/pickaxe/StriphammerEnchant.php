<?php

declare(strict_types=1);

namespace DaPigGuy\PiggyCustomEnchants\enchants\tools\pickaxe;

use DaPigGuy\PiggyCustomEnchants\enchants\CustomEnchant;
use DaPigGuy\PiggyCustomEnchants\enchants\miscellaneous\RecursiveEnchant;
use pocketmine\block\Block;
use pocketmine\block\BlockLegacyIds;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Event;
use pocketmine\inventory\Inventory;
use pocketmine\item\Item;
use pocketmine\player\Player;

class StripHammer extends RecursiveEnchant
{
    public string $name = "StripHammer";
    public int $maxLevel = 1;

    public int $itemType = CustomEnchant::ITEM_TYPE_PICKAXE;

    public function getReagent(): array

    const ORES = [
        BlockLegacyIds::COAL_ORE,
        BlockLegacyIds::IRON_ORE,
        BlockLegacyIds::GOLD_ORE,
        BlockLegacyIds::DIAMOND_ORE,
        BlockLegacyIds::EMERALD_ORE
    ];


    {
        return [BlockBreakEvent::class];
    }

    public function getDefaultExtraData(): array
    {
        return ["limit" => 15];
    }

    public function safeReact(Player $player, Item $item, Inventory $inventory, int $slot, Event $event, int $level, int $stack): void
    {
        if ($event instanceof BlockBreakEvent) {
            $block = $event->getBlock();
                if ($block->getId() == SELF::ORES) {
                    $this->breakTree($block, $player);
                }
        }
    }

    public function Hammer(Block $block, Player $player, int $mined = 0): void
    {
        $item = $player->getInventory()->getItemInHand();
        for ($i = 0; $i <= 5; $i++) {
            if ($mined > $this->extraData["limit"]) {
                break;
            }
            $side = $block->getSide($i);
            if ($side->getId() !== SELF::ORES && $side->getId() !== SELF::ORES) {
                continue;
            }
            $player->getWorld()->useBreakOn($side->getPosition(), $item, $player);
            $mined++;
            $this->Hammer($side, $player, $mined);
        }
    }
}
