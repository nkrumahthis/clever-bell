import os
import threading
import time
from datetime import datetime
from playsound import playsound
import pyttsx3
from pygame import mixer
from pygame import error as sounderror
import csv
from Application import Application


def initialize():
    # get current working directory
    path = os.getcwd()
    tunes_path = path + "/../config/alarm_tunes"

    # if no directory is present, create one
    if not os.path.isdir(tunes_path):
        print("no alarm sounds directory, creating one")
        os.makedirs(tunes_path)


def target():
    # initialize()

    while True:
        localtime = datetime.now().strftime("%H:%M")
        dayofweek = datetime.now().strftime("%A")
        dateoftoday = datetime.now().strftime("%d-%m-%Y")
        timetable = readtimetable()

        for index in range(1, len(timetable)):
            row = timetable[index]
            print("checking if today is", row[2])
            # check if today is among
            if(row[2].capitalize() == "Everyday" or row[2].capitalize() == dayofweek or row[2] == dateoftoday or row[2] == ''):
                print("today dey mong ", row)
                if(localtime == row[1].strip()):
                    soundalarm(*row)

        time.sleep(5)


def soundalarm(description, alarmtime, days, sound):
    engine = pyttsx3.init()
    engine.say("The time is " + alarmtime)
    engine.say("Time for " + description)
    engine.runAndWait()
    path = os.path.join("..", "config/alarm_tunes", sound.strip())
    # path = os.path.relpath("../config/alarm_tunes/" + sound.strip())

    try:
        mixer.init()
        mixer.music.load(path)
        mixer.music.play()
        time.sleep(60)

    except sounderror as errormsg:
        print(errormsg)
        engine.say(errormsg)
        engine.runAndWait()


def readtimetable():
    timetable = []
    path = os.path.join("..", "config", "timetable.csv")
    with open(path, 'rt') as csvfile:
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
