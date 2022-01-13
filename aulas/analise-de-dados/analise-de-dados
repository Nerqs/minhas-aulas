# Para resolver qualquer problema use LÓGICA!!!

# Primeiro importe a base de dados:
import pandas as pd

tabela = pd.read_csv('telecom_users.csv')

# Veja o conteudo da base da dados:

# Faça o tratamento da base de dados (corrija erros da base de dados):
# remova informações que não te ajudam só vão te atrapalhar
tabela = tabela.drop('Unnamed: 0', axis=1) #precisa de 2 valores para deletar, o nome e o sentido, axis=0 para linha axis=1 para coluna.

# valores reconhecidos de forma errada
# 'print(tabela.info())' para visualizar os dados de forma mais facil
# havia um erro na coluna total gasto, estava como object mas tem que ser float, resolver
tabela['TotalGasto'] = pd.to_numeric(tabela['TotalGasto'], errors='coerce') # o errors='coerce' deixa o espaço vazio caso não de para transformar em float.

# tratar os valores vazios (NaN)
tabela = tabela.dropna(how='all', axis=1) # exclui as colunas vazias, 'how=all' para excluir colunas completamentes vazia, 'how=any' para excluir colunas com algum valor fazio.
tabela = tabela.dropna(how='any', axis=0) # esta 'any' pq estou procurando um dado especifico, e se caso não tiver ele a linha é inutil.

# Faça uma analise inicial priorizando o problema:
print(tabela['Churn'].value_counts()) # conta os dados
print(tabela['Churn'].value_counts(normalize=True).map('{:.2%}'.format)) # exibe o percentual dos dados contados

# Faça a analise detalhada:
# procure padrões na analise
import plotly.express as px # módulo usado para tabelas de analise

for coluna in tabela.columns:
    grafico = px.histogram(tabela, x=coluna, color='Churn') # cria o grafico, precisa de 3 infos, a tabela para analise, x=, color=.
    # para editar os grafico acesse: https://plotly.com/python/histograms/
    grafico.show() # exibe o grafico
# analise os dados com diferenças grandes