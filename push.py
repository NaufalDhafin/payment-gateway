import os

nama = input("Text Commit : ")
os.system(f'git commit -m "{nama}"')
os.system('git add .')
os.system('git push')