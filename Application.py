import tkinter as tk
import tkinter.ttk as ttk


class Application(tk.Frame):
    def __init__(self, root):
        self.root = root
        self.ui()

    def ui(self):
        self.root.title("Alma Matter Bell")
        width = 500
        height = 400
        screen_width = self.root.winfo_screenwidth()
        screen_height = self.root.winfo_screenheight()
        x = (screen_width/2) - (width/2)
        y = (screen_height/2) - (height/2)
        self.root.geometry("%dx%d+%d+%d" % (width, height, x, y))
        self.root.resizable(0, 0)
