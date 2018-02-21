import datetime
import matplotlib.pyplot as plt; plt.rcdefaults()
import numpy as np
import matplotlib.pyplot as plt
import requests

# Declare our filenames
combat_log = 'WoWCombatLog.txt'
chat_log = 'WoWChatLog.txt'
inventory = 'SideQuestInventory.txt'

# Declare our url for our php api
url = "http://tbrooks.create.stedwards.edu/SideQuest/API.php"

# Declare player id
player_id = "1"

inventory = getInventory()

# format of dict to send kills over
parameters = {'action':'takeKills', 'mobName':'', 'mobKills':0}

for thing in inventory:
    parameters['mobName'] = thing.key()
    parameters['mobKills'] = thing.value()
    r = requests.get(url = url, params = parameters)
def getInventory():
    
    # Declare strings keyphrases
    you_slayed = "You have slain "

    # Open Combat Log and attempt to read our kills
    combat_file = open(combat_log, "r")
    # print(combat_file.read())
    for line in combat_file:
        line_parts = line.split("  ")
        if you_slayed not in line_parts[1]:
            continue
        else:
            # print(line_parts)
            temp = ""
            unit_name = ""
            for char in line_parts[1]:
                if (char == "!"):
                    break
                if (temp == you_slayed):
                    unit_name += char
                else:
                    temp += char
            if unit_name in inventory:
                new_value = inventory[unit_name] + 1
                inventory[unit_name] = new_value

            else:
                inventory[unit_name] = 1
            # print(unit_name)
    combat_file.close();
    # print("---done consuming---")
    print(inventory)
    return inventory
