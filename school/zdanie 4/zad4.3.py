import statistics

f1 = open("instrukcje.txt","r")
literki = []
licznik = 1
maksi = 1

for line in f1:
    line = line.rstrip()
    temp = line.split(' ')
    if (temp[0] == "DOPISZ"):
        literki.append(temp[1])

print(statistics.mode(literki))
print(literki.count("Z"))
