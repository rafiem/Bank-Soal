import os

f = open("random_string_123.txt").read().split("\n")
for i in f:
  cmd = "steghide extract -sf quote.jpg -p %s " %(i.replace("\r",""))
  os.system(cmd)