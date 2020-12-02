#Exercise 7
#This script is a recreation of the game tic tac toe but the player 2 is the computer playing randomly (no AI involved)

import random
import os 
clear = lambda: os.system('cls') #Clears the screen (instead of seeing multiple tic tac toes you see 1) and works like a refresh


#Making an empty list
table=[]
for i in range (9):
    table.append(" ")

#Function that transforms the list above to a 2 dimension table
def drawtable():
    print (" ",table[0],"|",table[1],"|",table[2])
    print (" ___|___|___")
    print (" ",table[3],"|",table[4],"|",table[5])
    print (" ___|___|___")
    print (" ",table[6],"|",table[7],"|",table[8])
    print("    |   |   ")   



#Function that checks whether someone won the game or the game finished as a draw
def checkwin():
    global tic_tac_toe #Make this variable global so it can be accessed by both the function and the while loop later
    
    #Horizontal win check
    if (table[0]==table[1] and table[1]==table[2] and table[0]!=" "):
        tic_tac_toe="win"
    elif (table[3]==table[4] and table[4]==table[5] and table[3]!=" "):
        tic_tac_toe="win"
    elif (table[6]==table[7] and table[7]==table[8] and table[6]!=" "):
        tic_tac_toe="win"
    
    #Vertical win check
    elif (table[0]==table[3] and table[3]==table[6] and table[0]!=" "):
            tic_tac_toe="win"
    elif (table[1]==table[4] and table[4]==table[7] and table[1]!=" "):
            tic_tac_toe="win"
    elif (table[2]==table[5] and table[5]==table[8] and table[2]!=" "):
            tic_tac_toe="win" 

    #Diagonal win check
    elif (table[0]==table[4] and table[4]==table[8] and table[0]!=" "):
         tic_tac_toe="win"
    elif (table[2]==table[4] and table[4]==table[6] and table[2]!=" "):
         tic_tac_toe="win"

    #Draw check
    elif (table[0]!=" " and table[1]!=" " and table[2]!=" " and table[3]!=" " and table[4]!=" " and table[5]!=" " and table[6]!=" " and table[7]!=" " and table[8]!=" "):
        tic_tac_toe="draw"

#Function that checks if the position is already taken by another mark
def checkempty(c):
    if (table[c]==" "):
        return True
    else:
        return False

tic_tac_toe=0 #This means that the game is running
player= random.randrange(1,3) #Player=1 will be the human and player=2 will be the computer
while (tic_tac_toe==0): #While the game is running
    if (player==1): #If it is the human's turn
        n1=0 #Setting the n1 (emergency loop exit variable) to 0 each time the human plays 
        marking="x" #Setting the marking of the human as x
        clear()
        drawtable() #Drawing the 2d table
        #Checking if the input is appropriate (between 1-9 and in an empty position)
        while True: #Because while True loop is infinite, the n1 will force the loop to stop after 20 wrong tries and will give to a random position the value x
            n1+=1 #For each wrong value that the human enters add 1 to n1
            try:
                position=int(input("Where do you want to place your mark? (Give a number between 1 and 9)\n"))
            except ValueError:
                print("You have to give a number\n")
            else:
                if (position >0 and position <10):
                    if (checkempty(position-1)):
                        table[position-1]=marking #Placing the marking
                        player+=1 #The player is 1 so make it 2
                        last_turn="Player 1" #Saving in a variable who played last
                        break
                    else:
                        print("There is already a mark in this position, choose another one!")
                else:
                    print("The number has to be between the values 1 and 9\n")
            if (n1==20): #If the human makes 20 mistakes, his marking will be placed randomly
                r=random.randrange(9)
                while True:
                    if (checkempty(r)):
                        table[r]=marking
                        player+=1   
                        break
                    else:
                        r=random.randrange(9)
                break
    else: #Computer's turn
        marking="o" #Setting computer's mark to o
        r=random.randrange(9)
        while True: 
            if (checkempty(r)):
                table[r]=marking
                player-=1 #The player is 2 so make it 1
                last_turn="Player 2" #Saving in a variable who played last
                break
            else:
                r=random.randrange(9)
    
    checkwin() #Checking if someone won or the game ended as a draw before moving to the next repetition

   
clear ()
drawtable() #Printing the table for the last time showing who is the winner

#If the game has stopped and someone won the last player who played was the winner. If the game is a draw then tic_tac_toe is just equal to draw
if (tic_tac_toe!="draw"):
    if (last_turn=="Player 1"):
        print (last_turn, "wins!\nThat means you win!")
    else:
        print (last_turn, "wins!\nThat means the computer wins!")
else: 
    print("Draw!\nNobody wins :(")

        