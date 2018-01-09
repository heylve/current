rem xcopy /y/s/e c:\Users\VALLET-03846\Documents\Current W:\DRHM\PINF\SDI\Commun\Luc\Current

rsync -ar --progress --exclude-from 'exclude-list.txt' --no-p --chmod=ugo=rwX /cygdrive/c/Users/VALLET-03846/Documents/Current/ /cygdrive/W/DRHM/PINF/SDI/Commun/Luc/Current/ --delete
