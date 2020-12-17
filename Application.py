import tkinter as tk
import tkinter.ttk as ttk
import csv


class Application(tk.Frame):
    def __init__(self, root):
        self.root = root
        self.ui()

    def ui(self):
        self.window()
        self.treeview()
        self.filltreeview()

    def window(self):
        self.root.title("Alma Matter Bell")
        width = 500
        height = 400
        screen_width = self.root.winfo_screenwidth()
        screen_height = self.root.winfo_screenheight()
        x = (screen_width/2) - (width/2)
        y = (screen_height/2) - (height/2)
        self.root.geometry("%dx%d+%d+%d" % (width, height, x, y))
        self.root.resizable(0, 0)

    def treeview(self):
        TableMargin = ttk.Frame(self.root, width=500)
        TableMargin.pack(side="top")
        scrollbarx = ttk.Scrollbar(TableMargin, orient="horizontal")
        scrollbary = ttk.Scrollbar(TableMargin, orient="vertical")
        tree = ttk.Treeview(TableMargin, columns=("Description", "Time", "Days", "Tune"), height=400,
                            selectmode="extended", yscrollcommand=scrollbary.set, xscrollcommand=scrollbarx.set)
        scrollbary.config(command=tree.yview)
        scrollbary.pack(side="right", fill=tk.Y)
        scrollbarx.config(command=tree.xview)
        scrollbarx.pack(side="bottom", fill=tk.X)
        tree.heading('Description', text="Description", anchor=tk.W)
        tree.heading('Time', text="Time", anchor=tk.W)
        tree.heading('Days', text="Days", anchor=tk.W)
        tree.heading('Tune', text="Alarm Tune", anchor=tk.W)
        tree.column('#0', stretch="no", minwidth=0, width=0)
        tree.column('#1', stretch="no", minwidth=0, width=200)
        tree.column('#2', stretch="no", minwidth=0, width=200)
        tree.column('#3', stretch="no", minwidth=0, width=300)
        tree.pack()
        self.tree = tree

    def filltreeview(self):
        timetable = []
        with open('timetable.csv', 'rt') as csvfile:
            reader = csv.reader(csvfile, delimiter=',', quotechar='|')
            for row in reader:
                timetable.append(row)

        for row in timetable:
            self.tree.insert('', 'end', text='hey',
                             value=row)

    def cleartreeview(self):
        print('clear tree')
        print('tree clear')


if __name__ == "__main__":
    app = Application(tk.Tk())
    app.root.mainloop()
