from mencoba import Checker

x = int(input("Masukkan angka pertama: "))
y = int(input("Masukkan angka kedua: "))

opsi = input('''
Pilih opsi :
[1] Tambah
[2] Kurang
[3] Kali
[4] Bagi
''')

if opsi == "1" :
    z = x+y
    print(f"Hasilnya adalah : {z}")
elif opsi == "2" :
    z = x-y
    print(f"Hasilnya adalah : {z}")
elif opsi == "3" :
    z = x * y
    print(f"Hasilnya adalah : {z}")
elif opsi == "4" :
    z = x/y
    print(f"Hasilnya adalah : {z}")
else:
    print("Mohon masukkan input dengan benar !")

Checker(z)

