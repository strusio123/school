f1 = open("instrukcje.txt","r")
napis = []

for line in f1:
    line = line.rstrip()
    temp = line.split(' ')
    if temp [0]=="DOPISZ":
        napis.append(temp[1])
    if temp [0]=="ZMIEN":
        napis.pop()
        napis.append(temp[1])
    if temp[0]=="USUN":
        napis.pop()
    if temp[0]=="PRZESUN":
        if temp[1]=="Z":
            napis[napis.index(temp[1])] = "A"


        else:
            Ascii = ord(temp[1]) + 1
            zmieniony = chr(Ascii)
            napis[napis.index(temp[1])] = zmieniony

print(napis)

print(len(napis))
