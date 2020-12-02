#Exercise 12 
#This script receives as input a txt file and then replaces the most common letters with the less common letters

import os.path
from os import path
import sys
import time

def bubblesorting(alph,times):
    for i in range(len(alph)-1,0,-1):
        for j in range(i):
            if times[j]<times[j+1]:
                
                temp1 = alph[j]
                alph[j] = alph[j+1]
                alph[j+1] = temp1
                
                temp2 = times[j]
                times[j] = times[j+1]
                times[j+1] = temp2


n=0
while True:
    n+=1
    file=input("Give the name of a text file with the extension .txt\n")
    if (path.exists(file)):
        if (path.isfile(file)):
            print ("Your input is an existing file!\n")
            break
        else:
            print ("Your input is a directory! Please give a text file\n")
    else:
        print ("The file doesn't exist! Please give an existing file\n")
    if (n==10):
        print ("You have made a lot of mistakes, the program will automatically close in 10 seconds")
        start=time.time()
        period=10
        while True:
            if (time.time()>start+period):
                sys.exit()
            else:
                continue


file=open("TEST.txt","r") #The previous loop ends only if the input is valid or if the user makes 10 mistakes
data=file.read() #Save file to data
file.close() 
data=str(data)

#Print the original file
print ("The original txt file is:")
print (data,"\n")

#Capitalize the text in the file
data=data.upper()

print("The capitalized txt file is:")
print (data,"\n")

#Making a list with 26 zeros. This will count how many times a letter will occur, for example if number_of_times[0]=10 that means that the letter "A" has occurred 10 times
number_of_times=[0]*26

#Creating a list of the letters of the alphabet
alphabet=[]
for i in range(65,91): #The 26 upper case letters have the ASCII codes: 65 for A, 66 for B ... 90 for Z
    alphabet.append(chr(i))

for i in range(len(data)):#For every letter of the file that is not whitespace, it will search for that letter in the alphabet list and when it finds the letter it will add 1 to the parallel quantity list: number_of_times 
    if (data[i]!=" "):
        for j in range(len(alphabet)):
            if (data[i]==alphabet[j]):
                number_of_times[j]+=1


#Removing the letters,from the list of the alphabet, that they do not exist in the txt file
start=0
end=25
while (start<=end): #If i remove a letter the number of all the letters decrease by 1. This is why end decreases by 1
    if (number_of_times[start]==0):
        number_of_times.pop(start)
        alphabet.pop(start)
        end-=1
    else:
        start+=1


bubblesorting(alphabet,number_of_times) #Sorting the list, from most common letters to less common letters. But if ,for example, letter A and letter B appear the same number of times, then the sort will be alphabetical. (A=2,B=2)

#Making a copy of the 2 lists
newalphabet=alphabet.copy()
newnumber_of_times=number_of_times.copy()

#Changing the copied lists. This is what I change: I switch the first letter with the last letter (and the times they appear on the parallel list), then the second letter with the letter that is next to the last one and so on 
for i in range(len(newalphabet)//2):
    
    temp1=newalphabet[i]
    newalphabet[i]=newalphabet[len(alphabet)-i-1]
    newalphabet[len(alphabet)-i-1]=temp1

    temp2=newnumber_of_times[i]
    newnumber_of_times[i]=newnumber_of_times[len(alphabet)-i-1]
    newnumber_of_times[len(alphabet)-i-1]=temp2

#Replacing the letters in the original file based on the copied lists. 
data=list(data) #Converting the string in to a list becasue in python strings are immutable
#Checks every position in the list data (the text in the file) and searches what letter it is. Then it replaces it with the appropriate letter in the list newalphabet (the inverted list)
for i in range(len(data)):
    for j in range(len(alphabet)):
        if (data[i]==alphabet[j] and data[i]!=" "):
            data[i]=newalphabet[j]
            break
            

          
#Make it again a string
data="".join(data)

print("The new txt file is:")
print (data,"\n")




