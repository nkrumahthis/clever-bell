import os
import threading
import time
from datetime import datetime
import pyttsx3
from pygame import mixer
from pygame import error as sounderror
import csv


def initialize():
    # get current working directory
    tunes_path = "/home/pi/Desktop/alarm_tunes"

    # if no directory is present, create one
    if not os.path.isdir(tunes_path):
        print("no alarm sounds directory, creating one")
        os.makedirs(tunes_path)


def target():
    initialize()

    while True:
        os.system('clear')
        now = datetime.now()
        print("Clever Bell Running")
        print(now.strftime("%A %d-%m-%Y %H:%M "))
        localtime = datetime.now().strftime("%H:%M")
        dayofweek = datetime.now().strftime("%A")
        dateoftoday = datetime.now().strftime("%d-%m-%Y")
        timetable = readtimetable()

        print("\n-----------\n")
        print("Expected alarms today\n")

        for index in range(1, len(timetable)):
            row = timetable[index]
            # check if today is among
            try:
                if(row[2].capitalize() == "Everyday" or row[2].capitalize() == dayofweek or row[2] == dateoftoday or row[2] == ''):
                    print(row)
                    if(localtime == row[1].strip()):
                        soundalarm(*row)
            except IndexError:
                print("error in timetable.csv line", index)

        time.sleep(10)


def soundalarm(description, alarmtime, days, sound):
    engine = pyttsx3.init()

    try:
        engine.say("The time is " + alarmtime)
        engine.say("Time for " + description)
        engine.runAndWait()

        mixer.init()
        mixer.music.load("/home/pi/Desktop/alarm_tunes/" + sound.strip())
        mixer.music.play()
        time.sleep(60)

    except sounderror as errormsg:
        print(errormsg)
        engine.say(errormsg)
        engine.runAndWait()


def readtimetable():
    timetable = []
    with open('/home/pi/Desktop/timetable.csv', 'rt') as csvfile:
        reader = csv.reader(csvfile, delimiter=',', quotechar='|')
        for row in reader:
            timetable.append(row)

    return timetable


def main():
    initialize()
    mainthread = threading.Thread(target=target)
    mainthread.start()


if __name__ == "__main__":
    main()
