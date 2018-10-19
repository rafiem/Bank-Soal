from random import randint

def kunci(str,pad):
  key1 = randint(0,13)
  key2 = randint(13,37)
  print(key1,' ',key2)
  frag = [str[i:i+pad] for i in range(0, len(str), pad)]
  i = 0
  res = []
  for aug in frag:
    if i % 2 == 0:
      k = key1
    else:
      k = key2
    i += 1
    res.append("".join(chr(ord(s) ^ k) for s in aug))
    print(i)
  return res

encrypted = ['*Mnx\x7fp*', "'{sHHd|", 'd;dgTTh', "engc'pe", '?{c~e*v']