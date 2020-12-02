#Exercise 10
#This script receives as input a url and prints the number of line changes as well as the internal and external links

import urllib
import urllib.request
import validators

n=0
while True: #At 10 wrong tries (10 invalid urls), the url will get a default value of a page that gives the definision of an IDIOT
    n+=1
    url=input("Give a url!\n")
    if (validators.url(url)): #If input is a valid url
        response = urllib.request.urlopen(url)
        html = response.read()
        html=str(html)
        print("Your url is valid, wait until you get the number of links and line breaks!")
        break
    else:
        if (n<=3):
            print ("Please give a valid url!\n")
            continue
        elif (n<=6):
            print ("I am getting impatient,give a valid url!\n")
            continue
        elif (n<=8):
            print ("For god sake,please give a valid url!\n")
            continue
        elif (n==9):
            print ("Your last try, you better give A SIMPLE URL OR LINK CALL IT WHATEVER YOU LIKE!\n")
            continue
        else:
            print ("I inserted a valid url because you couldn't give one and I was bored, you idiot!\n")
            response = urllib.request.urlopen("https://en.wikipedia.org/wiki/Idiot")
            url="https://en.wikipedia.org/wiki/Idiot"
            html = response.read()
            html=str(html)
            break

html.replace(" ","")
br=html.count("<br>")
p=html.count ("<p>")
external_links=0
internal_links=0


for i in range (len(html)):
    if (html[i:i+4]=='href'): #When spots href
        if (html[i:i+7]=='href="#'): #Finding out whether href is about an internal or external link based of the symbol #
            internal_links+=1
        else:
            external_links+=1

print ("The html code is from the following page",url)
print ("The lane breaks from <br> were",br)
print ("The lane breaks from <p> were",p)
print ("The external links were",external_links)
print ("The internal links were",internal_links)
