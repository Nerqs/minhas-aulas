#Use lógica para montar seu script

#Pegar o valor do dolar na web:
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By

#caso queira que funcione em backgorund use essas duas linhas
opcoes = webdriver.ChromeOptions() 
opcoes.headless = True
#criando o navegador
navegador = webdriver.Chrome(options=opcoes)

#Pegar o valor do dolar na web: inspecione a pagina para localizar o Xpath e ver o nome do atributo que você quer.
navegador.get('https://www.google.com.br/')
navegador.find_element(By.XPATH, '/html/body/div[1]/div[3]/form/div[1]/div[1]/div[1]/div[2]/div[2]/input').send_keys('cotação dolar')
navegador.find_element(By.XPATH, '/html/body/div[1]/div[3]/form/div[1]/div[1]/div[1]/div[2]/div[2]/input').send_keys(Keys.ENTER)
cotacao_dolar = navegador.find_element(By.XPATH, '//*[@id="knowledge-currency__updatable-data-column"]/div[1]/div[2]/span[1]').get_attribute('data-value')
print(cotacao_dolar)

#Pegar o valor do euro na web:
navegador.get('https://www.google.com.br/')
navegador.find_element(By.XPATH, '/html/body/div[1]/div[3]/form/div[1]/div[1]/div[1]/div[2]/div[2]/input').send_keys('cotação euro')
navegador.find_element(By.XPATH, '/html/body/div[1]/div[3]/form/div[1]/div[1]/div[1]/div[2]/div[2]/input').send_keys(Keys.ENTER)
cotacao_euro = navegador.find_element(By.XPATH, '//*[@id="knowledge-currency__updatable-data-column"]/div[1]/div[2]/span[1]').get_attribute('data-value')
print(cotacao_euro)

#Pegar o valor do ouro na web: o site pega o valor mas com virgula, os outros estão com ponto, trocar para ponto
navegador.get('https://www.melhorcambio.com/ouro-hoje')
cotacao_ouro = navegador.find_element(By.XPATH, '//*[@id="comercial"]').get_attribute('value')
cotacao_ouro = cotacao_ouro.replace(',', '.')
navegador.quit()
print(cotacao_ouro)

#Importar e atualizar a base de dados:
import pandas as pd

tabela = pd.read_excel('Produtos.xlsx')
tabela.loc[tabela['Moeda'] == 'Dólar', 'Cotação'] = float(cotacao_dolar) #.loc para localizar, infos colque 'linha, coluna'
tabela.loc[tabela['Moeda'] == 'Euro', 'Cotação'] = float(cotacao_euro)
tabela.loc[tabela['Moeda'] == 'Ouro', 'Cotação'] = float(cotacao_ouro)

tabela['Preço de Compra'] = tabela['Preço Original'] * tabela['Cotação'] # atualizando as outras colunas
tabela['Preço de Venda'] = tabela['Preço de Compra'] * tabela['Margem']

#Salvar externamente a base de dados:
tabela.to_excel(r'C:\Users\xxxx\xxxxxx\xxxxx\Novo Produtos.xlsx', index=False) #use o caminho que desejar