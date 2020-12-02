#Exercise 6
#This script creates a minesweeper table, places the bombs and the numbers around the bombs as well

import random

num_rows=0
num_cols=0
num_bombs=0
n1=0
n2=0
n3=0

while True: #Because while True loop is infinite, the n1 will force the loop to stop after 20 wrong tries and will give to num_rows a default value of 10
    n1+=1
    try:
        num_rows=int(input("Give the number of rows (greater than 2 and less than 50)\n"))
    except ValueError:
        print("You have to give a number\n")
    else:
        if num_rows >2 and num_rows <51:
            print("The number of rows has been submitted\n")
            break
        else:
            print("The number of rows has to be between the values 3 and 50\n")            
    if (n1==20):
        num_rows=10
        print("The rows are 10 by default cause you made a lot of mistakes, you idiot!")
        break

while True: #Because while True loop is infinite, the n2 will force the loop to stop after 20 wrong tries and will give to num_cols a default value of 10
    n2+=1
    try:
        num_cols=int(input("Give the number of columns (greater than 2 and less than 50)\n"))
    except ValueError:
        print("You have to give a number\n")
    else:
        if num_cols >2 and num_cols <51:
            print("The number of columns has been submitted\n")
            break
        else:
            print("The number of columns has to be between the values 3 and 50\n")
    if (n1==20):
        num_cols=10
        print("The columns are 10 by default cause you made a lot of mistakes, you idiot!")
        break


max_bombs=num_cols*num_rows-1 #At least 1 empty box without a bomb

while True: #Because while True loop is infinite, the n3 will force the loop to stop after 20 wrong tries and will give to num_bombs a default value of 10
    n3+=1
    try:
        print ("Give the number of bombs (greater than 1 and less than",max_bombs,")")
        num_bombs=int(input(""))
    except ValueError:
        print("You have to give a number\n")
    else:
        if num_bombs > 1 and num_bombs < max_bombs:
            print("The number of bombs has been submitted\n")
            break
        else:
            print("The number of bombs has to be between the values 2 and",max_bombs,")\n")
    if (n1==20):
        num_bombs=10
        print("The bombs are 10 by default cause you made a lot of mistakes, you idiot!")
        break

#Generating all possible coordinates of the custom-made minefield and place them in the list all_coordinates
all_coordinates=[]
for r in range(0,num_rows):
    for c in range (0,num_cols):
        all_coordinates.append([r,c])


bomb_coordinates=random.sample(all_coordinates,num_bombs) #Picking as many random coordinates as the number of num_bombs that has been given by the user and placing them in the list bomb_coordinates

minefield=[[0 for i in range(num_cols)]for j in range(num_rows)] #Initializing the minefield setting all boxes to 0

for bomb_loc in bomb_coordinates: 
    (bomb_row,bomb_col)=bomb_loc #Giving a specific name to the bomb coordinates, for example (r=bomb_row,c=bomb_col) so i can reffer to them easier later
    minefield[bomb_row][bomb_col]='*' #Placing to each bomb location the symbol *

    #For each bomb, I make a matrix (like a smaller field) around the bomb. This matrix has the size of all the boxes that surround each bomb 
    row_matrix=range(bomb_row-1, bomb_row+2)
    col_matrix=range(bomb_col-1,bomb_col+2)
        
    #For the matrix of each bomb, that is in range of minefield and has no bomb in it, I add 1. This way each time i see a bomb, i add 1 to the surrounding boxes
    for i in row_matrix:
        for j in col_matrix:
            if (0<=i<num_rows and 0<=j<num_cols and minefield[i][j]!='*'):
                minefield[i][j]+=1
    
for i in range(len(minefield)):
    for j in range(len(minefield[i])):
        print(minefield[i][j], end=' | ')
    print()
            




