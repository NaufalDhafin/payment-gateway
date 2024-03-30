import os

nama = input("Text Commit : ")
os.system('git add .')
os.system(f'git commit -m "{nama}"')
os.system('git push')