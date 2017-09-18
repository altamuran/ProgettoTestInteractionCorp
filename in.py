#!/usr/bin/env python

import random as ran 

stringa="00000"
from datetime import date
import time
#genera codice 
stringa+=str(ran.randint(1,9))
stringa+='X'


flag = ran.randint(0,1)

if flag==0:
	stringa+=str(ran.randint(1,100))
else:
	stringa+='Y0'
	stringa+=str(ran.randint(1,9))

stringa+='X'


stringa+=str(date.today())
stringa+='X'


stringa+=str(time.strftime("%H:%M:%S"))
stringa+='XRilevazioneRANDOM'
file = open("C:\Users\USER\wa\InteractionCorp\rilevazione.txt","w")
file.write(stringa)
file.close()


