err_input="X03" #errore presente nella stringa
string ="null"  #conterrà la descrizione dell'errore

#apertura del file error.txt (dizionario degli errori)
file = open("error.txt","r")
line= file.readline()

while line:
	if (line[:3]==err_input):
		string = line[5:]
		break
	line=file.readline()
		
file.close()
print(string)



