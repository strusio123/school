dane = []

with open('instrukcje.txt', 'r') as f:
    f = f.readlines()
    for x in f:
        x = x.split()
        dane.append(x[0])

count = 1
maxi = 0
tekst = ''
for i in range(0, len(dane) - 1):
    if dane[i] == dane[i + 1]:
        count += 1
    else:
        count = 1
    if count > maxi:
        maxi = count
        tekst = dane[i]

print(f"Rodzaj instrukcji {tekst}, długość ciągu {maxi}")
