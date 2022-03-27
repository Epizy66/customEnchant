customenchatsss

uh sponsered by piggycustomenchants i guess

If you want to create an enchanted book, use the /ce enchant command on a normal book. Afterwards, you place the item you want to enchant on top of the enchanted book. It will then enchant your item.

     * `chances.json`: Allows custom chance multipliers for any reactive enchantments.
     * `disabled-enchants`: Allows certain enchants to be disabled
     
         ```yaml
            disabled-enchants:
              - Porkified
         ```
     * `per-world-disabled-enchants`: Allows certain enchants to be disabled in specific worlds
     
         ```yaml
            per-world-disabled-enchants:
              # Disables Porkified & Volley in PlotWorld
              PlotWorld:
                - Porkified
                - Volley
              # Disables Jetpack in SurvivalWorld
              SurvivalWorld:
                - Jetpack
         ```
     * `world-damage`: Toggles world damage for explosive enchantments

## Commands
| Command                  | Description                                     | Permissions                              | Aliases       |
|--------------------------|-------------------------------------------------|------------------------------------------|---------------|
| `/customenchant`         | Main command for CustomEnchants            | `customenchants.command.ce`         | `/ce`         |
| `/customenchant about`   | Shows version and author information            | `customenchants.command.ce.about`   | `/ce about`   |
| `/customenchant enchant` | Command to enchant an item with custom enchants | `customenchants.command.ce.enchant` | `/ce enchant` |
| `/customenchant help`    | Lists all CustomEnchant commands           | `customenchants.command.ce.help`    | `/ce help`    |
| `/customenchant info`    | Gives information on a custom enchant           | `customenchants.command.ce.info`    | `/ce info`    |
| `/customenchant list`    | Lists all CustomEnchants enchants          | `customenchants.command.ce.list`    | `/ce list`    |
| `/customenchant nbt`     | Outputs the NBT of the held item                | `customenchants.command.ce.nbt`     | `/ce nbt`     |
| `/customenchant remove`  | Removes a custom enchant from the held item     | `customenchants.command.ce.remove`  | `/ce remove`  |

## Permissions
| Permissions                              | Description                                                         | Default |
|------------------------------------------|---------------------------------------------------------------------|---------|
| `customenchants`                    | Allows usage of all CustomEnchants features                    | `op`    |
| `customenchants.command`            | Allow usage of all CustomEnchants commands                     | `op`    |
| `customenchants.command.ce`         | Allow usage of the /customenchant command                           | `op`    |
| `customenchants.command.ce.about`   | Allow usage of the /customenchant about subcommand                  | `true`  |
| `customenchants.command.ce.enchant` | Allow usage of the /customenchant enchant subcommand                | `op`    |
| `customenchants.command.ce.help`    | Allow usage of the /customenchant help subcommand                   | `true`  |
| `customenchants.command.ce.info`    | Allow usage of the /customenchant info subcommand                   | `true`  |
| `customenchants.command.ce.list`    | Allow usage of the /customenchant list subcommand                   | `true`  |
| `customenchants.command.ce.nbt`     | Allow usage of the /customenchant nbt subcommand                    | `true`  |
| `customenchants.command.ce.remove`  | Allow usage of the /customenchant remove subcommand                 | `op`    |
| `customenchants.overridecheck`      | Allow overriding of custom enchant level limit and item restriction | `false` |
