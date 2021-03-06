#sera necessario instalar alguns módulos para funcionar, sendo eles:
#pyautogui
#pyperclip
#panda
#openpyxl

import pyautogui
import pyperclip
from time import sleep

# tempo/delay
pyautogui.PAUSE = 1

# Passo 1: Entrar no sistema da empresa: (qualquer link)
pyautogui.press('win')
pyautogui.write('Chrome')
pyautogui.press('enter')
pyperclip.copy('caminho.123') #coloque aqui o link que você deseja abrir
pyautogui.hotkey('ctrl', 'v')
pyautogui.press('enter')

# Carregar o sistema (demorar quantos segundos for preciso)
sleep(3)

# Passo 2: Navegar no sistema (até o local do arquivo de vendas)
pyautogui.click(x=336, y=305, clicks=2)
sleep(2)

# Passo 3: Baixar o arquivos de vendas
pyautogui.click(x=387, y=387) #clicar no arquivo
pyautogui.click(x=1714, y=190) #clicar nos 3 pontos
pyautogui.click(x=1472, y=621) #clicar em download
sleep(2) #esperando download

# Passo 4: Importar a base para o python
import pandas as pd
import openpyxl

# coloque aqui a caminho do arquivo excel desejado:
tabela = pd.read_excel(r'C:\Users\xxxx\...\arquivo.xlsx') #o "r" no começo diz pro python não ler atalho nenhum

# Passo 5: Calcular o faturamento e quantidade de produtos vendidos (os incadores)
faturamento = tabela['Valor Final'].sum()
qtde_produtos = tabela['Quantidade'].sum()

# Passo 6: Enviar email para diretoria (email da diretoria)
pyautogui.press('win')
pyautogui.write('email')
pyautogui.press('enter')
sleep(2)
pyautogui.hotkey('ctrl', 'n')
pyautogui.write('email@email.com') #insira o email desejado aqui
pyautogui.press('tab')
pyautogui.press('tab')
pyautogui.press('tab')
pyautogui.write('Vendas')
pyautogui.press('enter')
pyautogui.write(f'''Prezados chefinhos!!!
Segue o total de faturamento e qauntidade de protudos vendidos:
Foram vendidos {qtde_produtos:,} produtos.
O faturamento foi de R${faturamento:,.2f}.
Tenham um ótimo dia :)''') # o ',' serve para separar o milhar.
pyautogui.click(x=1821, y=52)

#caso a resolução do monitor for diferente de 1920x1080, usar o 'pyautogui.position()' para substituir o local que havera o click do mouse.